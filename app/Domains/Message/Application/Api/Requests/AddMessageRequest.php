<?php

namespace App\Domains\Message\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $userId
 * @property int $animeId
 * @property string $message
 */
class AddMessageRequest extends FormRequest
{

}
