@extends('template')

@section('tulisan1', 'Page Counter')

@section('konten')
	@foreach ($visitors as $v)
        Anda Pengunjung ke - {{ $v->Jumlah}}
    @endforeach
@endsection('konten')