<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Estate;
use App\Models\EstateAppointment;
use App\Models\EstateEnquiry;
use App\Models\EstateFeedback;
use App\Models\File;
use App\Models\LandingSlider;
use App\Models\Tag;
use App\Models\User;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Estates', Estate::count())
                ->description('All listed properties')
                ->descriptionIcon('heroicon-m-home-modern'),

            Stat::make('Total Blogs', Blog::count())
                ->description('Published blog articles')
                ->descriptionIcon('heroicon-m-document-text'),

            Stat::make('Total Users', User::count())
                ->description('Registered users')
                ->descriptionIcon('heroicon-m-users'),

            Stat::make('Total Files', File::count())
                ->description('Downloadable property files')
                ->descriptionIcon('heroicon-m-arrow-down-tray'),

            Stat::make('Total Tags', Tag::count())
                ->description('Tags used across posts')
                ->descriptionIcon('heroicon-m-tag'),

            Stat::make('Total Categories', Category::count())
                ->description('Content and estate categories')
                ->descriptionIcon('heroicon-m-rectangle-stack'),

            Stat::make('Estate Enquiries', EstateEnquiry::count())
                ->description('Client property enquiries')
                ->descriptionIcon('heroicon-m-envelope'),

            Stat::make('Appointments Booked', EstateAppointment::count())
                ->description('Scheduled viewings')
                ->descriptionIcon('heroicon-m-calendar-days'),

            Stat::make('Feedback Entries', EstateFeedback::count())
                ->description('Client feedback and testimonials')
                ->descriptionIcon('heroicon-m-chat-bubble-left-ellipsis'),

            Stat::make('Blog Comments', Comment::count())
                ->description('User comments on blogs')
                ->descriptionIcon('heroicon-m-chat-bubble-bottom-center-text'),

            Stat::make('Landing Sliders', LandingSlider::count())
                ->description('Carousel banners')
                ->descriptionIcon('heroicon-m-photo'),
        ];
    }
}
