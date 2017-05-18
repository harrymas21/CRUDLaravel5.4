@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p align="right"><a href="{{route('clients.index')}}" class="btn btn-info">View Clients</a></p>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        {!! Form::open(['route'=>'clients.store']) !!}
                        <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                            {!! Form::label('First Name:') !!}
                            {!! Form::text('firstname', old('firstname'), ['class'=>'form-control', 'placeholder'=>'Enter Your First Name']) !!}
                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                            {!! Form::label('Last Name:') !!}
                            {!! Form::text('lastname', old('lastname'), ['class'=>'form-control', 'placeholder'=>'Enter Your Last Name']) !!}
                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::label('Email:') !!}
                            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('phonenumber') ? 'has-error' : '' }}">
                            {!! Form::label('Phone Number:') !!}
                            {!! Form::text('phonenumber', old('phonenumber'), ['class'=>'form-control', 'placeholder'=>'Enter Your Phone number']) !!}
                            <span class="text-danger">{{ $errors->first('phonenumber') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                            {!! Form::label('Address:') !!}
                            {!! Form::text('address', old('address'), ['class'=>'form-control', 'placeholder'=>'Enter Your Address']) !!}
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success">Add Client</button>
                        </div>


                        {!! Form::close() !!}
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection