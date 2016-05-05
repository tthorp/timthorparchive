<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
define('TITLE','Tax Preparation Checklist');//what is the name of the page?
head();
?>

<h1><?=TITLE?></h1>
<h2>Income</h2>
<form>
	<ul>
		<li>
			<input type="checkbox" /> w-9 forms sent and received
		</li>
		<li>
			<input type="checkbox" /> w-2
		</li>
		<li>
			<input type="checkbox" /> sole proprietor profit/loss report
		</li>
		<li>
			<input type="checkbox" /> interest, dividends, capital gains/losses
		</li>
		<li>
			<input type="checkbox" /> prior year tax refund
		</li>
	</ul>
</form>

<h2>Expenses</h2>
<form>
	<ul>
		<li>
			<input type="checkbox" /> sole proprietor expenses report
		</li>
		<li>
			<input type="checkbox" /> medical expenses report
		</li>
		<li>
			<input type="checkbox" /> real estate tax
		</li>
		<li>
			<input type="checkbox" /> property tax
		</li>
		<li>
			<input type="checkbox" /> mortgage interest
		</li>
		<li>
			<input type="checkbox" /> mortgage insurance premium, utilities (gas/electric/water/sewer), repairs and maintenance costs
		</li>
		<li>
			<input type="checkbox" /> refinance fees
		</li>
		<li>
			<input type="checkbox" /> investment advisory fees
		</li>
		<li>
			<input type="checkbox" /> business mileage report
		</li>
	</ul>
</form>

<?=foot()?>