<?php

namespace App\Filament\Admin\Resources\Tasks\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TaskInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('notes')
                    ->columnSpanFull(),
                TextEntry::make('deadline')
                    ->date(),
                TextEntry::make('matkul_id')
                    ->numeric(),
                TextEntry::make('class_id')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
