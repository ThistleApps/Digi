@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Store</th>
                                    <th>Order Number</th>
                                    <th>Trans Type</th>
                                    <th>Cust Num</th>
                                    <th>Order Date</th>
                                    <th>Order Due Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if($orders)

                                @foreach($orders as $order)

                                    <tr>
                                        <td>{{$order->oh_store_number}}</td>
                                        <td>{{$order->oh_transaction_num}}</td>
                                        <td>{{$order->oh_transaction_type}}</td>
                                        <td>{{$order->oh_customer_number}}</td>
                                        <td>{{$order->oh_creation_date}}</td>
                                        <td>{{$order->oh_delivery_date}}</td>
                                    </tr>

                                @endforeach

                            @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection