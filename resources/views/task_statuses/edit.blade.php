<x-app-layout>
    {{ html()->modelForm($taskStatus, 'PUT')->route('task_statuses.update', $taskStatus->id)->open() }}
    <div class="mb-5">
        <x-input-label for="status_name" value="Название статуса"/>

        <x-text-input id="status_name"
                      class="block mt-1 w-full"
                      :value="old('name') ?: $taskStatus->name"
                      type="text"
                      name="name"
                      required/>

        @if ($errors->has('name'))
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
        @endif
    </div>

    <div>
        {{ html()->submit('Обновить статус')->attribute('class', 'submit-button') }}
    </div>
    {{ html()->closeModelForm() }}
</x-app-layout>
