<?php

namespace App\Filament\Resources\TestOrderItems\Pages;

use App\Filament\Resources\TestOrderItems\TestOrderItemResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTestOrderItem extends EditRecord
{
    protected static string $resource = TestOrderItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
