<div>
    <form class="space-y-6" wire:submit="submit">
        <ul>
            <li>Title: {{ $title }}</li>
            <li>Description: {{ $description }}</li>
        </ul>

        <x-primary-button>
            {{ __('Publish') }}
        </x-primary-button>
    </form>
</div>
