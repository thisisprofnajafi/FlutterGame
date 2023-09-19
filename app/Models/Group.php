<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function members(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(GroupMember::class);
    }

    public function messages(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(ChatMessage::class,'chatable');
    }
}
