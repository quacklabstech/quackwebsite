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
                $metaCannonical = 'https://www.quacklabs.in/solutions/app-development/web-app-development';
                break;
            case 'ats':
                $metaTitle = 'Best Application Tracking System Service In India - Quacklabs';
                $metaDescription = 'ATS software is designed to streamline the recruitment process and make it easier for HR professionals to manage the large volume of resumes and job applications they receive.';
                $metaKeyword = 'recruiting software, ats recruitment, open source project management software, free app development software, performance management software, app design software, recruitment management software, ats recruitment software, hr application software, best mobile app development software';
                $metaCannonical = 'https://www.quacklabs.in/products/applicant-tracking-system';
                break;
            case 'ecommerceDevelopment':
                $metaTitle = 'E-commerce Development Company in India- Quacklabs';
                $metaDescription = 'Quacklabs Technologies is among the top leading E-commerce development company, we offer the best E-commerce development service with the required technical consultations and development plans for exceptional needs.';
                $metaKeyword = 'eCommerce development service, eCommerce development company, eCommerce development company in India';
                $metaCannonical = 'https://www.quacklabs.in/solutions/app-development/eCommerce-development';
                break;
            case 'integratedCommandCenter':
                $metaTitle ='Quacklabs - Your Reliable Internet Marketing Agency';
                $metaDescription = 'Trust Quacklabs to deliver efficient online marketing solutions. As a leading internet marketing agency, we offer software and applications for your success.';
                $metaKeyword = 'internet marketing agency in India, best product development in India, best application development company, software development service.';
                $metaCannonical='https://www.quacklabs.in/solutions/app-development/integrated-command-center';
                break;
            case 'erpDevelopment':
                $metaTitle = 'Top ERP Development Company in India - Customized Solutions | Quacklabs Technologies';
                $metaDescription = 'Transform your business with our trusted ERP software systems. Our expert team delivers custom ERP solutions for all industries. Contact us today!';
                $metaKeyword = 'ERP development company in India, erp development, erp software development services, erp development company, erp development service';
                $metaCannonical = 'https://www.quacklabs.in/solutions/app-development/erp-development';
                break;
            case 'fullstackDevelopment':
                $metaTitle = 'Quacklabs - Top Full Stack Development Company in India';
                $metaDescription = 'Build scalable solutions with front-end and back-end frameworks and database management. Hire our experienced full-stack developers today!';
                $metaKeyword = 'web development company, mobile development service, full stack development company';
                $metaCannonical = 'https://www.quacklabs.in/solutions/app-development/full-stack-development';
                break;
            case 'htmlWebsite':
                $metaTitle = 'Website and UI Designing Company - Quacklabs Technologies';
                $metaDescription = 'Let Quacklabs turn your website vision into reality. We offer professional website and UI designing services, powered by modern HTML and CSS technologies.';
                $metaKeyword = 'best ui designing company in Bhubaneswar, ux designing service, best HTML responsive design service';
                $metaCannonical = 'https://www.quacklabs.in/solutions/ui-ux/html-website';
                break;
            case 'wordpressWebsite':
                $metaTitle = 'Quacklab - Best WordPress Development Service for High-Converting Sites';
                $metaDescription = 'Get a user-friendly and search-optimized website with Quacklabs professional WordPress design and development services. Trust the experts for the best results.';
                $metaKeyword = 'best WordPress development service, WordPress development service, WordPress development company';
                $metaCannonical = 'https://www.quacklabs.in/solutions/ui-ux/wordpress-website';
                break;
            case 'psdToHtmlWebsite':
                $metaTitle = 'Get Outsourcing HTML Conversion Service in India- Quacklabs';
                $metaDescription = 'We are a highly experienced team to design 100% hand-coded, responsive, and Google-friendly HTML templates and themes for premium off-source development.';
                $metaKeyword = 'top web design company in India, wordpress development service, software development company in india, best wordpress development service, wordpress web development agency';
                $metaCannonical= 'https://www.quacklabs.in/solutions/ui-ux/psd-to-html-conversion';
                break;
            case 'userInterface':
                $metaTitle = 'Quacklabs - Professional UI Design Services for Your Website or App';
                $metaDescription = 'Enhance user experience and boost conversions with our expert UI design services. Contact Quacklabs today for intuitive and visually appealing interfaces.';
                $metaKeyword = 'best UI designing company in India, best UI designing services, web app development company, website development company';
                $metaCannonical = 'https://www.quacklabs.in/solutions/ui-ux/user-interface';
                break;
            case 'businessAssets':
                $metaTitle = 'Get in Touch with an Internet Marketing Company for Your Business Needs';
                $metaDescription = 'Improve your revenue, reduce costs, and improve your business operations with the help of an experienced internet marketing company. Contact us today.';
                $metaKeyword = 'best internet marketing company, best software development service';
                $metaCannonical = 'https://www.quacklabs.in/solutions/ui-ux/cik-and-business-assets';
                break;
            case 'newsletterAndTemplate':
                $metaTitle = 'Quacklabs - Boost Your Marketing ROI with the Best Free Newsletter Templates';
                $metaDescription = 'Create high-converting email templates with Quacklabs. All plans include unlimited contacts, so start boosting your marketing ROI today.';
                $metaKeyword = 'best newsletter designing company, best software company in Bhubaneswar, website development company';
                $metaCannonical = 'https://www.quacklabs.in/solutions/ui-ux/newsletter-and-template';
                break;
            case 'staffAugmentation':
                $metaTitle ='India Best Staff Augmentation Services Firm | Quacklabs';
                $metaDescription = 'Get flexible staffing solutions with India best staff augmentation services firm. We tailor our services to meet your specific business needs. Contact us today!';
                $metaKeyword = 'IT staff augmentation company, IT staff augmentation services, IT recruitment staff augmentation service';
                $metaCannonical = 'https://www.quacklabs.in/solutions/resource-augmentation/staff-augmentation';
                break;
            case 'resourceAugmentation':
                $metaTitle = 'Quacklabs Resource Augmentation Service - Get Expert Assistance Now!';
                $metaDescription = 'Enhance your team skills & productivity with Quacklabs resource augmentation service. Get access to experienced professionals & complete projects faster!';
                $metaKeyword = 'resource augmentation service, IT staff augmentation company, resource augmentation service providers';
                $metaCannonical = 'https://www.quacklabs.in/solutions/resource-augmentation/resource';
                break;
            case 'hireTrainDeploy':
                $metaTitle = 'Hire, Train and Deploy Training by Quacklabs - Industry-Specific Skill Set';
                $metaDescription = 'Quacklabs Hire, Train and Deploy program equips you with industry-specific skills for the job. Get trained and deployed to your dream job today.!';
                $metaKeyword = 'top resource augmentation company, Hire, Train and Deploy program';
                $metaCannonical = 'https://www.quacklabs.in/solutions/resource-augmentation/hire-train-deploy';
                break;
            case 'socialMediaManagement':
                $metaTitle = 'Social Media Management in Bhubaneswar | Quacklabs Technologies';
                $metaDescription = 'Quacklabs Technologies is a social media management company in Bhubaneswar that offers organic and paid solutions to deliver efficient and profitable results for your business.';
                $metaKeyword = 'SMO service providers, smm company in Bhubaneswar, best smo services company';
                $metaCannonical = 'https://www.quacklabs.in/solutions/digital-marketing/social-media-management';
                break;
            case 'searchEngineOptimization':
                $metaTitle = 'Best SEO Company in Bhubaneswar | Quacklabs';
                $metaDescription = 'Quacklabs is a leading SEO company in Bhubaneswar, committed to driving more leads and increasing your bottom line with our results-driven SEO solutions. Contact us today!';
                $metaKeyword = 'best seo services company, best seo company, best digital marketing company in Bhubaneswar, digital marketing company';
                $metaCannonical = 'https://www.quacklabs.in/solutions/digital-marketing/search-engine-optimization';
                break;
            case 'socialMediaMarketing':
                $metaTitle = 'Social Media Marketing Agency in Bhubaneswar | Quacklabs';
                $metaDescription = 'Quacklabs is a top social media marketing agency in Bhubaneswar that delivers results-driven social media marketing services to fuel your business growth. Contact us today!';
                $metaKeyword = 'social media marketing agency in Bhubaneswar, top digital marketing company in Bhubaneswar';
                $metaCannonical = 'https://www.quacklabs.in/solutions/digital-marketing/social-media-marketing';
                break;
            case 'webAnalytics':
                $metaTitle = 'Web Analytics Service | Top Digital Marketing Company by Quacklabs';
                $metaDescription = 'Quacklabs offers Web Analytics Service to help you track your online performance accurately and uncover valuable business insights. Create intelligent workflows with us.';
                $metaKeyword = 'digital marketing company, SEO company Bhubaneswar, SEO company near me, best seo services in Bhubaneswar';
                $metaCannonical = 'https://www.quacklabs.in/solutions/digital-marketing/web-analytics';
                break;
            case 'contentWriting':
                $metaTitle = 'Premium Content Writing Service Provider | Quacklabs';
                $metaDescription = 'Quacklabs offers a premium content writing service that creates engaging content to enhance your brand. Trust us as your content writing service provider.';
                $metaKeyword = 'digital marketing company, SEO company Bhubaneswar, content writing service in Bhubaneswar';
                $metaCannonical = 'https://www.quacklabs.in/solutions/digital-marketing/content-writing';
                break;
            case 'payPerClick':
                $metaTitle = 'PPC Advertising Company | Quacklabs Internet Marketing Agency';
                $metaDescription = 'Quacklabs is a top pay per click advertising company that partners with industry players and marketing professionals to increase leads and grow brand awareness. Contact us today.';
                $metaKeyword = 'pay per click advertising service, best PPC advertise partner company';
                $metaCannonical = 'https://www.quacklabs.in/solutions/digital-marketing/pcc-display-and-mobile-apps';
                break;
            case 'viralMarketing':
                $metaTitle = 'Viral Marketing | India Emerging Influencer Marketing Company | Quacklabs';
                $metaDescription = 'Quacklabs is India emerging influencer marketing company. We provide unique and effective solutions for your business to go viral. Contact us now!';
                $metaKeyword = 'influencer marketing company, digital marketing service, viral marketing service';
                $metaCannonical = 'https://www.quacklabs.in/solutions/digital-marketing/viral-marketing';
                break;
            case 'onlineReputationManagement':
                $metaTitle = 'ORM Service in Bhubaneswar | Online Reputation Management - Quacklabs';
                $metaDescription = 'Quacklabs provides professional ORM services in Bhubaneswar. Our online reputation management services can help you build trust with customers and propel your brand success. Contact us now!';
                $metaKeyword = 'ORM service in Bhubaneswar, best affiliate program in India, affiliate marketing services in Bhubaneswar';
                $metaCannonical = 'https://www.quacklabs.in/solutions/digital-marketing/online-reputation-management';
                break;
            case 'influencerMarketing':
                $metaTitle = 'Quacklabs- India Largest Influencer Marketing Company';
                $metaDescription = 'Quacklabs is the largest Influencer Marketing Company to help you gain customer trust and enhance your brand success. Contact us today!';
                $metaKeyword = 'influencer marketing company in India, orm in Bhubaneswar';
                $metaCannonical = 'https://www.quacklabs.in/solutions/digital-marketing/influencer-marketing';
                break;
            case 'emailMarketing':
                $metaTitle = 'Best Email Marketing Company in Bhubaneswar (2023)- Quacklabs';
                $metaDescription = 'Email Marketing Company in Bhubaneswar, Quacklabs Provides email marketing software for small businesses to freelancing who want affordable prices. Contact Us Today!';
                $metaKeyword = 'email marketing service, email marketing company in India, free email software in India';
                $metaCannonical = 'https://www.quacklabs.in/solutions/digital-marketing/email-marketing';
                break;
            case 'smsWhatsappCampaigns':
                $metaTitle = 'Free SMS Marketing Campaigns, Whatsapp and Mail SMS- Quacklabs';
                $metaDescription = 'Quacklabs Provides Free Text message marketing is the ongoing process of communicating business news, sales, promotions, or other relevant information to your customers. Contact us today!';
                $metaKeyword = 'SMS marketing, Whatsapp marketing, free email marketing software';
                $metaCannonical = 'https://www.quacklabs.in/solutions/digital-marketing/sms-whatsApp-campaigns';
                break;
            case 'affiliateMarketing':
                $metaTitle ='Affiliate Marketing Services in Bhubaneswar | Quacklabs';
                $metaDescription = 'Looking for the best affiliate marketing services in Bhubaneswar? Quacklabs offers the easiest system to make money online with our trusted affiliate marketing services. Contact us today!';
                $metaKeyword = 'best affiliate marketing services in Bhubaneswar, best affiliate program in India';
                $metaCannonical = 'https://www.quacklabs.in/solutions/digital-marketing/affiliate-marketing';
                break;
            case 'applicantTracking':
                $metaTitle = 'ATS Development Company in India | Quacklabs';
                $metaDescription = 'Quacklabs is a leading ATS development company in India offering advanced applicant tracking system software for streamlining the hiring and recruiting process.';
                $metaKeyword = 'application development company, ats recruitment software, ats development company in india';
                $metaCannonical = 'https://www.quacklabs.in/solutions/cloud-saas/applicant-tracking';
                break;
            case 'hrManagement':
                $metaTitle = 'HR Management Software | Human Resources Management System - Quacklabs';
                $metaDescription = 'Quacklabs provides advanced HR management software to streamline the hiring and recruiting process, enhancing employee efficiency and productivity. Try it now!';
                $metaKeyword = 'hr management software, HR management software, hr software, top hrm software';
                $metaCannonical = 'https://www.quacklabs.in/solutions/cloud-saas/hr-management';
                break;
            case 'hospitalManagement':
                $metaTitle = 'Hospital Management Software | Quacklabs - A Leading Company';
                $metaDescription = 'Quacklabs offers the best hospital management software solutions to streamline your hospital operations. Trusted by top hospitals, clinics and medical centres.';
                $metaKeyword = 'hospital management software, healthcare asset management software, hospital management software services';
                $metaCannonical = 'https://www.quacklabs.in/solutions/cloud-saas/hospital-management';
                break;
            case 'offshoreItConsulting':
                $metaTitle = 'Offshore IT Consulting Service in Bhubaneswar | Quacklabs';
                $metaDescription = 'Quacklabs provides top-notch offshore IT consulting services in Bhubaneswar. Our team of experts offers customized solutions to help your business thrive in a global market.';
                $metaKeyword = 'IT consulting service in Bhubaneswar, offshore IT consulting services';
                $metaCannonical = 'https://www.quacklabs.in/solutions/it-consulting/offshore-it-consulting';
                break;
            case 'enterpriseItConsulting':
                $metaTitle = 'Enterprise Consulting Service in Bhubaneswar | Quacklabs';
                $metaDescription = 'Quacklabs offers enterprise consulting services in Bhubaneswar, tailored to your business needs. Our expert consultants help optimize your business strategies and processes for growth. Contact us today!';
                $metaKeyword = 'top IT consulting company, software development company in Bhubaneswar, product development company, digital product development service';
                $metaCannonical = 'https://www.quacklabs.in/solutions/it-consulting/enterprise-it-consulting';
                break;
            case 'itAssessments':
                $metaTitle = 'IT Consulting Company in Bhubaneswar | Quacklabs';
                $metaDescription = 'Quacklabs is a leading IT consulting company in Bhubaneswar, providing comprehensive IT assessment services to help organizations improve their technology infrastructure and processes.';
                $metaKeyword = 'IT consulting company in Bhubaneswar, software development service, software company in Odisha';
                $metaCannonical = 'https://www.quacklabs.in/solutions/it-consulting/it-assessments';
                break;
            case 'itStrategyAndPlanning':
                $metaTitle = 'Quacklabs - Top IT Planning Consulting Company in Bhubaneswar';
                $metaDescription = 'Quacklabs is a top IT planning consulting company in Bhubaneswar that helps businesses plan for the future by providing strategic IT planning services that support their operations.';
                $metaKeyword = 'IT consultancy service in Bhubaneswar, IT service, IT Consulting';
                $metaCannonical = 'https://www.quacklabs.in/solutions/it-consulting/it-strategy-and-planning';
                break;
            case 'businessContinuity':
                $metaTitle = 'Business Continuity and Disaster Recovery Services | Quacklabs';
                $metaDescription = 'Quacklabs offers Disaster Recovery as a Service (DRaaS) that ensures your data is protected and accessible during disasters. Contact us to learn more about our business continuity solutions.';
                $metaKeyword = 'IT consulting service, information technologies company';
                $metaCannonical = 'https://www.quacklabs.in/solutions/it-consulting/business-continuity-and-disaster-recovery';
                break;
            case 'governanceRisk':
                $metaTitle = 'Governance, Risk and Compliance Services | Quacklabs';
                $metaDescription = 'Quacklabs offers Governance, Risk and Compliance Services, including Disaster Recovery as a Service (DRaaS) to protect and recover your data in case of a disaster.';
                $metaKeyword = 'cloud based disaster recovery service, IT disaster recovery service';
                $metaCannonical = 'https://www.quacklabs.in/solutions/it-consulting/governance-risk-compliances';
                break;
            case 'stockPos':
                $metaTitle = 'IT Inventory Management Software in Bhubneswar | Quacklabs';
                $metaDescription = 'Quacklabs offers IT inventory management software in Bhubneswar that helps you inventory all your IT and non-IT assets, including software licenses. Try it now!';
                $metaKeyword = 'inventory management software in Bhubaneswar, inventory software solution, inventory management software,';
                $metaCannonical = 'https://www.quacklabs.in/solutions/product/stock-and-pos';
                break;
            case 'resourceMonitoring':
                $metaTitle = 'Best Employee Monitoring Software in India | Quacklabs';
                $metaDescription = 'Quacklabs provides the best employee monitoring software in India for tracking attendance, active and break time, and website and file usage for remote teams.';
                $metaKeyword = 'employee monitoring software, employee attendance software, time tracking software';
                $metaCannonical = 'https://www.quacklabs.in/solutions/product/resource-monitoring';
                break;
            case 'restaurantManagement':
                $metaTitle = 'Best Restaurant Management System in Bhubaneswar | Quacklabs';
                $metaDescription = 'Quacklabs offers the best restaurant management system in Bhubaneswar that streamlines your restaurant operations, and manages orders, inventory, and staff. Try it now!';
                $metaKeyword = 'restaurant management software companies, inventory management software';
                $metaCannonical = 'https://www.quacklabs.in/solutions/product/restaurant-management';
                break;
            case 'introduction':
                $metaTitle = 'Quacklabs - A Creative Digital Product Management Company in Odisha';
                $metaDescription = 'Quacklabs is a digital product-based company in Odisha that specializes in creating innovative and impactful digital products. Contact us today to take your business to the next level!';
                $metaKeyword = 'product development company in Bhubaneswar, ats recruitment software, app development company';
                $metaCannonical = 'https://www.quacklabs.in/company/about/introduction';
                break;
            case 'whyUs':
                $metaTitle = 'Quacklabs - Top Product Based Software Development Company in India';
                $metaDescription = 'Quacklabs is a leading product-based software development company in India that believes in working in partnerships with its clients to understand their unique needs and working methods. Contact us today!';
                $metaKeyword = 'product development company in india, software development company, web development company';
                $metaCannonical = 'https://www.quacklabs.in/company/about/why-quack';
                break;
            case 'milestones':
                $metaTitle = 'Quacklabs - Full-Service Web App Development Service in India';
                $metaDescription = 'Quacklabs is a technology company dedicated to solving real-world problems with cutting-edge web app development services in India. Contact us today!';
                $metaKeyword = 'software development service';
                $metaCannonical = 'https://www.quacklabs.in/company/about/milestones';
                break;
            case 'missionVision':
                $metaTitle = 'Quacklabs - Empowering Businesses with Innovative Solutions';
                $metaDescription = 'Achieve your business goals with Quacklabs innovative solutions. Our products are designed to enhance productivity and streamline processes. Join us today!';
                $metaKeyword = 'innovative software solution';
                $metaCannonical = 'https://www.quacklabs.in/company/about/mission-vision-values';
                break;
            case 'uniqueApproach':
                $metaTitle = 'Full-Service Web, App, and Digital Marketing Company | Our Services';
                $metaDescription = 'Looking for a reliable digital partner to grow your business? Our full-service web, app, and digital marketing company offers expert solutions to help you succeed.';
                $metaKeyword = 'digital marketing company, application development company, web app development company';
                $metaCannonical = 'https://www.quacklabs.in/company/about/unique-approach';
                break;
            case 'futureOutlook':
                $metaTitle = 'Quacklabs - Outlook for Software Development in the Digital Age';
                $metaDescription = 'Stay ahead of the curve with Quacklabs innovative software solutions and products, designed to meet the demands of the modern digital landscape. Explore our outlook for software development today.';
                $metaKeyword = 'software development company';
                $metaCannonical = 'https://www.quacklabs.in/company/about/future-outlook';
                break;
            case 'awardsAndAccreditations':
                $metaTitle = 'Our Awards and Accreditations- Quacklabs Technologies';
                $metaDescription = 'Quacklabs is full- Accreditations and awards-winning software development company. Learn more about these and how they protect your app and software.';
                $metaKeyword = 'software development company';
                $metaCannonical = 'https://www.quacklabs.in/company/about/awards-and-accreditations';
                break;
            case 'ourStrength':
                $metaTitle = 'Quacklabs - Innovative and Creative Technology Solutions';
                $metaDescription = 'At Quacklabs, our key strengths are our commitment, passion, and respect for all. Discover innovative technology solutions that push the boundaries of what possible.';
                $metaKeyword = 'innovative software solution';
                $metaCannonical = 'https://www.quacklabs.in/company/about/our-strength';
                break;
            case 'ourTeam':
                $metaTitle = 'Meet Our Team - Quacklabs Technologies - Innovative and Passionate Individuals';
                $metaDescription = 'Get to know the talented and passionate team behind Quacklabs Technologies. Learn about our diverse talents and innovative ideas that make us an industry leader in company profile.';
                $metaKeyword = 'IT industry, software development, web design and development company';
                $metaCannonical = 'https://www.quacklabs.in/company/about/our-team';
                break;
            case 'overview':
                $metaTitle = 'QuackLabs - Providing the Best Career Opportunity for Multidimensional Service Providers';
                $metaDescription = 'Join the QuackLabs team and satisfy every client requirement with our multidimensional services. Explore the best career opportunity now.';
                $metaKeyword = 'IT software development service';
                $metaCannonical = 'https://www.quacklabs.in/career/overview';
                break;
            case 'lifeQuack':
                $metaTitle = 'Quacklabs Technologies - Life of Company Overview';
                $metaDescription = 'Discover the fun, innovative, and collaborative world of QuackLabs. Overcome obstacles and celebrate victories with our passionate team.';
                $metaKeyword = 'software development company';
                $metaCannonical = 'https://www.quacklabs.in/career/Life-at-quack';
                break;
            case 'industryConsultant':
                $metaTitle = 'Quacklabs - Industry Management Consulting Services for Business';
                $metaDescription = 'Get expert advice and guidance for your industry business with Quacklabs management consulting services. Improve your efficiency and drive growth today.';
                $metaKeyword = 'industry management consulting services';
                $metaCannonical = 'https://www.quacklabs.in/career/industry-consultant';
                break;
            case 'jobs':
                $metaTitle = 'Quacklabs - Your Ultimate Career Destination for Guidance and Jobs';
                $metaDescription = 'Looking for a career in Quacklabs? We offer excellent guidance and job-related services for leading brands. Send your resume to career@quacklabs.in now.';
                $metaKeyword = 'career in IT Jobs, IT fresher Jobs, fresher jobs in Odisha, internship in Bhubaneswar, It internship jobs in bbsr';
                $metaCannonical = 'https://www.quacklabs.in/career/jobs';
                break;
            case 'employeeSpeak':
                $metaTitle = 'Quacklabs: What Employees Say About Working Here';
                $metaDescription = 'Discover how Quacklabs employees have grown in their careers and personal lives. Read genuine reviews of our company culture, leadership, and opportunities.';
                $metaKeyword = 'career in Quacklabs';
                $metaCannonical = 'https://www.quacklabs.in/career/employee-speaks';
                break;
            case 'internship':
                $metaTitle = 'Welcome to Quacklabs - Providing Technical Internship and More';
                $metaDescription = 'Join Quacklabs and develop new skills with our technical internship program. Hear from our employees on how we foster growth and innovation.';
                $metaKeyword = 'technical internship program in Odisha, internships jobs in Odisha, internship jobs';
                $metaCannonical = 'https://www.quacklabs.in/career/internship';
                break;
            case 'uiUxDesign':
                $metaTitle = 'Why QuackLabs is the Best Choice for UI Design Services';
                $metaDescription = 'Get timely updates and cost-effective UI design services from QuackLabs the go-to option for all your design and development needs. Recommended by satisfied clients.';
                $metaKeyword = 'UI and UX designing company, UI and UX development service';
                $metaCannonical = 'https://www.quacklabs.in/company/portfolio/ui-and-ux-designs';
                break;
            case 'appDevelopment':
                $metaTitle = 'Why QuackLabs is the Best App Development Company in Bhubaneswar?';
                $metaDescription = 'Looking for the best app development company in Bhubaneswar? Choose Quacklabs for their commitment to delivering android and iOS apps on time and to your satisfaction.';
                $metaKeyword = 'best app development company in Bhubaneswar';
                $metaCannonical = 'https://www.quacklabs.in/company/portfolio/application-development';
                break;
            case 'ecommerceAppDevelopment':
                $metaTitle = 'Why Choosing the Right E-Commerce Development Services is Crucial';
                $metaDescription = 'Discover the right ingredients for selecting a vendor and building cutting-edge e-commerce apps. Get the best ecommerce development services for your business.';
                $metaKeyword = 'E-Commerce development services';
                $metaCannonical = 'https://www.quacklabs.in/company/portfolio/ecommerce-development';
                break;
            case 'digitalMarket':
                $metaTitle = 'QuackLabs - The Best Digital Marketing Service Provider';
                $metaDescription = 'Get amazed by the quality of work provided by QuackLabs, and achieve your SEO goals in just a few months. Professionalism, transparency, and excellence all in one digital marketing service.';
                $metaKeyword = 'digital marketing service, seo service';
                $metaCannonical = 'https://www.quacklabs.in/company/portfolio/digital-marketing';
                break;
            case 'testimonial':
                $metaTitle = 'Quacklabs Employee Testimonials - Hear from Our Team';
                $metaDescription = 'Discover how Quacklabs has helped our employees grow and excel in their careers. Read honest testimonials from our team members.';
                $metaKeyword = 'employee testimonials, career at quacklabs';
                $metaCannonical = 'https://www.quacklabs.in/company/portfolio/testimonials';
                break;
            case 'career':
                $metaTitle = 'Quacklabs Career Opportunities: Apply Now for Your Industry Needs';
                $metaDescription = 'Join our diverse and innovative team at Quacklabs and take the next step in your career. We offer opportunities for professionals at all levels and industries. Apply now.';
                $metaKeyword = 'career opportunity, career opportunity consultancy, job in Quacklabs';
                $metaCannonical = 'https://www.quacklabs.in/career';
                break;
            case 'html':
                $metaTitle = 'HTML Development Service - Quacklabs';
                $metaDescription = 'Quacklabs India top web app development company offering HTML development service to power up your website with semantic markup. Contact us for expert assistance today!';
                $metaKeyword = 'html project';
                $metaCannonical = 'https://www.quacklabs.in/techstack/html';
                break;
            case 'techCss':
                $metaTitle = 'CSS Web Development Services | Enhance Your Website Appearance';
                $metaDescription = 'Get the best CSS web development services to enhance your website appearance. Our experts can help you control colors, layout, and fonts like never before.';
                $metaKeyword = 'css project';
                $metaCannonical = 'https://www.quacklabs.in/techstack/css3';
                break;
            case 'techJavascript':
                $metaTitle = 'Quacklabs - Using Frontend Web Development: JavaScript for Interactive Websites and Applications';
                $metaDescription = 'Experience the power of JavaScript with Quacklabs. Build interactive websites and applications effortlessly with our frontend web development solutions.';
                $metaKeyword = 'JavaScript project';
                $metaCannonical = 'https://www.quacklabs.in/techstack/javascript';
                break;
            case 'techBootstrap':
                $metaTitle = 'Quacklabs - Design Beautiful Websites Faster with Bootstrap';
                $metaDescription = 'Quacklabs uses frontend web development to create responsive websites quickly. Discover how Bootstrap can enhance your website design.';
                $metaKeyword = 'bootstrap project';
                $metaCannonical = 'https://www.quacklabs.in/techstack/bootstrap';
                break;
            case 'techWordpress':
                $metaTitle = 'Quacklabs - Online WordPress Development Services to Power Your Website';
                $metaDescription = 'Take your website to the next level with Quacklabs expert online WordPress development services. Join millions of satisfied customers today.';
                $metaKeyword = 'wordpress development services';
                $metaCannonical = 'https://www.quacklabs.in/techstack/wordpress';
                break;
            case 'techPhotoshop':
                $metaTitle = 'Quacklabs - Your Photoshop Designer Company to Bring Your Vision to Life';
                $metaDescription = 'Transform your design ideas into reality with Quacklabs expert team of Photoshop designers. Let create something amazing together.';
                $metaKeyword = 'photoshop designing company';
                $metaCannonical = 'https://www.quacklabs.in/techstack/photoshop';
                break;
            case 'techPhp':
                $metaTitle = 'PHP Web Development Services by Quacklabs - Simplify Your Web Experience';
                $metaDescription = 'Choose Quacklabs for flexible and reliable PHP web development services that simplify your web experience. Contact us today for a free consultation.';
                $metaKeyword = 'php development service';
                $metaCannonical = 'https://www.quacklabs.in/techstack/php';
                break;
            case 'techMysql':
                $metaTitle = 'Quacklabs - The Leading Open-Source Database Management System';
                $metaDescription = 'Manage your data with ease using Quacklabs - the most popular and reliable open-source database management system in the market. Try it now!';
                $metaKeyword = 'database management system';
                $metaCannonical = 'https://www.quacklabs.in/techstack/mysql';
                break;
            case 'techLaravel':
                $metaTitle = 'Web Application with PHP and Laravel Framework by Quacklabs | Get Started Now';
                $metaDescription = 'Ready to build your own web application? Learn how to use PHP and Laravel framework with expert guidance from Quacklabs. Start building today!';
                $metaKeyword = 'web application service';
                $metaCannonical = 'https://www.quacklabs.in/techstack/laravel';
                break;
            case 'techCodeigniter';
                $metaTitle = 'Codeigniter Development Services - Quacklabs | Accelerate Your Web Development';
                $metaDescription = 'Get cutting-edge Codeigniter development services from Quacklabs and accelerate your web development process. Boost your online presence with our expert team.';
                $metaKeyword = 'web development service';
                $metaCannonical = 'https://www.quacklabs.in/techstack/codeigniter';
                break;
            // case 'techMongoDb':
            //     $metaTitle = '';
            //     $metaDescription = '';
            //     $metaKeyword = '';
            //     $metaCannonical = '';
            //     break;
            case 'techPython':
                $metaTitle = 'Python Development Service - Unleash Your Full Potential with Quacklabs';
                $metaDescription = 'Discover the power of Python development with Quacklabs. We help businesses unlock new opportunities with our expert Python development services.';
                $metaKeyword = 'Python development service';
                $metaCannonical = 'https://www.quacklabs.in/techstack/python';
                break;
            case 'techAndroid':
                $metaTitle = 'Android development Services: Quacklabs';
                $metaDescription = 'Android app development services comprise design, development, and enhancement of mobile software that runs on all supported Android OS versions.';
                $metaKeyword = 'Android development services';
                $metaCannonical = 'https://www.quacklabs.in/techstack/android';
                break;
            case 'techFirebase':
                $metaTitle = 'Build Your Web App with Firebase: Quacklabs';
                $metaDescription = 'Quacklabs offers the perfect solution for building, growing, and scaling your web app with Firebase. Explore our comprehensive app development platform and start building today!';
                $metaKeyword = 'application development platform';
                $metaCannonical = 'https://www.quacklabs.in/techstack/firebase';
                break;
            case 'techFlutter':
                $metaTitle = 'Design with Flutter - The Fast and Flexible Mobile App Development Framework by Quacklabs';
                $metaDescription = 'Build beautiful and high-performance mobile apps with Flutter. Quacklabs provides the best design solutions for your app development needs.';
                $metaKeyword = 'Flexible mobile app development';
                $metaCannonical = 'https://www.quacklabs.in/techstack/flutter';
                break;
            case 'techAngular':
                $metaTitle = 'Angular Development Company - Quacklabs | Build Scalable Web Applications';
                $metaDescription = 'Quacklabs is an Angular development company trusted by enterprises. Build powerful and scalable web applications using Angular with our expert developers.';
                $metaKeyword = 'Angular development service';
                $metaCannonical = 'https://www.quacklabs.in/techstack/angular';
                break;
            case 'techNode':
                $metaTitle = 'Node.js Development Services - Quacklabs | High-Performance Web Applications';
                $metaDescription = 'Quacklabs is a Node.js development service company that builds high-performance web applications. Hire us for your next project and see the difference!';
                $metaKeyword = 'Node.js development services';
                $metaCannonical = 'https://www.quacklabs.in/techstack/node';
                break;
            case 'techReact':
                $metaTitle = 'React JS Development Company - Quacklabs | Expert React Developers';
                $metaDescription = 'Get seamless and intuitive web development with Quacklabs, an expert React JS development company. Trust our skilled React developers for your next project.';
                $metaKeyword = 'react js development service';
                $metaCannonical = 'https://www.quacklabs.in/techstack/react';
                break;
            // case 'contactUs':
            //     break;
            case 'appDevelopmentAll':
                $metaTitle = 'Web & App Development Services by Quacklabs - Creating Innovative Solutions';
                $metaDescription = 'Trust the experts at Quacklabs for high-quality web and app development services. Our innovative solutions help grow your business. Get a free quote now!';
                $metaKeyword ='Web & App development services';
                $metaCannonical = 'https://www.quacklabs.in/app-development-all';
                break;
            case 'webServices':
                $metaTitle = 'Quacklabs - Best Web Services in Bhubaneswar for Your Website';
                $metaDescription = 'Get reliable, secure, and efficient web hosting services for your website with Quacklabs. Trust us to keep your website running smoothly.';
                $metaKeyword = 'best web service in Bhubaneswar';
                $metaCannonical = 'https://www.quacklabs.in/web-services';
                break;
            // case 'getQuote':
            //     break;
            // case 'itConsultingAll':
            //     break;
            case 'cloudSaas':
                $metaTitle = 'Best Cloud SaaS Services in Bhubaneswar- Quacklabs | Secure & Reliable Web Hosting';
                $metaDescription = 'Get the best cloud SaaS services in Bhubaneswar with Quacklabs. Secure and reliable web hosting solutions for your website. Choose us for hassle-free services.';
                $metaKeyword = 'Cloud based SaaS Services in Bhubaneswar';
                $metaCannonical = 'https://www.quacklabs.in/cloud-saas';
                break;
            case 'ourProduct':
                $metaTitle = 'Quacklabs - Best Product Development Company in Bhubaneswar';
                $metaDescription = 'Our experienced team develops intuitive, user-friendly software tailored to meet your specific needs. Trust Quacklabs for the best products in Bhubaneswar.';
                $metaKeyword = 'best product development company in Bhubaneswar';
                $metaCannonical = 'https://www.quacklabs.in/our-product';
                break;
            // case 'blogDetails':
            //     break;
            // case 'joinTeam':
            //     break;


        }

        $view->with([
            'meta_title' => $metaTitle,
            'meta_description' => $metaDescription,
            'meta_keyword' => $metaKeyword,
            'meta_cannonical' => $metaCannonical
        ]);
    }
}