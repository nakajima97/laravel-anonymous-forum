<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Response;

class Thread extends Model
{
    use HasFactory;

    /**
     * コメントを返す関数
     */
    public function responses()
    {
        return $this->hasMany(Response::class);
    }

    public function get_last_response_number()
    {
        $response = $this->hasMany(Response::class)->orderByDesc('response_number')->first();

        return $response['response_number'] ?? 0;
    }
}
