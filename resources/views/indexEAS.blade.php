<!--Muhammad Ali Husain Ridwan_5026221156
UAS PWEB Semeseter ganjil 2024-->
@extends('template')

@section('tulisan1', 'Data Beras')

@section('link1')
	<a href="/nilaikuliah/tambah" class='btn btn-primary'> + Tambah Nilai Kuliah</a>
@endsection

@section('konten')
    <table class='table table-striped table-hover'>
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach($nilaikuliah as $nk)
        <tr>
            <td>{{ $nk->ID }}</td>
            <td>{{ $nk->NRP }}</td>
            <td>{{ $nk->NilaiAngka }}</td>
            <td>{{ $nk->SKS }}</td>
            <td>{{ $nk->NilaiHuruf }}</td>
            <td>{{ $nk->Bobot }}</td>
        </tr>
            @endforeach
    </table>
@endsection 