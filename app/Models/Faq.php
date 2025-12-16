<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    // Nama tabel (opsional, tapi aman)
    protected $table = 'faqs';

    // Field yang boleh diisi (sesuai migration FAQ)
    protected $fillable = [
        'question',
        'answer',
        'user_name',
        'user_email',
        'status'
    ];

    // Default attribute
    protected $attributes = [
        'status' => 'pending'
    ];
}
