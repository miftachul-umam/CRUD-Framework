<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $primarykey = "nim";
    protected $fillable = [
        'nama', 'umur', 'alamat', 'kota', 'kelas', 'jurusan', 'created_at', 'update_at'
    ];
}
