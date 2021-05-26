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
            'name' => 'done_1',
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
            'name' => 'done_2',
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
            'name' => 'done_3',
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
            'name' => 'done_4',
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
            'name' => 'done_5',
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
            'name' => 'done_6',
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
            'name' => 'done_7',
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
        /**
         * TAB // SEO
         */
        array(
            'key' => 'db_core_settings_title_seo',
            'label' => 'SEO',
            'type' => 'tab',
        ),
        /**
         * TAB // MARKETING
         */
        array(
            'key' => 'db_core_settings_title_marketing',
            'label' => 'Marketing',
            'type' => 'tab',
        ),
        /**
         * TAB // LEGAL
         */
        array(
            'key' => 'db_core_settings_title_legal',
            'label' => 'Legal',
            'type' => 'tab',
        ),
        /**
         * TAB // LAUNCH PREPARATION
         */
        array(
            'key' => 'db_core_settings_title_launch_prep',
            'label' => 'Launch preparation',
            'type' => 'tab',
        ),
        /**
         * TAB // SECURITY
         */
        array(
            'key' => 'db_core_settings_title_security',
            'label' => 'Backup & Security',
            'type' => 'tab',
        ),
        /**
         * TAB // LAUNCH
         */
        array(
            'key' => 'db_core_settings_title_launch',
            'label' => 'Launch',
            'type' => 'tab',
        ),
    );

    return $checklist;
}