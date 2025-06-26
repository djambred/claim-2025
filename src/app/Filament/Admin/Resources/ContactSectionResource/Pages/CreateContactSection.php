<?php

namespace App\Filament\Admin\Resources\ContactSectionResource\Pages;

use App\Filament\Admin\Resources\ContactSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateContactSection extends CreateRecord
{
    protected static string $resource = ContactSectionResource::class;
}
