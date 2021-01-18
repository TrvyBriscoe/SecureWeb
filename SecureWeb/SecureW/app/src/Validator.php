<?php

namespace Secure;

class Validator
{
    public function __construct() { }

    public function __destruct() { }

    public function validateID($ID_to_check)
    {
        $checked_ID = false;
        if (isset($ID_to_check))
        {
            if (!empty($ID_to_check))
            {
                if (strlen($ID_to_check) == 2)
                {
                    $checked_country = $ID_to_check;
                }
            }
            else
            {
                $checked_ID = 'none selected';
            }
        }
        return $checked_ID;
    }

    public function validateDetailType($type_to_check)
    {
        $checked_detail_type = false;
        $detail_types = DETAIL_TYPES;

        if (in_array($type_to_check, $detail_types) === true)
        {
            $checked_detail_type = $type_to_check;
        }

        return $checked_detail_type;
    }

    public function validateDownloadedData($tainted_data)
    {
        $validated_string_data = '';

        $validated_string_data = filter_var($tainted_data, FILTER_SANITIZE_STRING);

        return $validated_string_data;
    }
}