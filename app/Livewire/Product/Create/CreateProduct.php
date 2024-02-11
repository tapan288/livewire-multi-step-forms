<?php

namespace App\Livewire\Product\Create;

use App\Livewire\Product\Create\Steps\MetaStep;
use App\Livewire\Product\Create\Steps\ImageStep;
use App\Livewire\Product\Create\Steps\PublishStep;
use Spatie\LivewireWizard\Components\WizardComponent;

class CreateProduct extends WizardComponent
{
    public function steps(): array
    {
        return [
            MetaStep::class,
            ImageStep::class,
            PublishStep::class,
        ];
    }
}
