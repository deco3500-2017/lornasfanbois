

$(document).ready(function () {
    // the text on click?
    $(".likeThisPost").click(function () {

        var $postID = $(this).find(".likeInput").val();
        var $userEmail = "someone@domain.com";
        var $thisSpan = $(this);

        $.ajax({
            type: "POST",
            url: "/processingDocuments/likeHandler.php",
            data: {
                postID: $postID,
                userEmail: $userEmail
            },
            success: function () {
                console.log("The like has been successful...");
                var $voteCountDisplayContainer = $thisSpan.parent().find(".voteCount");

                var $value = Number($voteCountDisplayContainer.text()) + 1;
                $voteCountDisplayContainer.text($value);
            }

        });
    });
});