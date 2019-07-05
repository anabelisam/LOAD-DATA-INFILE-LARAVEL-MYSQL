<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ImportCSV implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $filePath;
    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $file_path = str_replace('\\','/',$this->filePath);
        $file_path = str_replace($_SERVER['DOCUMENT_ROOT'],'',$file_path);
        
        \DB::connection()->getPdo()
            ->exec("LOAD DATA LOCAL INFILE '{$file_path}'
                    INTO TABLE productos
                    FIELDS TERMINATED BY ','
                    IGNORE 1 ROWS
                    (`nombre`, `referencia`, `precio`,
                    `costo`, `unidades`, `estado`
                    )");
    }
}
