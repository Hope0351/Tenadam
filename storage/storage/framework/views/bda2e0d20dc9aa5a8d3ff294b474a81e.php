<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::user()->hasRole('Lab Technician')): ?>
    <div class="dropdown">
        <a href="javascript:void(0)" class="btn btn-primary" id="dropdownMenuButton" data-bs-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false"><?php echo e(__('messages.common.actions')); ?>

            <i class="fa fa-chevron-down"></i>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li>
                <a href="<?php echo e(route('pathology.test.create')); ?>"
                   class="dropdown-item  px-5"><?php echo e(__('messages.pathology_test.new_pathology_test')); ?></a>
            </li>
            <li>
                <a href="<?php echo e(route('pathology.tests.excel')); ?>"
                    class="dropdown-item  px-5"><?php echo e(__('messages.common.export_to_excel')); ?></a>
            </li>
        </ul>
    </div>
<?php else: ?>
    <a href="<?php echo e(route('pathology.test.create')); ?>"
       class="btn btn-primary"><?php echo e(__('messages.pathology_test.new_pathology_test')); ?></a>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH /home/z/my-project/hms/resources/views/pathology_tests/add-button.blade.php ENDPATH**/ ?>