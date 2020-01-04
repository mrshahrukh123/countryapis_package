<?php

namespace Tdev\CSCAPI\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Tdev\CSCAPI\Models\Country;
use Tdev\CSCAPI\Http\Resources\Country as CountryResource;
use Tdev\CSCAPI\Traits\ApiResponse;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    use ApiResponse;
    public function get_countries()
    {
        try {
            return $this->success('All countries',CountryResource::collection(Country::all()));

        } catch (\Exception $exception) {
            return $this->caughtException($exception);
        }

    }
}
