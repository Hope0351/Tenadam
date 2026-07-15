<div id="edit_bed_types_modal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><?php echo e(__('messages.bed_type.edit_bed_type')); ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <?php echo e(Form::open(['id'=>'BedTypeEditForm'])); ?>

            <div class="modal-body">
                <div class="alert alert-danger d-none hide" id="editValidationErrorsBox"></div>
                <?php echo e(Form::hidden('bed_type_id',null,['id'=>'bedTypeId'])); ?>

                <div class="row">
                    <div class="form-group col-sm-12 mb-5">
                        <?php echo e(Form::label('title', __('messages.bed.bed_type').(':'), ['class' => 'form-label'])); ?>

                        <span class="required"></span>
                        <?php echo e(Form::text('title', null, ['id'=>'BedTypeEditTitle','class' => 'form-control','required', 'placeholder' => __('messages.bed.bed_type')])); ?>

                    </div>
                    <div class="form-group col-sm-12">
                        <?php echo e(Form::label('description', __('messages.bed_type.description').(':'),['class' => 'form-label'])); ?>

                        <?php echo e(Form::textarea('description', '', ['class' => 'form-control', 'rows' => 3, 'id' => 'BedTypeEditDescription', 'placeholder' => __('messages.bed_type.description')])); ?>

                    </div>

                </div>
            </div>
            <div class="modal-footer pt-0">
                <?php echo e(Form::button(__('messages.common.save'), ['type' => 'submit','class' => 'btn btn-primary m-0','id' => 'BedTyeBtnEditSave','data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?></button>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/bed_types/edit_modal.blade.php ENDPATH**/ ?>