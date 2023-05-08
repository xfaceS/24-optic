<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;


    /* -------------------------------- ATTRIBUTE ------------------------------- */

    public function getCategoryNameAttribute(){
        return $this->category ? $this->category->name : "";
    }

    public function setImagesAttribute($images)
    {
        if (is_array($images)) {
            $this->attributes['images'] = json_encode($images);
        }
    }

    public function getImagesAttribute($images)
    {
        return json_decode($images, true);
    }


    /* ------------------------------ RELATIONSHIP ------------------------------ */

    public function category(){
        return $this->belongsTo(CategoryNews::class,'category_news_id');
    }
}
