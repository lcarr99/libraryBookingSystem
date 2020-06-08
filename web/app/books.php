<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $table = "books";
    protected $primaryKey = "b_id";
    public $timestamps = false;
}
