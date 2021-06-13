<?php

namespace App\Http\Controllers;

use Boyfoo\ElasticsearchSql\Query;
use Boyfoo\ElasticsearchSql\Search;
use Elasticsearch\Client;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * @var Client
     */
    public $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function index(Request $request): array
    {
        $params = $request->validate(['question_content' => 'required']);

        $sql = Search::create()->index('question')
            ->source(['question_content', 'question_id'])
            ->query(function (Query $query) use ($params) {
                $query->mustMatch('question_content', $params['question_content']);
            })->toArray();


        $data = [];
        foreach ($this->client->search($sql)['hits']['hits'] as $v) {
            $data[] = $v['_source'];
        }

        return $data;
    }

    public function show($questionId): array
    {
        $data = $this->client->get([
            'index' => 'question',
            'type' => '_doc',
            'id' => $questionId,
        ]);

        if (!$data) {
            return [];
        }

        return $data['_source'];

    }
}
