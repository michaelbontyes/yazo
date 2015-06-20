<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package theme
 * 
 * Template Name: Homepage
 * 
 * 
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
            


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>
			
			<div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="https://unsplash.imgix.net/photo-1414924347000-9823c338079b?q=75&fm=jpg&s=0fa6db3cdc65e50c111575043fad4b5c">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
                  <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
                  <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
              </div>
              

      <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
      <div class="row center">
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
      </div>
      <div class="row center">
      
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">  <i class="mdi-av-recent-actors"></i></a>
      </div>
      <br><br>


      <div id="masonry-grid" class="row">
        <div class="col s6 m4">
          <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="https://unsplash.imgix.net/photo-1414924347000-9823c338079b?q=75&fm=jpg&s=0fa6db3cdc65e50c111575043fad4b5c">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
                  <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
                  <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
              </div>
        </div>
        <div class="col s6 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://unsplash.imgix.net/photo-1414924347000-9823c338079b?q=75&fm=jpg&s=0fa6db3cdc65e50c111575043fad4b5c">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href='#'>This is a link</a>
            </div>
          </div>
        </div>
        <div class="col s6 m4">
          <div class="card">
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href='#'>This is a link</a>
            </div>
          </div>
        </div>
        <div class="col s6 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://unsplash.imgix.net/photo-1414924347000-9823c338079b?q=75&fm=jpg&s=0fa6db3cdc65e50c111575043fad4b5c">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href='#'>This is a link</a>
            </div>
          </div>
        </div>
        <div class="col s6 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://unsplash.imgix.net/photo-1414924347000-9823c338079b?q=75&fm=jpg&s=0fa6db3cdc65e50c111575043fad4b5c">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href='#'>This is a link</a>
            </div>
          </div>
        </div>
        <div class="col s6 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://unsplash.imgix.net/photo-1414924347000-9823c338079b?q=75&fm=jpg&s=0fa6db3cdc65e50c111575043fad4b5c">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href='#'>This is a link</a>
            </div>
          </div>
        </div>
      </div>
<input type="date" class="datepicker">

  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
    </form>
  </div>
        <div class="valign-wrapper">
  <h5 class="valign">This should be vertically aligned</h5>
</div>

 <div class="slider">
    <ul class="slides">
      <li>
        <img src="https://unsplash.imgix.net/photo-1414924347000-9823c338079b?q=75&fm=jpg&s=0fa6db3cdc65e50c111575043fad4b5c"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
        <li>
        <img src="https://unsplash.imgix.net/photo-1414924347000-9823c338079b?q=75&fm=jpg&s=0fa6db3cdc65e50c111575043fad4b5c"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
