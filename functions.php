<?php

// ****Get cURL resource function
function callcurlget($theurl) {
// start callcurlget

    $curlget = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curlget, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $theurl,
        CURLOPT_USERAGENT => 'fDex'
        ));

    // Send the request & save response to $resp
    $getresp = curl_exec($curlget);
    return$getresp;

    // Close request to clear up some resources
    curl_close($curlget);

//stop callcurlget
}

// ****Post cURL resource function
function callcurlpost() {
// start callcurlpost

    $curlpost = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curlpost, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://testcURL.com',
        CURLOPT_USERAGENT => 'fDex',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => array(
        item1 => 'value',
        item2 => 'value2'
        )
    ));

    // Send the request & save response to $resp
    $postresp = curl_exec($curlpost);
    echo$postresp;

    // Close request to clear up some resources
    curl_close($curlpost);

//stop callcurlpost
}


// ****Convert xml file to an array function
function xmlToArray($xml) {
// start xmlToArray

    $array = json_decode(json_encode($xml), TRUE);

    foreach ( array_slice($array, 0) as $key => $value ) {
        if ( empty($value) ) $array[$key] = NULL;
        elseif ( is_array($value) ) $array[$key] = xmlToArray($value);
        }

    return $array;

//stop xmlToArray
}

// ****Explode and access indexed elements function
function explodeAndIndex($delimiter, $string, $index){
// start explodeAndIndex

    $tempArray = explode($delimiter, $string);
    return $tempArray[$index];
    
// stop explodeAndIndex
}

?>
