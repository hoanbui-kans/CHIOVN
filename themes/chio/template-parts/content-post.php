<div class="post">
    <div class="post-thumbnail relative mb-3">
        <div class="calendar z-10 text-center text-white font-semibold font-display absolute top-5 right-5 p-3 rounded-[8px] bg-black/50 backdrop-blur-md">
            <span class="date block text-[14px] uppercase">
                <?php echo get_the_date('d')?>
            </span>
            <span class="month block text-[10px] uppercase">
                <?php echo get_the_date('M')?>
            </span>
        </div>
        <div class="w-full relative mx-auto h-auto overflow-hidden rounded-lg p-3">
            <?php the_post_thumbnail('full', ['class' => 'w-full h-auto relative z-0 rounded-lg transition-all duration-300 hover:scale-110 rounded-[15px]']);?>
        </div>
    </div>
    <div class="post-content p-3 text-white">
        <div class="post-meta mb-3">
            <a href="">Visuals</a>
            <span class="mk-post-meta-separator"></span>
            <a href=""><?php the_author();?></a>
            <span class="mk-post-meta-separator"></span>
        </div>
       <a href="<?php the_permalink();?>">
            <h3 class="font-display font-semibold text-[24px] mb-5">
                <?php the_title();?>
            </h3>
       </a>
        <div class="mk-simple-button text-white">
            <a href="">    
                <?php esc_attr_e('Chi tiết');?>
                <svg class="swm-svg--arrow mk-simple-button-arrow fill-white" enable-background="new 0 0 32 32" height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m3 17.5h22.379l-10.44 10.439c-.586.585-.586 1.536 0 2.121.293.294.677.44 1.061.44s.768-.146 1.061-.439l13-13c.586-.585.586-1.536 0-2.121l-13-13c-.586-.586-1.535-.586-2.121 0-.586.585-.586 1.536 0 2.121l10.439 10.439h-22.379c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5z"></path></svg>
            </a>
        </div>
    </div>
</div>