<div class="dropdown">
    <button class="btn btn-primary" type="button"
            id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo e(__('messages.common.actions')); ?>

        <i class="fas fa-chevron-down"></i>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li>
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#add_beds_modal"
               class="dropdown-item"><?php echo e(__('messages.bed.bed')); ?></a>
        </li>
        <li>
            <a href="<?php echo e(route('create.bulk.beds')); ?>" class="dropdown-item">
                <?php echo e(__('messages.bed.new_bulk_bed')); ?>

            </a>
        </li>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::user()->hasRole('Nurse')): ?>
            <li>
                <a href="<?php echo e(route('beds.excel')); ?>"
                   class="dropdown-item"
                   ><?php echo e(__('messages.common.export_to_excel')); ?></a>
            </li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </ul>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/beds/component/add.blade.php ENDPATH**/ ?>