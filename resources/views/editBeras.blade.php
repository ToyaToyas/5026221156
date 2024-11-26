@extends('template')

@section('tulisan1', 'Edit Beras')

@section('link1')
	<a href="/beras"> Kembali</a>
@endsection 
@section('konten')
	@foreach($beras as $b)
	<form action="/beras/updateBeras" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kode" value="{{ $b->kodeberas }}"> <br/>
		<div class="row mb-3">
    		<label for="Merek" class="col-sm-2 col-form-label">Merek</label>
    		<div class="col-sm-10">
				<input type="text" name="merek" class="form-control" id="merek" required="required" value="{{ $b->merkberas }}">
    		</div>
  		</div>
		<div class="row mb-3">
    		<label for="stock" class="col-sm-2 col-form-label">Stock</label>
    		<div class="col-sm-10">
				<input type="text" name="stock" class="form-control" id="stock" required="required" value="{{ $b->stockberas }}">
    		</div>
        </div>
        <div class="row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10 d-flex align-items-center">
            <!-- Toggle Switch -->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="tersedia" name="tersedia" 
                    value="y" {{ $b->tersedia == 'y' ? 'checked' : '' }}>
                <label class="form-check-label" for="tersedia">Tersedia</label>
            </div>
        </div>  
        </div>
		<div class="row mb-3">
    		<div class="col-sm-10">
				<input type="submit" value="Simpan Data" class="btn btn-primary">
    		</div>
  		</div>
	</form>
	@endforeach
@endsection('konten')