<div>
    <form class="space-y-6" wire:submit="submit">
        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input wire:model="description" id="description" class="block mt-1 w-full" type="text"
                name="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="flex justify-between">
            <x-secondary-button type="button" wire:click="previousStep">
                {{ __('Previous step') }}
            </x-secondary-button>
            <x-primary-button>
                {{ __('Next step') }}
            </x-primary-button>
        </div>
    </form>
</div>
