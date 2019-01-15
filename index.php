<?php

function getStructure($path){
    if (file_exists($path) and is_dir($path)) {
        $structure = array("path"=>$path, "type"=>"dir", "components"=>[]);
        $files = scandir($path);
        $files = array_diff($files,array(".",".."));
        foreach ($files as $key => $file) {
            if (is_dir("$path/$file")) {
                array_push($structure["components"],getStructure("$path/$file"));
            }else if (is_file("$path/$file")) {
                array_push($structure["components"], array("path"=> "$path/$file", "type"=>"file"));
            }
        }
    }
    return $structure;
}


$structureJSON = json_encode(getStructure(__DIR__));
print_r($structureJSON);
?>