<?php 
//load the configuration file and the templated elements of the page
require('/var/www/timthorp.com/inc/config.php');
define('TITLE','Make a Web App Wicked Fast');//what is the name of the page?
define('BODY', 'home');
head();
?>

<h1>Make a Web App Wicked Fast</h1>
<p>This tool will output the HTML, SQL and PHP needed to create a database, an input form and a list of records. Some knowledge of the languages involved is required. </p>
<p>To use this tool, fill out this form. You will need to list the fields and data types in the format that the form expects. You need to list field name and data type. You should start with your primary key field and then list the other fields using the SQL data types (INT, TINYTEXT, TEXT, DATE, etc). Separate each field with an ampersand ("&amp;"). Here is a sample:</p>
<?php
if(!isset($_POST['fields'])){ 
	$tbl = 'people';
	$fld = 'person_id=primary_key&fname=TINYTEXT&account_date=DATE&age=INT&order_total=DECIMAL(10,2)&person_status=TINYTEXT&updated=TIMESTAMP'; ?>
	<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
		<fieldset>
			<ol>
				<li>
					<label for="table">table</label>
					<input type="text" name="table" value="<?=$tbl?>" size="40" />
				</li>
				<li>
					<label for="fields">fields</label>
					<textarea name="fields" rows="8" cols="80" ><?=$fld?></textarea>
				</li>
				<li>
					<input type="submit" name="submit" value="Make My App" />
				</li>
			</ol>
		</fieldset>
	</form>
<?php 
	parse_str($fld,$f);
	build_webapp($tbl,$f);
}else{
	$table = $_POST['table'];
	echo "<pre>".$_POST['fields']."</pre>";
	parse_str($_POST['fields'],$fields);
	build_webapp($table,$fields);
}
	
	
?>

<h2>SOME PHP</h2>
<p>there are significant security implications for putting a webapp into the wild. This isn't a complete solution, but here is some php that can enable database connections and improve security. Put this stuff in a file called config.php and include it from the list and form.</p>
<pre>//connect to the database
function database_connect(){
	$hostname = "localhost";
	$database = "db_name";
	$user = "user";
	$pass = "pass";
	$specs = mysql_connect($hostname, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db("$database",$specs) or die ("could not open db".mysql_error());
}

//this function cleans the text fields
function scrubText($textField) {
	$textField = str_replace($find, $replace, $textField);
	$textField = trim($textField); // remove white space from either end
	$textField = stripslashes($textField); //remove magic quotes slashes
	$textField = strip_tags($textField, '&lt;p&gt;&lt;a&gt;&lt;br&gt;&lt;ol&gt;&lt;ul&gt;&lt;li&gt;&lt;i&gt;&lt;em&gt;&lt;b&gt;&lt;strong&gt;'); // remove html and php, but allow a few html tags
	$textField = htmlentities($textField, ENT_QUOTES, "UTF-8"); //convert any remaining special characters to html entities
	$textField = mysql_real_escape_string($textField); // make what's left safe for mysql by prepending backslashes to some characters
	return $textField;
}
</pre>

<h2>MySQL CREATE DATABASE CODE</h2>
<p>paste this code into phpmyadmin's sql view to create the table</p>
<pre><?=$build_table_sql?></pre>

<h2>THE LIST</h2>
<p>be sure to correct the database connection values with your info. also, make sure that the filename in the link matches the filename of your data entry form</p>
<pre>
&lt;p&gt;&lt;a href='blah.php?mode=new'&gt;Add a New Blah&lt;/a&gt;&lt;/p&gt;
<?=$picklist?></pre>

<h2>DATA ENTRY</h2>
<pre><?=$data_entry?></pre>
<?=foot()?>
