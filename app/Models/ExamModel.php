<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamModel extends Model
{
    use HasFactory;

    Protected $table = 'exam_data';
	Protected $primaryKey = 'id';
	Protected $keyType = 'int';
	Public $incrementing = true;
	Public $timestamps = false;
}
