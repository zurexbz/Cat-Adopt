@extends('header')

@section('container')
    <style>
        .card{
            transition: all 0.5s ease-in-out;
            cursor: pointer;
            box-shadow: 0px 0px 6px -4px rgba(0,0,0,0.75);
            border-radius: 10px;
        }
        .card:hover{
            box-shadow: 0px 0px 51px -36px rgba(0,0,0,1);
        }
    </style>
    <section class="section-find">
        <img src="../images/logo.png" alt="" class="logo-find">
        <div class="box">
            <form action="/find" method="GET">
                <button type="submit" class="btn bg-transparent"><i class="fa fa-search" aria-hidden="true"></i></button>
                <input type="text" name="search" id="myinput" placeholder="Search">
            </form>
        </div>
        <div class="container mb-5">
            <h3 class="text-danger mt-5 text-center" id="para" style="display: none;">Not Found </h3>
            <div class="row mt-3" id="card">
                @foreach ($cats as $cat)  
                <div class="col-md-4 mt-3" >
                    <div class="card p-3 ps-5 pe-5">
                        <h4 class="text-capitalize text-center">{{ $cat->name }}</h4>
                        <img src="{{ asset('storage/'.$cat->image) }}" width="100%" height="320px" class="img-fluid"/>
                        <p class="mt-2">{{ $cat->description }}</p>
                        <a href="/dashboard/{{ $cat->id }}" class="btn btn-light w-100 mx-auto">Details Cat</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <script src="/library/jquery/jquery-3.4.1.min.js"></script>
    <script src="/library/bootstrap/js/bootstrap.js"></script>
    {{-- <script src="/script/home.js"></script> --}}
@endsection