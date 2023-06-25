<?php
/* Template Name: Expert Page */
get_header();
$id = get_the_ID();
$page = get_post($id);
?>

<?php

/**Hero */

//hm_get_template_part('template-parts/hero', ['page' => $page]);

?>

<section class="bg-dark-blue">
    <div class="container text-white no-pad-gutters">
        <h3 class="text-uppercase mb-4"><?php echo $page->intro_title ?></h3>
        <div class="row">
            <div class="col-md-8 mb-4">
                <?php echo $page->post_content ?>
            </div>
        </div>
        <!--May implement the search and filter here-->
        <div class= "row">
            <div class="col-8">
                <h3>FILTERS</h3>
                    <div class="row">
                        <div class= "col-7">
                            <label for="Sectors">Sectors</label>
                            <select name="expert_sectors" id="expert_sectors">
                                <option value="technology">Technology Services &amp; Outsourcing</option>
                                <option value="software">Software</option>
                                <option value="management">Management Consulting</option>
                                <option value="engineering">Engineering Consulting &amp; Services</option>
                                <option value="human">Human Capital Management</option>
                                <option value="marketing">Marketing, Communications &amp; Information Services</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="expert_locations">Locations</label>
                            <select name="expert_locations" id="expert_locations">
                                <option value="newyork">New York, USA</option>
                                <option value="boston">Boston, USA</option>
                                <option value="london">London, UK</option>
                                <option value="paris">Paris, France</option>
                                <option value="australia">Australia and New Zealand</option>
                                <option value="asia">Asia Pacific</option>
                            </select>
                        </div>     
                    </div> 
            </div>
        
            <div class="col">
                <h3>SEARCH</h3>
                <div>
                <input type="text" placeholder="Search..">
                </div>
            </div>  
        </div>        
    </div>  
</section>

<!--May implement the experts profile list here-->

<section>
    <div class="container text-black no-pad-gutters">
        <div class="row">
            <div class="col"> 
                <?php $args = array(
                'post_type'=> 'expert',
                'post_status' => 'publish',
                'posts_per_page' => -1 // this will retrive all the post that is published 
                );?>

                <?php $result = new WP_Query( $args );?>
                <?php if ( $result-> have_posts() ) : ?>
                <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                <?php the_title(); ?>
                <?php echo '<div class="entry-content">';?>
                <?php the_content();?> 
                <?php echo '</div>';?>
                <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
            </div>
           
            <div class="col">
                <?php $args = array(
            'post_type'=> 'industry',
            'post_status' => 'publish',
            'posts_per_page' => -1 // this will retrive all the post that is published 
            );?>

            <?php $result2 = new WP_Query( $args );?>
            <?php if ( $result2-> have_posts() ) : ?>
            <?php while ( $result2->have_posts() ) : $result2->the_post(); ?>
            <?php the_title(); ?>
            <?php echo '<div class="entry-content">';?>
            <?php the_content();?> 
            <?php echo '</div>';?>
            <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
            </div>

            <div class="col">
                <?php $args = array(
            'post_type'=> 'location',
            'post_status' => 'publish',
            'posts_per_page' => -1 // this will retrive all the post that is published 
            );?>

            <?php $result3 = new WP_Query( $args );?>
            <?php if ( $result3-> have_posts() ) : ?>
            <?php while ( $result3->have_posts() ) : $result3->the_post(); ?>
            <?php the_title(); ?>
            <?php echo '<div class="entry-content">';?>
            <?php the_content();?> 
            <?php echo '</div>';?>
            <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
            </div>
            </div>
            
        </div>
    </div>
</section>    



<?php
get_footer();
?>