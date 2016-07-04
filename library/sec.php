<?php 
session_start();
if(isset($_SESSION["username"])){
    switch ($sec_level) {
    case 1: //the user has to be admin
        if (1 == $_SESSION["level"])
        {
           header("Location: user.php"); //send the user to the user area
        }
        break;
    case 2: //the user has to be regular user
        include 'connecdtdb.php'; //connect to the database
        $results = $mysqli->query("SELECT * FROM corp_maps where corp_id like ".$_SESSION["id"]." "); //check if the user has access to the map
        $row_cnt = $results->num_rows;
        if ($row_cnt == 0) //if the count is 0 that means the map is not related to the user
        { 
            header("Location: user.php"); //send user to his user area
        }
                
        break;        
    };
}else{
	header("Location: login.php"); //as the user is not logged in send to login page
}

?>