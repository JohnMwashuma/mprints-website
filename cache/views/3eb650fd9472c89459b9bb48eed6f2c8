<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DebtIt! | Login</title>

    <!-- Bootstrap -->
    <link href="https://colorlib.com/polygon/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://colorlib.com/polygon/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="https://colorlib.com/polygon/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="https://colorlib.com/polygon/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form name="loginform" id="loginform" action="/login" method="post">
                        <h1>Login Form</h1>

                        <?php
                        if(isset($_SESSION['loginmsg'])){?>
                            <div class="alert alert-warning" role="alert">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Error:</span>
                                <ul>


                                    <li>
                                        <?php echo $_SESSION['loginmsg']; ?>
                                    </li>


                                </ul>
                            </div>
                            <?php unset($_SESSION['loginmsg']); }?>
                            <div>
                                <input name="username" id="username" type="text" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                                <button id="send" type="submit" class="btn btn-default">Log In</button>

                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">New to User?
                                    <a href="#signup" class="to_register"> Create Account </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><i class="fa fa-paw"></i> DebtIt!</h1>
                                    <p>©2017 All Rights Reserved. DebtIt!. Privacy and Terms</p>
                                </div>
                            </div>
                    </form>
                </section>
            </div>
            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form action="/register" method="post">
                        <h1>Create Account</h1>

                        <?php
                        if(isset($_SESSION['msg'])){?>
                            <div class="alert alert-warning" role="alert">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Error:</span>
                                <ul>
                                    <?php
                            foreach($_SESSION['msg'] as $name => $value){
                            ?>
                                        <li>
                                            <?php echo $value; ?>
                                        </li>
                                        <?php
                            }
                            ?>
                                </ul>
                            </div>
                            <?php unset($_SESSION['msg']); }?>
                            <div>
                                <input id="username" name="username" type="text" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                                <input id="verify_password" name="verify_password" type="password" class="form-control" placeholder="Confirm Password" required="" />
                            </div>
                            <div>
                                <button id="send" type="submit" class="btn btn-default">Submit</button>

                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">Already a member ?
                                    <a href="#signin" class="to_register"> Log in </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><i class="fa fa-paw"></i> DebtIt!</h1>
                                    <p>©2017 All Rights Reserved. DebtIt!. Privacy and Terms</p>
                                </div>
                            </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
