<?php

require "./Notification.php";

class NotificationController {
    private Notification $notification;

    public function __construct(Notification $notification) {
        $this->notification = $notification;
    }

    public function sendNotification($message) {
        $this->notification->send($message);
    }
}


?>