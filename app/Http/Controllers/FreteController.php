<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Models\Frete;
use App\Enums\FreteStatus;
use App\Http\Requests\StoreFreteRequest;

class FreteController extends Controller
{
    public function store(StoreFreteRequest $request)
    {
        $dados = $request->all();
        $dados['codigo_rastreio'] = Helpers::generateUniqueTrackingCode();
        $dados['status'] = FreteStatus::EM_TRANSITO;

        $frete = Frete::create($dados);

        return $frete;
    }
}
