<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
	<?php $this->head() ?>
</head>
<body data-topbar="colored" data-layout="horizontal" data-layout-size="boxed">
	<?php $this->beginBody() ?>
	<div class="wrap">

		<div id="layout-wrapper">

			<header id="page-topbar">
				<div class="navbar-header">
					<div class="container-fluid">
						<div class="float-right">

							<div class="dropdown d-inline-block">
								<button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

									<span class="d-none d-sm-inline-block ml-1">Smith</span>
									<i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<!-- item-->
									<a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
									<a class="dropdown-item" href="#"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Billing</a>
									<a class="dropdown-item" href="#"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Settings</a>
									<a class="dropdown-item" href="#"><i class="mdi mdi-lock font-size-16 align-middle mr-1"></i> Lock screen</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
								</div>
							</div>
						</div>

						<!-- LOGO -->
						<div class="navbar-brand-box">
							<a href="index.html" class="logo logo-dark">
								<span class="logo-sm">
									<img src="assets/images/logo-sm-dark.png" alt="" height="22">
								</span>
								<span class="logo-lg">
									<img src="assets/images/logo-dark.png" alt="" height="20">
								</span>
							</a>

							<a href="index.html" class="logo logo-light">
								<span class="logo-sm">
									<img src="assets/images/logo-sm-light.png" alt="" height="22">
								</span>
								<span class="logo-lg">
									<img src="assets/images/logo-light.png" alt="" height="20">
								</span>
							</a>
						</div>

						<button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
							<i class="fa fa-fw fa-bars"></i>
						</button>

						<div class="topnav">
							<nav class="navbar navbar-light navbar-expand-lg topnav-menu">

								<div class="collapse navbar-collapse" id="topnav-menu-content">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link" href="index.html">
												Dashboard
											</a>
										</li>

										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Elements <div class="arrow-down"></div>
											</a>
											<div class="dropdown-menu dropdown-mega-menu-xl px-2" aria-labelledby="topnav-uielement">
												<div class="row">
													<div class="col-lg-8">
														<div class="dropdown-item-text font-weight-semibold font-size-16">
															<div class="d-inline-block icons-sm mr-1"><i class="uim uim-box"></i></div> UI Elements</div>

															<div class="row">
																<div class="col-lg-5">
																	<a href="ui-alerts.html" class="dropdown-item">Alerts</a>
																	<a href="ui-badge.html" class="dropdown-item">Badge</a>
																	<a href="ui-buttons.html" class="dropdown-item">Buttons</a>
																	<a href="ui-cards.html" class="dropdown-item">Cards</a>
																	<a href="ui-dropdowns.html" class="dropdown-item">Dropdowns</a>
																	<a href="ui-navs.html" class="dropdown-item">Navs</a>
																</div>
																<div class="col-lg-5">
																	<div>
																		<a href="ui-tabs-accordions.html" class="dropdown-item">Tabs &amp; Accordions</a>
																		<a href="ui-modals.html" class="dropdown-item">Modals</a>
																		<a href="ui-images.html" class="dropdown-item">Images</a>
																		<a href="ui-progressbars.html" class="dropdown-item">Progress Bars</a>
																		<a href="ui-pagination.html" class="dropdown-item">Pagination</a>
																		<a href="ui-popover-tooltips.html" class="dropdown-item">Popover & Tooltips</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4">
															<div class="dropdown-item-text font-weight-semibold font-size-16">
																<div class="d-inline-block icons-sm mr-1"><i class="uim uim-layer-group"></i></div> Advanced UI</div>

																<div>
																	<a href="advanced-alertify.html" class="dropdown-item">Alertify</a>
																	<a href="advanced-rating.html" class="dropdown-item">Rating</a>
																	<a href="advanced-nestable.html" class="dropdown-item">Nestable</a>
																	<a href="advanced-rangeslider.html" class="dropdown-item">Range Slider</a>
																	<a href="advanced-sweet-alert.html" class="dropdown-item">Sweet-Alert</a>
																	<a href="advanced-lightbox.html" class="dropdown-item">Lightbox</a>
																</div>
															</div>

														</div>

													</div>
												</li>

												</ul>
											</div>
										</nav>
									</div>
								</div>
							</div>


						</header>

						<!-- ============================================================== -->
						<!-- Start right Content here -->
						<!-- ============================================================== -->
						<div class="main-content">

							<div class="page-content">

								<!-- Page-Title -->
								<div class="page-title-box">
									<div class="container-fluid">
										<div class="row align-items-center">
											<div class="col-md-12">
												<?= Breadcrumbs::widget([
													'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
												]) ?>
											</div>
										</div>

									</div>
								</div>
								<!-- end page title end breadcrumb -->

							</div>
							<!-- End Page-content -->


						</div>
						<!-- end main content-->

					</div>


					<div class="container">

						<?= Alert::widget() ?>
						<?= $content ?>
					</div>
				</div>

				<footer class="footer">
					<div class="container">
						<p class="pull-left">&copy; <?= Yii::t('app', Yii::$app->name) ?> <?= date('Y') ?></p>
						<p class="pull-right"><?= Yii::powered() ?></p>
					</div>
				</footer>

				<?php $this->endBody() ?>
			</body>
			</html>
			<?php $this->endPage() ?>
