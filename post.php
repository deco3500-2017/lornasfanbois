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

    // head
    echo "
    <title>Post</title>
    </head>";

    // body
    echo "
    <body>
    ";

    include "includes/mainNavigation.inc";

    // post form
    echo "
    <form action='processingDocuments/postHandler.php' method='post'>
    <label for='title'>Title<span class='requiredField'>*</span></label> <input type='text' required id='title' name='title' />
    <label for='topic'>Topic<span class='requiredField'>*</span> </label> <input type='text' id='topic' name='topic' /> <br/>
    <label for='summary'>Summary<span class='requiredField'>*</span> </label> <input type='text' id='summary' name='summary' /><br/>
    <label for='anonymous' title='I would like my post to be anonymous'>Anonymous</label> <input type='checkbox' id='anonymous' name='anonymous' title='I would like my post to be anonymous' /><br/>
    <label for='postBody'>Your post</label><br/>
    <textarea id='postBody' name='postBody'></textarea><br/>
    
    <button title='Tag your post'>+</button>
    
    
    <input type='submit' name='submit' />
    
</form>
    
    
    ";


    // closing tags
    echo "</body></html>";