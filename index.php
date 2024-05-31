<?php
get_header();
get_template_part('template-parts/menu');
?>

<main>
    <section>
        <div class="wrapper">
            <?php 
            if (have_posts()) : 
                while (have_posts()) : the_post(); ?>
                <div class="long-text">
                <?php 
                    the_title('<h2>', '</h2>');
                    the_date('', '<span class=\'date\'>', '</span>');
                    the_content(); 
                ?>
               </div>
            <?php  
                endwhile;
            else :
                echo "<p>Ops, nada a exibir por aqui!</p>";
            endif;
            ?>
        </div>
    </section>
</main>

<?php 
get_template_part('template-parts/footer');
get_footer(); 
?>