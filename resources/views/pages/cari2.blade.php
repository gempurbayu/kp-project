@extends('pages.navigasi')

@section('content')
            <div class="container-fluid">
               <!-- gallery -->
               <h4 >Hasil Pencarian :</h4>
               <div class="col-md-10 " style="margin-top: 10px; text-align: center;">
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
                        <a href="{{ url('/kost/'.$kosts->slug) }}" style="color: black">
                         <h4><b>{{ $kosts->nama}}</b></h4>
                        </a>
                        <p style="color: #2ecc71"><b><u>Kost {{ $kosts->tipe}}</u></b></p>
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
@endsection