/**
 * Created by Digby on 2/10/2017.
 */




$(document).ready(function () {
    var postFormContainerDiv = document.getElementById("postFormContainerDiv");
    console.log("Ready state has changed");
    console.log(document.readyState);


/*    postFormContainerDiv.style.marginTop = (window.innerHeight / 2 - postFormContainerDiv.offsetHeight / 2) + "px";
    postFormContainerDiv.style.marginLeft = (window.innerWidth / 2 - postFormContainerDiv.offsetWidth / 2) + "px";*/

    var tagImage = document.getElementById("addTag");
    console.log("Adding click listener...");
    tagImage.addEventListener("click", addTag);
    console.log("The listener has been added..." );
    console.log(tagImage);


    function addTag() {
        console.log("The button has been pressed");
        var tag = prompt("Enter your tag");

        if (tag === null || tag === "" || tag === " ") {
            return;
        } else {
            var tagImage = document.getElementById("addTag");


            var tagSpan = "<span class='tag'>" + tag + "</span>";
            $(tagSpan + "<input type='hidden' name='tags[]' value='" + tag + "' />").insertAfter("#addTag");
        }


    }
});

