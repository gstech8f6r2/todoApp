<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
  <!-- Open Sans-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

  <style type="text/css">
  /* http://meyerweb.com/eric/tools/css/reset/
 v2.0 | 20110126
 License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
margin: 0;
padding: 0;
border: 0;
font-size: 100%;
font: inherit;
vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
display: block;
}
body {
line-height: 1;
}
ol, ul {
list-style: none;
}
blockquote, q {
quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
content: '';
content: none;
}
table {
border-collapse: collapse;
border-spacing: 0;
}




body, html {
font-size: 16px;
font-family: 'Open Sans', sans-serif;

background-color: #f5f5f5;
}
a, button {
-webkit-transition: all 260ms ease-out;
-moz-transition: all 260ms ease-out;
-o-transition: all 260ms ease-out;
transition: all 260ms ease-out;
}
section {
max-width: 960px;
margin: 6em auto;
display: block;
}
section > div {
width: 100%;
float: left;
display: block;
}
form {
width: 100%;
float: left;
display: block;
background-color: white !important;

border: 1px solid rgba(0,0,0, .1);

position: relative;
z-index: 2;
}
form::after {
content: '';
position: absolute;
display: block;

width: 98%;
height: 100%;
top: 0; left: 1%;
box-shadow: 0px 6px 16px rgba(0,0,0, .08);
background-color: black;
z-index: -1;
}
form > * {
display: block;
}
form input {
width: 88%;
float: left;
padding: 0.5em 1em;
border: none;
font-size: 2em;
outline: none;

font-weight: lighter;
color: #ccc;

box-sizing: border-box;
font-family: 'Open Sans', sans-serif;
}
form button {
width: 12%;
height: 5.5em;
border: none;
font-size: 0.85em;
font-weight: bold;
text-transform: uppercase;

float: right;

color: white;
background-color: #7bea7b;
cursor: pointer;
}
form button:hover {
background-color: #37e137;
}
ul {
display: block;
width: 90%;

margin-top: 6em;
margin-left: auto;
margin-right: auto;
}
ul li {
float: left;
display: block;
width: 100%;

line-height: 1.5em;
font-size: 1.25em;
vertical-align: middle;

/*margin: 1em 0;*/
padding: 1em 0;
border-bottom: 1px dotted #ccc;
}
ul li:last-of-type {
border-bottom: none;
}
ul li > div p {
float: left;
display: inline-block;
font-size: inherit;
padding: 0.15em 0.75em;

font-weight: lighter;
color: #999;
}
ul li > div a {
float: left;
display: block;

width: 36px;
height: 36px;
line-height: 31px;
border-radius: 50%;

border: 1px solid #ccc;

margin: 0 0.5em;
position: relative;

text-align: center;
vertical-align: middle;

color: #ccc;
}
ul li > div a i {
vertical-align: middle;
z-index: 3;
position: relative;
}
ul li > div:last-of-type {
float: right;
}
ul li > div:last-of-type a {
border: 2px solid #ddd;
color: #ddd;
}
ul li > div:last-of-type a:hover {
border: 2px solid #aaa;
color: #aaa;
}


ul li.done > div:first-of-type a {
color: #f5f5f5;
}
ul li.done > div:first-of-type a i {
font-size: 0.8em;
}
ul li.done > div:first-of-type a:after {
content: '';
width: 24px;
height: 24px;
border-radius: 50%;

position: absolute;
display: block;

top: 6px; left: 6px;
background-color: #ed78ed;
z-index: 1;
}
ul li.done p {
text-decoration: line-through;
color: #ddd;
}
	</style>
</head>
<body>



  <section>
    <div class="">
      <form class="" action="<?php echo site_url('app/new_todo'); ?>" method="post">
        <input type="text" name="todo" value="">
        <button type="submit">Save</button>
      </form>
    </div>

    <div class="">
      <ul>
        <?php foreach ($todos as $todo) : ?>

        <li class="<?php if($todo->completed){echo "done";} ?>">
          <div class="">
            <!-- check -->
            <a href="#">
              <?php if($todo->completed) : ?>
                <i class="fa fa-check"></i>
              <?php endif; ?>
            </a>
          </div>
          <div class="">
            <!-- todo -->
            <p><?php echo $todo->text; ?></p>
          </div>
          <div class="">
            <!-- btn -->

            <!--modifica-->
            <a href="#">
            <i class="fa fa-pencil"></i>
          </a>
            <!--cancellazione-->
            <a href="#">
            <i class="fa fa-times"></i></a>
          </div>
        </li>
      <?php endforeach; ?>




      </ul>
    </div>

  </section>

</body>
</html>
