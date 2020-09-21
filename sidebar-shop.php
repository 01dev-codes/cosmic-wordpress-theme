<sidebar class="sidebar">
    <h2 class="title">Categorias</h2>

    <?php
        $tax = $wp_query->get_queried_object();
        $terms = get_terms( 'product_cat' );

        echo '<ul class="list">';
        foreach ( $terms as $term ) {
            $class = $tax->name === $term->name ? 'active' : ''; // assign this class if we're on the same category page as $term->name
            echo '<li><a href="' . get_term_link( $term ) . '" class="' . $class . '"><i class="fa fa-star"></i> ' . $term->name . '</a></li>';
        }
        echo '</ul>';
    ?>
</sidebar>