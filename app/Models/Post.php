<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property $title string
 * @property $anons string
 * @property $text string
 */
class Post extends Model
{
    public $timestamps = false;
}
