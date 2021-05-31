<?php

function checklist_fields() {

    $checklist = array(

        /**
         * TAB // CONTENT
         */
        array(
            'key' => 'db_core_settings_title_checklist_content',
            'label' => 'Content',
            'type' => 'tab',
        ),
        array(
            'key' => 'db_checklist_content_title_1',
            'label' => '1. Replace dummy content',
            'type' => 'message',
            'message' => 'Check your site for placeholder text (such as Lorem ipsum) and make sure the actual (client-approved) content is in place.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_content_1_true',
            'label' => 'Done',
            'name' => 'done_content_1',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_content_title_2',
            'label' => '2. Proofread',
            'type' => 'message',
            'message' => 'Nothing says “unprofessional” more than grammar and spelling errors, so double check all text on the site for mistakes and then check again.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_content_2_true',
            'label' => 'Done',
            'name' => 'done_content_2',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_content_title_3',
            'label' => '3. Format written content',
            'type' => 'message',
            'message' => 'Layout is important to make your site attractive and easy to consume. Avoid big blocks of text, use paragraphs, and don’t forget about headings!',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_content_3_true',
            'label' => 'Done',
            'name' => 'done_content_3',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_content_title_4',
            'label' => '4. Check for placeholder images',
            'type' => 'message',
            'message' => 'Any stand-in visuals should also be removed and replaced with actual images.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_content_4_true',
            'label' => 'Done',
            'name' => 'done_content_4',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_content_title_5',
            'label' => '5. Examine page links',
            'type' => 'message',
            'message' => 'Make sure no link is broken, internal links point where they are supposed to, and external links open in a new tab.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_content_5_true',
            'label' => 'Done',
            'name' => 'done_content_5',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_content_title_6',
            'label' => '6. Set up a 404 error page',
            'type' => 'message',
            'message' => 'Though most themes have a default page for content that can’t be found, you should also consider setting up a custom 404 error page. Either way, make sure there is a page for those who get onto your site through a faulty link.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_content_6_true',
            'label' => 'Done',
            'name' => 'done_content_6',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_content_title_7',
            'label' => '7. Implement a contact page',
            'type' => 'message',
            'message' => 'Another important page visitors will appreciate is a contact page. Use plugins like Jetpack, Contact Form 7, and Fast Secure Contact Formto set up an easy way for users to communicate with you.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_content_7_true',
            'label' => 'Done',
            'name' => 'done_content_7',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        /**
         * TAB // DESIGN
         */
        array(
            'key' => 'db_core_settings_title_design',
            'label' => 'Design',
            'type' => 'tab',
        ),
        array(
            'key' => 'db_checklist_design_title_1',
            'label' => '1. Validate HTML markup',
            'type' => 'message',
            'message' => 'To avoid incompatibilities, use tools like W3C’s Markup Validation Service to check all pages of your site adhere to web standards.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_design_1_true',
            'label' => 'Done',
            'name' => 'done_design_1',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_design_title_2',
            'label' => '2. Preview site in major browsers',
            'type' => 'message',
            'message' => 'To spot cross-browser compatibility problems, view your site in Firefox, Chrome, Safari, Internet Explorer/Microsoft Edge, and any legacy browser your client wants to support. Look especially at images and videos. An alternative is using a service like Browsershots.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_design_2_true',
            'label' => 'Done',
            'name' => 'done_design_2',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_design_title_3',
            'label' => '3. Check responsive design',
            'type' => 'message',
            'message' => 'Mobile is bringing in a lot of traffic these days and having a site that looks good on mobile devices is a must. To ensure an optimal user experience, test your design on different gadgets (both phones and tablets) and platforms (Android, iOS) and/or use something like MobileTest.me',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_design_3_true',
            'label' => 'Done',
            'name' => 'done_design_3',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_design_title_4',
            'label' => '4. Use googles mobile testing tool',
            'type' => 'message',
            'message' => 'In addition to manual testing, Google also offers a mobile testing toolwith lots of helpful feedback. Just input your URL and it will run a full analysis of your site.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_design_4_true',
            'label' => 'Done',
            'name' => 'done_design_4',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_design_title_5',
            'label' => '5. Optimize images',
            'type' => 'message',
            'message' => 'Reducing image size as much as possible (without compromising quality, of course) will improve page load time and thereby user experience and SEO. TinyPNG and RIOT can do this for you.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_design_5_true',
            'label' => 'Done',
            'name' => 'done_design_5',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_design_title_6',
            'label' => '6. Add a favicon',
            'type' => 'message',
            'message' => 'Probably one of the most frequently forgotten parts of website design, a favicon appears in browser tabs and makes you look extra professional. Thankfully Favicomatic will easily create one for you.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_design_6_true',
            'label' => 'Done',
            'name' => 'done_design_6',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_design_title_7',
            'label' => '7. Link header logo to homepage',
            'type' => 'message',
            'message' => 'First of all, make sure your company logo is present in the header. Secondly, check that it links back to the starting page (of your actual site, not the development site) so users can return there quickly.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_design_7_true',
            'label' => 'Done',
            'name' => 'done_design_7',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        /**
         * TAB // FUNCTIONALITY
         */
        array(
            'key' => 'db_core_settings_title_functionality',
            'label' => 'Functionality',
            'type' => 'tab',
        ),
        array(
            'key' => 'db_checklist_functionality_title_1',
            'label' => '1. Test drive web forms',
            'type' => 'message',
            'message' => 'Whatever forms you have on your site (contact, order, survey, etc.) ensure that they are submitting data correctly and that form emails arrive in the right place.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_functionality_1_true',
            'label' => 'Done',
            'name' => 'done_functionality_1',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_functionality_title_2',
            'label' => '2. Confirm form messages and redirects',
            'type' => 'message',
            'message' => 'Likewise, do users get relevant help messages and are they moved on to the right place after submitting data? It’s time to find out.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_functionality_2_true',
            'label' => 'Done',
            'name' => 'done_functionality_2',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_functionality_title_3',
            'label' => '3. Check your speed score',
            'type' => 'message',
            'message' => 'Use a tool like Google Pagespeed Insights, GTMetrix, and Pingdomto see how quickly your site loads and what you can do to make it even faster. If at all possible, shoot for a loading time below two seconds.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_functionality_3_true',
            'label' => 'Done',
            'name' => 'done_functionality_3',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_functionality_title_4',
            'label' => '4. Test social sharing functionality',
            'type' => 'message',
            'message' => 'Check whether social sharing is in place, working properly, and includes the right platforms and profiles.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_functionality_4_true',
            'label' => 'Done',
            'name' => 'done_functionality_4',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_functionality_title_5',
            'label' => '5. Implement accessibility guidelines',
            'type' => 'message',
            'message' => 'Accessibility is becoming more and more important around the web. Read <a href="https://www.hostgator.com/blog/wcag-2-2-accessibility-guidelines-websites/" target="_blank">this</a> article on how to implement it in WordPress, especially if you are required to by law.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_functionality_5_true',
            'label' => 'Done',
            'name' => 'done_functionality_5',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_functionality_title_6',
            'label' => '6. Test third-party tools',
            'type' => 'message',
            'message' => 'In case you are using external tools for CRM, ecommerce, marketing, or something else, double check that they are present on-site and doing what they are meant to do.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_functionality_6_true',
            'label' => 'Done',
            'name' => 'done_functionality_6',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        /**
         * TAB // SEO
         */
        array(
            'key' => 'db_core_settings_title_seo',
            'label' => 'SEO',
            'type' => 'tab',
        ),
        array(
            'key' => 'db_checklist_seo_title_1',
            'label' => '1. Install and configure seo plugin',
            'type' => 'message',
            'message' => 'While WordPress is well configured for SEO as it is, an SEO plugin like Yoast SEO or All-in-One SEO Pack will take it to the next level and beyond.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_seo_1_true',
            'label' => 'Done',
            'name' => 'done_seo_1',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_seo_title_2',
            'label' => '2. Seo site title and tagline',
            'type' => 'message',
            'message' => 'If your SEO plugin doesn’t already take care of your site’s title and tagline, make sure to set it under Settings > General.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_seo_2_true',
            'label' => 'Done',
            'name' => 'done_seo_2',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_seo_title_3',
            'label' => '3. Configure seo page and post titles',
            'type' => 'message',
            'message' => 'All pages and posts on your site should have unique titles with less than 70 characters that include the keywords each of them are optimized for.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_seo_3_true',
            'label' => 'Done',
            'name' => 'done_seo_3',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_seo_title_4',
            'label' => '4. Implement meta descriptions',
            'type' => 'message',
            'message' => 'Likewise, create unique and expressive meta descriptions for all posts and pages that include keywords and are less than 156 characters long.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_seo_4_true',
            'label' => 'Done',
            'name' => 'done_seo_4',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_seo_title_5',
            'label' => '5. Set up permalinks',
            'type' => 'message',
            'message' => 'Make sure the permalink structure is set to your liking (Settings > Permalinks) and that each page URL contains its main keyword.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_seo_5_true',
            'label' => 'Done',
            'name' => 'done_seo_5',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_seo_title_6',
            'label' => '6. Optimize images (again)',
            'type' => 'message',
            'message' => 'Also, check image file names, descriptions, and ALT tags for keyword inclusion and make sure each image is compressed for quick loading times (see above).',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_seo_6_true',
            'label' => 'Done',
            'name' => 'done_seo_6',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_seo_title_7',
            'label' => '7. Set focus keywords',
            'type' => 'message',
            'message' => 'If you are using an SEO plugin, each post and page should also have a defined focus keyword. This will give you important information on how to further optimize them.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_seo_7_true',
            'label' => 'Done',
            'name' => 'done_seo_7',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_seo_title_8',
            'label' => '8. Work through content analysis',
            'type' => 'message',
            'message' => 'When you have set the focus keyword for a site, be sure to go through the tips inside the content analysis to achieve the best results.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_seo_8_true',
            'label' => 'Done',
            'name' => 'done_seo_8',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_seo_title_9',
            'label' => '9. Create sitemap',
            'type' => 'message',
            'message' => 'Yoast SEO and Google XML Sitemapscan help you set up a sitemap to share with search engines. If you are still working in a development environment, skip this step until you have moved the site to its final destination.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_seo_9_true',
            'label' => 'Done',
            'name' => 'done_seo_9',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_seo_title_10',
            'label' => '10. Set up metadata',
            'type' => 'message',
            'message' => 'Check meta tags for social and RSS feeds and whether they are set up correctly, appropriate, and proofread. Don’t forget to implement optional tags like rel=”nofollow”.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_seo_10_true',
            'label' => 'Done',
            'name' => 'done_seo_10',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        /**
         * TAB // MARKETING
         */
        array(
            'key' => 'db_core_settings_title_marketing',
            'label' => 'Marketing',
            'type' => 'tab',
        ),
        array(
            'key' => 'db_checklist_marketing_title_1',
            'label' => '1. Implement newsletter signups',
            'type' => 'message',
            'message' => 'Have you included a signup form in all important places? Think not only pages but also popups and other prompts. Check out SumoMe for a great number of possibilities to grow your list.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_marketing_1_true',
            'label' => 'Done',
            'name' => 'done_marketing_1',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_marketing_title_2',
            'label' => '2. Connect with email marketing provider',
            'type' => 'message',
            'message' => 'When you include a form, make sure it also goes somewhere and that email collection works properly. MailChimp is a favorite tool in this area.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_marketing_2_true',
            'label' => 'Done',
            'name' => 'done_marketing_2',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_marketing_title_3',
            'label' => '3. Set up social icons',
            'type' => 'message',
            'message' => 'Examine your social icons for completeness, proper functionality, and whether they are linking to the correct addresses. Plus, if you haven’t done so already, look into whether social sharing is working as it should.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_marketing_3_true',
            'label' => 'Done',
            'name' => 'done_marketing_3',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_marketing_title_4',
            'label' => '4. Look over social profiles',
            'type' => 'message',
            'message' => 'While you are at it, check any social profiles belonging to the site for design consistency and whether all info found on there is correct and up to date.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_marketing_4_true',
            'label' => 'Done',
            'name' => 'done_marketing_4',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        /**
         * TAB // LEGAL
         */
        array(
            'key' => 'db_core_settings_title_legal',
            'label' => 'Legal',
            'type' => 'tab',
        ),
        array(
            'key' => 'db_checklist_legal_title_1',
            'label' => '1. Show company details',
            'type' => 'message',
            'message' => 'Making your contact details easy to reach from anywhere on the site is a sign of trustworthiness and often mandatory. Include important info like tax registration, etc. if necessary.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_legal_1_true',
            'label' => 'Done',
            'name' => 'done_legal_1',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_legal_title_2',
            'label' => '2. Acquire required licenses',
            'type' => 'message',
            'message' => 'In case you are using images, fonts, code, plugins, etc. that need licensing, take care that everything is in place and stated as needed.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_legal_2_true',
            'label' => 'Done',
            'name' => 'done_legal_2',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_legal_title_3',
            'label' => '3. Include a copyright note',
            'type' => 'message',
            'message' => 'On a related topic, include a copyright statement if necessary.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_legal_3_true',
            'label' => 'Done',
            'name' => 'done_legal_3',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_legal_title_4',
            'label' => '4. Provide privacy policy',
            'type' => 'message',
            'message' => 'Required in some places by law, an official privacy policy is always a good idea to create trust when collecting any sort of data.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_legal_4_true',
            'label' => 'Done',
            'name' => 'done_legal_4',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_legal_title_5',
            'label' => '5. Include terms and conditions',
            'type' => 'message',
            'message' => 'Don’t forget those T&Cs! Especially if you are an ecommerce shop or otherwise dealing with transactions and money, this is an absolute must have.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_legal_5_true',
            'label' => 'Done',
            'name' => 'done_legal_5',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_legal_title_6',
            'label' => '6. Implement cookie warning',
            'type' => 'message',
            'message' => 'Especially in the EU, cookie warnings have become the law of the land. While a lot of people don’t like cookies because they can mess with their design, you can save yourself a lot of legal hassle by including them on your site as needed.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_legal_6_true',
            'label' => 'Done',
            'name' => 'done_legal_6',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        /**
         * TAB // LAUNCH PREPARATION
         */
        array(
            'key' => 'db_core_settings_title_prep',
            'label' => 'Launch preparation',
            'type' => 'tab',
        ),
        array(
            'key' => 'db_checklist_prep_title_1',
            'label' => '1. Set up google analytics',
            'type' => 'message',
            'message' => 'Collecting usage data is important to track site performance and make informed decisions. While there are other analytics solutions on the market, most of us go with Google’s. Google Analytics by Yoast makes setup easy as pie.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_prep_1_true',
            'label' => 'Done',
            'name' => 'done_prep_1',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_prep_title_2',
            'label' => '2. Connect google webmaster tools',
            'type' => 'message',
            'message' => 'While you are at it, integrate the site with Google’s webmaster suite.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_prep_2_true',
            'label' => 'Done',
            'name' => 'done_prep_2',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_prep_title_3',
            'label' => '3. Clean up',
            'type' => 'message',
            'message' => 'Finally, unless you keep it as a staging site, be sure to delete old and unneeded files, databases, subdomains, and any other remnants of the development site.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_prep_3_true',
            'label' => 'Done',
            'name' => 'done_prep_3',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        /**
         * TAB // SECURITY
         */
        array(
            'key' => 'db_core_settings_title_security',
            'label' => 'Backup & Security',
            'type' => 'tab',
        ),
        array(
            'key' => 'db_checklist_security_title_1',
            'label' => '1. Install an anti-span solution',
            'type' => 'message',
            'message' => 'Trust me, if you have any sort of traffic, you will get spam on your site. A lot of it. Using a solution like Akismet, Google Recaptcha or Antispam Bee will help you weather the worst.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_security_1_true',
            'label' => 'Done',
            'name' => 'done_security_1',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_security_title_2',
            'label' => '2. Implement login protection',
            'type' => 'message',
            'message' => 'The login page is one of the most vulnerable parts of your WordPress site. Therefore, it’s important to do due diligence in keeping it safe. Besides proper usernames and passwords, plugins like Login Lockdownwill help you do so.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_security_2_true',
            'label' => 'Done',
            'name' => 'done_security_2',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_security_title_3',
            'label' => '3. Set up a backup solution',
            'type' => 'message',
            'message' => 'The only thing worse than losing your entire site is not having a way to bring it back. Therefore, setting up a backup solution for both your site data and database is a mandatory pre-launch step. Do it now and thank me later. A managed hosting provider will handle backups for you.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_security_3_true',
            'label' => 'Done',
            'name' => 'done_security_3',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        /**
         * TAB // LAUNCH
         */
        array(
            'key' => 'db_core_settings_title_launch',
            'label' => 'Launch',
            'type' => 'tab',
        ),
        array(
            'key' => 'db_checklist_launch_title_1',
            'label' => '1. Disable "discourage search engines"',
            'type' => 'message',
            'message' => 'In the WordPress dashboard, under Settings > Reading uncheck the box that says “Discourage search engines from indexing this site.” Otherwise you can wait a long time for any organic traffic to show up.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_launch_1_true',
            'label' => 'Done',
            'name' => 'done_launch_1',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_launch_title_2',
            'label' => '2. Inspect robots.txt',
            'type' => 'message',
            'message' => 'In the same vein, if you have set up a robots.txt file, make sure to delete or reconfigure it so that search engines aren’t kept out of the live site.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_launch_2_true',
            'label' => 'Done',
            'name' => 'done_launch_2',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_launch_title_3',
            'label' => '3. Build sitemap',
            'type' => 'message',
            'message' => 'If you haven’t done so while checking your SEO settings, now is the time to create a sitemap. Afterwards, be sure to submit it to any search engine you care about ranking on.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_launch_3_true',
            'label' => 'Done',
            'name' => 'done_launch_3',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_launch_title_4',
            'label' => '4. Compile documentation',
            'type' => 'message',
            'message' => 'Put together all necessary information including: Login names and passwords, hosting information, db information, login information to social and other ccounts, how-to-guides for using the site, debrief next steps.',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_launch_4_true',
            'label' => 'Done',
            'name' => 'done_launch_4',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
        array(
            'key' => 'db_checklist_launch_title_5',
            'label' => '5. Promote your site!',
            'type' => 'message',
            'message' => 'Finally, it’s time to tell everyone about the site. Post your launch content on social media, email everyone you know, shout it from the rooftops – you have earned it!',
            'wrapper' => array(
                'width' => '80%',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'db_checklist_launch_5_true',
            'label' => 'Done',
            'name' => 'done_launch_5',
            'type' => 'true_false',
            'wrapper' => array(
                'width' => '20%',
                'class' => '',
                'id' => '',
            ),
            'ui' => 1,
            'default_value' => 0,
        ),
    );

    return $checklist;
}

function my_message() {
    $d1 = get_field('db_core_settings_title_checklist_group', 'options');

    $content = 0;
    $design = 0;
    $func = 0;
    $seo = 0;
    $marketing = 0;
    $legal = 0;
    $prep = 0;
    $security = 0;
    $launch = 0;

    foreach($d1 as $key => $field) {
        if(strpos($key, 'content')) {
            if($field) {
                $content++;
            }
        }
        if(strpos($key, 'design')) {
            if($field) {
                $design++;
            }
        }
        if(strpos($key, 'functionality')) {
            if($field) {
                $func++;
            }
        }
        if(strpos($key, 'seo')) {
            if($field) {
                $seo++;
            }
        }
        if(strpos($key, 'marketing')) {
            if($field) {
                $marketing++;
            }
        }
        if(strpos($key, 'legal')) {
            if($field) {
                $legal++;
            }
        }
        if(strpos($key, 'prep')) {
            if($field) {
                $prep++;
            }
        }
        if(strpos($key, 'security')) {
            if($field) {
                $security++;
            }
        }
        if(strpos($key, 'launch')) {
            if($field) {
                $launch++;
            }
        }
    }

    ?>
    <table class="wp-list-table widefat fixed striped">
        <tr style="<?= $content == 7 ? 'background-color: #d7ffd7' : ''; ?>">
            <td>Content</td>
            <td><?= $content; ?> / 7</td>
        </tr>
        <tr style="<?= $design == 7 ? 'background-color: #d7ffd7' : ''; ?>">
            <td>Design</td>
            <td><?= $design; ?> / 7</td>
        </tr>
        <tr style="<?= $func == 6 ? 'background-color: #d7ffd7' : ''; ?>">
            <td>Functionality</td>
            <td><?= $func; ?> / 6</td>
        </tr>
        <tr style="<?= $seo == 10 ? 'background-color: #d7ffd7' : ''; ?>">
            <td>SEO</td>
            <td><?= $seo; ?> / 10</td>
        </tr>
        <tr style="<?= $marketing == 4 ? 'background-color: #d7ffd7' : ''; ?>">
            <td>Marketing</td>
            <td><?= $marketing; ?> / 4</td>
        </tr>
        <tr style="<?= $legal == 6 ? 'background-color: #d7ffd7' : ''; ?>">
            <td>Legal</td>
            <td><?= $legal; ?> / 6</td>
        </tr>
        <tr style="<?= $prep == 3 ? 'background-color: #d7ffd7' : ''; ?>">
            <td>Launch Preparation</td>
            <td><?= $prep; ?> / 3</td>
        </tr>
        <tr style="<?= $security == 3 ? 'background-color: #d7ffd7' : ''; ?>">
            <td>Backup & Security</td>
            <td><?= $security; ?> / 3</td>
        </tr>
        <tr style="<?= $launch == 5 ? 'background-color: #d7ffd7' : ''; ?>">
            <td>Launch</td>
            <td><?= $launch; ?> / 5</td>
        </tr>
    </table>
<?php
}

function my_custom_dashboard_widgets() {
    global $wp_meta_boxes;
     
        wp_add_dashboard_widget('db_core_checklist_status', 'DB Dev-status', 'db_core_checklist_dev_status');
    }
     
    function db_core_checklist_dev_status() {

        $d1 = get_field('db_core_settings_title_checklist_group', 'options');

        $content = 0;
        $design = 0;
        $func = 0;
        $seo = 0;
        $marketing = 0;
        $legal = 0;
        $prep = 0;
        $security = 0;
        $launch = 0;

        $total = 0;
    
        foreach($d1 as $key => $field) {
            if(strpos($key, 'content')) {
                if($field) {
                    $content++;
                }
            }
            if(strpos($key, 'design')) {
                if($field) {
                    $design++;
                }
            }
            if(strpos($key, 'functionality')) {
                if($field) {
                    $func++;
                }
            }
            if(strpos($key, 'seo')) {
                if($field) {
                    $seo++;
                }
            }
            if(strpos($key, 'marketing')) {
                if($field) {
                    $marketing++;
                }
            }
            if(strpos($key, 'legal')) {
                if($field) {
                    $legal++;
                }
            }
            if(strpos($key, 'prep')) {
                if($field) {
                    $prep++;
                }
            }
            if(strpos($key, 'security')) {
                if($field) {
                    $security++;
                }
            }
            if(strpos($key, 'launch')) {
                if($field) {
                    $launch++;
                }
            }
        }

        $total = $content + $design + $func + $seo + $marketing + $legal + $prep + $security + $launch;

        $project_link = get_field('db_core_project_link', 'options');
    ?>
    <div class="dev-status-wrapper">
        <div class="db-header">
        <div class="health-check-title-section site-health-progress-wrapper orange">
            <div class="site-health-progress">
                <svg role="img" aria-hidden="true" focusable="false" width="100%" height="100%" viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <circle r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle>
                    <circle id="bar" r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0" style="stroke-dashoffset: 226.195px;"></circle>
                </svg>
            </div>
            <div class="site-health-label" style="font-weight:bold; margin-left:10px;"><?= $total; ?> out of 51 completed</div>
        </div>
        </div>
        <table class="wp-list-table widefat fixed striped">
            <tr style="<?= $content == 7 ? 'background-color: #d7ffd7' : ''; ?>">
                <td>Content</td>
                <td><?= $content; ?> / 7</td>
            </tr>
            <tr style="<?= $design == 7 ? 'background-color: #d7ffd7' : ''; ?>">
                <td>Design</td>
                <td><?= $design; ?> / 7</td>
            </tr>
            <tr style="<?= $func == 6 ? 'background-color: #d7ffd7' : ''; ?>">
                <td>Functionality</td>
                <td><?= $func; ?> / 6</td>
            </tr>
            <tr style="<?= $seo == 10 ? 'background-color: #d7ffd7' : ''; ?>">
                <td>SEO</td>
                <td><?= $seo; ?> / 10</td>
            </tr>
            <tr style="<?= $marketing == 4 ? 'background-color: #d7ffd7' : ''; ?>">
                <td>Marketing</td>
                <td><?= $marketing; ?> / 4</td>
            </tr>
            <tr style="<?= $legal == 6 ? 'background-color: #d7ffd7' : ''; ?>">
                <td>Legal</td>
                <td><?= $legal; ?> / 6</td>
            </tr>
            <tr style="<?= $prep == 3 ? 'background-color: #d7ffd7' : ''; ?>">
                <td>Launch Preparation</td>
                <td><?= $prep; ?> / 3</td>
            </tr>
            <tr style="<?= $security == 3 ? 'background-color: #d7ffd7' : ''; ?>">
                <td>Backup & Security</td>
                <td><?= $security; ?> / 3</td>
            </tr>
            <tr style="<?= $launch == 5 ? 'background-color: #d7ffd7' : ''; ?>">
                <td>Launch</td>
                <td><?= $launch; ?> / 5</td>
            </tr>
        </table>
        <div style="padding:10px 0px; display:flex; justify-content:space-between;" class="db-footer">

            <?php if($project_link) { ?>
                <a href="<?= $project_link; ?>" target="_blank">Open project</a>
            <?php } ?>

            <a href="<?= admin_url('tools.php'); ?>?page=db-core-settings">Open settings</a>
        </div>
    </div>
    <?php
}