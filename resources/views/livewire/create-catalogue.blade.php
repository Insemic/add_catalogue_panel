<div>
    <!-- Header -->
    <flux:header class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center py-6">
                <div>
                    <flux:heading size="xl">Add New Catalogue</flux:heading>
                    <flux:subheading>Create a new catalogue entry</flux:subheading>
                </div>
            </div>
        </div>
    </flux:header>
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div id="catalogueForm" class="space-y-6">
            <flux:field>
                <flux:input type="text" wire:model="form.name" label="Catalogue Name "/>
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </flux:field>
            <flux:field>
                <flux:input type="text" wire:model="form.type" label="Type"/>
                @error('type')
                <flux:error>{{ $message }}</flux:error> @enderror
            </flux:field>
            <flux:field>
                <flux:input type="text" wire:model="form.url" label="Catalogue URL"/>
                @error('url') <span class="error">{{ $message }}</span> @enderror
            </flux:field>
            <flux:field>
                @error('content') <span class="error">{{ __($message) }}</span> @enderror
                <flux:input type="file" wire:model="form.image" label="Image"/>
                @error('image') <span class="error">{{ $message }}</span> @enderror
            </flux:field>
            <flux:field>
                <flux:input rows="2" type="text" wire:model="form.description" label="Description"/>
                @error('description') <span class="error">{{ $message }}</span> @enderror
            </flux:field>

            <flux:button variant="primary" wire:click="save">Save</flux:button>
            @if (session('created'))
                <div class="alert alert-success">
                    {{ session('created') }}
                </div>
            @endif
        </div>
    </div>
</div>



