<?php

namespace DebtIt\Controllers;

use DebtIt\Validation\Validator;
use DebtIt\Models\tbl_users;
use duncan3dc\Laravel\BladeInstance;
use DebtIt\Auth\LoggedIn;
use DebtIt\Models\tbl_due_listing;

 class RegisterController extends BaseController 
 {    
  
     public function getShowManagePage(){  
         
         $username = "";
         
         //extract userid from url
         $uri = explode("/", $_SERVER['REQUEST_URI']);
         $target = $uri[2];
         
         //find matching user in db
         $user = tbl_users::where('id', '=', $target)->get();
         
         //look up user details
         foreach($user as $item){
             $username = $item->username;
         }
         
         if(strlen($username) == 0){
             header("HTTP/1.0 404 Not Found");
             header("Location: /page-not-found");
             exit();
         }
         
          
         $userid = LoggedIn::user()->id;
         echo $this->blade->render("manageaccount", ['UserId' => $userid, 'UserName' => $username]);
   }      
    
         
     public function postRegisterPage(){
         $validation_data = [
             "username" => "min:3|unique:tbl_users",
             "password" => "strong:3|equalTo:verify_password"
         ];
         //Validate data
         
         $validator = new Validator;
         $errors = $validator->IsValid($validation_data);
         
         //if validation fails go back to register
         
         if(sizeof($errors) > 0){
             $_SESSION['msg'] = $errors;
            header("Location: /login#signup");
             exit;
         }
         
         //Save Posted Data to Database
         $tbl_users = tbl_users::count();
         $user = new tbl_users;
         $user->id = $tbl_users + 1;
         $user->username = $_REQUEST['username'];
         $user->user_role = 'roleB';
         $user->created_at = date('Y-m-d H:i:s');         
         $user->user_password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
         $user->save();
         
         $_SESSION['user'] = $user;
             header("Location: /");
             exit();
     
   }
     
      public function getDebtItDb(){
         
          
          $tbl_user = tbl_users::find(1);
          echo $tbl_user->username;
      }   
     public function PostUpdateUser(){
         
           $validation_data = [
             "username" => "min:3|unique:tbl_users",
             "password" => "strong:3|equalTo:verify_password"
         ];
         //Validate data
         
         $validator = new Validator;
         $errors = $validator->IsValid($validation_data);
         
         //if validation fails go back to register
         
         if(sizeof($errors) > 0){
             $_SESSION['msg'] = $errors;
             $UserId = LoggedIn::user()->id;
            header("Location: /manage/$UserId");
             exit;
         }
         
         //Save Posted Data to Database    
         $user = LoggedIn::user();       
         $user->username = $_REQUEST['username'];      
         $user->user_password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
         $user->update();
         
         $_SESSION['successmsg'] = "You Have Successfully Updated Your Credentials";
              $UserId = LoggedIn::user()->id;
            header("Location: /manage/$UserId");
          unset($_SESSION['successmsg']);
             exit();
      }     
    
  
}