<?php

namespace App\Models;

class Localization extends Model
{

    protected $table = 'localizations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'language',
        'translation_key_id',
        'translation_text',
    ];

    public function translationKey(): BelongsTo
    {
        return $this->belongsTo(TranslationKey::class, 'id', 'translation_key_id');
    }    
}
