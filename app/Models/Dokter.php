<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokters';
    protected $fillable = ['user_id' , 'nama_lengkap' , 'str' , 'jenis' , 'profil' , 'alamat' , 'photo' , 'ig' , 'twitter' , 'fb'];
}
