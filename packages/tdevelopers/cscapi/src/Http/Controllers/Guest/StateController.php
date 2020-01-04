<?php

namespace Tdev\CSCAPI\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Tdev\CSCAPI\Http\Resources\State as StateResource;
use Tdev\CSCAPI\Models\Country;
use Tdev\CSCAPI\Traits\ApiResponse;
use Illuminate\Http\Request;

class StateController extends Controller
{
    use ApiResponse;
    public function get_country_states(Request $request, Country $country)
    {
        try {

            return $this->success('States of '.$country->name,StateResource::collection($country->states));

        } catch (\Exception $exception) {
            return $this->caughtException($exception);
        }

    }
}
