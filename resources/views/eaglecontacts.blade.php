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
                                <th>Phone</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Loyalty</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($contacts)

                                @foreach($contacts as $contact)

                                    <tr>
                                        <td>{{$contact->cx_customer}}</td>
                                        <td>{{$contact->cx_auth_to_chrg_name}}</td>
                                        <td>{{$contact->cx_telephone_number}}</td>
                                        <td>{{$contact->cx_cell_number}}</td>
                                        <td>{{$contact->cx_email_address}}</td>
                                        <td>{{$contact->cx_loyalty_id}}</td>
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