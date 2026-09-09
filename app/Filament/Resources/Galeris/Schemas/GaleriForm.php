<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                FileUpload::make('gambar')
                    ->image() // Menandakan ini file gambar
                    ->disk('public') // Menyimpan langsung ke storage public
                    ->directory('images') // Tersimpan di folder public/storage/images
                    ->visibility('public')
                    ->columnSpanFull(),
                DatePicker::make('tanggal'),
            ]);
    }
}
