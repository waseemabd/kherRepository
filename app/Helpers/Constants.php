<?php


namespace App\Helpers;


class Constants
{
    const NULL = "null";
    const NOT_NULL = "not null";
    const DESIGNER = "designer";
    const CLIENT = "client";
    const SUPERVISOR = "superVisor";
    const LIST_MODIFICATIONS = 'list modifications';
    const CONV_CAMEL = 'camel';
    const CONV_UNDERSCORE = 'underscore';
    const ORDER_BY = "order_by";
    const ORDER_By_DIRECTION = "order_by_direction";
    const FILTER_OPERATOR = "filter_operator";
    const FILTERS = "filters";
    const PER_PAGE = "per_page";

    const NEW_PRODUCT_TITLE_EN = "New Product";
    const NEW_PRODUCT_TITLE_AR = "منتج جديد";
    const NEW_PRODUCT_TITLE_KU = "Berhema Nû";
    const NEW_PRODUCT_MSG_EN = "new product has been added with name: ";
    const NEW_PRODUCT_MSG_AR = "نم إضافة منتج جديد باسم: ";
    const NEW_PRODUCT_MSG_KU = "hilbera nû bi navê: ";

    const UPDATE_PRODUCT_TITLE_EN = "Update Product";
    const UPDATE_PRODUCT_TITLE_AR = "تعديل منتج";
    const UPDATE_PRODUCT_TITLE_KU = "Nûvekirina Hilberê";
    const UPDATE_PRODUCT_MSG_EN = "product has been updated, product name: ";
    const UPDATE_PRODUCT_MSG_AR = "نم تعديل المنتج ذو الاسم: ";
    const UPDATE_PRODUCT_MSG_KU = "hilber hate nûve kirin, navê hilberê: ";


    const UPDATE_PRODUCT_STATUS_MSG_EN = "product status has been updated, product name: ";
    const UPDATE_PRODUCT_STATUS_MSG_AR = "نم تعديل حالة المنتج ذو الاسم: ";
    const UPDATE_PRODUCT_STATUS_MSG_KU = "rewşa hilberê hate nûve kirin, navê hilberê:";



    const PRODUCT_ADD_SPECIAL_FURNITURE_MSG_AR = "تم إضافة المنتج الى قائمة الأثاث الخاص، اسم المنتج:";
    const PRODUCT_ADD_SPECIAL_FURNITURE_MSG_EN = "product has been added to special furniture list, product name: ";
    const PRODUCT_ADD_SPECIAL_FURNITURE_MSG_KU = "hilber li navnîşa mobîlya taybetî, navê hilberê hatî zêdekirin: ";

    const PRODUCT_REMOVE_SPECIAL_FURNITURE_MSG_AR = "تم إزالة المنتج من قائمة الأثاث الخاص، اسم المنتج:";
    const PRODUCT_REMOVE_SPECIAL_FURNITURE_MSG_EN = "product has been deleted from special furniture list, product name: ";
    const PRODUCT_REMOVE_SPECIAL_FURNITURE_MSG_KU = "hilber ji navnîşa mobîlya taybetî hate jêbirin, navê hilberê: ";

    const PRODUCT_ADD_SPECIAL_OFFER_MSG_AR = "تم إضافة المنتج الى قائمة العروض الخاصة، اسم المنتج:";
    const PRODUCT_ADD_SPECIAL_OFFER_MSG_EN = "product has been added to special offers list, product name: ";
    const PRODUCT_ADD_SPECIAL_OFFER_MSG_KU = "hilber li navnîşa pêşniyarên taybetî, navê hilberê hatî zêdekirin: ";

    const PRODUCT_REMOVE_SPECIAL_OFFER_MSG_AR = "تم إزالة المنتج من قائمة العروض الخاصة، اسم المنتج:";
    const PRODUCT_REMOVE_SPECIAL_OFFER_MSG_EN = "product has been deleted from special offers list, product name: ";
    const PRODUCT_REMOVE_SPECIAL_OFFER_MSG_KU = "hilber ji navnîşa pêşniyarên taybetî hate jêbirin, navê hilberê: ";

    const PRODUCT_ADD_BEST_OFFER_MSG_AR = "تم إضافة المنتج الى قائمة أفضل العروض، اسم المنتج:";
    const PRODUCT_ADD_BEST_OFFER_MSG_EN = "product has been added to the best offers list, product name: ";
    const PRODUCT_ADD_BEST_OFFER_MSG_KU = "hilber li navnîşa pêşniyarên çêtirîn, navê hilberê hatî zêdekirin: ";

    const PRODUCT_REMOVE_BEST_OFFER_MSG_AR = "تم إزالة المنتج من قائمة قائمة أفضل العروض، اسم المنتج:";
    const PRODUCT_REMOVE_BEST_OFFER_MSG_EN = "product has been deleted from the best offers list, product name: ";
    const PRODUCT_REMOVE_BEST_OFFER_MSG_KU = "hilber ji navnîşa pêşniyarên çêtirîn hate jêbirin, navê hilberê: ";

    const PRODUCT_ADD_ADS_MSG_AR = "تم إضافة المنتج الى قائمة الإعلانات، اسم المنتج:";
    const PRODUCT_ADD_ADS_MSG_EN = "product has been added to the ads list, product name: ";
    const PRODUCT_ADD_ADS_MSG_KU = "hilber li navnîşa reklaman hate zêdekirin, navê hilberê: ";

    const PRODUCT_REMOVE_ADS_MSG_AR = "تم إزالة المنتج من قائمة قائمة أفضل العروض، اسم المنتج:";
    const PRODUCT_REMOVE_ADS_MSG_EN = "product has been deleted from the ads list, product name: ";
    const PRODUCT_REMOVE_ADS_MSG_KU = "hilber ji navnîşa reklaman hate jêbirin, navê hilberê: ";

    const DISCOUNT_AR = "الخصم: ";
    const DISCOUNT_EN = "discount: ";
    const DISCOUNT_KU = "kêmkirinî: ";

    const STATUS_AR = "الحالة: ";
    const STATUS_EN = "status: ";
    const STATUS_KU = "cî: ";


    const product_status = [
        0 => 'hidden',
        1 => 'in_review',
        2 => 'published',
        3 => 'canceled',

    ];
}
