<style>
    .notice{
        display: none;
    }

    .main-wrapper:after,
    .tab-links:after,
    .edit-product-wrapper:after,
    .extra-content:after,
    .edit-type-content-classes:after,
    .edit-type-content-modules:after,
    .all-content:after,
    .step-item:after{
        content: '';
        display: block;
        clear: both;
    }

    .left-sidebar{
        float: left;
        width: 130px;
        background: #1E2327;
        height: 100vh;
        box-sizing: border-box;
        padding: 15px;
    }

    .right-content{
        float: left;
        width: calc(100% - 130px);
        padding: 15px 30px;
        box-sizing: border-box;
        min-height: 100vh;
        max-height: 100vh;
        overflow-y: auto;
    }

    .left-sidebar a{
        float: left;
        clear: both;
        color: rgba(255, 255, 255, 0.8);
        font-size: 16px;
        text-decoration: none;
        box-shadow: none !important;
        outline: none !important;
        border: none !important;
        margin-bottom: 20px;
    }

    .left-sidebar a:hover,
    .left-sidebar a:focus,
    .left-sidebar a.active{
        color: rgba(255, 255, 255, 1);
    }

    .left-sidebar a.active{
        font-weight: 500;
    }

    #wpcontent{
        padding: 0;
        margin: 0;
    }

    #adminmenuback,
    #adminmenuwrap,
    #wpfooter,
    #wpadminbar{
        display: none;
    }

    html,
    #wpbody-content {
        padding: 0 !important;
    }

    .tab-content,
    .tab-content-item{
        display: none;
    }

    .tab-content.active,
    .tab-content-item.active{
        display: block;
    }

    .tab-links a{
        float: left;
        color: rgba(0, 0, 0, 0.5);
        font-size: 16px;
        text-decoration: none;
        box-shadow: none !important;
        outline: none !important;
        border: none !important;
        margin-right: 70px;
    }

    .tab-links a:hover,
    .tab-links a:focus,
    .tab-links a.active{
        color: rgba(0, 0, 0, 1);
    }

    .tab-links a.active{
        font-weight: 500;
    }

    .tab-content-item p{
        font-size: 16px;
        color: #000;
        font-weight: 500;
        margin: 16px 0;
    }

    .tab-links{
        margin-bottom: 40px;
    }

    .add-new-button{
        background: #375CFF;
        padding: 8px 0 9px 0;
        border: none !important;
        line-height: 1;
        box-shadow: 1px 1px 2px 0.5px rgb(0 0 0 / 8%);
        border-radius: 7px;
        text-align: center;
        color: #fff;
        width: 130px;
        cursor: pointer;
        font-size: 14px;
        margin-left: 570px;
        transition: 0.4s all;
    }

    .add-new-button:hover,
    .add-new-button:focus{
        opacity: 0.7;
    }

    .tr .th,
    .tr .td{
        font-weight: 400;
        font-size: 14px;
        color: #000;
        text-align: left;
        float: left;
        box-sizing: border-box;
    }

    .tr .th{
        font-weight: 500;
    }

    .tr .td{
        padding: 10px;
        overflow: hidden;
    }


    .tr .th:nth-of-type(1),
    .tr .td:nth-of-type(1){
        width: 190px;
    }

    .tr .th:nth-of-type(2),
    .tr .td:nth-of-type(2){
        width: 180px;
    }

    .tab-content-programs .tr .th:nth-of-type(2),
    .tab-content-programs .tr .td:nth-of-type(2){
        padding-right: 65px !important;
    }

    .tab-content-programs .tr .td:nth-of-type(2){
        text-align: center;
    }

    .tr .th:nth-of-type(3),
    .tr .td:nth-of-type(3){
        width: 130px;
    }

    .tr .th:nth-of-type(4),
    .tr .td:nth-of-type(4){
        width: 160px;
    }

    .tr .th:nth-of-type(5),
    .tr .td:nth-of-type(5){
        width: 16px;
        padding: 10px 0;
    }

    .tr:after{
        content: '';
        display: block;
        clear: both;
    }

    .memberships-table{
        background: #F5F7F7;
        box-shadow: 1px 1px 3px 0.5px rgb(0 0 0 / 10%);
        border-radius: 12px;
        width: 700px;
        padding: 6px 10px 5px 10px;
        min-height: 90px;
        margin-bottom: 12px;
        box-sizing: border-box;
    }

    .memberships-table .thead{
        background: #FFF;
        box-shadow: 1px 1px 2px 0.5px rgba(0, 0, 0, 0.02);
        border-radius: 10px;
        padding: 6px 10px;
    }

    .memberships-table .tbody{

    }

    .open-builder,
    .open-builder-program{
        cursor: pointer;
        background: rgba(55, 92, 255, 0.6);
        box-shadow: 1px 1px 2px 0.5px rgba(0, 0, 0, 0.08);
        border-radius: 8px;
        color: #fff;
        border: none !important;
        width: 125px;
        padding: 4px 0 6px 0;
        font-weight: 400;
        font-size: 14px;
        transition: 0.4s all;
    }

    .open-builder:hover,
    .open-builder:focus,
    .open-builder-program:hover,
    .open-builder-program:focus{
        background: rgba(55, 92, 255, 1);
    }

    .remove-item,
    .remove-program,
    .activate-program{
        cursor: pointer;
        border: none !important;
        background: transparent;
        letter-spacing: 2px;
        font-weight: 700;
        line-height: 1;
        color: #000;
        padding: 0;
    }

    .remove-item:hover,
    .remove-item:focus,
    .remove-program:hover,
    .remove-program:focus,
    .activate-program:hover,
    .activate-program:focus{
        color: #0000f0;
    }

    .tab-content-item-edit-product,
    .tab-content-item-edit-program{
        padding-left: 40px;
        position: relative;
    }

    .back-to-list,
    .back-to-list-program{
        position: absolute;
        width: 16px;
        height: 16px;
        border-left: 2px solid #000;
        border-top: 2px solid #000;
        left: 0;
        top: 15px;
        transform: rotate(-45deg);
        outline: none !important;
        box-shadow: none !important;
        transition: 0.4s all;
    }

    .back-to-list:after,
    .back-to-list-program:after{
        display: block;
        content: '';
        width: 20px;
        height: 2px;
        background: #000;
        position: absolute;
        left: -4px;
        top: 5px;
        border-radius: 20px 0 0 20px;
        transform: rotate(45deg);
    }

    .back-to-list:hover,
    .back-to-list:focus,
    .back-to-list-program:hover,
    .back-to-list-program:focus{
        transform: rotate(-45deg) scale(1.3);
    }

    .edit-product-wrapper{
        background: #ECECEC;
        box-shadow: 1px 1px 3px 0.5px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        min-height: 310px;
        overflow: hidden;
        width: 930px;
    }

    .edit-product-sidebar,
    .edit-program-sidebar{
        float: left;
        width: 150px;
        height: 100%;
        padding: 10px;
        box-sizing: border-box;
        position: relative;
        min-height: 310px;
    }

    .edit-product-sidebar.no-classes-levels [data-link="classes"],
    .edit-product-sidebar.no-classes-levels [data-link="levels"]{
        display: none;
    }

    .edit-product-sidebar p,
    .edit-program-sidebar p{
        margin:  0 0 15px 0;
    }

    .edit-product-link{
        text-decoration: none !important;
        font-size: 16px;
        color: #000;
        font-weight: 400;
        background: transparent;
        border-radius: 15px;
        margin: 0 0 16px 0;
        float: left;
        clear: both;
        width: 130px;
        padding: 6px 10px;
        box-sizing: border-box;
        box-shadow: none !important;
    }

    .edit-product-link.active{
        background: #fff;
    }

    .edit-product-link:hover,
    .edit-product-link:focus{
        text-decoration: underline !important;
        color: #000;
    }

    .edit-product-content,
    .edit-program-content{
        float: left;
        width: calc(100% - 150px);
        background: #F5F7F7;
        border-radius: 12px;
        box-sizing: border-box;
        padding: 0;
        box-shadow: -1px 1px 3px rgb(0 0 0 / 10%);
        min-height: 310px;
        position: relative;
    }

    .edit-product-content h2,
    .edit-program-content h2{
        font-size: 18px;
        margin:  0 0 26px 0;
    }

    .edit-product-content p,
    .edit-program-content p{
        font-weight: 400;
    }

    .is-cancel-button{
        border: none;
        background: #375CFF;
        margin: 0;
        line-height: 1;
        padding: 8px 11px 9px;
        transition: 0.4s all !important;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        display: inline-block;
        background: rgba(255, 255, 255, 0.99);
        box-shadow: 2px 2px 6px rgb(0 0 0 / 12%);
        width: 137px;
        margin-right: 9px;
        color: #000;
        position: relative;
        top: 0;
        left: 450px;
    }

    .is-cancel-button:hover,
    .is-cancel-button:focus {
        background: #274AFF;
        color: #fff;
    }

    .is-save-button{
        width: 137px;
        display: inline-block;
        border: none;
        background: #375CFF;
        box-shadow: 2px 2px 6px rgb(0 0 0 / 12%);
        margin: 0;
        line-height: 1;
        padding: 8px 11px 9px;
        transition: 0.4s all !important;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        color: #fff;
        cursor: pointer;
        position: relative;
        top: 0;
        left: 453px;
    }

    .is-save-button:hover,
    .is-save-button:focus {
        opacity: 0.8;
    }

    .type-content .is-cancel-button{
        left: 300px;
    }

    .type-content .is-save-button{
        left: 303px;
    }

    .all-content p,
    .all-content input{
        display: inline-block;
        width: calc(33% - 4px);
    }

    .all-content input{
        width: 165px;
        margin-right: 50px;
        height: 26px;
        min-height: 26px;
        line-height: 26px;
    }

    .all-content p{
        margin: 0 0 26px 0;
    }

    .all-content p:nth-of-type(1){
        width: 140px;
    }

    .all-content p:nth-last-of-type(1){
        width: 270px;
        float: left;
    }

    .edit-product-content input[type="checkbox"],
    .edit-program-content input[type="checkbox"]{
        display: none;
    }

    .edit-product-content label,
    .edit-program-content label{
        width: 40px;
        height: 14px;
        border-radius: 15px;
        background-color: #aaa;
        transition: 0.4s all;
        position: relative;
        z-index: 1;
        cursor: pointer;
        display: inline-block;
        text-align: left;
        font-weight: 400;
        padding: 0;
    }

    .edit-product-content input[type="checkbox"]:checked ~ label,
    .edit-program-content input[type="checkbox"]:checked ~ label{
        background-color: #99EB58;
    }

    .edit-product-content label:before,
    .edit-program-content label:before {
        content: '';
        display: block;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #838482;
        position: absolute;
        left: 0;
        top: -3px;
        transition: 0.4s all;
    }

    .edit-product-content input[type="checkbox"]:checked ~ label:before,
    .edit-program-content input[type="checkbox"]:checked ~ label:before{
        background-color: #6BDE11;
        left: 20px;
    }

    .edit-type-content-classes p,
    .edit-type-content-modules p{
        font-size: 16px;
        font-weight: 500;
        margin: 0 0 15px 0;
        line-height: 1;
    }

    .extra-content label{
        float: left;
        margin-right: 50px;
    }

    .extra-content p{
        float: left;
        clear: both;
        margin: 0 0 27px 0;
        width: 270px;
    }

    .extra-content input,
    .extra-content select{
        float: left;
        height: 26px;
        min-height: 26px;
        line-height: 26px;
    }

    .extra-content select{
        line-height: 24px;
    }

    .extra-content select:nth-of-type(1){
        /*color: red;*/
    }

    .extra-content select{
        border-radius: 15px;
        margin-right: 15px;
        width: 115px;
    }

    .extra-content input{
        width: 60px;
    }

    .checkbox-wrapper{
        float: left;
    }

    .extra-content .checkbox-wrapper{
        float: left;
        margin-top: 3px;
    }

    .edit-type-content,
    .edit-type-content-program{
        display: none;
        position: relative;
        padding: 15px 20px 15px 20px;
    }

    .edit-type-content.active,
    .edit-type-content-program.active{
        display: block;
    }

    .type-sidebar,
    .type-sidebar-module{
        float: left;
        width: 150px;
        padding: 15px 15px 35px 15px;
        background: #F5F7F7;
        border-radius: 12px 0 0 12px;
        box-sizing: border-box;
        height: 310px;
        position: relative;
    }

    .type-sidebar-module{
        height: 646px;
    }

    .edit-program-sidebar{
        height: 646px;
    }

    .type-sidebar-module *{
        display: none;
    }

    .type-sidebar-module.show *{
        display: block;
    }

    .type-content{
        float: left;
        width: calc(100% - 150px);
        padding: 15px 20px 15px 20px;
        box-sizing: border-box;
        min-height: 310px;
        background: rgb(255 255 255 / 70%);
        box-shadow: -1px 1px 3px rgb(0 0 0 / 10%);
        border-radius: 12px 0 0 12px;
        position: relative;
    }

    .edit-program-content .type-content{
        min-height: 646px;
        padding: 15px 20px 50px 20px;
    }

    .edit-type-content-classes,
    .edit-type-content-modules{
        padding: 0;
    }

    .add-class,
    .add-pillar,
    .add-module{
        position: absolute;
        left: 20px;
        bottom: 10px;
        text-decoration: none !important;
        font-size: 14px;
        color: rgba(0,0,0,0.4);
        transition: 0.4s all;
        outline: none !important;
        box-shadow: none !important;
    }

    .add-class:hover,
    .add-class:focus,
    .add-pillar:hover,
    .add-pillar:focus,
    .add-module:hover,
    .add-module:focus{
        color: rgba(0,0,0,1);
    }

    .levels-table {
        background: #F5F7F7;
        box-shadow: 1px 1px 3px 0.5px rgb(0 0 0 / 10%);
        border-radius: 12px;
        width: 700px;
        padding: 6px 10px 5px 10px;
        min-height: 90px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }

    .levels-table .thead {
        background: #FFF;
        box-shadow: 1px 1px 2px 0.5px rgb(0 0 0 / 2%);
        border-radius: 10px;
        padding: 6px 10px;
    }

    .levels-table .tr .th,
    .levels-table .tr .td{
        width: 20%;
    }

    .edit-type-content-levels .add-new-button{
        margin-bottom: 20px;
    }

    .edit-type-content-levels .is-cancel-button,
    .edit-type-content-levels .is-save-button{
        top: 0;
        bottom: 0;
    }

    .classes-list{
        overflow-x: hidden;
        overflow-y: auto;
        height: 226px;
    }

    .class-list-item,
    .pillar-list-item,
    .module-list-item{
        position: relative;
        display: block;
        color: rgb(0 0 0 / 40%) !important;
        font-size: 16px;
        cursor: pointer;
        transition: 0.4s all;
        margin: 0 0 15px 0;
        width: 100px;
        padding: 6px 10px;
        border-radius: 20px;
    }

    .class-list-item.active,
    .pillar-list-item.active,
    .module-list-item.active{
        background: #fff;
        color: rgb(0 0 0 / 100%) !important;
    }

    .class-list-item:hover,
    .class-list-item:focus,
    .pillar-list-item:hover,
    .pillar-list-item:focus,
    .module-list-item:hover,
    .module-list-item:focus{
        color: rgb(0 0 0 / 100%) !important;
        text-decoration: underline !important;
    }

    .class-list-item button,
    .pillar-list-item button,
    .module-list-item button{
        position: absolute;
        right: 5px;
        top: 5px;
        cursor: pointer;
        border: none !important;
        background: transparent;
        letter-spacing: 2px;
        font-weight: 400;
        line-height: 1;
        color: rgba(0, 0, 0, 0.4);
        padding: 0;
        font-size: 14px;
    }

    .class-list-item button:hover,
    .class-list-item button:focus,
    .pillar-list-item button:hover,
    .pillar-list-item button:focus,
    .module-list-item button:hover,
    .module-list-item button:focus{
        color: rgba(0, 0, 0, 1);
    }

    .type-content-item{
        margin-bottom: 20px;
        min-height: 229px;
    }

    .type-content-item p,
    .type-content-item input{
        display: inline-block;
        font-weight: 400;
    }

    .class-edit-title{
        width: 237px;
        margin-right: 50px;
        height: 26px !important;
        min-height: 26px !important;
        line-height: 26px !important;
    }

    .type-content-item p:nth-of-type(1){
        width: 100px;
    }

    .type-content-item p:nth-of-type(2){
        width: 150px;
    }

    .type-content-inner,
    .type-content-inner-pillar,
    .type-content-inner-module,
    .type-content-inner-pillar-custom,
    .type-content-inner-module-custom{
        display: none;
    }

    .type-content-inner-pillar.show,
    .type-content-inner-module.show,
    .type-content-inner-pillar-custom.show,
    .type-content-inner-module-custom.show{
        display: block;
    }

    .preview-class{
        position: absolute;
        cursor: pointer;
        right: 20px;
        top: 15px;
        font-size: 14px;
        color: rgb(0 0 0 / 40%);
        background: #fff;
        box-shadow: 1px 1px 2px 0.5px rgb(0 0 0 / 8%);
        border-radius: 7px;
        border: none !important;
        padding: 1px 10px;
        transition: 0.4s all;
    }

    .preview-class:hover,
    .preview-class:focus{
        box-shadow: 1px 1px 2px 1px rgb(0 0 0 / 18%);
    }

    .add-step-to-class{
        position: static;
        margin-left: auto;
        display: block;
        margin-top: 15px;
    }

    .step-list{
        margin-top: 10px;
    }

    .content-wrapper{
        min-height: 202px;
        margin-bottom: 0;
    }

    .continued-content,
    .subscriptions-content-wrapper{
        display: none;
    }

    .subscriptions-content-wrapper{
        clear: both;
    }

    .subscriptions-content{
        padding: 10px;
        background: #F5F7F7;
        box-shadow: 1px 1px 3px 0.5px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .add-new-subscription-price{
        width: 137px;
        border: none;
        background: #375CFF;
        box-shadow: 2px 2px 6px rgb(0 0 0 / 12%);
        margin: 0;
        line-height: 1;
        padding: 8px 11px 9px;
        transition: 0.4s all !important;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        color: #fff;
        cursor: pointer;
        position: relative;
        margin-top: 10px;
        margin-bottom: 30px;
        margin-left: auto;
        display: block;
    }

    .add-new-subscription-price:hover,
    .add-new-subscription-price:focus{
        opacity: 0.7;
    }


    .is-continued .continued-content,
    .is-subscription .subscriptions-content-wrapper{
        display: block;
    }

    .subscription-content-titles:after,
    .subscription-content-items:after,
    .subscription-content-item:after{
        content: '';
        display: block;
        clear: both;
    }

    .subscription-content-titles{
        background: #fff;
        box-shadow: 1px 1px 2px 0.5px rgba(0, 0, 0, 0.02);
        border-radius: 8px;
        padding: 6px 10px;
    }

    .subscription-content-titles p,
    .subscription-content-items p{
        float: left;
        width: 20%;
        font-weight: 500;
        font-size: 14px;
        margin: 0;
        line-height: 1;
    }

    .subscription-content-items p{
        font-weight: 400;
    }

    .subscription-content-item{
        padding: 10px 8px;
    }

    .continued-content p {
        float: left;
        clear: both;
        margin: 0 0 27px 0;
        width: 363px;
    }

    .continued-content select{
        border-radius: 15px;
        margin-right: 15px;
        width: 115px;
        line-height: 24px;
        height: 26px;
        min-height: 26px;
    }

    .content-wrapper.is-upgrade .extra-content p:nth-of-type(1),
    .content-wrapper.is-upgrade .extra-content .checkbox-wrapper:nth-of-type(1),
    .content-wrapper.is-upgrade .extra-content .continued_subscription_type{
        display: none;
    }


    .content-wrapper.is-downgrade .hide-for-continued-downgrade,
    .content-wrapper.is-continued .hide-for-continued-downgrade{
        display: none;
    }

    .step-item{
        background: #F5F7F7;
        box-shadow: 1px 1px 3px 0.5px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        position: relative;
        padding: 10px;
        margin-bottom: 10px;
    }


    .move-step{
        position: absolute;
        right: 5px;
        top: 0;
        cursor: pointer;
        border: none !important;
        background: transparent;
        letter-spacing: 2px;
        font-weight: 400;
        line-height: 1;
        color: rgba(0, 0, 0, 0.4);
        padding: 0;
        font-size: 14px;
    }

    .move-step:hover,
    .move-step:focus{
        color: rgba(0, 0, 0, 1);
    }

    .step-item p{
        width: 100%;
        display: inline-block;
    }

    .step-item > p:nth-of-type(1){
        width: 200px;
    }

    .step-item > p:nth-of-type(2) {
        width: 244px;
        margin-left: 78px;
    }

    .video-wrapper{
        display: none;
        width: 244px;
        float: left;
        border: 1px solid #777;
        border-radius: 6px;
        padding: 0;
        background: #fff;
    }

    .checklist-wrapper{
        width: 244px;
        float: right;
        border: 1px solid #777;
        border-radius: 6px;
        padding: 0;
        background: #fff;
    }

    .video-wrapper.opened,
    .checklist-wrapper.opened{
        padding: 10px;
    }

    .video-wrapper.show{
        display: block;
    }

    .video-wrapper input,
    .video-wrapper textarea,
    .checklist-wrapper input,
    .checklist-wrapper textarea{
        width: 100%;
        margin: 0 0 10px 0;
    }

    .video-wrapper textarea,
    .checklist-wrapper textarea{
        min-height: 90px;
    }

    .video-wrapper p,
    .checklist-wrapper p{
        display: block;
        width: 100% !important;
        margin: 0 0 5px 0;
    }

    .step-video-title,
    .step-checklist-title{
        cursor: pointer;
        display: block;
        width: 100%;
        background: #FFFFFF;
        border: none;
        height: 38px;
        font-size: 16px;
        line-height: 34px;
        border-radius: 4px;
        transition: 0.4s all;
        text-align: left;
        position: relative;
    }

    .step-video-title:hover,
    .step-video-title:focus,
    .step-checklist-title:hover,
    .step-checklist-title:focus{
        background: #efefef;
    }

    .video-wrapper *,
    .checklist-wrapper *{
        display: none !important;
    }

    .video-wrapper .step-video-title,
    .checklist-wrapper .step-checklist-title{
        display: block !important;
    }

    .video-wrapper.opened *,
    .checklist-wrapper.opened *{
        display: block !important;
    }

    .video-wrapper.opened .step-video-title,
    .checklist-wrapper.opened .step-checklist-title{
        display: none !important;
    }

    .checklist-wrapper.opened select.module-program-select,
    .checklist-wrapper.opened select.module-module-select{
        display: inline-block !important;
    }

    .step-video-title:after,
    .step-checklist-title:after{
        content: '>';
        display: block;
        position: absolute;
        right: 5px;
        top: 2px;
        transform: rotate(90deg) scaleY(1.5);
        font-size: 16px;
    }

    .add-step-link,
    .add-step-step,
    .add-module-link{
        background: #4A7DFF;
        border: 1px solid #fff !important;
        border-radius: 4px;
        width: 90px;
        color: #fff !important;
        margin-left: auto;
        margin-bottom: 18px;
        text-align: center;
        padding: 2px;
        text-decoration: none !important;
        transition: 0.4s all;
        outline: none !important;
        box-shadow: none !important;
        display: block;
        clear: both;
    }

    .add-step-link:hover,
    .add-step-link:focus,
    .add-step-step:hover,
    .add-step-step:focus,
    .add-module-link:hover,
    .add-module-link:focus{
        background: #1f4093;
    }

    .cancel-step-video,
    .cancel-step-checklist{
        border: none;
        margin: 0;
        line-height: 1;
        padding: 6px 11px 6px;
        transition: 0.4s all !important;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        background: rgba(255, 255, 255, 0.99);
        box-shadow: 2px 2px 6px rgb(0 0 0 / 12%);
        width: 115px;
        margin-right: 10px;
        color: #000;
    }

    html body .video-wrapper.opened button.cancel-step-video,
    html body .checklist-wrapper.opened button.cancel-step-checklist{
        display: inline-block !important;
    }

    .cancel-step-video:hover,
    .cancel-step-video:focus,
    .cancel-step-checklist:hover,
    .cancel-step-checklist:focus{
        background: #274AFF;
        color: #fff;
    }

    .save-step-video,
    .save-step-checklist{
        width: 115px;
        border: none;
        background: #375CFF;
        box-shadow: 2px 2px 6px rgb(0 0 0 / 12%);
        margin: 0;
        line-height: 1;
        padding: 6px 11px 6px;
        transition: 0.4s all !important;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        color: #fff;
        cursor: pointer;
    }

    html body .video-wrapper.opened button.save-step-video,
    html body .checklist-wrapper.opened button.save-step-checklist{
        display: inline-block !important;
    }

    .save-step-video:hover,
    .save-step-video:focus,
    .save-step-checklist:hover,
    .save-step-checklist:focus{
        opacity: 0.8;
    }

    .cancel-step-checklist,
    .save-step-checklist{
        display: inline-block;
    }

    .step-links-item,
    .module-links-item{
        margin-bottom: 6px;
        position: relative;
        padding-left: 17px;
        width: auto;
        margin-left: auto;
        float: right;
        height: 20px;
        clear: both;
        padding-right: 28px;
    }

    .step-links-item p,
    .module-links-item p{
        font-size: 12.5px;
        color: rgba(0,0,0,0.7);
        line-height: 20px;
        width: auto !important;
    }

    .link-icon{
        border-radius: 4px;
        width: 20px;
        height: 20px;
        box-sizing: border-box;
        vertical-align: middle;
        transform: translate(50%,50%);
        background-size: 14px 14px;
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-image: url(/wp-content/themes/eternumultra/assets/img/step-link-icon.png);
        border: 1px solid #777;
        padding: 2px;
        position: absolute;
        right: 10px;
        top: -10px;
    }

    .move-step-link,
    .move-module-link{
        position: absolute;
        left: 0;
        top: 0;
        cursor: pointer;
        border: none !important;
        background: transparent;
        letter-spacing: 1px;
        line-height: 1;
        color: rgba(0, 0, 0, 0.6);
        padding: 0;
        font-size: 14px;
        font-weight: 700;
    }

    .move-step-link:hover,
    .move-step-link:focus,
    .move-module-link:hover,
    .move-module-link:focus{
        color: rgba(0, 0, 0, 1);
    }

    .step-steps-item{
        background: rgb(232 232 232 / 60%);
        border: 1px solid #777;
        border-radius: 6px;
        padding: 12px 6px 7px 6px;
        margin: 0 0 10px 0;
        position: relative;
    }

    .move-step-step {
        position: absolute;
        right: 6px;
        top: 4px;
        cursor: pointer;
        border: none !important;
        background: transparent;
        letter-spacing: 1px;
        line-height: 1;
        color: rgba(0, 0, 0, 0.6);
        padding: 0;
        font-size: 14px;
        font-weight: 700;
    }

    .move-step-step:hover,
    .move-step-step:focus{
        color: rgba(0, 0, 0, 1);
    }

    .step-steps-item select.step-step-type{
        position: absolute;
        right: 30px;
        top: 5px;
        height: 22px;
        min-height: 22px;
        line-height: 20px;
        border-radius: 6px;
    }

    .step-steps-item select.module-program-select,
    .step-steps-item select.module-module-select{
        height: 22px;
        min-height: 22px;
        line-height: 20px;
        border-radius: 4px;
        width: 101px;
    }

    .step-steps-item select.module-program-select{
        margin-right: 20px !important;
    }

    .main-levels .tr .td{
        padding: 7px 15px 7px 0;
    }

    .main-levels .tr .th:nth-of-type(5),
    .main-levels .tr .td:nth-of-type(5){
        width: 16px !important;
        padding: 11px 0 0 0 !important;
    }

    .remove-level{
        text-decoration: none !important;
        color: #000 !important;
        outline: none !important;
        box-shadow: none !important;
    }

    .main-levels .tr input,
    .main-levels .tr select{
        width: 100%;
        height: 26px;
        min-height: 26px;
        line-height: 24px;
    }

    .main-levels .tr select{
        border-radius: 20px;
    }

    .main-levels .tr .th,
    .main-levels .tr .td {
        width: calc(25% - 4px);
    }

    .upgrade-levels p{
        font-size: 14px;
        font-weight: 600;
        margin: 0 0 16px 0;
    }

    .items-4-wrapper input{
        display: inline-block;
        height: 26px;
        min-height: 26px;
        line-height: 24px;
        width: 340px;
        margin-right: 25px;
    }

    .items-4-wrapper select{
        display: inline-block;
        height: 26px;
        min-height: 26px;
        line-height: 24px;
        border-radius: 20px;
        width: 120px;
    }

    .items-4-wrapper p{
        font-weight: 400;
        display: inline-block;
        width: 90px;
    }

    .metric-shortcode-p{
        font-weight: 400 !important;
        display: inline-block;
        width: 140px;
    }

    .metric-shortcode{
        display: inline-block;
        height: 26px;
        min-height: 26px !important;
        line-height: 24px !important;
        border-radius: 20px !important;
    }

    .classes-list-item-title{
        width: calc(100% - 10px);
        overflow: hidden;
        display: inline-block;
    }

    .pillars-wrapper,
    .modules-wrapper{
        display: none;
    }

    .pillars-list,
    .modules-list{
        overflow-x: hidden;
        overflow-y: auto;
        height: 562px;
    }

    .type-content-item .p-1-title{
        width: 95px !important;
    }

    .type-content-item .p-2-title{
        width: 50px !important;
        margin-right: 15px;
    }

    .type-content-item .p-3-title{
        width: 95px !important;
    }

    .type-content-item .p-block-title{
        display: block;
    }

    .module-description,
    .module-transcription{
        min-height: 85px;
        display: block;
        width: 100%;
        margin: 0 0 18px 0;
    }

    .module-video-url,
    .pillar-back-text{
        width: 489px;
        height: 26px !important;
        min-height: 26px !important;
        line-height: 26px !important;
        margin-bottom: 15px;
    }

    .module-edit-title,
    .pillar-edit-title{
        width: 230px;
        margin-right: 40px;
        height: 26px !important;
        min-height: 26px !important;
        line-height: 26px !important;
        margin-bottom: 15px;
    }

    .pillar-bullet-1,
    .pillar-bullet-2,
    .pillar-bullet-3,
    .pillar-bullet-4{
        width: 170px;
        margin-right: 45px;
        height: 26px !important;
        min-height: 26px !important;
        line-height: 26px !important;
        margin-bottom: 15px;
    }

    .pillar-bullet-2,
    .pillar-bullet-4{
        margin-right: 0;
    }

    .module-status,
    .pillar-status{
        width: 145px;
        height: 26px;
        min-height: 26px !important;
        line-height: 24px !important;
        border-radius: 20px !important;
    }

    .auto-unlock-wrapper,
    .drip-release-wrapper{
        display: none;
        background: rgba(232, 232, 232, 0.6);
        border: 1px solid #777;
        border-radius: 4px;
        width: 230px;
        padding: 7px;
    }

    .drip-release-wrapper{
        margin-top: 20px;
    }

    .p-4-title{
        width: 202px;
    }

    .edit-program-content input[type="checkbox"]:checked ~ .auto-unlock-wrapper,
    .edit-program-content #drip_release:checked ~ .drip-release-wrapper{
        display: block;
    }

    .auto-unlock-type,
    .drip-release-type{
        width: 90px;
        float: right;
        height: 22px !important;
        min-height: 22px !important;
        line-height: 20px !important;
        border-radius: 6px !important;
        margin: 0 0 5px 0 !important;
    }

    .auto-unlock-pillar{
        width: 140px;
        display: inline-block;
        vertical-align: middle;
        height: 22px !important;
        min-height: 22px !important;
        line-height: 20px !important;
        border-radius: 6px !important;
    }

    .auto-unlock-time{
        width: 140px;
        display: inline-block;
        vertical-align: middle;
        height: 22px !important;
        min-height: 22px !important;
        line-height: 20px !important;
        border-radius: 6px !important;
    }

    .auto-unlock-pillar-wrapper p,
    .auto-unlock-time-wrapper p{
        display: block;
        width: 100% !important;
        font-size: 13.5px;
        margin: 0 0 10px 0;
    }

    .auto-unlock-type ~ *,
    .drip-release-type ~ *{
        clear: both;
    }

    .auto-unlock-pillar-wrapper,
    .auto-unlock-time-wrapper,
    .drip-release-module-wrapper,
    .drip-release-pillar-wrapper,
    .drip-release-time-wrapper{
        display: none;
    }

    .drip-release-module-wrapper,
    .drip-release-pillar-wrapper,
    .drip-release-time-wrapper{
        width: 100%;
    }

    .auto-unlock-pillar-wrapper.show,
    .auto-unlock-time-wrapper.show,
    .drip-release-module-wrapper.show,
    .drip-release-pillar-wrapper.show,
    .drip-release-time-wrapper.show{
        display: inline-block;
    }

    .auto-unlock-days{
        width: 50px;
        height: 22px !important;
        min-height: 22px !important;
        line-height: 20px !important;
        border-radius: 6px !important;
        display: inline-block;
        vertical-align: middle;
    }

    .auto-unlock-wrapper > p{
        width: auto;
        display: inline-block;
    }

    .auto-unlock-days-wrapper p{
        width: auto !important;
        display: inline-block;
        vertical-align: middle;
        margin: 0 !important;
        font-size: 13.5px;
    }

    .auto-unlock-days-wrapper{
        display: inline-block;
    }

    .p-5-title{
        vertical-align: middle;
        display: inline-block;
        width: 140px;
        margin: 0 !important;
    }

    .program-checkbox-wrapper{
        width: 42px;
        display: inline-block;
        vertical-align: middle;
    }

    .p-6-title{
        vertical-align: middle;
        display: inline-block;
        width: 140px;
        margin: 0 0 0 215px !important;
    }

    .drip-release-wrapper p{
        display: block;
        width: 100% !important;
        font-size: 13.5px;
        margin: 0 0 10px 0;
    }

    .drip-release-time{
        width: 140px;
        display: inline-block !important;
        vertical-align: middle;
        height: 22px !important;
        min-height: 22px !important;
        line-height: 20px !important;
        border-radius: 6px !important;
    }

    .drip-release-days{
        width: 50px;
        height: 22px !important;
        min-height: 22px !important;
        line-height: 20px !important;
        border-radius: 6px !important;
        display: inline-block !important;
        vertical-align: middle;
    }

    p.p-7-title{
        width: auto !important;
        display: inline-block;
        vertical-align: middle;
        margin: 0 !important;
        font-size: 13.5px;
    }

    .drip-release-module-pillar,
    .drip-release-module-module,
    .drip-release-pillar-pillar{
        width: 101px;
        display: inline-block;
        vertical-align: middle;
        height: 22px !important;
        min-height: 22px !important;
        line-height: 20px !important;
        border-radius: 6px !important;
    }

    .drip-release-module-pillar{
        margin-right: 20px;
    }

    .drip-release-pillar-wrapper p:nth-of-type(2){
        display: inline-block;
        vertical-align: middle;
        width: 122px !important;
        margin: 0 !important;
    }

    .program-edit-cancel{
        position: absolute;
        bottom: 15px;
        top: auto;
        left: 323px;
    }

    .edit-type-content-program .is-save-button{
        position: absolute;
        bottom: 15px;
        top: auto;
        left: 474px;
    }

    .select-programs-wrapper,
    .select-program-pillar-module{
        display: none;
    }

    .current-year{
        display: none;
    }
</style>
<div class="current-year"><?php echo date('y'); ?></div>
<?php

$tab = '';
if (isset($_GET['tab'])){
    $tab = $_GET['tab'];
}

?>

<div class="select-programs-wrapper">
    <select class="select-program">
        <?php
        $args = array(
            'post_type' => 'memberships_program',
            'posts_per_page' => 9999,
            'orderby' => 'date',
            'order' => 'ASC',
            'post_status' => array('publish', 'draft', 'trash'),
            'meta_query'     => [
                'relation' => 'OR',
                [
                    'key'      => 'archive',
                    'value'    => 'no'
                ],
                [
                    'key'      => 'archive',
                    'value'    => 'yes'
                ]
            ]
        );
        $not_empty_programs = array();
        $programs_array = array();
        $program_array_item = array();
        $query = new WP_Query($args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $curr_id = get_the_ID();
                $title = get_post_meta($curr_id, 'title', true);
                $pillar_count = (int)get_post_meta($curr_id, 'pillar_count', true);
                for($i = 1; $i <= $pillar_count; $i++){
                    $pillar_data = get_post_meta($curr_id, 'pillar_number_'.$i, true);
                    if ($pillar_data){
                        $module_count = (int)get_post_meta($curr_id, 'module_count_'.$i, true);
                        for ($j = 1; $j <= $module_count; $j++){
                            $module_data = get_post_meta($curr_id, 'module_number_'.$i.'_id_'.$j, true);
                            if ($module_data){
                                $not_empty_programs[] = $curr_id;
                                $program_array_item['id'] = $curr_id;
                                $program_array_item['title'] = $title;
                                $programs_array[] = $program_array_item;
                                ?>
                                <option value="<?php echo $curr_id; ?>"><?php echo $title; ?></option>
                                <?php
                                break 2;
                            }
                        }
                    }
                }
            }
        }
        ?>
    </select>
    <?php

    $modules_array = array();
    $modules_array_inner = array();
    $modules_array_item = array();

    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $curr_id = get_the_ID();
            $pillar_count = (int)get_post_meta($curr_id, 'pillar_count', true);

            if (in_array($curr_id,$not_empty_programs)){
                $modules_array_inner = array();
                ?>
                <select class="select-program-pillar-module" data-id="<?php echo $curr_id; ?>">
                    <?php
                    for($i = 1; $i <= $pillar_count; $i++){
                        $pillar_data = get_post_meta($curr_id, 'pillar_number_'.$i, true);
                        if ($pillar_data){

                            $module_count = (int)get_post_meta($curr_id, 'module_count_'.$i, true);
                            for ($j = 1; $j <= $module_count; $j++){
                                $module_data = get_post_meta($curr_id, 'module_number_'.$i.'_id_'.$j, true);
                                if ($module_data){

                                    $modules_array_item['id'] = 'id_'.$curr_id.'_number_'.$i.'_counter_'.$j;
                                    $modules_array_item['title'] = $pillar_data['title'].' - '.$module_data['title'];
                                    $modules_array_inner[] = $modules_array_item;

                                    ?>
                                    <option value="<?php echo 'id_'.$curr_id.'_number_'.$i.'_counter_'.$j; ?>">
                                        <?php echo $pillar_data['title'].' - '.$module_data['title']; ?>
                                    </option>
                                    <?php
                                }
                            }
                        }
                    }
                    ?>
                </select>
                <?php
                $modules_array[] = $modules_array_inner;
            }
        }
    }
    wp_reset_query();
    ?>
</div>

<style>
    .customers-block{
        width: 220px;
        height: 95px;
        box-shadow: 1px 1px 3px 0.5px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        background: #FFF;
        outline: none !important;
        border: 1px solid rgba(94, 139, 255, 0) !important;
        cursor: pointer;
        float: left;
        margin-right: 15px;
        transition: 0.4s all;
        padding: 10px 15px;
    }

    .customers-block h3{
        margin: 0 0 15px 0 !important;
        text-align: left;
        font-size: 20px;
        line-height: 1;
    }

    .customers-block h2{
        text-align: right;
        font-size: 38px;
        line-height: 1;
        margin: 0 !important;
    }

    .customers-block:hover,
    .customers-block:focus,
    .customers-block.active{
        border: 1px solid rgba(94, 139, 255, 0.99) !important;
    }

    .customers-block-failed.have-items{
        background: #FFF8F9;
    }

    .customers-block-failed.have-items:hover,
    .customers-block-failed.have-items:focus,
    .customers-block-failed.have-items.active{
        border: 1px solid #A4243F !important;
    }

    .customers-blocks-wrapper:after{
        content: '';
        display: block;
        clear: both;
    }

    .find-icon{
        width: 42px;
        height: 36px;
        margin-bottom: 10px;
        margin-left: auto;
        margin-right: 6px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-image: url(/wp-content/themes/eternumultra/assets/img/find-icon.png);
    }

    .customers-list{
        background: #FCFDFD;
        box-shadow: 1px 1px 3px 0.5px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        width: 895px;
        height: auto;
        min-height: 680px;
        outline: none !important;
        border: 1px solid rgba(94, 139, 255, 0) !important;
        cursor: pointer;
        transition: 0.4s all;
        padding: 10px 15px;
        margin: 15px 0 0 0;
        display: none;
        position: relative;
    }
    
    .customers-list.active{
        display: block;
    }

    .customers-list h3{
        margin: 0 0 15px 0 !important;
        text-align: left;
        font-size: 20px;
        line-height: 1;
    }

    .customers-list .table .tr,
    .commissions-list .table .tr{
        border-bottom: 1px solid rgba(183, 183, 183, 0.5);
    }

    .tab-content-money .td{
        line-height: 24px;
    }

    .customers-list .table .td:nth-of-type(1),
    .customers-list .table .td:nth-of-type(2),
    .commissions-list .table .td:nth-of-type(2){
        width: 188px !important;
    }


    .commissions-list .table .td:nth-of-type(1){
        width: 148px !important;
    }

    .customers-list .table .td:nth-of-type(3),
    .customers-list .table .td:nth-of-type(5),
    .customers-list .table .td:nth-of-type(6),
    .commissions-list .table .td:nth-of-type(5),
    .commissions-list .table .td:nth-of-type(6){
        width: 93px !important;
    }

    .commissions-list .table .td:nth-of-type(3){
        width: 133px !important;
    }

    .customers-list .table .td:nth-of-type(4),
    .commissions-list .table .td:nth-of-type(4){
        width: 130px !important;
    }

    .customers-list .table .td:nth-of-type(7),
    .commissions-list .table .td:nth-of-type(7){
        width: 110px !important;
    }

    .customers-list.customers-list-failed .table .td:nth-of-type(1){
        width: 36px !important;
    }

    .customers-list.customers-list-failed .table .td:nth-of-type(2),
    .customers-list.customers-list-failed .table .td:nth-of-type(3){
        width: 184px !important;
    }

    .customers-list.customers-list-failed .table .td:nth-of-type(4),
    .customers-list.customers-list-failed .table .td:nth-of-type(5),
    .customers-list.customers-list-failed .table .td:nth-of-type(6){
        width: 90px !important;
    }

    .customers-list.customers-list-failed .table .td:nth-of-type(7),
    .customers-list.customers-list-failed .table .td:nth-of-type(8){
        width: 110px !important;
    }

    .failed-list-actions{
        position: absolute;
        right: 15px;
        top: 10px;
    }

    .retry-charge,
    .delete-failed{
        display: inline-block;
        vertical-align: top;
        opacity: 0.5;
        color: #444;
        border: 1px solid #aaa;
        border-radius: 7px;
        padding: 4px 7px;
        line-height: 1;
        background: #fff;
        font-size: 14px;
        margin-left: 8px;
        transition: 0.4s all;
    }

    .retry-charge.active,
    .delete-failed.active{
        opacity: 1;
        cursor: pointer;
    }

    .retry-charge.active:hover,
    .delete-failed.active:hover,
    .retry-charge.active:focus,
    .delete-failed.active:focus{
        color: #0000f0;
        border: 1px solid #0000f0;
    }

    .failed-send-email{
        display: inline-block;
        vertical-align: top;
        color: #444;
        border: 1px solid #aaa;
        border-radius: 7px;
        padding: 4px 7px;
        line-height: 1;
        background: #fff;
        font-size: 14px;
        transition: 0.4s all;
    }

    .failed-send-email:hover,
    .failed-send-email:focus{
        color: #0000f0;
        border: 1px solid #0000f0;
        cursor: pointer;
    }

    .open-file{
        display: inline-block;
        vertical-align: top;
        color: #fff;
        border: 1px solid #487bff;
        border-radius: 7px;
        padding: 4px 14px;
        line-height: 1;
        background: #487bff;
        font-size: 14px;
        transition: 0.4s all;
        cursor: pointer;
    }

    .open-file:hover,
    .open-file:focus{
        opacity: 0.6;
    }

    .find-list-actions{
        position: absolute;
        right: 15px;
        top: 10px;
    }

    .search-customers-input{
        width: 200px;
    }

    .search-customers{
        display: inline-block;
        vertical-align: top;
        color: #fff;
        border: 1px solid #487bff;
        border-radius: 7px;
        padding: 7px 20px;
        line-height: 1;
        background: #487bff;
        font-size: 15px;
        transition: 0.4s all;
        cursor: pointer;
    }

    .search-customers:hover,
    .search-customers:focus{
        opacity: 0.6;
    }

    .customers-list .table .tr.hidden{
        display: none;
    }
    
    .commissions-blocks{
        width: 299px;
        min-height: 95px;
        box-shadow: 1px 1px 3px 0.5px rgb(0 0 0 / 10%);
        border-radius: 10px;
        background: #FFF;
        outline: none !important;
        border: 1px solid rgba(94, 139, 255, 0) !important;
        cursor: pointer;
        float: left;
        margin-right: 15px;
        transition: 0.4s all;
        padding: 10px 15px;
        box-sizing: border-box;
        position: relative;
        z-index: 22;
    }

    .commissions-blocks .drop{
        width: 100%;
    }
    
    .commissions-blocks h3,
    .commissions-list h3{
        margin: 0 0 23px 0 !important;
        text-align: left;
        font-size: 20px;
        line-height: 1;
        display: inline-block;
    }

    .commissions-list h3{
        margin: 0 0 15px 0 !important;
    }

    .commissions-list{
        background: #FCFDFD;
        box-shadow: 1px 1px 3px 0.5px rgb(0 0 0 / 10%);
        border-radius: 10px;
        width: 895px;
        height: auto;
        min-height: 680px;
        outline: none !important;
        border: 1px solid rgba(94, 139, 255, 0) !important;
        cursor: pointer;
        float: left;
        transition: 0.4s all;
        padding: 10px 15px;
        margin: 15px 0 0 0;
        display: block;
        position: relative;
    }

    .commissions-list-total{
        float: right;
    }

    .when-select,
    .what-select,
    .who-select{
        float: right;
        border-radius: 20px !important;
        width: 120px;
        margin: 0 !important;
        font-size: 15.5px !important;
        padding: 0 10px !important;
        line-height: 26px !important;
        height: 28px !important;
        min-height: 28px !important;
        box-shadow: none !important;
    }

    .when-select-wrapper{
        float: right;
        position: relative;
        border-radius: 8px !important;
        z-index: 1;
    }

    .when-select-wrapper.active{
        float: right;
        background-color: rgba(55, 92, 255, 0.9) !important;
    }

    .when-select-wrapper.active select{
        color: #fff !important;
        opacity: 1 !important;
        border: 1px solid rgba(55, 92, 255, 0.9) !important;
    }

    .when-select-wrapper.active option {
        color: rgba(255, 255, 255, 0.9) !important;
        background-color: rgba(55, 92, 255, 0.9) !important;
    }

    .when-select-wrapper.active option:disabled {
        color: rgba(255, 255, 255, 0.9) !important;
        background-color: rgba(174, 189, 255, 0.9) !important;
    }

    .when-select{
        opacity: 0.5 !important;
        position: relative;
        background-image: none !important;
        background: transparent !important;
        border-radius: 8px !important;
    }

    .when-select-arrow{
        position: absolute;
        top: 12px;
        right: 10px;
        width: 0;
        height: 0;
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-top: 6px solid #777;
        z-index: -1;
    }

    .when-select-wrapper.active .when-select-arrow{
        border-top: 6px solid #fff;
    }

    .when-input{
        width: 169px;
        margin-right: 8px;
        margin-left: 0;
    }

    .when-search{
        display: inline-block;
        vertical-align: top;
        color: #fff;
        border: 1px solid #487bff;
        border-radius: 7px;
        padding: 7px 20px;
        line-height: 1;
        background: #487bff;
        font-size: 15px;
        transition: 0.4s all;
        cursor: pointer;
    }

    .when-search:hover,
    .when-search:focus{
        opacity: 0.6;
    }

    .who-select-wrapper,
    .what-select-wrapper,
    .memberships-details-select{
        display: none !important;
    }

    .memberships-details-wrapper{
        background: #FCFDFD;
        box-shadow: 1px 1px 3px 0.5px rgb(0 0 0 / 10%);
        border-radius: 10px;
        width: 895px;
        height: auto;
        min-height: 320px;
        outline: none !important;
        border: 1px solid rgba(94, 139, 255, 0) !important;
        float: left;
        transition: 0.4s all;
        padding: 10px 15px;
        margin: 15px 0 0 0;
        display: block;
        position: relative;
    }

    .memberships-details-wrapper h3 {
        margin: 0 0 30px 0 !important;
        text-align: left;
        font-size: 20px;
        line-height: 1;
    }

    .memberships-details-actions{
        float: right;
        position: absolute;
        right: 15px;
        top: 10px;
    }

    .memberships-details-template{
        float: left;
        border-radius: 20px !important;
        width: 160px;
        margin: 0 10px 0 0 !important;
        font-size: 15.5px !important;
        padding: 0 10px !important;
        line-height: 26px !important;
        height: 28px !important;
        min-height: 28px !important;
        box-shadow: none !important;
    }

    .memberships-details-add-template{
        cursor: pointer;
        border: none !important;
        background: rgba(255, 255, 255, 0.99);
        box-shadow: 1px 1px 2px 0.5px rgb(0 0 0 / 8%);
        border-radius: 4px;
        font-size: 15.5px !important;
        line-height: 28px;
        padding: 0 40px;
        font-weight: 600;
        margin-right: 10px;
        transition: 0.4s all;
    }

    .memberships-details-add-template:hover,
    .memberships-details-add-template:focus{
        color: #0000f0;
    }

    .memberships-details-save-delete-template{
        background: transparent;
        border: none !important;
        letter-spacing: 3px;
        padding: 0;
        cursor: pointer;
        line-height: 0;
        height: 10px;
        transform: translate(0, -3px);
        transition: 0.4s all;
    }

    .memberships-details-save-delete-template:hover,
    .memberships-details-save-delete-template:focus{
        color: #0000f0;
    }

    .memberships-details-left{
        background: #F5F7F7CC;
        border-radius: 10px;
        float: left;
        margin-right: 20px;
        width: 530px;
        padding: 15px;
        margin-bottom: 10px;
        min-height: 192px;
    }

    .memberships-details-right{
        background: #F5F7F7CC;
        border-radius: 10px;
        float: left;
        width: 285px;
        padding: 15px;
        margin-bottom: 10px;
        min-height: 192px;
    }

    .memberships-details-right h3{
        font-weight: 400;
        margin: 0 0 20px 0 !important;
        color: #000;
        float: left;
        line-height: 28px;
    }

    .memberships-details-right .checkbox-wrapper:nth-of-type(1),
    .memberships-details-right .checkbox-wrapper:nth-of-type(2){
        float: right;
    }

    .memberships-details-wrapper p{
        margin: 0 0 20px 0 !important;
        font-weight: 400;
        line-height: 28px;
    }

    .confirm-memberships-details{
        clear: both;
        margin-left: auto;
        display: block;
        vertical-align: top;
        color: #fff;
        border: 1px solid #375CFF;
        border-radius: 7px;
        padding: 10px 34px;
        line-height: 1;
        background: #375CFF;
        font-size: 15.5px;
        transition: 0.4s all;
        cursor: pointer;
    }

    .confirm-memberships-details.disabled,
    .confirm-memberships-details.disabled-stripe-success{
        cursor: default;
        border: 1px solid #aaa;
        background: #aaa;
    }

    .confirm-memberships-details:not(.disabled):not(.disabled-stripe-success):hover,
    .confirm-memberships-details:not(.disabled):not(.disabled-stripe-success):focus{
        opacity: 0.6;
    }

    .memberships-details-wrapper input[type="checkbox"]{
        display: none;
    }

    .memberships-details-wrapper label {
        width: 40px;
        height: 14px;
        border-radius: 15px;
        background-color: #aaa;
        transition: 0.4s all;
        position: relative;
        z-index: 1;
        cursor: pointer;
        display: inline-block;
        text-align: left;
        font-weight: 400;
        padding: 0;
    }

    .memberships-details-wrapper input[type="checkbox"]:checked ~ label {
        background-color: #99EB58;
    }

    .memberships-details-wrapper label:before{
        content: '';
        display: block;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #838482;
        position: absolute;
        left: 0;
        top: -3px;
        transition: 0.4s all;
    }

    .memberships-details-wrapper input[type="checkbox"]:checked ~ label:before,
    .memberships-details-wrapper input[type="checkbox"]:checked ~ label:before {
        background-color: #6BDE11;
        left: 20px;
    }

    .memberships-details-period-type{
        float: right;
        border-radius: 20px !important;
        width: 110px;
        margin: 0!important;
        font-size: 15.5px !important;
        padding: 0 10px !important;
        line-height: 26px !important;
        height: 28px !important;
        min-height: 28px !important;
        box-shadow: none !important;
    }

    .memberships-details-subscription{
        float: right;
        border-radius: 20px !important;
        width: 140px;
        margin: 0 !important;
        font-size: 15.5px !important;
        padding: 0 10px !important;
        line-height: 26px !important;
        height: 28px !important;
        min-height: 28px !important;
        box-shadow: none !important;
    }

    .clear-both{
        clear: both;
    }

    .float-left{
        float: left;
    }

    .memberships-details-period-days{
        float: left;
        margin-left: 15px;
        width: 67px;
        height: 28px;
        min-height: 28px !important;
    }

    .memberships-details-left .drop{
        min-height: 26px !important;
        line-height: 24px !important;
        float: right;
        width: 383px;
        margin: 0 0 20px 0 !important;
    }

    .memberships-details-left .drop .drop-display .item {
        height: 22px !important;
        line-height: 24px !important;
    }

    .memberships-details-left .checkbox-wrapper{
        float: right;
    }

    .memberships-details-left p{
        width: 145px;
    }

    .payment-due-input,
    .payment-plan-price-input{
        float: left;
        width: 174px;
        min-height: 28px;
        padding: 0 10px;
        box-sizing: border-box;
        margin: 0;
        margin-right: 20px;
    }

    .number-of-cycles-input{
        float: left;
        margin: 0;
        padding: 0 5px;
        width: 46px;
        min-height: 28px;
    }

    .billing-period{
        float: left;
        width: 174px;
        min-height: 28px !important;
        height: 28px !important;
        margin: 0 !important;
        line-height: 26px !important;
        border-radius: 6px !important;
        background-color: #375CFFE5 !important;
        color: #fff !important;
        border: none !important;
    }

     .memberships-details-left .product-plan-wrapper p:nth-last-of-type(1){
        width: 84px;
        margin-right: 10px !important;
    }

    .starting-on{
        float: left;
        width: 97px;
        min-height: 28px !important;
        height: 28px !important;
        margin: 0 !important;
        line-height: 26px !important;
        border-radius: 6px !important;
        background-color: #375CFFE5 !important;
        color: #fff !important;
        border: none !important;
    }

    .select-blue-wrapper{
        background-color: rgba(55, 92, 255, 0.9) !important;
        position: relative;
        border-radius: 8px !important;
        z-index: 1;
        float: left;
    }

    .margin-right-20{
        margin-right: 20px;
    }

    .select-blue-wrapper select{
        background: transparent !important;
        color: #fff !important;
        opacity: 1 !important;
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
    }

    .select-blue-wrapper select option{
        color: rgba(255, 255, 255, 0.9) !important;
        background-color: rgba(55, 92, 255, 0.9) !important;
    }

    .select-blue-arrow{
        position: absolute;
        top: 12px;
        right: 10px;
        width: 0;
        height: 0;
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-top: 6px solid #fff;
        z-index: -1;
    }

    .customer-details-wrapper.hidden .customer-details-right,
    .customer-details-wrapper.hidden .order-errors-wrapper,
    .customer-details-wrapper.hidden .customer-card-wrapper,
    .customer-details-wrapper.hidden .customer-info-wrapper,
    .customer-details-wrapper.hidden h3{
        display: none;
        margin: 0 !important;
    }

    .customer-details-wrapper h3:nth-of-type(1):not(.order-success){
        display: block !important;
    }

    .customer-details-wrapper{
        background: #FCFDFD;
        box-shadow: 1px 1px 3px 0.5px rgb(0 0 0 / 10%);
        border-radius: 10px;
        width: 895px;
        height: auto;
        outline: none !important;
        border: 1px solid rgba(94, 139, 255, 0) !important;
        float: left;
        padding: 10px 15px;
        margin: 40px 0 0 0;
        display: block;
        position: relative;
        clear: both;
    }

    .customer-details-wrapper h3{
        margin: 0 0 20px 0 !important;
        text-align: left;
        font-size: 20px;
        line-height: 1;
        clear: both;
    }

    .order-summary-wrapper h3{
        text-align: center;
        margin: 0 0 9px 0 !important;
    }

    .order-summary-wrapper h4{
        font-size: 17px;
        line-height: 1;
        margin: 0 0 15px 0 !important;
        border-top: 1px solid #B7B7B7;
        padding-top: 8px;
        color: #000;
    }

    .order-summary-wrapper h2{
        text-align: center;
        font-size: 25px;
        line-height: 1;
        margin: 0 !important;
    }

    .customer-details-wrapper .order-summary-wrapper p{
        font-size: 16px;
        line-height: 1 !important;
        margin: 0 0 17px 0 !important;
        padding-left: 10px;
        color: rgba(0, 0, 0, 0.72);
    }

    .order-summary-wrapper p i{
        font-style: normal;
        float: right;
    }

    .customer-info-wrapper{
        background: #F5F7F7CC;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 20px;
    }

    .customer-card-wrapper{
        background: #F5F7F7CC;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 10px;
    }

    .order-summary-wrapper{
        background: #F5F7F7CC;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 10px;
        min-height: 334px;
    }

    .customer-details-left{
        float: left;
        margin-right: 20px;
        width: 560px;
    }

    .customer-details-right{
        float: left;
        width: 315px;
    }
    
    .customer-details-wrapper p{
        margin: 0 0 20px 0 !important;
        font-weight: 400;
        line-height: 28px;
    }

    .process-payment{
        display: block;
        color: #fff;
        border: 1px solid #375CFF;
        border-radius: 7px;
        padding: 10px 34px;
        line-height: 1;
        background: #375CFF;
        font-size: 15.5px;
        transition: 0.4s all;
        cursor: pointer;
        width: 100%;
    }

    .process-payment:hover,
    .process-payment:focus,
    .new-payment:hover,
    .new-payment:focus{
        opacity: 0.6;
    }

    .order-success{
        text-align: center !important;
        display: none;
    }

    .customer-details-wrapper.processed{
        width: 315px;
    }

    .customer-details-wrapper.processed .customer-details-left{
        display: none;
    }

    .customer-details-wrapper.processed .order-success{
        display: block;
    }

    .customer-details-wrapper.processed .process-payment{
        display: none;
    }

    .new-payment{
        display: none;
        color: #fff;
        border: 1px solid #375CFF;
        border-radius: 7px;
        padding: 10px 34px;
        line-height: 1;
        background: #375CFF;
        font-size: 15.5px;
        transition: 0.4s all;
        cursor: pointer;
        width: 100%;
    }

    .customer-details-wrapper.processed .new-payment{
        display: block;
    }

    .customer-info-wrapper p{
        width: 70px;
    }

    .customer-first-name{
        width: 224px;
        margin: 0 12px 0 0;
        float: left;
    }

    .customer-last-name{
        width: 224px;
        margin: 0;
        float: left;
    }

    .customer-email{
        width: 460px;
        float: left;
        margin: 0;
    }

    .customer-phone{
        width: 460px;
        float: left;
        margin: 0;
    }

    .customer-info-wrapper:after,
    .customer-card-wrapper:after{
        content: '';
        display: block;
        clear: both;
    }

    .customer-info-wrapper p:nth-last-of-type(1){
        margin: 0 !important;
    }

    .customer-card-wrapper p{
        width: 120px;
    }

    .customer-card-wrapper p:nth-last-of-type(2){
        margin: 0 !important;
    }

    .customer-card-wrapper p:nth-last-of-type(1){
        width: 50px;
        margin: 0 !important;
    }

    .customer-card-number{
        float: left;
        width: 410px;
        margin: 0;
        text-align: center;
    }

    .customer-expiry-month{
        float: left;
        width: 44px;
        margin: 0 10px 0 0;
        text-align: center;
    }

    .customer-expiry-year{
        float: left;
        width: 44px;
        margin: 0 162px 0 0;
        text-align: center;
    }

    .customer-csv{
        float: left;
        width: 100px;
        margin: 0;
        text-align: center;
    }

    .customer-card-wrapper input::-webkit-outer-spin-button,
    .customer-card-wrapper input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .customer-card-wrapper input[type=number] {
        -moz-appearance:textfield;
    }

    .customer-card-wrapper input{
        letter-spacing: 0.5px !important;
    }
    
    .order-errors-wrapper p{
        color: rgba(164, 36, 63, 0.72);
        font-size: 14px;
        line-height: 1;
        margin: 0 0 10px 0 !important;
        display: none;
    }

    .order-errors-wrapper p.show{
        display: block;
    }

    .onboarding-email{
        float: left;
        width: 720px;
        background: #D9D9D9;
        min-height: 473px;
        display: none;
        padding: 15px 50px;
        box-sizing: border-box;
        margin: 40px 0 0 40px;
    }

    .processed ~ .onboarding-email{
        display: block;
    }

    .product-plan-wrapper,
    .subscription-plan-wrapper{
        display: none;
    }

    .product-plan-wrapper.show,
    .subscription-plan-wrapper.show{
        display: block;
    }

    .set-custom-days{
        display: none;
        clear: both;
    }

    .set-custom-days.show{
        display: block;
    }

    .set-custom-days-input{
        width: 120px;
        margin-right: 10px;
        display: inline-block;
        margin-left: 145px;
    }

    .set-custom-days p{
        display: inline-block;
    }

    .order-summary-plan-wrapper,
    .order-summary-subscription-wrapper{
        display: none;
    }

    .order-summary-plan-wrapper.show,
    .order-summary-subscription-wrapper.show{
        display: block;
    }

    .membership-template-item{
        display: none;
    }
</style>
<?php

$select_memberships = '';
$select_memberships2 = '';

$select_memberships_sub = array();

$membership_ids_titles = array();

$args = array(
    'post_type' => 'memberships_product',
    'posts_per_page' => 9999,
    'orderby' => 'date',
    'order' => 'ASC',
    'post_status' => array('publish', 'draft', 'trash')
);

$query = new WP_Query($args);
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $curr_id = get_the_ID();
        $title = get_post_meta($curr_id,'title',true);
        $select_memberships .= '<option value="'.$curr_id.'">'.$title.'</option>';

        $membership_ids_titles[$curr_id] = $title;
    }
}
wp_reset_query();

$args = array(
    'post_type' => 'memberships_sub',
    'posts_per_page' => 9999,
    'orderby' => 'date',
    'order' => 'ASC',
    'post_status' => array('publish', 'draft', 'trash')
);

$query = new WP_Query($args);
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $curr_id = get_the_ID();
        $title = get_post_meta($curr_id,'title',true);
        $select_memberships2 .= '<option value="'.$curr_id.'">'.$title.'</option>';

        $membership_ids_titles[$curr_id] = $title;

        $sub_item = array();
        $sub_item['id'] = $curr_id;
        $sub_item['title'] = $title;

        $select_memberships_sub[] = $sub_item;


    }
}
wp_reset_query();
?>
<script>
    function formatCardNumber() {
        var cardNumber = document.getElementById("cardNumber");
        var value = cardNumber.value.replace(/\D/g, '');
        var formattedValue = "";
        for (var i = 0; i < value.length; i++) {
            if ((i % 4 == 0) && (i > 0)) {
                formattedValue += " ";
            }
            formattedValue += value[i];
        }
        cardNumber.value = formattedValue;

        if (cardNumber.value.length > cardNumber.maxLength)
            cardNumber.value = cardNumber.value.slice(0, cardNumber.maxLength);
    }
</script>
<div class="main-wrapper">
    <div class="left-sidebar">
        <a href="#" data-link="delivery">Delivery</a>
        <a href="https://www.eternumultra.com/wp-admin/admin.php?page=memberships_settings&tab=money" class="<?php if ($tab == 'money') echo 'active'; ?>" data-link="money">Money</a>
        <a href="https://www.eternumultra.com/wp-admin/admin.php?page=memberships_settings" class="<?php if (($tab !== 'programs') && ($tab !== 'money')) echo 'active'; ?>" data-link="memberships">Memberships</a>
        <a href="https://www.eternumultra.com/wp-admin/admin.php?page=memberships_settings&tab=programs" class="<?php if ($tab == 'programs') echo 'active'; ?>" data-link="programs">Programs</a>
        <a href="#" data-link="templates">Templates</a>
    </div>
    <div class="right-content">
        <div class="tab-content tab-content-delivery">

        </div>
        <div class="tab-content tab-content-money <?php if ($tab == 'money') echo 'active'; ?>">
            <div class="tab-links">
                <a href="#" data-link="payments" class="active">Payments</a>
                <a href="#" data-link="customers">Customers</a>
                <a href="#" data-link="commissions">Commissions</a>
            </div>
            <div class="tab-content-item tab-content-item-payments active">
                <?php
                ////////////
                $args = array(
                    'post_type' => 'memberships_template',
                    'posts_per_page' => 9999,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'post_status' => array('publish', 'draft', 'trash')
                );

                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $curr_id = get_the_ID();
                        $title = get_post_meta($curr_id,'title',true);

                        $payment_once = get_post_meta($curr_id,'payment_once',true);
                        $membership_ids = get_post_meta($curr_id,'membership_ids',true);
                        $subscription_id = get_post_meta($curr_id,'subscription_id',true);
                        $payment_plan_on = get_post_meta($curr_id,'payment_plan_on',true);
                        $payment_plan_price = get_post_meta($curr_id,'payment_plan_price',true);
                        $payment_plan_number_cycles = get_post_meta($curr_id,'payment_plan_number_cycles',true);
                        $payment_plan_period = get_post_meta($curr_id,'payment_plan_period',true);
                        $payment_plan_starting_on = get_post_meta($curr_id,'payment_plan_starting_on',true);
                        $subscription_on = get_post_meta($curr_id,'subscription_on',true);
                        $include_trial = get_post_meta($curr_id,'include_trial',true);
                        $trial_period = get_post_meta($curr_id,'trial_period',true);
                        $trial_period_type = get_post_meta($curr_id,'trial_period_type',true);

                        ?>
                        <div class="membership-template-item"
                             data-id="<?php echo $curr_id; ?>"
                             data-payment_once="<?php echo $payment_once; ?>"
                             data-membership_ids="<?php echo $membership_ids; ?>"
                             data-subscription_id="<?php echo $subscription_id; ?>"
                             data-payment_plan_on="<?php echo $payment_plan_on; ?>"
                             data-payment_plan_price="<?php echo $payment_plan_price; ?>"
                             data-payment_plan_number_cycles="<?php echo $payment_plan_number_cycles; ?>"
                             data-payment_plan_period="<?php echo $payment_plan_period; ?>"
                             data-payment_plan_starting_on="<?php echo $payment_plan_starting_on; ?>"
                             data-subscription_on="<?php echo $subscription_on; ?>"
                             data-include_trial="<?php echo $include_trial; ?>"
                             data-trial_period="<?php echo $trial_period; ?>"
                             data-trial_period_type="<?php echo $trial_period_type; ?>"
                        ></div>
                        <?php
                    }
                }

                ?>
                <div class="memberships-details-wrapper">
                    <h3>Membership Details</h3>
                    <div class="memberships-details-actions">
                        <select class="memberships-details-template">
                            <option selected disabled>Choose Template</option>
                            <?php
                            ////////////
                            $args = array(
                                'post_type' => 'memberships_template',
                                'posts_per_page' => 9999,
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'post_status' => array('publish', 'draft', 'trash')
                            );

                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    $curr_id = get_the_ID();
                                    $title = get_post_meta($curr_id,'title',true);
                                    ?>
                                    <option value="<?php echo $curr_id; ?>"><?php echo $title; ?></option>
                                    <?php
                                }
                            }
                            wp_reset_query();
                            ?>
                        </select>
                        <button class="memberships-details-add-template">New</button>
                        <button class="memberships-details-save-delete-template">...</button>
                    </div>
                    <div class="memberships-details-left">
                        <p class="float-left">Membership</p>
                        <div class="memberships-details-select-wrapper">
                            <select multiple="multiple" class="memberships-details-select">
                                <?php
                                echo $select_memberships;
                                ?>
                            </select>
                        </div>
                        <p class="clear-both float-left">Payment Once</p>
                        <input class="payment-due-input" type="number">
                        <p class="float-left">Payment Plan</p>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" class="payment-plan" id="payment_plan">
                            <label for="payment_plan"></label>
                        </div>
                        <div class="product-plan-wrapper">
                            <p class="clear-both float-left">Payment Plan Price</p>
                            <input class="payment-plan-price-input" type="number">
                            <p class="float-left">Number Of Cycles</p>
                            <input class="number-of-cycles-input" type="number">
                            <p class="clear-both float-left">Billing Period</p>
                            <div class="select-blue-wrapper margin-right-20">
                                <select class="billing-period">
                                    <option value="7">7 Days</option>
                                    <option value="14">14 Days</option>
                                    <option value="30">Monthly</option>
                                    <option value="custom">Set Custom</option>
                                </select>
                                <span class="select-blue-arrow"></span>
                            </div>
                            <p class="float-left">Starting On</p>
                            <div class="select-blue-wrapper">
                                <select class="starting-on">
                                    <?php
                                    for ($i = 1; $i < 365; $i++)
                                    {
                                        ?>
                                        <option value="<?php echo date('d-m-Y', time() + $i * 86400); ?>">
                                            <?php
                                            echo date('d-m-Y', time() + $i * 86400);
                                            ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <span class="select-blue-arrow"></span>
                            </div>
                            <div class="set-custom-days">
                                <input type="number" class="set-custom-days-input">
                                <p>Days</p>
                            </div>
                        </div>
                    </div>
                    <div class="memberships-details-right">
                        <h3>Subscription</h3>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" class="subscription-on" id="subscription_on">
                            <label for="subscription_on"></label>
                        </div>

                        <div class="subscription-plan-wrapper">
                            <p class="clear-both float-left">Subscription</p>
                            <select class="memberships-details-subscription">
                                <?php
                                    echo $select_memberships2;
                                ?>
                            </select>
                            <p class="clear-both float-left">Include Trial</p>
                            <div class="checkbox-wrapper">
                                <input type="checkbox" class="include-trial" id="include_trial">
                                <label for="include_trial"></label>
                            </div>
                            <p class="clear-both float-left">Trial Period</p>
                            <input type="number" class="memberships-details-period-days">
                            <select class="memberships-details-period-type">
                                <option value="Days">Days</option>
                                <option value="Weeks">Weeks</option>
                            </select>
                        </div>


                    </div>
                    <button class="confirm-memberships-details disabled">Confirm Details</button>
                </div>
                <div class="customer-details-wrapper hidden">
                    <div class="customer-details-left">
                        <h3>Customer Details</h3>
                        <div class="customer-info-wrapper">
                            <p class="float-left clear-both">Name</p>
                            <input type="text" class="customer-first-name">
                            <input type="text" class="customer-last-name">
                            <p class="float-left clear-both">Email</p>
                            <input type="text" class="customer-email">
                            <p class="float-left clear-both">Phone</p>
                            <input type="text" class="customer-phone">
                        </div>
                        <h3>Payment Details</h3>
                        <div class="customer-card-wrapper">
                            <p class="float-left clear-both">Card Number</p>
                            <input type="text" id="cardNumber" class="customer-card-number" maxlength="19"
                                   oninput="formatCardNumber()">
                            <p class="float-left clear-both">Expiry</p>
                            <input type="number" class="customer-expiry-month" maxlength="2"
                                   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            <input type="number" class="customer-expiry-year" maxlength="2"
                                   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            <p class="float-left">CSV</p>
                            <input type="number" class="customer-csv" maxlength="3"
                                   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>
                        <div class="order-errors-wrapper">
                            <p class="error-field-missing-name">Error: Field missing ‘Name’</p>
                            <p class="error-field-missing-email">Error: Field missing ‘Email’</p>
                            <p class="error-field-missing-phone">Error: Field missing ‘Phone’</p>
                            <p class="error-field-missing-card-number">Error: Field missing ‘Card Number’</p>
                            <p class="error-field-missing-expiry">Error: Field missing ‘Expiry’</p>
                            <p class="error-field-missing-csv">Error: Field missing ‘CSV’</p>
                            <p class="error-invalid-card-number">Error: Invalid Card Number</p>
                            <p class="error-invalid-expiry">Error: Invalid Expiry</p>
                            <p class="error-invalid-csv">Error: Invalid CSV</p>
                            <p class="error-from-stripe">Error: <span></span></p>
                        </div>
                    </div>
                    <div class="customer-details-right">
                        <h3 class="order-success">Success!</h3>
                        <div class="order-summary-wrapper">
                            <h3>Order Summary</h3>

                            <h4 class="order-summary-product-title">Membership 1</h4>
                            <p>Payment Due <i>$<span class="order-summary-payment-once-price"></span></i></p>
                            <div class="order-summary-plan-wrapper">
                                <p>Followed By <i><span class="order-summary-repeat-numbers"></span>
                                <span class="order-summary-repeat-period"></span></i></p>
                                <p>Payments Of <i>$<span class="order-summary-payment-plan-price"></span></i></p>
                                <p>Starting On <i><span class="order-summary-payment-plan-starting-on"></span></i></p>
                            </div>

                            <div class="order-summary-subscription-wrapper">
                                <h4 class="order-summary-subscription-title">Subscription 1</h4>
                                <p>Trial Period <i><span class="order-summary-trial-numbers"></span> <span class="order-summary-trial-period"></span></i></p>
                                <p>First Payment Due <i><span class="order-summary-first-payment-due"><?php echo date('d-m-Y',time()); ?></span></i></p>
                            </div>
                            <h2 class="summary-total">Total: $<span class="order-summary-total-price"></span></h2>
                        </div>
                        <button class="process-payment">Process Payment</button>
                        <button class="new-payment">New Payment</button>
                    </div>
                </div>
                <div class="onboarding-email">
                    <p>Onboarding email - add later</p>
                </div>
            </div>
            <div class="tab-content-item tab-content-item-customers">
                <div class="customers-blocks-wrapper">
                    <button class="customers-block active" data-link="active">
                        <h3>Active</h3>
                        <?php
                        $args = array(
                            'post_type' => 'customer_payments',
                            'posts_per_page' => 9999,
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'post_status' => array('publish', 'draft', 'trash'),
                            'meta_query'     => [
                                [
                                    'key'      => 'membership_status',
                                    'value'    => 'active',
                                ]
                            ]
                        );

                        $query_active = new WP_Query($args);
                        $found_customers_active = $query_active->found_posts;
                        ?>
                        <h2><?php echo $found_customers_active; ?></h2>
                    </button>
                    <button class="customers-block" data-link="pause">
                        <h3>Paused</h3>
                        <?php
                        $args = array(
                            'post_type' => 'customer_payments',
                            'posts_per_page' => 9999,
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'post_status' => array('publish', 'draft', 'trash'),
                            'meta_query'     => [
                                [
                                    'key'      => 'membership_status',
                                    'value'    => 'pause',
                                ]
                            ]
                        );

                        $query_pause = new WP_Query($args);
                        $found_customers_pause = $query_pause->found_posts;
                        ?>
                        <h2><?php echo $found_customers_pause; ?></h2>
                    </button>
                    <?php
                    $args = array(
                        'post_type' => 'single_payment',
                        'posts_per_page' => 9999,
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'post_status' => array('publish', 'draft', 'trash'),

                        'meta_query'     => [
                            [
                                'key'      => 'status',
                                'value'    => 'Failed',
                            ]
                        ]

                    );

                    $query_failed = new WP_Query($args);
                    $found_payments_failed = $query_failed->found_posts;
                    ?>
                    <button class="customers-block customers-block-failed <?php if ($found_payments_failed > 0) echo 'have-items'; ?>" data-link="failed">
                        <h3>Failed</h3>
                        <h2><?php echo $found_payments_failed; ?></h2>
                    </button>
                    <button class="customers-block" data-link="find">
                        <h3>Find</h3>
                        <div class="find-icon"></div>
                    </button>
                </div>
                <div class="customers-list customers-list-active active">
                    <h3>Active Customers</h3>
                    <div class="table">
                        <div class="thead">
                            <div class="tr">
                                <div class="td">Name</div>
                                <div class="td">Email</div>
                                <div class="td">Created</div>
                                <div class="td">Last Payment</div>
                                <div class="td">Next Due</div>
                                <div class="td">Total Spend</div>
                                <div class="td">Customer File</div>
                            </div>
                        </div>
                        <div class="tbody">
                            <?php

                            if ($query_active->have_posts()) {
                                while ($query_active->have_posts()) {
                                    $query_active->the_post();

                                    $curr_id = get_the_ID();

                                    //update_post_meta(240, 'billing_plan', '$0.59/7 days');

                                    $total_amount = get_post_meta($curr_id, 'total_amount', true);
                                    $name = get_post_meta($curr_id, 'name', true);
                                    $email = get_post_meta($curr_id, 'email', true);
                                    $created = get_post_meta($curr_id, 'created', true);

                                    $last_payment = get_post_meta($curr_id, 'last_payment', true);
                                    $next_payment = get_post_meta($curr_id, 'next_payment', true);

                                    $phone = get_post_meta($curr_id, 'phone', true);
                                    $membership_status = get_post_meta($curr_id, 'membership_status', true);
                                    $c_n = get_post_meta($curr_id, 'card_number', true);
                                    $c_n_show = '****'.substr($c_n, 12);
                                    ?>
                                    <div class="tr"
                                         data-name="<?php echo $name; ?>"
                                         data-email="<?php echo $email; ?>"
                                         data-phone="<?php echo $phone; ?>"
                                         data-card-number="<?php echo $c_n_show; ?>"
                                         data-status="<?php echo $membership_status; ?>"
                                    >
                                        <div class="td"><?php echo $name; ?></div>
                                        <div class="td"><?php echo $email; ?></div>
                                        <div class="td"><?php echo date('d/m/Y',$created); ?></div>
                                        <div class="td"><?php echo date('d/m/Y',$last_payment); ?></div>
                                        <div class="td"><?php echo $next_payment; ?></div>
                                        <div class="td">$<?php echo $total_amount / 100; ?></div>
                                        <div class="td"><button class="open-file">Open File</button></div>
                                    </div>
                                    <?php
                                }
                            }
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="customers-list customers-list-pause">
                    <h3>Paused Customers</h3>
                    <div class="table">
                        <div class="thead">
                            <div class="tr">
                                <div class="td">Name</div>
                                <div class="td">Email</div>
                                <div class="td">Created</div>
                                <div class="td">Last Payment</div>
                                <div class="td">Next Due</div>
                                <div class="td">Total Spend</div>
                                <div class="td">Customer File</div>
                            </div>
                        </div>
                        <div class="tbody">
                            <?php

                            if ($query_pause->have_posts()) {
                                while ($query_pause->have_posts()) {
                                    $query_pause->the_post();

                                    $curr_id = get_the_ID();

                                    $total_amount = get_post_meta($curr_id, 'total_amount', true);
                                    $name = get_post_meta($curr_id, 'name', true);
                                    $email = get_post_meta($curr_id, 'email', true);
                                    $created = get_post_meta($curr_id, 'created', true);

                                    $last_payment = get_post_meta($curr_id, 'last_payment', true);
                                    $next_payment = get_post_meta($curr_id, 'next_payment', true);

                                    $phone = get_post_meta($curr_id, 'phone', true);
                                    $membership_status = get_post_meta($curr_id, 'membership_status', true);
                                    $c_n = get_post_meta($curr_id, 'card_number', true);
                                    $c_n_show = '****'.substr($c_n, 12);
                                    ?>
                                    <div class="tr"
                                         data-name="<?php echo $name; ?>"
                                         data-email="<?php echo $email; ?>"
                                         data-phone="<?php echo $phone; ?>"
                                         data-card-number="<?php echo $c_n_show; ?>"
                                         data-status="<?php echo $membership_status; ?>"
                                    >
                                        <div class="td"><?php echo $name; ?></div>
                                        <div class="td"><?php echo $email; ?></div>
                                        <div class="td"><?php echo date('d/m/Y',$created); ?></div>
                                        <div class="td"><?php echo date('d/m/Y',$last_payment); ?></div>
                                        <div class="td"><?php echo $next_payment; ?></div>
                                        <div class="td">$<?php echo $total_amount / 100; ?></div>
                                        <div class="td"><button class="open-file">Open File</button></div>
                                    </div>
                                    <?php
                                }
                            }
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="customers-list customers-list-failed">
                    <h3>Failed Payments</h3>
                    <div class="failed-list-actions">
                        <button class="retry-charge">Retry Charge</button>
                        <button class="delete-failed">Delete</button>
                    </div>
                    <div class="table">
                        <div class="thead">
                            <div class="tr">
                                <div class="td"></div>
                                <div class="td">Name</div>
                                <div class="td">Email</div>
                                <div class="td">Created</div>
                                <div class="td">Next Due</div>
                                <div class="td">Amount</div>
                                <div class="td">Actions</div>
                                <div class="td">Customer File</div>
                            </div>
                        </div>
                        <div class="tbody">
                            <?php

                            if ($query_failed->have_posts()) {
                                while ($query_failed->have_posts()) {
                                    $query_failed->the_post();

                                    $curr_id = get_the_ID();

                                    $email = get_post_meta($curr_id, 'email', true);
                                    $name = get_post_meta($curr_id, 'name', true);
                                    $phone = get_post_meta($curr_id, 'phone', true);
                                    $membership_status = get_post_meta($curr_id, 'membership_status', true);
                                    $c_n = get_post_meta($curr_id, 'card_number', true);
                                    $c_n_show = '****'.substr($c_n, 12);

                                    $amount = get_post_meta($curr_id, 'amount', true);
                                    $created = get_post_meta($curr_id, 'created', true);
                                    $next_payment_date = get_post_meta($curr_id, 'next_payment_date', true);

                                    ?>
                                    <div class="tr"
                                         data-name="<?php echo $name; ?>"
                                         data-email="<?php echo $email; ?>"
                                         data-phone="<?php echo $phone; ?>"
                                         data-card-number="<?php echo $c_n_show; ?>"
                                         data-status="<?php echo $membership_status; ?>"
                                    >
                                        <div class="td"><input type="checkbox" class="failed-checker"></div>
                                        <div class="td"><?php echo $name; ?></div>
                                        <div class="td"><?php echo $email; ?></div>
                                        <div class="td"><?php echo $created; ?></div>
                                        <div class="td"><?php echo $next_payment_date; ?></div>
                                        <div class="td">$<?php echo $amount/100; ?></div>
                                        <div class="td"><button class="failed-send-email">Send Email</button></div>
                                        <div class="td"><button class="open-file">Open File</button></div>
                                    </div>
                                    <?php
                                }
                            }
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="customers-list customers-list-find">
                    <h3>Find Customers</h3>
                    <div class="find-list-actions">
                        <input type="text" class="search-customers-input">
                        <button class="search-customers">Search</button>
                    </div>
                    <div class="table">
                        <div class="thead">
                            <div class="tr">
                                <div class="td">Name</div>
                                <div class="td">Email</div>
                                <div class="td">Created</div>
                                <div class="td">Last Payment</div>
                                <div class="td">Next Due</div>
                                <div class="td">Total Spend</div>
                                <div class="td">Customer File</div>
                            </div>
                        </div>
                        <div class="tbody">
                            <?php
                            $args = array(
                                'post_type' => 'customer_payments',
                                'posts_per_page' => 9999,
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'post_status' => array('publish', 'draft', 'trash')
                            );

                            $query_all = new WP_Query($args);

                            if ($query_all->have_posts()) {
                                while ($query_all->have_posts()) {
                                    $query_all->the_post();

                                    $curr_id = get_the_ID();

                                    $total_amount = get_post_meta($curr_id, 'total_amount', true);
                                    $name = get_post_meta($curr_id, 'name', true);
                                    $email = get_post_meta($curr_id, 'email', true);
                                    $created = get_post_meta($curr_id, 'created', true);

                                    $last_payment = get_post_meta($curr_id, 'last_payment', true);
                                    $next_payment = get_post_meta($curr_id, 'next_payment', true);

                                    $phone = get_post_meta($curr_id, 'phone', true);
                                    $membership_status = get_post_meta($curr_id, 'membership_status', true);
                                    $c_n = get_post_meta($curr_id, 'card_number', true);
                                    $c_n_show = '****'.substr($c_n, 12);
                                    ?>
                                    <div class="tr"
                                         data-name="<?php echo $name; ?>"
                                         data-email="<?php echo $email; ?>"
                                         data-phone="<?php echo $phone; ?>"
                                         data-card-number="<?php echo $c_n_show; ?>"
                                         data-status="<?php echo $membership_status; ?>"
                                    >
                                        <div class="td"><?php echo $name; ?></div>
                                        <div class="td"><?php echo $email; ?></div>
                                        <div class="td"><?php echo date('d/m/Y',$created); ?></div>
                                        <div class="td"><?php echo date('d/m/Y',$last_payment); ?></div>
                                        <div class="td"><?php echo $next_payment; ?></div>
                                        <div class="td">$<?php echo $total_amount / 100; ?></div>
                                        <div class="td"><button class="open-file">Open File</button></div>
                                    </div>
                                    <?php
                                }
                            }
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content-item tab-content-item-commissions">
                <div class="commissions-blocks">
                    <h3>Who</h3>
                    <select class="who-select">
                        <option>All</option>
                        <option>Custom</option>
                    </select>
                    <select multiple="multiple" class="who-select-wrapper">
                        <?php
                        $users = get_users(
                            array(
                            'role__in' => 'administrator',
                            )
                        );
                        foreach ($users as $user){
                            $name = get_user_meta($user->user_id,'first_name',true);
                            if (!$name){
                                if ($name->display_name == $name->user_email){
                                    $name = $user->user_nicename;
                                }
                                else{
                                    $name = $user->display_name;
                                }
                            }
                            ?>
                            <option value="<?php echo $user->user_id; ?>"><?php echo $name; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="commissions-blocks">
                    <h3>What</h3>
                    <select class="what-select">
                        <option>All</option>
                        <option>Custom</option>
                    </select>
                    <select multiple="multiple" class="what-select-wrapper">
                        <?php
                        echo $select_memberships;
                        echo $select_memberships2;
                        ?>
                    </select>
                </div>
                <div class="commissions-blocks">
                    <h3>When</h3>
                    <div class="when-select-wrapper">
                        <select class="when-select">
                            <option disabled selected>Set Range</option>
                            <option>Last 7 days</option>
                            <option>Last 14 days</option>
                            <option>Last 30 days</option>
                        </select>
                        <span class="when-select-arrow"></span>
                    </div>
                    <input type="text" class="when-input">
                    <button class="when-search">Search</button>
                </div>
                <div class="commissions-list">
                    <h3>Payments</h3>
                    <h3 class="commissions-list-total">Total: $<span><?php echo 0; ?></span></h3>
                    <div class="table commissions-table">
                        <div class="thead">
                            <div class="tr">
                                <div class="td">Name</div>
                                <div class="td">Email</div>
                                <div class="td">Membership</div>
                                <div class="td">Start</div>
                                <div class="td">Amount</div>
                                <div class="td">Next Due</div>
                                <div class="td">Customer File</div>
                            </div>
                        </div>
                        <div class="tbody">
                            <?php

                            $args = array(
                                'post_type' => 'single_payment',
                                'posts_per_page' => 9999,
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'post_status' => array('publish', 'draft', 'trash')
                            );

                            $query_single_payment = new WP_Query($args);

                            if ($query_single_payment->have_posts()) {
                                while ($query_single_payment->have_posts()) {
                                    $query_single_payment->the_post();

                                    $curr_id = get_the_ID();

                                    $email = get_post_meta($curr_id, 'email', true);
                                    $name = get_post_meta($curr_id, 'name', true);

                                    $membership_sub_ids = get_post_meta($curr_id, 'membership_sub_ids', true);
                                    $created = get_post_meta($curr_id, 'created', true);
                                    $next_payment_date = get_post_meta($curr_id, 'next_payment_date', true);
                                    $amount = get_post_meta($curr_id, 'amount', true);

                                    $phone = get_post_meta($curr_id, 'phone', true);
                                    $membership_status = get_post_meta($curr_id, 'membership_status', true);
                                    $c_n = get_post_meta($curr_id, 'card_number', true);
                                    $c_n_show = '****'.substr($c_n, 12);
                                    ?>
                                    <div class="tr"
                                         data-name="<?php echo $name; ?>"
                                         data-email="<?php echo $email; ?>"
                                         data-phone="<?php echo $phone; ?>"
                                         data-card-number="<?php echo $c_n_show; ?>"
                                         data-status="<?php echo $membership_status; ?>"
                                    >
                                        <div class="td"><?php echo $name; ?></div>
                                        <div class="td"><?php echo $email; ?></div>
                                        <div class="td">
                                            <?php
                                            $membership_sub_ids_arr = explode(',',$membership_sub_ids);
                                            foreach ($membership_sub_ids_arr as $prod_sub_id){
                                                ?>
                                                <p><?php echo $membership_ids_titles[$prod_sub_id]; ?></p>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="td"><?php echo $created ; ?></div>
                                        <div class="td">$<?php echo $amount / 100 ; ?></div>
                                        <div class="td"><?php echo $next_payment_date; ?></div>
                                        <div class="td"><button class="open-file">Open File</button></div>
                                    </div>
                                    <?php
                                }
                            }
                            wp_reset_query();

                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .tab-content-money{
                    position: relative;
                }

                .customer-file-wrapper{
                    position: absolute;
                    left: 0;
                    top: 58px;
                    width: 930px;
                    min-height: 1000px;
                    z-index: 999;
                    display: none;
                    padding: 20px;
                    background: #FCFDFD;
                    box-shadow: 1px 1px 3px 0.5px rgb(0 0 0 / 10%);
                    box-sizing: border-box;
                    border-radius: 10px;
                }

                .customer-file-wrapper.show{
                    display: block;
                }

                .back-from-file{
                    position: absolute;
                    width: 16px;
                    height: 16px;
                    border-left: 2px solid #000;
                    border-top: 2px solid #000;
                    left: -22px;
                    top: 15px;
                    transform: rotate(-45deg);
                    outline: none !important;
                    box-shadow: none !important;
                    transition: 0.4s all;
                }

                .back-from-file:after {
                    display: block;
                    content: '';
                    width: 20px;
                    height: 2px;
                    background: #000;
                    position: absolute;
                    left: -4px;
                    top: 5px;
                    border-radius: 20px 0 0 20px;
                    transform: rotate(45deg);
                }

                .back-from-file:hover,
                .back-from-file:focus{
                    transform: rotate(-45deg) scale(1.3);
                }

                .customer-file-wrapper h3{
                    margin: 0 0 20px 0;
                }

                .file-user-info-wrapper{
                    margin: 0 0 40px 0;
                }

                .user-info-item{
                    float: left;
                    width: 22.5%;
                }

                .user-info-item:nth-last-of-type(1){
                    width: 10%;
                }

                .file-user-info-wrapper:after{
                    content: '';
                    clear: both;
                    display: block;
                }

                .user-info-item p{
                    font-size: 16px;
                    line-height: 1;
                    margin: 0 0 10px 0;
                }

                .user-info-item p.title{
                    color: #8D8D8D;
                }

                .user-status{
                    font-size: 14px;
                    display: inline-block;
                    color: #2C681D;
                    background: #DDF6C7;
                    border-radius: 4px;
                    padding: 2px 7px 3px 7px;
                }

                .user-status.inactive{
                    background: #ECEEF1;
                    color: #6A7384;
                }

                .add-new-active-membership{
                    font-size: 14px;
                    color: #8E8E8E;
                    transition: 0.4s all;
                    background: transparent !important;
                    box-shadow: none !important;
                    outline: none !important;
                    border: 1px solid #929292;
                    border-radius: 4px;
                    cursor: pointer;
                    padding: 1px 10px 2px 10px;
                    margin-left: auto;
                    display: block;
                    margin-bottom: 40px;
                    margin-top: 12px;
                }

                .add-new-active-membership:hover,
                .add-new-active-membership:focus{
                    color: #0000f0;
                    border: 1px solid #0000f0;
                }

                .active-memberships-table .tr:after,
                .past-payments-table .tr:after{
                    content: '';
                    display: block;
                    clear: both;
                }

                .active-memberships-table .td{
                    float: left;
                    width: calc((100% - 20px) / 8) !important;
                    box-sizing: border-box;
                    padding: 0 !important;
                }

                .active-memberships-table .td p{
                    margin: 0 0 10px 0;
                }

                .active-memberships-table .td p:nth-last-of-type(1){
                    margin: 0;
                }

                .active-memberships-table .tr,
                .past-payments-table .tr{
                    padding-top: 4px;
                    padding-bottom: 4px;
                    padding-left: 8px;
                    padding-right: 2px;
                    border-bottom: 1px solid #B7B7B7;
                }

                .active-memberships-table .td:nth-last-of-type(1){
                    width: 20px !important;
                }

                .past-payments-table .td{
                    float: left;
                    width: calc((100% - 20px) / 6) !important;
                    box-sizing: border-box;
                    padding: 0 !important;
                }

                .past-payments-table .td:nth-last-of-type(1){
                    width: 20px !important;
                }

                .active-memberships-actions,
                .past-payments-actions{
                    background: transparent;
                    border: none !important;
                    letter-spacing: 3px;
                    padding: 0;
                    cursor: pointer;
                    line-height: 0;
                    height: 10px;
                    transform: translate(0, -3px);
                    transition: 0.4s all;
                }

                .active-memberships-actions:hover,
                .active-memberships-actions:focus,
                .past-payments-actions:hover,
                .past-payments-actions:focus{
                    color: #0000f0;
                }

                .result-succeeded{
                    display: inline-block;
                    color: #2C681D;
                    background: #DDF6C7;
                    border-radius: 4px;
                    padding: 2px 7px 3px 7px;
                    line-height: 1;
                }

                .result-failed{
                    display: inline-block;
                    border-radius: 4px;
                    padding: 2px 7px 3px 7px;
                    background: #FBE8F2;
                    color: #A4243F;
                    line-height: 1;
                }
            </style>
            <div class="customer-file-wrapper">
                <a href="#" class="back-from-file"></a>
                <h3>Customer File: <span>NAME</span></h3>
                <div class="file-user-info-wrapper">
                    <div class="user-info-item">
                        <p class="title">Name</p>
                        <p class="user-info-name">John Smith</p>
                    </div>
                    <div class="user-info-item">
                        <p class="title">Email</p>
                        <p class="user-info-email">john@mail.com</p>
                    </div>
                    <div class="user-info-item">
                        <p class="title">Phone</p>
                        <p class="user-info-phone">012323423</p>
                    </div>
                    <div class="user-info-item">
                        <p class="title">Card Number</p>
                        <p class="user-info-card-number">****1234</p>
                    </div>
                    <div class="user-info-item">
                        <p class="title">Status</p>
                        <p class="user-status active user-info-status">Active</p>
                    </div>
                </div>
                <h3>Active Memberships</h3>
                <div class="active-memberships-table">
                    <div class="tr">
                        <div class="td">Membership</div>
                        <div class="td">Type</div>
                        <div class="td">Start Date</div>
                        <div class="td">End Date</div>
                        <div class="td">Billing Plan</div>
                        <div class="td">Paid</div>
                        <div class="td">Remaining</div>
                        <div class="td">Next Due</div>
                        <div class="td"></div>
                    </div>
                    <div class="active-memberships-wrapper"></div>
                </div>
                <button class="add-new-active-membership">+ Add New</button>
                <h3>Past Payments</h3>
                <div class="past-payments-table">
                    <div class="tr">
                        <div class="td">Date</div>
                        <div class="td">Membership</div>
                        <div class="td">Type</div>
                        <div class="td">Amount</div>
                        <div class="td">Result</div>
                        <div class="td">Next Due</div>
                        <div class="td"></div>
                    </div>
                    <div class="past-payments-wrapper"></div>
                </div>
            </div>
        </div>
        <div class="tab-content tab-content-memberships <?php if (($tab !== 'programs') && ($tab !== 'money')) echo 'active'; ?>">
            <div class="tab-links">
                <a href="#" data-link="memberships" class="active">Memberships</a>
                <a href="#" data-link="membership-benefits">Membership Benefits</a>
                <a href="#" data-link="emails">Emails</a>
            </div>
            <div class="tab-content-item tab-content-item-memberships active">
                <p>Products</p>
                <div class="memberships-table products-table">
                    <div class="thead">
                        <div class="tr">
                            <div class="th">Title</div>
                            <div class="th">Type</div>
                            <div class="th">Active</div>
                            <div class="th"></div>
                            <div class="th"></div>
                        </div>
                    </div>
                    <div class="tbody">
                        <?php
                        $args = array(
                            'post_type' => 'memberships_product',
                            'posts_per_page' => 9999,
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'post_status' => array('publish', 'draft', 'trash')
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()){
                            while($query->have_posts()){
                                $query->the_post();
                                $curr_id = get_the_ID();
                                $class_count =  get_post_meta($curr_id,'class_count',true);
                                if (!$class_count){
                                    $class_count = 0;
                                }

                                ?>
                                <div class="tr" data-id="<?php echo $curr_id; ?>"
                                     class-count="<?php echo $class_count; ?>"
                                     product-upgrade="<?php echo get_post_meta($curr_id,'product_upgrade',true); ?>"
                                     continued-subscription="<?php echo get_post_meta($curr_id,'continued_subscription',true); ?>"
                                     continued-subscription-type = "<?php echo get_post_meta($curr_id,'continued_subscription_type',true); ?>"
                                     minimum-duration = "<?php echo get_post_meta($curr_id,'minimum_duration',true); ?>"
                                     minimum-duration-type = "<?php echo get_post_meta($curr_id,'minimum_duration_type',true); ?>"
                                     minimum-duration-value = "<?php echo get_post_meta($curr_id,'minimum_duration_value',true); ?>"
                                >
                                    <div class="td"><?php echo get_post_meta($curr_id,'title',true); ?></div>
                                    <div class="td"><?php echo get_post_meta($curr_id,'type',true); ?></div>
                                    <div class="td">0</div>
                                    <div class="td">
                                        <button class="open-builder">Open Builder</button>
                                    </div>
                                    <div class="td">
                                        <button class="remove-item">...</button>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        wp_reset_query();
                        ?>
                    </div>
                </div>
                <button class="add-new-product add-new-button">+ Add New</button>
                <p>Subscriptions</p>
                <div class="memberships-table subscriptions-table">
                    <div class="thead">
                        <div class="tr">
                            <div class="th">Title</div>
                            <div class="th">Type</div>
                            <div class="th">Active</div>
                            <div class="th"></div>
                            <div class="th"></div>
                        </div>
                    </div>
                    <div class="tbody">
                        <?php
                        $args = array(
                            'post_type' => 'memberships_sub',
                            'posts_per_page' => 9999,
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'post_status' => array('publish', 'draft', 'trash')
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()){
                            while($query->have_posts()){
                                $query->the_post();
                                $curr_id = get_the_ID();
                                $class_count =  get_post_meta($curr_id,'class_count',true);
                                if (!$class_count){
                                    $class_count = 0;
                                }

                                $price_counter = get_post_meta($curr_id,'price_counter',true);
                                ?>
                                <div class="tr" data-id="<?php echo $curr_id; ?>"
                                     class-count="<?php echo $class_count; ?>"
                                     product-upgrade="<?php echo get_post_meta($curr_id,'product_upgrade',true); ?>"
                                     continued-subscription="<?php echo get_post_meta($curr_id,'continued_subscription',true); ?>"
                                     continued-subscription-type = "<?php echo get_post_meta($curr_id,'continued_subscription_type',true); ?>"
                                     minimum-duration = "<?php echo get_post_meta($curr_id,'minimum_duration',true); ?>"
                                     minimum-duration-type = "<?php echo get_post_meta($curr_id,'minimum_duration_type',true); ?>"
                                     minimum-duration-value = "<?php echo get_post_meta($curr_id,'minimum_duration_value',true); ?>"
                                     parent-membership = "<?php echo get_post_meta($curr_id,'parent_membership',true); ?>"
                                     subs-price-counter = "<?php echo $price_counter; ?>"
                                     <?php
                                        for ($i = 1; $i <= $price_counter; $i++){
                                            echo 'subs-price-number'.$i.' = "'.get_post_meta($curr_id, 'subs_price_'.$i, true).'"';
                                        }
                                     ?>
                                >
                                    <div class="td"><?php echo get_post_meta($curr_id,'title',true); ?></div>
                                    <div class="td"><?php echo get_post_meta($curr_id,'type',true); ?></div>
                                    <div class="td">0</div>
                                    <div class="td">
                                        <button class="open-builder">Open Builder</button>
                                    </div>
                                    <div class="td">
                                        <button class="remove-item">...</button>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        wp_reset_query();
                        ?>
                    </div>
                </div>
                <button class="add-new-subscription add-new-button">+ Add New</button>
            </div>
            <div class="tab-content-item tab-content-item-edit-product">
                <a href="#" class="back-to-list"></a>
                <p class="product-name">Edit <span>Product</span>: <span>NAME</span></p>
                <div class="edit-product-wrapper">
                    <div class="edit-product-sidebar">
                        <p>Program</p>
                        <a href="#" class="edit-product-link active" data-link="general">General</a>
                        <a href="#" class="edit-product-link" data-link="classes">Classes</a>
                        <a href="#" class="edit-product-link" data-link="levels">Levels</a>
                    </div>
                    <div class="edit-product-content">
                        <div class="edit-type-content edit-type-content-general active">
                            <h2>General Settings</h2>
                            <div class="content-wrapper">
                                <div class="all-content">
                                    <p><span class="change-type-name">Product</span> Title</p>
                                    <input type="text" class="edit-product-title" />
                                    <p><span class="change-type-name">Product</span> Type: <span class="edit-product-type">Set</span></p>
                                    <p class="hide-for-continued-downgrade"><span class="change-type-name">Product</span> Upgrade</p>
                                    <div class="checkbox-wrapper hide-for-continued-downgrade">
                                        <input type="checkbox" class="product-upgrade" id="product_upgrade">
                                        <label for="product_upgrade"></label>
                                    </div>
                                </div>
                                <div class="extra-content">
                                    <p>Continued Subscription</p>
                                    <div class="checkbox-wrapper">
                                        <input type="checkbox" class="continued-subscription" id="continued_subscription">
                                        <label for="continued_subscription"></label>
                                    </div>
                                    <select class="continued_subscription_type">
                                        <?php
                                        echo $select_memberships2;
                                        ?>
                                    </select>
                                    <p>Minimum Duration</p>
                                    <div class="checkbox-wrapper">
                                        <input type="checkbox" class="minimum-duration" id="minimum_duration">
                                        <label for="minimum_duration"></label>
                                    </div>
                                    <select class="minimum_duration_type">
                                        <option value="Weeks">Weeks</option>
                                        <option value="Months">Months</option>
                                    </select>
                                    <input type="number" class="minimum_duration_value">
                                </div>
                                <div class="continued-content">
                                    <p>Parent Membership</p>
                                    <select class="parent-membership">
                                        <?php
                                        echo $select_memberships;
                                        ?>
                                    </select>
                                </div>
                                <div class="subscriptions-content-wrapper">
                                    <div class="subscriptions-content">
                                        <div class="subscription-content-titles">
                                            <p>Title</p>
                                            <p>Active</p>
                                            <p>Amount</p>
                                            <p>Start</p>
                                            <p>End</p>
                                        </div>
                                        <div class="subscription-content-items">

                                        </div>
                                    </div>
                                    <button class="add-new-subscription-price">+ Add New</button>
                                </div>
                            </div>
                            <button class="is-cancel-button product-edit-cancel">Cancel</button>
                            <button class="is-save-button product-edit-save">Save</button>
                        </div>
                        <div class="edit-type-content edit-type-content-classes">
                            <div class="type-sidebar">
                                <p>Classes</p>
                                <div class="classes-list">

                                </div>
                                <a href="#" class="add-class">+ Add Class</a>
                            </div>
                            <div class="type-content">
                                <div class="type-content-inner">
                                    <div class="type-content-item" data-id="0">
                                        <h2>Edit Class</h2>
                                        <p>Class Title</p>
                                        <input class="class-edit-title" type="text" />
                                        <p>Onboarding Class</p>
                                        <input type="checkbox" class="onboarding-class" id="onboarding_class" checked="checked">
                                        <label for="onboarding_class"></label>
                                        <div class="step-list">
                                        </div>
                                        <button class="is-save-button add-step-to-class">Add Step</button>
                                    </div>
                                    <button class="preview-class">Preview</button>
                                    <button class="is-cancel-button cancel-edit-class">Cancel</button>
                                    <button class="is-save-button save-edit-class">Save</button>
                                </div>
                            </div>
                        </div>
                        <div class="edit-type-content edit-type-content-levels">
                            <h2>Upgrade Levels</h2>
                            <div class="levels-table main-levels">
                                <div class="thead">
                                    <div class="tr">
                                        <div class="th">Title</div>
                                        <div class="th">Metric</div>
                                        <div class="th">Requirement</div>
                                        <div class="th">Once Complete</div>
                                        <div class="th"></div>
                                    </div>
                                </div>
                                <div class="tbody">

                                </div>
                            </div>
                            <button class="add-new-level add-new-button">Add New</button>
                            <div class="levels-table upgrade-levels">
                                <p>Upgrade Level</p>
                                <div class="items-4-wrapper">
                                    <p>Level Title</p>
                                    <input type="text" class="upgrade-level-title">
                                    <p>Upgrade to</p>
                                    <select class="upgrade-to">
                                        <?php echo $select_memberships2; ?>
                                    </select>
                                </div>
                                <div class="items-4-wrapper">
                                    <p>Description</p>
                                    <input type="text" class="upgrade-description">

                                    <!--
                                    <p>User upgrade</p>
                                    <select class="upgrade-user">
                                        <option value="Manual">Manual</option>
                                        <option value="Request">Request</option>
                                    </select>
                                    -->

                                </div>
                                <p class="metric-shortcode-p">Metric Shortcode</p>
                                <select class="metric-shortcode">
                                    <option value="days_tracked">Days Tracked</option>
                                    <option value="calls">Calls</option>
                                    <option value="ad_spend">Ad Spend</option>
                                    <option value="leads">Leads</option>
                                    <option value="bookings">Bookings</option>
                                    <option value="sales">Sales</option>
                                    <option value="cash">Cash</option>
                                    <option value="revenue">Revenue</option>
                                </select>
                            </div>

                            <button class="is-cancel-button cancel-edit-levels">Cancel</button>
                            <button class="is-save-button save-edit-levels">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content-item tab-content-item-membership-benefits"></div>
            <div class="tab-content-item tab-content-item-emails"></div>
        </div>
        <div class="tab-content tab-content-programs <?php if ($tab == 'programs') echo 'active'; ?>">
            <div class="tab-links">
                <a href="#" data-link="programs" class="active">Programs</a>
                <a href="#" data-link="archive">Archive</a>
            </div>
            <div class="tab-content-item tab-content-item-programs active">
                <p>Programs</p>
                <div class="memberships-table programs-table">
                    <div class="thead">
                        <div class="tr">
                            <div class="th">Program</div>
                            <div class="th">Available For</div>
                            <div class="th">Type</div>
                            <div class="th"></div>
                            <div class="th"></div>
                        </div>
                    </div>
                    <div class="tbody">
                        <?php
                        $args = array(
                            'post_type' => 'memberships_program',
                            'posts_per_page' => 9999,
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'post_status' => array('publish', 'draft', 'trash'),
                            'meta_query'     => [
                                [
                                    'key'      => 'archive',
                                    'value'    => 'no'
                                ]
                            ]
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()){
                            while($query->have_posts()){
                                $query->the_post();
                                $curr_id = get_the_ID();

                                $title = get_post_meta($curr_id, 'title', true);
                                $type = get_post_meta($curr_id, 'type', true);
                                $program_card_url = get_post_meta($curr_id, 'program_card_url', true);
                                $pillar_card_url = get_post_meta($curr_id, 'pillar_card_url', true);
                                $available_for = get_post_meta($curr_id, 'available_for', true);
                                ?>
                                <div class="tr" data-id="<?php echo $curr_id; ?>"
                                     program-card-url="<?php echo $program_card_url; ?>"
                                     pillar-card-url="<?php echo $pillar_card_url; ?>"
                                     available-for='<?php echo json_encode($available_for); ?>'
                                >
                                    <div class="td"><?php echo $title; ?></div>
                                    <div class="td"><?php if ($available_for) {echo count($available_for).' Memberships';} else {echo '-';} ?> </div>
                                    <div class="td"><?php echo $type; ?></div>
                                    <div class="td">
                                        <button class="open-builder-program">Open Builder</button>
                                    </div>
                                    <div class="td">
                                        <button class="remove-program">...</button>
                                    </div>
                                    <div class="pillars-wrapper">
                                        <?php
                                        $pillar_count =  get_post_meta($curr_id,'pillar_count',true);
                                        if (!$pillar_count){
                                            $pillar_count = 0;
                                        }

                                        for($i = 1; $i <= $pillar_count; $i++){
                                            $pillar_data = get_post_meta($curr_id, 'pillar_number_'.$i, true);
                                            if ($pillar_data){
                                                $pillar_title = $pillar_data['title'];
                                                $pillar_status = $pillar_data['status'];

                                                $back_text = $pillar_data['back_text'];
                                                $bullet_1 = $pillar_data['bullet_1'];
                                                $bullet_2 = $pillar_data['bullet_2'];
                                                $bullet_3 = $pillar_data['bullet_3'];
                                                $bullet_4 = $pillar_data['bullet_4'];
                                                $auto_unlock = $pillar_data['auto_unlock'];
                                                $auto_unlock_type = $pillar_data['auto_unlock_type'];
                                                $auto_unlock_pillar_select = $pillar_data['auto_unlock_pillar_select'];
                                                $auto_unlock_time_select = $pillar_data['auto_unlock_time_select'];
                                                $auto_unlock_days = $pillar_data['auto_unlock_days'];

                                                ?>
                                                <a class="pillar-list-item" data-number="<?php echo $i; ?>" data-id="<?php echo $curr_id; ?>"
                                                   pillar_title="<?php echo $pillar_title; ?>"
                                                   pillar_status="<?php echo $pillar_status; ?>"
                                                   back_text="<?php echo $back_text; ?>"
                                                   bullet_1="<?php echo $bullet_1; ?>"
                                                   bullet_2="<?php echo $bullet_2; ?>"
                                                   bullet_3="<?php echo $bullet_3; ?>"
                                                   bullet_4="<?php echo $bullet_4; ?>"
                                                   auto_unlock="<?php echo $auto_unlock; ?>"
                                                   auto_unlock_type="<?php echo $auto_unlock_type; ?>"
                                                   auto_unlock_pillar_select="<?php echo $auto_unlock_pillar_select; ?>"
                                                   auto_unlock_time_select="<?php echo $auto_unlock_time_select; ?>"
                                                   auto_unlock_days="<?php echo $auto_unlock_days; ?>"
                                                >
                                                    <span class="pillar-list-item-title"><?php echo $pillar_title; ?> </span>
                                                    <button class="move-pillar">...</button>
                                                </a>
                                                <div class="modules-wrapper"><?php
                                                    $module_count =  get_post_meta($curr_id,'module_count_'.$i,true);
                                                    if (!$module_count){
                                                        $module_count = 0;
                                                    }

                                                    for($j = 1; $j <= $module_count; $j++){
                                                        $module_data = get_post_meta($curr_id, 'module_number_'.$i.'_id_'.$j, true);
                                                        if ($module_data){
                                                            $module_title = $module_data['title'];
                                                            $module_status = $module_data['status'];
                                                            $video_url = $module_data['video_url'];
                                                            $description = $module_data['description'];
                                                            $transcription = $module_data['transcription'];
                                                            $module_links = $module_data['module_links'];
                                                            $drip_release = $module_data['drip_release'];
                                                            $add_to_progress = $module_data['add_to_progress'];
                                                            $drip_release_type = $module_data['drip_release_type'];
                                                            $drip_release_module_pillar = $module_data['drip_release_module_pillar'];
                                                            $drip_release_module_module = $module_data['drip_release_module_module'];
                                                            $drip_release_pillar_pillar = $module_data['drip_release_pillar_pillar'];
                                                            $drip_release_time = $module_data['drip_release_time'];
                                                            $drip_release_days = $module_data['drip_release_days'];

                                                            ?>
                                                            <a class="module-list-item" data-counter="<?php echo $j; ?>" data-number="<?php echo $i; ?>" data-id="<?php echo $curr_id; ?>"
                                                               module_title="<?php echo $module_title; ?>"
                                                               module_status="<?php echo $module_status; ?>"
                                                               video_url="<?php echo $video_url; ?>"
                                                               description="<?php echo $description; ?>"
                                                               transcription="<?php echo $transcription; ?>"
                                                               module_links='<?php echo json_encode($module_links); ?>'
                                                               drip_release="<?php echo $drip_release; ?>"
                                                               add_to_progress="<?php echo $add_to_progress; ?>"
                                                               drip_release_type="<?php echo $drip_release_type; ?>"
                                                               drip_release_module_pillar="<?php echo $drip_release_module_pillar; ?>"
                                                               drip_release_module_module="<?php echo $drip_release_module_module; ?>"
                                                               drip_release_pillar_pillar="<?php echo $drip_release_pillar_pillar; ?>"
                                                               drip_release_time="<?php echo $drip_release_time; ?>"
                                                               drip_release_days="<?php echo $drip_release_days; ?>"
                                                            >
                                                                <span class="module-list-item-title"><?php echo $module_title; ?> </span>
                                                                <button class="move-module">...</button>
                                                            </a>
                                                            <?php
                                                        }
                                                    }
                                                    ?></div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        wp_reset_query();
                        ?>
                    </div>
                </div>
                <button class="add-new-program add-new-button">+ Add New</button>
            </div>
            <div class="tab-content-item tab-content-item-archive">
                <p>Archived Programs</p>
                <div class="memberships-table archive-programs-table">
                    <div class="thead">
                        <div class="tr">
                            <div class="th">Program</div>
                            <div class="th">Available For</div>
                            <div class="th">Type</div>
                            <div class="th"></div>
                            <div class="th"></div>
                        </div>
                    </div>
                    <div class="tbody">
                        <?php
                        $args = array(
                            'post_type' => 'memberships_program',
                            'posts_per_page' => 9999,
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'post_status' => array('publish', 'draft', 'trash'),
                            'meta_query'     => [
                            [
                                'key'      => 'archive',
                                'value'    => 'yes'
                            ]
                        ]
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()){
                            while($query->have_posts()){
                                $query->the_post();
                                $curr_id = get_the_ID();

                                $title = get_post_meta($curr_id, 'title', true);
                                $type = get_post_meta($curr_id, 'type', true);
                                $program_card_url = get_post_meta($curr_id, 'program_card_url', true);
                                $pillar_card_url = get_post_meta($curr_id, 'pillar_card_url', true);
                                $available_for = get_post_meta($curr_id, 'available_for', true);
                                ?>
                                <div class="tr" data-id="<?php echo $curr_id; ?>"
                                     program-card-url="<?php echo $program_card_url; ?>"
                                     pillar-card-url="<?php echo $pillar_card_url; ?>"
                                     available-for='<?php echo json_encode($available_for); ?>'
                                >
                                    <div class="td"><?php echo $title; ?></div>
                                    <div class="td">Archived</div>
                                    <div class="td"><?php echo $type; ?></div>
                                    <div class="td">
                                        <button class="open-builder-program">Open Builder</button>
                                    </div>
                                    <div class="td">
                                        <button class="activate-program">...</button>
                                    </div>
                                    <div class="pillars-wrapper">
                                        <?php
                                        $pillar_count =  get_post_meta($curr_id,'pillar_count',true);
                                        if (!$pillar_count){
                                            $pillar_count = 0;
                                        }

                                        for($i = 1; $i <= $pillar_count; $i++){
                                            $pillar_data = get_post_meta($curr_id, 'pillar_number_'.$i, true);
                                            if ($pillar_data){
                                                $pillar_title = $pillar_data['title'];
                                                $pillar_status = $pillar_data['status'];

                                                $back_text = $pillar_data['back_text'];
                                                $bullet_1 = $pillar_data['bullet_1'];
                                                $bullet_2 = $pillar_data['bullet_2'];
                                                $bullet_3 = $pillar_data['bullet_3'];
                                                $bullet_4 = $pillar_data['bullet_4'];
                                                $auto_unlock = $pillar_data['auto_unlock'];
                                                $auto_unlock_type = $pillar_data['auto_unlock_type'];
                                                $auto_unlock_pillar_select = $pillar_data['auto_unlock_pillar_select'];
                                                $auto_unlock_time_select = $pillar_data['auto_unlock_time_select'];
                                                $auto_unlock_days = $pillar_data['auto_unlock_days'];

                                                ?>
                                                <a class="pillar-list-item" data-number="<?php echo $i; ?>" data-id="<?php echo $curr_id; ?>"
                                                   pillar_title="<?php echo $pillar_title; ?>"
                                                   pillar_status="<?php echo $pillar_status; ?>"
                                                   back_text="<?php echo $back_text; ?>"
                                                   bullet_1="<?php echo $bullet_1; ?>"
                                                   bullet_2="<?php echo $bullet_2; ?>"
                                                   bullet_3="<?php echo $bullet_3; ?>"
                                                   bullet_4="<?php echo $bullet_4; ?>"
                                                   auto_unlock="<?php echo $auto_unlock; ?>"
                                                   auto_unlock_type="<?php echo $auto_unlock_type; ?>"
                                                   auto_unlock_pillar_select="<?php echo $auto_unlock_pillar_select; ?>"
                                                   auto_unlock_time_select="<?php echo $auto_unlock_time_select; ?>"
                                                   auto_unlock_days="<?php echo $auto_unlock_days; ?>"
                                                >
                                                    <span class="pillar-list-item-title"><?php echo $pillar_title; ?> </span>
                                                    <button class="move-pillar">...</button>
                                                </a>
                                                <div class="modules-wrapper"><?php
                                                    $module_count =  get_post_meta($curr_id,'module_count_'.$i,true);
                                                    if (!$module_count){
                                                        $module_count = 0;
                                                    }

                                                    for($j = 1; $j <= $module_count; $j++){
                                                        $module_data = get_post_meta($curr_id, 'module_number_'.$i.'_id_'.$j, true);
                                                        if ($module_data){
                                                            $module_title = $module_data['title'];
                                                            $module_status = $module_data['status'];
                                                            $video_url = $module_data['video_url'];
                                                            $description = $module_data['description'];
                                                            $transcription = $module_data['transcription'];
                                                            $module_links = $module_data['module_links'];
                                                            $drip_release = $module_data['drip_release'];
                                                            $add_to_progress = $module_data['add_to_progress'];
                                                            $drip_release_type = $module_data['drip_release_type'];
                                                            $drip_release_module_pillar = $module_data['drip_release_module_pillar'];
                                                            $drip_release_module_module = $module_data['drip_release_module_module'];
                                                            $drip_release_pillar_pillar = $module_data['drip_release_pillar_pillar'];
                                                            $drip_release_time = $module_data['drip_release_time'];
                                                            $drip_release_days = $module_data['drip_release_days'];
                                                            ?>
                                                            <a class="module-list-item" data-counter="<?php echo $j; ?>" data-number="<?php echo $i; ?>" data-id="<?php echo $curr_id; ?>"
                                                               module_title="<?php echo $module_title; ?>"
                                                               module_status="<?php echo $module_status; ?>"
                                                               video_url="<?php echo $video_url; ?>"
                                                               description="<?php echo $description; ?>"
                                                               transcription="<?php echo $transcription; ?>"
                                                               module_links='<?php echo json_encode($module_links); ?>'
                                                               drip_release="<?php echo $drip_release; ?>"
                                                               add_to_progress="<?php echo $add_to_progress; ?>"
                                                               drip_release_type="<?php echo $drip_release_type; ?>"
                                                               drip_release_module_pillar="<?php echo $drip_release_module_pillar; ?>"
                                                               drip_release_module_module="<?php echo $drip_release_module_module; ?>"
                                                               drip_release_pillar_pillar="<?php echo $drip_release_pillar_pillar; ?>"
                                                               drip_release_time="<?php echo $drip_release_time; ?>"
                                                               drip_release_days="<?php echo $drip_release_days; ?>"
                                                            >
                                                                <span class="module-list-item-title"><?php echo $module_title; ?> </span>
                                                                <button class="move-module">...</button>
                                                            </a>
                                                            <?php
                                                        }
                                                    }
                                                    ?></div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
            <div class="tab-content-item tab-content-item-edit-program">
                <a href="#" class="back-to-list-program"></a>
                <p class="program-name">Edit <span>Program</span>: <span>NAME</span></p>
                <div class="edit-product-wrapper">
                    <div class="edit-program-sidebar">
                        <p>Pillars</p>
                        <div class="pillars-list"></div>
                        <a href="#" class="add-pillar">+ Add Pillar</a>
                    </div>
                    <div class="edit-program-content">

                        <div class="edit-type-content-program edit-type-content-modules active">
                            <div class="type-sidebar-module">
                                <p>Modules</p>
                                <div class="modules-list">
                                    
                                </div>
                                <a href="#" class="add-module">+ Add Module</a>
                            </div>
                            <div class="type-content">
                                <div class="type-content-inner-pillar current-pillar-module">
                                    <div class="type-content-item" data-id="0">
                                        <h2>Edit Pillar</h2>
                                        <p class="p-1-title">Pillar Title</p>
                                        <input class="pillar-edit-title" type="text" />
                                        <p class="p-2-title">Status</p>
                                        <select class="pillar-status">
                                            <option value="Draft">Draft</option>
                                            <option value="Published">Published</option>
                                        </select>
                                    </div>
                                    <button class="is-cancel-button program-edit-cancel">Cancel</button>
                                    <button class="is-save-button save-pillar">Save</button>
                                </div>
                                <div class="type-content-inner-pillar-custom current-pillar-module">
                                    <div class="type-content-item" data-id="0">
                                        <h2>Edit Pillar</h2>
                                        <p class="p-1-title">Pillar Title</p>
                                        <input class="pillar-edit-title" type="text" />
                                        <p class="p-2-title">Status</p>
                                        <select class="pillar-status">
                                            <option value="Draft">Draft</option>
                                            <option value="Locked">Locked</option>
                                            <option value="Published">Published</option>
                                        </select>
                                        <p class="p-1-title">Back Text</p>
                                        <input type="text" class="pillar-back-text">
                                        <p class="p-1-title">Bullet 1</p>
                                        <input type="text" class="pillar-bullet-1">
                                        <p class="p-1-title">Bullet 2</p>
                                        <input type="text" class="pillar-bullet-2">
                                        <p class="p-1-title">Bullet 3</p>
                                        <input type="text" class="pillar-bullet-3">
                                        <p class="p-1-title">Bullet 4</p>
                                        <input type="text" class="pillar-bullet-4">
                                        <p class="p-4-title">Auto Unlock</p>
                                        <input type="checkbox" class="auto_unlock" id="auto_unlock">
                                        <label for="auto_unlock"></label>
                                        <div class="auto-unlock-wrapper">
                                            <select class="auto-unlock-type">
                                                <option value="Pillar">Pillar</option>
                                                <option value="Time">Time</option>
                                            </select>
                                            <div class="auto-unlock-pillar-wrapper">
                                                <p>Days After Pillar</p>
                                                <select class="auto-unlock-pillar"></select>
                                            </div>
                                            <div class="auto-unlock-time-wrapper">
                                                <p>Days After Joining</p>
                                                <select class="auto-unlock-time">
                                                    <?php
                                                    $select_memberships = '';
                                                    $args = array(
                                                        'post_type' => 'memberships_product',
                                                        'posts_per_page' => 9999,
                                                        'orderby' => 'date',
                                                        'order' => 'ASC',
                                                        'post_status' => array('publish', 'draft', 'trash')
                                                    );
                                                    $query = new WP_Query($args);
                                                    if ($query->have_posts()) {
                                                        while ($query->have_posts()) {
                                                            $query->the_post();
                                                            $curr_id = get_the_ID();
                                                            $title = get_post_meta($curr_id,'title',true);
                                                            $select_memberships .= '<option value="'.$curr_id.'">'.$title.'</option>';
                                                            ?>
                                                            <option value="<?php echo $curr_id; ?>"><?php echo $title; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    wp_reset_query();
                                                    $args = array(
                                                        'post_type' => 'memberships_sub',
                                                        'posts_per_page' => 9999,
                                                        'orderby' => 'date',
                                                        'order' => 'ASC',
                                                        'post_status' => array('publish', 'draft', 'trash')
                                                    );
                                                    $query = new WP_Query($args);
                                                    if ($query->have_posts()) {
                                                        while ($query->have_posts()) {
                                                            $query->the_post();
                                                            $curr_id = get_the_ID();
                                                            $title = get_post_meta($curr_id,'title',true);
                                                            $select_memberships .= '<option value="'.$curr_id.'">'.$title.'</option>';
                                                            ?>
                                                            <option value="<?php echo $curr_id; ?>"><?php echo $title; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    wp_reset_query();
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="auto-unlock-days-wrapper">
                                                <input type="number" class="auto-unlock-days">
                                                <p>Days</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="is-cancel-button program-edit-cancel">Cancel</button>
                                    <button class="is-save-button save-pillar-custom">Save</button>
                                </div>
                                <div class="type-content-inner-module current-pillar-module">
                                    <div class="type-content-item" data-id="0">
                                        <h2>Edit Module</h2>
                                        <p class="p-1-title">Module Title</p>
                                        <input class="module-edit-title" type="text" />
                                        <p class="p-2-title">Status</p>
                                        <select class="module-status">
                                            <option value="Draft">Draft</option>
                                            <option value="Locked">Locked</option>
                                            <option value="Published">Published</option>
                                        </select>
                                        <p class="p-3-title">Video URL</p>
                                        <input type="text" class="module-video-url">
                                        <p class="p-block-title">Description</p>
                                        <textarea class="module-description"></textarea>
                                        <div class="module-links-list"></div>
                                        <a href="#" class="add-module-link">+ Add Link</a>
                                        <p class="p-block-title">Transcription</p>
                                        <textarea class="module-transcription"></textarea>
                                        <p class="p-5-title">Drip Release</p>
                                        <input type="checkbox" class="drip_release" id="drip_release">
                                        <label for="drip_release"></label>
                                        <p class="p-6-title">Adds To Progress</p>
                                        <div class="program-checkbox-wrapper">
                                            <input type="checkbox" class="add_to_progress" id="add_to_progress" checked="checked">
                                            <label for="add_to_progress"></label>
                                        </div>

                                        <div class="drip-release-wrapper">

                                            <select class="drip-release-type">
                                                <option value="Module">Module</option>
                                                <option value="Pillar">Pillar</option>
                                                <option value="Time">Time</option>
                                            </select>

                                            <div class="drip-release-module-wrapper">
                                                <p>After Completing</p>
                                                <select class="drip-release-module-pillar">
                                                    <option>Pillar 1</option>
                                                    <option>Pillar 2</option>
                                                </select>
                                                <select class="drip-release-module-module">
                                                    <option>Module 1</option>
                                                    <option>Module 2</option>
                                                </select>
                                            </div>

                                            <div class="drip-release-pillar-wrapper">
                                                <p>After Completing</p>
                                                <p>All Modules In</p>
                                                <select class="drip-release-pillar-pillar">
                                                    <option>Pillar 1</option>
                                                    <option>Pillar 2</option>
                                                </select>
                                            </div>

                                            <div class="drip-release-time-wrapper">
                                                <p>Days After Joining</p>
                                                <select class="drip-release-time">
                                                    <?php
                                                    $args = array(
                                                        'post_type' => 'memberships_product',
                                                        'posts_per_page' => 9999,
                                                        'orderby' => 'date',
                                                        'order' => 'ASC',
                                                        'post_status' => array('publish', 'draft', 'trash')
                                                    );
                                                    $query = new WP_Query($args);
                                                    if ($query->have_posts()) {
                                                        while ($query->have_posts()) {
                                                            $query->the_post();
                                                            $curr_id = get_the_ID();
                                                            $title = get_post_meta($curr_id,'title',true);
                                                            ?>
                                                            <option value="<?php echo $curr_id; ?>"><?php echo $title; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    wp_reset_query();
                                                    $args = array(
                                                        'post_type' => 'memberships_sub',
                                                        'posts_per_page' => 9999,
                                                        'orderby' => 'date',
                                                        'order' => 'ASC',
                                                        'post_status' => array('publish', 'draft', 'trash')
                                                    );
                                                    $query = new WP_Query($args);
                                                    if ($query->have_posts()) {
                                                        while ($query->have_posts()) {
                                                            $query->the_post();
                                                            $curr_id = get_the_ID();
                                                            $title = get_post_meta($curr_id,'title',true);
                                                            ?>
                                                            <option value="<?php echo $curr_id; ?>"><?php echo $title; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    wp_reset_query();
                                                    ?>
                                                </select>
                                                <input type="number" class="drip-release-days">
                                                <p class="p-7-title">Days</p>
                                            </div>

                                        </div>
                                    </div>
                                    <button class="is-cancel-button program-edit-cancel">Cancel</button>
                                    <button class="is-save-button save-module">Save</button>
                                </div>
                                <div class="type-content-inner-module-custom current-pillar-module">
                                    <div class="type-content-item" data-id="0">
                                        <h2>Edit Module</h2>
                                        <p class="p-1-title">Module Title</p>
                                        <input class="module-edit-title" type="text" />
                                        <p class="p-2-title">Status</p>
                                        <select class="module-status">
                                            <option value="Draft">Draft</option>
                                            <option value="Locked">Locked</option>
                                            <option value="Published">Published</option>
                                        </select>
                                        <p class="p-3-title">Video URL</p>
                                        <input type="text" class="module-video-url">
                                        <p class="p-block-title">Description</p>
                                        <textarea class="module-description"></textarea>
                                        <div class="module-links-list"></div>
                                        <a href="#" class="add-module-link">+ Add Link</a>
                                        <p class="p-block-title">Transcription</p>
                                        <textarea class="module-transcription"></textarea>
                                    </div>
                                    <button class="is-cancel-button program-edit-cancel">Cancel</button>
                                    <button class="is-save-button save-module-custom">Save</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content tab-content-templates">

        </div>
    </div>
</div>

<div class="products-classes hidden">
    <?php
    $args = array(
        'post_type' => 'memberships_product',
        'posts_per_page' => 9999,
        'orderby' => 'date',
        'order' => 'ASC',
        'post_status' => array('publish', 'draft', 'trash')
    );
    $query = new WP_Query($args);
    if ($query->have_posts()){
        while($query->have_posts()){
            $query->the_post();
            $curr_id = get_the_ID();

            $class_count =  get_post_meta($curr_id,'class_count',true);
            if (!$class_count){
                $class_count = 0;
            }

            for($i = 1; $i <= $class_count; $i++){
                $class_data = get_post_meta($curr_id, 'class_number_'.$i, true);
                if ($class_data){
                    $class_title = $class_data['title'];
                    $class_onboarding = $class_data['onboarding'];
                    $class_steps = $class_data['steps'];
                    ?>
                    <div class="classes-item" data-id="<?php echo $curr_id; ?>">
                        <a class="class-list-item" data-number="<?php echo $i; ?>" data-id="<?php echo $curr_id; ?>" onboarding-class="<?php echo $class_onboarding; ?>"><span class="classes-list-item-title"><?php echo $class_title; ?></span><button class="move-class">...</button></a>
                    </div>
                    <div class="step-list-wrapper" data-steps-count="<?php echo count($class_steps); ?>" data-id="<?php echo $curr_id; ?>" data-number="<?php echo $i; ?>">
                        <?php
                        $step_counter = 0 ;
                        foreach ($class_steps as $step){
                            $step_counter++;
                            ?>
                            <div class="step-item" data-number="<?php echo $step_counter; ?>">
                                <p>Onboarding Video:</p>
                                <input type="checkbox" class="onboarding-video" id="onboarding_video_<?php echo $step_counter; ?>"
                                    <?php
                                    if ($step['video_enable'] == 'on'){
                                        echo 'checked="checked"';
                                    }
                                    ?>
                                >
                                <label for="onboarding_video_<?php echo $step_counter; ?>"></label>
                                <p>Onboarding Checklist</p>
                                <button class="move-step">...</button>
                                <div class="video-wrapper
                                        <?php
                                if ($step['video_enable'] == 'on'){
                                    echo 'show';
                                }
                                ?>"
                                >
                                    <button class="step-video-title"><?php echo $step['video_title']; ?></button>
                                    <p>Title</p>
                                    <input type="text" class="video-title" value="<?php echo $step['video_title']; ?>">
                                    <p>Video URL</p>
                                    <input type="text" class="video-url" value="<?php echo $step['video_url']; ?>">
                                    <p>Description</p>
                                    <textarea type="text" class="video-description"><?php echo $step['video_description']; ?></textarea>
                                    <div class="step-links-list">
                                        <?php
                                        if ($step['step_links']){
                                            $links_count = 0;
                                            foreach ($step['step_links'] as $link){
                                                $links_count++;
                                                ?>
                                                <div class="step-links-item" data-number="<?php echo $links_count; ?>">
                                                    <button class="move-step-link">...</button>
                                                    <p><?php echo $link['link_text']; ?></p>
                                                    <a href="<?php echo $link['link_url']; ?>" target="_blank" class="link-icon"></a>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <a href="#" class="add-step-link">+ Add Link</a>
                                    <button class="cancel-step-video">Cancel</button>
                                    <button class="save-step-video">Save</button>
                                </div>
                                <div class="checklist-wrapper">
                                    <button class="step-checklist-title"><?php echo $step['checklist_title']; ?></button>
                                    <p>Title</p>
                                    <input type="text" class="checklist-title" value="<?php echo $step['checklist_title']; ?>">
                                    <div class="step-steps-list">
                                        <?php
                                        if ($step['step_steps']) {
                                            $steps_count = 0;
                                            foreach ($step['step_steps'] as $step_step) {
                                                $steps_count++;
                                                ?>
                                                <div class="step-steps-item" data-number="<?php echo $steps_count; ?>">
                                                    <select class="step-step-type">
                                                        <option value="Manual"
                                                            <?php
                                                            echo ($step_step['step_type'] == 'Manual') ? 'selected' : '';
                                                            ?>
                                                        >Manual</option>
                                                        <option value="Module"
                                                            <?php
                                                            echo ($step_step['step_type'] == 'Module') ? 'selected' : '';
                                                            ?>
                                                        >Module</option>
                                                        <option value="Auto"
                                                            <?php
                                                            echo ($step_step['step_type'] == 'Auto') ? 'selected' : '';
                                                            ?>
                                                        >Auto</option>
                                                    </select>
                                                    <button class="move-step-step">...</button>
                                                    <p>Step Text</p>
                                                    <input type="text" class="step-text" value="<?php echo $step_step['step_text']; ?>">
                                                    <div class="manual-wrapper"
                                                        <?php
                                                        if ($step_step['step_type'] == 'Module'){
                                                            echo 'style="display: none !important;"';
                                                        }
                                                        ?>>
                                                        <p>Text URL</p>
                                                        <input type="text" class="step-text-url" value="<?php echo $step_step['step_url']; ?>">
                                                    </div>
                                                    <div class="module-wrapper"
                                                        <?php
                                                        if ($step_step['step_type'] !== 'Module'){
                                                            echo 'style="display: none !important;"';
                                                        }
                                                        ?>>
                                                        <p>Module</p>
                                                        <select class="module-program-select">
                                                            <?php
                                                            $step_program = $step_step['step_program'];
                                                            $found_program = 0;
                                                            foreach ($programs_array as $key => $program){
                                                                ?>
                                                                <option value="<?php echo $program['id']; ?>"
                                                                    <?php
                                                                    if ($step_program == $program['id']){
                                                                        echo 'selected';
                                                                        $found_program = $key;
                                                                    }
                                                                    ?>
                                                                ><?php echo $program['title'] ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                        <select class="module-module-select">
                                                            <?php
                                                            $step_module = $step_step['step_module'];
                                                            foreach ($modules_array[$found_program] as $module){
                                                                ?>
                                                                <option value="<?php echo $module['id']; ?>"
                                                                    <?php
                                                                    if ($step_module == $module['id']){
                                                                        echo 'selected';
                                                                    }
                                                                    ?>
                                                                ><?php echo $module['title'] ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <a href="#" class="add-step-step">+ Add Step</a>
                                    <p>Completion Button Text</p>
                                    <input type="text" class="checklist-button-text" value="<?php echo $step['checklist_button_text']; ?>">
                                    <p>Completion Popup Text</p>
                                    <textarea type="text" class="checklist-popup-text"><?php echo $step['checklist_popup_text']; ?></textarea>
                                    <button class="cancel-step-checklist">Cancel</button>
                                    <button class="save-step-checklist">Save</button>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                }
            }


            $levels_title = get_post_meta($curr_id, 'levels_title', true);
            $levels_description = get_post_meta($curr_id, 'levels_description', true);
            $levels_metric_shortcode = get_post_meta($curr_id, 'levels_metric_shortcode', true);
            $levels_upgrade_to = get_post_meta($curr_id, 'levels_upgrade_to', true);
            $levels_user_upgrade = get_post_meta($curr_id, 'levels_user_upgrade', true);
            $levels_levels = get_post_meta($curr_id, 'levels_levels', true);
            ?>
            <div class="levels-wrapper" data-id="<?php echo $curr_id; ?>">
                <h2>Upgrade Levels</h2>
                <div class="levels-table main-levels">
                    <div class="thead">
                        <div class="tr">
                            <div class="th">Title</div>
                            <div class="th">Metric</div>
                            <div class="th">Requirement</div>
                            <div class="th">Once Complete</div>
                            <div class="th"></div>
                        </div>
                    </div>
                    <div class="tbody">
                        <?php
                        $levels_count = count($levels_levels);
                        $levels_counter = 0;
                        foreach ($levels_levels as $level){
                            $levels_counter++;
                            ?>
                            <div class="tr">
                                <div class="td">
                                    <input type="text" class="level-title" value="<?php echo $level["title"]; ?>">
                                </div>
                                <div class="td">
                                    <select class="level-type">
                                        <option value="days_tracked" <?php
                                        echo ($level["metric"] == 'days_tracked') ? 'selected' : '';
                                        ?>
                                        >Days Tracked</option>
                                        <option value="calls" <?php
                                        echo ($level["metric"] == 'calls') ? 'selected' : '';
                                        ?>
                                        >Calls</option>
                                        <option value="ad_spend" <?php
                                        echo ($level["metric"] == 'ad_spend') ? 'selected' : '';
                                        ?>
                                        >Ad Spend</option>
                                        <option value="leads" <?php
                                        echo ($level["metric"] == 'leads') ? 'selected' : '';
                                        ?>
                                        >Leads</option>
                                        <option value="bookings" <?php
                                        echo ($level["metric"] == 'bookings') ? 'selected' : '';
                                        ?>
                                        >Bookings</option>
                                        <option value="sales" <?php
                                        echo ($level["metric"] == 'sales') ? 'selected' : '';
                                        ?>
                                        >Sales</option>
                                        <option value="cash" <?php
                                        echo ($level["metric"] == 'cash') ? 'selected' : '';
                                        ?>
                                        >Cash</option>
                                        <option value="revenue" <?php
                                        echo ($level["metric"] == 'revenue') ? 'selected' : '';
                                        ?>
                                        >Revenue</option>
                                    </select>
                                </div>
                                <div class="td">
                                    <input type="number" class="level-requirement" value="<?php echo $level["requirement"]; ?>">
                                </div>
                                <div class="td">
                                    <select class="level-upgrade">
                                        <option value="next_level" <?php
                                        echo ($level["once_complete"] == 'next_level') ? 'selected' : '';
                                        ?>
                                        >Next Level</option>
                                        <?php
                                        if ($levels_count == $levels_counter){
                                            ?>
                                            <option value="upgrade" <?php echo ($level["once_complete"] == 'upgrade') ? 'selected' : ''; ?>>Upgrade</option>
                                            <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="td">
                                    <a href="#" class="remove-level">X</a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <button class="add-new-level add-new-button">Add New</button>
                <div class="levels-table upgrade-levels">
                    <p>Upgrade Level</p>
                    <div class="items-4-wrapper">
                        <p>Level Title</p>
                        <input type="text" class="upgrade-level-title" value="<?php echo $levels_title; ?>">
                        <p>Upgrade to</p>
                        <select class="upgrade-to">
                            <?php
                                foreach ($select_memberships_sub as $sub){
                                    ?>
                                    <option value="<?php echo $sub['id']; ?>" <?php echo $sub['id'] == $levels_upgrade_to ? 'selected' : '' ; ?>><?php echo $sub['title']?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="items-4-wrapper">
                        <p>Description</p>
                        <input type="text" class="upgrade-description" value="<?php echo $levels_description; ?>">

                        <!--
                        <p>User upgrade</p>
                        <select class="upgrade-user">
                            <option value="Manual"<?php
/*                            echo ($levels_user_upgrade == 'Manual') ? 'selected' : '';
                            */?>
                            >Manual</option>
                            <option value="Request" <?php
/*                            echo ($levels_user_upgrade == 'Request') ? 'selected' : '';
                            */?>
                            >Request</option>
                        </select>
                        -->

                    </div>
                    <p class="metric-shortcode-p">Metric Shortcode</p>
                    <select class="metric-shortcode">
                        <option value="days_tracked" <?php
                        echo ($levels_metric_shortcode == 'days_tracked') ? 'selected' : '';
                        ?>
                        >Days Tracked</option>
                        <option value="calls" <?php
                        echo ($levels_metric_shortcode == 'calls') ? 'selected' : '';
                        ?>
                        >Calls</option>
                        <option value="ad_spend" <?php
                        echo ($levels_metric_shortcode == 'ad_spend') ? 'selected' : '';
                        ?>
                        >Ad Spend</option>
                        <option value="leads" <?php
                        echo ($levels_metric_shortcode == 'leads') ? 'selected' : '';
                        ?>
                        >Leads</option>
                        <option value="bookings" <?php
                        echo ($levels_metric_shortcode == 'bookings') ? 'selected' : '';
                        ?>
                        >Bookings</option>
                        <option value="sales" <?php
                        echo ($levels_metric_shortcode == 'sales') ? 'selected' : '';
                        ?>
                        >Sales</option>
                        <option value="cash" <?php
                        echo ($levels_metric_shortcode == 'cash') ? 'selected' : '';
                        ?>
                        >Cash</option>
                        <option value="revenue" <?php
                        echo ($levels_metric_shortcode == 'revenue') ? 'selected' : '';
                        ?>
                        >Revenue</option>
                    </select>
                </div>
                <button class="is-cancel-button cancel-edit-levels">Cancel</button>
                <button class="is-save-button save-edit-levels">Save</button>
            </div>
            <?php
        }
    }

    wp_reset_query();
    ?>
</div>

<div class="subscriptions-classes hidden">
    <?php
    $args = array(
        'post_type' => 'memberships_sub',
        'posts_per_page' => 9999,
        'orderby' => 'date',
        'order' => 'ASC',
        'post_status' => array('publish', 'draft', 'trash')
    );
    $query = new WP_Query($args);
    if ($query->have_posts()){
        while($query->have_posts()){
            $query->the_post();
            $curr_id = get_the_ID();

            $class_count =  get_post_meta($curr_id,'class_count',true);
            if (!$class_count){
                $class_count = 0;
            }

            for($i = 1; $i <= $class_count; $i++){
                $class_data = get_post_meta($curr_id, 'class_number_'.$i, true);
                if ($class_data){
                    $class_title = $class_data['title'];
                    $class_onboarding = $class_data['onboarding'];
                    $class_steps = $class_data['steps'];
                    ?>
                    <div class="classes-item" data-id="<?php echo $curr_id; ?>">
                        <a class="class-list-item" data-number="<?php echo $i; ?>" data-id="<?php echo $curr_id; ?>" onboarding-class="<?php echo $class_onboarding; ?>"><span class="classes-list-item-title"><?php echo $class_title; ?></span><button class="move-class">...</button></a>
                    </div>
                    <div class="step-list-wrapper" data-steps-count="<?php echo count($class_steps); ?>" data-id="<?php echo $curr_id; ?>" data-number="<?php echo $i; ?>">
                        <?php
                        $step_counter = 0 ;
                        foreach ($class_steps as $step){
                            $step_counter++;
                            ?>
                            <div class="step-item" data-number="<?php echo $step_counter; ?>">
                                <p>Onboarding Video:</p>
                                <input type="checkbox" class="onboarding-video" id="onboarding_video_<?php echo $step_counter; ?>"
                                    <?php
                                    if ($step['video_enable'] == 'on'){
                                        echo 'checked="checked"';
                                    }
                                    ?>
                                >
                                <label for="onboarding_video_<?php echo $step_counter; ?>"></label>
                                <p>Onboarding Checklist</p>
                                <button class="move-step">...</button>
                                <div class="video-wrapper
                                        <?php
                                if ($step['video_enable'] == 'on'){
                                    echo 'show';
                                }
                                ?>"
                                >
                                    <button class="step-video-title"><?php echo $step['video_title']; ?></button>
                                    <p>Title</p>
                                    <input type="text" class="video-title" value="<?php echo $step['video_title']; ?>">
                                    <p>Video URL</p>
                                    <input type="text" class="video-url" value="<?php echo $step['video_url']; ?>">
                                    <p>Description</p>
                                    <textarea type="text" class="video-description"><?php echo $step['video_description']; ?></textarea>
                                    <div class="step-links-list">
                                        <?php
                                        if ($step['step_links']){
                                            $links_count = 0;
                                            foreach ($step['step_links'] as $link){
                                                $links_count++;
                                                ?>
                                                <div class="step-links-item" data-number="<?php echo $links_count; ?>">
                                                    <button class="move-step-link">...</button>
                                                    <p><?php echo $link['link_text']; ?></p>
                                                    <a href="<?php echo $link['link_url']; ?>" target="_blank" class="link-icon"></a>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <a href="#" class="add-step-link">+ Add Link</a>
                                    <button class="cancel-step-video">Cancel</button>
                                    <button class="save-step-video">Save</button>
                                </div>
                                <div class="checklist-wrapper">
                                    <button class="step-checklist-title"><?php echo $step['checklist_title']; ?></button>
                                    <p>Title</p>
                                    <input type="text" class="checklist-title" value="<?php echo $step['checklist_title']; ?>">
                                    <div class="step-steps-list">
                                        <?php
                                        if ($step['step_steps']) {
                                            $steps_count = 0;
                                            foreach ($step['step_steps'] as $step_step) {
                                                $steps_count++;
                                                ?>
                                                <div class="step-steps-item" data-number="<?php echo $steps_count; ?>">
                                                    <select class="step-step-type">
                                                        <option value="Manual"
                                                            <?php
                                                            echo ($step_step['step_type'] == 'Manual') ? 'selected' : '';
                                                            ?>
                                                        >Manual</option>
                                                        <option value="Module"
                                                            <?php
                                                            echo ($step_step['step_type'] == 'Module') ? 'selected' : '';
                                                            ?>
                                                        >Module</option>
                                                        <option value="Auto"
                                                            <?php
                                                            echo ($step_step['step_type'] == 'Auto') ? 'selected' : '';
                                                            ?>
                                                        >Auto</option>
                                                    </select>
                                                    <button class="move-step-step">...</button>
                                                    <p>Step Text</p>
                                                    <input type="text" class="step-text" value="<?php echo $step_step['step_text']; ?>">
                                                    <div class="manual-wrapper"
                                                        <?php
                                                        if ($step_step['step_type'] == 'Module'){
                                                            echo 'style="display: none !important;"';
                                                        }
                                                        ?>>
                                                        <p>Text URL</p>
                                                        <input type="text" class="step-text-url" value="<?php echo $step_step['step_url']; ?>">
                                                    </div>
                                                    <div class="module-wrapper"
                                                        <?php
                                                        if ($step_step['step_type'] !== 'Module'){
                                                            echo 'style="display: none !important;"';
                                                        }
                                                        ?>>
                                                        <p>Module</p>
                                                        <select class="module-program-select">
                                                            <?php
                                                            $step_program = $step_step['step_program'];
                                                            $found_program = 0;
                                                            foreach ($programs_array as $key => $program){
                                                                ?>
                                                                <option value="<?php echo $program['id']; ?>"
                                                                    <?php
                                                                    if ($step_program == $program['id']){
                                                                        echo 'selected';
                                                                        $found_program = $key;
                                                                    }
                                                                    ?>
                                                                ><?php echo $program['title'] ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                        <select class="module-module-select">
                                                            <?php
                                                            $step_module = $step_step['step_module'];
                                                            foreach ($modules_array[$found_program] as $module){
                                                                ?>
                                                                <option value="<?php echo $module['id']; ?>"
                                                                    <?php
                                                                    if ($step_module == $module['id']){
                                                                        echo 'selected';
                                                                    }
                                                                    ?>
                                                                ><?php echo $module['title'] ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <a href="#" class="add-step-step">+ Add Step</a>
                                    <p>Completion Button Text</p>
                                    <input type="text" class="checklist-button-text" value="<?php echo $step['checklist_button_text']; ?>">
                                    <p>Completion Popup Text</p>
                                    <textarea type="text" class="checklist-popup-text"><?php echo $step['checklist_popup_text']; ?></textarea>
                                    <button class="cancel-step-checklist">Cancel</button>
                                    <button class="save-step-checklist">Save</button>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                }
            }

            $levels_title = get_post_meta($curr_id, 'levels_title', true);
            $levels_description = get_post_meta($curr_id, 'levels_description', true);
            $levels_metric_shortcode = get_post_meta($curr_id, 'levels_metric_shortcode', true);
            $levels_upgrade_to = get_post_meta($curr_id, 'levels_upgrade_to', true);
            $levels_user_upgrade = get_post_meta($curr_id, 'levels_user_upgrade', true);
            $levels_levels = get_post_meta($curr_id, 'levels_levels', true);
            ?>
            <div class="levels-wrapper" data-id="<?php echo $curr_id; ?>">
                <h2>Upgrade Levels</h2>
                <div class="levels-table main-levels">
                    <div class="thead">
                        <div class="tr">
                            <div class="th">Title</div>
                            <div class="th">Metric</div>
                            <div class="th">Requirement</div>
                            <div class="th">Once Complete</div>
                            <div class="th"></div>
                        </div>
                    </div>
                    <div class="tbody">
                        <?php
                        $levels_count = count($levels_levels);
                        $levels_counter = 0;
                        foreach ($levels_levels as $level){
                            $levels_counter++;
                            ?>
                            <div class="tr">
                                <div class="td">
                                    <input type="text" class="level-title" value="<?php echo $level["title"]; ?>">
                                </div>
                                <div class="td">
                                    <select class="level-type">
                                        <option value="days_tracked" <?php
                                        echo ($level["metric"] == 'days_tracked') ? 'selected' : '';
                                        ?>
                                        >Days Tracked</option>
                                        <option value="calls" <?php
                                        echo ($level["metric"] == 'calls') ? 'selected' : '';
                                        ?>
                                        >Calls</option>
                                        <option value="ad_spend" <?php
                                        echo ($level["metric"] == 'ad_spend') ? 'selected' : '';
                                        ?>
                                        >Ad Spend</option>
                                        <option value="leads" <?php
                                        echo ($level["metric"] == 'leads') ? 'selected' : '';
                                        ?>
                                        >Leads</option>
                                        <option value="bookings" <?php
                                        echo ($level["metric"] == 'bookings') ? 'selected' : '';
                                        ?>
                                        >Bookings</option>
                                        <option value="sales" <?php
                                        echo ($level["metric"] == 'sales') ? 'selected' : '';
                                        ?>
                                        >Sales</option>
                                        <option value="cash" <?php
                                        echo ($level["metric"] == 'cash') ? 'selected' : '';
                                        ?>
                                        >Cash</option>
                                        <option value="revenue" <?php
                                        echo ($level["metric"] == 'revenue') ? 'selected' : '';
                                        ?>
                                        >Revenue</option>
                                    </select>
                                </div>
                                <div class="td">
                                    <input type="number" class="level-requirement" value="<?php echo $level["requirement"]; ?>">
                                </div>
                                <div class="td">
                                    <select class="level-upgrade">
                                        <option value="next_level" <?php
                                        echo ($level["once_complete"] == 'next_level') ? 'selected' : '';
                                        ?>
                                        >Next Level</option>
                                        <?php
                                        if ($levels_count == $levels_counter){
                                            ?>
                                            <option value="upgrade" <?php echo ($level["once_complete"] == 'upgrade') ? 'selected' : ''; ?>>Upgrade</option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="td">
                                    <a href="#" class="remove-level">X</a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <button class="add-new-level add-new-button">Add New</button>
                <div class="levels-table upgrade-levels">
                    <p>Upgrade Level</p>
                    <div class="items-4-wrapper">
                        <p>Level Title</p>
                        <input type="text" class="upgrade-level-title" value="<?php echo $levels_title; ?>">
                        <p>Upgrade to</p>
                        <select class="upgrade-to">
                            <?php
                            foreach ($select_memberships_sub as $sub){
                                ?>
                                <option value="<?php echo $sub['id']; ?>" <?php echo $sub['id'] == $levels_upgrade_to ? 'selected' : '' ; ?>><?php echo $sub['title']?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="items-4-wrapper">
                        <p>Description</p>
                        <input type="text" class="upgrade-description" value="<?php echo $levels_description; ?>">


                        <!--
                        <p>User upgrade</p>
                        <select class="upgrade-user">
                            <option value="Manual"<?php
/*                            echo ($levels_user_upgrade == 'Manual') ? 'selected' : '';
                            */?>
                            >Manual</option>
                            <option value="Request" <?php
/*                            echo ($levels_user_upgrade == 'Request') ? 'selected' : '';
                            */?>
                            >Request</option>
                        </select>
                        -->

                    </div>
                    <p class="metric-shortcode-p">Metric Shortcode</p>
                    <select class="metric-shortcode">
                        <option value="days_tracked" <?php
                        echo ($levels_metric_shortcode == 'days_tracked') ? 'selected' : '';
                        ?>
                        >Days Tracked</option>
                        <option value="calls" <?php
                        echo ($levels_metric_shortcode == 'calls') ? 'selected' : '';
                        ?>
                        >Calls</option>
                        <option value="ad_spend" <?php
                        echo ($levels_metric_shortcode == 'ad_spend') ? 'selected' : '';
                        ?>
                        >Ad Spend</option>
                        <option value="leads" <?php
                        echo ($levels_metric_shortcode == 'leads') ? 'selected' : '';
                        ?>
                        >Leads</option>
                        <option value="bookings" <?php
                        echo ($levels_metric_shortcode == 'bookings') ? 'selected' : '';
                        ?>
                        >Bookings</option>
                        <option value="sales" <?php
                        echo ($levels_metric_shortcode == 'sales') ? 'selected' : '';
                        ?>
                        >Sales</option>
                        <option value="cash" <?php
                        echo ($levels_metric_shortcode == 'cash') ? 'selected' : '';
                        ?>
                        >Cash</option>
                        <option value="revenue" <?php
                        echo ($levels_metric_shortcode == 'revenue') ? 'selected' : '';
                        ?>
                        >Revenue</option>
                    </select>
                </div>
                <button class="is-cancel-button cancel-edit-levels">Cancel</button>
                <button class="is-save-button save-edit-levels">Save</button>
            </div>
            <?php

        }
    }
    ?>
</div>

<style>
    .is-habit-wrapper{
        text-align: center;
        position: fixed;
        width: 100vw;
        height: 100vh;
        z-index: 100002;
        left: 0;
        top: 0;
        background: rgba(0, 0, 0, 0.7);
        display: none;
    }

    .is-habit-wrapper.show{
        display: block;
    }

    .is-habit-popup {
        height: auto;
        overflow-y: auto;
        overflow-x: hidden;
        max-height: 90vh;
        width: 90vw;
        max-width: 420px;
        padding: 17px 22px;
        background: #F5F7F7;
        border-radius: 15px;
        position: absolute;
        text-align: left;
        z-index: 1;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        box-sizing: border-box;
    }

    .is-habit-wrapper h2 {
        font-size: 16px;
        color: #000;
        font-weight: 500;
        line-height: 1;
        margin: 0 0 22px 0 !important;
        text-align: left;
        display: block;
    }

    .is-habit-wrapper .popup-close {
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
    }

    .is-habit-wrapper .popup-close:hover,
    .is-habit-wrapper .popup-close:focus {
        color: #005de9;
    }

    .is-habit-wrapper p {
        line-height: 1.5;
        font-size: 14px;
        color: #000;
        font-weight: 400;
        margin: 0 0 28px 0;
        text-align: left;
        display: inline-block;
        width: 35%;
    }

    .is-habit-wrapper .popup-delete p{
        width: 100%;
    }

    .is-habit-wrapper select {
        padding: 0 15px 0 10px;
        font-size: 15px;
        width: 130px;
        height: 28px;
        line-height: 26px;
        border-radius: 20px;
        border: 1px solid #777;
        display: inline-block;
    }

    .is-habit-wrapper input {
        padding: 0 15px 0 10px;
        font-size: 15px;
        height: 28px;
        line-height: 26px;
        border-radius: 5px;
        border: 1px solid #777;
        display: inline-block;
        width: calc(65% - 6px);
    }

    .is-habit-wrapper button {
        border: none;
        background: #375CFF;
        box-shadow: 2px 2px 6px rgb(0 0 0 / 12%);
        display: block;
        margin: 0;
        width: 100%;
        line-height: 1;
        padding: 8px 11px 9px;
        transition: 0.4s all !important;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        color: #fff;
        cursor: pointer;
    }

    .is-habit-wrapper button.active-button{
        width: 226px;
        display: inline-block;
    }

    .is-habit-wrapper button.active-button:hover,
    .is-habit-wrapper button.active-button:focus{
        opacity: 0.8;
    }

    .is-habit-wrapper button.cancel-popup{
        display: inline-block;
        background: rgba(255, 255, 255, 0.99);
        box-shadow: 2px 2px 6px rgb(0 0 0 / 12%);
        width: 137px;
        margin-right: 9px;
        color: #000;
    }

    .is-habit-wrapper button.cancel-popup:hover,
    .is-habit-wrapper button.cancel-popup:focus{
        background: #274AFF;
        color: #fff;
    }
</style>

<div class="popup-add-product-wrapper is-habit-wrapper">
    <div class="popup-add-product is-habit-popup">
        <a href="#" class="popup-close">X</a>
        <h2>Add Product</h2>
        <p>Product Title</p>
        <input type="text" class="product-title">
        <p>Product Type</p>
        <select class="product-type">
            <option value="Lifetime">Lifetime</option>
            <option value="Set">Set</option>
        </select>
        <button class="cancel-popup">Cancel</button>
        <button class="active-button add-product-popup">Add Product</button>
    </div>
</div>

<style>
    .is-habit-wrapper .input-item {
        padding: 0;
        font-size: 15px;
        height: 28px;
        line-height: 26px;
        border-radius: 0;
        border: 0;
        display: inline-block;
        width: calc(65% - 6px);
        box-sizing: border-box;
        background: transparent;
    }

    .multiple-select-wrapper{
        display: none !important;
    }
</style>

<div class="popup-add-program-wrapper is-habit-wrapper">
    <div class="popup-add-program is-habit-popup">
        <a href="#" class="popup-close">X</a>
        <h2>Add Program</h2>
        <p>Program Title</p>
        <input type="text" class="program-title">
        <p>Content Type</p>
        <select class="program-type">
            <option value="Program">Program</option>
            <option value="Custom Content">Custom Content</option>
        </select>
        <p>Program Card</p>
        <input type="text" class="program-card-url">
        <p>Pillar Card</p>
        <input type="text" class="pillar-card-url">
        <p>Available For</p>

        <div class="input-item">
            <select multiple="multiple" class="available-for multiple-select-wrapper">
                <?php
                echo $select_memberships;
                ?>
            </select>
        </div>

        <button class="cancel-popup">Cancel</button>
        <button class="active-button add-program-popup">Add Program</button>
    </div>
</div>

<div class="popup-edit-program-wrapper is-habit-wrapper">
    <div class="popup-edit-program is-habit-popup">
        <a href="#" class="popup-close">X</a>
        <h2>Edit Program</h2>
        <p>Program Title</p>
        <input type="text" class="program-title">
        <p>Content Type</p>
        <select class="program-type">
            <option value="Program">Program</option>
            <option value="Custom Content">Custom Content</option>
        </select>
        <p>Program Card</p>
        <input type="text" class="program-card-url">
        <p>Pillar Card</p>
        <input type="text" class="pillar-card-url">
        <p>Available For</p>

        <div class="input-item">
            <select multiple="multiple" class="available-for multiple-select-wrapper">
                <?php
                echo $select_memberships;
                ?>
            </select>
        </div>

        <button class="cancel-popup">Cancel</button>
        <button class="active-button edit-program-popup">Edit Program</button>
    </div>
</div>

<style>
    .drop {
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;

        display: inline-block;
        height: auto;
        min-height: 28px;
        line-height: 26px;
        font-family: 'avenir-next-lt-pro-r', sans-serif;
        font-size: 15px;
        vertical-align: middle;
        background-color: #fff;
        width: 237px;
        border-radius: 5px;
        border: 1px solid #777;
    }

    .drop.open {
        z-index: 100;
    }

    .drop.open .drop-screen {
        z-index: 100;
        display: block;
    }

    .drop.open .drop-options {
        z-index: 200;
        max-height: 200px;
        border: 1px solid #777;
        margin-left: -1px;
    }

    .drop.open .drop-display {
        z-index: 200;
        border-color: #465;
    }

    .drop select {
        display: none;
    }

    .drop .drop-screen {
        position: fixed;
        width: 100%;
        height: 100%;
        background: #000;
        top: 0px;
        left: 0px;
        opacity: 0;
        display: none;
        z-index: 1;
    }

    .link {
        text-align: center;
        margin: 20px 0px;
        color: #8CACD7;
    }


    .drop .drop-display {
        position: relative;
        padding: 0 12px 0 0;
        border: none;
        z-index: 1;
        margin: 0;
        font-size: 16px;
        min-height: 24px;
        cursor: pointer;
    }

    .drop .drop-display:hover:after {
        color: #005DE9;
    }

    .drop .drop-display:after {
        content: "+";
        position: absolute;
        right: 3px;
        top: 1px;
        font-size: 15px;
        color: #000;
        font-family: 'avenir-next-lt-pro-r', sans-serif;
    }

    .drop .drop-display .item {
        position: relative;
        display: inline-block;
        border: none;
        margin: 2px 3px;
        padding: 0 6px 0 16px;
        overflow: hidden;
        height: 24px;
        line-height: 24px;
        color: #000;
        background-color: rgb(236, 236, 236, 0.95);
        border-radius: 4px;
        font-size: 15px;
        font-family: 'avenir-next-lt-pro-r', sans-serif;
        vertical-align: top;
    }

    .drop .drop-display .item .btnclose {
        color: #878787;
        position: absolute;
        left: 2px;
        top: 6px;
        cursor: pointer;
        font-style: normal;
        line-height: 1;
        text-align: center;
        width: 11px;
        height: 11px;
        background: #fff;
        border-radius: 50%;
        font-size: 10px;
    }

    .drop .drop-display .item .btnclose:hover {
        opacity: 0.75;
    }

    .drop .drop-display .item.remove {
        -webkit-animation: removeSelected 0.2s, hide 1s infinite;
        animation: removeSelected 0.2s, hide 1s infinite;
        -webkit-animation-delay: 0s, 0.2s;
        animation-delay: 0s, 0.2s;
    }

    .drop .drop-display .item.add {
        -webkit-animation: addSelected 0.2s;
        animation: addSelected 0.2s;
    }

    .drop .drop-display .item.hide {
        display: none;
    }

    .drop .drop-options {
        background: #fff;
        position: absolute;
        width: 100%;
        max-height: 0;
        overflow-y: auto;
        z-index: 1;
    }

    .drop .drop-options a {
        display: block;
        height: 24px;
        line-height: 24px;
        padding: 0 10px;
        color: #000;
        position: relative;
        max-height: 24px;
        overflow: hidden;
        font-size: 15px;
        font-family: 'avenir-next-lt-pro-r', sans-serif;
    }

    .drop .drop-options a:hover {
        background: rgba(236, 236, 236, 0.95);
        cursor: pointer;
    }

    .drop .drop-options a.remove {
        -webkit-animation: removeOption 0s;
        animation: removeOption 0s;
        max-height: 0;
    }

    .drop .drop-options a.add {
        -webkit-animation: addOption 0s;
        animation: addOption 0s;
    }

    .drop .drop-options a.hide {
        display: none;
    }

    @-webkit-keyframes pop {
        from {
            -webkit-transform: scale(0);
            transform: scale(0);
        }
        to {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes pop {
        from {
            -webkit-transform: scale(0);
            transform: scale(0);
        }
        to {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @-webkit-keyframes removeOption {
        from {
            max-height: 40px;
        }
        to {
            max-height: 0px;
        }
    }

    @keyframes removeOption {
        from {
            max-height: 40px;
        }
        to {
            max-height: 0px;
        }
    }

    @-webkit-keyframes addOption {
        from {
            max-height: 0px;
        }
        to {
            max-height: 40px;
        }
    }

    @keyframes addOption {
        from {
            max-height: 0px;
        }
        to {
            max-height: 40px;
        }
    }

    @-webkit-keyframes removeSelected {
        from {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        to {
            -webkit-transform: scale(0);
            transform: scale(0);
        }
    }

    @keyframes removeSelected {
        from {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        to {
            -webkit-transform: scale(0);
            transform: scale(0);
        }
    }

    @-webkit-keyframes addSelected {
        from {
            -webkit-transform: scale(0);
            transform: scale(0);
        }
        to {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes addSelected {
        from {
            -webkit-transform: scale(0);
            transform: scale(0);
        }
        to {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @-webkit-keyframes hide {
        from, to {
            max-height: 0px;
            max-width: 0px;
            padding: 0px;
            margin: 0px;
            border-width: 0px;
        }
    }

    @keyframes hide {
        from, to {
            max-height: 0px;
            max-width: 0px;
            padding: 0px;
            margin: 0px;
            border-width: 0px;
        }
    }
</style>
<script>
    var $ = {
        get: function (selector) {
            var ele = document.querySelectorAll(selector);
            for (var i = 0; i < ele.length; i++) {
                this.init(ele[i]);
            }
            return ele;
        },
        template: function (html) {
            var template = document.createElement('div');
            template.innerHTML = html.trim();
            return this.init(template.childNodes[0]);
        },
        init: function (ele) {
            ele.on = function (event, func) {
                this.addEventListener(event, func);
            }
            return ele;
        }
    };

    //Build the plugin
    var drop = function (info) {
        var o = {
            options: info.options,
            selected: info.selected || [],
            preselected: info.preselected || [],
            open: false,
            html: {
                select: $.get(info.selector)[0],
                options: $.get(info.selector + ' option'),
                parent: undefined,
            },
            init: function () {
                //Setup Drop HTML
                this.html.parent = $.get(info.selector)[0].parentNode
                this.html.drop = $.template('<div class="drop"></div>')
                this.html.dropDisplay = $.template('<div class="drop-display">Display</div>')
                this.html.dropOptions = $.template('<div class="drop-options">Options</div>')
                this.html.dropScreen = $.template('<div class="drop-screen"></div>')

                this.html.parent.insertBefore(this.html.drop, this.html.select)
                this.html.drop.appendChild(this.html.dropDisplay)
                this.html.drop.appendChild(this.html.dropOptions)
                this.html.drop.appendChild(this.html.dropScreen)
                //Hide old select
                this.html.drop.appendChild(this.html.select);

                //Core Events
                var that = this;
                this.html.dropDisplay.on('click', function () {
                    that.toggle()
                });
                this.html.dropScreen.on('click', function () {
                    that.toggle()
                });
                //Run Render
                this.load()
                this.preselect()
                this.render();
            },
            toggle: function () {
                this.html.drop.classList.toggle('open');
            },
            addOption: function (e, element) {
                var index = Number(element.dataset.index);
                this.clearStates()
                this.selected.push({
                    index: Number(index),
                    state: 'add',
                    removed: false
                })
                this.options[index].state = 'remove';
                this.render()
            },
            removeOption: function (e, element) {
                e.stopPropagation();
                this.clearStates()
                var index = Number(element.dataset.index);
                this.selected.forEach(function (select) {
                    if (select.index == index && !select.removed) {
                        select.removed = true
                        select.state = 'remove'
                    }
                })
                this.options[index].state = 'add'
                this.render();
            },
            load: function () {
                this.options = [];
                for (var i = 0; i < this.html.options.length; i++) {
                    var option = this.html.options[i]
                    this.options[i] = {
                        html: option.innerHTML,
                        value: option.value,
                        selected: option.selected,
                        state: ''
                    }
                }
            },
            preselect: function () {
                var that = this;
                this.selected = [];
                this.preselected.forEach(function (pre) {
                    that.selected.push({
                        index: pre,
                        state: 'add',
                        removed: false
                    })
                    that.options[pre].state = 'remove';
                })
            },
            render: function () {
                this.renderDrop()
                this.renderOptions()
            },
            renderDrop: function () {
                var that = this;
                var parentHTML = $.template('<div></div>')
                this.selected.forEach(function (select, index) {
                    var option = that.options[select.index];
                    var childHTML = $.template('<span class="item ' + select.state + '">' + option.html + '</span>')
                    var childCloseHTML = $.template(
                        '<i class="material-icons btnclose" data-id="'+option.value+'" data-index="' + select.index + '">x</i></span>')
                    childCloseHTML.on('click', function (e) {
                        that.removeOption(e, this)
                    })
                    childHTML.appendChild(childCloseHTML)
                    parentHTML.appendChild(childHTML)
                })
                this.html.dropDisplay.innerHTML = '';
                this.html.dropDisplay.appendChild(parentHTML)
            },
            renderOptions: function () {
                var that = this;
                var parentHTML = $.template('<div></div>')
                this.options.forEach(function (option, index) {
                    var childHTML = $.template(
                        '<a data-id="'+option.value+'" data-index="' + index + '" class="' + option.state + '">' + option.html + '</a>')
                    childHTML.on('click', function (e) {
                        that.addOption(e, this)
                    })
                    parentHTML.appendChild(childHTML)
                })
                this.html.dropOptions.innerHTML = '';
                this.html.dropOptions.appendChild(parentHTML)
            },
            clearStates: function () {
                var that = this;
                this.selected.forEach(function (select, index) {
                    select.state = that.changeState(select.state)
                })
                this.options.forEach(function (option) {
                    option.state = that.changeState(option.state)
                })
            },
            changeState: function (state) {
                switch (state) {
                    case 'remove':
                        return 'hide'
                    case 'hide':
                        return 'hide'
                    default:
                        return ''
                }
            },
            isSelected: function (index) {
                var check = false
                this.selected.forEach(function (select) {
                    if (select.index == index && select.removed == false) check = true
                })
                return check
            }
        };
        o.init();
        return o;
    }

    var selected_inner = [];

    var myDrop = new drop({
        selector: '.popup-add-program  .available-for'
    });

    jQuery('.popup-add-program .available-for').parent().find('.drop-display').on('DOMSubtreeModified', function () {
        selected_inner = [];
        jQuery(this).find('span.item:not(.hide):not(.remove)').each(function () {
            selected_inner.push(jQuery(this).text().slice(0, -1));
        });
        jQuery('.popup-add-program .available-for option').each(function () {
            if (selected_inner.includes(jQuery(this).text())) {
                jQuery(this).prop('selected', true);
                jQuery(this).attr('selected', 'selected');
            } else {
                jQuery(this).prop('selected', false);
                jQuery(this).removeAttr('selected');
            }
        });
    });

</script>

<div class="popup-add-subscription-wrapper is-habit-wrapper">
    <div class="popup-add-subscription is-habit-popup">
        <a href="#" class="popup-close">X</a>
        <h2>Add Subscription</h2>
        <p>Subscription Title</p>
        <input type="text" class="subscription-title">
        <p>Subscription Type</p>
        <select class="subscription-type">
            <option value="Continued">Continued</option>
            <option value="Upgrade">Upgrade</option>
            <option value="Downgrade">Downgrade</option>
        </select>
        <button class="cancel-popup">Cancel</button>
        <button class="active-button add-subscription-popup">Add Subscription</button>
    </div>
</div>

<div class="popup-delete-wrapper is-habit-wrapper">
    <div class="popup-delete is-habit-popup">
        <a href="#" class="popup-close">X</a>
        <p>Are you sure you want to delete this <span>program</span>?</p>
        <button class="cancel-popup">Cancel</button>
        <button class="active-button confirm-delete">Confirm Delete</button>
    </div>
</div>

<style>
    .habit-preloader-wrapper {
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

    .habit-preloader-wrapper.show {
        display: block;
    }

    .habit-preloader {
        transform: translate(-50%, -50%) scale(-1, 1);
        width: 370px;
        height: auto;
        position: absolute;
        left: 50%;
        top: 47%;
    }
</style>
<div class="habit-preloader-wrapper">
    <img alt="preloader" class="habit-preloader" src="/wp-content/plugins/habit-planner/assets/img/preloader.gif"/>
</div>

<style>
</style>


<div class="popup-confirm-archive-wrapper is-habit-wrapper">
    <div class="popup-delete is-habit-popup">
        <a href="#" class="popup-close">X</a>
        <p>Are you sure you want to archive this program?</p>
        <button class="cancel-popup">Cancel</button>
        <button class="active-button confirm-archive-program">Confirm Archive</button>
    </div>
</div>
<div class="popup-delete-program-wrapper is-habit-wrapper">
    <div class="popup-delete is-habit-popup">
        <a href="#" class="popup-close">X</a>
        <p>Are you sure you want to delete this program?</p>
        <button class="cancel-popup">Cancel</button>
        <button class="active-button confirm-delete-program">Confirm Delete</button>
    </div>
</div>

<style>
    .show-delete-wrapper,
    .move-class-wrapper,
    .move-step-wrapper,
    .move-step-link-wrapper,
    .move-step-step-wrapper,
    .program-action-wrapper,
    .program-action2-wrapper,
    .move-pillar-wrapper,
    .move-module-wrapper,
    .move-module-link-wrapper,
    .payment-template-wrapper,
    .active-memberships-actions-wrapper,
    .past-payments-actions-wrapper
    {
        display: none;
        padding: 5px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 0 1px 1px rgb(0 0 0 / 10%);
        position: absolute;
        z-index: 999;
    }

    .show-delete-wrapper.show,
    .move-class-wrapper.show,
    .move-step-wrapper.show,
    .move-step-link-wrapper.show,
    .move-step-step-wrapper.show,
    .program-action-wrapper.show,
    .program-action2-wrapper.show,
    .move-pillar-wrapper.show,
    .move-module-wrapper.show,
    .move-module-link-wrapper.show,
    .payment-template-wrapper.show,
    .save-as-template-wrapper.show,
    .active-memberships-actions-wrapper.show,
    .past-payments-actions-wrapper.show
    {
        display: block;
    }

    .show-delete-wrapper a,
    .move-class-wrapper a,
    .move-step-wrapper a,
    .move-step-link-wrapper a,
    .move-step-step-wrapper a,
    .program-action-wrapper a,
    .program-action2-wrapper a,
    .move-pillar-wrapper a,
    .move-module-wrapper a,
    .move-module-link-wrapper a,
    .payment-template-wrapper a,
    .active-memberships-actions-wrapper a,
    .past-payments-actions-wrapper a{
        display: block;
        text-decoration: none !important;
        box-shadow: none !important;
        color: #000;
        cursor: pointer;
        padding: 0 5px;
        font-size: 16px;
    }

    .show-delete-wrapper a:hover,
    .show-delete-wrapper a:focus,

    .move-class-wrapper a:hover,
    .move-class-wrapper a:focus,

    .move-step-wrapper a:hover,
    .move-step-wrapper a:focus,

    .move-step-link-wrapper a:hover,
    .move-step-link-wrapper a:focus,

    .move-step-step-wrapper a:hover,
    .move-step-step-wrapper a:focus,

    .program-action-wrapper a:hover,
    .program-action-wrapper a:focus,

    .payment-template-wrapper a:hover,
    .payment-template-wrapper a:focus,

    .active-memberships-actions-wrapper a:hover,
    .active-memberships-actions-wrapper a:focus,

    .past-payments-actions-wrapper a:hover,
    .past-payments-actions-wrapper a:focus,

    .program-action2-wrapper a:hover,
    .program-action2-wrapper a:focus,

    .move-pillar-wrapper a:hover,
    .move-pillar-wrapper a:focus,

    .move-module-wrapper a:hover,
    .move-module-wrapper a:focus,

    .move-module-link-wrapper a:hover,
    .move-module-link-wrapper a:focus
    {
        cursor: pointer;
        background: #F5F7F7;
        border-radius: 6px;
    }
</style>

<div class="program-action2-wrapper">
    <a href="#">Activate</a>
    <a href="#">Delete</a>
</div>
<div class="show-delete-wrapper">
    <a href="#">Delete</a>
</div>
<div class="move-class-wrapper">
    <a href="#">Move up</a>
    <a href="#">Move down</a>
    <a href="#">Duplicate</a>
    <a href="#">Delete</a>
</div>
<div class="move-step-wrapper" data-number="0">
    <a href="#">Move up</a>
    <a href="#">Move down</a>
    <a href="#">Delete</a>
</div>
<div class="move-step-link-wrapper" data-number="0">
    <a href="#">Move up</a>
    <a href="#">Move down</a>
    <a href="#">Edit</a>
    <a href="#">Delete</a>
</div>
<div class="move-step-step-wrapper" data-number="0">
    <a href="#">Move up</a>
    <a href="#">Move down</a>
    <a href="#">Delete</a>
</div>
<div class="program-action-wrapper">
    <a href="#">Edit</a>
    <a href="#">Duplicate</a>
    <a href="#">Archive</a>
</div>
<div class="payment-template-wrapper">
    <a href="#">Save as Template</a>
    <a href="#">Delete Template</a>
</div>

<div class="active-memberships-actions-wrapper">
    <a href="#">Update</a>
    <a href="#">Pause</a>
    <a href="#">Cancel</a>
</div>

<div class="past-payments-actions-wrapper">
    <a href="#">Update</a>
    <a href="#">Pause</a>
    <a href="#">Cancel</a>
</div>

<div class="program-action2-wrapper">
    <a href="#">Activate</a>
    <a href="#">Delete</a>
</div>

<div class="move-pillar-wrapper">
    <a href="#">Move up</a>
    <a href="#">Move down</a>
    <a href="#">Duplicate</a>
    <a href="#">Delete</a>
</div>

<div class="move-module-wrapper">
    <a href="#">Move up</a>
    <a href="#">Move down</a>
    <a href="#">Duplicate</a>
    <a href="#">Delete</a>
</div>

<div class="move-module-link-wrapper" data-number="0">
    <a href="#">Edit</a>
    <a href="#">Duplicate</a>
    <a href="#">Move up</a>
    <a href="#">Move down</a>
    <a href="#">Delete</a>
</div>

<style>
    .add-link-wrapper,
    .add-module-link-wrapper,
    .save-as-template-wrapper,
    .subscription-price-wrapper{
        position: fixed;
        z-index: 9999;
        background: rgba(0,0,0,0.6);
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        display: none;
    }


    .add-link-wrapper.show,
    .add-module-link-wrapper.show,
    .subscription-price-wrapper.show{
        display: block;
    }

    .subscription-price-wrapper h2{
        font-size: 16px;
        margin: 0 0 20px 0;
        line-height: 1;
    }


    .subscription-price-wrapper p{
        float: left;
        margin: 0 0 20px 0;
        line-height: 24px;
        font-size: 14px;
        clear: both;
    }

    .subscription-price-wrapper p:nth-of-type(1){
        width: 160px;
    }

    .subscription-price-wrapper p:nth-of-type(2){
        width: 185px;
    }

    .subscription-price-wrapper p:nth-of-type(3){
        width: 80px;
    }

    .subscription-price-wrapper p:nth-of-type(4){
        width: 171px;
    }

    .subs-price-input{
        width: 125px;
        min-height: 26px !important;
        height: 26px;
        float: left;
    }

    .subs-price-period{
        float: left;
        height: 24px !important;
        line-height: 1 !important;
        min-height: 24px !important;
        width: 100px;
        border-radius: 7px !important;
    }

    .subs-price-immediate-start{
        float: left;
        height: 24px !important;
        line-height: 1 !important;
        min-height: 24px !important;
        cursor: pointer;
        border-radius: 7px !important;
        width: 90px;
        background: rgba(255, 255, 255, 0.99);
        opacity: 0.9;
        border: 1px solid #929292;
        color: #8E8E8E;
        margin-right: 5px;
        transition: 0.4s all;
    }

    .subs-price-immediate-start.active{
        background: rgba(255, 255, 255, 0.99);
        opacity: 1;
        border: 1px solid #375CFF;
        color: #375CFF;
    }

    .subs-price-immediate-start.active:hover,
    .subs-price-immediate-start.active:focus{
        color: #fff;
        background: #375CFF;
    }

    .subs-price-start-select-date{
        float: left;
        height: 24px !important;
        line-height: 1 !important;
        min-height: 24px !important;
        border-radius: 7px !important;
        width: 110px;
    }

    .subs-price-for{
        float: left;
        border-radius: 15px !important;
        width: 115px;
        line-height: 24px !important;
        height: 26px;
        min-height: 26px !important;
        margin: 0;
    }

    .cancel-subscription-price{
        border: none;
        margin: 0;
        line-height: 1;
        padding: 8px 11px 9px;
        transition: 0.4s all !important;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        display: inline-block;
        background: rgba(255, 255, 255, 0.99);
        box-shadow: 2px 2px 6px rgb(0 0 0 / 12%);
        width: 137px;
        margin-right: 9px;
        color: #000;
    }

    .cancel-subscription-price:hover,
    .cancel-subscription-price:focus {
        background: #274AFF;
        color: #fff;
    }

    .save-subscription-price{
        width: 137px;
        border: none;
        background: #375CFF;
        box-shadow: 2px 2px 6px rgb(0 0 0 / 12%);
        margin: 0;
        line-height: 1;
        padding: 8px 11px 9px;
        transition: 0.4s all !important;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        color: #fff;
        cursor: pointer;
        display: inline-block;
    }

    .save-subscription-price:hover,
    .save-subscription-price:focus {
        opacity: 0.7;
    }

    .add-link-popup,
    .add-module-link-popup,
    .save-as-template-popup,
    .subscription-price-popup{
        display: block;
        width: 420px;
        height: 200px;
        background: #F5F7F7;
        box-shadow: 1px 1px 3px 0.5px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        padding: 15px;
        box-sizing: border-box;
    }

    .subscription-price-popup{
        height: 272px;
        width: 317px;
    }
    

    .save-as-template-popup{
        height: 150px;
    }

    .add-link-popup p,
    .add-module-link-popup p,
    .save-as-template-popup p{
        font-size: 16px;
        margin: 0 0 21px 0;
        width: 110px;
        display: inline-block;
        color: #000;
    }

    .add-link-popup p:nth-of-type(1),
    .add-module-link-popup p:nth-of-type(1){
        font-weight: 600;
        display: block;
    }

    .add-link-popup input,
    .add-module-link-popup input{
        display: inline-block;
        width: 273px;
    }

    .cancel-add-link,
    .cancel-add-module-link{
        border: none;
        background: #375CFF;
        line-height: 1;
        padding: 8px 11px 9px;
        transition: 0.4s all !important;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        display: inline-block;
        background: rgba(255, 255, 255, 0.99);
        box-shadow: 2px 2px 6px rgb(0 0 0 / 12%);
        width: 137px;
        margin: 0;
        margin-right: 9px;
        color: #000;
        margin-left: 102px;
    }

    .cancel-add-link:hover,
    .cancel-add-link:focus,
    .cancel-add-module-link:hover,
    .cancel-add-module-link:focus{
        background: #274AFF;
        color: #fff;
    }

    .save-add-link,
    .save-add-module-link{
        width: 137px;
        display: inline-block;
        border: none;
        background: #375CFF;
        box-shadow: 2px 2px 6px rgb(0 0 0 / 12%);
        margin: 0;
        line-height: 1;
        padding: 8px 11px 9px;
        transition: 0.4s all !important;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        color: #fff;
        cursor: pointer;
    }

    .save-add-link:hover,
    .save-add-link:focus,
    .save-add-module-link:hover,
    .save-add-module-link:focus{
        opacity: 0.7;
    }

    .cancel-save-template{
        border: none;
        background: #375CFF;
        line-height: 1;
        padding: 8px 11px 9px;
        transition: 0.4s all !important;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        display: inline-block;
        background: rgba(255, 255, 255, 0.99);
        box-shadow: 2px 2px 6px rgb(0 0 0 / 12%);
        width: 137px;
        margin: 0;
        margin-right: 9px;
        color: #000;
        margin-left: 102px;
    }

    .save-template{
        width: 137px;
        display: inline-block;
        border: none;
        background: #375CFF;
        box-shadow: 2px 2px 6px rgb(0 0 0 / 12%);
        margin: 0;
        line-height: 1;
        padding: 8px 11px 9px;
        transition: 0.4s all !important;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        color: #fff;
        cursor: pointer;
    }

    .save-as-template-popup:after{
        display: block;
        clear: both;
        content: '';
    }

    .save-as-template-popup h3{
        margin: 0 0 15px 0;
    }

    .save-as-template-popup p{
        width: 80px;
        margin: 0 0 30px 0;
    }

    .save-as-template-popup input{
        width: 306px;
        margin: 0;
    }

    .save-as-template-popup button:hover,
    .save-as-template-popup button:focus{
        opacity: 0.6;
    }



</style>

<div class="add-link-wrapper" data-number="0">
    <div class="add-link-popup">
        <p>Add Link</p>
        <p>Link Title</p>
        <input type="text" class="link-title">
        <p>Link URL</p>
        <input type="text" class="link-url">
        <button class="cancel-add-link">Cancel</button>
        <button class="save-add-link">Add Link</button>
    </div>
</div>


<div class="subscription-price-wrapper" data-number="0">
    <div class="subscription-price-popup">
        <h2>Subscription Price</h2>
        <p>New Payment Price</p>
        <input type="number" class="subs-price-input">
        <p>Billing Period</p>
        <select class="subs-price-period">
            <option disabled selected>Set Range</option>
            <option value="7">7 days</option>
            <option value="14">14 days</option>
            <option value="30">30 days</option>
        </select>
        <p>Starting</p>
        <button class="subs-price-immediate-start">Immediate</button>
        <select class="subs-price-start-select-date">
            <option disabled selected>Select Date</option>
            <?php
            for ($i = 0; $i < 365; $i++)
            {
                ?>
                <option value="<?php echo date('d/m/Y', time() + $i * 86400); ?>">
                    <?php
                    echo date('d/m/Y', time() + $i * 86400);
                    ?>
                </option>
                <?php
            }
            ?>
        </select>
        <p>For</p>
        <select class="subs-price-for">
            <option value="everyone">Everyone</option>
            <option value="new_members">New Members</option>
            <option value="custom">Custom</option>
        </select>
        <div class="clear">
            <button class="cancel-subscription-price">Cancel</button>
            <button class="save-subscription-price">Add Price</button>
        </div>
    </div>
</div>

<div class="add-module-link-wrapper" data-number="0" >
    <div class="add-module-link-popup">
        <p>Add Link</p>
        <p>Link Title</p>
        <input type="text" class="module-link-title">
        <p>Link URL</p>
        <input type="text" class="module-link-url">
        <button class="cancel-add-module-link">Cancel</button>
        <button class="save-add-module-link">Add Link</button>
    </div>
</div>

<div class="save-as-template-wrapper">
    <div class="save-as-template-popup">
        <h3>Save As Template</h3>
        <p>Name</p>
        <input type="text" class="save-template-name">
        <button class="cancel-save-template">Cancel</button>
        <button class="save-template">Save Template</button>
    </div>
</div>


<style>
    .active-membership-item,
    .past-payment-item{
        display: none;
    }

    .past-payments-wrapper .td p{
        margin: 0 0 10px 0;
    }

    .past-payments-wrapper .td p:nth-last-of-type(1){
        margin: 0;
    }

    .commissions-table .td p{
        font-size: 14px;
        font-weight: 400;
        margin: 0 0 10px 0;
    }

    .commissions-table .td p:nth-last-of-type(1){
        margin: 0;
    }
</style>

<?php

$args = array(
    'post_type' => 'single_membership',
    'posts_per_page' => 9999,
    'orderby' => 'date',
    'order' => 'ASC',
    'post_status' => array('publish', 'draft', 'trash')
);

$query_single_membership = new WP_Query($args);

if ($query_single_membership->have_posts()) {
    while ($query_single_membership->have_posts()) {
        $query_single_membership->the_post();

        $curr_id = get_the_ID();

        $email = get_post_meta($curr_id, 'email', true);

        $membership_sub_ids = get_post_meta($curr_id, 'membership_sub_ids', true);
        $membership_type = get_post_meta($curr_id, 'membership_type', true);
        $start_date = get_post_meta($curr_id, 'start_date', true);
        $end_date = get_post_meta($curr_id, 'end_date', true);
        $billing_plan = get_post_meta($curr_id, 'billing_plan', true);
        $amount_paid = get_post_meta($curr_id, 'amount_paid', true);
        $amount_remaining = get_post_meta($curr_id, 'amount_remaining', true);
        $next_payment_date = get_post_meta($curr_id, 'next_payment_date', true);

        //


        ?>
        <div class="active-membership-item" data-id="<?php echo $curr_id; ?>" data-email="<?php echo $email; ?>">
            <div class="tr">
                <div class="td">
                    <?php
                    $membership_sub_ids_arr = explode(',',$membership_sub_ids);
                    foreach ($membership_sub_ids_arr as $prod_sub_id){
                        ?>
                        <p><?php echo $membership_ids_titles[$prod_sub_id]; ?></p>
                        <?php
                    }
                    ?>
                </div>
                <div class="td"><?php echo $membership_type; ?></div>
                <div class="td"><?php echo $start_date; ?></div>
                <div class="td"><?php echo $end_date; ?></div>
                <div class="td"><?php echo $billing_plan; ?></div>
                <div class="td"><?php echo $amount_paid == '-' ? '-' : '$'.$amount_paid / 100 ; ?></div>
                <div class="td"><?php echo $amount_remaining == '-' ? '-' : '$'.$amount_remaining; ?></div>
                <div class="td"><?php echo $next_payment_date; ?></div>
                <div class="td"><button class="active-memberships-actions">...</button></div>
            </div>
        </div>
        <?php
    }
}
wp_reset_query();


$args = array(
    'post_type' => 'single_payment',
    'posts_per_page' => 9999,
    'orderby' => 'date',
    'order' => 'ASC',
    'post_status' => array('publish', 'draft', 'trash')
);

$query_single_payment = new WP_Query($args);

if ($query_single_payment->have_posts()) {
    while ($query_single_payment->have_posts()) {
        $query_single_payment->the_post();

        $curr_id = get_the_ID();

        $email = get_post_meta($curr_id, 'email', true);

        $membership_sub_ids = get_post_meta($curr_id, 'membership_sub_ids', true);
        $membership_type = get_post_meta($curr_id, 'membership_type', true);
        $created = get_post_meta($curr_id, 'created', true);
        $next_payment_date = get_post_meta($curr_id, 'next_payment_date', true);
        $amount = get_post_meta($curr_id, 'amount', true);
        $status = get_post_meta($curr_id, 'status', true);

        ?>
        <div class="past-payment-item" data-id="<?php echo $curr_id; ?>" data-email="<?php echo $email; ?>">
            <div class="tr">
                <div class="td"><?php echo $created; ?></div>
                <div class="td">
                    <?php
                    $membership_sub_ids_arr = explode(',',$membership_sub_ids);
                    foreach ($membership_sub_ids_arr as $prod_sub_id){
                        ?>
                        <p><?php echo $membership_ids_titles[$prod_sub_id]; ?></p>
                        <?php
                    }
                    ?>
                </div>
                <div class="td"><?php echo $membership_type; ?></div>
                <div class="td">$<?php echo $amount / 100 ; ?></div>
                <div class="td"><span class="result-<?php echo strtolower($status); ?>"><?php echo $status; ?></span></div>
                <div class="td"><?php echo $next_payment_date; ?></div>
                <div class="td"><button class="past-payments-actions">...</button></div>
            </div>
        </div>
        <?php
    }
}
wp_reset_query();
?>


<script>
    (function ($) {

        $(document).on('click', '.left-sidebar a', function (e) {
            var link = $(this).attr('data-link');
            if ((link !== 'memberships') && (link !== 'programs') && (link !== 'money')){
                e.preventDefault();
                $('.left-sidebar a.active').removeClass('active');
                $(this).addClass('active');
                $('.tab-content.active').removeClass('active');
                $('.tab-content-' + link).addClass('active');
            }
        });

        $(document).on('click', '.tab-links a', function (e) {
            e.preventDefault();
            $(this).parent().find('a.active').removeClass('active');
            $(this).addClass('active');
            var link = $(this).attr('data-link');
            $(this).parent().parent().find('.tab-content-item.active').removeClass('active');
            $(this).parent().parent().find('.tab-content-item-' + link).addClass('active');

            $('.type-content-inner-pillar').removeClass('show');
            $('.type-content-inner-module').removeClass('show');
            $('.type-content-inner-pillar-custom').removeClass('show');
            $('.type-content-inner-module-custom').removeClass('show');

            $('.customer-file-wrapper').removeClass('show');
        });

        $(document).on('click','.add-new-product',function(){
            $('.popup-add-product-wrapper').addClass('show');
        });

        $(document).on('click','.add-new-subscription',function(){
            $('.popup-add-subscription-wrapper').addClass('show');
        });

        $(document).on('click','.is-habit-wrapper',function(e){
            e.preventDefault();
            $(this).removeClass('show');
        });

        $(document).on('click','.is-habit-popup',function(e){
            e.stopPropagation();
        });

        $(document).on('click','.popup-close',function(e){
            e.preventDefault();
            $('.is-habit-wrapper').removeClass('show');
        });

        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';

        var membership_add_product = {
            action: 'membership_add_product',
            title: '',
            type: ''
        };

        var membership_add_subscription = {
            action: 'membership_add_subscription',
            title: '',
            type: ''
        };

        var membership_delete_item = {
            action: 'membership_delete_item',
            id: 0
        };

        $(document).on('click','.add-product-popup',function(){
            var title = $('.product-title').val();
            var type = $('.product-type').val();

            membership_add_product.title = title;
            membership_add_product.type = type;

            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, membership_add_product)
                .done(function (msg) {
                    $('.products-table .tbody').append(
                        '<div class="tr" data-id="'+msg+'" class-count="0">' +
                            '<div class="td">' + title +
                            '</div>' +
                            '<div class="td">' + type +
                            '</div>' +
                            '<div class="td">0</div>' +
                            '<div class="td">' +
                                '<button class="open-builder">Open Builder</button>' +
                            '</div>' +
                            '<div class="td">' +
                                '<button class="remove-item">...</button>' +
                            '</div>' +
                        '</div>'
                    );
                    $('.product-title').val('');
                    $('.product-type').val('Lifetime');
                    $('.is-habit-wrapper').removeClass('show');
                    //$('.habit-preloader-wrapper').removeClass("show");

                    location.reload();
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })
        });

        $(document).on('click','.add-subscription-popup',function(){
            var title = $('.subscription-title').val();
            var type = $('.subscription-type').val();

            membership_add_subscription.title = title;
            membership_add_subscription.type = type;

            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, membership_add_subscription)
                .done(function (msg) {
                    $('.subscriptions-table .tbody').append(
                        '<div class="tr" data-id="'+msg+'" class-count="0">' +
                            '<div class="td">' + title +
                            '</div>' +
                            '<div class="td">' + type +
                            '</div>' +
                            '<div class="td">0</div>' +
                            '<div class="td">' +
                                '<button class="open-builder">Open Builder</button>' +
                            '</div>' +
                            '<div class="td">' +
                                '<button class="remove-item">...</button>' +
                            '</div>' +
                        '</div>'
                    );
                    $('.subscription-title').val('');
                    $('.subscription-type').val('Continued');
                    $('.is-habit-wrapper').removeClass('show');
                    //$('.habit-preloader-wrapper').removeClass("show");

                    location.reload();
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })
        });

        $(document).on('click','.main-wrapper *',function(){
            $('.move-class-wrapper').removeClass('show');
            $('.move-step-wrapper').removeClass('show');
            $('.move-step-link-wrapper').removeClass('show');
            $('.move-step-step-wrapper').removeClass('show');
            $('.program-action-wrapper').removeClass('show');
            $('.program-action2-wrapper').removeClass('show');
            $('.show-delete-wrapper').removeClass('show');
            $('.move-pillar-wrapper').removeClass('show');
            $('.move-module-wrapper').removeClass('show');
            $('.move-module-link-wrapper').removeClass('show');
            $('.payment-template-wrapper').removeClass('show');
            $('.save-as-template-wrapper').removeClass('show');
            $('.active-memberships-actions-wrapper').removeClass('show');
            $('.past-payments-actions-wrapper').removeClass('show');
        });

        $(document).on('click','.move-class-wrapper, .move-step-wrapper, .move-step-link-wrapper, .move-step-step-wrapper, .show-delete-wrapper',function(e){
            e.stopPropagation();
        });

        var remove_item = [];
        $(document).on('click','.remove-item',function(e){
            e.preventDefault();
            e.stopPropagation();

            var type = '';
            if ($(this).closest('.memberships-table').hasClass('subscriptions-table')){
                type = 'subscription';
            }
            if ($(this).closest('.memberships-table').hasClass('products-table')){
                type = 'product';
            }
            $('.popup-delete-wrapper span').text(type);
            remove_item = $(this).parent().parent();
            membership_delete_item.id = $(this).parent().parent().attr('data-id');

            $('.show-delete-wrapper').css({'left':($(this).offset().left ) + 'px','top':($(this).offset().top + 14) + 'px'});
            $('.show-delete-wrapper').addClass('show');
        });

        $(document).on('click','.show-delete-wrapper a',function(e) {
            e.preventDefault();
            $('.show-delete-wrapper').removeClass('show');
            $('.popup-delete-wrapper').addClass('show');
        });

        $(document).on('click','.confirm-delete',function(){

            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, membership_delete_item)
                .done(function (msg) {
                    $('.is-habit-wrapper').removeClass('show');
                    remove_item.remove();
                    $('.habit-preloader-wrapper').removeClass("show");
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })


        });

        $(document).on('click','.cancel-popup',function(){
            $('.is-habit-wrapper').removeClass('show');
        });



        $(document).on('click','.add-new-subscription-price',function(){
            $('.subscription-price-wrapper').addClass('show');
        });

        $(document).on('change','.subs-price-start-select-date',function(){
            $('.subs-price-immediate-start').addClass('active');
        });

        $(document).on('click','.subs-price-immediate-start.active',function(){

            $('.subs-price-start-select-date option[selected]').removeAttr('selected');
            $('.subs-price-start-select-date option[selected]').prop('selected',false);

            $('.subs-price-start-select-date option[disabled]').attr('selected','selected');
            $('.subs-price-start-select-date option[disabled]').prop('selected',true);

            $(this).removeClass('active');
        });

        $(document).on('click','.cancel-subscription-price',function(){
            $('.subscription-price-wrapper').removeClass('show');
        });

        var add_subscription_price = {
            action: 'add_subscription_price',
            id: 0,
            title: '',
            price: '',
            active_members: 0,
            period: '',
            start: '',
            end: '-',
            for: ''
        };

        $(document).on('click','.save-subscription-price',function(){

            add_subscription_price.title = $('.edit-product-title').val();
            add_subscription_price.price = $('.subs-price-input').val();
            add_subscription_price.period = $('.subs-price-period').val() + ' days';
            if ($('.subs-price-immediate-start').hasClass('active')){
                add_subscription_price.start = $('.subs-price-start-select-date').val();
            }
            else{
                add_subscription_price.start = $('.subs-price-start-select-date option').eq(1).val();
            }
            add_subscription_price.for = $('.subs-price-for').val();

            console.log(add_subscription_price);

            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, add_subscription_price)
                .done(function (msg) {
                    console.log(msg);
                    $('.subscription-content-items').append(
                        '<div class="subscription-content-item">' +
                        '<p>'+add_subscription_price.title+' '+msg+'</p>' +
                        '<p>0</p>' +
                        '<p>$'+add_subscription_price.price+'/'+add_subscription_price.period+'</p>' +
                        '<p>'+add_subscription_price.start+'</p>' +
                        '<p>-</p>' +
                        '</div>'
                    );
                    $('.subscription-price-wrapper').removeClass('show');
                    $('.habit-preloader-wrapper').removeClass("show");

                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                });
        });

        var edit_membership_item = {
            action: 'edit_membership_item',
            id: 0,
            title: '',
            product_upgrade: '',
            continued_subscription: '',
            continued_subscription_type: '',
            minimum_duration: '',
            minimum_duration_type: '',
            minimum_duration_value: '',
            parent_membership: ''
        };

        var is_type = '';

        $(document).on('click','.open-builder',function(){
            edit_membership_item.id = $(this).closest('.tr').attr('data-id');
            save_edit_levels.id = $(this).closest('.tr').attr('data-id');
            add_subscription_price.id = $(this).closest('.tr').attr('data-id');

            if ($(this).closest('.memberships-table').hasClass('products-table')){
                is_type = 'p';
            }
            else{
                is_type = 's';
            }

            $('.minimum_duration_value').val($(this).closest('.tr').attr('minimum-duration-value'));
            if ($(this).closest('.tr').attr('minimum-duration-type') !== ''){
                $('.minimum_duration_type').val($(this).closest('.tr').attr('minimum-duration-type'));
            }
            if ($(this).closest('.tr').attr('continued-subscription-type') !== ''){
                $('.continued_subscription_type').val($(this).closest('.tr').attr('continued-subscription-type'));
            }
            if ($(this).closest('.tr').attr('parent-membership') !== ''){
                $('.parent-membership').val($(this).closest('.tr').attr('parent-membership'));
            }

            if ($(this).closest('.tr').attr('product-upgrade') == 'on'){
                $('#product_upgrade').attr('checked','checked');
                $('#product_upgrade').prop('checked',true);
            }
            else{
                $('#product_upgrade').removeAttr('checked');
                $('#product_upgrade').prop('checked',false);
            }


            if ($(this).closest('.tr').attr('continued-subscription') == 'on'){
                $('#continued_subscription').attr('checked','checked');
                $('#continued_subscription').prop('checked',true);
            }
            else{
                $('#continued_subscription').removeAttr('checked');
                $('#continued_subscription').prop('checked',false);
            }

            if ($(this).closest('.tr').attr('minimum-duration') == 'on'){
                $('#minimum_duration').attr('checked','checked');
                $('#minimum_duration').prop('checked',true);
            }
            else{
                $('#minimum_duration').removeAttr('checked');
                $('#minimum_duration').prop('checked',false);
            }

            if ($(this).closest('.memberships-table').hasClass('products-table')){
                $('.product-name span').eq(0).text('Product');
                $('.change-type-name').text('Product');
            }
            else{
                $('.product-name span').eq(0).text('Subscription');
                $('.change-type-name').text('Subscription');
            }
            $('.edit-product-title').val($(this).parent().parent().find('.td').eq(0).text());
            $('.product-name span').eq(1).text($(this).parent().parent().find('.td').eq(0).text());
            var type = $(this).parent().parent().find('.td').eq(1).text();

            //edit-product-sidebar
            //content-wrapper
            //console.log(type);
            if (type == 'Set'){
                $('.extra-content').show();
                $('.content-wrapper').removeClass('is-upgrade');
                $('.content-wrapper').removeClass('is-continued');
                $('.content-wrapper').removeClass('is-downgrade');
                $('.content-wrapper').removeClass('is-subscription');
                $('.edit-product-sidebar').removeClass('no-classes-levels');
            }
            else if(type == 'Continued'){
                $('.extra-content').hide();
                $('.content-wrapper').removeClass('is-upgrade');
                $('.content-wrapper').addClass('is-continued');
                $('.content-wrapper').removeClass('is-downgrade');
                $('.content-wrapper').addClass('is-subscription');
                $('.edit-product-sidebar').addClass('no-classes-levels');
            }
            else if(type == 'Downgrade'){
                $('.extra-content').hide();
                $('.content-wrapper').removeClass('is-upgrade');
                $('.content-wrapper').removeClass('is-continued');
                $('.content-wrapper').addClass('is-downgrade');
                $('.content-wrapper').addClass('is-subscription');
                $('.edit-product-sidebar').addClass('no-classes-levels');
            }
            else if(type == 'Upgrade'){
                $('.extra-content').show();
                $('.content-wrapper').addClass('is-upgrade');
                $('.content-wrapper').removeClass('is-continued');
                $('.content-wrapper').removeClass('is-downgrade');
                $('.content-wrapper').addClass('is-subscription');
                $('.edit-product-sidebar').removeClass('no-classes-levels');
            }
            else{
                $('.extra-content').hide();
                $('.content-wrapper').removeClass('is-upgrade');
                $('.content-wrapper').removeClass('is-continued');
                $('.content-wrapper').removeClass('is-downgrade');
                $('.content-wrapper').removeClass('is-subscription');
                $('.edit-product-sidebar').removeClass('no-classes-levels');
            }


            //edit-product-sidebar

            $('.edit-product-type').text(type);

            $('.classes-list').html('');
            $('.classes-item[data-id="'+edit_membership_item.id+'"]').each(function(){
                $('.classes-list').append($(this).html());
            });

            $('.edit-type-content-levels').html($('.levels-wrapper[data-id="'+save_edit_levels.id+'"]').html());

            $(this).closest('.tab-content').find('.tab-content-item').removeClass('active');
            $('.tab-content-item-edit-product').addClass('active');


            $('.subscription-content-items').html('');
            var sub_price_counter = parseInt($(this).closest('.tr').attr('subs-price-counter'));
            var sub_price_item = '';
            for (let i = 1; i <= sub_price_counter; i++) {

                sub_price_item = $(this).closest('.tr').attr('subs-price-number'+i);

                $('.subscription-content-items').append(
                    '<div class="subscription-content-item">' +
                    '<p>'+sub_price_item.split('|')[0]+'</p>' +
                    '<p>'+sub_price_item.split('|')[2]+'</p>' +
                    '<p>$'+sub_price_item.split('|')[1]+'/'+sub_price_item.split('|')[3]+'</p>' +
                    '<p>'+sub_price_item.split('|')[4]+'</p>' +
                    '<p>'+sub_price_item.split('|')[6]+'</p>' +
                    '</div>'
                );
            }

        });

        $(document).on('click','.back-to-list, .product-edit-cancel',function(e){
            e.preventDefault();
            $('.tab-content-item-edit-product').removeClass('active');
            $('.tab-content-item-memberships').addClass('active');
            $('.type-content-inner').hide();
        });

        $(document).on('click','.edit-product-link',function(e){
            e.preventDefault();
            $('.edit-product-link').removeClass('active');
            var link = $(this).attr('data-link');
            $(this).addClass('active');
            $('.edit-type-content').removeClass('active');
            $('.edit-type-content-'+link).addClass('active');
        });

        $(document).on('click','.product-edit-save',function(){

            edit_membership_item.title = $('.edit-product-title').val();
            if ($('#product_upgrade').is(':checked')){
                edit_membership_item.product_upgrade = 'on';
            }
            else{
                edit_membership_item.product_upgrade = '';

            }
            if ($('#continued_subscription').is(':checked')){
                edit_membership_item.continued_subscription = 'on';
            }
            else{
                edit_membership_item.continued_subscription = '';

            }
            if ($('#minimum_duration').is(':checked')){
                edit_membership_item.minimum_duration = 'on';
            }
            else{
                edit_membership_item.minimum_duration = '';

            }
            edit_membership_item.continued_subscription_type = $('.continued_subscription_type').val();
            edit_membership_item.minimum_duration_type = $('.minimum_duration_type').val();
            edit_membership_item.minimum_duration_value = $('.minimum_duration_value').val();
            edit_membership_item.parent_membership = $('.parent-membership').val();

            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, edit_membership_item)
                .done(function (msg) {

                    $('.product-name span').eq(1).text(edit_membership_item.title);
                    $('div.tr[data-id="'+edit_membership_item.id+'"]').find('div.td').first().text(edit_membership_item.title);
                    $('div.tr[data-id="'+edit_membership_item.id+'"]').attr('product-upgrade',edit_membership_item.product_upgrade);
                    $('div.tr[data-id="'+edit_membership_item.id+'"]').attr('continued-subscription',edit_membership_item.continued_subscription);
                    $('div.tr[data-id="'+edit_membership_item.id+'"]').attr('minimum-duration',edit_membership_item.minimum_duration);
                    $('div.tr[data-id="'+edit_membership_item.id+'"]').attr('continued-subscription-type',edit_membership_item.continued_subscription_type);
                    $('div.tr[data-id="'+edit_membership_item.id+'"]').attr('minimum-duration-type',edit_membership_item.minimum_duration_type);
                    $('div.tr[data-id="'+edit_membership_item.id+'"]').attr('minimum-duration-value',edit_membership_item.minimum_duration_value);
                    $('div.tr[data-id="'+edit_membership_item.id+'"]').attr('parent-membership',edit_membership_item.parent_membership);

                    $('.habit-preloader-wrapper').removeClass("show");

                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })

        });


        $(document).on('click','.move-class',function(e){
            e.preventDefault();
            e.stopPropagation();
            $('.move-class-wrapper').css({'left':($(this).offset().left ) + 'px','top':($(this).offset().top + 14) + 'px'});
            $(this).closest('.class-list-item').trigger('click');
            $('.move-class-wrapper').addClass('show');
        });

        $(document).on('click','.class-list-item',function(e){
            e.preventDefault();
            var data_id = $(this).attr('data-id');
            var data_number = $(this).attr('data-number');

            $('.class-list-item.active').removeClass('active');
            $(this).addClass('active');
            $('.type-content-inner').show();
            $('.class-edit-title').val($(this).find('.classes-list-item-title').text());
            $('.type-content-item').attr('data-id',data_id);
            $('.type-content-item').attr('data-number',data_number);
            if ($(this).attr('onboarding-class') == 'on'){
                $('#onboarding_class').attr('checked','checked');
                $('#onboarding_class').prop('checked',true);
                $('.add-step-to-class').show();
            }
            else{
                $('#onboarding_class').removeAttr('checked');
                $('#onboarding_class').prop('checked',false);
                $('.add-step-to-class').hide();
            }

            $('.step-list').attr('data-steps-count',$('.step-list-wrapper[data-id="'+data_id+'"][data-number="'+data_number+'"]').attr('data-steps-count'));
            $('.step-list').html($('.step-list-wrapper[data-id="'+data_id+'"][data-number="'+data_number+'"]').html());

        });

        var delete_edit_class = {
            action: 'delete_edit_class',
            id: 0,
            number: 0
        };

        var duplicate_edit_class = {
            action: 'duplicate_edit_class',
            id: 0,
            number: 0
        };

        var swap_edit_class = {
            action: 'swap_edit_class',
            id: 0,
            number: 0,
            number2: 0
        };

        $(document).on('click','.move-class-wrapper a',function(e){
            e.preventDefault();
            var index = $(this).index();

            delete_edit_class.id = $('.type-content-item').attr('data-id');
            delete_edit_class.number = $('.type-content-item').attr('data-number');

            duplicate_edit_class.id = $('.type-content-item').attr('data-id');
            duplicate_edit_class.number = $('.type-content-item').attr('data-number');

            swap_edit_class.id = $('.type-content-item').attr('data-id');
            swap_edit_class.number = $('.type-content-item').attr('data-number');

            var index_item =  $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]').index();
            var count = $('.classes-list .class-list-item').length;

            if (index == 0){    //up
                if (index_item > 0){
                    swap_edit_class.number2 = $('.classes-list .class-list-item').eq(index_item - 1).attr('data-number');

                    $('.habit-preloader-wrapper').addClass("show");
                    jQuery.post(ajaxurl, swap_edit_class)
                        .done(function (msg) {

                            var copy_to = $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]')
                                .html();
                            var copy_from = $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]')
                                .html();

                            var onboarding_1 = $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]')
                                .attr('onboarding-class');
                            var onboarding_2 = $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]')
                                .attr('onboarding-class');

                            var copy_to_step = $('.step-list-wrapper[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]').html();
                            var copy_from_step = $('.step-list-wrapper[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]').html();

                            $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]').html(copy_from);
                            $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]').html(copy_to);

                            $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]')
                                .attr('onboarding-class',onboarding_2);
                            $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]')
                                .attr('onboarding-class',onboarding_1);

                            var class_text = '';
                            if (is_type == 's'){
                                class_text= 'subscriptions-classes';
                            }
                            else{
                                class_text = 'products-classes';
                            }

                            $('.'+class_text+' .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]').html(copy_from);
                            $('.'+class_text+' .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]').html(copy_to);

                            $('.'+class_text+' .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]')
                                .attr('onboarding-class',onboarding_2);
                            $('.'+class_text+' .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]')
                                .attr('onboarding-class',onboarding_1);

                            $('.'+class_text+' .step-list-wrapper[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]').html(copy_from_step);
                            $('.'+class_text+' .step-list-wrapper[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]').html(copy_to_step);

                            $('.classes-list .class-list-item.active').removeClass('active');
                            $('.type-content-inner').hide();
                            $('.habit-preloader-wrapper').removeClass("show");
                        })
                        .fail(function (xhr, textStatus, errorThrown) {
                            $('.habit-preloader-wrapper').removeClass("show");
                            alert('Connection error happen, please try again');
                        })
                }
            }
            else if (index == 1){//down
                if ((index_item + 1) < count){
                    swap_edit_class.number2 = $('.classes-list .class-list-item').eq(index_item + 1).attr('data-number');

                   $('.habit-preloader-wrapper').addClass("show");
                    jQuery.post(ajaxurl, swap_edit_class)
                        .done(function (msg) {

                            var copy_to = $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]')
                                .html();
                            var copy_from = $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]')
                                .html();

                            var onboarding_1 = $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]')
                                .attr('onboarding-class');
                            var onboarding_2 = $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]')
                                .attr('onboarding-class');

                            var copy_to_step = $('.step-list-wrapper[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]').html();
                            var copy_from_step = $('.step-list-wrapper[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]').html();

                            $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]').html(copy_from);
                            $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]').html(copy_to);

                            $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]')
                                .attr('onboarding-class',onboarding_2);
                            $('.classes-list .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]')
                                .attr('onboarding-class',onboarding_1);

                            var class_text = '';
                            if (is_type == 's'){
                                class_text= 'subscriptions-classes';
                            }
                            else{
                                class_text = 'products-classes';
                            }

                            $('.'+class_text+' .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]').html(copy_from);
                            $('.'+class_text+' .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]').html(copy_to);

                            $('.'+class_text+' .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]')
                                .attr('onboarding-class',onboarding_2);
                            $('.'+class_text+' .class-list-item[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]')
                                .attr('onboarding-class',onboarding_1);

                            $('.'+class_text+' .step-list-wrapper[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number+'"]').html(copy_from_step);
                            $('.'+class_text+' .step-list-wrapper[data-id="'+swap_edit_class.id+'"][data-number="'+swap_edit_class.number2+'"]').html(copy_to_step);

                            $('.classes-list .class-list-item.active').removeClass('active');
                            $('.type-content-inner').hide();
                            $('.habit-preloader-wrapper').removeClass("show");
                        })
                        .fail(function (xhr, textStatus, errorThrown) {
                            $('.habit-preloader-wrapper').removeClass("show");
                            alert('Connection error happen, please try again');
                        })
                }
            }
            else if (index == 2){ //duplicate
                $('.habit-preloader-wrapper').addClass("show");
                jQuery.post(ajaxurl, duplicate_edit_class)
                    .done(function (msg) {
                        $('.class-list-item[data-id="'+duplicate_edit_class.id+'"][data-number="'+duplicate_edit_class.number+'"]')
                            .first().clone().appendTo(".classes-list");

                        $('.classes-list .class-list-item').last().attr('data-number',msg);
                        $('.classes-list .class-list-item').last().removeClass('active');

                        var class_text = '';
                        if (is_type == 's'){
                            class_text= 'subscriptions-classes';
                        }
                        else{
                            class_text = 'products-classes';
                        }

                        $('.'+class_text).append('<div class="classes-item" data-id="'+duplicate_edit_class.id+'"></div>');

                        $('.class-list-item[data-id="'+duplicate_edit_class.id+'"][data-number="'+duplicate_edit_class.number+'"]')
                            .first().clone().appendTo($("."+class_text+" .classes-item").last());

                        $("."+class_text+" .classes-item .class-list-item").last().attr('data-number',msg);
                        $("."+class_text+" .classes-item .class-list-item").last().removeClass('active');

                        $('.'+class_text+' .step-list-wrapper[data-id="'+duplicate_edit_class.id+'"][data-number="'+duplicate_edit_class.number+'"]')
                            .clone().appendTo('.'+class_text);
                        $("."+class_text+" .step-list-wrapper").last().attr('data-number',msg);

                        $('.habit-preloader-wrapper').removeClass("show");
                    })
                    .fail(function (xhr, textStatus, errorThrown) {
                        $('.habit-preloader-wrapper').removeClass("show");
                        alert('Connection error happen, please try again');
                    })
            }
            else if (index == 3){ //delete
                $('.habit-preloader-wrapper').addClass("show");
                jQuery.post(ajaxurl, delete_edit_class)
                    .done(function (msg) {
                        $('.class-list-item[data-id="'+delete_edit_class.id+'"][data-number="'+delete_edit_class.number+'"]').remove();
                        $('.step-list-wrapper[data-id="'+delete_edit_class.id+'"][data-number="'+delete_edit_class.number+'"]').remove();
                        $('.type-content-inner').hide();
                        $('.habit-preloader-wrapper').removeClass("show");
                    })
                    .fail(function (xhr, textStatus, errorThrown) {
                        $('.habit-preloader-wrapper').removeClass("show");
                        alert('Connection error happen, please try again');
                    })
            }

            $('.move-class-wrapper').removeClass('show');
        });

        var membership_add_class = {
            action: 'membership_add_class',
            id: 0,
            title: ''
        };


        $(document).on('click','.add-class',function(e){
            e.preventDefault();
            membership_add_class.id = edit_membership_item.id;

            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, membership_add_class)
                .done(function (msg) {
                    $('.classes-list').append(
                        '<a class="class-list-item" data-number="'+msg+'" data-id="'+edit_membership_item.id+'"><span class="classes-list-item-title">Class</span><button class="move-class">...</button></a>'
                    );

                    var class_count = parseInt($('div.tr[data-id="'+edit_membership_item.id+'"]').attr('class-count'));
                    class_count++;
                    $('div.tr[data-id="'+edit_membership_item.id+'"]').attr('class-count',class_count);

                    var class_text = '';
                    if (is_type == 's'){
                        class_text= 'subscriptions-classes';
                    }
                    else{
                        class_text = 'products-classes';
                    }

                    $('.'+class_text).append(
                        '<div class="classes-item" data-id="'+edit_membership_item.id+'">' +
                            '<a class="class-list-item" data-number="'+msg+'" data-id="'+edit_membership_item.id+'" onboarding-class=""><span class="classes-list-item-title">Class</span><button class="move-class">...</button></a>' +
                        '</div>'
                    );

                    $('.'+class_text).append(
                        '<div class="step-list-wrapper" data-steps-count="0" data-id="'+edit_membership_item.id+'" data-number="'+msg+'"></div>'
                    );


                    $('.habit-preloader-wrapper').removeClass("show");
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })
        });

        $(document).on('click','.cancel-edit-class',function(){
            $('.type-content-inner').hide();
            $('.class-list-item.active').removeClass('active');
        });

        var save_edit_class = {
            action: 'save_edit_class',
            id: 0,
            number: 0,
            title: '',
            onboarding: '',
            steps: []
        };

        $(document).on('change','.onboarding-class',function(){
           if ($(this).is(':checked')){
                $('.add-step-to-class').show();
           }
           else{
               $('.add-step-to-class').hide();
               $(this).parent().find('.step-item').remove();
           }
        });

        $(document).on('click','.save-edit-class',function(){
            save_edit_class.id = $('.type-content-item').attr('data-id')
            save_edit_class.number = $('.type-content-item').attr('data-number')
            save_edit_class.title = $('.class-edit-title').val();
            if ($('#onboarding_class').is(':checked')){
                save_edit_class.onboarding = 'on';
            }
            else{
                save_edit_class.onboarding = '';
            }
            save_edit_class.steps = [];

            var steps_count = 0
            $('.step-list .step-item').each(function(){
                steps_count++;
                var video_enable = '';
                if ($(this).find('.onboarding-video').is(':checked')){
                    video_enable = 'on';
                }

                var video_title = $(this).find('.video-title').val();
                var checklist_title = $(this).find('.checklist-title').val();

                var video_url = $(this).find('.video-url').val();
                var video_description = $(this).find('.video-description').val();

                var checklist_button_text = $(this).find('.checklist-button-text').val();
                var checklist_popup_text = $(this).find('.checklist-popup-text').val();

                var step_links = [];
                var step_steps = [];

                $(this).find('.step-links-item').each(function(){
                    var link_text = $(this).find('p').text();
                    var link_url = $(this).find('.link-icon').attr('href');

                    var link_item = {
                        'link_text': link_text,
                        'link_url': link_url
                    };
                    step_links.push(link_item);
                });

                $(this).find('.step-steps-item').each(function(){
                    var step_text = $(this).find('.step-text').val();
                    var step_url = $(this).find('.step-text-url').val();
                    var step_type = $(this).find('.step-step-type').val();
                    var step_program = $(this).find('.module-program-select').val();
                    var step_module = $(this).find('.module-module-select').val();

                    var step_item = {
                        'step_text': step_text,
                        'step_url': step_url,
                        'step_type': step_type,
                        'step_program': step_program,
                        'step_module': step_module
                    };
                    step_steps.push(step_item);
                });

                var step_item = {
                    'video_enable': video_enable,
                    'video_title': video_title,
                    'video_url': video_url,
                    'video_description': video_description,
                    'checklist_title': checklist_title,
                    'checklist_button_text': checklist_button_text,
                    'checklist_popup_text': checklist_popup_text,
                    'step_links': step_links,
                    'step_steps': step_steps
                };
                save_edit_class.steps.push(step_item);
            });


            var step_list_html = $('.step-list').html();
            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, save_edit_class)
                .done(function (msg) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    $('.class-list-item[data-id="'+save_edit_class.id+'"][data-number="'+save_edit_class.number+'"]').find('.classes-list-item-title').text(save_edit_class.title);
                    $('.class-list-item[data-id="'+save_edit_class.id+'"][data-number="'+save_edit_class.number+'"]').attr('onboarding-class',save_edit_class.onboarding);
                    $('.step-list-wrapper[data-id="'+save_edit_class.id+'"][data-number="'+save_edit_class.number+'"]').html(step_list_html);
                    $('.step-list-wrapper[data-id="'+save_edit_class.id+'"][data-number="'+save_edit_class.number+'"]').attr('data-steps-count',steps_count);
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })
        });

        $(document).on('click','.step-video-title, .step-checklist-title',function(){
            $(this).parent().addClass('opened');
        });

        $(document).on('click','.cancel-step-video',function(){
            $(this).parent().removeClass('opened');
            $(this).parent().find('.step-video-title').text($(this).parent().find('.video-title').val());
        });

        $(document).on('click','.save-step-video',function(){
            $(this).parent().removeClass('opened');
            $(this).parent().find('.step-video-title').text($(this).parent().find('.video-title').val());
        });

        $(document).on('click','.cancel-step-checklist',function(){
            $(this).parent().removeClass('opened');
            $(this).parent().find('.step-checklist-title').text($(this).parent().find('.checklist-title').val());
        });

        $(document).on('click','.save-step-checklist',function(){
            $(this).parent().removeClass('opened');
            $(this).parent().find('.step-checklist-title').text($(this).parent().find('.checklist-title').val());
        });

        var add_step_to_class = 0;
        $(document).on('click','.add-step-to-class',function(){
            add_step_to_class = parseInt($('.step-list').attr('data-steps-count'));
            add_step_to_class++;
            $('.step-list').append(
                '<div class="step-item" data-number="'+add_step_to_class+'">' +
                    '<p>Onboarding Video:</p>' +
                    '<input type="checkbox" class="onboarding-video" id="onboarding_video_'+add_step_to_class+'">' +
                    '<label for="onboarding_video_'+add_step_to_class+'"></label>' +
                    '<p>Onboarding Checklist</p>' +
                    '<button class="move-step">...</button>' +
                    '<div class="video-wrapper">' +
                        '<button class="step-video-title">Video Title</button>' +
                        '<p>Title</p>' +
                        '<input type="text" class="video-title" value="Video Title">' +
                        '<p>Video URL</p>' +
                        '<input type="text" class="video-url">' +
                        '<p>Description</p>' +
                        '<textarea type="text" class="video-description"></textarea>' +
                        '<div class="step-links-list"></div>' +
                        '<a href="#" class="add-step-link">+ Add Link</a>' +
                        '<button class="cancel-step-video">Cancel</button>' +
                        '<button class="save-step-video">Save</button>' +
                    '</div>' +
                    '<div class="checklist-wrapper">' +
                        '<button class="step-checklist-title">Checklist Title</button>' +
                        '<p>Title</p>' +
                        '<input type="text" class="checklist-title" value="Checklist Title">' +
                        '<div class="step-steps-list"></div>' +
                        '<a href="#" class="add-step-step">+ Add Step</a>' +
                        '<p>Completion Button Text</p>' +
                        '<input type="text" class="checklist-button-text">' +
                        '<p>Completion Popup Text</p>' +
                        '<textarea type="text" class="checklist-popup-text"></textarea>' +
                        '<button class="cancel-step-checklist">Cancel</button>' +
                        '<button class="save-step-checklist">Save</button>' +
                    '</div>' +
                '</div>'
            );

            $('.step-list').attr('data-steps-count',add_step_to_class);
        });

        var step_link = [];

        var move_step_link_last_opened_list = [];

        $(document).on('click','.add-step-link',function(e){
            e.preventDefault();
            $('.add-link-wrapper').addClass('show');
            step_link = $(this).parent().find('.step-links-list');
            $('.add-link-popup p').eq(0).text('Add Link');
            $('.save-add-link').text('Add Link');
            move_step_link_last_opened_list = $(this).parent().find('.step-links-list');
        });

        $(document).on('click','.cancel-add-link',function(){
            $('.add-link-wrapper').removeClass('show');
        });

        var number_links = 0;
        $(document).on('click','.save-add-link',function(){

            number_links = move_step_link_last_opened_list.find('.step-links-item').length;

            var title = $('.link-title').val();
            var url = $('.link-url').val();
            if (url == ''){
                url = '#';
            }

            if ($('.save-add-link').text() == 'Edit Link'){
                $('.step-links-item[data-number="'+$('.add-link-wrapper').attr('data-number')+'"] p').text(title);
                $('.step-links-item[data-number="'+$('.add-link-wrapper').attr('data-number')+'"] a').attr('href',url);
            }
            else{
                number_links++;
                step_link.append(
                    '<div class="step-links-item" data-number="'+number_links+'">' +
                    '<button class="move-step-link">...</button>' +
                    '<p>'+title+'</p>' +
                    '<a href="'+url+'" target="_blank" class="link-icon"></a>' +
                    '</div>'
                );
            }

            $('.add-link-wrapper').removeClass('show');

            $('.link-title').val('');
            $('.link-url').val('');
        });


        var number_step_steps = 0;
        $(document).on('click','.add-step-step',function(e){
            e.preventDefault();
            number_step_steps = $(this).parent().find('.step-steps-item').length;
            number_step_steps++;
            $(this).parent().find('.step-steps-list').append(
                '<div class="step-steps-item" data-number="'+number_step_steps+'">' +
                    '<select class="step-step-type">' +
                        '<option value="Manual">Manual</option>' +
                        '<option value="Module">Module</option>' +
                        '<option value="Auto">Auto</option>' +
                    '</select>' +
                    '<button class="move-step-step">...</button>' +
                    '<p>Step Text</p>' +
                    '<input type="text" class="step-text">' +
                    '<div class="manual-wrapper"> ' +
                        '<p>Text URL</p> ' +
                        '<input type="text" class="step-text-url">' +
                    '</div>' +
                    '<div class="module-wrapper" style="display: none !important;"> ' +
                        '<p>Module</p>' +
                        '<select class="module-program-select">' +
                        '</select>' +
                        '<select class="module-module-select">' +
                        '</select>' +
                    '</div>' +
                '</div>'
            );

            $(this).parent().find('.step-steps-item').last().find('.module-program-select').html($('.select-program').html());
            $(this).parent().find('.step-steps-item').last().find('.module-module-select').html($('.select-program-pillar-module').first().html());
        });



        $(document).on('change','.step-step-type',function(){
            if ($(this).val() == 'Module'){
                $(this).parent().find('.manual-wrapper').attr('style','display:none !important');
                $(this).parent().find('.module-wrapper').attr('style','display:block !important');
            }
            else{
                $(this).parent().find('.manual-wrapper').attr('style','display:block !important');
                $(this).parent().find('.module-wrapper').attr('style','display:none !important');
            }
        });

        $(document).on('change','.onboarding-video',function(){
            if ($(this).is(':checked')){
                $(this).parent().find('.video-wrapper').addClass('show');
                $(this).prop('checked',true);
                $(this).attr('checked','checked');
            }
            else{
                $(this).parent().find('.video-wrapper').removeClass('show');
                $(this).prop('checked',false);
                $(this).removeAttr('checked');
            }
        });


        $(document).on('click','.move-step',function(e){
            e.preventDefault();
            e.stopPropagation();
            $('.move-step-wrapper').css({'left':($(this).offset().left ) + 'px','top':($(this).offset().top + 14) + 'px'});
            $('.move-step-wrapper').addClass('show');
            $('.move-step-wrapper').attr('data-number',$(this).parent().attr('data-number'));
        });

        $(document).on('click','.move-step-link',function(e){
            e.preventDefault();
            e.stopPropagation();
            $('.move-step-link-wrapper').css({'left':($(this).offset().left ) + 'px','top':($(this).offset().top + 14) + 'px'});
            $('.move-step-link-wrapper').attr('data-number',$(this).parent().attr('data-number'));
            $('.move-step-link-wrapper').addClass('show');
            move_step_link_last_opened_list = $(this).closest('.step-links-list');
        });

        var move_step_step_last_opened_list = [];
        $(document).on('click','.move-step-step',function(e){
            e.preventDefault();
            e.stopPropagation();
            $('.move-step-step-wrapper').css({'left':($(this).offset().left ) + 'px','top':($(this).offset().top + 14) + 'px'});
            $('.move-step-step-wrapper').addClass('show');
            $('.move-step-step-wrapper').attr('data-number',$(this).parent().attr('data-number'));
            move_step_step_last_opened_list = $(this).closest('.step-steps-list');
        });

        $(document).on('click','.move-step-wrapper a',function(e){
            e.preventDefault();

            var index = $(this).index();
            var link_number = $('.move-step-wrapper').attr('data-number');
            var link_count = $('.step-list .step-item[data-number="'+link_number+'"]').parent().find('.step-item').length;
            var item_index = $('.step-list .step-item[data-number="'+link_number+'"]').index();


            $('.video-title, .video-url, .checklist-title, .checklist-button-text, .step-text, .step-text-url').each(function(){
                $(this).attr('value',$(this).val());
            });

            $('.video-description, .checklist-popup-text').each(function(){
                $(this).text($(this).val());
            });

            if (index == 0) {
                if (item_index > 0){
                    var copy_to = $('.step-list .step-item').eq(item_index).html();
                    var copy_from = $('.step-list .step-item').eq(item_index - 1).html();

                    $('.step-list .step-item').eq(item_index).html(copy_from);
                    $('.step-list .step-item').eq(item_index - 1).html(copy_to);
                }
            }
            else if(index == 1){
                if (  (item_index + 1) < link_count ){
                    var copy_to = $('.step-list .step-item').eq(item_index).html();
                    var copy_from = $('.step-list .step-item').eq(item_index + 1).html();

                    $('.step-list .step-item').eq(item_index).html(copy_from);
                    $('.step-list .step-item').eq(item_index + 1).html(copy_to);
                }
            }
            else if(index == 2){
                $('.step-list .step-item[data-number="'+link_number+'"]').remove();
                $('.step-list').attr('data-steps-count',$('.step-list .step-item').length);
                var renew_step_counter = 0;
                $('.step-list .step-item').each(function(){
                    renew_step_counter++;
                    $(this).attr('data-number',renew_step_counter);
                });
            }

            $('.move-step-wrapper').removeClass('show');
        });

        $(document).on('click','.move-step-link-wrapper a',function(e){
            e.preventDefault();
            var index = $(this).index();
            var link_number = $('.move-step-link-wrapper').attr('data-number');
            var link_count = move_step_link_last_opened_list.find('.step-links-item').length;
            var item_index = move_step_link_last_opened_list.find('.step-links-item[data-number="'+link_number+'"]').index();

            if (index == 0) {
                if (item_index > 0){
                    var copy_to = move_step_link_last_opened_list.find('.step-links-item').eq(item_index).html();
                    var copy_from = move_step_link_last_opened_list.find('.step-links-item').eq(item_index - 1).html();

                    move_step_link_last_opened_list.find('.step-links-item').eq(item_index).html(copy_from);
                    move_step_link_last_opened_list.find('.step-links-item').eq(item_index - 1).html(copy_to);
                }
            }
            else if(index == 1){
                if (  (item_index + 1) < link_count ){
                    var copy_to = move_step_link_last_opened_list.find('.step-links-item').eq(item_index).html();
                    var copy_from = move_step_link_last_opened_list.find('.step-links-item').eq(item_index + 1).html();

                    move_step_link_last_opened_list.find('.step-links-item').eq(item_index).html(copy_from);
                    move_step_link_last_opened_list.find('.step-links-item').eq(item_index + 1).html(copy_to);
                }
            }
            else if(index == 2){
                $('.link-title').val(move_step_link_last_opened_list.find('.step-links-item[data-number="'+link_number+'"]').find('p').text());
                $('.link-url').val(move_step_link_last_opened_list.find('.step-links-item[data-number="'+link_number+'"]').find('a').attr('href'));

                $('.add-link-wrapper').attr('data-number',link_number);

                $('.add-link-wrapper').addClass('show');
                $('.add-link-popup p').eq(0).text('Edit Link');
                $('.save-add-link').text('Edit Link');
            }
            else if(index == 3){
                move_step_link_last_opened_list.find('.step-links-item[data-number="'+link_number+'"]').remove();

                var step_link_counter = 0;
                $('.step-links-list').each(function(){
                    step_link_counter = 0;
                    $(this).find('.step-links-item').each(function(){
                        step_link_counter++;
                        $(this).attr('data-number',step_link_counter);
                    });
                });
            }

            $('.move-step-link-wrapper').removeClass('show');
        });

        $(document).on('click','.move-step-step-wrapper a',function(e){
            e.preventDefault();

            var index = $(this).index();
            var link_number = $('.move-step-step-wrapper').attr('data-number');
            var link_count = move_step_step_last_opened_list.find('.step-steps-item').length;
            var item_index = move_step_step_last_opened_list.find('.step-steps-item[data-number="'+link_number+'"]').index();

            $('.step-text, .step-text-url').each(function(){
                $(this).attr('value',$(this).val());
            });


            if (index == 0) {
                if (item_index > 0){
                    var copy_to = move_step_step_last_opened_list.find('.step-steps-item').eq(item_index).html();
                    var copy_from = move_step_step_last_opened_list.find('.step-steps-item').eq(item_index - 1).html();

                    move_step_step_last_opened_list.find('.step-steps-item').eq(item_index).html(copy_from);
                    move_step_step_last_opened_list.find('.step-steps-item').eq(item_index - 1).html(copy_to);
                }
            }
            else if(index == 1){
                if (  (item_index + 1) < link_count ){
                    var copy_to = move_step_step_last_opened_list.find('.step-steps-item').eq(item_index).html();
                    var copy_from = move_step_step_last_opened_list.find('.step-steps-item').eq(item_index + 1).html();

                    move_step_step_last_opened_list.find('.step-steps-item').eq(item_index).html(copy_from);
                    move_step_step_last_opened_list.find('.step-steps-item').eq(item_index + 1).html(copy_to);
                }
            }
            else if(index == 2){
                move_step_step_last_opened_list.find('.step-steps-item[data-number="'+link_number+'"]').remove();

                var step_step_counter = 0;
                $('.step-steps-list').each(function(){
                    step_step_counter = 0;
                    $(this).find('.step-steps-item').each(function(){
                        step_step_counter++;
                        $(this).attr('data-number',step_step_counter);
                    });
                });
            }

            $('.move-step-step-wrapper').removeClass('show');
        });

        $(document).on('click','.preview-class',function(){
            var id = $('.type-content-item').attr('data-id');
            var number = $('.type-content-item').attr('data-number');
            window.open('https://www.eternumultra.com/class-preview/?id='+id+'&number='+number, '_blank');
        });

        $(document).on('click','.add-new-level',function(){
            $('.edit-type-content-levels .main-levels .tbody').append(
                '<div class="tr">' +
                    '<div class="td">' +
                        '<input type="text" class="level-title" value="Level ">' +
                    '</div>' +
                    '<div class="td">' +
                    '<select class="level-type">' +
                        '<option value="days_tracked">Days Tracked</option>' +
                        '<option value="calls">Calls</option>' +
                        '<option value="ad_spend">Ad Spend</option>' +
                        '<option value="leads">Leads</option>' +
                        '<option value="bookings">Bookings</option>' +
                        '<option value="sales">Sales</option>' +
                        '<option value="cash">Cash</option>' +
                        '<option value="revenue">Revenue</option>' +
                    '</select>' +
                    '</div>' +
                    '<div class="td">' +
                        '<input type="number" class="level-requirement">' +
                    '</div>' +
                    '<div class="td">' +
                        '<select class="level-upgrade">' +
                        '<option value="next_level">Next Level</option>' +
                        '<option value="upgrade">Upgrade</option>' +
                        '</select>' +
                    '</div>' +
                    '<div class="td">' +
                        '<a href="#" class="remove-level">X</a>' +
                    '</div>' +
                '</div>'
            );

            var rows_count = $(this).parent().find('.main-levels .level-upgrade').length;
            var rows_counter = 0;
            $(this).parent().find('.main-levels .level-upgrade').each(function(){
                rows_counter++;
                $(this).html('');
                $(this).append('<option value="next_level">Next Level</option>');
                if (rows_counter == rows_count){
                    $(this).append('<option value="upgrade">Upgrade</option>');
                }
            });
        });

        $(document).on('click','.remove-level',function(){
            var eee = $(this).closest('.main-levels');
            $(this).parent().parent().remove();

            var rows_count = eee.find('.level-upgrade').length;
            var rows_counter = 0;

            eee.find('.level-upgrade').each(function(){
                rows_counter++;
                $(this).html('');
                $(this).append('<option value="next_level">Next Level</option>');
                if (rows_counter == rows_count){
                    $(this).append('<option value="upgrade">Upgrade</option>');
                }
            });

        });

        $(document).on('click','.cancel-edit-levels',function(){
            $('.edit-type-content-levels').removeClass('active');
            $('.edit-product-link').removeClass('active');
        });

        var save_edit_levels = {
            action: 'save_edit_levels',
            id: 0,
            title: '',
            description: '',
            metric_shortcode: '',
            upgrade_to: '',
            //user_upgrade: '',
            levels: []
        };

        $(document).on('click','.save-edit-levels',function(){
            save_edit_levels.title = $('.edit-type-content-levels .upgrade-level-title').val();
            save_edit_levels.description = $('.edit-type-content-levels .upgrade-description').val();
            save_edit_levels.metric_shortcode = $('.edit-type-content-levels .metric-shortcode').val();
            save_edit_levels.upgrade_to = $('.edit-type-content-levels .upgrade-to').val();
            //save_edit_levels.user_upgrade = $('.edit-type-content-levels .upgrade-user').val();
            save_edit_levels.levels = [];


            $('.edit-type-content-levels .upgrade-level-title').attr('value',$('.edit-type-content-levels .upgrade-level-title').val());
            $('.edit-type-content-levels .upgrade-description').attr('value',$('.edit-type-content-levels .upgrade-description').val());

            var select_val_metric = $('.edit-type-content-levels .metric-shortcode').val();
            var select_val_upgrade_to = $('.edit-type-content-levels .upgrade-to').val();
            //var select_val_upgrade_user = $('.edit-type-content-levels .upgrade-user').val();

            $('.edit-type-content-levels .metric-shortcode option[selected]').removeAttr('selected');
            $('.edit-type-content-levels .upgrade-to option[selected]').removeAttr('selected');
            //$('.edit-type-content-levels .upgrade-user option[selected]').removeAttr('selected');

            $('.edit-type-content-levels .metric-shortcode option[selected]').prop('selected',false);
            $('.edit-type-content-levels .upgrade-to option[selected]').prop('selected',false);
            //$('.edit-type-content-levels .upgrade-user option[selected]').prop('selected',false);

            $('.edit-type-content-levels .metric-shortcode option[value='+select_val_metric+']').attr('selected','selected');
            $('.edit-type-content-levels .upgrade-to option[value="'+select_val_upgrade_to+'"]').attr('selected','selected');
            //$('.edit-type-content-levels .upgrade-user option[value='+select_val_upgrade_user+']').attr('selected','selected');

            $('.edit-type-content-levels .metric-shortcode option[value='+select_val_metric+']').prop('selected',true);
            $('.edit-type-content-levels .upgrade-to option[value="'+select_val_upgrade_to+'"]').prop('selected',true);
            //$('.edit-type-content-levels .upgrade-user option[value='+select_val_upgrade_user+']').prop('selected',true);

            $('.edit-type-content-levels .main-levels .tbody .tr').each(function(){
                $(this).find('.level-title').attr('value',$(this).find('.level-title').val());
                $(this).find('.level-requirement').attr('value',$(this).find('.level-requirement').val());

                var select_val_level_type = $(this).find('.level-type').val();
                var select_val_level_upgrade = $(this).find('.level-upgrade').val();

                $(this).find('.level-type option[selected]').removeAttr('selected');
                $(this).find('.level-upgrade option[selected]').removeAttr('selected');

                $(this).find('.level-type option[selected]').prop('selected',false);
                $(this).find('.level-upgrade option[selected]').prop('selected',false);

                $(this).find('.level-type option[value='+select_val_level_type+']').attr('selected','selected');
                $(this).find('.level-upgrade option[value='+select_val_level_upgrade+']').attr('selected','selected');

                $(this).find('.level-type option[value='+select_val_level_type+']').prop('selected',true);
                $(this).find('.level-upgrade option[value='+select_val_level_upgrade+']').prop('selected',true);

                var title = $(this).find('.level-title').val();
                var metric = $(this).find('.level-type').val();
                var requirement = $(this).find('.level-requirement').val();
                var once_complete = $(this).find('.level-upgrade').val();

                var level_item = {
                    'title': title,
                    'metric': metric,
                    'requirement': requirement,
                    'once_complete': once_complete
                };
                save_edit_levels.levels.push(level_item);
            });


            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, save_edit_levels)
                .done(function (msg) {
                    $('.habit-preloader-wrapper').removeClass("show");



                    $('.levels-wrapper[data-id="'+save_edit_levels.id+'"]').html($('.edit-type-content-levels').html());
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })
        });

        $(document).on('click','.add-new-program',function(){
            $('.popup-add-program-wrapper').addClass('show');
        });

        var membership_add_program = {
            action: 'membership_add_program',
            title: '',
            type: '',
            program_card_url: '',
            pillar_card_url: '',
            available_for: ''
        };


        $(document).on('click','.add-program-popup',function(){
            var title = $('.popup-add-program-wrapper .program-title').val();
            var type = $('.popup-add-program-wrapper .program-type').val();
            var program_card_url = $('.popup-add-program-wrapper .program-card-url').val();
            var pillar_card_url = $('.popup-add-program-wrapper .pillar-card-url').val();
            var available_for = $('.popup-add-program-wrapper .available-for').val();

            membership_add_program.title = title;
            membership_add_program.type = type;
            membership_add_program.program_card_url = program_card_url;
            membership_add_program.pillar_card_url = pillar_card_url;
            membership_add_program.available_for = available_for;

            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, membership_add_program)
                .done(function (msg) {
                    $('.programs-table .tbody').append(
                        '<div class="tr" data-id="'+msg+'" class-count="0">' +
                        '<div class="td">' + title +
                        '</div>' +
                        '<div class="td">' + type +
                        '</div>' +
                        '<div class="td">0</div>' +
                        '<div class="td">' +
                        '<button class="open-builder-program">Open Builder</button>' +
                        '</div>' +
                        '<div class="td">' +
                        '<button class="remove-item">...</button>' +
                        '</div>' +
                        '</div>'
                    );
                    $('.popup-add-program-wrapper .product-title').val('');
                    $('.popup-add-program-wrapper .product-type').val('Program');
                    $('.popup-add-program-wrapper .product-title').val('');
                    $('.popup-add-program-wrapper .program-card-url').val('');
                    $('.popup-add-program-wrapper .pillar-card-url').val('');
                    $('.is-habit-wrapper').removeClass('show');
                    //$('.habit-preloader-wrapper').removeClass("show");

                    var pageURL = $(location).attr("href");
                    pageURL = pageURL.replace('#?','?');
                    pageURL = pageURL.split('?')[0];
                    location.href = pageURL + "?page=memberships_settings&tab=programs";
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })
        });


        var last_program = [];
        $(document).on('click','.remove-program',function(e){
            last_program = $(this).closest('.tr');
            e.preventDefault();
            e.stopPropagation();
            $('.program-action-wrapper').css({'left':($(this).offset().left ) + 'px','top':($(this).offset().top + 14) + 'px'});
            $('.program-action-wrapper').addClass('show');
        });

        $(document).on('click','.activate-program',function(e){
            last_program = $(this).closest('.tr');
            e.preventDefault();
            e.stopPropagation();
            $('.program-action2-wrapper').css({'left':($(this).offset().left ) + 'px','top':($(this).offset().top + 14) + 'px'});
            $('.program-action2-wrapper').addClass('show');
        });

        var membership_archive_program = {
            action: 'membership_archive_program',
            id: 0
        };

        var duplicate_program = {
            action: 'duplicate_program',
            id: 0
        };

        $(document).on('click','.program-action-wrapper a',function(e) {
            e.preventDefault();

            membership_archive_program.id = last_program.attr('data-id');
            duplicate_program.id = last_program.attr('data-id');
            var index = $(this).index();
            if (index == 0){
                $('.popup-edit-program-wrapper .program-title').val(last_program.find('.td').eq(0).text());
                $('.popup-edit-program-wrapper .program-type').val(last_program.find('.td').eq(2).text());
                $('.popup-edit-program-wrapper .program-card-url').val(last_program.attr('program-card-url'));
                $('.popup-edit-program-wrapper .pillar-card-url').val(last_program.attr('pillar-card-url'));

                if (last_program.attr('available-for'))
                var available_for_arr = JSON.parse(last_program.attr('available-for'));

                var select_index = [];

                if (available_for_arr){
                    available_for_arr.forEach(function(eee){
                        select_index.push($('.popup-add-program .available-for option[value="'+eee+'"]').index());
                    });
                }

                $('.popup-edit-program-wrapper .input-item').html('<select multiple="multiple" class="available-for multiple-select-wrapper"></select>');
                $('.popup-edit-program-wrapper .available-for').html($('.popup-add-program .available-for').html());

                var selected_inner = [];

                var myDrop1 = new drop({
                    selector: '.popup-edit-program  .available-for',
                    preselected: select_index
                });

                jQuery('.popup-edit-program .available-for').parent().find('.drop-display').on('DOMSubtreeModified', function () {
                    selected_inner = [];
                    jQuery(this).find('span.item:not(.hide):not(.remove)').each(function () {
                        selected_inner.push(jQuery(this).text().slice(0, -1));
                    });
                    jQuery('.popup-edit-program .available-for option').each(function () {
                        if (selected_inner.includes(jQuery(this).text())) {
                            jQuery(this).prop('selected', true);
                            jQuery(this).attr('selected', 'selected');
                        } else {
                            jQuery(this).prop('selected', false);
                            jQuery(this).removeAttr('selected');
                        }
                    });
                });

                selected_inner = [];

                jQuery('.popup-edit-program .available-for').parent().find('.drop-display').find('span.item:not(.hide):not(.remove)')
                    .each(function () {
                    selected_inner.push(jQuery(this).text().slice(0, -1));
                });

                jQuery('.popup-edit-program .available-for option').each(function () {
                    if (selected_inner.includes(jQuery(this).text())) {
                        jQuery(this).prop('selected', true);
                        jQuery(this).attr('selected', 'selected');
                    } else {
                        jQuery(this).prop('selected', false);
                        jQuery(this).removeAttr('selected');
                    }
                });

                $('.popup-edit-program-wrapper').addClass('show');
                $('.program-action-wrapper').removeClass('show');
            }
            else if (index == 1){
                $('.habit-preloader-wrapper').addClass("show");
                jQuery.post(ajaxurl, duplicate_program)
                    .done(function (msg) {
                        $('.programs-table .tr[data-id="'+duplicate_program.id+'"]').first().clone().appendTo(".programs-table .tbody");

                        $('.programs-table .tr').last().attr('data-id',msg);

                        $('.program-action-wrapper').removeClass('show');
                        $('.habit-preloader-wrapper').removeClass("show");
                    })
                    .fail(function (xhr, textStatus, errorThrown) {
                        $('.habit-preloader-wrapper').removeClass("show");
                        alert('Connection error happen, please try again');
                    })
            }
            else if (index == 2){
                $('.popup-confirm-archive-wrapper').addClass('show');
                $('.program-action-wrapper').removeClass('show');
            }
        });

        var membership_activate_program = {
            action: 'membership_activate_program',
            id: 0
        };

        $(document).on('click','.program-action2-wrapper a',function(e) {
            e.preventDefault();
            $('.program-action2-wrapper').removeClass('show');
            membership_activate_program.id = last_program.attr('data-id');
            membership_delete_item.id = last_program.attr('data-id');
            var index = $(this).index();
            if (index == 0){
                $('.habit-preloader-wrapper').addClass("show");
                jQuery.post(ajaxurl, membership_activate_program)
                    .done(function (msg) {
                        $('.memberships-table.programs-table .tbody').append($('.archive-programs-table .tr[data-id="'+membership_activate_program.id+'"]'));
                        $('.memberships-table.programs-table .tbody .tr[data-id="'+membership_activate_program.id+'"] .activate-program').addClass('remove-program');
                        $('.memberships-table.programs-table .tbody .tr[data-id="'+membership_activate_program.id+'"] .activate-program').removeClass('activate-program');

                        var available_for = $('.programs-table div.tr').last().attr('available-for');
                        if (JSON.parse(available_for).length == 0){
                            $('.programs-table div.tr').last().find('.td').eq(1).text('-');
                        }
                        else{
                            $('.programs-table div.tr').last().find('.td').eq(1).text(JSON.parse(available_for).length+' Memberships');
                        }

                        $('.habit-preloader-wrapper').removeClass("show");
                    })
                    .fail(function (xhr, textStatus, errorThrown) {
                        $('.habit-preloader-wrapper').removeClass("show");
                        alert('Connection error happen, please try again');
                    });
            }
            else if (index == 1){
                $('.popup-delete-program-wrapper').addClass('show');
            }
        });

        $(document).on('click','.confirm-archive-program',function(){
            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, membership_archive_program)
                .done(function (msg) {
                    $('.memberships-table.archive-programs-table .tbody').append($('.programs-table .tr[data-id="'+membership_archive_program.id+'"]'));
                    $('.memberships-table.archive-programs-table .tbody .tr[data-id="'+membership_archive_program.id+'"] .remove-program').addClass('activate-program');
                    $('.memberships-table.archive-programs-table .tbody .tr[data-id="'+membership_archive_program.id+'"] .remove-program').removeClass('remove-program');

                    $('.archive-programs-table div.tr').last().find('.td').eq(1).text('Archived');

                    $('.habit-preloader-wrapper').removeClass("show");
                    $('.popup-confirm-archive-wrapper').removeClass('show');
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                });
        });

        $(document).on('click','.confirm-delete-program',function(){
            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, membership_delete_item)
                .done(function (msg) {
                    $('.archive-programs-table .tr[data-id="'+membership_delete_item.id+'"]').remove();
                    $('.habit-preloader-wrapper').removeClass("show");
                    $('.popup-delete-program-wrapper').removeClass('show');
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                });
        });

        var membership_edit_program = {
            action: 'membership_edit_program',
            id: 0,
            title: '',
            type: '',
            program_card_url: '',
            pillar_card_url: '',
            available_for: ''
        };

        $(document).on('click','.edit-program-popup',function(){
            var title = $('.popup-edit-program-wrapper .program-title').val();
            var type = $('.popup-edit-program-wrapper .program-type').val();
            var program_card_url = $('.popup-edit-program-wrapper .program-card-url').val();
            var pillar_card_url = $('.popup-edit-program-wrapper .pillar-card-url').val();
            var available_for = $('.popup-edit-program-wrapper .available-for').val();

            membership_edit_program.id = last_program.attr('data-id');
            membership_edit_program.title = title;
            membership_edit_program.type = type;
            membership_edit_program.program_card_url = program_card_url;
            membership_edit_program.pillar_card_url = pillar_card_url;
            membership_edit_program.available_for = available_for;

            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, membership_edit_program)
                .done(function (msg) {
                    $('.programs-table .tr[data-id="'+membership_edit_program.id+'"] .td').eq(0).text(membership_edit_program.title);
                    $('.programs-table .tr[data-id="'+membership_edit_program.id+'"] .td').eq(2).text(membership_edit_program.type);
                    $('.programs-table .tr[data-id="'+membership_edit_program.id+'"]').attr('program-card-url',membership_edit_program.program_card_url);
                    $('.programs-table .tr[data-id="'+membership_edit_program.id+'"]').attr('pillar-card-url',membership_edit_program.pillar_card_url);
                    $('.programs-table .tr[data-id="'+membership_edit_program.id+'"]').attr('available-for',membership_edit_program.available_for);

                    $('.popup-edit-program-wrapper .product-title').val('');
                    $('.popup-edit-program-wrapper .product-type').val('Program');
                    $('.popup-edit-program-wrapper .product-title').val('');
                    $('.popup-edit-program-wrapper .program-card-url').val('');
                    $('.popup-edit-program-wrapper .pillar-card-url').val('');

                    $('.popup-edit-program-wrapper').removeClass('show');

                    var pageURL = $(location).attr("href");
                    pageURL = pageURL.replace('#?','?');
                    pageURL = pageURL.split('?')[0];
                    location.href = pageURL + "?page=memberships_settings&tab=programs";

                    //$('.habit-preloader-wrapper').removeClass("show");
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })
        });


        var membership_add_pillar = {
            action: 'membership_add_pillar',
            id: 0
        };

        var program_type = '';

        $(document).on('click','.open-builder-program',function(){

            program_type = $(this).parent().parent().find('.td').eq(2).text();

            membership_add_pillar.id = $(this).closest('.tr').attr('data-id');

            $('.pillars-list').html($(this).closest('.tr').find('.pillars-wrapper').html());

            $('.type-sidebar-module').removeClass('show');

            $('.program-name span').eq(1).text($(this).parent().parent().find('.td').eq(0).text());
            $(this).closest('.tab-content').find('.tab-content-item').removeClass('active');
            $('.tab-content-item-edit-program').addClass('active');
        });

        $(document).on('click','.back-to-list-program, .program-edit-cancel',function(e){
            e.preventDefault();
            $('.tab-content-item-edit-program').removeClass('active');
            $('.tab-content-item-programs').addClass('active');
            $('.tab-content-programs .tab-links a.active').removeClass('active');
            $('.tab-content-programs .tab-links a').eq(0).addClass('active');

            $('.type-content-inner-pillar').removeClass('show');
            $('.type-content-inner-module').removeClass('show');
            $('.type-content-inner-pillar-custom').removeClass('show');
            $('.type-content-inner-module-custom').removeClass('show');

            //$('.type-content-inner').hide();
        });




        $(document).on('click','.program-edit-save',function(){

            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, edit_membership_item22)
                .done(function (msg) {

                    $('.habit-preloader-wrapper').removeClass("show");

                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })

        });

        $(document).on('click','.add-pillar',function(e){
            e.preventDefault();

            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, membership_add_pillar)
                .done(function (msg) {

                    $('.pillars-list').append(
                        '<a class="pillar-list-item" data-number="'+msg+'" data-id="'+membership_add_pillar.id+'" ' +
                        'pillar_title="Pillar " ' +
                        'pillar_status="Draft" ' +
                        'back_text="" ' +
                        'bullet_1="" ' +
                        'bullet_2="" ' +
                        'bullet_3="" ' +
                        'bullet_4="" ' +
                        'auto_unlock="" ' +
                        'auto_unlock_type="" ' +
                        'auto_unlock_pillar_select="" ' +
                        'auto_unlock_time_select="" ' +
                        'auto_unlock_days="" ' +
                        '>' +
                            '<span class="pillar-list-item-title">Pillar </span>' +
                            '<button class="move-pillar">...</button>' +
                        '</a>' +
                        '<div class="modules-wrapper"></div>'
                    );

                    $('.tab-content-programs div.tr[data-id="'+membership_add_pillar.id+'"] .pillars-wrapper').append(
                        '<a class="pillar-list-item" data-number="'+msg+'" data-id="'+membership_add_pillar.id+'" ' +
                        'pillar_title="Pillar " ' +
                        'pillar_status="Draft" ' +
                        'back_text="" ' +
                        'bullet_1="" ' +
                        'bullet_2="" ' +
                        'bullet_3="" ' +
                        'bullet_4="" ' +
                        'auto_unlock="" ' +
                        'auto_unlock_type="" ' +
                        'auto_unlock_pillar_select="" ' +
                        'auto_unlock_time_select="" ' +
                        'auto_unlock_days="" ' +
                        '>' +
                        '<span class="pillar-list-item-title">Pillar </span>' +
                        '<button class="move-pillar">...</button>' +
                        '</a>' +
                        '<div class="modules-wrapper"></div>');

                    $('.pillar-list-item.active').removeClass('active');
                    $('.current-pillar-module.show').removeClass('show');
                    $('.habit-preloader-wrapper').removeClass("show");
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })
        });

        var membership_add_module = {
            action: 'membership_add_module',
            id: 0,
            number: 0
        };

        $(document).on('click','.pillar-list-item',function(e){
            e.preventDefault();
            $('.pillar-list-item.active').removeClass('active');
            $(this).addClass('active');

            if (program_type == 'Program'){
                $('.type-content-inner-pillar').addClass('show');
                $('.type-content-inner-pillar-custom').removeClass('show');
            }
            else if (program_type == 'Custom Content'){
                $('.type-content-inner-pillar-custom').addClass('show');
                $('.type-content-inner-pillar').removeClass('show');
            }

            $('.type-content-inner-module').removeClass('show');
            $('.type-content-inner-module-custom').removeClass('show');

            $('.type-sidebar-module').addClass('show');
            $('.modules-list').html($(this).next().html());

            membership_add_module.id = $(this).attr('data-id');
            membership_add_module.number = $(this).attr('data-number');

            var pillar_title = $(this).attr('pillar_title');
            var pillar_status = $(this).attr('pillar_status');
            var back_text = $(this).attr('back_text');
            var bullet_1 = $(this).attr('bullet_1');
            var bullet_2 = $(this).attr('bullet_2');
            var bullet_3 = $(this).attr('bullet_3');
            var bullet_4 = $(this).attr('bullet_4');
            var auto_unlock = $(this).attr('auto_unlock');
            var auto_unlock_type = $(this).attr('auto_unlock_type');
            var auto_unlock_pillar_select = $(this).attr('auto_unlock_pillar_select');
            var auto_unlock_time_select = $(this).attr('auto_unlock_time_select');
            var auto_unlock_days = $(this).attr('auto_unlock_days');

            $('.current-pillar-module.show .pillar-edit-title').val(pillar_title);
            $('.current-pillar-module.show .pillar-status').val(pillar_status);
            $('.current-pillar-module.show .pillar-back-text').val(back_text);
            $('.current-pillar-module.show .pillar-bullet-1').val(bullet_1);
            $('.current-pillar-module.show .pillar-bullet-2').val(bullet_2);
            $('.current-pillar-module.show .pillar-bullet-3').val(bullet_3);
            $('.current-pillar-module.show .pillar-bullet-4').val(bullet_4);
            $('.current-pillar-module.show .auto-unlock-type').val(auto_unlock_type);
            $('.current-pillar-module.show .auto-unlock-days').val(auto_unlock_days);

            if (auto_unlock == 'on'){
                $('.current-pillar-module.show  .auto_unlock').attr('checked','checked');
                $('.current-pillar-module.show  .auto_unlock').prop('checked',true);
            }
            else{
                $('.current-pillar-module.show  .auto_unlock').removeAttr('checked');
                $('.current-pillar-module.show  .auto_unlock').prop('checked',false);
            }

            if ($('.auto-unlock-type').val() == 'Pillar'){
                $('.auto-unlock-pillar-wrapper').addClass('show');
                $('.auto-unlock-time-wrapper').removeClass('show');
            }
            else if ($('.auto-unlock-type').val() == 'Time') {
                $('.auto-unlock-pillar-wrapper').removeClass('show');
                $('.auto-unlock-time-wrapper').addClass('show');
            }
            else{
                $('.auto-unlock-pillar-wrapper').addClass('show');
                $('.auto-unlock-time-wrapper').removeClass('show');
            }

            $('.current-pillar-module.show .auto-unlock-pillar').html('');
            $('.pillars-list .pillar-list-item').each(function(){
                var pillar_title = $(this).attr('pillar_title');
                var id = $(this).attr('data-id');
                var number = $(this).attr('data-number');
                $('.current-pillar-module.show .auto-unlock-pillar').append(
                    '<option value="id_'+id+'_number_'+number+'">'+pillar_title+'</option>'
                );
            });

            $('.current-pillar-module.show .auto-unlock-pillar').val(auto_unlock_pillar_select);
            $('.current-pillar-module.show .auto-unlock-time').val(auto_unlock_time_select);

        });


        $(document).on('click','.module-list-item',function(e){
            e.preventDefault();
            $('.module-list-item.active').removeClass('active');
            $(this).addClass('active');

            if (program_type == 'Program'){
                $('.type-content-inner-module').addClass('show');
                $('.type-content-inner-module-custom').removeClass('show');
            }
            else if (program_type == 'Custom Content'){
                $('.type-content-inner-module-custom').addClass('show');
                $('.type-content-inner-module').removeClass('show');
            }

            $('.type-content-inner-pillar-custom').removeClass('show');
            $('.type-content-inner-pillar').removeClass('show');

            var module_title = $(this).attr('module_title');
            var module_status = $(this).attr('module_status');
            var video_url = $(this).attr('video_url');
            var description = $(this).attr('description');
            var transcription = $(this).attr('transcription');
            if ($(this).attr('module_links') !== ''){
                var module_link_helper = $(this).attr('module_links')
            }
            else{
                var module_link_helper = "[]";
            }
            var module_links = JSON.parse(module_link_helper);
            var drip_release = $(this).attr('drip_release');
            var add_to_progress = $(this).attr('add_to_progress');
            var drip_release_type = $(this).attr('drip_release_type');
            var drip_release_module_pillar = $(this).attr('drip_release_module_pillar');
            var drip_release_module_module = $(this).attr('drip_release_module_module');
            var drip_release_pillar_pillar = $(this).attr('drip_release_pillar_pillar');
            var drip_release_time = $(this).attr('drip_release_time');
            var drip_release_days = $(this).attr('drip_release_days');

            $('.current-pillar-module.show .module-edit-title').val(module_title);
            $('.current-pillar-module.show .module-status').val(module_status);
            $('.current-pillar-module.show .module-video-url').val(video_url);
            $('.current-pillar-module.show .module-description').val(description);
            $('.current-pillar-module.show .module-transcription').val(transcription);
            $('.current-pillar-module.show .drip-release-type').val(drip_release_type);
            $('.current-pillar-module.show .drip-release-days').val(drip_release_days);

            var module_links_counter = 0;
            $('.current-pillar-module.show .module-links-list').html('');
            if (module_links){
                module_links.forEach(function(eee){
                    module_links_counter++;
                    var title = eee.link_text;
                    var url = eee.link_url;
                    $('.current-pillar-module.show .module-links-list').append(
                        '<div class="module-links-item" data-number="'+module_links_counter+'">' +
                        '<button class="move-module-link">...</button>' +
                        '<p>'+title+'</p>' +
                        '<a href="'+url+'" target="_blank" class="link-icon"></a>' +
                        '</div>'
                    );
                });
            }

            if (drip_release == 'on'){
                $('.current-pillar-module.show  .drip_release').attr('checked','checked');
                $('.current-pillar-module.show  .drip_release').prop('checked',true);
            }
            else{
                $('.current-pillar-module.show  .drip_release').removeAttr('checked');
                $('.current-pillar-module.show  .drip_release').prop('checked',false);
            }
            if (add_to_progress == 'on'){
                $('.current-pillar-module.show  .add_to_progress').attr('checked','checked');
                $('.current-pillar-module.show  .add_to_progress').prop('checked',true);
            }
            else{
                $('.current-pillar-module.show  .add_to_progress').removeAttr('checked');
                $('.current-pillar-module.show  .add_to_progress').prop('checked',false);
            }

            if ($('.drip-release-type').val() == 'Module'){
                $('.drip-release-module-wrapper').addClass('show');
                $('.drip-release-pillar-wrapper').removeClass('show');
                $('.drip-release-time-wrapper').removeClass('show');
            }
            else if ($('.drip-release-type').val() == 'Pillar'){
                $('.drip-release-module-wrapper').removeClass('show');
                $('.drip-release-pillar-wrapper').addClass('show');
                $('.drip-release-time-wrapper').removeClass('show');
            }
            else if ($('.drip-release-type').val() == 'Time'){
                $('.drip-release-module-wrapper').removeClass('show');
                $('.drip-release-pillar-wrapper').removeClass('show');
                $('.drip-release-time-wrapper').addClass('show');
            }
            else{
                $('.drip-release-module-wrapper').addClass('show');
                $('.drip-release-pillar-wrapper').removeClass('show');
                $('.drip-release-time-wrapper').removeClass('show');
            }

            $('.current-pillar-module.show .drip-release-module-pillar, ' +
             '.current-pillar-module.show .drip-release-module-module, ' +
             '.current-pillar-module.show .drip-release-pillar-pillar').html('');

            $('.pillars-list .pillar-list-item').each(function(){
                var pillar_title = $(this).attr('pillar_title');
                var id = $(this).attr('data-id');
                var number = $(this).attr('data-number');
                $('.current-pillar-module.show .drip-release-module-pillar, ' +
                    '.current-pillar-module.show .drip-release-pillar-pillar').append(
                    '<option value="id_'+id+'_number_'+number+'">'+pillar_title+'</option>'
                );
            });

            $('.current-pillar-module.show .drip-release-module-pillar').val(drip_release_module_pillar);
            $('.current-pillar-module.show .drip-release-pillar-pillar').val(drip_release_pillar_pillar);
            $('.current-pillar-module.show .drip-release-time').val(drip_release_time);

            var new_val = $('.current-pillar-module.show .drip-release-module-pillar').val();
            var new_val_number = '';
            if ((new_val !== null) && (new_val)){
                new_val_number = new_val.split('_');
                new_val_number = new_val_number[new_val_number.length - 1];
            }

            if (new_val_number){
                $('.pillars-list .pillar-list-item[data-number="'+new_val_number+'"] ~ .modules-wrapper:eq(0) .module-list-item').each(function(){
                    var module_title = $(this).attr('module_title');
                    var id = $(this).attr('data-id');
                    var number = $(this).attr('data-number')
                    var counter = $(this).attr('data-counter');
                    $('.current-pillar-module.show .drip-release-module-module').append(
                        '<option value="id_'+id+'_number_'+number+'_counter_'+counter+'">'+module_title+'</option>'
                    );
                });
            }

            $('.current-pillar-module.show .drip-release-module-module').val(drip_release_module_module);

        });


        $(document).on('click','.add-module',function(e){
            e.preventDefault();

            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, membership_add_module)
                .done(function (msg) {

                    $('.pillars-list .pillar-list-item[data-number="'+membership_add_module.number+'"][data-id="'+membership_add_module.id+'"]').next().append(
                        '<a class="module-list-item" data-counter="'+msg+'" data-number="'+membership_add_module.number+'" data-id="'+membership_add_module.id+'" ' +
                        'module_title="Module " ' +
                        'module_status="Draft" ' +
                        'video_url="" ' +
                        'description="" ' +
                        'transcription="" ' +
                        "module_links='' " +
                        'drip_release="" ' +
                        'add_to_progress="on" ' +
                        'drip_release_type="" ' +
                        'drip_release_module_pillar="" ' +
                        'drip_release_module_module="" ' +
                        'drip_release_pillar_pillar="" ' +
                        'drip_release_time="" ' +
                        'drip_release_days="" ' +
                        '>' +
                        '<span class="module-list-item-title">Module </span>' +
                        '<button class="move-module">...</button>' +
                        '</a>'
                    );

                    $('.modules-list').append(
                        '<a class="module-list-item" data-counter="'+msg+'" data-number="'+membership_add_module.number+'" data-id="'+membership_add_module.id+'" ' +
                        'module_title="Module " ' +
                        'module_status="Draft" ' +
                        'video_url="" ' +
                        'description="" ' +
                        'transcription="" ' +
                        "module_links='' " +
                        'drip_release="" ' +
                        'add_to_progress="on" ' +
                        'drip_release_type="" ' +
                        'drip_release_module_pillar="" ' +
                        'drip_release_module_module="" ' +
                        'drip_release_pillar_pillar="" ' +
                        'drip_release_time="" ' +
                        'drip_release_days="" ' +
                        '>' +
                        '<span class="module-list-item-title">Module </span>' +
                        '<button class="move-module">...</button>' +
                        '</a>'
                    );

                    $('.tab-content-programs div.tr[data-id="'+membership_add_module.id+'"] .pillars-wrapper ' +
                            '.pillar-list-item[data-number="'+membership_add_module.number+'"][data-id="'+membership_add_module.id+'"]')
                        .next().append(
                            '<a class="module-list-item" data-counter="'+msg+'" data-number="'+membership_add_module.number+'" data-id="'+membership_add_module.id+'" ' +
                            'module_title="Module " ' +
                            'module_status="Draft" ' +
                            'video_url="" ' +
                            'description="" ' +
                            'transcription="" ' +
                            "module_links='' " +
                            'drip_release="" ' +
                            'add_to_progress="on" ' +
                            'drip_release_type="" ' +
                            'drip_release_module_pillar="" ' +
                            'drip_release_module_module="" ' +
                            'drip_release_pillar_pillar="" ' +
                            'drip_release_time="" ' +
                            'drip_release_days="" ' +
                            '>' +
                            '<span class="module-list-item-title">Module </span>' +
                            '<button class="move-module">...</button>' +
                            '</a>');

                    $('.module-list-item.active').removeClass('active');
                    $('.current-pillar-module.show').removeClass('show');
                    $('.habit-preloader-wrapper').removeClass("show");
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })
        });

        $(document).on('change','.auto-unlock-type',function(e) {
            if ($('.auto-unlock-type').val() == 'Pillar'){
                $('.auto-unlock-pillar-wrapper').addClass('show');
                $('.auto-unlock-time-wrapper').removeClass('show');
            }
            else if ($('.auto-unlock-type').val() == 'Time') {
                $('.auto-unlock-pillar-wrapper').removeClass('show');
                $('.auto-unlock-time-wrapper').addClass('show');
            }
        });

        $(document).on('change','.drip-release-type',function(e) {
            if ($('.drip-release-type').val() == 'Module'){
                $('.drip-release-module-wrapper').addClass('show');
                $('.drip-release-pillar-wrapper').removeClass('show');
                $('.drip-release-time-wrapper').removeClass('show');
            }
            else if ($('.drip-release-type').val() == 'Pillar'){
                $('.drip-release-module-wrapper').removeClass('show');
                $('.drip-release-pillar-wrapper').addClass('show');
                $('.drip-release-time-wrapper').removeClass('show');
            }
            else if ($('.drip-release-type').val() == 'Time'){
                $('.drip-release-module-wrapper').removeClass('show');
                $('.drip-release-pillar-wrapper').removeClass('show');
                $('.drip-release-time-wrapper').addClass('show');
            }
        });

        var last_pillar = [];
        var last_module = [];

        $(document).on('click','.move-pillar',function(e){
            e.preventDefault();
            e.stopPropagation();
            $(this).parent().trigger('click');
            $('.move-pillar-wrapper').css({'left':($(this).offset().left ) + 'px','top':($(this).offset().top + 14) + 'px'});
            $('.move-pillar-wrapper').addClass('show');
        });
        $(document).on('click','.move-module',function(e){
            e.preventDefault();
            e.stopPropagation();
            $(this).parent().trigger('click');
            $('.move-module-wrapper').css({'left':($(this).offset().left ) + 'px','top':($(this).offset().top + 14) + 'px'});
            $('.move-module-wrapper').addClass('show');
        });
        var edit_module_link_number = 0;
        $(document).on('click','.move-module-link',function(e){
            e.preventDefault();
            e.stopPropagation();
            edit_module_link_number = $(this).parent().attr('data-number');
            $('.move-module-link-wrapper').css({'left':($(this).offset().left ) + 'px','top':($(this).offset().top + 14) + 'px'});
            $('.move-module-link-wrapper').addClass('show');
        });

        var module_link = [];
        $(document).on('click','.add-module-link',function(e){
            e.preventDefault();
            $('.add-module-link-wrapper').addClass('show');
            module_link = $(this).parent().find('.module-links-list');
            $('.add-module-link-popup p').eq(0).text('Add Link');
            $('.save-add-module-link').text('Add Link');
        });

        $(document).on('click','.cancel-add-module-link',function(){
            $('.add-module-link-wrapper').removeClass('show');
        });

        var number_module_links = 0;

        $(document).on('click','.save-add-module-link',function(){

            number_module_links = module_link.find('.module-links-item').length;

            var title = $('.module-link-title').val();
            var url = $('.module-link-url').val();
            if (url == ''){
                url = '#';
            }
            var module_link_number = $('.add-module-link-wrapper').attr('data-number');

            if ($('.save-add-module-link').text() == 'Edit Link'){
                $('.module-links-item[data-number="'+module_link_number+'"] p').text(title);
                $('.module-links-item[data-number="'+module_link_number+'"] a').attr('href',url);
            }
            else{
                number_module_links++;
                module_link.append(
                    '<div class="module-links-item" data-number="'+number_module_links+'">' +
                    '<button class="move-module-link">...</button>' +
                    '<p>'+title+'</p>' +
                    '<a href="'+url+'" target="_blank" class="link-icon"></a>' +
                    '</div>'
                );
            }

            $('.add-module-link-wrapper').removeClass('show');

            $('.module-link-title').val('');
            $('.module-link-url').val('');
        });

        var membership_delete_pillar = {
            action: 'membership_delete_pillar',
            id: 0,
            number: 0
        };

        var duplicate_pillar = {
            action: 'duplicate_pillar',
            id: 0,
            number: 0
        };

        var swap_pillar = {
            action: 'swap_pillar',
            id: 0,
            number: 0,
            number2: 0
        };

        $(document).on('click','.move-pillar-wrapper a',function(e) {
            e.preventDefault();
            var index = $(this).index();
            if (index == 0){

                var index_item =  $('.pillars-list .pillar-list-item.active').index();
                var index_item_helper = index_item / 2;

                if (index_item > 0){
                    swap_pillar.id = $('.pillars-list .pillar-list-item.active').attr('data-id');
                    swap_pillar.number = $('.pillars-list .pillar-list-item').eq(index_item_helper).attr('data-number');
                    swap_pillar.number2 = $('.pillars-list .pillar-list-item').eq(index_item_helper - 1).attr('data-number');

                    $('.habit-preloader-wrapper').addClass("show");
                    jQuery.post(ajaxurl, swap_pillar)
                        .done(function (msg) {

                            var copy_to = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').html();
                            var copy_from = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').html();

                            var copy_to_modules = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"]' +
                                '[data-number="'+swap_pillar.number+'"] ~ .modules-wrapper').first().html();
                            var copy_from_modules = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"]' +
                                '[data-number="'+swap_pillar.number2+'"] ~ .modules-wrapper').first().html();

                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').html(copy_from);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').html(copy_to);

                            $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"] ~ .modules-wrapper').first().html(copy_from_modules);
                            $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"] ~ .modules-wrapper').first().html(copy_to_modules);

                            $('.tr[data-id="'+swap_pillar.id+'"] .pillars-wrapper .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"] ~ .modules-wrapper').first().html(copy_from_modules);
                            $('.tr[data-id="'+swap_pillar.id+'"] .pillars-wrapper .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"] ~ .modules-wrapper').first().html(copy_to_modules);

                            var to_pillar_title = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('pillar_title');
                            var to_pillar_status = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('pillar_status');
                            var to_back_text = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('back_text');
                            var to_bullet_1 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_1');
                            var to_bullet_2 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_2');
                            var to_bullet_3 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_3');
                            var to_bullet_4 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_4');
                            var to_auto_unlock = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock');
                            var to_auto_unlock_type = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_type');
                            var to_auto_unlock_pillar_select = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_pillar_select');
                            var to_auto_unlock_time_select = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_time_select');
                            var to_auto_unlock_days = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_days');

                            var from_pillar_title = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('pillar_title');
                            var from_pillar_status = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('pillar_status');
                            var from_back_text = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('back_text');
                            var from_bullet_1 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_1');
                            var from_bullet_2 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_2');
                            var from_bullet_3 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_3');
                            var from_bullet_4 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_4');
                            var from_auto_unlock = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock');
                            var from_auto_unlock_type = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_type');
                            var from_auto_unlock_pillar_select = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_pillar_select');
                            var from_auto_unlock_time_select = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_time_select');
                            var from_auto_unlock_days = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_days');

                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('pillar_title',from_pillar_title);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('pillar_status',from_pillar_status);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('back_text',from_back_text);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_1',from_bullet_1);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_2',from_bullet_2);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_3',from_bullet_3);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_4',from_bullet_4);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock',from_auto_unlock);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_type',from_auto_unlock_type);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_pillar_select',from_auto_unlock_pillar_select);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_time_select',from_auto_unlock_time_select);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_days',from_auto_unlock_days);

                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('pillar_title',to_pillar_title);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('pillar_status',to_pillar_status);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('back_text',to_back_text);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_1',to_bullet_1);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_2',to_bullet_2);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_3',to_bullet_3);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_4',to_bullet_4);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock',to_auto_unlock);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_type',to_auto_unlock_type);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_pillar_select',to_auto_unlock_pillar_select);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_time_select',to_auto_unlock_time_select);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_days',to_auto_unlock_days);

                            $('.type-sidebar-module.show').removeClass('show');
                            $('.current-pillar-module.show').removeClass('show');
                            $('.pillar-list-item.active').removeClass('active');
                            $('.habit-preloader-wrapper').removeClass("show");
                        })
                        .fail(function (xhr, textStatus, errorThrown) {
                            $('.habit-preloader-wrapper').removeClass("show");
                            alert('Connection error happen, please try again');
                        })

                }

                $('.move-pillar-wrapper').removeClass('show');
            }
            else if (index == 1){

                var index_item =  $('.pillars-list .pillar-list-item.active').index();
                var index_item_helper = index_item / 2;
                var count = $('.pillars-list .pillar-list-item').length;

                if ((index_item_helper + 1) < count){
                    swap_pillar.id = $('.pillars-list .pillar-list-item.active').attr('data-id');
                    swap_pillar.number = $('.pillars-list .pillar-list-item').eq(index_item_helper).attr('data-number');
                    swap_pillar.number2 = $('.pillars-list .pillar-list-item').eq(index_item_helper + 1).attr('data-number');

                    $('.habit-preloader-wrapper').addClass("show");
                    jQuery.post(ajaxurl, swap_pillar)
                        .done(function (msg) {

                            var copy_to = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').html();
                            var copy_from = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').html();

                            var copy_to_modules = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"]' +
                                '[data-number="'+swap_pillar.number+'"] ~ .modules-wrapper').first().html();
                            var copy_from_modules = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"]' +
                                '[data-number="'+swap_pillar.number2+'"] ~ .modules-wrapper').first().html();

                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').html(copy_from);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').html(copy_to);

                            $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"] ~ .modules-wrapper').first().html(copy_from_modules);
                            $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"] ~ .modules-wrapper').first().html(copy_to_modules);

                            $('.tr[data-id="'+swap_pillar.id+'"] .pillars-wrapper .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"] ~ .modules-wrapper').first().html(copy_from_modules);
                            $('.tr[data-id="'+swap_pillar.id+'"] .pillars-wrapper .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"] ~ .modules-wrapper').first().html(copy_to_modules);

                            var to_pillar_title = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('pillar_title');
                            var to_pillar_status = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('pillar_status');
                            var to_back_text = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('back_text');
                            var to_bullet_1 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_1');
                            var to_bullet_2 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_2');
                            var to_bullet_3 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_3');
                            var to_bullet_4 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_4');
                            var to_auto_unlock = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock');
                            var to_auto_unlock_type = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_type');
                            var to_auto_unlock_pillar_select = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_pillar_select');
                            var to_auto_unlock_time_select = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_time_select');
                            var to_auto_unlock_days = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_days');

                            var from_pillar_title = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('pillar_title');
                            var from_pillar_status = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('pillar_status');
                            var from_back_text = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('back_text');
                            var from_bullet_1 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_1');
                            var from_bullet_2 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_2');
                            var from_bullet_3 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_3');
                            var from_bullet_4 = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_4');
                            var from_auto_unlock = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock');
                            var from_auto_unlock_type = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_type');
                            var from_auto_unlock_pillar_select = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_pillar_select');
                            var from_auto_unlock_time_select = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_time_select');
                            var from_auto_unlock_days = $('.pillars-list .pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_days');

                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('pillar_title',from_pillar_title);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('pillar_status',from_pillar_status);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('back_text',from_back_text);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_1',from_bullet_1);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_2',from_bullet_2);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_3',from_bullet_3);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('bullet_4',from_bullet_4);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock',from_auto_unlock);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_type',from_auto_unlock_type);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_pillar_select',from_auto_unlock_pillar_select);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_time_select',from_auto_unlock_time_select);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number+'"]').attr('auto_unlock_days',from_auto_unlock_days);

                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('pillar_title',to_pillar_title);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('pillar_status',to_pillar_status);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('back_text',to_back_text);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_1',to_bullet_1);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_2',to_bullet_2);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_3',to_bullet_3);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('bullet_4',to_bullet_4);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock',to_auto_unlock);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_type',to_auto_unlock_type);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_pillar_select',to_auto_unlock_pillar_select);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_time_select',to_auto_unlock_time_select);
                            $('.pillar-list-item[data-id="'+swap_pillar.id+'"][data-number="'+swap_pillar.number2+'"]').attr('auto_unlock_days',to_auto_unlock_days);

                            $('.type-sidebar-module.show').removeClass('show');
                            $('.current-pillar-module.show').removeClass('show');
                            $('.pillar-list-item.active').removeClass('active');
                            $('.habit-preloader-wrapper').removeClass("show");
                        })
                        .fail(function (xhr, textStatus, errorThrown) {
                            $('.habit-preloader-wrapper').removeClass("show");
                            alert('Connection error happen, please try again');
                        })
                }

                $('.move-pillar-wrapper').removeClass('show');
            }
            else if (index == 2){

                duplicate_pillar.id = $('.pillar-list-item.active').attr('data-id');
                duplicate_pillar.number = $('.pillar-list-item.active').attr('data-number');

                $('.habit-preloader-wrapper').addClass("show");
                jQuery.post(ajaxurl, duplicate_pillar)
                    .done(function (msg) {

                        $('.pillar-list-item[data-id="'+duplicate_pillar.id+'"][data-number="'+duplicate_pillar.number+'"]')
                            .first().clone().appendTo(".pillars-list");
                        $('.pillars-list .pillar-list-item').last().attr('data-number',msg);
                        $('.pillars-list .pillar-list-item').last().removeClass('active');
                        $('.pillar-list-item[data-id="'+duplicate_pillar.id+'"][data-number="'+duplicate_pillar.number+'"] ~ .modules-wrapper')
                            .first().clone().appendTo(".pillars-list");
                        $('.pillars-list .modules-wrapper').last().find('.module-list-item').attr('data-number',msg);

                        $('.pillars-list .pillar-list-item').last().clone()
                            .appendTo('.tab-content-programs div.tr[data-id="'+duplicate_pillar.id+'"] .pillars-wrapper');
                        $('.pillar-list-item[data-id="'+duplicate_pillar.id+'"][data-number="'+duplicate_pillar.number+'"] ~ .modules-wrapper')
                            .first().clone()
                            .appendTo('.tab-content-programs div.tr[data-id="'+duplicate_pillar.id+'"] .pillars-wrapper');
                        $('.tab-content-programs div.tr[data-id="'+duplicate_pillar.id+'"] .pillars-wrapper .modules-wrapper')
                            .last().find('.module-list-item').attr('data-number',msg);

                        $('.pillar-list-item.active').removeClass('active');
                        $('.current-pillar-module.show').removeClass('show');
                        $('.habit-preloader-wrapper').removeClass("show");
                    })
                    .fail(function (xhr, textStatus, errorThrown) {
                        $('.habit-preloader-wrapper').removeClass("show");
                        alert('Connection error happen, please try again');
                    })

                $('.move-pillar-wrapper').removeClass('show');
            }
            else if (index == 3){

                membership_delete_pillar.id = $('.pillar-list-item.active').attr('data-id');
                membership_delete_pillar.number = $('.pillar-list-item.active').attr('data-number');

                $('.habit-preloader-wrapper').addClass("show");
                jQuery.post(ajaxurl, membership_delete_pillar)
                    .done(function (msg) {
                        $('.pillar-list-item' +
                            '[data-id="'+membership_delete_pillar.id+'"]' +
                            '[data-number="'+membership_delete_pillar.number+'"]'
                        ).remove();
                        $('.move-pillar-wrapper').removeClass('show');
                        $('.current-pillar-module.show').removeClass('show');
                        $('.habit-preloader-wrapper').removeClass("show");
                    })
                    .fail(function (xhr, textStatus, errorThrown) {
                        $('.habit-preloader-wrapper').removeClass("show");
                        alert('Connection error happen, please try again');
                    });

                $('.move-pillar-wrapper').removeClass('show');
            }
        });

        var membership_delete_module = {
            action: 'membership_delete_module',
            id: 0,
            number: 0,
            counter: 0
        };

        var duplicate_module = {
            action: 'duplicate_module',
            id: 0,
            number: 0,
            counter: 0
        };

        var swap_module = {
            action: 'swap_module',
            id: 0,
            number: 0,
            counter: 0,
            counter2: 0
        };

        $(document).on('click','.move-module-wrapper a',function(e) {
            e.preventDefault();
            var index = $(this).index();
            if (index == 0){

                var index_item =  $('.modules-list .module-list-item.active').index();

                if (index_item > 0){
                    swap_module.id = $('.modules-list .module-list-item.active').attr('data-id');
                    swap_module.number = $('.modules-list .module-list-item').eq(index_item).attr('data-number');
                    swap_module.counter = $('.modules-list .module-list-item').eq(index_item).attr('data-counter');
                    swap_module.counter2 = $('.modules-list .module-list-item').eq(index_item - 1).attr('data-counter');

                    $('.habit-preloader-wrapper').addClass("show");
                    jQuery.post(ajaxurl, swap_module)
                        .done(function (msg) {

                            var copy_to = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').html();
                            var copy_from = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').html();

                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"][data-counter="'+swap_module.counter+'"]').html(copy_from);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"][data-counter="'+swap_module.counter2+'"]').html(copy_to);

                            var to_module_title = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('module_title');
                            var to_module_status = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('module_status');
                            var to_video_url = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('video_url');
                            var to_description = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('description');
                            var to_transcription = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('transcription');
                            var to_module_links = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('module_links');
                            var to_drip_release = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('drip_release');
                            var to_add_to_progress = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('add_to_progress');
                            var to_drip_release_type = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('drip_release_type');
                            var to_drip_release_module_pillar = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('drip_release_module_pillar');
                            var to_drip_release_module_module = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('drip_release_module_module');
                            var to_drip_release_pillar_pillar = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('drip_release_pillar_pillar');
                            var to_drip_release_time = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('drip_release_time');
                            var to_drip_release_days = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('drip_release_days');

                            var from_module_title = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('module_title');
                            var from_module_status = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('module_status');
                            var from_video_url = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('video_url');
                            var from_description = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('description');
                            var from_transcription = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('transcription');
                            var from_module_links = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('module_links');
                            var from_drip_release = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('drip_release');
                            var from_add_to_progress = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('add_to_progress');
                            var from_drip_release_type = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('drip_release_type');
                            var from_drip_release_module_pillar = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('drip_release_module_pillar');
                            var from_drip_release_module_module = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('drip_release_module_module');
                            var from_drip_release_pillar_pillar = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('drip_release_pillar_pillar');
                            var from_drip_release_time = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('drip_release_time');
                            var from_drip_release_days = $('.modules-list .module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('drip_release_days');

                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('module_title',from_module_title);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('module_status',from_module_status);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('video_url',from_video_url);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('description',from_description);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('transcription',from_transcription);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('module_links',from_module_links);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('drip_release',from_drip_release);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('add_to_progress',from_add_to_progress);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('drip_release_type',from_drip_release_type);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('drip_release_module_pillar',from_drip_release_module_pillar);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('drip_release_module_module',from_drip_release_module_module);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('drip_release_pillar_pillar',from_drip_release_pillar_pillar);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('drip_release_time',from_drip_release_time);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter+'"]').attr('drip_release_days',from_drip_release_days);

                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('module_title',to_module_title);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('module_status',to_module_status);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('video_url',to_video_url);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('description',to_description);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('transcription',to_transcription);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('module_links',to_module_links);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('drip_release',to_drip_release);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('add_to_progress',to_add_to_progress);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('drip_release_type',to_drip_release_type);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('drip_release_module_pillar',to_drip_release_module_pillar);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('drip_release_module_module',to_drip_release_module_module);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('drip_release_pillar_pillar',to_drip_release_pillar_pillar);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('drip_release_time',to_drip_release_time);
                            $('.module-list-item[data-id="'+swap_module.id+'"][data-number="'+swap_module.number+'"]' +
                                '[data-counter="'+swap_module.counter2+'"]').attr('drip_release_days',to_drip_release_days);

                            $('.current-pillar-module.show').removeClass('show');
                            $('.module-list-item.active').removeClass('active');
                            $('.habit-preloader-wrapper').removeClass("show");
                        })
                        .fail(function (xhr, textStatus, errorThrown) {
                            $('.habit-preloader-wrapper').removeClass("show");
                            alert('Connection error happen, please try again');
                        })

                }

                $('.move-module-wrapper').removeClass('show');
            }
            else if (index == 1){

                var index_item = $('.modules-list .module-list-item.active').index();
                var count = $('.modules-list .module-list-item').length;

                if ((index_item + 1) < count) {
                    swap_module.id = $('.modules-list .module-list-item.active').attr('data-id');
                    swap_module.number = $('.modules-list .module-list-item').eq(index_item).attr('data-number');
                    swap_module.counter = $('.modules-list .module-list-item').eq(index_item).attr('data-counter');
                    swap_module.counter2 = $('.modules-list .module-list-item').eq(index_item + 1).attr('data-counter');

                    $('.habit-preloader-wrapper').addClass("show");
                    jQuery.post(ajaxurl, swap_module)
                        .done(function (msg) {

                            var copy_to = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').html();
                            var copy_from = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').html();

                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"][data-counter="' + swap_module.counter + '"]').html(copy_from);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"][data-counter="' + swap_module.counter2 + '"]').html(copy_to);

                            var to_module_title = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('module_title');
                            var to_module_status = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('module_status');
                            var to_video_url = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('video_url');
                            var to_description = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('description');
                            var to_transcription = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('transcription');
                            var to_module_links = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('module_links');
                            var to_drip_release = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('drip_release');
                            var to_add_to_progress = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('add_to_progress');
                            var to_drip_release_type = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('drip_release_type');
                            var to_drip_release_module_pillar = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('drip_release_module_pillar');
                            var to_drip_release_module_module = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('drip_release_module_module');
                            var to_drip_release_pillar_pillar = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('drip_release_pillar_pillar');
                            var to_drip_release_time = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('drip_release_time');
                            var to_drip_release_days = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('drip_release_days');

                            var from_module_title = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('module_title');
                            var from_module_status = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('module_status');
                            var from_video_url = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('video_url');
                            var from_description = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('description');
                            var from_transcription = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('transcription');
                            var from_module_links = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('module_links');
                            var from_drip_release = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('drip_release');
                            var from_add_to_progress = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('add_to_progress');
                            var from_drip_release_type = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('drip_release_type');
                            var from_drip_release_module_pillar = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('drip_release_module_pillar');
                            var from_drip_release_module_module = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('drip_release_module_module');
                            var from_drip_release_pillar_pillar = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('drip_release_pillar_pillar');
                            var from_drip_release_time = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('drip_release_time');
                            var from_drip_release_days = $('.modules-list .module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('drip_release_days');

                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('module_title', from_module_title);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('module_status', from_module_status);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('video_url', from_video_url);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('description', from_description);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('transcription', from_transcription);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('module_links', from_module_links);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('drip_release', from_drip_release);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('add_to_progress', from_add_to_progress);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('drip_release_type', from_drip_release_type);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('drip_release_module_pillar', from_drip_release_module_pillar);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('drip_release_module_module', from_drip_release_module_module);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('drip_release_pillar_pillar', from_drip_release_pillar_pillar);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('drip_release_time', from_drip_release_time);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter + '"]').attr('drip_release_days', from_drip_release_days);

                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('module_title', to_module_title);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('module_status', to_module_status);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('video_url', to_video_url);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('description', to_description);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('transcription', to_transcription);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('module_links', to_module_links);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('drip_release', to_drip_release);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('add_to_progress', to_add_to_progress);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('drip_release_type', to_drip_release_type);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('drip_release_module_pillar', to_drip_release_module_pillar);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('drip_release_module_module', to_drip_release_module_module);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('drip_release_pillar_pillar', to_drip_release_pillar_pillar);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('drip_release_time', to_drip_release_time);
                            $('.module-list-item[data-id="' + swap_module.id + '"][data-number="' + swap_module.number + '"]' +
                                '[data-counter="' + swap_module.counter2 + '"]').attr('drip_release_days', to_drip_release_days);

                            $('.current-pillar-module.show').removeClass('show');
                            $('.module-list-item.active').removeClass('active');
                            $('.habit-preloader-wrapper').removeClass("show");
                        })
                        .fail(function (xhr, textStatus, errorThrown) {
                            $('.habit-preloader-wrapper').removeClass("show");
                            alert('Connection error happen, please try again');
                        })
                }

                $('.move-module-wrapper').removeClass('show');
            }
            else if (index == 2){

                duplicate_module.id = $('.module-list-item.active').attr('data-id');
                duplicate_module.number = $('.module-list-item.active').attr('data-number');
                duplicate_module.counter = $('.module-list-item.active').attr('data-counter');

                $('.habit-preloader-wrapper').addClass("show");
                jQuery.post(ajaxurl, duplicate_module)
                    .done(function (msg) {
                        $('.module-list-item' +
                            '[data-id="'+duplicate_module.id+'"]' +
                            '[data-number="'+duplicate_module.number+'"]' +
                            '[data-counter="'+duplicate_module.counter+'"]'
                        ).first().clone().appendTo(".modules-list");
                        $('.modules-list .module-list-item').last().attr('data-counter',msg);
                        $('.modules-list .module-list-item').last().removeClass('active');

                        $('.modules-list .module-list-item').last().clone().appendTo('.pillars-list .pillar-list-item' +
                            '[data-number="'+duplicate_module.number+'"][data-id="'+duplicate_module.id+'"] ~ .modules-wrapper');

                        $('.modules-list .module-list-item').last().clone().appendTo('.tab-content-programs div.tr[data-id="'+duplicate_module.id+'"] .pillars-wrapper ' +
                            '.pillar-list-item[data-number="'+duplicate_module.number+'"][data-id="'+duplicate_module.id+'"] ~ .modules-wrapper');

                        $('.module-list-item.active').removeClass('active');
                        $('.current-pillar-module.show').removeClass('show');
                        $('.habit-preloader-wrapper').removeClass("show");
                    })
                    .fail(function (xhr, textStatus, errorThrown) {
                        $('.habit-preloader-wrapper').removeClass("show");
                        alert('Connection error happen, please try again');
                    })

                $('.move-module-wrapper').removeClass('show');
            }
            else if (index == 3){

                membership_delete_module.id = $('.module-list-item.active').attr('data-id');
                membership_delete_module.number = $('.module-list-item.active').attr('data-number');
                membership_delete_module.counter = $('.module-list-item.active').attr('data-counter');

                $('.habit-preloader-wrapper').addClass("show");
                jQuery.post(ajaxurl, membership_delete_module)
                    .done(function (msg) {
                        $('.module-list-item' +
                            '[data-id="'+membership_delete_module.id+'"]' +
                            '[data-number="'+membership_delete_module.number+'"]' +
                            '[data-counter="'+membership_delete_module.counter+'"]'
                        ).remove();
                        $('.move-module-wrapper').removeClass('show');
                        $('.current-pillar-module.show').removeClass('show');
                        $('.habit-preloader-wrapper').removeClass("show");
                    })
                    .fail(function (xhr, textStatus, errorThrown) {
                        $('.habit-preloader-wrapper').removeClass("show");
                        alert('Connection error happen, please try again');
                    });

                $('.move-module-wrapper').removeClass('show');
            }
        });


        $(document).on('click','.move-module-link-wrapper a',function(e) {
            e.preventDefault();
            var index = $(this).index();
            var link_number = edit_module_link_number;

            module_link = $('.current-pillar-module.show .module-links-list');

            var title = module_link.find('.module-links-item[data-number="'+link_number+'"] p').text();
            var url = module_link.find('.module-links-item[data-number="'+link_number+'"] a').attr('href');

            if (index == 0){  //edit
                $('.add-module-link-wrapper').attr('data-number',link_number);
                $('.module-link-title').val(title);
                $('.module-link-url').val(url);

                $('.add-module-link-wrapper').addClass('show');

                $('.add-module-link-popup p').eq(0).text('Edit Link');
                $('.save-add-module-link').text('Edit Link');

                $('.move-module-link-wrapper').removeClass('show');
            }
            else if (index == 1){  //duplicate
                number_module_links = module_link.find('.module-links-item').length;
                number_module_links++;
                module_link.append(
                    '<div class="module-links-item" data-number="'+number_module_links+'">' +
                    '<button class="move-module-link">...</button>' +
                    '<p>'+title+'</p>' +
                    '<a href="'+url+'" target="_blank" class="link-icon"></a>' +
                    '</div>'
                );

                $('.move-module-link-wrapper').removeClass('show');
            }
            else if (index == 2){  //up

                var item_index = module_link.find('.module-links-item[data-number="'+link_number+'"]').index();

                if (item_index > 0){
                    var copy_to = module_link.find('.module-links-item').eq(item_index).html();
                    var copy_from = module_link.find('.module-links-item').eq(item_index - 1).html();

                    module_link.find('.module-links-item').eq(item_index).html(copy_from);
                    module_link.find('.module-links-item').eq(item_index - 1).html(copy_to);
                }

                $('.move-module-link-wrapper').removeClass('show');
            }
            else if (index == 3){  //down

                var link_count = module_link.find('.module-links-item').length;
                var item_index = module_link.find('.module-links-item[data-number="'+link_number+'"]').index();

                if (  (item_index + 1) < link_count ){
                    var copy_to = module_link.find('.module-links-item').eq(item_index).html();
                    var copy_from = module_link.find('.module-links-item').eq(item_index + 1).html();

                    module_link.find('.module-links-item').eq(item_index).html(copy_from);
                    module_link.find('.module-links-item').eq(item_index + 1).html(copy_to);
                }

                $('.move-module-link-wrapper').removeClass('show');
            }
            else if (index == 4){  //delete

                module_link.find('.module-links-item[data-number="'+link_number+'"]').remove();
                var new_link_counter = 0;
                module_link.find('.module-links-item').each(function(){
                    new_link_counter++;
                    $(this).attr('data-number',new_link_counter);
                });

                $('.move-module-link-wrapper').removeClass('show');
            }
        });

        var save_pillar = {
            action: 'save_pillar',
            id: 0,
            number: 0,
            title: '',
            status: '',
            back_text: '',
            bullet_1: '',
            bullet_2: '',
            bullet_3: '',
            bullet_4: '',
            auto_unlock: '',
            auto_unlock_type: '',
            auto_unlock_pillar_select: '',
            auto_unlock_time_select: '',
            auto_unlock_days: ''
        };

        $(document).on('click','.save-pillar, .save-pillar-custom',function() {
            save_pillar.id = $('.pillar-list-item.active').attr('data-id');
            save_pillar.number = $('.pillar-list-item.active').attr('data-number');
            var title = $('.current-pillar-module.show .pillar-edit-title').val();
            if (!title){
                title = '';
            }
            var status = $('.current-pillar-module.show .pillar-status').val();
            if (!status){
                status = '';
            }
            var back_text = $('.current-pillar-module.show .pillar-back-text').val();
            if (!back_text){
                back_text = '';
            }
            var bullet_1 = $('.current-pillar-module.show .pillar-bullet-1').val();
            if (!bullet_1){
                bullet_1 = '';
            }
            var bullet_2 = $('.current-pillar-module.show .pillar-bullet-2').val();
            if (!bullet_2){
                bullet_2 = '';
            }
            var bullet_3 = $('.current-pillar-module.show .pillar-bullet-3').val();
            if (!bullet_3){
                bullet_3 = '';
            }
            var bullet_4 = $('.current-pillar-module.show .pillar-bullet-4').val();
            if (!bullet_4){
                bullet_4 = '';
            }
            var auto_unlock_type = $('.current-pillar-module.show .auto-unlock-type').val();
            if (!auto_unlock_type){
                auto_unlock_type = '';
            }
            var auto_unlock_pillar_select = $('.current-pillar-module.show .auto-unlock-pillar').val();
            if (!auto_unlock_pillar_select){
                auto_unlock_pillar_select = '';
            }
            var auto_unlock_time_select = $('.current-pillar-module.show .auto-unlock-time').val();
            if (!auto_unlock_time_select){
                auto_unlock_time_select = '';
            }
            var auto_unlock_days = $('.current-pillar-module.show .auto-unlock-days').val();
            if (!auto_unlock_days){
                auto_unlock_days = '';
            }
            save_pillar.title = title;
            save_pillar.status = status;
            save_pillar.back_text = back_text;
            save_pillar.bullet_1 = bullet_1;
            save_pillar.bullet_2 = bullet_2;
            save_pillar.bullet_3 = bullet_3;
            save_pillar.bullet_4 = bullet_4;
            save_pillar.auto_unlock_type = auto_unlock_type;
            save_pillar.auto_unlock_pillar_select = auto_unlock_pillar_select;
            save_pillar.auto_unlock_time_select = auto_unlock_time_select;
            save_pillar.auto_unlock_days = auto_unlock_days;

            if ($('.current-pillar-module.show .auto_unlock').is(':checked')){
                save_pillar.auto_unlock = 'on';
            }
            else{
                save_pillar.auto_unlock = '';
            }

            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, save_pillar)
                .done(function (msg) {

                    $('.pillar-list-item[data-id="'+save_pillar.id+'"][data-number="'+save_pillar.number+'"] .pillar-list-item-title').text(save_pillar.title);
                    $('.pillar-list-item[data-id="'+save_pillar.id+'"][data-number="'+save_pillar.number+'"]').attr('pillar_title',save_pillar.title);
                    $('.pillar-list-item[data-id="'+save_pillar.id+'"][data-number="'+save_pillar.number+'"]').attr('pillar_status',save_pillar.status);
                    $('.pillar-list-item[data-id="'+save_pillar.id+'"][data-number="'+save_pillar.number+'"]').attr('back_text',save_pillar.back_text);
                    $('.pillar-list-item[data-id="'+save_pillar.id+'"][data-number="'+save_pillar.number+'"]').attr('bullet_1',save_pillar.bullet_1);
                    $('.pillar-list-item[data-id="'+save_pillar.id+'"][data-number="'+save_pillar.number+'"]').attr('bullet_2',save_pillar.bullet_2);
                    $('.pillar-list-item[data-id="'+save_pillar.id+'"][data-number="'+save_pillar.number+'"]').attr('bullet_3',save_pillar.bullet_3);
                    $('.pillar-list-item[data-id="'+save_pillar.id+'"][data-number="'+save_pillar.number+'"]').attr('bullet_4',save_pillar.bullet_4);
                    $('.pillar-list-item[data-id="'+save_pillar.id+'"][data-number="'+save_pillar.number+'"]').attr('auto_unlock',save_pillar.auto_unlock);
                    $('.pillar-list-item[data-id="'+save_pillar.id+'"][data-number="'+save_pillar.number+'"]').attr('auto_unlock_type',save_pillar.auto_unlock_type);
                    $('.pillar-list-item[data-id="'+save_pillar.id+'"][data-number="'+save_pillar.number+'"]').attr('auto_unlock_pillar_select',save_pillar.auto_unlock_pillar_select);
                    $('.pillar-list-item[data-id="'+save_pillar.id+'"][data-number="'+save_pillar.number+'"]').attr('auto_unlock_time_select',save_pillar.auto_unlock_time_select);
                    $('.pillar-list-item[data-id="'+save_pillar.id+'"][data-number="'+save_pillar.number+'"]').attr('auto_unlock_days',save_pillar.auto_unlock_days);

                    $('.habit-preloader-wrapper').removeClass("show");
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })
        });

        var save_module = {
            action: 'save_module',
            id: 0,
            number: 0,
            counter: 0,
            title: '',
            status: '',
            video_url: '',
            description: '',
            transcription: '',
            module_links: [],
            drip_release: '',
            add_to_progress: '',
            drip_release_type: '',
            drip_release_module_pillar: '',
            drip_release_module_module: '',
            drip_release_pillar_pillar: '',
            drip_release_time: '',
            drip_release_days: ''
        };

        $(document).on('click','.save-module, .save-module-custom',function() {

            save_module.id = $('.module-list-item.active').attr('data-id');
            save_module.number = $('.module-list-item.active').attr('data-number');
            save_module.counter = $('.module-list-item.active').attr('data-counter');

            var title = $('.current-pillar-module.show .module-edit-title').val();
            if (!title){
                title = '';
            }
            var status = $('.current-pillar-module.show .module-status').val();
            if (!status){
                status = '';
            }
            var video_url = $('.current-pillar-module.show .module-video-url').val();
            if (!video_url){
                video_url = '';
            }
            var description = $('.current-pillar-module.show .module-description').val();
            if (!description){
                description = '';
            }
            var transcription = $('.current-pillar-module.show .module-transcription').val();
            if (!transcription){
                transcription = '';
            }
            var drip_release_type = $('.current-pillar-module.show .drip-release-type').val();
            if (!drip_release_type){
                drip_release_type = '';
            }
            var drip_release_module_pillar = $('.current-pillar-module.show .drip-release-module-pillar').val();
            if (!drip_release_module_pillar){
                drip_release_module_pillar = '';
            }
            var drip_release_module_module = $('.current-pillar-module.show .drip-release-module-module').val();
            if (!drip_release_module_module){
                drip_release_module_module = '';
            }
            var drip_release_pillar_pillar = $('.current-pillar-module.show .drip-release-pillar-pillar').val();
            if (!drip_release_pillar_pillar){
                drip_release_pillar_pillar = '';
            }
            var drip_release_time = $('.current-pillar-module.show .drip-release-time').val();
            if (!drip_release_time){
                drip_release_time = '';
            }
            var drip_release_days = $('.current-pillar-module.show .drip-release-days').val();
            if (!drip_release_days){
                drip_release_days = '';
            }

            save_module.title = title;
            save_module.status = status;
            save_module.video_url = video_url;
            save_module.description = description;
            save_module.transcription = transcription;
            save_module.drip_release_type = drip_release_type;
            save_module.drip_release_module_pillar = drip_release_module_pillar;
            save_module.drip_release_module_module = drip_release_module_module;
            save_module.drip_release_pillar_pillar = drip_release_pillar_pillar;
            save_module.drip_release_time = drip_release_time;
            save_module.drip_release_days = drip_release_days;

            save_module.module_links = [];
            var module_links = [];
            $('.current-pillar-module.show .module-links-item').each(function(){
                var link_text = $(this).find('p').text();
                var link_url = $(this).find('.link-icon').attr('href');
                var link_item = {
                    'link_text': link_text,
                    'link_url': link_url
                };
                module_links.push(link_item);
            });
            save_module.module_links = module_links;

            if ($('.current-pillar-module.show .drip_release').is(':checked')){
                save_module.drip_release = 'on';
            }
            else{
                save_module.drip_release = '';
            }

            if ($('.current-pillar-module.show .add_to_progress').is(':checked')){
                save_module.add_to_progress = 'on';
            }
            else{
                save_module.add_to_progress = '';
            }

            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, save_module)
                .done(function (msg) {

                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"] ' +
                        '.module-list-item-title').text(save_module.title);
                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"]')
                        .attr('module_title',save_module.title);
                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"]')
                        .attr('module_status',save_module.status);
                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"]')
                        .attr('video_url',save_module.video_url);
                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"]')
                        .attr('description',save_module.description);
                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"]')
                        .attr('transcription',save_module.transcription);
                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"]')
                        .attr('module_links',JSON.stringify(save_module.module_links));
                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"]')
                        .attr('drip_release',save_module.drip_release);
                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"]')
                        .attr('add_to_progress',save_module.add_to_progress);
                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"]')
                        .attr('drip_release_type',save_module.drip_release_type);
                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"]')
                        .attr('drip_release_module_pillar',save_module.drip_release_module_pillar);
                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"]')
                        .attr('drip_release_module_module',save_module.drip_release_module_module);
                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"]')
                        .attr('drip_release_pillar_pillar',save_module.drip_release_pillar_pillar);
                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"]')
                        .attr('drip_release_time',save_module.drip_release_time);
                    $('.module-list-item[data-id="'+save_module.id+'"][data-number="'+save_module.number+'"][data-counter="'+save_module.counter+'"]')
                        .attr('drip_release_days',save_module.drip_release_days);

                    $('.habit-preloader-wrapper').removeClass("show");
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })
        });


        $(document).on('change','.drip_release, .add_to_progress, .auto_unlock',function(){
            if ($(this).is(':checked')){
                $(this).prop('checked',true);
                $(this).attr('checked','checked');
            }
            else{
                $(this).prop('checked',false);
                $(this).removeAttr('checked');
            }
        });

        $(document).on('change','.module-program-select',function(){
            var program_id = $(this).val();
            $(this).parent().find('.module-module-select').html($('.select-program-pillar-module[data-id="'+program_id+'"]').html());
        });

        $(document).on('change','.drip-release-module-pillar',function(){
            $('.current-pillar-module.show .drip-release-module-module').html('');

            var new_val = $('.current-pillar-module.show .drip-release-module-pillar').val();
            var new_val_number = '';
            if ((new_val !== null) && (new_val)){
                new_val_number = new_val.split('_');
                new_val_number = new_val_number[new_val_number.length - 1];
            }

            if (new_val_number){
                $('.pillars-list .pillar-list-item[data-number="'+new_val_number+'"] ~ .modules-wrapper:eq(0) .module-list-item').each(function(){
                    var module_title = $(this).attr('module_title');
                    var id = $(this).attr('data-id');
                    var number = $(this).attr('data-number')
                    var counter = $(this).attr('data-counter');
                    $('.current-pillar-module.show .drip-release-module-module').append(
                        '<option value="id_'+id+'_number_'+number+'_counter_'+counter+'">'+module_title+'</option>'
                    );
                });
            }
        });


        $(document).on('click','.customers-block',function(){
            $('.customers-block.active').removeClass('active')
            $(this).addClass('active');
            var link = $(this).attr('data-link');
            $('.customers-list.active').removeClass('active');
            $('.customers-list-'+link).addClass('active');
        });

        $(document).on('change','.failed-checker',function(){
            var checked = false;
            $('.failed-checker').each(function(){
                if ($(this).is(':checked')){
                    checked = true;
                    return false;
                }
            });
            if (checked){
                $('.retry-charge, .delete-failed').addClass('active');
            }
            else{
                $('.retry-charge, .delete-failed').removeClass('active');
            }
        });

        $(document).on('click','.retry-charge',function(){
            $('.failed-checker').removeAttr('checked');
            $('.failed-checker').prop('checked',false);
        });

        $(document).on('click','.delete-failed',function(){
            $('.failed-checker').each(function(){
                if ($(this).is(':checked')){
                    $(this).parent().parent().remove();
                }
            });
            $('.retry-charge, .delete-failed').removeClass('active');
            var count = $('.failed-checker').length;
            $('.customers-block-failed h2').text(count);
            if (count == 0){
                $('.customers-block-failed.have-items').removeClass('have-items');
            }
        });


        $(document).on('keyup','.search-customers-input',function(){
            var search_text = $(this).val().toLowerCase();
            if (search_text == ''){
                $('.customers-list-find .tbody .tr').removeClass('hidden');
            }
            else{
                $('.customers-list-find .tbody .tr').addClass('hidden');
            }
            $('.customers-list-find .tbody .tr').each(function(){
                var name = $(this).find('.td').eq(0).text();
                var email = $(this).find('.td').eq(1).text();
                if ((name.toLowerCase().indexOf(search_text) >= 0) || (email.toLowerCase().indexOf(search_text) >= 0)){
                    $(this).removeClass('hidden');
                }
            });

        });

        $(document).on('change','.when-select',function(){
            $(this).parent().addClass('active');
        });

        var myDrop_1 = new drop({
            selector: '.who-select-wrapper'
        });

        var myDrop_2 = new drop({
            selector: '.what-select-wrapper'
        });

        var myDrop_3 = new drop({
            selector: '.memberships-details-select'
        });

        var last_payment_template = [];
        $(document).on('click','.memberships-details-save-delete-template',function(e){
            //last_payment_template = $(this);
            e.preventDefault();
            e.stopPropagation();
            $('.payment-template-wrapper').css({'left':($(this).offset().left ) + 'px','top':($(this).offset().top + 14) + 'px'});
            $('.payment-template-wrapper').addClass('show');
        });


        $(document).on('click','.payment-template-wrapper a',function(e) {
            e.preventDefault();
            var index = $(this).index();
            if (index == 0) {
                $('.save-as-template-wrapper').addClass('show');
                $('.payment-template-wrapper').removeClass('show');
            }
            else if(index == 1){

                membership_delete_item.id = $('.memberships-details-template').val();
                $('.habit-preloader-wrapper').addClass("show");
                jQuery.post(ajaxurl, membership_delete_item)
                    .done(function (msg) {
                        location.reload();
                    })
                    .fail(function (xhr, textStatus, errorThrown) {
                        $('.habit-preloader-wrapper').removeClass("show");
                        alert('Connection error happen, please try again');
                    })

                $('.payment-template-wrapper').removeClass('show');
            }
        });


        var payment_once = 0;
        var payment_membership_ids = [];

        $(document).on('click','.confirm-memberships-details:not(.disabled):not(.disabled-stripe-success)',function() {
            payment_once = parseInt(parseFloat($('.payment-due-input').val() * 100));

            payment_membership_ids = [];
            var products_titles = '';
            $('.memberships-details-left .drop-display .item:not(.hide):not(.remove)').each(function(){
                payment_membership_ids.push($(this).find('.material-icons').attr('data-id'));
                products_titles = products_titles + $(this).text().slice(0,-1) + ' ';
            });

            if ($('#payment_plan').is(':checked')){
                $('.order-summary-plan-wrapper').addClass('show');
            }
            else{
                $('.order-summary-plan-wrapper').removeClass('show');
            }

            if ($('#subscription_on').is(':checked')){
                $('.order-summary-subscription-wrapper').addClass('show');
            }
            else{
                $('.order-summary-subscription-wrapper').removeClass('show');
            }

            $('.order-summary-product-title').text(products_titles);
            $('.order-summary-subscription-title').text($('.memberships-details-subscription option:selected').text());

            ///////////////////////////////////////

            var payment_plan = parseFloat($('.payment-plan-price-input').val());
            var payment_plan_numbers = parseInt($('.number-of-cycles-input').val());

            $('.order-summary-payment-once-price').text(payment_once / 100);
            $('.order-summary-repeat-numbers').text(payment_plan_numbers);
            if ($('.billing-period').val() !== 'custom'){
                $('.order-summary-repeat-period').text(' x ' + $('.billing-period').val() + ' days');
            }
            else{
                $('.order-summary-repeat-period').text(' x ' + $('.set-custom-days-input').val() + ' days');
            }
            $('.order-summary-payment-plan-price').text(payment_plan);
            $('.order-summary-payment-plan-starting-on').text($('.starting-on option:selected').text());

            $('.order-summary-trial-numbers').text($('.memberships-details-period-days').val());
            $('.order-summary-trial-period').text($('.memberships-details-period-type').val());

            if ($('#payment_plan').is(':checked')){
                $('.order-summary-total-price').text(payment_once / 100 + payment_plan * payment_plan_numbers);
            }
            else{
                $('.order-summary-total-price').text(payment_once / 100);
            }

            $('.customer-details-wrapper').removeClass('hidden');
        });

        var stripe_make_payment = {
            action: 'stripe_make_payment',
            amount: 0,

            future_on: '',
            future_price: 0,
            future_cycles: 0,
            future_period_days: 0,
            future_start_on: '',

            subscription_on: '',
            subscription_id: '',
            include_trial_on: '',
            trial_period_number: '',
            trial_period_type: '',

            admin_id: <?php echo get_current_user_id(); ?>,

            membership_ids: [],
            first_name: '',
            last_name: '',
            email: '',
            phone: '',
            card_number: '',
            card_month: '',
            card_year: '',
            card_csv: ''
        };

        $(document).on('click','.process-payment',function() {
            var error = false;

            var first_name = $('.customer-first-name').val();
            var last_name = $('.customer-last-name').val();
            var email = $('.customer-email').val();
            var phone = $('.customer-phone').val();

            var card_number = $('.customer-card-number').val().replace(/\D/g, '');
            var card_month = $('.customer-expiry-month').val();
            var card_year = $('.customer-expiry-year').val();
            var card_csv = $('.customer-csv').val();

            if ($('#payment_plan').is(':checked')){
                stripe_make_payment.future_on = 'on';
            }
            else{
                stripe_make_payment.future_on = '';
            }

            if ($('#subscription_on').is(':checked')){
                stripe_make_payment.subscription_on = 'on';
            }
            else{
                stripe_make_payment.subscription_on = '';
            }

            if ($('#include_trial').is(':checked')){
                stripe_make_payment.include_trial_on = 'on';
            }
            else{
                stripe_make_payment.include_trial_on = '';
            }

            stripe_make_payment.amount = payment_once;
            stripe_make_payment.membership_ids = payment_membership_ids;

            stripe_make_payment.first_name = first_name;
            stripe_make_payment.last_name = last_name;
            stripe_make_payment.email = email;
            stripe_make_payment.phone = phone;

            stripe_make_payment.card_number = card_number;
            stripe_make_payment.card_month = card_month;
            stripe_make_payment.card_year = parseInt(card_year) + 2000;
            stripe_make_payment.card_csv = card_csv;

            if (stripe_make_payment.future_on == 'on'){
                var future_price = $('.payment-plan-price-input').val();
                var future_cycles = $('.number-of-cycles-input').val();
                if ($('.billing-period').val() !== 'custom'){
                    var future_period_days = $('.billing-period').val();
                }
                else{
                    var future_period_days = $('.set-custom-days-input').val();
                }
                var future_start_on = $('.starting-on').val();
            }
            else{
                var future_price = 0;
                var future_cycles = 0;
                var future_period_days = 0;
                var future_start_on = '';
            }

            stripe_make_payment.future_price = future_price;
            stripe_make_payment.future_cycles = future_cycles;
            stripe_make_payment.future_period_days = future_period_days;
            stripe_make_payment.future_start_on = future_start_on;

            if (stripe_make_payment.subscription_on == 'on'){
                var subscription_id = $('.memberships-details-subscription').val();
                var trial_period_number = $('.memberships-details-period-days').val();
                var trial_period_type = $('.memberships-details-period-type').val();
            }
            else{
                var subscription_id = '';
                var trial_period_number = '';
                var trial_period_type = '';
            }

            stripe_make_payment.subscription_id = subscription_id;
            stripe_make_payment.trial_period_number = trial_period_number;
            stripe_make_payment.trial_period_type = trial_period_type;

            if ((first_name == '') || (last_name == '')){
                $('.error-field-missing-name').addClass('show');
                error = true;
            }
            if (email == ''){
                $('.error-field-missing-email').addClass('show');
                error = true;
            }
            if (phone == ''){
                $('.error-field-missing-phone').addClass('show');
                error = true;
            }
            if (card_number == ''){
                $('.error-field-missing-card-number').addClass('show');
                error = true;
            }
            if ((card_month == '') || (card_year == '')){
                $('.error-field-missing-expiry').addClass('show');
                error = true;
            }
            if (card_csv == ''){
                $('.error-field-missing-csv').addClass('show');
                error = true;
            }

            if (card_number.length < 15){
                $('.error-invalid-card-number').addClass('show');
                error = true;
            }
            if ((card_month.length < 2) || (parseInt(card_month) > 12) || (parseInt(card_month) == 0)){
                $('.error-invalid-expiry').addClass('show');
                error = true;
            }
            if ((card_year.length < 2) || (parseInt(card_year) < parseInt($('.current-year').text()))){
                $('.error-invalid-expiry').addClass('show');
                error = true;
            }
            if (card_csv.length < 3){
                $('.error-invalid-csv').addClass('show');
                error = true;
            }

            console.log(stripe_make_payment);

            if (!error){
                $('.habit-preloader-wrapper').addClass("show");
                jQuery.post(ajaxurl, stripe_make_payment)
                    .done(function (msg) {

                        if (msg == ''){
                            $('.error-from-stripe').removeClass('show');
                            $('.error-from-stripe span').text('');
                            $('.customer-details-wrapper').addClass('processed');
                            $('.confirm-memberships-details').addClass('disabled-stripe-success');
                        }
                        else{
                            $('.error-from-stripe').addClass('show');
                            $('.error-from-stripe span').text(msg);
                        }

                        //$('.customer-details-wrapper').addClass('processed');

                        $('.habit-preloader-wrapper').removeClass("show");
                    })
                    .fail(function (xhr, textStatus, errorThrown) {
                        $('.habit-preloader-wrapper').removeClass("show");
                        alert('Connection error happen, please try again');
                    })
            }

        });

        $(document).on('keyup','.customer-first-name, .customer-last-name',function() {
            $('.error-field-missing-name').removeClass('show');
        });

        $(document).on('keyup','.customer-email',function() {
            $('.error-field-missing-email').removeClass('show');
        });

        $(document).on('keyup','.customer-phone',function() {
            $('.error-field-missing-phone').removeClass('show');
        });

        $(document).on('keyup','.customer-card-number',function() {
            $('.error-field-missing-card-number').removeClass('show');
            $('.error-invalid-card-number').removeClass('show');
        });

        $(document).on('keyup','.customer-expiry-month, .customer-expiry-year',function() {
            $('.error-field-missing-expiry').removeClass('show');
            $('.error-invalid-expiry').removeClass('show');
        });

        $(document).on('keyup','.customer-csv',function() {
            $('.error-field-missing-csv').removeClass('show');
            $('.error-invalid-csv').removeClass('show');
        });

        $(document).on('click','.new-payment',function() {
            $(
                '.customer-first-name, ' +
                '.customer-last-name, ' +
                '.customer-email, ' +
                '.customer-phone, ' +
                '.customer-card-number, ' +
                '.customer-expiry-month, ' +
                '.customer-expiry-year, ' +
                '.customer-csv'
            ).val('');
            $('.confirm-memberships-details').removeClass('disabled-stripe-success');
            $('.customer-details-wrapper.processed').removeClass('processed');
            $('.customer-details-wrapper').addClass('hidden');
        });

        $(document).on('click','.save-as-template-wrapper',function() {
            $('.save-as-template-wrapper').removeClass('show');
        });

        $(document).on('click','.save-as-template-popup',function(e) {
            e.stopPropagation();
        });

        var save_memberships_template = {
            action: 'save_memberships_template',
            title: '',
            membership_ids: [],
            subscription_id: 0,
            payment_once: '',
            payment_plan_on: '',
            payment_plan_price: '',
            payment_plan_number_cycles: '',
            payment_plan_period: '',
            payment_plan_starting_on: '',
            subscription_on: '',
            include_trial: '',
            trial_period: '',
            trial_period_type: ''
        };

        $(document).on('click','.save-template',function() {
            save_memberships_template.title = '';
            save_memberships_template.membership_ids = [];
            save_memberships_template.subscription_id = 0;
            save_memberships_template.payment_once = '';
            save_memberships_template.payment_plan_on = '';
            save_memberships_template.payment_plan_price = '';
            save_memberships_template.payment_plan_number_cycles = '';
            save_memberships_template.payment_plan_period = '';
            save_memberships_template.payment_plan_starting_on = '';
            save_memberships_template.subscription_on = '';
            save_memberships_template.include_trial = '';
            save_memberships_template.trial_period = '';
            save_memberships_template.trial_period_type = '';

            payment_membership_ids = [];
            $('.memberships-details-left .drop-display .item:not(.hide):not(.remove)').each(function(){
                payment_membership_ids.push($(this).find('.material-icons').attr('data-id'));
            });

            save_memberships_template.title  = $('.save-template-name').val();

            save_memberships_template.membership_ids = payment_membership_ids;
            save_memberships_template.payment_once = $('.payment-due-input').val();

            if ($('#payment_plan').is(':checked')){
                save_memberships_template.payment_plan_on = 'on';
                save_memberships_template.payment_plan_price = $('.payment-plan-price-input').val();
                save_memberships_template.payment_plan_number_cycles = $('.number-of-cycles-input').val();
                if ($('.billing-period').val() !== 'custom'){
                    save_memberships_template.payment_plan_period = $('.billing-period').val();
                }
                else{
                    save_memberships_template.payment_plan_period = $('.set-custom-days-input').val();
                }
                save_memberships_template.payment_plan_starting_on = $('.starting-on').val();
            }

            if ($('#subscription_on').is(':checked')){
                save_memberships_template.subscription_on = 'on';
                save_memberships_template.subscription_id = $('.memberships-details-subscription').val();

                if ($('#include_trial').is(':checked')){
                    save_memberships_template.include_trial = 'on';
                }

                save_memberships_template.trial_period = $('.memberships-details-period-days').val();
                save_memberships_template.trial_period_type = $('.memberships-details-period-type').val();
            }

            console.log(save_memberships_template);

            $('.habit-preloader-wrapper').addClass("show");
            jQuery.post(ajaxurl, save_memberships_template)
                .done(function (msg) {
                    location.reload();
                    //$('.habit-preloader-wrapper').removeClass("show");
                    //$('.save-as-template-wrapper').removeClass('show');
                })
                .fail(function (xhr, textStatus, errorThrown) {
                    $('.habit-preloader-wrapper').removeClass("show");
                    alert('Connection error happen, please try again');
                })

        });

        $(document).on('click','.cancel-save-template',function() {
            $('.save-as-template-wrapper').removeClass('show');
        });

        $(document).on('click','.open-file',function() {
            $('.customer-file-wrapper').addClass('show');

            var name = $(this).closest('.tr').attr('data-name');
            var email = $(this).closest('.tr').attr('data-email');
            var phone = $(this).closest('.tr').attr('data-phone');
            var card_number = $(this).closest('.tr').attr('data-card-number');
            var status = $(this).closest('.tr').attr('data-status');

            $('.user-info-name').text(name);
            $('.user-info-email').text(email);
            $('.user-info-phone').text(phone);
            $('.user-info-card-number').text(card_number);
            $('.user-info-status').text(status);

            if (status == 'active'){
                $('.user-info-status').addClass('active');
                $('.user-info-status').removeClass('inactive');
            }
            else{
                $('.user-info-status').removeClass('active');
                $('.user-info-status').addClass('inactive');
            }


            $('.active-memberships-wrapper').html('');

            $('.active-membership-item[data-email="'+email+'"]').each(function(){
                $('.active-memberships-wrapper').append($(this).html());
            });


            $('.past-payments-wrapper').html('');
            $('.past-payment-item[data-email="'+email+'"]').each(function(){
                $('.past-payments-wrapper').append($(this).html());
            });

        });

        $(document).on('click','.back-from-file',function(e) {
            e.preventDefault();
            $('.customer-file-wrapper').removeClass('show');
        });

        var last_active_memberships = [];
        $(document).on('click','.active-memberships-actions',function(e){
            //last_active_memberships = $(this);
            e.preventDefault();
            e.stopPropagation();
            $('.active-memberships-actions-wrapper').css({'left':($(this).offset().left ) + 'px','top':($(this).offset().top + 14) + 'px'});
            $('.active-memberships-actions-wrapper').addClass('show');
        });

        $(document).on('click','.active-memberships-actions-wrapper a',function(e) {
            e.preventDefault();
            var index = $(this).index();
            if (index == 0) {
                $('.active-memberships-actions-wrapper').removeClass('show');
            }
            else if(index == 1){
                $('.active-memberships-actions-wrapper').removeClass('show');
            }
            else if(index == 2){
                $('.active-memberships-actions-wrapper').removeClass('show');
            }
        });

        var last_active_memberships = [];
        $(document).on('click','.past-payments-actions',function(e){
            //last_active_memberships = $(this);
            e.preventDefault();
            e.stopPropagation();
            //$('.past-payments-actions-wrapper').css({'left':($(this).offset().left ) + 'px','top':($(this).offset().top + 14) + 'px'});
            //$('.past-payments-actions-wrapper').addClass('show');
        });

        $(document).on('click','.past-payments-actions-wrapper a',function(e) {
            e.preventDefault();
            var index = $(this).index();
            if (index == 0) {
                $('.past-payments-actions-wrapper').removeClass('show');
            }
            else if(index == 1){
                $('.past-payments-actions-wrapper').removeClass('show');
            }
            else if(index == 2){
                $('.past-payments-actions-wrapper').removeClass('show');
            }
        });


        $(document).on('keyup','.payment-due-input, .payment-plan-price-input, .number-of-cycles-input',function() {
            if ((parseFloat($('.payment-due-input').val()) >= 0.5) && ($('.memberships-details-left .drop-display .item:not(.hide):not(.remove)').length > 0)){
                if ($('#payment_plan').is(':checked')){
                    if ((parseFloat($('.payment-plan-price-input').val()) >= 0.5) && ($('.number-of-cycles-input').val() >= 1)){
                        $('.confirm-memberships-details').removeClass('disabled');
                    }
                    else{
                        $('.confirm-memberships-details').addClass('disabled');
                    }
                }
                else{
                    $('.confirm-memberships-details').removeClass('disabled');
                }
            }
            else{
                $('.confirm-memberships-details').addClass('disabled');
            }
        });



        $(document).on('DOMSubtreeModified','.memberships-details-left .drop-display',function() {
            if (
                (parseFloat($('.payment-due-input').val()) >= 0.5) && ($('.memberships-details-left .drop-display .item:not(.hide):not(.remove)').length > 0)){
                if ($('#payment_plan').is(':checked')){
                    if ((parseFloat($('.payment-plan-price-input').val()) >= 0.5) && ($('.number-of-cycles-input').val() >= 1)){
                        $('.confirm-memberships-details').removeClass('disabled');
                    }
                    else{
                        $('.confirm-memberships-details').addClass('disabled');
                    }
                }
                else{
                    $('.confirm-memberships-details').removeClass('disabled');
                }
            }
            else{
                $('.confirm-memberships-details').addClass('disabled');
            }
        });

        $(document).on('change','#payment_plan',function() {
            if ($(this).is(':checked')){
                $('.product-plan-wrapper').addClass('show');
            }
            else{
                $('.product-plan-wrapper').removeClass('show');
            }

            if ((parseFloat($('.payment-due-input').val()) >= 0.5) && ($('.memberships-details-left .drop-display .item:not(.hide):not(.remove)').length > 0)){
                if ($('#payment_plan').is(':checked')){
                    if ((parseFloat($('.payment-plan-price-input').val()) >= 0.5) && ($('.number-of-cycles-input').val() >= 1)){
                        $('.confirm-memberships-details').removeClass('disabled');
                    }
                    else{
                        $('.confirm-memberships-details').addClass('disabled');
                    }
                }
                else{
                    $('.confirm-memberships-details').removeClass('disabled');
                }
            }
            else{
                $('.confirm-memberships-details').addClass('disabled');
            }
        });

        $(document).on('change','#subscription_on',function() {
            if ($(this).is(':checked')){
                $('.subscription-plan-wrapper').addClass('show');
            }
            else{
                $('.subscription-plan-wrapper').removeClass('show');
            }
        });

        $(document).on('change','.billing-period',function() {
            if ($('.billing-period').val() == 'custom'){
                $('.set-custom-days').addClass('show');
            }
            else{
                $('.set-custom-days').removeClass('show');
            }
        });

        $(document).on('change','.memberships-details-template', function() {
            var selected_memberships = [];

            var selected_template_id = $(this).val();
            var membership_ids = [];
            membership_ids = $('.membership-template-item[data-id="'+selected_template_id+'"]').attr('data-membership_ids').split(',');

            $('.memberships-details-select option').each(function () {
                $(this).removeAttr('selected', 'selected');
                $(this).prop('selected', false);
            });

            membership_ids.forEach(function(eee){
                $('.memberships-details-select option[value="'+eee+'"]').attr('selected', 'selected');
                $('.memberships-details-select option[value="'+eee+'"]').prop('selected', true);
            });

            $('.memberships-details-select option').each(function () {
                if ($(this).is(':selected')) {
                    selected_memberships.push($(this).index());
                }
            });

            $('.memberships-details-select').clone().appendTo('.memberships-details-select-wrapper');

            $('.memberships-details-select-wrapper .drop').remove();

            var myDrop_3 = new drop({
                selector: '.memberships-details-select',
                preselected: selected_memberships
            });

            $('.payment-due-input').val($('.membership-template-item[data-id="'+selected_template_id+'"]').attr('data-payment_once'));
            $('.memberships-details-subscription').val($('.membership-template-item[data-id="'+selected_template_id+'"]').attr('data-subscription_id'));

            if ($('.membership-template-item[data-id="'+selected_template_id+'"]').attr('data-payment_plan_on') == 'on'){
                $('#payment_plan').attr('checked','checked');
                $('#payment_plan').prop('checked',true);
                $('.product-plan-wrapper').addClass('show');
            }
            else{
                $('#payment_plan').removeAttr('checked');
                $('#payment_plan').prop('checked',false);
                $('.product-plan-wrapper').removeClass('show');
            }


            $('.payment-plan-price-input').val($('.membership-template-item[data-id="'+selected_template_id+'"]').attr('data-payment_plan_price'));
            $('.number-of-cycles-input').val($('.membership-template-item[data-id="'+selected_template_id+'"]').attr('data-payment_plan_number_cycles'));
            $('.starting-on').val($('.membership-template-item[data-id="'+selected_template_id+'"]').attr('data-payment_plan_starting_on'));

            var plan_period = $('.membership-template-item[data-id="'+selected_template_id+'"]').attr('data-payment_plan_period');

            if ((plan_period !== '7') && (plan_period !== '14') && (plan_period !== '30') && (plan_period !== '')){
                $('.billing-period').val('custom');
                $('.set-custom-days').addClass('show');
                $('.set-custom-days-input').val(plan_period);
            }
            else{
                $('.billing-period').val(plan_period);
                $('.set-custom-days').removeClass('show');
            }

            if ($('.membership-template-item[data-id="'+selected_template_id+'"]').attr('data-subscription_on') == 'on'){
                $('#subscription_on').attr('checked','checked');
                $('#subscription_on').prop('checked',true);
                $('.subscription-plan-wrapper').addClass('show');
            }
            else{
                $('#subscription_on').removeAttr('checked');
                $('#subscription_on').prop('checked',false);
                $('.subscription-plan-wrapper').removeClass('show');
            }

            if ($('.membership-template-item[data-id="'+selected_template_id+'"]').attr('data-include_trial') == 'on'){
                $('#include_trial').attr('checked','checked');
                $('#include_trial').prop('checked',true);
            }
            else{
                $('#include_trial').removeAttr('checked');
                $('#include_trial').prop('checked',false);
            }

            $('.memberships-details-period-days').val($('.membership-template-item[data-id="'+selected_template_id+'"]').attr('data-trial_period'));
            $('.memberships-details-period-type').val($('.membership-template-item[data-id="'+selected_template_id+'"]').attr('data-trial_period_type'));

        });

        $(document).on('click','.memberships-details-add-template',function() {
            location.reload();
        });

        $(document).on('click','.add-new-active-membership',function() {
            $('.tab-content-money .tab-links a[data-link="payments"]').trigger('click');
        });


        $(document).on('click','.when-search',function() {
            var code = $('.when-input').val();
            if ((code == 'Code') || (code == 'code')){

            }
        });



    })(jQuery);
</script>

