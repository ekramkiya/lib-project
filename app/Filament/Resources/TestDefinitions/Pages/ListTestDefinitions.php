<?php

namespace App\Filament\Resources\TestDefinitions\Pages;

use App\Filament\Resources\TestDefinitions\TestDefinitionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTestDefinitions extends ListRecords
{
    protected static string $resource = TestDefinitionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
