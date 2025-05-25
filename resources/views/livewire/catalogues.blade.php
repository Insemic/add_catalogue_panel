<div>
    <!-- Header -->
    <header class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Catalogue Admin</h1>
                    <p class="text-gray-600">Manage your website catalogues</p>
                </div>
                <flux:button href="{{ route('catalogues.create') }}"
                             class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                    Add Catalogue
                </flux:button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-6">
            <h2 class="text-2xl font-semibold text-gray-900 mb-2">{{ __('All Catalogues') }}</h2>
            <p class="text-gray-600">{{ __('Catalogue count: ').count($catalogues) }}</p>
        </div>

        <!-- Catalogues Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Catalogue Card 1 -->
            @foreach($catalogues as $catalogue)
                <div class="bg-white rounded-lg shadow-sm border overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="aspect-video relative bg-gray-200">
                        <img src="{{ asset('storage/'.$catalogue->filename) }}"
                             alt="{{ $catalogue['name'] }}"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-2">
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $catalogue->name }}</h3>
                                <div class="flex flex-wrap gap-1 mb-2">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    {{ $catalogue->type }}
                                </span>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $catalogue->description }}</p>

                        <div class="flex items-center justify-between mb-3">
                            <div class="flex space-x-2">
                                <a href="{{ $catalogue->url }}" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex items-center px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
                                    <flux:icon.link class="pr-1.5"></flux:icon.link>
                                    {{ __('View') }}
                                </a>
                                <button
                                    href="{{ route('catalogues.update', $catalogue) }}" wire:navigate
                                    class="inline-flex items-center px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
                                    <i data-lucide="edit" class="w-4 h-4 mr-1"></i>
                                    Edit
                                </button>
                            </div>
                            <flux:button variant="danger"
                                         class="inline-flex items-center px-3 py-1.5 text-sm border border-gray-300 rounded-md text-red-600 hover:text-red-700 hover:bg-red-50 transition-colors"
                                         wire:click="delete({{ $catalogue->id }})"
                            >
                                <flux:icon.trash/>
                            </flux:button>
                        </div>
                        <div class="text-xs text-gray-500">
                            {{ $catalogue->created_at }}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </main>
</div>
