<?php
abstract class AbstractMenu{
protected $options=[
"theme_location" => null,
"container"=> null,
"container_class" => null,
"container_id" => null,
"menu" => null,
"menu_class" => null,
"menu_id"=> null,
"echo"=>true,
"fallback_cb"=> null,
"before" => null,
"after"=> null,
"Link_before"=> null,
"Link_after"=> null,
"itemps_wrap"=> null,
"depth"=> 0,
"walker" => null,
];
public function getOptions():array
{
    return $this->options;
}

}


?>