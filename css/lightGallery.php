

<?php
/*** set the content type header ***/
header("Content-type: text/css");

/** set the paragraph color ***/
$playbtn_color = 'rgba(255,0,0,0.8)';

/*** set the heading size ***/
$width ='160px';

/*** set the heading color ***/
$height ='127px';

?>


ul{
			list-style: none outside none;
		    padding-left: 0;
		}
		
		
		.gallery li {
			display: block;
			float: left;
			height:<?php echo $height;  ?>;
			margin-bottom: 6px;
			margin-right: 6px;
			width:<?php echo $width;  ?>;
		}
		.gallery li a {
			height:<?php echo $height;  ?>;
			width: <?php echo $width;  ?>;
		}
		.gallery li a img {
			width:<?php echo $width;  ?>;
			height:<?php echo $height;  ?>;
		}


.utube {list-style:none!important;padding:0;margin:0;overflow:hidden;}
.utube li{float:left;
 
height:<?php echo $height;  ?>;
width:<?php echo $width;  ?>;

margin:4px;position:relative;}

.utube li img{
height:<?php echo $height;  ?>;
width:<?php echo $width;  ?>;
}
.play-icon{height:auto;width:auto;position:absolute;

left:70px;top:33px;


font-size:29px;

color: <?php echo $playbtn_color;  ?>;

text-shadow:1px 0px 1px black;}
.entry-content{min-width:80%!important;}




.group {
 *zoom: 1;
}
.group:before, .group:after {
	display: table;
	content: "";
	line-height: 0;
}
.group:after {
	clear: both;
}
/*/clearfix*/


/** /font-icons if you are not using font icons you can just remove this part/**/
@font-face {
	font-family: 'Slide-icons';
	src: url('fonts/Slide-icons.eot');
}
@font-face {
	font-family: 'Slide-icons';
	src: url(data:application/font-woff;charset=utf-8;base64,d09GRk9UVE8AAAWcAAsAAAAACSgAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABDRkYgAAABCAAAAm4AAAQxqzjSYEZGVE0AAAN4AAAAGgAAABxmWaSOR0RFRgAAA5QAAAAdAAAAIAAzAARPUy8yAAADtAAAAEsAAABgL/bcQGNtYXAAAAQAAAAAPQAAAVLgL/LNaGVhZAAABEAAAAAuAAAANv3vdhloaGVhAAAEcAAAAB4AAAAkBBD/5GhtdHgAAASQAAAAEgAAABIFOwBxbWF4cAAABKQAAAAGAAAABgAGUABuYW1lAAAErAAAAOEAAAGw7pftcnBvc3QAAAWQAAAADAAAACAAAwAAeJx9VE1oE1EQnpfsJutmSWNMQoUoWxB/qmIKnkKJWKvXQlOwhx5E7SEo9WCEHNKAJqVbn8RLzvEgKEUPCgoiIi3YHkWw2mO9CBb8O1SzurXjvLfrJiqEhXkzwzffm/nee8tAUYAxZuQvFs5PHi6cuzR1GVgAGORsM2D3Be1ehRtBbii7ddiZjyPnvmOE+QW7YRfVNNzpSQPE0vBwexqMtNIbh7Dg0KAHUrAL9sARyF6ZKpzKZDK0nMwMHHeXIXc54S7DHU109gPAZpnF5th1xiEkiANgsFpgNDATPB3ldlHZbNiNcBTZ/JNRZBPFZ0nE6mw/GT6MUC6tiPCgihA6Vkb8sXCNI35bGxRuTcYa4vqZIWlUP1sVoCx3Yyqd1gTNIUH4RhJ6rILAxw9yN/bwghVSt56rLoCyFY6gmy8kwENJwjYrlItPVauOuDWyhqDEzlKFIuvIIrAHfTJbr2uSWpgFOVvFHVDQc5dftK751P3CeyuNp8Uf/DL3tal5rFKLuiX2MxGdL00azJHKOWLcrZF3MmtZWhThNRWwx62XSYTF/d8Rc6sR2iFyNYS4MWNSzaeJA+RWfkqjCYBO5tV71bIkjTssUVe5bykrhrXqWqnZ1m9a6rfk61emfu+Px8iIA8zf/SrDNr4s8csd+Gbzn+mXOtWK3rPHkqbeGkuZuvNIGudo9wRdvDkald0Yj9HFy89vtvsgjw7/Pxm9Kf+SEfGj86HU/frlVn6RwgP7CLVRTZDCFZt6j99edcWGSPmz5h4BLO5d73bIzVL7OdTkc8j6O5MIdiPBkzcNnZ7zDvF/2OYkWvSFI78BSE0QpgAAeJxjYGBgZACCk535hiD6XIbUOhgNAD+3BfAAAHicY2BkYGDgA2IJBhBgYmAEQlYgZgHzGAAEgQA4AAAAeJxjYGZiYJzAwMrAwejDmMbAwOAOpb8ySDK0MDAwMbAyM8CBAILJEJDmmsLg8EDqAwPjg/8PGPQYHzAoNDAwMMIVKAAhIwATaAw5AHicY2BgYGaAYBkGRgYQ8AHyGMF8FgYDIM0BhEwgiQeyHxj+/wezpCAs+RcCjFBdYMDIxoDMHZEAAP1aCcoAAAB4nGNgZGBgAGLNvbqy8fw2Xxm4mRhA4FyG1DoE/f8BEwPjAyCXgwEsDQAB0gmnAAB4nGNgZGBgfPD/AYMeEwMDwz8GIAkUQQHMAG3nA/YAAAIAAAAAAAAAAgAAUQClACAAlgAAAABQAAAGAAB4nI2PMW7CQBBFn8FGIkQpo5RbIFHZsjciEhyAMg0SFwALrYS8kuEMOQLH4BgcgGPkAKnz7UxBkYKVVvPmz5/ZWeCZMwndSZjwZjwgozQeMuPLOJXnapyJv41HTJIXOZN0LOW17+p4wBNT4yGffBin8lyMM/HNeCT+Yc2BwI6aXHFLpOEI60PY1XnYxkbJnW7Kqs9PfWzZq9vhKfQPx1L3/6l/Nc9c6kLXy1/xrnGxOa1iu6+dL0q3dHevK/PzfJH7spLxkW03qrZSQ191eqHbi03dHkNsXFWUD835BcvqQqwAAAB4nGNgZsALAAB9AAQ=) format('woff'), url(data:application/x-font-ttf;charset=utf-8;base64,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) format('truetype');
	font-weight: normal;
	font-style: normal;
}
[data-icon]:before {
	font-family: 'Slide-icons';
	content: attr(data-icon);
	speak: none;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
/** / End of font-icons /**/




.light-gallery {
	overflow: hidden!important;
}
#lg-gallery img {
	border: none!important;
}
#lg-outer {
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 99999!important;
	overflow: hidden;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
	opacity: 1;
	-webkit-transition: opacity 0.35s ease;
	-moz-transition: opacity 0.35s ease;
	-o-transition: opacity 0.35s ease;
	-ms-transition: opacity 0.35s ease;
	transition: opacity 0.35s ease;
	background: #0d0d0d;
}
#lg-outer .lg-slide{
	position: relative;
}
/*lightGallery starting effects*/
#lg-gallery.opacity {
	opacity: 1;
	transition: opacity 1s ease 0s;
	-moz-transition: opacity 1s ease 0s;
	-webkit-transition: opacity 1s ease 0s;
	-o-transition: opacity 1s ease 0s;
	-ms-transition: opacity 1s ease 0s;
}
#lg-gallery.opacity .thumb-cont {
	opacity: 1;
}
#lg-gallery.fade-m {
	opacity: 0;
	transition: opacity 0.5s ease 0s;
	-moz-transition: opacity 0.5s ease 0s;
	-webkit-transition: opacity 0.5s ease 0s;
	-o-transition: opacity 0.5s ease 0s;
	-ms-transition: opacity 0.5s ease 0s;
}
/*lightGallery starting effects*/


/*lightGallery core*/
#lg-gallery {
	height: 100%;
	opacity: 0;
	width: 100%;
	position: relative;
	transition: opacity 1s ease 0s;
	-moz-transition: opacity 1s ease 0s;
	-webkit-transition: opacity 1s ease 0s;
	-o-transition: opacity 1s ease 0s;
	-ms-transition: opacity 1s ease 0s;
}
/**/
#lg-slider {
	height: 100%;
	left: 0;
	top: 0;
	width: 100%;
	position: absolute;
	white-space: nowrap;
}
/**/
#lg-slider .lg-slide {
	background: url(img/loading.gif) no-repeat scroll center center transparent;
	display: inline-block;
	height: 100%;
	text-align: center;
	width: 100%;
}
#lg-slider .lg-slide.complete {
	background-image: none;
}
#lg-gallery.show-after-load .lg-slide > * {
	opacity: 0;
}
#lg-gallery.show-after-load .lg-slide.complete > * {
	opacity: 1;
}
#lg-slider.slide .lg-slide, #lg-slider.use-left .lg-slide {
	position: absolute;
	opacity: 0.4;
}
#lg-slider.fade-m .lg-slide {
	position: absolute;
	left: 0;
	opacity: 0;
}
#lg-slider.animate .lg-slide {
	position: absolute;
	left: 0;
}
#lg-slider.fade-m .current {
	opacity: 1;
	z-index: 9;
}
#lg-slider .lg-slide:before {
	content: "";
	display: inline-block;
	height: 50%;
	width: 1px;
	margin-right: -1px;
}
#lg-gallery.opacity .lg-slide .object {
	transform: scale3d(1, 1, 1);
	-moz-transform: scale3d(1, 1, 1);
	-ms-transform: scale3d(1, 1, 1);
	-webkit-transform: scale3d(1, 1, 1);
	-o-transform: scale3d(1, 1, 1);
}
.lg-slide .object{
	transform: scale3d(0.5, 0.5, 0.5);
	-moz-transform: scale3d(0.5, 0.5, 0.5);
	-ms-transform: scale3d(0.5, 0.5, 0.5);
	-webkit-transform: scale3d(0.5, 0.5, 0.5);
	-o-transform: scale3d(0.5, 0.5, 0.5);
	-webkit-transition: -webkit-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.5s ease 0s;
	-moz-transition: -moz-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.5s ease 0s;
	-o-transition: -o-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.5s ease 0s;
	-ms-transition: -ms-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.5s ease 0s;
	transition: transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.5s ease 0s;
}
#lg-gallery.fade-m .lg-slide .object {
	transform: scale3d(0.5, 0.5, 0.5);
	-moz-transform: scale3d(0.5, 0.5, 0.5);
	-ms-transform: scale3d(0.5, 0.5, 0.5);
	-webkit-transform: scale3d(0.5, 0.5, 0.5);
	-o-transform: scale3d(0.5, 0.5, 0.5);
}
#lg-slider.fade-m.on .current {
	opacity: 1;
	transition: opacity 0.5s ease 0s;
	-moz-transition: opacity 0.5s ease 0s;
	-webkit-transition: opacity 0.5s ease 0s;
	-o-transition: opacity 0.5s ease 0s;
	-ms-transition: opacity 0.5s ease 0s;
}
#lg-slider.fade-m .lg-slide {
	transition: opacity 0.4s ease 0s;
	-moz-transition: opacity 0.4s ease 0s;
	-webkit-transition: opacity 0.4s ease 0s;
	-o-transition: opacity 0.4s ease 0s;
	-ms-transition: opacity 0.4s ease 0s;
}
#lg-slider.slide .lg-slide {
	transform: translate3d(100%, 0px, 0px);
	-moz-transform: translate3d(100%, 0px, 0px);
	-ms-transform: translate3d(100%, 0px, 0px);
	-webkit-transform: translate3d(100%, 0px, 0px);
	-o-transform: translate3d(100%, 0px, 0px);
}
#lg-slider.slide.on .lg-slide {
	opacity: 0;
}
#lg-slider.slide .lg-slide.current {
	opacity: 1 !important;
	transform: translate3d(0px, 0px, 0px) !important;
	-moz-transform: translate3d(0px, 0px, 0px) !important;
	-ms-transform: translate3d(0px, 0px, 0px) !important;
	-webkit-transform: translate3d(0px, 0px, 0px) !important;
	-o-transform: translate3d(0px, 0px, 0px) !important;
}
#lg-slider.slide .lg-slide.prev-slide {
	opacity: 0;
	transform: translate3d(-100%, 0px, 0px);
	-moz-transform: translate3d(-100%, 0px, 0px);
	-ms-transform: translate3d(-100%, 0px, 0px);
	-webkit-transform: translate3d(-100%, 0px, 0px);
	-o-transform: translate3d(-100%, 0px, 0px);
}
#lg-slider.slide .lg-slide.next-slide {
	opacity: 0;
	transform: translate3d(100%, 0px, 0px);
	-moz-transform: translate3d(100%, 0px, 0px);
	-ms-transform: translate3d(100%, 0px, 0px);
	-webkit-transform: translate3d(100%, 0px, 0px);
	-o-transform: translate3d(100%, 0px, 0px);
}
#lg-slider.use-left .lg-slide {
	left: 100%;
}
#lg-slider.use-left.on .lg-slide {
	opacity: 0;
}
#lg-slider.use-left .lg-slide.current {
	opacity: 1 !important;
	left: 0% !important;
}
#lg-slider.use-left .lg-slide.prev-slide {
	opacity: 0;
	left: -100%;
}
#lg-slider.use-left .lg-slide.next-slide {
	opacity: 0;
	left: 100%;
}
#lg-slider.slide.on .lg-slide, #lg-slider.slide.on .current, #lg-slider.slide.on .prev-slide, #lg-slider.slide.on .next-slide {
	-webkit-transition: -webkit-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 1s ease 0s;
	-moz-transition: -moz-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 1s ease 0s;
	-o-transition: -o-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 1s ease 0s;
	-ms-transition: -ms-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 1s ease 0s;
	transition: transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 1s ease 0s;
}
#lg-slider.speed .lg-slide, #lg-slider.speed .current, #lg-slider.speed .prev-slide, #lg-slider.speed .next-slide {
	transition-duration: inherit !important;
	-moz-transition-duration: inherit !important;
	-webkit-transition-duration: inherit !important;
	-o-transition-duration: inherit !important;
	-ms-transition-duration: inherit !important;
}
#lg-slider.timing .lg-slide, #lg-slider.timing .current, #lg-slider.timing .prev-slide, #lg-slider.timing .next-slide {
	transition-timing-function: inherit !important;
	-moz-transition-timing-function: inherit !important;
	-webkit-transition-timing-function: inherit !important;
	-o-transition-timing-function: inherit !important;
	-ms-transition-timing-function: inherit !important;
}
#lg-slider .lg-slide img {
	display: inline-block;
	max-height: 100%;
	max-width: 100%;
	cursor: -moz-grabbing;
	cursor: grab;
	cursor: -webkit-grab;
	margin: 0;
	padding: 0;
	width: auto;
	height: auto;
	vertical-align: middle;
}
#lg-gallery .thumb-cont .thumb-inner {
	-webkit-transition: -webkit-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s;
	-moz-transition: -moz-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s;
	-o-transition: -o-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s;
	-ms-transition: -ms-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s;
	transition: transform 1s cubic-bezier(0, 0, 0.25, 1) 0s;
}
 @-webkit-keyframes rightEnd {
 0% {
left: 0;
}
 50% {
left: -30px;
}
 100% {
left: 0;
}
}
@keyframes rightEnd {
 0% {
left: 0;
}
 50% {
left: -30px;
}
 100% {
left: 0;
}
}
@-webkit-keyframes leftEnd {
 0% {
left: 0;
}
 50% {
left: 30px;
}
 100% {
left: 0;
}
}
@keyframes leftEnd {
 0% {
left: 0;
}
 50% {
left: 30px;
}
 100% {
left: 0;
}
}
.lg-slide .object.right-end {
	-webkit-animation: rightEnd 0.3s;
	animation: rightEnd 0.3s;
	position: relative;
}
.lg-slide .object.left-end {
	-webkit-animation: leftEnd 0.3s;
	animation: leftEnd 0.3s;
	position: relative;
}
/*lightGallery core*/


/*action*/
#lg-action {
	bottom: 20px;
	position: fixed;
	left: 50%;
	margin-left: -30px;
	z-index: 9;
	-webkit-backface-visibility: hidden;
}
#lg-action.has-thumb {
	margin-left: -46px;
}

#lg-action a {
	margin: 0 3px 0 0 !important;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	position: relative;
	top: auto;
	left: auto;
	bottom: auto;
	right: auto;
	display: inline-block !important;
	display: inline-block;
	vertical-align: middle;
 *display: inline;
 *zoom: 1;
	background-color: #000;
	background-color: rgba(0, 0, 0, 0.65);
	font-size: 16px;
	width: 28px;
	height: 28px;
	font-family: 'Slide-icons';
	color: #FFF;
	cursor: pointer;
}
#lg-action a.disabled {
	opacity: 0.6;
	filter: alpha(opacity=60);
	cursor: default;
	background-color: #000;
	background-color: rgba(0, 0, 0, 0.65) !important;
}
#lg-action a:hover, #lg-action a:focus {
	background-color: #000;
	background-color: rgba(0, 0, 0, 0.85);
}
#lg-action a#lg-prev:before, #lg-action a#lg-next:after {
	left: 5px;
	bottom: 3px;
	position: absolute;
}
#lg-action a#lg-prev:before {
	content: "\e01d";
}
#lg-action a#lg-next:after {
	content: "\e01b";
}
#lg-action a.cl-thumb:after {
	font-family: 'Slide-icons';
	content: "\e01c";
	left: 6px;
	bottom: 4px;
	font-size: 16px;
	position: absolute;
}
/*action*/

/*counter*/
#lg-counter {
	bottom: 52px;
	text-align: center;
	width: 100%;
	position: absolute;
	z-index: 9;
	color: #FFFFFF;
}
/*lightGallery Thumb*/
#lg-gallery .thumb-cont {
	position: absolute;
	bottom: 0;
	width: 100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	background-color: #000000;
	-webkit-transition: max-height 0.4s ease-in-out;
	-moz-transition: max-height 0.4s ease-in-out;
	-o-transition: max-height 0.4s ease-in-out;
	-ms-transition: max-height 0.4s ease-in-out;
	transition: max-height 0.4s ease-in-out;
	z-index: 9;
	max-height: 0;
	opacity: 0;
}
#lg-gallery.open .thumb-cont {
	max-height: 350px;
}
#lg-gallery .thumb-cont .thumb-inner {
	margin-left: -12px;
	padding: 12px;
	max-height: 290px;
	overflow-y: auto;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
}
#lg-gallery .thumb-cont .thumb-info {
	background-color: #333;
	padding: 7px 20px;
}
#lg-gallery .thumb-cont .thumb-info .count {
	color: #ffffff;
	font-weight: bold;
	font-size: 12px;
}
#lg-gallery .thumb-cont .thumb-info .close {
	color: #FFFFFF;
	display: block;
	float: right !important;
	width: 28px;
	position: relative;
	height: 28px;
	border-radius: 2px;
	margin-top: -4px;
	background-color: #000;
	background-color: rgba(0, 0, 0, 0.65);
	-webkit-transition: background-color 0.3s ease 0s;
	-moz-transition: background-color 0.3s ease 0s;
	-o-transition: background-color 0.3s ease 0s;
	-ms-transition: background-color 0.3s ease 0s;
	transition: background-color 0.3s ease 0s;
	z-index: 1090;
	cursor: pointer;
}
#lg-gallery .thumb-cont .thumb-info .close i:after {
	left: 6px;
	position: absolute;
	top: 4px;
}
#lg-gallery .thumb-cont .thumb-info .close i:after, #lg-close:after {
	content: "\e01a";
	font-family: 'Slide-icons';
	font-style: normal;
	font-size: 16px;
}
#lg-gallery .thumb-cont .thumb-info .close:hover {
	text-decoration: none;
	background-color: #000;
	background-color: rgba(0, 0, 0, 1);
}
#lg-gallery .thumb-cont .thumb {
	display: inline-block !important;
	vertical-align: middle;
	text-align: center;
 *display: inline;
  /* IE7 inline-block hack */

  *zoom: 1;
	margin-bottom: 4px;
	height: 50px;
	width: 50px;
	opacity: 0.6;
	filter: alpha(opacity=60);
	overflow: hidden;
	border-radius: 3px;
	cursor: pointer;
	-webkit-transition: border-color linear .2s, opacity linear .2s;
	-moz-transition: border-color linear .2s, opacity linear .2s;
	-o-transition: border-color linear .2s, opacity linear .2s;
	-ms-transition: border-color linear .2s, opacity linear .2s;
	transition: border-color linear .2s, opacity linear .2s;
}
@media (min-width: 800px) {
#lg-gallery .thumb-cont .thumb {
	width: 94px;
	height: 94px;
}
}
#lg-gallery .thumb-cont .thumb > img {
	height: auto;
	max-width: 100%;
}
#lg-gallery .thumb-cont .thumb.active, #lg-gallery .thumb-cont .thumb:hover {
	opacity: 1;
	filter: alpha(opacity=100);
	border-color: #ffffff;
}
/*lightGallery Thumb*/

/*lightGallery Video*/
#lg-slider .video-cont {
	display: inline-block;
	max-height: 100%;
	max-width: 100%;
	margin: 0;
	padding: 0;
	width: auto;
	height: auto;
	vertical-align: middle;
}
#lg-slider .video-cont {
	background: none;
	max-width: 1140px;
	max-height: 100%;
	width: 100%;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
}
#lg-slider .video {
	width: 100%;
	height: 0;
	padding-bottom: 56.25%;
	overflow: hidden;
	position: relative;
}
#lg-slider .video .object {
	width: 100%!important;
	height: 100%!important;
	position: absolute;
	top: 0;
	left: 0;
}
/*lightGallery Video*/






/*lightGallery Close*/
#lg-close {
	color: #FFFFFF;
	height: 28px;
	position: absolute;
	right: 20px;
	top: 20px;
	width: 28px;
	z-index: 1090;
	cursor: pointer;
	background-color: #000;
	border-radius: 2px;
	background-color: #000;
	background-color: rgba(0, 0, 0, 0.65);
	-webkit-transition: background-color 0.3s ease;
	-moz-transition: background-color 0.3s ease;
	-o-transition: background-color 0.3s ease;
	-ms-transition: background-color 0.3s ease;
	transition: background-color 0.3s ease;
	-webkit-backface-visibility: hidden;
}
#lg-close:after {
	position: absolute;
	right: 6px;
	top: 3px;
}
#lg-close:hover {
	text-decoration: none;
	background-color: #000;
}
.custom-html {
	background: none repeat scroll 0 0 black;
	background: none repeat scroll 0 0 rgba(0, 0, 0, 0.75);
	color: #fff;
	font-family: Arial, sans-serif;
	height: 70px;
	left: 0;
	position: absolute;
	right: 0;
	top: 0;
	z-index: 9;
}
.custom-html p {
	font-size: 14px;
}
.custom-html > h4 {
	font-family: Arial, sans-serif;
	font-weight: bold;
	margin-bottom: 5px;
	margin-top: 15px;
}
