<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Mockery\MockInterface;
use App\Services\PaystackPaymentService;
use App\Http\Controllers\API\BankController;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Requests\CreateBankDetailRequest;
use App\Models\BankDetail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;

class BankControllerTest extends TestCase
{
    private $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        $this->actingAs($this->user);
    }

    public function test_get_banks()
    {
        $paystackPaymentServiceMock = Mockery::mock(PaystackPaymentService::class);

        $paystackPaymentServiceMock->shouldReceive('banks')->once();

        $this->app->instance(PaystackPaymentService::class, $paystackPaymentServiceMock);

        $response = $this->getJson('/api/v1/banks');

        $response->assertStatus(200);
    }

    public function test_add_user_bank_detail()
    {
        $paystackPaymentServiceMock = $this->mock(PaystackPaymentService::class, function (MockInterface $mock) {
            // Configuring the behavior of the PaystackPaymentService mock
            $mock->shouldReceive('createRecipient')->andReturn([
                'data' => [
                    'details' => [
                        'account_name' => 'John Doe',
                        'account_number' => '1234567890',
                        'bank_name' => 'Bank A',
                        'bank_code' => 'A123',
                    ],
                    'recipient_code' => 'R123',
                    'type' => 'nuben',
                    'currency' => 'NGN',
                ],
            ]);
        });

        $request = [
            'account_number' => '1234567890',
            'bank_code' => 'A123',
            'bank_name' => 'access',
            'account_name' => "John Doe"
        ];

        $response = $this->post('/api/v1/add-bank-details', $request);

        $response->assertStatus(201);

        $response->assertJson([
            'statusCode' => 201,
            'statusText' => "created",
            'message' => 'Account details added successfully',
            'data' => [
                'user_id' => $this->user->id,
                'account_name' => 'John Doe',
                'account_number' => '1234567890',
                'bank_name' => 'Bank A',
                'bank_code' => 'A123',
                'recipient_code' => 'R123',
                'type' => 'nuben',
                'currency' => 'NGN',
            ],
        ]);
    }
}