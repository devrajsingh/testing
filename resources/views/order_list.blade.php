@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                
                <div class="panel-heading" style="text-align: center;">ORDERS LIST</div>
<table id="mytable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
              
                <th>#Order Id</th>
                <th>Customer Email</th>
                <th>Amount</th>
                <th>Created At</th>
                <th>IP</th>
                 <th>Status</th>
                 <th>Action(order)</th>
        
                
            </tr>
        </thead>
        <tbody>
         
                @foreach($order_list as $row)
                <tr>
                 
                    <td>{{$row->increment_id}}</td>
                    <td>{{$row->customer_email}}</td>
                    <td>{{$row->base_subtotal}}</td>
                    <td>{{$row->created_at}}</td>
                    <td>{{$row->remote_ip}}</td> 
                    <td>{{$row->status}}</td> 
                    <td><button type="button" class="btn btn-success">Assign</button></td>
                  
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>#Order Id</th>
                <th>Customer Email</th>
                <th>Total Amount</th>
                <th>Created Date</th>
                <th>IP Address</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
