<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homebanner extends Model
{
    protected $fillable = ['heading', 'description', 'link', 'bg'];
}
