<?php

use JeffersonGoncalves\Filament\GdprChildren\GdprChildrenPlugin;
use JeffersonGoncalves\Filament\GdprChildren\Resources\AgeAssurances\Pages\ListAgeAssurances;
use JeffersonGoncalves\Filament\GdprChildren\Resources\GuardianLinks\GuardianLinkResource;
use JeffersonGoncalves\Filament\GdprChildren\Resources\GuardianLinks\Pages\CreateGuardianLink;
use JeffersonGoncalves\Filament\GdprChildren\Resources\GuardianLinks\Pages\ListGuardianLinks;
use JeffersonGoncalves\Filament\GdprChildren\Tests\Fixtures\TestUser;
use JeffersonGoncalves\GdprChildren\Enums\AssuranceMethod;
use JeffersonGoncalves\GdprChildren\Facades\GdprChildren;
use JeffersonGoncalves\GdprChildren\Models\GuardianLink;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'DPO', 'email' => 'dpo@example.com']));
    $this->child = TestUser::create(['name' => 'Emma']);
    $this->mother = TestUser::create(['name' => 'Anna']);
});

it('lists age checks with age and method, and filters those below the consent age', function () {
    $child = GdprChildren::assure($this->child, 12, AssuranceMethod::StoreSignal);
    $adult = GdprChildren::assure($this->mother, 40, AssuranceMethod::Document);

    Livewire::test(ListAgeAssurances::class)
        ->assertCanSeeTableRecords([$child, $adult])
        ->assertSee('Emma (#2)')
        ->assertSee('App store signal')
        ->filterTable('below_consent_age', true)
        ->assertCanSeeTableRecords([$child])
        ->assertCanNotSeeTableRecords([$adult]);
});

it('links a verified guardian, which lets the child consent', function () {
    GdprChildren::assure($this->child, 12, AssuranceMethod::Document);

    Livewire::test(CreateGuardianLink::class)
        ->fillForm(['minor_id' => $this->child->id, 'guardian_id' => $this->mother->id, 'relationship' => 'mother', 'verified' => true])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(GuardianLink::sole()->relationship)->toBe('mother')
        ->and(GdprChildren::canConsent($this->child))->toBeTrue();
});

it('does not link someone to themselves', function () {
    Livewire::test(CreateGuardianLink::class)
        ->fillForm(['minor_id' => $this->child->id, 'guardian_id' => $this->child->id])
        ->call('create')
        ->assertHasFormErrors(['guardian_id' => 'different']);
});

it('verifies and revokes a link', function () {
    $link = GdprChildren::link($this->child, $this->mother);

    Livewire::test(ListGuardianLinks::class)
        ->assertSee('Pending verification')
        ->callTableAction('verify', $link);

    expect($link->fresh()->isActive())->toBeTrue();

    Livewire::test(ListGuardianLinks::class)->callTableAction('revoke', $link);

    expect($link->fresh()->revoked_at)->not->toBeNull();
});

it('applies the fluent plugin options', function () {
    GdprChildrenPlugin::get()->navigationGroup('GDPR')->subjectTitleAttribute('email');

    expect(GuardianLinkResource::getNavigationGroup())->toBe('GDPR')
        ->and(GdprChildrenPlugin::get()->getSubjectModel())->toBe(TestUser::class);
});
