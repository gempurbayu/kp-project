@extends('admin.admin')

@section('content')

	<section class="col-lg-12 connectedSortable">
<div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Kost</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<form action="{{ route('kost.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">

							<label for="nama" class="col-md-4">Nama :</label>
							<div class="col-md-8">
							<input type="text" class="form-control" id="nama"
								placeholder="Masukkan nama kost"name="nama" />
								</div>
						</div>
						</div>

						<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<div class="col-md-8">
							<input type="text" class="form-control" id="nama_Pemilik"
								placeholder="Masukkan nama pemilik"name="nama_pemilik" />
								</div>
						</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<label for="nohp" class="col-md-2">No Telepon :</label>
							<div class="col-md-4">
							<input type="text" class="form-control" id="nohp"
								placeholder="08..."name="nohp" />
								</div>
						</div>
						</div>

						<div class="form-group col-xs-12 col-sm-12 col-md-12">
		                  <label class="col-md-2">Alamat</label>
		                  <div class="col-md-8">
		                  <textarea class="form-control" rows="3" placeholder="Masukkan alamat lengkap" name="alamat"></textarea>
		                  </div>
	                	</div>

						<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">

							<label for="harga" class="col-md-4">Harga :</label>
							<div class="col-md-8">
							<input type="text" class="form-control" id="harga"
								placeholder="Masukkan harga"name="harga" />
								</div>
						</div>
						</div>

						<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<div class="col-md-8">
							<select name="jangka_waktu" id="" class="form-control" >
									<option value="" disabled selected>Jangka Waktu</option>
									<option value="Bulanan">Bulanan</option>
									<option value="Tahunan">Tahunan</option>
								</select>
							</div>
						</div>
						</div>

						<div class="form-group col-xs-12 col-sm-12 col-md-12">
		                  <label class="col-md-2">Fasilitas</label>
		                  <div class="col-md-8">
		                  <textarea class="form-control" rows="3" placeholder="Masukkan fasilitas" name="fasilitas"></textarea>
		                  </div>
	                	</div>

	                	<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">

							<label for="panjang" class="col-md-4">Luas :</label>
							<div class="col-md-4">
							<input type="text" class="form-control" id="panjang"
								placeholder="Panjang"name="panjang" /><br>

							<input type="text" class="form-control" id="lebar"
								placeholder="Lebar"name="lebar" />
								</div>
						</div>
						</div>

						<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">

							<label for="jumlah_kamar" class="col-md-4">Jumlah Kamar :</label>
							<div class="col-md-4">
							<input type="text" class="form-control" id="jumlah_kamar"
								placeholder="Total Kamar"name="jumlah_kamar" /><br>

							<input type="text" class="form-control" id="sisa_kamar"
								placeholder="Sisa Kamar"name="sisa_kamar" />
								</div>
						</div>
						</div>

						<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<label for="harga" class="col-md-4">Tipe Kost :</label>
							<div class="col-md-8">
							<select name="tipe" id="" class="form-control" >
									<option value="" disabled selected>Pria/Wanita</option>
									<option value="Pria">Pria</option>
									<option value="Wanita">Wanita</option>
								</select>
							</div>
						</div>
						</div>

						<div class="form-group col-xs-12 col-sm-12 col-md-12">
		                  <label class="col-md-2">Gambar</label>
		                  <div class="col-md-4">
		                  <img src="http://placehold.it/100x100" id="showimages" style="max-width:200px;max-height:200px;float:left;"/>
		                  </div>
		                  <div class="col-md-8">
		                 	<input type="file" name="images" id="inputimages">
		                  </div>
	                	</div>

						<div class="form-group col-xs-12 col-sm-12 col-md-12">
		                  <label class="col-md-2">Deskripsi</label>
		                  <div class="col-md-8">
		                  <textarea class="form-control" rows="3" placeholder="Masukkan deskripsi" name="deskripsi"></textarea>
		                  </div>
	                	</div>

						<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
						<div class="col-md-4">
							<input type="submit" class="btn btn-primary btn-block mt" value="Buat Kost">
						</div>
						</div>
						</div>



				</form>
			</div>
            <!-- /.box-body -->
          </div>
        </div>
</section>
@endsection
