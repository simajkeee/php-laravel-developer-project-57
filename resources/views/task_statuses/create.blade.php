<x-app-layout>
    <section class="bg-white">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                {{ html()->form()->route('task_statuses.store')->open() }}
                    <div class="mb-5">
                        {{ html()->label('Название статуса')
                            ->for('status_name')
                            ->attribute('class', 'block')
                            ->children(
                                html()->text('name')
                                      ->attributes([
                                          'id' => 'status_name',
                                          'class' => 'mx-2',
                                      ])->required()
                            ) }}
                        {{ $errors->has('name') ? html()->div($errors->first('name'))->class('text-red-600') : '' }}
                    </div>

                    <div>
                        {{ html()->submit('Создать статус')->attribute('class', 'submit-button') }}
                    </div>
                {{ html()->form()->close() }}
            </div>
        </div>
    </section>
</x-app-layout>
