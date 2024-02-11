<?php

namespace App\Livewire\Product\Create\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class MetaStep extends StepComponent
{
    public function stepInfo(): array
    {
        return [
            'label' => 'Meta Information',
        ];
    }

    public function render()
    {
        return view('livewire.product.create.steps.meta-step');
    }
}
