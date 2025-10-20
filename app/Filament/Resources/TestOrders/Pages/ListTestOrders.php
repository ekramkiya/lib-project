<?php

namespace App\Filament\Resources\TestOrders\Pages;

use App\Filament\Resources\TestOrders\TestOrderResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTestOrders extends ListRecords
{
    protected static string $resource = TestOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
