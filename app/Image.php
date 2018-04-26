<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'url', 'title', 'user_id','description'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
