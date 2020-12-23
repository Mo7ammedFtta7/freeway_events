<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\faqs as faqModel;
class Faqs extends Component
{
    public function render()
    {
        return view('livewire.faqs', ['faqs' => faqModel::all()]);
    }
}
