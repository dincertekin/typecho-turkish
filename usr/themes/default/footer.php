<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('<a href="https://typecho.org">Typecho</a> ile geliştirildi'); ?>.
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>
