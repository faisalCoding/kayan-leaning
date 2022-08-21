<div class="bg-white flex shadow-lg rounded-sm p-5 gap-3 flex-col max-w-screen-sm mx-auto">
    <input class="" type="text" wire:model='name'>
    <input type="text" wire:model='email'>
    <input type="text" wire:model='address'>
    <input type="text" wire:model='phone'>
    <button wire:click='send' class=" bg-indigo-500 p-3 text-white rounded-md shadow-md">
        send
    </button>
    <H1>{{$name}}</H1>

</div>