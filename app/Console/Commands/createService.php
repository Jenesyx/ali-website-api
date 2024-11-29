<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class createService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:createService {nameClass}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command create service class';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('nameClass');
        $path = app_path('Http/Services/' . $name . '.php');

        $stub = "<?php

namespace App\Http\Services;

use Illuminate\Http\JsonResponse;
class $name
{
      public function index():JsonResponse
      {
         // Service method logic
      }

      public function store():JsonResponse
      {
         // Service method logic
      }

      public function show():JsonResponse
      {
         // Service method logic
      }

      public function update():JsonResponse
      {
         // Service method logic
      }

      public function destroy():JsonResponse
      {
         // Service method logic
      }

}
";

        if (File::exists($path)) {
            $this->error('Service class already exists!');
            return;
        }

        File::put($path, $stub);
        $this->info('Service class created successfully.');

    }
}
