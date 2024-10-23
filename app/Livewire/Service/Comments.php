<?php

namespace App\Livewire\Service;

use App\Models\Activities;
use App\Models\Category;
use App\Models\CommentsActivities;
use App\Models\User;
use Livewire\Component;

class Comments extends Component
{
    public $id;
    public $comments;
    public $users;

    public function mount($activityId)
    {
        $this->id = $activityId;
        $this->comments = CommentsActivities::with('user')
            ->where('activity_id', $activityId)
            ->get();
    }
    public function render()
    {
        return view('livewire.service.comments');
    }
}
