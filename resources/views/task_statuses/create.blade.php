<x-app-layout>
    {{ html()->form()->route('task_statuses.store')->open() }}
    <div class="mb-5">
        <x-input-label for="status_name" value="Название статуса"/>

        <x-text-input id="status_name"
                      class="block mt-1 w-full"
                      :value="old('name')"
                      type="text"
                      name="name"
                      required/>

        @if ($errors->has('name'))
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
        @endif
    </div>

    <div>
        {{ html()->submit('Создать статус')->attribute('class', 'submit-button') }}
    </div>
    {{ html()->form()->close() }}
</x-app-layout>
