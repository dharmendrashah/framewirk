<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="/node_modules/video.js/dist/video-js.min.css">
        <link rel="stylesheet" href="/dist/bundle.css">


    <title>Crawl website</title>
    <script src="/dist/bundle.js" async></script>
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/node_modules/jq-fakeloader/js/fakeLoader.js"></script>
    <script src="/node_modules/video.js/dist/video.min.js"></script>
</head>
<body>
  <div class="fakeloader"></div>
    @yield('contents')
</body>
<script type="text/javascript">
  $("#fakeLoader").fakeLoader();
</script>
</html>
