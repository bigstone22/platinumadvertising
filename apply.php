<?php

$name = $_Post['name'];
$visitor_email = $_Post['email'];
$email_from = 'stonershajuan@gmail.com';

$email_subject = "new form submission";

$email_body = "user name: $name.\n".
                  "user email: $visitor_email.\n".
                    "user phonenumber: $phonenumber.\n".
                      "user referal: $referal.\n";

$to = "stonershajuan@gmail.com";

mail($to, $email_subject, $email_body)

header("location: apply.html")



?>
