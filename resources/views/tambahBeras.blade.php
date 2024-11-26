@extends('template')

@section('tulisan1', 'Data Beras')

@section('link1')
	<a href="/beras"> Kembali</a>
@endsection 

@section('konten')
	<form action="/beras/storeBeras" method="post">
		{{ csrf_field() }}
		<div class="row mb-3">
    		<label for="nama" class="col-sm-2 col-form-label">Merek</label>
    		<div class="col-sm-10">
				<input type="text" name="merek" class="form-control" id="merek" required="required">
    		</div>
  		</div>
		<div class="row mb-3">
    		<label for="jabatan" class="col-sm-2 col-form-label">Stock</label>
    		<div class="col-sm-10">
				<input type="text" name="stock" class="form-control" id="stock" required="required">
    		</div>
  		</div>
		<div class="row mb-3">
    		<div class="col-sm-10">
				<input type="submit" value="Simpan Data" class="btn btn-primary">
    		</div>
  		</div>
	</form>
@endsection 