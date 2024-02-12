<div>
    <x-wizard.navigation :steps="$steps">
    </x-wizard.navigation>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <form class="space-y-6" wire:submit="submit">
                <x-primary-button>
                    {{ __('Next step') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</div>
