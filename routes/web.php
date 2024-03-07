<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomepageController::class, 'index'])->name('index');

// product section 
Route::get('/products/applicant-tracking-system', [HomepageController::class, 'ats'])->name('ats');
Route::get('/products/job-portal', [HomepageController::class, 'jobPortal'])->name('jobPortal');

// soulution section 
Route::get('/solutions/app-development/web-app-development', [HomepageController::class, 'webAppDevelopment'])->name('webAppDevelopment');
Route::get('/solutions/app-development/mobile-app-development', [HomepageController::class, 'mobileAppDevelopment'])->name('mobileAppDevelopment');
Route::get('/solutions/app-development/eCommerce-development', [HomepageController::class, 'ecommerceDevelopment'])->name('ecommerceDevelopment');
Route::get('/solutions/app-development/integrated-command-center ', [HomepageController::class, 'integratedCommandCenter'])->name('integratedCommandCenter');
Route::get('/solutions/app-development/erp-development', [HomepageController::class, 'erpDevelopment'])->name('erpDevelopment');
Route::get('/solutions/app-development/full-stack-development', [HomepageController::class, 'fullstackDevelopment'])->name('fullstackDevelopment');
Route::get('/solutions/ui-ux/html-website', [HomepageController::class, 'htmlWebsite'])->name('htmlWebsite');
Route::get('/solutions/ui-ux/wordpress-website', [HomepageController::class, 'wordpressWebsite'])->name('wordpressWebsite');
Route::get('/solutions/ui-ux/psd-to-html-conversion', [HomepageController::class, 'psdToHtmlWebsite'])->name('psdToHtmlWebsite');
Route::get('/solutions/ui-ux/user-interface', [HomepageController::class, 'userInterface'])->name('userInterface');
Route::get('/solutions/ui-ux/cik-and-business-assets', [HomepageController::class, 'businessAssets'])->name('businessAssets');
Route::get('/solutions/ui-ux/newsletter-and-template ', [HomepageController::class, 'newsletterAndTemplate'])->name('newsletterAndTemplate');
Route::get('/solutions/resource-augmentation/staff-augmentation ', [HomepageController::class, 'staffAugmentation'])->name('staffAugmentation');
Route::get('/solutions/resource-augmentation/resource', [HomepageController::class, 'resourceAugmentation'])->name('resourceAugmentation');
Route::get('/solutions/resource-augmentation/hire-train-deploy', [HomepageController::class, 'hireTrainDeploy'])->name('hireTrainDeploy');
Route::get('/solutions/digital-marketing/social-media-management', [HomepageController::class, 'socialMediaManagement'])->name('socialMediaManagement');
Route::get('/solutions/digital-marketing/search-engine-optimization', [HomepageController::class, 'searchEngineOptimization'])->name('searchEngineOptimization');
Route::get('/solutions/digital-marketing/social-media-marketing  ', [HomepageController::class, 'socialMediaMarketing'])->name('socialMediaMarketing');
Route::get('/solutions/digital-marketing/web-analytics', [HomepageController::class, 'webAnalytics'])->name('webAnalytics');
Route::get('/solutions/digital-marketing/content-writing', [HomepageController::class, 'contentWriting'])->name('contentWriting');
Route::get('/solutions/digital-marketing/pcc-display-and-mobile-apps', [HomepageController::class, 'payPerClick'])->name('payPerClick');
Route::get('/solutions/digital-marketing/viral-marketing', [HomepageController::class, 'viralMarketing'])->name('viralMarketing');
Route::get('/solutions/digital-marketing/online-reputation-management', [HomepageController::class, 'onlineReputationManagement'])->name('onlineReputationManagement');
Route::get('/solutions/digital-marketing/influencer-marketing', [HomepageController::class, 'influencerMarketing'])->name('influencerMarketing');
Route::get('/solutions/digital-marketing/email-marketing', [HomepageController::class, 'emailMarketing'])->name('emailMarketing');
Route::get('/solutions/digital-marketing/sms-whatsApp-campaigns', [HomepageController::class, 'smsWhatsappCampaigns'])->name('smsWhatsappCampaigns');
Route::get('/solutions/digital-marketing/affiliate-marketing', [HomepageController::class, 'affiliateMarketing'])->name('affiliateMarketing');
Route::get('/solutions/cloud-saas/applicant-tracking', [HomepageController::class, 'applicantTracking'])->name('applicantTracking');
Route::get('/solutions/cloud-saas/hr-management', [HomepageController::class, 'hrManagement'])->name('hrManagement');
Route::get('/solutions/cloud-saas/hospital-management', [HomepageController::class, 'hospitalManagement'])->name('hospitalManagement');
Route::get('/solutions/it-consulting/offshore-it-consulting', [HomepageController::class, 'offshoreItConsulting'])->name('offshoreItConsulting');
Route::get('/solutions/it-consulting/enterprise-it-consulting', [HomepageController::class, 'enterpriseItConsulting'])->name('enterpriseItConsulting');
Route::get('/solutions/it-consulting/it-assessments', [HomepageController::class, 'itAssessments'])->name('itAssessments');
Route::get('/solutions/it-consulting/it-strategy-and-planning', [HomepageController::class, 'itStrategyAndPlanning'])->name('itStrategyAndPlanning');
Route::get('/solutions/it-consulting/business-continuity-and-disaster-recovery', [HomepageController::class, 'businessContinuity'])->name('businessContinuity');
Route::get('/solutions/it-consulting/governance-risk-compliances', [HomepageController::class, 'governanceRisk'])->name('governanceRisk');
Route::get('/solutions/product/stock-and-pos', [HomepageController::class, 'stockPos'])->name('stockPos');
Route::get('/solutions/product/resource-monitoring', [HomepageController::class, 'resourceMonitoring'])->name('resourceMonitoring');
Route::get('/solutions/product/restaurant-management', [HomepageController::class, 'restaurantManagement'])->name('restaurantManagement');
Route::get('/company/about/introduction', [HomepageController::class, 'introduction'])->name('introduction');
Route::get('/company/about/why-quack', [HomepageController::class, 'whyUs'])->name('whyUs');
Route::get('/company/about/milestones', [HomepageController::class, 'milestones'])->name('milestones');
Route::get('/company/about/mission-vision-values', [HomepageController::class, 'missionVision'])->name('missionVision');
Route::get('/company/about/unique-approach', [HomepageController::class, 'uniqueApproach'])->name('uniqueApproach');
Route::get('/company/about/future-outlook', [HomepageController::class, 'futureOutlook'])->name('futureOutlook');
Route::get('/company/about/awards-and-accreditations', [HomepageController::class, 'awardsAndAccreditations'])->name('awardsAndAccreditations');
Route::get('/company/about/our-strength', [HomepageController::class, 'ourStrength'])->name('ourStrength');
Route::get('/company/about/our-team', [HomepageController::class, 'ourTeam'])->name('ourTeam');
Route::get('/career/overview', [HomepageController::class, 'overview'])->name('overview');
Route::get('/career/Life-at-quack', [HomepageController::class, 'lifeQuack'])->name('lifeQuack');
Route::get('/career/industry-consultant', [HomepageController::class, 'industryConsultant'])->name('industryConsultant');
Route::get('/career/jobs', [HomepageController::class, 'jobs'])->name('jobs');
Route::get('/career/employee-speaks', [HomepageController::class, 'employeeSpeak'])->name('employeeSpeak');
Route::get('/career/internship', [HomepageController::class, 'internship'])->name('internship');
Route::get('/company/portfolio/ui-and-ux-designs', [HomepageController::class, 'uiUxDesign'])->name('uiUxDesign');
Route::get('/company/portfolio/application-development', [HomepageController::class, 'appDevelopment'])->name('appDevelopment');
Route::get('/company/portfolio/ecommerce-development', [HomepageController::class, 'ecommerceAppDevelopment'])->name('ecommerceAppDevelopment');
Route::get('/company/portfolio/digital-marketing', [HomepageController::class, 'digitalMarket'])->name('digitalMarket');
Route::get('/company/portfolio/testimonials', [HomepageController::class, 'testimonial'])->name('testimonial');
Route::get('/career', [HomepageController::class, 'career'])->name('career');
Route::get('techstack/html', [HomepageController::class, 'html'])->name('html');
Route::get('techstack/css3', [HomepageController::class, 'techCss'])->name('techCss');
Route::get('techstack/javascript', [HomepageController::class, 'techJavascript'])->name('techJavascript');
Route::get('techstack/bootstrap', [HomepageController::class, 'techBootstrap'])->name('techBootstrap');
Route::get('techstack/wordpress', [HomepageController::class, 'techWordpress'])->name('techWordpress');
Route::get('techstack/photoshop', [HomepageController::class, 'techPhotoshop'])->name('techPhotoshop');
Route::get('techstack/php', [HomepageController::class, 'techPhp'])->name('techPhp');
Route::get('techstack/mysql', [HomepageController::class, 'techMysql'])->name('techMysql');
Route::get('techstack/laravel', [HomepageController::class, 'techLaravel'])->name('techLaravel');
Route::get('techstack/codeigniter', [HomepageController::class, 'techCodeigniter'])->name('techCodeigniter');
Route::get('techstack/mongo-db', [HomepageController::class, 'techMongoDb'])->name('techMongoDb');
Route::get('techstack/python', [HomepageController::class, 'techPython'])->name('techPython');
Route::get('techstack/android', [HomepageController::class, 'techAndroid'])->name('techAndroid');
Route::get('techstack/firebase', [HomepageController::class, 'techFirebase'])->name('techFirebase');
Route::get('techstack/flutter', [HomepageController::class, 'techFlutter'])->name('techFlutter');
Route::get('techstack/angular', [HomepageController::class, 'techAngular'])->name('techAngular');
Route::get('techstack/node', [HomepageController::class, 'techNode'])->name('techNode');
Route::get('techstack/react', [HomepageController::class, 'techReact'])->name('techReact');
Route::get('contact-us', [HomepageController::class, 'contactUs'])->name('contactUs');
Route::get('/app-development-all', [HomepageController::class, 'appDevelopmentAll'])->name('appDevelopmentAll');
Route::get('/web-services', [HomepageController::class, 'webServices'])->name('webServices');
Route::get('/get-quote', [HomepageController::class, 'getQuote'])->name('getQuote');
Route::get('/it-consulting-all', [HomepageController::class, 'itConsultingAll'])->name('itConsultingAll');
Route::get('/cloud-saas', [HomepageController::class, 'cloudSaas'])->name('cloudSaas');
Route::get('/our-product', [HomepageController::class, 'ourProduct'])->name('ourProduct');
Route::get('/blog-details', [HomepageController::class, 'blogDetails'])->name('blogDetails');
// new route added
Route::get('/blog-details2', [HomepageController::class, 'blogDetails2'])->name('blogDetails2');
Route::get('/blog-details3', [HomepageController::class, 'blogDetails3'])->name('blogDetails3');
//  end
Route::get('/quacklabs/join-team', [HomepageController::class, 'joinTeam'])->name('joinTeam');
// update 29/06/23
Route::get('/products', [HomepageController::class, 'products'])->name('products');
Route::get('/solutions', [HomepageController::class, 'solutions'])->name('solutions');
Route::get('/solutions/app-development/', [HomepageController::class, 'solutionsAppDevelopment'])->name('solutionsAppDevelopment');
Route::get('/solutions/ui-ux/', [HomepageController::class, 'solutionsUiUx'])->name('solutionsUiUx');
Route::get('/solutions/resource-augmentation/', [HomepageController::class, 'solutionsResourceAugmentation'])->name('solutionsResourceAugmentation');
Route::get('/solutions/cloud-saas/', [HomepageController::class, 'cloudSassAll'])->name('cloudSassAll');
Route::get('/solutions/it-consulting/', [HomepageController::class, 'itConsulting'])->name('itConsulting');
Route::get('/solutions/product/', [HomepageController::class, 'solutionProduct'])->name('solutionProduct');
Route::get('/solutions/digital-marketing/', [HomepageController::class, 'digitalMarketing'])->name('digitalMarketing');
Route::get('/company/about/', [HomepageController::class, 'companyAboutAll'])->name('companyAboutAll');
Route::get('/company/portfolio/', [HomepageController::class, 'companyPortfolioAll'])->name('companyPortfolioAll');
