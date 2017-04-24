<?php
return array(
    "driver" => "smtp",
    "host" => "auth.smtp.1and1.co.uk",
    "port" => 587,
    "from" => array(
        "address" => "noreply@globalsupplyconnections.co.uk",
        "name" => "Testing"
    ),
    "username" => "alessandro.conti@globalsupplyconnections.co.uk",
    "password" => "Hvfc19031987?",
    "sendmail" => "/usr/sbin/sendmail -bs",
    "pretend" => false
);
/*
return array(
    "driver" => "smtp",
    "host" => "smtp.mailtrap.io",
    "port" => 2525,
    "from" => array(
        "address" => "noreply@globalsupplyconnections.co.uk",
        "name" => "Enquiry"
    ),
    "username" => "cc8eaad0851bf9",
    "password" => "cbbe2289d1cbc9",
    "sendmail" => "/usr/sbin/sendmail -bs",
    "pretend" => false
);*/