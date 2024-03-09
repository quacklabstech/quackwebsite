<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{

    public function index()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.homepage')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    // product
    public function ats()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.product-applicant-tracking-system')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function jobPortal()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.product-job-portal')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    // soulution section
    public function webAppDevelopment()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-web-app-development')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function mobileAppDevelopment()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-mobile-app-development')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function ecommerceDevelopment()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-ecom-app-development')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function integratedCommandCenter()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-integrated-command-center')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function erpDevelopment()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-erp-development')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function fullstackDevelopment()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-fullstack-development')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function htmlWebsite()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-html-website')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function wordpressWebsite()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-wordpress-website')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function psdToHtmlWebsite()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-psd-to-html-website')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function userInterface()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-user-interface')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function businessAssets()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-business-assets')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function newsletterAndTemplate()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-news-letter')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function staffAugmentation()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-staff-augmentation')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function resourceAugmentation()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-resource-augmentation')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function hireTrainDeploy()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view(('pages.solution-hire-train-deploy'))->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function socialMediaManagement()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-social-media-management')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function searchEngineOptimization()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-search-engine-optimization')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function socialMediaMarketing()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-social-media-marketing')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function webAnalytics()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-web-analytics')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function contentWriting()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-contentWriting')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function payPerClick()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-pay-per-click')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function viralMarketing()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-viral-marketing')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function onlineReputationManagement()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-online-reputation-management')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function influencerMarketing()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-influencer-marketing')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function emailMarketing()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-email-marketing')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function smsWhatsappCampaigns()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-sms-whatsapp-campaigns')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function affiliateMarketing()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-affiliate-marketing')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function applicantTracking()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-applicant-tracking')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function hrManagement()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-hr-management')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function hospitalManagement()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-hospital-management')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function offshoreItConsulting()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-offshore-it-consulting')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function enterpriseItConsulting()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-enterprise-it-consulting')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function itAssessments()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-it-assessments')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function itStrategyAndPlanning()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-it-strategy-and-planning')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function businessContinuity()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-business-continuity')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function governanceRisk()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-governance-risk')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function stockPos()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-stock-pos')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function resourceMonitoring()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-resource-monitoring')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function restaurantManagement()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-restaurant-management')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function introduction()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-introduction')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function whyUs()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-why-us')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function milestones()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-milestones')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function missionVision()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-mission-vision')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function uniqueApproach()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-unique-approach')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function futureOutlook()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-future-outlook')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function awardsAndAccreditations()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.companyawards-and-accreditations')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function ourStrength()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-our-strength')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function ourTeam()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-our-team')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function overview()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-overview')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function lifeQuack()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-life-quack')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function industryConsultant()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-industry-consultant')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function jobs()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-jobs')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function employeeSpeak()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-employee-speak')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function internship()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-internship')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function uiUxDesign()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-ui-ux-design')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function appDevelopment()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-app-development')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function ecommerceAppDevelopment()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-ecommerce-app-development')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function digitalMarket()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-digital-market')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function testimonial()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-testimonial')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function career()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.career')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function html()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.html')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techJavascript()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-javascript')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techBootstrap()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-bootstrap')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techWordpress()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-wordpress')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techCss()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.techCss')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techPhotoshop()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-photoshop')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techPhp()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-php')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techMysql()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-mysql')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techLaravel()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-laravel')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techCodeigniter()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-codeigniter')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techMongoDb()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-Mongo-db')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techAndroid()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-android')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techPython()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-python')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techFirebase()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-firebase')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techFlutter()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-flutter')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techAngular()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-angular')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techNode()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-node')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function techReact()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.tech-react')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function contactUs()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.contact-us')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function appDevelopmentAll()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.app-development-all')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function webServices()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.web-services')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function getQuote()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.get-quote')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function itConsultingAll()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.it-consulting-all')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function cloudSaas()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.cloud-saas')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function ourProduct()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.our-product')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function blogDetails()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.blog-details')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function joinTeam()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('join_team_layout')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    // upadate 29/06/23
    public function products()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.products')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function solutions()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.soutions')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function solutionsAppDevelopment()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.app-development-all')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function solutionsUiUx()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-ui-ux-design')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function solutionsResourceAugmentation()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.solution-resource-augmentation')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function cloudSassAll()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.cloud-sass-all')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function itConsulting()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.it-consulting-all')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function solutionProduct()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.products')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function digitalMarketing()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.digital-marketing-all')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function companyAboutAll()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-about-all')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function companyPortfolioAll()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.company-portfolio-all')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    // cloudSassAll
    public function blogDetails2()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.blog-details2')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
    public function blogDetails3()
    {
        $metaTitle = 'Best Web App Development Service In India - Quacklabs';
        $metaDescription = 'We have experience developing a wide range of websites, from simple brochure sites to complex e-commerce platforms. No matter what type of website you need, we have the expertise to bring your vision to life.';
        $metaKeyword = 'web app development services, web app development company, website and app development India, web mobile development services, best app development websites, website app development agencies, best web app development, custom web application design and development';
        $metaCannonical = 'https://www.quacklabs.in/web-app-development';
        return view('pages.blog-details3')->with(compact('metaTitle','metaDescription','metaKeyword','metaCannonical'));
    }
}
