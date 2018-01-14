<?php 
/**
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;

$Itemid = JRequest::getInt('Itemid', 1, 'get');
$view   = JRequest::getVar('view', null);
$template_color = $this->params->get('template_color'); 
$vkontakte = $this->params->get('vkontakte', '');
$facebook = $this->params->get('facebook', '');
$twitter = $this->params->get('twitter', '');
$email = $this->params->get('email', '');
$phone = $this->params->get('phone', '');
$address = $this->params->get('address', '');
$copyright = $this->params->get('copyright', '');

$right_column = false;
$left_column = false;

$width_cont = 'span6';

if($this->countModules('right')){
	$right_column = true;
}

if($this->countModules('left')){
	$left_column = true;
}

if(!$right_column || !$left_column){
	$width_cont = 'span9';
}

if(!$right_column && !$left_column){
	$width_cont = 'span12';
}

echo '<?xml version="1.0" encoding="utf-8"?'.">\n"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<jdoc:include type="head" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/colors.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/typography.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/fonts.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/animate.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $template_color ?>" rel="stylesheet" type="text/css" />
     	<meta name="w1-verification" content="153056983185" />
		
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/default.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
 				$('.spoiler-title').click(function(){
  					$(this).parent().children('.spoiler-body').slideToggle(400);
  					return false;
 				});
			});

			$(document).ready(function(){
 				$('.spoiler-title-wh').click(function(){
  					$(this).parent().children('.spoiler-body-wh').slideToggle(250);
 					return false;
 				});
			});
		</script>
	</head>
	<body>
		<div class="floating-header">
			<div class="inner">
				<div class="logo">
					<a href="<?php echo JURI::root(); ?>" title="<?php echo JFactory::getConfig()->get('sitename'); ?>">
						<img src="<?php echo $this->params->get('site_logo'); ?>" alt="<?php echo JFactory::getConfig()->get('sitename'); ?>" />
					</a>
				</div>
				<div class="menus">
					<jdoc:include type="modules" name="ks-menu" style="none" />
				</div>
			</div>
		</div>
		<div class="container">
			<div class="top-head">
				<div class="left-m"><jdoc:include type="modules" name="ks-info-menu" style="none" /></div>
				<div class="right-m">
					<jdoc:include type="modules" name="ks-auth" style="none" />
				</div>
			</div>
			<header class="masthead">
				<div class="row-fluid header">
					<div class="span4 pull-left logo">
						<h1 class="muted">
							<a href="<?php echo JURI::root(); ?>" title="<?php echo JFactory::getConfig()->get('sitename'); ?>">
                                <img src="<?php echo $this->params->get('site_logo'); ?>" alt="<?php echo JFactory::getConfig()->get('sitename'); ?>" />
                            </a>
						</h1>
					</div>
					<div class="span7 pull-right">
						<div class="span6 head_block_2">
							<jdoc:include type="modules" name="ks-clrful-header-info" style="none" />
						</div>
						<div class="span6 head_block_3">
							<jdoc:include type="modules" name="ks-minicart" style="none" />
						</div>
						<!-- Я не понимаю, что тут происходит. Вы кто? -->
					</div>
				</div>
				<nav class="navbar gk-main-menu">
					<div class="navbar-inner">
						<div class="container">
							<jdoc:include type="modules" name="ks-menu" style="none" />
						</div>
					</div>
				</nav><!-- /.navbar -->
			</header>
				<div>
					<jdoc:include type="modules" name="ks-main-banners" style="xhtml" />
				</div>
			<section class="row-fluid">
				<?php //if($left_column){ ?>
				<aside class="span3" id="leftSidebar">
					<jdoc:include type="modules" name="ks-profile" style="none" />
					<jdoc:include type="modules" name="ks-categories" style="none" />
					<jdoc:include type="modules" name="ks-filters" style="none" />
					<jdoc:include type="modules" name="ks-shipping-info" style="none" />
					<jdoc:include type="modules" name="ks-reviews" style="none" />
				</aside>
				<?php //} ?>
				<div class="span9 content">
					<div class="row-fluid">
						<jdoc:include type="modules" name="ks-search" />
						<jdoc:include type="modules" name="ks-breadcrumbs" />
    				    <!-- Тут были баннеры, епт -->
						<jdoc:include type="modules" name="ks-main-products-list" style="none" />
					</div>
                    <div class="content_in_wrapp">
						<jdoc:include type="message" />
                        <jdoc:include type="component" />
                    </div>
				</div>
			</section>
			<!-- Тут был hr, епт -->
		</div>
		<footer class="footer">
			<div class="container">
				<div class="row-fluid" id="footer1">
					<div class="span3">
						<jdoc:include type="modules" name="ks-clrful-footer-info1" style="none" />
					</div>
					<!-- <div class="span4">
						<?php if (!empty($phone)): ?>
						<h5><?php echo JText::_('TPL_KSENMARTCOLORFUL_FOOTER_QUESTIONS'); ?></h5>
						<div class="span4" style="margin: 0;">
							<?php echo JText::_('TPL_KSENMARTCOLORFUL_FOOTER_CALL_US'); ?>
							<br />
							<?php if (!empty($phone)): ?>
								<?php echo $phone; ?><br />
							<?php endif; ?>
							<?php if (!empty($address)): ?>
								<?php echo $address; ?>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if (!empty($email)): ?>
						<div class="span5">
							<?php echo JText::_('TPL_KSENMARTCOLORFUL_FOOTER_WRITE_US'); ?>
							<br />
							<?php echo $email; ?>
						</div>
						<?php endif; ?>
					</div> -->
					<div class="span2 pull-right">
						<?php if (!empty($vkontakte) || !empty($facebook) || !empty($twitter)): ?>
							<span><?php echo JText::_('TPL_KSENMARTCOLORFUL_FOOTER_SOCIAL_LINKS'); ?></span><br />
							<?php if (!empty($vkontakte)): ?>
							<a href="<?php echo $vkontakte; ?>" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/vk1.png" alt="" /></a>
							<?php endif; ?>
							<?php if (!empty($facebook)): ?>
							<a href="<?php echo $facebook; ?>" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/fb.png" alt="" /></a>
							<?php endif; ?>
							<?php if (!empty($twitter)): ?>
							<a href="<?php echo $twitter; ?>" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/tw.png" alt="" /></a>
							<?php endif; ?>
						<?php endif; ?>
					</div>
					<!-- <div class="span2 pull-right">
						<jdoc:include type="modules" name="ks-clrful-footer-info2" style="none" />
					</div> -->
				</div>
    			<div class="row-fluid" id="footer2">
					<div class="span6">
						<span>&copy; <?php echo date('Y'); ?> Verona.ru</span>
						<!-- <?php echo $copyright; ?> -->
					</div>
					<div class="span2 pull-right">
						<div class="spoiler-title-wh">
							<span style="font:normal 20px 'Intro';color:#FFCE00;">W</span><span style="font:normal 20px 'Intro';color:#FFFFFF;">HODKEVICH</span>
						</div>
						<div class="spoiler-body-wh">
							<table  border="0" style="float:left !important;">
								<tr>
									<td><img src="templates/ksenmartcolorful/images/configure.png" style="margin:0 10px;width:24px;"></td>
									<td>Создал — <span title="Создал — Бог">Владислав Ходкевич</span></td>
									<td rowspan="3" valign="top" style="dispaly:inline;">
										<img src="images/web_dev.png" title="Надо было заполнить пустое пространство" style="width:300px;margin-left:30px;">
									</td>
								</tr>
								<tr>
									<td><img src="templates/ksenmartcolorful/images/email.png" style="margin:0 10px;width:24px;"></td>
									<td>whodkevich@gmail.com</td>
								</tr>
								<tr>
									<td><img src="templates/ksenmartcolorful/images/globe.png" style="margin:0 10px;width:24px;"></td>
									<td><a href="https://vk.com/id150603174" target="_blank" title="Вперёд, ковбой!">Личный сайт</a></td>
								</tr>
							</table>
							<span class="wh_close">&times</span>
						</div>
						<!-- <br />
						<span class="fauthor">Создание сайта — <br /><a href="https://vk.com/id150603174" target="_blank">Владислав Ходкевич</a></span> -->
					</div>
    			</div>
            </div>
		</footer>
	</body>
</html>