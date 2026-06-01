<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'internship_id',
        'applicant_name',
        'applicant_email',
        'cover_letter',
        'resume_link'
    ];
}
