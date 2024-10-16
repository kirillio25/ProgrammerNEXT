<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeworkSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'submodule_id',
        'homework_file_id',
        'path_url',
    ]; 
}
