<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutContact extends Model
{
    protected $fillable = [
        'about_content', 'address', 'email', 'facebook', 'instagram', 'youtube', 'discord',
    ];
}