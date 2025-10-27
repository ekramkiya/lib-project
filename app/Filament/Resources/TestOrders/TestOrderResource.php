<?php

namespace App\Filament\Resources\TestOrders;

use App\Filament\Resources\TestOrders\Pages\CreateTestOrder;
use App\Filament\Resources\TestOrders\Pages\EditTestOrder;
use App\Filament\Resources\TestOrders\Pages\ListTestOrders;
use App\Filament\Resources\TestOrders\Schemas\TestOrderForm;
use App\Filament\Resources\TestOrders\Tables\TestOrdersTable;
use App\Models\TestOrder;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class TestOrderResource extends Resource
{
    protected static ?string $model = TestOrder::class;

    protected static UnitEnum|string|null $navigationGroup = 'Tests';
  
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    public static function form(Schema $schema): Schema
    {
        return TestOrderForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TestOrdersTable::configure($table);
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
            'index' => ListTestOrders::route('/'),
            'create' => CreateTestOrder::route('/create'),
            'edit' => EditTestOrder::route('/{record}/edit'),
        ];
    }
}
