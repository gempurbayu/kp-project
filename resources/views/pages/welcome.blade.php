<!DOCTYPE html>
<html>
<head>
    <title>Kost Pandjaitan</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="'{{asset('css/stylelist.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
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
                    <li><a href="#" style="color: white;">Register Kost</a></li>
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
                        <p><input class="form-control" type="text" style="margin-right: 10px;" name="" placeholder="Nama Kost"></p>

                        <label>Harga</label>
                        <p>min<input class="form-control" type="text" style="margin-right: 10px;" name="" placeholder="Rp."></p>
                        <p>max<input class="form-control" type="text" style="margin-right: 10px;" name="" placeholder="Rp."></p>

                        <label>Jangka waktu</li></label>
                        <p><input type="checkbox" style="margin-right: 10px;" name="">Harian</p>
                        <p><input type="checkbox" style="margin-right: 10px;" name="">Bulanan</p>
                        <p><input type="checkbox" style="margin-right: 10px;" name="">Semesteran</p>
                        <p><input type="checkbox" style="margin-right: 10px;" name="">Tahunan</p>

                        <label>Fasilitas kost</label>
                        <p><input type="checkbox" style="margin-right: 10px;" name="">1</p>
                        <p><input type="checkbox" style="margin-right: 10px;" name="">2</p>
                        <p><input type="checkbox" style="margin-right: 10px;" name="">3</p>
                        <p><input type="checkbox" style="margin-right: 10px;" name="">4</p>
                    </div>
                </div>
            </div>
            <!-- end of sidebar -->

            <!-- listkost -->
            <div class="container-fluid">
               <!-- gallery -->
               <div class="col-md-10 col-xs-9" style="margin-top: 30px; text-align: center;">
                <p>Berikut beberapa kost yang ada di sekitar DI. Pandjaitan</p>
                <div class="jarak">
                    <div class="col-md-4 col-xs-10" style="">
                        <a href="#">
                          <img class="img-fluid img-thumbnail" src="{{asset('img/photo-1496748161186-63985e911efc.jpg')}}" alt="">
                      </a>
                      <a href="#" style="text-decoration: none;">Kost 1</a>
                  </div>

                  <div class="col-md-4 col-xs-10" style="">
                    <a href="#">
                      <img class="img-fluid img-thumbnail" src="{{asset('img/photo-1496748161186-63985e911efc.jpg')}}" alt="">
                  </a>
                  <a href="#" style="text-decoration: none;">Kost 2</a>
              </div>

              <div class="col-md-4 col-xs-10" style="">
                <a href="#">
                  <img class="img-fluid img-thumbnail" src="{{asset('img/photo-1496748161186-63985e911efc.jpg')}}" alt="">
              </a>
              <a href="#" style="text-decoration: none;">Kost 3</a>
          </div>

          <div class="col-md-4 col-xs-10" style="">
            <a href="#">
              <img class="img-fluid img-thumbnail" src="{{asset('img/photo-1496748161186-63985e911efc.jpg')}}" alt="">
          </a>
          <a href="#" style="text-decoration: none;">Kost 4</a>
      </div>

      <div class="col-md-4 col-xs-10" style="">
        <a href="#">
          <img class="img-fluid img-thumbnail" src="{{asset('img/photo-1496748161186-63985e911efc.jpg')}}" alt="">
      </a>
      <a href="" style="text-decoration: none;">Kost 5</a>
  </div>

  <div class="col-md-4 col-xs-10" style="">
    <a href="#">
      <img class="img-fluid img-thumbnail" src="{{asset('img/photo-1496748161186-63985e911efc.jpg')}}" alt="">
  </a>
  <a href="#" style="text-decoration: none;">Kost 6</a>
</div>
</div>
</div>
<!-- gallery -->
</div>
<!-- end of listkost -->


</body>
</html>