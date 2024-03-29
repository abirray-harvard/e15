@extends('layouts/main')

@section('content')
<h1>Register</h1>

Already have an account? <a href='/login'>Login here...</a>

<form method='POST' action='/register'>
    {{ csrf_field() }}

    <label for='first_name'>First Name</label>
    <input id='first_name' type='first_name' name='first_name' value='{{ old('first_name') }}' autofocus>
    @include('includes.error-field', ['fieldName' => 'first_name'])
    <br />

    <label for='last_name'>Last Name</label>
    <input id='last_name' type='text' name='last_name' value='{{ old('last_name') }}' autofocus>
    @include('includes.error-field', ['fieldName' => 'last_name'])
    <br />

    <label for='email'>E-Mail Address</label>
    <input id='email' type='email' name='email' value='{{ old('email') }}'>
    @include('includes.error-field', ['fieldName' => 'email'])
    <br />

    <label for='password'>Password (min: 8)</label>
    <input id='password' type='password' name='password'>
    @include('includes.error-field', ['fieldName' => 'password'])
    <br />

    <label for='password-confirm'>Confirm Password</label>
    <input id='password-confirm' type='password' name='password_confirmation'>
    <br />

    <button type='submit' class='btn btn-primary'>Register</button>
</form>
@endsection
