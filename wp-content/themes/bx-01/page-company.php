<?php get_header();?>
<div class="o-box o-box--transparent o-center u-bg-qua u-pb-2xl">
  <h1 class="c-heading u-text-weight-b"><?php the_title();?></h1>
  <dl class="o-sidebar o-sidebar--table">
    <dt class="o-box o-box--thead c-content-l u-bg-secondary">屋号/商号</dt>
    <dd class="o-box o-box--tbody c-content-l">
      <?php echo get_vars('company', 'name');?>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary">所在地</dt>
    <dd class="o-box o-box--tbody c-content-l">
      〒<span
        class="u-font-en-con"><?php echo get_vars('company', 'zip');?></span>
      <?php echo get_vars('company', 'address');?>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary">設立</dt>
    <dd class="o-box o-box--tbody c-content-l">
      <?php echo get_vars('company', 'birth');?>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary">代表取締役</dt>
    <dd class="o-box o-box--tbody c-content-l">
      <?php echo get_vars('company', 'owner');?>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary">URL</dt>
    <dd class="o-box o-box--tbody c-content-l">
      <a class="c-text-link"
        href="<?php echo get_vars('company', 'url');?>"
        target="_blank" rel="noopener"><span
          class="u-font-en-con"><?php echo get_vars('company', 'url');?></span></a>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary">事業内容</dt>
    <dd class="o-box o-box--tbody c-content-l">
      <?php echo get_service_list();?>
    </dd>
  </dl>
</div>
<?php get_footer();?>
