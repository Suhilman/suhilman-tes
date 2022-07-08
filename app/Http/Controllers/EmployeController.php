<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;

class EmployeController extends Controller
{
    public function index(){
        $data=Employe::all();
        return view('datapegawai',compact('data')); 
    }

    public function tambahpegawai(){

        return view('tambahdata'); 
    }

    public function insertdata(Request $request){
       
        $data = Employe::create($request->all());
        if ($request->hasfile('foto')){
            $request->file('foto')->move('fotopegawai/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();

        }
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Simpan!');
    }


    public function tampilkandata($id){
        $data = Employe::find($id);
        return view('tampildata',compact('data'));

    }

    public function updatedata(Request $request, $id){
        $data = Employe::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Perbarui!');

    }

    public function delete($id){
        $data = Employe::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Hapus!');

    }

    public function exportexcel(){
        return Excel::download(new EmployeeExport,'datapegawai.xlsx');

    }
}
