@extends('layouts.app')
@section('title','matakuliah page')
@section('bread1','Mata Kuliah')
@section('bread2','Data')
@section('content')

<h3>Form Mata Kuliah</h3>

@include('layouts.alert')

<form action="{{url("matakuliah/{$mk->kode_mk}/update")}}" method="POST">
	@csrf
	@method('PUT')
	
	<div class="form-group row">
		<label for="kode_mk" class="col-sm-12">Kode Mata Kuliah</label>
		<div class="col-sm-3">
			<input  type="text" name="kode_mk" class="form-control" id="kode_mk"  value="{{$mk->kode_mk}}">
			@error('kode_mk')
			<small id="kode_mk" class="form-text text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>
	<div class="form-group row">
		<label for="kode_mk" class="col-sm-12">Nama Lengkap</label>
		<div class="col-sm-3">
			<input type="text" name="nama_mk" class="form-control" id="nama_mk"  value="{{$mk->nama_mk}}">
			@error('nama_lengkap')
			<small id="nama_mk" class="form-text text-danger">{{$message}}</small>
			@enderror

		</div>
	</div>
	<div class="form-group row">
		<label for="kode_mk" class="col-sm-12">SKS</label>
		<div class="col-sm-3">
			<input type="text" name="sks" class="form-control" id="sks" value="{{$mk->sks}}" >
		</div>
	</div>
	<div class="form-group row">
		<label for="kode_mk" class="col-sm-12">Semester</label>
		<div class="col-sm-3">
			<input type="text" name="semester" class="form-control" id="semester" value="{{$mk->semester}}">
		</div>
	</div>
	<button class="btn btn-primary" type="submit">Simpan</button>
	<a href="{{url()->previous()}}" class="btn btn-danger">Batal</a>
</form>
@endsection