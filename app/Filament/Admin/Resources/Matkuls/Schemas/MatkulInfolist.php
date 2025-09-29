<?php

namespace App\Filament\Admin\Resources\Matkuls\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MatkulInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('matkul_name'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
