<?php global $root; montreal_header($page);?>
      
<div class="container bigpadding" style="background:url(<?php echo $root;?>/img/stripes.png);"></div>
  
<div class="container white bigpadding">
  <section class="row">
  	<h3 class="blacktext bold midbottommargin center"><?php echo t('ARTISTS PERFORMING'); ?></h3>
		<div class="five columns alpha centered blackhorizontal">
		</div>
		<div class="four columns alpha centered midtopmargin">
			<p class="center meta">
				<?php echo t('These artists will be on stage for the event.'); ?>
			</p>
		</div>
  </section>
         
  <section class="row bigtoppadding portfolio_item">
    
      <?php print render($title_prefix); ?>
      <?php print render($title_suffix); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
    
  </section>
</div>
 
<?php montreal_footer($page);?>