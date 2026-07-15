<div class="d-flex align-items-center">
    <div class="image image-mini me-3">
        <a href="<?php echo e(route('patients.show', $row->id)); ?>">
            <img src="<?php echo e($row->patientUser->image_url); ?>" alt="user" class="user-img image rounded-circle object-contain">
        </a>
    </div>
    <div class="d-flex flex-column">
        <a href="<?php echo e(route('patients.show', $row->id)); ?>" class="mb-1 text-decoration-none fs-6">
            <?php echo e($row->patientUser->full_name); ?>

        </a>
        <span class="fs-6"><?php echo e($row->patientUser->email); ?></span>
    </div>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/patients/columns/patient.blade.php ENDPATH**/ ?>