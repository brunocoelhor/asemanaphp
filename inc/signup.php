<<<<<<< HEAD
<?php

	// Configuration 
    $to = "name@example.com"; // Your email address. 
    $subject = "New signup via the Signup Landing Page"; // Email subject line 
    
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name']; 
    $headers = "From: $from";

    $fields = array();
    $fields{"name"} = "Name";
    $fields{"email"} = "Email"; 

    $body = "Details:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
=======
<?php

	// Configuration 
    $to = "name@example.com"; // Your email address. 
    $subject = "New signup via the Signup Landing Page"; // Email subject line 
    
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name']; 
    $headers = "From: $from";

    $fields = array();
    $fields{"name"} = "Name";
    $fields{"email"} = "Email"; 

    $body = "Details:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
>>>>>>> f0e61b6c3483785f0ae619e9e760ce5f92a9b80a
