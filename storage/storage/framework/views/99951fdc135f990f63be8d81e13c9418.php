<div>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($component->debugIsEnabled()): ?>
        <p><strong><?php echo app('translator')->get('Debugging Values'); ?>:</strong></p>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(! app()->runningInConsole()): ?>
            <div class="mb-4"><?php dump((new \Rappasoft\LaravelLivewireTables\DataTransferObjects\DebuggableData($component))->toArray()); ?></div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/vendor/livewire-tables/includes/debug.blade.php ENDPATH**/ ?>