@extends('base') @section('browsertitle') DebtIt! | All Debt Accounts @stop @section('content') @section('css')
<style>
    .panel_toolbox>li>a {
        padding: 5px;
        color: #ffffff;
        background-color: #2C3E50;
        border-color: #2C3E50;
        font-size: 14px;
    }
    
    .panel_toolbox>li>a:hover {
        color: #ffffff;
        background-color: #2C3E50;
    }

</style>
@stop
<div class="x_title">
    <h2>Your Debt Accounts</h2>
    <ul class="nav navbar-right panel_toolbox">
        <li>
            <a class="btn blue-chambray margin-left-20" href="/loan"> <i class="fa fa-plus"></i> Add New Account </a>
        </li>

    </ul>
    <div class="clearfix"></div>
</div>
<div class="x_content">
    <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>ID</th>
                <th>Account</th>
                <th>Mobile No</th>
                <th>Loan Amount</th>
                <th>Loan Balance</th>
                <th>Loan Issue Date</th>
                <th>Loan Due Date</th>

            </tr>
        </thead>


        <tbody>
            @foreach($mydebtoraccnts as $mydebtoraccnt)
            <tr>
                <td>{{$mydebtoraccnt->cust_name}}</td>
                <td>{{$mydebtoraccnt->cust_id}}</td>
                <td>{{$mydebtoraccnt->cust_acno}}</td>
                <td>{{$mydebtoraccnt->cust_mobile_number}}</td>
                <td>{{$mydebtoraccnt->loan_amount}}</td>
                <td>{{$mydebtoraccnt->loan_balance}}</td>
                <td>{{$mydebtoraccnt->loan_issue_date}}</td>
                <td>{{$mydebtoraccnt->loan_due_date}}</td>
            </tr>
            @endforeach



        </tbody>
    </table>
</div>
@stop
