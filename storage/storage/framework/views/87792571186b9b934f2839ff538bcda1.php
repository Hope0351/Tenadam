<div class="listing-skeleton">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <div class="search-box pulsate rounded-1"> </div>
                <div class="d-flex">
                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Request::is('holidays') && Request::get('section') != 'sidebar-setting'): ?>
                        <div class="date-box pulsate rounded-1 me-2"> </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Request::is('enquiries', 'live-consultation', 'investigation-reports', 'live-meeting', 'ipds') ||
                            Request::get('section') == 'sidebar-setting'): ?>
                        <div class="filter-box pulsate rounded-1 me-2"> </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(
                        !Request::is(
                            'enquiries',
                            'live-consultation',
                            'patient-smart-card',
                            'employee/bills',
                            'investigation-reports',
                            'employee/notice-board',
                            'live-meeting') && Request::get('section') != 'sidebar-setting'): ?>
                        <div class="add-button-box pulsate rounded-1"> </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>
        <?php echo $__env->make('livewire.skeleton_files.records', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/livewire/skeleton_files/common_skeleton.blade.php ENDPATH**/ ?>