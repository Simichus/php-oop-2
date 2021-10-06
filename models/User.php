<?php

/** class User
 * @param string $first_name
 * @param string $last_name
 * @param string $email
 */

class User
{
    protected $first_name;
    protected $last_name;
    protected $email;

    public function __construct($first_name, $last_name, $email)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

/** class PremiumUser
 * @param string $first_name
 * @param string $last_name
 * @param string $email
 * @param int $premium_level
 */

class PremiumUser extends User
{
    protected $premium_level;
    protected $discount;

    public function __construct($first_name, $last_name, $email, $premium_level)
    {
        $this->premium_level = $premium_level;
        parent::__construct($first_name, $last_name, $email);
    }

    public function getPremiumLevel()
    {
        return $this->premium_level;
    }

    public function getDiscount()
    {
        if ($this->premium_level > 0 && $this->premium_level <= 3) {
            switch ($this->premium_level) {
                case 1:
                    return $this->discount = 10;
                case 2:
                    return $this->discount = 25;
                case 3:
                    return $this->discount = 50;
            }
        } else if (!is_numeric($this->premium_level)) {
            throw new Exception('Valore premium non corretto');
        } else {
            throw new Exception('Non sei utente premium');
        }
    }
}
