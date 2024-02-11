<div>
    <form class="space-y-6" wire:submit="submit">
        <ul>
            <li>Title: {{ $title }}</li>
            <li>Description: {{ $description }}</li>
        </ul>

        <div class="flex justify-between">
            <x-secondary-button type="button" wire:click="previousStep">
                {{ __('Previous step') }}
            </x-secondary-button>
            <x-primary-button>
                {{ __('Publish') }}
            </x-primary-button>
        </div>
    </form>
</div>
