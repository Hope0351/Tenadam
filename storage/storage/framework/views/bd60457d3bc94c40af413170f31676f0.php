<div>
    <a href="<?php echo e(route('doctors.excel')); ?>"
    class="btn btn-primary <?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'ms-4' : 'me-4'); ?>"  >
    <i class="fas fa-file-excel"></i>
    </a>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::user()->hasRole('Admin|Receptionist')): ?>
        <a href="<?php echo e(route('doctors.create')); ?>"
        class="btn btn-primary"><?php echo e(__('messages.doctor.new_doctor')); ?></a>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/doctors/add-button.blade.php ENDPATH**/ ?>