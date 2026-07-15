<div class="d-flex align-items-center">
    <a href="<?php echo e(route('patients.edit',$row->id)); ?>" title="<?php echo e(__('messages.common.edit')); ?>"
       class="btn px-1 text-primary fs-3 ps-0">
        <i class="fa-solid fa-pen-to-square"></i>
    </a>
    <a href="javascript:void(0)" title="<?php echo e(__('messages.common.delete')); ?>" data-id="<?php echo e($row->id); ?>"
       class="delete-patient-btn btn px-1 text-danger fs-3 pe-0 <?php echo e(getCurrentLoginUserLanguageName()=='ar' ? 'me-2' : ''); ?>" wire:key="<?php echo e($row->id); ?>">
        <i class="fa-solid fa-trash"></i>
    </a>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/patients/action.blade.php ENDPATH**/ ?>