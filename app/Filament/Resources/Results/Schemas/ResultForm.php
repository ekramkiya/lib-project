<?php

namespace App\Filament\Resources\Results\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use App\Models\TestOrderItem;

class ResultForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('test_order_item_id')
                    ->label('Test')
                    ->options(function () {
                        return TestOrderItem::with('testDefinition')
                            ->get()
                            ->pluck('testDefinition.name', 'id'); // display test name
                    })
                    ->searchable()
                    ->required(),

                TextInput::make('result_value')->required(),
                TextInput::make('unit'),
                TextInput::make('reference_range')->label('Reference Range'),
                Toggle::make('is_abnormal')->label('Abnormal?'),
            ]);
    }
}
