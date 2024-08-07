<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'isi_berita', 'gambar', 'tanggal_upload'];

    protected $dates = ['tanggal_upload'];
}
