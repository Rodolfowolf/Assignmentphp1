<?php
 class validate{
    public function checkEmpty($data, $fields){
        $msg = null;
        foreach ($fields as $value){
            if (empty($data[$value])){
                if($value=='fname'){
                    $value="First name";
                }elseif($value=='lname'){
                    $value="Last name";
                }elseif($value=='email'){
                    $value="E-mail";
                }elseif($value=='homepage'){
                    $value="Homepage";
                }elseif($value=='password'){
                    $value="Password";
                }
                $msg .= "<div><p>The field $value couldn't be empty</p></div>";
            }
        }
        return $msg;
    }
    public function validEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }
    public function validHomepage($email){
        if(filter_var($email, FILTER_VALIDATE_URL)){
            return true;
        }
        return false;
    }
 }
?>