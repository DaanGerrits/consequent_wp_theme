<?php get_header(); ?>
<section id="content">
        <header id="h1title">
         <div class="container title-container">
             <h1>Pagina niet gevonden</h1>
         </div>
        </header>        

    
<div id="maincontent" class="container">
	<div class="row">
    <div class="col-sm-8 contentarea">
     
		<p>De pagina waar u opzoek was, bestaat niet (meer). Klik <a href="<?php echo site_url(); ?>">hier</a> om terug te keren naar de homepage.


	</div>
                   
                    <div class="col-sm-4">
						<?php dynamic_sidebar( 'Rechterkolom' ); ?>
                    </div>
            	</div>
            </div>
 </section>
<?php get_footer(); ?>