<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Userdetails extends Model
{
    protected $table = 'userdetails'; 

    protected $fillable = [
        'unique_id',
        'name',
        'email',
        'gender',
        'd_o_b',
        'Religion',
        'Caste',
        'fname',
        'foccup',
        'mname',
        'moccup',
        'qualif',
        'address',
        'cnumber',
        'degree',
        'langs',
    ];
    public static function insertUserdetails($data)
    {
        return DB::table('userdetails')->insert($data);
    }
    public static function getUserdetails($uniqueId)
    {
        return DB::table('userdetails')->where('unique_id', $uniqueId)->first();
    }
    public static function checkUniqueId($uniqueId)
    {
        return DB::table('userdetails')->where('unique_id', $uniqueId)->exists();
    }

    public static function updateUserdetails($data, $uniqueId)
    {
        return DB::table('userdetails')->where('unique_id', $uniqueId)->update($data);
    }
}