@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">Client Dashboard 
                    <a class="pull-right btn btn-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="text-secondary">You are logged in! Please fill out the form and upload corresponding file</p> <br>

                    @if(count($errors) >0 )
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul>
                                @foreach ($errors -> all() as $error )
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @include('flash::message')

                    {!! Form::open(array('route' => 'file.upload.post', 'files' => true)) !!}
                        <div class="row">
                            <div class="col-md-5">
                                {!! Form::file('file', array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <!--Grid row-->


                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div >
                                    <div >

                                        {!! Form::label('name', 'Enter your Name', ['class' => 'text-dark'])!!}
                                        {!! Form::text('name', null, ['class' => 'form-control text-dark'])!!}
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="">
                                    <div class="">

                                        {!! Form::label('phone', 'Phone No.', ['class' => 'text-dark'])!!}
                                        {!! Form::text('phone', null, ['required' => true, 'class' => 'form-control text-dark'])!!}
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="">
                                    <div class="">
                                        {!! Form::label('email', 'Email', ['class' => 'text-dark'])!!}
                                        {!! Form::email('email', null, ['required' => true, 'class' => 'form-control text-dark'])!!}
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="">
                                    {!! Form::label('subject', 'Subject', ['class' => 'text-dark'])!!}
                                    {!! Form::text('subject', null, ['required' => true, 'class' => 'form-control text-dark'])!!}
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="">
                                    {!! Form::label('message', 'Detailed Message Here..', ['class' => 'text-dark'] )!!}
                                    {!! Form::textarea('message', null, ['required' => true, 'class' => 'form-control text-dark'])!!}
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->
                        {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
