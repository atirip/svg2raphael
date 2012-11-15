<?php
	require('svgToRaphaelParser.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title id="title">SVG to Raphael parser demo</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="author" content="Priit Pirita">
	<meta http-equiv="ImageResize" content="no">
	<meta http-equiv="ImageToolbar" content="no">
	<meta name="MSSmartTagsPreventParsing" content="true">
	<meta http-equiv="page-enter" content="blendTrans(Duration=0.1)">

<style>

.canvas2 {
	width: 200px;
	height: 200px;
}
.canvas4 {
	width: 400px;
	height: 400px;
}

</style>

</head>
<body>

<table>
	<tr>
		<td >original</td>
		<td >supersized & scaled down</td>
		<td >original scaled up</td>
		<td >supersized & scaled down</td>
	</tr>
	<tr>
		<td id="c1" class="canvas2"></td>
		<td id="c4" class="canvas2"></td>
		<td id="c2" class="canvas4"></td>
		<td id="c3" class="canvas4"></td>
	</tr>
</table>


<script src="jquery-1.3.2.min.js"></script>
<script src="raphael-pp.js"></script>

<script>
jQuery(document).ready( function() {
	$("#c1").each(function(){
		<?=svgToRaphaelParser::parse('FP7-gen-CMYK.svg', 'this');?>
	});
	$("#c2").each(function(){
		<?=svgToRaphaelParser::parse('FP7-gen-CMYK.svg', 'this');?>
		c.setView("380px", "308px");
	});
	$("#c3").each(function(){
		<?=svgToRaphaelParser::parse('FP7-gen-CMYK2.svg', 'this');?>
		c.setView("380px", "308px");
	});
	$("#c4").each(function(){
		<?=svgToRaphaelParser::parse('FP7-gen-CMYK2.svg', 'this');?>
		c.setView("190px", "154px");
	});
});
</script>
</body>
</html>