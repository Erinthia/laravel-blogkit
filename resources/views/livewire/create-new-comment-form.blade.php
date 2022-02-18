<div>
    <form wire:submit.prevent="save" class="text-gray-900 sm:flex">
        <x-textarea wire:model.defer="content" class="w-full" placeholder="Post a comment" rows="1" required maxlength="1024"></x-textarea>

        <div class="flex items-center justify-end mt-4 sm:my-auto">
            <x-button class="ml-4 h-10" wire:loading.attribute="disabled">
                {{ __('Post') }}
            </x-button>
        </div>
    </form>

    <div>@error('content') <span class="text-red-500">{{ $message }}</span> @enderror</div>

    <div class="text-sm opacity-75 mt-2">Please be civil and respectful when leaving a comment!</div>
</div>