"use strict";
document.addEventListener("DOMContentLoaded", function(){
    var searchbtn = document.getElementById("search-btn")

    searchbtn.addEventListener("click", function()
    {var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            console.log(xhr.responseText)
            if (xhr.readyState == 4 && xhr.status == 200) {
                displayResult(xhr.responseText);;
                console.log(xhr.responseText)
            }
        };
    var url = "superheroes.php";
    xhr.open("GET", url, true);
    xhr.send();})

    


    function displayResult(response) {
        alert(response);
    }

})