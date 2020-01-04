<?php

namespace Tdev\CSCAPI\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class City extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'city_id' => $this->id,
            'city_name' => $this->name,
            'state_id' => $this->state_id,
        ];
    }
}
