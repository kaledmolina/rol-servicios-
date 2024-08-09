<?php

namespace App\Filament\Resources\ServicePhotoResource\Pages;

use App\Filament\Resources\ServicePhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicePhotos extends ListRecords
{
    protected static string $resource = ServicePhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
