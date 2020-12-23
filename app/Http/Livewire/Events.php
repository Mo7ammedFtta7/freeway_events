<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\event;

class Events extends Component
{
    public function render()
    {
        return view('livewire.events',['events' => event::all()]);
    }
    // public function eventid($id)
    // {
    //     $this->emit('reg_event_id', $id);
    //    // protected $listeners = ['newPost'];
    // }
}
