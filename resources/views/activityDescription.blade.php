<x-app-layout>
    <div class="pt-24">
        <div class="flex  flex-col lg:flex-row justify-center items-start pt-6 bg-white min-h-screen lg:px-18 px-3">
            <livewire:service.info-activity :activityId="$id"/>
            <livewire:service.img-activity :activityId="$id"/>
        </div>
        <div class="m-4">
            <livewire:service.more-recommendations />
        </div>
        <div>
            <livewire:service.comments :activityId="$id"/>
        </div>
    </div>
    <livewire:footer />
</x-app-layout>
