<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>


 <!--content start here-->
        <div class="content">
        	<!--left content start here-->
            <div class="lft_content">

<h1 class="page-title"><?php
					printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>

				<?php  $category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';
while(have_posts()): the_post();
$mykey_values = get_post_custom_values('image');
?>



            	<div class="life_style">
                	<div class="img"><img src="<?php echo $mykey_values[0]; ?>" width="419" height="315" alt=""></div>
                   	<h3><?php the_title(); ?></h3>
                    <h6><?php the_time('j'); ?></h6>
                    	<?php the_content(); ?>
                    
                    <div class="clear"></div>
                </div>
                
                <div class="share">
                	<h5>Share it!</h5>
                     <ul>
                    	<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4ea6a6a6136f2f40"></script>
<!-- AddThis Button END -->
                    </ul>


<?php
endwhile; ?>








                    
                    <div class="clear"></div>
                </div>

                
                <div class="post_btm">
                	<div class="catagories">
                    	<h5>Categories</h5>
                    	<ul>
                        	<li><a href="#"><?php dynamic_sidebar('Third Footer Widget Area	'); ?></a></li>
	
							
                        </ul>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="about_web">

 <?php
query_posts('category_name=slogan&posts_per_page=3');
while(have_posts()): the_post();
?>


                    	<h5><?php the_title(); ?></h5>
                        <ul>

							<?php the_content(); ?>

                        </ul>

<?php
endwhile; 

?>

                        	
                        
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>


            <!--left content end here-->
            
            <!--right content start here-->
            <div class="rht_content">
            	<div class="key_word">


<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">

<span><input type="txt" name="s" id="s" class="key_txt_box" value="" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Search blog':this.value;">
<input type="submit" id="searchsubmit" value="Search" class="search_button"  / > </span>
    

</form>



                	
                </div>
                
                <div class="quotes">
                	<?php dynamic_sidebar('QUIPS_QUOTES'); ?>
                    <div class="clear"></div>
                </div>

                <div class="prompt">
                	<?php dynamic_sidebar('PROMPt'); ?>
                    <div class="clear"></div>
                </div>
                
                <div class="tag_cloud">
                	<h5>TAG CLOUD</h5>
                    <p><?php dynamic_sidebar('tag_cloud '); ?></p>
                </div>
                
                <div class="links">
                	<h5>LINKS WE FANCY</h5>
                    <ul>

<?php
$count=1;
query_posts('category_name=posts&posts_per_page=');
while(have_posts()): the_post();

?>

                    	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

<?php
$count++;
endwhile; ?>


                                     
                    </ul>
                    <div class="clear"></div>
                </div>

                
            </div>
            <!--right content end here-->
            <div class="clear"></div>
        </div>
<div class="clear"></div>


        <!--content end here-->

        <!--content end here-->
		

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
