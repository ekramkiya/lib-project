<?php

namespace App\Filament\Resources\TestDefinitions\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TestDefinitionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                Select::make('category')
                    ->options([
                        'Blood' => 'Blood',
                        'Urine' => 'Urine',
                        'Other' => 'Other',
                    ]),
                TextInput::make('unit'),
                TextInput::make('reference_range')->label('Reference Range'),
                TextInput::make('price')->numeric()->prefix('₱')->required(),
            ]);
    }
}
