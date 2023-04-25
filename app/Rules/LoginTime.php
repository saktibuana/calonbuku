<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class LoginTime implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $currentHour = date('H');
        return ($currentHour >= 8 && $currentHour < 18);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Maaf, login hanya dapat dilakukan pada jam 8 pagi sampai jam 6 sore.';
    }
}
