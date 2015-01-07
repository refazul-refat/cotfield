<?php
/**
 * @package Cotfield Shortcodes
 * @version 0.1
 */
/*
Plugin Name: Cotfield Shortcodes
Author: AllSpark
*/

// [bartag foo="foo-value"]
function bartag_func( $atts ) {
    $a = shortcode_atts( array(
        'foo' => 'something',
        'bar' => 'something else',
    ), $atts );
    
    $html = '
	<table border="0" cellspacing="0" cellpadding="0" width="516" style="width:387.0pt;margin-left:40.85pt;border-collapse:collapse">
		<tbody>
			<tr style="height:15.0pt">
				<td width="139" nowrap="" valign="bottom" style="width:104.0pt;border:none;border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt"></td>
				<td width="87" nowrap="" valign="bottom" style="width:65.0pt;border:none;border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt"></td>
				<td width="121" nowrap="" valign="bottom" style="width:91.0pt;border:none;border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt"></td>
				<td width="169" nowrap="" colspan="2" valign="bottom" style="width:127.0pt;border:none;border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt"><p class="MsoNormal" align="right" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:right;line-height:normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(In million MTs)<u></u><u></u></p></td>
			</tr>
			<tr style="height:15.0pt">
				<td width="139" nowrap="" valign="bottom" style="width:104.0pt;border:solid windowtext 1.0pt;border-top:none;background:#d8d8d8;padding:0in 5.4pt 0in 5.4pt;height:15.0pt"><p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal">Country Name<u></u><u></u></p></td>
				<td width="87" nowrap="" valign="bottom" style="width:65.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#d8d8d8;padding:0in 5.4pt 0in 5.4pt;height:15.0pt"><p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal"><b>Year<u></u><u></u></b></p></td>
				<td width="121" nowrap="" valign="bottom" style="width:91.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#d8d8d8;padding:0in 5.4pt 0in 5.4pt;height:15.0pt"><p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal"><b>Ending Stocks<u></u><u></u></b></p></td>
				<td width="49" nowrap="" valign="bottom" style="width:36.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#d8d8d8;padding:0in 5.4pt 0in 5.4pt;height:15.0pt"><p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal"><b>Use <u></u><u></u></b></p></td>
				<td width="121" nowrap="" valign="bottom" style="width:90.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#d8d8d8;padding:0in 5.4pt 0in 5.4pt;height:15.0pt"><p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal"><b>Production<u></u><u></u></b></p></td>
			</tr>
			<tr style="height:15.0pt">
				<td width="139" nowrap="" valign="bottom" style="width:104.0pt;border:solid windowtext 1.0pt;border-top:none;padding:0in 5.4pt 0in 5.4pt;height:15.0pt"><p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:normal">China <u></u><u></u></p></td>
				<td width="87" nowrap="" valign="bottom" style="width:65.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt"><p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal">2013/14<u></u><u></u></p></td>
				<td width="121" nowrap="" valign="bottom" style="width:91.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt"><p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal">13.53<u></u><u></u></p></td>
				<td width="49" nowrap="" valign="bottom" style="width:36.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt"><p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal">8.16<u></u><u></u></p></td>
				<td width="121" nowrap="" valign="bottom" style="width:90.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt"><p class="MsoNormal" align="center" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal">6.25<u></u><u></u></p></td>
			</tr>
		</tbody>
	</table>';
	
	return $html;

    return "foo = {$a['foo']}";
}
add_shortcode( 'bartag', 'bartag_func' );



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
	
	return '<table style="margin:auto;"><tbody>'.$inner.'<tr><td style="text-align:center;" colspan="'.$a['column'].'">'.$a['title'].'</td></tr></tbody></table>';
}

add_shortcode('table','table');


?>
