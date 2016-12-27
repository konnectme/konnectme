p {
	margin-bottom: 5px;
}
a {
	color: #0054A7;
}

a:hover,a.selected { <?php //@todo remove .selected ?>
	color: #0054A7;
}
h1, h2, h3, h4, h5, h6 {
	font-weight: normal;
	color: #000;
}
.elgg-inner::after, .elgg-page-footer::after, .elgg-foot::after, .elgg-page-header:after, .elgg-body::after, .elgg-col-last::after {
	content: "";
	display: none;
}
body {
background: url(<?php echo IMG_PATH; ?>body_bg_default.jpg)  no-repeat top center;
background-size: cover;
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif !important;
font-weight: 200;
font-size: 14px;

}
.elgg-page-default {
min-width: 998px;	
background: url(<?php echo IMG_PATH; ?>body_bg_default.jpg)  no-repeat top center;
background-size: cover;
}
.elgg-page-header {
	position: relative;
	background: #212121 url(<?php echo IMG_PATH;?>hbg_2.jpg) repeat-x;	
	height: 142px;
	max-height:142px;
	z-index:1;
	border-bottom: 1px #000404 solid;
	-moz-box-shadow: 0 1px 0 rgba(247, 246, 242, 0.1);
	-webkit-box-shadow: 0 1px 0 rgba(247, 246, 242, 0.1);
	box-shadow:  0 1px 0 rgba(247, 246, 242, 0.1);	
	text-shadow: none;
}
.elgg-heading-site {
	float:left;
	max-height:95px;
	margin-top: 10px;
}	
.top-donate {
	margin: 12px 0 0 185px;
}	
.elgg-layout-one-sidebar > .elgg-body {
	min-width:602px;
}
.index_header {
	background: #212121 url(<?php echo IMG_PATH;?>hbg.jpg) repeat-x;	
	height: 100px;
	max-height:100px;
}
.kme_index{
	background: transparent url(<?php echo IMG_PATH;?>index-bg.png) repeat-x;
	margin-top: 0px;
}	
.elgg-page-default .elgg-page-header > .elgg-inner {
	background: transparent url(<?php echo IMG_PATH;?>search.jpg) no-repeat top right;	
	height: 75px;
}
.elgg-page-default .elgg-page-header > .elgg-inner h2 {
	max-width:200px;
	float:left;
}
.elgg-page-subheader {
	height: 28px;
	z-index: 800;	
	padding:5px 0;
	background: #212121 url(<?php echo IMG_PATH;?>texture.png) repeat-x;	
}
.elgg-page-subheader > .elgg-inner  {
	margin:0 auto;
	width:990px;
}
.elgg-page-subheader h3{
	padding:5px 0;
}
.topsearch {
	width: 242px;
	margin: 0 5px 0 10px;
	padding: 4px;
}
.elgg-page-topbar  {
	background: #A89F38;
	position: relative;
	height: 24px;
	z-index: 800;
	border-bottom: none;
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
	box-shadow: none;
	padding: 5px 0 0 0;
}
.elgg-page-topbar > .elgg-inner  {
	padding:0px 7px;
	min-height:9px;
	margin:0 auto;
	width:990px;
}
.elgg-page-default .elgg-page-sub-footer {
	background: #212121 url(<?php echo IMG_PATH;?>subfooter-bg.png) repeat-x;
	position: relative;
	border-bottom: 1px #000404 solid;
	-moz-box-shadow: 0 1px 0 rgba(247, 246, 242, 0.1);
	-webkit-box-shadow: 0 1px 0 rgba(247, 246, 242, 0.1);
	box-shadow:  0 1px 0 rgba(247, 246, 242, 0.1);	

	text-align: left;
	color: #AFB8B7;
	text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);	
}
.elgg-page-default .elgg-page-footer {
	background: #1c1c1c url(<?php echo IMG_PATH;?>texture.png) repeat;
	position: relative;
	height: 40px;
	border-top: 1px solid #484747;
	text-align: left;
	color: #AFB8B7;
	text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);	
}
.elgg-page-default .elgg-page-sub-footer  > .elgg-inner {
	max-width:990px;
	width:990px;
	margin: 0 auto;
	padding: 20px 0 0 0;	
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	border-top: 0px solid #DEDEDE;
}
.elgg-page-default .elgg-page-sub-footer h3{
	color:#727272;
}
.subfooter-firstrow{
	border-bottom: 1px #000404 solid;
	-moz-box-shadow: 0 1px 0 rgba(247, 246, 242, 0.1);
	-webkit-box-shadow: 0 1px 0 rgba(247, 246, 242, 0.1);
	box-shadow:  0 1px 0 rgba(247, 246, 242, 0.1);
	overflow:hidden;
	padding:3px 0 15px 0;
}
.whiteanchor a,.whiteanchor a:hover {
	color:#CCC;
}	
.subfooter-firstrow p{
	padding:0 10px 0 90px;
	background: transparent url(<?php echo IMG_PATH;?>icon.png) no-repeat;
	margin-top: 10px;
}
.subfooter-firstrow iframe{
	margin-top:-10px;
	z-index:100;
}
.subfooter-firstrow .socialfollow{
	z-index:600;
	margin: -46px 0 0px;
	background: #212121 url(<?php echo IMG_PATH;?>subfooter-bg.png) repeat-x center center;
	position: absolute;
	padding: 10px 0 0 11px;
	
	border-top: 1px #000404 solid;
	-moz-box-shadow: 1px 0px 0 rgba(247, 246, 242, 0.1);
	-webkit-box-shadow: 1px 0px 0 rgba(247, 246, 242, 0.1);
	box-shadow: 1px 0px 0 rgba(0, 0, 0, 0.1);
}	
.socialfollow img{
	margin: -5px 0 0 2px;
}	
.subfooter-secondrow {
	padding:10px 0 15px 0;
	overflow:auto;
}	
.subfooter-secondrow ul{
	margin:5px 0 0 10px;
}	
.elgg-menu-topbar > li > a {
	text-shadow: none;
}
.elgg-layout-one-sidebar {
	background: transparent;
}
.elgg-module-aside, .elgg-module-info, .contentWrapper, .elgg-module-featured, .elgg-layout-two-sidebar .elgg-main	{
	padding: 10px;
	background: #fff;	
	border:none;
	
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
		
	-webkit-box-shadow: 0 1px 8px rgba(0, 0, 0, 0.05), 0 0 1px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 white;
	-moz-box-shadow: 0 1px 8px rgba(0,0,0,0.05), 0 0 1px rgba(0,0,0,0.1), 0 1px 0 rgba(0,0,0,0.1), inset 0 1px 0 #fff;
	box-shadow: 0 1px 8px rgba(0, 0, 0, 0.05), 0 0 1px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 white;
}
.elgg-module-featured {
	padding: 8px;
}	
.elgg-image-block{
	margin:1px 0;
}
.contentWrapper {
	margin-bottom:20px;
}	
.elgg-module-aside .elgg-head,.elgg-module-info .elgg-head,.elgg-module-featured .elgg-head{
	color: #323232;
	border-radius: 0px;	
	background : none;
	border-bottom: 1px solid #BEBEBE;
	padding: 0px 0 8px 5px;
	margin: 0 0 10px 0px;	
}
.elgg-module-featured > .elgg-head * {
	color: #323232;
}
.elgg-module-featured > .elgg-body {
	padding: 0px;
}
.elgg-menu-owner-block li a, .elgg-menu-page li a {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.elgg-list-river, .elgg-list ,.elgg-list-river > li, .elgg-list > li {
	margin-top: 5px;
}	
.elgg-sidebar {
	padding: 1px;
	width: 315px;
	margin: 52px 0 0 10px;
}
.elgg-layout-one-sidebar > .elgg-body {
	margin: 0px 0;
}
.elgg-subtext {
	font-style: normal;
}
.elgg-menu-page, .elgg-menu-owner-block {
	margin:0px;
	padding: 2px;
	background: none;
	border:none;
	color: #aaaaaa;
	text-shadow: 2px 2px 0 black;
	border-radius: 0px;
}
.elgg-menu-owner-block {
	border-top: 1px solid #BEBEBE;
}
.elgg-menu-page a, .elgg-menu-owner-block li a {
	display: block;
	border-radius: 0px;

	background: transparent;
	border: 0px solid transparent;
	color: #3a3a3a;
	text-shadow: 2px 2px 0 rgba(39, 3, 3, 0.15);

	margin: 0 0 3px;
	padding: 3px 4px 3px 8px;
}
.elgg-menu-page a:hover ,.elgg-menu-owner-block li a:hover, .elgg-menu-page li.elgg-state-selected > a ,.elgg-menu-owner-block li.elgg-state-selected > a{
	background: #a89f38;
	color: #fff;
	text-shadow: none;	
}
.elgg-layout-one-sidebar > .elgg-body {
    margin: 0px 0;
}
.elgg-sidebar-alt {
	width: 220px;
	margin-right:5px;
}
.elgg-layout-two-sidebar {
	background :none;
}
.elgg-layout-two-sidebar .elgg-sidebar {
	width: 220px;
	margin-left:15px;
}
.elgg-layout-two-sidebar .elgg-main	 {
	margin:20px 0;
}	
/************ FORMS AND BUTTONS ************/
label {
	font-weight: normal;
	font-size: 100%;
}
input, textarea, select {
	border: 1px solid #D8DDE3;
	background: #F5F5F7;
	font: 100% "Trebuchet MS",Arial,Tahoma,Verdana,sans-serif;
	padding: 4px;

	box-shadow: inset 1px 1px 3px 0 rgba(235, 232, 232, 0.75);
	-webkit-box-shadow: inset 1px 1px 3px 0 rgba(235, 232, 232, 0.75);
	-moz-box-shadow: inset 1px 1px 3px 0 rgba(235,232,232,0.75);

	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	width:100%;
}
.elgg-button {             	
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size:13px;
    font-weight:normal;
    padding:3px 12px;
	
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;

	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	
	box-shadow: inset 0 0 0 1px #DBCB11,2px 2px 0 rgba(0, 0, 0, 0.15);
	-webkit-box-shadow: inset 0 0 0 1px #DBCB11,2px 2px 0 rgba(0, 0, 0, 0.15);
	-moz-box-shadow: inset 0 0 0 1px #DBCB11,2px 2px 0 rgba(0, 0, 0, 0.15);

	background: #a89f38;
	border: 2px solid #a89f38;
	color: #fff;
	text-shadow: 1px 1px 0 rgb(124, 124, 124);
	
	text-align: center;
	margin: 0 auto;	
	
}
.elgg-button:hover {
	text-decoration: none;
		
	box-shadow: inset 0 0 0 1px #DBCB11,2px 2px 0 rgba(0, 0, 0, 0.15);
	-webkit-box-shadow: inset 0 0 0 1px #DBCB11,2px 2px 0 rgba(0, 0, 0, 0.15);
	-moz-box-shadow: inset 0 0 0 1px #DBCB11,2px 2px 0 rgba(0, 0, 0, 0.15);

	background: #B3A50B;
	border: 2px solid #B3A50B;
	color: ##571816;
	text-shadow: none;	
}
.elgg-button-delete {
	text-align: center;
	box-shadow: inset 0 0 0 1px #a5a5a5,2px 2px 0 rgba(0, 0, 0, 0.15);
	-webkit-box-shadow: inset 0 0 0 1px #a5a5a5,2px 2px 0 rgba(0, 0, 0, 0.15);
	-moz-box-shadow: inset 0 0 0 1px #a5a5a5,3px 3px 0 rgba(0, 0, 0, 0.15);

	background: #737373;
	border: 2px solid #737373;
	color: #323232;
	text-shadow: none;	
}
.elgg-button-delete:hover {
	background: #656565;
}
.elgg-button-action {
	text-shadow: none;
}
/****** GROUPS *********/
#groups-tools > li {
	width: 49%;
	min-height: 10px;
	margin-bottom: 0px;
}
#groups-tools > li:nth-child(odd) {
	margin-right: 12px;
	float:left;
}
.groups-tools {
	positon:relative;
}	
.groups-profile-fields .odd, .groups-profile-fields .even {
	background: #ECEBEB;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
}
/********* SYSTEM MESSAGE  Twitter bootstrap ********************/

.elgg-system-messages {
	position: absolute; 
	top: 0px; 
	left: 0px; 
	right: 0px;
	padding: 0;
	max-width: none;
}
.elgg-system-messages li {
	margin: 0px;
}
.elgg-message {
	font-weight: normal;
	text-shadow:none;
	display: block;
	padding: 20px;
	margin-bottom: 10px;
	cursor: pointer;
	opacity: 1;

	-webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.45);
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.45);

	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
}
.elgg-state-success {
	background-color: rgb(0, 162, 97);
}
.elgg-system-messages li p {
	text-align: center;
}
.elgg-ajax-loader {
	background: white url(<?php echo IMG_PATH;?>ajax_loader_bw.gif) no-repeat center center;
	min-height: 31px;
	min-width: 31px;
}
/************ HOME PAGE ************/
.home-intro-text {
	min-width:100px;
	width: 385px;
	padding: 20px 0 0 5px;
}
.home-intro-video {
	padding:25px 0 2px;
	background : url("<?php echo IMG_PATH;?>video_shadow.png") no-repeat bottom left;	
}

/***** LOGIN FORM ********/
.elgg-module-dropdown {
	z-index:9999;
	background-color: #323232;
	border: 5px solid #555050;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
}	
.elgg-module-dropdown label, .elgg-module-dropdown  .elgg-menu-general > li, .elgg-module-dropdown .elgg-menu-general > li > a {
	color: white;
	text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);	
}
.elgg-menu-item-login a{
	padding: 0px 10px 6px;

	background: #323232;
	border: 1px solid #161616;

	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;

}	
/************* COUNTER *********/
.counter_wrapper{
	width: 98%;
	float: left;
	padding: 2px 5px;
	margin-bottom:5px;
	min-width: 200px;
}	
.time_counter{
	margin:0 auto;
	width:230px;
}	
.cntSeparator {
    margin: 10px 6px;
    color: #000;
}
.countersec { margin: 7px 3px; }
.countersec ul {
	display: block;
	float: left;
	list-style: none;
	padding: 0px 0px 3px 0px;
	font-size:12px;
}	
.countersec ul li {
	display: list-item;
	text-align: -webkit-match-parent;
	float:left;
}	
.countersec ul li.days {
	padding: 0px 0 0 5px;
}	
.countersec ul li.hours {
	padding: 0px 0px 0px 34px;
}	
.countersec ul li.minutes {
	padding: 0px 0px 0px 20px;
}	
.countersec ul li.seconds {
	padding: 0px 0px 0px 14px;
}
/****************Widgets**********************/
.elgg-module-widget {
	background-color: white;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;	
	-webkit-box-shadow: 0 1px 8px rgba(0, 0, 0, 0.05), 0 0 1px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 white;
	-moz-box-shadow: 0 1px 8px rgba(0,0,0,0.05), 0 0 1px rgba(0,0,0,0.1), 0 1px 0 rgba(0,0,0,0.1), inset 0 1px 0 #fff;
	box-shadow: 0 1px 8px rgba(0, 0, 0, 0.05), 0 0 1px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 white;	
}
.elgg-module-widget > .elgg-head {
	background-color: white;
	height: 30px;
}
.elgg-module-widget > .elgg-body {
	background-color: transparent;
	border-top: 1px solid #bebebe;	
	color: #444E51;
}
.elgg-module-widget > .elgg-head h3 {
	float: left;
	padding: 6px 45px 0px 20px;
	color: #444E51;
}
.elgg-module-widget:hover {
	background-color: white;
}
/*********** PROFILE **************/
.profile .elgg-inner {
	background-color: white;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;	
	-webkit-box-shadow: 0 1px 8px rgba(0, 0, 0, 0.05), 0 0 1px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 white;
	-moz-box-shadow: 0 1px 8px rgba(0,0,0,0.05), 0 0 1px rgba(0,0,0,0.1), 0 1px 0 rgba(0,0,0,0.1), inset 0 1px 0 #fff;
	box-shadow: 0 1px 8px rgba(0, 0, 0, 0.05), 0 0 1px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 white;	
	border:none;
}
/********** events and causes gallery **********/
.event {
	border:0px;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	height:auto;
	float:left;
	-webkit-box-shadow: 0 1px 8px rgba(0, 0, 0, 0.05), 0 0 1px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 white;
	-moz-box-shadow: 0 1px 8px rgba(0,0,0,0.05), 0 0 1px rgba(0,0,0,0.1), 0 1px 0 rgba(0,0,0,0.1), inset 0 1px 0 #fff;
	box-shadow: 0 1px 8px rgba(0, 0, 0, 0.05), 0 0 1px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 white;	
	margin:0 5px 10px 5px;
	width:192px;
	background:#fff;
}
.event_icon {
	width: 190px;
	height: 160px;
	min-width:190px;
	min-height:160px;
	background: white url(<?php echo IMG_PATH;?>ajax_loader_bw.gif) no-repeat center 5px;
	border: 1px solid #DEDEDE;
}	
.event img {
	padding: 5px;
	display: table-cell;
	vertical-align: middle;
	margin: 0 auto;
}
.eventwidgetdesc{
	text-overflow: ellipsis;
	height:60px;
	overflow: hidden;
}	
.div_booter {
	border-top: dotted 0px;
}
.elgg-gallery {
	padding: 0;
}
/************* CAUSES ****************/
.fund-percentage{
	font-weight: bold;	
}
.fundstatus {
	border-top:1px solid #dedede;
	border-bottom:1px solid #dedede;	
	overflow:auto;
}
.fundraised {
	border-right:1px solid #dedede;
	max-width:48%;
}	
.fundraised span,.fundremaining span{
	font-size: 16px;
	font-weight: bold;
}
.fundremaining{
	text-align: right;
}
#konnectordiv .elgg-input-dropdown{
	width:100%;
}
/**** HOME PAGE *******/
.kme_index_intro {
	overflow:auto;
	width:990px;
}	
.kme_index_featured {
	margin :40px 0 0px;
	overflow:auto;
}	
.kme_index_featured  .elgg-module-aside .elgg-body{
	max-height: 279px;
	overflow:auto;
}	
.kme_index_tagbar,.index_empty_list {
	height:50px;
	margin: 0px 5px 20px;
	width: 985px;
	background: #fff;		
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
		
	-webkit-box-shadow: 0 1px 8px rgba(0, 0, 0, 0.05), 0 0 1px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 white;
	-moz-box-shadow: 0 1px 8px rgba(0,0,0,0.05), 0 0 1px rgba(0,0,0,0.1), 0 1px 0 rgba(0,0,0,0.1), inset 0 1px 0 #fff;
	box-shadow: 0 1px 8px rgba(0, 0, 0, 0.05), 0 0 1px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 white;	
}	
.kme_index_tagbar h3 {
	padding: 15px 20px 5px;
}	
.kme_index_featured .elgg-col-2of3 {
	margin-right:20px;
	width:638px;
}	
.index_empty_list {
	width:610px;
	padding: 15px 0px 0px 10px;
}
.callbutton {
	margin:10px 20px 0 0;
}	
.kme_index_third {
	overflow:auto;
}
.oneofthree {
	width: 320px;
	margin: 0 7px 10px 5px;
}	
.threeofthree {
	margin-right:0px;
}	
.kme_index_third .elgg-module-aside {
	padding:6px;
}	
.index_welcomer {
	padding:20px 0;
}	
h3.welcome {
	color:#fff;
	font-size: 29px;
}	
h3.raised_caption{
	color:#fff;
	font-size: 25px;
	float:left;
}
#counter {
	margin-top: -35px;
	padding-left: 130px;
	float: right;
}
.kme_features {
	color:#fff;
	font-size: 13px;
	padding:20px 0;
	text-shadow:none;
}	
.kme_features li{
	padding:0px 25px;
	background: url(<?php echo IMG_PATH;?>arrow.png) no-repeat bottom left;
	margin:15px 0 5px;
	font-size:13px;
}	
/****** SEARCH ********/
.elgg-search-header {
	top: 8px;
}
.elgg-search input[type="text"], .elgg-search input[type="text"]:focus  {
	border: none;
	padding: 6px 4px 5px 9px;
	background: transparent;
	color:#8F8F8F;
}
.elgg-search input[type="text"] {
	width: 165px;
	margin-right: 48px;
	box-shadow: none;
	-webkit-box-shadow:  none;
	-moz-box-shadow: none;
}
/****** RIGHT MENU *******/
.elgg-menu-righttop-default {
	position: relative;
	bottom: 0px;
	left: 0;
	height: 23px;
	margin-top: 65px;
}
.elgg-menu-righttop {
	z-index: 1;
}
.elgg-menu-righttop-default > li {
	float: left;
	margin-right: 1px;
	margin-left: 5px;
}
.elgg-menu-righttop-default > li > a {
	color: #FCFCFC;
	display: block;
	margin: 0px;
	text-decoration: none;
	height: 24px;
	line-height: 26px;
	font-weight: normal;
	padding: 3px 10px;
}
.elgg-menu-righttop-default > .elgg-state-selected > a, .elgg-menu-righttop-default > li:hover > a {
	background: #505050 url(<?php echo IMG_PATH;?>texture.png) repeat;
	color: #fff;
	-webkit-box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.25);
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.25);
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;		
	text-shadow:none;
}
/****TOPBAR MORE MENU***/
.elgg-menu-site-default {
	position: absolute;
	top: 0px;
}
.elgg-menu-site > li > a {
	font-weight: normal;
	min-width:150px;
}
.elgg-menu-site-more {
	position: absolute;
	left: 0px;
	min-width: 150px;
	border: 0px;
	border-top: 0;
}
.elgg-menu-site-more > li > a {
	background-color: white;
	color: #555;
}
.elgg-menu-site-more > li > a:hover {
	background: #4690D6;
	color: white;
}
.elgg-menu-site-more > li:last-child > a,
.elgg-menu-site-more > li:last-child > a:hover {
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
}
.elgg-more > a:before {
	content: "\25BC";
	font-size: smaller;
	margin-right: 4px;
}
.elgg-menu-site-default > .elgg-state-selected > a, .elgg-menu-site-default > li:hover > a {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.sociable img {border:0 none;float:none;margin:0;padding:0;}div.sociable {margin:0 0;padding:0px;background:#fff;}
span.sociable_tagline {position:relative;}span.sociable_tagline span {display:none;width:14em;}span.sociable_tagline:hover span {position:absolute;display:block;top:-5em;background:#ffe;border:1px solid #ccc;color:#000;line-height:1.25em;}
.sociable span {display:block;}.sociable ul {display:inline;margin:0 !important ;padding:0 !important ;}.sociable ul li {background:none;display:inline;list-style-type:none;margin:0;padding:1px;}.sociable ul li:before {content:"";}
.getShortlink { margin-top:6px;}
/*** BREADCRUMPS **/
.elgg-breadcrumbs {
	font-size: 100%;
	font-weight: bold;
	line-height: 1.2em;
	color: #FDFDFD;
	top: 118px;
	position: absolute;
	left: 11px;
}
.elgg-breadcrumbs > li {
	text-shadow: none;
}
.elgg-breadcrumbs > li > a, .elgg-breadcrumbs > li > a:hover {
	color: #FAFAFA;
}
/*** tabS **/
.elgg-tabs,.elgg-menu-filter {
	border-bottom: 1px solid #cccccc;
}
.elgg-tabs li, .elgg-menu-filter > li {
	border: 1px solid #ccc;
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
	border-bottom: 0;
}
.elgg-tabs a,.elgg-menu-filter > li > a {
	padding: 8px 20px 5px 20px;
}
/************** MISC ************/
.elgg-comments,.elgg-comments > form, .elgg-output {
	margin-top: 0px;
}
.mtl, .mvl {
	margin-top: 0px;
}
.logintocomment{
	padding: 5px;
	border: 1px solid #DEDEDE;
	margin-bottom: 10px;
}
.logintocomment a{
	font-weight:bold;
}	
.kmeloginbox {
	width:47%;
}	
.fivepxcurved {
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.fleft {
	float:left;
}
.fright{
	float:right;
}	
.kmeseperator {
	border-top:1px solid #dedede; 
	padding:5px;
	margin:5px 0;
}
.groups-stats {
	max-width: 192px;
	width:192px;
}
.elgg-river-item input[type="text"] {
	width: 77%;
}
.elgg-input-search, .elgg-form-members-tag-search input[type=text],.elgg-form-members-name-search input[type=text]{
	background: transparent url(<?php echo IMG_PATH;?>search-icon.png) no-repeat left;
	padding-left:25px;
}
input[class=elgg-input-search]:focus {
	border: solid 1px #dedede;
	background: #e4ecf5;
	color:#333;
}
.event_update_form {
	max-height:90px;
}	
.elgg-form-event-join .elgg-head, .elgg-form-causes-donate .elgg-head{
	border:none;
}	
.quickimage {
	margin: 10px;
}
.quicklinks {
	margin-right: 35px;
}	

/* Live validation */
#status {
	font-size:11px;
	margin-left:10px;
}
.green {
	background-color:#CEFFCE;
}
.red {
	background-color:#FFD9D9;
}
.elgg-gallery-fluid > li {
	float: none;
}
.register_pullup {
	margin-top: -30px;
}
a.elgg-button {
	margin-right:20px;
}	

/*** SOCIAL SHARE ***/
.socialShareSidebar {
	float: left;
	margin-left: -57px;
	margin-top: 53px;
}
/* Event page**/

#event-header {
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
font-weight: 200;
text-shadow:none;
background-color: rgba(52,53,56,0.5);
display: block;
padding-bottom: 20px;
padding-top: 15px;
margin-top:20px;
}
#event-header .elgg-heading-main{
float:none;
clear:both;
}
#event-title-and-description {
border-right: 1px solid rgba(255,255,255, 0.3);
display: block;
float: left;
height: 90px;
padding-right: 15px;
text-align: right;
width: 460px;
}
#event-title-and-description .part1 {
    float: left;
    margin-top:-14px;
    padding-left: 5px;
    width: 180px;
}
#event-title-and-description .part2 {
    float: right;
    width: 270px;
}

#event-header h2.elgg-heading-main {
color: #46c7e8;
font-size: 34px;
margin-bottom: 5px;
margin-right:0px;
}
#event-header .elgg-event-description {
color: #ccc;
font-size: 16px;
float:right;
}
#date-time-location {
background-color: rgba(0,0,0,0.5);
color: #999999;
display: block;
float: left;
min-height: 60px;

margin-left: 15px;
padding: 0px 8px 30px;
width:255px;

}
#date-time-location .start-date {
width:59px;
float: left;
font-size: 60px;
line-height: 60px;
}
#date-time-location .start-month-and-end-date-wrapper {
width:40px;
float: left;
margin-top: 10px;
padding-left: 6px;
padding-right: 10px;
}
#date-time-location .start-time-and-location-wrapper {
border-left: 1px solid rgba(255,255,255, 0.3);
display: block;
float: left;
padding-left: 15px;
margin-top: 10px;
width:120px;
}
.start-time {
background: url(<?php echo IMG_PATH; ?>event_single_time_bg.png) no-repeat top left;
}
.start-time, .location {
height: 24px;
padding-left: 30px;
}
.location {
background: url(<?php echo IMG_PATH; ?>event_single_location_bg.png) no-repeat 3px 0;
font-style: italic;
}
#sponsor-buttons {
display: block;
float: right;
margin-right: 20px;
}
.sponsor-button {
background: url(<?php echo IMG_PATH; ?>event_single_sponsor_button.png) no-repeat top left;
color: #ccc;
display: block;
height: 32px;
margin-bottom: 10px;
padding: 10px 0 0 47px;
text-transform: capitalize;
width: 160px;
}
.event_full{ line-height:none; text-shadow:none;}
.event_full .elgg-main{ padding:0px;}
.event_full .contentWrapper{-webkit-border-radius:0px;-webkit-box-shadow:0px;border-radius:0px;box-shadow:0px;}
.event_full .elgg-main.elgg-body {
background-color: #f2f2f2;
min-width: auto;
height: 100%;
left: 0;

top: 0;

}
.elgg-main.elgg-body .event-subheader {
background-color: #009999;
color: #fff;
display: block;
font-size: 24px;
margin-bottom: 20px;
margin-top: 15px;
padding: 15px 10px 25px 22px;
}
.elgg-main.elgg-body .event-subheader .events-dashboard {
background: url("<?php echo IMG_PATH; ?>events_dashboard_bg.png") no-repeat scroll 11px 5px #037575;
display: block;
float: right;
padding:6px 12px 8px 40px;
}

.elgg-main.elgg-body .event-subheader .events-dashboard a{
color:#FFF;
}
.event-subheader, .events-dashboard a:hover{
text-decoration:none;
}

.elgg-event-left .event-content{
padding: 0 25px;
}

#event-sponsors h4 {
color: #5da4c2;
display: block;
font-size: 26px;
}
.event_full .elgg-sidebar{  background: none repeat scroll 0 0 #fff;

margin:0px;width:358px;padding:15px;
}
#share-links { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
font-weight: 200;

background-color: #000;
-webkit-border-radius: 0px 30px 30px 0px;
border-radius: 0px 30px 30px 0px;
color: #fff;
display: block;
font-size: 22px;
margin: 30px 0;
padding: 3px 5px 10px 24px;
width: 275px;
}
#share-links a.facebook {
background-image: url(<?php echo IMG_PATH; ?>share_link_facebook.png);
}
#share-links a.twitter {
background-image: url(<?php echo IMG_PATH; ?>share_link_twitter.png);
}
#share-links a.googleplus {
background-image: url(<?php echo IMG_PATH; ?>share_link_googleplus.png);
}
#share-links a.linkedin {
background-image: url(<?php echo IMG_PATH; ?>share_link_linkedin.png);
}
#share-links a.link {
background-image: url(<?php echo IMG_PATH; ?>share_link_link.png);
}
#share-links a {
background-position: top left;
background-repeat: no-repeat;
display: inline-block;
height: 30px;
position: relative;
top: 7px;
width: 30px;}
.hide-text {
background-position: top left;
background-repeat: no-repeat;
background-size: cover;
display: block;
font-size: 0;
text-indent: 100%;
white-space: nowrap;
overflow: hidden;
}


.event_full .elgg-module-aside,
.event_full .elgg-module-info,
.event_full .contentWrapper,
.event_full .elgg-module-featured,
.event_full .elgg-layout-two-sidebar .elgg-main{
border:0px;
border-radius:0px;	
box-shadow:none;
}
.event_full .elgg-module{ margin:0px;}
#register-event.sidebar-link {
background: url(<?php echo IMG_PATH; ?>sidebar_registration_icon.png) no-repeat 15px 11px #a41a1a;
padding-left: 50px;
}

#become-volunteer.sidebar-link {
background: url(<?php echo IMG_PATH; ?>sidebar_volunteer_icon.png) no-repeat 15px 11px #72a41a;
padding-left: 50px;
}

#upcoming-events.sidebar-header {
background-color: #1a88a4;
}

.see-all, .view-all {
font-size: 12px;
position: absolute;
right: 20px;
top: 19px;
}
.elgg-sidebar .sidebar-link, .elgg-sidebar .sidebar-header {
color: #fff;
display: block;
font-size: 22px;
font-weight: 300;
margin-bottom: 20px;
padding: 12px 0 12px 12px;
position: relative;
}
.elgg-menu-extras-default{ display:none;}


#upcoming-events.sidebar-header {
background-color: #1a88a4;
}

.sidebar-event {
display: block;
padding-right: 80px;
}

.sidebar-event-dateblock {
color: #5da4c2;
display: block;
float: left;
margin-bottom: 25px;
margin-right: 20px;
}

.sidebar-event-dateblock .day {
display: block;
font-size: 26px;
text-align: center;
}

.sidebar-event-dateblock .month {
display: block;
font-size: 20px;
text-align: center;
}

.elgg-item .event-title {
color: #000;
font-size: 14px;
padding-top: 4px;
}

.elgg-item .event-description {
color: #848484;
font-size: 14px;
}

#gallery.sidebar-header {
background-color: #a4881a;
margin-bottom: 0;
}

#sidebargallery {
background-color: #dedede;
display: block;
padding: 5px 0 10px 2px;
height:300px;
}

#sidebargallery .description {
color: #000;
margin-left: 15px;
}

#sidebargallery .venue, #sidebargallery .date {
color: #666;
}

#sidebargallery .venue {
margin-left: 15px;
}

#sidebargallery .date {
float: right;
margin-right: 15px;
}

#non-profit-partners.sidebar-header {
background-color: #a4581a;
margin-top: 20px;
}

li.partner {
display: block;
margin-bottom: 20px;
width:250px;
}

li.partner .partner-image {
display: block;
float: left;
margin-right: 10px;
}

li.partner .partner-name.line-one {
padding-top: 5px;
}

.see-all a{
cursor: pointer; 
color:#FFF;
}
.see-all a:hover{

text-decoratoin:underline;
}
li.partner .partner-name.line-one {
  padding-top: 5px;
}
li.partner {
  display: block;
  margin-bottom: 20px;
}
li.partner .partner-image {
  display: block;
  float: left;
  margin-right: 10px;
}
.clear {
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
