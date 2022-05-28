<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PenggunaController extends Controller
{
    //
    public function index(){

    	$user = User::all();

    	return view('admin.pengguna', compact('user'));
    }

    public function tambah(){
    	return view('admin.pengguna_tambah');
    }

    public function tambah_aksi(Request $request){

    	$req = $request->all();

    	// $req['password'] = bcrypt($req['password']);
    	$req['password'] = $req['email'];

    	User::create([
    		'name' 		=> $req['nama'],
    		'email' 	=> $req['email'],
    		'password' 	=> $req['password'],
    		'role' 		=> $req['jabatan']
    	]);

    	$request->session()->flash('success', 'Data Berhasil Disimpan');

    	return redirect('/pengguna');
    }

    public function ubah(){

    	return view('admin.pengguna_ubah');
    }


}
