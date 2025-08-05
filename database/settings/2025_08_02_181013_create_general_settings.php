<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.person_name', 'John Doe');
        $this->migrator->add('general.person_avatar', '');
        $this->migrator->add('general.person_bio', 'A passionate developer and writer.');
        $this->migrator->add('general.person_title', 'Software Engineer');
        $this->migrator->add('general.person_email', 'johndoe@example.com');
        $this->migrator->add('general.person_location', 'Unknown, Unknown');
        $this->migrator->add('general.website_description', 'lorem ipsum dolor sit amet consectetur adipisicing elit.');
    }
};
