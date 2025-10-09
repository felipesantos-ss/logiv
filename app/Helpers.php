<?php

namespace App;

use App\Models\Frete;
use Illuminate\Support\Str;

class Helpers
{
    static public function generateUniqueTrackingCode(): string{
        do {
            $code = Str::upper(Str::random(8));

            $existsTrackingCode = Frete::where('codigo_rastreio', $code)->exists();
        } while ($existsTrackingCode);

        return $code;
    }
}