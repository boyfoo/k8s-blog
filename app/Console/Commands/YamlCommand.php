<?php

namespace App\Console\Commands;

use Elasticsearch\Client;
use Illuminate\Console\Command;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Yaml\Yaml;

class YamlCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'yaml';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $tiemFile = storage_path('framework/question_cache/time');
        if (file_exists($tiemFile)) {
            $oldTime = file_get_contents($tiemFile);
        } else {
            $oldTime = 0;
            $f = new Filesystem();
            $f->touch($tiemFile);
        }
        $finder = new Finder();
        $finder->files()->in(base_path('question'));
        foreach ($finder as $file) {
            if ($file->getMTime() > $oldTime) {
                $yaml = Yaml::parse(file_get_contents($file->getPathname()));
                if (isset($yaml['question_tag']) && $yaml['question_tag']) {
                    $yaml['question_tag'] = array_map(function ($item) {
                        return strtolower($item);
                    }, $yaml['question_tag']);
                }
                $id = explode('.', $file->getFilename())[0];
                $yaml['question_id'] = $id;
                $this->client->index([
                    'id' => $id,
                    'index' => 'question',
                    'type' => '_doc',
                    'body' => $yaml
                ]);
                file_put_contents($tiemFile, time());
            }

        }


    }
}
