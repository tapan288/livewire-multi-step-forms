<?php

namespace App\Livewire\Wizard\Create\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class TitleStep extends StepComponent
{
    public function render()
    {
        return view('livewire.wizard.create.steps.title-step');
    }
}
