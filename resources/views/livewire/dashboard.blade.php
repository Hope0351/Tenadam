<style>
    .tn-widget-invoices .widget-icon { background: linear-gradient(135deg, #0D9488, #10B981) !important; box-shadow: 0 4px 14px rgba(13,148,136,0.3) !important; }
    .tn-widget-invoices h2 { background: linear-gradient(135deg, #0D9488, #10B981) !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; }
    .tn-widget-invoices > div::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, #0D9488, #10B981); border-radius: 16px 16px 0 0; }

    .tn-widget-bills .widget-icon { background: linear-gradient(135deg, #2563EB, #3B82F6) !important; box-shadow: 0 4px 14px rgba(37,99,235,0.3) !important; }
    .tn-widget-bills h2 { background: linear-gradient(135deg, #2563EB, #3B82F6) !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; }
    .tn-widget-bills > div::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, #2563EB, #3B82F6); border-radius: 16px 16px 0 0; }

    .tn-widget-payments .widget-icon { background: linear-gradient(135deg, #7C3AED, #8B5CF6) !important; box-shadow: 0 4px 14px rgba(124,58,237,0.3) !important; }
    .tn-widget-payments h2 { background: linear-gradient(135deg, #7C3AED, #8B5CF6) !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; }
    .tn-widget-payments > div::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, #7C3AED, #8B5CF6); border-radius: 16px 16px 0 0; }

    .tn-widget-advance .widget-icon { background: linear-gradient(135deg, #D97706, #F59E0B) !important; box-shadow: 0 4px 14px rgba(217,119,6,0.3) !important; }
    .tn-widget-advance h2 { background: linear-gradient(135deg, #D97706, #F59E0B) !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; }
    .tn-widget-advance > div::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, #D97706, #F59E0B); border-radius: 16px 16px 0 0; }

    .tn-widget-beds .widget-icon { background: linear-gradient(135deg, #059669, #34D399) !important; box-shadow: 0 4px 14px rgba(5,150,105,0.3) !important; }
    .tn-widget-beds h2 { background: linear-gradient(135deg, #059669, #34D399) !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; }
    .tn-widget-beds > div::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, #059669, #34D399); border-radius: 16px 16px 0 0; }

    .tn-widget-doctors .widget-icon { background: linear-gradient(135deg, #0891B2, #06B6D4) !important; box-shadow: 0 4px 14px rgba(8,145,178,0.3) !important; }
    .tn-widget-doctors h2 { background: linear-gradient(135deg, #0891B2, #06B6D4) !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; }
    .tn-widget-doctors > div::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, #0891B2, #06B6D4); border-radius: 16px 16px 0 0; }

    .tn-widget-patients .widget-icon { background: linear-gradient(135deg, #DC2626, #EF4444) !important; box-shadow: 0 4px 14px rgba(220,38,38,0.3) !important; }
    .tn-widget-patients h2 { background: linear-gradient(135deg, #DC2626, #EF4444) !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; }
    .tn-widget-patients > div::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, #DC2626, #EF4444); border-radius: 16px 16px 0 0; }

    .tn-widget-nurses .widget-icon { background: linear-gradient(135deg, #DB2777, #EC4899) !important; box-shadow: 0 4px 14px rgba(219,39,119,0.3) !important; }
    .tn-widget-nurses h2 { background: linear-gradient(135deg, #DB2777, #EC4899) !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; }
    .tn-widget-nurses > div::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, #DB2777, #EC4899); border-radius: 16px 16px 0 0; }

    .tn-widget-admins .widget-icon { background: linear-gradient(135deg, #4F46E5, #6366F1) !important; box-shadow: 0 4px 14px rgba(79,70,229,0.3) !important; }
    .tn-widget-admins h2 { background: linear-gradient(135deg, #4F46E5, #6366F1) !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; }
    .tn-widget-admins > div::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, #4F46E5, #6366F1); border-radius: 16px 16px 0 0; }

    .tn-widget-accountants .widget-icon { background: linear-gradient(135deg, #0284C7, #0EA5E9) !important; box-shadow: 0 4px 14px rgba(2,132,199,0.3) !important; }
    .tn-widget-accountants h2 { background: linear-gradient(135deg, #0284C7, #0EA5E9) !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; }
    .tn-widget-accountants > div::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, #0284C7, #0EA5E9); border-radius: 16px 16px 0 0; }

    .tn-widget-lab .widget-icon { background: linear-gradient(135deg, #9333EA, #A855F7) !important; box-shadow: 0 4px 14px rgba(147,51,234,0.3) !important; }
    .tn-widget-lab h2 { background: linear-gradient(135deg, #9333EA, #A855F7) !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; }
    .tn-widget-lab > div::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, #9333EA, #A855F7); border-radius: 16px 16px 0 0; }

    .tn-widget-pharmacists .widget-icon { background: linear-gradient(135deg, #059669, #10B981) !important; box-shadow: 0 4px 14px rgba(5,150,105,0.3) !important; }
    .tn-widget-pharmacists h2 { background: linear-gradient(135deg, #059669, #10B981) !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; }
    .tn-widget-pharmacists > div::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, #059669, #10B981); border-radius: 16px 16px 0 0; }

    .tn-widget-receptionists .widget-icon { background: linear-gradient(135deg, #CA8A04, #EAB308) !important; box-shadow: 0 4px 14px rgba(202,138,4,0.3) !important; }
    .tn-widget-receptionists h2 { background: linear-gradient(135deg, #CA8A04, #EAB308) !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; }
    .tn-widget-receptionists > div::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, #CA8A04, #EAB308); border-radius: 16px 16px 0 0; }
</style>

<div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="row g-3">
                @if ($modules['Invoices'] == true)
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget tn-widget-invoices">
                        <a class="text-decoration-none" href="{{ route('invoices.index') }}">
                            <div class="position-relative bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div class="widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-money-check fs-1 text-white"></i>
                                </div>
                                <div class="{{ getCurrentLoginUserLanguageName() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <h2 class="fs-1-xxl fw-bolder">{{ getCurrencySymbol() }} {{ formatCurrency($invoiceAmount) }}</h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.dashboard.total_invoices') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                @if ($modules['Bills'])
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget tn-widget-bills">
                        <a href="{{ route('bills.index') }}" class="text-decoration-none">
                            <div class="position-relative bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div class="widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-file-invoice fs-1 text-white"></i>
                                </div>
                                <div class="{{ getCurrentLoginUserLanguageName() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <h2 class="fs-1-xxl fw-bolder">{{ getCurrencySymbol() }} {{ formatCurrency($billAmount) }}</h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.dashboard.total_bills') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                @if ($modules['Payments'] == true)
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget tn-widget-payments">
                        <a href="{{ route('payments.index') }}" class="text-decoration-none">
                            <div class="position-relative bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div class="widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-money-bill fs-1 text-white"></i>
                                </div>
                                <div class="{{ getCurrentLoginUserLanguageName() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <h2 class="fs-1-xxl fw-bolder">{{ getCurrencySymbol() }} {{ formatCurrency($paymentAmount) }}</h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.dashboard.total_payments') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                @if ($modules['Advance Payments'] == true)
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget tn-widget-advance">
                        <a href="{{ route('advanced-payments.index') }}" class="text-decoration-none">
                            <div class="position-relative bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div class="widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-money-bills fs-1 text-white"></i>
                                </div>
                                <div class="{{ getCurrentLoginUserLanguageName() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <h2 class="fs-1-xxl fw-bolder">{{ getCurrencySymbol() }} {{ formatCurrency($advancePaymentAmount) }}</h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.dashboard.total_advance_payments') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                @if ($modules['Beds'] == true)
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget tn-widget-beds">
                        <a href="{{ route('beds.index') }}" class="text-decoration-none">
                            <div class="position-relative bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div class="widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-bed fs-1-xl text-white"></i>
                                </div>
                                <div class="{{ getCurrentLoginUserLanguageName() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <h2 class="fs-1-xxl fw-bolder">{{ $availableBeds }}</h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.dashboard.available_beds') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                @if ($modules['Doctors'] == true)
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget tn-widget-doctors">
                        <a href="{{ route('doctors.index') }}" class="text-decoration-none">
                            <div class="position-relative bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div class="widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-user-doctor fs-1-xl text-white"></i>
                                </div>
                                <div class="{{ getCurrentLoginUserLanguageName() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <h2 class="fs-1-xxl fw-bolder">{{ $doctors }}</h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.dashboard.doctors') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                @if ($modules['Patients'] == true)
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget tn-widget-patients">
                        <a href="{{ route('patients.index') }}" class="text-decoration-none">
                            <div class="position-relative bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div class="widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-user-injured fs-1-xl text-white"></i>
                                </div>
                                <div class="{{ getCurrentLoginUserLanguageName() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <h2 class="fs-1-xxl fw-bolder">{{ $patients }}</h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.dashboard.patients') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                @if ($modules['Nurses'] == true)
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget tn-widget-nurses">
                        <a href="{{ route('nurses.index') }}" class="text-decoration-none">
                            <div class="position-relative bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div class="widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-user-nurse fs-1-xl text-white"></i>
                                </div>
                                <div class="{{ getCurrentLoginUserLanguageName() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <h2 class="fs-1-xxl fw-bolder">{{ $nurses }}</h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.nurses') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                @if ($modules['Admin'] == true)
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget tn-widget-admins">
                        <a href="{{ route('admins.index') }}" class="text-decoration-none">
                            <div class="position-relative bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div class="widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-shield-halved fs-1-xl text-white"></i>
                                </div>
                                <div class="{{ getCurrentLoginUserLanguageName() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <h2 class="fs-1-xxl fw-bolder">{{ $admins }}</h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.admin') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                @if ($modules['Accountants'] == true)
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget tn-widget-accountants">
                        <a href="{{ route('accountants.index') }}" class="text-decoration-none">
                            <div class="position-relative bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div class="widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-file-invoice-dollar fs-1-xl text-white"></i>
                                </div>
                                <div class="{{ getCurrentLoginUserLanguageName() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <h2 class="fs-1-xxl fw-bolder">{{ $accountants }}</h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.accountants') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                @if ($modules['Lab Technicians'] == true)
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget tn-widget-lab">
                        <a href="{{ route('lab-technicians.index') }}" class="text-decoration-none">
                            <div class="position-relative bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div class="widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-vial-virus fs-1-xl text-white"></i>
                                </div>
                                <div class="{{ getCurrentLoginUserLanguageName() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <h2 class="fs-1-xxl fw-bolder">{{ $labTechnicians }}</h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.lab_technicians') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                @if ($modules['Pharmacists'] == true)
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget tn-widget-pharmacists">
                        <a href="{{ route('pharmacists.index') }}" class="text-decoration-none">
                            <div class="position-relative bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div class="widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-prescription fs-1-xl text-white"></i>
                                </div>
                                <div class="{{ getCurrentLoginUserLanguageName() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <h2 class="fs-1-xxl fw-bolder">{{ $pharmacists }}</h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.pharmacists') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-xxl-9 col-xl-8 mb-5">
            <div class="card">
                <div class="card-body">
                    <canvas id="incomeExpenseChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-4">
            @if ($modules['Receptionists'] == true)
                <div class="widget tn-widget-receptionists mb-3">
                    <a href="{{ route('receptionists.index') }}" class="text-decoration-none">
                        <div class="position-relative bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between">
                            <div class="widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-user-tie fs-1-xl text-white"></i>
                            </div>
                            <div class="{{ getCurrentLoginUserLanguageName() == 'ar' ? 'text-start' : 'text-end' }}">
                                <h2 class="fs-1-xxl fw-bolder">{{ $receptionists }}</h2>
                                <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.receptionists') }}</h3>
                            </div>
                        </div>
                    </a>
                </div>
            @endif

            <div class="card overflow-auto">
                <div class="card-header pb-0 px-10 my-2">
                    <h3 class="mb-0">{{ __('messages.dashboard.notice_boards') }}</h3>
                </div>
                <div class="card-body pt-7 pb-2">
                    @if (count($noticeBoards) > 0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('messages.dashboard.title') }}</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                                @foreach ($noticeBoards as $noticeBoard)
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)" data-id="{{ $noticeBoard->id }}"
                                                class="text-decoration-none notice-board-view-btn">{{ Str::limit($noticeBoard->title, 24, '...') }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2 class="mb-0 text-center fs-2">{{ __('messages.dashboard.no_notice_yet') }}... </h2>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 my-2">
        <div class="col-xxl-5 col-12 mb-xxl-0">
            <div class="card overflow-auto">
                <div class="card-header pb-0 px-10">
                    <h3 class="mb-0">{{ __('messages.enquiries') }}</h3>
                </div>
                <div class="card-body pt-7">
                    @if (count($enquiries) > 0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('messages.enquiry.name') }}</th>
                                    <th scope="col">{{ __('messages.enquiry.email') }}</th>
                                    <th scope="col" class="text-center text-muted">{{ __('messages.common.created_on') }}</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                                @foreach ($enquiries as $enquiry)
                                    <tr>
                                        <td>
                                            <a href="{{ route('enquiry.show', $enquiry->id) }}"
                                                class="text-primary-800 text-decoration-none mb-1 fs-6">{{ Str::limit($enquiry->full_name, 10, '...') }}</a>
                                        </td>
                                        <td class="{{ getCurrentLoginUserLanguageName() == 'ar' ? 'text-end' : 'text-start' }}">
                                            <span class="text-muted fw-bold d-block">{{ $enquiry->email }}</span>
                                        </td>
                                        <td class="text-center text-muted fw-bold">
                                            <span class="badge bg-light-info">
                                                {{ \Carbon\Carbon::parse($enquiry->created_at)->translatedFormat('jS M, Y') }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4 class="mb-0 text-center fs-2">{{ __('messages.dashboard.no_enquiries_yet') }}</h4>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-xxl-7 col-12 mb-xxl-0">
            <div class="card overflow-auto">
                <div class="card-header pb-0 px-10">
                    <h3 class="mb-0">{{ __('messages.appointments') }}</h3>
                </div>
                <div class="card-body pt-7">
                    <livewire:dashboard-appointment-table>
                </div>
            </div>
        </div>
    </div>
</div>