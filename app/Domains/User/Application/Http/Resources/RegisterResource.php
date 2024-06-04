<?php

namespace App\Domains\User\Application\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegisterResource extends JsonResource
{
    public static $wrap = null;

    public function __construct()
    {
        parent::__construct(null);
    }

    public function toArray($request): array
    {
        return [
            'message' => trans('auth.user_created'),
        ];
    }
}
