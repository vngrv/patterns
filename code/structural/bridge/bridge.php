<?php

/**
 * Bridge (Мост) относиться к классу структурных паттернов. 
 * Он используется для отделения абстракции от ее реализации так, 
 * чтобы то и другое можно было изменять независимо.
 */
interface DeviceInterface {
    public function setSender(MessagingInterface $sender);
    public function send($body);
}

interface MessagingInterface {
    public function send($body);
}

abstract class Device implements DeviceInterface {
    protected $sender;
    
    public function setSender(MessagingInterface $sender) {
        $this->sender = $sender;
    }
}

class Phone extends Device {
    public function send($body) {
        $body .= "\n\n Sent from a phone";
        
        return $this->sender->send($body);
    }
}

class Tablet extends Device {
    public function send($body) {
        $body .= "\n\n Sent from a tablet";
        
        return $this->sender->send($body);
    }
}

class Skype implements MessagingInterface 
{
    public function send($body) 
    {
        var_dump($body);
        // API implementation of skype
    }
}

class Telegramm implements MessagingInterface 
{
    public function send($body) 
    {
        var_dump($body);
        // API implementation of telegramm
    }
}

$phone = new Phone;
$phone->setSender(new Telegramm);
$phone->send("Hello dude!");

$tablet = new Tablet;
$tablet->setSender(new Skype);
$tablet->send("Hello dude;");
$tablet->setSender(new Telegramm);
$tablet->send("GG");

