<?php
    $modules = \App\Models\Module::cacheFor(now()->addDays())->toBase()->get();
?>

















<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    
    <li class="nav-item <?php echo e(Request::is('dashboard*') ? 'active' : ''); ?>">
        <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('dashboard')); ?>">
            <span class="aside-menu-icon me-3">
                <i class="fas fa-chart-pie"></i>
            </span>
            <span class="aside-menu-title"><?php echo e(__('messages.dashboard.dashboard')); ?></span>
        </a>
    </li>

    
    <li class="nav-item <?php echo e(Request::is('smart-patient-cards*', 'generate-patient-smart-cards*') ? 'active' : ''); ?>">
        <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('smart-patient-cards.index')); ?>">
            <span class="aside-menu-icon me-3">
                <i class="fas fa-id-card"></i>
            </span>
            <span class="aside-menu-title"><?php echo e(__('messages.patient_id_card.patient_id_card')); ?></span>
        </a>
    </li>

    
    
    
    
    
    
    
    
    
    
    
    

    
    <li
        class="nav-item <?php echo e(Request::is('users*', 'admins*', 'accountants*', 'nurses*', 'lab-technicians*', 'receptionists*', 'pharmacists*') ? 'active' : ''); ?>">
        <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('users.index')); ?>">
            <span class="aside-menu-icon me-3">
                <i class="fas fa-user-friends"></i>
            </span>
            <span class="aside-menu-title"><?php echo e(__('messages.users')); ?></span>
        </a>
    </li>

    
    <li
        class="nav-item <?php echo e(Request::is('odontogram*') ? 'active' : ''); ?>">
        <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('odontogram.index')); ?>">
            <span class="aside-menu-icon me-3">
                <i class="fa-solid fa-tooth"></i>
            </span>
            <span class="aside-menu-title"><?php echo e(__('Odontogram')); ?></span>
        </a>
    </li>

    <li class="nav-item <?php echo e(Request::is('add-on*') ? 'active' : ''); ?>">
        <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('addon.index')); ?>">
            <span class="aside-menu-icon me-3"><i class="fa-solid fa-upload"></i></span>
            <span class="aside-menu-title"><?php echo e(__('messages.addon.addon')); ?></span>
        </a>
    </li>


    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(moduleExists('Holiday')): ?>
        <li class="nav-item <?php echo e(Request::is('annual-holidays*', 'calendar-view*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('annualHolidays.index')); ?>">
                <span class="aside-menu-icon me-3"><i class="fa-solid fa-signs-post"></i></span>
                <span class="aside-menu-title"><?php echo e(__('holiday::messages.holidays')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Appointments', $modules)): ?>
        <li class="nav-item <?php echo e(Request::is('appointment*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('appointments.index')); ?>">
                <span class="aside-menu-icon me-3"><i class="fas fa-calendar-check"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.appointments')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $ipd = getMenuLinks(\App\Models\User::MAIN_IPD);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ipd): ?>
        <li class="nav-item  <?php echo e(Request::is('ipds*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($ipd); ?>"
                title="<?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?>">
                <span class="aside-menu-icon me-3">
                    <i class="fa-solid fa-hospital-user"></i>
                </span>
                <span class="aside-menu-title"><?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?></span>
                <span class="d-none"><?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $opd = getMenuLinks(\App\Models\User::MAIN_OPD);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($opd): ?>
        <li class="nav-item  <?php echo e(Request::is('opds*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($opd); ?>"
                title="<?php echo e(__('messages.opd_patient.opd_patient_out')); ?>">
                <span class="aside-menu-icon me-3">
                    <i class="fa-solid fa-stethoscope"></i>
                </span>
                <span class="aside-menu-title"><?php echo e(__('messages.opd_patient.opd_patient_out')); ?></span>
                <span class="d-none"><?php echo e(__('messages.opd_patient.opd_patient_out')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $billingMGT = getMenuLinks(\App\Models\User::MAIN_BILLING_MGT);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($billingMGT): ?>
        <li
            class="nav-item  <?php echo e(Request::is('manual-billing-payments*', 'accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($billingMGT); ?>">
                <span class="aside-menu-icon me-3"><i class="fas fa-file-invoice-dollar"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.billing')); ?></span>
                <span class="d-none"><?php echo e(__('messages.accountant.accountants')); ?></span>
                <span class="d-none"><?php echo e(__('messages.employee_payrolls')); ?></span>
                <span class="d-none"><?php echo e(__('messages.invoices')); ?></span>
                <span class="d-none"><?php echo e(__('messages.payments')); ?></span>
                <span class="d-none"><?php echo e(__('messages.payment_reports')); ?></span>
                <span class="d-none"><?php echo e(__('messages.advanced_payments')); ?></span>
                <span class="d-none"><?php echo e(__('messages.bills')); ?></span>
                <span class="d-none"><?php echo e(__('messages.bill.manual_bill')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php
    $bedMGT = getMenuLinks(\App\Models\User::MAIN_BED_MGT);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($bedMGT): ?>
        
        <li
            class="nav-item  <?php echo e(Request::is('bed-types*', 'beds*', 'bed-assigns*', 'bulk-beds', 'bed-status') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('bed-status')); ?>">
                <span class="aside-menu-icon me-3"><i class="fas fa-bed"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.bed_management')); ?></span>
                <span class="d-none"><?php echo e(__('messages.bed_types')); ?></span>
                <span class="d-none"><?php echo e(__('messages.beds')); ?></span>
                <span class="d-none"><?php echo e(__('messages.bed_assigns')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $bloodbankMGT = getMenuLinks(\App\Models\User::MAIN_BLOOD_BANK_MGT);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($bloodbankMGT): ?>
        <li
            class="nav-item  <?php echo e(Request::is('blood-banks*', 'blood-donors*', 'blood-donations*', 'blood-issues*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($bloodbankMGT); ?>">
                <span class="aside-menu-icon me-3"><i class="fas fa-tint"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.blood_bank')); ?></span>
                <span class="d-none"><?php echo e(__('messages.blood_donors')); ?></span>
                <span class="d-none"><?php echo e(__('messages.blood_donations')); ?></span>
                <span class="d-none"><?php echo e(__('messages.blood_issues')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $documentMGT = getMenuLinks(\App\Models\User::MAIN_DOCUMENT);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($documentMGT): ?>
        <li class="nav-item <?php echo e(Request::is('documents*', 'document-types*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($documentMGT); ?>">
                <span class="aside-menu-icon me-3"><i class="fas fa-file"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.documents')); ?></span>
                <span class="d-none"><?php echo e(__('messages.document_types')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $doctorMGT = getMenuLinks(\App\Models\User::MAIN_DOCTOR);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($doctorMGT): ?>
        <li
            class="nav-item  <?php echo e(Request::is('doctors*', 'doctor-departments*', 'schedules*', 'holidays*', 'breaks*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($doctorMGT); ?>">
                <span class="aside-menu-icon me-3"><i class="fa fa-user-md"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.doctors')); ?></span>
                <span class="d-none"><?php echo e(__('messages.doctor_departments')); ?></span>
                <span class="d-none"><?php echo e(__('messages.schedules')); ?></span>
                <span class="d-none"><?php echo e(__('messages.holiday.doctor_holiday')); ?></span>
                <span class="d-none"><?php echo e(__('messages.lunch_break.lunch_breaks')); ?></span>
                <span class="d-none"><?php echo e(__('messages.prescriptions')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php
    $prescriptionMGT = getMenuLinks(\App\Models\User::MAIN_PRESCRIPTION);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($prescriptionMGT): ?>
        <li class="nav-item <?php echo e(Request::is('prescriptions*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3}}" href="<?php echo e($prescriptionMGT); ?>">
                <span class="aside-menu-icon me-3"><i class="fa-solid fa-file-prescription"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.prescriptions')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    

    

    
    <?php
    $diagnosisMGT = getMenuLinks(\App\Models\User::MAIN_DIAGNOSIS);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($diagnosisMGT): ?>
        <li class="nav-item  <?php echo e(Request::is('diagnosis-categories*', 'patient-diagnosis-test*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($diagnosisMGT); ?>">
                <span class="aside-menu-icon me-3"><i class="fas fa-diagnoses"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.patient_diagnosis_test.diagnosis')); ?></span>
                <span class="d-none"><?php echo e(__('messages.patient_diagnosis_test.diagnosis_category')); ?></span>
                <span class="d-none"><?php echo e(__('messages.patient_diagnosis_test.diagnosis_test')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Enquires', $modules)): ?>
        <li class="nav-item  <?php echo e(Request::is('enquiries*') || Request::is('enquiry*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('enquiries')); ?>">
                <span class="aside-menu-icon me-3"><i class="fas fa-question-circle"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.enquiries')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $financeMGT = getMenuLinks(\App\Models\User::MAIN_FINANCE);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($financeMGT): ?>
        <li class="nav-item  <?php echo e(Request::is('incomes*', 'expenses*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($financeMGT); ?>">
                <span class="aside-menu-icon me-3"><i class="fas fa-money-bill"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.finance')); ?></span>
                <span class="d-none"><?php echo e(__('messages.incomes.incomes')); ?></span>
                <span class="d-none"><?php echo e(__('messages.expenses')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $frontOfficeMGT = getMenuLinks(\App\Models\User::MAIN_FRONT_OFFICE);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($frontOfficeMGT): ?>
        <li class="nav-item  <?php echo e(Request::is('call-logs*', 'visitor*', 'receives*', 'dispatches*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($frontOfficeMGT); ?>">
                <span class="aside-menu-icon me-3"><i class="fa fa-dungeon"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.front_office')); ?></span>
                <span class="d-none"><?php echo e(__('messages.call_logs')); ?></span>
                <span class="d-none"><?php echo e(__('messages.visitors')); ?></span>
                <span class="d-none"><?php echo e(__('messages.postal_receive')); ?></span>
                <span class="d-none"><?php echo e(__('messages.postal_dispatch')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <li
        class="nav-item <?php echo e(Request::is('front-settings*', 'notice-boards*', 'testimonials*', 'front-cms-services*','complaints*') ? 'active' : ''); ?>">
        <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('front.settings.index')); ?>">
            <span class="aside-menu-icon me-3"><i class="fas fa fa-cog"></i></span>
            <span class="aside-menu-title"><?php echo e(__('messages.front_cms')); ?></span>
            <span class="d-none"><?php echo e(__('messages.notice_boards')); ?></span>
            <span class="d-none"><?php echo e(__('messages.testimonials')); ?></span>
            <span class="d-none"><?php echo e(__('messages.cms')); ?></span>
            <span class="d-none"><?php echo e(__('messages.front_cms_services')); ?></span>
            <span class="d-none"><?php echo e(__('messages.complaint')); ?></span>
        </a>
    </li>

    
    <?php
    $hospitalCharge = getMenuLinks(\App\Models\User::MAIN_HOSPITAL_CHARGE);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($hospitalCharge): ?>
        <li class="nav-item  <?php echo e(Request::is('charge-categories*', 'charges*', 'doctor-opd-charges*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($hospitalCharge); ?>">
                <span class="aside-menu-icon me-3"><i class="fas fa-coins"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.hospital_charges')); ?></span>
                <span class="d-none"><?php echo e(__('messages.charge_categories')); ?></span>
                <span class="d-none"><?php echo e(__('messages.charges')); ?></span>
                <span class="d-none"><?php echo e(__('messages.doctor_opd_charges')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $inventoryMgt = getMenuLinks(\App\Models\User::MAIN_INVENTORY);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($inventoryMgt): ?>
        <li
            class="nav-item <?php echo e(Request::is('item-categories*', 'items*', 'item-stocks*', 'issued-items*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($inventoryMgt); ?>">
                <span class="aside-menu-icon me-3"><i class="fas fa-luggage-cart"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.inventory')); ?></span>
                <span class="d-none"><?php echo e(__('messages.items_categories')); ?></span>
                <span class="d-none"><?php echo e(__('messages.items')); ?></span>
                <span class="d-none"><?php echo e(__('messages.items_stocks')); ?></span>
                <span class="d-none"><?php echo e(__('messages.issued_items')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $liveConsultation = getMenuLinks(\App\Models\User::MAIN_LIVE_CONSULATION);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($liveConsultation): ?>
        <li class="nav-item  <?php echo e(Request::is('live-consultation*', 'live-meeting*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($liveConsultation); ?>">
                <span class="aside-menu-icon me-3"><i class="fa fa-video"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.live_consultations')); ?></span>
                <span class="d-none"><?php echo e(__('messages.live_meetings')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $medicineMgt = getMenuLinks(\App\Models\User::MAIN_MEDICINES);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($medicineMgt): ?>
        <li
            class="nav-item  <?php echo e(Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*', 'used-medicine*', 'medicine-bills*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($medicineMgt); ?>">
                <span class="aside-menu-icon me-3"><i class="fas fa-capsules"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.medicines')); ?></span>
                <span class="d-none"><?php echo e(__('messages.medicine_categories')); ?></span>
                <span class="d-none"><?php echo e(__('messages.medicine_brands')); ?></span>
                <span class="d-none"><?php echo e(__('messages.medicines')); ?></span>
                <span class="d-none"><?php echo e(__('messages.purchase_medicine.purchase_medicine')); ?></span>
                <span class="d-none"><?php echo e(__('messages.used_medicine.used_medicine')); ?></span>
                <span class="d-none"><?php echo e(__('messages.medicine_bills.medicine_bills')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $patientCaseMgt = getMenuLinks(\App\Models\User::MAIN_PATIENT_CASE);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($patientCaseMgt): ?>
        <li
            class="nav-item  <?php echo e(Request::is('patients*', 'patient-cases*', 'case-handlers*', 'patient-admissions*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($patientCaseMgt); ?>">
                <span class="aside-menu-icon me-3">
                    <i class="fas fa-user-injured"></i>
                </span>
                <span class="aside-menu-title"><?php echo e(__('messages.patients')); ?></span>
                <span class="d-none"><?php echo e(__('messages.cases')); ?></span>
                <span class="d-none"><?php echo e(__('messages.case_handlers')); ?></span>
                <span class="d-none"><?php echo e(__('messages.patient_admissions')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $pathologyMgt = getMenuLinks(\App\Models\User::MAIN_PATHOLOGY);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($pathologyMgt): ?>
        <li
            class="nav-item  <?php echo e(Request::is('pathology-categories*', 'pathology-tests*', 'pathology-units*', 'pathology-parameters*', 'pathology-tests*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($pathologyMgt); ?>">
                <span class="aside-menu-icon me-3"><i class="fa fa-flask"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.pathologies')); ?></span>
                <span class="d-none"><?php echo e(__('messages.pathology_categories')); ?></span>
                <span class="d-none"><?php echo e(__('messages.pathology_tests')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $reportMgt = getMenuLinks(\App\Models\User::MAIN_REPORT);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($reportMgt): ?>
        <li
            class="nav-item  <?php echo e(Request::is('birth-reports*', 'death-reports*', 'investigation-reports*', 'operation-reports*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($reportMgt); ?>">
                <span class="aside-menu-icon me-3"><i class="fas fa-file-medical"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.reports')); ?></span>
                <span class="d-none"><?php echo e(__('messages.birth_reports')); ?></span>
                <span class="d-none"><?php echo e(__('messages.death_reports')); ?></span>
                <span class="d-none"><?php echo e(__('messages.investigation_reports')); ?></span>
                <span class="d-none"><?php echo e(__('messages.operation_reports')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $radiology = getMenuLinks(\App\Models\User::MAIN_RADIOLOGY);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($radiology): ?>
        <li class="nav-item <?php echo e(Request::is('radiology-categories*', 'radiology-tests*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($radiology); ?>">
                <span class="aside-menu-icon me-3"><i class="fa fa-x-ray"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.radiologies')); ?></span>
                <span class="d-none"><?php echo e(__('messages.radiology_categories')); ?></span>
                <span class="d-none"><?php echo e(__('messages.radiology_tests')); ?></span>
            </a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <?php
    $serviceMgt = getMenuLinks(\App\Models\User::MAIN_SERVICE);
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($serviceMgt): ?>
        <li
            class="nav-item <?php echo e(Request::is('insurances*', 'packages*', 'services*', 'ambulances*', 'ambulance-calls*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($serviceMgt); ?>">
                <span class="aside-menu-icon me-3"><i class="fas fa-box"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.services')); ?></span>
                <span class="d-none"><?php echo e(__('messages.insurances')); ?></span>
                <span class="d-none"><?php echo e(__('messages.packages')); ?></span>
                <span class="d-none"><?php echo e(__('messages.services')); ?></span>
                <span class="d-none"><?php echo e(__('messages.ambulances')); ?></span>
                <span class="d-none"><?php echo e(__('messages.ambulance_calls')); ?></span>
            </a>
        </li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        
        <?php
        $smsMailMgt = getMenuLinks(\App\Models\User::MAIN_SMS_MAIL);
        ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($smsMailMgt): ?>
            <li class="nav-item  <?php echo e(Request::is('sms*', 'mail*') ? 'active' : ''); ?>">
                <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($smsMailMgt); ?>"
                    title="<?php echo e(__('messages.sms_mail')); ?>">
                    <span class="aside-menu-icon me-3">
                        <i class="fas fa-bell"></i>
                    </span>
                    <span class="aside-menu-title"><?php echo e(__('messages.sms.sms')); ?>/<?php echo e(__('messages.mail')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.cases')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.case_handlers')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.patient_admissions')); ?></span>
                </a>
            </li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


            <li class="nav-item  <?php echo e(Request::is('email-template*') || Request::is('email-template*') ? 'active' : ''); ?>">
                <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('email-template.index')); ?>">
                    <span class="aside-menu-icon me-3"><i class="fas fa-envelope-open-text"></i></span>
                    <span class="aside-menu-title"><?php echo e(__('messages.email_template.email_template')); ?></span>
                </a>
            </li>

        
        <li
            class="nav-item  <?php echo e(Request::is('settings*', 'hospital-schedules*', 'currency-settings*', 'operation-categories*', 'operations*', 'payment-gateways*', 'add-custom-fields*') ? 'active' : ''); ?>">
            <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('settings.edit')); ?>">
                <span class="aside-menu-icon me-3"><i class="fa fa-cogs"></i></span>
                <span class="aside-menu-title"><?php echo e(__('messages.settings')); ?></span>
                <span class="d-none"><?php echo e(__('messages.general')); ?></span>
                <span class="d-none"><?php echo e(__('messages.sidebar_setting')); ?></span>
            </a>
        </li>

        
        <?php
        $vaccinationsPatient = getMenuLinks(\App\Models\User::MAIN_VACCINATION_MGT);
        ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($vaccinationsPatient): ?>
            <li class="nav-item  <?php echo e(Request::is('vaccinated-patients*', 'vaccinations*') ? 'active' : ''); ?>">
                <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($vaccinationsPatient); ?>">
                    <span class="aside-menu-icon me-3">
                        <i class="fas fa-syringe"></i>
                    </span>
                    <span class="aside-menu-title"><?php echo e(__('messages.vaccinations')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.vaccinated_patients')); ?></span>
                </a>
            </li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::user()->email_verified_at != null): ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Doctor')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Appointments', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('appointments*','patient-queue*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('appointments.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="nav-icon fas fa-calendar-check"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.appointments')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

             
             <li class="nav-item <?php echo e(Request::is('odontogram*') ? 'active' : ''); ?>">
                <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('odontogram.index')); ?>">
                    <span class="aside-menu-icon me-3">
                        <i class="fa-solid fa-tooth"></i>
                    </span>
                    <span class="aside-menu-title"><?php echo e(__('Odontogram')); ?></span>
                </a>
            </li>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(moduleExists('Holiday')): ?>
                <li class="nav-item <?php echo e(Request::is('annual-holidays*', 'calendar-view*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('calendar.view')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa-solid fa-signs-post"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('holiday::messages.holidays')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php
            $bedDoctorMGT = getMenuLinks(\App\Models\User::MAIN_DOCTOR_BED_MGT);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($bedDoctorMGT): ?>
                
                <li class="nav-item  <?php echo e(Request::is('bed-assigns*', 'bed-status*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($bedDoctorMGT); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-bed"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.bed_management')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.bed_assigns')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctors', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('employee/doctor*', 'doctors*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/doctor')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-user-md"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.doctors')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.schedules')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.prescriptions')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Schedules', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('schedules*', 'holidays*', 'breaks*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3"
                        href="<?php echo e(route('schedules.edit', getDoctorSchedule())); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-calendar"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.schedules')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php
            $prescriptionMGT = getMenuLinks(\App\Models\User::MAIN_PRESCRIPTION);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($prescriptionMGT): ?>
                <li class="nav-item <?php echo e(Request::is('prescriptions*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($prescriptionMGT); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa-solid fa-file-prescription"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.prescriptions')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Documents', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('documents*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('documents.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-file"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.documents')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $diagnosisDoctorMGT = getMenuLinks(\App\Models\User::MAIN_DIAGNOSIS);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($diagnosisDoctorMGT): ?>
                <li
                    class="nav-item  <?php echo e(Request::is('diagnosis-categories*', 'patient-diagnosis-test*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($diagnosisDoctorMGT); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-diagnoses"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.patient_diagnosis_test.diagnosis')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.patient_diagnosis_test.diagnosis_category')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.patient_diagnosis_test.diagnosis_test')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Employee Noticeboard', $modules)): ?>
                <li class="nav-item <?php echo e(Request::is('employee/notice-board*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/notice-board')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa fa-cog"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.notice_boards')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.notice_boards')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $ipd = getMenuLinks(\App\Models\User::MAIN_IPD);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ipd): ?>
                <li class="nav-item  <?php echo e(Request::is('ipds*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($ipd); ?>"
                        title="<?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?>">
                        <span class="aside-menu-icon me-3">
                            <i class="fa-solid fa-hospital-user"></i>
                        </span>
                        <span class="aside-menu-title"><?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $opd = getMenuLinks(\App\Models\User::MAIN_OPD);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($opd): ?>
                <li class="nav-item  <?php echo e(Request::is('opds*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($opd); ?>"
                        title="<?php echo e(__('messages.opd_patient.opd_patient_out')); ?>">
                        <span class="aside-menu-icon me-3">
                            <i class="fa-solid fa-stethoscope"></i>
                        </span>
                        <span class="aside-menu-title"><?php echo e(__('messages.opd_patient.opd_patient_out')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.opd_patient.opd_patient_out')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $liveConsultation = getMenuLinks(\App\Models\User::MAIN_LIVE_CONSULATION);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($liveConsultation): ?>
                <li
                    class="nav-item  <?php echo e(Request::is('live-consultation*', 'live-meeting*', 'google-meet*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($liveConsultation); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-video"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.live_consultations')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.live_meetings')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'My Payrolls', $modules)): ?>
                <li class="nav-item <?php echo e(Request::is('employee/payroll*', 'employee-payrolls*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('payroll')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-chart-pie"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.my_payrolls')); ?></span>
                    </a>
                </li>

                
                <?php
                $patientDoctorCaseMgt = getMenuLinks(\App\Models\User::MAIN_PATIENT_CASE);
                ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($patientDoctorCaseMgt): ?>
                    <li
                        class="nav-item  <?php echo e(Request::is('patients*', 'patient-admissions*', 'patient-cases*') ? 'active' : ''); ?>">
                        <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($patientDoctorCaseMgt); ?>">
                            <span class="aside-menu-icon me-3"><i class="fas fa-user-injured"></i></span>
                            <span class="aside-menu-title"><?php echo e(__('messages.patients')); ?></span>
                            <span class="d-none"><?php echo e(__('messages.patient_admissions')); ?></span>
                        </a>
                    </li>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                
                <?php
                $reportDoctorMgt = getMenuLinks(\App\Models\User::MAIN_REPORT);
                ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($reportDoctorMgt): ?>
                    <li
                        class="nav-item  <?php echo e(Request::is('birth-reports*', 'death-reports*', 'investigation-reports*', 'operation-reports*') ? 'active' : ''); ?>">
                        <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($reportDoctorMgt); ?>">
                            <span class="aside-menu-icon me-3"><i class="fas fa-file-medical"></i></span>
                            <span class="aside-menu-title"><?php echo e(__('messages.reports')); ?></span>
                            <span class="d-none"><?php echo e(__('messages.birth_reports')); ?></span>
                            <span class="d-none"><?php echo e(__('messages.death_reports')); ?></span>
                            <span class="d-none"><?php echo e(__('messages.investigation_reports')); ?></span>
                            <span class="d-none"><?php echo e(__('messages.operation_reports')); ?></span>
                        </a>
                    </li>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'SMS', $modules)): ?>
                    <li class="nav-item <?php echo e(Request::is('sms*') ? 'active' : ''); ?>">
                        <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('sms.index')); ?>">
                            <span class="aside-menu-icon me-3"><i class="fas fa fa-sms"></i></span>
                            <span class="aside-menu-title"><?php echo e(__('messages.sms.sms')); ?></span>
                        </a>
                    </li>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>

        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Case Manager')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctors', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('employee/doctor*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/doctor')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-user-md"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.doctors')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(moduleExists('Holiday')): ?>
                <li class="nav-item <?php echo e(Request::is('annual-holidays*', 'calendar-view*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('calendar.view')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa-solid fa-signs-post"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('holiday::messages.holidays')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Employee Noticeboard', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('employee/notice-board*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/notice-board')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa fa-cog"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.notice_boards')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.notice_boards')); ?></span>
                    </a>
                </li>

                
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Live Meetings', $modules)): ?>
                    <li class="nav-item  <?php echo e(Request::is('live-meeting*') ? 'active' : ''); ?>">
                        <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('live.meeting.index')); ?>">
                            <span class="aside-menu-icon me-3"><i class="fa fa-file-video"></i></span>
                            <span class="aside-menu-title"><?php echo e(__('messages.live_meetings')); ?></span>
                        </a>
                    </li>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'My Payrolls', $modules)): ?>
                    <li class="nav-item  <?php echo e(Request::is('employee/payroll*', 'employee-payrolls*') ? 'active' : ''); ?>">
                        <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('payroll')); ?>">
                            <span class="aside-menu-icon me-3"><i class="fas fa-chart-pie"></i></span>
                            <span class="aside-menu-title"><?php echo e(__('messages.my_payrolls')); ?></span>
                        </a>
                    </li>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                
                <?php
                $patientCaseMangerCaseMgt = getMenuLinks(\App\Models\User::MAIN_CASE_MANGER_PATIENT_CASE);
                ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($patientCaseMangerCaseMgt): ?>
                    <li class="nav-item  <?php echo e(Request::is('patient-admissions*', 'patient-cases*') ? 'active' : ''); ?>">
                        <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($patientCaseMangerCaseMgt); ?>"
                            title="<?php echo e(__('messages.patients')); ?>">
                            <span class="aside-menu-icon me-3"><i class="fas fa-user-injured"></i></span>
                            <span class="aside-menu-title"><?php echo e(__('messages.patients')); ?></span>
                            <span class="d-none"><?php echo e(__('messages.case_handlers')); ?></span>
                            <span class="d-none"><?php echo e(__('messages.patient_admissions')); ?></span>
                        </a>
                    </li>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                
                <?php
                $serviceCaseMangerCaseMgt = getMenuLinks(\App\Models\User::MAIN_CASE_MANGER_SERVICE);
                ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($serviceCaseMangerCaseMgt): ?>
                    <li class="nav-item  <?php echo e(Request::is('ambulances*', 'ambulance-calls*') ? 'active' : ''); ?>">
                        <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($serviceCaseMangerCaseMgt); ?>"
                            title="<?php echo e(__('messages.services')); ?>">
                            <span class="aside-menu-icon me-3"><i class="fas fa-box"></i></span>
                            <span class="aside-menu-title"><?php echo e(__('messages.services')); ?></span>
                            <span class="d-none"><?php echo e(__('messages.ambulances')); ?></span>
                            <span class="d-none"><?php echo e(__('messages.ambulance_calls')); ?></span>
                        </a>
                    </li>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                
                <?php
                $smsMailCaseManagerMgt = getMenuLinks(\App\Models\User::MAIN_SMS_MAIL);
                ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($smsMailCaseManagerMgt): ?>
                    <li class="nav-item  <?php echo e(Request::is('sms*', 'mail*') ? 'active' : ''); ?>">
                        <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('sms.index')); ?>"
                            title="<?php echo e(__('messages.sms_mail')); ?>">
                            <span class="aside-menu-icon me-3">
                                <i class="fas fa-bell"></i>
                            </span>
                            <span class="aside-menu-title"><?php echo e(__('messages.sms.sms')); ?>/<?php echo e(__('messages.mail')); ?></span>
                        </a>
                    </li>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>

        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Receptionist')): ?>
            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Appointments', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('appointments*','patient-queue*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('appointments.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-calendar-check"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.appointments')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(moduleExists('Holiday')): ?>
                <li class="nav-item <?php echo e(Request::is('annual-holidays*', 'calendar-view*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('calendar.view')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa-solid fa-signs-post"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('holiday::messages.holidays')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <li
                class="nav-item <?php echo e(Request::is('smart-patient-cards*', 'generate-patient-smart-cards*') ? 'active' : ''); ?>">
                <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('smart-patient-cards.index')); ?>">
                    <span class="aside-menu-icon me-3">
                        <i class="fas fa-id-card"></i>
                    </span>
                    <span class="aside-menu-title"><?php echo e(__('messages.patient_id_card.patient_id_card')); ?></span>
                </a>
            </li>

            
            

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Bills', $modules)): ?>
                <li
                    class="nav-item  <?php echo e(Request::is('manual-billing-payments*', 'accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('bills.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-file-invoice-dollar"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.billing')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.employee_payrolls')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.invoices')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.payments')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.payment_reports')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.advanced_payments')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.bills')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.bill.manual_bill')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctors', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('doctors*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('doctors.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-user-md"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.doctors')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $diagnosisReceptionistMGT = getMenuLinks(\App\Models\User::MAIN_DIAGNOSIS);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($diagnosisReceptionistMGT): ?>
                <li
                    class="nav-item  <?php echo e(Request::is('diagnosis-categories*', 'patient-diagnosis-test*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($diagnosisReceptionistMGT); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-diagnoses"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.patient_diagnosis_test.diagnosis')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.patient_diagnosis_test.diagnosis_category')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.patient_diagnosis_test.diagnosis_test')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Enquires', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('enquiries*') || Request::is('enquiry*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('enquiries')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-question-circle"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.enquiries')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $frontReceptionistOfficeMGT = getMenuLinks(\App\Models\User::MAIN_FRONT_OFFICE);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($frontReceptionistOfficeMGT): ?>
                <li
                    class="nav-item <?php echo e(Request::is('call-logs*', 'visitor*', 'receives*', 'dispatches*') ? 'active' : ''); ?>">
                    <a href="<?php echo e($frontReceptionistOfficeMGT); ?>" class="nav-link  d-flex align-items-center py-3">
                        <span class="aside-menu-icon me-3"><i class="fa fa-dungeon"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.front_office')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.call_logs')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.visitors')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.postal_receive')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.postal_dispatch')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Employee Noticeboard', $modules)): ?>
                <li class="nav-item <?php echo e(Request::is('employee/notice-board', 'testimonials*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/notice-board')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa fa-cog"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.notice_boards')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.notice_boards')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            

            <li class="nav-item <?php echo e(Request::is('complaints*') ? 'active' : ''); ?>">
                <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('complaints.index')); ?>">
                    <span class="aside-menu-icon me-3">
                        <i class="fas fa-exclamation-circle"></i>
                    </span>
                    <span class="aside-menu-title"><?php echo e(__('messages.complaint')); ?></span>
                </a>
            </li>


            
            <?php
            $ReceptionisthospitalCharge = getMenuLinks(\App\Models\User::MAIN_HOSPITAL_CHARGE);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ReceptionisthospitalCharge): ?>
                <li
                    class="nav-item  <?php echo e(Request::is('charge-categories*', 'charges*', 'doctor-opd-charges*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($ReceptionisthospitalCharge); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-coins"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.hospital_charges')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.charge_categories')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.charges')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.doctor_opd_charges')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $ipd = getMenuLinks(\App\Models\User::MAIN_IPD);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ipd): ?>
                <li class="nav-item  <?php echo e(Request::is('ipds*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($ipd); ?>"
                        title="<?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?>">
                        <span class="aside-menu-icon me-3">
                            <i class="fa-solid fa-hospital-user"></i>
                        </span>
                        <span class="aside-menu-title"><?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $opd = getMenuLinks(\App\Models\User::MAIN_OPD);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($opd): ?>
                <li class="nav-item  <?php echo e(Request::is('opds*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($opd); ?>"
                        title="<?php echo e(__('messages.opd_patient.opd_patient_out')); ?>">
                        <span class="aside-menu-icon me-3">
                            <i class="fa-solid fa-stethoscope"></i>
                        </span>
                        <span class="aside-menu-title"><?php echo e(__('messages.opd_patient.opd_patient_out')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.opd_patient.opd_patient_out')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Live Meetings', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('live-meeting*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('live.meeting.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-file-video"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.live_meetings')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.live_meetings')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'My Payrolls', $modules)): ?>
                <li class="nav-item <?php echo e(Request::is('employee/payroll*', 'employee-payrolls*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('payroll')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-chart-pie"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.my_payrolls')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $receptionistPatientCaseMgt = getMenuLinks(\App\Models\User::MAIN_PATIENT_CASE);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($receptionistPatientCaseMgt): ?>
                <li
                    class="nav-item <?php echo e(Request::is('patients*', 'patient-cases*', 'case-handlers*', 'patient-admissions*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($receptionistPatientCaseMgt); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-user-injured"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.patients')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.cases')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.case_handlers')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.patient_admissions')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $receptionistPathologyMgt = getMenuLinks(\App\Models\User::MAIN_PATHOLOGY);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($receptionistPathologyMgt): ?>
                <li
                    class="nav-item  <?php echo e(Request::is('pathology-categories*', 'pathology-tests*', 'pathology-units*', 'pathology-parameters*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($receptionistPathologyMgt); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-flask"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.pathologies')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.pathology_categories')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.pathology_tests')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $receptionistRadiology = getMenuLinks(\App\Models\User::MAIN_RADIOLOGY);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($receptionistRadiology): ?>
                <li class="nav-item <?php echo e(Request::is('radiology-categories*', 'radiology-tests*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($receptionistRadiology); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-x-ray"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.radiologies')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.radiology_categories')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.radiology_tests')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $receptionistServiceMgt = getMenuLinks(\App\Models\User::MAIN_SERVICE);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($receptionistServiceMgt): ?>
                <li
                    class="nav-item <?php echo e(Request::is('insurances*', 'packages*', 'services*', 'ambulances*', 'ambulance-calls*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($receptionistServiceMgt); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-box"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.services')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.insurances')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.packages')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.services')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.ambulances')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.ambulance_calls')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $receptionistSmsMailMgt = getMenuLinks(\App\Models\User::MAIN_SMS_MAIL);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($receptionistSmsMailMgt): ?>
                <li class="nav-item  <?php echo e(Request::is('sms*', 'mail*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($receptionistSmsMailMgt); ?>"
                        title="<?php echo e(__('messages.sms_mail')); ?>">
                        <span class="aside-menu-icon me-3">
                            <i class="fas fa-bell"></i>
                        </span>
                        <span class="aside-menu-title"><?php echo e(__('messages.sms.sms')); ?>/<?php echo e(__('messages.mail')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.sms.sms')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.mail')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            
            
            
            
            
            
            
            
        <?php endif; ?>

        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Pharmacist')): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctors', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('employee/doctor*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/doctor')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-user-md"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.doctors')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(moduleExists('Holiday')): ?>
                <li class="nav-item <?php echo e(Request::is('annual-holidays*', 'calendar-view*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('calendar.view')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa-solid fa-signs-post"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('holiday::messages.holidays')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Prescriptions', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('employee/prescriptions*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/prescriptions')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-prescription"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.prescriptions')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Employee Noticeboard', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('employee/notice-board*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/notice-board')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa fa-cog"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.notice_boards')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.notice_boards')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Live Meetings', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('live-meeting*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('live.meeting.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-file-video"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.live_meetings')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $medicinePharmacistMgt = getMenuLinks(\App\Models\User::MAIN_MEDICINES);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($medicinePharmacistMgt): ?>
                <li
                    class="nav-item <?php echo e(Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*', 'used-medicine*', 'medicine-bills*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($medicinePharmacistMgt); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-capsules"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.medicines')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.medicine_categories')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.medicine_brands')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.medicines')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'My Payrolls', $modules)): ?>
                <li class="nav-item <?php echo e(Request::is('employee/payroll*', 'employee-payrolls*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('payroll')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-chart-pie"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.my_payrolls')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Pathology Tests', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('pathology-tests*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('pathology.test.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-flask"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.pathologies')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Radiology Tests', $modules)): ?>
                <li class="nav-item <?php echo e(Request::is('radiology-tests*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('radiology.test.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-x-ray"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.radiologies')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.radiology_tests')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'SMS', $modules)): ?>
                <li class="nav-item <?php echo e(Request::is('sms*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('sms.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa fa-sms"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.sms.sms')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>

        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Nurse')): ?>
            
            <?php $bedNurseMGT = getMenuLinks(\App\Models\User::MAIN_BED_MGT);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($bedNurseMGT): ?>
                <li
                    class="nav-item  <?php echo e(Request::is('bed-types*', 'beds*', 'bed-assigns*', 'bulk-beds', 'bed-status*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($bedNurseMGT); ?>">
                        <span class="aside-menu-icon me-3"><i class="nav-icon fas fa-bed"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.bed_management')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.bed_types')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.beds')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.bed_assigns')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php
            $ipd = getMenuLinks(\App\Models\User::MAIN_IPD);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ipd): ?>
                <li class="nav-item  <?php echo e(Request::is('ipds*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($ipd); ?>"
                        title="<?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?>">
                        <span class="aside-menu-icon me-3">
                            <i class="fa-solid fa-hospital-user"></i>
                        </span>
                        <span class="aside-menu-title"><?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $opd = getMenuLinks(\App\Models\User::MAIN_OPD);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($opd): ?>
                <li class="nav-item  <?php echo e(Request::is('opds*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($opd); ?>"
                        title="<?php echo e(__('messages.opd_patient.opd_patient_out')); ?>">
                        <span class="aside-menu-icon me-3">
                            <i class="fa-solid fa-stethoscope"></i>
                        </span>
                        <span class="aside-menu-title"><?php echo e(__('messages.opd_patient.opd_patient_out')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.opd_patient.opd_patient_out')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(moduleExists('Holiday')): ?>
                <li class="nav-item <?php echo e(Request::is('annual-holidays*', 'calendar-view*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('calendar.view')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa-solid fa-signs-post"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('holiday::messages.holidays')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Employee Noticeboard', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('employee/notice-board*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/notice-board')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa fa-cog"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.notice_boards')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.notice_boards')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Live Meetings', $modules)): ?>
                <li class="nav-item <?php echo e(Request::is('live-meeting*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('live.meeting.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-file-video"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.live_meetings')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'My Payrolls', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('employee/payroll*', 'employee-payroll*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('payroll')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-chart-pie"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.my_payrolls')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $medicinePharmacistMgt = getMenuLinks(\App\Models\User::MAIN_MEDICINES);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($medicinePharmacistMgt): ?>
                <li
                    class="nav-item <?php echo e(Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($medicinePharmacistMgt); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-capsules"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.medicines')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.medicine_categories')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.medicine_brands')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.medicines')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Prescriptions', $modules)): ?>
                <li class="nav-item <?php echo e(Request::is('prescriptions*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('prescriptions.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-prescription"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.prescriptions')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <li class="nav-item  <?php echo e(Request::is('diagnosis-categories*', 'patient-diagnosis-test*') ? 'active' : ''); ?>">
                <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('patient.diagnosis.test.index')); ?>">
                    <span class="aside-menu-icon me-3"><i class="fas fa-diagnoses"></i></span>
                    <span class="aside-menu-title"><?php echo e(__('messages.patient_diagnosis_test.diagnosis')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.patient_diagnosis_test.diagnosis_category')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.patient_diagnosis_test.diagnosis_test')); ?></span>
                </a>
            </li>

            <?php
            $reportMgt = getMenuLinks(\App\Models\User::MAIN_REPORT);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($reportMgt): ?>
                <li
                    class="nav-item  <?php echo e(Request::is('birth-reports*', 'death-reports*', 'investigation-reports*', 'operation-reports*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($reportMgt); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-file-medical"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.reports')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.birth_reports')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.death_reports')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.investigation_reports')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.operation_reports')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


            <li
                class="nav-item  <?php echo e(Request::is('doctors*', 'doctor-departments*', 'schedules*', 'holidays*', 'breaks*') ? 'active' : ''); ?>">
                <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('doctors.index')); ?>">
                    <span class="aside-menu-icon me-3"><i class="fa fa-user-md"></i></span>
                    <span class="aside-menu-title"><?php echo e(__('messages.doctors')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.doctor_departments')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.schedules')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.holiday.doctor_holiday')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.lunch_break.lunch_breaks')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.prescriptions')); ?></span>
                </a>
            </li>
        <?php endif; ?>

        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Lab Technician')): ?>
            
            <?php
            $bloodbankLabMGT = getMenuLinks(\App\Models\User::MAIN_BLOOD_BANK_MGT);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($bloodbankLabMGT): ?>
                <li
                    class="nav-item <?php echo e(Request::is('blood-banks*', 'blood-donors*', 'blood-donations*', 'blood-issues*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($bloodbankLabMGT); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-tint"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.blood_bank')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.blood_donors')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.blood_donations')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.blood_issues')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(moduleExists('Holiday')): ?>
                <li class="nav-item <?php echo e(Request::is('annual-holidays*', 'calendar-view*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('calendar.view')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa-solid fa-signs-post"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('holiday::messages.holidays')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctors', $modules)): ?>
                <li class="nav-item <?php echo e(Request::is('employee/doctor*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/doctor')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-user-md"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.doctors')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $ipd = getMenuLinks(\App\Models\User::MAIN_IPD);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ipd): ?>
                <li class="nav-item  <?php echo e(Request::is('ipds*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($ipd); ?>"
                        title="<?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?>">
                        <span class="aside-menu-icon me-3">
                            <i class="fa-solid fa-hospital-user"></i>
                        </span>
                        <span class="aside-menu-title"><?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $diagnosiLabMGT = getMenuLinks(\App\Models\User::MAIN_DIAGNOSIS);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($diagnosiLabMGT): ?>
                <li
                    class="nav-item <?php echo e(Request::is('diagnosis-categories*', 'patient-diagnosis-test*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($diagnosiLabMGT); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-diagnoses"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.patient_diagnosis_test.diagnosis')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.patient_diagnosis_test.diagnosis_category')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.patient_diagnosis_test.diagnosis_test')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Employee Noticeboard', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('employee/notice-board*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/notice-board')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa fa-cog"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.notice_boards')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.notice_boards')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Live Meetings', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('live-meeting*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('live.meeting.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-file-video"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.live_meetings')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $medicinelabMgt = getMenuLinks(\App\Models\User::MAIN_MEDICINES);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($medicinelabMgt): ?>
                <li
                    class="nav-item <?php echo e(Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*', 'used-medicine*', 'medicine-bills*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($medicinelabMgt); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-capsules"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.medicines')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.medicine_categories')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.medicine_brands')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.medicines')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'My Payrolls', $modules)): ?>
                <li class="nav-item <?php echo e(Request::is('employee/payroll*', 'employee-payrolls*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('payroll')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-chart-pie"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.my_payrolls')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Pathology Tests', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('pathology-tests*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('pathology.test.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-flask"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.pathologies')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.pathology_tests')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Radiology Tests', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('radiology-tests*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('radiology.test.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-x-ray"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.radiologies')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.radiology_tests')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>

        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Accountant')): ?>
            
            <?php
            $billingAccountMGT = getMenuLinks(\App\Models\User::MAIN_ACCOUNT_MANAGER_MGT);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($billingAccountMGT): ?>
                <li
                    class="nav-item <?php echo e(Request::is('accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'bills*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($billingAccountMGT); ?>">
                        <span class="aside-menu-icon me-3"><i class="fab fa-adn"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.account_manager')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.accounts')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.employee_payrolls')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.invoices')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.payments')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.bills')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(moduleExists('Holiday')): ?>
                <li class="nav-item <?php echo e(Request::is('calendar-view*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('calendar.view')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa-solid fa-signs-post"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('holiday::messages.holidays')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $financeAccountantMGT = getMenuLinks(\App\Models\User::MAIN_FINANCE);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($financeAccountantMGT): ?>
                <li class="nav-item <?php echo e(Request::is('incomes*', 'expenses*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($financeAccountantMGT); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-money-bill"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.finance')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.incomes.incomes')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.expenses')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Employee Noticeboard', $modules)): ?>
                <li class="nav-item <?php echo e(Request::is('employee/notice-board*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/notice-board')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa fa-cog"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.notice_boards')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.notice_boards')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Live Meetings', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('live-meeting*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('live.meeting.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-file-video"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.live_meetings')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'My Payrolls', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('employee/payroll*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('payroll')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-chart-pie"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.my_payrolls')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Services', $modules)): ?>
                <li class="nav-item <?php echo e(Request::is('services*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('services.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-box"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.services')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'SMS', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('sms*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('sms.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa fa-sms"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.sms.sms')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>

        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>

            <li class="nav-item <?php echo e(Request::is('patient-dashboard*') ? 'active' : ''); ?>">
                <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('patient.dashboard')); ?>">
                    <span class="aside-menu-icon me-3">
                        <i class="fas fa-chart-pie"></i>
                    </span>
                    <span class="aside-menu-title"><?php echo e(__('messages.dashboard.dashboard')); ?></span>
                </a>
            </li>


            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(moduleExists('Holiday')): ?>
                <li class="nav-item <?php echo e(Request::is('annual-holidays*', 'calendar-view*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('calendar.view')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa-solid fa-signs-post"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('holiday::messages.holidays')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Appointments', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('appointments*','patient-queue*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('appointments.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-calendar-check"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.appointments')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

             
            <li class="nav-item <?php echo e(Request::is('odontogram*') ? 'active' : ''); ?>">
                <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('odontogram.index')); ?>">
                    <span class="aside-menu-icon me-3">
                        <i class="fa-solid fa-tooth"></i>
                    </span>
                    <span class="aside-menu-title"><?php echo e(__('Odontogram')); ?></span>
                </a>
            </li>

            
            

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Bills', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('employee/bills*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/bills')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-rupee-sign"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.bills')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Documents', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('documents*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('documents.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-file"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.documents')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Employee Noticeboard', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('employee/notice-board*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/notice-board')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa fa-cog"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.notice_boards')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.notice_boards')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <li class="nav-item <?php echo e(Request::is('complaints*') ? 'active' : ''); ?>">
                <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('complaints.index')); ?>">
                    <span class="aside-menu-icon me-3">
                        <i class="fas fa-exclamation-circle"></i>
                    </span>
                    <span class="aside-menu-title"><?php echo e(__('messages.complaint')); ?></span>
                </a>
            </li>

            
            <li class="nav-item  <?php echo e(Request::is('patient/my-ipds*') ? 'active' : ''); ?>">
                <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('patient.ipd')); ?>"
                    title="<?php echo e(__('messages.ipd_opd')); ?>">
                    <span class="aside-menu-icon me-3">
                        <i class="fas fa-notes-medical"></i>
                    </span>
                    <span class="aside-menu-title"><?php echo e(__('messages.ipd_patient.ipd_patient_in')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.ipd_patients')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.opd_patients')); ?></span>
                </a>
            </li>

            <li class="nav-item  <?php echo e(Request::is('opds*', 'patient/my-opds*') ? 'active' : ''); ?>">
                <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('patient.opd')); ?>"
                    title="<?php echo e(__('messages.ipd_opd')); ?>">
                    <span class="aside-menu-icon me-3">
                        <i class="fa-solid fa-hospital-user"></i>
                    </span>
                    <span class="aside-menu-title"><?php echo e(__('messages.opd_patient.opd_patient_out')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.ipd_patients')); ?></span>
                    <span class="d-none"><?php echo e(__('messages.opd_patients')); ?></span>
                </a>
            </li>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Invoices', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('employee/invoices*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/invoices')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-file-invoice"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.invoices')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Live Consultations', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('live-consultation*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('live.consultation.index')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-video"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.live_consultations')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Patient Cases', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('patient/my-cases*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('patient/my-cases')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fa fa-briefcase-medical"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.patients_cases')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Patient Admissions', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('employee/patient-admissions*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(url('employee/patient-admissions')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-history"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.patient_admissions')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Prescriptions', $modules)): ?>
                <li class="nav-item <?php echo e(Request::is('patient/my-prescriptions*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('prescriptions.list')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-prescription"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.prescriptions')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('module', 'Vaccinated Patients', $modules)): ?>
                <li class="nav-item  <?php echo e(Request::is('patient/my-vaccinated*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e(route('patient.vaccinated')); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-head-side-mask"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.vaccinated_patients')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <?php
            $reportMgt = getMenuLinks(\App\Models\User::MAIN_REPORT);
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($reportMgt): ?>
                <li
                    class="nav-item  <?php echo e(Request::is('birth-reports*', 'death-reports*', 'investigation-reports*', 'operation-reports*', 'employee/patient-diagnosis-test*') ? 'active' : ''); ?>">
                    <a class="nav-link  d-flex align-items-center py-3" href="<?php echo e($reportMgt); ?>">
                        <span class="aside-menu-icon me-3"><i class="fas fa-file-medical"></i></span>
                        <span class="aside-menu-title"><?php echo e(__('messages.reports')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.birth_reports')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.death_reports')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.investigation_reports')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.operation_reports')); ?></span>
                        <span class="d-none"><?php echo e(__('messages.patient_diagnosis_test.diagnosis_test')); ?></span>
                    </a>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH /home/z/my-project/hms/resources/views/layouts/menu.blade.php ENDPATH**/ ?>