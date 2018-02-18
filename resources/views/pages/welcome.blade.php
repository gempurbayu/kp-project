<!DOCTYPE html>
<html>
<head>
    <title>Kost Pandjaitan</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="'{{asset('css/stylelist.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

    <style>
      .kost {
      display: inline-block;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,1);
    transition: 0.3s;
    width: 22%;
    height: 280px;
    background-color: white;
    border-radius: 8px;
        margin-left: 85px;
        margin-top: 40px;

}

.kost img {
    height: 180px;
    border-radius: 8px 8px 0 0;
    background-color: white;
}

.kost:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.harga {
  display: inline-block;
  float: right;
  width: 100px;
  height: 45px;
  background-color: #f8d64e;
}

.harga h3 {
  font-family: ubuntu;
  text-align: center;
  font-size: 20px;
  color: white;
  font-weight: bold;
  margin: auto;
}
.harga span {
  font-family: ubuntu;
  text-align: center;
  font-size: 15px;
  color: white;
  width: 15px;
  font-weight: bold;
}

.container2 {
    font-family: ubuntu;
}
.container2 h5 {
  color: grey;
  padding-top: 2px;
}

.container2 p {
  padding-top: 2px;
}

</style>
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
    <div class="container-fluid">
        <div class="col-md-12">
            <h1 align="center">List Kost<br>DI. Pandjaitan</h1></div>
            <!-- sidebar -->
            <div class="sidebar" style="font-size: 12px;">
                <div class="col-md-2 col-xs-3 sidebar" style="margin-top:; border: 1px solid; color:#222; border-radius: 8px; padding: 10px"> 
                    <div class="btn-group">

                        <label>Cari kost</label>
                        <br>
                        <label>Harga</label>
                        <p>min<input class="form-control" type="text" style="margin-right: 10px;" name="" placeholder="Rp."></p>
                        <p>max<input class="form-control" type="text" style="margin-right: 10px;" name="" placeholder="Rp."></p>

                        <div class="form-group">
                          <label for="harga">Tipe Kost :</label>
                          <select name="tipe" id="" class="form-control" >
                              <option value="" disabled selected>Tipe Kost</option>
                              <option value="Pria">Pria</option>
                              <option value="Wanita">Wanita</option>
                              <option value="Wanita & Wanita">Pria & Wanita</option>
                            </select>
                        </div>

                        <div class="form-group">
                          <label>Jangka Waktu :</label>
                          <select name="jangka_waktu" id="" class="form-control" >
                              <option value="" disabled selected>Jangka Waktu</option>
                              <option value="Bulanan">Bulanan</option>
                              <option value="Tahunan">Tahunan</option>
                            </select>
                        </div>

                      <div class="col-md-10">
                        <input type="submit" class="btn btn-primary btn-block mt" value="Cari Kost">
                      </div>
                    </div>
                </div>
            </div>
            <!-- end of sidebar -->

            <!-- listkost -->
            <div class="container-fluid">
               <!-- gallery -->
               <div class="col-md-10 " style="margin-top: 30px; text-align: center;">
                <div class="jarak">
                @foreach ($kost as $kosts)
                    <div class="col-md-4 kost">
                        <a href="{{ url('/kost/'.$kosts->slug) }}">
                          <img class="img-thumbnail" src="{{ url('cover/'.$kosts->images)}}" alt="" style="height: 130px; width: 250px; border-radius: 8px 8px 0 0; background-color: white;" >
                      </a>
                      <div class="harga">
                      <span>Rp</span>
                      <h3>{!! str_limit($kosts->harga, $limit= 3, $end = 'K/') !!}<span>{!! str_limit($kosts->jangka_waktu, $limit= 5, $end = '') !!}</span></h3>
                      </div>
                      <div class="container2 text-left">
                         <h4><b>{{ $kosts->nama}}</b></h4>
                        <p style="color: #2ecc71"><u>Kost {{ $kosts->tipe}}</u></p>
                        <h5>{{ $kosts->alamat }}</h5> 
                      </div>
                    </div>
                @endforeach
                </div>
              </div>
              <div class="row">
              <div class="container-fluid"> 
              <hr>
              {!! $kost->links() !!}
              </div>
              </div>
<!-- gallery -->
          </div>
        </div>  
<!-- end of listkost -->


</body>
</html>