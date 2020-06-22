<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CrudMakeViewCommand extends Command{
    protected $signature = 'make:crud_view {name}';
    protected $description = 'Create a new blade template.';
    private $path = 'resources/views/';


    public function __construct(){
        parent::__construct();
    }

    public function handle(){
        $this->createDir(strtolower($this->argument('name')));
        $this->indexFile(strtolower($this->argument('name')));
        $this->createFile(strtolower($this->argument('name')));
        $this->editFile(strtolower($this->argument('name')));
        $this->showFile(strtolower($this->argument('name')));

    }

    public function createDir($name){
        $this->path = $this->path.$name;
        if (!file_exists($this->path)) {
            mkdir($this->path, 0777, true);
        }
    }

    public function indexFile($name){
        $content = '<a href="{{route(\''.$name.'.create\')}}">افزودن</a>
<table>
    <thead>
        <tr>
            <th>شناسه</th>
            <th>نام</th>
            <th>عملیات</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->username}}</td>
            <td><a href="{{route(\''.$name.'.edit\', $value->id)}}">ویرایش</a></td>
        </tr>
    @endforeach
    </tbody>
</table>';
    $this->create_folder($content,'index');
    }

    public function createFile($name){
        $content = '{{Form::open([\'route\' => \''.$name.'.store\', \'method\' => \'post\'])}}
    <div>
        <label for="username">نام</label>
        {{Form::text(\'username\', null, [\'class\' => \'\'])}}
    </div>
    <div>
        {{Form::submit(\'ذخیره\')}}
    </div>
{{Form::close()}}';
        $this->create_folder($content,'create');
    }

    public function editFile($name){
        $content = '{{Form::open([\'route\' => [\''.$name.'.update\', $data->id], \'method\' => \'put\'])}}
    <div>
        <label for="username">نام</label>
        {{Form::text(\'username\', $data->username, [\'class\' => \'\'])}}
    </div>
    <div>
        {{Form::submit(\'ذخیره\')}}
    </div>
{{Form::close()}}';
        $this->create_folder($content,'edit');
    }

    public function showFile($name){
        $content = '';
        $this->create_folder($content,'show');
    }

    private function create_folder($content,$file){
        $fp = fopen($this->path.'/'.$file.'.blade.php',"wb");
        fwrite($fp,$content);
        fclose($fp);
    }
}
