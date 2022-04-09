<?php


namespace App\Http\Repository;


use App\Http\IRepositories\IStudentCourseRegistrationRequestRepository;
use App\Models\StudentCourseRegistrationRequest;

class StudentCourseRegistrationRequestRepository extends BaseRepository implements IStudentCourseRegistrationRequestRepository
{

    public function model()
    {
        return StudentCourseRegistrationRequest::class;
    }

    public function getSubscriptionsByStatus($status)
    {
        try {

            $subscriptions = $this->model->where('status', $status)->orderBy('created_at', 'desc')->get();
            return $subscriptions;
        } catch (\Exception $exception) {
            throw new \Exception('common_msg.' . trans($exception->getMessage()));
        }
    }

    public function getSubscriptionsByIdAndStatus($id,$status)
    {
        try {

            $subscriptions = $this->model->where('course_id', $id)->where('status', $status)->orderBy('created_at', 'desc')->get();
            return $subscriptions;
        } catch (\Exception $exception) {
            throw new \Exception('common_msg.' . trans($exception->getMessage()));
        }
    }

    public function updateSubscriptionsByIdAndStatus($id,$status)
    {
        try {
            $CourseStudent=StudentCourseRegistrationRequest::findOrFail($id);
            $CourseStudent->status = $status;
            $CourseStudent->save();
            $subscriptions = $this->model->where('course_id', $id)->where('status', 'Pending')->orderBy('created_at', 'desc')->get();
            return $subscriptions;
        } catch (\Exception $exception) {
            throw new \Exception('common_msg.' . trans($exception->getMessage()));
        }
    }

    
}
