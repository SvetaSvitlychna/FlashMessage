<?php

class FlashMessage{

    public  function setMessage($typeOfMessage,$message){

         $_SESSION[$typeOfMessage] = $message;

         return $message;

    }

    public static function display($typeOfMessage){
        if(isset($_SESSION[$typeOfMessage])){
             echo "<div class='alert alert-{$typeOfMessage}' role='alert'>
             $_SESSION[$typeOfMessage]</div>";
             unset($_SESSION[$typeOfMessage]);}
    }
}
