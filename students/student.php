<?php

    class Student {
        function Student($cne, $name, $birthDate, $address, $email, $mobile) {
            $this->cne = $cne;
            $this->name = $name;
            $this->birthDate = $birthDate;
            $this->address = $address;
            $this->email = $email;
            $this->mobile = $mobile;
        }

        function check_birth_date() {
            $age = ceil((strtotime(date("d/m/Y")) - $this->birthDate))/60/60/24/365;
        
            if ($age < 15 || $age > 30){
                return false;
            }
            return true;
        }

        function check_name() {
            if(!preg_match("/^[a-zA-Z ]+$/", $this->name)) {
                return false;
            }
            return true;
        }

        function check_email() {
            if(!preg_match("/^[a-zA-Z0-9\.\-_]+@[a-zA-Z0-9]+\.[a-zA-Z]+$/", $this->emailError)) {
                return false;
            }
            return true;
        }

        function check_mobile() {
            if(!preg_match("/^[0-9]{10}$/", $this->mobile)) {
                return false;
            }
            return true;
        }
    }


    

       
        

       