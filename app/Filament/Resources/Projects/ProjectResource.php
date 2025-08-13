<?php

namespace App\Filament\Resources\Projects;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use App\Filament\Resources\Projects\Pages\ListProjects;
use App\Filament\Resources\Projects\Pages\CreateProject;
use App\Filament\Resources\Projects\Pages\EditProject;
use App\Enum\ProjectStatusEnum;
use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static string | \UnitEnum | null $navigationGroup = 'Projects';

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-arrow-right-circle';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->unique(ignoreRecord: true)
                            ->required(),
                        TagsInput::make('tech_stack')
                            ->label('Tech Stack')
                            ->required(),
                        Textarea::make('preview_description')
                            ->label('Preview Description')
                            ->rows(5)
                            ->maxLength(100)
                            ->required(),
                        RichEditor::make('description')
                            ->label('Description')
                            ->disableToolbarButtons(['attachFiles'])
                            ->required(),
                        Repeater::make('features')
                            ->label('Features')
                            ->simple(
                                TextInput::make('name')
                                    ->label('Feature')
                                    ->required(),
                            ),
                    ])
                    ->columnSpan([
                        'md' => 2,
                    ]),
                Section::make()
                    ->schema([
                        FileUpload::make('main_image')
                            ->label('Main Image')
                            ->disk('public')
                            ->directory('project-images')
                            ->image()
                            ->imageEditor()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('16:9')
                            ->imageEditorAspectRatios([
                                '16:9',
                            ])
                            ->required(),
                        FileUpload::make('galleries')
                            ->label('Galleries')
                            ->disk('public')
                            ->directory('project-images')
                            ->image()
                            ->imageEditor()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('16:9')
                            ->imageEditorAspectRatios([
                                '16:9',
                            ])
                            ->multiple(),
                        TextInput::make('live_demo')
                            ->label('Live Demo')
                            ->url(),
                        TextInput::make('source_code')
                            ->label('Source Code')
                            ->url(),
                        Select::make('status')
                            ->label('Status')
                            ->options(ProjectStatusEnum::class)
                            ->required(),
                        TextInput::make('duration_days')
                            ->label('Duration (Days)')
                            ->numeric()
                            ->required(),
                        TextInput::make('team_size')
                            ->label('Team Size')
                            ->numeric()
                            ->required(),
                    ])
                    ->columnSpan([
                        'md' => 1,
                    ]),
                Section::make()
                    ->schema([
                        Repeater::make('challenges')
                            ->relationship('challenges')
                            ->label('Challenges')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title')
                                    ->required(),
                                Textarea::make('description')
                                    ->label('Description')
                                    ->rows(10)
                                    ->required(),
                                Textarea::make('solution')
                                    ->label('Solution')
                                    ->rows(10)
                                    ->required(),
                            ]),
                    ]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (ProjectStatusEnum $state) => $state->getColor()),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProjects::route('/'),
            'create' => CreateProject::route('/create'),
            'edit' => EditProject::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
