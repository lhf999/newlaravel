<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Library extends Model
{
    public function getList(){
        $arr = DB::table('library')->paginate(20)->toArray();
        return $arr;
    }
}
