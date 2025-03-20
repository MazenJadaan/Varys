<?php 
namespace App\Repositories;
use OpenSearch\ClientBuilder;



class OpenSearchRepo {
    protected $client;

    public function __construct() {
        $host = config('database.opensearch.hosts', 'wazuh1.indexer');
        $port = config('database.opensearch.port', 9200); 
        $username = config('database.opensearch.basic_auth.username', 'monitor');
        $password = config('database.opensearch.basic_auth.password', 'gIn4G6VA8S5.f&V?nl1j');
        $sslVerify = config('custom.SSL.verify_ssl', false); 

        $fullHost = "https://{$host}:{$port}"; 

        $clientBuilder = ClientBuilder::create()->setHosts([$fullHost]);

        if (!empty($username) && !empty($password)) {
            $clientBuilder->setBasicAuthentication($username, $password);
        }

        $clientBuilder->setSSLVerification($sslVerify);

        $this->client = $clientBuilder->build();
    }

    public function search(array $params) {
        return $this->client->search($params);
    }
}
