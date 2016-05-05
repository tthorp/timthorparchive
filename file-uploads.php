<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
define('TITLE','File Uploads from a Form Using PHP | Tim Thorp, Web Developer');//what is the name of the page?
head();
?>
<div class="intro">
	<p>My name is Tim and I work in Providence, Rhode Island as a web developer. My web portfolio includes work that spans 15 years with a focus on database-integrated systems, training and open-source technologies. My focus is to enable users to leverage technology.</p>
</div>
<h2>File Uploads From a Form Using PHP</h2>
<p>Some web forms include the option to upload a file. This requires a few more steps than a standard html file. This article shows the basic steps of how to complete the upload. These code snippets omit some necessary security provisions, but is a good start.</p>
<h3>HTML Requirements</h3>
<p>The form tag needs the enctype property, like this: 
<pre>&lt;form action="&lt;?php=$_SERVER['PHP_SELF']?&gt;" enctype="multipart/form-data"&gt;</pre>
</p>
<p>The file upload form field needs needs the "file" property. Assuming it is a resume, it would look like this:
<pre>&lt;input type="file" name="resume" /&gt;</pre>
</p>

<h3>Apache Server Configuration</h3>
<p>we need a folder to hold the uploaded files. Let's say for the sake of the tutorial that it is:</p>
<pre>/var/www/files</pre>
<p>prevent php from being executed in your files folder by adding this htaccess file</p>
<pre>Options None
Options +FollowSymLinks

php_value engine off</pre>
<p>group writeable directory with the web server in the group</p>
<pre>$ chown -R user:group /var/www/files</pre>
<pre>$ chmod -R 775 /var/www/files</pre>
</p>

<h3>PHP</h3>

<p>handler</p>
<pre>$dir = "/var/www/files/";

$acceptable_mime_types = array(
 'doc'
,'docx'
,'txt'
,'pdf'
,'xls'
,'xlsx'
,'rtf'
);

if(!empty($_FILES['cv'])) {
// validate
$f = $_FILES['cv']['name'];
$f = str_replace("#", "Number", $f);
$f = str_replace("$", "Dollar", $f);
$f = str_replace("%", "Percent", $f);
$f = str_replace("^", "", $f);
$f = str_replace("&", "and", $f);
$f = str_replace("*", "", $f);
$f = str_replace("?", "", $f);
$bits = explode(".", $f);
$ext = $bits[count($bits)-1];
$cur=date("m-j-Y"); 
$filename = $_POST['fname'] . '_' . $_POST['lname']. '_'.$cur.'.'.$ext;

if(in_array($ext, $acceptable_mime_types)) {
	if(copy($_FILES['cv']['tmp_name'], $dir . $filename)) {
		$success = TRUE;
	} else {
		$success = FALSE;
	}			
} else {
	$success = FALSE;
}
}</pre>
</p>




<?=foot()?>