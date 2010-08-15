<?php //netteCache[01]000206a:2:{s:4:"time";s:21:"0.86592900 1281869518";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:51:"/Users/www/xmayo-nette/app/templates//@layout.phtml";i:2;i:1281869466;}}}?><?php
// file …/templates//@layout.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '25c21cf5c4'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbbc53f1c38ad_title')) { function _cbbc53f1c38ad_title($_args) { extract($_args)
;
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
?>
<!doctype html>
<html lang="<?php echo TemplateHelpers::escapeHtml($lang) ?>">
<head>
	<title><?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['title']), get_defined_vars()); } ?></title>

	<meta charset="utf-8" />
	<?php if (isset($robots)): ?><meta name="robots" content="<?php echo TemplateHelpers::escapeHtml($robots) ?>" /><?php endif ?>


	<link rel="stylesheet" href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/main.css">
	<script src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/js/jquery-1.4.2.js"></script>
	<script src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/js/jquery.easing.min.js"></script>
	<script src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/js/jquery.lavalamp.min.js"></script>
	<script src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/js/scripts.js"></script>
	
	<!--[if IE]>  
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>  
	<![endif]--> 
</head>
<body>

<div id="line1" class="line">&nbsp;</div>

<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($flashes) as $flash): ?><div class="flash <?php echo TemplateHelpers::escapeHtml($flash->type) ?>"><?php echo TemplateHelpers::escapeHtml($flash->message) ?></div><?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>


<?php LatteMacros::callBlock($_cb->blocks, 'content', get_defined_vars()) ?>

<div id="footer">
	<div class="footer content">
		<div class="fl copyright">
			<span class="c-grey">Copyright &copy; 2010.</span> <a href="http://mariancepa.com" class="c-dark">mariancepa.com</a>
		</div>
		<div class="fr">
			<img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/mc-logo-footer.png" title="MarianCepa.com" class="footer-logo">
		</div>
		<br class="cb">
	</div>
</div>

<!-- - - - - - - absolute positioned elements - - - - - - - - - - - - - -->
<div class="content">
	<div id="logo">
		<a href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>"><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/mc-logo.png" alt="mc-logo.png" title="MarianCepa.com"></a>
	</div>

	<div id="menu">
	
		<ul class="menu lava">
<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($menuItems) as $id => $item): ?>
			<li <?php try { $presenter->link($id); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>class="current"<?php endif ?>><a href="<?php echo TemplateHelpers::escapeHtml($presenter->link($id)) ?>"><?php echo TemplateHelpers::escapeHtml($item) ?></a></li>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
		</ul>
	</div>

	<div id="langbox">
		<ul class="lang">
			<li class="en"><a href="<?php echo TemplateHelpers::escapeHtml($control->link("this", array('lang'=>'en'))) ?>"><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/flag-en.gif" alt="flag-en" title="English"></a></li>
			<li class="sk"><a href="<?php echo TemplateHelpers::escapeHtml($control->link("this", array('lang'=>'sk'))) ?>"><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/flag-sk.gif" alt="flag-sk" title="Slovensky"></a></li>
		</ul>
	</div>

	<div id="flower">
		<img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/flower.png" title="kvet" alt="flower image">
	</div>
</div>

<div id="shark">&nbsp;</div>

</body>
</html><?php
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
