<?php

namespace Tests\Feature;

use App\Models\TaskStatus;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskStatusControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_index_method_displays_task_statuses(): void
    {
        $taskStatuses = TaskStatus::factory()->count(3)->create();
        $route = route('task-statuses.index');
        $response = $this->get($route);

        $response->assertOk();
        foreach ($taskStatuses as $taskStatus) {
            $response->assertSeeText($taskStatus->name);
        }
    }
}
