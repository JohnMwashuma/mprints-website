<?php

namespace DebtIt\Auth;
use DebtIt\Models\tbl_users;

class LoggedIn
{
    public static function user()
    {
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            return $user;
        }else{
            return false;
        }
    }
    
}
