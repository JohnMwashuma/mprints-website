@extends('base') @section('browsertitle') DebtIt! | Enter Debt Account Status @stop @section('content')
<div class="x_title">
    <h2>Enter Debt Account Status</h2>

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
            <li><a href="/debtstatus" class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
</div>
<div class="x_content">
    <br />
    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/debtstatusform" method="post">

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="national_id">Customer ID <span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="national_id" name="national_id" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile_number">Customer Mobile Number<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="mobile_number" name="mobile_number" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group"><br>
            <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Debt Status<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p>
                    Cleared:
                    <input type="radio" class="flat" name="status" id="status" value="true" checked="" required /> Not Cleared:
                    <input type="radio" class="flat" name="status" id="status" value="false" />
                </p>
            </div>
        </div>
        <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Date Cleared Date<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="date_cleared" class="form-control has-feedback-left" id="single_cal1" placeholder="Date Cleared" aria-describedby="inputSuccess2Status">
                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                <span id="inputSuccess2Status" class="sr-only">(success)</span>

            </div>
        </div>
        <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Batch Numbers<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="batch_numbers" class="form-control col-md-7 col-xs-12" required="required" type="text" name="batch_numbers">
            </div>
        </div>
        <div class="form-group">
            <label for="clearing_mpesa_trans_id" class="control-label col-md-3 col-sm-3 col-xs-12">Mpesa Transaction Id<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="clearing_mpesa_trans_id" class="form-control col-md-7 col-xs-12" required="required" type="text" name="clearing_mpesa_trans_id">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a href="/debtstatus" class="btn btn-primary">Cancel</a>
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </div>

    </form>
</div>
@stop
