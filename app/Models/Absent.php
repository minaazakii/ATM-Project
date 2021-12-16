<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absent extends Model
{
    use HasFactory;


    public function user()
    {
        $user = User::find($this->user_id);
        return $user;
    }
}
