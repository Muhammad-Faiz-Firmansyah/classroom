<?php

namespace App\Filament\Admin\Resources\Matkuls;

use App\Filament\Admin\Resources\Matkuls\Pages\CreateMatkul;
use App\Filament\Admin\Resources\Matkuls\Pages\EditMatkul;
use App\Filament\Admin\Resources\Matkuls\Pages\ListMatkuls;
use App\Filament\Admin\Resources\Matkuls\Pages\ViewMatkul;
use App\Filament\Admin\Resources\Matkuls\Schemas\MatkulForm;
use App\Filament\Admin\Resources\Matkuls\Schemas\MatkulInfolist;
use App\Filament\Admin\Resources\Matkuls\Tables\MatkulsTable;
use App\Models\Matkul;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MatkulResource extends Resource
{
    protected static ?string $model = Matkul::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Mata Kuliah';

    public static function form(Schema $schema): Schema
    {
        return MatkulForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MatkulInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MatkulsTable::configure($table);
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
            'index' => ListMatkuls::route('/'),
            'create' => CreateMatkul::route('/create'),
            'view' => ViewMatkul::route('/{record}'),
            'edit' => EditMatkul::route('/{record}/edit'),
        ];
    }
}
