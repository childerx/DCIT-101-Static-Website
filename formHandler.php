<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['structure'];
$message = $_POST['message'];

$email_from = 'zigibut24@gmail.com';

$email_subject = 'New From Submision';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                 "Subject: $subject.\n".
                 "User Message: $message.\n";

$to ='iabu007@st.ug.edu.gh';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: Contact.html");


?>