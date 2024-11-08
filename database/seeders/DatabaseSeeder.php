<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\area;

use App\Models\department;
use App\Models\detail_departement;
use App\Models\position;
use App\Models\laporan;

use App\Models\user_has_area;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // for ($i = 0; $i < 1000000; $i++) {
        //     $start_date = Carbon::createFromFormat('Y-m-d', '2012-01-01');
        //     $end_date = Carbon::createFromFormat('Y-m-d', '2024-02-13');

        //     $random_created_at = Carbon::createFromTimestamp(rand($start_date->timestamp, $end_date->timestamp));

        //     laporan::create([
        //         'auditor_id' => 3,
        //         'PIC_id' => 2,
        //         'area_id' => 1,
        //         'rank' => ['A', 'B', 'C'][rand(0, 2)], // Pilih random antara A, B, atau C
        //         'kategori' => ['5R', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'O'][rand(0, 8)], // Pilih random antara 5R dan A-O
        //         'temuan' => 'temuan ke' . $i,
        //         'foto_temuan' => '1707209711_65c1f3ef234fd.jfif',
        //         'temporary_solution' => 'Solusi Sementara',
        //         'penanggulangan' => 'perbaikan ke' . $i,
        //         'foto_penanggulangan' => '1707209804_65c1f44c5564d.jfif',
        //         'progress' => rand(1, 10), // Random antara 1 dan 10
        //         'deadline_date' => '2024-02-22 15:55:11',
        //         'verify_submit_at' => '2024-02-06 15:59:57',
        //         'PIC_submit_at' => now(),
        //         'created_at' => $random_created_at,
        //     ]);
        // }

        department::create([
            'code' => 'MKT',
            'name' => 'Marketing',
        ]);
    
        department::create([
            'code' => 'PE',
            'name' => 'Process Engineering',
        ]);
    
        department::create([
            'code' => 'PRODENG',
            'name' => 'Product Engineering',
        ]);
    
        department::create([
            'code' => 'PROD',
            'name' => 'Produksi',
        ]);
    
        department::create([
            'code' => 'HRGAEI',
            'name' => 'HRGA EHS IT',
        ]);
    
        department::create([
            'code' => 'PUR',
            'name' => 'Purchasing',
        ]);
    
        department::create([
            'code' => 'FA',
            'name' => 'Finance',
        ]);
    
        department::create([
            'code' => 'QUALITY',
            'name' => 'Quality',
        ]);
    
        department::create([
            'code' => 'PPIC',
            'name' => 'Product Plan Inventory Control',
        ]);
    
        department::create([
            'code' => 'ME',
            'name' => 'Maintenance Engineering',
        ]);
    
        department::create([
            'code' => 'BOD',
            'name' => 'Board Of Director',
        ]);
        
        position::create([
            'position' => 'Dept Head',
            'code' => 'DEPT',
        ]);
        
        position::create([
            'position' => 'Supervisor',
            'code' => 'SPV',
        ]);
        
        position::create([
            'position' => 'Staff',
            'code' => 'STAFF',
        ]);
        
        position::create([
            'position' => 'Member',
            'code' => 'OP',
        ]);
        
        position::create([
            'position' => 'SUB',
            'code' => 'SUB',
        ]);
        
        position::create([
            'position' => 'BOD',
            'code' => 'BOD',
        ]);
        
        position::create([
            'position' => 'Leader',
            'code' => 'LEAD',
        ]);
        
        position::create([
            'position' => 'Foreman',
            'code' => 'FRM',
        ]);

        detail_departement::create([
            'departement_id' => 1,
            'name' => 'Marketing',
            'code' => 'MKT',
        ]);
    
        detail_departement::create([
            'departement_id' => 2,
            'name' => 'Process Engineering',
            'code' => 'PE',
        ]);
    
        detail_departement::create([
            'departement_id' => 3,
            'name' => 'New Product Development',
            'code' => 'NPD',
        ]);
    
        detail_departement::create([
            'departement_id' => 3,
            'name' => 'Research And Development',
            'code' => 'RND',
        ]);
    
        detail_departement::create([
            'departement_id' => 4,
            'name' => 'Assy Koja',
            'code' => 'ASSY',
        ]);
    
        detail_departement::create([
            'departement_id' => 4,
            'name' => 'Injection Surface',
            'code' => 'INJ',
        ]);
    
        detail_departement::create([
            'departement_id' => 5,
            'name' => 'Human Resourche',
            'code' => 'HR',
        ]);
    
        detail_departement::create([
            'departement_id' => 5,
            'name' => 'General Affair',
            'code' => 'GA',
        ]);
    
        detail_departement::create([
            'departement_id' => 5,
            'name' => 'Environtment Health Safety',
            'code' => 'EHS',
        ]);
    
        detail_departement::create([
            'departement_id' => 5,
            'name' => 'Information Technology',
            'code' => 'IT',
        ]);
    
        detail_departement::create([
            'departement_id' => 5,
            'name' => 'Export Import',
            'code' => 'EXIM',
        ]);
    
        detail_departement::create([
            'departement_id' => 5,
            'name' => 'Legal',
            'code' => 'LA',
        ]);
    
        detail_departement::create([
            'departement_id' => 6,
            'name' => 'Purchasing',
            'code' => 'PUR',
        ]);
    
        detail_departement::create([
            'departement_id' => 7,
            'name' => 'Finance',
            'code' => 'FA',
        ]);
    
        detail_departement::create([
            'departement_id' => 8,
            'name' => 'Quality Control',
            'code' => 'QC',
        ]);
    
        detail_departement::create([
            'departement_id' => 8,
            'name' => 'Quality Assurance',
            'code' => 'QA',
        ]);
    
        detail_departement::create([
            'departement_id' => 9,
            'name' => 'Delivery',
            'code' => 'DEL',
        ]);
    
        detail_departement::create([
            'departement_id' => 9,
            'name' => 'Warehouse',
            'code' => 'WH',
        ]);
    
        detail_departement::create([
            'departement_id' => 10,
            'name' => 'Maintanance Engineering',
            'code' => 'ME',
        ]);
    
        detail_departement::create([
            'departement_id' => 11,
            'name' => 'Board Of Direction',
            'code' => 'BOD',
        ]);
    
        $AdminRole = Role::create([
            'name' => 'Admin',
        ]);
        $memberRole = Role::create([
            'name' => 'member',
        ]);

        $EHSRole = Role::create([
            'name' => 'EHS',
        ]);

        $PICRole = Role::create([
            'name' => 'PIC',
        ]);

        $DeptHeadPICRole = Role::create([
            'name' => 'Departement Head PIC',
        ]);

        $DeptHeadEHSRole = Role::create([
            'name' => 'Departement Head EHS',
        ]);
    
        $Admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'npk' => 32232333222,
            'dept_id' => 5,
            'detail_dept_id' => 10,
            'position_id' => 3,
            'password' => bcrypt('123'),
         ]);

        $Member = User::create([
            'name' => 'member',
            'email' => 'member@gmail.com',
            'username' => 'member',
            'npk' => 3223233022,
            'dept_id' => 2,
            'detail_dept_id' => 2,
            'position_id' => 5,
            'password' => bcrypt('123'),
         ]);
     
        $PIC = User::create([
             'name' => 'PIC',
             'email' => 'pic@gmail.com',
             'username' => 'PIC',
             'npk' => 33221323213,
             'dept_id' => 8,
             'detail_dept_id' => 15,
             'position_id' => 8,
             'password' => bcrypt('123'),
         ]);
     
        $EHS = User::create([
             'name' => 'EHS',
             'email' => 'ehs@gmail.com',
             'username' => 'EHS',
             'npk' => 32132123323,
             'dept_id' => 5,
             'detail_dept_id' => 9,
             'position_id' => 2,
             'password' => bcrypt('123'),
         ]);
     
        $DeptPIC = User::create([
             'name' => 'PIC Head',
             'email' => 'pic_head@gmail.com',
             'username' => 'PICHead',
             'npk' => 33342213322,
             'dept_id' => 8,
             'detail_dept_id' => 15,
             'position_id' => 1,
             'password' => bcrypt('123'),
         ]);
     
        $DeptEHS =User::create([
             'name' => 'EHS Head',
             'email' => 'ehs_head@gmail.com',
             'username' => 'EHSHead',
             'npk' => 33322221111,
             'dept_id' => 5,
             'detail_dept_id' => 9,
             'position_id' => 1,
             'password' => bcrypt('123'),
         ]);

        $surface =area::create([
            'name' => 'Surface',
        ]);

        $Pencucian =area::create([
            'name' => 'Pencucian JIG',
        ]);

        
        $Admin->assignRole($AdminRole);
        $EHS->assignRole($EHSRole);
        $DeptEHS->assignRole($DeptHeadEHSRole);
        $DeptPIC->assignRole($DeptHeadPICRole);
        $PIC->assignRole($PICRole);
        $Member->assignRole($memberRole);
        
        $Pencucian =user_has_area::create([
            'user_id' => $PIC->id,
            'area_id' => $surface->id,
            'role_id' => $PICRole->id
        ]);

        $Pencucian =user_has_area::create([
            'user_id' => $DeptPIC->id,
            'area_id' => $surface->id,
            'role_id' => $DeptHeadPICRole->id
        ]);
    }
}
