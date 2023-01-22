<x-filament::page>
    <div class="flex">
        <div class="flex-1">
            <livewire:play.matrix :gameId="$gameId" />
        </div>
        <div class="flex-auto">
            <livewire:play.top-list :gameId="$gameId" />
        </div>
    </div>
</x-filament::page>
