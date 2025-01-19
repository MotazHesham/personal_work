<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'setting_create',
            ],
            [
                'id'    => 18,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 19,
                'title' => 'setting_show',
            ],
            [
                'id'    => 20,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 21,
                'title' => 'setting_access',
            ],
            [
                'id'    => 22,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 23,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 24,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 25,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 26,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 27,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 28,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 29,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 30,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 31,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 32,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 33,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 34,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 35,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 36,
                'title' => 'currency_create',
            ],
            [
                'id'    => 37,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 38,
                'title' => 'currency_show',
            ],
            [
                'id'    => 39,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 40,
                'title' => 'currency_access',
            ],
            [
                'id'    => 41,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 42,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 43,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 44,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 45,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 46,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 47,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 48,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 49,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 50,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 51,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 52,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 53,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 54,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 55,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 56,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 57,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 58,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 59,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 60,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 61,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 62,
                'title' => 'client_create',
            ],
            [
                'id'    => 63,
                'title' => 'client_edit',
            ],
            [
                'id'    => 64,
                'title' => 'client_show',
            ],
            [
                'id'    => 65,
                'title' => 'client_delete',
            ],
            [
                'id'    => 66,
                'title' => 'client_access',
            ],
            [
                'id'    => 67,
                'title' => 'project_create',
            ],
            [
                'id'    => 68,
                'title' => 'project_edit',
            ],
            [
                'id'    => 69,
                'title' => 'project_show',
            ],
            [
                'id'    => 70,
                'title' => 'project_delete',
            ],
            [
                'id'    => 71,
                'title' => 'project_access',
            ],
            [
                'id'    => 72,
                'title' => 'note_create',
            ],
            [
                'id'    => 73,
                'title' => 'note_edit',
            ],
            [
                'id'    => 74,
                'title' => 'note_show',
            ],
            [
                'id'    => 75,
                'title' => 'note_delete',
            ],
            [
                'id'    => 76,
                'title' => 'note_access',
            ],
            [
                'id'    => 77,
                'title' => 'document_create',
            ],
            [
                'id'    => 78,
                'title' => 'document_edit',
            ],
            [
                'id'    => 79,
                'title' => 'document_show',
            ],
            [
                'id'    => 80,
                'title' => 'document_delete',
            ],
            [
                'id'    => 81,
                'title' => 'document_access',
            ],
            [
                'id'    => 82,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 83,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 84,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 85,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 86,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 87,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 88,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 89,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 90,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 91,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 92,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 93,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 94,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 95,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 96,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 97,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 98,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 99,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 100,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 101,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 102,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 103,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 104,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 105,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 106,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 107,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 108,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 109,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 110,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 111,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 112,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 113,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 114,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 115,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 116,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 117,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 118,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 119,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 120,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 121,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 122,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 123,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 124,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 125,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 126,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 127,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 128,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 129,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 130,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 131,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 132,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 133,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 134,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 135,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 136,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 137,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 138,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 139,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 140,
                'title' => 'my_project_create',
            ],
            [
                'id'    => 141,
                'title' => 'my_project_edit',
            ],
            [
                'id'    => 142,
                'title' => 'my_project_show',
            ],
            [
                'id'    => 143,
                'title' => 'my_project_delete',
            ],
            [
                'id'    => 144,
                'title' => 'my_project_access',
            ],
            [
                'id'    => 145,
                'title' => 'thread_create',
            ],
            [
                'id'    => 146,
                'title' => 'thread_edit',
            ],
            [
                'id'    => 147,
                'title' => 'thread_show',
            ],
            [
                'id'    => 148,
                'title' => 'thread_delete',
            ],
            [
                'id'    => 149,
                'title' => 'thread_access',
            ],
            [
                'id'    => 150,
                'title' => 'quote_create',
            ],
            [
                'id'    => 151,
                'title' => 'quote_edit',
            ],
            [
                'id'    => 152,
                'title' => 'quote_show',
            ],
            [
                'id'    => 153,
                'title' => 'quote_delete',
            ],
            [
                'id'    => 154,
                'title' => 'quote_access',
            ],
            [
                'id'    => 155,
                'title' => 'contactu_create',
            ],
            [
                'id'    => 156,
                'title' => 'contactu_edit',
            ],
            [
                'id'    => 157,
                'title' => 'contactu_show',
            ],
            [
                'id'    => 158,
                'title' => 'contactu_delete',
            ],
            [
                'id'    => 159,
                'title' => 'contactu_access',
            ],
            [
                'id'    => 160,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
