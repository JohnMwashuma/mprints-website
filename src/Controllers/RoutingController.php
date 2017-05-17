<?php

namespace DebtIt\Controllers;

use DebtIt\Validation\Validator;
use duncan3dc\Laravel\BladeInstance;
use DebtIt\Models\tbl_users;
use DebtIt\Auth\LoggedIn;
use DebtIt\Models\tbl_due_listing;
use DebtIt\Models\tbl_profiles;

 class RoutingController extends BaseController 
 {
     
   public function getShowHomePage(){       
      $userid = LoggedIn::user()->id;
      $username = LoggedIn::user()->username;
     
        $debtors = tbl_due_listing::all(array('cust_name','cust_id','cust_acno','cust_mobile_number','loan_amount','loan_balance','loan_issue_date','loan_due_date'));
     // $debtors = tbl_due_listing::All();
      echo $this->blade->render("index", ['UserId' => $userid, 'UserName' => $username, 'debtors' => $debtors]);
   }
     public function getShowCustomerPage(){
          $username = LoggedIn::user()->username;
         $userid = LoggedIn::user()->id;
         $users = tbl_users::all(array('username','user_role','created_at'));
          echo $this->blade->render("customers", ['UserId' => $userid, 'UserName' => $username, 'users' => $users]);      
   }
    
     public function getShowDebtAccountstatusformPage(){
          $username = LoggedIn::user()->username;
         $userid = LoggedIn::user()->id;
          echo $this->blade->render("debtaccntstatus", ['UserId' => $userid, 'UserName' => $username]);      
   }  
     public function getPostDebtAccountstatusformPage(){
          $validation_data = [
             "national_id" => "min:8",
             "mobile_number" => "min:10|num",            
             "batch_numbers" => "min:3",
             "clearing_mpesa_trans_id" => "min:3"             
         ];
         //Validate data
         
         $validator = new Validator;
         $errors = $validator->IsValid($validation_data);
         
         //if validation fails go back to register
         
         if(sizeof($errors) > 0){
             $_SESSION['msg'] = $errors;
            header("Location: /debtstatusform");
             exit;
         }
         
         //Save Posted Data to Database
         $tbl_profiles = tbl_profiles::count();
         $debtstatus = new tbl_profiles;
         $debtstatus->id = $tbl_profiles + 1;
         $debtstatus->national_id = $_REQUEST['national_id'];
         $debtstatus->mobile_number = $_REQUEST['mobile_number'];
         $debtstatus->batch_numbers = $_REQUEST['batch_numbers'];
         $debtstatus->clearing_mpesa_trans_id = $_REQUEST['clearing_mpesa_trans_id'];        
         $debtstatus->date_cleared = $_REQUEST['date_cleared']; 
         
         if (isset($_REQUEST['status'])){
            $debtstatus->fully_cleared = $_REQUEST['status']; // Displays value of checked checkbox.
            }
         
         $debtstatus->save();
         
        
             header("Location: /debtstatus");
             exit();
     
             
   } 
     public function getShowDebtAccountdetailsPage(){
          $username = LoggedIn::user()->username;
         $userid = LoggedIn::user()->id;
          echo $this->blade->render("debtaccountsform", ['UserId' => $userid, 'UserName' => $username]);      
   } 
     public function getPostDebtAccountdetailsPage(){
         
           $validation_data = [
             "cust_name" => "min:3",
             "cust_id" => "min:8|num",
             "cust_acno" => "min:3|num",
             "cust_mobile_number" => "min:10|num",
             "loan_amount" => "num",
             "loan_balance" => "num"             
         ];
         //Validate data
         
         $validator = new Validator;
         $errors = $validator->IsValid($validation_data);
         
         //if validation fails go back to register
         
         if(sizeof($errors) > 0){
             $_SESSION['msg'] = $errors;
            header("Location: /loan");
             exit;
         }
         
         //Save Posted Data to Database
         $tbl_due_listing = tbl_due_listing::count();
         $debtaccnt = new tbl_due_listing;
         $debtaccnt->id = $tbl_due_listing + 1;
         $debtaccnt->cust_name = $_REQUEST['cust_name'];
         $debtaccnt->cust_id = $_REQUEST['cust_id'];
         $debtaccnt->cust_acno = $_REQUEST['cust_acno'];
         $debtaccnt->cust_mobile_number = $_REQUEST['cust_mobile_number'];
         $debtaccnt->loan_amount = $_REQUEST['loan_amount'];
         $debtaccnt->loan_balance = $_REQUEST['loan_balance'];
         $debtaccnt->loan_issue_date = $_REQUEST['loan_issue_date'];
         $debtaccnt->loan_due_date = $_REQUEST['loan_due_date'];       
         $debtaccnt->save();
         
        
             header("Location: /");
             exit();
     
             
   } 
     public function getShowDebtAccountsPage(){
          $username = LoggedIn::user()->username;
          $userid = LoggedIn::user()->id;
         $mydebtoraccnts = tbl_due_listing::where('cust_name', '=', $username)->get();
          //$mydebtoraccnts = tbl_due_listing::where('cust_name', '=', $username)->take(array('cust_name','cust_id','cust_acno','cust_mobile_number','loan_amount','loan_balance','loan_issue_date','loan_due_date'));
          echo $this->blade->render("Alldebtaccounts", ['UserId' => $userid, 'UserName' => $username, 'mydebtoraccnts' => $mydebtoraccnts]);       
   }   
     public function getShowCustomerDebtStatusPage(){
          $username = LoggedIn::user()->username;
         $userid = LoggedIn::user()->id;
          $debtorstatus = tbl_profiles::all(array('national_id','mobile_number','batch_numbers','clearing_mpesa_trans_id','date_cleared','fully_cleared'));
          echo $this->blade->render("customerstatus", ['UserId' => $userid, 'UserName' => $username, 'debtorstatus' => $debtorstatus]);       
   } 
     public function getShow404(){         
          echo $this->blade->render("page-not-found");       
   }   
    
   
  
}
