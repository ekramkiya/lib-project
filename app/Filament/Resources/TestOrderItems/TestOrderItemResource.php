<?php

namespace App\Filament\Resources\TestOrderItems;

use App\Filament\Resources\TestOrderItems\Pages\CreateTestOrderItem;
use App\Filament\Resources\TestOrderItems\Pages\EditTestOrderItem;
use App\Filament\Resources\TestOrderItems\Pages\ListTestOrderItems;
use App\Filament\Resources\TestOrderItems\Schemas\TestOrderItemForm;
use App\Filament\Resources\TestOrderItems\Tables\TestOrderItemsTable;
use App\Models\TestOrderItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TestOrderItemResource extends Resource
{
    protected static ?string $model = TestOrderItem::class;

protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedListBullet;

    public static function form(Schema $schema): Schema
    {
        return TestOrderItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TestOrderItemsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTestOrderItems::route('/'),
            'create' => CreateTestOrderItem::route('/create'),
            'edit' => EditTestOrderItem::route('/{record}/edit'),
        ];
    }
}
