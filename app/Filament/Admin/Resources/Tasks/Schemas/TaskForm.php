<?php

namespace App\Filament\Admin\Resources\Tasks\Schemas;

use App\Models\Classes;
use App\Models\Matkul;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TaskForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('notes')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('deadline')
                    ->required(),
                Select::make('matkul_id')
                    ->label('Mata Kuliah')
                    ->options(Matkul::query()->pluck('matkul_name', 'id')->toArray())
                    ->searchable()->required(),
                Select::make('class_id')
                    ->label('Kelas')
                    ->options(Classes::query()->pluck('class_name', 'id')->toArray())
                    ->searchable()->required(),
            ]);
    }
}
