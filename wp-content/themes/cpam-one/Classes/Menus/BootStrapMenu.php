<?php
require_once("AbstractMenu.php");
require_once("Walker/BootstrapMenuWalker.php");
class BootstrapMenu extends  AbstractMenu{
    public function __construct(string $location)
    {
        $this->options["menu"]=$location;
        $this->options["theme_location"]=$location;
        $this->options["menu_class"]="navbar-nav mr-auto";
        $this->options["items_wrap"]='<ul class="%2$s" id="%1$s">%3$s</ul>';
        $this->options["walker"]=new BootstrapMenuWalker();
    }
}
?>