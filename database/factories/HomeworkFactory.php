<?php

namespace Database\Factories;

use App\Models\Homework;
use App\Models\HomeworkStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Homework>
 */
class HomeworkFactory extends Factory
{
    protected $model = Homework::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $score = null;
        $deadline = $this->faker->dateTimeThisMonth();
        $status  = $this->faker->randomElement(HomeworkStatus::cases());
        switch ($status) {
            case HomeworkStatus::Late:
                $completionTime = $this->faker->dateTimeInInterval($deadline, '+10 days');
                break;
            case HomeworkStatus::Uncompleted:
                $completionTime = null;
                break;
            case HomeworkStatus::Verified:
                $score = $this->faker->numberBetween(0, 100);
            case HomeworkStatus::Awaiting:
                $completionTime = $this->faker->dateTimeInInterval($deadline, '-10 days');
                break;
        }
        return [
            'title' => $this->faker->word(),
            'status' => $status,
            'score' => $score,
            'deadline' => $deadline,
            'owner_id' => User::factory(),
            'completion_timestamp' => $completionTime,
        ];
    }
}
