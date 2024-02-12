<?php

namespace App\Livewire\Product\Create\Steps;

use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Spatie\LivewireWizard\Components\StepComponent;

class ImageStep extends StepComponent
{
    use WithFileUploads;

    #[Validate('required|image|max:1024')]
    public $image;

    public function stepInfo(): array
    {
        return [
            'label' => 'Product Image',
        ];
    }

    public function submit()
    {
        $this->state()->product()->update([
            'image_path' => $this->image->storePubliclyAs('images', str()->uuid(), 'public'),
        ]);

        $this->nextStep();
    }

    public function render()
    {
        return view('livewire.product.create.steps.image-step');
    }
}
