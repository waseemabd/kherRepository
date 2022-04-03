<?php


namespace App\Http\Repository;


use App\Helpers\JsonResponse;
use App\Http\IRepositories\INotificationRepository;
use App\Models\FurnitureGallery;
use App\Models\Notification;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\App;

class NotificationRepository extends BaseRepository implements INotificationRepository
{

    public function model()
    {
        return Notification::class;
    }

    public function showNotificationsForUser($user_type, $user_id)
    {
        try {
            if ($user_type == 'user') {
                $id_type = 'user_id';
            } else {
                $id_type = 'student';

            }

            $data = $this->model
                ->where([['user_type', $user_type], [$id_type, $user_id]])
                ->orderBy('created_at', 'desc')
                ->get();

            $res = [];
            $local_data = [];
            foreach ($data as $not) {
                $local_data['not_type'] = $not['type'];
                $local_data['id'] = $not['id'];

                if (App::isLocale('en')) {
                    //
                    $local_data['title'] = $not['fcm_title_en'];
                    $local_data['message'] = $not['fcm_message_en'];
                } elseif (App::isLocale('ar')) {
                    $local_data['title'] = $not['fcm_title_ar'];
                    $local_data['message'] = $not['fcm_message_ar'];

                } else {
                    $local_data['title'] = $not['fcm_title_ku'];
                    $local_data['message'] = $not['fcm_message_ku'];
                }

                $fcm_data = json_decode($not['fcm_data']) ? json_decode($not['fcm_data']) : [];

                if (!empty($fcm_data)) {

//                    $local_data['moduleType'] = $fcm_data->module;
//                    $local_data['moduleId'] = $fcm_data->module_id;
//                    $local_data['modulePrice'] = isset($fcm_data->price) ? $fcm_data->price : 0 ;
//                    $local_data['moduleStatus'] = $fcm_data->status;
//                    $local_data['moduleImage'] = $fcm_data->image;

                }
                $local_data['not_status'] = $not['status'] ? trans('common_msg.old') : trans('common_msg.new');
                $local_data['not_status_code'] = $not['status'];
                $local_data['createdAt'] = $not['created_at'];

                array_push($res, $local_data);
            }

            return $res;
        } catch (\Exception $exception) {
            throw new \Exception('common_msg.' . trans($exception->getMessage()));
        }
    }


    public function getNotificationsForAdmin($user_id)
    {
        try {

            $data = $this->model
                ->where([['user_type', 'user'], ['user_id', $user_id]])
                ->orderBy('created_at', 'desc')
                ->get();

            $res = [];
            $local_data = [];
            foreach ($data as $not) {
                $local_data['not_type'] = $not['type'];
                $local_data['id'] = $not['id'];

                if (App::isLocale('en')) {
                    //
                    $local_data['title'] = $not['fcm_title_en'];
                    $local_data['message'] = $not['fcm_message_en'];
                } elseif (App::isLocale('ar')) {
                    $local_data['title'] = $not['fcm_title_ar'];
                    $local_data['message'] = $not['fcm_message_ar'];

                } else {
                    $local_data['title'] = $not['fcm_title_ku'];
                    $local_data['message'] = $not['fcm_message_ku'];
                }

                $fcm_data = json_decode($not['fcm_data']) ? json_decode($not['fcm_data']) : [];

                if (!empty($fcm_data)) {

//                    $local_data['moduleType'] = $fcm_data->module;
//                    $local_data['moduleId'] = $fcm_data->module_id;
//                    $local_data['modulePrice'] = isset($fcm_data->price) ? $fcm_data->price : 0 ;
//                    $local_data['moduleStatus'] = $fcm_data->status;
//                    $local_data['moduleImage'] = $fcm_data->image;

                }
                $local_data['not_status'] = $not['status'] ? trans('common_msg.old') : trans('common_msg.new');
                $local_data['not_status_code'] = $not['status'];
                $local_data['createdAt'] = $not['created_at'];

                array_push($res, $local_data);
            }

            return $res;
        } catch (\Exception $exception) {
            throw new \Exception('common_msg.' . trans($exception->getMessage()));
        }
    }


    public function getUnReadNotifications($user_type, $user_id)
    {
        try {

            if ($user_type == 'user' ) {
                $id_type = 'user_id';
            } else {
                $id_type = 'student_id';

            }

            $data = $this->model
                ->where([['user_type', $user_type], [$id_type, $user_id], ['status', 0]])
                ->get();

            return $data;
        } catch (\Exception $exception) {
            throw new \Exception('common_msg.' . trans($exception->getMessage()));
        }
    }

    public function updateMultiNotifications($data, $nots_ids)
    {
        try {

            $order = $this->model->whereIn('id', $nots_ids)->update($data);

            return $order;
        } catch (\Exception $exception) {
            if ($exception instanceof ModelNotFoundException) {
                throw new \Exception(trans('common_msg.' . JsonResponse::MSG_NOT_FOUND));
            }
            throw new \Exception(trans($exception->getMessage()));
        }
    }

}
