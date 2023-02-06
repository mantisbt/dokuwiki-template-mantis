<?php
/**
 * Template footer, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** FOOTER ********** -->
<footer id="dokuwiki__footer"><div class="pad">
    <div class="buttons">
        <?php
            $target = ($conf['target']['extern']) ? 'target="'.$conf['target']['extern'].'"' : '';
        ?>
        <a href="https://dokuwiki.org/" title="Driven by DokuWiki" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-dw.png" width="80" height="15"
            alt="Driven by DokuWiki" /></a>
    </div>

    <?php tpl_includeFile('footer.html'); ?>
</div></footer><!-- /footer -->
