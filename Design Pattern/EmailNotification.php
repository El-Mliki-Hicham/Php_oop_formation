<?php


class EmailNotification implements Notification{

    function send($message){
       echo "email message: $message , has been sending."; 
    }

}




?>