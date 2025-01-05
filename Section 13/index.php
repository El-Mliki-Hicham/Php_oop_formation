
<?php

require_once 'functions.php';


$contact = new Contact("test@mail.com");
echo $contact->getEmail();