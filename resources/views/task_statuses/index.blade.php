<x-app-layout>
    <section class="bg-white">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl">
                    Available statuses
                </h1>
                <ul>
                    @foreach($taskStatuses as $ts)
                        <li>
                            {{ $ts->name }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</x-app-layout>
