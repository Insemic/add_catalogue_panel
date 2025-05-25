<div>
    <!-- Header -->
    <header class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Catalogue Admin</h1>
                    <p class="text-gray-600">Manage your website catalogues</p>
                </div>
                <a href="add-catalogue.html" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                    <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
                    Add Catalogue
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-6">
            <h2 class="text-2xl font-semibold text-gray-900 mb-2">All Catalogues</h2>
            <p class="text-gray-600">3 catalogues total</p>
        </div>

        <!-- Catalogues Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Catalogue Card 1 -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden hover:shadow-lg transition-shadow">
                <div class="aspect-video relative bg-gray-200">
                    <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=400&h=225&fit=crop"
                         alt="Fashion Collection 2024"
                         class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-start justify-between mb-2">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Fashion Collection 2024</h3>
                            <div class="flex flex-wrap gap-1 mb-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Fashion
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                    Sports
                                </span>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">Latest fashion trends and collections for the upcoming season including sportswear</p>

                    <div class="flex items-center justify-between mb-3">
                        <div class="flex space-x-2">
                            <a href="https://example.com/fashion-2024" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
                                <i data-lucide="external-link" class="w-4 h-4 mr-1"></i>
                                View
                            </a>
                            <button class="inline-flex items-center px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
                                <i data-lucide="edit" class="w-4 h-4 mr-1"></i>
                                Edit
                            </button>
                        </div>
                        <button class="inline-flex items-center px-3 py-1.5 text-sm border border-gray-300 rounded-md text-red-600 hover:text-red-700 hover:bg-red-50 transition-colors">
                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="text-xs text-gray-500">
                        Created: January 15, 2024
                    </div>
                </div>
            </div>

            <!-- Catalogue Card 2 -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden hover:shadow-lg transition-shadow">
                <div class="aspect-video relative bg-gray-200">
                    <img src="https://images.unsplash.com/photo-1498049794561-7780e7231661?w=400&h=225&fit=crop"
                         alt="Electronics Catalog"
                         class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-start justify-between mb-2">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Electronics Catalog</h3>
                            <div class="flex flex-wrap gap-1 mb-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Electronics
                                </span>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">Comprehensive electronics catalog featuring the latest gadgets and devices</p>

                    <div class="flex items-center justify-between mb-3">
                        <div class="flex space-x-2">
                            <a href="https://example.com/electronics" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
                                <i data-lucide="external-link" class="w-4 h-4 mr-1"></i>
                                View
                            </a>
                            <button class="inline-flex items-center px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
                                <i data-lucide="edit" class="w-4 h-4 mr-1"></i>
                                Edit
                            </button>
                        </div>
                        <button class="inline-flex items-center px-3 py-1.5 text-sm border border-gray-300 rounded-md text-red-600 hover:text-red-700 hover:bg-red-50 transition-colors">
                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="text-xs text-gray-500">
                        Created: January 10, 2024
                    </div>
                </div>
            </div>

            <!-- Catalogue Card 3 -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden hover:shadow-lg transition-shadow">
                <div class="aspect-video relative bg-gray-200">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=400&h=225&fit=crop"
                         alt="Home & Garden"
                         class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-start justify-between mb-2">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Home & Garden</h3>
                            <div class="flex flex-wrap gap-1 mb-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                                    Home
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                    Books
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    Other
                                </span>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">Beautiful home and garden products to transform your living space with design books</p>

                    <div class="flex items-center justify-between mb-3">
                        <div class="flex space-x-2">
                            <a href="https://example.com/home-garden" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
                                <i data-lucide="external-link" class="w-4 h-4 mr-1"></i>
                                View
                            </a>
                            <button class="inline-flex items-center px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
                                <i data-lucide="edit" class="w-4 h-4 mr-1"></i>
                                Edit
                            </button>
                        </div>
                        <button class="inline-flex items-center px-3 py-1.5 text-sm border border-gray-300 rounded-md text-red-600 hover:text-red-700 hover:bg-red-50 transition-colors">
                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="text-xs text-gray-500">
                        Created: January 8, 2024
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
