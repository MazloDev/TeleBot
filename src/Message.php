<?php
namespace Src;
use Src\Update;
class Message extends Update {

    public function getText(){
        return $this->message->text;
    }

    public function getMessageId(){
        return $this->message->id;
    }
}