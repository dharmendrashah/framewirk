<?php
$client = new \GuzzleHttp\Client();

// Send an asynchronous request.
$request = new \GuzzleHttp\Psr7\Request('GET', 'https://api.redtube.com/?data=redtube.Videos.searchVideos&output=json&search=hard&tags[]=Teen&thumbsize=medium');
$promise = $client->sendAsync($request)->then(function ($response) {
    return $response->getBody();
});

$Result = $promise->wait();
//decoding json
$resultDecode = json_decode($Result, true);
//print_r($resultDecode['videos'][0]);
// foreach ($resultDecode['videos'] as $results) {
//    print_r($results);
//    echo "__________________________________New____________________________________________";
// }

