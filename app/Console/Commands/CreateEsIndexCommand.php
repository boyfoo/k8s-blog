<?php

namespace App\Console\Commands;

use Elasticsearch\Client;
use Illuminate\Console\Command;

class CreateEsIndexCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'es:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '创建es索引';

    /**
     * @var Client
     */
    protected $client;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (true != $this->client->ping()) {
            $this->info("连接不上es node");
        }


        $params = [
            'index' => 'question',
            'body' => [
                'settings' => [
                    'number_of_shards' => 1, //一个索引中含有的主分片的数量
                    'number_of_replicas' => 0, //每一个主分片关联的副本分片的数量
                    'max_result_window' => 5000000,
                ],
                'mappings' => [
                    '_doc' => [  //类型名（相当于mysql的表）
                        '_all' => [   //  是否开启所有字段的检索
                            'enabled' => false
                        ],
                        '_source' => [ //  存储原始文档
                            'enabled' => true
                        ],
                        'properties' => [   //文档类型设置（相当于mysql的数据类型）
                            'question_id' => ['type' => 'integer'],
                            'k8s_version' => ['type' => 'keyword'],
                            'question_content' => [
                                "type" => "text",
                                "analyzer" => "ik_max_word",
                                "search_analyzer" => "ik_max_word",
//                                "fields" => [
//                                    "keyword" => [
//                                        "type" => "keyword",
//                                        "ignore_above" => 512
//                                    ]
//                                ]
                            ],
                            "question_tag" => [],
                            'question_answer' => ['type' => 'keyword']
                        ]
                    ]
                ]
            ]
        ];

        $this->client->indices()->create($params);
    }
}
