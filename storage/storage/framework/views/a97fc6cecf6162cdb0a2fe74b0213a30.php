<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.pathology_tests')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e(Form::hidden('pathologyTestUrl', url('pathology-tests'), ['id' => 'pathologyTestURL'])); ?>

            <?php echo e(Form::hidden('pathology.test.show.modal', url('pathology-tests-show-modal'), ['id' => 'pathologyTestShowUrl'])); ?>

            <?php echo e(Form::hidden('pathology-test-language', getCurrentLoginUserLanguageName(),['id' => 'pathologyTestLanguage'])); ?>

            <?php echo e(Form::hidden('pathology_test', __('messages.pathology_test.pathology_tests'), ['id' => 'pathologyTest'])); ?>

            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('pathology-tests-table', []);

$key = null;

$key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-3995655149-0', null);

$__html = app('livewire')->mount($__name, $__params, $key);

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php echo $__env->make('partials.page.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('pathology_tests.show_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/z/my-project/hms/resources/views/pathology_tests/index.blade.php ENDPATH**/ ?>