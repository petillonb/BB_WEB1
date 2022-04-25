
<?php
function get_all_files($directory)
{
    $result = [];
    $scan = scandir($directory);
    foreach ($scan as $k => $v) {
        $info = pathinfo($v);
        if ($info["extension"] == "php") {
            $result[] = $info["filename"];
        }
    }
    return $result;
}

?>