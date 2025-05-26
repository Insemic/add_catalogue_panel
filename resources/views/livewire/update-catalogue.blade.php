<div>
    <!-- Header -->
    <flux:header class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center py-6">
                <div>
                    <flux:heading size="xl">Update Catalogue</flux:heading>
                    <flux:subheading>Update existing catalogue entry</flux:subheading>
                </div>
            </div>
        </div>
    </flux:header>
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <form id="catalogueForm" class="space-y-6" wire:submit="save">
            @csrf
            <flux:field>
                <flux:input type="text" wire:model="name" label="Catalogue Name "/>
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </flux:field>
            <flux:field>
                <flux:input type="text" wire:model="type" label="Type"/>
                @error('type')
                <flux:error>{{ $message }}</flux:error> @enderror
            </flux:field>
            <flux:field>
                <flux:input type="text" wire:model="url" label="Catalogue URL"/>
                @error('url') <span class="error">{{ $message }}</span> @enderror
            </flux:field>
            <flux:field>
                @error('content') <span class="error">{{ __($message) }}</span> @enderror
                <flux:input type="file" wire:model="image" label="Image"/>
                @error('image') <span class="error">{{ $message }}</span> @enderror
            </flux:field>
            <flux:field>
                <flux:input rows="2" type="text" wire:model="description" label="Description"/>
                @error('description') <span class="error">{{ $message }}</span> @enderror
            </flux:field>

            <flux:button variant="primary" type="submit">Update</flux:button>
        </form>

    </div>
</div>



