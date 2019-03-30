<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Minamalist_Blog
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

<aside class="col-md-4 blog-sidebar">
          <div class="about-us mb-3 bg-light rounded ">
            <h4 class="title"><span>About Us</span></h4>
            <img alt="About Us" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aboutUs.jpg">
            <p class="mb-0 py-3 text-center">Assalamua'alaikum! We are Mr&ampMrs Z, the <em>wanderphile</em> couple who also loves food and mosque-hopping around the world! Hope you readers have a great time reading our <em>traventure</em>!</p>
          </div>

          <div class="popular-p p-3">
            <h4><span>Popular Posts</span></h4>
            <ol class="list-unstyled">
              <li class="media"><img class="mr-3" alt="About Us" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aboutMe.jpg">
                  <div class="media-body"><a class="mt-0 mb-1" href="#">March 2014 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</a></div></li>
              <li class="media my-4"><img class="mr-3" alt="About Us" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aboutMe.jpg">
                  <div class="media-body"><a class="mt-0 mb-1" href="#">February 2014 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</a></div></li>
              <li class="media"><img class="mr-3" alt="About Us" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aboutMe.jpg">
                  <div class="media-body"><a class="mt-0 mb-1" href="#">January 2014 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</a></div></li>
              <li class="media my-4"><img class="mr-3" alt="About Us" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aboutMe.jpg">
                  <div class="media-body"><a class="mt-0 mb-1" href="#">December 2013 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</a></div></li>
              <li class="media"><img class="mr-3" alt="About Us" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aboutMe.jpg">
                  <div class="media-body"><a class="mt-0 mb-1" href="#">November 2013 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</a></div></li>
            </ol>
          </div>
            
          <div class="recent-p p-3">
            <h4><span>Recent Posts</span></h4>
              <ol class="recent-p-ol list-unstyled mb-0">
              <li class="media"><img class="mr-3" alt="About Us" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aboutMe.jpg">
                  <div class="media-body"><a class="mt-0 mb-1" href="#">March 2014 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</a></div></li>
              <li class="media my-4"><img class="mr-3" alt="About Us" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aboutMe.jpg">
                  <div class="media-body"><a class="mt-0 mb-1" href="#">February 2014 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</a></div></li>
              <li class="media"><img class="mr-3" alt="About Us" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aboutMe.jpg">
                  <div class="media-body"><a class="mt-0 mb-1" href="#">January 2014 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</a></div></li>
              </ol>
          </div>
            
          <div class="categories p-3">
            <h4><span>Catergories</span></h4>   
              <a class="btn btn-light btn-sm mb-1" href="#">Journey</a>
              <a class="btn btn-light btn-sm mb-1" href="#">Work</a>
              <a class="btn btn-light btn-sm mb-1" href="#">Lifestyle</a>
              <a class="btn btn-light btn-sm mb-1" href="#">Photography</a>
              <a class="btn btn-light btn-sm mb-1" href="#">Food</a>
              <a class="btn btn-light btn-sm mb-1" href="#">mosque</a>
          </div>
            
          <div class="subscribe p-3">
            <h4><span>Subscribe</span></h4>
            <p> Never want to miss out on our new stories and promotions? Then subscribe!</p>
            <p>No worries, we won't spam you!</p>
            <form>
                <div class="form-row align-items-center">
                    <div class="col-auto">
                      <label class="sr-only" for="inlineFormInput">Name</label>
                      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="E-mail address">
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn btn-secondary btn-sm mb-2">Subscribe</button>
                    </div>
              </div>
            </form>
          </div>
            
          <div class="p-3">
            <h4><span>Let's Connect</span></h4>
            <ol class="list-unstyled">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Twitter</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->
