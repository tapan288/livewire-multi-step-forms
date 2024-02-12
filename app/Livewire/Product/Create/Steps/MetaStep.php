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

    public int $productId;

    public function stepInfo(): array
    {
        return [
            'label' => 'Meta Information',
        ];
    }

    public function submit()
    {
        $this->validate();

        if ($this->state()->hasProduct()) {
            $this->state()->product()->update([
                'title' => $this->title,
                'description' => $this->description,
            ]);
        } else {
            $product = auth()->user()->products()->create([
                'title' => $this->title,
                'description' => $this->description,
            ]);

            $this->productId = $product->id;
        }
        ;


        $this->nextStep();
    }

    public function render()
    {
        return view('livewire.product.create.steps.meta-step');
    }
}
