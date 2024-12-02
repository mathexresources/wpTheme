<?php get_header(); ?>
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
<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
