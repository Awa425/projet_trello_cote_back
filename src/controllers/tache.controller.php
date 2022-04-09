<?php 

if ($_SERVER["REQUEST_METHOD"]=="GET") {  
    if (isset($_REQUEST['action'])) {
        switch ($_REQUEST['action']) { 
            case 'sauvegardeEtat':  
                echo json_to_array();
                break;
            default: 
               
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{  
    if (isset($_REQUEST['action'])) 
    {
        switch ($_REQUEST['action']) 
        { 
            case 'sauvegardeEtat':   
            $tab_data = json_decode(file_get_contents("php://input"),true);
            $arr = "Tableau";
            array_to_json($arr, $tab_data);
            break;   
        }
    }

}