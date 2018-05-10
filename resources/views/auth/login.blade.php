@extends('layouts.master')


@section('content')
    <div class="jumbotron">
        <div class='container'>
    <h1>Login</h1>



    <form method='POST' action='{{ route('login') }}'>

        {{ csrf_field() }}

        <label for='email'>User Name</label>
        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
        <input id='email' type='email' name='email' value='{{ old('email') }}' required autofocus>
        </div>
        @include('modules.error-field', ['field' => 'email'])

        <label for='password'>Password</label>
        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
        <input id='password' type='password' name='password' required>
        </div>
        @include('modules.error-field', ['field' => 'password'])

        <label>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
            <input type='checkbox' name='remember' {{ old('remember') ? 'checked' : '' }}> Remember Me
            </div>
        </label>
        <br>
        <button type='submit' class='btn btn-primary'>Login</button>

        <a class='btn btn-link' href='{{ route('password.request') }}'>Forgot Your Password?</a>

    </form>
            <br>
            <label class="form-check-label">
                Please Register here
            </label>
            <p><a class="btn btn-primary btn-lg" href="/register" role="button">Register Here &raquo;</a></p>
        </div>
    </div>

@endsection
