
<div class="">
    @switch($caso)
        @case(1)
            <livewire:admin.list-users />
        @break

        @case(2)
            <livewire:admin.list-activities />
        @break

        @case(3)
            <livewire:admin.list-events />
        @break

        @case(4)
            <livewire:admin.list-sites />
        @break

        @default
            <livewire:admin.stadistics />
    @endswitch
    {{-- In work, do what you enjoy. --}}
</div>
