<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <form wire:submit.prevent="submit">

        <input type="text" wire:model="name">

        <button type="submit">Submit</button>
    </form>

    <h1> {{$name }}</h1>
</div>
