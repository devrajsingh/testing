@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                
                <div class="panel-heading" style="text-align: center;">DELIVERY BOY LIST</div>
<table id="mytable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
              
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Bike Number</th>
                <th>Pin</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
          
                @foreach($list as $row)
                <tr>
                   
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->mobile}}</td>
                    <td>{{$row->bike}}</td>
                    <td>{{$row->pin}}</td>
                    <td>
                      
                        
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
              
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Bike Number</th>
                <th>Pin</th>
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
