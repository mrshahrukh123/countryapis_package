<?php

namespace Tdev\CSCAPI\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Country extends JsonResource
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
            'country_id'    => $this->id,
            'country_name'  => $this->name,
            'country_code'  => $this->code,
            'states_uri'    => route('apis.guest.country_states', ['country' => $this->id])
        ];
    }
}
