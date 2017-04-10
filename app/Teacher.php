<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id', 'subjects', 'role_id', 'classes', 'is_class_teacher', 'qualification', 'remember_token', 'deleted_on'
    ];
}
