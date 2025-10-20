<?php

namespace App\Filament\Resources\TestOrders\Pages;

use App\Filament\Resources\TestOrders\TestOrderResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTestOrder extends EditRecord
{
    protected static string $resource = TestOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
