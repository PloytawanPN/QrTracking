<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrcode extends Model
{
    use HasFactory;

    protected $table = 'qrcodes';

    protected $fillable = [
        'file_name',
        'pet_code',
        'status',
    ];
}
