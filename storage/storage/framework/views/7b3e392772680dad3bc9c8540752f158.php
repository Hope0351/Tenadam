<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.bill.bills')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid">

        <?php echo e(Form::hidden('billUrl',route('bills.index'),['id'=>'indexBillUrl','class'=>'billUrl'])); ?>

        <?php echo e(Form::hidden('patientUrl',url('patients'),['id'=>'indexPatientUrl','class'=>'patientUrl'])); ?>

        <?php echo e(Form::hidden('bill', __('messages.bill.bill'), ['id' => 'Bill'])); ?>

        <div class="d-flex flex-column">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('bill-table', []);

$key = null;

$key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-3333253607-0', null);

$__html = app('livewire')->mount($__name, $__params, $key);

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/z/my-project/hms/resources/views/bills/index.blade.php ENDPATH**/ ?>