"use strict";

document.addEventListener("DOMContentLoaded", function () {
    var searchbtn = document.getElementById("search-btn");
    var searchtext = document.getElementById("search-input");
    var result = document.getElementById("result");

    searchbtn.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the default form submission

        var xhr = new XMLHttpRequest();

        if (searchtext.value !== "") {
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    displayResult(xhr.responseText);
                }
            };
        } else {
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    displayDefault(xhr.responseText);
                }
            };
        }

        var url = "superheroes.php?query=" + encodeURIComponent(searchtext.value.trim());
        xhr.open("GET", url, true);
        xhr.send();
    });

    function displayResult(response) {
        alert(response)
        var data = JSON.parse(response);
        result.innerHTML = "";

        if (Array.isArray(data) && data.length > 0) {
            var hero = data[0];
            result.innerHTML += '<img src="' + hero.img + '">';
            result.innerHTML += "<h3>" + hero.alias + "</h3>";
            result.innerHTML += "<h4>" + hero.name + "</h4>";
            result.innerHTML += "<p>" + hero.biography + "</p>";
        } else {
            result.innerHTML = "Superhero not found";
        }
    }

    function displayDefault(response) {
        result.innerHTML = response;
    }
});
