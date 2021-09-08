<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TvChannel extends Model
{

    protected $table = 'tv_channels';
    protected $guarded = [] ;



    public function country(){
        return $this->belongsTo('App\Models\Country','country_id')
            ->join('country_content','countries.id','=','country_content.country_id')
            ->where('language','az');
    }
}
