<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.medicine.medicines')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <?php echo e(Form::hidden('medicineUrl',route('medicines.index'),['id'=>'indexMedicineUrl'])); ?>

        <?php echo e(Form::hidden('medicines-show-modal', url('medicines-show-modal'), ['id'=>'medicinesShowModal'])); ?>

        <?php echo e(Form::hidden('medicine-language', getCurrentLoginUserLanguageName(),['id' => 'medicineLanguage'])); ?>

        <?php echo e(Form::hidden('medicine', __('messages.medicine.medicine'), ['id' => 'Medicine'])); ?>

        <div class="d-flex flex-column">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('medicine-table', []);

$key = null;

$key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-3543926968-0', null);

$__html = app('livewire')->mount($__name, $__params, $key);

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            
        </div>
        <?php echo $__env->make('partials.page.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('medicines.show_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_scripts'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/z/my-project/hms/resources/views/medicines/index.blade.php ENDPATH**/ ?>