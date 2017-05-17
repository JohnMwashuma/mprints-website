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
    <h2>All Customer Debt Status</h2>
    <ul class="nav navbar-right panel_toolbox">
        <li>
            <a class="btn blue-chambray margin-left-20" href="/debtstatusform"> <i class="fa fa-plus"></i> Enter Customer Debt Status </a>
        </li>

    </ul>
    <div class="clearfix"></div>
</div>
<div class="x_content">
    <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>National Id</th>
                <th>Mobile No</th>
                <th>Batch No</th>
                <th>Debt Status</th>
                <th>Mpesa Id</th>
                <th>Date Cleared</th>

            </tr>
        </thead>


        <tbody>
            @foreach($debtorstatus as $debtors)
            <tr>
                <td>{{$debtors->national_id}}</td>
                <td>{{$debtors->mobile_number}}</td>
                <td>{{$debtors->batch_numbers}}</td>
                @if($debtors->fully_cleared == 1)
                <td>Cleared</td>
                @else
                <td>Not Cleared</td>
                @endif
                <td>{{$debtors->clearing_mpesa_trans_id}}</td>
                <td>{{$debtors->date_cleared}}</td>
            </tr>
            @endforeach



        </tbody>
    </table>
</div>
@stop
