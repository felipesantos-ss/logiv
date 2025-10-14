<?php

namespace App\Filament\Resources\Fretes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FretesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('origem')
                    ->searchable(),
                TextColumn::make('destino')
                    ->searchable(),
                TextColumn::make('codigo_rastreio')
                    ->label('Código de Rastreio')
                    ->searchable(),
                TextColumn::make('status')
                    ->badge()
                    ->searchable(),
                TextColumn::make('remetente_id')
                    ->label('Remetente')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('destinatario_id')
                    ->label('Destinatário')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Data de Criação')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Data última Atualização')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
