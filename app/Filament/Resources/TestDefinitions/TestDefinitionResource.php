<?php

namespace App\Filament\Resources\TestDefinitions;

use App\Filament\Resources\TestDefinitions\Pages\CreateTestDefinition;
use App\Filament\Resources\TestDefinitions\Pages\EditTestDefinition;
use App\Filament\Resources\TestDefinitions\Pages\ListTestDefinitions;
use App\Filament\Resources\TestDefinitions\Schemas\TestDefinitionForm;
use App\Filament\Resources\TestDefinitions\Tables\TestDefinitionsTable;
use App\Models\TestDefinition;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class TestDefinitionResource extends Resource
{
    protected static ?string $model = TestDefinition::class;

protected static UnitEnum|string|null $navigationGroup = 'Tests';  
  protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBeaker;

   
    public static function form(Schema $schema): Schema
    {
        return TestDefinitionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TestDefinitionsTable::configure($table);
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
            'index' => ListTestDefinitions::route('/'),
            'create' => CreateTestDefinition::route('/create'),
            'edit' => EditTestDefinition::route('/{record}/edit'),
        ];
    }
}
