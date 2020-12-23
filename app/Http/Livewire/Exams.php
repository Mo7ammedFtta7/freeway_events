<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Dashboard\exams as examModel;

class Exams extends Component
{
    public function render()
    {
        return view('livewire.exams', ['exams' => examModel::all()]);

    }
}
