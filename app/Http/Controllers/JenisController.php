<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenis;
use Barryvdh\DomPDF\Facade\Pdf;

class JenisController extends Controller
{
    public function index(){
        $data = jenis::get(); 
        return view('olahragas/jenis', compact('data'));
    }

    public function add(){
        return view('olahragas/addJenis');
    }

    public function insertdata(Request $request){
       jenis::create($request->all());
        return redirect()->route('Jenis')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = jenis::find($id);
        return view('olahragas/updateJenis' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = jenis::find($id);
        $data->update($request->all());
        return redirect()->route('Jenis')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = jenis::find($id);
        $data->delete();
        return redirect()->route('Jenis')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = jenis::all();
        $PDF = PDF::loadView('olahragas/reportjenis', array('data' => $data));
        return $PDF->stream('data-jenis.pdf');
    }
}