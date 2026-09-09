<?php

namespace App\Filament\Resources\Potensis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class PotensiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                TextInput::make('kategori'),
                Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                    FileUpload::make('gambar')
                    ->image() // Menandakan ini file gambar
                    ->disk('public') // Menyimpan langsung ke storage public
                    ->directory('images') // Tersimpan di folder public/storage/images
                    ->visibility('public')
                    ->columnSpanFull(),
            ]);
    }
}
