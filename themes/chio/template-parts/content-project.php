<div type="button" class="w-full px-3 lg:px-8 py-6 text-left cursor-pointer" @click="selected !== <?= $args['index'];?> ? selected = <?= $args['index'];?> : selected = null">
    <div class="flex items-center justify-between">
        <h3 class="font-display italic font-bold text-white uppercase text-[28px] lg:text-[38px]">
            * <?php the_title();?>		
        </h3>
        <span class="text-[12px] lg:text-[16px] font-display font-bold text-white">
            <?php echo get_the_date('Y');?>
        </span>
    </div>
</div>

<div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container<?= $args['index'];?>" x-bind:style="selected == <?= $args['index'];?> ? 'max-height: ' + $refs.container<?= $args['index'];?>.scrollHeight + 'px' : ''">
    <div class="grid grid-cols-1 lg:grid-cols-3 items-bottom gap-[35px] px-8 py-6">
        <div class="col-span-1">
            <div class="w-full relative mx-auto h-auto overflow-hidden rounded-lg ">
                <?php the_post_thumbnail('full', ['class' => 'h-[380px] object-center object-cover w-full h-auto relative z-0 rounded-lg transition-all duration-300 hover:scale-110 rounded-[15px]']);?>
            </div>
        </div>
        <div class="col-span-2">
            <h3 class="font-display font-bold text-white text-[18px] lg:text-[28px]">
                <?php the_title();?>
            </h3>
            <p class="text-lg text-white mb-3">
                <?php wp_trim_words(get_the_excerpt(), 20, '...');?>
            </p>
            <div class="mk-simple-button text-white">
                <a href="">    
                    <?php esc_attr_e('Chi tiết', 'chio')?>
                    <svg class="swm-svg--arrow mk-simple-button-arrow fill-white" enable-background="new 0 0 32 32" height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m3 17.5h22.379l-10.44 10.439c-.586.585-.586 1.536 0 2.121.293.294.677.44 1.061.44s.768-.146 1.061-.439l13-13c.586-.585.586-1.536 0-2.121l-13-13c-.586-.586-1.535-.586-2.121 0-.586.585-.586 1.536 0 2.121l10.439 10.439h-22.379c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5z"></path></svg>
                </a>
            </div>
        </div>
    </div>
</div>