<?php

namespace App\Filament\Resources\Results\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ResultForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               Select::make('test_order_item_id')
                    ->relationship('orderItem.testDefinition', 'name')
                    ->label('Test')
                    ->required(),
                TextInput::make('result_value')->required(),
               TextInput::make('unit'),
                TextInput::make('reference_range')->label('Reference Range'),
              Toggle::make('is_abnormal')->label('Abnormal?'),


            ]);
    }
}
