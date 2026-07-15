<div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="row">
                <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                    <a class="text-decoration-none" href="<?php echo e(route('appointments.index')); ?>">
                        <div
                            class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                            <div
                                class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                <i class="fas fa-calendar-check fs-1 text-white"></i>
                            </div>
                            <div class="text-end">
                                <h2 class="fs-1-xxl fw-bolder text-primary">
                                    <?php echo e($totlaAppointment); ?></h2>
                                <h3 class="mb-0 fs-5 fw-bold text-dark">
                                    <?php echo e(__('messages.dashboard.total_appointment')); ?>

                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                    <a class="text-decoration-none" href="<?php echo e(route('appointments.index')); ?>">
                        <div
                            class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                            <div
                                class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                <i class="fa-regular fa-calendar-plus fs-1 text-white"></i>
                            </div>
                            <div class="text-end">
                                <h2 class="fs-1-xxl fw-bolder text-primary">
                                    <?php echo e($todayAppointment); ?></h2>
                                <h3 class="mb-0 fs-5 fw-bold text-dark">
                                    <?php echo e(__('messages.dashboard.today_appointment')); ?>

                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                    <a class="text-decoration-none" href="<?php echo e(route('live.consultation.index')); ?>">
                        <div
                            class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                            <div
                                class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                <i class="fa fa-video fs-1 text-white"></i>
                            </div>
                            <div class="text-end">
                                <h2 class="fs-1-xxl fw-bolder text-primary">
                                    <?php echo e($totalMeeting); ?></h2>
                                <h3 class="mb-0 fs-5 fw-bold text-dark">
                                    <?php echo e(__('messages.dashboard.total_meeting')); ?>

                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($modules['Bills'] == true): ?>
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                        <a class="text-decoration-none" href="<?php echo e(route('employee.bills.index')); ?>">
                            <div
                                class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div
                                    class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-coins fs-1 text-white"></i>
                                </div>
                                <div class="text-end">
                                    <h2 class="fs-1-xxl fw-bolder text-primary">
                                        <?php echo e(getCurrencySymbol().' '. formatCurrency($patientBill)); ?></h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">
                                        <?php echo e(__('messages.dashboard.total_bills')); ?>

                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                
                <div class="col-xxl-12 col-12 mb-7 mb-xxl-0">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-0">
                                <?php echo e(__('messages.dashboard.recent_appointments')); ?>

                            </h3>
                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('dashboard-appointment-table', []);

$key = null;

$key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-1395470542-0', null);

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
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/livewire/patient-dashboard.blade.php ENDPATH**/ ?>