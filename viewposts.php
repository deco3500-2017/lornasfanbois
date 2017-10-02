<?php
    /**
     * Created by PhpStorm.
     * User: Digby
     * Date: 2/10/2017
     * Time: 3:14 PM
     */

    include_once "processingDocuments/dbConnect.inc";
    include_once "processingDocuments/postFunctions.inc";
    include "includes/header.inc";

    echo "<title>View Posts</title>";
    echo "</head>";

    echo "<body>";

    echo "<h2>Approved Posts:</h2>";
    printAllApprovedPosts($conn);
    echo "<h2>All posts</h2>";
    printAllPosts($conn);

    include "includes/closingTags.inc";
