<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat_masuk extends Model
{
    //
    // protected $guarded = ['id'];

    protected $fillable = [
	    'judul',
	    'isi_surat',
	    'user_id',
	    'tujuan',
	    'status'
	];

    public function user(){
    	return $this->belongsTO(User::class);
    }
}
