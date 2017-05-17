<?php

namespace DebtIt\Validation;

use Respect\Validation\Validator as Valid;

class Validator {
public function IsValid($validation_data){
    $errors = [];
    
    foreach($validation_data as $name => $value){
        
        $rules = explode("|", $value);
        
                foreach($rules as $rule){
                $exploded = explode(":", $rule);

                    if(isset($_REQUEST[$name])){
                        switch($exploded[0]){
                            case 'min':
                                $min = $exploded[1];
                        if(Valid::stringType()->length($min, null)->validate($_REQUEST[$name]) == false){
                             $errors[] = "The " . $name . " must be at least " . $min . " characters long!";
                         }
                                break; 
                            case 'strong':
                                $strong= $exploded[1];
                        if(Valid::stringType()->length($strong, null)->validate($_REQUEST[$name]) == false){
                             $errors[] = "The " . $name . " must be at least " . $strong . " characters long!";
                         }
                                break;
                            case 'equalTo':
                                $confirm_passwordval = $exploded[1];
                            if(Valid::equals($_REQUEST[$name])->validate($_REQUEST[$confirm_passwordval]) == false){
                             $errors[] = "Password and Verify Password do not match!";
                         }
                                break;
                            case 'unique':
                                $model = "DebtIt\\Models\\" . $exploded[1];
                                $table = new $model;
                                $results = $table::where($name, '=', $_REQUEST[$name])->get();
                                foreach($results as $item){
                                     $errors[] = $_REQUEST[$name] . " already exists in this system!";
                                }
                                break; 
                            case 'num':
                                if(Valid::numeric()->validate($_REQUEST[$name]) == false){
                             $errors[] = "The " . $name . " must be numeric ";
                                }
                                break;
                                
                            default;

                        }

                    }else{
                        $errors[] = "No value found!";
                    }
            }

        
    }
    return $errors;
}
}
