<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property  $name string
 * @property  $email string
 * @property  $subject string
 * @property  $text string
 * @property $message string
 */
class Message extends Model
{
    public $timestamps = false;
}
