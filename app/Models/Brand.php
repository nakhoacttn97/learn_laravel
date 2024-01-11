<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model{
    use HasFactory;
    public $timestamps = FALSE;     // turn off date time on database
    protected $table = 'brand';
    protected $fillable = ['id', 'name'];
    // remove method
    static function remove(int $id){
        return self::where('id', $id)->delete($id);
    }
}
