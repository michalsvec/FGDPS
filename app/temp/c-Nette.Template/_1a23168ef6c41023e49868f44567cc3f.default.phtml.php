<?php //netteCache[01]000216a:2:{s:4:"time";s:21:"0.82310800 1281880538";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:61:"/Users/www/xmayo-nette/app/templates/Getintouch/default.phtml";i:2;i:1281880524;}}}?><?php
// file …/templates/Getintouch/default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '94c2f817c4'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbb0917554bff_title')) { function _cbb0917554bff_title($_args) { extract($_args)
;echo TemplateHelpers::escapeHtml($template->translate("Get in touch title")) ;
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb9fb69aab76_content')) { function _cbb9fb69aab76_content($_args) { extract($_args)
?>

<div id="top" class="content">
	<div class="col-wide left">
		<h2><?php echo $template->translate("Get in touch") ?></h2>
		<div class="taj col-inner bright">
			<?php echo $template->translate("Form intro") ?>

			
<?php $control->getWidget("contactForm")->render() ?>
		</div>
	</div>

	<div class="col-narrow right nohead">
		<div class="col-inner">
			<p>
				<?php echo $template->translate("My contact details") ?>:
			</p>
			<p>
				<?php echo $template->translate("Marian Cepa - designer") ?><br />
				E-mail: info@mariancepa.com<br />
				ICQ: <span class="c-dark">196-339-055</span><br />
				Skype: <span class="c-dark">xmayo90</span><br />
				Jabber: <span class="c-dark">xmayo@jabim.sk</span><br />
				Twitter: <span class="c-dark">eMCepa</span><br />
				Facebook: <span class="c-dark">eMCepa</span><br />
				<?php echo TemplateHelpers::escapeHtml($template->translate("Current location")) ?>: <span class="c-dark">Brno (CZ)</span><br />
			</p>
			<p class="border-bottom">
				<?php echo TemplateHelpers::escapeHtml($template->translate("Current status")) ?>: <span class="c-dark">Free for hire</span>
			</p>
			<p class="social-icons border-bottom">
<?php LatteMacros::includeTemplate('../block_social.phtml', $template->getParams(), $_cb->templates['94c2f817c4'])->render() ?>
			</p>
		</div>
	</div>
	<br class="cb">
</div>

<div id="line2" class="line">&nbsp;</div>

<div class="content">
	<h2><?php echo $template->translate("Partners and friends") ?></h2>
	<div class="col left bright">
		<div class="col-inner bright">
			<?php echo $template->translate("links-left") ?>

		</div>
	</div>
	<div class="col right">
		<div class="col-inner">
			<?php echo $template->translate("links-right") ?>

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
