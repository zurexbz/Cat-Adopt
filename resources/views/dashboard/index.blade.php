@extends('header')

@section('container')
    <section class="section-dashboard">
        <div class="container-fluid">
            <h1 class="text-center mt-5">My Cat Profile</h1>
            <div class="row">
                @foreach ($cats as $cat)    
                <div class="col-lg-4 bagian-kiri mt-4">
                    <img src="{{ asset('storage/'.$cat->image) }}" alt="" class="img-fluid" style="width: 800px;">
                    <h2 class="mt-2">{{ $cat->name }}</h2>
                    <p>{{ $cat->breed }}</p>
                    <form action="/dashboard/{{ $cat->id }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-1">Delete Post</button>
                        <a href="/dashboard/{{ $cat->id }}/edit" class="btn btn-warning ml-1">Edit Post</a>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <script src="../library/jquery/jquery-3.4.1.min.js"></script>
    <script src="../library/bootstrap/js/bootstrap.js"></script>
@endsection