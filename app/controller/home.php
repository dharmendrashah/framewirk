<?php
$client = new \GuzzleHttp\Client();

// Send an asynchronous request.
$request = new \GuzzleHttp\Psr7\Request('GET', 'https://api.redtube.com/?data=redtube.Videos.searchVideos&output=json&tags[]=new&page=2');
$promise = $client->sendAsync($request)->then(function ($response) {
    return $response->getBody();
});

$Result = $promise->wait();
//print_r($Result);
//decoding json
$resultDecode = json_decode($Result, true);
//print_r($resultDecode['videos'][0]);
// foreach ($resultDecode['videos'] as $results) {
//    print_r($results);
//    echo "__________________________________New____________________________________________";
// }
$countStart = '0';
$theResult = $resultDecode['videos'];
echo $blade->make('homepage')->with(compact('resultDecode', 'theResult', 'link', 'countStart'))->render();