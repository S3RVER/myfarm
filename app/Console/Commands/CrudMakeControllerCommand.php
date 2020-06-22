<?php

namespace App\Console\Commands;

use Illuminate\Routing\Console\ControllerMakeCommand;
use Illuminate\Support\Str;

class CrudMakeControllerCommand extends ControllerMakeCommand{

    protected $name = 'make:crud_controller';

    protected function getStub(){
        $stub = '/stubs/crud.controller.stub';
        return $this->resolveStubPath($stub);
    }

    protected function buildClass($name){
        $controllerNamespace = $this->getNamespace($name);

        $replace = [];

        $replace = $this->buildModelReplacements($replace);
        $replace = $this->buildRequestReplacements($replace);
        $replace = $this->replacements($replace);

        $replace["use {$controllerNamespace}\Controller;\n"] = '';

        return str_replace(
            array_keys($replace), array_values($replace), parent::buildClass($name)
        );
    }

    protected function replacements($replace){
        $name = strtolower(str_replace('Controller', '', $this->argument('name')));
        return array_merge($replace, [
            '{{viewFolder}}' => Str::plural($name),
            '{{routeName}}' => Str::plural($name)
        ]);
    }

    protected function buildRequestReplacements(array $replace){
        $name = str_replace('Controller', 'Request', $this->argument('name'));

        $this->call('make:crud_request', ['name' => $name]);

        return array_merge($replace, [
            '{{requestName}}' => $name,
        ]);
    }

    protected function buildModelReplacements(array $replace){
        $name = str_replace('Controller', '', $this->argument('name'));
        $name = Str::ucfirst(Str::snake($name));
        $modelClass = $this->parseModel($name);

        if (! class_exists($modelClass)) {
            $this->call('make:crud_model',
                [
                    'name' => $modelClass,
                    '-m' => true
                ]
            );
        }

        return array_merge($replace, [
            'DummyFullModelClass' => $modelClass,
            '{{ namespacedModel }}' => $modelClass,
            '{{namespacedModel}}' => $modelClass,
            'DummyModelClass' => class_basename($modelClass),
            '{{ model }}' => class_basename($modelClass),
            '{{model}}' => class_basename($modelClass),
            'DummyModelVariable' => lcfirst(class_basename($modelClass)),
            '{{ modelVariable }}' => lcfirst(class_basename($modelClass)),
            '{{modelVariable}}' => lcfirst(class_basename($modelClass)),
        ]);
    }

}
