<div id="add_accounts_modal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><?php echo e(__('messages.account.new_account')); ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <?php echo e(Form::open(['id'=>'addAccountForm'])); ?>

            <div class="modal-body">
                <div class="alert alert-danger d-none hide" id="validationErrorsBox"></div>
                <div class="row">
                    <div class="form-group col-sm-12 mb-5">
                        <?php echo e(Form::label('name', __('messages.account.account').(':'), ['class' => 'form-label'])); ?>

                        <span class="required"></span>
                        <?php echo e(Form::text('name', null, ['class' => 'form-control','required','placeholder'=>__('messages.account.account')])); ?>

                    </div>
                    <div class="form-group col-sm-12 mb-5">
                        <?php echo e(Form::label('description', __('messages.account.description').(':'),['class' => 'form-label'])); ?>

                        <?php echo e(Form::textarea('description', null, ['class' => 'form-control', 'rows' => 4,'placeholder'=>__('messages.account.description')])); ?>

                    </div>
                    <div class="form-group mb-7 d-flex align-items-center">
                        <?php echo e(Form::label('status', __('messages.account.status').(':'),['class' => '"form-label me-5 mb-0 mb-1'])); ?>

                        <div class="form-check form-switch mb-0">
                            <input name="status" value="1" class="form-check-input" type="checkbox"
                                   id="allowmarketing" checked="checked">
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center">
                        <?php echo e(Form::label('type', __('messages.account.type').(':'),['class' => 'form-label me-5 mb-1'])); ?>

                        <div class="d-flex align-items-center mt-1">
                            <div class="form-check me-10 mb-0">
                                <label class="form-label" for="createDebitAccount"><?php echo e(__('messages.account.debit')); ?></label>&nbsp;&nbsp;
                                <?php echo e(Form::radio('type', '1', false, ['class' => 'form-check-input', 'id' => 'createDebitAccount'])); ?> &nbsp;
                            </div>
                            <div class="form-check me-10 mb-0">
                                <label class="form-label" for="createCreditAccount"><?php echo e(__('messages.account.credit')); ?></label>
                                <?php echo e(Form::radio('type', '2', true, ['class' => 'form-check-input', 'id' => 'createCreditAccount'])); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pt-0">
                <?php echo e(Form::button(__('messages.common.save'), ['type' => 'submit','class' => 'btn btn-primary m-0','id' => 'btnSave','data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?></button>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/accounts/add_modal.blade.php ENDPATH**/ ?>