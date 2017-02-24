@charset "utf-8";
/* CSS Document */
/*
 * Theme Name: Sci-Metro Theme
 * Theme URI: http://sis.cmb.ac.lk
 * Description: The default skin for the Student Information System.
 * Version: 1.1
 * Author: Nipuna Dodantenna
 * Author URI: http://www.nipunadodan.com
 */

/*CSS reset*/
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
	/*vertical-align: baseline;*/
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

/*==fonts==*/
@font-face {
    font-family: 'Raleway';
    src: url('fonts/raleway_thin-webfont.eot');
    src: url('fonts/raleway_thin-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/raleway_thin-webfont.woff') format('woff'),
         url('fonts/raleway_thin-webfont.ttf') format('truetype'),
         url('fonts/raleway_thin-webfont.svg#ralewaythin') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Segoe UI';
    src: url('fonts/segoeuil.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Open Sans';
    src: url('fonts/OpenSans-Regular.ttf') format('truetype');
    font-weight: 100;
    font-style: normal;
}

@font-face {
  font-family: 'iconFont';
  src: url('fonts/iconFont.eot');
  src: url('fonts/iconFont.eot?#iefix') format('embedded-opentype'), url('fonts/iconFont.woff') format('woff'), url('fonts/iconFont.ttf') format('truetype'), url('../fonts/iconFont.svg#iconFont') format('svg');
  font-weight: normal;
  font-style: normal;
}

html,body,#main-wrapper,#wrapper{
	height:100%;
}

body{
	font-family:"Segoe UI Web Light","Segoe UI Light","Segoe UI Web Regular","Segoe UI","Helvetica Neue",Arial;
	height:100%;
}

::-webkit-scrollbar
{
  width: 12px;  /* for vertical scrollbars */
  height: 12px; /* for horizontal scrollbars */
}

::-webkit-scrollbar-track
{
  background: rgba(0, 0, 0, 0.1);
}

::-webkit-scrollbar-thumb
{
  background: rgba(0, 0, 0, 0.2);
}

::-webkit-scrollbar-thumb:hover
{
  background: rgba(0, 0, 0, 0.4);
}

::selection
{
	background:#ff8500;
	color:#fff;
}
::-moz-selection
{
background:#ff8500;
}

.row{
	display:block;
}

.clear-right{
	clear:right;
}

hr{
	border:0;
}

/* typography */
p{
	line-height:1.5;
	margin:10px 0;
}

b, strong{
	font-weight:600;
}

em, i{
	font-style:italic;
}

ul.list{
	list-style-type:disc;
	margin:20px 0;
}

#content h1{
	font-family:"Segoe UI Web Light","Segoe UI Light","Segoe UI Web Regular","Segoe UI","Helvetica Neue",Arial;
	font-size:32px;
	padding:30px 0 10px;
	margin-bottom:10px;
	color:#074e9f;
}

#content h2{
	font-family:"Segoe UI Web Light","Segoe UI Light","Segoe UI Web Regular","Segoe UI","Helvetica Neue",Arial;
	font-size:24px;
}

#content h3{
	font-family:"Segoe UI Web Light","Segoe UI Light","Segoe UI Web Regular","Segoe UI","Helvetica Neue",Arial;
	font-size:18px;
}

a{
	color:#333;
	text-decoration:none;
	cursor:pointer
}

a:hover{
	color:#000;
	text-decoration:underline;
}

#content a{
	font-family:"Segoe UI Web Light","Segoe UI Light","Segoe UI Web Regular","Segoe UI","Helvetica Neue",Arial;
	color:#005ed8;
	text-decoration:none;
}

#content a:hover{
	text-decoration:underline;
}

.eg{
	font-size:12px;
	/*margin-left:35%;*/
	margin-bottom:3px;
	margin-top:3px;
}
.form-msg{
	color:#06F;
}
/*==main-wrapper==*/

#main-wrapper{
	width:100%;
	min-width:540px;
	margin:0 auto;
	background:#fff;
}

#wrapper{
	float:left;
	width:83%;
}

/*log-in screen*/
.browser{
	background:#fff4f4;
	padding:20px;
	font-family:'Open Sans',Arial, Helvetica, sans-serif;
	font-weight:100;
	margin:5px 0;
}
.browser a{
	text-decoration:underline;
}
.browser a:hover{
	text-decoration:none;
}
div.log-in-wrapper{
	margin:0 auto;
	/*width:700px;*/
}

.info-bar{
	clear: both;
	margin-bottom: 10px;
}

/*log-in-image*/
div.log-in-image{
	width:350px;
	float:left;
	display:none;
}
img.log-in-image{
	width:350px;
}

.welcome-video{
	opacity:0.2;
	position:absolute;
	top:0;
	-webkit-transition: all 300ms ease-out;  
    -moz-transition: all 300ms ease-out;  
    -o-transition: all 300ms ease-out;  
    -ms-transition: all 300ms ease-out;  
    transition: all 300ms ease-out;  
}
.welcome-video:hover{
	opacity:1;
	-webkit-transition: all 300ms ease-out;  
    -moz-transition: all 300ms ease-out;  
    -o-transition: all 300ms ease-out;  
    -ms-transition: all 300ms ease-out;  
    transition: all 300ms ease-out;  
}
.intro-video{
	height:131px;
	background:#0072c6;
	color:#ffffff;
	padding:5px 5px 5px 25px;
}

.intro-video h1{
	font-size:36px;
}
.intro-video a{
	background:#FFF;
	color:#0072c6;
	text-decoration:none;
	padding:2px 5px;
}

.intro-video a:hover{
	background:#efefef;
}

/*log-in-form*/
div.log-in-form{
	float:left;
	width:350px;
	padding:0 10px;
}

.log-in-form .site-title h1{
	font-size:24px;
	margin-bottom:10px;
	color:#555;
}

.log-in-form .site-title h2{
	font-size:18px;
	margin-bottom:5px;
	color:#666;
}

h2.sign-in-title{
	font-size:36px;
}

.log-in-form form{
	margin:20px 0;
}

/*form#sign-in */
form#sign-in input:focus, input[type="text"]:focus.styled-input-text{
	outline: none;
	border-bottom:1px solid #000;
}

form#sign-in input[type="text"], form#sign-in input[type="password"], input[type="text"].styled-input-text{
	border:none;
	border-bottom:1px solid #999;
	color:#000;
	margin:15px 0;
	width:80%;
	height:20px;
}

form#sign-in input[placeholder], input[type="text"].styled-input-text{
	font-family:"Segoe UI Web Light","Segoe UI Light","Segoe UI Web Regular","Segoe UI","Helvetica Neue",Arial;
	color:#000;
	padding-left:3px;
	padding-bottom:5px;
	font-size:18px;
	height:25px;
}

form#sign-in input[type="submit"], input[type="submit"].styled-input-submit, input[type="submit"].styled-input-submit:hover{
	background-image:url(images/arrow-black.png);
	background-position:left top;
	background-size:40px;
	background-repeat:no-repeat;
	background-color:#fff;
	width:40px;
	height:40px;
	border:none;
	color:#000;
	margin:6px 0;
	font-size:16px;
	cursor:pointer;
}

/*input[type="reset"]{
	background-image:url(images/refresh.JPG);
	background-position:left top;
	background-size:40px;
	background-repeat:no-repeat;
	background-color:#fff;
	width:40px;
	height:40px;
	border:none;
	color:#000;
	margin:6px 0;
	font-size:16px;
	cursor:pointer;
}*/

.foot-nav{
	margin:10px 0;
}

nav.foot-nav img{
	opacity:0.8;
	vertical-align:central;
}

.copy{
	color:#999;
	font-size:12px;
}
.copy div.row{
	margin:10px 0;
	line-height:1.2;
	font-size:12px;
}

/*log-in-image*/
div.log-in-image{
	width:350px;
	float:left;
	display:none;
}
img.log-in-image{
	width:350px;
}

/*side-bar*/
#side-bar{
	float:left;
	width:15%;
	padding:1% 0 1% 2%;
	background:#E9E9E9;
	font-family:"Open Sans","Segoe UI Web Light","Segoe UI Light","Segoe UI Web Regular","Segoe UI","Helvetica Neue",Arial;
	color:#333;
	min-height:100%;
}

#side-bar .site-title h1{
	font-size:24px;
	margin-bottom:10px;
	color:#333;
}

#side-bar header.site-title img{
	width:80%;
	margin:auto 0;
}

#side-bar .copy{
	color:#333;
}

/* menu */
.menu{
	margin:15px 0;
}
.menu li{
/*	width:100%;*/
	padding:0px;
	padding-left:10px;
	display:block;
	vertical-align:bottom;
}
.menu li a{
	color:#333;
	text-decoration:none;
	width:100%;
	min-height:20px;
	display:block;
	padding:8px 0;
}
.menu li:hover a{
	color:#fff;
}

.menu li:hover{
	/*border-left:3px solid red;*/
	background:#0082D8;
	padding:0px;
	padding-left:10px;
	position:relative;
	display:block;
}
.menu li.selected{
	/*border-left:3px solid red;*/
	background:#0082D8;
	padding:0px;
	padding-left:10px;
	display:block;
}

.menu li.selected a{
	color:#fff;
}

ul.sub-menu{
	display:none;
	background:#0082D8;
}
li:hover .sub-menu{
	display:block;
	position:absolute;
	z-index:999;
	left:100%;
	top:0%;
}
ul.sub-menu li {
    border: none;
    float:left;
    width:200px;
}

ul.sub-menu li:hover{
	background:#0073bf;
}

/*site header*/
header.head{
	background:#0082D8;
	color:#fff;
}

/* site-description */
div.site-title{
	font-size:36px;
	float:left;
	margin:10px;
}
.description{
	font-size:12px;
}

/*proile picture*/
section.top{
	display:block;
}
div.pro-pic{
	float:right;
	margin:5px;
	padding:5px;
}

div.pro-pic:hover{
	background:rgba(0,0,0,0.1);
}
	
img.pro-pic{
	height:55px;
	border-radius:50%;
	border:3px solid #fff;
}

div.user{
	display:inline-block;
	text-align:right;
}
span.fname, span.lname{
	display:block;
}

.user a{
	color:#fff;
}

span.fname{
	font-size:200%;
	font-weight:100;
}

/* main - nav - menu */
.main-nav{
	float:right;
	padding:0 5px;
}

nav.main-nav ul li{
	display:inline-block;
	background:#0082D8;
	padding:5px 10px;
	/*padding-top:40px;*/
	margin:5px;
	text-align:center;
	min-width:60px;
}

nav.main-nav ul li#users{
	background:#a05000;
}

nav.main-nav ul li#students{
	background:#C00;
	
}

nav.main-nav ul li#courses{
	background:#F90;
}

nav.main-nav ul li#exams{
	background:#090;
}

nav.main-nav ul li#help{
	background:#666;
}

nav.main-nav ul li#log-out{
	background:#555;
}

nav.main-nav img{
	margin:0 auto;
	margin-bottom:3px;
	height:50px;
}

nav.main-nav ul li a{
	color:#fff;
}

/*== content ==*/
#content{
	padding:1%;
	float:left;
	font-family:"Open Sans",Verdana, Geneva, sans-serif;
	color:#333;
	width:98%
}

/* Added by Gayan */
.row {
	overflow: none;
	clear:both;
}

/*tables*/
table{
	margin:0 auto;
	/*width:100%; */
}
.data-table{
}

.data-table tr{
	color:#042a56;
}

.data-table tr:nth-child(odd){
	background:#e4f0fd;
}

.data-table tr:hover, .table-plain tr:hover{
	background:#5fa7f8;
	color:#fff;
}

.data-table th, .data-table td, .table-plain th, .table-plain td, .content-table th, .content-table td{
	padding: 4px;
	font-size: 12px;
	line-height: 14pt;
	vertical-align:central;
	border-right:#fff solid 2px;
	border-bottom:#e4f0fd solid 1px;
}

.data-table th, .table-plain th, .content-table th{
	color:#fff;
	background:#0963C7;
	/*font-weight:bold;*/
	border-bottom:none;
}

.data-table a{
	color:#042a56;
}

#content .data-table tr:hover td a, #content .table-plain tr:hover td a{
	color:#fff;
}

.data-table tfoot tr td, .table-plain tfoot tr td{
	background:#1B79E2;
	color:#fff;
	text-align:center;
}

.table-form th, .table-form td{
	padding: 4px;
	font-size: 12px;
	line-height: 10pt;
	vertical-align:central;
	border-right:#fff solid 2px;
}
.content-table th, .content-table td{
	border-bottom:none;
}

.content-table tr h1:hover{
	background:none;
}

.content-table tr:hover{
	background:#efefef;
}

.exam-table-yr table{
	margin-right:10px;
}

.exam-table-yr table td{
	border:1px #000 solid;
	height:16px;
	font-size:12px;
}
.exam-table td, .exam-table th{
	border:1px #000 solid;
}
.exam-table th{
	font-weight:800;
}

/*link tiles*/
#content ul.tile li{
	display:inline-block;
	margin:5px;
}

#content ul.tile li a{
	width:120px;
	min-height:55px;
	background:#CCC;
	float:left;
	padding:20px 5px;
	text-decoration:none;
}

#content ul.tile li a:hover{
	background:#0082D8;
	color:#ffffff;
}

/*forms*/
#content form div.row{
	padding:2px 0;
}
#content form {
    width: 80%;
    margin: 0 auto;
}

#content form label, #content form input, #content form select, #content form textarea {
    display: inline-block;
}

#content label  {
    /*width: 100%; */
	display:inline-block;
	cursor:pointer;
    /*text-align:right;*/
}

label + input, label + select, label + textarea{
    margin: 0 10% 0 4%;
}

label + input[type="radio"]{
	margin:0 0 0 4%;
}


/*#content .submit{
	left:34%;
	position:relative;
}*/
select {
	border:1px solid #aaaaaa;
	padding:2px;
	margin-top:6px;
}

input[type="text"],input[type="email"], input[type="url"], input[type="password"], input[type="search"], textarea{
	border:1px solid #aaaaaa;
	padding:5px;
	margin-top:6px;
}

input[type="submit"], button[type="submit"], input[type="button"]{
	background:#06C;
	color:#fff;
}
input[type="submit"]:hover, button[type="submit"]:hover, input[type="button"]:hover{
	background:#005ab3;
}
input[type="reset"], button[type="reset"]{
	background:#ccc;
	color:#000;
}

input[type="submit"], input[type="reset"], button[type="submit"], button[type="reset"], input[type="button"]{
	padding:5px 7px;
	border:none;
	margin:6px 0;
	margin-right:6px;
	font-size:16px;
	cursor:pointer;
}

input[type="submit"]:hover, input[type="reset"]:hover{
	background-color:#005ab3;
	color:#FFF;
}

/* messages */
.info, .error, .valid, .warning{
	padding: 5px 10px 5px 55px;
	min-height:47px;
	color: #fff;
	line-height:1.3;
	margin:10px 0;
}

.info{
	background:url("images/info.png") #0079D8 no-repeat left 5px top 5px;
}
.error{
	background:url("images/error.png") #FF003D no-repeat left 5px top 5px;
}

.valid{
	background: url("images/valid.png") no-repeat left 5px top 5px #009900;
}

.warning{
	background: url("images/warning.png") no-repeat left 5px top 5px #F7B100;
}

.valid a, .info a, .error a, .warning a{
	color:#FFF;
	text-decoration:underline;
}

.valid a:hover, .info a:hover, .error a:hover, .warning a:hover{
	text-decoration:none;
}

/*== dashboard ==*/
.dashboard{
}

.dash-box{
	width:48.5%;
	float:left;
	margin:0.5% 0.6%;
	border:#efefef solid 1px;
	
}
/* Added by Gayan Akmeemana */
.dash-box .block {
	float:left;
	text-align:center;
	display: block;
	margin: auto;
	padding: 6%;
	vertical-align: middle;
	
}

.dash-box h2{
	background:#dfdfdf;
	padding:5px;
}

.dash-box h3{
	background:#dfdfdf;
	padding:5px;
}
.graph{
	float:left;
	width:50%;
}
.legend{
	float:left;
	width:45%;
	padding:2.5%;
	display:table-cell; 
	vertical-align:middle;
	height:100%;
	font-family:"Open Sans","Segoe UI Web Light","Segoe UI Light","Segoe UI Web Regular","Segoe UI","Helvetica Neue",Arial;
}

.legend .dot{
	border-radius: 50%;
	width: 10px;
	height: 10px;
	//background: #C00;
	float: left;
	margin-right: 5px;
	margin-top: 3px;
}

.legend .label{
	float:left;
}

/*graphs*/
.graph_box{ 
		text-align:center; 
		vertical-align:text-bottom;
		margin:5px 0;
		padding:5px;
		/*width:600px;*/
		/*background:#fff;*/
	}
	
	.graph_bar{
		height:40px; 
		vertical-align:middle; 
		text-align:left;
		border:#000 solid 0px;
		background-color:#6ba125;
        margin-left:3px;
	}
	
	.graph_bar2{
	}
	
	.graph_lable{
		padding:0px 3px;
		margin:auto;
		margin-top:0px;
		width:230px;
		text-align:left;
		float:left;
		margin-top:10px;
		color:#333;
		font-weight:100;
		font-size: 13px;
		line-height: 18px;
		background-color:rgba(255,255,255,0.8);
	}
	
	.graph_lable2{
		width:230px;
	}
	
	.space{
		display:block;
		height: 5px;
	}

/*== footer ==*/

footer a{
	color:#333;
	text-decoration:none;
}
footer a:hover{
	color:#000;
	text-decoration:underline;
}

#sociobox{
	clear:both;
	width:138px;
	margin:0 auto;
}
.sociocircle{
	float:left;
	border-radius: 50%;
	width: 24px;
	height: 24px;
	background:#CCC;
	margin:2px;
	text-decoration:none;
	transition:background 0.2s;
	-webkit-transition:background 0.2s; /* Safari */
}

.sociocircle:hover{
	background:#333;
	text-decoration:none;
}

.socioimg{
	width:24px;
	height:24px;
	margin:0px;
	padding:0;
	border:0;
}

#facebook:hover{
	background:#3B5998;
}
#twitter:hover{
	background:#0CF;
}
#youtube:hover{
	background:#900;
}
div.lang{
	margin-left:10px;
}

.lang button[type="submit"]{
	background:none;
	margin-right:0;
	padding:2px;
}

.lang button[type="submit"]:hover{
	background:#ccc;
}

.lang img{
	width:30px;
}

.congeniality{
	background:url('images/congeniality.jpg') no-repeat;
	background-position:right;
	background-size:1100px;
	border:#DD279C solid 1px;
	padding:0 15px 20px;
	margin-bottom:10px;
}

a.congenialLink{
	background:#CB1FA2;
	padding:3px;
	color:#fff;
}

.graph_bar{
	background-color: #CB1FA2;
	padding:0;
	margin:0;
}
.graph_back{
	background-color:#eee;
	padding:0;
	margin:0;
}

@media only screen and (min-width: 481px) {
	div.log-in-form label{
		display:none;
	}
}
@media only screen and (min-width: 769px) {
	/*log-in screen*/
	div.log-in-wrapper{
		margin:0 auto;
		width:700px;
		position:absolute;
		top:50%;
		left:50%;
		margin-left:-350px;
		margin-top:-180px;
	}
	
	div.log-in-form{
		float:left;
		width:350px;
		padding:0;
	}
	
	div.log-in-image{
		width:350px;
		float:left;
		display:block;
	}
}

pre {
    font-family: 'Courier New';
    margin: 15px 0;
    border: 1px dashed #ccc;
    padding: 5px;
    background: #efefef;
}