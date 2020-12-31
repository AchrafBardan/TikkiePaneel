<?php

namespace App\Http\Livewire;

use App\Models\Tikkie;
use Livewire\Component;
use Illuminate\Support\Str;

class NieuweTikkie extends Component
{

    public $amount;
    public $link;
    public $receiver;
    public $description;
    public $tikkies;

    public function new()
    {
        $tikkie = Tikkie::create([
            'amount' => $this->amount * 100,
            'description' => $this->description,
            'receiver' => $this->receiver,
            'token' => Str::random(10),
            'user_id' => auth()->user()->id,
        ]);    

        $this->tikkies = Tikkie::where('user_id',auth()->user()->id)->orderBy('created_at','DESC')->get();
        
    }

    public function delete($id)
    {
        Tikkie::where('id',$id)->delete();
    }

    public function mount()
    {
        $this->tikkies = Tikkie::where('user_id',auth()->user()->id)->orderBy('created_at','DESC')->get();
    }

    public function render()
    {
        return view('livewire.nieuwe-tikkie');
    }
}
