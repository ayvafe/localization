<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TransactionKey extends Model
{
    protected $table = 'transaction_keys';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'translation_key',
    ];

    // /**
    //  * Get the localizations.
    //  */
    // public function localizations(): HasMany
    // {
    //     return $this->hasMany(Localization::class, 'translation_key_id', 'id');
    // }
    
}
