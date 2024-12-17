<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class EASController extends Controller
{
    public function indexEAS()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); //hasilnya adalah array 2D
		$nilaikuliah = DB::table('nilaikuliah')->get();
    	// mengirim data pegawai ke view index
        // Menambahkan kolom NilaiHuruf dan Bobot hanya di memori
        foreach ($nilaikuliah as $item) {
            // Menentukan NilaiHuruf
            if ($item->NilaiAngka >= 81) {
                $item->NilaiHuruf = 'A';
            } elseif ($item->NilaiAngka >= 61) {
                $item->NilaiHuruf = 'B';
            } elseif ($item->NilaiAngka >= 41) {
                $item->NilaiHuruf = 'C';
            } else {
                $item->NilaiHuruf = 'D';
            }

            // Menghitung Bobot (Nilai * SKS)
            $item->Bobot = $item->NilaiAngka * $item->SKS;
        }
    	return view('indexEAS',['nilaikuliah' => $nilaikuliah]);
    }
    public function tambahData()
    {
        		// memanggil view tambah
		return view('tambahData');
    }
    public function storeNilai(Request $request)
	{
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');	
	}
}