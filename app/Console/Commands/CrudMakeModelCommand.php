<?php

namespace App\Console\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand;

class CrudMakeModelCommand extends ModelMakeCommand{

    protected $name = 'make:crud_model';

    protected function getStub(){
        return $this->resolveStubPath('/stubs/crud.model.stub');
    }
}
