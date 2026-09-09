<?php

namespace App\Filament\Resources\Kegiatans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class KegiatanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('tanggal')
                    ->required(),
                TextInput::make('lokasi'),
                FileUpload::make('gambar')
    ->image() // Menandakan ini file gambar
    ->disk('public') // Menyimpan langsung ke storage public
    ->directory('images') // Tersimpan di folder public/storage/images
    ->visibility('public')
    ->columnSpanFull(),
            ]);
    }
}
