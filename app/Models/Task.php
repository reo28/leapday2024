<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    protected $fillable  = [ 'title', 'body', 'start_date', 'end_date', 'user_id', 'user_name'];

    public function anything() {
          return  $this-> belongsTo(User::class , 'user_id');
      }
      public static function getPostByUserId($userId)
      {
          return Task::where('user_id', $userId)->get();
      }
}
