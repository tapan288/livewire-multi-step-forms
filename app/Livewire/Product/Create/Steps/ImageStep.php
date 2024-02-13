<?php

namespace App\Livewire\Product\Create\Steps;

use Livewire\WithFileUploads;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
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

    #[Computed]
    public function product()
    {
        return $this->state()->product();
    }

    #[Computed]
    public function imagePreview()
    {
        if ($this->product->image_path) {
            return $this->product->image_path;
        }

        return $this->image?->temporaryUrl();
    }

    public function submit()
    {
        if ($this->product->image_path && !$this->image) {
            $this->nextStep();

            return;
        }

        $this->validate();

        $this->product->update([
            'image_path' => $this
                ->image
                ->storePubliclyAs('images', str()->uuid(), 'public'),
        ]);

        $this->nextStep();
    }

    public function render()
    {
        return view('livewire.product.create.steps.image-step');
    }
}
