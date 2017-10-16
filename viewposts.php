<? php
/**
 * Created by PhpStorm.
 * User: Digby
 * Date: 2/10/2017
 * Time: 3:14 PM
 */
include_once "includes/header.inc";
include_once "processingDocuments/dbConnect.inc";
include_once "processingDocuments/postFunctions.inc";


	echo"<body>";
	include_once "includes/mainNavigation.inc";
	
	echo'<h2>Approved Posts:</h2>';
    printAllApprovedPosts($conn)
    echo'<h2>All posts</h2>';
    printAllPosts($conn)
    

include "includes/closingTags.inc";