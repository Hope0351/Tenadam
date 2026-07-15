<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"
    <?php if(getLoggedInUser()->language == 'ar'): ?> direction="rtl" dir="rtl" style="direction: rtl" <?php endif; ?>>

<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(getAppName()); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="google" content="notranslate">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="turbo-cache-control" content="no-cache">
    <?php
        $settingValue = getSettingValue();
        \Carbon\Carbon::setlocale(config('app.locale'));
    ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="<?php echo e($settingValue['favicon']['value']); ?>" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="<?php echo e(asset('assets/css/third-party.css')); ?>" rel="stylesheet" type="text/css" />
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('vendor/rappasoft/livewire-tables/css/laravel-livewire-tables.min.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('vendor/rappasoft/livewire-tables/css/laravel-livewire-tables-thirdparty.min.css')); ?>">

    <?php if(getLoggedInUser()->thememode): ?>
        <link href="<?php echo e(mix('assets/css/style.dark.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(mix('assets/css/plugins.dark.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(mix('assets/css/phone-number-dark.css')); ?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <?php else: ?>
        <link href="<?php echo e(mix('assets/css/style.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(mix('assets/css/plugins.css')); ?>" rel="stylesheet" type="text/css" />
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(getCurrentLoginUserLanguageName() == 'ar'): ?>
        <link href="<?php echo e(asset('assets/css/rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


    
    
    <?php echo $__env->yieldContent('css'); ?>
    <?php echo $__env->yieldContent('page_css'); ?>

    
    <link href="<?php echo e(mix('assets/css/custom.css')); ?>" rel="stylesheet" type="text/css" />
    
    <link href="<?php echo e(asset('assets/css/tenedam-design-system.css')); ?>" rel="stylesheet" type="text/css" />
    
    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    <script src="<?php echo e(asset('vendor/rappasoft/livewire-tables/js/laravel-livewire-tables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/rappasoft/livewire-tables/js/laravel-livewire-tables-thirdparty.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/third-party.js')); ?>"></script>
    <script src="<?php echo e(asset('messages.js')); ?>"></script>
    <script src="<?php echo e(mix('js/pages.js')); ?>"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://npmcdn.com/flatpickr@4.5.2/dist/l10n"></script>
    <script src="https://npmcdn.com/flatpickr@4.5.2/dist/l10n"></script>

    <?php echo $__env->yieldContent('page_scripts'); ?>
    <script>
        
            // const defaultImageUrl = '';
            (function($) {
                $.fn.button = function(action) {
                    if (action === 'loading' && this.data('loading-text')) {
                        this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled',
                            true)
                    }
                    if (action === 'reset' && this.data('original-text')) {
                        this.html(this.data('original-text')).prop('disabled', false)
                    }
                }
                $('#overlay-screen-lock').hide()
            }(jQuery))
        $(document).ready(function() {
            $('.alert').delay(5000).slideUp(300)
        })

        $('.alert').delay(5000).slideUp(300, function() {
            $('.alert').attr('style', 'display:none')
        })
    </script>
    <?php echo $__env->yieldContent('scripts'); ?>
</head>

<body>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid">
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div
                class=" d-flex flex-column flex-row-fluid <?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'wrapper-rtl' : 'wrapper'); ?>">
                <div class='container-fluid d-flex align-items-stretch justify-content-between px-0'>
                    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class='content d-flex flex-column flex-column-fluid pt-7'>
                    <?php echo $__env->yieldContent('header_toolbar'); ?>
                    <div class='d-flex flex-column-fluid'>
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
                <div class='container-fluid'>
                    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

            <?php echo $__env->make('user_profile.edit_profile_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('user_profile.change_password_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('generate_patient_id_card.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php echo e(Form::hidden('defaultImage', asset('assets/img/avatar.png'), ['class' => 'defaultImage'])); ?>

        <?php echo e(Form::hidden('defaultImageUrl', '', ['class' => 'defaultImageUrl'])); ?>

        <?php echo e(Form::hidden('profileUrl', url('profile'), ['class' => 'profileUrl'])); ?>

        <?php echo e(Form::hidden('profileUpdateUrl', url('profile-update'), ['class' => 'profileUpdateUrl'])); ?>

        <?php echo e(Form::hidden('changePasswordUrl', url('change-password'), ['class' => 'changePasswordUrl'])); ?>

        <?php echo e(Form::hidden('loggedInUserId', getLoggedInUserId(), ['class' => 'loggedInUserId'])); ?>

        <?php echo e(Form::hidden('updateLanguageURL', url('update-language'), ['class' => 'updateLanguageURL'])); ?>

        <?php echo e(Form::hidden('currentCurrency', getCurrencySymbol(), ['class' => 'currentCurrency'])); ?>

        <?php echo e(Form::hidden('getCurrentCurrency', getCurrentCurrency(), ['class' => 'getCurrentCurrency'])); ?>

        <?php echo e(Form::hidden('getISOCode', getISOCode(), ['class' => 'getISOCode'])); ?>

        <?php echo e(Form::hidden('getCountryCode', getCountryCode(), ['class' => 'getCountryCode'])); ?>

        <?php echo e(Form::hidden('pdfDocumentImageUrl', url('assets/img/pdf.png'), ['class' => 'pdfDocumentImageUrl'])); ?>

        <?php echo e(Form::hidden('docxDocumentImageUrl', url('assets/img/doc.png'), ['class' => 'docxDocumentImageUrl'])); ?>

        <?php echo e(Form::hidden('audioDocumentImageUrl', url('assets/img/audio.png'), ['class' => 'audioDocumentImageUrl'])); ?>

        <?php echo e(Form::hidden('videoDocumentImageUrl', url('assets/img/video.png'), ['class' => 'videoDocumentImageUrl'])); ?>

        <?php echo e(Form::hidden('ajaxCallIsRunning', false, ['class' => 'ajaxCallIsRunning'])); ?>

        <?php echo e(Form::hidden('userCurrentLanguage', getLoggedInUser()->language, ['class' => 'userCurrentLanguage'])); ?>

        <?php echo e(Form::hidden('sweetAlertIcon', asset('assets/images/remove.png'), ['class' => 'sweetAlertIcon'])); ?>

        <?php echo e(Form::hidden('deleteVariable', __('messages.common.delete'), ['class' => 'deleteVariable'])); ?>

        <?php echo e(Form::hidden('yesVariable', __('messages.common.yes'), ['class' => 'yesVariable'])); ?>

        <?php echo e(Form::hidden('noVariable', __('messages.common.no'), ['class' => 'noVariable'])); ?>

        <?php echo e(Form::hidden('cancelVariable', __('messages.common.cancel'), ['class' => 'cancelVariable'])); ?>

        <?php echo e(Form::hidden('confirmVariable', __('messages.common.are_you_sure_want_to_delete_this'), ['class' => 'confirmVariable'])); ?>

        <?php echo e(Form::hidden('deletedVariable', __('messages.common.deleted'), ['class' => 'deletedVariable'])); ?>

        <?php echo e(Form::hidden('hasBeenDeletedVariable', __('messages.common.has_been_deleted'), ['class' => 'hasBeenDeletedVariable'])); ?>

        <?php echo e(Form::hidden('okVariable', __('messages.common.ok'), ['class' => 'okVariable'])); ?>

    </div>
</body>

</html>
<?php /**PATH /home/z/my-project/hms/resources/views/layouts/app.blade.php ENDPATH**/ ?>