<?php

    function fix_string($string){
        //get_magic_quotes_gpc() removed from PHP8
        $string = stripslashes($string);
        return htmlentities($string);
    }
    function validate_form($email, $username, $password){
        $fail = validate_email($email);
        $fail .= validate_username($username);
        $fail .= validate_password($password);
        if($fail  == ""){
        return true; 
        }else{
            return $fail;
        }
    }
    function validate_email($email){
        if(empty($email)){
            return "No Email was entered.<br>";
        }else if (!((strpos($email, ".") > 0) && (strpos($email, "@") > 0)) || preg_match("/[^a-zA-Z0-9.@_-]/", $email)){
            return "Invalid email<br>";
        }else{
            return "";
        }
    }
    function validate_username($username){
        if(empty($username)){
            return "No username was entered.<br>";
        }else if (strlen($username) <3 || strlen($username) > 15){
            return "Invalid Username. Length should be between 3 and 15 characters.<br>";
        }else if(!(preg_match("/^[A-Za-z_][A-Za-z0-9_]{2,14}$/", $username))){
            return "Invalid Username. Only letters, numbers, underscores are allowed.<br>";
        }else{
            return "";
        }
    }
    function validate_password($password){
        if(empty($password)){
            return "No password was entered.<br>";
        }else if(!(preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@#!%]).{8,}$/", $password))){
            return "Password should be contain more than 8 characters. Only capital and small letters, numbers, and symbols.<br>";
        }else{
            return "";
        }
    }

?>