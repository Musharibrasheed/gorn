<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesDescriptionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages_description')->delete();
        
        \DB::table('pages_description')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_id' => 1,
                'language_id' => 1,
                'template' => 'home',
                'title' => 'ONE-STOP HEALTHCARE WORKFORCE SOLUTION',
                'short_title' => 'Home',
                'content' => '<p>We understand that staffing all of your needs can be extremely difficult. Go Rn Is Your One-stop Healthcare Workforce Solution. Staffing, Scheduling, Geo Location-Checking in and out, Broadcasting, Shift Reviews and more! Go RN saves you time &amp; money.</p>',
                'short_content' => '',
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'page_video' => NULL,
                'template_content' => 'a:11:{s:18:"about_gorn_heading";s:11:"About Go RN";s:15:"about_gorn_text";s:451:"<p>We are a company formed by nursing, healthcare, and technology professionals, who are constantly looking to improve the healthcare system<br />Staffing a hospital is a difficult and constant challenge. Finding the right staff at the last minute &ndash; and having them arrive in time for the shift &ndash; is a costly and time consuming process. Our platform reduces the uncertainty, cost, and time involved to get registry nurses on shift.</p>";s:16:"section2_heading";s:13:"Our Solutions";s:20:"section2_bx1_heading";s:9:"Solutions";s:17:"section2_bx1_text";s:86:"<p>Trading Est professional recruiting services, we take every measure to find the</p>";s:20:"section2_bx2_heading";s:24:"Healthcare Professionals";s:17:"section2_bx2_text";s:91:"<p>One strategy that can help you reduce cost and increase competitiveness in some area</p>";s:20:"section2_bx3_heading";s:10:"Facilities";s:17:"section2_bx3_text";s:91:"<p>One strategy that can help you reduce cost and increase competitiveness in some area</p>";s:16:"section3_heading";s:17:"Better For Nurses";s:13:"section3_text";s:451:"<p>We are a company formed by nursing, healthcare, and technology professionals, who are constantly looking to improve the healthcare system<br />Staffing a hospital is a difficult and constant challenge. Finding the right staff at the last minute &ndash; and having them arrive in time for the shift &ndash; is a costly and time consuming process. Our platform reduces the uncertainty, cost, and time involved to get registry nurses on shift.</p>";}',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-06-15 20:18:33',
            ),
            1 => 
            array (
                'id' => 2,
                'page_id' => 2,
                'language_id' => 1,
                'template' => 'default',
                'title' => 'Locations',
                'short_title' => 'Locations',
                'content' => '',
                'short_content' => '',
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'page_video' => '',
                'template_content' => 'a:0:{}',
                'deleted_at' => '2022-06-15 21:06:58',
                'created_at' => NULL,
                'updated_at' => '2022-06-15 21:06:58',
            ),
            2 => 
            array (
                'id' => 3,
                'page_id' => 3,
                'language_id' => 1,
                'template' => 'default',
                'title' => 'Forum',
                'short_title' => 'Forum',
                'content' => '',
                'short_content' => '',
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'page_video' => '',
                'template_content' => 'a:0:{}',
                'deleted_at' => '2022-06-15 21:07:02',
                'created_at' => NULL,
                'updated_at' => '2022-06-15 21:07:02',
            ),
            3 => 
            array (
                'id' => 4,
                'page_id' => 4,
                'language_id' => 1,
                'template' => 'default',
                'title' => 'Community',
                'short_title' => 'Community',
                'content' => '',
                'short_content' => '',
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'page_video' => '',
                'template_content' => 'a:0:{}',
                'deleted_at' => '2022-06-15 21:07:07',
                'created_at' => NULL,
                'updated_at' => '2022-06-15 21:07:07',
            ),
            4 => 
            array (
                'id' => 5,
                'page_id' => 5,
                'language_id' => 1,
                'template' => 'default',
                'title' => 'Market',
                'short_title' => 'Market',
                'content' => '',
                'short_content' => '',
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'page_video' => '',
                'template_content' => 'a:0:{}',
                'deleted_at' => '2022-06-15 21:07:12',
                'created_at' => NULL,
                'updated_at' => '2022-06-15 21:07:12',
            ),
            5 => 
            array (
                'id' => 6,
                'page_id' => 6,
                'language_id' => 1,
                'template' => 'about',
                'title' => 'About Us',
                'short_title' => 'About',
                'content' => NULL,
                'short_content' => '',
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'page_video' => NULL,
                'template_content' => 'a:4:{s:16:"abt_sec1_heading";s:11:"About Go RN";s:13:"abt_sec1_text";s:455:"<p>We are a company formed by nursing, healthcare, and technology professionals, who are constantly looking to improve the healthcare system</p>
<p>Staffing a hospital is a difficult and constant challenge. Finding the right staff at the last minute &ndash; and having them arrive in time for the shift &ndash; is a costly and time consuming process. Our platform reduces the uncertainty, cost, and time involved to get registry nurses on shift&nbsp;</p>";s:16:"abt_sec2_heading";s:17:"Mission Statement";s:13:"abt_sec2_text";s:135:"<p>Make yourself available for shifts today or in the future. No need to wait for a registry to give you a call at the last minute.</p>";}',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-06-19 10:26:12',
            ),
            6 => 
            array (
                'id' => 7,
                'page_id' => 7,
                'language_id' => 1,
                'template' => 'contact',
                'title' => 'Contact Us',
                'short_title' => 'Contact',
                'content' => NULL,
                'short_content' => '',
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'page_video' => NULL,
                'template_content' => 'a:9:{s:15:"contact_heading";s:19:"Contact Information";s:10:"contact_ci";s:84:"We were developed by nursing, healthcare, and technology professional just like you.";s:11:"contact_add";s:45:"313 N Birch St. Unit 102, Santa Ana, CA 92701";s:13:"contact_email";s:17:"hello@gornapp.com";s:11:"contact_phn";N;s:12:"contact_line";s:25:"We want to hear from you!";s:16:"contact_bx1_head";s:16:"Want to join us?";s:16:"contact_bx2_head";s:20:"Read our latest news";s:16:"contact_bx3_head";s:15:"Have questions?";}',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-06-18 13:07:28',
            ),
            7 => 
            array (
                'id' => 8,
                'page_id' => 8,
                'language_id' => 1,
                'template' => 'login',
                'title' => 'Login',
                'short_title' => 'Login',
                'content' => NULL,
                'short_content' => '',
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'page_video' => NULL,
                'template_content' => 'a:0:{}',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-06-19 10:28:11',
            ),
            8 => 
            array (
                'id' => 9,
                'page_id' => 9,
                'language_id' => 1,
                'template' => 'login',
                'title' => 'Sign Up',
                'short_title' => 'Sign Up',
                'content' => '',
                'short_content' => '',
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'page_video' => '',
                'template_content' => 'a:0:{}',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'page_id' => 10,
                'language_id' => 1,
                'template' => 'default',
                'title' => 'Privacy Policy',
                'short_title' => 'Privacy Policy',
                'content' => '',
                'short_content' => '',
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'page_video' => '',
                'template_content' => 'a:0:{}',
                'deleted_at' => '2022-06-17 21:08:53',
                'created_at' => NULL,
                'updated_at' => '2022-06-17 21:08:53',
            ),
            10 => 
            array (
                'id' => 11,
                'page_id' => 11,
                'language_id' => 1,
                'template' => 'default',
                'title' => 'Terms & Conditions',
                'short_title' => 'Terms & Conditions',
                'content' => '',
                'short_content' => '',
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'page_video' => '',
                'template_content' => 'a:0:{}',
                'deleted_at' => '2022-06-19 09:12:47',
                'created_at' => NULL,
                'updated_at' => '2022-06-19 09:12:47',
            ),
            11 => 
            array (
                'id' => 12,
                'page_id' => 12,
                'language_id' => 1,
                'template' => 'healthcare-professionals',
                'title' => 'ONE-STOP HEALTHCARE WORKFORCE SOLUTION',
                'short_title' => 'HEALTHCARE Professionals',
                'content' => '<p>We understand that staffing all of your needs can be extremely difficult. Go Rn Is Your One-stop Healthcare Workforce Solution. Staffing, Scheduling, Geo Location-Checking in and out, Broadcasting, Shift Reviews and more! Go RN saves you time &amp; money.</p>',
                'short_content' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'page_video' => NULL,
                'template_content' => 'a:15:{s:15:"hc_sec1_heading";s:17:"Better For Nurses";s:12:"hc_sec1_text";s:146:"<p>With Go RN, take control of your life and income. Work where you want when you want with unlimited earning potential right from fingertips.</p>";s:15:"hc_sec2_tagline";s:18:"One-Click Solution";s:15:"hc_sec2_heading";s:67:"We Will Help You Connect With New Opportunities Both Local & Travel";s:12:"hc_sec2_text";s:151:"<p>Go RN\'s technology puts you ahead of the game by quickly connects you with hundreds of opportunities and landing jobs both on demand and travel.</p>";s:15:"hc_sec3_heading";s:20:"Featured Job Listing";s:12:"hc_sec3_text";s:146:"<p>With Go RN, take control of your life and income. Work where you want when you want with unlimited earning potential right from fingertips.</p>";s:15:"hc_sec4_heading";s:29:"All In The Palm Of Your Hands";s:15:"hc_sec4_tagline";s:53:"Our platform provides you all the tools you’ll need";s:19:"hc_sec4_bx1_heading";s:12:"Mobile First";s:16:"hc_sec4_bx1_text";s:69:"<p>Support for both iPhone and Android owners. We got you covered</p>";s:19:"hc_sec4_bx2_heading";s:33:"hover effect Scheduling Made Easy";s:16:"hc_sec4_bx2_text";s:65:"<p>Your calendar in the palm of your hand. You\'re in control.</p>";s:19:"hc_sec4_bx3_heading";s:15:"Get Paid Weekly";s:16:"hc_sec4_bx3_text";s:90:"<p>Leave the billing to us. We\'ll manage your shift to ensure you receive every penny.</p>";}',
                'deleted_at' => NULL,
                'created_at' => '2022-06-15 18:19:13',
                'updated_at' => '2022-06-15 19:50:52',
            ),
            12 => 
            array (
                'id' => 13,
                'page_id' => 13,
                'language_id' => 1,
                'template' => 'facilities',
                'title' => 'WORKFORCE MANAGEMENT',
                'short_title' => 'Facilities',
                'content' => '<p>We understand that staffing all of your needs can be extremely difficult. Go RN Is Your One-stop Healthcare Workforce Solution. Staffing, Scheduling, Geolocation checking in and out, Broadcasting, Shift Reviews and more! Go RN saves you time &amp; money.</p>',
                'short_content' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'page_video' => NULL,
                'template_content' => 'a:20:{s:16:"fac_sec1_tagline";s:53:"Our platform provides you all the tools you’ll need";s:16:"fac_sec1_heading";s:11:"Float Pools";s:20:"fac_sec1_bx1_heading";s:7:"Dynamic";s:17:"fac_sec1_bx1_text";s:74:"<p>Staffing efficiency &amp; minimizing staffing agency usage per diem</p>";s:20:"fac_sec1_bx2_heading";s:46:"Covering Sister Facilities within your Network";s:17:"fac_sec1_bx2_text";s:65:"<p>Your calendar in the palm of your hand. You\'re in control.</p>";s:20:"fac_sec1_bx3_heading";s:21:"Various Float Options";s:17:"fac_sec1_bx3_text";s:133:"<p>Efficient tracking of cost center and budget Allow your staff to float within units in networks and across network facilities.</p>";s:20:"fac_sec1_bx4_heading";s:25:"Better internal workforce";s:17:"fac_sec1_bx4_text";s:159:"<p>Focus on internal workforce increasing patient satisfaction and a healthier work environment, resulting in a richer culture and decreased staffing cost.</p>";s:20:"fac_sec1_bx5_heading";s:36:"Cost effective-Meet your bottom line";s:17:"fac_sec1_bx5_text";s:84:"<p>Maximize your internal workforce and minimize your outsource staffing expense</p>";s:20:"fac_sec1_bx6_heading";s:20:"Seamless Integration";s:17:"fac_sec1_bx6_text";s:90:"<p>Leave the billing to us. We\'ll manage your shift to ensure you receive every penny.</p>";s:16:"fac_sec2_heading";s:18:"Get Started today!";s:13:"fac_sec2_text";s:64:"<p>Optimize staffing efficiency and improve your bottom line</p>";s:13:"fac_sec3_text";s:263:"<h1>Partnership</h1>
<ul>
<li>SaaS/VMS/MSP</li>
<li>Meeting Staff RatioRetention</li>
<li>Yearly reviews</li>
<li>Compliance Tracking</li>
<li>CMS/ Joint Commission</li>
<li>Continuity of care</li>
<li>Higher employee and patient satisfaction</li>
</ul>";s:16:"fac_sec4_heading";s:13:"Cascade Model";s:13:"fac_sec4_text";s:255:"<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>";s:16:"fac_sec5_heading";s:18:"Get Started today!";}',
                'deleted_at' => NULL,
                'created_at' => '2022-06-15 21:10:09',
                'updated_at' => '2022-06-16 17:34:30',
            ),
            13 => 
            array (
                'id' => 14,
                'page_id' => 14,
                'language_id' => 1,
                'template' => 'staffing',
                'title' => 'HEALTHCARE STAFFING',
                'short_title' => 'staffing',
                'content' => '<p>We understand that staffing all of your needs can be extremely difficult. Go RN Is Your One-stop Healthcare Workforce Solution. Staffing, Scheduling, Geolocation checking in and out, Broadcasting, Shift Reviews and more! Go RN saves you time &amp; money.</p>',
                'short_content' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'page_video' => NULL,
                'template_content' => 'a:13:{s:18:"staff_sec1_heading";s:17:"STAFFING SOLUTION";s:22:"staff_sec1_bx1_heading";s:6:"Step 1";s:19:"staff_sec1_bx1_text";s:33:"<p>Request a shift/Assignment</p>";s:22:"staff_sec1_bx2_heading";s:6:"Step 2";s:19:"staff_sec1_bx2_text";s:38:"<p>Available workforce at a glance</p>";s:22:"staff_sec1_bx3_heading";s:6:"Step 3";s:19:"staff_sec1_bx3_text";s:41:"<p>Fill a need at a click of a button</p>";s:22:"staff_sec2_bx1_heading";s:12:"BROADCASTING";s:19:"staff_sec2_bx1_text";s:255:"<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>";s:22:"staff_sec2_bx2_heading";s:22:"REAL TIME CONFIRMATION";s:19:"staff_sec2_bx2_text";s:255:"<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>";s:15:"staff_sec3_text";s:191:"<h1 class="display-3">MASTER BOOKING</h1>
<ul class="Scheduling">
<li>Scheduling</li>
<li>Rollovers</li>
<li>Compliance</li>
<li>Point commission profiles</li>
<li>On demand</li>
</ul>";s:15:"staff_sec4_text";s:752:"<h4>Analytics</h4>
<p class="lorem-last">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
<ul class="Quality">
<ul class="Quality">
<li>Quality performance measures</li>
<li>Staffing Metrics</li>
<li>Compliance Tracking</li>
<li>&ldquo;Control and manage overall spend&rdquo;</li>
<li class="Daily">&ldquo;Daily Expenditure overview&rdquo;</li>
&nbsp;
<li class="Realtime">&ldquo;Realtime Analysis&rdquo;</li>
</ul>
</ul>
<p>&nbsp;</p>
<ul class="Quality">
<li class="Centralized">&ldquo;Centralized&rdquo;</li>
</ul>
<p>&nbsp;</p>";}',
                'deleted_at' => NULL,
                'created_at' => '2022-06-16 18:05:35',
                'updated_at' => '2022-06-16 19:37:56',
            ),
            14 => 
            array (
                'id' => 15,
                'page_id' => 15,
                'language_id' => 1,
                'template' => 'request-demo',
                'title' => 'Request Demo',
                'short_title' => 'Request Demo',
                'content' => NULL,
                'short_content' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'page_video' => NULL,
                'template_content' => 'a:21:{s:15:"rd_sec1_tagline";s:22:"Hire Faster & Smarter!";s:15:"rd_sec1_heading";s:65:"Spending too much on Travel and Per Diem Nursing/Allied Staffing?";s:12:"rd_sec1_text";s:272:"<p>No worries! We are here to help. Our platform will help you create and manage your own internal flow pool. We can also help you manage the compliance requirements for your core staff and float pool clinicians. So you can save more and leave the heavy lifting to us.</p>";s:15:"rd_sec2_heading";s:41:"Let us help you improve your bottom line!";s:19:"rd_sec2_bx1_heading";s:10:"Mobile App";s:19:"rd_sec2_bx2_heading";s:10:"Scheduling";s:19:"rd_sec2_bx3_heading";s:11:"Cloud based";s:19:"rd_sec2_bx4_heading";s:12:"24/7 Support";s:19:"rd_sec2_bx5_heading";s:13:"Amazing Tools";s:19:"rd_sec2_bx6_heading";s:14:"Build to scale";s:16:"rd_sec2_bx1_text";s:73:"<p>We are just an app away. Manage everything on your Android or iOS.</p>";s:16:"rd_sec2_bx2_text";s:78:"<p>Be smarter and manage the existing workforce and decrease agency spent.</p>";s:16:"rd_sec2_bx3_text";s:60:"<p>So you don&rsquo;t have to worry about moving around.</p>";s:16:"rd_sec2_bx4_text";s:109:"<p>You read that right, we give you a dedicated account manager so there is always help when you need it.</p>";s:16:"rd_sec2_bx5_text";s:104:"<p>Stuck with traditional tools that limit your productivity, we understand each client is different</p>";s:16:"rd_sec2_bx6_text";s:109:"<p>Hooked on Go RN, we don&rsquo;t blame you. We are addictive. Get our Enterprise solution and stand out</p>";s:15:"rd_sec3_heading";s:20:"We have you covered!";s:18:"rd_sec3_subheading";s:66:"Let Go RN assist you with maximizing your float pool & core staff.";s:12:"rd_sec3_text";s:247:"<p>No problem! Go RN&rsquo;s staffing platform can improve your bottom line by adding efficiencies that will help you form, manage, and efficiently staff your float pool and core staff, in turn decreasing your travel and per diem agency usage.</p>";s:15:"rd_sec4_tagline";s:28:"WE’RE ALWAYS HAPPY TO HELP";s:15:"rd_sec4_heading";s:26:"Schedule your demo today!!";}',
                'deleted_at' => NULL,
                'created_at' => '2022-06-17 17:15:45',
                'updated_at' => '2022-06-17 20:10:33',
            ),
            15 => 
            array (
                'id' => 16,
                'page_id' => 16,
                'language_id' => 1,
                'template' => 'apply-now',
                'title' => 'Apply Now',
                'short_title' => 'Apply Now',
                'content' => '<h1>Go RN App</h1>
<p>Please fill out the form to the best of your ability</p>',
                'short_content' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'page_video' => NULL,
                'template_content' => 'a:0:{}',
                'deleted_at' => NULL,
                'created_at' => '2022-06-18 22:21:44',
                'updated_at' => '2022-06-18 22:23:46',
            ),
            16 => 
            array (
                'id' => 17,
                'page_id' => 17,
                'language_id' => 1,
                'template' => 'faqs',
                'title' => 'Frequently Asked Questions',
                'short_title' => 'FAQS',
                'content' => NULL,
                'short_content' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'page_video' => NULL,
                'template_content' => 'a:8:{s:7:"faqs_q1";s:32:"Why won`t my payment go through?";s:7:"faqs_q2";s:22:"How do I get a refund?";s:7:"faqs_q3";s:25:"How do I redeem a coupon?";s:7:"faqs_q4";s:21:"Changing account name";s:9:"faqs_ans1";s:554:"<p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium.Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.<br />Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus. Nisl malesuada tortor, ligula aliquet felis vitae enim. Mi augue aliquet mauris non elementum tincidunt eget facilisi. Pellentesque massa ipsum tempus vel aliquam massa eu pulvinar eget.</p>";s:9:"faqs_ans2";s:143:"<p>Aliquam cursus vitae nulla non rhoncus. Nunc condimentum erat nec dictum tempus. Suspendisse aliquam erat hendrerit vehicula vestibulum.</p>";s:9:"faqs_ans3";s:136:"<p>Pellentesque aliquam ligula libero, vitae imperdiet diam porta vitae. sed do eiusmod tempor incididunt ut labore et dolore magna.</p>";s:9:"faqs_ans4";s:120:"<p>Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque.</p>";}',
                'deleted_at' => NULL,
                'created_at' => '2022-06-18 22:37:30',
                'updated_at' => '2022-06-18 22:56:29',
            ),
        ));
        
        
    }
}