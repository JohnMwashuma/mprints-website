<?php

if((DebtIt\Auth\LoggedIn::user()) && (DebtIt\Auth\LoggedIn::user()->user_role == 'roleA'))
{
//Home Page Route
$router->map('GET', '/', 'DebtIt\Controllers\RoutingController@getShowHomePage', 'home');
    
//Customer List Route
$router->map('GET', '/customers', 'DebtIt\Controllers\RoutingController@getShowCustomerPage', 'customers');

//Debt Status Routes
$router->map('GET', '/debtstatus', 'DebtIt\Controllers\RoutingController@getShowCustomerDebtStatusPage', 'debtstatus');
$router->map('GET', '/debtstatusform', 'DebtIt\Controllers\RoutingController@getShowDebtAccountstatusformPage', 'debtstatusform');
$router->map('POST', '/debtstatusform', 'DebtIt\Controllers\RoutingController@getPostDebtAccountstatusformPage', 'debtstatusform_post');  

//User Profile Routes
$router->map('GET', '/manage/[i:id]', 'DebtIt\Controllers\RegisterController@getShowManagePage', 'manage');
$router->map('Post', '/manage/[i:id]', 'DebtIt\Controllers\RegisterController@PostUpdateUser', 'manage_post');

//Debt Accouts Routes
$router->map('GET', '/loan', 'DebtIt\Controllers\RoutingController@getShowDebtAccountdetailsPage', 'loan');
$router->map('POST', '/newdebt', 'DebtIt\Controllers\RoutingController@getPostDebtAccountdetailsPage', 'newdebt');
$router->map('GET', '/debtaccounts', 'DebtIt\Controllers\RoutingController@getShowDebtAccountsPage', 'debtaccounts'); 
}
elseif(DebtIt\Auth\LoggedIn::user())
{

//Home Page Route
$router->map('GET', '/', 'DebtIt\Controllers\RoutingController@getShowDebtAccountsPage', 'home');

//Debt Accouts Routes
$router->map('GET', '/loan', 'DebtIt\Controllers\RoutingController@getShowDebtAccountdetailsPage', 'loan');
$router->map('POST', '/newdebt', 'DebtIt\Controllers\RoutingController@getPostDebtAccountdetailsPage', 'newdebt');
$router->map('GET', '/debtaccounts', 'DebtIt\Controllers\RoutingController@getShowDebtAccountsPage', 'debtaccounts'); 
    
//User Profile Routes
$router->map('GET', '/manage/[i:id]', 'DebtIt\Controllers\RegisterController@getShowManagePage', 'manage');
$router->map('Post', '/manage/[i:id]', 'DebtIt\Controllers\RegisterController@PostUpdateUser', 'manage_post');
}



//Login and SignUp routes
$router->map('GET', '/login', 'DebtIt\Controllers\AuthenticationController@getLoginPage', 'login');
$router->map('GET', '/logout', 'DebtIt\Controllers\AuthenticationController@getLogout', 'logout');
$router->map('POST', '/login', 'DebtIt\Controllers\AuthenticationController@postShowLoginPage', 'login_post');
$router->map('GET', '/login#signup', 'DebtIt\Controllers\AuthenticationController@getLoginPage', 'login#signup');
$router->map('POST', '/register', 'DebtIt\Controllers\RegisterController@postRegisterPage', 'register');


//404 route
$router->map('GET', '/page-not-found', 'DebtIt\Controllers\RoutingController@getShow404', '404');

$router->map('GET', '/db', 'DebtIt\Controllers\RegisterController@getDebtItDb', 'db');
