<!DOCTYPE html>
<html>
	<? include("php/layout/head.php") ?>
	<body>
		<? include("php/layout/navbar.php") ?>
		<div class="container-fluid ds">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="jumbotron">
						<img src="img/erc_funded.png" class="stamp" />
						<h1 class="text-center" id="main-title">MEDIATE</h1>
						<hr/>
						<h2 class="text-center" id="sub-title">Understanding the real bestsellers of the 18th century</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">
						<div id="content">
							<? include("php/layout/tabs.php") ?>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active">
									<? include("php/pages/".$page.".php") ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<? include("php/layout/footer.php") ?>
	</body>
</html>
