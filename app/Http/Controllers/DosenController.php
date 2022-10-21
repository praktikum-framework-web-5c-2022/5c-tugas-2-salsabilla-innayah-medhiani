<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DosenController extends Controller{
    //Raw
    public function insertRaw()
    {
         $data = DB::insert("INSERT INTO dosen 
        (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir) VALUES ('10297590','Adhi Rizal','L','Karawang','Surakarta','12 April 1983')");
        dump($data);
    }
    public function selectRaw(){
    $data=DB::select("SELECT * FROM dosen");
    dump($data);
   }
   public function updateRaw(){
    $data = DB::update("UPDATE dosen SET nama='Dadang Yusuf' WHERE nama='Adhi Rizal'");
    dump($data);
   }
   public function deleteRaw(){
    $data = DB::delete("DELETE FROM dosen WHERE nama= 'Adhi Rizal '");
    dump($data);
   }

   //Query Builder 

   public function insertQueryBuilder(){
    $data = DB::table('dosen')->insert(
        [
            'nidn' => '10297118',
            'nama' => 'Susilawati',
            'jenis_kelamin' => 'P',
            'alamat' => 'Bandung',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '2 November 1998',
        ]
        );
    dump($data);
   }
   public function selectQueryBuilder(){
    $data=DB::table("dosen")->get();
    dump($data);
   }
   public function updateQueryBuilder(){
    $data = DB::table('dosen')
    ->where('nama', 'Susilawati',)
    ->update(
        [
            'updated_at' => now(),
        ]
        );
    dump($data);
   }
   public function deleteQueryBuilder(){
    $data = DB::table('dosen')
    ->where('nama', 'Susilawati')
    ->delete();
    dump($data);
   }

   //Eloquent

   public function insertEloquent(){
    Dosen::create(
        [
            'nidn' => '10297118',
            'nama' => 'Aji Primaya',
            'jenis_kelamin' => 'L',
            'alamat' => '?',
            'tempat_lahir' => '?',
            'tanggal_lahir' => '15 Agustus 1997',
        ]
        );
    return "Data Berhasil Diproses";
   } 
   public function selectEloquent(){
    $data = Dosen::all();
    dump($data);
   }
   public function updateEloquent(){
    Dosen::where('nama', 'Aji Primaya')->first()->update([
        'name' => 'Aji Primaya'
    ]);
    return "Data Berhasil di Ubah";
   }
   public function deleteEloquent(){
    $data = Dosen::where('nama', 'Aji Primaya')->delete();
    dump($data);
    }
}