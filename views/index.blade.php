@extends('base') @section('browsertitle') DebtIt! | Home @stop @section('content')
<div class="x_title">
    <h2>All Debtors Accounts Information</h2>

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
            @foreach($debtors as $debtor)
            <tr>
                <td>{{$debtor->cust_name}}</td>
                <td>{{$debtor->cust_id}}</td>
                <td>{{$debtor->cust_acno}}</td>
                <td>{{$debtor->cust_mobile_number}}</td>
                <td>{{$debtor->loan_amount}}</td>
                <td>{{$debtor->loan_balance}}</td>
                <td>{{$debtor->loan_issue_date}}</td>
                <td>{{$debtor->loan_due_date}}</td>
            </tr>
            @endforeach



        </tbody>
    </table>
</div>
@stop
