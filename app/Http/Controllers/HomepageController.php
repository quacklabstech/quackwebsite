<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('pages.homepage');
    }
    // product
    public function ats(){
        return view('pages.product-applicant-tracking-system');
    } 
    public function jobPortal(){
        return view('pages.product-job-portal');
    }
    // soulution section
    public function webAppDevelopment(){
        return view('pages.solution-web-app-development');
    } 
    public function mobileAppDevelopment(){
        return view('pages.solution-mobile-app-development');
    }
    public function ecommerceDevelopment(){
        return view('pages.solution-ecom-app-development');
    }
    public function integratedCommandCenter(){
        return view('pages.solution-integrated-command-center');
    }
    public function erpDevelopment(){
        return view('pages.solution-erp-development');
    }
    public function fullstackDevelopment(){
        return view('pages.solution-fullstack-development');
    }
    public function htmlWebsite(){
        return view('pages.solution-html-website');
    }
    public function wordpressWebsite(){
        return view('pages.solution-wordpress-website');
    }
    public function psdToHtmlWebsite(){
        return view('pages.solution-psd-to-html-website');
    }
    public function userInterface(){
        return view('pages.solution-user-interface');
    }
    public function businessAssets(){
        return view('pages.solution-business-assets');
    }
    public function newsletterAndTemplate(){
        return view('pages.solution-news-letter');
    }
    public function staffAugmentation(){
        return view('pages.solution-staff-augmentation');
    }
    public function resourceAugmentation(){
        return view('pages.solution-resource-augmentation');
    }
    public function hireTrainDeploy(){
        return view(('pages.solution-hire-train-deploy'));
    }
    public function socialMediaManagement(){
        return view('pages.solution-social-media-management');
    }
    public function searchEngineOptimization(){
        return view('pages.solution-search-engine-optimization');
    }
    public function socialMediaMarketing(){
        return view('pages.solution-social-media-marketing');
    }
    public function webAnalytics(){
        return view('pages.solution-web-analytics');
    }
    public function contentWriting(){
        return view('pages.solution-contentWriting');
    }
    public function payPerClick(){
        return view('pages.solution-pay-per-click');
    }
   public function viralMarketing(){
      return view('pages.solution-viral-marketing');
   }
   public function onlineReputationManagement(){
    return view('pages.solution-online-reputation-management');
   }
   public function influencerMarketing(){
    return view('pages.solution-influencer-marketing');
   }
   public function emailMarketing(){
    return view('pages.solution-email-marketing');
   }
   public function smsWhatsappCampaigns(){
    return view('pages.solution-sms-whatsapp-campaigns');
   }
   public function affiliateMarketing(){
    return view('pages.solution-affiliate-marketing');
  }
  public function applicantTracking(){
    return view('pages.solution-applicant-tracking');
  }
  public function hrManagement(){
    return view('pages.solution-hr-management');
  }
  public function hospitalManagement(){
    return view('pages.solution-hospital-management');
  }
  public function offshoreItConsulting(){
    return view('pages.solution-offshore-it-consulting');
  }
  public function enterpriseItConsulting(){
    return view('pages.solution-enterprise-it-consulting');
  }
  public function itAssessments(){
    return view('pages.solution-it-assessments');
  }
  public function itStrategyAndPlanning(){
    return view('pages.solution-it-strategy-and-planning');
  }
  public function businessContinuity(){
    return view('pages.solution-business-continuity');
  }
  public function governanceRisk(){
    return view('pages.solution-governance-risk');
  }
  public function stockPos(){
    return view('pages.solution-stock-pos');
  }
  public function resourceMonitoring(){
    return view('pages.solution-resource-monitoring');
  }
  public function restaurantManagement(){
    return view('pages.solution-restaurant-management');
  }
  public function introduction(){
    return view('pages.company-introduction');
  }
  public function whyUs(){
    return view('pages.company-why-us');
  }
  public function milestones(){
    return view('pages.company-milestones');
  }
  public function missionVision(){
    return view('pages.company-mission-vision');
  }
  public function uniqueApproach(){
    return view('pages.company-unique-approach');
  }
  public function futureOutlook(){
    return view('pages.company-future-outlook');
  }
  public function awardsAndAccreditations(){
    return view('pages.companyawards-and-accreditations');
  }
  public function ourStrength(){
    return view('pages.company-our-strength');
  }
  public function ourTeam(){
    return view('pages.company-our-team');
  }
  public function overview(){
    return view('pages.company-overview');
  }
  public function lifeQuack(){
    return view('pages.company-life-quack');
  }
  public function industryConsultant(){
    return view('pages.company-industry-consultant');
  }
  public function jobs(){
    return view('pages.company-jobs');
  }
  public function employeeSpeak(){
    return view('pages.company-employee-speak');
  }
  public function internship(){
    return view('pages.company-internship');
  }
  public function uiUxDesign(){
    return view('pages.company-ui-ux-design');
  }
  public function appDevelopment(){
    return view('pages.company-app-development');
  }
  public function ecommerceAppDevelopment(){
    return view('pages.company-ecommerce-app-development');
  }
  public function digitalMarket(){
    return view('pages.company-digital-market');
  }
  public function testimonial(){
    return view('pages.company-testimonial');
  }
  public function career(){
    return view('pages.career');
  }
  public function html(){
    return view('pages.html');
  }
  public function techJavascript(){
    return view('pages.tech-javascript');
  }
  public function techBootstrap(){
    return view('pages.tech-bootstrap');
  }
  public function techWordpress(){
    return view('pages.tech-wordpress');
  }
  public function techCss(){
    return view('pages.techCss');
  }
  public function techPhotoshop(){
    return view('pages.tech-photoshop');
  }
  public function techPhp(){
    return view('pages.tech-php');
  }
  public function techMysql(){
    return view('pages.tech-mysql');
  }
  public function techLaravel(){
    return view('pages.tech-laravel');
  }
  public function techCodeigniter(){
    return view('pages.tech-codeigniter');
  }
  public function techMongoDb(){
    return view('pages.tech-Mongo-db');
  }
  public function techAndroid(){
    return view('pages.tech-android');
  }
  public function techPython(){
    return view('pages.tech-python');
  }
  public function techFirebase(){
    return view('pages.tech-firebase');
  }
  public function techFlutter(){
    return view('pages.tech-flutter');
  }
  public function techAngular(){
    return view('pages.tech-angular');
  }
  public function techNode(){
    return view('pages.tech-node');
  }
  public function techReact(){
    return view('pages.tech-react');
  } 
  public function contactUs(){
    return view('pages.contact-us');
  }
  public function appDevelopmentAll(){
    return view('pages.app-development-all');
  }
  public function webServices(){
    return view('pages.web-services');
  }
  public function getQuote(){
    return view('pages.get-quote');
  }
  public function itConsultingAll(){
    return view('pages.it-consulting-all');
  }
  public function cloudSaas(){
    return view('pages.cloud-saas');
  }
  public function ourProduct(){
    return view('pages.our-product');
  }
  public function blogDetails(){
    return view('pages.blog-details');
  }
  public function joinTeam(){
    return view('join_team_layout');
  }
  // upadate 29/06/23
  public function products(){
    return view('pages.products');
  }
  public function solutions(){
    return view('pages.soutions');
  }
  public function solutionsAppDevelopment(){
    return view('pages.app-development-all');
  }
  public function solutionsUiUx(){
    return view('pages.company-ui-ux-design');
  }
  public function solutionsResourceAugmentation(){
    return view('pages.solution-resource-augmentation');
  }
  public function cloudSassAll(){
    return view('pages.cloud-sass-all');
  }
  public function itConsulting(){
    return view('pages.it-consulting-all');
  }
  public function solutionProduct(){
    return view('pages.products');
  }
  public function digitalMarketing(){
    return view('pages.digital-marketing-all');
  }
  public function companyAboutAll(){
    return view('pages.company-about-all');
  }
  public function companyPortfolioAll(){
    return view('pages.company-portfolio-all');
  }
  // cloudSassAll
  public function blogDetails2(){
    return view('pages.blog-details2');
  }
  public function blogDetails3(){
    return view('pages.blog-details3');
  }
}
