<!DOCTYPE html>

<html style="background-color: #f6f7f3;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-37.less', 'css/type-37.css');
        ?>

        <link href="css/type-37.css" rel="stylesheet" type="text/css" />
        <script src="shortcodes/theme.shortcodes.js" type="text/javascript"></script>
        <link href="shortcodes/theme.shortcodes.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
  <div class="type-37">
	<div class="wrapper">
		<div class="footer-content">
			<div class="container">
				<div class="footer-text">
					<div class="footer-title">
						<h3>Club Membership</h3>
						<h4>SELECT THE BEST PLAN</h4>
						<!------- START FOOTER - TOP !---->
						<div class="footer-full-col">
							<div class="container">
								<div class="row"
								<div class="footer-full">
									<div class="col-md-3 col-sm-12 col-xs">
										<div class="col">
											<div class="footer-col-title">
												<span>Junior</span>
											</div>
											<div class="footer-col-money">
												<span class="usd">$</span>
												<span class="number">250</span>
												<span class="text1">/</span>
												<span class="text">mth</span>
											</div>
											<div class="footer-col-description">
												<p>Juniors must be less than 19 <br>years<br>
													old as at 1st January</p>
												</div>
												<script>
													$('#flipto').on("click", function (event) {
														event.preventDefault();

														var face = $(this).data("face");

														if (face == "bottom") {
															$(".cube").removeClass("flip-to-top").addClass("flip-to-bottom");
															$(this).data("face", "top").text("Flip: to top");
														} else {
															$(".cube").removeClass("flip-to-bottom").addClass("flip-to-top");
															$(this).data("face", "bottom").text("Flip: to bottom");
														}
													});
												</script>
												<div class="footer-col-button">
													<div class="cube flip-to-top">
														<div class="default-state">
															<span>Order now</span>
														</div>
														<div class="active-state">
															<span>Order now</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-12 col-xs">
											<div class="col">
												<div class="footer-col-title">
													<span>Individual</span>
												</div>
												<div class="footer-col-money">
													<span class="usd">$</span>
													<span class="number">350</span>
													<span class="text1">/</span>
													<span class="text">mth</span>
												</div>
												<div class="footer-col-description">
													<p>Save $98 every year compared
														to the monthly plan by paying<br> yearly.</p>
													</div>
													<script>
														$('#flipto').on("click", function (event) {
															event.preventDefault();

															var face = $(this).data("face");

															if (face == "bottom") {
																$(".cube").removeClass("flip-to-top").addClass("flip-to-bottom");
																$(this).data("face", "top").text("Flip: to top");
															} else {
																$(".cube").removeClass("flip-to-bottom").addClass("flip-to-top");
																$(this).data("face", "bottom").text("Flip: to bottom");
															}
														});
													</script>
													<div class="footer-col-button">
														<div class="cube flip-to-top">
															<div class="default-state">
																<span>Order now</span>
															</div>
															<div class="active-state">
																<span>Order now</span>
															</div>
														</div>
													</div>
												</div>
											</div>    
											<div class="col-md-3 col-sm-12 col-xs">
												<div class="col">
													<div class="footer-col-title">
														<span>Recommended</span>
													</div>
													<div class="footer-col-money">
														<span class="usd">$</span>
														<span class="number">350</span>
														<span class="text1">/</span>
														<span class="text">mth</span>
													</div>
													<div class="footer-col-description">
														<p>Save $128 by inviting your <br>family<br>
															to train with you monthly</p>
														</div>
														<script>
															$('#flipto').on("click", function (event) {
																event.preventDefault();

																var face = $(this).data("face");

																if (face == "bottom") {
																	$(".cube").removeClass("flip-to-top").addClass("flip-to-bottom");
																	$(this).data("face", "top").text("Flip: to top");
																} else {
																	$(".cube").removeClass("flip-to-bottom").addClass("flip-to-top");
																	$(this).data("face", "bottom").text("Flip: to bottom");
																}
															});
														</script>
														<div class="footer-col-button">
															<div class="cube flip-to-top">
																<div class="default-state">
																	<span>Order now</span>
																</div>
																<div class="active-state">
																	<span>Order now</span>
																</div>
															</div>
														</div>
													</div>
												</div>    
												<div class="col-md-3 col-sm-12 col-xs">
													<div class="col">
														<div class="footer-col-title">
															<span>Family</span>
														</div>
														<div class="footer-col-money">
															<span class="usd">$</span>
															<span class="number">450</span>
															<span class="text1">/</span>
															<span class="text">mth</span>
														</div>
														<div class="footer-col-description">
															<p>Save $128 by inviting your <br>family<br>
																to train with you monthly</p>
															</div>
															<script>
																$('#flipto').on("click", function (event) {
																	event.preventDefault();

																	var face = $(this).data("face");

																	if (face == "bottom") {
																		$(".cube").removeClass("flip-to-top").addClass("flip-to-bottom");
																		$(this).data("face", "top").text("Flip: to top");
																	} else {
																		$(".cube").removeClass("flip-to-bottom").addClass("flip-to-top");
																		$(this).data("face", "bottom").text("Flip: to bottom");
																	}
																});
															</script>
															<div class="footer-col-button">
																<div class="cube flip-to-top">
																	<div class="default-state">
																		<span>Order now</span>
																	</div>
																	<div class="active-state">
																		<span>Order now</span>
																	</div>
																</div>
															</div>
														</div>
													</div>    
												</div>
											</div>
										</div>
						<!------- END FOOTER - TOP !---->

									</div>
								</div>
							</div>
						</div>	
                </div>
            </div>
    </body>

</html>