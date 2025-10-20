<?php

namespace App\Filament\Resources\TestOrders\Pages;

use App\Filament\Resources\TestOrders\TestOrderResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTestOrder extends CreateRecord
{
    protected static string $resource = TestOrderResource::class;
}
