<?php //netteCache[01]000216a:2:{s:4:"time";s:21:"0.70240100 1281782886";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:61:"/Users/www/xmayo-nette/app/templates/Getintouch/default.phtml";i:2;i:1281281938;}}}?><?php
// file …/templates/Getintouch/default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '56e614c34e'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbb927b04d6d5_title')) { function _cbb927b04d6d5_title($_args) { extract($_args)
?>References<?php
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbbb787c2195f_content')) { function _cbbb787c2195f_content($_args) { extract($_args)
?>

<div id="top" class="content">
	<div class="col-wide left">
		<h2>Get <span class="c-dark">in touch!</span></h2>
		<div class="taj col-inner bright">
			<p>Feel free to contact me. Leave a message if you want to <span class="c-dark">hire me</span> or if you just simply want to say hi and I will get back to you as soon as possible.</p>
			
			<form class="contact">
				<input name="name" type="text" value="Your name (required)"><br>
				<input name="email" type="email" value="Your e-mail address (required)"><br>
				<input name="subject" type="text" value="Subject"><br>
				<textarea name="message">Anything to say? (message required)</textarea><br>
				<button type="submit">SEND MESSAGE</button>
			</form>
		</div>
	</div>

	<div class="col-narrow right nohead">
		<div class="col-inner">
			<p>
				My contact details:
			</p>
			<p>
				<span class="c-dark">Marián Čepa</span> - designer<br>
				Mail: info@mariancepa.com<br>
				ICQ: <span class="c-dark">196-339-055</span><br>
				Skype: <span class="c-dark">xmayo90</span><br>
				Jabber: <span class="c-dark">xmayo@jabim.sk</span><br>
				Twitter: <span class="c-dark">eMCepa</span><br>
				Facebook: <span class="c-dark">eMCepa</span><br>
				Current location: <span class="c-dark">Brno (CZ)</span><br>
			</p>
			<p class="border-bottom">
				Current status: <span class="c-dark">Free for hire</span>
			</p>
			<p class="social-icons border-bottom">
				<a href="#" class="facebook"><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/ico-fb.png" title="Facebook"></a>
				<a href="#" class="twitter"><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/ico-twitter.png" title="Twitter"></a>
				<a href="#" class="lastfm"><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/ico-lastfm.png" title="Last.fm"></a>
				<a href="#" class="youtube"><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/ico-yt.png" title="YouTube"></a>
				<a href="#" class="picasa"><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/ico-picasa.png" title="Picasa"></a>
			</p>
		</div>
	</div>
	<br class="cb">
</div>

<div id="line2" class="line">&nbsp;</div>


<div class="content">
	<h2>Partners <span class="c-dark">&amp; Friends</span></h2>
	<div class="col left bright">
		<div class="col-inner bright">
			<span class="c-dark">Your Ideas</span> - lorem ipsum dolor [yourideas.hu]<br>
			<span class="c-dark">Misa Svec</span> - lorem ipsum dolor [yoursite.cz]<br>
			<span class="c-dark">Martin Kačmar</span> - lorem ipsum dolor [kacmar.sk]<br>
			<span class="c-dark">Roman Sládeček</span> - infoweb [romansladecek.com]<br>
		</div>
	</div>
	<div class="col right">
		<div class="col-inner">
			<span class="c-dark">Your Ideas</span> - lorem ipsum dolor [yourideas.hu]<br>
			<span class="c-dark">Misa Svec</span> - lorem ipsum dolor [yoursite.cz]<br>
			<span class="c-dark">Martin Kačmar</span> - lorem ipsum dolor [kacmar.sk]<br>
			<span class="c-dark">Roman Sládeček</span> - infoweb [romansladecek.com]<br>
		</div>
	</div>
	<br class="cb">
</div>

<?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['title']), get_defined_vars()); } ?>


<?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
