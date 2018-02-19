<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<section class="features-intro">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 nopadding">
						<div class="features-slider-cat features-bg-cat">
								<ul class="slides" id="featuresSlider">
									<li>
                                    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
									</li>
								</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
        
        <section class="features-list" id="features">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 text-right">
                        <div class="vertical-text">
                               <h1>Nos projets</h1>
                         </div>
					</div>
						
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
				</div>
			</div>
		</section>
    
    <div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-3')) ?>
	</div>
    
    <div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-4')) ?>
	</div>

</aside>
<!-- /sidebar -->
