@extends('header')

@section('container')    
<div class="testi">
    <img src="/images/cil_cat.svg" class="logo-img">
    <h1 class="tagline">Hi What Can We Help You?</h1>

    <form method="POST" action="/report">
        @csrf
        <!-- <input type="text" class="input-box" id="" name=""><br> -->
        <textarea class="input-box" rows="8" name="report"></textarea>
        <!-- <input type="submit" value="Send"> -->
        <button type="submit" class="send-btn">Send</button>
    </form>


    <!-- <button type="button" class="back-btn" href="#">Back</button> -->

</div>
@endsection