<?php

namespace devtoolboxuk\simplevalidator;

final class EmailValidatorService extends ValidatorService
{
    static public function checkDomain($email)
    {
        $domain_name = substr(strrchr($email, "@"), 1);

        if (function_exists('checkdnsrr')) {
            if (checkdnsrr($domain_name . '.', 'MX')) {
                return true;
            }
            if (checkdnsrr($domain_name . '.', 'A')) {
                return true;
            }
            return false;
        }
        return true;
    }
}
