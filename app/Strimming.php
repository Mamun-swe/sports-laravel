<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strimming extends Model
{
    protected $fillable = [
        'title', 'start_time', 'image', 'video_link',
    ];
}
