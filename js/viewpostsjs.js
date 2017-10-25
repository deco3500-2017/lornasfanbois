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
        var $thisButton = $(this);

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
            },
            success: function () {


                var $commentContainerDiv = $thisButton.parent().parent();

                $commentContainerDiv.find(".numberOfComments").text("(" + getTheNumber($commentContainerDiv.find(".numberOfComments").text()) + ")");

                var string = "<div><span class='bold'>Posted by:</span> " + $userEmail + "<br />";
                string += "<span class='bold'>Posted at:</span>" + new Date($.now()) + "<br />";
                string += "<span class='bold'>Up votes:</span> 0 <br />";
                string += $commentText;
                string += "</div><hr/>";

                $commentContainerDiv.find(".comments").append($(string));
            }

        });

    });

    /**
     * Returns the number from the number of comments that a post has.
     * */
    function getTheNumber(string) {
        var num = string.split("(")[1];
        console.log("Returning: " + Number(num.split(")")[0]) + 1);
        return (Number(num.split(")")[0])) + 1;
    }


});