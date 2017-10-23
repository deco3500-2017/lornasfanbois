$(document).ready(function () {
    $(".commentsHeading").click(function () {
        $(this).next().slideToggle();
    });

    // add a listener to the submit buttons of a certain class.

    // commentSubmitButton button class
    // commentTextArea text area

    $(".commentSubmitButton").click(function () {
        console.log("The button has been pressed.");
        var $parentContainer = $(this).parent();
        var $textArea = $(this).parent().find(".commentTextArea");
        var $commentText = $textArea.val();
        $textArea.val("");
        var $postID = $parentContainer.find(".commentID").val();
        var $userEmail = "bob@domain.com";
        console.log("The values are: ");
        console.log($postID + ", " + $userEmail + " " + $commentText);
        console.log("Attempting to save...");
        $.ajax({
            type: "POST",
            url: "/processingDocuments/commentHandler.php",
            data: {
                postID: $postID,
                userEmail: $userEmail,
                commentText: $commentText
            },
            success: function (e) {
                console.log("The write has been successful by the looks...");
                console.log(e);
            }

        });

    });


});