<div class="ms-0 ms-md-2" wire:ignore>
    <div class="dropdown d-flex align-items-center <?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'ms-4' : 'me-4'); ?> me-md-5"
        id="invoiceFilterDiv">
        <button class="btn btn btn-icon btn-primary text-white dropdown-toggle hide-arrow ps-2 pe-0" type="button"
            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false" id="invoiceFilterBtn">
            <i class='fas fa-filter'></i>
        </button>
        <div class="dropdown-menu py-0" aria-labelledby="invoiceFilterBtn">
            <div
                class="<?php echo e(getCurrentLoginUserLanguageName() == 'ar' ? 'text-end' : 'text-start'); ?> border-bottom py-4 px-7">
                <h3 class="text-gray-900 mb-0"><?php echo e(__('messages.common.filter_options')); ?></h3>
            </div>
            <div class="p-5">
                <div class="mb-5">
                    <label class="form-label"><?php echo e(__('messages.common.status') . ':'); ?></label>
                    
                    <select class="form-select status-selector " id="invoice_status_filter" data-control="select2"
                        name="status">
                        <option value="2"><?php echo e(__('messages.filter.All')); ?></option>
                        <option value="0"><?php echo e(__('messages.invoice.paid')); ?></option>
                        <option value="1"><?php echo e(__('messages.invoice.pending')); ?></option>
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="reset" id="resetEmployeeInvoiceFilter"
                        class="btn btn-secondary"><?php echo e(__('messages.common.reset')); ?></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/z/my-project/hms/resources/views/invoices/filter-button.blade.php ENDPATH**/ ?>