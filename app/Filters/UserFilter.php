<?php

namespace App\Filters;

use Essa\APIToolKit\Filters\QueryFilters;

class UserFilter extends QueryFilters
{
    protected array $allowedFilters = [];

    protected array $columnSearch = [
        "id",
        "id_prefix",
        "id_no",
        "first_name",
        "middle_name",
        "last_name",
        "suffix",
        "position",
        "mobile_no",
        "role_id",
        "username",
        "password",
        "location_id",
        "location_code",
        "location",
        "department_id",
        "department_code",
        "department",
        "company_id",
        "company_code",
        "company",
    ];
}
