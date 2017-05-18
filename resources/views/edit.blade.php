@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update</div>
                    <div class="panel-body">
                        {!! Form::model($client, ['method' => 'PATCH','route' => ['clients.update', $client->id]]) !!}
                        <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                            {!! Form::label('First Name:') !!}
                            {!! Form::text('firstname',null, ['class'=>'form-control', 'placeholder'=>'Enter Your First Name']) !!}
                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                            {!! Form::label('Last Name:') !!}
                            {!! Form::text('lastname',null, ['class'=>'form-control', 'placeholder'=>'Enter Your Last Name']) !!}
                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::label('Email:') !!}
                            {!! Form::text('email',null, ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('phonenumber') ? 'has-error' : '' }}">
                            {!! Form::label('Phone Number:') !!}
                            {!! Form::text('phonenumber',null, ['class'=>'form-control', 'placeholder'=>'Enter Your Phone number']) !!}
                            <span class="text-danger">{{ $errors->first('phonenumber') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                            {!! Form::label('Address:') !!}
                            {!! Form::text('address',null, ['class'=>'form-control', 'placeholder'=>'Enter Your Address']) !!}
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Edit Client</button>
                        </div>
    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection