<?php

namespace App\Livewire\Service;

use App\Models\Activities;
use App\Models\CommentsActivities;
use App\Models\User;
use Auth;
use Livewire\Component;

class Comments extends Component
{
    public $id;
    public $comments;
    public $comment; 
    public $users;  

    public function mount($activityId)
    {
        $this->id = $activityId;
        $this->comments = CommentsActivities::with('user')
            ->where('activity_id', $activityId)
            ->get();
    }
    protected $rules = [
        'comment' => 'required|string|max:500', // Validación del comentario
    ];
    public function submit()
    {
        $this->validate();

        CommentsActivities::create([
            'comment' => $this->comment,
            'user_id' => Auth::id(),
            'activity_id' => $this->id,
        ]);
    
        $this->comment = '';
        $this->comments = CommentsActivities::with('user')
        ->where('activity_id', $this->id)
        ->get();
        // Emite un evento para actualizar otros componentes

        // Mensaje de éxito opcional
        session()->flash('message', '¡Comentario enviado con éxito!');
    }
    
    public function render()
    {
        return view('livewire.service.comments');
    }
}
