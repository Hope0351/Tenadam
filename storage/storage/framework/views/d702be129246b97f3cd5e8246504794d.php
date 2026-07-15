<div id="changePasswordModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h2><?php echo e(__('messages.change_password.change_password')); ?></h2>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php echo e(Form::open(['class' => 'form', 'id' => 'changePasswordForm'])); ?>

            <div class="modal-body">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <div class="alert alert-danger d-none hide" id="editValidationErrorsBox"></div>
                <?php echo e(Form::hidden('user_id', null, ['id' => 'pfUserId'])); ?>

                <?php echo e(Form::hidden('is_active', 1)); ?>

                <?php echo csrf_field(); ?>
                <div class="row">

                    <div class="col-12 mb-5">
                        <div class="mb-1">
                            <?php echo e(Form::label('current password', __('messages.change_password.current_password') . ':', ['class' => 'form-label'])); ?>

                            <span class="required"></span>
                            <div class="position-relative mb-3">
                                <input class="form-control" id="pfCurrentPassword"
                                       type="password"
                                       name="password_current" required placeholder="<?php echo e(__('messages.change_password.current_password')); ?>">
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('password_current')); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-5">

                        <div class="mb-1">
                            <?php echo e(Form::label('current password', __('messages.change_password.new_password') . ':', ['class' => 'form-label'])); ?>

                            <span class="required"></span>
                            <div class="position-relative mb-3">
                                <input class="form-control" id="pfNewPassword"
                                       type="password"
                                       name="password" required placeholder="<?php echo e(__('messages.change_password.new_password')); ?>">
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('password')); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <?php echo e(Form::label('password_confirmation', __('messages.change_password.confirm_password') . ':', ['class' => 'form-label'])); ?>

                            <span class="required"></span>
                            <div class="position-relative mb-3">
                                <input class="form-control" id="pfNewConfirmPassword"
                                       type="password"
                                       name="password_confirmation" required placeholder="<?php echo e(__('messages.change_password.confirm_password')); ?>">
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('password')); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pt-0">
                <?php echo e(Form::button(__('messages.common.save'), ['type' => 'submit', 'class' => 'btn btn-primary me-3', 'id' => 'btnPrPasswordEditSave', 'data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?>

                </button>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/user_profile/change_password_modal.blade.php ENDPATH**/ ?>