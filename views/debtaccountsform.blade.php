@extends('base') @section('browsertitle') DebtIt! | Add Debt Account @stop @section('content')
<div class="x_title">
    <h2>Add a New Debt Account</h2>

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

        <ul class="nav navbar-right panel_toolbox">
            <li><a href="/" class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
</div>
<div class="x_content">
    <br />
    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/newdebt" method="post">

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Customer Name <span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="cust_name" name="cust_name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Customer ID<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="cust_id" name="cust_id" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Account Number<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="cust_acno" class="form-control col-md-7 col-xs-12" required="required" type="text" name="cust_acno">
            </div>
        </div>
        <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Mobile Number<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="cust_mobile_number" class="form-control col-md-7 col-xs-12" required="required" type="text" name="cust_mobile_number">
            </div>
        </div>
        <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Loan Amount<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="loan_amount" class="form-control col-md-7 col-xs-12" required="required" type="text" name="loan_amount">
            </div>
        </div>
        <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Loan Balance<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="loan_balance" class="form-control col-md-7 col-xs-12" required="required" type="text" name="loan_balance">
            </div>
        </div>
        <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Loan Issue Date<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="loan_issue_date" class="form-control has-feedback-left" id="single_cal1" placeholder="Loan Issue Date" aria-describedby="inputSuccess2Status">
                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                <span id="inputSuccess2Status" class="sr-only">(success)</span>

            </div>
        </div>
        <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Loan Due Date<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control has-feedback-left" name="loan_due_date" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a href="/" class="btn btn-primary">Cancel</a>
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </div>

    </form>
</div>
@stop
