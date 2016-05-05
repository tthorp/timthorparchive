<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
define('TITLE','2015? Kitchen Project');//what is the name of the page?
head();
?>
<h1><?=TITLE?></h1>
<p>There are several problems with the existing kitchen:</p>
<ul>
	<li>the floor is fir and has patches</li>
	<li>there is a chase for an unneeded chimney</li>
	<li>the wall-island is falling apart</li>
	<li>the sink is not sealed to the countertop</li>
	<li>the cabinets are dated and any sliders are worn out</li>
	<li>the trash and recycling are badly located</li>
</ul>
<h2>before</h2>
<img src="/img/kitchen-before.jpg" />
<img src="/img/kitchen-floor-plan-before.jpg" />
<h2>results</h2>
<p>The result of this project is a new kitchen with decor that matches the rest of the house and a new island. All problems listed above will be solved plus an across-the-board upgrade to the best materials.</p>
<h2>proposed schedule</h2>
<p>Thursday: move out, clean out<br />etc</p>
<h2>workers needed</h2>
<ul>
  <li>carpenter/laborer for demolition, material moving, subfloor construction and chase rebuild</li>
  <li> drywall guy (Dominic)</li>
  <li> plumber (Bob)</li>
  <li> electrical guy (Tim)</li>
</ul>
<h2>work breakdown</h2>
<h3>preparatory steps</h3>
  <p>step1<br />etc</p>
  <h3>demolition (will I need a dumpster? probably)</h3>
  <p>step1<br />etc</p>
  <h3>build</h3>
  <p>step1<br />etc</p>
<h2>materials</h2>
<p>material1<br />etc</p>
<?=foot()?>