<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Master\Siswa;
class HomeController extends Controller
{
    public function index()
    {
        return view('contents.home');
    }
    public function login(Request $req)
    {
        // $this->validate($req, [
        //     'nisn' => 'required'
        // ]);
        $validator = Validator::make($req->all(),[
            'nisn' => 'required|numeric',
            'password' => 'required|min:6'
        ]);
        if ($validator->fails()) 
        {
            return response($validator->errors());
        }
        
        // $siswa = Siswa::where('nisn',$req->nisn)->first();
        $query = Siswa::query();
        if ($req->has('nis')) 
        {
            $query->where('nis',$req->nis);
        }
        $siswa = $query->first();
        if(!$siswa)
        {
            return response('Data not found');
        }
        
        return $siswa;
        // return response($req->all());
    }
}
