<?php

include_once "../notes/functions.php";
$data = json_decode(file_get_contents("php://input"));
//print_p($data);
switch($data->type){
    case "example_all":
        $output['result'] = makeQuery(makeConn(),"SELECT * FROM `example` ORDER BY `price` DESC LIMIT 12");
	break;
    case "product-search":
		$output['result'] = makeQuery(makeConn(),"SELECT * 
			FROM `example` 
			WHERE `name` LIKE '%$data->search%' 
			ORDER BY `price` DESC 
			LIMIT 12");
		break;
    
    case "product_filter":
		$output['result'] = makeQuery(makeConn(),
			"
			SELECT * 
			FROM `example` 
			WHERE 
				`$data->column` LIKE '$data->value'
			ORDER BY `price` DESC  
			LIMIT 12");
		break;	
		case "product-sort":
		$output['result'] = makeQuery(makeConn(),"SELECT * 
			FROM `example` 
			ORDER BY `$data->column` $data->dir 
			LIMIT 12");
		break;	
       

	
        default: $output['error'] = "No Valid Type";
}
echo json_encode($output,JSON_NUMERIC_CHECK/JSON_UNESCAPED_UNICODE);
?>