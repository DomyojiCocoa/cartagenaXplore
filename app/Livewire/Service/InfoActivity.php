<?php

namespace App\Livewire\Service;

use App\Livewire\Rating;
use App\Models\Activities;
use App\Models\ActivitiesImage;
use App\Models\ActivityTodo;
use App\Models\ActivityWhatCover;
use App\Models\Category;
use App\Models\RatingActivities;
use App\Models\User;
use Auth;
use Database\Seeders\ActivityWhatCoverSeeder;
use DB;
use Livewire\Component;

class InfoActivity extends Component
{
    public $id;
    public $activity;
    public $activityCategory;
    public $activityTodo;
    public $activityWhatCover;
    public $activityImages;
    public $user_id;
    public $rating;

    public function mount($activityId)
    {
        $this->user_id = Auth::user()->id;
        $this->id = $activityId;
        $this->activity = Activities::find($activityId);
        $this->activityCategory = Category::find($this->activity->categories_id);
        $this->activityTodo = ActivityTodo::where('activity_id', $activityId)->get();
        $this->activityWhatCover = ActivityWhatCover::where('activity_id', $activityId)->get();

        $rating = RatingActivities::where('activity_id', $activityId)->where('user_id', $this->user_id)->first();
        $this->rating = ($rating && $rating->rating !== null) ? $rating->rating : 0;

        $this->activityImages = ActivitiesImage::where('activities_id', $activityId)->get();
    }

    public function addRating($index)
    {
        $a = RatingActivities::updateOrCreate(
            [
                'activity_id' => $this->activity->id,
                'user_id' => $this->user_id
            ],
            [
                'rating' => $index // Valor por defecto si el registro no existe
            ]
        );
        $this->rating = $a->rating;
    }

    public function render()
    {
        return view('livewire.service.info-activity');
    }
}
