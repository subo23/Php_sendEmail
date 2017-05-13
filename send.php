<?php
$to = "keniqd@gmail.com";
$subject = "HTML email";

$message = "
    <html>
    <head>
    <title>Invition for </title>
    </head>

    <body>
    Dear guest<br>   <br>
    You are invited to the conference banquet dinner on <eDate>.  Please kindly RSVP using the links  below by <responseDate>:   
    <br><br>
    Accept the invitation | Decline the invitation | I’ll Decide later
    <br>    
    <br>
    Regards<br>
    Conference Secretariat  	
    </body>
    </html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>