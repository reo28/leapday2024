<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdd extends Model
{
    use HasFactory;

    protected $guard = 'user';
    protected $fillable  = [ 'title', 'body', 'password'];

}
