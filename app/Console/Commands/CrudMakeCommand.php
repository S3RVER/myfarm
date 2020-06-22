<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Composer;
use Illuminate\Support\Str;

class CrudMakeCommand extends Command{

    // TODO next versions : گرفتن ورودی ها به صورت آرایه با نوع و نام و مقدار و ایجاد
    // TODO next versions : ایجاد یک ارایه کامل از ساختار قابل ساخت به تفصیر کنترولر، مدل، ماگریشین، فیلدها، ویوها

    protected $signature = 'make:crud {name}';

    protected $description = 'Create Simple CRUD - Version 1';

    protected $composer;

    public function __construct(Composer $composer){
        parent::__construct();
        $this->composer = $composer;
    }

    public function handle(){
        $this->composer->dumpAutoloads();
        $this->info('Composer autoload dump successfully');
        $this->createController();
        $this->createViews();
        $name = Str::studly(class_basename($this->argument('name')));
        $route = strtolower(Str::plural($this->argument('name')));
        $this->question("Route::resource('/{$route}', '{$name}Controller');");
    }

    private function createController(){
        $name = Str::studly(class_basename($this->argument('name')));
        $this->call('make:crud_controller', [
            'name' => "{$name}Controller",
        ]);
    }

    private function createViews(){
        $name = Str::pluralStudly(class_basename($this->argument('name')));
        $this->call('make:crud_view', [
            'name' => "{$name}",
        ]);
        $this->info('Views created successfully');
    }
}
