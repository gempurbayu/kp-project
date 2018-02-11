@extends('admin.admin')

@section('title', '| Create New Post')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Buat Kost Baru</h1>
			<hr>

			{!! Form::open(array('route' => 'kost.store')) !!}
				{{ Form::label('nama', 'Nama Kost:') }}
				{{ Form::text('nama', null, array('class' => 'form-control')) }}

				{{ Form::label('nama_pemilik', 'Nama Pemilik:') }}
				{{ Form::text('nama_pemilik', null, array('class' => 'form-control')) }}
			{!! Form::close() !!}
		</div>
	</div>
@endsection
