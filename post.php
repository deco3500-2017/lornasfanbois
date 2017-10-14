<?php
    /**
     * Created by PhpStorm.
     * User: Digby
     * Date: 26/09/2017
     * Time: 12:27 PM
     */

    /**
     * The actual form that the person posting is going to see
     */


    include_once "processingDocuments/dbConnect.inc";
    include "includes/header.inc";
    include "processingDocuments/postFunctions.inc";

    // head
    echo "
    <title>Post</title>
    <script src='js/postjs.js'></script>
    </head>";

    // body
    echo "
    <body>
    ";

    include "includes/mainNavigation.inc";

    // post form
    echo "
    <h1>Post</h1>
    <div id='postFormContainerDiv' style='position: absolute;'>
    
    <form action='processingDocuments/postHandler.php' method='post'>
    
    <label for='title'>Title<span class='requiredField'>*</span></label> <input type='text' required id='title' name='title' /> <br />
    <label for='topic'>Topic<span class='requiredField'>*</span> </label> <input type='text' id='topic' name='topic' /> <br/>
    <label for='summary'>Summary<span class='requiredField'>*</span> </label> <input type='text' id='summary' name='summary' /><br/>
    <label for='anonymous' title='I would like my post to be anonymous'>Anonymous</label> <input type='checkbox' id='anonymous' name='anonymous' title='I would like my post to be anonymous' /><br/>
    <label for='postBody'>Your post</label><br/>
    <textarea id='postBody' name='postBody'></textarea><br/>
    
    <img id='addTag' src='images/tag.svg' title='Tag your post to help people find it'  height='20px' />
    
    
    
    <br />
    <input type='submit' name='submit' />
    
</form>
    
    </div>
    ";


    // closing tags

    echo "
    <script src='js/centreDiv.js'></script>
    ";

    include "includes/closingTags.inc";