<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kost_Images extends Model
{
	 protected $table = 'kost_images';

    protected $fillable = [
        'kost_id', 'filename',
    ];

        public function kost(){
    	return $this->belongsTo('App\Kost','kost_id');
    }
}
