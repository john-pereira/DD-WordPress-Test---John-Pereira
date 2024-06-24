<?php
/**
 * The template for displaying the custom-post-type: deer_test
 *
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

while (have_posts()):
    the_post();
    ?>

                        <main id="content" <?php post_class('site-main'); ?>>

                            <div class="page-content">
                                <?php the_content(); ?>

                                <!-- ACF fields-->
                                <div class="acf-fields">
                                    <h2>Deer Test Details</h2>
                                    <p><strong>Start Date:</strong> <?php the_field('start_date'); ?></p>
                                    <p><strong>End Date:</strong> <?php the_field('end_date'); ?></p>
                                    <p><strong>Description:</strong> <?php the_field('description'); ?></p>
                    
                                    <?php
                                    $cover_image = get_field('cover_image');
                                    if ($cover_image):
                                        ?>
                                                        <div class="cover-image">
                                                            <img src="<?php echo esc_url($cover_image['url']); ?>" alt="<?php echo esc_attr($cover_image['alt']); ?>" />
                                                        </div>
                                    <?php endif; ?>

                                    <?php
                                    $application_link = get_field('aplication_link');
                                    if ($application_link):
                                        ?>
                                                        <p><strong>Application Link:</strong> <a href="<?php echo esc_url($application_link['url']); ?>" target="<?php echo esc_attr($application_link['target']); ?>"><?php echo esc_html($application_link['title']); ?></a></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </main>

                <?php
endwhile;

get_footer();
?>
