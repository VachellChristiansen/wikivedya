<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
 
class Article extends Component
{
    public string $lang;
    public string $article;

    public function render()
    {
        if($this->lang == 'En') {
            $content = DB::table('article')->select('title', 'contentEn')->where('title', $this->article)->first();
        } else if ($this->lang == 'Id') {
            $content = DB::table('article')->select('title', 'contentId')->where('title', $this->article)->first();
        } else {
            $content = [
                'title' => "Not Found",
                'contentId' => "None",
                $this->lang => 'Id'
            ];
        }
        
        return view('livewire.article', [
            'content' => $content,
            'lang' => $this->lang
        ]);
    }
}
