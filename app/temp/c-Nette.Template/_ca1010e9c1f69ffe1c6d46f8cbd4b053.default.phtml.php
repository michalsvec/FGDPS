<?php //netteCache[01]000216a:2:{s:4:"time";s:21:"0.72264500 1281783041";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:61:"/Users/www/xmayo-nette/app/templates/References/default.phtml";i:2;i:1281783040;}}}?><?php
// file …/templates/References/default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '183afe34c1'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbb256f3d1cd8_title')) { function _cbb256f3d1cd8_title($_args) { extract($_args)
?>References<?php
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb36e1e46926_content')) { function _cbb36e1e46926_content($_args) { extract($_args)
?>

<div id="top" class="content">
	<h2 class="fl">References:</h2>
	
	<ul class="submenu lava">
<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($submenuItems) as $id=>$value): ?>
		<li <?php try { $presenter->link($id); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>class="current"<?php endif ?>><a href="<?php echo TemplateHelpers::escapeHtml($presenter->link("References:category", array('id' => $id))) ?>"><?php echo $value ?></a></li>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
	</ul>
	<br class="cb">
</div>

<div class="line line2">&nbsp;</div>

<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($references) as $reference): ?>
<div class="content reference">
	<div class="thumb fl">
		<a href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/files/<?php echo TemplateHelpers::escapeHtml($reference['image_full']) ?>"><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/files/<?php echo TemplateHelpers::escapeHtml($reference['image_references']) ?>"></a>
	</div>
	<div class="info fl">
		<p class="text c-white"><?php echo $reference['name'] ?>,<br /><?php echo $reference['description'] ?></p>
		<p class="tag c-dark"><?php echo TemplateHelpers::escapeHtml($reference['category']) ?></p>
	</div>
	<br class="cb">
</div><?php if (!$iterator->last): ?>
<div class="line line2">&nbsp;</div>
<?php endif ;endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>

<div class="content">
	<!-- <div class="pager">
		<ul>
			<li><a href="#">1</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">1</a></li>
		</ul>
	</div>
	<br class="cb"> -->
	
	<img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/feathers.png" id="feathers">
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
