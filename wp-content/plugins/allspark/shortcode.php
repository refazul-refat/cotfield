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
	$a=shortcode_atts(array('border'=>0),$atts);
	return '<table border="'.$a['border'].'"><tbody>'.do_shortcode($content).'</tbody></table>';
}


add_shortcode('table','table');


?>
