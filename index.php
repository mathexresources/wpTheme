<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php get_header(); ?>

<header class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4"><?php bloginfo('name'); ?></h1>
        <p class="lead"><?php bloginfo('description'); ?></p>
    </div>
</header>

<main class="container my-5">
    <?php if (have_posts()) : ?>
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h3 class="card-title"><?php the_title(); ?></h3>
                            <div class="card-text">
                                <?php the_content(); ?>
                                <?php wp_link_pages(['before' => '<div class="mt-3"><strong>Pages:</strong>', 'after' => '</div>']); ?>
                            </div>
                            <div class="mt-3">
                                <?php edit_post_link('Edit', '<small class="text-muted">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <nav class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <?php previous_posts_link('<span class="page-link">&laquo; Newer Posts</span>'); ?>
                </li>
                <li class="page-item">
                    <?php next_posts_link('<span class="page-link">Older Posts &raquo;</span>'); ?>
                </li>
            </ul>
        </nav>
    <?php else: ?>
        <div class="alert alert-warning text-center" role="alert">
            <p class="mb-0">No posts found. :(</p>
        </div>
    <?php endif; ?>
</main>

<?php wp_footer(); ?>

<footer class="bg-dark text-white text-center py-4">
    <?php get_footer(); ?>
    <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
</footer>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
