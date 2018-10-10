<?php

//PHPFN(__halt_compiler);
$__halt_compiler = "\n\rContent of variable __halt_compiler";
echo $__halt_compiler;
    
class test__halt_compiler {
    public $__halt_compiler = "\n\rContent of property __halt_compiler";
}
$instance = new test__halt_compiler;
echo $instance->__halt_compiler;

//PHPFN(array);
$array = "\n\rContent of variable array";
echo $array;
    
class test_array {
    public $array = "\n\rContent of property array";
}
$instance = new test_array;
echo $instance->array;

//PHPFN(die);
$die = "\n\rContent of variable die";
echo $die;
    
class test_die {
    public $die = "\n\rContent of property die";
}
$instance = new test_die;
echo $instance->die;

//PHPFN(echo);
$echo = "\n\rContent of variable echo";
echo $echo;
    
class test_echo {
    public $echo = "\n\rContent of property echo";
}
$instance = new test_echo;
echo $instance->echo;

//PHPFN(empty); // "Language construct"
$empty = "\n\rContent of variable empty";
echo $empty;
    
class test_empty {
    public $empty = "\n\rContent of property empty";
}
$instance = new test_empty;
echo $instance->empty;


//PHPFN(eval); // "Language construct"
$eval = "\n\rContent of variable eval";
echo $eval;
    
class test_eval {
    public $eval = "\n\rContent of property eval";
}
$instance = new test_eval;
echo $instance->eval;


//PHPFN(exit); // "Language construct"
$exit = "\n\rContent of variable exit";
echo $exit;
    
class test_exit {
    public $exit = "\n\rContent of property exit";
}
$instance = new test_exit;
echo $instance->exit;


//PHPFN(include); // "Language construct"
$include = "\n\rContent of variable include";
echo $include;
    
class test_include {
    public $include = "\n\rContent of property include";
}
$instance = new test_include;
echo $instance->include;


//PHPFN(include_once); // "Language construct"
$include_once = "\n\rContent of variable include_once";
echo $include_once;
    
class test_include_once {
    public $include_once = "\n\rContent of property include_once";
}
$instance = new test_include_once;
echo $instance->include_once;


//PHPFN(isset); // "Language construct"
$isset = "\n\rContent of variable isset";
echo $isset;
    
class test_isset {
    public $isset = "\n\rContent of property isset";
}
$instance = new test_isset;
echo $instance->isset;


//PHPFN(list); // "Language construct"
$list = "\n\rContent of variable list";
echo $list;
    
class test_list {
    public $list = "\n\rContent of property list";
}
$instance = new test_list;
echo $instance->list;


//PHPFN(print); // "Language construct"
$print = "\n\rContent of variable print";
echo $print;
    
class test_print {
    public $print = "\n\rContent of property print";
}
$instance = new test_print;
echo $instance->print;


//PHPFN(require); // "Language construct"
$require = "\n\rContent of variable require";
echo $require;
    
class test_require {
    public $require = "\n\rContent of property require";
}
$instance = new test_require;
echo $instance->require;


//PHPFN(require_once); // "Language construct"
$require_once = "\n\rContent of variable require_once";
echo $require_once;
    
class test_require_once {
    public $require_once = "\n\rContent of property require_once";
}
$instance = new test_require_once;
echo $instance->require_once;


//PHPFN(return); // "Language construct"
$return = "\n\rContent of variable return";
echo $return;
    
class test_return {
    public $return = "\n\rContent of property return";
}
$instance = new test_return;
echo $instance->return;


//PHPFN(unset); // "Language construct"
$unset = "\n\rContent of variable unset";
echo $unset;
    
class test_unset {
    public $unset = "\n\rContent of property unset";
}
$instance = new test_unset;
echo $instance->unset;

dl("example");
require_once("example.php");

$example = new example();

echo $example->empty;
