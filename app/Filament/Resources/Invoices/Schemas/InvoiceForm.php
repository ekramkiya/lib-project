<?php

namespace App\Filament\Resources\Invoices\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class InvoiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('test_order_id')
                    ->relationship('order', 'id')
                    ->label('Order #')
                    ->required(),
                TextInput::make('total_amount')->numeric()->prefix('₱')->required(),
                TextInput::make('paid_amount')->numeric()->prefix('₱'),
                Select::make('status')->options([
                    'unpaid' => 'Unpaid',
                    'partial' => 'Partially Paid',
                    'paid' => 'Paid',
                ])->required(),
             

            ]);
    }
}
