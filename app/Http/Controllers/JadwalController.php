<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal;

class JadwalController extends Controller
{
    //
    public function index(){
        $data = jadwal::get(); 
        return view('jadwals/jadwal', compact('data'));
    }

    public function add(){
        return view('jadwals/addjadwal');
    }

    public function insertdata(Request $request){
        jadwal::create($request->all());
        return redirect()->route('Jadwal')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = jadwal::find($id);
        return view('jadwals/updatejadwal' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = jadwal::find($id);
        $data->update($request->all());
        return redirect()->route('Jadwal')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = jadwal::find($id);
        $data->delete();
        return redirect()->route('Jadwal')->with('danger', 'Data Berhasil Dihapus!');
    }
}
