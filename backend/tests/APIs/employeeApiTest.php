<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\employee;

class employeeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_employee()
    {
        $employee = employee::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/employees', $employee
        );

        $this->assertApiResponse($employee);
    }

    /**
     * @test
     */
    public function test_read_employee()
    {
        $employee = employee::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/employees/'.$employee->id
        );

        $this->assertApiResponse($employee->toArray());
    }

    /**
     * @test
     */
    public function test_update_employee()
    {
        $employee = employee::factory()->create();
        $editedemployee = employee::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/employees/'.$employee->id,
            $editedemployee
        );

        $this->assertApiResponse($editedemployee);
    }

    /**
     * @test
     */
    public function test_delete_employee()
    {
        $employee = employee::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/employees/'.$employee->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/employees/'.$employee->id
        );

        $this->response->assertStatus(404);
    }
}
