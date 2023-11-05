<?php

namespace App\Http\Livewire;

use App\Models\data\NewsLetter;
use Livewire\Component;

class NewLetterWeb extends Component
{
    public $email;

    public function render()
    {
        return view('livewire.new-letter-web');
    }

    public function addNew()
    {

        $validatedData = $this->validate(
            ['email' => 'required|email|unique:news_letters'],
            [
                'email.required' => __('web/newsletter.err_email'),
                'email.email' => __('web/newsletter.err_email'),
                'email.unique' => __('web/newsletter.err_email_unique'),
            ],
        );
        NewsLetter::create($validatedData);
        session()->flash('SaveToNewsLetter', __('web/newsletter.err_confirm') );
    }
}
