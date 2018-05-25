<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable =['tag'];
    
    /**
     * 
     * @return type
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post');
        
    }
}
