<?php 

namespace App\Services;

class SingletonService {
    private static $instance;

    private $value = 0;

    public static function instance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Update the value 
     * @param int
     * @return void
     */
    public function updateValue(int $value): void
    {
        $this->value += $value;
    }

    public function getValue(): int 
    {
        return $this->value;
    }
}