/**
 * Created by Digby on 2/10/2017.
 */




$(document).ready(function () {
    var postFormContainerDiv = document.getElementById("postFormContainerDiv");
    console.log(document.readyState);

    // these ids have been removed, and shouldnt be necessary with bootstrap???
    /*    postFormContainerDiv.style.marginTop = (window.innerHeight / 2 - postFormContainerDiv.offsetHeight / 2) + "px";
        postFormContainerDiv.style.marginLeft = (window.innerWidth / 2 - postFormContainerDiv.offsetWidth / 2) + "px";*/

    var tagImage = document.getElementById("addTag");
    tagImage.addEventListener("click", addTag);



    function addTag() {
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

