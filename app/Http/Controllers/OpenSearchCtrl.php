<?php

namespace App\Http\Controllers;

use App\Services\OpenSearchService;
use App\DTOs\OpenSearchQueryDTO;

class OpenSearchCtrl extends Controller
{
    protected $osService;

    public function __construct(OpenSearchService $osService)
    {
        $this->osService = $osService;
    }

    public function getLogs () {
        $interval = config('custom.interval_seconds',300);
        $queryDTO = new OpenSearchQueryDTO($interval);
        $logs = $this->osService->getLogs($queryDTO);
        return response()->json($logs);
    }
}
