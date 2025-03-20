<?php
namespace App\Http\Controllers;

use App\Repositories\OpenSearchRepo;
use Illuminate\Http\Request;

class OpenSearchController extends Controller {
    protected $openSearchRepo;

    public function __construct(OpenSearchRepo $openSearchRepo) {
        $this->openSearchRepo = $openSearchRepo;
    }

    public function search(Request $request) {
        $query = $request->input('query', '*');

        $params = [
            'index' => config('database.opensearch.index'),
            'body' => [
                'query' => [
                    'query_string' => [
                        'query' => $query
                    ]
                ]
            ]
        ];

        $results = $this->openSearchRepo->search($params);
        return response()->json($results);
    }
}

