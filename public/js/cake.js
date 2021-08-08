function search(key){
    var documentRoot = document.getElementById("documentRootId").innerText;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            var reponse = JSON.parse(this.response);

            if(reponse.isSuccess){
               
                l
            }
            else{
                
            }
        }
    }

    xhttp.open("GET", `${documentRoot}/cakes/search?key=${key}`, true);
    xhttp.send();
}
