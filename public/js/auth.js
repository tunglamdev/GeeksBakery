function checkSignUp(){
    var check=true;

    
    var pass = document.forms["registerForm"]["password"];
    var re_pass = document.forms["registerForm"]["re-password"];
    var email = document.forms["registerForm"]["email"];
    var phone = document.forms["registerForm"]["phone"];
    var address = document.forms["registerForm"]["address"];

    // var patent_pass=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,15}$/;

        
    if(password.value==""){
        document.getElementById('checkPassword').style.display="inline";
        check=false;
    }
    // else if (patent_pass.test(password.value));
    //     else{
    //         document.getElementById('checkpassword').style.display="inline";

    //         check=false;
    //     }
    
    if(email.value==""){
        document.getElementById('checkEmail').style.display="inline";
        check=false;
    }

    if(re_password.value==""){
        document.getElementById('checkPrePassword').style.display="inline";
        check=false;
    }
    else if(re_pass.value != pass.value){
        document.getElementById('checkPrePassword').style.display="inline";
        check=false;
    }

    if(phone.value==""){
        document.getElementById('checkPhone').style.display="inline";
        check=false;
    }

    if(address.value==""){
        document.getElementById('checkAddress').style.display="inline";
        check=false;
    }

    return check;
}

//Check name
function checkName(name){
    if(!name){
        document.getElementById('checkName').style.display="inline";
        alert("sssssss");
    }
    else{
        alert("vvvvvvv");
    }

    alert("mmmmmmmmmmm");
}


//Check email
function checkEmailAddress(email){
    var documentRoot = document.getElementById("documentRootId").innerText;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            var reponse = this.responseText;

            if(reponse==true){
               document.getElementById("checkEmailExist").style.display="inline";
            }
            else{
               document.getElementById("checkEmailExist").style.display="none";
            }
        }
    }
    xhttp.open("GET",`${documentRoot}/accounts/checkEmail?email=${email}`, false);
    xhttp.send();
}