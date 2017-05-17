<?php

namespace DebtIt\Controllers;

use DebtIt\Validation\Validator;
use duncan3dc\Laravel\BladeInstance;
use DebtIt\Models\tbl_users;
use DebtIt\Auth\LoggedIn;

 class AuthenticationController extends BaseController 
 {    
  
       public function getLoginPage(){
       echo $this->blade->render("login");;
   }
     public function postShowLoginPage(){
       $okay = true;
       $username = $_REQUEST['username'];
       $password = $_REQUEST['password'];
         
       //Look up the user
        
       $user = tbl_users::where('username', '=', $username)->first();
         
         if($user!=null){
             //validate user credentials
             if(! password_verify($password, $user->user_password)){
                $okay = false; 
             }
         }else{
             $okay = false;
         }
         
         if($okay)
         {
             $_SESSION['user'] = $user;
             header("Location: /");
             exit();
         }
         else{
             
              $_SESSION['loginmsg'] = "Incorrect Username or Password";
             echo $this->blade->render("login");
             unset($_SESSION['loginmsg']);
             exit();
         }
   }
     public function getLogout(){
         unset($_SESSION['user']);
         session_destroy();
          header("Location: /login");
             exit();
     }
     public function getTestUser(){         
         dd(LoggedIn::user()->username);
        
     }
         
          
    
  
}
