@extends('template')

@section('tulisan1', 'Data Beras')

@section('link1')
	<a href="/beras/tambah" class='btn btn-primary'> + Tambah Beras</a>
@endsection

@section('konten')
	<br/>
	<p>Cari Nama Beras :</p>
	<form action="/beras/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Beras .." value="{{ old('cari') }}">
		<button type="submit" class="btn btn-success">
        <i class="fa-solid fa-magnifying-glass"></i>
    </button>
	</form>
	<br/>
        <table class='table table-striped table-hover'>
            <tr>
                <th>Merek</th>
                <th>Stock</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
            @foreach($beras as $b)
            <tr>
                <td>{{ $b->merkberas }}</td>
                <td>{{ $b->stockberas }}</td>
                <td>{{ $b->tersedia }}</td>
                <td>
                    <a href="/beras/editBeras/{{ $b->kodeberas }}" class='btn btn-info btn-sm'><i class="fa-solid fa-pen-to-square"></i></a>
                    |
                    <a href="/beras/hapusBeras/{{ $b->kodeberas }}" class='btn btn-danger btn-sm'><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </table>
	<br/>
	Halaman : {{ $beras->currentPage() }} <br/>
	Jumlah Data : {{ $beras->total() }} <br/>
	Data Per Halaman : {{ $beras->perPage() }} <br/>
 
 
	{{ $beras->links() }}
@endsection 