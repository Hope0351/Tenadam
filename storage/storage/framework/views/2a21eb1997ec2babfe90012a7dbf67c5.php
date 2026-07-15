<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.appointments')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo e(Form::hidden('appointmentUrl', url('appointments'), ['class' => 'appointmentURL'])); ?>

        <?php echo e(Form::hidden('patientUrl', url('patients'), ['class' => 'patientAppointmentURL'])); ?>

        <?php echo e(Form::hidden('doctorUrl', url('doctors'), ['class' => 'doctorAppointmentURL'])); ?>

        <?php echo e(Form::hidden('doctorShowUrl', url('employee/doctor'), ['class' => 'doctorShowURL'])); ?>

        <?php echo e(Form::hidden('patientRole', Auth::user()->hasRole('Patient')?true:false, ['class' => 'patientRole'])); ?>

        <?php echo e(Form::hidden('doctorRole', Auth::user()->hasRole('Doctor')?false:true, ['class' => 'doctorRole'])); ?>

        <?php echo e(Form::hidden('loginDoctor', Auth::user()->hasRole('Doctor')?true:false, ['class' => 'loginDoctor'])); ?>

        <?php echo e(Form::hidden('adminRole', Auth::user()->hasRole('Admin')?true:false, ['class' => 'adminRole'])); ?>

        <?php echo e(Form::hidden('doctorDepartmentUrl', url('doctor-departments'), ['class' => 'doctorDepartmentURL'])); ?>

        <?php echo e(Form::hidden('appointment', __('messages.web_menu.appointment'), ['id' => 'Appointment'])); ?>

        <?php echo e(Form::hidden('todayAppointment', __('messages.appointment.today'), ['id' => 'todayAppointment'])); ?>

        <?php echo e(Form::hidden('yesterdayAppointment', __('messages.appointment.yesterday'), ['id' => 'yesterdayAppointment'])); ?>

        <?php echo e(Form::hidden('thisWeekAppointment', __('messages.appointment.this_week'), ['id' => 'thisWeekAppointment'])); ?>

        <?php echo e(Form::hidden('last7DayAppointment', __('messages.appointment.last_7_days'), ['id' => 'last7DayAppointment'])); ?>

        <?php echo e(Form::hidden('last30DayAppointment', __('messages.appointment.last_30_days'), ['id' => 'last30DayAppointment'])); ?>

        <?php echo e(Form::hidden('thisMonthAppointment', __('messages.appointment.this_month'), ['id' => 'thisMonthAppointment'])); ?>

        <?php echo e(Form::hidden('lastMonthAppointment', __('messages.appointment.last_month'), ['id' => 'lastMonthAppointment'])); ?>

        <div class="d-flex flex-column">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('appointment-table', []);

$key = null;

$key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-857752799-0', null);

$__html = app('livewire')->mount($__name, $__params, $key);

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
        <?php echo $__env->make('appointments.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

    
    
    
    
    
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/z/my-project/hms/resources/views/appointments/index.blade.php ENDPATH**/ ?>