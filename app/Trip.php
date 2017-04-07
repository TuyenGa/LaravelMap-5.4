<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trip extends Model
{
    /**
     * A Marker is composed of many photo
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    protected $fillable= [
      'street',
        'state',
        'city',
        'zip',
        'price',
        'lat',
        'lng',
        'description',
        'user_id'
    ];

    public static function locatedAt( $zip, $street)
    {
        $street = str_replace('-', ' ', $street);

        return static::where(compact('zip', 'street'))->firstOrFail();
    }


    public function getPriceAttribute($price)
    {
        return '$'.number_format($price);
    }

    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo); 
    }

    public function photos()
    {
            return $this->hasMany('App\Photo');
    }
    
    public  function users()
    {
        return $this->belongsTo(User::class ,'id');
    }
}
