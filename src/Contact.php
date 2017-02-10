<?php

    class Contact
    {
        private $contactName;
        private $phone;
        private $address;

        function __construct($contactName,$phone,$address)
        {
            $this->contactName = $contactName;
            $this->phone = $phone;
            $this->address = $address;
        }

        function getContactName()
        {
            return $this->contactName;
        }
        function setContactName($contactName)
        {
            $this->contactName = $contactName;
        }

        function getPhone()
        {
            return $this->phone;
        }
        function setPhone($phone)
        {
            $this->phone = $phone;
        }

        function getAddress()
        {
            return $this->address;
        }
        function setAddress($address)
        {
            $this->address = $address;
        }

        function saveContact()
        {
            array_push($_SESSION['list_of_contacts'],$this);
        }

// Hey Diane (or whoever reviews this), I have a question about this method.  Why is it prefereable to use a static method to retreive this data, rather than just entering $_SESSION['list_of_contacts'] when we need to get it?  Shouldn't all our pages have access to the superglobal?  I used this method because we were specifically asked to, but I've directly called the session variable in other apps and it worked fine.  Thanks!
        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }

        static function deleteOne($index)
        {
            array_splice($_SESSION['list_of_contacts'],$index,1);
        }

    }



?>
