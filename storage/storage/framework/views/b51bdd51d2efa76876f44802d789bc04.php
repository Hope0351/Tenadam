<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(getAppName()); ?></title>
    <meta name="description" content="Tenedam - Health of Adam">
    <meta name="keyword" content="hospital,doctor,patient,fever,MD,MS,MBBS">
    <link rel="icon" href="<?php echo e(getSettingValue()['favicon']['value']); ?>" type="image/png">
    <link rel="canonical" href="<?php echo e(route('front')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('favicon.ico')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/third-party.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link href="<?php echo e(mix('/assets/css/custom-auth.css')); ?>" rel="stylesheet" type="text/css" />
    
    <link href="<?php echo e(asset('assets/css/tenedam-design-system.css')); ?>" rel="stylesheet" type="text/css" />
    
    <!-- CSS Libraries -->
    <?php echo $__env->yieldContent('css'); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <!-- Scripts -->
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    <script src="<?php echo e(asset('assets/js/third-party.js')); ?>"></script>
    <script src="<?php echo e(asset('messages.js')); ?>"></script>
    
    <?php echo $__env->yieldContent('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('.alert').delay(5000).slideUp(300)
        });

        $(document).on('click', '.language-select', function() {
            let languageName = $(this).data('id');
            $.ajax({
                type: 'get',
                url: 'set-language',
                data: {
                    languageName: languageName
                },
                success: function() {
                    location.reload();
                },
            });
        });
    </script>
</head>

<body
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed">
    <div class="d-flex flex-column flex-root">
        <div
            class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed authImage">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <?php echo e(Form::hidden('userCurrentLanguage', checkLanguageSession(), ['class' => 'userCurrentLanguage'])); ?>

    <?php echo e(Form::hidden('invalidNumber', __('messages.common.invalid_number'), ['class' => 'invalidNumber'])); ?>

    <?php echo e(Form::hidden('invalidCountryNumber', __('messages.common.invalid_country_code'), ['class' => 'invalidCountryNumber'])); ?>

    <?php echo e(Form::hidden('tooShort', __('messages.common.too_short'), ['class' => 'tooShort'])); ?>

    <?php echo e(Form::hidden('tooLong', __('messages.common.too_long'), ['class' => 'tooLong'])); ?>

    <?php echo e(Form::hidden('invalidNumber', __('messages.common.invalid_number'), ['class' => 'invalidNumber'])); ?>

    <?php echo e(Form::hidden('invalidNumber', __('messages.common.invalid_number'), ['class' => 'invalidNumber'])); ?>

</body>

</html>
<?php /**PATH /home/z/my-project/hms/resources/views/layouts/auth_app.blade.php ENDPATH**/ ?>