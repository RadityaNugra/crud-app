<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class siswa extends Controller
{
    //
    function index(){

        $data = DB::table('siswa')->get();

        return view('index',['data'=>$data]);
    }

    public function tambah(){

        return view('tambah');
    }

    public function tambahData(Request $request){

        DB::table('siswa')->insert([
            'NIPD' =>$request->NIPD,
            'nama' =>$request->nama,
            'kelas'=>$request->kelas,
            'alamat'=>$request->alamat,
            'jenis_kelamin'=>$request->jenis_kelamin,
        ]);

        return redirect('/index');
       }
// edit
       public function edit($id){

        $siswa = DB::table('siswa')->where('id',$id)->get();

        return view('update',['siswa' =>$siswa]);
       }
// editgenerate
       public function update(Request $request ,$id)
{

	DB::table('siswa')->where('id',$id)
    ->update([
            'NIPD' =>$request->NIPD,
            'nama' =>$request->nama,
            'kelas'=>$request->kelas,
            'alamat'=>$request->alamat,
            'jenis_kelamin'=>$request->jenis_kelamin,
    ]);

    return redirect('index');
}

public function delete($id)
{
    DB::table('siswa')->where('id', $id)->delete();

    return redirect('index');
}

}


