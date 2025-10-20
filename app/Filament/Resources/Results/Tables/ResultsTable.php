<?php

namespace App\Filament\Resources\Results\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ResultsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('orderItem.testDefinition.name')->label('Test'),
                TextColumn::make('result_value')->label('Result'),
                TextColumn::make('unit'),
                TextColumn::make('is_abnormal')->badge()
                    ->colors(['danger' => true, 'success' => false])
                    ->formatStateUsing(fn($state) => $state ? 'Abnormal' : 'Normal'),
                TextColumn::make('created_at')->since(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
