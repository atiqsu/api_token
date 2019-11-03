<?php
/**
 * Created by Md. Atiqur Rahman
 * Email: atiq.cse.cu0506.su@gmail.com
 * Skype: atiq.cu
 * Date: 27/09/2016
 * Time: 10:28 PM
 */

namespace App;


class AppConfig {

    #System misc
    const SYS_LICENSE_FILE_NAME  = 'scLicense.lic';
    const SYS_ASSOC_PK_FILE_NAME = 'assocPk.txt';
    const MIGRATION_PREFIX       = 'exp_';
    const CLAIM_CODE_PREFIX      = 'ex';
    const ERROR_TYPE_REPO        = array('info', 'success', 'danger', 'error', 'warning');

    const SYS_CONFIG_MULTIPLE_APPROVER_NAME     = 'manyApprover';
    const SYS_CONFIG_MULTIPLE_APPROVER_DEF_VAL  = 0;
    const SYS_CONFIG_MULTIPLE_PAYMASTER_NAME    = 'manyPaymaster';
    const SYS_CONFIG_MULTIPLE_PAYMASTER_DEF_VAL = 0;

    const SYS_ROLE_OWNER      = 'Owner';
    const SYS_ROLE_DEVELOPER  = 'Developer';
    const SYS_ROLE_APPROVER   = 'Approver';
    const SYS_ROLE_PAYMASTER  = 'Pay Master';
    const SYS_ROLE_BASIC_USER = 'Basic User';
    const SYS_ROLE_ADMIN_USER = 'Super Admin';

    const SYS_DEF_GROUP_NAME    = 'System Default';
    const SYS_DEF_CATEGORY_NAME = 'Sys_No_Category';

    const SYS_PASS_EXPIRED              = 'expired';
    const SYS_PASS_WARNING              = 'warning';
    const SYS_PASS_NOT_EXPIRED          = 'ok';
    const SYS_PASS_REMAINING            = 'remainingDaysToExpire';
    const SYS_PASS_WARN_MSG             = 'expireWarningMsg';
    const PASSWORD_EXPIRED_WARNING_DATE = 30;


    #All route name, not url............................
    const ROUTE_SYSTEM_PERMISSION_DENIED = 'permission.denied';
    const ROUTE_SYSTEM_SETTINGS_VIEW     = 'system.settings';
    const ROUTE_SYSTEM_SETTINGS_POST     = 'system.settings.post';


    const ROUTE_HOME                   = 'user.profile';
    const ROUTE_CLAIM_CHANGE_STATUS    = 'claim.status.change';
    const ROUTE_CLAIM_ADD              = 'claim.my.add';
    const ROUTE_CLAIM_MY_EDIT          = 'claim.my.edit';
    const ROUTE_CLAIM_MY_VIEW          = 'claim.my.view';
    const ROUTE_CLAIM_MY_DELETE        = 'claim.my.delete';
    const ROUTE_CLAIM_MY_SEARCH_LIST   = 'claim.my.searchList';
    const ROUTE_CLAIM_MY_ADD_POST      = 'claim.my.addPost';
    const ROUTE_CLAIM_MY_SUBMIT        = 'claim.my.submit';
    const ROUTE_CLAIM_MY_SEARCH_DETAIL = 'claim.my.searchDetail';
    const ROUTE_CLAIM_MY_SHOW_LIST     = 'claim.my.show';

    const ROUTE_CLAIM_APPROVER_SHOW_LIST   = 'claim.approve.show';
    const ROUTE_CLAIM_APPROVER_VIEW        = 'claim.approve.view';
    const ROUTE_CLAIM_APPROVER_SEARCH_LIST = 'claim.approve.searchList';
    const ROUTE_CLAIM_APPROVER_STATUS      = 'claim.approve.status';

    const ROUTE_CLAIM_PAYMASTER_SHOW_LIST = 'claim.payment.show';
    const ROUTE_CLAIM_PAYMASTER_VIEW      = 'claim.payment.view';

    const ROUTE_ANNUAL_YEAR_ADD         = 'annualyear.add';
    const ROUTE_ANNUAL_YEAR_SHOW        = 'annualyear.show';
    const ROUTE_ANNUAL_YEAR_EDIT        = 'annualyear.edit';
    const ROUTE_ANNUAL_YEAR_SEARCH_LIST = 'annualyear.searchList';
    const ROUTE_ANNUAL_YEAR_STATUS      = 'annualyear.status';
    const ROUTE_ANNUAL_YEAR_DELETE      = 'annualyear.delete';
    const ROUTE_ANNUAL_YEAR_ADD_POST    = 'annualyear.addPost';
    const ROUTE_ANNUAL_YEAR_EDIT_POST   = 'annualyear.editPost';

    const ROUTE_CATEGORY_SHOW                 = 'category.show';
    const ROUTE_CATEGORY_ADD                  = 'category.add';
    const ROUTE_CATEGORY_ADD_POST             = 'category.addPost';
    const ROUTE_CATEGORY_EDIT                 = 'category.edit';
    const ROUTE_CATEGORY_EDIT_POST            = 'category.editPost';
    const ROUTE_CATEGORY_DELETE               = 'category.delete';
    const ROUTE_CATEGORY_SEARCH_LIST          = 'category.searchList';
    const ROUTE_CATEGORY_CHANGE_ACTIVE_STATUS = 'category.changeActiveStatus';

    const ROUTE_CURRENCY_SHOW        = 'currency.show';
    const ROUTE_CURRENCY_EDIT        = 'currency.edit';
    const ROUTE_CURRENCY_ADD         = 'currency.add';
    const ROUTE_CURRENCY_EDIT_POST   = 'currency.editPost';
    const ROUTE_CURRENCY_SEARCH_LIST = 'currency.searchList';
    const ROUTE_CURRENCY_STATUS      = 'currency.status';
    const ROUTE_CURRENCY_DELETE      = 'currency.delete';
    const ROUTE_CURRENCY_ADD_POST    = 'currency.addPost';

    const ROUTE_ITEM_SHOW             = 'item.show';
    const ROUTE_ITEM_SEARCH_LIST      = 'item.searchList';
    const ROUTE_ITEM_SEARCH_STATUS    = 'item.status';
    const ROUTE_ITEM_SEARCH_DELETE    = 'item.delete';
    const ROUTE_ITEM_SEARCH_EDIT      = 'item.edit';
    const ROUTE_ITEM_SEARCH_ADD       = 'item.add';
    const ROUTE_ITEM_SEARCH_EDIT_POST = 'item.editPost';

    const ROUTE_GROUP_SEARCH_LIST          = 'group.searchList';
    const ROUTE_GROUP_DELETE               = 'group.delete';
    const ROUTE_GROUP_EDIT                 = 'group.edit';
    const ROUTE_GROUP_ADD                  = 'group.add';
    const ROUTE_GROUP_SHOW                 = 'group.show';
    const ROUTE_GROUP_ADD_POST             = 'group.addPost';
    const ROUTE_GROUP_EDIT_POST            = 'group.editPost';
    const ROUTE_GROUP_VIEW                 = 'group.view';
    const ROUTE_GROUP_CHANGE_ACTIVE_STATUS = 'group.changeActiveStatus';
    const ROUTE_GROUP_DELETE_MEMBER_AJX    = "group.member.delete";
    const ROUTE_GROUP_ADD_APPROVER_AJX     = "group.add.approver";
    const ROUTE_GROUP_ADD_PAYMASTER_AJX    = "group.add.paymaster";
    const ROUTE_GROUP_ASSIGN_APPROVER_PAGE = "group.assign.approver.page";
    const ROUTE_GROUP_ASSIGN_APPROVER_POST = "group.assign.approver.post";

    const ROUTE_USER_SET_NEW_PASSWORD = 'user.set.newPassword';
    const ROUTE_USER_SET_PASSWORD     = 'user.set.password';
    const ROUTE_USER_VIEW_USER        = 'user.viewUser';
    const ROUTE_USER_ROLE_VIEW        = 'user.roleView';
    const ROUTE_USER_SEARCH_LIST      = 'user.searchList';
    const ROUTE_USER_STATUS           = 'user.status';
    const ROUTE_USER_LOCK             = 'user.lock';
    const ROUTE_USER_DELETE           = 'user.delete';
    const ROUTE_USER_EDIT             = 'user.edit';
    const ROUTE_USER_ADD              = 'user.add';
    const ROUTE_USER_SET_CURRENCY     = 'user.setcurrency';
    const ROUTE_USER_ADD_POST         = 'user.addPost';
    const ROUTE_USER_EDIT_POST        = 'user.editPost';
    const ROUTE_USER_SHOW             = 'user.show';
    const ROUTE_USER_CHANGE_PASSWORD  = 'user.change.password';
    const ROUTE_USER_SAVE_PASSWORD    = 'user.save.password';

    const ROUTE_PERMISSION_SEARCH_LIST = 'permission.searchList';
    const ROUTE_PERMISSION_STATUS      = 'permission.status';
    const ROUTE_PERMISSION_DELETE      = 'permission.delete';
    const ROUTE_PERMISSION_EDIT        = 'permission.edit';
    const ROUTE_PERMISSION_ADD         = 'permission.add';
    const ROUTE_PERMISSION_SHOW        = 'permission.show';
    const ROUTE_PERMISSION_ADD_POST    = 'permission.addPost';
    const ROUTE_PERMISSION_EDIT_POST   = 'permission.editPost';
    const ROUTE_PERMISSION_VIEW        = 'permission.view';

    const ROUTE_ROLE_SEARCH_LIST  = 'role.searchList';
    const ROUTE_ROLE_STATUS       = 'role.status';
    const ROUTE_ROLE_DELETE       = 'role.delete';
    const ROUTE_ROLE_EDIT         = 'role.edit';
    const ROUTE_ROLE_ADD          = 'role.add';
    const ROUTE_ROLE_SHOW         = 'role.show';
    const ROUTE_ROLE_ADD_POST     = 'role.addPost';
    const ROUTE_ROLE_EDIT_POST    = 'role.editPost';
    const ROUTE_ROLE_VIEW_DETAILS = 'role.view';


    const ROUTE_MAPPING_APPROVER_GROUP_SHOW        = 'mp.ag.show';
    const ROUTE_MAPPING_APPROVER_GROUP_ADD         = 'mp.ag.add';
    const ROUTE_MAPPING_APPROVER_GROUP_ADD_POST    = 'mp.ag.addPost';
    const ROUTE_MAPPING_APPROVER_GROUP_EDIT        = 'mp.ag.edit';
    const ROUTE_MAPPING_APPROVER_GROUP_DELETE      = 'mp.ag.delete';
    const ROUTE_MAPPING_APPROVER_GROUP_SEARCH_LIST = 'mp.ag.searchList';


    const ROUTE_MAPPING_PAYMASTER_GROUP_SHOW = 'pg.show';
    const ROUTE_MAPPING_PAYMASTER_GROUP_ADD  = 'pg.add';
    const ROUTE_PAYMASTER_GROUP_ADD_POST     = 'pg.addPost';
    const ROUTE_MAPPING_PAYMASTER_GROUP_EDIT = 'pg.edit';
    const ROUTE_PAYMASTER_GROUP_EDIT_POST    = 'pg.editPost';
    const ROUTE_PAYMASTER_GROUP_DELETE       = 'pg.delete';
    const ROUTE_PAYMASTER_GROUP_SEARCH_LIST  = 'pg.searchList';

    const ROUTE_USER_ROLE_SHOW        = 'ur.show';
    const ROUTE_USER_ROLE_SEARCH_LIST = 'ur.searchList';
    const ROUTE_USER_ROLE_EDIT        = 'ur.edit';
    const ROUTE_USER_ROLE_ADD         = 'ur.add';
    const ROUTE_USER_ROLE_DELETE      = 'ur.delete';
    const ROUTE_USER_ROLE_ADD_POST    = 'ur.addPost';
    const ROUTE_USER_ROLE_EDIT_POST   = 'ur.editPost';

    const ROUTE_ROLE_PERMISSION_EDIT        = 'rp.edit';
    const ROUTE_ROLE_PERMISSION_SEARCH_LIST = 'rp.searchList';
    const ROUTE_ROLE_PERMISSION_ADD         = 'rp.add';
    const ROUTE_ROLE_PERMISSION_DELETE      = 'rp.delete';
    const ROUTE_ROLE_PERMISSION_ADD_POST    = 'rp.addPost';
    const ROUTE_ROLE_PERMISSION_SHOW        = 'rp.show';
    const ROUTE_ROLE_PERMISSION_EDIT_POST   = 'rp.editPost';

    const ROUTE_MAPPING_USER_GROUP_SEARCH_LIST = 'mp.ug.searchList';
    const ROUTE_MAPPING_USER_GROUP_ADD         = 'mp.ug.add';
    const ROUTE_MAPPING_USER_GROUP_EDIT        = 'mp.ug.edit';
    const ROUTE_MAPPING_USER_GROUP_DELETE      = 'mp.ug.delete';
    const ROUTE_MAPPING_USER_GROUP_SHOW        = 'mp.ug.show';
    const ROUTE_MAPPING_USER_GROUP_ADD_POST    = 'mp.ug.addPost';
    const ROUTE_MAPPING_USER_GROUP_EDIT_POST   = 'mp.ug.editPost';


    #All database related names
    const DB_TABLE_COL_IS_DELETED        = 'is_deleted';
    const DB_TABLE_COL_IS_DEFAULT        = 'is_default';
    const DB_TABLE_COL_IS_LOCKED         = 'is_locked';
    const DB_TABLE_COL_IS_ACTIVE         = 'active';
    const DB_TABLE_COL_CREATED           = 'created';
    const DB_TABLE_COL_UPDATED           = 'updated';
    const DB_TABLE_COL_CREATED_BY        = 'created_by';
    const DB_TABLE_COL_UPDATED_BY        = 'updated_by';
    const DB_TABLE_COL_WEIGHT            = 'rank';
    const DB_TABLE_COL_HISTORY           = 'history';
    const DB_TABLE_COL_DEF_CURRENCY      = 'local_currency_id';
    const DB_TABLE_COL_CLAIM_CURRENCY_ID = 'currency_id';
    const DB_TABLE_COL_SPENT_CURRENCY_ID = 'spent_currency_id';

    #All DB table names
    const DB_TABLE_NAME_GROUP               = 'group';
    const DB_TABLE_NAME_CATEGORY            = 'category';
    const DB_TABLE_NAME_ROLES               = 'roles';
    const DB_TABLE_SYSTEM_SETTINGS          = 'system_settings';
    const DB_TABLE_NAME_ANNUAL_YEAR         = 'annual_year';
    const DB_TABLE_NAME_APPROVER_GROUP_MAP  = 'approver_group_map';
    const DB_TABLE_NAME_AUDIT_LOGGER        = 'audit_logger';
    const DB_TABLE_NAME_CLAIMS              = 'claims';
    const DB_TABLE_NAME_CLAIM_DETAILS       = 'claim_details';
    const DB_TABLE_NAME_CURRENCY            = 'currency';
    const DB_TABLE_NAME_GROUP_USER_MAP      = 'group_user_map';
    const DB_TABLE_NAME_ITEMS               = 'items';
    const DB_TABLE_NAME_USER_ROLE           = 'user_role';
    const DB_TABLE_NAME_PAYMASTER_GROUP_MAP = 'paymaster_group_map';
    const DB_TABLE_NAME_PERMISSIONS         = 'permissions';
    const DB_TABLE_NAME_ROLE_PERMISSION     = 'role_permission';
    const DB_TABLE_NAME_USERS               = 'users';
    const DB_TABLE_NAME_CHILD_PERMISSION    = 'child_permission';


    #All DB views are declared here
    const DB_VIEW_MAP_GROUP_USERS_EXTENDED          = 'vw_group_user_map_extended';
    const DB_VIEW_MAP_GROUP_USER_EXTENDED           = 'vw_group_user_map_details';
    const DB_VIEW_MAP_USER_GROUP_EXTENDED           = 'vw_user_group_map_extended';
    const DB_VIEW_USER_ROLE_PERMISSION_EXTENDED     = 'vw_user_role_permission_combined';
    const DB_VIEW_USER_ROLE_MAP_EXTENDED            = 'vw_user_role_map_extended';
    const DB_VIEW_USER_ALL_MAP_EXTENDED             = 'vw_user_all_map_extended';
    const DB_VIEW_USER_ROLE_PERMISSION_EXTENDED_RAW = 'vw_user_role_permission_combined_raw';
    const DB_VIEW_USER_ROLE_PERMISSION_DEBUG        = 'vw_user_role_permission_debug';
    const DB_VIEW_UNASSIGNED_USER                   = 'vw_unassigned_ur';
    const DB_VIEW_UNASSIGNED_ROLE_PERMISSION        = 'vw_unassigned_rp';
    const DB_VIEW_ROLE_USER_MAP_INFO                = 'vw_role_user_map_info';
    const DB_VIEW_ROLE_PERMISSION_COMBINED          = 'vw_role_permission_combined';
    const DB_VIEW_ROLE_PERMISSION_EXTENDED          = 'vw_role_permission_extended';
    const DB_VIEW_PAYMASTER_NO_GROUP                = 'vw_paymaster_no_group';
    const DB_VIEW_PAYMASTER_GROUP_MAP_DETAILS       = 'vw_paymaster_group_map_details';
    const DB_VIEW_GROUP_AP_PM_COMBINED              = 'vw_group_ap_pm_combined';
    const DB_VIEW_CLAIM_EXPAND                      = 'vw_claim_expand';
    const DB_VIEW_CLAIMS_EXPAND                     = 'vw_claims_expand';
    const DB_VIEW_CLAIMS_SUBMITTED_EXPAND           = 'vw_claims_submitted_expanded';
    const DB_VIEW_CLAIM_DETAIL_EXPAND               = 'vw_claim_detail_expand';
    const DB_VIEW_CLAIM_AP_LIST_EXPAND              = 'vw_claims_approver_list_expanded';
    const DB_VIEW_CLAIM_PM_LIST_EXPAND              = 'vw_claims_paymaster_list_expanded';
    const DB_VIEW_ASSIGNED_ROLE_INFO                = 'vw_assigned_role_info';
    const DB_VIEW_ASSIGNED_PERMISSION_INFO          = 'vw_assigned_permission_info';
    const DB_VIEW_APPROVE_NO_GROUP                  = 'vw_approver_no_group';
    const DB_VIEW_APPROVE_GROUP_MAP_DETAILS         = 'vw_approver_group_map_details';
    const DB_VIEW_APPROVE_PAYMASTER_MAP_DETAILS     = 'vw_approver_paymaster_map_details';
    const DB_VIEW_APPROVER_LIST                     = 'vw_approver_list';
    const DB_VIEW_PAYMASTER_LIST                    = 'vw_paymaster_list';

    #Resource related
    const RESOURCE_FOLDER       = 'images';
    const RESOURCE_FOLDER_CLAIM = 'images' . DIRECTORY_SEPARATOR . 'uploaded';

    #System Status
    const CLAIM_STATUS_DRAFT       = 'draft';
    const CLAIM_STATUS_SUBMITTED   = 'submitted';
    const CLAIM_STATUS_REJECTED    = 'rejected';
    const CLAIM_STATUS_RESUBMITTED = 're-submitted';
    const CLAIM_STATUS_APPROVED    = 'approved';
    const CLAIM_STATUS_PAID        = 'paid';
    const CLAIM_STATUS_DELETED     = 'deleted';
    const CLAIM_STATUS_CLOSED      = 'closed';

    const GENERAL_STATUS_CREATED       = 'created';
    const GENERAL_STATUS_UPDATED       = 'updated';
    const GENERAL_STATUS_ACTIVATE      = 'activate';
    const GENERAL_STATUS_INACTIVATE    = 'inactivate';
    const GENERAL_STATUS_DELETED       = 'deleted';
    const GENERAL_STATUS_DISABLED      = 'disabled';
    const GENERAL_STATUS_REVIVED       = 'revived';
    const GENERAL_STATUS_WARN          = 'warning, possible hacking/cracking in progress';
    const GENERAL_RETURN_RESULT_OK     = 'ok';
    const GENERAL_RETURN_RESULT_NOT_OK = 'not ok';


    /*  AppConfig::DB_TABLE_COL_IS_DELETED
        AppConfig::DB_TABLE_COL_IS_DEFAULT
        AppConfig::DB_TABLE_COL_IS_LOCKED
        AppConfig::DB_TABLE_COL_IS_ACTIVE
        AppConfig::DB_TABLE_COL_CREATED
        AppConfig::DB_TABLE_COL_UPDATED
        AppConfig::DB_TABLE_COL_CREATED_BY
        AppConfig::DB_TABLE_COL_UPDATED_BY
        AppConfig::DB_TABLE_COL_WEIGHT
        AppConfig::DB_TABLE_COL_HISTORY
        AppConfig::DB_TABLE_COL_DEF_CURRENCY
        AppConfig::DB_TABLE_COL_CLAIM_CURRENCY_ID
        AppConfig::DB_TABLE_COL_SPENT_CURRENCY_ID

        $is_deleted= \App\Http\Controllers\AppConfig::DB_TABLE_COL_IS_DELETED;
        $is_default= \App\Http\Controllers\AppConfig::DB_TABLE_COL_IS_DEFAULT;
        $active= \App\Http\Controllers\AppConfig::DB_TABLE_COL_IS_ACTIVE;
        $created= \App\Http\Controllers\AppConfig::DB_TABLE_COL_CREATED;
        $updated= \App\Http\Controllers\AppConfig::DB_TABLE_COL_UPDATED;
        $created_by= \App\Http\Controllers\AppConfig::DB_TABLE_COL_CREATED_BY;
        $updated_by= \App\Http\Controllers\AppConfig::DB_TABLE_COL_UPDATED_BY;
        $rank= \App\Http\Controllers\AppConfig::DB_TABLE_COL_WEIGHT;
        $history= \App\Http\Controllers\AppConfig::DB_TABLE_COL_HISTORY;
    */

    ##Business Rule :

    #Who is a approver ? - Ans: Who has  SYS_ROLE_APPROVER role and SYS_ROLE_APPROVER is not editable or deletable.
    #Who is a paymaster ? - Ans: Who has  SYS_ROLE_PAYMASTER role and SYS_ROLE_PAYMASTER is not editable or deletable.
}
