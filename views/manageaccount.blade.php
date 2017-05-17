@extends('base') @section('browsertitle') DebtIt! | Account Settings @stop @section('content')
<div class="x_title">
    <h2>Edit My Account Credentials</h2>
    <ul class="nav navbar-right panel_toolbox">
        <li><a href="/" class="close-link"><i class="fa fa-close"></i></a>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
<div class="x_content">
    <br />
    <?php
                        if(isset($_SESSION['successmsg'])){?>
        <div class="sucess sucess-warning" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            <ul>


                <li>
                    <?php echo $_SESSION['successmsg']; ?>
                </li>


            </ul>
        </div>
        <?php unset($_SESSION['successmsg']); }?>
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/manage/{{$UserId}}" method="post">

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Name <span class="required">*</span>
                        </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="username" id="username" value="{{$UserName}}" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">New Password  <span class="required">*</span>
                        </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm New Password <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="verify_password" class="form-control col-md-7 col-xs-12" required="required" type="password" name="verify_password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <a href="/" class="btn btn-primary">Cancel</a>
                    <button class="btn btn-primary" type="submit">Reset</button>
                </div>
            </div>

        </form>
</div>
@stop
