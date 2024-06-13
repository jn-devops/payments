<?php

namespace Homeful\Payments\Database\Factories;

use Homeful\Payments\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween(10, 100),
        ];
    }
}
