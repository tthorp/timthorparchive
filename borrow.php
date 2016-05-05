<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
define('TITLE','Can I Borrow Your...');//what is the name of the page?
head();
if (!isset($_POST['submit'])){ 
?>
<h1><?=TITLE?></h1>
<form action="" method="post">
	<p>
	<input type="radio" name="item" value="Truck" /> Truck<br />
	<input type="radio" name="item" value="House" /> House<br />
	<input type="radio" name="item" value="Chainsaw" /> Chainsaw</p>
	<p>Please describe why, when, how, etc:<br />
	<textarea name="description"></textarea><br />
	<input type="submit" name="submit" /></p>
	
</form>
<?php
}else{
	echo "<h1 class='monster'>NO</h1>";
}
?>
<?=foot()?>