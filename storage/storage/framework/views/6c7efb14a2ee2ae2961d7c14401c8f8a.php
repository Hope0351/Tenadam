<div>
    <a href="<?php echo e(route('patient.excel')); ?>"
        class="btn btn-primary <?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'ms-4' : 'me-4'); ?>" data-tirbo='false'>
        <i class="fas fa-file-excel"></i>
    </a>
    <a href="<?php echo e(route('patients.create')); ?>" class="btn btn-primary"><?php echo e(__('messages.patient.new_patient')); ?></a>
    </a>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/patients/add-button.blade.php ENDPATH**/ ?>