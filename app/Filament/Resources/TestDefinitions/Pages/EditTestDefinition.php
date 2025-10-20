<?php

namespace App\Filament\Resources\TestDefinitions\Pages;

use App\Filament\Resources\TestDefinitions\TestDefinitionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTestDefinition extends EditRecord
{
    protected static string $resource = TestDefinitionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
