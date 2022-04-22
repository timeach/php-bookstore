<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')- QualityBook</title>
    <link rel="stylesheet" href="{{url('lib/bootstrap/dist/css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/site.css')}}" type="text/css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div style="font-size:15px" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="col-xs-12 col-md-9 col-lg-9    collapse navbar-collapse">
        <div class="col-xs-6 col-md-3 col-lg-3  navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/index')}}">Home</a></li>
                <li><a href="{{url('/Books')}}">Books</a></li>
                <li><a href="{{url('/Supplier')}}">Categories</a></li>
                <li><a href="{{url('/About')}}">About</a></li>
                <li><a href="{{url('/Contact')}}">ContactUs</a></li>
                <li><a href="{{url('/login')}}">Login</a></li>
                <li><a href="{{url('/register')}}">Register</a></li>
                <li><div class="dropdown">
                    <button type="button" class="btn btn-info" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                    </button>
                    <div class="dropdown-menu">
                        <div class="row total-header-section">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                            </div>

                            <?php $total = 0 ?>
                            @foreach((array) session('cart') as $id => $details)
                                <?php $total += $details['price'] * $details['quantity'] ?>
                            @endforeach

                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                            </div>
                        </div>

                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <div class="row cart-detail">
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                        <img src="{{ $details['photo'] }}" width="150" height="150" class="img-responsive" />
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                        <p>{{ $details['name'] }}</p>
                                        <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                            </div>
                        </div>
                    </div>
                </div></li>
            </ul>
        </div>
    </div>
</div>
<div class="container body-content">
    @yield('content')
    <hr />
    <div class="container">
        <footer class="footer">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <p><a href="{{url('/index')}}"><span class="glyphicon glyphicon-home"> </span>  Home</a></p>
                    <p><a href="{{url('/books')}}">Books</a></p>
                    <p><a href="{{url('/Supplier')}}">Categories</a></p>
                </div>
            </div>
        </footer>
    </div>
</div>
@yield('scripts')
</body>
</html>
