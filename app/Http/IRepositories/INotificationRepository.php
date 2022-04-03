<?php


namespace App\Http\IRepositories;


interface INotificationRepository
{
    public function showNotificationsForUser($user_type, $user_id);

    public function getNotificationsForAdmin($user_id);

    public function getUnReadNotifications($user_type, $user_id);

    public function updateMultiNotifications($data, $nots_ids);
}
