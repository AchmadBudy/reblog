<?php

namespace App\Filament\Resources;

use App\Enum\ProjectStatusEnum;
use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationGroup = 'Projects';

    protected static ?string $navigationIcon = 'heroicon-o-arrow-right-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->unique(ignoreRecord: true)
                            ->required(),
                        Forms\Components\TagsInput::make('tech_stack')
                            ->label('Tech Stack')
                            ->required(),
                        Forms\Components\Textarea::make('preview_description')
                            ->label('Preview Description')
                            ->rows(5)
                            ->maxLength(100)
                            ->required(),
                        Forms\Components\RichEditor::make('description')
                            ->label('Description')
                            ->disableToolbarButtons(['attachFiles'])
                            ->required(),
                        Forms\Components\Repeater::make('features')
                            ->label('Features')
                            ->simple(
                                Forms\Components\TextInput::make('name')
                                    ->label('Feature')
                                    ->required(),
                            ),
                    ])
                    ->columnSpan([
                        'md' => 2,
                    ]),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\FileUpload::make('main_image')
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
                        Forms\Components\FileUpload::make('galleries')
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
                        Forms\Components\TextInput::make('live_demo')
                            ->label('Live Demo')
                            ->url(),
                        Forms\Components\TextInput::make('source_code')
                            ->label('Source Code')
                            ->url(),
                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options(ProjectStatusEnum::class)
                            ->required(),
                        Forms\Components\TextInput::make('duration_days')
                            ->label('Duration (Days)')
                            ->numeric()
                            ->required(),
                        Forms\Components\TextInput::make('team_size')
                            ->label('Team Size')
                            ->numeric()
                            ->required(),
                    ])
                    ->columnSpan([
                        'md' => 1,
                    ]),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Repeater::make('challenges')
                            ->relationship('challenges')
                            ->label('Challenges')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Title')
                                    ->required(),
                                Forms\Components\Textarea::make('description')
                                    ->label('Description')
                                    ->rows(10)
                                    ->required(),
                                Forms\Components\Textarea::make('solution')
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
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (ProjectStatusEnum $state) => $state->getColor()),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
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
