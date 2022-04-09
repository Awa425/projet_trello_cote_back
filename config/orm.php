<?php 
function json_to_array()
{
    $json = file_get_contents(PATH_DB);
    return $json ;
}

function array_to_json($key, $data){
        $json = file_get_contents(PATH_DB);
        $js_arr = json_decode($json, true);
        $js_arr[$key]=$data;
        $arr_js = json_encode($js_arr);
        file_put_contents(PATH_DB, $arr_js);
}


