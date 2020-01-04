<?php

namespace Tdev\CSCAPI\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class State extends JsonResource
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
            'state_id' => $this->id,
            'state_name' => $this->name,
            'country_id' => $this->country_id,
            'cities_uri'    => route('apis.guest.state_cities', ['state' => $this->id])
        ];
    }
}
