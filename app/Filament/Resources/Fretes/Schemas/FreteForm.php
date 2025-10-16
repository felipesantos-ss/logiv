<?php

namespace App\Filament\Resources\Fretes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FreteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('codigo_rastreio')
                    ->label('Código de Rastreio')
                    ->readOnly()
                    ->default('Código Gerado Automaticamente')
                    ->required(),
                TextInput::make('status')
                    ->readOnly()
                    ->default('Em Trânsito')
                    ->required(),
                TextInput::make('origem')
                    ->required(),
                TextInput::make('destino')
                    ->required(),
                Select::make('remetente_id')
                    ->label('Remetente')
                    ->relationship('remetente', 'nome')
                    ->required(),
                Select::make('destinatario_id')
                    ->label('Destinatário')
                    ->relationship('destinatario', 'nome')
                    ->required(),
            ]);
    }
}
