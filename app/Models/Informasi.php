<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Informasi extends Model
{
    use HasFactory;

    protected $table = 'informasi';

    protected $fillable = [
        'Judul',
        'SubJudul',
        'Deskripsi',
        'Image',
    ];

    public function setJudulAttribute($value)
    {
        $this->attributes['Judul'] = $value;
        $this->attributes['SubJudul'] = Str::slug($value, '-');
    }
}
