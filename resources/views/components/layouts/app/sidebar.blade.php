            <aside :class="{ 'w-full md:w-64': sidebarOpen, 'w-0 md:w-16 hidden md:block': !sidebarOpen }"
                class="bg-sidebar text-sidebar-foreground border-r border-gray-200 dark:border-gray-700 sidebar-transition overflow-hidden">
                <!-- Sidebar Content -->
                <div class="h-full flex flex-col">
                    <!-- Sidebar Menu -->
                    <nav class="flex-1 overflow-y-auto custom-scrollbar py-4">
                        <ul class="space-y-1 px-2">
                            <!-- main page -->
                            <x-layouts.sidebar-link href="{{ route('main') }}" icon='fas-house'
                                :active="request()->routeIs('main*')">Sākums</x-layouts.sidebar-link>
                            
                            <!-- registrations page -->
                            <x-layouts.sidebar-link href="{{ route('registrations.index') }}" icon='fas-book'
                                :active="request()->routeIs('registrations*')">Pieteikumi</x-layouts.sidebar-link>

                            <!-- comparasions page -->
                            <x-layouts.sidebar-link href="{{ route('comparasions') }}" icon='fas-spider'
                                :active="request()->routeIs('comparasions*')">Droš. salīdzinājumi</x-layouts.sidebar-link>
                        </ul>
                    </nav>
                </div>
            </aside>
