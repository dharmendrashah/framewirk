<?php
//autodetecting binaries
$ffmpeg = FFMpeg\FFMpeg::create(array(
    'ffmpeg.binaries'  => 'bin/ffmpeg.exe',
    'ffprobe.binaries' => 'bin/ffprobe.exe',
    'ffplay.binaries' => 'bin/ffplay.exe',
    'timeout'          => 3600, // The timeout for the underlying process
    'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
), $logger);
$video = $ffmpeg->open('./data/video/1.mkv');
$video
    ->filters()
    ->resize(new FFMpeg\Coordinate\Dimension(320, 240))
    ->synchronize();
$video
    ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
    ->save('frame.jpg');
$video
    ->save(new FFMpeg\Format\Video\X264(), './exportedVideo/export-x264.mp4')
    ->save(new FFMpeg\Format\Video\WMV(), './exportedVideo/export-wmv.wmv')
    ->save(new FFMpeg\Format\Video\WebM(), './exportedVideo/export-webm.webm');