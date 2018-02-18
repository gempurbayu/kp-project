<!DOCTYPE html>
<html>
<head>
    <title>Kost Pandjaitan</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="'{{asset('css/stylelist.css')}}">
    <link rel="stylesheet" type="text/css" href="'{{asset('css/jquery.bxslider.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.bxslider.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

</head>
<body>
    <!-- navbar -->
    <nav style="background-color: #c0392b;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="border-width: 1px; border-color: white;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="background-color: white;"></span>
                    <span class="icon-bar" style="background-color: white;"></span>
                    <span class="icon-bar" style="background-color: white;"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="color: white;">KostKu Pandjaitan</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html" style="color: white;">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="listkost.html" style="color: white;">List Kost</a></li>
                    <li><a href="#" style="color: white;">Tentang Kami</a></li>
                    @guest
                    @else
                    <li><a href="{{ route('logout') }}" style="color: white" 
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sign Out
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->
   <div class="container">
   <ul class="slider">
    @foreach($images as $image)
  <li><img src="{{ url('/images/'.$image->filename) }}" style="width: 1280px; height: 600px;"></li>
      @endforeach
    </ul>
  </div>
<script>
$(function(){
  $('.slider').bxSlider({
    mode: 'fade',
    captions: true,
    slideWidth: 1360
  });
});
</script>
</body>
</html>