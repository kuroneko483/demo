<link rel="stylesheet" type="text/css" href="calculator.css">
<?php

	$asd= $_POST["num"];

	?>
<form method="post">
	<div id="mainbox">
			<input type="text" id="numbox" value='<?php echo $asd; ?>'>
			<input type="submit" name="num" id="num7" value="7">
			<input type="submit" name="num" id="num8" value="8">
			<input type="submit" name="num" id="num9" value="9">
			<input type="submit" id="add" value="+">
			<input type="submit" name="num" id="num4" value="4">
			<input type="submit" name="num" id="num5" value="5">
			<input type="submit" name="num" id="num6" value="6">
			<input type="submit" id="minus" value="-">
			<input type="submit" name="num" id="num1" value="1">
			<input type="submit" name="num" id="num2" value="2">
			<input type="submit" name="num" id="num3" value="3">
			<input type="submit" id="multiply" value="x">
			<input type="submit" name="num" id="num0" value="0">
			<input type="submit" name="num" id="num00" value="00">
			<input type="submit" name="num" id="numdot" value=".">
			<input type="submit" id="divide" value="/">
			<input type="submit" name="num" id="ac" value="AC">
			<input type="submit" name="num" id="del" value="Del">
			<input type="submit" id="equal" value="=">
	</div>

	

		
</form>


