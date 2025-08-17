<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use App\Settings\GeneralSetting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;
use UnitEnum;

class GeneralSettings extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string|UnitEnum|null $navigationGroup = 'Settings';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-arrow-right-circle';

    protected string $view = 'filament.pages.general-settings';

    public function mount(GeneralSetting $settings): void
    {
        $this->form->fill([
            'person_name' => $settings->person_name,
            'person_avatar' => $settings->person_avatar,
            'person_bio' => $settings->person_bio,
            'person_title' => $settings->person_title,
            'person_email' => $settings->person_email,
            'person_location' => $settings->person_location,
            'website_description' => $settings->website_description,
            'icon' => $settings->icon,
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('General Settings')
                    ->schema([
                        TextInput::make('person_name')
                            ->required(),
                        FileUpload::make('person_avatar')
                            ->directory('images')
                            ->disk('public')
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1:1')
                            ->imageEditorAspectRatios([
                                '1:1',
                            ])
                            ->required(),
                        Textarea::make('person_bio')
                            ->rows(5)
                            ->required(),
                        TextInput::make('person_title')
                            ->required(),
                        TextInput::make('person_email')
                            ->required(),
                        TextInput::make('person_location')
                            ->required(),
                        Textarea::make('website_description')
                            ->rows(5)
                            ->required(),
                        FileUpload::make('icon')
                            ->directory('images')
                            ->disk('public')
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1:1')
                            ->imageEditorAspectRatios([
                                '1:1',
                            ])
                            ->required(),
                        Actions::make([
                            Action::make('Save')
                                ->translateLabel()
                                ->requiresConfirmation()
                                ->action('saveSettings'),
                        ]),
                    ]),
            ])
            ->statePath('data');
    }

    public function saveSettings(GeneralSetting $settings): void
    {
        $data = $this->form->getState();
        $settings->person_name = $data['person_name'];
        $settings->person_bio = $data['person_bio'];
        $settings->person_title = $data['person_title'];
        $settings->person_email = $data['person_email'];
        $settings->person_location = $data['person_location'];
        $settings->website_description = $data['website_description'];
        // handle if person_avatar is updated delete old image
        if ($data['person_avatar'] !== $settings->person_avatar) {
            if (Storage::disk('public')->exists($settings->person_avatar)) {
                Storage::disk('public')
                    ->delete($settings->person_avatar);
            }
            $settings->person_avatar = $data['person_avatar'];
        }
        // handle if icon is updated delete old image
        if ($data['icon'] !== $settings->icon) {
            if (Storage::disk('public')->exists($settings->icon)) {
                Storage::disk('public')
                    ->delete($settings->icon);
            }
            $settings->icon = $data['icon'];
        }
        $settings->save();

        Notification::make()
            ->title('Settings saved')
            ->success()
            ->send();
    }
}
