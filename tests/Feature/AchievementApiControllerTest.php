<?php

namespace Tests\Feature;

use App\Enums\AchievementGroupEnum;
use Tests\TestCase;
use App\Models\Achievement;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AchievementApiControllerTest extends TestCase
{
    /** @test */
    public function it_can_get_a_list_of_achievements()
    {
        $Achievements = Achievement::factory()->count(5)->create()->toArray();

        $response = $this->getJson('/api/v1/achievements', $Achievements);

        $response->assertStatus(200);
    }

    /** @test */
    public function it_can_create_an_achievement()
    {
        $achievementData = [
            'achievement_name' => 'New Achievement',
            'required_count' => 1,
            'achievement_group' => AchievementGroupEnum::PURCHASE,
            'description' => 'Achievement description',
        ];

        $response = $this->post('/api/v1/achievements', $achievementData);

        $response->assertStatus(201)
            ->assertJson([
                'message' => 'Achievement created successfully',
                'data' => [
                    'id' => $response['data']['id'],
                    'achievement_name' => $achievementData['achievement_name'],
                    'required_count' => $achievementData['required_count'],
                    'achievement_group' => $achievementData['achievement_group'],
                    'description' => $achievementData['description'],
                    'created_at' => $response['data']['created_at'],
                    'updated_at' => $response['data']['updated_at'],
                ],
            ]);

        $this->assertDatabaseHas('achievements', $achievementData);
    }

    /** @test */
    public function it_can_get_an_achievement()
    {
        $achievement = Achievement::factory()->create();

        $response = $this->get('/api/v1/achievements/' . $achievement->id);

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Achievement retrieved successfully',
                'data' => [
                    'id' => $achievement->id,
                    'achievement_name' => $achievement->achievement_name,
                    'required_count' => $achievement->required_count,
                    'achievement_group' => $achievement->achievement_group,
                    'description' => $achievement->description,
                    'created_at' => $achievement->created_at->format('Y-m-d h:i:s'),
                    'updated_at' => $achievement->updated_at->format('Y-m-d h:i:s')
                ],
            ]);
    }

    /** @test */
    public function it_can_update_an_achievement()
    {
        $achievement = Achievement::factory()->create();

        $updatedData = [
            'achievement_name' => 'Updated Achievement',
            'required_count' => 3,
            'achievement_group' => AchievementGroupEnum::PURCHASE,
            'description' => 'Updated achievement description',
        ];

        $response = $this->patch('/api/v1/achievements/' . $achievement->id, $updatedData);

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Achievement updated successfully',
                'data' => [
                    'id' => $achievement->id,
                    'achievement_name' => $updatedData['achievement_name'],
                    'required_count' => $updatedData['required_count'],
                    'achievement_group' => $updatedData['achievement_group'],
                    'description' => $updatedData['description'],
                    'created_at' => $achievement->created_at->format('Y-m-d h:i:s'),
                    'updated_at' => $achievement->updated_at->format('Y-m-d h:i:s')

                ],
            ]);

        $this->assertDatabaseHas('achievements', $updatedData);
    }

    /** @test */
    public function it_can_delete_an_achievement()
    {
        $achievement = Achievement::factory()->create();

        $response = $this->delete('/api/v1/achievements/' . $achievement->id);

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Achievement deleted successfully',
            ]);

        $this->assertDatabaseMissing('achievements', [
            'id' => $achievement->id,
        ]);
    }
}
