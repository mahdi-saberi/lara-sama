<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * لیست کلیه تگ های این تصویر
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }

    /**
     * لیست id های تگ های این تصویر
     * @return mixed
     */
    public function getTagListAttribute(){
        return $this->tags->lists('id')->all();
    }

}
