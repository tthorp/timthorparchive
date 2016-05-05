<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
define('TITLE','Split Names in Excel | Tim Thorp, Web Developer');//what is the name of the page?
head();
?>
<div class="intro">
	<p>My name is Tim and I work in Providence, Rhode Island as a web developer. My web portfolio includes work that spans 15 years with a focus on database-integrated systems, training and open-source technologies. My focus is to enable users to leverage technology.</p>
</div>
<h2>Split Names in Excel</h2>
<p>Too often, office workers have to manipulate improperly structured data that comes from mega-systems. For example, if a person wanted to do a mail merge intro line, stating, “Dear <firstname>” but the name field held LASTNAME,FIRSTNAME, they would have a hard time, but here’s a way to handle it using an excel formula that pulls it apart and displays the correct name in title case. I haven’t really tested it with special names including extra things like sir or esquire, but it works pretty good for most names.
Assuming cell A1 holds a name like THORP,TIMOTHY – this formula will result in Timothy Thorp</p>
<pre>=PROPER(CONCATENATE(TRIM(RIGHT(A1, LEN(A1)- FIND(",",A1,1))), " ", LEFT(A1,FIND(",",A1,1)-1)))</pre>
<p>Explanation of each function in the order that it is processed:<br />
LEN() counts the number of characters in the name (in this example, 13)<br />
FIND() returns the character position of the comma (in this example, 6)<br />
RIGHT() returns the calculated number of characters to the right of the comma (in this example, chars 7-13 or TIMOTHY)<br />
LEFT() returns all of the characters from the beginning of the name up to the comma (in this example, characters 1-5 or THORP)<br />
TRIM() removes extra blank spaces around the comma in case they are present<br />
CONCATENATE() squishes the first and last name into one column together<br />
PROPER() puts the name in title case (first letter of each word capitalized)<br />
From there, you can use the fill handle to copy the formula down the column and Excel Text to Columns and/or paste special to separate things out as you need.<br />
To get the first name by itself :</p>
<pre>=PROPER(TRIM(RIGHT(A1, LEN(A1)- FIND(",",A1,1))))</pre>
<p>To get the last name by itself:</p>
<pre>=PROPER(LEFT(A1,FIND(",",A1,1)-1))</pre>
<p>2011 followup: I noticed in a recent dataset that there was a problem getting just the first name when middle names and initials were present. So, after the lastname is eliminated, you can do a find to pull out the first name by itself. Note a few things
after running the formulas, copy the result and paste special, choosing “values” to get a cell with actual text
the find() function returns the character number, so it cannot be used to evaluate boolean results. Specifically in this case, if you don’t have a space, you get a #VALUE error, so there is a little more to the formula to get around that
Here is the formula</p>
<pre>=IF(ISERROR(FIND(" ", A1,1)),D2,PROPER(LEFT(A1,FIND(" ",A1,1)-1)))</pre>


<?=foot()?>