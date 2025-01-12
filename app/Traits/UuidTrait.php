<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UuidTrait
{
    
    protected static function bootUuidTrait()
    {
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    /**
     * Tell Laravel the primary key is not an incrementing integer.
     *
     * @return bool
     */
    public function getIncrementing()
    {
        return false;
    }

    /**
     * Tell Laravel the primary key is a string.
     *
     * @return string
     */
    public function getKeyType()
    {
        return 'string';
    }
}
