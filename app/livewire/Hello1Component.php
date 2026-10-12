<?php

namespace App\Livewire;

use Livewire\Component;

class Hello1Component extends Component
{
    public $count = 0;
    public $msg;

    // Blade から値を受け取る
    public function mount($msg = '初期メッセージ')
    {
        $this->msg = $msg;
    }

    // ボタンで値を増やす
    public function increment()
    {
        $this->count++;
    }

    public function decriment()
    {
        $this->count--;
    }

    public function reset0()
    {
        $this->count = 0;
    }

    public function render()
    {
        return view('livewire.hello1-component');
    }
}
