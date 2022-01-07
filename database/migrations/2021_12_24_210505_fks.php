<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('students', function (Blueprint $table) {
            // ******************
            $table->foreignId('certificate_id')->nullable()->constrained('certificates')->nullOnDelete();

        });

        Schema::table('profiles', function (Blueprint $table) {
            // ******************
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('student_id')->nullable()->constrained('students')->onDelete('cascade');

        });


        Schema::table('courses', function (Blueprint $table) {
            // ******************
            $table->foreignId('diploma_id')->constrained('diplomas')->onDelete('cascade');

        });

        Schema::table('course_students', function (Blueprint $table) {    /// set null or cascade ??????????
            // ******************
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');

        });

        Schema::table('course_users', function (Blueprint $table) {
            // ******************
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');

        });

        Schema::table('lectures', function (Blueprint $table) {
            // ******************
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');

        });

        Schema::table('lecture_students', function (Blueprint $table) {    /// set null or cascade ??????????
            // ******************
            $table->foreignId('lecture_id')->constrained('lectures')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');

        });


        Schema::table('homework', function (Blueprint $table) {
            // ******************
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('lecture_id')->constrained('lectures')->onDelete('cascade');

        });


        Schema::table('homework_students', function (Blueprint $table) {    /// set null or cascade ??????????
            // ******************
            $table->foreignId('homework_id')->constrained('homework')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');

        });


        Schema::table('student_files', function (Blueprint $table) {    /// set null or cascade ??????????
            // ******************
            $table->foreignId('homework_id')->constrained('homework')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');

        });


        Schema::table('files', function (Blueprint $table) {    /// set null or cascade ??????????
            // ******************
            $table->foreignId('homework_id')->constrained('homework')->onDelete('cascade');
            $table->foreignId('lecture_id')->constrained('lectures')->onDelete('cascade');

        });


        Schema::table('tests', function (Blueprint $table) {    /// set null or cascade ??????????
            // ******************
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

        });

        Schema::table('student_tests', function (Blueprint $table) {    /// set null or cascade ??????????
            // ******************
            $table->foreignId('test_id')->constrained('tests')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');

        });


        Schema::table('questions', function (Blueprint $table) {    /// set null or cascade ??????????
            // ******************
            $table->foreignId('question_type_id')->constrained('question_types')->onDelete('cascade');
            $table->foreignId('test_id')->constrained('tests')->onDelete('cascade');

        });

        Schema::table('options', function (Blueprint $table) {
            // ******************
            $table->foreignId('question_id')->constrained('questions')->onDelete('cascade');

        });

        Schema::table('answers', function (Blueprint $table) {    /// set null or cascade ??????????
            // ******************
            $table->foreignId('question_id')->constrained('questions')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');

        });

        Schema::table('progress', function (Blueprint $table) {    /// set null or cascade ??????????
            // ******************
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');

        });

        Schema::table('comments', function (Blueprint $table) {    /// set null or cascade ??????????
            // ******************
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('student_id')->nullable()->constrained('students')->onDelete('cascade');

        });

        Schema::table('blogs', function (Blueprint $table) {    /// set null or cascade ??????????
            // ******************
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

        });

        Schema::table('schedules', function (Blueprint $table) {    /// set null or cascade ??????????
            // ******************
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('student_id')->nullable()->constrained('students')->onDelete('cascade');
            $table->foreignId('lecture_id')->constrained('lectures')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
