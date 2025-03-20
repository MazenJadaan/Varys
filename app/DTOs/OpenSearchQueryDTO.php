<?php

namespace App\DTOs;

use Carbon\Carbon;

class OpenSearchQueryDTO
{
    /**
     * Create a new class instance.
     */
    public readonly string $startTime;
    public readonly string $endTime;
    public readonly int $interval;

    public function __construct(int $interval) {
        $this->interval = $interval;
        $this->endTime = Carbon::now('UTC')->toIso8601String();
        $this->startTime = Carbon::now('UTC')->subSecond($this->interval)->toIso8601String();
    }

    public function toArray() : array {
        return [
            'query' => [
                'range' => [
                    'timestamp_field' => [
                        'gte' => $this->startTime,
                        'lte' => $this->endTime,
                        'format' => 'strict_date_time'
                    ]
                ]
            ]
        ];
    }

}
