<?php

namespace devtoolboxuk\simplevalidator;

class ValidatorService
{
    private $uk_post_code_pattern = '/^(BFPO[ ]?[0-9]{1,4})$|^([Gg][Ii][Rr] 0[Aa]{2})|((([A-Za-z][0-9]{1,2})|(([A-Za-z][A-Ha-hJ-Yj-y][0-9]{1,2})|(([A-Za-z][0-9][A-Za-z])|([A-Za-z][A-Ha-hJ-Yj-y][0-9]?[A-Za-z])))) [0-9][A-Za-z]{2})$|^([Gg][Ii][Rr]0[Aa]{2})|((([A-Za-z][0-9]{1,2})|(([A-Za-z][A-Ha-hJ-Yj-y][0-9]{1,2})|(([A-Za-z][0-9][A-Za-z])|([A-Za-z][A-Ha-hJ-Yj-y][0-9]?[A-Za-z]))))[0-9][A-Za-z]{2})$/';

    public function isEmailValid($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            EmailValidatorService::checkDomain($email);

            return true;
        }
        return false;
    }

    /**
     *
     * Determines if a post code for a country matches the known format
     *
     * @param $postcode
     * @param $country
     * @return bool
     */
    public function isPostCodeValid($postcode, $country)
    {
        switch ($country) {
            case 'GB':
            case 'GBR':

                if (preg_match($this->uk_post_code_pattern, strtoupper($postcode)) !== 1) {
                    return false;
                }
                break;
            default:
                break;
        }

        return true;
    }

}
