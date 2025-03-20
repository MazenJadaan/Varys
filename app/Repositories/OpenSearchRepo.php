<?php

namespace App\Repositories;

use App\DTOs\OpenSearchQueryDTO;
use App\Traits\DataCleaner;
use OpenSearch\Client;
use OpenSearch\ClientBuilder;


class OpenSearchRepo{

    use DataCleaner;
    protected Client $client;

    public function __construct() {
        $this->client = ClientBuilder::create()
            ->setHosts([config('database.opensearch.hosts')]) 
            ->setSSLVerification([config('custom.SSL.verify_ssl')])
            ->build();
    }

    public function fetchData (OpenSearchQueryDTO $queryDTO) {
        $param = [
            'index' => config('database.opensearch.index'),
            'body' => $queryDTO->toArray()
        ];

        return $this->cleanData($param);
    }
}