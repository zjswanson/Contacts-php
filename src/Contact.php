<?php

    class Contact
    {
        private contactName;
        private phone;
        private address;

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
            $this->contactName = $contactName
        }

        function getPhone()
        {
            return $this->phone;
        }
        function setPhone($phone)
        {
            $this->phone = $phone
        }

        function getAddress()
        {
            return $this->address;
        }
        function setAddress($address)
        {
            $this->address = $address
        }

        function saveContact()
        {
            array_push($_SESSION['list_of_contacts'],$this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }

    }



?>
