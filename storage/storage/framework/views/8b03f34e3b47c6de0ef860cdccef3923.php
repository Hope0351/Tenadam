<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.radiology_tests')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e(Form::hidden('radiologyTestUrl', url('radiology-tests'), ['id' => 'radiologyTestURL'])); ?>

            <?php echo e(Form::hidden('radiology.test.show.modal', url('radiology-tests-show-modal'), ['id' => 'radiologyTestShowModal'])); ?>

            <?php echo e(Form::hidden('radiology-test-language', getCurrentLoginUserLanguageName(),['id' => 'radiologyTestLanguage'])); ?>

            <?php echo e(Form::hidden('radiology_test', __('messages.radiology_test.radiology_tests'), ['id' => 'radiologyTest'])); ?>

            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('radiology-test-table', []);

$key = null;

$key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-1956280919-0', null);

$__html = app('livewire')->mount($__name, $__params, $key);

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php echo $__env->make('partials.page.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('radiology_tests.show_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/z/my-project/hms/resources/views/radiology_tests/index.blade.php ENDPATH**/ ?>