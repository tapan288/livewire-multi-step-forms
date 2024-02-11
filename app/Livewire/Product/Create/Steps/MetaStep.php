<?php

namespace App\Livewire\Product\Create\Steps;

use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class MetaStep extends StepComponent
{
    public function render()
    {
        return view('livewire.product.create.steps.meta-step');
    }
}
