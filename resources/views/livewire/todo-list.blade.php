<div>
    <input type="text" wire:model="newTask" placeholder="Add a new task">
    <ul>
        @foreach($tasks as $index=> $task)
   <input type="text" wire:model="newTask" placeholder="Add a new task">
    <button wire:click="addTask">Add</button>

    <ul>
        @foreach($tasks as $index => $task)
            <li>
                {{ $task }}
                <button wire:click="removeTask({{ $index }})">Remove</button>
            </li>
        @endforeach
    </ul>
    <button wire:click="addTask">Add Task</button>
</div>
