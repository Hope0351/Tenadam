<div class="d-flex align-items-center flex-wrap justify-content-end">
    <div class="<?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'ms-3' : 'me-3'); ?>">
        <input class="form-control custom-width" id="time_range" /><b class="caret"></b>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::user()->hasRole('Admin')): ?>
        <div class="d-flex align-items-center py-1">
            <a  href="<?php echo e(route('appointments.create')); ?>"
                class="btn btn-primary"><?php echo e(__('messages.appointment.new_appointment')); ?></a>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(Auth::user()->hasRole('Doctor')): ?>
        <div class="d-flex align-items-center py-1">
            <a  href="<?php echo e(route('appointments.excel')); ?>"
                class="btn btn-primary"><?php echo e(__('messages.common.export_to_excel')); ?></a>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(Auth::user()->hasRole('Patient|Receptionist')): ?>
        <div class="dropdown pt-1">
            <a href="#" class="btn btn-primary" id="dropdownMenuButton" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><?php echo e(__('messages.common.actions')); ?>

                <i class="fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li>
                    <a  href="<?php echo e(route('appointments.create')); ?>" class="dropdown-item  px-5">
                        <?php echo e(__('messages.appointment.new_appointment')); ?>

                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('appointments.excel')); ?>" class="dropdown-item  px-5" >
                        <?php echo e(__('messages.common.export_to_excel')); ?>

                    </a>
                </li>
            </ul>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/appointments/add-button.blade.php ENDPATH**/ ?>