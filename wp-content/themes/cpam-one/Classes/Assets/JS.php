
<?php
class JS{
    private static $dir="/assets/js/";
    public static function enqueue()
    {
        $jsDir=self::getDocumentRoot().self::$dir;
        wp_register_script(
            "chunk",
            $jsDir."app.chunk.js",[],"1.0.0",false
        );
        wp_register_script(
            "app",
            $jsDir."app.js",[],"1.0.0",false
        );  
        wp_enqueue_script("chunk");
        wp_enqueue_script("app");
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