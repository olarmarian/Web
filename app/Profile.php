<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function profileImage(){
        $imagePath = ($this->image) ? '/storage/'.$this->image : 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/300px-No_image_available.svg.png';
        return $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class); 
    }
}
