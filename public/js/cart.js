//Onload => Get the number of categories to show in cart icon
window.addEventListener("load", refreshNumInCart(-1));

//Add cake to cart
function addToCart(id_user, id_cake){
    //Check login
    if(id_user==0){
        launch_toast("Please login to use cart!");
        return;
    }

    //Get url of server to run 'localhost:81/cart/add...'
    var documentRoot = document.getElementById("documentRootId").innerText;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){

            //Get result from function add() in CartController
            var reponse = JSON.parse(this.response);

            if(reponse.isSuccess){//Adding is successful
                refreshNumInCart(reponse.numInCart);//Update on cart icon
                launch_toast("Add to cart succsessfully!");
            }
            else{//Adding is failed
                launch_toast("Add to cart failed!");
            }
        }
    }

    //Call funtion add() in CartController
    xhttp.open("GET", `${documentRoot}/cart/add?userId=${id_user}&cakeId=${id_cake}`, true);
    xhttp.send();
}

//Update the number of categories in cart icon
function refreshNumInCart(num){
    if(num == -1){//Onload => param = -1
        var documentRoot = document.getElementById("documentRootId").innerText;
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function(){
            if(this.readyState==4 && this.status==200){
                //Get result = result of function amountIncart() in CartController
                document.getElementById("numInCartId").innerText = this.responseText;
            }
        }
        //Call function amountInCart() in CartController
        xhttp.open("GET", `${documentRoot}/cart/amountInCart`, true);
        xhttp.send();
    }
    else{//Add to cart => new result = param 'num'
        document.getElementById("numInCartId").innerText = num;
    }
}


//Show message that adding cakes to cart is successful or failed
function launch_toast(message) {
    var x = document.getElementById("toast")
    document.getElementById("desc").innerText = message;
    x.className = "show";
    setTimeout(function(){ 
        x.className = x.className.replace("show", ""); 
    }, 5000);
}