<?php
/**
 * elasticsearch 相关配置
 * @author dengjing 2019-07-10
 */

return [
    'config' => [
        'hosts' => [env('ES_HOST', 'localhost:9200')],
        'retries' => 1,
    ],
];
