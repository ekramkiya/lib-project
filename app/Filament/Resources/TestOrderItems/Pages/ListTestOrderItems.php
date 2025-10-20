<?php

namespace App\Filament\Resources\TestOrderItems\Pages;

use App\Filament\Resources\TestOrderItems\TestOrderItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTestOrderItems extends ListRecords
{
    protected static string $resource = TestOrderItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
