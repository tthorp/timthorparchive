<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tim Thorp Training and Consulting, technology made simple.</title>
<!--<link href="includes/reset.css" rel="stylesheet" type="text/css" /> -->
<link href="includes/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
//randomize the image number when page is reloaded
$randnum=rand(1, 11);
?>
<div class="wrapper"><img src="images/header<?php echo $randnum;?>.jpg" alt="Tim Thorp training and consulting" width="800" height="180" />
  <div class="vnav">
		<? require('nav.php');?>
  </div>
  <div class="content">
    <p>Hi, I'm Tim and this is my page. I work in Rhode Island as a web developer. My interests are in education, teaching and creative endeavors ranging from cooking to woodworking. </p><img src="images/profile2.jpg" alt="Tim Thorp" align="right"/>
<h2>Good looking, Good working forms</h2>
<p><em>March 7, 2008</em></p>
<p>Look, I got some old-school web form techniques that I need to upgrade. I need a user friendly, server friendly, data-worker friendly, programmer friendly,  form (in order of importance). Form design shall be inspired by <a href="http://www.wufoo.com">wufoo</a>. It shall protect the server against SQL injection and cross site scripting. Forms will be completely filled out and data will be correctly formed. It shall have well commented, standards compliant, indented and consolidated (where appropriate) code. It should have the following "formflow":</p>
<img src="images/formflow.jpg" />
<h2>CSS Classes and IDs</h2>
<p><em>February 26, 2008</em></p>
<p>&lt;rant&gt;Learning some simple CSS rules and how to implement them is one of the most complicated learning scenarios that I can think of. It's like trying to make hollandaise sauce for the first time on an electric burner with  a thin steel pan. There are so many opinionated articles about how someone should do it and why it's important in the future that it is quite daunting to simply have a CSS driven site. Not just that, but with all of these practices and standards, they are not implemented equally in the current set of browsers, so a design needs to be hacked to make it work in Internet Explorer. Add to that the awareness that CSS3 is coming soon, it amazes me that CSS and XHTML has the loyal following that it does. First of all, web users don't see your styles, so if you should happen to use tables instead of divs, or surround <strong>bold text</strong> with &lt;b&gt; instead of &lt;strong&gt;, only fellow web designers looking at your source code or a few web users with special conditions would notice. For those reasons alone, it's probably not worth the effort of learning all of the styles and practices for implementing them - especially if you are trying to implement them on an existing site with thousands of pages which are encoded in the HTML of the 1990s. &lt;/rant&gt;</p>
<p>Sorry about that, I just needed to get some things off my chest. I love working with sites designed with CSS and XHTML, but learning and remembering all of the little pieces challenges me.</p>
<p>When should I use classes and when should I use IDs? What does the HTML and CSS look like when either is chosen?</p>
<p>I will approach this issue by using this page as an example. In the following paragraphs, I would like to write some code snippets and have them contained by a light grey box with a black border and courier text. Since an ID is used to identify an individual element on a page and I want to have several code snippets on this page, I cannot use an ID. </p>
<h3>Classes</h3>
<p>Classes are used the most. Some of my favorite examples of classes are code, alert and inactive. They are things which will be used throughout the site. I like to think of classes as the stylistic elements that are the pillars of the site. </p>
<div class="code">This is HTML for applying a class: &lt;div class=&quot;alert&quot;&gt;</div>
<div class="code">This is CSS for defining a class: .alert {color : red; }</div>
<h3>IDs</h3>
<p>IDs are used occasionally. They are very flexible and can be set up differently on any page, but can only be used once per page. Why do we need them at all? I don't know, but I use them to identify each of my form fields and not for much else. I could use them for an alert box, as follows, but then I could only have one alert on the page. </p>
<div class="code">This is HTML for applying an ID: &lt;div id=&quot;alert&quot;&gt;</div>
<div class="code">This is CSS for defining an ID: #alert {color : red; }</div>
<h2>Initial Design Meetings</h2>
<p><em>February 21, 2008</em></p>
<p>So, I'm at a meeting with a fellow office worker that wants a new system and I'm struck by how difficult it is for an internal client to talk about what they want. It's not that they feel intrusive with making demands, but there's just no common language. For example, working at a university, I wouldn't expect a dean to ask me if I would be willing to make a web 2.0 system with a relational database backend and ajax form controls. What I am finding is that I have to understand their work in order to build a system. </p>
<p>This might be a stretch, but I love analogies, so I'll give it a shot. I think the meetings are similar to what would happen if a person who never had seen a modern kitchen wanted one. He would say, </p>
<p>&quot;I wonder if there is any way that I could cut my food components and heat them over a hot element&quot;</p>
<p>&quot;It would be really neat if there were a place to clean the cooking devices including a mechanism for the removal of waste material&quot;</p>
<p>  Of course there's a way to do that, it's called an oven and a sink. With programming, the capacity is there to do anything that you have seen on the web, but if the functional owner and the developer can't talk clearly about what is wanted, I think the risk of misunderstanding could lead to a significant miscalculation such as an incorrect data model and there is no amount of AJAX that can clean that up.</p>
<h2>Making Decisions</h2>
<p><em>February 8, 2008</em></p>
<p>I have a lot of things on my plate that need improvement. In fact, so many that I am somewhat daunted by the list and occasionally revert to re-ordering and prioritizing the list. However, I really want to get going on some of this stuff and I am interested in utilizing a decision making model that is known for its reliable results. The most reliable one that I know of is to pick something and use it, so these are the things I need to decide about:
<ul>
<li>FAQ system - leaning towards Interspire ActiveKB, but maybe I should use the ASK Drupal module</li>
<li>Content Management System - down to drupal vs. joomla</li>
<li>ad-hoc forms system - this tends to be a complete hack, but I'd like to have it make some sense when it is all said and done. Kinda liking drupal webforms module</li>
<li>project porfolio management. Really, a fancy name for the fact that people want stuff done and we can't do all of it right now. We need a way to prioritize, estimate, complete and generally, to perform.</li>
</ul>
</p>
	</div>

</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1611370-2";
urchinTracker();
</script>
</body>
</html>
