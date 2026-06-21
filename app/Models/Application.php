<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    protected $fillable = [
        'internship_id',
        'applicant_name',
        'applicant_email',
        'cover_letter',
        'resume_link'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
