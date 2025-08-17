<?php

declare(strict_types=1);

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSetting extends Settings
{
    public string $person_name;

    public string $person_avatar;

    public string $person_bio;

    public string $person_title;

    public string $person_email;

    public string $person_location;

    public string $website_description;

    public string $icon;

    public static function group(): string
    {
        return 'general';
    }
}
