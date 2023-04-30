<?php


add_shortcode('class_preview', 'class_preview_function');
function class_preview_function($args)
{
    ob_start();
    ?>
    <style>
    @font-face {
        font-family: "avenir-next-lt-pro-r";
        font-weight: 400;
        font-style: normal;
        src: url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Regular.eot");
        src: url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Regular.woff") format("woff"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Regular.woff2") format("woff2"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Regular.ttf") format("ttf"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Regular.otf") format("opentype"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Regular.svg#AvenirNextLTPro-Regular") format("svg");
    }
    @font-face {
        font-family: "avenir-next-lt-pro-r";
        font-weight: 600;
        font-style: normal;
        src: url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Semibold.eot");
        src: url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Semibold.woff") format("woff"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Semibold.woff2") format("woff2"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Semibold.ttf") format("ttf"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Semibold.otf") format("opentype"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Semibold.svg#AvenirNextLTPro-Semibold") format("svg");
    }

    @font-face {
        font-family: "avenir-next-lt-pro-r";
        font-weight: 400;
        font-style: italic;
        src: url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Itatic.eot");
        src: url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Itatic.woff") format("woff"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Itatic.woff2") format("woff2"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Itatic.ttf") format("ttf"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Itatic.otf") format("opentype"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-Itatic.svg#AvenirNextLTPro-It") format("svg");
    }


    @font-face {
        font-family: "avenir-next-lt-pro-r";
        font-weight: 700;
        font-style: normal;
        src: url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-DemiBold.eot");
        src: url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-DemiBold.woff") format("woff"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-DemiBold.woff2") format("woff2"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-DemiBold.ttf") format("ttf"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-DemiBold.otf") format("opentype"),
        url("/wp-content/themes/eternumultra/assets/avenir/AvenirNext-DemiBold.svg#AvenirNext-DemiBold") format("svg");
    }

        * {
            box-sizing: border-box;
            font-family: 'avenir-next-lt-pro-r', 'Arial', sans-serif !important;
        }

        .main-wrapper{
            width: 1280px;
            margin: 0 auto;
            margin-top: 50px;
            border: 1px solid #000;
            padding: 40px;
        }

        .dashboard-user{
            float: left;
            width: calc(70% - 35px);
            margin-right: 35px;
            background: #F5F7F7;
            box-shadow: 1px 1px 3px 0.5px rgb(0 0 0 / 10%);
            border-radius: 12px;
            padding: 10px;
        }

        .onboarding-video{
            float: left;
            width: calc(70% - 35px);
            margin-right: 35px;
            padding: 0;
        }

        .dashboard-user-left {
            float: left;
            padding-left: 70px;
            position: relative;
            width: calc(100% - 220px);
        }

        .user-avatar {
            width: 60px;
            height: 60px;
            margin-right: 10px;
            border-radius: 50%;
            position: absolute;
            float: left;
            left: 0;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            background-image: url(/wp-content/uploads/2022/09/user-default.png);
        }

        .dashboard-user-left h2 {
            display: block;
            line-height: 1;
            margin: 0 0 6px 0;
            padding-top: 9px;
            position: relative;
            font-family: 'avenir-next-lt-pro-r', sans-serif !important;
            font-size: 22.5px;
            font-weight: 600;
            color: #000;
        }

        .dashboard-user-left h3 {
            display: block;
            line-height: 1;
            margin: 0;
            padding: 0;
            font-family: 'avenir-next-lt-pro-r', sans-serif !important;
            font-size: 13px;
            font-weight: 600;
            color: #000;
        }

        .dashboard-user-right {
            float: right;
            width: 220px;
            padding-top: 12px;
        }

        .week-item {
            float: left;
            width: calc(100% / 7);
        }

        .week-item.current {
            position: relative;
        }

        .week-item label {
            display: block;
            font-size: 10px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 12px;
            z-index: 2;
            position: relative;
        }

        .week-item span {
            display: block;
            font-size: 9px;
            font-weight: 600;
            text-align: center;
            background: #fff;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            line-height: 23px;
            margin: 0 auto;
            z-index: 2;
            position: relative;
        }

        .week-item.current:before {
            content: '';
            display: block;
            position: absolute;
            width: calc(100% - 4px);
            height: calc(100% + 12px);
            background: #0047FF;
            border-radius: 19px;
            z-index: 1;
            left: 2px;
            top: -9px;
        }

        .week-item.current label {
            color: #fff;
        }

        .week-item.current span {
            background: rgba(94, 139, 255, 0.99);
            color: #fff;
        }

        .main-wrapper:after,
        .onboarding-video:after{
            content: '';
            display: block;
            clear: both;
        }

        .onboarding-video iframe{
            display: block;
            width: 100%;
            height: 452px;
            border-radius: 20px;
            border: none !important;
            background: #000;
            margin: 0 0 40px 0;
        }

        .video-left-content{
            float: left;
            width: 65%;
        }

        .video-right-content{
            float: left;
            width: 35%;
        }

        .description-wrapper{
            white-space: break-spaces;
            color: rgba(0,0,0,0.8);
            font-size: 15.5px;
            padding-right: 20px;
            line-height: 20px;
        }

        .onboarding-video h2{
            margin: 0 0 25px 0;
            font-size: 24px;
        }

        .onboarding-video h3{
            font-size: 17px;
            margin: 0 0 32px 0;
            font-weight: 600;
        }

        .resource-link{
            position: relative;
            border: 1px solid #7abdec;
            background: #fff;
            color: #7abdec;
            padding: 8px 15px;
            display: block;
            text-align: center;
            text-decoration: none !important;
            transition: 0.4s all;
            margin: 0 0 15px 0;
            border-radius: 5px;
        }

        .resource-link:hover,
        .resource-link:focus{
            background: #edf6ff;
            border: 1px solid #edf6ff;
        }

        .resource-link:after{
            content: '';
            display: inline-block;
            width: 17px;
            height: 17px;
            position: relative;
            top: -2px;
            margin-left: 8px;
            vertical-align: middle;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            background-image: url(/wp-content/themes/eternumultra/assets/img/step-link-icon2.png);
        }

        .checklist-wrapper{
            float: left;
            width: 30%;
            text-align: center;
            background: linear-gradient(305.94deg, rgba(140, 144, 255, 0.13) 11.58%, rgba(233, 234, 255, 0.11) 131.25%);
            box-shadow: 1px 1px 3px 0.5px rgb(10 19 255 / 15%);
            border-radius: 12px;
            padding: 10px;
        }

        .stats-wrapper{
            position: relative;
            background: radial-gradient(60% 60% at 50% 50%, rgba(72, 123, 255, 0.99) 14.58%, #531DEB 59.9%, #A21AE2 94.79%);
            width: 110px;
            height: 110px;
            border-radius: 50%;
            display: block;
            margin: 0 auto;
        }

        .stats-wrapper:before {
            content: '';
            display: block;
            clear: both;
            position: absolute;
            width: calc(100% - 16px);
            height: calc(100% - 16px);
            top: 8px;
            left: 8px;
            background-color: #f2f2ff;
            border-radius: 50%;
            z-index: 2;
        }

        .stats-wrapper:after {
            content: '';
            display: block;
            clear: both;
            position: absolute;
            width: calc(100% + 0px);
            height: calc(100% + 0px);
            top: 0;
            left: 0;
            background: conic-gradient(transparent calc(var(--ratio) * 360deg), #D9D9D9 calc(var(--ratio) * 360deg) 360deg);
            border-radius: 50%;
            z-index: 1;
        }

        .stats-wrapper span{
            position: absolute;
            z-index: 111;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            color: #531DEB;
            font-size: 30px;
            text-align: center;
            font-weight: 600;
        }

        .stats-wrapper .numbers{
            font-style: normal !important;
        }

        .checklist-wrapper h3{
            text-align: center;
            font-weight: 600;
            font-size: 17px;
        }

        .popup-wrapper{
            position: fixed;
            z-index: 9999;
            background: rgba(0,0,0,0.6);
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: none;
        }

        .popup-wrapper.show{
            display: block;
        }

        .popup-popup{
            display: block;
            width: 420px;
            min-height: 200px;
            background: #F5F7F7;
            box-shadow: 1px 1px 3px 0.5px rgb(0 0 0 / 10%);
            border-radius: 15px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            padding: 15px;
            box-sizing: border-box;
        }

        .popup-popup h2{
            text-align: center;
        }

        .congrats-image{
            display: block;
            margin: 0 auto 30px;
            width: 212px;
            height: 211px;
            vertical-align: middle;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            background-image: url(/wp-content/themes/eternumultra/assets/img/popup-congrats.png);
        }

        .congrats-text{
            white-space: break-spaces;
            text-align: center;
            margin: 0 0 20px;
        }

        .popup-close{
            text-decoration: none;
            font-size: 17px;
            position: absolute;
            right: 15px;
            top: 10px;
            z-index: 1;
            border: none !important;
            box-shadow: none !important;
            outline: none !important;
            color: #000;
            transition: 0.4s all;
        }

        .popup-close:hover,
        .popup-close:focus{
            color: #005de9;
        }

        .complete-class{
            width: 100%;
            height: 38px;
            margin: 12px 0 0 0 !important;
            line-height: 1;
            padding: 6px 10px;
            transition: 0.4s all !important;
            cursor: pointer;
            border-radius: 5px;
            background: linear-gradient(187.02deg, rgba(173, 211, 255, 0.5) -174.74%, rgba(94, 139, 255, 0.495) -60.77%, rgba(39, 74, 255, 0.5) 123.01%);
            border: none !important;
            box-shadow: 1px 3.63636px 3.63636px 2px rgb(0 0 0 / 4%);
            color: #fff;
            font-weight: 400;
            font-size: 16px;
            letter-spacing: 0.2px;
            position: relative;
        }

        .complete-class:before{
            content: '';
            display: block;
            position: absolute;
            z-index: 222;
            width: 100%;
            height: 100%;
            border-radius: 5px;
            background: rgba(0,0,0,0.33);
            left: 0;
            top: 0;
        }

        .complete-class:after{
            content: '';
            display: block;
            clear: both;
            position: absolute;
            z-index: 111;
            right: 20px;
            top: 9px;
            width: 15px;
            height: 18px;
            vertical-align: middle;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            background-image: url(/wp-content/themes/eternumultra/assets/img/button-locked.png);
        }

        .complete-class.done{
            background: linear-gradient(187.02deg, #ADD3FF -174.74%, rgba(94, 139, 255, 0.99) -60.77%, #274AFF 123.01%);
        }


        .complete-class.done:after,
        .complete-class.done:before{
            display: none;
        }

        .complete-class.done:hover,
        .complete-class.done:focus{
            opacity: 0.7;
        }

        .hidden{
            display: none;
        }

        .checklist-item{
            display: block;
            background: transparent;
            border: none !important;
            box-shadow: none !important;
            outline: none !important;
            padding: 0 10px;
            font-size: 15.5px;
            font-weight: 600;
            height: 20px;
            line-height: 20px;
            margin: 0 0 10px;
            width: 100%;
            text-align: left;
            position: relative;
        }

        .checklist-item a{
            text-decoration: none !important;
            color: #000;
            transition: 0.4s all;
        }

        .checklist-item a:hover,
        .checklist-item a:focus{
            color: #0029ff;
        }

        .checklist-item.completed span{
            text-decoration: line-through !important;
        }

        .checklist-item.completed a{
            text-decoration: line-through !important;
        }

        .checklist-item:after{
            content: '';
            display: none;
            position: absolute;
            right: 12px;
            top: 2px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-image: url(/wp-content/plugins/habit-planner/assets/img2/completed.png);
            background-size: contain;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            cursor: pointer;
        }

        .checklist-item.completed:after{
            display: block;
        }

        .checklist-item:before{
            content: '';
            display: block;
            position: absolute;
            right: 12px;
            top: 2px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #D9D9D9;
            cursor: pointer;
        }

        .checklist-item.completed:before{
            background: #6BDE11;
        }

        .checklist-labels{
            padding: 4px 10px;
            background: #fff;
            border-radius: 15px;
            margin: 12px 0;
            font-weight: 600;
        }

        .checklist-labels:after{
            content: '';
            display: block;
            clear: both;
        }

        .checklist-labels p:nth-of-type(1){
            float: left;
            font-size: 15.5px;
            margin: 0;
        }

        .checklist-labels p:nth-of-type(2){
            float: right;
            font-size: 15.5px;
            margin: 0;
        }
    </style>
    <div class="main-wrapper">
        <?Php
        $class_id = 0;
        $class_number = 0;
        $class_init = 1;
        if (isset($_GET['id'])){
            $class_id = $_GET['id'];
        }
        if (isset($_GET['number'])){
            $class_number = $_GET['number'];
        }
        if (isset($_GET['class_init'])){
            $class_init = $_GET['class_init'];
        }

        if (!$class_id && !$class_number){
            ?>
            <p style="text-align: center">Class not found</p>
            <?php
        }
        else{
            $class_data = get_post_meta($class_id, 'class_number_'.$class_number, true);
            if ($class_data['onboarding'] == 'on'){
                if ($class_data['steps'][$class_init - 1]['video_enable'] == 'on'){
                    ?>
                    <div class="onboarding-video">
                        <?php

                        /*if ($video_title = $class_data['steps'][$class_init - 1]['video_title']){
                            */?><!--
                            <h2><?php /*echo $video_title; */?></h2>
                            --><?php
                        /* }*/


                        $video_url = $class_data['steps'][$class_init - 1]['video_url'];

                        if (strpos($video_url, 'loom.com') !== false){
                            $video_url = str_replace('/share/','/embed/',$video_url);
                        }
                        if (strpos($video_url, 'wistia.com') !== false){
                            $video_url = str_replace('/medias/','/embed/medias/',$video_url);
                        }

                        $video_description = $class_data['steps'][$class_init - 1]['video_description'];

                        $step_links = $class_data['steps'][$class_init - 1]['step_links'];

                        ?>
                        <iframe src="<?php echo $video_url; ?>"></iframe>
                        <div class="video-left-content">
                            <h3>DESCRIPTION</h3>
                            <div class="description-wrapper"><?php echo $video_description; ?></div>
                        </div>
                        <div class="video-right-content">
                            <h3>RESOURCES</h3>
                            <?php
                            if ($step_links){
                                foreach ($step_links as $link){
                                    ?>
                                    <a class="resource-link" target="_blank" href="<?php echo $link['link_url']; ?>"><?php echo $link['link_text']; ?></a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
                else{
                    ?>
                    <div class="dashboard-user">
                        <div class="dashboard-user-top">
                            <div class="dashboard-user-left">
                                <?php
                                $avatar_blob = get_user_meta(get_current_user_id(),'upload-image-blob',true);
                                $is_today_N = date('N',time());
                                ?>
                                <div class="user-avatar" <?php echo $avatar_blob ? 'style="background-image: url('.$avatar_blob.')"': ''; ?>></div>
                                <h2><?php echo ($f_name = get_user_meta(get_current_user_id(),'first_name',true)) ? $f_name : 'User'; ?></h2>
                                <h3>Total Points: <?php echo 0; ?></h3>
                            </div>
                            <div class="dashboard-user-right">
                                <div class="week-item <?php if ($is_today_N == 1) echo 'current'; ?>">
                                    <label>M</label>
                                    <span><?php echo date('d',strtotime('Monday this week ') )?></span>
                                </div>
                                <div class="week-item <?php if ($is_today_N == 2) echo 'current'; ?>">
                                    <label>T</label>
                                    <span><?php echo date('d',strtotime('Tuesday this week ') )?></span>
                                </div>
                                <div class="week-item <?php if ($is_today_N == 3) echo 'current'; ?>">
                                    <label>W</label>
                                    <span><?php echo date('d',strtotime('Wednesday this week ') )?></span>
                                </div>
                                <div class="week-item <?php if ($is_today_N == 4) echo 'current'; ?>">
                                    <label>T</label>
                                    <span><?php echo date('d',strtotime('Thursday this week ') )?></span>
                                </div>
                                <div class="week-item <?php if ($is_today_N == 5) echo 'current'; ?>">
                                    <label>F</label>
                                    <span><?php echo date('d',strtotime('Friday this week ') )?></span>
                                </div>
                                <div class="week-item <?php if ($is_today_N == 6) echo 'current'; ?>">
                                    <label>S</label>
                                    <span><?php echo date('d',strtotime('Saturday this week ') )?></span>
                                </div>
                                <div class="week-item <?php if ($is_today_N == 7) echo 'current'; ?>">
                                    <label>S</label>
                                    <span><?php echo date('d',strtotime('Sunday this week ') )?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }

                $steps_count = 0;
                $steps_done = 0;
                $steps_percent = 0;
                $step_steps = $class_data['steps'][$class_init - 1]['step_steps'];
                foreach ($step_steps as $step_item){
                    if ($step_item['step_text']){
                        $steps_count++;
                        if ($step_item['step_type'] == 'Auto'){
                           $steps_done++;
                        }
                    }
                }

                if ($steps_count == 0){
                    $steps_percent = 100;
                }
                else{
                    $steps_percent = round($steps_done / $steps_count * 100);
                }
                ?>
                <div class="checklist-wrapper">
                    <div class="stats-wrapper" style="--ratio: <?php echo $steps_percent / 100 ; ?>;">
                        <span><i class="numbers"><?php echo $steps_percent; ?></i>%</span>
                    </div>
                    <?php
                    $checklist_title = $class_data['steps'][$class_init - 1]['checklist_title'];
                    $button_text = $class_data['steps'][$class_init - 1]['checklist_button_text'];
                    $popup_text = $class_data['steps'][$class_init - 1]['checklist_popup_text'];
                    ?>
                    <h3><?php echo $checklist_title; ?></h3>
                    <div class="checklist-labels">
                        <p>Actions</p>
                        <p>Status</p>
                    </div>
                    <?php
                    $steps_count = 0;
                    $steps_done = 0;

                    //echo $step_item['step_program'];
                    //echo $step_item['step_module'];

                    foreach ($step_steps as $step_item){
                        if ($step_text = $step_item['step_text']){
                            ?>
                            <button class="checklist-item <?php if ($step_item['step_type'] == 'Auto') echo 'auto-completed completed';?>">
                                <?php
                                    if ($step_item['step_type'] == 'Module'){
                                        ?>
                                        <span><?php echo $step_text; ?></span>
                                        <?php
                                    }
                                    else{
                                        if ($step_url = $step_item['step_url']){
                                            ?>
                                            <a target="_blank" href="<?php echo $step_url; ?>"><?php echo $step_text; ?></a>
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <span><?php echo $step_text; ?></span>
                                            <?php
                                        }
                                    }
                                ?>
                            </button>
                            <?php
                        }
                    }
                    ?>
                    <button class="complete-class <?php if ($steps_percent == 100) echo 'done'; ?>"><?php echo $button_text; ?></button>
                </div>
                <div class="steps-current hidden"><?php echo $class_init; ?></div>
                <div class="steps-count hidden"><?php echo count($class_data['steps']); ?></div>
                <div class="popup-wrapper">
                    <div class="popup-popup">
                        <a href="#" class="popup-close">X</a>
                        <h2>Congratulations!</h2>
                        <div class="congrats-image"></div>
                        <div class="congrats-text"><?php echo $popup_text; ?></div>
                    </div>
                </div>
                <script type="text/javascript" src="https://www.eternumultra.com/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=jquery-core,jquery-migrate,utils&amp;ver=6.0.2"></script>
                <script>
                    (function ($) {
                        $(document).on('click','.complete-class.done',function(){
                            $('.popup-wrapper').addClass('show');
                        });

                        $(document).on('click','.checklist-item:not(.auto-completed)',function(){
                            $(this).toggleClass('completed');

                            var all_count = $('.checklist-item').length;
                            var completed_count = $('.checklist-item.completed').length;

                            var percent = completed_count/all_count;
                            $('.stats-wrapper').attr('style','--ratio: '+percent);
                            $('.stats-wrapper .numbers').text(Math.round(percent * 100));

                            if (all_count == completed_count){
                                $('.complete-class').addClass('done');
                            }
                            else{
                                $('.complete-class').removeClass('done');
                            }
                        });

                        $(document).on('click','.checklist-item a',function(e){
                            e.stopPropagation();
                        });


                        $(document).on('click','.popup-wrapper, .popup-wrapper .popup-close',function(e){
                            var current = parseInt($('.steps-current').text());
                            var all = parseInt($('.steps-count').text());
                            if (current < all){
                                current++;
                                var pageURL = $(location).attr("href");
                                pageURL = pageURL.split('class_init')[0];
                                location.href = pageURL + '&class_init='+current;
                            }
                            else{
                                $('.popup-wrapper').removeClass('show');
                            }
                            e.preventDefault();
                        })

                        $(document).on('click','.popup-popup',function(e){
                            e.stopPropagation();
                        });


                    })(jQuery);
                </script>
                <?php
            }
            else{
                ?>
                <p style="text-align: center">Class is not onboarding</p>
                <?php
            }
        }
    $code = ob_get_clean();

    return $code;
}

add_action('init', 'create_new_post_types');
function create_new_post_types()
{
    register_post_type('memberships_product',
        array(
            'labels' => array(
                'name' => __('memberships_product'),
                'singular_name' => __('memberships_product')
            ),
            'public' => true,
            'exclude_from_search' => true,
            'show_in_admin_bar' => false,
            'show_in_nav_menus' => false,
            'publicly_queryable' => false,
            'query_var' => true
        )
    );

    register_post_type('memberships_template',
        array(
            'labels' => array(
                'name' => __('memberships_template'),
                'singular_name' => __('memberships_template')
            ),
            'public' => true,
            'exclude_from_search' => true,
            'show_in_admin_bar' => false,
            'show_in_nav_menus' => false,
            'publicly_queryable' => false,
            'query_var' => true
        )
    );

    register_post_type('memberships_sub',
        array(
            'labels' => array(
                'name' => __('memberships_sub'),
                'singular_name' => __('memberships_sub')
            ),
            'public' => true,
            'exclude_from_search' => true,
            'show_in_admin_bar' => false,
            'show_in_nav_menus' => false,
            'publicly_queryable' => false,
            'query_var' => true
        )
    );

    register_post_type('memberships_program',
        array(
            'labels' => array(
                'name' => __('memberships_program'),
                'singular_name' => __('memberships_program')
            ),
            'public' => true,
            'exclude_from_search' => true,
            'show_in_admin_bar' => false,
            'show_in_nav_menus' => false,
            'publicly_queryable' => false,
            'query_var' => true
        )
    );
}


add_action('admin_menu', 'remove_new_menu_items');
function remove_new_menu_items()
{
    remove_menu_page('edit.php?post_type=memberships_product');
    remove_menu_page('edit.php?post_type=memberships_template');
    remove_menu_page('edit.php?post_type=memberships_sub');
    remove_menu_page('edit.php?post_type=memberships_program');
}

require_once( dirname(__FILE__) . '/stripe-php-master/init.php' );



add_action('wp_ajax_save_memberships_template', 'save_memberships_template');
function save_memberships_template()
{
    $title = '';
    $payment_once = '';
    $membership_ids = '';
    $subscription_id = '';
    $payment_plan_on = '';
    $payment_plan_price = '';
    $payment_plan_number_cycles = '';
    $payment_plan_period = '';
    $payment_plan_starting_on = '';
    $subscription_on = '';
    $include_trial = '';
    $trial_period = '';
    $trial_period_type = '';

    if (isset($_POST['title'])){
        $title = $_POST['title'];
    }
    if (isset($_POST['payment_once'])){
        $payment_once = $_POST['payment_once'];
    }
    if (isset($_POST['membership_ids'])){
        $membership_ids = implode(',',$_POST['membership_ids']);
    }
    if (isset($_POST['subscription_id'])){
        $subscription_id = $_POST['subscription_id'];
    }
    if (isset($_POST['payment_plan_on'])){
        $payment_plan_on = $_POST['payment_plan_on'];
    }
    if (isset($_POST['payment_plan_price'])){
        $payment_plan_price = $_POST['payment_plan_price'];
    }
    if (isset($_POST['payment_plan_number_cycles'])){
        $payment_plan_number_cycles = $_POST['payment_plan_number_cycles'];
    }
    if (isset($_POST['payment_plan_period'])){
        $payment_plan_period = $_POST['payment_plan_period'];
    }
    if (isset($_POST['payment_plan_starting_on'])){
        $payment_plan_starting_on = $_POST['payment_plan_starting_on'];
    }
    if (isset($_POST['subscription_on'])){
        $subscription_on = $_POST['subscription_on'];
    }
    if (isset($_POST['include_trial'])){
        $include_trial = $_POST['include_trial'];
    }
    if (isset($_POST['trial_period'])){
        $trial_period = $_POST['trial_period'];
    }
    if (isset($_POST['trial_period_type'])){
        $trial_period_type = $_POST['trial_period_type'];
    }

    if (current_user_can('administrator')) {
        $post_data = array(
            'post_author' => get_current_user_id(),
            'post_name' => 'memberships_template',
            'post_title' => 'memberships_template',
            'post_status' => 'publish',
            'post_type' => 'memberships_template'
        );
        $created_post_id = wp_insert_post($post_data);

        update_post_meta($created_post_id, 'title', $title);
        update_post_meta($created_post_id, 'payment_once', $payment_once);
        update_post_meta($created_post_id, 'membership_ids', $membership_ids);
        update_post_meta($created_post_id, 'subscription_id', $subscription_id);
        update_post_meta($created_post_id, 'payment_plan_on', $payment_plan_on);
        update_post_meta($created_post_id, 'payment_plan_price', $payment_plan_price);
        update_post_meta($created_post_id, 'payment_plan_number_cycles', $payment_plan_number_cycles);
        update_post_meta($created_post_id, 'payment_plan_period', $payment_plan_period);
        update_post_meta($created_post_id, 'payment_plan_starting_on', $payment_plan_starting_on);
        update_post_meta($created_post_id, 'subscription_on', $subscription_on);
        update_post_meta($created_post_id, 'include_trial', $include_trial);
        update_post_meta($created_post_id, 'trial_period', $trial_period);
        update_post_meta($created_post_id, 'trial_period_type', $trial_period_type);

        echo $created_post_id;
    }
    die();
}

add_action('wp_ajax_stripe_make_payment', 'stripe_make_payment');
function stripe_make_payment()
{
    $amount = '';
    $membership_ids = '';

    $first_name = '';
    $last_name = '';
    $email = '';
    $phone = '';

    $card_number = '';
    $card_month = '';
    $card_year = '';
    $card_csv = '';

    $future_on = '';
    $future_price = '';
    $future_cycles = '';
    $future_period_days = '';
    $future_start_on = '';

    $subscription_on = '';
    $subscription_id = '';
    $include_trial_on = '';
    $trial_period_number = '';
    $trial_period_type = '';

    $admin_id = '';

    if (isset($_POST['amount'])){
        $amount = $_POST['amount'];
    }
    if (isset($_POST['membership_ids'])){
        $membership_ids = implode(',',$_POST['membership_ids']);
    }
    if (isset($_POST['first_name'])){
        $first_name = $_POST['first_name'];
    }
    if (isset($_POST['last_name'])){
        $last_name = $_POST['last_name'];
    }
    if (isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if (isset($_POST['phone'])){
        $phone = $_POST['phone'];
    }
    if (isset($_POST['card_number'])){
        $card_number = $_POST['card_number'];
    }
    if (isset($_POST['card_month'])){
        $card_month = $_POST['card_month'];
    }
    if (isset($_POST['card_year'])){
        $card_year = $_POST['card_year'];
    }
    if (isset($_POST['card_csv'])){
        $card_csv = $_POST['card_csv'];
    }


    if (isset($_POST['future_on'])){
        $future_on = $_POST['future_on'];
    }
    if (isset($_POST['future_price'])){
        $future_price = $_POST['future_price'];
    }
    if (isset($_POST['future_cycles'])){
        $future_cycles = $_POST['future_cycles'];
    }
    if (isset($_POST['future_period_days'])){
        $future_period_days = $_POST['future_period_days'];
    }
    if (isset($_POST['future_start_on'])){
        $future_start_on = $_POST['future_start_on'];
    }


    if (isset($_POST['subscription_on'])){
        $subscription_on = $_POST['subscription_on'];
    }
    if (isset($_POST['subscription_id'])){
        $subscription_id = $_POST['subscription_id'];
    }
    if (isset($_POST['include_trial_on'])){
        $include_trial_on = $_POST['include_trial_on'];
    }
    if (isset($_POST['trial_period_number'])){
        $trial_period_number = $_POST['trial_period_number'];
    }
    if (isset($_POST['trial_period_type'])){
        $trial_period_type = $_POST['trial_period_type'];
    }

    if (isset($_POST['admin_id'])){
        $admin_id = $_POST['admin_id'];
    }

    \Stripe\Stripe::setApiKey('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');

    $searchCustomer = Stripe\Customer::search([
        'query' => 'email:\''.$email.'\''
    ]);

    $customer_id = '';
    if ($searchCustomer->data){
        $customer_id = $searchCustomer->data[0]->id;
    }
    else{
        $customer = Stripe\Customer::create([
            'email' => $email,
            'phone' => $phone,
            'name' => $first_name.' '.$last_name,
            'description' => 'customer created automatically for membership area'
        ]);
        $customer_id = $customer->id;
    }

    $paymentMethods =  \Stripe\paymentMethod::create([
        'type' => 'card',
        'card' => [
            'number' => (string)$card_number,
            'exp_month' => (int)$card_month,
            'exp_year' => (int)$card_year,
            'cvc' => (string)$card_csv
        ]
    ]);

    if ($paymentMethods["error"]){
        die();
    }

    $stripe = new \Stripe\StripeClient(
        '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'
    );

    $paymentMethodsAttach = $stripe->paymentMethods->attach(
      $paymentMethods->id,
      ['customer' => $customer_id]
    );

    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => $amount,
        'customer' => $customer_id,
        'currency' => 'usd',
        'payment_method_types' => ['card'],
        'metadata' =>
            [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'phone' => $phone,
            ]
    ]);

    //5363542091199092 11 / 2026 882

    $paymentIntentConfirm = $stripe->paymentIntents->confirm(
        $paymentIntent->id,
        ['payment_method' => $paymentMethods->id]
    );

    $status = 'Failed';

    if ($paymentIntentConfirm->status == 'succeeded'){
        $status = 'Succeeded';

        $post_data = array(
            'post_author' => get_current_user_id(),
            'post_name' => 'single_payment',
            'post_title' => 'single_payment',
            'post_status' => 'publish',
            'post_type' => 'single_payment'
        );

        $single_payment_id = wp_insert_post($post_data);

        update_post_meta($single_payment_id, 'status', $status);
        update_post_meta($single_payment_id, 'admin_id', $admin_id);

        update_post_meta($single_payment_id, 'email', $email);
        update_post_meta($single_payment_id, 'name', $first_name.' '.$last_name);
        update_post_meta($single_payment_id, 'membership_status', 'active');
        update_post_meta($single_payment_id, 'phone', $phone);
        update_post_meta($single_payment_id, 'card_number', $card_number);

        update_post_meta($single_payment_id, 'membership_sub_ids', $membership_ids);
        update_post_meta($single_payment_id, 'amount', $amount);
        update_post_meta($single_payment_id, 'membership_type', 'Payment Plan');
        $next_payment_date = '-';
        if ($future_on == 'on'){
            $next_payment_date = date('d/m/Y', strtotime($future_start_on));
        }
        update_post_meta($single_payment_id, 'created', date('d/m/Y',time()));
        update_post_meta($single_payment_id, 'next_payment_date', $next_payment_date);

        // -----------------------------------------------

        $post_data = array(
            'post_author' => get_current_user_id(),
            'post_name' => 'single_membership',
            'post_title' => 'single_membership',
            'post_status' => 'publish',
            'post_type' => 'single_membership'
        );

        $single_membership_id = wp_insert_post($post_data);

        update_post_meta($single_membership_id, 'payment_method_id', $paymentMethods->id);
        update_post_meta($single_membership_id, 'customer_id', $customer_id);

        update_post_meta($single_membership_id, 'first_name', $first_name);
        update_post_meta($single_membership_id, 'last_name', $last_name);
        update_post_meta($single_membership_id, 'email', $email);
        update_post_meta($single_membership_id, 'phone', $phone);

        update_post_meta($single_membership_id, 'membership_status', 'active');
        update_post_meta($single_membership_id, 'admin_id', $admin_id);
        update_post_meta($single_membership_id, 'membership_sub_ids', $membership_ids);
        update_post_meta($single_membership_id, 'membership_type', 'Payment Plan');
        update_post_meta($single_membership_id, 'amount_paid', $amount);
        $amount_remaining = '-';
        if ($future_on == 'on'){
            $amount_remaining = $future_price * $future_cycles;
        }
        update_post_meta($single_membership_id, 'amount_remaining', $amount_remaining);
        $end_date = '-';
        if ($future_on == 'on'){
            $end_date = date('d/m/Y', strtotime($future_start_on) + ($future_cycles - 1) * $future_period_days * 86400);
        }
        update_post_meta($single_membership_id, 'start_date', date('d/m/Y',time()));
        update_post_meta($single_membership_id, 'next_payment_date', $next_payment_date);
        update_post_meta($single_membership_id, 'end_date', $end_date);

        update_post_meta($single_membership_id, 'future_on', $future_on);
        update_post_meta($single_membership_id, 'future_cycles_paid', 0);
        update_post_meta($single_membership_id, 'future_price', $future_price);
        update_post_meta($single_membership_id, 'future_cycles', $future_cycles);
        update_post_meta($single_membership_id, 'future_period_days', $future_period_days);
        update_post_meta($single_membership_id, 'future_start_on', strtotime($future_start_on));

        $billing_plan = '-';
        if ($future_on == 'on'){
            $billing_plan = '$'.$future_price.'/'.$future_period_days.' days';
        }
        update_post_meta($single_membership_id, 'billing_plan', $billing_plan);

        update_post_meta($single_membership_id, 'include_trial_on', '');
        update_post_meta($single_membership_id, 'trial_days', '');

        update_post_meta($single_membership_id, 'related_payments_ids', $single_payment_id);


        // -----------------------------------------------
        $sub_amount = 0;

        $status_sub = '';
        $single_sub_payment_id = '';

        if ($subscription_on == 'on'){
            if ($trial_period_type == 'Days'){
                $trial_duration = 1;
            }
            else{
                $trial_duration = 7;
            }

            if (!$trial_period_number){
                $trial_period_number = 1;
            }

            $price_counter = get_post_meta($subscription_id,'price_counter',true);
            $sub_price_str = get_post_meta($subscription_id, 'subs_price_'.$price_counter, true);
            $sub_price_arr = explode('|',$sub_price_str);

            $billing_plan_sub = '$'.$sub_price_arr[1].'/'.$sub_price_arr[3];

            if (($include_trial_on == 'on') && ($trial_period_number > 0)){
                $next_sub_payment_timestamp = time() + $trial_period_number * $trial_duration * 86400;
                $next_payment_date_sub = date('d/m/Y', $next_sub_payment_timestamp);
            }
            else{
                $sub_amount = $sub_price_arr[1] * 100;
                if (!$sub_amount){
                    $sub_amount = 50;
                }
                $sub_period = str_replace(' days','',$sub_price_arr[3]);
                $next_sub_payment_timestamp = time() + $sub_period * 86400;
                $next_payment_date_sub = date('d/m/Y', $next_sub_payment_timestamp);

                $paymentIntent_sub = \Stripe\PaymentIntent::create([
                    'amount' => $sub_amount,
                    'customer' => $customer_id,
                    'currency' => 'usd',
                    'payment_method_types' => ['card'],
                    'metadata' =>
                        [
                            'first_name' => $first_name,
                            'last_name' => $last_name,
                            'email' => $email,
                            'phone' => $phone,
                        ]
                ]);

                $paymentIntentConfirm_sub = $stripe->paymentIntents->confirm(
                    $paymentIntent_sub->id,
                    ['payment_method' => $paymentMethods->id]
                );

                $status_sub = 'Failed';
                $membership_status_sub = 'inactive';
                if ($paymentIntentConfirm_sub->status == 'succeeded'){
                    $status_sub = 'Succeeded';
                $membership_status_sub = 'active';
                }

                $post_data_sub = array(
                    'post_author' => get_current_user_id(),
                    'post_name' => 'single_payment',
                    'post_title' => 'single_payment',
                    'post_status' => 'publish',
                    'post_type' => 'single_payment'
                );

                $single_sub_payment_id = wp_insert_post($post_data_sub);

                update_post_meta($single_sub_payment_id, 'status', $status_sub);
                update_post_meta($single_sub_payment_id, 'admin_id', $admin_id);

                update_post_meta($single_sub_payment_id, 'email', $email);
                update_post_meta($single_sub_payment_id, 'name', $first_name.' '.$last_name);
                update_post_meta($single_sub_payment_id, 'membership_status', $membership_status_sub);
                update_post_meta($single_sub_payment_id, 'phone', $phone);
                update_post_meta($single_sub_payment_id, 'card_number', $card_number);

                update_post_meta($single_sub_payment_id, 'membership_sub_ids', $subscription_id);
                update_post_meta($single_sub_payment_id, 'amount', $sub_amount);
                update_post_meta($single_sub_payment_id, 'membership_type', 'Subscription');
                update_post_meta($single_sub_payment_id, 'created', date('d/m/Y',time()));
                update_post_meta($single_sub_payment_id, 'next_payment_date', $next_payment_date_sub);
            }


            // -----------------------------------------------

            $post_data_sub = array(
                'post_author' => get_current_user_id(),
                'post_name' => 'single_membership',
                'post_title' => 'single_membership',
                'post_status' => 'publish',
                'post_type' => 'single_membership'
            );

            $single_sub_membership_id = wp_insert_post($post_data_sub);

            update_post_meta($single_sub_membership_id, 'payment_method_id', $paymentMethods->id);
            update_post_meta($single_sub_membership_id, 'customer_id', $customer_id);

            update_post_meta($single_sub_membership_id, 'first_name', $first_name);
            update_post_meta($single_sub_membership_id, 'last_name', $last_name);
            update_post_meta($single_sub_membership_id, 'email', $email);
            update_post_meta($single_sub_membership_id, 'phone', $phone);

            update_post_meta($single_sub_membership_id, 'membership_status', 'active');
            update_post_meta($single_sub_membership_id, 'admin_id', $admin_id);
            update_post_meta($single_sub_membership_id, 'membership_sub_ids', $subscription_id);
            update_post_meta($single_sub_membership_id, 'membership_type', 'Subscription');
            update_post_meta($single_sub_membership_id, 'amount_paid', '-');
            update_post_meta($single_sub_membership_id, 'amount_remaining', '-');
            update_post_meta($single_sub_membership_id, 'start_date', date('d/m/Y',time()));
            update_post_meta($single_sub_membership_id, 'next_payment_date', $next_payment_date_sub);
            update_post_meta($single_sub_membership_id, 'end_date', '-');

            update_post_meta($single_sub_membership_id, 'future_on', '');
            update_post_meta($single_sub_membership_id, 'future_cycles_paid', 0);
            update_post_meta($single_sub_membership_id, 'future_price', '');
            update_post_meta($single_sub_membership_id, 'future_cycles', '');
            update_post_meta($single_sub_membership_id, 'future_period_days', '');
            update_post_meta($single_sub_membership_id, 'future_start_on', '');

            update_post_meta($single_sub_membership_id, 'billing_plan', $billing_plan_sub);

            update_post_meta($single_sub_membership_id, 'include_trial_on', $include_trial_on);
            update_post_meta($single_sub_membership_id, 'trial_days', $trial_duration * $trial_period_number);

            update_post_meta($single_sub_membership_id, 'related_payments_ids', $single_sub_payment_id);

        }

        // -----------------------------------------------

        if ($status_sub == 'Succeeded'){
            $together_amount = $amount + $sub_amount;
        }
        else{
            $together_amount = $amount;
        }

        $args = array(
            'post_type' => 'customer_payments',
            'posts_per_page' => 9999,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_status' => array('publish', 'draft', 'trash'),
            'meta_query'     => [
                [
                    'key'      => 'email',
                    'value'    => $email,
                ]
            ],
        );
        $query = new WP_Query($args);
        $found_customers = $query->found_posts;

        if ($found_customers > 0){
            if ($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();
                    $curr_id = get_the_ID();
                    $new_amount = get_post_meta($curr_id, 'total_amount', true);
                    $new_amount += $together_amount;

                    update_post_meta($curr_id, 'admin_id', $admin_id);
                    update_post_meta($curr_id, 'total_amount', $new_amount);

                    update_post_meta($curr_id, 'membership_status', 'active');

                    update_post_meta($curr_id, 'card_number', $card_number);
                    update_post_meta($curr_id, 'card_month', $card_month);
                    update_post_meta($curr_id, 'card_year', $card_year);
                    update_post_meta($curr_id, 'card_cvc', $card_csv);

                    update_post_meta($curr_id, 'last_payment', time());
                    if ($next_payment_date !== '-'){
                        update_post_meta($curr_id, 'next_payment', $next_payment_date);
                    }
                    break;
                }
            }
            wp_reset_query();
        }
        else{
            $post_data = array(
                'post_author' => get_current_user_id(),
                'post_name' => 'customer_payments',
                'post_title' => 'customer_payments',
                'post_status' => 'publish',
                'post_type' => 'customer_payments'
            );

            $customer_post_id = wp_insert_post($post_data);

            update_post_meta($customer_post_id, 'admin_id', $admin_id);
            update_post_meta($customer_post_id, 'total_amount', $together_amount);

            update_post_meta($customer_post_id, 'email', $email);
            update_post_meta($customer_post_id, 'name', $first_name.' '.$last_name);
            update_post_meta($customer_post_id, 'membership_status', 'active');
            update_post_meta($customer_post_id, 'phone', $phone);

            update_post_meta($customer_post_id, 'card_number', $card_number);
            update_post_meta($customer_post_id, 'card_month', $card_month);
            update_post_meta($customer_post_id, 'card_year', $card_year);
            update_post_meta($customer_post_id, 'card_cvc', $card_csv);

            update_post_meta($customer_post_id, 'created', time());
            update_post_meta($customer_post_id, 'last_payment', time());
            update_post_meta($customer_post_id, 'next_payment', $next_payment_date);
        }

    }

    //echo json_encode($paymentIntentConfirm);

    die();
}

add_action('wp_ajax_membership_add_product', 'membership_add_product');
function membership_add_product()
{
    $title = '';
    $type = '';

    if (isset($_POST['title'])){
        $title = $_POST['title'];
    }
    if (isset($_POST['type'])){
        $type = $_POST['type'];
    }

    if (current_user_can('administrator')) {
        $post_data = array(
            'post_author' => get_current_user_id(),
            'post_name' => 'memberships_product',
            'post_title' => 'memberships_product',
            'post_status' => 'publish',
            'post_type' => 'memberships_product'
        );
        $created_post_id = wp_insert_post($post_data);

        update_post_meta($created_post_id, 'title', $title);
        update_post_meta($created_post_id, 'type', $type);

        echo $created_post_id;
    }

    die();
}

add_action('wp_ajax_membership_add_subscription', 'membership_add_subscription');
function membership_add_subscription()
{
    $title = '';
    $type = '';

    if (isset($_POST['title'])){
        $title = $_POST['title'];
    }
    if (isset($_POST['type'])){
        $type = $_POST['type'];
    }

    if (current_user_can('administrator')){
        $post_data = array(
            'post_author' => get_current_user_id(),
            'post_name' => 'memberships_sub',
            'post_title' => 'memberships_sub',
            'post_status' => 'publish',
            'post_type' => 'memberships_sub'
        );
        $created_post_id = wp_insert_post($post_data);

        update_post_meta($created_post_id, 'title', $title);
        update_post_meta($created_post_id, 'type', $type);

        echo $created_post_id;
    }

    die();
}


add_action('wp_ajax_membership_add_program', 'membership_add_program');
function membership_add_program()
{
    $title = '';
    $type = '';
    $program_card_url = '';
    $pillar_card_url = '';
    $available_for = '';

    if (isset($_POST['title'])){
        $title = $_POST['title'];
    }
    if (isset($_POST['type'])){
        $type = $_POST['type'];
    }
    if (isset($_POST['program_card_url'])){
        $program_card_url = $_POST['program_card_url'];
    }
    if (isset($_POST['pillar_card_url'])){
        $pillar_card_url = $_POST['pillar_card_url'];
    }
    if (isset($_POST['available_for'])){
        $available_for = $_POST['available_for'];
    }

    if (current_user_can('administrator')){
        $post_data = array(
            'post_author' => get_current_user_id(),
            'post_name' => 'memberships_program',
            'post_title' => 'memberships_program',
            'post_status' => 'publish',
            'post_type' => 'memberships_program'
        );
        $created_post_id = wp_insert_post($post_data);

        update_post_meta($created_post_id, 'title', $title);
        update_post_meta($created_post_id, 'type', $type);
        update_post_meta($created_post_id, 'program_card_url', $program_card_url);
        update_post_meta($created_post_id, 'pillar_card_url', $pillar_card_url);
        update_post_meta($created_post_id, 'available_for', $available_for);
        update_post_meta($created_post_id, 'archive', 'no');

        echo $created_post_id;
    }

    die();
}

add_action('wp_ajax_membership_archive_program', 'membership_archive_program');
function membership_archive_program()
{
    $id = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }

    if (current_user_can('administrator')){
        update_post_meta($id, 'archive', 'yes');
    }

    die();
}

add_action('wp_ajax_membership_activate_program', 'membership_activate_program');
function membership_activate_program()
{
    $id = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }

    if (current_user_can('administrator')){
        update_post_meta($id, 'archive', 'no');
    }

    die();
}

add_action('wp_ajax_membership_delete_item', 'membership_delete_item');
function membership_delete_item()
{
    $id = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }

    if (current_user_can('administrator')){
        if ($id) {
            wp_delete_post($id);
        }
    }

    die();
}

add_action('wp_ajax_membership_delete_pillar', 'membership_delete_pillar');
function membership_delete_pillar()
{
    $id = 0;
    $number = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['number'])){
        $number = $_POST['number'];
    }

    if (current_user_can('administrator')){
        $pillar_count = (int)get_post_meta($id, 'pillar_count', true);
        if (!$pillar_count){
            $pillar_count = 1;
        }

        if ($pillar_count == 1){
            update_post_meta($id, 'pillar_count', '');
            update_post_meta($id, 'pillar_number_1', '');
        }
        else{
            update_post_meta($id, 'pillar_number_'.$number, '');
        }
    }

    die();
}

add_action('wp_ajax_membership_delete_module', 'membership_delete_module');
function membership_delete_module()
{
    $id = 0;
    $number = 0;
    $counter = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['number'])){
        $number = $_POST['number'];
    }
    if (isset($_POST['counter'])){
        $counter = $_POST['counter'];
    }

    if (current_user_can('administrator')){
        $module_count = (int)get_post_meta($id, 'module_count_'.$number, true);
        if (!$module_count){
            $module_count = 1;
        }

        if ($module_count == 1){
            update_post_meta($id, 'module_count_'.$number, '');
            update_post_meta($id, 'module_number_'.$number.'_id_1', '');
        }
        else{
            update_post_meta($id, 'module_number_'.$number.'_id_'.$counter, '');
        }
    }

    die();
}

add_action('wp_ajax_add_subscription_price', 'add_subscription_price');
function add_subscription_price()
{
    $id = 0;
    $title = '';
    $price = '';
    $active_members = '';
    $period = '';
    $start = '';
    $end = '';
    $for = '';
    $price_counter = '';

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['title'])){
        $title = $_POST['title'];
    }
    if (isset($_POST['price'])){
        $price = $_POST['price'];
    }
    if (isset($_POST['active_members'])){
        $active_members = $_POST['active_members'];
    }
    if (isset($_POST['period'])){
        $period = $_POST['period'];
    }
    if (isset($_POST['start'])){
        $start = $_POST['start'];
    }
    if (isset($_POST['end'])){
        $end = $_POST['end'];
    }
    if (isset($_POST['for'])){
        $for = $_POST['for'];
    }

    if (current_user_can('administrator')){

        $new_price_data = '';

        $price_counter = get_post_meta($id, 'price_counter', true);
        if (!$price_counter){
            $price_counter = 1;
        }
        else{
            $prev_price_data = get_post_meta($id, 'subs_price_'.$price_counter, true);

            $price_arr = explode('|',$prev_price_data);
            foreach ($price_arr as $price_item){
                if ($price_item == '-'){
                    $new_price_data .= $start;
                }
                else{
                    $new_price_data .= $price_item.'|';
                }
            }
            update_post_meta($id, 'subs_price_'.$price_counter, $new_price_data);
            $price_counter++;
        }

        $subs_price_data = $title.' '.$price_counter.'|'.$price.'|'.$active_members.'|'.$period.'|'.$start.'|'.$for.'|'.$end;

        update_post_meta($id, 'price_counter', $price_counter);

        update_post_meta($id, 'subs_price_'.$price_counter, $subs_price_data);

        echo $price_counter;
    }

    die();
}

add_action('wp_ajax_edit_membership_item', 'edit_membership_item');
function edit_membership_item()
{

    $id = 0;
    $title = '';
    $product_upgrade = '';
    $continued_subscription = '';
    $continued_subscription_type = '';
    $minimum_duration = '';
    $minimum_duration_type = '';
    $minimum_duration_value = '';
    $parent_membership = '';

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['title'])){
        $title = $_POST['title'];
    }
    if (isset($_POST['product_upgrade'])){
        $product_upgrade = $_POST['product_upgrade'];
    }
    if (isset($_POST['continued_subscription'])){
        $continued_subscription = $_POST['continued_subscription'];
    }
    if (isset($_POST['continued_subscription_type'])){
        $continued_subscription_type = $_POST['continued_subscription_type'];
    }
    if (isset($_POST['minimum_duration'])){
        $minimum_duration = $_POST['minimum_duration'];
    }
    if (isset($_POST['minimum_duration_type'])){
        $minimum_duration_type = $_POST['minimum_duration_type'];
    }
    if (isset($_POST['minimum_duration_value'])){
        $minimum_duration_value = $_POST['minimum_duration_value'];
    }
    if (isset($_POST['parent_membership'])){
        $parent_membership = $_POST['parent_membership'];
    }

    if (current_user_can('administrator')){
        update_post_meta($id, 'title', $title);
        update_post_meta($id, 'product_upgrade', $product_upgrade);
        update_post_meta($id, 'continued_subscription', $continued_subscription);
        update_post_meta($id, 'continued_subscription_type', $continued_subscription_type);
        update_post_meta($id, 'minimum_duration', $minimum_duration);
        update_post_meta($id, 'minimum_duration_type', $minimum_duration_type);
        update_post_meta($id, 'minimum_duration_value', $minimum_duration_value);
        update_post_meta($id, 'parent_membership', $parent_membership);
    }

    die();
}



add_action('wp_ajax_membership_add_class', 'membership_add_class');
function membership_add_class()
{

    $id = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }

    if (current_user_can('administrator')){
        $class_count = get_post_meta($id, 'class_count', true);
        if (!$class_count){
            $class_count = 1;
        }
        else{
            $class_count++;
        }

        $class_data = array();
        $class_steps = array();
        $class_data['title'] = 'Class';
        $class_data['onboarding'] = '';
        $class_data['steps'] = $class_steps;

        update_post_meta($id, 'class_count', $class_count);
        update_post_meta($id, 'class_number_'.$class_count, $class_data);

        echo $class_count;
    }

    die();
}



add_action('wp_ajax_membership_add_pillar', 'membership_add_pillar');
function membership_add_pillar()
{
    $id = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }

    if (current_user_can('administrator')){
        $pillar_count = get_post_meta($id, 'pillar_count', true);
        if (!$pillar_count){
            $pillar_count = 1;
        }
        else{
            $pillar_count++;
        }

        $pillar_data = array();
        $pillar_data['title'] = 'Pillar';
        $pillar_data['status'] = 'Draft';
        $pillar_data['back_text'] = '';
        $pillar_data['bullet_1'] = '';
        $pillar_data['bullet_2'] = '';
        $pillar_data['bullet_3'] = '';
        $pillar_data['bullet_4'] = '';
        $pillar_data['auto_unlock'] = '';
        $pillar_data['auto_unlock_type'] = '';
        $pillar_data['auto_unlock_pillar_select'] = '';
        $pillar_data['auto_unlock_time_select'] = '';
        $pillar_data['auto_unlock_days'] = '';

        update_post_meta($id, 'pillar_count', $pillar_count);
        update_post_meta($id, 'pillar_number_'.$pillar_count, $pillar_data);

        echo $pillar_count;
    }

    die();
}


add_action('wp_ajax_membership_add_module', 'membership_add_module');
function membership_add_module()
{
    $id = 0;
    $number = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['number'])){
        $number = $_POST['number'];
    }

    if (current_user_can('administrator')){
        $module_count = get_post_meta($id, 'module_count_'.$number, true);
        if (!$module_count){
            $module_count = 1;
        }
        else{
            $module_count++;
        }

        $module_data = array();
        $module_data['title'] = 'Module';
        $module_data['status'] = 'Draft';
        $module_data['video_url'] = '';
        $module_data['description'] = '';
        $module_data['transcription'] = '';
        $module_data['module_links'] = '';
        $module_data['drip_release'] = '';
        $module_data['add_to_progress'] = 'on';
        $module_data['drip_release_type'] = '';
        $module_data['drip_release_module_pillar'] = '';
        $module_data['drip_release_module_module'] = '';
        $module_data['drip_release_pillar_pillar'] = '';
        $module_data['drip_release_time'] = '';
        $module_data['drip_release_days'] = '';

        update_post_meta($id, 'module_count_'.$number, $module_count);
        update_post_meta($id, 'module_number_'.$number.'_id_'.$module_count, $module_data);

        echo $module_count;
    }

    die();
}


add_action('wp_ajax_save_edit_class', 'save_edit_class');
function save_edit_class()
{

    $id = 0;
    $number = 0;
    $title = '';
    $onboarding = '';
    $steps = array();

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['number'])){
        $number = $_POST['number'];
    }
    if (isset($_POST['title'])){
        $title = $_POST['title'];
    }
    if (isset($_POST['onboarding'])){
        $onboarding = $_POST['onboarding'];
    }
    if (isset($_POST['steps'])){
        $steps = $_POST['steps'];
    }

    if (current_user_can('administrator')){

        $class_data = array();
        $class_steps = $steps;
        $class_data['title'] = $title;
        $class_data['onboarding'] = $onboarding;
        $class_data['steps'] = $class_steps;

        update_post_meta($id, 'class_number_'.$number, $class_data);
    }

    die();
}

add_action('wp_ajax_mark_unmark_module', 'mark_unmark_module');
function mark_unmark_module()
{
    $id = 0;
    $number = 0;
    $counter = 0;
    $type = '';

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['number'])){
        $number = $_POST['number'];
    }
    if (isset($_POST['counter'])){
        $counter = $_POST['counter'];
    }
    if (isset($_POST['type'])){
        $type = $_POST['type'];
    }

    $user_id = get_current_user_id();


    if ($user_id){
        $mark_module_list = get_user_meta($user_id, 'mark_module_list', true);
        $module_id = $id.'_'.$number.'_'.$counter;
        if (!$mark_module_list){
            $mark_module_list = array();
        }
        if ($type == 'mark'){
            if (!in_array($module_id, $mark_module_list)) {
                $time = time();
                $rand = rand(0, 9);
                $key = (string)$time.$rand;
                $key = (int)$key;
                $mark_module_list[$key] = $module_id;
            }
            update_user_meta($user_id, 'mark_module_list', $mark_module_list);
        }
        elseif($type == 'unmark'){
            if (($key = array_search($module_id, $mark_module_list)) !== false) {
                unset($mark_module_list[$key]);
            }
            update_user_meta($user_id, 'mark_module_list', $mark_module_list);
        }
    }

    die();
}

add_action('wp_ajax_save_pillar', 'save_pillar');
function save_pillar()
{

    $id = 0;
    $number = 0;
    $title = '';
    $status = '';
    $back_text = '';
    $bullet_1 = '';
    $bullet_2 = '';
    $bullet_3 = '';
    $bullet_4 = '';
    $auto_unlock = '';
    $auto_unlock_type = '';
    $auto_unlock_pillar_select = '';
    $auto_unlock_time_select = '';
    $auto_unlock_days = '';

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['number'])){
        $number = $_POST['number'];
    }
    if (isset($_POST['title'])){
        $title = $_POST['title'];
    }
    if (isset($_POST['status'])){
        $status = $_POST['status'];
    }
    if (isset($_POST['back_text'])){
        $back_text = $_POST['back_text'];
    }
    if (isset($_POST['bullet_1'])){
        $bullet_1 = $_POST['bullet_1'];
    }
    if (isset($_POST['bullet_2'])){
        $bullet_2 = $_POST['bullet_2'];
    }
    if (isset($_POST['bullet_3'])){
        $bullet_3 = $_POST['bullet_3'];
    }
    if (isset($_POST['bullet_4'])){
        $bullet_4 = $_POST['bullet_4'];
    }
    if (isset($_POST['auto_unlock'])){
        $auto_unlock = $_POST['auto_unlock'];
    }
    if (isset($_POST['auto_unlock_type'])){
        $auto_unlock_type = $_POST['auto_unlock_type'];
    }
    if (isset($_POST['auto_unlock_pillar_select'])){
        $auto_unlock_pillar_select = $_POST['auto_unlock_pillar_select'];
    }
    if (isset($_POST['auto_unlock_time_select'])){
        $auto_unlock_time_select = $_POST['auto_unlock_time_select'];
    }
    if (isset($_POST['auto_unlock_days'])){
        $auto_unlock_days = $_POST['auto_unlock_days'];
    }

    if (current_user_can('administrator')){

        $pillar_data = array();
        $pillar_data['title'] = $title;
        $pillar_data['status'] = $status;
        $pillar_data['back_text'] = $back_text;
        $pillar_data['bullet_1'] = $bullet_1;
        $pillar_data['bullet_2'] = $bullet_2;
        $pillar_data['bullet_3'] = $bullet_3;
        $pillar_data['bullet_4'] = $bullet_4;
        $pillar_data['auto_unlock'] = $auto_unlock;
        $pillar_data['auto_unlock_type'] = $auto_unlock_type;
        $pillar_data['auto_unlock_pillar_select'] = $auto_unlock_pillar_select;
        $pillar_data['auto_unlock_time_select'] = $auto_unlock_time_select;
        $pillar_data['auto_unlock_days'] = $auto_unlock_days;

        update_post_meta($id, 'pillar_number_'.$number, $pillar_data);
    }

    die();
}


add_action('wp_ajax_save_module', 'save_module');
function save_module()
{

    $id = 0;
    $number = 0;
    $counter = 0;
    $title = '';
    $status = '';
    $video_url = '';
    $description = '';
    $transcription = '';
    $module_links = '';
    $drip_release = '';
    $add_to_progress = '';
    $drip_release_type = '';
    $drip_release_module_pillar = '';
    $drip_release_module_module = '';
    $drip_release_pillar_pillar = '';
    $drip_release_time = '';
    $drip_release_days = '';

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['number'])){
        $number = $_POST['number'];
    }
    if (isset($_POST['counter'])){
        $counter = $_POST['counter'];
    }
    if (isset($_POST['title'])){
        $title = $_POST['title'];
    }
    if (isset($_POST['status'])){
        $status = $_POST['status'];
    }
    if (isset($_POST['video_url'])){
        $video_url = $_POST['video_url'];
    }
    if (isset($_POST['description'])){
        $description = $_POST['description'];
    }
    if (isset($_POST['transcription'])){
        $transcription = $_POST['transcription'];
    }
    if (isset($_POST['module_links'])){
        $module_links = $_POST['module_links'];
    }
    if (isset($_POST['drip_release'])){
        $drip_release = $_POST['drip_release'];
    }
    if (isset($_POST['add_to_progress'])){
        $add_to_progress = $_POST['add_to_progress'];
    }
    if (isset($_POST['drip_release_type'])){
        $drip_release_type = $_POST['drip_release_type'];
    }
    if (isset($_POST['drip_release_module_pillar'])){
        $drip_release_module_pillar = $_POST['drip_release_module_pillar'];
    }
    if (isset($_POST['drip_release_module_module'])){
        $drip_release_module_module = $_POST['drip_release_module_module'];
    }
    if (isset($_POST['drip_release_pillar_pillar'])){
        $drip_release_pillar_pillar = $_POST['drip_release_pillar_pillar'];
    }
    if (isset($_POST['drip_release_time'])){
        $drip_release_time = $_POST['drip_release_time'];
    }
    if (isset($_POST['drip_release_days'])){
        $drip_release_days = $_POST['drip_release_days'];
    }

    if (current_user_can('administrator')){
        $module_data = array();
        $module_data['title'] = $title;
        $module_data['status'] = $status;
        $module_data['video_url'] = $video_url;
        $module_data['description'] = $description;
        $module_data['transcription'] = $transcription;
        $module_data['module_links'] = $module_links;
        $module_data['drip_release'] = $drip_release;
        $module_data['add_to_progress'] = $add_to_progress;
        $module_data['drip_release_type'] = $drip_release_type;
        $module_data['drip_release_module_pillar'] = $drip_release_module_pillar;
        $module_data['drip_release_module_module'] = $drip_release_module_module;
        $module_data['drip_release_pillar_pillar'] = $drip_release_pillar_pillar;
        $module_data['drip_release_time'] = $drip_release_time;
        $module_data['drip_release_days'] = $drip_release_days;

        update_post_meta($id, 'module_number_'.$number.'_id_'.$counter, $module_data);
    }

    die();
}

add_action('wp_ajax_delete_edit_class', 'delete_edit_class');
function delete_edit_class()
{
    $id = 0;
    $number = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['number'])){
        $number = $_POST['number'];
    }

    if (current_user_can('administrator')){
        
        $class_count = (int)get_post_meta($id, 'class_count', true);
        if (!$class_count){
            $class_count = 1;
        }

        if ($class_count == 1){
            update_post_meta($id, 'class_count', '');
            update_post_meta($id, 'class_number_1', '');
        }
        else{
            update_post_meta($id, 'class_number_'.$number, '');
        }

    }

    die();
}




add_action('wp_ajax_duplicate_edit_class', 'duplicate_edit_class');
function duplicate_edit_class()
{
    $id = 0;
    $number = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['number'])){
        $number = $_POST['number'];
    }

    if (current_user_can('administrator')){
        $class_count = (int)get_post_meta($id, 'class_count', true);
        if (!$class_count){
            $class_count = 1;
        }

        $class_data = get_post_meta($id, 'class_number_'.$number, true);

        $class_count++;
        update_post_meta($id, 'class_count', $class_count);
        update_post_meta($id, 'class_number_'.$class_count, $class_data);

        echo $class_count;
    }

    die();
}


add_action('wp_ajax_duplicate_pillar', 'duplicate_pillar');
function duplicate_pillar()
{
    $id = 0;
    $number = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['number'])){
        $number = $_POST['number'];
    }

    if (current_user_can('administrator')){

        $pillar_count = (int)get_post_meta($id, 'pillar_count', true);
        if (!$pillar_count){
            $pillar_count = 1;
        }
        $pillar_count++;

        $pillar_data = get_post_meta($id, 'pillar_number_'.$number, true);

        update_post_meta($id, 'pillar_count', $pillar_count);
        update_post_meta($id, 'pillar_number_'.$pillar_count, $pillar_data);

        $module_count = (int)get_post_meta($id, 'module_count_'.$number, true);
        if (!$module_count){
            $module_count = 1;
        }
        update_post_meta($id, 'module_count_'.$pillar_count, $module_count);

        for($i = 1; $i <= $module_count; $i++){
            $module_data = get_post_meta($id, 'module_number_'.$number.'_id_'.$i, true);
            if ($module_data){
                update_post_meta($id, 'module_number_'.$pillar_count.'_id_'.$i, $module_data);
            }
        }

        echo $pillar_count;
    }

    die();
}

add_action('wp_ajax_duplicate_module', 'duplicate_module');
function duplicate_module()
{
    $id = 0;
    $number = 0;
    $counter = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['number'])){
        $number = $_POST['number'];
    }
    if (isset($_POST['counter'])){
        $counter = $_POST['counter'];
    }

    if (current_user_can('administrator')){

        $module_count = (int)get_post_meta($id, 'module_count_'.$number, true);
        if (!$module_count){
            $module_count = 1;
        }
        $module_count++;

        $module_data = get_post_meta($id, 'module_number_'.$number.'_id_'.$counter, true);

        update_post_meta($id, 'module_count_'.$number, $module_count);
        update_post_meta($id, 'module_number_'.$number.'_id_'.$module_count, $module_data);

        echo $module_count;
    }

    die();
}

add_action('wp_ajax_duplicate_program', 'duplicate_program');
function duplicate_program()
{
    $id = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }

    if (current_user_can('administrator')){
        $post_data = array(
            'post_author' => get_current_user_id(),
            'post_name' => 'memberships_program',
            'post_title' => 'memberships_program',
            'post_status' => 'publish',
            'post_type' => 'memberships_program'
        );
        $created_post_id = wp_insert_post($post_data);

        $title = get_post_meta($id, 'title', true);
        $type = get_post_meta($id, 'type', true);
        $program_card_url = get_post_meta($id, 'program_card_url', true);
        $pillar_card_url = get_post_meta($id, 'pillar_card_url', true);
        $available_for = get_post_meta($id, 'available_for', true);
        $archive = get_post_meta($id, 'archive', true);

        update_post_meta($created_post_id, 'title', $title);
        update_post_meta($created_post_id, 'type', $type);
        update_post_meta($created_post_id, 'program_card_url', $program_card_url);
        update_post_meta($created_post_id, 'pillar_card_url', $pillar_card_url);
        update_post_meta($created_post_id, 'available_for', $available_for);
        update_post_meta($created_post_id, 'archive', $archive);

        echo $created_post_id;
    }

    die();
}



add_action('wp_ajax_membership_edit_program', 'membership_edit_program');
function membership_edit_program()
{
    $id = 0;
    $title = '';
    $type = '';
    $program_card_url = '';
    $pillar_card_url = '';
    $available_for = '';

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['title'])){
        $title = $_POST['title'];
    }
    if (isset($_POST['type'])){
        $type = $_POST['type'];
    }
    if (isset($_POST['program_card_url'])){
        $program_card_url = $_POST['program_card_url'];
    }
    if (isset($_POST['pillar_card_url'])){
        $pillar_card_url = $_POST['pillar_card_url'];
    }
    if (isset($_POST['available_for'])){
        $available_for = $_POST['available_for'];
    }

    if (current_user_can('administrator')){
        update_post_meta($id, 'title', $title);
        update_post_meta($id, 'type', $type);
        update_post_meta($id, 'program_card_url', $program_card_url);
        update_post_meta($id, 'pillar_card_url', $pillar_card_url);
        update_post_meta($id, 'available_for', $available_for);
        update_post_meta($id, 'archive', 'no');
    }

    die();
}



add_action('wp_ajax_swap_edit_class', 'swap_edit_class');
function swap_edit_class()
{
    $id = 0;
    $number = 0;
    $number2 = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['number'])){
        $number = $_POST['number'];
    }
    if (isset($_POST['number2'])){
        $number2 = $_POST['number2'];
    }

    if (current_user_can('administrator')){
        $class_data = get_post_meta($id, 'class_number_'.$number, true);
        $class_data2 = get_post_meta($id, 'class_number_'.$number2, true);

        update_post_meta($id, 'class_number_'.$number, $class_data2);
        update_post_meta($id, 'class_number_'.$number2, $class_data);
    }

    die();
}


add_action('wp_ajax_swap_pillar', 'swap_pillar');
function swap_pillar()
{
    $id = 0;
    $number = 0;
    $number2 = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['number'])){
        $number = $_POST['number'];
    }
    if (isset($_POST['number2'])){
        $number2 = $_POST['number2'];
    }

    if (current_user_can('administrator')){
        $pillar_data = get_post_meta($id, 'pillar_number_'.$number, true);
        $pillar_data2 = get_post_meta($id, 'pillar_number_'.$number2, true);

        update_post_meta($id, 'pillar_number_'.$number, $pillar_data2);
        update_post_meta($id, 'pillar_number_'.$number2, $pillar_data);

        $module_count = (int)get_post_meta($id, 'module_count_'.$number, true);
        $module_count_2 = (int)get_post_meta($id, 'module_count_'.$number2, true);
        if (!$module_count){
            $module_count = 1;
        }
        if (!$module_count_2){
            $module_count_2 = 1;
        }
        update_post_meta($id, 'module_count_'.$number, $module_count_2);
        update_post_meta($id, 'module_count_'.$number2, $module_count);

        $max_1_2 = $module_count;
        if ($module_count_2 > $max_1_2){
            $max_1_2 = $module_count_2;
        }

        $max_1_2_arr = array();
        $max_1_2_arr_2 = array();

        for($i = 1; $i <= $module_count; $i++){
             $max_1_2_arr[$i] = get_post_meta($id, 'module_number_'.$number.'_id_'.$i, true);
        }
        for($i = 1; $i <= $module_count_2; $i++){
             $max_1_2_arr_2[$i] = get_post_meta($id, 'module_number_'.$number2.'_id_'.$i, true);
        }

        for($i = 1; $i <= $max_1_2; $i++){
            $module_data = $max_1_2_arr[$i];
            if ($module_data){
                update_post_meta($id, 'module_number_'.$number2.'_id_'.$i, $module_data);
            }
            else{
                update_post_meta($id, 'module_number_'.$number2.'_id_'.$i, '');
            }
        }

        for($i = 1; $i <= $max_1_2; $i++){
            $module_data = $max_1_2_arr_2[$i];
            if ($module_data){
                update_post_meta($id, 'module_number_'.$number.'_id_'.$i, $module_data);
            }
            else{
                update_post_meta($id, 'module_number_'.$number.'_id_'.$i, '');
            }
        }

    }

    die();
}


add_action('wp_ajax_swap_module', 'swap_module');
function swap_module()
{
    $id = 0;
    $number = 0;
    $counter = 0;
    $counter2 = 0;

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['number'])){
        $number = $_POST['number'];
    }
    if (isset($_POST['counter'])){
        $counter = $_POST['counter'];
    }
    if (isset($_POST['counter2'])){
        $counter2 = $_POST['counter2'];
    }

    if (current_user_can('administrator')){
        $module_data = get_post_meta($id, 'module_number_'.$number.'_id_'.$counter, true);
        $module_data2 = get_post_meta($id, 'module_number_'.$number.'_id_'.$counter2, true);

        update_post_meta($id, 'module_number_'.$number.'_id_'.$counter, $module_data2);
        update_post_meta($id, 'module_number_'.$number.'_id_'.$counter2, $module_data);
    }

    die();
}


add_action('wp_ajax_save_edit_levels', 'save_edit_levels');
function save_edit_levels()
{
    $id = 0;
    $title = '';
    $description = '';
    $metric_shortcode = '';
    $upgrade_to = '';
    $user_upgrade = '';
    $levels = array();

    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if (isset($_POST['title'])){
        $title = $_POST['title'];
    }
    if (isset($_POST['description'])){
        $description = $_POST['description'];
    }
    if (isset($_POST['metric_shortcode'])){
        $metric_shortcode = $_POST['metric_shortcode'];
    }
    if (isset($_POST['upgrade_to'])){
        $upgrade_to = $_POST['upgrade_to'];
    }
    if (isset($_POST['user_upgrade'])){
        $user_upgrade = $_POST['user_upgrade'];
    }
    if (isset($_POST['levels'])){
        $levels = $_POST['levels'];
    }

    if (current_user_can('administrator')){
        update_post_meta($id, 'levels_title', $title);
        update_post_meta($id, 'levels_description', $description);
        update_post_meta($id, 'levels_metric_shortcode', $metric_shortcode);
        update_post_meta($id, 'levels_upgrade_to', $upgrade_to);
        update_post_meta($id, 'levels_user_upgrade', $user_upgrade);
        update_post_meta($id, 'levels_levels', $levels);
    }

    die();
}

add_action('wp_ajax_check_activate_account', 'check_activate_account');
function check_activate_account()
{
    $stripe = new \Stripe\StripeClient(
        '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'
    );
    $all_subscriptions = $stripe->subscriptions->search(['query' => 'status:\'active\' OR status:\'trialing\' ']);
    $customer_emails_arr = array();
    foreach ($all_subscriptions->data as $sub){
        $customer_id = $sub->customer;
        $customer = $stripe->customers->retrieve(
            $customer_id,
            []
        );
        $customer_email = $customer->email;
        $customer_emails_arr[] = $customer_email;
    }

    $user_id = get_current_user_id();
    $user = get_user_by('id', $user_id);

    if (in_array($user->user_email, $customer_emails_arr)){
        echo 'active_found';
    }

    die();
}



add_action('wp_ajax_subscriptions_update', 'subscriptions_update');
function subscriptions_update()
{
    if (current_user_can('administrator')){

        $payment_link1 = '';
        $payment_link2 = '';
        $payment_link3 = '';
        $payment_link4 = '';

        $register_url1 = '';
        $register_url2 = '';
        $register_url3 = '';
        $register_url4 = '';

        if (isset($_POST['payment_link1'])) {
            $payment_link1 = $_POST['payment_link1'];
        }
        if (isset($_POST['payment_link2'])) {
            $payment_link2 = $_POST['payment_link2'];
        }
        if (isset($_POST['payment_link3'])) {
            $payment_link3 = $_POST['payment_link3'];
        }
        if (isset($_POST['payment_link4'])) {
            $payment_link4 = $_POST['payment_link4'];
        }

        if (isset($_POST['register_url1'])) {
            $register_url1 = $_POST['register_url1'];
        }
        if (isset($_POST['register_url2'])) {
            $register_url2 = $_POST['register_url2'];
        }
        if (isset($_POST['register_url3'])) {
            $register_url3 = $_POST['register_url3'];
        }
        if (isset($_POST['register_url4'])) {
            $register_url4 = $_POST['register_url4'];
        }

        update_option('app_payment_link1', $payment_link1);
        update_option('app_payment_link2', $payment_link2);
        update_option('app_payment_link3', $payment_link3);
        update_option('app_payment_link4', $payment_link4);

        update_option('app_register_url1', $register_url1);
        update_option('app_register_url2', $register_url2);
        update_option('app_register_url3', $register_url3);
        update_option('app_register_url4', $register_url4);
    }

    die();
}

add_action('admin_menu', 'add_custom_menu_item2');
function add_custom_menu_item2()
{
    add_menu_page("App Subscriptions", "App Subscriptions", 'manage_options', "app_subscriptions_settings", "app_subscriptions_settings",'dashicons-groups', 2);
    add_menu_page("Memberships", "Memberships", 'manage_options', "memberships_settings", "memberships_settings",'dashicons-networking', 2);
    add_menu_page("Trigger Payments", "Trigger Payments", 'manage_options', "membership_plan_payments", "membership_plan_payments",'dashicons-money-alt', 2);
}

function memberships_settings()
{
    require_once dirname(__FILE__) . '/memberships_settings.php';
}

function membership_plan_payments()
{
    require_once dirname(__FILE__) . '/membership_plan_payments.php';
}

function app_subscriptions_settings()
{
    ?>
    <style>
        .preloader-wrapper {
            display: none;
            text-align: center;
            position: fixed;
            width: 100vw;
            height: 100vh;
            z-index: 100099;
            left: 0;
            top: 0;
            background: rgba(255, 255, 255, 0.7);
        }

        .preloader-wrapper.show {
            display: block;
        }

        .preloader {
            transform: translate(-50%, -50%) scale(-1, 1);
            width: 370px;
            height: auto;
            position: absolute;
            left: 50%;
            top: 47%;
        }
    </style>
    <div class="preloader-wrapper">
        <img alt="preloader" class="preloader" src="http://www.eternumultra.com/wp-content/uploads/2022/09/preloader.gif"/>
    </div>
    <style>
        .subscriptions-wrapper{
            width: 1000px;
            border: 1px solid #777;
            background-color: #fff;
            padding: 15px;
        }

        .subscriptions-wrapper:after{
            content: '';
            display: block;
            clear: both;
        }

        table{
            width: 100%;
            margin-bottom: 60px;
        }

        tr{
            line-height: 2.5;
        }

        td{
            width: 37%;
        }

        td input{
            width: 100%;
        }

        td:nth-of-type(1){
            width: 6%;
        }

        td:nth-of-type(2),
        td:nth-of-type(3) {
            width: 10%;
        }

        td:nth-of-type(2),
        td:nth-of-type(3){
            text-align: center;
        }

        .save{
            float: right;
            width: 160px;
            height: 36px;
            background-color: #2b2bdf;
            color: #fff;
            text-align: center;
            line-height: 30px;
            transition: 0.4s all;
            cursor: pointer;
            outline: none !important;
            border: none !important;
            font-size: 18px;
            border-radius: 6px;
        }

        .save:hover,
        .save:focus{
            opacity: 0.7;
        }
    </style>
    <?php
    $stripe = new \Stripe\StripeClient(
        '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'
    );
    $all_subscriptions = $stripe->subscriptions->search(['query' => 'status:\'active\' OR status:\'trialing\' ']);

    ?>
    <div style="display: none">
        <?php
            //sub_1Ll0oQITUugB0Xvy5AUxfhYf

            //si_MTvTCP9pHUORmS
            //si_MTvQi2QAtuJ2fI
            //si_MTvMkagdl8mbaT
            //si_MTdMqdQJr3V0RU

            //sub_1Ll0WKITUugB0XvyfR8A7apr

            //sub_1LkxcCITUugB0XvyNATAuIbk
            //sub_1LkxZxITUugB0XvyRwPjgWNO
            //sub_1LkxViITUugB0XvyzL076RJX
            //sub_1Lkg5kITUugB0XvyUPvBzFef
        ?>
    </div>
    <?php


    $sub_plan1 = 0;
    $sub_plan2 = 0;
    $sub_plan3 = 0;
    $sub_plan4 = 0;
    foreach ($all_subscriptions->data as $sub){
        if ($sub->items->data[0]->plan->product == 'prod_MTb93TPs99kBds'){
            $sub_plan1++;
        }
        elseif($sub->items->data[0]->plan->product == 'prod_MTbAwoMtxbLsBx'){
            $sub_plan2++;
        }
        elseif($sub->items->data[0]->plan->product == 'prod_MTbCvJ1SjZ5lSb'){
            $sub_plan3++;
        }
    }

    ?>
    <h1>Subscriptions</h1>
    <div class="subscriptions-wrapper">
        <table>
            <tr>
                <td></td>
                <td>Accounts</td>
                <td>Active</td>
                <td>Payment Link</td>
                <td>Register URL</td>
            </tr>
            <?php
            $users_plan1 = get_users(
                array(
                    'meta_query' => array(
                        array(
                            'key' => 'app_subscription_plan',
                            'value' => 1,
                            'compare' => '=='
                        )
                    )
                )
            );
            ?>
            <tr>
                <td>Plan 1</td>
                <td><?php echo count($users_plan1); ?></td>
                <td><?php echo $sub_plan1; ?></td>
                <td><input type="text" class="payment_link1" value="<?php echo get_option('app_payment_link1'); ?>"></td>
                <td><input type="text" class="register_url1"  value="<?php echo get_option('app_register_url1'); ?>"></td>
            </tr>
            <?php
            $users_plan2 = get_users(
                array(
                    'meta_query' => array(
                        array(
                            'key' => 'app_subscription_plan',
                            'value' => 2,
                            'compare' => '=='
                        )
                    )
                )
            );
            ?>
            <tr>
                <td>Plan 2</td>
                <td><?php echo count($users_plan2); ?></td>
                <td><?php echo $sub_plan2; ?></td>
                <td><input type="text" class="payment_link2"  value="<?php echo get_option('app_payment_link2'); ?>"></td>
                <td><input type="text" class="register_url2"  value="<?php echo get_option('app_register_url2'); ?>"></td>
            </tr>
            <?php
            $users_plan3 = get_users(
                array(
                    'meta_query' => array(
                        array(
                            'key' => 'app_subscription_plan',
                            'value' => 3,
                            'compare' => '=='
                        )
                    )
                )
            );
            ?>
            <tr>
                <td>Plan 3</td>
                <td><?php echo count($users_plan3); ?></td>
                <td><?php echo $sub_plan3; ?></td>
                <td><input type="text" class="payment_link3"  value="<?php echo get_option('app_payment_link3'); ?>"></td>
                <td><input type="text" class="register_url3"  value="<?php echo get_option('app_register_url3'); ?>"></td>
            </tr>
            <?php
            $users_plan4 = get_users(
                array(
                    'meta_query' => array(
                        array(
                            'key' => 'app_subscription_plan',
                            'value' => 4,
                            'compare' => '=='
                        )
                    )
                )
            );
            ?>
            <tr>
                <td>Plan 4</td>
                <td><?php echo count($users_plan4); ?></td>
                <td><?php echo $sub_plan4; ?></td>
                <td><input type="text" class="payment_link4"  value="<?php echo get_option('app_payment_link4'); ?>"></td>
                <td><input type="text" class="register_url4"  value="<?php echo get_option('app_register_url4'); ?>"></td>
            </tr>
        </table>
        <button class="save">Save</button>
    </div>
    <script>
        (function ($) {

            var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';

            var subscriptions_update = {
                action: 'subscriptions_update',
                payment_link1: '',
                payment_link2: '',
                payment_link3: '',
                payment_link4: '',
                register_url1: '',
                register_url2: '',
                register_url3: '',
                register_url4: ''
            };

            $(document).on('click','.save',function(){
                subscriptions_update.payment_link1 = $('.payment_link1').val();
                subscriptions_update.payment_link2 = $('.payment_link2').val();
                subscriptions_update.payment_link3 = $('.payment_link3').val();
                subscriptions_update.payment_link4 = $('.payment_link4').val();

                subscriptions_update.register_url1 = $('.register_url1').val();
                subscriptions_update.register_url2 = $('.register_url2').val();
                subscriptions_update.register_url3 = $('.register_url3').val();
                subscriptions_update.register_url4 = $('.register_url4').val();

                $('.preloader-wrapper').addClass("show");
                jQuery.post(ajaxurl, subscriptions_update)
                    .done(function (msg) {
                        $('.preloader-wrapper').removeClass("show");
                        location.reload();
                    })
                    .fail(function (xhr, textStatus, errorThrown) {
                        $('.preloader-wrapper').removeClass("show");
                        alert('Connection error happen, please try again');
                    })
            });

        })(jQuery);
    </script>
    <?php
}


add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
function my_theme_scripts() {
    wp_enqueue_script('jquery');

}


add_action('wp_logout','auto_redirect_after_logout');
function auto_redirect_after_logout(){
    wp_safe_redirect('https://www.eternumultra.com');
    exit;
}


add_action('admin_init', 'endo_hide_dashboard');
function endo_hide_dashboard() {
    if ( ! current_user_can( 'manage_options' ) && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {
        wp_redirect('https://www.eternumultra.com');
        exit;
    }
}

add_action('show_user_profile', 'extra_user_profile_fields');
add_action('edit_user_profile', 'extra_user_profile_fields');

function extra_user_profile_fields($user)
{
    ?>
    <style>
        .profile-picture {
            width: 70px;
            height: 70px;
            background: #D9D9D9;
            border-radius: 50%;
            margin: 0 auto 0 0;
            display: block;
            position: relative;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }
    </style>
    <h3 style="margin-top: 50px; font-weight: 700">Additional Information</h3>
    <table class="form-table">
        <tr>
            <th>
                <label>User Avatar</label>
            </th>
            <td>
                <span class="profile-picture" style="background-image: url(<?php echo get_user_meta($user->ID,'upload-image-blob',true); ?>)"></span>
            </td>
        </tr>
        <tr>
            <th>
                <label>Gender</label>
            </th>
            <td>
                <span><?php echo get_user_meta($user->ID,'gender',true); ?></span>
            </td>
        </tr>
        <tr>
            <th>
                <label>Age</label>
            </th>
            <td>
                <span><?php echo get_user_meta($user->ID,'age',true); ?></span>
            </td>
        </tr>
        <tr>
            <th>
                <label>Goal</label>
            </th>
            <td>
                <span><?php echo get_user_meta($user->ID,'goal',true); ?></span>
            </td>
        </tr>
    </table>
    <?php
}
