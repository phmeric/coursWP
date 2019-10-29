
<?php
class CSS{
    private static $dir="/assets/css/";
    public static function enqueue()
    {
        $cssDir=self::getDocumentRoot().self::$dir;
    
        wp_enqueue_style(
        "custom",
        $cssDir."custom.css");
    }
    public static function getDocumentRoot(): string {
         $rootPathes = explode("/", $_SERVER["DOCUMENT_ROOT"]);

         $themePathes = explode("/", get_template_directory());
         $themePathes = array_reverse($themePathes);
         array_pop($themePathes);
         $themePathes = array_reverse($themePathes);

         // Rebuild path from merge exclude two arrays
         //$themePathes = array_diff($themePathes, $rootPathes);
         return "/" . implode("/", $themePathes);
     }

}
?>