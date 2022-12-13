@extends('layouts.app')

@section('content')
    <div id="product-page" style="text-align: center;">
        <div class="container"
            style="width: 100%;max-width: 1750px;padding: 20px 15px 20px 15px;margin: 0px auto;text-align: center;">
            <div class="row">
                <div class="product-expiry-notify">
                    <p class="col-md-4 col-md-offset-5 col-sm-12 col-xs-12 col-lg-4 col-lg-offset-5 listing-expires">
                        <img class="clock"
                            src="https://vipon.s3.amazonaws.com/img/129184f1f42c155287ea6e56315b49b4a2fd5857a09c2d.png"
                            style="width: 17.2px;margin: 0;padding: 0;" alt="Amazon Coupons">
                        <span id="productExpiry">
                            Listing expires In <b class="minutes">2 days</b> </span>
                        <input type="hidden" name="expiry" value="241272">
                        <input type="hidden" id="is_instant_deal" value="1">
                    </p>
                </div>
                <div class="col-md-4 col-md-offset-1 col-sm-12 col-xs-12 col-lg-4 col-lg-offset-1 pull-left">
                    <div>
                        <div class="left-show-img"
                            style="max-height: 457px;min-height:380px;text-align: center;position: relative;">
                            <img src="https://m.media-amazon.com/images/I/51U-f1pKo5L._AC_.jpg"
                                style="max-height: 458px;margin:0 auto;" class="img-responsive big" alt="Amazon Coupons">
                        </div>
                        <ul class="clearfix list-unstyled list-img">
                            <li class="pull-left"><img src="https://m.media-amazon.com/images/I/51U-f1pKo5L._AC_.jpg"
                                    alt=""></li>
                            <li class="pull-left"><img
                                    src="https://vipon-seller.nyc3.digitaloceanspaces.com/images/4821872897199a702e860a61ee738c0073bd8898241bd4.jpg"
                                    alt=""></li>
                            <li class="pull-left"><img
                                    src="https://vipon-seller.nyc3.digitaloceanspaces.com/images/925979854991e22cc9ac8a9a7474464f7da945f65902de.jpg"
                                    alt=""></li>
                            <li class="pull-left"><img
                                    src="https://vipon-seller.nyc3.digitaloceanspaces.com/images/366501894753dd29a7d8890f5514291924fdeb9dcc8984.jpg"
                                    alt=""></li>
                            <li class="pull-left"><img
                                    src="https://vipon-seller.nyc3.digitaloceanspaces.com/images/65482557019a0ed3ab3c2abb2e15bfdc2dee03c9801dd8.jpg"
                                    alt=""></li>
                            <li class="pull-left"><img
                                    src="https://vipon-seller.nyc3.digitaloceanspaces.com/images/8067627a20f2e774546bc9f6fc6d185eb5fa166de2344d.jpg"
                                    alt=""></li>
                        </ul>
                        <ul class="list-unstyled" style="margin-top: 4px;margin-left: 10px;margin-bottom: 0;">
                            <li>
                                <a href="/product/open-amazon?id=9816402&amp;event_type=search&amp;position=0"
                                    onclick="bing_open_in_amazon();"
                                    style="text-decoration: none;line-height: 28px;width:140px;text-align:center;display: inline-block;color: #69e6ec;border: 1px solid #69e6ec;font-size: 14px;"
                                    target="_blank">Open in Amazon</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                    <div class="product-info">
                        <p class="product-title">
                            <span class="product-activity-outer">
                                <span class="product-activity-img"
                                    style="background:url(../../../images/activity_lable_left.png)no-repeat center /100% 100%"></span>
                                <span class="product-activity-bg">Christmas</span>
                                <span class="product-activity-img"
                                    style="background:url(../../../images/activity_lable_right.png)no-repeat center /100% 100%"></span>
                            </span>
                            <span>Christmas Welcome Sign for Front Door, Rustic Round Wood Wreaths, 9 Interchangeable
                                Accessories Seasonal Decoration Hanging Outdoor, Farmhouse, Porch</span>
                        </p>
                        <div class="product-category clearfix">
                            <div class="pull-left">
                                <img class="flag" src="/images/flags/om.png" alt="Amazon Coupons">
                                Home &amp; Kitchen
                            </div>
                            <div class="pull-left" style="height: 17px;width: 1px;background-color: #333333;margin: 0 20px">
                            </div>
                            <p class="shipping pull-left" style="text-align: left">Fulfilled by Amazon</p>

                            <div class="btn-group pull-right" style="position:relative;">
                                <a href="/login">
                                    <span style="text-decoration: none;font-size:16px;margin-top: -2px;width: 21px;"
                                        class="glyphicon iconfont" aria-hidden="true"></span>
                                </a>
                                <div id="reportDropDown" class="panel-collapse collapse " aria-expanded="false">
                                    <div class="collapse-header">
                                        Select Report Reason
                                    </div>
                                    <div class="collapse-body">
                                        <div class="form-group">
                                            <input type="radio" id="purchase" name="report">
                                            <label for="purchase">Code cannot be applied to your purchase</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" id="begun" name="report">
                                            <label for="begun">Code has not yet begun</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" id="expired" name="report">
                                            <label for="expired">Code has expired</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" id="valid" name="report">
                                            <label for="valid">Code is not valid</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" id="advertised" name="report">
                                            <label for="advertised">Price or discount is not as advertised</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" id="gouging" name="report">
                                            <label for="gouging">Price gouging or inflated price</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" id="shipping" name="report">
                                            <label for="shipping">Shipping method is not as advertised</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" id="buy" name="report">
                                            <label for="buy">Product currently unavailable or no link to buy</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" id="other" name="report">
                                            <label for="other">Other</label>
                                            <textarea></textarea>
                                        </div>
                                    </div>
                                    <div class="collapse-footer">
                                        <button data-toggle="collapse" data-target="#reportDropDown" class="collapsed"
                                            aria-expanded="false">Cancel</button>
                                        <button class="report-sumbit">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group pull-right" style="margin-right:30px;margin-top: -2px;">
                                <a href="javascript:;" id="thumbs-up-tips"> <span
                                        style="width:21px;text-decoration: none;font-size:16px;"
                                        class="glyphicon iconfont" onclick="give_a_like(9816402,1,)"
                                        aria-hidden="true"></span><span class="text" style="color:#999;">43</span>
                                </a>
                            </div>
                            <div class="btn-group pull-right" style="margin-top: -4px;margin-right:30px;">
                                <a href="/login" title="Save to my favorites" class="favorites"> <i
                                        style="text-decoration: none;font-size:15px;" class="iconfont"></i> <span
                                        style="color:#999;">2</span></a>
                            </div>
                            <div class="btn-group pull-right" id="comment-top" style="margin-right:30px;color:#999;">
                                <a href="javascript:;"
                                    style="text-decoration: none;display: flex;align-items: flex-end; margin-top: -4px;">
                                    <span style="text-decoration: none;font-size: 16px;width: 21px;height: 20px;"
                                        class="comment-top iconfont" aria-hidden="true"></span> <span
                                        class="comment-number" style="color:#999;">3</span> </a>
                            </div>
                        </div>
                        <p class="product-price">
                            <span>$8.99</span>
                            <s>$17.98</s>
                            <span style="font-size:0 !important;">
                                <span class="product-percent-discount">50%&nbsp;OFF</span>
                            </span>
                        </p>
                        <div class="group-span" data-toggle="modal" data-target="#groupBuy">
                            <div>
                                <span id="groupName">Group Coupon:</span>
                                <span id="groupPrice"></span>
                            </div>
                            <div class="group-share">
                                <span>APP</span>
                                <span>Only</span>
                            </div>
                        </div>
                        <div id="show" class="">
                            <!---->
                        </div>
                        <div class="deal_get request-div">
                            <a class="btn_a request-btn review_now_9816402" style="cursor: pointer;float: left;"
                                id="product-request-btn" href="/login">Get Coupon</a>
                            <div class="st-btn st-last st-remove-label" id="detail-money" data-network="sharethis"
                                style="display: none;margin-top: -7px;">
                                <a href="javascript:void(0)"><img
                                        src="https://vipon.s3.amazonaws.com/img/513030c55c68efa453af77d9df19736841f592bba61fe6.svg"
                                        alt="Amazon Coupons"></a>
                            </div>
                            <div class="sharethis-inline-share-buttons st-center  st-inline-share-buttons st-animated"
                                style="float: left; margin-top: 3px; margin-left: 12px;" id="st-1">
                                <div class="st-btn st-first  st-remove-label" data-network="facebook"
                                    style="display: inline-block;">
                                    <img alt="facebook sharing button"
                                        src="https://platform-cdn.sharethis.com/img/facebook.svg">

                                </div>
                                <div class="st-btn  st-remove-label" data-network="twitter"
                                    style="display: inline-block;">
                                    <img alt="twitter sharing button"
                                        src="https://platform-cdn.sharethis.com/img/twitter.svg">

                                </div>
                                <div class="st-btn  st-remove-label" data-network="pinterest" style="display: none;">
                                    <img alt="pinterest sharing button"
                                        src="https://platform-cdn.sharethis.com/img/pinterest.svg">

                                </div>
                                <div class="st-btn  st-remove-label" data-network="gmail" style="display: none;">
                                    <img alt="gmail sharing button"
                                        src="https://platform-cdn.sharethis.com/img/gmail.svg">

                                </div>
                                <div class="st-btn st-last  st-remove-label" data-network="sharethis"
                                    style="display: inline-block;">
                                    <img alt="sharethis sharing button"
                                        src="https://platform-cdn.sharethis.com/img/sharethis.svg">

                                </div>
                            </div>
                            <div style="clear: both;"></div>
                            <div class="product-notify" style="display: none"></div>
                            <div class="shop_name clearfix " style="padding-top: ">
                                <div class="desc-div">
                                    <p
                                        style="margin-top: 1px;color: #777;font-size: 12px;border: 1px dashed #e5e5e5;padding: 5px; border-left: 0;border-right: 0;">
                                        The descriptions and pictures of products on Vipon are for reference only. Please
                                        fully view the product listing on Amazon before purchasing.</p>
                                    <p class="desc-title">About the product</p>
                                    <ul id="bulletPoint" class="clamp-this-module2" style="padding-left:10px;">
                                        <li>【Attractive Appearance】: The lifelike green Christmas tree leaves are paired
                                            with a delicate and elegant burlap red check bow, which is lush and elegant.
                                            Unique "Welcome" lettering adds an extra artistic touch. Playful and chic, it
                                            brightens the eyes of those in front of you.</li>
                                        <li>【HIGH QUALITY MATERIAL】: Our farmhouse wall decor uses high quality hot melt
                                            glue to stick artificial green plants and decorations on the board. Our products
                                            give people a beautiful enjoyment. The cork material gives the original board a
                                            sense of luxury. Plus 9 interchangeable accessories. This is the perfect choice
                                            for your home decor.</li>
                                        <li>【Exquisite Details】: Our front porch decor adopts magnetic adsorption, which is
                                            easy to replace. The Christmas tree leaves and bows are fastened to the welcome
                                            home sign with binding wire, which is very strong and avoids the problem of easy
                                            falling like other similar products. Create a home that is beautiful and
                                            comfortable to live in.</li>
                                        <li>【Perfect Gift】: The creative wooden plaque is a product to match with other
                                            modern farmhouse and country themed decorations. The welcome sign for front door
                                            can be seen everywhere, not only the first choice for decorating doors and
                                            walls, but also ideal for welcoming friends and family gatherings in front of
                                            the door. The welcome sign complements your home's exterior decor.</li>
                                        <li>【Widely Applicable】: You can easily place our front door welcome garland
                                            anywhere in your home, such as hanging on the front door, front porch, back
                                            door, entrance living room, bedroom , the wall of a gallery, or leaning against
                                            a shelf, etc. Can be placed anywhere in the home.</li>
                                    </ul><span id="showMore2"
                                        style="color: #000;font-weight: 600;display: block;text-decoration: none;cursor: pointer">-More</span>
                                    <p class="desc-title" style="display: none;">Description</p>
                                    <p id="descContent" class="desc-content clamp-this-module" style="display: none;">
                                    </p>
                                    <span id="showMore"
                                        style="color: #000;font-weight: 600;display: block;text-decoration: none;cursor: pointer;display: none;">-More</span>
                                </div>
                            </div>
                        </div>
                        <div class="voucher-div" style="display:none;padding:14px;position: relative;">
                            <div
                                style="display:none;position: absolute;top: 20px;right: 20px;font-size: 24px;color: #666;">
                                ×</div>
                            <div id="show_tips" style="display:block;">
                                <div style="postion:center;">
                                    <div style="color:#3fc5cb;font-size:36px;font-family:inherit;">Congratulations!</div>
                                    <span style="color:#3fc5cb;font-size:20px;font-family:inherit;"
                                        id="save_price"></span>
                                </div>
                                <div class="btn-group pull-right" style="margin-right:130px; display: none">
                                    <a class="dropdown-toggle" data-toggle="dropdown"
                                        style="color:#8E8E8E;text-decoration: none;">
                                        <span id="thumbs-down" class="glyphicon glyphicon-thumbs-down" aria-hidden="true"
                                            style="font-size:30px;margin:5px 0px;"></span>
                                    </a>
                                </div>
                                <div class="btn-group pull-right" style="margin-right:10px;display: none">
                                    <a style="color:#3FC5CB;text-decoration: none;"><span
                                            style="font-size:30px;margin:5px 0px;" class="glyphicon glyphicon-thumbs-up"
                                            id="thumbs-up" aria-hidden="true"></span> </a>
                                </div>
                            </div>
                            <div style="padding:15px 10px;">
                                <p class="voucher-notify" style="padding: 5px 0px;">Copy the code below and paste it at
                                    checkout.<img
                                        src="https://vipon.s3.amazonaws.com/img/8463283077c5b876fca80e27f71a02f08f802f7dbe106f.png"
                                        alt="Amazon Coupons"></p>
                                <p class="voucher-show" style="margin-top:16px;">
                                    <span id="voucherContent">&nbsp;</span>
                                    <button id="copyBtn" class="pull-right" data-clipboard-target="#voucherContent"
                                        style="cursor: pointer" title="Copy to clipboard"
                                        onclick="fbq('track', 'copy');">Copy</button>
                                </p>
                                <p class="go-to-amazon" style="margin-top:30px;"><a style="font-size: 16px;"
                                        href="https://www.amazon.com/gp/product/B0BD4J6DXL" target="_blank"
                                        onclick="fbq('track', 'purchase', {currency: 'USD', value: '$8.99'});">GO TO
                                        AMAZON</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div class="fixed-box" style="display: block;">
                <span class="fixed-box-close">×</span>
                <img src="https://vipon.s3.amazonaws.com/img/214026ae272f6b41034daafc1e00e5b35d22ebc82a3459.png"
                    style="width: 100%;" alt="Amazon Coupons">
                <a href="https://itunes.apple.com/us/app/vipon-amazon-coupon/id1272023223?mt=8" target="_blank"
                    onclick="app_click(2,1)"><img
                        src="https://vipon.s3.amazonaws.com/img/60575751e6521f6cb4e9c9783c8940090070bf58d46b4c.png"
                        alt=""></a>
                <a href="https://play.google.com/store/apps/details?id=com.vipon" target="_blank"
                    onclick="app_click(2,4)"><img
                        src="https://vipon.s3.amazonaws.com/img/5862931a19aff8ca38bd96fe1794cd0c16af5b35523aea.png"
                        alt=""></a>
            </div>
        </div>
        {{-- <div id="comment">
            <div id="featuredComment">
                <h3>Hot Comments <span></span></h3>
                <div class="featuredComment-list">
                </div>
            </div>
            <div id="comments" style="display: block;">
                <h3>Comments <span></span></h3>
                <div class="comments-list">
                    <div class="comment-deals" id="key3359360">
                        <div class="head-img"> <img class="lazy"
                                data-original="https://vipon.s3.amazonaws.com/img/97358637f28c0e9c7c45a2851e790ea7a858d1994a7803.png"
                                onload="getImgSize(this)"
                                src="https://vipon.s3.amazonaws.com/img/97358637f28c0e9c7c45a2851e790ea7a858d1994a7803.png"
                                style="display: block; height: 100%; width: auto; left: 0px; top: 0px;"> </div>
                        <div class="comment-deals-text">
                            <div class="data-time">
                                <div>
                                    <div class="name">V_A51FBE54</div>
                                    <!--<div class="date">
                         <span class="icon"></span>
                         <span>Joined Sep 2012</span>
                     </div>-->
                                </div>
                                <div class="time-delete">
                                    <div class="time">2022-12-13 05:34:25</div>
                                </div>
                            </div>
                            <p>I love that you can change the piece with each season. Nice and easy way to recognize
                                holidays without having to dig out a new wreath each time</p>
                            <div class="btn-img-list">
                                <div class="btn-list">
                                </div>
                                <ul class="list-unstyled">
                                    <!--<li class="report-deals">
                     <a href="javascript:;">
                         <span class="report-icon"></span>
                         <span>report</span>
                     </a>
                 </li>-->
                                    <li class="reply-deals">
                                        <a href="/login">
                                            <span class="reply-deals-icon"></span>
                                            <span>reply</span>
                                        </a>
                                    </li>
                                    <li class="thumbs-up">
                                        <a href="javascript:;" class="thumb" data-replyid="3359360" data-replytype="1"
                                            data-thumbtype="1">
                                            <span style="color:#39393a;text-decoration: none;font-size:15px;"
                                                class="glyphicon glyphicon-thumbs-up" id="thumbs-up-tips"
                                                aria-hidden="true"></span>
                                            <span>0</span>
                                        </a>
                                    </li>
                                    <li class="thumbs-down">
                                        <a href="javascript:;" class="thumb" data-replyid="3359360" data-replytype="1"
                                            data-thumbtype="2">
                                            <span style="color:#39393a;text-decoration: none;font-size:15px;"
                                                class="glyphicon glyphicon-thumbs-down" id="thumbs-down-tips"
                                                aria-hidden="true"></span>
                                            <span>0</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="featuredComment3359360" class="panel-collapse collapse" aria-expanded="false">
                                <div class="reply">
                                    <div class="reply-comnect">
                                        <textarea class="div-input"></textarea>
                                        <div class="input-img-emoji">
                                            <div class="input-img-list">
                                                <div class="updata-img input-img">
                                                    <label for="input-img3359360"><span></span></label>
                                                    <input type="file" id="input-img3359360" accept=".jpg,.png"
                                                        class="add-img">
                                                    <img src="" alt="">
                                                    <div class="now-updata" style="display: none;">
                                                        <span class="percentage">78%</span>
                                                        <span>uploading</span>
                                                    </div>
                                                    <a href="javascript:;" class="delect-img"><span></span></a>
                                                </div>
                                            </div>
                                            <div class="input-emoji">
                                                <!-- <div class="input-emoji-down">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="emoji"></span></a>
                                  <div class="dropdown-menu">7897987</div>
                              </div>-->
                                                <button class="btn comment-reply" data-dom="key3359360" data-replynum="0"
                                                    data-isload="0" data-comment="3359360" data-id="2488676"
                                                    data-name="V_A51FBE54">Reply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="comment-deals" id="key3359356">
                        <div class="head-img"> <img class="lazy"
                                data-original="https://vipon.s3.amazonaws.com/img/97358637f28c0e9c7c45a2851e790ea7a858d1994a7803.png"
                                onload="getImgSize(this)"
                                src="https://vipon.s3.amazonaws.com/img/97358637f28c0e9c7c45a2851e790ea7a858d1994a7803.png"
                                style="height: 100%; width: auto; left: 0px; top: 0px; display: block;"> </div>
                        <div class="comment-deals-text">
                            <div class="data-time">
                                <div>
                                    <div class="name">V_PEBP2AI9</div>
                                    <!--<div class="date">
                         <span class="icon"></span>
                         <span>Joined Sep 2012</span>
                     </div>-->
                                </div>
                                <div class="time-delete">
                                    <div class="time">2022-12-13 05:30:01</div>
                                </div>
                            </div>
                            <p>I love this door welcome sign very simple but cute. </p>
                            <div class="btn-img-list">
                                <div class="btn-list">
                                </div>
                                <ul class="list-unstyled">
                                    <!--<li class="report-deals">
                     <a href="javascript:;">
                         <span class="report-icon"></span>
                         <span>report</span>
                     </a>
                 </li>-->
                                    <li class="reply-deals">
                                        <a href="/login">
                                            <span class="reply-deals-icon"></span>
                                            <span>reply</span>
                                        </a>
                                    </li>
                                    <li class="thumbs-up">
                                        <a href="javascript:;" class="thumb" data-replyid="3359356" data-replytype="1"
                                            data-thumbtype="1">
                                            <span style="color:#39393a;text-decoration: none;font-size:15px;"
                                                class="glyphicon glyphicon-thumbs-up" id="thumbs-up-tips"
                                                aria-hidden="true"></span>
                                            <span>0</span>
                                        </a>
                                    </li>
                                    <li class="thumbs-down">
                                        <a href="javascript:;" class="thumb" data-replyid="3359356" data-replytype="1"
                                            data-thumbtype="2">
                                            <span style="color:#39393a;text-decoration: none;font-size:15px;"
                                                class="glyphicon glyphicon-thumbs-down" id="thumbs-down-tips"
                                                aria-hidden="true"></span>
                                            <span>0</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="featuredComment3359356" class="panel-collapse collapse" aria-expanded="false">
                                <div class="reply">
                                    <div class="reply-comnect">
                                        <textarea class="div-input"></textarea>
                                        <div class="input-img-emoji">
                                            <div class="input-img-list">
                                                <div class="updata-img input-img">
                                                    <label for="input-img3359356"><span></span></label>
                                                    <input type="file" id="input-img3359356" accept=".jpg,.png"
                                                        class="add-img">
                                                    <img src="" alt="">
                                                    <div class="now-updata" style="display: none;">
                                                        <span class="percentage">78%</span>
                                                        <span>uploading</span>
                                                    </div>
                                                    <a href="javascript:;" class="delect-img"><span></span></a>
                                                </div>
                                            </div>
                                            <div class="input-emoji">
                                                <!-- <div class="input-emoji-down">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="emoji"></span></a>
                                  <div class="dropdown-menu">7897987</div>
                              </div>-->
                                                <button class="btn comment-reply" data-dom="key3359356" data-replynum="0"
                                                    data-isload="0" data-comment="3359356" data-id="2324238"
                                                    data-name="V_PEBP2AI9">Reply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="comment-deals" id="key3359354">
                        <div class="head-img"> <img class="lazy"
                                data-original="https://vipon.s3.amazonaws.com/img/97358637f28c0e9c7c45a2851e790ea7a858d1994a7803.png"
                                onload="getImgSize(this)"
                                src="https://vipon.s3.amazonaws.com/img/97358637f28c0e9c7c45a2851e790ea7a858d1994a7803.png"
                                style="height: 100%; width: auto; left: 0px; top: 0px; display: block;"> </div>
                        <div class="comment-deals-text">
                            <div class="data-time">
                                <div>
                                    <div class="name">V_A3111MUM</div>
                                    <!--<div class="date">
                         <span class="icon"></span>
                         <span>Joined Sep 2012</span>
                     </div>-->
                                </div>
                                <div class="time-delete">
                                    <div class="time">2022-12-13 05:29:17</div>
                                </div>
                            </div>
                            <p>Great decor project<br>
                                This is a simple way to decorate for all the seasons, and it looks sharp, is sturdy, and
                                will last for years to come! I have this hung indoors in my foyer and it looks great.</p>
                            <div class="btn-img-list">
                                <div class="btn-list">
                                </div>
                                <ul class="list-unstyled">
                                    <!--<li class="report-deals">
                     <a href="javascript:;">
                         <span class="report-icon"></span>
                         <span>report</span>
                     </a>
                 </li>-->
                                    <li class="reply-deals">
                                        <a href="/login">
                                            <span class="reply-deals-icon"></span>
                                            <span>reply</span>
                                        </a>
                                    </li>
                                    <li class="thumbs-up">
                                        <a href="javascript:;" class="thumb" data-replyid="3359354" data-replytype="1"
                                            data-thumbtype="1">
                                            <span style="color:#39393a;text-decoration: none;font-size:15px;"
                                                class="glyphicon glyphicon-thumbs-up" id="thumbs-up-tips"
                                                aria-hidden="true"></span>
                                            <span>0</span>
                                        </a>
                                    </li>
                                    <li class="thumbs-down">
                                        <a href="javascript:;" class="thumb" data-replyid="3359354" data-replytype="1"
                                            data-thumbtype="2">
                                            <span style="color:#39393a;text-decoration: none;font-size:15px;"
                                                class="glyphicon glyphicon-thumbs-down" id="thumbs-down-tips"
                                                aria-hidden="true"></span>
                                            <span>0</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="featuredComment3359354" class="panel-collapse collapse" aria-expanded="false">
                                <div class="reply">
                                    <div class="reply-comnect">
                                        <textarea class="div-input"></textarea>
                                        <div class="input-img-emoji">
                                            <div class="input-img-list">
                                                <div class="updata-img input-img">
                                                    <label for="input-img3359354"><span></span></label>
                                                    <input type="file" id="input-img3359354" accept=".jpg,.png"
                                                        class="add-img">
                                                    <img src="" alt="">
                                                    <div class="now-updata" style="display: none;">
                                                        <span class="percentage">78%</span>
                                                        <span>uploading</span>
                                                    </div>
                                                    <a href="javascript:;" class="delect-img"><span></span></a>
                                                </div>
                                            </div>
                                            <div class="input-emoji">
                                                <!-- <div class="input-emoji-down">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="emoji"></span></a>
                                  <div class="dropdown-menu">7897987</div>
                              </div>-->
                                                <button class="btn comment-reply" data-dom="key3359354" data-replynum="0"
                                                    data-isload="0" data-comment="3359354" data-id="3616846"
                                                    data-name="V_A3111MUM">Reply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <ul class="list-unstyled page-list" data-fun="getComments">
                        <li><a href="javascript:;" class="noClick" data-totalpage="1">Previous</a></li>
                        <li class="active"><a href="javascript:;" class="noClick" data-totalpage="1">1</a></li>
                        <li><a href="javascript:;" class="noClick" data-totalpage="1">Next</a></li>
                        <li><input type="text"> <a href="javascript:;" data-totalpage="1">GO</a></li>
                    </ul>
                </div>
            </div>
            <div id="nowComment">
                <div class="unlogin">
                    <div class="left-login">
                        <div class="login-logo">
                            <img src="/images/vipon-logo3x.png" alt="Amazon Coupons">
                        </div>
                        <div class="login-text">
                            <a href="/login">Log in</a> or <a href="/signup">Sign up</a> for a Vipon account to post
                            comment
                        </div>
                    </div>
                    <div class="right-login">
                        <a href="/login" class="btn">Log In</a>
                        <a href="/signup" class="btn">Sign Up</a>
                    </div>
                </div>
            </div>
        </div> --}}
        <div id="feature-deal" style="margin-bottom: 40px">
            <div class="row featured-deals" style="background-color: #f1f1f1;">
                <div class="col-xs-1 col-sm-1 	col-md-1 col-lg-1"></div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 feature-contain"
                    style="height: 450px;overflow: hidden;">
                    <h4 style="margin: 20px 0;text-align: left;"><img
                            src="https://vipon.s3.amazonaws.com/img/387830071b1a055e8d86884b7e1e111b8caff2217a6232.png"
                            style="width: 20px;margin-right: 5px;">You May Also Like：</h4>
                    <div class="box-details" style="margin: 0px auto; overflow: hidden; width: 1165px;">
                        <div class="box-contain" style="padding: 0 10px 55px;float: left;width: 233px;"
                            data-product-id="9789284" data-module="9">
                            <div
                                style="background-color: white;padding:0 10px;border-radius: 4px;border: 1px solid #ccc;position: relative;">
                                <p class="boxTop" style="color:#ff0000;text-align: left;"></p>
                                <div class="img-container" style="height:160px;padding: 10px 20px;" id="9789284">
                                    <a href="/product/9789284-OpeCking-Rotating-Liquid-Motion-Living-Hourglass-amazon-coupons?sl=&amp;f=like"
                                        target="_blank"
                                        style="display: flex;width: 100%;height: 100%;justify-content: center;align-items: center;"
                                        onclick="clickRecord(7)">
                                        <img class="product-image"
                                            src="https://m.media-amazon.com/images/I/41x6QJ1FZwL._AC_.jpg"
                                            style="max-width:90% ;max-height: 80%;">
                                    </a>
                                </div>
                                <div class="title-container">
                                    <a href="/product/9789284-OpeCking-Rotating-Liquid-Motion-Living-Hourglass-amazon-coupons?sl=&amp;f=like"
                                        target="_blank" onclick="clickRecord(7)">
                                        <p class="title" onclick=""
                                            style="padding: 0; height: 44px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                            OpeCking 360° Rotating Decoration(15ml) Liquid Motion Living Hourglass
                                            Decoration, Table Lamp Room Bedroom Creative Art Sand Art 3D Moving Sand Art
                                            (Blue) </p>
                                    </a>
                                    <p class="product-group" style="padding: 0;">
                                        <img class="flag" src="/images/flags/om.png">
                                        <span>Fulfilled by merchant</span>
                                    </p>
                                </div>
                                <div class="price-box"
                                    style="padding: 0;padding-bottom: 10px;font-family: -apple-system, BlinkMacSystemFont,&quot;Segoe UI&quot;, &quot;Roboto&quot;, &quot;Oxygen&quot;, &quot;Ubuntu&quot;, &quot;Cantarell&quot;,&quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;,sans-serif;">
                                    <span class="price" style="font-size:24px;color: #1c1c1d;">
                                        $19.99 </span>
                                    <del class="currency" style="font-size: 14px;color: #898989;">99.95</del>
                                    <div class="feature_deal_a_9789284">
                                        <span
                                            style="display:inline-block;width:70px;font-size: 14px;margin-top: 10px;color: #f44c44;border: 1px dashed #f44c44;">
                                            80% OFF</span>
                                        <a class="btn-review"
                                            style="display: inline-block;width: 56%;font-size: 16px;height: 35px;margin-left: 10px;min-height: 30px;line-height: 35px;"
                                            href=" /login">Get Coupon </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-contain" style="padding: 0 10px 55px;float: left;width: 233px;"
                            data-product-id="9811368" data-module="9">
                            <div
                                style="background-color: white;padding:0 10px;border-radius: 4px;border: 1px solid #ccc;position: relative;">
                                <p class="boxTop" style="color:#ff0000;text-align: left;"></p>
                                <div class="img-container" style="height:160px;padding: 10px 20px;" id="9811368">
                                    <a href="/product/9811368-JiazuGo-Teal-Wall-Decor-Rose-Flower-amazon-coupons?sl=&amp;f=like"
                                        target="_blank"
                                        style="display: flex;width: 100%;height: 100%;justify-content: center;align-items: center;"
                                        onclick="clickRecord(7)">
                                        <img class="product-image"
                                            src="https://m.media-amazon.com/images/I/5110kMppElL._AC_.jpg"
                                            style="max-width:90% ;max-height: 80%;">
                                    </a>
                                </div>
                                <div class="title-container">
                                    <a href="/product/9811368-JiazuGo-Teal-Wall-Decor-Rose-Flower-amazon-coupons?sl=&amp;f=like"
                                        target="_blank" onclick="clickRecord(7)">
                                        <p class="title" onclick=""
                                            style="padding: 0; height: 44px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                            JiazuGo Teal Wall Decor Rose Flower Canvas Prints Black and White Wall Art for
                                            Home Rose Floral Turquoise Decor Modern Bedroom Pictures Bathroom Decorations
                                            Stretched and Framed Ready to Hang </p>
                                    </a>
                                    <p class="product-group" style="padding: 0;">
                                        <img class="flag" src="/images/flags/om.png">
                                        <span>Fulfilled by Amazon</span>
                                    </p>
                                </div>
                                <div class="price-box"
                                    style="padding: 0;padding-bottom: 10px;font-family: -apple-system, BlinkMacSystemFont,&quot;Segoe UI&quot;, &quot;Roboto&quot;, &quot;Oxygen&quot;, &quot;Ubuntu&quot;, &quot;Cantarell&quot;,&quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;,sans-serif;">
                                    <span class="price" style="font-size:24px;color: #1c1c1d;">
                                        $11.39 </span>
                                    <del class="currency" style="font-size: 14px;color: #898989;">25.3</del>
                                    <div class="feature_deal_a_9811368">
                                        <span
                                            style="display:inline-block;width:70px;font-size: 14px;margin-top: 10px;color: #f44c44;border: 1px dashed #f44c44;">
                                            55% OFF</span>
                                        <a class="btn-review"
                                            style="display: inline-block;width: 56%;font-size: 16px;height: 35px;margin-left: 10px;min-height: 30px;line-height: 35px;"
                                            href=" /login">Get Coupon </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-contain" style="padding: 0 10px 55px;float: left;width: 233px;"
                            data-product-id="9612144" data-module="9">
                            <div
                                style="background-color: white;padding:0 10px;border-radius: 4px;border: 1px solid #ccc;position: relative;">
                                <p class="boxTop" style="color:#ff0000;text-align: left;"></p>
                                <div class="img-container" style="height:160px;padding: 10px 20px;" id="9612144">
                                    <a href="/product/9612144-Set-Mesh-Laundry-Laundry-Basket-Bra-amazon-coupons?sl=&amp;f=like"
                                        target="_blank"
                                        style="display: flex;width: 100%;height: 100%;justify-content: center;align-items: center;"
                                        onclick="clickRecord(7)">
                                        <img class="product-image"
                                            src="https://m.media-amazon.com/images/I/41xmILIHW9L._AC_.jpg"
                                            style="max-width:90% ;max-height: 80%;">
                                    </a>
                                </div>
                                <div class="title-container">
                                    <a href="/product/9612144-Set-Mesh-Laundry-Laundry-Basket-Bra-amazon-coupons?sl=&amp;f=like"
                                        target="_blank" onclick="clickRecord(7)">
                                        <p class="title" onclick=""
                                            style="padding: 0; height: 44px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                            Set of 2 Mesh Laundry Bags, Laundry Basket Bra Coarse Fine Mesh Wash Bag for
                                            Delicates with Zipper Laundry hamper Travel Storage Organize Bag (2Pcs Bra) </p>
                                    </a>
                                    <p class="product-group" style="padding: 0;">
                                        <img class="flag" src="/images/flags/om.png">
                                        <span>Fulfilled by Amazon</span>
                                    </p>
                                </div>
                                <div class="price-box"
                                    style="padding: 0;padding-bottom: 10px;font-family: -apple-system, BlinkMacSystemFont,&quot;Segoe UI&quot;, &quot;Roboto&quot;, &quot;Oxygen&quot;, &quot;Ubuntu&quot;, &quot;Cantarell&quot;,&quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;,sans-serif;">
                                    <span class="price" style="font-size:24px;color: #1c1c1d;">
                                        $7.00 </span>
                                    <del class="currency" style="font-size: 14px;color: #898989;">13.99</del>
                                    <div class="feature_deal_a_9612144">
                                        <span
                                            style="display:inline-block;width:70px;font-size: 14px;margin-top: 10px;color: #f44c44;border: 1px dashed #f44c44;">
                                            50% OFF</span>
                                        <a class="btn-review"
                                            style="display: inline-block;width: 56%;font-size: 16px;height: 35px;margin-left: 10px;min-height: 30px;line-height: 35px;"
                                            href=" /login">Get Coupon </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-contain" style="padding: 0 10px 55px;float: left;width: 233px;"
                            data-product-id="9678150" data-module="9">
                            <div
                                style="background-color: white;padding:0 10px;border-radius: 4px;border: 1px solid #ccc;position: relative;">
                                <p class="boxTop" style="color:#ff0000;text-align: left;"></p>
                                <div class="img-container" style="height:160px;padding: 10px 20px;" id="9678150">
                                    <a href="/product/9678150-Black-Candle-Lantern-Vintage-Decorative-with-amazon-coupons?sl=&amp;f=like"
                                        target="_blank"
                                        style="display: flex;width: 100%;height: 100%;justify-content: center;align-items: center;"
                                        onclick="clickRecord(7)">
                                        <img class="product-image"
                                            src="https://m.media-amazon.com/images/I/31Dn98PD1GL._AC_.jpg"
                                            style="max-width:90% ;max-height: 80%;">
                                    </a>
                                </div>
                                <div class="title-container">
                                    <a href="/product/9678150-Black-Candle-Lantern-Vintage-Decorative-with-amazon-coupons?sl=&amp;f=like"
                                        target="_blank" onclick="clickRecord(7)">
                                        <p class="title" onclick=""
                                            style="padding: 0; height: 44px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                            10" Black Candle Lantern Vintage Decorative with LED Flickering Flameless Lamp-
                                            Mini Lanterns Decorations for Outdoor Patio Hanging as Halloween Christmas Party
                                            Wedding Memorial Gift </p>
                                    </a>
                                    <p class="product-group" style="padding: 0;">
                                        <img class="flag" src="/images/flags/om.png">
                                        <span>Fulfilled by Amazon</span>
                                    </p>
                                </div>
                                <div class="price-box"
                                    style="padding: 0;padding-bottom: 10px;font-family: -apple-system, BlinkMacSystemFont,&quot;Segoe UI&quot;, &quot;Roboto&quot;, &quot;Oxygen&quot;, &quot;Ubuntu&quot;, &quot;Cantarell&quot;,&quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;,sans-serif;">
                                    <span class="price" style="font-size:24px;color: #1c1c1d;">
                                        $5.10 </span>
                                    <del class="currency" style="font-size: 14px;color: #898989;">10.19</del>
                                    <div class="feature_deal_a_9678150">
                                        <span
                                            style="display:inline-block;width:70px;font-size: 14px;margin-top: 10px;color: #f44c44;border: 1px dashed #f44c44;">
                                            50% OFF</span>
                                        <a class="btn-review"
                                            style="display: inline-block;width: 56%;font-size: 16px;height: 35px;margin-left: 10px;min-height: 30px;line-height: 35px;"
                                            href=" /login">Get Coupon </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-contain" style="padding: 0 10px 55px;float: left;width: 233px;"
                            data-product-id="9430146" data-module="9">
                            <div
                                style="background-color: white;padding:0 10px;border-radius: 4px;border: 1px solid #ccc;position: relative;">
                                <p class="boxTop" style="color:#ff0000;text-align: left;"></p>
                                <div class="img-container" style="height:160px;padding: 10px 20px;" id="9430146">
                                    <a href="/product/9430146-PALMA-Extra-Wide-Sliding-Door-Curtains-amazon-coupons?sl=&amp;f=like"
                                        target="_blank"
                                        style="display: flex;width: 100%;height: 100%;justify-content: center;align-items: center;"
                                        onclick="clickRecord(7)">
                                        <img class="product-image"
                                            src="https://m.media-amazon.com/images/I/41BltdosLtL._AC_.jpg"
                                            style="max-width:90% ;max-height: 80%;">
                                    </a>
                                </div>
                                <div class="title-container">
                                    <a href="/product/9430146-PALMA-Extra-Wide-Sliding-Door-Curtains-amazon-coupons?sl=&amp;f=like"
                                        target="_blank" onclick="clickRecord(7)">
                                        <p class="title" onclick=""
                                            style="padding: 0; height: 44px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                            LA PALMA Extra Wide Sliding Door Curtains – Blackout Patio Door Curtain for
                                            Sliding Glass Door Drapes Thermal Insulated for Living Room Dividers for Bedroom
                                            Noise Reducing Privacy Grommet Top 1 Panel </p>
                                    </a>
                                    <p class="product-group" style="padding: 0;">
                                        <img class="flag" src="/images/flags/om.png">
                                        <span>Fulfilled by Amazon</span>
                                    </p>
                                </div>
                                <div class="price-box"
                                    style="padding: 0;padding-bottom: 10px;font-family: -apple-system, BlinkMacSystemFont,&quot;Segoe UI&quot;, &quot;Roboto&quot;, &quot;Oxygen&quot;, &quot;Ubuntu&quot;, &quot;Cantarell&quot;,&quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;,sans-serif;">
                                    <span class="price" style="font-size:24px;color: #1c1c1d;">
                                        $21.99 </span>
                                    <del class="currency" style="font-size: 14px;color: #898989;">43.99</del>
                                    <div class="feature_deal_a_9430146">
                                        <span
                                            style="display:inline-block;width:70px;font-size: 14px;margin-top: 10px;color: #f44c44;border: 1px dashed #f44c44;">
                                            50% OFF</span>
                                        <a class="btn-review"
                                            style="display: inline-block;width: 56%;font-size: 16px;height: 35px;margin-left: 10px;min-height: 30px;line-height: 35px;"
                                            href=" /login">Get Coupon </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-contain" style="padding: 0 10px 55px;float: left;width: 233px;"
                            data-product-id="9750514" data-module="9">
                            <div
                                style="background-color: white;padding:0 10px;border-radius: 4px;border: 1px solid #ccc;position: relative;">
                                <p class="boxTop" style="color:#ff0000;text-align: left;"></p>
                                <div class="img-container" style="height:160px;padding: 10px 20px;" id="9750514">
                                    <a href="/product/9750514-Red-Green-Gold-Christmas-Tree-Ornaments-amazon-coupons?sl=&amp;f=like"
                                        target="_blank"
                                        style="display: flex;width: 100%;height: 100%;justify-content: center;align-items: center;"
                                        onclick="clickRecord(7)">
                                        <img class="product-image"
                                            src="https://m.media-amazon.com/images/I/61stCRSoq-L._AC_.jpg"
                                            style="max-width:90% ;max-height: 80%;">
                                    </a>
                                </div>
                                <div class="title-container">
                                    <a href="/product/9750514-Red-Green-Gold-Christmas-Tree-Ornaments-amazon-coupons?sl=&amp;f=like"
                                        target="_blank" onclick="clickRecord(7)">
                                        <p class="title" onclick=""
                                            style="padding: 0; height: 44px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                            Red Green Gold Christmas Tree Ornaments -70Pcs DIKI Christmas Ornaments Set,
                                            Xmas Ball Shatterproof Decorative Assorted Hanging Baubles Pendants for
                                            Christmas Tree Party Decor Holiday Party Home </p>
                                    </a>
                                    <p class="product-group" style="padding: 0;">
                                        <img class="flag" src="/images/flags/om.png">
                                        <span>Fulfilled by Amazon</span>
                                    </p>
                                </div>
                                <div class="price-box"
                                    style="padding: 0;padding-bottom: 10px;font-family: -apple-system, BlinkMacSystemFont,&quot;Segoe UI&quot;, &quot;Roboto&quot;, &quot;Oxygen&quot;, &quot;Ubuntu&quot;, &quot;Cantarell&quot;,&quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;,sans-serif;">
                                    <span class="price" style="font-size:24px;color: #1c1c1d;">
                                        $15.00 </span>
                                    <del class="currency" style="font-size: 14px;color: #898989;">29.99</del>
                                    <div class="feature_deal_a_9750514">
                                        <span
                                            style="display:inline-block;width:70px;font-size: 14px;margin-top: 10px;color: #f44c44;border: 1px dashed #f44c44;">
                                            50% OFF</span>
                                        <a class="btn-review"
                                            style="display: inline-block;width: 56%;font-size: 16px;height: 35px;margin-left: 10px;min-height: 30px;line-height: 35px;"
                                            href=" /login">Get Coupon </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-1 col-sm-1 	col-md-1 col-lg-1"></div>
            </div>
            <script type="text/javascript">
                function boxContain() {
                    var c_container = $('.feature-contain').width();
                    var box_container = $('.box-contain').width() + 20;
                    var row = Math.floor(c_container / box_container);
                    $('.box-details').width(box_container * row)
                }
                boxContain();
                window.onresize = boxContain;
            </script>
        </div>

        <script>
            //  Contact Us

            $('#contactModal').on('show.bs.modal', function(e) {
                $('#contactModal .please-wait').hide();
            });

            function contact_email_send() {
                if ($('#contactModal #contact_email_address').val() == '') {
                    alert('Please fill in your email address.');
                    return;
                }

                if ($('#contactModal #contact_email_body').val() == '') {
                    alert('You forgot to write us a question.');
                    return;
                }

                var contact_email = $('#contactModal #contact_email_address').val();
                var contact_name = $('#contactModal #contact_email_name').val();
                var contact_body = $('#contactModal #contact_email_body').val();

                $('#contactModal .form-group').hide();
                $('#contactModal .btn-primary').hide();
                $('#contactModal .please-wait').html('<i class="fa fa-spin fa-spinner"></i> Please Wait...').show();

                $.ajax({
                    url: "/send_email.php",
                    method: 'POST',
                    cache: false,
                    data: {
                        body: contact_body + '\r\n\r\nFrom:' + contact_email,
                        from_email: contact_email,
                        from_name: contact_name,
                        to_email: "", //$site_email
                        notHTML: true

                    },
                    success: function(data) {
                        console.log(data);
                        $('#contactModal .please-wait').html(
                        'Message Sent! <br><br> We will get back to you ASAP.');
                    }
                });


            }

            // How it works

            $('#videoModal').on('hidden.bs.modal', function(e) {
                $('#videoModal iframe').attr('src', '');
            });

            function how_it_works() {
                $('#videoModal .video-container').html(
                    '<iframe src="//www.youtube.com/embed/6nDs6cYhpdE?rel=0&vq=hd720&showinfo=0&modestbranding=1&autohide=1&autoplay=1" frameborder="0" allowfullscreen></iframe>'
                    );
                $('#videoModal').modal('show');
            }


            // Review URL

            $('#reviewURLModal').on('shown.bs.modal', function() {
                $('#reviewURLModal #review_url').focus();
            });
        </script>

        <div class="modal fade" id="feedBack" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Feedback</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="feedBackText"><span>*</span><span>Feedback</span></label>
                                <textarea id="feedBackText"
                                    placeholder="Problem and Suggestion: Describe your issue using at least 10 characters so that we can help troubleshoot your issue more quickly. If you have any suggestions for this site, you can also let us know here."></textarea>
                            </div>
                            <div class="form-group">
                                <div class="copy-label"><span></span><span>screenshots (Optional):</span></div>
                                <div style="display: flex">
                                    <div class="imgs">
                                    </div>
                                    <div class="img-group">
                                        <label for="imgEx">
                                            <img src="https://vipon.s3.amazonaws.com/img/3060483300cfc0ad8582dd0d8496c79e2601ea886ad30c.svg"
                                                alt="">
                                        </label>
                                        <input type="file" accept=".jpg,.png" id="imgEx">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit-back">
                                <button class="submit-feed-back" disabled="disabled" data-no="0"><img
                                        src="../../../images/waiting-1.gif"
                                        style="width: 16px;margin-right: 3px;display: none"
                                        alt="">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="change-domain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog"
                style="top: 50%;margin-top: -170px;width: 660px;height: 360px;background: #F8F8F8;border-radius: 4px;">
                <div class="modal-content">
                    <div class="modal-body" style="width: 660px;height: 360px;background: #F8F8F8;border-radius: 4px;">
                        <div style="text-align: center;margin-top: 30px;"><img style="width: 160px;height: 31px;"
                                src="https://vipon.s3.amazonaws.com/img/268511307d0d511cd3a1f4a168e28b9463e41218ea9a66.svg">
                        </div>
                        <div style="text-align: center;margin-top: 40px;"><label
                                style="width: 412px;height: 28px;font-size: 24px;font-family: Roboto-Bold, Roboto;font-weight: bold;color: #333333;line-height: 28px;">Vipon
                                has been updated to a new site!</label></div>
                        <div style="text-align: center;margin-top: 20px;"><label
                                style="width: 400px;height: 40px;font-size: 14px;font-family: Roboto-Regular, Roboto;font-weight: 400;color: #333333;line-height: 20px;">Our
                                new website address is <a href="https://www.myvipon.com"
                                    style="color:#4DCAC1">www.myvipon.com</a><br>Please update your Favorites/Bookmark to
                                add our new website.</label></div>
                        <div style="text-align: center;margin-top: 30px;"><button id="jump_to_new_domain"
                                style="width: 100px;height: 32px;background: #4DCAC1;border-radius: 16px;color:white;border:none;">OK</button>
                        </div>
                        <div style="text-align: center;margin-top: 14px;"><label
                                style="width: 306px;height: 20px;font-size: 12px;font-family: Roboto-Regular, Roboto;font-weight: 400;color: #999999;line-height: 20px;">You
                                will be re-directed to www.myvipon.com in <label style="color: #4DCAC1"
                                    id="mes">5</label> seconds</label></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade " id="feedBackTiTitle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
                        Thank you for your feedback
                    </div>
                </div>
            </div>
        </div>
        <script>
            var host_name = window.location.hostname;
            if (host_name == 'www.vipon.com') {
                $(function() {
                    $('#change-domain').modal('show');

                    window.onload = function() {
                        var i = 4;
                        var intervalid;
                        intervalid = setInterval(fun, 1000);

                        function fun() {
                            if (i == 0) {
                                window.location.href = "https://www.myvipon.com";
                                clearInterval(intervalid);
                            }
                            document.getElementById("mes").innerHTML = i;
                            i--;
                        }
                    }

                    $(document).on('click', '#jump_to_new_domain', function() {
                        //window.open('https://www.myvipon.com');
                        window.location.href = "https://www.myvipon.com";
                    });

                });
            }

            /*
             * app  click
             * */
            function app_click(click, device, is_black_friday = 0) {
                if (is_black_friday == 0) {
                    $.ajax({
                        url: "/amazon/download",
                        type: 'get',
                        data: {
                            click: click,
                            device: device
                        },
                        error: function(error) {

                        },
                        success: function(data) {

                        }
                    });
                } else {
                    if (device == 1) {
                        blackFridayTrace(11, 0)
                    } else if (device == 4) {
                        blackFridayTrace(11, 1)
                    }
                }
            }
            //黑五统计
            function blackFridayTrace(stat_type, btn_code) {
                $.ajax({
                    url: "/api/black-friday/trace",
                    type: 'post',
                    dataType: 'json',
                    data: {
                        stat_type: stat_type,
                        btn_code: btn_code,
                    },
                    success: function(data) {

                    },
                    error: function(err) {

                    }
                });
            }

            function getImgSizeLeft(arrayElement) {
                let width = parseInt($(arrayElement).css('width'));
                let height = parseInt($(arrayElement).css('height'));
                if (width > 0 && height > 0) {
                    if (width / height >= 1) {
                        $(arrayElement).css({
                            'height': '100%',
                            'width': 'auto'
                        });
                        width = parseInt($(arrayElement).css('width'));
                        height = parseInt($(arrayElement).css('height'));
                        $(arrayElement).css({
                            'left': '-' + (width - parseInt($(arrayElement).parent().width())) / 2 + 'px',
                            top: 0
                        })

                    } else {
                        $(arrayElement).css({
                            'width': '100%',
                            'height': 'auto',
                        })
                        width = parseInt($(arrayElement).css('width'));
                        height = parseInt($(arrayElement).css('height'));
                        $(arrayElement).css({
                            'top': '-' + (height - parseInt($(arrayElement).parent().height())) / 2 + 'px',
                            left: 0
                        })
                    }
                }
            }
        </script>
        <script type="text/javascript" charset="utf8" src="/js/art.js?v=20171123"></script>
        <script type="text/javascript" charset="utf8" src="/js/clipboard.min.js"></script>

        <script>
            // 点击注册抽奖小弹窗显示大弹窗
            $('#loginActivity-minor').click(function(event) {
                event.stopPropagation();
                console.log("点击注册抽奖小弹窗显示大弹窗")
                if (timerCount) {
                    clearInterval(timerCount);
                }
                $('#loginActivity').modal('show');
                regLotteryTrace(1); // 数据埋点；2：跳转；1：显示
            })
            const vue = new Vue({
                el: "#product_attr",
                data: {
                    json: {},
                    colorList: [],
                    list: [],
                    attr: "",
                    color: "",
                    show: true
                },
                watch: {
                    color: (val) => {
                        if (!val) return;
                        vue.attr = vue.json[val][0]
                    }
                },
                mounted() {



                    console.log("product-page")
                },
            })
        </script>
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                    appId: '281351757175256',
                    xfbml: true,
                    version: 'v2.9'
                });
            };
            (function() {
                setTimeout(() => {
                    $("#show").removeClass("displayN")
                }, 1000)
            })();
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <script src="/js/lazyload-product.js?v=20221108"></script>
        <script src="/js/product.js?v=20221108"></script>
        <script src="/js/url.js?v=20221108"></script>
        <script type="text/javascript">
            function banner_click(banner_id) {
                $.ajax({
                    url: "/main/banner-click",
                    type: 'post',
                    data: {
                        banner_id: banner_id
                    },
                    error: function(error) {
                        //$('.group-span').css('display','none');
                    },
                    success: function(data) {
                        // alert(data.msg);
                    }
                });
            }

            function shop_click() {
                $.ajax({
                    url: "/main/click-record",
                    type: 'post',
                    dataType: 'json',
                    data: {
                        btn_code: 501, //代表点击店铺名称进入店铺
                    },
                    success: function(data) {

                    },
                    error: function(err) {

                    }
                });
            }

            /*
             *  黑五enter to win按钮点击事件
             *
             * */
            $('button.btn.win').click(function() {
                $('button.btn.win').attr('disabled', true);
                $('button.btn.win').addClass('waiting');
                $.ajax({
                    url: '/code/giveaway-code',
                    type: 'post',
                    data: {
                        id: '9816402',
                        f: 'info_g'
                    },
                    success: function(data) {
                        $('button.btn.win').attr('disabled', false);
                        $('button.btn.win').removeClass('waiting');
                        if (!data.code) {
                            data = JSON.parse(data);
                        }
                        if (String(data.code) == '501') {
                            $('.winning .back-img>p:nth-child(2)').html('Apply the coupon code  “' + data
                                .voucher + '” for a special 99% discount.');
                            $('.winning').modal('show');
                            $('.winning .back-img .btn').click(function() {
                                var save = function(e) {
                                    e.clipboardData.setData('text/plain', data
                                    .voucher); //下面会说到clipboardData对象
                                    e.preventDefault(); //阻止默认行为
                                }
                                document.addEventListener('copy', save);
                                document.execCommand("copy"); //使文档处于可编辑状态，否则无效
                                window.open('https://www.amazon.com/gp/product/B0BD4J6DXL');
                                logging(data.voucher, 1);
                            })
                        } else if (String(data.code) == '502') {
                            $('.not-won .back-img>p:nth-child(2)').html('Apply the coupon code ' + data
                                .voucher + ' for ' + data.voucher_num + '% discount.');
                            $('.not-won').modal('show');
                            $('.not-won .back-img .btn').click(function() {
                                var save = function(e) {
                                    e.clipboardData.setData('text/plain', data
                                    .voucher); //下面会说到clipboardData对象
                                    e.preventDefault(); //阻止默认行为
                                }
                                document.addEventListener('copy', save);
                                document.execCommand("copy"); //使文档处于可编辑状态，否则无效
                                window.open('https://www.amazon.com/gp/product/B0BD4J6DXL');
                                logging(data.voucher, 2);
                            })
                        } else {
                            alert(data.msg);
                        }
                    },
                    error: function(err) {

                    }
                })

            })
            /**
             *  日志接口
             *
             *
             * **/
            logging = (voucher, iswin) => {
                $.ajax({
                    url: '/product/win-log',
                    type: 'post',
                    data: {
                        product_id: '9816402',
                        reviewer_id: '-1',
                        voucher: voucher,
                        iswin: iswin
                    },
                    success: function(data) {

                    },
                    error: function(err) {

                    }
                })
            }

            function add_collection() {
                $.ajax({
                    url: "/wish/add",
                    type: 'get',
                    data: {
                        product_id: '9816402',
                        search_tid: '',
                        event_type: 'search',
                        position: '0',
                    },
                    error: function(error) {
                        //$('.group-span').css('display','none');
                    },
                    success: function(data) {
                        // alert(data.msg);
                        if (data.code == 200) {
                            $('.btn-group .favorites i').html("&#xe64a;");
                            $('.btn-group .favorites i').css("color", "red");

                            $('.btn-group .favorites i').attr('class', "favoritesed iconfont");
                            $('.btn-group .favorites').attr('title', "Remove from my favorites");
                            $('.btn-group .favorites span').html(parseInt($('.btn-group .favorites span').html()) +
                                1);
                        }
                    }
                });
            }

            function cache_collection() {
                $.ajax({
                    url: "/wish/delete",
                    type: 'get',
                    data: {
                        product_id: '9816402'
                    },
                    error: function(error) {
                        //$('.group-span').css('display','none');
                    },
                    success: function(data) {
                        // alert(data.msg);
                        $('.btn-group .favorites i').html("&#xe60d;");

                        $('.btn-group .favorites i').attr('class', "iconfont");
                        $('.btn-group .favorites i').css("color", "#999");
                        $('.btn-group .favorites').attr('title', "Save to my favorites");
                        if (parseInt($('.btn-group .favorites span').html()) > 0) $('.btn-group .favorites span')
                            .html(parseInt($('.btn-group .favorites span').html()) - 1);
                    }
                });
            }

            $(function() {
                $.ajax({
                    url: "/search/relation?filter=9816402",
                    method: 'GET',
                    cache: true,
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        $('#feature-deal').html('');
                    },
                    success: function(data) {
                        $('#feature-deal').html(data);
                    }
                });
            });

            var countdown;
            var returnDateDown;

            $(function() {

                $('#showMore').click(function() {
                    //$('#descContent').removeClass('clamp-this-module');
                    $('#descContent').toggleClass('clamp-this-module');
                });
                $('#showMore2').click(function() {
                    //$('#bulletPoint').removeClass('clamp-this-module2');
                    $('#bulletPoint').toggleClass('clamp-this-module2');
                });

                new Clipboard('#copyBtn');

                countdown = setInterval(function() {
                    var secs = $('.product-expiry-notify input[name=expiry]').val();
                    if (secs == 0) {
                        $('.request-btn').html(
                            '<span class="glyphicon glyphicon-time"></span> <span>Expired</span>');
                        $('#productExpiry').html('<span style="color: #fc4f47">Expired</span>');
                        return;
                    }
                    // calculate (and subtract) whole days
                    var days = Math.floor(secs / 86400);
                    secs -= days * 86400;

                    // calculate (and subtract) whole hours
                    var hours = Math.floor(secs / 3600) % 24;
                    secs -= hours * 3600;

                    // calculate (and subtract) whole minutes
                    var minutes = Math.floor(secs / 60) % 60;
                    secs -= minutes * 60;

                    // what's left is seconds
                    var seconds = secs % 60;

                    if (days) {
                        if (days == 1) {
                            $('#productExpiry .minutes').html('1 day');
                        } else {
                            $('#productExpiry .minutes').html(days + ' days');
                        }
                    } else if (hours) {
                        if (hours == 1) {
                            $('#productExpiry .minutes').html(hours + ' hour');
                        } else {
                            $('#productExpiry .minutes').html(hours + ' hours');
                        }
                    } else if (minutes) {
                        if (minutes == 1) {
                            $('#productExpiry .minutes').html(minutes + ' minute');
                        } else {
                            $('#productExpiry .minutes').html(minutes + ' minutes');
                        }
                    } else if (seconds) {
                        if (seconds == 1) {
                            $('#productExpiry .minutes').html(seconds + ' second');
                        } else {
                            $('#productExpiry .minutes').html(seconds + ' seconds');
                        }
                    } else {
                        return;
                    }

                    var secs = $('.product-expiry-notify input[name=expiry]').val();
                    if (secs - 1 >= 0) {
                        $('.product-expiry-notify input[name=expiry]').val(secs - 1);
                    }
                }, 1000);


            });

            $('#thumbs-down-list li').bind('click', function() {
                var reason = $(this).attr('data-reason');
                var current_product_id = 9816402;
                $.ajax({
                    url: "report/vote-down",
                    method: 'POST',
                    cache: false,
                    data: {
                        product_id: current_product_id,
                        report_reason: reason,
                        report_group: ''
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.code == 200) {
                            $('#thumbs-down-tips>span.text').html(data.data.down);
                            $('#thumbs-up-tips>span.text').html(data.data.up);
                            $('#thumbs-down').html(data.data.down);
                            $('#thumbs-up').html(data.data.up);
                        } else {
                            alert('failure');
                        }
                    }
                });

            });

            function give_a_like(product_id, p, c) {
                window.location.href = '/login';
                return;
                if (product_id == '') {
                    alert("param is wrong");
                    return false;
                }

                $.ajax({
                    url: "/product/evaluation",
                    method: 'get',
                    cache: false,
                    dataType: 'json',
                    data: {
                        product_id: product_id,
                        type: p,
                        search_tid: c,
                        event_type: 'search',
                        position: '0',
                    },
                    success: function(data) {
                        if (data['status'] == 200) {
                            if (p == 1) {
                                $('#thumbs-up-tips .text').html(data.message);
                            } else {
                                $('#thumbs-down-tips .text').html(data.message);
                            }
                            $('#shareProduct').modal('show');
                        } else {
                            alert(data.message);
                        }
                    }
                });
            }
        </script>
        <script>
            //点赞功能
            function addThumb() {
                $('.thumb').unbind();
                $('.thumb.no-click-thumb').on('click', function(e) {
                    e.preventDefault();
                    window.location.href = '/login';
                });
                $('.thumb:not(.no-click-thumb)').on('click', function(e) {
                    e.preventDefault();
                    window.location.href = '/login';
                    return;
                    let nowDom = $(this);
                    let data = {
                        reviewer_id: -1,
                        reply_id: $(this).attr('data-replyId'),
                        reply_type: $(this).attr('data-replytype'),
                        thumb_type: $(this).attr('data-thumbtype')
                    };

                    $.ajax({
                        url: "/comment-thumb/add-thumb",
                        type: 'post',
                        data: data,
                        success: function(data) {
                            if (data.code == 200) {
                                $(nowDom.find('span')[1]).html(parseInt($(nowDom.find('span')[1]).html()) +
                                    1);
                                nowDom.find('span').css('color', '#3FC5CB');
                            } else if (data.code == 201) {
                                $('#favoritesTitle .thumb-title').css('display', 'block');
                                $('#favoritesTitle .thumb-title').html(data.msg);
                                titleModel(true);
                            }
                        },
                        error: function(err) {

                        }
                    })
                });

            }
            //评论
            $('.reply .reply-comnect .div-input').focus(function() {
                $(this).removeClass('red_border');
                $('#commment-result').html('').css('marginBottom', '0');
            })
            $('.input-emoji>.comment-now').on('click', function() {
                if ($.trim($(this).parent().parent().parent().find('.div-input').val()) == '') {
                    $('#favoritesTitle .thumb-title').css('display', 'block');
                    $('#favoritesTitle .thumb-title').html('Please enter your comments');
                    titleModel(true);
                    return;
                }
                // if($.trim($(this).parent().parent().parent().find('.div-input').val()).length<2) {
                //     $('#favoritesTitle .thumb-title').css('display','block');
                //     $('#favoritesTitle .thumb-title').html('Please enter more than 2 characters');
                //     titleModel(true);
                //     return;
                // };
                if ($.trim($(this).parent().parent().parent().find('.div-input').val()).length < 20) {
                    $(this).parent().parent().parent().find('.div-input').addClass('red_border');
                    $('#commment-result').html('The content should be no less than 20 characters.').css('marginBottom',
                        '15px');
                    return;
                } else {
                    $(this).parent().parent().parent().find('.div-input').removeClass('red_border');
                    $('#commment-result').html('').css('marginBottom', '0');
                }
                if ($.trim($(this).parent().parent().parent().find('.div-input').val()).length > 500) {
                    $('#favoritesTitle .thumb-title').css('display', 'block');
                    $('#favoritesTitle .thumb-title').html('Sorry, you can enter up to 500 characters.');
                    titleModel(true);
                    return;
                };
                $(this).attr('disabled', 'disabled');
                $('#loading').css('display', 'flex');
                let now = $(this)
                let imgNumber = $(this).parent().parent().find('.updata-img');
                let data = {
                    reviewer_id: -1,
                    product_id: 9816402,
                    content: $(this).parent().parent().parent().find('.div-input').val(),
                    nickname: '',
                    thumb_img: '',
                    topic_type: 1,
                    domain: 'www.amazon.com',
                };
                for (let i = 0; i < imgNumber.length; i++) {
                    if ($(imgNumber[i]).find('img').attr('src') != '') {
                        data['imgJson' + (i + 1)] = $(imgNumber[i]).find('input')[0].files[0];
                    }
                }

                let formData = new FormData();
                for (var key in data) {
                    formData.append(key, data[key]);
                }
                fetch("/comment/add-comment", {
                        method: "POST",
                        header: {
                            'Content-Type': 'multipart/form-data',
                        },
                        body: formData
                    })
                    .then(respones => respones.json())
                    .then(data => {
                        now.removeAttr("disabled");
                        $('#loading').css('display', '');
                        if (data.code == 200) {
                            if (data.commentIntegral != 0) {
                                $('#favoritesTitle .thumb-title').css('display', 'block');
                                // $('#favoritesTitle .thumb-title').html('Leave Comment <br> <span style="font-size: 16px;color: #3FC5CB;">'+"+"+data.commentIntegral+'</span> points');
                                $('#favoritesTitle .thumb-title').html('Thank you for your comment!');
                                titleModel(true);
                            } else {
                                $('#favoritesTitle .thumb-title').css('display', 'block');
                                $('#favoritesTitle .thumb-title').html('Thank you for your comment!');
                                titleModel(true);
                            }
                            now.parent().parent().parent().find('.div-input').val('');
                            now.parent().parent().find('.input-img-list').html(getUpimg());
                            if ($('#comments').css('display') == 'none') {
                                $('#comments').css('display', 'block');
                            }
                            handleData(data.data, $('.comments-list'), 0, data.page, data.pageCount, 1);
                            $('.comment-number').html(parseInt($('.comment-number').html()) + 1)
                        } else if (data.code == 403) {
                            $('#favoritesTitle .thumb-title').css('display', 'block');
                            $('#favoritesTitle .thumb-title').html(data.msg);
                            titleModel(true);

                        }
                    })
                    .catch(error => {

                    })
            })

            //获取评论数据
            function getComments(page) {
                let newPage = page ? page : 1;
                let data = {
                    product_id: 9816402,
                    page: newPage,
                    topic_type: 1
                }
                $.ajax({
                    url: "/comment/list-comment",
                    type: 'post',
                    dataType: 'json',
                    data: data,
                    success: function(data) {
                        if (data.code == 200) {
                            if (data.data.length > 0) {
                                $('#comments').css('display', 'block');
                                handleData(data.data, $('.comments-list'), 0, data.page, data.pageCount);
                            }
                        }
                    },
                    error: function(err) {

                    }
                })
            }
            if (goJump.isJump == 1 && goJump.commentPage != 0) { //判断是否需要跳到指定位置
                getComments(goJump.commentPage);
            } else {
                getComments();
            }

            //获取推荐评论数据
            function getFeaturedComments() {
                let data = {
                    product_id: 9816402,
                    topic_type: 1
                }
                $.ajax({
                    url: "/comment/list-hot-comment",
                    type: 'post',
                    dataType: 'json',
                    data: data,
                    success: function(data) {
                        if (data.code == 200) {
                            if (data.data.length > 0) {
                                $('#featuredComment').css('display', 'block');
                                handleData(data.data, $('.featuredComment-list'), 1, data.page, data.pageCount);
                            }
                        }
                    },
                    error: function(err) {

                    }
                })
            }
            getFeaturedComments();
            /*
             * @value comment_id 当前评论的id
             *  page 当前页数
             *  dom 是那一条评论的回复
             *  isload 是否加载过回复 0未加载 1加载
             *  upPage 从页面加载  1加载
             *  获取回复的数据
             *
             * */
            function getReply(comment_id, page, dom, isload, upPage,
            reply_num) { //value.comment_id,1,'key'+value.comment_id,0,value.reply_num
                let newPage = page ? page : 1
                let data = {
                    product_id: 9816402,
                    page: newPage,
                    comment_id: comment_id
                }
                $.ajax({
                    url: "/comment-reply/list-comment-reply",
                    type: 'post',
                    dataType: 'json',
                    data: data,
                    success: function(data) {
                        if (data.code == 200) {
                            if (upPage == 1) {
                                handReplyData(data.data, dom, isload, data.pageCount, data.page, comment_id,
                                    reply_num, 1, 1);
                            } else {
                                handReplyData(data.data, dom, isload, data.pageCount, data.page, comment_id,
                                    reply_num);
                            }
                        }
                    },
                    error: function(err) {

                    }
                })
            }
            //关闭其余的输入框
            function closeborder() {
                $('.reply-deals a').unbind();
                $('.reply-deals a').on('click', function(e) {
                    e.preventDefault();
                    window.location.href = '/login';
                    return;
                    let notDom = $(this).attr('href');
                    $('.panel-collapse:not(' + notDom + ')').collapse('hide');
                })
            }
            //需要重新绑定的事件
            function bindEvent() {
                closeborder();
                addImgUp();
                replyMsg();
                delectImg();
                addThumb();
                pageClick();
                $('.panel-collapse').collapse('hide');
                commentImg();
                $("img.lazy").lazyload({
                    effect: "fadeIn"
                });
                delectComment();
                bannedUser();
            }
            $(function() {
                bindEvent();
                //getImgSize($('.reply .head-img img')[0]);
            })
            //回复消息
            function replyMsg() {
                $('.comment-reply').unbind();
                $('.comment-reply').on('click', function(e) {
                    e.preventDefault();
                    if ($(this).parent().parent().parent().find('.div-input').val() == '') {
                        $('#favoritesTitle .thumb-title').css('display', 'block');
                        $('#favoritesTitle .thumb-title').html('Please enter your comments ');
                        titleModel(true);
                        return;
                    };
                    if ($(this).parent().parent().parent().find('.div-input').val().length < 2) {
                        $('#favoritesTitle .thumb-title').css('display', 'block');
                        $('#favoritesTitle .thumb-title').html('Please enter more than 2 characters');
                        titleModel(true);
                        return;
                    };
                    if ($(this).parent().parent().parent().find('.div-input').val().length > 500) {
                        $('#favoritesTitle .thumb-title').css('display', 'block');
                        $('#favoritesTitle .thumb-title').html('Sorry, you can enter up to 500 characters.');
                        titleModel(true);
                        return;
                    };
                    $(this).attr('disabled', 'disabled');
                    $('#loading').css('display', 'flex');
                    let now = $(this);
                    let data = {
                        reviewer_id: -1,
                        from_uid: -1,
                        from_nickname: '',
                        from_thumb_img: '',
                        to_uid: $(this).attr('data-id'),
                        to_nickname: $(this).attr('data-name'),
                        comment_id: $(this).attr('data-comment'),
                        product_id: 9816402,
                        content: $(this).parent().parent().parent().find('.div-input').val(),
                        reply_num: $(this).attr('data-replynum'),
                        topic_type: 1,
                        domain: 'www.amazon.com',
                        reply_id: $(this).attr('data-replyId')
                    };
                    let imgNumber = $(this).parent().parent().find('.updata-img');
                    for (let i = 0; i < imgNumber.length; i++) {
                        if ($(imgNumber[i]).find('img').attr('src') != '') {
                            data['imgJson' + (i + 1)] = $(imgNumber[i]).find('input')[0].files[0];
                        }
                    }
                    if ($(this).attr("data-reply")) {
                        data.to_content = $(this).closest(".comment-deals-text").find('p').html();
                    }
                    let formData = new FormData();
                    for (var key in data) {
                        formData.append(key, data[key]);
                    }
                    fetch("/comment-reply/add-comment-reply", {
                            method: "POST",
                            header: {
                                'Content-Type': 'multipart/form-data',
                            },
                            body: formData
                        })
                        .then(respones => respones.json())
                        .then(data => {
                            now.removeAttr("disabled");
                            $('#loading').css('display', '');
                            if (data.code == 200) {
                                now.parent().parent().parent().find('.div-input').val('');
                                now.parent().parent().find('.input-img-list').html(getUpimg());
                                if (data.commentReplyIntegral != 0) {
                                    $('#favoritesTitle .thumb-title').css('display', 'block');
                                    // $('#favoritesTitle .thumb-title').html('Leave Comment <br> <span style="font-size: 16px;color: #3FC5CB;">'+'+'+data.commentReplyIntegral+'</span> points');
                                    $('#favoritesTitle .thumb-title').html('Thank you for your comment!');
                                    titleModel(true);
                                } else {
                                    $('#favoritesTitle .thumb-title').css('display', 'block');
                                    $('#favoritesTitle .thumb-title').html('Thank you for your comment!');
                                    titleModel(true);
                                }
                                if ($('#comments').css('display') == 'none') {
                                    $('#comments').css('display', 'block');
                                }
                                handReplyData(data.data, now.attr('data-dom'), now.attr('data-isload'), data
                                    .pageCount, data.page, now.attr('data-comment'), $(this).attr(
                                        'data-replynum'), 0, 1)
                                $('.comment-number').html(parseInt($('.comment-number').html()) + 1);
                            } else if (data.code == 403) {
                                $('#favoritesTitle .thumb-title').css('display', 'block');
                                $('#favoritesTitle .thumb-title').html(data.msg);
                                titleModel(true);

                            }
                        })
                        .catch(error => {
                            now.removeAttr("disabled");
                            $('#loading').css('display', '');
                        })

                })
            }

            function commentHtml(value) {
                let isroad = 0;
                if (value.reply_num > 0) {
                    if (goJump.isJump == 1 && goJump.commentId == value.comment_id) {
                        getReply(value.comment_id, goJump.replyPage, 'key' + value.comment_id, 0, 0, value.reply_num);
                    } else {
                        getReply(value.comment_id, 1, 'key' + value.comment_id, 0, 0, value.reply_num);
                    }
                    isroad = 1;
                }
                if (goJump.isJump == 1 && goJump.commentId == value.comment_id) {
                    goJump.goTo();
                }
                let html = '';
                html += "<div class=\"comment-deals\" id='key" + value.comment_id + "'>" +
                    " <div class=\"head-img\">" +
                    " <img class=\"lazy\" data-original='";
                if (value.thumb_img != '') {
                    html += value.thumb_img;
                } else {
                    html += "https://vipon.s3.amazonaws.com/img/97358637f28c0e9c7c45a2851e790ea7a858d1994a7803.png";
                }
                html += "' onload='getImgSize(this)'>" +
                    " </div>\n" +
                    " <div class=\"comment-deals-text\">\n" +
                    "     <div class=\"data-time\">\n" +
                    "         <div>\n" +
                    "             <div class=\"name\">" + value.nickname;
                if (value.is_from_admin == 1) {
                    html += "<img style='margin-left: 10px' src='/images/main/btn_vipon_editor.png'/>";
                }
                html += "</div>\n" +
                    "             <!--<div class=\"date\">\n" +
                    "                 <span class=\"icon\"></span>\n" +
                    "                 <span>Joined Sep 2012</span>\n" +
                    "             </div>-->\n" +
                    "         </div>\n" +
                    "         <div class=\"time-delete\">" +
                    "         <div class=\"time\">" + value.create_time + "</div>\n" +
                    "</div>\n" +
                    "     </div>\n" +
                    "     <p>" + value.content + "</p>\n" +
                    " <div class=\"btn-img-list\">\n" +
                    "     <div class=\"btn-list\">\n";
                let imgArray = JSON.parse(value.content_img);
                if (imgArray[0] && imgArray.length > 0) {
                    for (let i = 0; i < imgArray.length; i++) {
                        html += "<div><a href='javascript:;' class='center-img' data-imgs='" + value.content_img +
                            "' data-index='" + i + "'><img class=\"lazy\" data-original='" + imgArray[i] +
                            "' onload='getImgSize(this)' alt=\"\"></a></div>";
                    }
                }
                html += "</div>\n" +
                    "     <ul class=\"list-unstyled\">\n" +
                    "         <!--<li class=\"report-deals\">\n" +
                    "             <a href=\"javascript:;\">\n" +
                    "                 <span class=\"report-icon\"></span>\n" +
                    "                 <span>report</span>\n" +
                    "             </a>\n" +
                    "         </li>-->\n" +
                    "         <li class=\"reply-deals\">\n" +
                    "             <a href=\"/login\" >\n" +
                    "                 <span class=\"reply-deals-icon\"></span>\n" +
                    "                 <span>reply</span>\n" +
                    "             </a>\n" +
                    "         </li>\n";
                if (value.thumb_type == 0) {
                    html += "<li class=\"thumbs-up\">\n" +
                        "      <a href=\"javascript:;\" class='thumb' data-replyId='" + value.comment_id +
                        "'  data-replyType='1' data-thumbType='1'>\n" +
                        "            <span style=\"color:#39393a;text-decoration: none;font-size:15px;\" class=\"glyphicon glyphicon-thumbs-up\" id=\"thumbs-up-tips\" aria-hidden=\"true\"></span>\n" +
                        "           <span>" + value.like_num + "</span>\n" +
                        "       </a>\n" +
                        "    </li>\n" +
                        "    <li class=\"thumbs-down\">\n" +
                        "          <a href=\"javascript:;\" class='thumb' data-replyId='" + value.comment_id +
                        "' data-replyType='1' data-thumbType='2'>\n" +
                        "              <span style=\"color:#39393a;text-decoration: none;font-size:15px;\" class=\"glyphicon glyphicon-thumbs-down\" id=\"thumbs-down-tips\" aria-hidden=\"true\"></span>\n" +
                        "               <span>" + value.down_num + "</span>\n" +
                        "           </a>\n" +
                        "     </li>\n";
                } else if (value.thumb_type == 1) {
                    html += "<li class=\"thumbs-up\">\n" +
                        "      <a href=\"javascript:;\" class='thumb no-click-thumb' style='color:#3FC5CB;' data-replyId='" +
                        value.comment_id + "' data-replyType='1' data-thumbType='1'>\n" +
                        "            <span style=\"text-decoration: none;font-size:15px;\" class=\"glyphicon glyphicon-thumbs-up\" id=\"thumbs-up-tips\" aria-hidden=\"true\"></span>\n" +
                        "           <span>" + value.like_num + "</span>\n" +
                        "       </a>\n" +
                        "    </li>\n" +
                        "    <li class=\"thumbs-down\">\n" +
                        "          <a href=\"javascript:;\" class='thumb no-click-thumb'  data-replyId='" + value.comment_id +
                        "' data-replyType='1' data-thumbType='2'>\n" +
                        "              <span style=\"color:#39393a;text-decoration: none;font-size:15px;\" class=\"glyphicon glyphicon-thumbs-down\" id=\"thumbs-down-tips\" aria-hidden=\"true\"></span>\n" +
                        "               <span>" + value.down_num + "</span>\n" +
                        "           </a>\n" +
                        "     </li>\n";
                } else if (value.thumb_type == 2) {
                    html += "<li class=\"thumbs-up\">\n" +
                        "      <a href=\"javascript:;\" class='thumb no-click-thumb'  data-replyId='" + value.comment_id +
                        "' data-replyType='1' data-thumbType='1'>\n" +
                        "            <span style=\"color:#39393a;text-decoration: none;font-size:15px;\" class=\"glyphicon glyphicon-thumbs-up\" id=\"thumbs-up-tips\" aria-hidden=\"true\"></span>\n" +
                        "           <span>" + value.like_num + "</span>\n" +
                        "       </a>\n" +
                        "    </li>\n" +
                        "    <li class=\"thumbs-down\">\n" +
                        "          <a href=\"javascript:;\" class='thumb no-click-thumb' style='color:#3FC5CB;' data-replyId='" +
                        value.comment_id + "' data-replyType='1' data-thumbType='2'>\n" +
                        "              <span style=\"color:#3FC5CB;text-decoration: none;font-size:15px;\" class=\"glyphicon glyphicon-thumbs-down\" id=\"thumbs-down-tips\" aria-hidden=\"true\"></span>\n" +
                        "               <span>" + value.down_num + "</span>\n" +
                        "           </a>\n" +
                        "     </li>\n";
                }
                html += "     </ul>\n" +
                    " </div>\n" +
                    " <div id=\"featuredComment" + value.comment_id + "\" class=\"panel-collapse collapse\">\n" +
                    "     <div class=\"reply\">\n" +
                    "         <div class=\"reply-comnect\">\n" +
                    "             <textarea class=\"div-input\"></textarea>\n" +
                    "             <div class=\"input-img-emoji\">\n" +
                    "<div class=\"input-img-list\">" +
                    "<div class=\"updata-img input-img\">\n" +
                    "                                        <label for=\"input-img" + value.comment_id +
                    "\"><span></span></label>\n" +
                    "                                        <input type=\"file\" id=\"input-img" + value.comment_id +
                    "\" accept=\".jpg,.png\" class=\"add-img\">\n" +
                    "                                        <img src=\"\" alt=\"\">\n" +
                    "                                        <div class=\"now-updata\" style=\"display: none;\">\n" +
                    "                                            <span class=\"percentage\">78%</span>\n" +
                    "                                            <span>uploading</span>\n" +
                    "                                        </div>\n" +
                    "                                        <a href=\"javascript:;\" class=\"delect-img\"><span></span></a>\n" +
                    "                                    </div>" +
                    "</div>\n" +
                    "                 <div class=\"input-emoji\">\n" +
                    "                     <!-- <div class=\"input-emoji-down\">\n" +
                    "                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"emoji\"></span></a>\n" +
                    "                          <div class=\"dropdown-menu\">7897987</div>\n" +
                    "                      </div>-->\n" +
                    "                     <button class=\"btn comment-reply\" data-dom='key" + value.comment_id +
                    "' data-replynum='" + value.reply_num + "'data-isload='" + isroad + "' data-comment='" + value.comment_id +
                    "' data-id='" + value.from_uid + "' data-name='" + value.nickname + "'>Reply</button>\n" +
                    "                 </div>\n" +
                    "             </div>\n" +
                    "         </div>\n" +
                    "     </div>\n" +
                    " </div>\n" +

                    "     \n" +

                    "     </div>\n" +
                    " </div>"

                return html;
            }


            function commentChildrenHtml(value, dom, comment_id, reply_num) {
                html = "<div class=\"comment-deals\">\n" +
                    " <div class=\"head-img\">\n" +
                    "     <img class=\"lazy\" data-original=\"";
                if (value.from_thumb_img != '') {
                    html += value.from_thumb_img;
                } else {
                    html += "https://vipon.s3.amazonaws.com/img/97358637f28c0e9c7c45a2851e790ea7a858d1994a7803.png";
                }
                html += "\" onload='getImgSize(this)' alt=\"\">\n" +
                    " </div>\n" +
                    " <div class=\"comment-deals-text\">\n" +
                    "     <div class=\"data-time\">\n" +
                    "         <div>\n";
                if ('1696596' == value.from_uid) {
                    html +=
                        "             <div class=\"reply\"><img style='margin: 0' src='https://vipon.s3.amazonaws.com/img/732080e658c6f1f63edee09a3834b16a40e2356cad10ea.svg'/>";
                } else {
                    html += "             <div class=\"reply\">" + value.from_nickname;
                }

                if (value.is_from_admin == 1) {
                    html += "<img src='/images/main/btn_vipon_editor.png'/>";
                }
                html += "</div>\n" +
                    "             <div class=\"text\">reply</div>\n";
                if ('1696596' == value.to_uid) {
                    html +=
                        "             <div class=\"replyed\"><img style='margin: 0' src='https://vipon.s3.amazonaws.com/img/732080e658c6f1f63edee09a3834b16a40e2356cad10ea.svg'/>";
                } else {
                    html += "             <div class=\"replyed\">" + value.to_nickname;
                }
                if (value.is_to_admin == 1) {
                    html += "<img src='/images/main/btn_vipon_editor.png'/>";
                }
                html += "</div>\n" +
                    "         </div>\n" +
                    "         <div class=\"time-delete\">" +
                    "         <div class=\"time\">" + value.create_time + "</div>\n" +
                    "</div>\n" +
                    "     </div>\n" +
                    "     <p>" + value.content + "</p>\n" +
                    "     <div class=\"btn-img-list\">\n" +
                    "         <div class=\"btn-list\">\n";
                let imgArray = JSON.parse(value.content_img);

                if (imgArray[0] && imgArray.length > 0) {
                    for (let i = 0; i < imgArray.length; i++) {
                        html += "<div><a href=\"javascript:;\" class='center-img' data-imgs='" + value.content_img +
                            "' data-index='" + i + "'><img class=\"lazy\" data-original=\"" + imgArray[i] +
                            "\" onload='getImgSize(this)' alt=\"\"></a></div>\n";
                    }
                }
                html += "         </div>\n" +
                    "         <ul class=\"list-unstyled\">\n" +
                    "             <!--<li class=\"report-deals\">\n" +
                    "                 <a href=\"javascript:;\">\n" +
                    "                     <span class=\"report-icon\"></span>\n" +
                    "                     <span>report</span>\n" +
                    "                 </a>\n" +
                    "             </li>-->\n" +
                    "             <li class=\"reply-deals\">\n" +
                    "                 <a href=\"/login" + value.comment_reply_id + "\">\n" +
                    "                     <span class=\"reply-deals-icon\"></span>\n" +
                    "                     <span>reply</span>\n" +
                    "                 </a>\n" +
                    "             </li>\n";
                if (value.thumb_type == 0) {
                    html += "             <li class=\"thumbs-up\">\n" +
                        "                 <a href=\"javascript:;\" class='thumb' data-replyId='" + value.comment_reply_id +
                        "' data-replyType='2' data-thumbType='1'>\n" +
                        "                     <span style=\"color:#39393a;text-decoration: none;font-size:15px;\" class=\"glyphicon glyphicon-thumbs-up\" id=\"thumbs-up-tips\" aria-hidden=\"true\"></span>\n" +
                        "                     <span>" + value.like_num + "</span>\n" +
                        "                 </a>\n" +
                        "             </li>\n" +
                        "             <li class=\"thumbs-down\">\n" +
                        "                 <a href=\"javascript:;\" class='thumb' data-replyId='" + value.comment_reply_id +
                        "' data-replyType='2' data-thumbType='2'>\n" +
                        "                     <span style=\"color:#39393a;text-decoration: none;font-size:15px;\" class=\"glyphicon glyphicon-thumbs-down\" id=\"thumbs-down-tips\" aria-hidden=\"true\"></span>\n" +
                        "                     <span>" + value.down_num + "</span>\n" +
                        "                 </a>\n" +
                        "             </li>\n";
                } else if (value.thumb_type == 1) {
                    html += "             <li class=\"thumbs-up\">\n" +
                        "                 <a href=\"javascript:;\" class='thumb no-click-thumb' style='color:#3FC5CB;' data-replyId='" +
                        value.comment_reply_id + "' data-replyType='2' data-thumbType='1'>\n" +
                        "                     <span style=\"text-decoration: none;font-size:15px;\" class=\"glyphicon glyphicon-thumbs-up\" id=\"thumbs-up-tips\" aria-hidden=\"true\"></span>\n" +
                        "                     <span>" + value.like_num + "</span>\n" +
                        "                 </a>\n" +
                        "             </li>\n" +
                        "             <li class=\"thumbs-down\">\n" +
                        "                 <a href=\"javascript:;\" class='thumb no-click-thumb' data-replyId='" + value
                        .comment_reply_id + "' data-replyType='2' data-thumbType='2'>\n" +
                        "                     <span style=\"color:#39393a;text-decoration: none;font-size:15px;\" class=\"glyphicon glyphicon-thumbs-down\" id=\"thumbs-down-tips\" aria-hidden=\"true\"></span>\n" +
                        "                     <span>" + value.down_num + "</span>\n" +
                        "                 </a>\n" +
                        "             </li>\n";
                } else if (value.thumb_type == 2) {
                    html += "             <li class=\"thumbs-up\">\n" +
                        "                 <a href=\"javascript:;\" class='thumb no-click-thumb' data-replyId='" + value
                        .comment_reply_id + "' data-replyType='2' data-thumbType='1'>\n" +
                        "                     <span style=\"color:#39393a;text-decoration: none;font-size:15px;\" class=\"glyphicon glyphicon-thumbs-up\" id=\"thumbs-up-tips\" aria-hidden=\"true\"></span>\n" +
                        "                     <span>" + value.like_num + "</span>\n" +
                        "                 </a>\n" +
                        "             </li>\n" +
                        "             <li class=\"thumbs-down\">\n" +
                        "                 <a href=\"javascript:;\" class='thumb no-click-thumb' style='color:#3FC5CB' data-replyId='" +
                        value.comment_reply_id + "' data-replyType='2' data-thumbType='2'>\n" +
                        "                     <span style=\"text-decoration: none;font-size:15px;\" class=\"glyphicon glyphicon-thumbs-down\" id=\"thumbs-down-tips\" aria-hidden=\"true\"></span>\n" +
                        "                     <span  >" + value.down_num + "</span>\n" +
                        "                 </a>\n" +
                        "             </li>\n";
                }

                html += "         </ul>\n" +
                    "     </div>\n" +
                    "     <div id=\"commentReplykey" + value.comment_reply_id + "\" class=\"panel-collapse collapse\">\n" +
                    "         <div class=\"reply\">\n" +
                    "             <div class=\"reply-comnect\">\n" +
                    "                <textarea class=\"div-input\"></textarea>\n" +
                    "                 <div class=\"input-img-emoji\">\n" +
                    "                     <div class=\"input-img-list\">\n" +
                    "                         <div class=\"updata-img input-img\">\n" +
                    "                             <label for=\"input-img-reply" + value.comment_reply_id +
                    "\"><span></span></label>\n" +
                    "                             <input type=\"file\" id=\"input-img-reply" + value.comment_reply_id +
                    "\" accept=\".jpg,.png\" class=\"add-img\">\n" +
                    "                             <img src=\"\" alt=\"\">\n" +
                    "                             <div class=\"now-updata\" style=\"display: none;\">\n" +
                    "                                 <span class=\"percentage\">78%</span>\n" +
                    "                                 <span>uploading</span>\n" +
                    "                             </div>\n" +
                    "                             <a href=\"javascript:;\" class=\"delect-img\"><span></span></a>\n" +
                    "                         </div>\n" +
                    "                     </div>\n" +
                    "                     <div class=\"input-emoji\">\n" +
                    "                         <!--<div class=\"input-emoji-down\">\n" +
                    "                             <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"emoji\"></span></a>\n" +
                    "                             <div class=\"dropdown-menu\">7897987</div>\n" +
                    "                         </div>-->\n" +
                    "                         <button class=\"btn comment-reply\" data-replyNum='" + reply_num + "' data-id='" +
                    value.from_uid + "' data-replyId='" + value.comment_reply_id + "' data-name='" + value.from_nickname +
                    "'  data-dom='" + dom + "' data-isload='1' data-comment='" + comment_id +
                    "' data-reply='true'>Reply</button>\n" +
                    "                     </div>\n" +
                    "                 </div>\n" +
                    "             </div>\n" +
                    "         </div>\n" +
                    "     </div>\n" +
                    " </div>\n" +
                    " </div>"
                return html;
            }

            $("#lowerProduct .btn-info").on('click', function() {

                if ($('#lowerProduct .list input:checked').length < 1) {
                    $('#favoritesTitle .thumb-title').css('display', 'block');
                    $('#favoritesTitle .thumb-title').html('Report reason can not be empty!');
                    titleModel(true);
                    return;
                }
                let datas = {
                    id: "9816402",
                    report_group: $('#lowerProduct .list input:checked').next().html()
                };
                if ($('#lowerProduct .list input:checked').next().html() == "Other") {
                    if ($.trim($('#lowerProduct textarea').val()) == '') {
                        $('#favoritesTitle .thumb-title').css('display', 'block');
                        $('#favoritesTitle .thumb-title').html('Report reason can not be empty!');
                        titleModel(true);
                        return;
                    }
                    datas.report_reason = $('#lowerProduct textarea').val();
                }
                $(".lower-product").css('display', 'none');
                $("#lowerProduct").modal("hide");
                $.ajax({
                    url: "/product/shelves",
                    type: "post",
                    data: datas,
                    success(data) {

                    },
                    error(err) {

                    }
                })
            })



            $('.affiliate button').on('click', function(e) {
                e.preventDefault();
                $('.affiliate').hide()
            })

            $('.report-sumbit').on('click', function() {
                window.location.href = "/login";
                return;
                if ($('.collapse-body input:checked').length < 1) {
                    $('#favoritesTitle .thumb-title').css('display', 'block');
                    $('#favoritesTitle .thumb-title').html('Report reason can not be empty!');
                    titleModel(true);
                    return;
                }
                let data = {
                    product_id: "9816402",
                    report_group: $('.collapse-body input:checked').next().html()
                }
                if ($('.collapse-body input:checked').next().html() == "Other") {
                    if ($.trim($('.collapse-body textarea').val()) == '') {
                        $('#favoritesTitle .thumb-title').css('display', 'block');
                        $('#favoritesTitle .thumb-title').html('Report reason can not be empty!');
                        titleModel(true);
                        return;
                    }
                    data.report_reason = $('.collapse-body textarea').val();
                }

                $(this).attr('disabled', 'disabled');
                let This = this;
                $.ajax({
                    url: "/report/handle",
                    method: 'POST',
                    cache: false,
                    dataType: "json",
                    data: data,
                    success: function(data) {
                        $(This).removeAttr('disabled');
                        $('#reportDropDown').collapse('hide');
                        $('#favoritesTitle .thumb-title').css('display', 'block');
                        $('#favoritesTitle .thumb-title').html(data.msg);
                        titleModel(true);
                        if (data.code == 0 || data.code == 200) {
                            $('[href="#reportDropDown"]').removeAttr('data-toggle')
                                .on('click', function(e) {
                                    e.preventDefault();
                                    $('#favoritesTitle .thumb-title').css('display', 'block');
                                    $('#favoritesTitle .thumb-title').html('You have already reported');
                                    titleModel(true);
                                })
                        }
                    }
                })

            })

            $('.shop .btn').on('click', function() {
                window.location.href = '/login';
                let url = '';
                if ($.trim($(this).html()) == 'Follow') {
                    url = "https://www.myvipon.com/shopper/my/fans-add";
                } else {
                    $('#followed').modal('show');
                    return;
                }
                $(this).attr('disabled', 'disabled');
                let This = this;
                $.ajax({
                    url: url,
                    type: 'post',
                    dataType: "json",
                    data: {
                        user_id: 325278
                    },
                    success: function(data) {
                        $(This).removeAttr('disabled');
                        if (data.code == 200) {
                            if ($.trim($(This).html()) == 'Follow') {
                                $(This).html('Following').addClass('followed')
                            } else {
                                $(This).html('Follow').removeClass('followed')
                            }
                        }
                        $('#favoritesTitle .thumb-title').css('display', 'block');
                        $('#favoritesTitle .thumb-title').html(data.message);
                        titleModel(true);
                    },
                    error: function() {
                        $(This).removeAttr('disabled');
                    }
                })
            })
            $('#followed .modal-body div > button:last-child').on('click', function() {
                let url = "https://www.myvipon.com/shopper/my/fans-del";
                $(this).attr('disabled', 'disabled');
                let This = this;
                $.ajax({
                    url: url,
                    type: 'post',
                    dataType: "json",
                    data: {
                        user_id: 325278
                    },
                    success: function(data) {
                        $(This).removeAttr('disabled');
                        $('#followed').modal('hide')
                        if (data.code == 200) {
                            $('.shop .btn').html('Follow').removeClass('followed');
                        }
                        $('#favoritesTitle .thumb-title').css('display', 'block');
                        $('#favoritesTitle .thumb-title').html(data.message);
                        titleModel(true);
                    },
                    error: function() {
                        $(This).removeAttr('disabled');
                    }
                })
            })
            $('.list-img li').on('click', function() {
                if ($(this).find('video').length == 0) {
                    $('.left-show-img video').hide();
                    $('.left-show-img video ').attr('src', '');
                    $('.left-show-img>img').show();
                    $('.left-show-img>img').attr('src', $(this).find('img').attr('src'));
                } else {
                    $('.left-show-img>img').hide();
                    $('.left-show-img video').show();
                    $('.left-show-img video ').attr('src', $(this).find('source').attr('src'));
                }
            })
            $('.product-video video').on('error', function() {
                $(this).next().css('display', 'flex');
            })
            $('.own-description span').on('click', function() {
                if ($(this).parent().hasClass('hide-own-description')) {
                    $(this).parent().removeClass('hide-own-description');
                } else {
                    $(this).parent().addClass('hide-own-description');
                }
            })
            var items = [];
            var observer = new IntersectionObserver(entries => {
                entries.forEach((item, index) => {
                    if (item.intersectionRatio > 0.8) {
                        let getpro_id = {
                            product_id: item.target.getAttribute('data-product-id'),
                            module: item.target.getAttribute('data-module'),
                        }
                        items.push(getpro_id);
                    }
                });
                // observer.disconnect() // 统计到就不在需要继续观察了
            }, {
                threshold: [0.8] // 只要展现面积达到 100% 的元素
            });
            $(window).scroll(function() {
                let newArr = Array.from(document.querySelectorAll(".box-contain"));
                newArr.forEach(item => observer.observe(item));
            });
            window.onbeforeunload = function(event) {
                $.ajax({
                    url: goodsurl,
                    type: 'post',
                    dataType: 'json',
                    headers: {
                        'Content-Type': "application/json;charset=UTF-8"
                    },
                    data: JSON.stringify({
                        "product_map": items,
                        "reviewer_id": 0,
                        "ip": "101.53.249.154"
                    }),
                    success: function(data) {},
                    error: function(err) {}
                });
            };
        </script>
        <script>
            (function() {
                var js =
                    "window['__CF$cv$params']={r:'778f8c901e7bd1f0',m:'_5uegtwOIHSH48GIXHaJBmhNXgAIWhX_wDGD76Ur4OE-1670943414-0-ATNwByLUJ734SN062aM0LWA+UYEaWn5nO8ijSyfcrkYTDgTAYKvREZD+L7DRoHSwBEQQQpgK9Q7l7Ru2SitHLVsFCWgyLaYld4qt++fRzgjuSDWCrYuQCdd/5HwIQ4Ee+PmwVr53iUoXWI9bLh2DOGne1Okq5T0bXpvmGz/+R7Sh0i5pHURFqOSWonXhfOmnpG8eLQw4mu12aLOC5BATyIoRQFaQz+9Y3t/vH0fnyFrr',s:[0xe57976ce9c,0x83a97d80e3],u:'/cdn-cgi/challenge-platform/h/b'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/b/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";
                var _0xh = document.createElement('iframe');
                _0xh.height = 1;
                _0xh.width = 1;
                _0xh.style.position = 'absolute';
                _0xh.style.top = 0;
                _0xh.style.left = 0;
                _0xh.style.border = 'none';
                _0xh.style.visibility = 'hidden';
                document.body.appendChild(_0xh);

                function handler() {
                    var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                    if (_0xi) {
                        var _0xj = _0xi.createElement('script');
                        _0xj.nonce = '';
                        _0xj.innerHTML = js;
                        _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                    }
                }
                if (document.readyState !== 'loading') {
                    handler();
                } else if (window.addEventListener) {
                    document.addEventListener('DOMContentLoaded', handler);
                } else {
                    var prev = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(e) {
                        prev(e);
                        if (document.readyState !== 'loading') {
                            document.onreadystatechange = prev;
                            handler();
                        }
                    };
                }
            })();
        </script>
    </div>
@endsection
