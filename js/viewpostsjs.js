$(document).ready(function () {
    $(".commentsHeading").click(function () {
        $(this).next().slideToggle();
    });

    // add a listener to the submit buttons of a certain class.

    // commentSubmitButton button class
    // commentTextArea text area

    $(".commentSubmitButton").click(function () {
        var $parentContainer = $(this).parent();
        var $textArea = $(this).parent().find(".commentTextArea");
        var $commentText = $textArea.val();

        $textArea.val("");
        var $postID = $parentContainer.find(".commentID").val();
        var $userEmail = "bob@domain.com";
        console.log("The fields: " + $postID + " " + $userEmail + " " + $commentText);
        $.ajax({
            type: "POST",
            url: "/processingDocuments/commentHandler.php",
            data: {
                postID: $postID,
                userEmail: $userEmail,
                commentText: $commentText
            }
/*            success: function () {
            }*/

        });

    });


});