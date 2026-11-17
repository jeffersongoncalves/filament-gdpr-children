<?php

namespace JeffersonGoncalves\Filament\GdprChildren\Resources\GuardianLinks\Pages;

use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Filament\GdprChildren\GdprChildrenPlugin;
use JeffersonGoncalves\Filament\GdprChildren\Resources\GuardianLinks\GuardianLinkResource;
use JeffersonGoncalves\GdprChildren\ChildrenManager;

class CreateGuardianLink extends CreateRecord
{
    protected static string $resource = GuardianLinkResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $model = GdprChildrenPlugin::get()->getSubjectModel();

        return app(ChildrenManager::class)->link(
            $model::query()->findOrFail($data['minor_id']),
            $model::query()->findOrFail($data['guardian_id']),
            filled($data['relationship'] ?? null) ? $data['relationship'] : null,
            (bool) ($this->data['verified'] ?? false),
        );
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
