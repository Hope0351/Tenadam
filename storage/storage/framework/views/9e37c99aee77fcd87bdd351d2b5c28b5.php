<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::user()->hasRole('Doctor|Case Manager|Pharmacist|Lab Technician')): ?>
    <div class="d-flex align-items-center">
        <div class="image image-circle image-mini me-3">
            <a href="<?php echo e(url('employee/doctor') . '/' .$row->id); ?>">
                <div>
                    <img src="<?php echo e($row->doctorUser->image_url); ?>" alt=""
                         class="user-img rounded-circle object-contain" height="35" width="35">
                </div>
            </a>
        </div>
        <div class="d-flex flex-column">
            <a href="<?php echo e(url('employee/doctor') . '/' . $row->id); ?>"
               class="text-decoration-none mb-1"><?php echo e($row->doctorUser->full_name); ?></a>
            <span><?php echo e($row->doctorUser->email); ?></span>
        </div>
    </div>
<?php elseif(Auth::user()->hasRole('Patient')): ?>
    <div class="d-flex align-items-center">
        <div class="image image-circle image-mini me-3">
                <div>
                    <img src="<?php echo e($row->doctorUser->image_url); ?>" alt=""
                         class="user-img rounded-circle object-contain" height="35" width="35">
                </div>
        </div>
        <div class="d-flex flex-column">
            <?php echo e($row->doctorUser->full_name); ?>

            <span><?php echo e($row->doctorUser->email); ?></span>
        </div>
    </div>
<?php else: ?>
    <div class="d-flex align-items-center">
        <div class="image image-circle image-mini me-3">
            <a href="<?php echo e(route('doctors_show',$row->id)); ?>">
                <div>
                    <img src="<?php echo e($row->doctorUser->image_url); ?>" alt=""
                         class="user-img rounded-circle object-contain" height="35" width="35">
                </div>
            </a>
        </div>
        <div class="d-flex flex-column">
            <a href="<?php echo e(route('doctors_show',$row->id)); ?>"
               class="text-decoration-none mb-1"><?php echo e($row->doctorUser->full_name); ?></a>
            <span><?php echo e($row->doctorUser->email); ?></span>
        </div>
    </div>

<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH /home/z/my-project/hms/resources/views/doctors/templates/columns/name.blade.php ENDPATH**/ ?>