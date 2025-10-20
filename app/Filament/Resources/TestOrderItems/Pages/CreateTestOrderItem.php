<?php

namespace App\Filament\Resources\TestOrderItems\Pages;

use App\Filament\Resources\TestOrderItems\TestOrderItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTestOrderItem extends CreateRecord
{
    protected static string $resource = TestOrderItemResource::class;
}
