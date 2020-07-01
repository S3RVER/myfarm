<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use MahdiMajidzadeh\Persianalize\Persian;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){

        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }

        $this->requestStandardization();

        DB::listen(function($query) {
            Log::info($query->sql,$query->bindings,$query->time);
        });
    }

    private function requestStandardization(){
        if (count(Request::all()) > 0) {
            Request::replace($this->multidimensionalArrayStandardization(Request::all()));
        }
    }

    private function multidimensionalArrayStandardization($array){
        $new = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $new[$key] = $this->multidimensionalArrayStandardization($value);
            }else{
                $new[$key] = Persian::standard($value);
            }
        }
        return $new;
    }
}
