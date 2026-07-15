<?php
    $modules = App\Models\Module::cacheFor(now()->addDays())
        ->toBase()
        ->get();
?>
<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('2fa*') ? 'd-none' : ''); ?>">
    <a class="nav-link p-0 <?php echo e(Request::is('2fa*') ? 'active' : ''); ?>" href="<?php echo e(route('enable-2fa')); ?>">
        <?php echo e(__('Two-Factor Authentication')); ?>

    </a>
</li>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('dashboard*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('dashboard*') ? 'active' : ''); ?>" href="<?php echo e(route('dashboard')); ?>">
            <?php echo e(__('messages.dashboard.dashboard')); ?>

        </a>
    </li>

    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('add-on*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('add-on*') ? 'active' : ''); ?>" href="<?php echo e(route('addon.index')); ?>">
            <?php echo e(__('messages.addon.addon')); ?>

        </a>
    </li>


    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(moduleExists('Holiday')): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('annual-holidays*', 'calendar-view*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('annual-holidays*', 'calendar-view*') ? 'active' : ''); ?>"
                href="<?php echo e(route('annualHolidays.index')); ?>">
                <?php echo e(__('holiday::messages.holidays')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('smart-patient-cards*', 'generate-patient-smart-cards*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('smart-patient-cards*') ? 'active' : ''); ?>"
            href="<?php echo e(route('smart-patient-cards.index')); ?>">
            <?php echo e(__('messages.patient_id_card.patient_id_card_template')); ?>

        </a>
    </li>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('smart-patient-cards*', 'generate-patient-smart-cards*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('generate-patient-smart-cards*') ? 'active' : ''); ?>"
            href="<?php echo e(route('generate-patient-smart-cards.index')); ?>">
            <?php echo e(__('messages.patient_id_card.generate_patient_id_card')); ?>

        </a>
    </li>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('users*', 'admins*', 'accountants*', 'nurses*', 'lab-technicians*', 'receptionists*', 'pharmacists*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('users*') ? 'active' : ''); ?>" href="<?php echo e(route('users.index')); ?>">
            <?php echo e(__('messages.users')); ?>

        </a>
    </li>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Receptionist|Nurse|Lab Technician')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'IPD Patients', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('ipds*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('ipds*') ? 'active' : ''); ?>" href="<?php echo e(route('ipd.patient.index')); ?>">
                <?php echo e(__('messages.ipd_patients')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'OPD Patients', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('opds*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('opds*') ? 'active' : ''); ?> " href="<?php echo e(route('opd.patient.index')); ?>">
                <?php echo e(__('messages.opd_patients')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Vaccinated Patients', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('vaccinated-patients*', 'vaccinations*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('vaccinated-patients*') ? 'active' : ''); ?>"
                href="<?php echo e(route('vaccinated-patients.index')); ?>">
                <?php echo e(__('messages.vaccinated_patients')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Vaccinations', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('vaccinated-patients*', 'vaccinations*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('vaccinations*') ? 'active' : ''); ?>"
                href="<?php echo e(route('vaccinations.index')); ?>">
                <?php echo e(__('messages.vaccinations')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('admins*', 'users*', 'accountants*', 'nurses*', 'lab-technicians*', 'receptionists*', 'pharmacists*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('admins*') ? 'active' : ''); ?>" href="<?php echo e(route('admins.index')); ?>">
            <?php echo e(__('messages.admin')); ?>

        </a>
    </li>
    
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Accountant')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Accounts', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('manual-billing-payments*', 'accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('accounts*') ? 'active' : ''); ?>" href="<?php echo e(route('accounts.index')); ?>">
                <?php echo e(__('messages.account.account')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Accountant')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Employee Payrolls', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('manual-billing-payments*', 'accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('employee-payrolls*') ? 'active' : ''); ?>"
                href="<?php echo e(route('employee-payrolls.index')); ?>">
                <?php echo e(__('messages.employee_payrolls')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Accountant')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Invoices', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('manual-billing-payments*', 'accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('invoices*') ? 'active' : ''); ?>" href="<?php echo e(route('invoices.index')); ?>">
                <?php echo e(__('messages.invoices')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Accountant')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Payments', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('manual-billing-payments*', 'accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('payments*') ? 'active' : ''); ?>" href="<?php echo e(route('payments.index')); ?>">
                <?php echo e(__('messages.payments')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Payment Reports', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('manual-billing-payments*', 'accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('payment-reports*') ? 'active' : ''); ?>"
                href="<?php echo e(route('payment.reports')); ?>">
                <?php echo e(__('messages.payment.payment_reports')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Advance Payments', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('manual-billing-payments*', 'accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('advanced-payments*') ? 'active' : ''); ?>"
                href="<?php echo e(route('advanced-payments.index')); ?>">
                <?php echo e(__('messages.advanced_payments')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Accountant|Receptionist')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Bills', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('manual-billing-payments*', 'accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('bills*') ? 'active' : ''); ?>" href="<?php echo e(route('bills.index')); ?>">
                <?php echo e(__('messages.bills')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*', 'manual-billing-payments*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('manual-billing-payments*') ? 'active' : ''); ?>"
            href="<?php echo e(route('manual-billing-payments.index')); ?>">
            <?php echo e(__('messages.bill.manual_bill')); ?>

        </a>
    </li>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Nurse|Doctor')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Bed Assigns', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('bed-types*', 'beds*', 'bed-assigns*', 'bulk-beds', 'bed-status') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('bed-status*') ? 'active' : ''); ?>" href="<?php echo e(route('bed-status')); ?>">
                <?php echo e(__('messages.bed_status.bed_status')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Bed Assigns', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('bed-types*', 'beds*', 'bed-assigns*', 'bulk-beds', 'bed-status') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('bed-assigns*') ? 'active' : ''); ?>" href="<?php echo e(route('bed-assigns.index')); ?>">
                <?php echo e(__('messages.bed_assigns')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Nurse')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Beds', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('bed-types*', 'beds*', 'bed-assigns*', 'bulk-beds', 'bed-status') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('beds*') || Request::is('bulk-beds') ? 'active' : ''); ?>"
                href="<?php echo e(route('beds.index')); ?>">
                <?php echo e(__('messages.beds')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Bed Types', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('bed-types*', 'beds*', 'bed-assigns*', 'bulk-beds', 'bed-status') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('bed-types*') ? 'active' : ''); ?>" href="<?php echo e(route('bed-types.index')); ?>">
                <?php echo e(__('messages.bed_types')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Lab Technician')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Blood Banks', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('blood-banks*', 'blood-donors*', 'blood-donations*', 'blood-issues*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('blood-banks*') ? 'active' : ''); ?>" href="<?php echo e(route('blood-banks.index')); ?>">
                <?php echo e(__('messages.blood_banks')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Lab Technician')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Blood Donors', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('blood-banks*', 'blood-donors*', 'blood-donations*', 'blood-issues*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('blood-donors*') ? 'active' : ''); ?>"
                href="<?php echo e(route('blood-donors.index')); ?>">
                <?php echo e(__('messages.blood_donors')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Lab Technician')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Blood Donations', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('blood-banks*', 'blood-donors*', 'blood-donations*', 'blood-issues*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('blood-donations*') ? 'active' : ''); ?>"
                href="<?php echo e(route('blood-donations.index')); ?>">
                <?php echo e(__('messages.blood_donations')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Lab Technician')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Blood Issues', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('blood-banks*', 'blood-donors*', 'blood-donations*', 'blood-issues*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('blood-issues*') ? 'active' : ''); ?>"
                href="<?php echo e(route('blood-issues.index')); ?>">
                <?php echo e(__('messages.blood_issues')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Doctor')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Patients', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patients*', 'patient-cases*', 'case-handlers*', 'patient-admissions*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patients*') ? 'active' : ''); ?>" href="<?php echo e(route('patients.index')); ?>">
                <?php echo e(__('messages.patients')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Case Manager')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Cases', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patients*', 'patient-cases*', 'case-handlers*', 'patient-admissions*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patient-cases*') ? 'active' : ''); ?>"
                href="<?php echo e(route('patient-cases.index')); ?>">
                <?php echo e(__('messages.cases')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Case Handlers', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0  <?php echo e(!Request::is('patients*', 'patient-cases*', 'case-handlers*', 'patient-admissions*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('case-handlers*') ? 'active' : ''); ?>"
                href="<?php echo e(route('case-handlers.index')); ?>">
                <?php echo e(__('messages.case_handlers')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Doctor|Case Manager')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Patient Admissions', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patients*', 'patient-cases*', 'case-handlers*', 'patient-admissions*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patient-admissions**') ? 'active' : ''); ?>"
                href="<?php echo e(route('patient-admissions.index')); ?>">
                <?php echo e(__('messages.patient_admissions')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Case Manager|Pharmacist|Lab Technician')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctors', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/doctor*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('employee/doctor*') ? 'active' : ''); ?>"
                href="<?php echo e(url('employee/doctor')); ?>">
                <?php echo e(__('messages.doctors')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Pharmacist|Nurse')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Prescriptions', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/prescriptions*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('employee/prescriptions*') ? 'active' : ''); ?>"
                href="<?php echo e(url('employee/prescriptions')); ?>">
                <?php echo e(__('messages.prescriptions')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Patient')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Documents', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('documents*', 'document-types*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('documents*') ? 'active' : ''); ?>" href="<?php echo e(route('documents.index')); ?>">
                <?php echo e(__('messages.documents')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    
    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('odontogram*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('odontogram*') ? 'active' : ''); ?>"
            href="<?php echo e(route('odontogram.index')); ?>">
            <?php echo e(__('Odontogram')); ?>

        </a>
    </li>

<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Document Types', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('documents*', 'document-types*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('document-types*') ? 'active' : ''); ?>"
                href="<?php echo e(route('document-types.index')); ?>">
                <?php echo e(__('messages.document_types')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('email-template*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('email-template*') ? 'active' : ''); ?>"
            href="<?php echo e(route('email-template.index')); ?>">
            <?php echo e(__('messages.email_template.email_template')); ?>

        </a>
    </li>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Insurances', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('insurances*', 'packages*', 'services*', 'ambulances*', 'ambulance-calls*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('insurances*') ? 'active' : ''); ?>"
                href="<?php echo e(route('insurances.index')); ?>">
                <?php echo e(__('messages.insurances')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Packages', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('insurances*', 'packages*', 'services*', 'ambulances*', 'ambulance-calls*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('packages*') ? 'active' : ''); ?>" href="<?php echo e(route('packages.index')); ?>">
                <?php echo e(__('messages.packages')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Accountant')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Services', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('insurances*', 'packages*', 'services*', 'ambulances*', 'ambulance-calls*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('services*') ? 'active' : ''); ?>" href="<?php echo e(route('services.index')); ?>">
                <?php echo e(__('messages.services')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Case Manager')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Ambulances', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('insurances*', 'packages*', 'services*', 'ambulances*', 'ambulance-calls*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('ambulances*') ? 'active' : ''); ?>"
                href="<?php echo e(route('ambulances.index')); ?>">
                <?php echo e(__('messages.ambulances')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Case Manager')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Ambulances Calls', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('insurances*', 'packages*', 'services*', 'ambulances*', 'ambulance-calls*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('ambulance-calls*') ? 'active' : ''); ?>"
                href="<?php echo e(route('ambulance-calls.index')); ?>">
                <?php echo e(__('messages.ambulance_calls')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    
    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctors', $modules)): ?>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('doctors*', 'doctor-departments*', 'schedules*', 'holidays*', 'breaks*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('doctors*') ? 'active' : ''); ?>" href="<?php echo e(route('doctors.index')); ?>">
                    <?php echo e(__('messages.doctors')); ?>

                </a>
            </li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endif; ?>
    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctor Departments', $modules)): ?>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('doctors*', 'doctor-departments*', 'schedules*', 'holidays*', 'breaks*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('doctor-departments*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('doctor-departments.index')); ?>">
                    <span class="menu-title" style="white-space: nowrap"><?php echo e(__('messages.doctor_departments')); ?>

                </a>
            </li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endif; ?>
    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Schedules', $modules)): ?>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('doctors*', 'doctor-departments*', 'schedules*', 'holidays*', 'breaks*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('schedules*') ? 'active' : ''); ?>" href="<?php echo e(route('schedules.index')); ?>">
                    <?php echo e(__('messages.schedules')); ?>

                </a>
            </li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endif; ?>
    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Nurse')): ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Prescriptions', $modules)): ?>
            <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('prescriptions*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('prescriptions*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('prescriptions.index')); ?>">
                    <?php echo e(__('messages.prescriptions')); ?>

                </a>
            </li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor')): ?>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('doctors*', 'doctor-departments*', 'schedules*', 'holidays*', 'breaks*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('holidays*') ? 'active' : ''); ?>"
            href="<?php echo e(route('holidays.index')); ?>"><?php echo e(__('messages.holiday.doctor_holiday')); ?></a>
    </li>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('doctors*', 'doctor-departments*', 'schedules*', 'holidays*', 'breaks*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('breaks*') ? 'active' : ''); ?>"
            href="<?php echo e(route('breaks.index')); ?>"><?php echo e(__('messages.lunch_break.lunch_breaks')); ?></a>
    </li>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Accountants', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('accountants*', 'admins*', 'users*', 'nurses*', 'lab-technicians*', 'receptionists*', 'pharmacists*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('accountants*') ? 'active' : ''); ?>"
                href="<?php echo e(route('accountants.index')); ?>">
                <?php echo e(__('messages.accountants')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Nurses', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('nurses*', 'admins*', 'users*', 'accountants*', 'lab-technicians*', 'receptionists*', 'pharmacists*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('nurses*') ? 'active' : ''); ?>" href="<?php echo e(route('nurses.index')); ?>">
                <?php echo e(__('messages.nurses')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>


<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Receptionists', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('receptionists*', 'users*', 'admins*', 'accountants*', 'nurses*', 'lab-technicians*', 'pharmacists*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('receptionists*') ? 'active' : ''); ?>"
                href="<?php echo e(route('receptionists.index')); ?>">
                <?php echo e(__('messages.receptionists')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Lab Technicians', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('lab-technicians*', 'admins*', 'users*', 'accountants*', 'nurses*', 'receptionists*', 'pharmacists*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('lab-technicians*') ? 'active' : ''); ?>"
                href="<?php echo e(route('lab-technicians.index')); ?>">
                <?php echo e(__('messages.lab_technicians')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Pharmacists', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('pharmacists*', 'users*', 'admins*', 'accountants*', 'nurses*', 'lab-technicians*', 'receptionists*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('pharmacists*') ? 'active' : ''); ?>"
                href="<?php echo e(route('pharmacists.index')); ?>">
                <?php echo e(__('messages.pharmacists')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Nurse')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctors', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('doctors*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('doctors*') ? 'active' : ''); ?>" href="<?php echo e(route('doctors.index')); ?>">
                <?php echo e(__('messages.doctors')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Nurse')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Prescriptions', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('prescriptions*', 'prescription-medicine-show*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('prescriptions*', 'prescription-medicine-show*') ? 'active' : ''); ?>"
                href="<?php echo e(route('prescriptions.index')); ?>"><?php echo e(__('messages.prescriptions')); ?></a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Appointments', $modules)): ?>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('appointments*', 'appointment-calendars', 'appointments-transaction*', 'patient-queue*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('appointments*') && !Request::is('appointments-transaction*') ? 'active' : ''); ?>"
            href="<?php echo e(route('appointments.index')); ?>">
            <?php echo e(__('messages.appointments')); ?>

        </a>
    </li>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('appointments*', 'appointment-calendars', 'appointments-transaction*', 'patient-queue*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('appointments-transaction*') ? 'active' : ''); ?>"
            href="<?php echo e(route('appointments-transaction.index')); ?>">
            <?php echo e(__('messages.common.appointment_transaction')); ?>

        </a>
    </li>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('appointments*', 'appointment-calendars', 'appointments-transaction*', 'patient-queue*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('patient-queue*') ? 'active' : ''); ?>"
            href="<?php echo e(route('patient.queue.index')); ?>">
            Patient Queue
        </a>
    </li>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Nurse|Patient')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Birth Reports', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('birth-reports*', 'death-reports*', 'investigation-reports*', 'operation-reports*', 'employee/patient-diagnosis-test*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('birth-reports*') ? 'active' : ''); ?>"
                href="<?php echo e(route('birth-reports.index')); ?>">
                <?php echo e(__('messages.birth_reports')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Nurse|Patient')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Death Reports', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('birth-reports*', 'death-reports*', 'investigation-reports*', 'operation-reports*', 'employee/patient-diagnosis-test*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('death-reports*') ? 'active' : ''); ?>"
                href="<?php echo e(route('death-reports.index')); ?>">
                <?php echo e(__('messages.death_reports')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Nurse|Patient')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Investigation Reports', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('birth-reports*', 'death-reports*', 'investigation-reports*', 'operation-reports*', 'employee/patient-diagnosis-test*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('investigation-reports*') ? 'active' : ''); ?>"
                href="<?php echo e(route('investigation-reports.index')); ?>">
                <?php echo e(__('messages.investigation_reports')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Nurse|Patient')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Operation Reports', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('birth-reports*', 'death-reports*', 'investigation-reports*', 'operation-reports*', 'employee/patient-diagnosis-test*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('operation-reports*') ? 'active' : ''); ?>"
                href="<?php echo e(route('operation-reports.index')); ?>">
                <?php echo e(__('messages.operation_reports')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Pharmacist|Lab Technician')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Medicine Categories', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*', 'used-medicine*', 'medicine-bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('categories*') ? 'active' : ''); ?>"
                href="<?php echo e(route('categories.index')); ?>">
                <?php echo e(__('messages.medicine_categories')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Pharmacist|Lab Technician')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Medicine Brands', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*', 'used-medicine*', 'medicine-bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('brands*') ? 'active' : ''); ?>" href="<?php echo e(route('brands.index')); ?>">
                <?php echo e(__('messages.medicine_brands')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Pharmacist|Lab Technician|Nurse')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Medicines', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*', 'used-medicine*', 'medicine-bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('medicines*') ? 'active' : ''); ?>" href="<?php echo e(route('medicines.index')); ?>">
                <?php echo e(__('messages.medicines')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Pharmacist|Lab Technician|Nurse')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Medicines', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*', 'used-medicine*', 'medicine-bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('medicine-purchase*') ? 'active' : ''); ?>"
                href="<?php echo e(route('medicine-purchase.index')); ?>">
                <?php echo e(__('messages.purchase_medicine.purchase_medicine')); ?>

            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Pharmacist|Lab Technician')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Medicines', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*', 'used-medicine*', 'medicine-bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('used-medicine*') ? 'active' : ''); ?>"
                href="<?php echo e(route('used-medicine.index')); ?>"><?php echo e(__('messages.used_medicine.used_medicine')); ?></a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Pharmacist|Lab Technician')): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Medicines', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*', 'used-medicine*', 'medicine-bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('medicine-bills*') ? 'active' : ''); ?>"
                href="<?php echo e(route('medicine-bills.index')); ?>">
                <?php echo e(__('messages.medicine_bills.medicine_bill')); ?>

            </a>
        </li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?> <?php endif; ?>

        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Radiology Categories', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0  <?php echo e(!Request::is('radiology-categories*', 'radiology-tests*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('radiology-categories*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('radiology.category.index')); ?>">
                        <?php echo e(__('messages.radiology_category.radiology_categories')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Pharmacist|Lab Technician')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Radiology Tests', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('radiology-categories*', 'radiology-tests*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('radiology-tests*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('radiology.test.index')); ?>">
                        <?php echo e(__('messages.radiology_tests')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Pathology Categories', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('pathology-categories*', 'pathology-tests*', 'pathology-units*', 'pathology-parameters*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('pathology-categories*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('pathology.category.index')); ?>">
                        <?php echo e(__('messages.pathology_category.pathology_categories')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Pathology Units', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('pathology-categories*', 'pathology-tests*', 'pathology-units*', 'pathology-parameters*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('pathology-units*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('pathology.unit.index')); ?>">
                        <?php echo e(__('messages.new_change.pathology_units')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Pathology Parameters', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('pathology-categories*', 'pathology-tests*', 'pathology-units*', 'pathology-parameters*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('pathology-parameters*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('pathology.parameter.index')); ?>">
                        <?php echo e(__('messages.new_change.pathology_parameters')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Pharmacist|Lab Technician')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Pathology Tests', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('pathology-categories*', 'pathology-tests*', 'pathology-units*', 'pathology-parameters*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('pathology-tests*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('pathology.test.index')); ?>">
                        <?php echo e(__('messages.pathology_tests')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Receptionist|Lab Technician')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Diagnosis Categories', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('diagnosis-categories*', 'patient-diagnosis-test*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('diagnosis-categories*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('diagnosis.category.index')); ?>">
                        <?php echo e(__('messages.diagnosis_category.diagnosis_categories')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Receptionist|Lab Technician|Nurse')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Diagnosis Tests', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('diagnosis-categories*', 'patient-diagnosis-test*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('patient-diagnosis-test*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('patient.diagnosis.test.index')); ?>">
                        <?php echo e(__('messages.patient_diagnosis_test.diagnosis_test')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Accountant|Case Manager|Receptionist|Pharmacist')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'SMS', $modules)): ?>
                <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('sms*', 'mail*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('sms*') ? 'active' : ''); ?>" href="<?php echo e(route('sms.index')); ?>">
                        <?php echo e(__('messages.sms.sms')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Case Manager|Receptionist')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Mail', $modules)): ?>
                <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('sms*', 'mail*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('mail*') ? 'active' : ''); ?>" href="<?php echo e(route('mail')); ?>">
                        <?php echo e(__('messages.mail')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>

        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Accountant')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Income', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0  <?php echo e(!Request::is('incomes*', 'expenses*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('incomes*') ? 'active' : ''); ?>" href="<?php echo e(route('incomes.index')); ?>">
                        <?php echo e(__('messages.income')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Accountant')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Expense', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('incomes*', 'expenses*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('expenses*') ? 'active' : ''); ?>" href="<?php echo e(route('expenses.index')); ?>">
                        <?php echo e(__('messages.expenses')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Items Categories', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('item-categories*', 'items*', 'item-stocks*', 'issued-items*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('item-categories*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('item-categories.index')); ?>">
                        <?php echo e(__('messages.items_categories')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Items', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('item-categories*', 'items*', 'item-stocks*', 'issued-items*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('items*') ? 'active' : ''); ?>" href="<?php echo e(route('items.index')); ?>">
                        <?php echo e(__('messages.items')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Item Stocks', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('item-categories*', 'items*', 'item-stocks*', 'issued-items*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('item-stocks*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('item.stock.index')); ?>">
                        <?php echo e(__('messages.items_stocks')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Issued Items', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('item-categories*', 'items*', 'item-stocks*', 'issued-items*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('issued-items*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('issued.item.index')); ?>">
                        <?php echo e(__('messages.issued_items')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Charge Categories', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('charge-categories*', 'charges*', 'doctor-opd-charges*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('charge-categories*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('charge-categories.index')); ?>">
                        <?php echo e(__('messages.charge_categories')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Charges', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('charge-categories*', 'charges*', 'doctor-opd-charges*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('charges*') ? 'active' : ''); ?>" href="<?php echo e(route('charges.index')); ?>">
                        <?php echo e(__('messages.charges')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctor OPD Charges', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('charge-categories*', 'charges*', 'doctor-opd-charges*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('doctor-opd-charges*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('doctor-opd-charges.index')); ?>">
                        <?php echo e(__('messages.doctor_opd_charges')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Call Logs', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('call-logs*', 'visitor*', 'receives*', 'dispatches*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('call-logs*') ? 'active' : ''); ?>" href="<?php echo e(route('call_logs.index')); ?>">
                        <?php echo e(__('messages.call_logs')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Visitors', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('call-logs*', 'visitor*', 'receives*', 'dispatches*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('visitors*') ? 'active' : ''); ?>" href="<?php echo e(route('visitors.index')); ?>">
                        <?php echo e(__('messages.visitors')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Postal Receive', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('call-logs*', 'visitor*', 'receives*', 'dispatches*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('receives*') ? 'active' : ''); ?>" href="<?php echo e(route('receives.index')); ?>">
                        <?php echo e(__('messages.postal_receive')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Postal Dispatch', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('call-logs*', 'visitor*', 'receives*', 'dispatches*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('dispatches*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('dispatches.index')); ?>">
                        <?php echo e(__('messages.postal_dispatch')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Patient')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Live Consultations', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('live-consultation*', 'live-meeting*', 'google-meet*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('live-consultation*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('live.consultation.index')); ?>">
                        <?php echo e(__('messages.live_consultations')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Accountant|Case Manager|Receptionist|Pharmacist|Lab Technician|Nurse')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Live Meetings', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0  <?php echo e(!Request::is('live-consultation*', 'live-meeting*', 'google-meet*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('live-meeting*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('live.meeting.index')); ?>">
                        <?php echo e(__('messages.live_meetings')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php ($sectionName = Request::get('section') === null && !Request::is('hospital-schedules') && !Request::is('currency-settings') && !Request::is('operation-categories') && !Request::is('operations') && !Request::is('queue-theme-configuration') && !Request::is('payment-gateways') && !Request::is('add-custom-fields') ? 'general' : Request::get('section')); ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0  <?php echo e(Request::is('settings*', 'currency-settings*', 'hospital-schedules', 'operation-categories*', 'operations*', 'payment-gateways*', 'add-custom-fields*', 'queue-theme*') ? '' : 'd-none'); ?>">
            <a class="nav-link p-0  <?php echo e(isset($sectionName) && $sectionName == 'general' ? 'active' : ''); ?>"
                href="<?php echo e(route('settings.edit', ['section' => 'general'])); ?>">
                <?php echo e(__('messages.general')); ?>

            </a>
        </li>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(Request::is('settings*', 'currency-settings*', 'hospital-schedules', 'operation-categories*', 'operations*', 'payment-gateways*', 'add-custom-fields*', 'queue-theme*') ? '' : 'd-none'); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('hospital-schedules*') ? 'active' : ''); ?>"
                href="<?php echo e(route('hospital-schedules.index')); ?>">
                <?php echo e(__('messages.hospital_schedule')); ?>

            </a>
        </li>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0  <?php echo e(Request::is('settings*', 'currency-settings*', 'hospital-schedules', 'operation-categories*', 'operations*', 'payment-gateways*', 'add-custom-fields*', 'queue-theme*') ? '' : 'd-none'); ?> ">
            <a class="nav-link p-0 <?php echo e(isset($sectionName) && $sectionName == 'sidebar-setting' ? 'active' : ''); ?>"
                href="<?php echo e(route('settings.edit', ['section' => 'sidebar-setting'])); ?>">
                <?php echo e(__('messages.sidebar_setting')); ?>

            </a>
        </li>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0  <?php echo e(Request::is('settings*', 'currency-settings*', 'hospital-schedules', 'operation-categories*', 'operations*', 'payment-gateways*', 'add-custom-fields*', 'queue-theme*') ? '' : 'd-none'); ?> ">
            <a class="nav-link p-0 <?php echo e(Request::is('currency-settings*') ? 'active' : ''); ?>"
                href="<?php echo e(route('currency-settings.index')); ?>">
                <?php echo e(__('messages.currency_setting')); ?>

            </a>
        </li>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('front-settings*', 'notice-boards*', 'testimonials*', 'front-cms-services*', 'terms-and-conditions*','complaints*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0  <?php echo e(Request::is('front-settings*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('front.settings.index')); ?>">
                    <?php echo e(__('messages.cms')); ?>

                </a>
            </li>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('front-settings*', 'notice-boards*', 'testimonials*', 'front-cms-services*', 'terms-and-conditions*','complaints*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0  <?php echo e(Request::is('front-cms-services*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('front.cms.services.index')); ?>">
                    <?php echo e(__('messages.front_cms_services')); ?>

                </a>
            </li>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Notice Boards', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('front-settings*', 'notice-boards*', 'testimonials*', 'front-cms-services*', 'terms-and-conditions*','complaints*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('notice-boards*') ? 'active' : ''); ?>" href="<?php echo e(url('notice-boards')); ?>">
                        <?php echo e(__('messages.notice_boards')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Testimonial', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('front-settings*', 'notice-boards*', 'testimonials*', 'front-cms-services*', 'terms-and-conditions*','complaints*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('testimonials*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('testimonials.index')); ?>">
                        <?php echo e(__('messages.testimonials')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('front-settings*', 'notice-boards*', 'testimonials*', 'front-cms-services*', 'terms-and-conditions*','complaints*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('complaints*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('complaints.index')); ?>">
                    <?php echo e(__('messages.complaint')); ?>

                </a>
            </li>
        <?php endif; ?>
        
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Receptionist')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Testimonial', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('front-settings*', 'notice-boards*', 'testimonials*', 'front-cms-services*', 'terms-and-conditions*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('testimonials*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('testimonials.index')); ?>">
                        <?php echo e(__('messages.testimonials')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('complaints*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('complaints*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('complaints.index')); ?>">
                    <?php echo e(__('messages.complaint')); ?>

                </a>
            </li>
        <?php endif; ?>

        
        
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Enquires', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(Request::is('enquiries*', 'enquiry*') ? '' : 'd-none'); ?>">
                    <a class="nav-link p-0  <?php echo e(Request::is('enquiries*') || Request::is('enquiry*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('enquiries')); ?>">
                        <?php echo e(__('messages.enquiries')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Doctor')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctors', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/doctor*', 'doctors*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('employee/doctor*') ? 'active' : ''); ?>"
                        href="<?php echo e(url('employee/doctor')); ?>">
                        <?php echo e(__('messages.doctors')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Schedules', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('schedules*', 'holidays*', 'breaks*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('schedules*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('schedules.edit', getDoctorSchedule())); ?>">
                        <?php echo e(__('messages.schedules')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Prescriptions', $modules)): ?>
                <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('prescriptions*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('prescriptions*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('prescriptions.index')); ?>">
                        <?php echo e(__('messages.prescriptions')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Doctor|Accountant|Case Manager|Receptionist|Pharmacist|Lab Technician|Nurse|Patient')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Notice Boards', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/notice-board*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('employee/notice-board*') ? 'active' : ''); ?>"
                        href="<?php echo e(url('employee/notice-board')); ?>">
                        <?php echo e(__('messages.notice_boards')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Doctor|Accountant|Case Manager|Receptionist|Pharmacist|Lab Technician|Nurse')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'My Payrolls', $modules)): ?>
                <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/payroll*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('employee/payroll*') ? 'active' : ''); ?>" href="<?php echo e(route('payroll')); ?>">
                        <?php echo e(__('messages.my_payrolls')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
            <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patient-dashboard*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('patient-dashboard*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('patient.dashboard')); ?>">
                    <?php echo e(__('messages.dashboard.dashboard')); ?>

                </a>
            </li>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Patient Cases', $modules)): ?>
                <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patient/my-cases*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('patient/my-cases*') ? 'active' : ''); ?>"
                        href="<?php echo e(url('patient/my-cases')); ?>">
                        <?php echo e(__('messages.patients_cases')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('complaints*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('complaints*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('complaints.index')); ?>">
                    <?php echo e(__('messages.complaint')); ?>

                </a>
            </li>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patient-smart-card*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('patient-smart-card*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('patient.smart.card.index')); ?>">
                    <?php echo e(__('messages.patient_id_card.patient_id_card')); ?>

                </a>
            </li>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Patient Admissions', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/patient-admissions*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('employee/patient-admissions*') ? 'active' : ''); ?>"
                        href="<?php echo e(url('employee/patient-admissions')); ?>">
                        <?php echo e(__('messages.patient_admissions')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Prescriptions', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patient/my-prescriptions*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('patient/my-prescriptions*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('prescriptions.list')); ?>">
                        <?php echo e(__('messages.prescriptions')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Vaccinated Patients', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patient/my-vaccinated*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('patient/my-vaccinated*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('patient.vaccinated')); ?>">
                        <?php echo e(__('messages.vaccinated_patients')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'IPD Patients', $modules)): ?>
                <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patient/my-ipds*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('patient/my-ipds*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('patient.ipd')); ?>">
                        <?php echo e(__('messages.ipd_patients')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'OPD Patients', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('opds*', 'patient/my-opds*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('patient/my-opds*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('patient.opd')); ?>">
                        <?php echo e(__('messages.opd_patients')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Diagnosis Tests', $modules)): ?>
                <li
                    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('birth-reports*', 'death-reports*', 'investigation-reports*', 'operation-reports*', 'employee/patient-diagnosis-test*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('employee/patient-diagnosis-test*') ? 'active' : ''); ?>"
                        href="<?php echo e(url('employee/patient-diagnosis-test')); ?>">
                        <?php echo e(__('messages.patient_diagnosis_test.diagnosis_test')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Invoices', $modules)): ?>
                <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/invoices*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('employee/invoices*') ? 'active' : ''); ?>"
                        href="<?php echo e(url('employee/invoices')); ?>">
                        <?php echo e(__('messages.invoices')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Bills', $modules)): ?>
                <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/bills*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('employee/bills*') ? 'active' : ''); ?>"
                        href="<?php echo e(url('employee/bills')); ?>">
                        <?php echo e(__('messages.bills')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Operation Categories', $modules)): ?>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(Request::is('settings*', 'currency-settings*', 'hospital-schedules', 'operation-categories*', 'operations*', 'payment-gateways*', 'add-custom-fields*', 'queue-theme*') ? '' : 'd-none'); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('operation-categories*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('operation.category.index')); ?>">
                    <?php echo e(__('messages.operation_category.operation_categories')); ?>

                </a>
            </li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Operation', $modules)): ?>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(Request::is('settings*', 'currency-settings*', 'hospital-schedules', 'operation-categories*', 'operations*', 'payment-gateways*', 'add-custom-fields*', 'queue-theme*') ? '' : 'd-none'); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('operations*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('operations.index')); ?>">
                    <?php echo e(__('messages.operations')); ?>

                </a>
            </li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(Request::is('settings*', 'currency-settings*', 'hospital-schedules', 'operation-categories*', 'operations*', 'payment-gateways*', 'add-custom-fields*', 'queue-theme*') ? '' : 'd-none'); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('payment-gateways*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('payment-gateways.index')); ?>">
                    <?php echo e(__('messages.payment_gateways')); ?>

                </a>
            </li>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(Request::is('settings*', 'currency-settings*', 'hospital-schedules', 'operation-categories*', 'operations*', 'payment-gateways*', 'add-custom-fields*', 'queue-theme*') ? '' : 'd-none'); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('add-custom-fields*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('add-custom-fields.index')); ?>">
                    <?php echo e(__('messages.custom_field.custom_field')); ?>

                </a>
            </li>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(Request::is('settings*', 'currency-settings*', 'hospital-schedules', 'operation-categories*', 'operations*', 'payment-gateways*', 'add-custom-fields*', 'queue-theme*') ? '' : 'd-none'); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('queue-theme*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('queue-theme-view')); ?>">
                    <?php echo e(__('messages.queue.patient_queue_theme')); ?>

                </a>
            </li>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Doctor')): ?>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('live-consultation*', 'live-meeting*', 'google-meet*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('google-meet*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('googlemeet.consultations.index')); ?>">
                    <?php echo e(__('messages.google_meet.connect_calendar')); ?>

                </a>
            </li>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Patient|Doctor')): ?>
            
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Doctor|Accountant|Case Manager|Receptionist|Pharmacist|Lab Technician|Nurse|Patient')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(moduleExists('Holiday')): ?>
                <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('calendar-view*') ? 'd-none' : ''); ?>">
                    <a class="nav-link p-0 <?php echo e(Request::is('calendar-view*') ? 'active' : ''); ?>"
                        href="<?php echo e(route('calendar.view')); ?>">
                        <?php echo e(__('holiday::messages.holidays')); ?>

                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
<?php /**PATH /home/z/my-project/hms/resources/views/layouts/sub_menu.blade.php ENDPATH**/ ?>