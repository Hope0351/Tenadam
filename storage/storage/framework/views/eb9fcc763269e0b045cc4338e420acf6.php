<?php
    $notifications = getNotification(Auth::user()->roles->pluck('name')->first());
    $notificationCount = count($notifications);
?>
<header class='d-flex align-items-center justify-content-between flex-grow-1 header px-3 px-xl-0'>
    <button type="button" class="btn px-0 aside-menu-container__aside-menubar d-block d-xl-none sidebar-btn ">
        <i class="fa-solid fa-bars fs-1"></i>
    </button>
    <nav class="navbar navbar-expand-xl navbar-light top-navbar d-xl-flex d-block px-3 px-xl-0 py-4 py-xl-0"
        id="nav-header">
        <div class="container-fluid pe-0">
            <div class="navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php echo $__env->make('layouts.sub_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </ul>
            </div>
        </div>
    </nav>
    <ul class="nav align-items-center flex-nowrap">
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
            <?php
                $patientUniqueId = Auth::user()->patient->patient_unique_id;
                $isPatientIdCard = Auth::user()->patient->template_id;
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!is_null($isPatientIdCard)): ?>
                <li class="px-xxl-3 px-2">
                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-trigger="hover"
                        title="" data-bs-original-title="Patient Smart Card">
                        <button type="button" class="btn px-1 text-primary fs-3 ShowPatientCardData"
                            data-id="<?php echo e($patientUniqueId); ?>" data-bs-toggle="modal"
                            data-bs-target="#ShowPatientCardDataModal">
                            <i class="fa-solid fa-id-card fs-1 text-decoration-none"></i>
                        </button>
                    </div>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <li class="px-xxl-3 px-2">
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-trigger="hover"
                title=""
                data-bs-original-title="<?php echo e(getLoggedInUser()->thememode ? 'Switch to Light Mode' : 'Switch to Dark Mode'); ?>">
                <a href="<?php echo e(route('user.mode')); ?>">
                    <i class="fas user-check-icon <?php echo e(getLoggedInUser()->thememode ? 'fa-sun' : 'fa-moon'); ?> fs-3"></i>
                </a>
            </div>
        </li>
        <li class="px-sm-3 px-2">
            <div class="dropdown custom-dropdown d-flex align-items-center py-4">
                <button class="btn hide-arrow p-0 position-relative" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-bell text-primary fs-2"></i>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($notificationCount != 0): ?>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge badge-circle bg-info <?php echo e($notificationCount > 9 ? 'end-1' : 'counter-0'); ?>"
                            id="counter"><?php echo e($notificationCount); ?></span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </button>
                <div class="dropdown-menu py-0 my-2" aria-labelledby="dropdownMenuButton1">
                    <div
                        class="<?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'text-end' : 'text-start'); ?> border-bottom py-4 px-7">
                        <h3 class="text-gray-900 mb-0"><?php echo e(__('messages.notification.notifications')); ?></h3>
                    </div>
                    <div class="px-7 mt-5 inner-scroll height-270">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($notificationCount > 0): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="javascript:void(0)" data-id="<?php echo e($notification->id); ?>"
                                    class="notification d-flex position-relative mb-5  d-flex position-relative mb-5 text-decoration-none text-hover-primary"
                                    id="notification">
                                    <span
                                        class="<?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'ms-5' : 'me-5'); ?> text-primary fs-2 icon-label">
                                        <i class="<?php echo e(getNotificationIcon($notification->type)); ?>"></i>
                                    </span>
                                    <div>
                                        <h5
                                            class="text-gray-900 fs-6 mb-2 <?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'text-end' : ''); ?>">
                                            <?php echo e($notification->title); ?></h5>
                                        <h6
                                            class="text-gray-600 fs-small fw-light mb-0 <?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'text-end' : ''); ?>">
                                            <?php echo e(\Carbon\Carbon::parse($notification->created_at)->diffForHumans(null, true)); ?>

                                        </h6>
                                    </div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php else: ?>
                            <div>
                                <h5 class="text-gray-900 fs-6 mb-2 empty-state text-center">
                                    <?php echo e(__('messages.notification.you_don`t_have_any_new_notification')); ?></h5>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <div>
                            <h5 class="text-gray-900 text-center fs-6 mb-2 empty-state empty-notification d-none">
                                <?php echo e(__('messages.notification.you_don`t_have_any_new_notification')); ?></h5>
                        </div>
                    </div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($notificationCount > 0): ?>
                        <div class="text-center border-top p-4 mark-read">
                            <h5><a href="#"
                                    class="text-primary mb-0 fs-5 read-all-notification text-decoration-none"
                                    id="readAllNotification"><?php echo e(__('messages.notification.mark_all_as_read')); ?></a>
                            </h5>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </li>
        <li class="px-xxl-3 px-2">
            <div class="dropdown d-flex align-items-center py-4">
                <div class="image image-circle image-mini">
                    <img src="<?php echo e(Auth::user()->image_url ?? ''); ?>" class="img-fluid" alt="profile image">
                </div>
                <button class="btn ps-2 pe-0 text-gray-600" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    <?php echo e(Auth::user()->full_name ?? ''); ?>

                    <i class="fa-solid fa-angle-down"></i>
                </button>
                <div class="dropdown-menu py-7 pb-4 my-2" aria-labelledby="dropdownMenuButton1">
                    <div class="text-center border-bottom pb-5">
                        <div class="image image-circle image-tiny mb-5">
                            <img alt="Tenedam" src="<?php echo e(Auth::user()->image_url ?? ''); ?>" class="img-fluid"
                                alt="profile image" id="loginUserImage">
                        </div>
                        <h3 class="text-gray-900"><?php echo e(Auth::user()->full_name ?? ''); ?></h3>
                        <a href="javascript:void(0)"
                            class="mb-0 fw-400 fs-6 text-decoration-none text-dark"><?php echo e(Auth::user()->email ?? ''); ?></a>
                    </div>
                    <ul class="pt-4 admin-ul">
                        <li>
                            <a class="dropdown-item text-gray-900 editProfile" href="javascript:void(0)"
                                data-bs-toggle="modal" data-bs-target="#editProfileModal"
                                data-id="<?php echo e(getLoggedInUserId()); ?>">
                                <span
                                    class="dropdown-icon text-gray-600 <?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'ms-4' : 'me-4'); ?>">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <?php echo e(__('messages.user.edit_profile')); ?>

                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-gray-900" href="javascript:void(0)"
                                data-id="<?php echo e(getLoggedInUserId()); ?>" data-bs-toggle="modal"
                                data-bs-target="#changePasswordModal">
                                <span
                                    class="dropdown-icon <?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'ms-4' : 'me-4'); ?> text-gray-600">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                                <?php echo e(__('messages.user.change_password')); ?>

                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-gray-900" href="javascript:void(0)"
                                data-id="<?php echo e(getLoggedInUserId()); ?>" data-bs-toggle="modal"
                                data-bs-target="#changeLanguageModal">
                                <span
                                    class="dropdown-icon <?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'ms-4' : 'me-4'); ?> text-gray-600">
                                    <i class="fa-solid fa-globe"></i>
                                </span>
                                <?php echo e(__('messages.profile.change_language')); ?>

                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-gray-900" href="<?php echo e(route('enable-2fa')); ?>">
                                <span
                                    class="dropdown-icon <?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'ms-4' : 'me-4'); ?> text-gray-600">
                                    <i class="fa-solid fa-user-secret"></i>
                                </span>
                                <?php echo e(__('messages.two_factor_auth.two_factor_authentication')); ?>

                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-gray-900" href="<?php echo e(route('logout.user')); ?>"
                                onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                                <span
                                    class="dropdown-icon <?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'ms-4' : 'me-4'); ?> text-gray-600">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </span>
                                <?php echo e(__('messages.user.logout')); ?>

                                <form id="logout-form" action="<?php echo e(route('logout.user')); ?>" method="POST"
                                    class="d-none">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <button type="button" class="btn px-0 d-block d-xl-none header-btn pb-2">
                <i class="fa-solid fa-bars fs-1"></i>
            </button>
        </li>
    </ul>
</header>
<div class="bg-overlay" id="nav-overly"></div>
<?php /**PATH /home/z/my-project/hms/resources/views/layouts/header.blade.php ENDPATH**/ ?>