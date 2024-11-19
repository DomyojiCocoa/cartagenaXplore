<?php

namespace App\Livewire\Service;

use App\Models\Activities;
use App\Models\ActivitiesImage;
use App\Models\ActivityTodo;
use App\Models\ActivityWhatCover;
use App\Models\Image;
use Livewire\Component;

class ImgActivity extends Component
{
    public $id;
    public $activity;
    public $activityTodo;
    public $activityWhatCover;
    public $activityImages;
    public $images;

    public function mount($activityId)
    {
        $this->id = $activityId;
        $this->activity = Activities::find($activityId);
        $this->activityTodo = ActivityTodo::where('activity_id', $activityId)->get();
        $this->activityWhatCover = ActivityWhatCover::where('activity_id', $activityId)->get();
        $this->activityImages = ActivitiesImage::with('image')->where('activities_id', $activityId)->get();

    }

    public function render()
    {
        return view('livewire.service.img-activity');
    }
}
