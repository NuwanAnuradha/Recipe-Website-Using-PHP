<?php

function initiateAPI(){
    $url = "https://www.themealdb.com/api/json/v1/1/filter.php?c=Seafood";
    
    $curl = curl_init($url);
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    
    curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,false);
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
    
    //Sending Request
    $result = curl_exec($curl);
    
    //Close Connection
    curl_close($curl);
    
    return $result;
}


function convertIntoArray(){
    
    $result = initiateAPI();
    $responseArray = json_decode($result,true);
    
    return $responseArray;
    
}


?>