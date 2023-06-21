<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Search extends Component
{
    public $search = '';
    public $lang = '';
    public $state = 'search';
    
    public function render()
    {
        return view('livewire.search', [
            'search' => $this->search,
            'state' => $this->state,
            'username' => Auth::user() ? Auth::user()->username : 'Anonymous'
        ]);
    }

    public function openLoginModal() 
    {
        $this->state = 'login';
    }

    public function submitSearch()
    {
        $validatedData = $this->validate([
            'search' => 'required',
            'lang' => 'required'
        ]);
        return redirect()->to('/'.$validatedData['lang'].'/'.$validatedData['search']);
    }
}
