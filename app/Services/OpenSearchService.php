<?php 

namespace App\Services;

use App\DTOs\OpenSearchQueryDTO;
use App\Repositories\OpenSearchRepo;
use App\Traits\DataCleaner;

class OpenSearchService
{
    protected $client;
    protected OpenSearchRepo $osRepo;

    public function __construct(OpenSearchRepo $osRepo) 
    {
        $this->osRepo = $osRepo;
    }

    public function getLogs (OpenSearchQueryDTO $queryDto){
        return $this->osRepo->fetchData($queryDto);
    }

}
