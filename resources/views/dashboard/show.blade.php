@extends('header')

@section('container')    
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/find" class="href">
                                        Find My Cat
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    @if($cat)
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>
                                {{ $cat->name }}
                            </h1>
                            <p>
                                Owner : {{ $user->first_name . ' ' . $user->last_name }}
                            </p>
                            <img src="{{ asset('storage/' . $cat->image) }}" 
                                alt=""
                                class="image-kucing"
                            >
                            <p>
                                {{ $cat->description }}
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <img src="/images/details_logo1.png" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Breed</h3>
                                        <p>{{ $cat->breed }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="/images/details_logo2.png" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Color</h3>
                                        <p>{{ $cat->color }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="/images/details_logo3.png" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Location</h3>
                                        <p>{{ $cat->address }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <img src="/images/logo.png" alt="" class="logo-details">
                            <hr>
                            <h2 class="text-center">Details Informations</h2>
                            <table class="details-informations">
                                <tr>
                                    <th width="50%">Contact</th>
                                    <td width="50%" class="text-right">
                                        {{ $cat->contact }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            @if (Auth::user()->id !== $cat->user_id)    
                            <form action="/adopt?adoptant_id={{ Auth::user()->id }}&owner_id={{ $cat->user_id }}&cat_id={{ $cat->id }}" method="POST">
                            @csrf
                                <button type="submit" class="btn btn-block btn-adopt mt-3 py-2">Adopt Now</button>
                            </form>
                            @endif
                            @if(Auth::user()->id == $cat->user_id)
                        <a href="/dashboard/{{ $cat->id }}/edit">
                            <button class="submit-btn text-light">Edit Post</button>
                        </a>
                        <form action="/dashboard/{{ $cat->id }}">
                            @method('delete')
                            @csrf
                            <button class='back-btn'>Delete Post</button>
                        </form>
                        @endif
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection
