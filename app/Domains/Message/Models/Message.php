<?php

namespace App\Domains\Message\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property int $userId
 * @property int $animeId
 * @property string $message
 */
class Message extends Model
{
    protected $table = "messages";
}
