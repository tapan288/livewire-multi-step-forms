<?php

namespace App\Livewire\Product\Create\Steps;

use Livewire\Attributes\Validate;
use Spatie\LivewireWizard\Components\StepComponent;

class MetaStep extends StepComponent
{
    #[Validate('required')]
    public string $title = '';

    #[Validate('required')]
    public $description = '';

    public function stepInfo(): array
    {
        return [
            'label' => 'Meta Information',
        ];
    }

    public function submit()
    {
        $this->validate();

        auth()->user()->products()->create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $this->nextStep();
    }

    public function render()
    {
        return view('livewire.product.create.steps.meta-step');
    }
}
