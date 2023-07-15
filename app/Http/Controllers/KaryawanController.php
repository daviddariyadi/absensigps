<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->orderBy('nama_lengkap')->paginate(5);
        return view('karyawan.index', compact('karyawan'));
    }
    public function store(Request $request)
    {
        $nik = $request->nik;
        $nama_lengkap = $request->nama_lengkap;
        $jabatan = $request->jabatan;
        $no_hp = $request->no_hp;
        $password = Hash::make('12345');
        $remember_token = $request->remember_token;
        $karyawan = DB::table('karyawan')->where('nik', $nik)->first();
        try {
            $data = [
                'nik' => $nik,
                'nama_lengkap' => $nama_lengkap,
                'jabatan' => $jabatan,
                'no_hp' => $no_hp,
                'password' => $password,
                'remember_token' => $remember_token
            ];
            $simpan = DB::table('karyawan')->insert($data);

            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan']);
        } catch (\Exception $e) {

            //dd($e);
           return Redirect::back()->with(['warning' => 'Data Gagal Disimpan']);
        }
    }
    public function edit(Request $request)
    {
        $nik = $request->nik;
        return view('karyawan.edit');
    }
    public function delete ($nik){
    $delete = DB::table('karyawan')->where('nik',$nik)->delete();
if($delete){
    return Redirect::back()->with(['warning'=> 'Data Berhasil Dihapus']);
} else {
    return Redirect::back()->with(['warning'=> 'Data Gagal Dihapus']);
}
}
}

