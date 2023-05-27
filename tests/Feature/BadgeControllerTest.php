<?php

namespace Tests\Feature;

use App\Models\Badge;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BadgeControllerTest extends TestCase
{
    /** @test */
    public function it_can_get_a_list_of_badges()
    {
        $Achievements = Badge::factory()->count(5)->create()->toArray();

        $response = $this->getJson('/api/v1/badges', $Achievements);

        $response->assertStatus(200);
    }

    /** @test */
    public function it_can_create_an_badge()
    {
        $data = [
            'badge_name' => 'New badge',
            'required_number_of_achievements' => 1,
            'description' => 'badge description',
        ];

        $response = $this->post('/api/v1/badges', $data);

        $response->assertStatus(201)
            ->assertJson([
                'message' => 'New badge created successfully',
                'data' => [
                    'id' => $response['data']['id'],
                    'badge_name' => $data['badge_name'],
                    'required_number_of_achievements' => $data['required_number_of_achievements'],
                    'description' => $data['description'],
                    'created_at' => $response['data']['created_at'],
                    'updated_at' => $response['data']['updated_at'],
                ],
            ]);

        $this->assertDatabaseHas('badges',  $data);
    }

    /** @test */
    public function it_can_get_an_badge()
    {
        $badge = Badge::factory()->create();

        $response = $this->get("/api/v1/badges/{$badge->id}");

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Badge retrieved successfully',
                'data' => [
                    'id' => $badge->id,
                    'badge_name' => $badge->badge_name,
                    'required_number_of_achievements' => $badge->required_number_of_achievements,
                    'description' => $badge->description,
                    'created_at' => $badge->created_at->format('Y-m-d h:i:s'),
                    'updated_at' => $badge->updated_at->format('Y-m-d h:i:s')
                ],
            ]);
    }

    /** @test */
    public function it_can_update_an_badge()
    {
        $badge = Badge::factory()->create();

        $updatedData = [
            'badge_name' => 'Updated badge',
            'required_number_of_achievements' => 3,
            'description' => 'Updated badge description',
        ];

        $response = $this->patch("/api/v1/badges/{$badge->id}", $updatedData);

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Badge updated successfully',
                'data' => [
                    'id' => $badge->id,
                    'badge_name' => $updatedData['badge_name'],
                    'required_number_of_achievements' => $updatedData['required_number_of_achievements'],
                    'description' => $updatedData['description'],
                    'created_at' => $badge->created_at->format('Y-m-d h:i:s'),
                    'updated_at' => $badge->updated_at->format('Y-m-d h:i:s')

                ],
            ]);

        $this->assertDatabaseHas('badges', $updatedData);
    }

    /** @test */
    public function it_can_delete_an_badge()
    {
        $badge = Badge::factory()->create();

        $response = $this->delete("/api/v1/badges/{$badge->id}");

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Badge deleted successfully',
            ]);

        $this->assertDatabaseMissing('badges', [
            'id' => $badge->id,
        ]);
    }
}
