<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class BerasController extends Controller
{
    public function indexBeras()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); //hasilnya adalah array 2D
		$beras = DB::table('beras')->paginate(10);
    	// mengirim data pegawai ke view index
    	return view('indexBeras',['beras' => $beras]);
    }
	public function tambahBeras()
	{
 
		// memanggil view tambah
		return view('tambahBeras');
 
	}
	public function storeBeras(Request $request)
	{
		$stock = $request->stock;
		// Menentukan nilai kolom 'tersedia'
		$tersedia = $stock > 0 ? 'y' : 'n';
		// insert data ke table pegawai
		DB::table('beras')->insert([
			'merkberas' => $request->merek,
			'stockberas' => $stock,
			'tersedia' => $tersedia
		]);
		
		// alihkan halaman ke halaman pegawai
		return redirect('/beras');	
	}
	public function editBeras($kode)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		// select * from pegawai where pegawai_id = x
		$beras = DB::table('beras')->where('kodeberas',$kode)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editBeras',['beras' => $beras]);
	}
	// update data pegawai
	public function updateBeras(Request $request)
	{
		$stock = $request->stock;
		// Menentukan nilai kolom 'tersedia'
		$tersedia = $stock > 0 ? ($request->has('tersedia') ? $request-> tersedia : 'n') : 'n';
		// update data pegawai
		DB::table('beras')->where('kodeberas',$request->kode)->update([

			'merkberas' => $request->merek,
			'stockberas' => $stock,
			'tersedia' => $tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/beras');
	}
	public function hapusBeras($kode)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('beras')->where('kodeberas',$kode)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/beras');
	}
	public function cariBeras(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$beras = DB::table('beras')
		->where('merkberas','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('indexBeras',['beras' => $beras]);
 
	}
}