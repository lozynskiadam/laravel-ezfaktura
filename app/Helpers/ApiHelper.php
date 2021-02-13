<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ApiHelper
{
    public static function generateKey()
    {
        while (true) {
            $key = [];
            foreach (range(0, 5) as $i) {
                $key[] = Str::random(5);
            }
            $key = implode('-', $key);
            if (!(DB::select('select 1 from users where api_key = :api_key', ['api_key' => $key]))) {
                break;
            }
        }
        return $key;
    }
}