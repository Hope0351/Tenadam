<div class="d-flex align-items-center mt-2">
    <label class="form-check form-switch form-switch-sm">
        <input name="status" data-id="<?php echo e($row->id); ?>" class="form-check-input patientStatus" type="checkbox"
               value="1" <?php echo e($row->patientUser->status == 0 ? '' : 'checked'); ?> >
        <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
    </label>    
</div>

<?php /**PATH /home/z/my-project/hms/resources/views/patients/columns/status.blade.php ENDPATH**/ ?>