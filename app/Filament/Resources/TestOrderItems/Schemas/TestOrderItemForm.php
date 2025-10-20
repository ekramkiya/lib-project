<?php

namespace App\Filament\Resources\TestOrderItems\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TestOrderItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('test_order_id')
                    ->relationship('order', 'id')
                    ->label('Order ID')
                    ->required(),
               Select::make('test_definition_id')
                    ->relationship('testDefinition', 'name')
                    ->searchable()
                    ->required(),
                TextInput::make('price')->numeric()->prefix('₱'),
               
            ]);
    }
}
