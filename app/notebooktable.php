<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|null|string name
 */
class notebooktable extends Model
{
    //
    protected $fillable=['name'];
   // protected $fillable=['user_id'];
}
