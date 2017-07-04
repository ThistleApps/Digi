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
                                <th>Number</th>
                                <th>Name</th>
                                <th>Area Code</th>
                                <th>Phone</th>
                                <th>Address 1</th>
                                <th>Address 2</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Zip</th>
                                <th>Loyalty ID</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($customers)

                                @foreach($customers as $customer)

                                    <tr>
                                        <td>{{$customer->dwcr_customer}}</td>
                                        <td>{{$customer->dwcr_name}}</td>
                                        <td>{{$customer->dwcr_area_code}}</td>
                                        <td>{{$customer->dwcr_phone}}</td>
                                        <td>{{$customer->dwcr_address_1}}</td>
                                        <td>{{$customer->dwcr_address_2}}</td>
                                        <td>{{$customer->dwcr_city}}</td>
                                        <td>{{$customer->dwcr_state}}</td>
                                        <td>{{$customer->dwcr_zip_code}}</td>
                                        <td>{{$customer->dwcr_loyalty_id}}</td>
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