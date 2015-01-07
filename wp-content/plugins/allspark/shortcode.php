<?php
/**
 * @package Cotfield Shortcodes
 * @version 0.1
 */
/*
Plugin Name: Cotfield Shortcodes
Author: AllSpark
*/
function table($atts,$content=null){
	$a=shortcode_atts(array('row'=>'1','column'=>'1','align'=>'c','title'=>''),$atts);

	$inner='';
	$index=0;
	
	//Make sizeof($cell) = $a['row'] x $a['column]
	$cell=explode('|',$content);
	if(sizeof($cell)<($a['row']*$a['column']))$cell=array_merge($cell,array_fill(sizeof($cell),$a['row']*$a['column']-sizeof($cell),''));
	
	//Sanitize $cell
	$cell=array_map(function($n){if($n=='')return '';return $n;},$cell);
	
	//Make sizeof($align) = $a['column']
	$align=explode(',',$a['align']);
	if(sizeof($align)==1)$align=array_fill(0,$a['column'],$a['align']);
	else if(sizeof($align)<$a['column'])$align=array_merge($align,array_fill(sizeof($align),$a['column']-sizeof($align),''));
	
	//Sanitize $align
	$align=array_map(function($n){if($n=='')return 'c';return $n;},$align);
	
	for($i=0;$i<$a['row'];$i++){
		
		$inner.='<tr>';
		for($j=0;$j<$a['column'];$j++){
			
			$styles='font-family:oswald;';
			if($i==1)$styles.='border-top:1px solid #ccc;';
			$styles.='border-bottom:1px solid #ccc;';
			if($j==$a['column']-1)$styles.='border-right:1px solid #ccc;';
			$styles.='border-left:1px solid #ccc;';
			
			$hstyles='font-family:oswald;color:#e77927;';
			if($j==$a['column']-1)$hstyles.='border-right:1px solid #ccc;';
			$hstyles.='border-top:1px solid #ccc;border-left:1px solid #ccc;';
			
			if($i>0){
				if($align[$j]=='l')
					$styles.='text-align:left;';
				else if($align[$j]=='r')
					$styles.='text-align:right;';
				else if($align[$j]=='c')
					$styles.='text-align:center;';
			}
			
			if($i==0) $inner.='<th style="'.$hstyles.'">';
			else $inner.='<td style="'.$styles.'">';
			
			$cell[$index]=preg_replace('/\<br.*?\>/','',$cell[$index]);
			$inner.=$cell[$index];
			$index++;
			
			if($i==0) $inner.='</th>';
			else $inner.='</td>';
		}
		$inner.='</tr>';
	}
	
	return '<table style="border:none;"><tbody>'.$inner.'<tr><td style="text-align:center;border:none;" colspan="'.$a['column'].'">'.$a['title'].'</td></tr></tbody></table>';
}

add_shortcode('table','table');

function head($atts,$content=null){
	$a=shortcode_atts(array('level'=>'1'),$atts);
	
	if($a['level']>6)$a['level']=6;
	$styles='font-weight:bold;text-align:center;';
	return '<h'.$a['level'].' style="'.$styles.'">'.$content.'</h'.$a['level'].'>';
}

add_shortcode('head','head');

function space($atts,$content=null){
	$a=shortcode_atts(array('size'=>'10'),$atts);
	
	return '<div style="clear:both;height:'.$a['size'].'px;"></div>';
}

add_shortcode('space','space');

function box($atts,$content=null){
	$a=shortcode_atts(array('title'=>''),$atts);
	
	return '<fieldset><legend>'.$a['title'].'</legend><p>'.$content.'</p></fieldset>';
}

add_shortcode('box','box');

?>
