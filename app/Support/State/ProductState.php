<?php

namespace App\Support\State;

use App\Models\Product;
use Spatie\LivewireWizard\Support\State;

class ProductState extends State
{
    public function product(): Product
    {
        return Product::findOrFail(
            $this->forStep('product.create.steps.meta-step')['productId']
        );
    }

    public function hasProduct(): bool
    {
        return filled($this->forStep('product.create.steps.meta-step')['productId']);
    }
}
