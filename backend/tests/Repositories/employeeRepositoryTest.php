<?php namespace Tests\Repositories;

use App\Models\employee;
use App\Repositories\employeeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class employeeRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var employeeRepository
     */
    protected $employeeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->employeeRepo = \App::make(employeeRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_employee()
    {
        $employee = employee::factory()->make()->toArray();

        $createdemployee = $this->employeeRepo->create($employee);

        $createdemployee = $createdemployee->toArray();
        $this->assertArrayHasKey('id', $createdemployee);
        $this->assertNotNull($createdemployee['id'], 'Created employee must have id specified');
        $this->assertNotNull(employee::find($createdemployee['id']), 'employee with given id must be in DB');
        $this->assertModelData($employee, $createdemployee);
    }

    /**
     * @test read
     */
    public function test_read_employee()
    {
        $employee = employee::factory()->create();

        $dbemployee = $this->employeeRepo->find($employee->id);

        $dbemployee = $dbemployee->toArray();
        $this->assertModelData($employee->toArray(), $dbemployee);
    }

    /**
     * @test update
     */
    public function test_update_employee()
    {
        $employee = employee::factory()->create();
        $fakeemployee = employee::factory()->make()->toArray();

        $updatedemployee = $this->employeeRepo->update($fakeemployee, $employee->id);

        $this->assertModelData($fakeemployee, $updatedemployee->toArray());
        $dbemployee = $this->employeeRepo->find($employee->id);
        $this->assertModelData($fakeemployee, $dbemployee->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_employee()
    {
        $employee = employee::factory()->create();

        $resp = $this->employeeRepo->delete($employee->id);

        $this->assertTrue($resp);
        $this->assertNull(employee::find($employee->id), 'employee should not exist in DB');
    }
}
