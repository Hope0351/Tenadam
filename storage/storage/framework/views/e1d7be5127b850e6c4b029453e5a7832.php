<div class="footer py-4 d-flex flex-lg-column position-sticky bottom-0">
    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <div class="text-muted">
            <span><?php echo e(__('messages.footer.all_rights_reserved')); ?></span>
            <span class="text-muted fw-bold me-1">&copy <?php echo e(date('Y')); ?></span>
            <a  href="<?php echo e(url('/')); ?>" class="text-hover-primary"><?php echo e(config('app.name')); ?></a>
        </div>
        <div class="text-muted order-2 order-md-1">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(env('VERSION_NUMBER')): ?>
                v<?php echo e(getCurrentVersion()); ?>

            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/layouts/footer.blade.php ENDPATH**/ ?>