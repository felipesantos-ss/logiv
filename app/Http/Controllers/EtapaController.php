<?php

namespace App\Http\Controllers;

use App\Models\Etapa;
use App\Models\Frete;
use App\Enums\FreteStatus;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreEtapaRequest;

class EtapaController extends Controller
{
    public function store(StoreEtapaRequest $request): JsonResponse|Etapa
    {
        $frete = Frete::find($request->frete_id);

        if ($frete->status == FreteStatus::ENTREGUE) {
            return response()->json([
                'message' => 'Este frete já foi concluído. Não é possível adicionar novas etapas.',
            ], 400);
        }

        $etapa = Etapa::create($request->all());
        $tipoFreteStatus = FreteStatus::fromName($request->tipo_etapa);
        $frete->update(['status' => $tipoFreteStatus]);

        return $etapa;
    }
}
