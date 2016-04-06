<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>

	<meta charset="utf-8">

	<title>Заголовок</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">

	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<!-- Bootstrap v3.3.4 Grid Styles -->
	<style>
		html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
		body{margin:0}
		article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}
		audio,canvas,progress,video{display:inline-block;vertical-align:baseline}
		audio:not([controls]){display:none;height:0}
		[hidden],template{display:none}
		a{background-color:transparent}
		a:active,a:hover{outline:0}
		abbr[title]{border-bottom:1px dotted}
		b,strong{font-weight:bold}
		dfn{font-style:italic}
		h1{font-size:2em;margin:0.67em 0}
		mark{background:#ff0;color:#000}
		small{font-size:80%}
		sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
		sup{top:-0.5em}
		sub{bottom:-0.25em}
		img{border:0}
		svg:not(:root){overflow:hidden}
		figure{margin:1em 40px}
		hr{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;height:0}
		pre{overflow:auto}
		code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}
		button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}
		button{overflow:visible}
		button,select{text-transform:none}
		button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}
		button[disabled],html input[disabled]{cursor:default}
		button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}
		input{line-height:normal}
		input[type="checkbox"],input[type="radio"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}
		input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}
		input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}
		input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}
		fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}
		legend{border:0;padding:0}
		textarea{overflow:auto}
		optgroup{font-weight:bold}
		table{border-collapse:collapse;border-spacing:0}
		td,th{padding:0}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
		html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}
		body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}
		input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}
		a{color:#337ab7;text-decoration:none}
		a:hover,a:focus{color:#23527c;text-decoration:underline}
		a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}
		figure{margin:0}
		img{vertical-align:middle}
		.img-responsive{display:block;max-width:100%;height:auto}
		.img-rounded{border-radius:6px}
		.img-thumbnail{padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out;display:inline-block;max-width:100%;height:auto}
		.img-circle{border-radius:50%}
		hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}
		.sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}
		.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}
		[role="button"]{cursor:pointer}
		.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}
		@media (min-width:768px){.container{width:750px}}
		@media (min-width:992px){.container{width:970px}}
		@media (min-width:1200px){.container{width:1170px}}
		.container-fluid{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.row{margin-left:-15px;margin-right:-15px}
		.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}
		.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12{float:left}
		.col-xs-12{width:100%}
		.col-xs-11{width:91.66666667%}
		.col-xs-10{width:83.33333333%}
		.col-xs-9{width:75%}
		.col-xs-8{width:66.66666667%}
		.col-xs-7{width:58.33333333%}
		.col-xs-6{width:50%}
		.col-xs-5{width:41.66666667%}
		.col-xs-4{width:33.33333333%}
		.col-xs-3{width:25%}
		.col-xs-2{width:16.66666667%}
		.col-xs-1{width:8.33333333%}
		.col-xs-pull-12{right:100%}
		.col-xs-pull-11{right:91.66666667%}
		.col-xs-pull-10{right:83.33333333%}
		.col-xs-pull-9{right:75%}
		.col-xs-pull-8{right:66.66666667%}
		.col-xs-pull-7{right:58.33333333%}
		.col-xs-pull-6{right:50%}
		.col-xs-pull-5{right:41.66666667%}
		.col-xs-pull-4{right:33.33333333%}
		.col-xs-pull-3{right:25%}
		.col-xs-pull-2{right:16.66666667%}
		.col-xs-pull-1{right:8.33333333%}
		.col-xs-pull-0{right:auto}
		.col-xs-push-12{left:100%}
		.col-xs-push-11{left:91.66666667%}
		.col-xs-push-10{left:83.33333333%}
		.col-xs-push-9{left:75%}
		.col-xs-push-8{left:66.66666667%}
		.col-xs-push-7{left:58.33333333%}
		.col-xs-push-6{left:50%}
		.col-xs-push-5{left:41.66666667%}
		.col-xs-push-4{left:33.33333333%}
		.col-xs-push-3{left:25%}
		.col-xs-push-2{left:16.66666667%}
		.col-xs-push-1{left:8.33333333%}
		.col-xs-push-0{left:auto}
		.col-xs-offset-12{margin-left:100%}
		.col-xs-offset-11{margin-left:91.66666667%}
		.col-xs-offset-10{margin-left:83.33333333%}
		.col-xs-offset-9{margin-left:75%}
		.col-xs-offset-8{margin-left:66.66666667%}
		.col-xs-offset-7{margin-left:58.33333333%}
		.col-xs-offset-6{margin-left:50%}
		.col-xs-offset-5{margin-left:41.66666667%}
		.col-xs-offset-4{margin-left:33.33333333%}
		.col-xs-offset-3{margin-left:25%}
		.col-xs-offset-2{margin-left:16.66666667%}
		.col-xs-offset-1{margin-left:8.33333333%}
		.col-xs-offset-0{margin-left:0}
		@media (min-width:768px){.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}
		@media (min-width:992px){.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}
		@media (min-width:1200px){.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}
		.clearfix:before,.clearfix:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after{content:" ";display:table}
		.clearfix:after,.container:after,.container-fluid:after,.row:after{clear:both}
		.center-block{display:block;margin-left:auto;margin-right:auto}
		.pull-right{float:right !important}
		.pull-left{float:left !important}
		.hide{display:none !important}
		.show{display:block !important}
		.invisible{visibility:hidden}
		.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}
		.hidden{display:none !important}
		.affix{position:fixed}@-ms-viewport{width:device-width}
		.visible-xs,.visible-sm,.visible-md,.visible-lg{display:none !important}
		.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block{display:none !important}
		@media (max-width:767px){.visible-xs{display:block !important}table.visible-xs{display:table}tr.visible-xs{display:table-row !important}th.visible-xs,td.visible-xs{display:table-cell !important}}
		@media (max-width:767px){.visible-xs-block{display:block !important}}
		@media (max-width:767px){.visible-xs-inline{display:inline !important}}
		@media (max-width:767px){.visible-xs-inline-block{display:inline-block !important}}
		@media (min-width:768px) and (max-width:991px){.visible-sm{display:block !important}table.visible-sm{display:table}tr.visible-sm{display:table-row !important}th.visible-sm,td.visible-sm{display:table-cell !important}}
		@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block !important}}
		@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline !important}}
		@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block !important}}
		@media (min-width:992px) and (max-width:1199px){.visible-md{display:block !important}table.visible-md{display:table}tr.visible-md{display:table-row !important}th.visible-md,td.visible-md{display:table-cell !important}}
		@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block !important}}
		@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline !important}}
		@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block !important}}
		@media (min-width:1200px){.visible-lg{display:block !important}table.visible-lg{display:table}tr.visible-lg{display:table-row !important}th.visible-lg,td.visible-lg{display:table-cell !important}}
		@media (min-width:1200px){.visible-lg-block{display:block !important}}
		@media (min-width:1200px){.visible-lg-inline{display:inline !important}}
		@media (min-width:1200px){.visible-lg-inline-block{display:inline-block !important}}
		@media (max-width:767px){.hidden-xs{display:none !important}}
		@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none !important}}
		@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none !important}}
		@media (min-width:1200px){.hidden-lg{display:none !important}}.visible-print{display:none !important}
		@media print{.visible-print{display:block !important}table.visible-print{display:table}tr.visible-print{display:table-row !important}th.visible-print,td.visible-print{display:table-cell !important}}.visible-print-block{display:none !important}
		@media print{.visible-print-block{display:block !important}}.visible-print-inline{display:none !important}
		@media print{.visible-print-inline{display:inline !important}}.visible-print-inline-block{display:none !important}
		@media print{.visible-print-inline-block{display:inline-block !important}}
		@media print{.hidden-print{display:none !important}}
	</style>
	
	<!-- Header CSS (First Sections of Website: paste after release from header.min.css here) -->
	<style>
		
	</style>
	
	<!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
	<script>
	!function(e)
	{"use strict";
	function t(e,t,n)
		{e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}
		function n(t,n){return e.localStorage&&localStorage[t+"_content"]&&localStorage[t+"_file"]===n}
		function a(t,a){if(e.localStorage&&e.XMLHttpRequest)n(t,a)?o(localStorage[t+"_content"]):l(t,a);else{var s=r.createElement("link");s.href=a,s.id=t,s.rel="stylesheet",s.type="text/css",r.getElementsByTagName("head")[0].appendChild(s),r.cookie=t}}
		function l(e,t){var n=new XMLHttpRequest;n.open("GET",t,!0),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&(o(n.responseText),localStorage[e+"_content"]=n.responseText,localStorage[e+"_file"]=t)},n.send()}
		function o(e){var t=r.createElement("style");t.setAttribute("type","text/css"),r.getElementsByTagName("head")[0].appendChild(t),t.styleSheet?t.styleSheet.cssText=e:t.innerHTML=e}
		var r=e.document;e.loadCSS=function(e,t,n){var a,l=r.createElement("link");if(t)a=t;else{var o;o=r.querySelectorAll?r.querySelectorAll("style,link[rel=stylesheet],script"):(r.body||r.getElementsByTagName("head")[0]).childNodes,a=o[o.length-1]}var s=r.styleSheets;l.rel="stylesheet",l.href=e,l.media="only x",a.parentNode.insertBefore(l,t?a:a.nextSibling);var c=function(e){for(var t=l.href,n=s.length;n--;)if(s[n].href===t)return e();setTimeout(function(){c(e)})};return l.onloadcssdefined=c,c(function(){l.media=n||"all"}),l}
		,e.loadLocalStorageCSS=function(l,o){n(l,o)||r.cookie.indexOf(l)>-1?a(l,o):t(e,"load",function(){a(l,o)})}}
		(this);
	</script>

	<!-- Load CSS Start -->
	<script>loadLocalStorageCSS( "webfonts", "css/fonts.min.css?ver=1.0.0" );</script>
	<script>loadCSS( "css/header.min.css?ver=1.0.0", false, "all" );</script>
	<script>loadCSS( "css/main.min.css?ver=1.0.0", false, "all" );</script>

	<!-- Load CSS End -->

	<!-- Load CSS Compilled without JS -->
	<noscript>
		<link rel="stylesheet" href="css/fonts.min.css">
		<link rel="stylesheet" href="css/main.min.css">
	</noscript>

</head>

<body>
	<!-- Здесь пишем код -->
	<div class="preloader"></div>
	<header>
		<section class="top" style="display: block;">
			<div class="container top-line">
				<div class="row">
					<div class="col-md-4 logo">
						<h1>Tmp4you</h1>
					</div>

					<div class="col-md-5"></div>
					<div class="col-md-3 social">
						<a href="#"><i class="fa fa-vk"></i></a>
						<a href="#"><i class="fa fa-facebook-official"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-odnoklassniki"></i></a>
					</div>

				</div>
				
				

			</div>
			<!--<nav class="main-menu">
				<div class="container">
						<ul class="sf-menu">
							<li class="active"><a href="#">Каталог</a></li>
							<li><a href="#">Категории</a></li>
							<li><a href="#">CMS шаблоны</a></li>
							<li><a href="#">Интернет-магазины</a></li>
							<li><a href="#">Эксклюзивы</a></li>
						</ul>
				</div>
			</nav>-->
			<nav class="navbar navbar-default main-menu">
				<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Каталог<span class="sr-only">(current)</span></a></li>
							<li><a href="#">Категории</a></li>  
							<li><a href="#">CMS шаблоны</a></li>  
							<li><a href="#">Интернет-магазины</a></li>  
							<li><a href="#">Эксклюзивы</a></li>  
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</section>
		<section class="slider-wrap" style="display: block;">
			<div class="container">
				<div class="slider-nav-container">
					<div class="slider-nav">
						<div class="prev"><i class="fa fa-angle-left"></i></div>
						<div class="next"><i class="fa fa-angle-right"></i></div>

					</div>
				</div>
			</div>
			<div class="slider">
					<div class="slide">
						<div class="slide-bg"></div>
						<div class="slide-content">
							<div class="container">
								<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<div class="row">
											<div class="col-md-6 left">
												<h2>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Ты диких точках осталось. Даль раз о ему инициал ты курсивных переписали переулка предупредила!</h2>
											</div>
											<div class="col-md-6"><img src="img/mockup.png" class="img-responsive slide-img-wrap" alt="placeholder+image"></div>
										</div>
										<div class="row btn__slider">
											<div class="col-md-12"><a href="#" class="button__main">Каталог</a></div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="slide-bg"></div>
						<div class="slide-content">
							<div class="container">
								<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<div class="row">
											<div class="col-md-6 left">
												<h2>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Ты диких точках осталось. Даль раз о ему инициал ты курсивных переписали переулка предупредила!</h2>
											</div>
											<div class="col-md-6"><img src="img/mockup.png" class="img-responsive slide-img-wrap" alt="placeholder+image"></div>
										</div>
										<div class="row btn__slider">
											<div class="col-md-12"><a href="#" class="button__main">Каталог</a></div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="slide-bg"></div>
						<div class="slide-content">
							<div class="container">
								<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<div class="row">
											<div class="col-md-6 left">
												<h2>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Ты диких точках осталось. Даль раз о ему инициал ты курсивных переписали переулка предупредила!</h2>
											</div>
											<div class="col-md-6"><img src="img/mockup.png" class="img-responsive slide-img-wrap" alt="placeholder+image"></div>
										</div>
										<div class="row btn__slider">
											<div class="col-md-12"><a href="#" class="button__main">Каталог</a></div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</section>

	</header>

	<section class="katalog">
		<div class="container">
			<div class="row">
				<div class="col-md-3 filter">

					<div class="panel-heading filter__heading">
						<h3 class="panel-title">Фильтр</h3>
					</div>
					<!--Kategory START-->
					<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading punkt__heading" role="tab" id="heading1">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
										Категории
									</a>
								</h4>
							</div>
							<div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
								<div class="panel-body">
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 1
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 2
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 3
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Kategory END-->
					<!--Tip START-->
					<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading punkt__heading" role="tab" id="heading2">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
										Тип
									</a>
								</h4>
							</div>
							<div id="collapse2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading2">
								<div class="panel-body">
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 1
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 2
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 3
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Tip END-->
					<!--Osobennosty START-->
					<div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading punkt__heading" role="tab" id="heading3">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
										Особенности
									</a>
								</h4>
							</div>
							<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
								<div class="panel-body">
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 1
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 2
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 3
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Osobennosty END-->
					<!--Sovmestimost' START-->
					<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading punkt__heading" role="tab" id="heading4">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
										Совместимость
									</a>
								</h4>
							</div>
							<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
								<div class="panel-body">
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 1
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 2
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 3
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Sovmestimost' END-->
					<!--Style START-->
					<div class="panel-group" id="accordion5" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading punkt__heading" role="tab" id="heading5">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
										Стиль
									</a>
								</h4>
							</div>
							<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
								<div class="panel-body">
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 1
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 2
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 3
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Style END-->
					<!--Color START-->
					<div class="panel-group" id="accordion6" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading punkt__heading" role="tab" id="heading6">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
										Цвет
									</a>
								</h4>
							</div>
							<div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
								<div class="panel-body">
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 1
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 2
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox">Пункт 3
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Color END-->
					<!--Money START-->
					<div class="panel-group" id="accordion7" role="tablist" aria-multiselectable>
						<div class="panel panel-default">
							<div class="panel-heading punkt__heading" role="tab" id="heading7">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion7" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
										Цена
									</a>
								</h4>
							</div>
							<div id="collapse7" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading7">
								<div class="panel-body">
									<div class="checkbox">
										<input type="text" id="range_25" name="#range_25" value="" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Money END-->
				</div>

				<div class="col-md-9">
					<div class="panel-heading katalog__heading">
						<h3 class="panel-title">Каталог</h3>
					</div>
					<div class="container katalog__body">
						<div class="row">
							<!--for PHP
							<?php for ($i = 1; $i <= 12; $i++){
							?>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="card">
										<div class="card-content">
											<a href="#">
												<div class="overlay"><i class="fa fa-search-plus"></i></div>
												<img src="img/texture.png" alt="" class="img-responsive">
											</a>
										</div>
										<div class="card-panel">
												<a href="#" class="button__kataloge">Купить</a>
										</div>
									</div>
								</div>
								<?php
								}
								?>-->

								<a class="image"  href="#">
									<span class="roll" ></span>
									<img class="imgborder" alt="" src="images/pic.jpg">			
								</a>

								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="panel panel-default">
										<div class="panel-body">
	    									<img src="img/texture.png" alt="" class="img-responsive">
	    								</div>
	    								<div class="panel-footer">
	    									<a href="#" class="button__kataloge">Купить</a>
	    								</div>
									</div>
								</div>


								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="card">
										<div class="card-content">
											<a href="#">
												<div class="overlay"><i class="fa fa-search-plus"></i></div>
												<img src="img/texture.png" alt="" class="img-responsive">
											</a>
										</div>
										<div class="card-panel">
												<a href="#" class="button__kataloge">Купить</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="card">
										<div class="card-content">
											<a href="#">
												<div class="overlay"><i class="fa fa-search-plus"></i></div>
												<img src="img/texture.png" alt="" class="img-responsive">
											</a>
										</div>
										<div class="card-panel">
												<a href="#" class="button__kataloge">Купить</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>

						<!--PAGINATION START-->
						
						<div class="col-md-12">
							<div class="row">
								<ul class="pagination">
									<li>
										<a href="#" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
										</a>
									</li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li>
										<a href="#" aria-label="Next">
											<span aria-hidden="true">&raquo;</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<!--PAGINATION END-->

					</div>	
				</div>
			</div>
		</div>
	</section>
	<section class="popular">
		<div class="container popular__topline">
			<div class="row">
				<h3>Популярные</h3>
			</div>
		</div>
	</section>
	<section class="pslider-wrap" style="display: block;">
			<div class="container">
				<div class="pslider-nav-container">
					<div class="pslider-nav">
						<div class="pprev"><i class="fa fa-angle-left"></i></div>
						<div class="pnext"><i class="fa fa-angle-right"></i></div>

					</div>
				</div>
			</div>
			<div class="pslider">
					<div class="pslide">
						<div class="pslide-bg"></div>
						<div class="pslide-content">
							<div class="container">
								<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<div class="row">
											<div class="col-md-3">
												<div class="card">
													<div class="card-content">
														<a href="#">
															<div class="overlay"><i class="fa fa-search-plus"></i></div>
															<img src="img/texture.png" alt="" class="img-responsive">
														</a>
													</div>
													<div class="card-panel">
															<a href="#" class="button__kataloge">Купить</a>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="card">
													<div class="card-content">
														<a href="#">
															<div class="overlay"><i class="fa fa-search-plus"></i></div>
															<img src="img/texture.png" alt="" class="img-responsive">
														</a>
													</div>
													<div class="card-panel">
															<a href="#" class="button__kataloge">Купить</a>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="card">
													<div class="card-content">
														<a href="#">
															<div class="overlay"><i class="fa fa-search-plus"></i></div>
															<img src="img/texture.png" alt="" class="img-responsive">
														</a>
													</div>
													<div class="card-panel">
															<a href="#" class="button__kataloge">Купить</a>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="card">
													<div class="card-content">
														<a href="#">
															<div class="overlay"><i class="fa fa-search-plus"></i></div>
															<img src="img/texture.png" alt="" class="img-responsive">
														</a>
													</div>
													<div class="card-panel">
															<a href="#" class="button__kataloge">Купить</a>
													</div>
												</div>
											</div>
										</div>		
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pslide">
						<div class="pslide-bg"></div>
						<div class="pslide-content">
							<div class="container">
								<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<div class="row">
											<div class="col-md-3">
												<div class="card">
													<div class="card-content">
														<a href="#">
															<div class="overlay"><i class="fa fa-search-plus"></i></div>
															<img src="img/texture.png" alt="" class="img-responsive">
														</a>
													</div>
													<div class="card-panel">
															<a href="#" class="button__kataloge">Купить</a>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="card">
													<div class="card-content">
														<a href="#">
															<div class="overlay"><i class="fa fa-search-plus"></i></div>
															<img src="img/texture.png" alt="" class="img-responsive">
														</a>
													</div>
													<div class="card-panel">
															<a href="#" class="button__kataloge">Купить</a>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="card">
													<div class="card-content">
														<a href="#">
															<div class="overlay"><i class="fa fa-search-plus"></i></div>
															<img src="img/texture.png" alt="" class="img-responsive">
														</a>
													</div>
													<div class="card-panel">
															<a href="#" class="button__kataloge">Купить</a>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="card">
													<div class="card-content">
														<a href="#">
															<div class="overlay"><i class="fa fa-search-plus"></i></div>
															<img src="img/texture.png" alt="" class="img-responsive">
														</a>
													</div>
													<div class="card-panel">
															<a href="#" class="button__kataloge">Купить</a>
													</div>
												</div>
											</div>
										</div>		
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pslide">
						<div class="pslide-bg"></div>
						<div class="pslide-content">
							<div class="container">
								<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<div class="row">
											<div class="col-md-3">
												<div class="card">
													<div class="card-content">
														<a href="#">
															<div class="overlay"><i class="fa fa-search-plus"></i></div>
															<img src="img/texture.png" alt="" class="img-responsive">
														</a>
													</div>
													<div class="card-panel">
															<a href="#" class="button__kataloge">Купить</a>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="card">
													<div class="card-content">
														<a href="#">
															<div class="overlay"><i class="fa fa-search-plus"></i></div>
															<img src="img/texture.png" alt="" class="img-responsive">
														</a>
													</div>
													<div class="card-panel">
															<a href="#" class="button__kataloge">Купить</a>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="card">
													<div class="card-content">
														<a href="#">
															<div class="overlay"><i class="fa fa-search-plus"></i></div>
															<img src="img/texture.png" alt="" class="img-responsive">
														</a>
													</div>
													<div class="card-panel">
															<a href="#" class="button__kataloge">Купить</a>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="card">
													<div class="card-content">
														<a href="#">
															<div class="overlay"><i class="fa fa-search-plus"></i></div>
															<img src="img/texture.png" alt="" class="img-responsive">
														</a>
													</div>
													<div class="card-panel">
															<a href="#" class="button__kataloge">Купить</a>
													</div>
												</div>
											</div>
										</div>		
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</section>



	<div class="hidden"></div>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<!-- Load Scripts Start -->
	<script>var scr = {"scripts":[
		{"src" : "js/libs.js", "async" : false},
		{"src" : "js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>

	<!-- Load Scripts End -->

</body>
</html>