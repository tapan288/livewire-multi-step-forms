<?php

namespace App\Livewire\Product\Create\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class ImageStep extends StepComponent
{
    public function stepInfo(): array
    {
        return [
            'label' => 'Product Image',
        ];
    }

    public function submit()
    {
        dd($this->state()->product());

        dd($productId);
    }

    public function render()
    {
        return view('livewire.product.create.steps.image-step');
    }
}
