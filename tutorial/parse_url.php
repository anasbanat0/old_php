<?php
// Youtube Embed [ https://www.youtube.com/embed/VIDEO_ID ]

$video = 'https://www.youtube.com/watch?v=U89I7ijcVow';

$parsedVideo = parse_url($video, PHP_URL_QUERY);

parse_str($parsedVideo, $myArray);

echo '<iframe src="https://www.youtube.com/embed/'.$myArray['v'].'"></iframe>';

