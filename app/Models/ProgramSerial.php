<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramSerial extends Model
{
  protected $table = 'programs_serials';
  protected $guarded = [] ;

    public function channel(){
        return $this->belongsTo('App\Models\TvChannel','channel_id')
            ->join('tvchannel_content','tv_channels.id','=','tvchannel_content.channel_id')
            ->where('lang','az');
    }
}
