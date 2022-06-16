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
                'title' => 'About',
                'short_title' => 'Our History',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu mauris augue. Nullam rutrum, purus eget pulvinar porttitor, libero orci rutrum ipsum, viverra laoreet nulla arcu eu leo. Aliquam erat volutpat. Donec molestie eget<br /><br />Etiam blandit lacinia purus, a iaculis nisl mollis vel. In id placerat lectus, non ultrices lacus. Curabitur non lobortis nibh. Praesent nulla velit, accumsan id ornare vitae, facilisis sed est. Suspendisse maximus mollis nulla, sit amet sodales est sollicitudin ut. Aliquam maximus vitae orci at eleifend. Fusce at velit augue. Vivamus luctus nulla sit amet risus ultricies rutrum.<br /><br />Vivamus luctus nulla sit amet risus ultricies rutrum. Cras bibendum scelerisque lacus ac sodales. Proin lacinia hendrerit ligula sed rhoncus. Pellentesque vel interdum purus.</p>',
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
            6 => 
            array (
                'id' => 7,
                'page_id' => 7,
                'language_id' => 1,
                'template' => 'default',
                'title' => 'Contact',
                'short_title' => 'Contact',
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
            7 => 
            array (
                'id' => 8,
                'page_id' => 8,
                'language_id' => 1,
                'template' => 'login',
                'title' => 'Login',
                'short_title' => 'Login',
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
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
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
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
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
        ));
        
        
    }
}