<?php

namespace App\Livewire;

use Abitbt\TablerBlade\Icon;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class IconBrowser extends Component
{
    use WithPagination;

    // Search and filter properties
    public string $search = '';

    public string $selectedCategory = '';

    public string $iconSize = 'md'; // sm, md, lg

    public ?string $selectedIconName = null;

    public ?string $selectedIconVariant = null;

    // Pagination
    public int $perPage = 100;

    // Popular icons list
    public array $popularIcons = [
        'home', 'user', 'settings', 'heart', 'star', 'bell', 'mail', 'search',
        'menu', 'x', 'check', 'arrow-left', 'arrow-right', 'arrow-up', 'arrow-down',
        'plus', 'minus', 'edit', 'trash', 'download', 'upload', 'eye', 'eye-off',
        'lock', 'unlock', 'calendar', 'clock', 'filter', 'share', 'copy',
    ];

    public function mount(): void
    {
        // Component initialization
    }

    #[Computed]
    public function allIcons(): array
    {
        return Icon::getManifest();
    }

    #[Computed]
    public function categories(): array
    {
        $categories = [];

        foreach ($this->allIcons() as $icon) {
            if (isset($icon['category']) && $icon['category']) {
                $categories[$icon['category']] = true;
            }
        }

        $cats = array_keys($categories);
        sort($cats);

        return $cats;
    }

    #[Computed]
    public function filteredIcons(): array
    {
        $icons = $this->allIcons();

        // Apply search filter
        if ($this->search) {
            $searchLower = strtolower($this->search);
            $icons = array_filter($icons, function ($icon) use ($searchLower) {
                // Search in name
                if (str_contains(strtolower($icon['name']), $searchLower)) {
                    return true;
                }

                // Search in tags
                if (isset($icon['tags']) && is_array($icon['tags'])) {
                    foreach ($icon['tags'] as $tag) {
                        if (str_contains(strtolower($tag), $searchLower)) {
                            return true;
                        }
                    }
                }

                return false;
            });
        }

        // Apply category filter
        if ($this->selectedCategory) {
            $icons = array_filter($icons, function ($icon) {
                return isset($icon['category']) && $icon['category'] === $this->selectedCategory;
            });
        }

        return array_values($icons);
    }

    #[Computed]
    public function paginatedIcons(): array
    {
        $filtered = $this->filteredIcons();
        $page = $this->getPage();
        $totalToShow = $page * $this->perPage;

        return array_slice($filtered, 0, $totalToShow);
    }

    #[Computed]
    public function hasMorePages(): bool
    {
        return count($this->filteredIcons()) > count($this->paginatedIcons());
    }

    #[Computed]
    public function remainingCount(): int
    {
        return count($this->filteredIcons()) - count($this->paginatedIcons());
    }

    #[Computed]
    public function showPopular(): bool
    {
        return empty($this->search) && empty($this->selectedCategory);
    }

    #[Computed]
    public function popularIconsData(): array
    {
        $allIcons = $this->allIcons();

        return array_filter($allIcons, function ($icon) {
            return in_array($icon['name'], $this->popularIcons);
        });
    }

    public function selectIcon(string $name, string $variant = 'outline'): void
    {
        $this->selectedIconName = $name;
        $this->selectedIconVariant = $variant;

        // Dispatch browser event to open modal
        $this->dispatch('open-icon-modal');
    }

    public function closeModal(): void
    {
        $this->selectedIconName = null;
        $this->selectedIconVariant = null;
    }

    public function setCategory(string $category): void
    {
        $this->selectedCategory = $category === $this->selectedCategory ? '' : $category;
        $this->resetPage();
    }

    public function setSize(string $size): void
    {
        $this->iconSize = $size;
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function loadMore(): void
    {
        $this->setPage($this->getPage() + 1);
    }

    public function copyCode(string $code): void
    {
        // Dispatch browser event for clipboard and toast
        $this->dispatch('code-copied', code: $code);
    }

    #[Computed]
    public function selectedIconData(): ?array
    {
        if (! $this->selectedIconName) {
            return null;
        }

        $allIcons = $this->allIcons();

        foreach ($allIcons as $icon) {
            if ($icon['name'] === $this->selectedIconName) {
                return $icon;
            }
        }

        return null;
    }

    #[Computed]
    public function totalIcons(): int
    {
        return count($this->filteredIcons());
    }

    public function render()
    {
        return view('livewire.icon-browser');
    }
}
