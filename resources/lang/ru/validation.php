<?php

return [
    'min' => [
        'string' => ':attribute должен иметь длину не менее 8 символов',
    ],
    'max' => [
        'string' => ':attribute должен иметь длине не более :max символов'
    ],
    'confirmed' => ':attribute и подтверждение не совпадают',
    'unique' => 'Невозможно создать аккаунт с ввёденным :attribute адресом.',
    'attributes' => [
        'password' => 'Пароль',
        'name' => 'Имя'
    ]
];
