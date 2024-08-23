<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company',
        'position',
        'description',
        'start_date',
        'end_date',
    ];
    protected $dates = ['start_date', 'end_date']; // Pastikan kolom tanggal dicantumkan di sini

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}