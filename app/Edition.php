<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Edition extends Model
{
    public function paper(){
        return $this->hasOne(Paper::class);
    }


    /**
     * Set the unique slug.
     *
     * @param $value
     * @param $extra
     */
    public function setUniqueSlug($value, $extra)
    {
        $slug = Str::slug($value.'-'.$extra);

        if (static::whereSlug($slug)->exists()) {
            $this->setUniqueSlug($slug, (int) $extra + 1);

            return;
        }

        $this->attributes['slug'] = $slug;
    }
}
