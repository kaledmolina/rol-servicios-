<?php

namespace App\Filament\Personal\Resources\ServicePhotoResource\Pages;

use App\Filament\Personal\Resources\ServicePhotoResource;
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
