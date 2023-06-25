@extends('header')

@section('container')    
<header class="header-login">
    <div id='login-form'class='login-page'>
        <div class="form-box-login">
            <div class='button-box'>
                <button type='button'class='toggle-btn'>Log In</button>
            </div>
            <form id='login' method="POST" action="/login" class='input-group-login'>
                @csrf
                <input type='email' class='input-field' name="email" placeholder='Email Id' required >
                <input type='password' class='input-field' name="password" placeholder='Enter Password' required>
                <button type='submit' class='submit-btn'>Submit</button>
                <a href="/register" class="not-regist">Not Registered? That's ok. You Can Register Here</a>
            </form>
        </div>
    </div>
</header>
<script src="../library/jquery/jquery-3.4.1.min.js"></script>
<script src="../library/bootstrap/js/bootstrap.js"></script>
@endsection