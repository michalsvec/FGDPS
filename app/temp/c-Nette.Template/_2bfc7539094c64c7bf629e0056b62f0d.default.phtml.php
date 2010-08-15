<?php //netteCache[01]000211a:2:{s:4:"time";s:21:"0.67666700 1281873364";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:56:"/Users/www/xmayo-nette/app/templates/About/default.phtml";i:2;i:1281869634;}}}?><?php
// file …/templates/About/default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '852bb28b13'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbbdede5be9e2_title')) { function _cbbdede5be9e2_title($_args) { extract($_args)
;echo $template->translate("About me") ;
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbbe216521ac7_content')) { function _cbbe216521ac7_content($_args) { extract($_args)
?>
<div id="top" class="content">
	<h1><?php echo $template->translate("top_heading") ?></h1>

	<?php echo $template->translate("top_text") ?>

</div>

<div id="line2" class="line">&nbsp;</div>

<div class="content">
	<div class="col left">
		<h2><?php echo $template->translate("biography_heading") ?></h2>
		<div class="taj col-inner bright">
			<table class="biography border-bottom">
			<tr>
				<td class="c-grey">2009</td>
				<td>
					<?php echo $template->translate("biography_2009") ?>

				</td>
			</tr>
			<tr class="last">
				<td class="c-grey">2010</td>
				<td>
					<?php echo $template->translate("biography_2010") ?>

				</td>
			</tr>
			</table>
			<p class="border-bottom">
				<?php echo $template->translate("interests") ?>

			</p>
			<p class="social-icons border-bottom">
<?php LatteMacros::includeTemplate('../block_social.phtml', $template->getParams(), $_cb->templates['852bb28b13'])->render() ?>
			</p>
		</div>
	</div>

	<div class="col right">
		<h2 class="col-inner"><?php echo $template->translate("latest works") ?></h2>
		<div class="taj col-inner ">
			<div id="works" class="works border-bottom">
<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($references) as $reference): ?>
				<a href="<?php echo TemplateHelpers::escapeHtml($presenter->link("References:view", array('id'=>$reference['id']))) ?>"><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/files/<?php echo TemplateHelpers::escapeHtml($reference['image_about']) ?>" title="<?php echo TemplateHelpers::escapeHtml($reference['name']) ?>"></a>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
				<br class="cb">
			</div>
			<p class="border-bottom tac">
				<a href="#" class="c-grey"><?php echo $template->translate("see all my works") ?></a>
			</p>
		</div>
		<br class="cb">
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
