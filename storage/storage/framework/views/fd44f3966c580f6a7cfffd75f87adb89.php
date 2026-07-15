<div id="add_beds_modal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><?php echo e(__('messages.bed.new_bed')); ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php echo e(Form::open(['id' => 'addNewBedsForm'])); ?>

            <?php echo e(Form::hidden('currency_symbol', getCurrentCurrency(), ['class' => 'currencySymbol'])); ?>

            <div class="modal-body">
                <div class="alert alert-danger d-none hide" id="validationErrorsBox"></div>
                <div class="row">
                    <div class="form-group col-md-12 mb-5">
                        <?php echo e(Form::label('name', __('messages.bed_assign.bed') . ':', ['class' => 'form-label'])); ?>

                        <span class="required"></span>
                        <?php echo e(Form::text('name', null, ['id'=>'BedName','class' => 'form-control','required','placeholder'=>__('messages.bed_assign.bed')])); ?>

                    </div>
                    <div class="form-group col-md-12 mb-5">
                        <?php echo e(Form::label('bed_type', __('messages.bed.bed_type') . ':', ['class' => 'form-label'])); ?>

                        <span class="required"></span>
                        <?php echo e(Form::select('bed_type', $bedTypes, null, ['class' => 'form-select', 'required', 'id' => 'bedType', 'placeholder' => __('messages.bed.select_bed_type'), 'data-control' => 'select2'])); ?>

                    </div>
                    <div class="form-group col-md-12 mb-5">
                        <?php echo e(Form::label('charge', __('messages.bed.charge').(':'),['class' => 'form-label required'])); ?>

                        <?php echo e(Form::text('charge', null, ['id'=>'bedCharges','class' => 'form-control price-input','required','placeholder'=>__('messages.bed.charge')])); ?>

                    </div>
                    <div class="form-group col-md-12">
                        <?php echo e(Form::label('description', __('messages.bed.description').(':'),['class' => 'form-label'])); ?>

                        <?php echo e(Form::textarea('description', '', ['id'=>'BedDescription','class' => 'form-control', 'rows' => 4,'placeholder'=>__('messages.bed_assign.description')])); ?>

                    </div>
                </div>
            </div>
            <div class="modal-footer pt-0">
                <?php echo e(Form::button(__('messages.common.save'), ['type' => 'submit', 'class' => 'btn btn-primary m-0', 'id' => 'BedSaveBtn', 'data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?></button>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/beds/create_modal.blade.php ENDPATH**/ ?>