<div class="card-content my-5">
    <div class="table pulsate rounded-1"> </div>
    <div class="row">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($i = 1; $i <= 32; $i++): ?>
            <div class="col-3 mb-5">
                <div class="column-box pulsate rounded-1"> </div>
            </div>
        <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/livewire/skeleton_files/records.blade.php ENDPATH**/ ?>