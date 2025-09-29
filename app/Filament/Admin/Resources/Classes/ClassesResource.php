<?php

namespace App\Filament\Admin\Resources\Classes;

use App\Filament\Admin\Resources\Classes\Pages\CreateClasses;
use App\Filament\Admin\Resources\Classes\Pages\EditClasses;
use App\Filament\Admin\Resources\Classes\Pages\ListClasses;
use App\Filament\Admin\Resources\Classes\Pages\ViewClasses;
use App\Filament\Admin\Resources\Classes\Schemas\ClassesForm;
use App\Filament\Admin\Resources\Classes\Schemas\ClassesInfolist;
use App\Filament\Admin\Resources\Classes\Tables\ClassesTable;
use App\Models\Classes;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClassesResource extends Resource
{
    protected static ?string $model = Classes::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Kelas';

    public static function form(Schema $schema): Schema
    {
        return ClassesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ClassesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClassesTable::configure($table);
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
            'index' => ListClasses::route('/'),
            'create' => CreateClasses::route('/create'),
            'view' => ViewClasses::route('/{record}'),
            'edit' => EditClasses::route('/{record}/edit'),
        ];
    }
}
