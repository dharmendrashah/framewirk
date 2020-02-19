<?php
$client = new \GuzzleHttp\Client();

// Send an asynchronous request.
$request = new \GuzzleHttp\Psr7\Request('GET', 'https://api.redtube.com/?data=redtube.Videos.searchVideos&output=json&search=hard&tags[]=Teen&thumbsize=medium');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo $response->getBody();
});

$promise->wait();