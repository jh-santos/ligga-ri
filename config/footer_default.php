<!-- requisitos -->
<script>
    var homeUrl = '<?php echo home_url(); ?>';
</script>
<?php wp_footer(); ?>
<?php if (get_field('jquery_custom_footer')) : ?>
    <!-- script custom footer -->
    <script async>
        $(document).ready(function() {
            <?php the_field('jquery_custom_footer'); ?>
        });
    </script>
<?php endif; ?>
</body>

</html>