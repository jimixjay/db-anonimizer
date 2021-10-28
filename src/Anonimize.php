<?php


namespace Jimixjay\Anonimizer;

use Exception;
use Illuminate\Console\Command;
use Throwable;

class Anonimize extends Command
{
    protected $signature = "dbanonimizer:anonimize";
    protected $description = "Anonimize DB";

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        try {
            $path = getcwd() . DIRECTORY_SEPARATOR . 'db-anonimizer.json';
            $configJson = file_get_contents($path);


        } catch (Throwable $e) {

        }
    }

}
