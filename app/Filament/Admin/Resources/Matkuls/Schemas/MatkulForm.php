<?php

namespace App\Filament\Admin\Resources\Matkuls\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MatkulForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('matkul_name')
                    ->required(),
            ]);
    }
}
