<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Ви повинні прийняти :attribute.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'Поле :attribute не є правильним URL.',
    'after' => 'Поле :attribute має містити дату не раніше :date.',
    'after_or_equal' => 'Поле :attribute має містити дату не раніше, або дорівнюватися :date.',
    'alpha' => 'Поле :attribute має містити лише літери.',
    'alpha_dash' => 'Поле :attribute має містити лише літери, цифри, тире та підкреслення.',
    'alpha_num' => 'Поле :attribute має містити лише літери та цифри.',
    'array' => 'Поле :attribute має бути масивом.',
    'attached' => 'Цей :attribute вже прикріплений.',
    'before' => 'Поле :attribute має містити дату не пізніше :date.',
    'before_or_equal' => 'Поле :attribute має містити дату не пізніше, або дорівнюватися :date.',
    'between' => [
        'array' => 'Поле :attribute має містити від :min до :max елементів.',
        'file' => 'Розмір файлу у полі :attribute має бути не менше :min та не більше :max кілобайт.',
        'numeric' => 'Поле :attribute має бути між :min та :max.',
        'string' => 'Текст у полі :attribute має бути не менше :min та не більше :max символів.',
    ],
    'boolean' => 'Поле :attribute повинне містити логічний тип.',
    'confirmed' => 'Поле :attribute не збігається з підтвердженням.',
    'current_password' => 'The password is incorrect.',
    'date' => 'Поле :attribute не є датою.',
    'date_equals' => 'Поле :attribute має бути датою рівною :date.',
    'date_format' => 'Поле :attribute не відповідає формату :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'Поля :attribute та :other повинні бути різними.',
    'digits' => 'Довжина цифрового поля :attribute повинна дорівнювати :digits.',
    'digits_between' => 'Довжина цифрового поля :attribute повинна бути від :min до :max.',
    'dimensions' => 'Поле :attribute містить неприпустимі розміри зображення.',
    'distinct' => 'Поле :attribute містить значення, яке дублюється.',
    'doesnt_end_with' => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute may not start with one of the following: :values.',
    'email' => 'Поле :attribute повинне містити коректну електронну адресу.',
    'ends_with' => 'Поле :attribute має закінчуватися одним з наступних значень: :values',
    'enum' => 'Вибране для :attribute значення не коректне.',
    'exists' => 'Вибране для :attribute значення не коректне.',
    'failed' => 'Вказані облікові дані не збігаються з нашими записами.',
    'file' => 'Поле :attribute має містити файл.',
    'filled' => "Поле :attribute є обов'язковим для заповнення.",
    'gt' => [
        'array' => 'Поле :attribute має містити більше ніж :value елементів.',
        'file' => 'Поле :attribute має бути більше ніж :value кілобайт.',
        'numeric' => 'Поле :attribute має бути більше ніж :value.',
        'string' => 'Поле :attribute має бути більше ніж :value символів.',
    ],
    'gte' => [
        'array' => 'Поле :attribute має містити :value чи більше елементів.',
        'file' => 'Поле :attribute має дорівнювати чи бути більше ніж :value кілобайт.',
        'numeric' => 'Поле :attribute має дорівнювати чи бути більше ніж :value.',
        'string' => 'Поле :attribute має дорівнювати чи бути більше ніж :value символів.',
    ],
    'image' => 'Поле :attribute має містити зображення.',
    'in' => 'Вибране для :attribute значення не коректне.',
    'in_array' => 'Значення поля :attribute не міститься в :other.',
    'integer' => 'Поле :attribute має містити ціле число.',
    'ip' => 'Поле :attribute має містити IP адресу.',
    'ipv4' => 'Поле :attribute має містити IPv4 адресу.',
    'ipv6' => 'Поле :attribute має містити IPv6 адресу.',
    'json' => 'Дані поля :attribute мають бути у форматі JSON.',
    'lt' => [
        'array' => 'Поле :attribute має містити менше ніж :value items.',
        'file' => 'Поле :attribute має бути менше ніж :value кілобайт.',
        'numeric' => 'Поле :attribute має бути менше ніж :value.',
        'string' => 'Поле :attribute має бути менше ніж :value символів.',
    ],
    'lte' => [
        'array' => 'Поле :attribute має містити не більше ніж :value елементів.',
        'file' => 'Поле :attribute має дорівнювати чи бути менше ніж :value кілобайт.',
        'numeric' => 'Поле :attribute має дорівнювати чи бути менше ніж :value.',
        'string' => 'Поле :attribute має дорівнювати чи бути менше ніж :value символів.',
    ],
    'mac_address' => 'Поле :attribute має містити MAC адресу.',
    'max' => [
        'array' => 'Поле :attribute повинне містити не більше :max елементів.',
        'file' => 'Файл в полі :attribute має бути не більше :max кілобайт.',
        'numeric' => 'Поле :attribute має бути не більше :max.',
        'string' => 'Текст в полі :attribute повинен мати довжину не більшу за :max.',
    ],
    'max_digits' => 'The :attribute must not have more than :max digits.',
    'mimes' => 'Поле :attribute повинне містити файл одного з типів: :values.',
    'mimetypes' => 'Поле :attribute повинне містити файл одного з типів: :values.',
    'min' => [
        'array' => 'Поле :attribute повинне містити не менше :min елементів.',
        'file' => 'Розмір файлу у полі :attribute має бути не меншим :min кілобайт.',
        'numeric' => 'Поле :attribute повинне бути не менше :min.',
        'string' => 'Текст у полі :attribute повинен містити не менше :min символів.',
    ],
    'min_digits' => 'The :attribute must have at least :min digits.',
    'multiple_of' => 'Поле :attribute повинно містити декілька :value',
    'next' => 'Далі &raquo;',
    'not_in' => 'Вибране для :attribute значення не коректне.',
    'not_regex' => 'Формат поля :attribute не вірний.',
    'numeric' => 'Поле :attribute повинно містити число.',
    'password' => [
        'letters' => 'The :attribute must contain at least one letter.',
        'mixed' => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute must contain at least one number.',
        'symbols' => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'Поле :attribute повинне бути присутнє.',
    'previous' => '&laquo; Назад',
    'prohibited' => 'Поле :attribute заборонено.',
    'prohibited_if' => 'Поле :attribute заборонено, коли :other дорівнює :value.',
    'prohibited_unless' => 'Поле :attribute заборонено, якщо тільки :other не знаходиться в :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'Поле :attribute має хибний формат.',
    'relatable' => "Цей :attribute може бути не пов'язаний з цим ресурсом.",
    'required' => "Поле :attribute є обов'язковим для заповнення.",
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => "Поле :attribute є обов'язковим для заповнення, коли :other є рівним :value.",
    'required_unless' => "Поле :attribute є обов'язковим для заповнення, коли :other відрізняється від :values",
    'required_with' => "Поле :attribute є обов'язковим для заповнення, коли :values вказано.",
    'required_with_all' => "Поле :attribute є обов'язковим для заповнення, коли :values вказано.",
    'required_without' => "Поле :attribute є обов'язковим для заповнення, коли :values не вказано.",
    'required_without_all' => "Поле :attribute є обов'язковим для заповнення, коли :values не вказано.",
    'reset' => 'Ваш пароль змінено!',
    'same' => 'Поля :attribute та :other мають збігатися.',
    'sent' => 'Ми надіслали на Вашу електронну адресу посилання для зміни пароля!',
    'size' => [
        'array' => 'Поле :attribute повинне містити :size елементів.',
        'file' => 'Файл у полі :attribute має бути розміром :size кілобайт.',
        'numeric' => 'Поле :attribute має бути довжини :size.',
        'string' => 'Текст у полі :attribute повинен містити :size символів.',
    ],
    'starts_with' => 'Поле :attribute повинне починатися з одного з наступних значень: :values',
    'string' => 'Поле :attribute повинне містити текст.',
    'throttle' => 'Забагато спроб входу. Будь ласка, спробуйте ще раз, через :seconds секунд.',
    'throttled' => 'Зачекайте, перш ніж повторити спробу.',
    'timezone' => 'Поле :attribute повинне містити коректну часову зону.',
    'token' => 'Термін дії посилання для зміни пароля закінчився.',
    'unique' => 'Вказане значення поля :attribute вже існує.',
    'uploaded' => 'Завантаження :attribute не вдалося.',
    'url' => 'Формат поля :attribute хибний.',
    'user' => 'Користувача із вказаною електронною адресою не знайдено.',
    'uuid' => 'Поле :attribute має бути коректним UUID ідентифікатором.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
