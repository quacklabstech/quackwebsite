<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Route;

class MetaComposer
{
    public function compose(View $view)
    {
        $metaTitle = 'Quacklabs - Product Development Company In India';
        $metaDescription = 'Quacklabs is a creative Product Development Company in India that will come up with innovative, creative, and world-class ideas for your product.';
        $metaKeyword = 'website and mobile app development company, mobile app development company, digital marketing service, website and UI designing company, business automation solution, web service';
        $metaCannonical = 'https://www.quacklabs.in/';

        $currentRouteName = Route::currentRouteName();

        switch ($currentRouteName) {
            case 'webAppDevelopment':
                $metaTitle = 'Best Web App Development Service In India - Quacklabs';
                $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
                $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
                $metaCannonical = 'https://www.quacklabs.in/web-app-development';
                break;
            case 'ats':
                $metaTitle = 'Best Application Tracking System Service In India - Quacklabs';
                $metaDescription = 'ATS software is designed to streamline the recruitment process and make it easier for HR professionals to manage the large volume of resumes and job applications they receive.';
                $metaKeyword = 'recruiting software, ats recruitment, open source project management software, free app development software, performance management software, app design software, recruitment management software, ats recruitment software, hr application software, best mobile app development software';
                $metaCannonical = 'https://www.quacklabs.in/applicant-tracking-system';
                break;
        }

        $view->with([
            'meta_title' => $metaTitle,
            'meta_description' => $metaDescription,
            'meta_keyword' => $metaKeyword,
            'meta_cannonical' => $metaCannonical
        ]);
    }
}