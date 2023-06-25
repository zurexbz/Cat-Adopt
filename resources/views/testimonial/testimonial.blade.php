@extends('header')

@section('container')    
<div class="testi">
    <img src="/images/cil_cat.svg" class="logo-img">
    <h1 class="tagline">Tell Your Experience With Me !</h1>

    <form method="POST" action="/testimonial">
        @csrf
        <!-- <input type="text" class="input-box" id="" name=""><br> -->
        <textarea class="input-box" rows="8" name="testimoni"></textarea>
        <!-- <input type="submit" value="Send"> -->
        <button type="submit" class="send-btn">Send</button>
    </form>
</div>
@endsection