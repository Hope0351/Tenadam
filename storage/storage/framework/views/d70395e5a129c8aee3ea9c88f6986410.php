<div class="dropdown">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::user()->hasRole('Pharmacist')): ?>
    <a href="#" class="btn btn-primary" id="dropdownMenuButton" data-bs-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false"><?php echo e(__('messages.common.actions')); ?>

        <i class="fa fa-chevron-down"></i>
    </a>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li>
            <a href="<?php echo e(route('medicines.create')); ?>"
               class="dropdown-item  px-5"><?php echo e(__('messages.medicine.new_medicine')); ?></a>
        </li>
        <li>
            <a href="<?php echo e(route('medicines.excel')); ?>"
               class="dropdown-item  px-5"><?php echo e(__('messages.common.export_to_excel')); ?></a>
        </li>
    </ul>
    <?php else: ?>
        <a href="<?php echo e(route('medicines.create')); ?>"
           class="btn btn-primary"><?php echo e(__('messages.medicine.new_medicine')); ?></a>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/medicines/add-button.blade.php ENDPATH**/ ?>