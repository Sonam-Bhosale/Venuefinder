<?php include('include/db_connect.php');
$venue_id=$_GET['vid'];
$vendor_id=$_GET['id'];
$sql="select * from tbl_venue tv,tbl_vendor td where tv.venue_id='$venue_id' and td.vendor_id='$vendor_id' and tv.vendor_id='$vendor_id'"; 
		$result=$connect->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
                $id=$row['vendor_id'];
                $vname=$row['name'];
				$name=$row['venue_name'];
				$address=$row['venue_address'];
				$city=$row['city'];	
                $contact=$row['mobile'];
				$email=$row['email'];
                $amount=$row['booking_amt'];
                $view=$row['views'];
                $banner=$row['banner_image'];
                $logo=$row['logo'];
			}
        }
  ?>
<!DOCTYPE html>
<html lang="en-IN" prefix="og: http://ogp.me/ns#"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="Style/js1//cb=gapi.loaded_1" async=""></script><script src="Style/js1/cb=gapi.loaded_0" async=""></script>
<script src="Style/js1/sdk.js.download" async="" crossorigin="anonymous"></script>
<script type="text/javascript" async="" src="Style/js1/ec.js.download"></script>
<script src="Style/js1/1708661419409134" async=""></script>

<link rel="alternate" href="android-app://in.co.weddings.launcher/weddingscoin/m.weddingwire.in/marriage-garden/red-k-velvet-by-kawatra-alipur--e274911">
<title>Review</title> 
<link rel="stylesheet" href="Style/css/base.css"> 
<link rel="icon" type="image/png" sizes="16x16" href="layout/assets/logo.png"> 
 <link rel="stylesheet" href="Style/css/base1.css">
<link rel="stylesheet" href="Style/css/sprite_set_tools_navigation.css">
<script async="" src="Style/js1/fbevents.js.download"></script>
<script async="" defer="" src="Style/js1/beacon.js.download"></script>
<script async="" src="Style/js1/review_files/analytics.js.download"></script>
<script src="Style/js1/js-nossl-sf-sui-20200324-02IN134-1_www_m_-common.js.download"></script>
<script src="Style/js1/opinion_handlers,tools_dash_review,tools,wedding_dash_deals.js.download"></script>
        <style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}</style></head>
<body class="app-logged-review" data-logged-user="">
<div class="review-vendors">
    <div class="review-vendors-cover"  style="background-image: url('Style/images/review3.jpeg')">
        <div class="fullLeftElements" >
                 <p class="fullLeftElements__title" style="color:black">Review your Famous Venue</p>
                <hr class="fullLeftElements__separator">
                <p class="mt15" style="color:black;font-size:18px">Share your experience and help other couples choose their vendors.</p>
          </div>
    </div>
    <div class="review-vendors-right app-realhoneymoon-parent">
        <div class="review-vendors-right-wrapper app-realhoneymoon-parent-container">
            <div class="review-vendors-right-content">
                <div class="review-vendors-header">
                    <i class="icon icon-close fright mr10 pointer app-close-recomendation"></i>
                    <a href="viewvenue.php?id=<?php echo $vendor_id;?>&vid=<?php echo $venue_id;?>"><center><img width="190" class="mb20" src="Style/logo1.png"></center></a>
                    <p class="review-vendors-header-title">Share your experience! Your review helps other couples choose their vendor team.</p>
                    <div class="review-vendors-header-progress">
                        <p class="mb0"><span class="app-number-progress">1</span> of <span class="app-max-steps-progressbar">5</span></p>
                        <span class="review-vendors-header-progress-bar">
                            <span class="app-progress-bar progress" style="width:20%"></span>
                        </span>
                    </div>
                </div>
                <hr class="mb40">
                 <form id="app-review-form" name="frmRecomendaciones" action="controller/process_review.php" method="post">
                    <section class="app-step-form review-vendors-content active" data-step="1">
                        <p class="review-vendors-content-title">Who did you hire for your wedding?</p>
                        <div class="pure-u-2-3">
                                <span class="input-group-line-label">Vendor name</span>
                                <div class="input-group-line">
                                <div class="drop-wrapper app-suggest-vendor-input ">
                                    <input  type="hidden" name="id" value='<?php echo $vendor_id;?>'>
                                    <input  type="hidden" name="vid" value='<?php echo $venue_id;?>'>
                                    <input id="suProvider-default" type="text" name="name" autocomplete="off" class="pure-u-1 app-input-vendor " readonly value="<?php echo $vname;?>">
                                   <span class="input-group-line-label">Venue name</span>
                                    <input id="suProvider-default" type="text" name="venue_name" autocomplete="off" class="pure-u-1 app-input-vendor " readonly value="<?php echo $name;?>">
                                    <small class="color-grey"><?php echo $address;?><br><?php echo $city;?>&nbsp;</small>
                                    <div class="app-suggest-vendor-div-default droplayer droplayer-scroll dnone"></div>
                                            <span class="app-loader-line loader-line input-line ">
                                                
                                            </span>
                                    </div>
                                </div>
                            </div>
                    </section>
                            <section class="app-step-form review-vendors-content" data-step="2" >
                                <p class="review-vendors-content-title app-reviewed-title ">Rate their service based on the following:</p>
                            <div class="pure-g review-vendors-vendor app-recom-vendor-review">
                                <div class="pure-u-1-5">
                                    <img width="100%" src="controller/uploads/logo/<?php echo $logo;?>">
                                </div>
                                <div class="pure-u-4-5 review-vendors-vendor-content">
                                    <p class="review-vendors-vendor-name"><?php echo $name;?></p>
                                    <input  type="hidden" name="id" value='<?php echo $venue_id;?>'>
                                    <small class="color-grey"><?php echo $address;?><br><?php echo $city;?>&nbsp;, Pincode: <?php echo $pincode;?></small>
                                </div>
                            </div>
                        <div class="app-recom-vendor-title"></div>
                        <div class="mt35 mb30 app-set-stars ">
                                    <div class="pure-g app-opinions-main mb10">
                                    <div class="pure-u-1-3 flex-va-center">
                                        <i class="pure-u icon-tools icon-left icon-tools-info review-vendors-stars-tooltip">
                                            <span>Your vendor's ability to pay attention to details and follow through on their contract goes a long way in making the wedding one to remember. Please rate your vendor based on the quality of its product or service.</span>
                                        </i>
                                        <span class="strong">Quality of service</span>
                                    </div>
                                    <div class="pure-u flex-va-center mr20">
                                        <div class="app-container-stars content-opinion-stars">
                                            <input type="hidden" autocomplete="off" class="app-star-input-rating icon-tools-star-large" name="val_quality" value="">
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large" name="val_quality" data-name=" Poor" data-rating="1" data-color="#BABABA"><img src="Style/images/star.png" width="12px" height="15px" alt="Poor"/></span>
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large"  name="val_quality" data-name="Below Good" data-rating="2" data-color="#F5C357"><img src="Style/images/star.png" width="13px" height="15px" alt="Below Good"/></span>
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large"  name="val_quality" data-name="Good" data-rating="3" data-color="#FFAC5A"><img src="Style/images/star.png" width="14px" height="15px" alt="Good"/></span>
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large"  name="val_quality" data-name="Above Good" data-rating="4" data-color="#C1D759"><img src="Style/images/star.png" width="15px" height="15px" alt="Above Good"/></span>
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large" name="val_quality" data-name="Excellent" data-rating="5" data-color="#48964D"><img src="Style/images/star.png" width="16px" height="15px" alt="Excellent"/></span>
                                       </div>
                                    </div>
                                    <div class="pure-u text-center">
                                                            <div class="app-container-opinion-text review-vendors-stars-text fright" style="opacity: 1;"></div>
                                                    </div>
                                </div>
                                    <div class="pure-g app-opinions-main mb10">
                                    <div class="pure-u-1-3 flex-va-center">
                                        <i class="pure-u icon-tools icon-left icon-tools-info review-vendors-stars-tooltip">
                                            <span>It is very important to have a responsive vendor. Unresponsive vendors can lead to unnecessary stress during the overall wedding planning process. Please rate your vendor based on its responsiveness before, during and after the wedding.</span>
                                        </i>
                                        <span class="strong">Responsiveness</span>
                                    </div>
                                    <div class="pure-u flex-va-center mr20">
                                        <div class="app-container-stars content-opinion-stars">
                                            <input type="hidden" autocomplete="off" class="app-star-input-rating icon-tools-star-large" name="val_response" value="">
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large"  name="val_response" data-name="Poor" data-rating="1" data-color="#BABABA"><img src="Style/images/star.png" width="12px" height="15px" alt="Poor"/></span>
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large"  name="val_response" data-name="Below Good" data-rating="2" data-color="#F5C357"><img src="Style/images/star.png" width="13px" height="15px" alt="Below Good"/></span>
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large"  name="val_response" data-name="Good" data-rating="3" data-color="#FFAC5A"><img src="Style/images/star.png" width="14px" height="15px" alt="Good"/></span>
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large"   name="val_response" data-name="Above Good" data-rating="4" data-color="#C1D759"><img src="Style/images/star.png" width="15px" height="15px" alt="Above Good"/></span>
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large"  name="val_response" data-name="Excellent" data-rating="5" data-color="#48964D"><img src="Style/images/star.png" width="16px" height="15px" alt="Excellent"/></span>
                                                            </div>
                                    </div>
                                    <div class="pure-u text-center">
                                                            <div class="app-container-opinion-text review-vendors-stars-text fright" style="opacity: 1;"></div>
                                                    </div>
                                </div>
                                   
                                    <div class="pure-g app-opinions-main mb10">
                                    <div class="pure-u-1-3 flex-va-center">
                                        <i class="pure-u icon-tools icon-left icon-tools-info review-vendors-stars-tooltip">
                                            <span>Please rate your vendor based on the value you received for the amount spent. Was this vendor worth the money, and did you get what you paid for?</span>
                                        </i>
                                        <span class="strong">Value</span>
                                    </div>
                                    <div class="pure-u flex-va-center mr20">
                                        <div class="app-container-stars content-opinion-stars">
                                            <input type="hidden" autocomplete="off" class="app-star-input-rating icon-tools-star-large" name="val_value" value="">
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large" name="val_value" data-name="Poor" data-rating="1" data-color="#BABABA"><img src="Style/images/star.png" width="12px" height="15px" alt="Poor"/></span>
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large" name="val_value" data-name="Below Good" data-rating="2" data-color="#F5C357"><img src="Style/images/star.png" width="13px" height="15px" alt="Below Good"/></span>
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large" name="val_value" data-name="Good" data-rating="3" data-color="#FFAC5A"><img src="Style/images/star.png" width="14px" height="15px" alt="Good"/></span>
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large" name="val_value" data-name="Above Good" data-rating="4" data-color="#C1D759"><img src="Style/images/star.png" width="15px" height="15px" alt="Above Good"/></span>
                                                                    <span class="app-star-item pointer icon-tools icon-tools-star-large" name="val_value" data-name="Excellent" data-rating="5" data-color="#48964D"><img src="Style/images/star.png" width="16px" height="15px" alt="Excellent"/></span>
                                        </div>
                                    </div>
                                        <div class="pure-u text-center">
                                                            <div class="app-container-opinion-text review-vendors-stars-text fright" style="opacity: 1;"></div>
                                        </div>
                                </div>
                                <div class="mt20">
                                <div class="app-input-msg-error form-error dnone">
                                    <p>Please select a rating for each.</p>
                                </div>
                            </div>
                        </div>
                        <div class="app-already-reviewed dnone">
                            <p class="review-vendors-content-hasOpinion color-grey mt20">You have already reviewed this business. Once we validate the review you will see it on their Storefront.</p>
                        </div>
                            </section>
                            <section class="app-step-form review-vendors-content " data-step="3">
                                <p class="review-vendors-content-title">Would you recommend them to a friend?</p>
                                <div class="pure-u-1 mb30">
                                    <div class="selectSwitch selectSwitch--small">
                                        <input id="recommend_1" class="app-not-icheck" type="radio" name="recommend" value="1" data-msgerror="" data-redesign="redesign" checked="">
                                        <label for="recommend_1" class="selectSwitch__item">Yes</label>
                                        <input id="recommend_2" class="app-not-icheck" type="radio" name="recommend" value="0" data-msgerror="" data-redesign="redesign">
                                        <label for="recommend_2" class="selectSwitch__item">No</label>
                                    </div>
                                </div>
                                <div class="app-toggle-element-switcher mb20">
                                     <div class="pure-u-2-3">
                                            <span class="input-group-line-label">Review Title</span>
                                            <div class="input-group-line">
                                                <input name="title" class="app-input-opinion-title" placeholder="Summarize your experience with this vendor" maxlength="150" data-msgerror="The title should be at least 10 characters." value="">
                                            </div>
                                    </div>
                                    <p>Write at least 30 characters about your experience. Include any details that will help other couples make their hiring decision.</p>
                                    <div class="input-group-line">
                                        <textarea class="app-textarea-opinion review-vendors-content-textarea" rows="5" name="opinion" data-numattempts="0" data-msgerror="You have written less than 30 characters, the minimum for a review about the vendor you are recommending. Add more text."></textarea>
                                        <p class="app-count-textarea input-count">0</p>
                                    </div>
                                </div>
                            </section>
                            <section class="app-step-form review-vendors-content" data-step="4">
                                <p class="review-vendors-content-title">How much did you spend on this vendor?</p>
                                <div class="mt20 mb20">
                                    <span class="review-vendors-content-label">Amount</span>
                                    <div class="pure-u-2-4 relative">
                                        <div class="textfield">
                                            <span class="review-vendors-content-currency textfield__currency textfield__currency--left">  ₹   </span>
                                              <input type="text" class="app-review-price textfield__input textfield__input--large" onkeypress="return isNumberKey1(event)" name="amount" value="" id="amt" placeholder="0">
                                            <span class="textfield__hint" style="display: block;">*Optional</span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="app-step-form review-vendors-content" data-step="5">
                                     <div class="pure-u-2-3">
                                            <span class="input-group-line-label">Name</span>
                                            <div class="input-group-line">
                                                <input class="app-input-opinion-title" placeholder="Enter Your Name" maxlength="150" name="username" value="">
                                            </div>
                                    </div>
                                    <div class="pure-u-2-3">
                                        <span class="input-group-line-label">Share Photo</span>
                                            <div class="input-group-line">
                                            <input type="file" name="photo"   class="pure-u-1" accept=".jpg,.jpeg,.gif,.png" tabindex="-1">
                                            </div>
                                    </div>
                        </section>
             <div id="app-review-info" data-tipo="" data-has-avatar="" data-from="" data-from-email="" data-from-write="" data-is-update="">
                </div>
            </div>
        </div>
        <div class="reviewVendorFooter app-review-footer">
            <div class="reviewVendorFooter__content">
                <span type="button" class="app-step-opinion-contest reviewVendorFooter__back dnone" data-direction="prev">
                <i class="svgIcon svgIcon__angleLeft reviewVendorFooter__iconBack"><svg viewBox="0 0 9 16"><path d="M7.906.137a.5.5 0 01.707.707L1.456 8l7.157 7.156a.5.5 0 01-.707.707L.474 8.433a.502.502 0 01-.232-.466v-.019a.498.498 0 01.231-.38L7.906.138z" fill-rule="nonzero"></path></svg></i>                    Go back                </span>
                <button type="button" class="btnFlat btnFlat--red flex-left-auto app-step-opinion-contest " data-direction="next">Next <i class="svgIcon svgIcon__angleRight "><svg viewBox="0 0 9 16"><path d="M1.344.137l7.432 7.43a.502.502 0 01.232.381v.02a.499.499 0 01-.233.465l-7.431 7.43a.5.5 0 01-.707-.707L7.792 8 .637.844a.5.5 0 01.707-.707z" fill-rule="nonzero"></path></svg></i></button>
                <input type="submit" data-islogged=""  name="btnSend" class="btnFlat btnFlat--red flex-left-auto app-step-opinion-contest-submit dnone" value="Send">
            </div>
        </div>
    </div>
</div>
</form>
<div class="dnone">
 <script async="" src="Style/js1/js"></script>
 </div>
<div></div></div></div>
</body></html>
<script>
        function isNumberKey1(evt)
        {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
         {    
			//document.getElementById('error').innerHTML="This is required only numbers!!";
            alertify.success('This is required only numbers!!');
			return false;
		 }
		 //document.getElementById('error').innerHTML=" ";
		   return true;
        }
</script>