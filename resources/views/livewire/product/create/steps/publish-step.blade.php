<div>
    <x-wizard.navigation :steps="$steps">
    </x-wizard.navigation>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <form class="space-y-6" wire:submit="submit">
                <div class="flex space-x-6">
                    <div class="h-44 w-44">
                        <img src="/{{ $product->image_path }}" class="h-44 w-44">
                    </div>
                    <div class="space-y-2">
                        <h2 class="text-lg font-medium">{{ $product->title }}</h2>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
                <x-wizard.buttons>
                    <x-slot:back>
                        <x-secondary-button wire:click="previousStep">
                            {{ __('Previous Step') }}
                        </x-secondary-button>
                    </x-slot:back>
                    <x-primary-button>
                        {{ __('Publish') }}
                    </x-primary-button>
                </x-wizard.buttons>
            </form>
        </div>
    </div>
</div>
