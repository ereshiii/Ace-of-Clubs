<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JoinRequest extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'reason'];  
}
