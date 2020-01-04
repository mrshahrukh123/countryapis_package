<?php

namespace Tdev\CSCAPI\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'name',
        'country_id'
    ];
    protected $casts = [
        'name' => 'string',
        'country_id' => 'integer'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
