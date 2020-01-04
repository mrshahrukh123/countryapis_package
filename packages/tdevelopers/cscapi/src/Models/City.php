<?php

namespace Tdev\CSCAPI\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'state_id'
    ];
    protected $casts = [
        'name' => 'string',
        'state_id' => 'integer'
    ];

    public function State()
    {
        return $this->belongsTo(State::class);
    }
}
