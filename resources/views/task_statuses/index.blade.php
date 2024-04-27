<x-app-layout>
    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl">
        Available statuses
    </h1>
    <ul>
        @foreach($taskStatuses as $ts)
            <li>
                {{ $ts->name }} <a class="a-link" href="{{ route('task_statuses.edit', $ts->id) }}">Edit</a>
            </li>
        @endforeach
    </ul>
</x-app-layout>
