<?php
namespace Yhy\Str\Facades;
use Illuminate\Support\Facades\Facade;

class MyStrFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return "MyStr";
    }
}
