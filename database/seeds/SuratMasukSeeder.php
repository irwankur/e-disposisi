<?php

use Illuminate\Database\Seeder;
use App\surat_masuk;

class SuratMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        surat_masuk::create([ 
        	'judul' => 'surat masuk 1', 
        	'isi_surat' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 
        	'user_id' => '1', 
        	'tujuan' => '2', 
        	'status' => '0' 
        ]);
    }
}
