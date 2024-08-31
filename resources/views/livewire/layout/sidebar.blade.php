<?php

use Livewire\Volt\Component;

new class extends Component {

    public array $navItems;

    public function mount() {
        $this->navItems = [
            [
                'headline' => 'Workspace',
                'links' =>[
                    [
                        'title' => 'Dashboard',
                        'default_url' => 'preference',
                        'route_name' => route('permission'),
                        'icon' => 'hugeicons-grid-view',
                        'show_badge' => false,
                        'badge_content' => null,
                    ],
                    [
                        'title' => 'Inbox',
                        'default_url' => 'preference',
                        'route_name' => route('permission'),
                        'icon' => 'hugeicons-inbox',
                        'show_badge' => true,
                        'badge_content' => 63,
                    ],
                    [
                        'title' => 'Messages',
                        'default_url' => 'preference',
                        'route_name' => route('permission'),
                        'icon' => 'hugeicons-message-01',
                        'show_badge' => true,
                        'badge_content' => 14,
                    ],
                    [
                        'title' => 'Preferences',
                        'default_url' => 'preference',
                        'route_name' => route('permission'),
                        'icon' => 'hugeicons-user-lock-01',
                        'show_badge' => false,
                        'badge_content' => null,
                    ],
                    [
                        'title' => 'Folders',
                        'default_url' => 'folders',
                        'route_name' => route('permission'),
                        'icon' => 'hugeicons-folder-library',
                        'show_badge' => false,
                        'badge_content' => null,
                    ],
                    [
                        'title' => 'Roles & Permissions',
                        'default_url' => 'permissions',
                        'route_name' => route('permission'),
                        'icon' => 'hugeicons-mining-02',
                        'show_badge' => false,
                        'badge_content' => null,
                    ],
                ],
            ],

            [
                'headline' => 'Your Account',
                'links' =>[
                    [
                        'title' => 'Dashboard',
                        'default_url' => 'preference',
                        'route_name' => route('permission'),
                        'icon' => 'hugeicons-grid-view',
                        'show_badge' => false,
                        'badge_content' => null,
                    ],
                    [
                        'title' => 'Inbox',
                        'default_url' => 'preference',
                        'route_name' => route('permission'),
                        'icon' => 'hugeicons-inbox',
                        'show_badge' => true,
                        'badge_content' => 63,
                    ],
                ],
            ],
        ];
    }

}; ?>

<aside class="border-r">
    <div class="w-64 mx-2">
        <div class="mt-2 space-y-3">
            @foreach ($navItems as $items)
                <div>
                    <span class="px-3 pt-3 text-sm font-medium text-gray-400">{{ $items['headline'] }}</span>

                    <div class="space-y-0.5">
                        @foreach ($items['links'] as $item)
                            <x-navigation.nav-item
                                :title="$item['title']"
                                :icon="$item['icon']"
                                :url="$item['default_url']"
                                :isActive="request()->is($item['default_url'])"
                                :showBadge="$item['show_badge']"
                                :badgeContent="$item['badge_content']" />
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</aside>
