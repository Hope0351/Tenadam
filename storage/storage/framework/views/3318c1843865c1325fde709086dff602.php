<div class="d-flex align-items-center mt-2">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(empty($row->user->blood_group)): ?>
        <?php echo e(__('messages.common.n/a')); ?>

    <?php else: ?>
        <span class="badge bg-light-success"><?php echo e($row->user->blood_group); ?></span>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/patients/columns/blood_group.blade.php ENDPATH**/ ?>