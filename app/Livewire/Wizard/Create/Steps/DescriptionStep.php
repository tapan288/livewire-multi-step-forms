<?php

namespace App\Livewire\Wizard\Create\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class DescriptionStep extends StepComponent
{
    public function render()
    {
        return view('livewire.wizard.create.steps.description-step');
    }
}
