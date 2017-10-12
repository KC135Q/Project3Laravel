@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <!--<a href="{{ route('login') }}">Login</a> or <a href="/register">Register</a> to get started. -->
                    <h3>To generate your report &nbsp;<a href="{{ route('login') }}">login to get started</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


