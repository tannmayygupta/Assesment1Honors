<?php

date_default_timezone_set('Asia/Kolkata');

function getGreeting() {
    
    $currentHour = date('G');

    if ($currentHour >= 2 && $currentHour <= 11) {

        return "Good Morning";

    } 
    elseif ($currentHour >= 11 && $currentHour <= 16) {
        
        return "Good Afternoon";
    
    } 
    elseif ($currentHour >= 16 && $currentHour <= 21) {
        
        return "Good Evening";
    
    }
    else {

        return "Good Night";
    
    }

}

?>

