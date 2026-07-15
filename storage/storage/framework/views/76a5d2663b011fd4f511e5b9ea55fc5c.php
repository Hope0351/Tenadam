<div class="listing-skeleton">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <div class="search-box pulsate rounded-1"> </div>
                <div class="d-flex">

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!Request::is('patient/my-cases')): ?>
                        <div class="filter-box pulsate rounded-1 me-2"> </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Request::is(
                            'nurses',
                            'receptionists',
                            'lab-technicians',
                            'pharmacists',
                            'appointments',
                            'doctors',
                            'incomes',
                            'expenses',
                            'call-logs',
                            'visitors',
                            'patients',
                            'case-handlers',
                            'patient-admissions',
                            'ambulances')): ?>
                        <div class="export-box pulsate rounded-1 me-2"> </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Request::is(
                            'appointments',
                            'doctor-opd-charges',
                            'item-categories',
                            'live-consultation',
                            'brands',
                            'advanced-payments')): ?>
                        <div class="date-box pulsate rounded-1 me-2"> </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!Request::is('employee/invoices','patient/my-cases','employee/patient-admissions')): ?>
                        <div class="add-button-box pulsate rounded-1"> </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>
        <?php echo $__env->make('livewire.skeleton_files.records', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/livewire/skeleton_files/common_skeleton_af.blade.php ENDPATH**/ ?>