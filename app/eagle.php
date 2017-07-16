<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Eagle extends Model
{

    public static function scopeConactsShow($query){
        $connection = DB::connection('mysql2')->select('SELECT * FROM EAGLEDW.CX WHERE cx_customer = 000150');

        return $query->$connection('cx_email_addr_lookup_key')->get();
    }

}