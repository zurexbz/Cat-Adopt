@extends('header')

@section('container')    
    <!-- Header -->
    <header class="header-login">
        <div id='login-form'class='login-page'>
            <div class="form-box-regist">
                <div class='button-box'>
                    <button type='button' class='toggle-btn'>Register</button>
                </div>
                <form id='register' method="POST" action="/register" class='input-group-register'>
                    @csrf
                    <input type='text' name="first_name" class='input-field' placeholder='First Name' required>
                    <input type='text' name="last_name" class='input-field' placeholder='Last Name ' required>
                    <input type='email' name="email" class='input-field'placeholder='Email Id' required>
                    <input type='password' name="password" class='input-field'placeholder='Enter Password' required>
                    <input type='password' name="confirm_password" class='input-field'placeholder='Confirm Password'  required>
                    <button type='submit' class='submit-btn'>Create Account</button>
                </form>
            </div>
        </div>
    </header>
    <script src="../library/jquery/jquery-3.4.1.min.js"></script>
    <script src="../library/bootstrap/js/bootstrap.js"></script>
@endsection