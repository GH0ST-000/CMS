<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketplace extends Model
{
    use HasFactory;

    public static function GetPayment($id){
        return Payment::Where('user_id','=',$id)->get()->first();
    }
}
