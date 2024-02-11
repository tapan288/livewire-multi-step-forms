<?php

namespace App\Livewire\Wizard\Create\Steps;

use App\Models\WizardModel;
use Spatie\LivewireWizard\Components\StepComponent;

class PublishStep extends StepComponent
{
    public function stateToStore()
    {
        return collect($this->state()->all())
            ->mapWithKeys(function ($value) {
                return $value;
            })->only(['title', 'description'])
            ->toArray();
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
