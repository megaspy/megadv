<?
if (!defined('MEGADV')) die ('401 page not found');
class module_test_test1
{
public $param;

public function run()

{

return conf::get('test_str').' '.$this->param;

}

public function set_param($param)
{

$this->param = $param;

}


}


?>