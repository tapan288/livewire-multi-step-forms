<?php

namespace App\Livewire\Wizard\Create\Steps;

use Livewire\Attributes\Validate;
use Spatie\LivewireWizard\Components\StepComponent;

class DescriptionStep extends StepComponent
{
    #[Validate('required')]
    public $description;

    public function submit()
    {
        $this->validate();

        $this->nextStep();
    }

    public function render()
    {
        return view('livewire.wizard.create.steps.description-step');
    }
}
