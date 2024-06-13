<?php

namespace Homeful\Payments\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Homeful\Payments\Models\Payment;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        return [
            'amount'=>$this->faker->numberBetween(10,100)
        ];
    }
}