<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'timestamps',
        'nama_depan',
        'dana_belakang',
        'email',
        'no_telp',
        'tempat_lahir',
        'tanggal_lahir'
    ];
}
