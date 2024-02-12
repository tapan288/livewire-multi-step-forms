<?php

namespace App\Livewire\Product\Create;

use App\Support\State\ProductState;
use App\Livewire\Product\Create\Steps\MetaStep;
use App\Livewire\Product\Create\Steps\ImageStep;
use App\Livewire\Product\Create\Steps\PublishStep;
use Spatie\LivewireWizard\Components\WizardComponent;

class CreateProduct extends WizardComponent
{
    public function stateClass(): string
    {
        return ProductState::class;
    }

    public function steps(): array
    {
        return [
            MetaStep::class,
            ImageStep::class,
            PublishStep::class,
        ];
    }
}
