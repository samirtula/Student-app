<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\User;
use App\Models\UserHasLessons;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        $lessons = Lesson::factory(27)
            ->create();

        $students = User::whereHas(
            'roles', function ($q) {
            $q->where('name', 'student');
        })->get();

        foreach ($lessons as $lesson) {
            foreach ($students as $user) {
                UserHasLessons::create([
                    'status' => false,
                    'user_id' => $user->id,
                    'lesson_id' => $lesson->id
                ]);
            }
        }

        foreach ($students as $user) {
            $lessons = UserHasLessons::where(['user_id' => $user->id])->get();
            $lessonsViewed = random_int(1, 20);
            $ids = [];

            do {
                $lessonId = random_int(1, 27);

                if (!in_array($lessonId, $ids)) {
                    $ids[] = $lessonId;
                }
            } while (count($ids) < $lessonsViewed);

            foreach ($lessons as $lesson) {
                if (in_array($lesson->lesson_id, $ids)) {
                    $lesson->status = true;
                    $lesson->save();
                }
            }
        }
    }
}
