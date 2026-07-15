<?php $__env->startSection('title'); ?>
    <?php echo e(__('auth.logins')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--begin::Authentication - Sign-in -->
    <?php
        $settingValue = getSettingValue();
        App::setLocale(checkLanguageSession());
    ?>
    <ul class="nav nav-pills" style="justify-content: flex-end; cursor: pointer">
        <li class="nav-item dropdown">
            <a class="btn btn-primary w-150px mb-5 indicator m-3" data-bs-toggle="dropdown" href="javascript:void(0)"
                role="button" aria-expanded="false"><?php echo e(__('messages.language.' . getCurrentLanguageName())); ?></a>
            <ul class="dropdown-menu w-150px">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = getLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="<?php echo e(checkLanguageSession() == $key ? 'active' : ''); ?>"><a
                            class="dropdown-item  px-5 language-select <?php echo e(checkLanguageSession() == $key ? 'bg-primary text-white' : 'text-dark'); ?>"
                            data-id="<?php echo e($key); ?>"><?php echo e($value); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </ul>
        </li>
    </ul>

    <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-top p-4">
        <div class="col-12 text-center">
            <a href="<?php echo e(route('front')); ?>" class="image mb-7 mb-sm-10" >
                <img alt="Logo" src="<?php echo e($settingValue['app_logo']['value']); ?>" class="img-fluid logo-fix-size">
            </a>
        </div>
        <div class="width-540">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </ul>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
        <div class="bg-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
            <h1 class="text-center mb-7"><?php echo e(__('auth.sign_in')); ?></h1>
            <form method="post" action="<?php echo e(url('/login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-sm-7 mb-4">
                    <label for="email" class="form-label">
                        <?php echo e(__('auth.email') . ':'); ?><span class="required"></span>
                    </label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                        required placeholder="<?php echo e(__('auth.email')); ?>"
                        value="<?php echo e(Cookie::get('email') !== null ? Cookie::get('email') : old('email')); ?>">
                </div>
                <div class="mb-sm-7 mb-4">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="form-label"><?php echo e(__('auth.password') . ':'); ?><span
                                class="required"></span></label>
                        <a href="<?php echo e(url('/password/reset')); ?>" class="link-info fs-6 text-decoration-none">
                            <?php echo e(__('auth.login.forgot_password') . '?'); ?>

                        </a>
                    </div>
                    <input name="password" type="password" class="form-control" id="password" required
                        placeholder="<?php echo e(__('messages.user.password')); ?>"
                        value="<?php echo e(Cookie::get('password') !== null ? Cookie::get('password') : null); ?>">
                </div>
                <div class="mb-sm-7 mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember" checked>
                    <label class="form-check-label" for="remember_me"><?php echo e(__('auth.remember_me')); ?></label>
                </div>
                <div class="d-grid" >
                    <button type="submit" class="btn btn-primary"><?php echo e(__('auth.login.login')); ?></button>
                </div>
                <div class="d-flex align-items-center mb-10 mt-4">
                    <span class="text-gray-700 me-2"><?php echo e(__('auth.new_here')); ?></span>
                    <a href="<?php echo e(route('register')); ?>" class="link-info fs-6 text-decoration-none">
                        <?php echo e(__('auth.create_an_account')); ?>

                    </a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/z/my-project/hms/resources/views/auth/login.blade.php ENDPATH**/ ?>