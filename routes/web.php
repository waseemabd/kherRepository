<?php

use App\Http\Livewire\Accordion;
use App\Http\Livewire\Alerts;
use App\Http\Livewire\Avatar;
use App\Http\Livewire\Background;
use App\Http\Livewire\Badge;
use App\Http\Livewire\Blog;
use App\Http\Livewire\Border;
use App\Http\Livewire\Breadcrumbs;
use App\Http\Livewire\Buttons;
use App\Http\Livewire\Calendar;
use App\Http\Livewire\Cards;
use App\Http\Livewire\Carousel;
use App\Http\Livewire\ChartChartjs;
use App\Http\Livewire\ChartEchart;
use App\Http\Livewire\ChartFlot;
use App\Http\Livewire\ChartMorris;
use App\Http\Livewire\ChartPeity;
use App\Http\Livewire\ChartSparkline;
use App\Http\Livewire\Chat;
use App\Http\Livewire\Collapse;
use App\Http\Livewire\Contacts;
use App\Http\Livewire\Counters;
use App\Http\Livewire\Display;
use App\Http\Livewire\Draggablecards;
use App\Http\Livewire\Dropdown;
use App\Http\Livewire\Editprofile;
use App\Http\Livewire\Emptypage;
use App\Http\Livewire\Error404;
use App\Http\Livewire\Error500;
use App\Http\Livewire\Extras;
use App\Http\Livewire\Faq;
use App\Http\Livewire\Flex;
use App\Http\Livewire\Forgot;
use App\Http\Livewire\FormAdvanced;
use App\Http\Livewire\FormEditor;
use App\Http\Livewire\FormElements;
use App\Http\Livewire\FormLayouts;
use App\Http\Livewire\FormValidation;
use App\Http\Livewire\FormWizards;
use App\Http\Livewire\Gallery;
use App\Http\Livewire\Height;
use App\Http\Livewire\Icons;
use App\Http\Livewire\ImageCompare;
use App\Http\Livewire\Images;
use App\Http\Livewire\Index;
use App\Http\Livewire\Invoice;
use App\Http\Livewire\ListGroup;
use App\Http\Livewire\Lockscreen;
use App\Http\Livewire\Mail;
use App\Http\Livewire\MailCompose;
use App\Http\Livewire\MailRead;
use App\Http\Livewire\MailSettings;
use App\Http\Livewire\MapLeaflet;
use App\Http\Livewire\MapVector;
use App\Http\Livewire\Margin;
use App\Http\Livewire\MediaObject;
use App\Http\Livewire\Modals;
use App\Http\Livewire\Navigation;
use App\Http\Livewire\Notification;
use App\Http\Livewire\Padding;
use App\Http\Livewire\Pagination;
use App\Http\Livewire\Popover;
use App\Http\Livewire\Position;
use App\Http\Livewire\Pricing;
use App\Http\Livewire\ProductCart;
use App\Http\Livewire\ProductDetails;
use App\Http\Livewire\Products;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Progress;
use App\Http\Livewire\Rangeslider;
use App\Http\Livewire\Rating;
use App\Http\Livewire\Reset;
use App\Http\Livewire\Search;
use App\Http\Livewire\Signin;
use App\Http\Livewire\Signup;
use App\Http\Livewire\Spinners;
use App\Http\Livewire\SweetAlert;
use App\Http\Livewire\TableBasic;
use App\Http\Livewire\TableData;
use App\Http\Livewire\Tabs;
use App\Http\Livewire\Tags;
use App\Http\Livewire\Thumbnails;
use App\Http\Livewire\Timeline;
use App\Http\Livewire\Toast;
use App\Http\Livewire\Todotask;
use App\Http\Livewire\Tooltip;
use App\Http\Livewire\Treeview;
use App\Http\Livewire\Typography;
use App\Http\Livewire\Underconstruction;
use App\Http\Livewire\Userlist;
use App\Http\Livewire\WidgetNotification;
use App\Http\Livewire\Widgets;
use App\Http\Livewire\Width;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\FullCalenderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'user'], function () {

    Route::get('/home', function () {
        return view('user.home');
    });
    Route::get('/login', function () {
        return view('user.login');
    });
    Route::get('/aboutUs', function () {
        return view('user.about');
    });

    Route::get('/courses', function () {
        return view('user.course');
    });

});
