<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Command\Command;

class Chat extends Model
{
    use HasFactory;

    public function messages(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(ChatMessage::class,'chatable');
    }


}
