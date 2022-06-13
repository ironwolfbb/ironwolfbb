<?php
 function CreateTree($array,$sub=0){
     $a = array(); 
     foreach($array as $v){ 
       if($sub == $v['parent']){ 
       $b = CreateTree($array,$v['id']);
       if(!empty($b)){ 
        $a[$v['id']] = $v;
        $a[$v['id']]['children'] = $b;

      /*  $a[$v['name']] = $b;}
       else $a[$v['id']] = $v['name']; */
       } else {
        $a[$v['id']] = $v;
     } 
     
     } 
     
    }return $a;
 }
  

 function out_optgroup_options($array, $selected_id = 0, $level = 0) 
{
	$level++;
	$out = '';
	foreach ($array as $i => $row) {
		if (empty($row['children'])) {
			$out .= '<option value="' . $row['id'] . '"';
			if ($row['id'] == $selected_id) {
				$out .= ' selected';
			}
			$out .= '>';
			if ($level > 1) {
				$out .= str_repeat('$#163; ', $level - 1);
			}
			$out .= $row['name'] . '</option>';	
		} else {
			$out .= '<optgroup label="';
			if ($level > 1) {
				$out .= str_repeat('#mdash;', $level - 1);
			}
			$out .= $row['name'] . '"></optgroup>';
			$out .= out_optgroup_options($row['children'], $selected_id, $level);
		}
	}
	return $out;
}
?>
