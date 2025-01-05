<?php


class SMSNotification implements Notification{

    function send($message){
       echo "sms message: $message , has been sending."; 
    }

}




?>