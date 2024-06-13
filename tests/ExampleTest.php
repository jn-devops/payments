<?php

use Homeful\Payments\Models\Payment;

it('can test', function () {
    $payment = Payment::factory()->create(['amount'=>50]);

    expect($payment->amount)->toBe(50);
});