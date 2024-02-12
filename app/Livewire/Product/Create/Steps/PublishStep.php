<?php

namespace App\Livewire\Product\Create\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class PublishStep extends StepComponent
{
    public function stepInfo(): array
    {
        return [
            'label' => 'Review & Publish',
        ];
    }

    public function submit()
    {
        $this->state()->product()->update([
            'published' => true,
        ]);

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.product.create.steps.publish-step', [
            'product' => $this->state()->product(),
        ]);
    }
}
