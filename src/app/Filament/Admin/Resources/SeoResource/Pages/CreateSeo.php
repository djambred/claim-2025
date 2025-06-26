<?php

namespace App\Filament\Admin\Resources\SeoResource\Pages;

use App\Filament\Admin\Resources\SeoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class CreateSeo extends CreateRecord
{
    protected static string $resource = SeoResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['og_image'])) {
            $originalPath = storage_path('app/public/' . $data['og_image']);
            $image = Image::make($originalPath);

            // Resize/kompres sesuai kebutuhan
            $image->resize(1200, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // Kompres dan overwrite
            $image->save($originalPath, 70, 'jpg'); // 70% quality
        }

        return $data;
    }
}
