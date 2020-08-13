@extends('layout.app')
@section('title','Prodi Page')
@section('bread1','Program Studi')
@section('bread2','Data')
@section('content')
    <h3>Master Data Program Studi</h3>
@include('layout.alert')
    <table class="table table-striped" id="prd-table">
        <thead>
        <th>No</th>
            <th>Kode Prodi</th>
            <th>Nama Prodi</th>
            <th>Kaprodi</th>
	</thead>
	<tbody>
		@foreach($prd as $key => $item)
		<tr>
			<td>{{$key+1}}</td>
			<td>{{$item->kode_prodi}}</td>
			<td>{{$item->nama_prodi}}</td>
			<td>{{$item->kaprodi}}</td>
       

            
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
