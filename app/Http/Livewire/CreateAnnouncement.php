<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    public $title;
    public $body;
    public $price;

    public function store(){
        Announcement::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price,

        ]);
        $this->reset();

        return to_route('home')->with('message', 'Annuncio aggiunto correttamente');
    }
    
    
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
