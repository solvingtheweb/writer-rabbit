<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
				<div class="post_top">


<?php
query_posts('category_name=left_blog&posts_per_page=');
while(have_posts()): the_post();
$mykey_values = get_post_custom_values('image');
?>


                	<div class="inner_post_lft">
                    	<a href="<?php the_permalink(); ?>"> <h6><span><?php the_time('j'); ?></span>  <?php the_title(); ?></h6></a>
                        <img src="<?php echo $mykey_values[0]; ?>" width="153" height="153" alt="">
                        <?php the_content('...read more'); ?> 
                        <div class="posted_in">
                        	<p>posted in <a href="#"><?php the_author(','); ?></a></p>
                        </div>
                    </div>

<?php
endwhile;
wp_reset_query();
?>

<?php
query_posts('category_name=right_blog&posts_per_page=');
while(have_posts()): the_post();
$mykey_values = get_post_custom_values('image');
?>

                    
                    <div class="inner_post_rht">
                    	<a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
                        <img src="<?php echo $mykey_values[0]; ?>" width="337" height="151" alt="">
                        <?php the_content('...read more'); ?> 
                        <div class="posted_in">
                        	<p>posted in <a href="#"><?php the_author(','); ?></a></p>
                        </div>
                    </div>
<?php
endwhile;
wp_reset_query();
?>


                    
                    <div class="clear"></div>
                </div>
                
                <div class="post_mid">

 <?php
$count=1;
query_posts('category_name=mid_blogfirst&posts_per_page=');
while(have_posts()): the_post();
$mykey_values = get_post_custom_values('image');
?>


                	<div class="post_mid_cont">
                    	<a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
                        <img src="<?php echo $mykey_values[0]; ?>" width="67" height="66" alt="">
                        <?php the_content('...read more'); ?> 
                        <div class="posted_in2">
                        	<p>posted in <a href="#"><?php the_author(','); ?></a></p>
                        </div>
                    </div>

<?php
$count++;
endwhile; ?>


<?php
$count=1;
query_posts('category_name=mid_blogmid&posts_per_page=');
while(have_posts()): the_post();
$mykey_values = get_post_custom_values('image');
?>


                	<div class="post_mid_cont">
                    	<a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
                        <img src="<?php echo $mykey_values[0]; ?>" width="67" height="66" alt="">
                        <?php the_content('...read more'); ?> 
                        <div class="posted_in2">
                        	<p>posted in <a href="#"><?php the_author(','); ?></a></p>
                        </div>
                    </div>

<?php
$count++;
endwhile; ?>

<?php
$count=1;
query_posts('category_name=mid_bloglast&posts_per_page=');
while(have_posts()): the_post();
$mykey_values = get_post_custom_values('image');
?>


                	<div class="post_mid_cont no_mar">
                    	<a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
                        <img src="<?php echo $mykey_values[0]; ?>" width="67" height="66" alt="">
                        <?php the_content('...read more'); ?> 
                        <div class="posted_in2">
                        	<p>posted in <a href="#"><?php the_author(','); ?></a></p>
                        </div>
                    </div>

<?php
$count++;
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
        <!--content end here-->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
