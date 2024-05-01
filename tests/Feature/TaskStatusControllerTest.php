<?php

namespace Tests\Feature;

use App\Models\TaskStatus;
use App\Models\User;
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
        $route = route('task_statuses.index');
        $response = $this->get($route);

        $response->assertOk();
        foreach ($taskStatuses as $taskStatus) {
            $response->assertSeeText($taskStatus->name);
        }
    }

    public function test_index_method_doesnt_show_status_after_deletion(): void
    {
        $user = User::factory()->create();
        $taskStatuses = TaskStatus::factory()->count(3)->create();
        $toDelete = $taskStatuses->first();

        $routeDestroy = route('task_statuses.destroy', ['task_status' => $toDelete->id]);
        $responseDestroy = $this->actingAs($user)->delete($routeDestroy);
        $responseDestroy->assertRedirect();

        $routeIndex = route('task_statuses.index');
        $responseIndex = $this->get($routeIndex);
        $responseIndex->assertOk();
        $responseIndex->assertDontSeeText($toDelete->name);
    }

    public function test_index_method_shows_updated_status(): void
    {
        $user = User::factory()->create();
        $taskStatuses = TaskStatus::factory()->count(3)->create();
        $toUpdate = $taskStatuses->first();

        $updateStatus = 'Test Update Status';
        $routeUpdate = route('task_statuses.update', ['task_status' => $toUpdate->id]);
        $responseUpdate = $this->actingAs($user)->patch($routeUpdate, ['name' => $updateStatus]);
        $responseUpdate->assertRedirect();

        $routeIndex = route('task_statuses.index');
        $responseIndex = $this->get($routeIndex);
        $responseIndex->assertOk();
        $responseIndex->assertSeeText($updateStatus);
    }
}
