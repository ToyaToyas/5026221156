<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class PageVisitController extends Controller
{
    public function indexVisitors()
    {
    	// mengambil data dari table pegawai
    	//$visitors = DB::table('pagecounter')->get(); //hasilnya adalah array 2D
		DB::table('pagecounter')->increment('Jumlah');
        $visitors = DB::table('pagecounter')->get();
    	// mengirim data visitors ke view index
    	return view('indexVisitors',['visitors' => $visitors]);
    }
}