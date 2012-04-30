<?php
/**
 * Template Name: about
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
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

<?php
while(have_posts()): the_post();
?>



            	<div class="life_style">                	
                   	<h3><?php the_title(); ?></h3>                   
                    	<?php the_content(); ?>
                    
                    <div class="clear"></div>
                </div>
                
               <!-- <div class="share">
                	<h5>Share it!</h5>
                     <ul>
                    	<!-- AddThis Button BEGIN -->
<!--<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4ea6a6a6136f2f40"></script>
<!-- AddThis Button END -->
                    <!--</ul>
                    <div class="clear"></div>
                </div>-->

 <?php
endwhile; ?>

                
               
                
                    <!--<div class="comment_post">
                    	<div class="comment_post_top">
                        	<span><img src="<?php bloginfo('template_url'); ?>/images/comm_post_img.jpg" width="45" height="45" alt=""></span>
                            <h4><a href="#">Peter Rabbit</a> <span>at 7:45pm on November 2nd, 2011</span></h4>
                            <div class="clear"></div>
                        </div>
                        <p>PBR jean shorts aesthetic, fanny pack fap homo leggings viral pitchfork brunch four loko. Irony before they sold out master cleanse, farm-to-table keytar tumblr twee PBR stumptown locavore. Gentrify jean shorts viral, cred pitchfork tofu brooklyn fanny pack helvetica. Gluten-free tumblr keffiyeh yr, master cleanse fanny pack irony twee mlkshk artisan craft beer jean shorts shoreditch you probably haven't heard of them carles.</p>
                    </div>
                    <div class="sub_post">
                    	<div class="sub_post_top">
                        	<span><img src="<?php bloginfo('template_url'); ?>/images/comm_post_img.jpg" width="45" height="45" alt=""></span>
                            <h4><a href="#">Bugs Bunny</a> <span>at 7:48pm on November 2nd, 2011</span></h4>
                            <div class="clear"></div>
                        </div>
                        <p><a href="#">@Peter Rabbit</a> Gentrify jean shorts viral, cred pitchfork tofu brooklyn fanny pack helvetica. Gluten-free tumblr keffiyeh yr, master cleanse fanny pack irony twee mlkshk artisan craft beer jean shorts shoreditch you probably haven't heard of them carles.</p>
                    </div>-->
                    


                
                <!--<div class="leave_comm">
                	<h6>Leave a comment</h6>
                    <p><label>Name</label><input name="" type="text" class="txtbox"></p>
                    <p><label>Email</label><input name="" type="text" class="txtbox"></p>
                    <p><label>Website<span>{optional}</span></label><input name="" type="text" class="txtbox"></p>
                    <p><label>Comment</label><textarea name="" cols="2" rows="2" class="txtarea"></textarea></p>
                    <p><label></label><input name="" type="button" class="submit"></p>
                </div>-->
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

<?php get_footer(); ?>
