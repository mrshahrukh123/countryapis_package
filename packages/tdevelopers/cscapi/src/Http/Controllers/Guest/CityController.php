<?php

namespace Tdev\CSCAPI\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Tdev\CSCAPI\Http\Resources\City as CityResource;
use Tdev\CSCAPI\Models\State;
use Tdev\CSCAPI\Traits\ApiResponse;
use Illuminate\Http\Request;

class CityController extends Controller
{
    use ApiResponse;
    public function get_state_cities(Request $request, State $state)
    {
        try {
            return $this->success('Cities of '.$state->name,CityResource::collection($state->cities));

        } catch (\Exception $exception) {
            return $this->caughtException($exception);
        }

    }
}
