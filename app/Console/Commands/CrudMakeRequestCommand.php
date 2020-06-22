<?php

namespace App\Console\Commands;

use Illuminate\Foundation\Console\RequestMakeCommand;

class CrudMakeRequestCommand extends RequestMakeCommand {
    protected $name = 'make:crud_request';

    protected function getStub(){
        return $this->resolveStubPath('/stubs/crud.request.stub');
    }
}
