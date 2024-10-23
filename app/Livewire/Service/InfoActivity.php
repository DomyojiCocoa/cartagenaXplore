<?php

namespace App\Livewire\Service;

use App\Models\Activities;
use App\Models\ActivitiesImage;
use App\Models\ActivityTodo;
use App\Models\ActivityWhatCover;
use App\Models\Category;
use Database\Seeders\ActivityWhatCoverSeeder;
use Livewire\Component;

class InfoActivity extends Component
{
    public $id;
    public $activity;
    public $activityCategory;
    public $activityTodo;
    public $activityWhatCover;
    public $activityImages;

    public function mount($activityId)
    {
        $this->id = $activityId;
        $this->activity = Activities::find($activityId);
        $this->activityCategory = Category::find($this->activity->categories_id);
        $this->activityTodo = ActivityTodo::where('activity_id', $activityId)->get();
        $this->activityWhatCover = ActivityWhatCover::where('activity_id', $activityId)->get();
        $this->activityImages = ActivitiesImage::where('activities_id', $activityId)->get();
    }

    public function render()
    {
        return view('livewire.service.info-activity');
    }
}
