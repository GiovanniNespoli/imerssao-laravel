<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <input wire:model.live="search"/>
    <br>
    <ul>
        @foreach($this->users as $users)
            <li>{{ $users->name}}</li>
        @endforeach
    </ul>
</div>