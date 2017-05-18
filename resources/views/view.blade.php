@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Clients</div>
                    <div class="panel-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <table width="670" class="table-responsive">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Email</th>
                                <th>PhoneNumber</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <?php $i=1; ?>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$client->firstname}}</td>
                                    <td>{{$client->lastname}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>{{$client->phonenumber}}</td>
                                    <td>{{$client->address}}</td>
                                    <td><a href="{{route('clients.edit',$client->id)}}" class="btn btn-info">Edit</a></td>
                                    <td>
                                      {!! Form::open(['method'=>'DELETE','route'=>['clients.destroy',$client->id],'style'=>'display:inline'])!!}
                                        {!! Form::submit('Delete',['class'=>'btn btn-danger'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
