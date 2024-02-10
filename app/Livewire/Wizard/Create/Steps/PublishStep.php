<?php

namespace App\Livewire\Wizard\Create\Steps;

use App\Models\WizardModel;
use Spatie\LivewireWizard\Components\StepComponent;

class PublishStep extends StepComponent
{
    public function stateToStore(): array
    {
        return [
            'title' => $this->state()->forStep('wizard.create.steps.title-step')['title'],
            'description' => $this->state()->forStep('wizard.create.steps.description-step')['description'],
        ];
    }

    public function submit()
    {
        WizardModel::create($this->stateToStore());
    }

    public function render()
    {
        return view('livewire.wizard.create.steps.publish-step', $this->stateToStore());
    }
}
