<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuLocation extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'location', 'content', 'created_at', 'updated_at'];
}
