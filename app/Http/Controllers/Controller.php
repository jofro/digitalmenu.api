<?php

// namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Routing\Controller as BaseController;

// class Controller extends BaseController
// {
//     use AuthorizesRequests, ValidatesRequests;
// }

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

abstract class Controller
{
    use AuthorizesRequests;

    public function __invoke()
    {
        DB::beginTransaction();

        try {
            $parameters = Route::getCurrentRoute()->parameters();

            $response = app()->call([$this, 'handle'], $parameters);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

        DB::commit();

        return $response;
    }
}
