<div class="container-fluid">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="/" class="navbar-brand ml-3">
            <img src="../images/logo.png" alt="Logo Web">
        </a>

        <button class="navbar-toggler navbar-toggler-right"
            type="button"
            data-toggle="collapse"
            data-target="#navb"
            >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="/about" class="nav-link">
                        About Us
                    </a>
                </li>
                <li class="nav-item mx-md-2">
                        <a href="/find" class="nav-link">
                        Find My Cat
                    </a>
                </li>
                @auth    
                <li class="nav-item mx-md-2">
                    <a href="/dashboard/create" class="nav-link">
                        Add New Cat
                    </a>
                </li>
                @endauth
                <li class="nav-item mx-md-2">
                    <a href="/testimonial" class="nav-link">
                        Testimonial
                    </a>
                </li>
            </ul>
            <!--Small Window Button-->
            <form class="form-inline d-sm-block d-md-none" method="POST" action="/logout">
                @csrf
                @auth
                <a href="/dashboard" class="rounded bg-warning my-2 my-sm-0 px-4 py-2 text-decoration-none text-light">Hello, <span class=" font-weight-bold">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</span></a>
                <button type="submit" class="btn btn-danger ml-3" style="height: 38px;">Logout</button>
                @endauth
                @guest
                <a href="/login" class="btn btn-login my-2 my-sm-0">Login</a>
                @endguest
            </form>

            <!--Desktop Window Button-->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block mr-3" method="POST" action="/logout">
                @csrf
                @auth
                <a href="/dashboard" class="rounded bg-warning my-2 my-sm-0 px-4 py-2 text-decoration-none text-light">Hello, <span class=" font-weight-bold">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</span></a>
                <button type="submit" class="btn btn-danger ml-3" style="height: 38px;">Logout</button>
                @endauth
                @guest
                <a href="/login" class="btn btn-login btn-navbar-right my-2 my-sm-0 text-light">Login</a>
                @endguest
            </form>
        </div>
    </nav>
</div>
