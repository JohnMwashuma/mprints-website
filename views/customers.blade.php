@extends('base') @section('browsertitle') DebtIt! | All Customers @stop @section('content')
<div class="x_title">
    <h2>All Customers Accounts Information</h2>

    <div class="clearfix"></div>
</div>
<div class="x_content">
    <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Customer Role</th>
                <th>Date Created</th>

            </tr>
        </thead>


        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->username}}</td>
                <td>{{$user->user_role}}</td>
                <td>{{$user->created_at}}</td>
            </tr>
            @endforeach



        </tbody>
    </table>
</div>
@stop
