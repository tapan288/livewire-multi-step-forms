<?php

namespace App\Livewire\Wizard\Create\Steps;

use Livewire\Attributes\Validate;
use Spatie\LivewireWizard\Components\StepComponent;

class TitleStep extends StepComponent
{
    #[Validate('required')]
    public $title;

    public function submit()
    {
        $this->validate();

        $this->nextStep();
    }

    public function render()
    {
        return view('livewire.wizard.create.steps.title-step');
    }
}
