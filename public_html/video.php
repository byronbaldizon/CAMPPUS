<?php
	https://stackoverflow.com/questions/18779974/how-to-stream-a-mjpeg-video-on-a-website
    // ... some code to get the camera object
    header('Content-Type: multipart/x-mixed-replace; boundary=myboundary');
    ob_end_flush();
    
    //readfile('http://'.$cam->user.':'.$cam->pwd.'@'.$cam->ip.'/stream/video/mgjpeg');
    readfile('http://admin:8612144@192.168.0.19:8080/stream/video/mjpeg');
?>
