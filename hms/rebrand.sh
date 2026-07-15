#!/bin/bash
cd /home/z/my-project/hms

echo "=== STEP 1: Config & Env Files ==="
# .env
sed -i 's/APP_NAME="Laravel"/APP_NAME="Tenadam"/' .env
sed -i 's/APP_URL=http:\/\/localhost:3000/APP_URL=http:\/\/localhost:3000/' .env
# .env.example
sed -i 's/APP_NAME="Laravel"/APP_NAME="Tenadam"/' .env.example
# config/app.php
sed -i "s/'name' => env('APP_NAME', 'Laravel'),/'name' => env('APP_NAME', 'Tenadam'),/" config/app.php
echo "Done: config files"

echo "=== STEP 2: Blade Templates ==="
# front layout
sed -i 's/Hospital Management System/Tenadam (ጤና አዳም)/g' resources/views/web/layouts/front.blade.php
sed -i 's/HMS |/Tenadam |/' resources/views/web/layouts/front.blade.php
# header
sed -i 's/Infy HMS/Tenadam/g' resources/views/web/layouts/header.blade.php
sed -i 's/InfyOm/Tenadam/g' resources/views/web/layouts/header.blade.php
# footer
sed -i 's/Infy HMS/Tenadam/g' resources/views/web/layouts/footer.blade.php
# 404
sed -i 's/Hospital Management System/Tenadam (ጤና አዳም)/g' resources/views/404_not_found.blade.php
sed -i 's/hms.infyom.com/tenadam.com/' resources/views/404_not_found.blade.php
# log viewer
sed -i 's/HMS Log Viewer/Tenadam Log Viewer/g' resources/views/vendor/laravel-log-viewer/log.blade.php
sed -i 's/Laravel Log Viewer/Tenadam Log Viewer/g' resources/views/vendor/laravel-log-viewer/log.blade.php
# auth layout
sed -i 's/Hospital management system/Tenadam - Health of Adam/g' resources/views/layouts/auth_app.blade.php
# Test module layout
sed -i "s/config('app.name', 'Laravel')/config('app.name', 'Tenadam')/" Modules/Test/Resources/views/layouts/master.blade.php

# PDF templates - favicon path
sed -i 's/hms-saas-favicon/tenadam-favicon/g' resources/views/pathology_tests/pathology_test_pdf.blade.php
sed -i 's/hms-saas-favicon/tenadam-favicon/g' resources/views/prescriptions/prescription_pdf.blade.php
sed -i 's/hms-saas-favicon/tenadam-favicon/g' resources/views/generate_patient_id_card/patient_id_card_pdf.blade.php
sed -i 's/hms-saas-favicon/tenadam-favicon/g' resources/views/medicine-bills/bill_pdf.blade.php
sed -i 's/hms-saas-favicon/tenadam-favicon/g' resources/views/medicine-bills/medicine_bill_pdf.blade.php
sed -i 's/hms-saas-favicon/tenadam-favicon/g' resources/views/ipd_bills/discharge_slip.blade.php
echo "Done: blade templates"

echo "=== STEP 3: Language Files ==="
# Update all locale web.php files
for lang_dir in lang/*/; do
    lang_file="$lang_dir/web.php"
    if [ -f "$lang_file" ]; then
        # Check which keys exist and update
        sed -i "s/InfyHMS/Tenadam/g" "$lang_file"
        sed -i "s/infyhms/tenadam/g" "$lang_file"
        sed -i "s/INFYHMS/TENADAM/g" "$lang_file"
        sed -i "s/InfyOm Technologies/Tenadam/g" "$lang_file"
        sed -i "s/InfyOm/Tenadam/g" "$lang_file"
        echo "  Updated: $lang_file"
    fi
done
echo "Done: language files"

echo "=== STEP 4: Database Seeders ==="
sed -i "s/'value' => 'HMS'/'value' => 'Tenadam'/" database/seeders/SettingsTableSeeder.php
sed -i "s/'value' => 'InfyOmLabs'/'value' => 'Tenadam'/" database/seeders/SettingsTableSeeder.php
sed -i "s/'name' => 'HMS Debit Account'/'name' => 'Tenadam Debit Account'/" database/seeders/AccountTableSeeder.php
sed -i "s/'name' => 'HMS Credit Account'/'name' => 'Tenadam Credit Account'/" database/seeders/AccountTableSeeder.php
sed -i "s/'value' => 'About For HMS'/'value' => 'About Tenadam (ጤና አዳም)'/" database/seeders/FrontSettingTableSeeder.php
sed -i "s/HMS will teach/Tenadam will teach/" database/seeders/FrontSettingTableSeeder.php
sed -i "s/infyom/Tenadam/gi" database/seeders/AddSocialSettingTableSeeder.php
sed -i "s/InfyOm Lab/Tenadam/g" database/seeders/AddSocialSettingTableSeeder.php
sed -i "s/admin@hms.com/admin@tenadam.com/" database/seeders/AdminUserSeeder.php
echo "Done: seeders"

echo "=== STEP 5: PHP Source Files ==="
sed -i "s/infyhmsflutter/tenadam_flutter/g" app/Http/Controllers/API/AuthController.php
sed -i "s/hms.com/tenadam.com/g" app/Http/Controllers/API/AuthController.php
sed -i "s/infyhms_flutter/tenadam_flutter/g" app/Http/Controllers/API/AuthController.php
sed -i "s/admin@hms.com/admin@tenadam.com/" app/Repositories/NoticeBoardRepository.php
echo "Done: PHP source"

echo "=== STEP 6: SCSS/CSS ==="
sed -i "s/HMS Brand/Tenadam Brand/" resources/assets/sass/video-queue-theme.scss
sed -i "s/HMS features/Tenadam features/" resources/assets/sass/home_custom.scss
sed -i "s/HMS icons/Tenadam icons/" resources/assets/sass/home_custom.scss
echo "Done: SCSS"

echo "=== STEP 7: Server Scripts ==="
[ -f server.js ] && sed -i 's/HMS Node/Tenadam Node/' server.js
[ -f node_server.js ] && sed -i 's/HMS Node/Tenadam Node/' node_server.js
[ -f proxy.js ] && sed -i 's/HMS server/Tenadam server/' proxy.js
echo "Done: server scripts"

echo "=== STEP 8: README ==="
[ -f README.md ] && sed -i 's/## Hospital Management System/## Tenadam (ጤና አዳም)/' README.md
[ -f README.md ] && sed -i 's/local.hms.com/local.tenadam.com/' README.md
echo "Done: README"

echo ""
echo "=== ALL TEXT REPLACEMENTS COMPLETE ==="