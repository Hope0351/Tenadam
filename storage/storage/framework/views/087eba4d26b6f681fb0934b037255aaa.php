<?php foreach ((['component']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>

<?php ($attributes = $attributes->merge(['wire:key' => 'empty-message-' . $component->getId()])); ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($component->isTailwind()): ?>
    <tr <?php echo e($attributes); ?>>
        <td colspan="<?php echo e($component->getColspanCount()); ?>">
            <div class="flex justify-center items-center space-x-2 dark:bg-gray-800">
                <span
                    class="font-medium py-8 text-gray-400 text-lg dark:text-white"><?php echo e(__('messages.common.no_data_available')); ?></span>
            </div>
        </td>
    </tr>
<?php elseif($component->isBootstrap()): ?>
    <tr <?php echo e($attributes); ?>>
        <td colspan="<?php echo e($component->getColspanCount()); ?>">
            <div class="text-center">
                <?php echo e(__('pagination.no_data')); ?>

            </div>
        </td>
    </tr>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH /home/z/my-project/hms/resources/views/vendor/livewire-tables/components/table/empty.blade.php ENDPATH**/ ?>