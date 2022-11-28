<?php

namespace Database\Factories;

use App\Models\Homework;
use App\Models\Status;
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
        $deadline = $this->faker->dateTimeThisMonth();
        $completionTime = $this->faker->dateTimeThisMonth();
        if ($deadline < $completionTime) {
            $status = Status::Late;
        } else {
            $status  = $this->faker->randomElement([
                Status::Awaiting,
                Status::Uncompleted,
                Status::Verified
            ]);
        }
        $score = null;
        if ($status == Status::Verified){
            $score = $this->faker->numberBetween(0,100);
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
