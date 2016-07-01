<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public static function saveimage($data)
    {
    	$Media = new Media();

        $Media->img_name = $data['img_name'];
        $Media->ip = $data['ip'];
        $Media->save();
        
    }
}
