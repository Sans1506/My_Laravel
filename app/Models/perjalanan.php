<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perjalanan extends Model
{
    use HasFactory;
    protected $table='perjalanans';
    protected $fillable=[
        'id_user',
        'tanggal',
        'lokasi'
    ];
    protected $hidden = [
        'id_user',
        'remember_token',
    ];
}