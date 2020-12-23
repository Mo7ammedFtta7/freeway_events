<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\invoices;

class Registration extends Component
{
    public $name;
    public $email;
    public $phone;
    public $gender="Male";
    public $age;
    public $event_id;

    protected $listeners = ['reg_event_id'];

    public function mount()
    {
        //$this->event_id=$event;
    }

    protected $rules = [
        'name' => 'required|min:10',
        'email' => 'required|email',
        'phone'=>'required|min:10|max:10',

    ];
    public function submit()
    {
        $this->validate();
        $inv=invoices::create(["payload"=>json_encode($this),"response"=>"{}","event_id"=>$this->event_id]);
        $this->dispatchBrowserEvent('goToPay', $inv->uuid);
        $this->reset();
        return false;
    }
    public function render()
    {
        return view('livewire.registration');
    }
     public function reg_event_id($id)
    {
        $this->event_id=$id;
    }
}
