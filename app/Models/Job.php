<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                "id" => 1,
                "title" => "CEO",
                "salary" => "2,00000"
            ],
            [
                "id" => 2,
                "title" => "Programmer",
                "salary" => "3,0000",
            ],
            [
                "id" => 3,
                "title" => "UI/UX Designer",
                "salary" => "5,0000",
            ],
        ];
    }

    public static function find($id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job["id"] === (int)$id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
