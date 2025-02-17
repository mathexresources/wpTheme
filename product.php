<?php
/*
Template Name: Product Page
*/
get_header();
?>

<div class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-6">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid" alt="<?php the_title(); ?>">
            <?php endif; ?>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <h1><?php the_title(); ?></h1>
            <div class="product-description">
                <?php the_content(); ?>
            </div>
            <a href="#" class="btn btn-primary mt-3">Koupit nyní</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>

