<?php
include("loaders/ContactLoader.php");
include("models/Contact.php");

$file = fopen("employee.txt","w+");

foreach(load() as $contact)
{
    print($contact->To_CSV());
    fwrite($file,$contact->To_CSV());
}
fclose($file);
