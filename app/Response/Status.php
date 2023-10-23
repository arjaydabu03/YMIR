<?php
namespace App\Response;

class Status
{
    //STATUS CODES
    const CREATED_STATUS = 201;
    const UNPROCESS_STATUS = 422;
    const DATA_NOT_FOUND = 404;
    const SUCESS_STATUS = 200;
    const DENIED_STATUS = 403;
    const CUT_OFF_STATUS = 409;

    //CRUD OPERATION
    const REGISTERED = "User successfully registered.";

    const COMPANY_IMPORT = "Company sync successfully.";
    const DEPARTMENT_IMPORT = "Department sync successfully.";
    const LOCATION_IMPORT = "Location sync successfully.";
    const ROLE_SAVE = "Role successfully saved.";
    // DISPLAY DATA
    const USER_DISPLAY = "User display successfully.";
    const ROLE_DISPLAY = "Role display successfully.";
    const COMPANY_DISPLAY = "Company display successfully.";
    const DEPARTMENT_DISPLAY = "Department display successfully.";
    const LOCATION_DISPLAY = "Location display successfully.";
    //UPDATE
    const USER_UPDATE = "User successfully updated.";
    const ROLE_UPDATE = "Role successfully updated.";

    //SOFT DELETE
    const ARCHIVE_STATUS = "Successfully archived.";
    const RESTORE_STATUS = "Successfully restored.";
    //ACCOUNT RESPONSE
    const INVALID_RESPONSE = "The provided credentials are incorrect.";
    const CHANGE_PASSWORD = "Password successfully changed.";
    const LOGIN_USER = "Log-in successfully.";
    const LOGOUT_USER = "Log-out successfully.";

    // DISPLAY ERRORS
    const NOT_FOUND = "Data not found.";
    //VALIDATION
    const SINGLE_VALIDATION = "Data has been validated.";
    const INVALID_ACTION = "Invalid action.";
    const INVALID_UPDATE_POSTED = "Unable to update this transaction is already posted.";
    const NEW_PASSWORD = "Please change your password.";
    const EXISTS = "Data already exists.";
    const ACCESS_DENIED = "You do not have permission.";
    const CUT_OFF = "Cut off reach.";
    const RUSH = "Rush field is required.";
    const DATA_EXPORT = "Data has been exported successfully.";

    const MISSING_HASHTAG = "Missing hashtag.";
}
