<?php

namespace App\Livewire\Wizard\Create;

use App\Livewire\Wizard\Create\Steps\Description;
use App\Livewire\Wizard\Create\Steps\DescriptionStep;
use App\Livewire\Wizard\Create\Steps\PublishStep;
use App\Livewire\Wizard\Create\Steps\TitleStep;
use Spatie\LivewireWizard\Components\WizardComponent;

class CreateThing extends WizardComponent
{
    public function steps(): array
    {
        return [
            TitleStep::class,
            DescriptionStep::class,
            PublishStep::class,
        ];
    }
}
