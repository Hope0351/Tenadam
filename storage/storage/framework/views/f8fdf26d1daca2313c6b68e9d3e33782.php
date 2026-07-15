<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::user()->hasRole('Patient|Doctor|Case Manager|Nurse|Receptionist|Lab Technician|Pharmacist')): ?>
    <?php if(Auth::user()->hasRole('Doctor')): ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->doctorUser->status): ?>
            <span class="badge bg-light-success"><?php echo e(__('messages.common.active')); ?> </span>
        <?php else: ?>
            <span class="badge bg-light-danger"><?php echo e(__('messages.common.de_active')); ?></span>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php else: ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->doctorUser->status): ?>
            <span class="badge bg-light-success"><?php echo e(__('messages.common.active')); ?> </span>
        <?php else: ?>
            <span class="badge bg-light-danger"><?php echo e(__('messages.common.de_active')); ?></span>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php else: ?>
    <label class="form-check form-switch">
        <input name="status" data-id="<?php echo e($row->id); ?>" class="form-check-input doctor-active-status" type="checkbox"
               value="1" <?php echo e($row->doctorUser->status == 0 ? '' : 'checked'); ?> >
        <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
    </label>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php /**PATH /home/z/my-project/hms/resources/views/doctors/templates/columns/status.blade.php ENDPATH**/ ?>