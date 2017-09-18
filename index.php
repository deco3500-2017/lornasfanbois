<?php
    /**
     * Created by PhpStorm.
     * User: Digby
     * Date: 19/09/2017
     * Time: 8:07 AM
     */

    include_once "includes/header.inc";
    require_once "processingDocuments/dbConnect.inc";
    include_once "processingDocuments/postFunctions.inc";

    echo "<title>TeachHub</title>

</head>";

    echo "<body>";

    echo "
    <h1>TeachHub</h1>
    
    ";

    echo "Here:";

    echo "<br />Number of Users: ";
    echo getNumberOfUsers($conn);
    echo "<br /> Number of Schools: ";
    echo getNumberOfScools($conn);
    echo "<br /> Number of posts:";
    echo getNumberOfPosts($conn);






    echo "</body></html>";