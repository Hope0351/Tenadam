
<?php
    $settingValue = getSettingValue();
?>
<div class="aside-menu-container" id="sidebar">
    <!--begin::Brand-->
    
    <div class="aside-menu-container__aside-logo flex-column-auto">
        <a  href="<?php echo e(url('/')); ?>" data-toggle="tooltip" data-placement="right"
            class="text-decoration-none sidebar-logo" title="<?php echo e(getAppName()); ?>" target="_blank">
            <img src="<?php echo e(asset($settingValue['app_logo']['value'])); ?>" alt="Logo" width="50px" height="50px"
                class="image" />
            <span
                class="navbar-brand-name text-dark text-decoration-none logo ps-2 <?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'pe-2' : 'ps-2'); ?>"><?php echo e(getAppName()); ?></span>
        </a>

        <button type="button" class="btn px-0 aside-menu-container__aside-menubar d-lg-block d-none sidebar-btn">
            <i class="fa-solid fa-bars fs-1"></i>
        </button>

    </div>
    <!--end::Brand-->
    <form class="d-flex position-relative aside-menu-container__aside-search search-control py-3 mt-1">
        <div class="position-relative w-100 sidebar-search-box">
            <input class="form-control" type="text" placeholder="<?php echo e(__('messages.common.search')); ?>" id="menuSearch"
                aria-label="Search">
            <span class="aside-menu-container__search-icon position-absolute d-flex align-items-center top-0 bottom-0">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
        </div>
    </form>
    <div class="no-record text-dark text-center d-none"><?php echo e(__('messages.no_matching_records_found')); ?></div>
    <div class="sidebar-scrolling overflow-auto">
        <ul class="aside-menu-container__aside-menu nav flex-column ">
            <?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </ul>
    </div>
</div>
<div class="bg-overlay" id="sidebar-overly"></div>
<?php /**PATH /home/z/my-project/hms/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>