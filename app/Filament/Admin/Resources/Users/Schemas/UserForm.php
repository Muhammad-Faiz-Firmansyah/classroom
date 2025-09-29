<?php

namespace App\Filament\Admin\Resources\Users\Schemas;

use App\Models\Classes;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                Select::make('role')
                    ->options(['pj' => 'Penanggung Jawab', 'student' => 'Siswa'])
                    ->required(),
                Select::make('class_id')
                    ->label("Kelas")
                    ->options(Classes::query()->pluck('class_name', 'id')->toArray())
                    ->searchable()
                    ->required(),
            ]);
    }
}
