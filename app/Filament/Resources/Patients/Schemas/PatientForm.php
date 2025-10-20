<?php

namespace App\Filament\Resources\Patients\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;

class PatientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               
           TextInput::make('name')->required()->maxLength(255),
            TextInput::make('age')->numeric()->minValue(0),
            Select::make('gender')->options([
                'Male' => 'Male',
                'Female' => 'Female',
                'Other' => 'Other',
            ]),
            TextInput::make('contact')->maxLength(100),
            Textarea::make('address')->columnSpanFull(),
            ]);
          
    }
}
