<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Bagian extends Model
{
    use HasFactory;
    protected $table = 'bagian';
    protected $primaryKey = 'id_bagian';

    public function user(){
        return $this->hasMany(User::class, 'id_bagian');
    }
}
