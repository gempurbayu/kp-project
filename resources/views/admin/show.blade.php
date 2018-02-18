@extends('admin.admin')
@section('content')
<section class="col-lg-12 connectedSortable">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <div class="col-md-10">
              <h3 class="box-title">Rutes Data</h3>
              </div>
              <div class="col-md-2"><a class="btn btn-primary" href="{{ url('/admin/kost/create') }}">Buat Kost</a></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama Kost</th>
                  <th>Pemilik</th>
                  <th>No Hp</th>
                  <th>Alamat</th>
                  <th>Harga</th>
                  <th>Tipe</th>
                  <th>Fasilitas</th>
                  <th>Luas</th>
                  <th>Jumlah Kamar</th>
                  <th>Image</th>
                  <th>Deskripsi</th>
                  <th>Action</th>
                </tr>
                <?php $no=1; ?>
                @foreach($kost as $kosts)
                <tr>
                  <td>{{$no++}}</td>
                    <td>{{$kosts->nama}}</td>
                    <td>{{$kosts->nama_pemilik}}</td>
                    <td>{{$kosts->nohp}}</td>
                    <td>{{$kosts->alamat}}</td>
                    <td>Rp. {{$kosts->harga}} / {{$kosts->jangka_waktu}}</td>
                    <td>{{$kosts->tipe}}</td>
                    <td>{{$kosts->fasilitas}}</td>
                    <td>{{$kosts->panjang}} X {{$kosts->lebar}}</td>
                    <td>{{$kosts->sisa_kamar}} / {{$kosts->jumlah_kamar}}</td>
                    <td>
                    <img src="{{ url('cover/'.$kosts->images)}}" id="showimages" style="max-width:100px;max-height:50px;float:left;">
                    </td>
                    <td>{{$kosts->deskripsi}}</td>
                  <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['kost.destroy', $kosts->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                    {!! Form::close() !!}
                  </td>
                </tr>
                @endforeach
              </table>
              {!! $kost->links() !!}
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        </section>
@endsection