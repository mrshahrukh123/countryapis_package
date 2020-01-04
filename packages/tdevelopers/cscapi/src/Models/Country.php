<?php

namespace Tdev\CSCAPI\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
            'name',
            'code'
        ];
    protected $casts = [
        'name' => 'string',
        'code' => 'string'
    ];

    public function states()
    {
        return $this->hasMany(State::class);
    }
}
