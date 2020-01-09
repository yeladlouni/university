<?php 
    class User {
        function User($username, $password, $password_confirm, $email) {
            $this->username = $username;
            $this->password = $password;
            $this->password_confirm = $password_confirm;
            $this->email = $email;
        }

        function signup() {
            $f = fopen("users.txt", "a");
            fwrite($f, $this->username.";".$this->password.";".$this->email);
            fclose($f);
        }

        function signin() {
            $f = fopen("users.txt", "r");
            while(!feof($f)) {
                $line = fgets($f);
                if($line != "") {
                    $list = explode(";", $line);
                    if($list[0] == $this->email && $list[1] == $this->password ) {
                        return true;
                    }
                }
            }
            return false;
        }

        function check_password() {
            if($this->password == $this->password_confirm) {
                return true;
            }

            return false;
        }

    }
?>