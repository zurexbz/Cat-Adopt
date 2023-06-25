@extends('header')

@section('container')    
    <!-- Header -->
    <header class="header-edit">
        <form action="/dashboard/{{ $cat->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="container">
                <div class="row">
                    <img src="{{ asset('storage/'. $cat->image) }}" class="col-md-6 but-logo" id="preview-image">
                    <div class="col-md-6 create-frm">
                        <p class="atas">Cat Name</p>
                        <p>City Address</p>
                        <p>Contact</p>
                        <p>Color</p>
                        <p>Breed</p>
                        <p>Description</p>
                    </div>
                </div>
                <div id='login' class='input-group-login'>
                    <input type='text' class='input-field num-1' name="name" placeholder='Enter Cat`s Name' value="{{ old('name') ? old('name') : $cat->name }}" required >
                    <input type='text' class='input-field num-2' name="address" placeholder='Your City Address' value="{{ old('address') ? old('address') : $cat->address }}" required>
                    <input type='text' class='input-field num-3' name="contact" placeholder='Your Contact' value="{{ old('contact') ? old('contact') : $cat->contact }}" required>
                    <input type='text' class='input-field num-4' name="color" placeholder='Cat`s Color' value="{{ old('color') ? old('color') : $cat->color }}" required>
                    <input type='text' class='input-field num-5' name="breed" placeholder='Cat`s Breed' value="{{ old('breed') ? old('breed') : $cat->breed }}" required>
                    <input type='text' class='input-field num-5' name="description" placeholder='Cat`s Description' value="{{ old('description') ? old('description') : $cat->description }}" required>
                    <div class="row">
                        <div class="col-6">
                            <input type="file" class="form-control" name="image" id="image" onchange="loadFile(event)">
                        </div>
                        <div class="col-2"></div>
                        <div class="col-4">
                            <a href="/dashboard" class="btn btn-dark mx-2">Back</a>
                            <button type="submit" class="btn btn-warning font-weight-bold">Submit</button>        
                        </div>
                    </div>            
                </div>
            </div>
            <h1>Update Your Cat's Image</h1>
            
        </form>
    </header>

    <script>
        var loadFile = function(event) {
          var output = document.getElementById('preview-image');
          output.src = URL.createObjectURL(event.target.files[0]);
          output.onload = function() {  
            URL.revokeObjectURL(output.src) // free memory
          }
        };
      </script>
    <script src="../library/jquery/jquery-3.4.1.min.js"></script>
    <script src="../library/bootstrap/js/bootstrap.js"></script>
@endsection