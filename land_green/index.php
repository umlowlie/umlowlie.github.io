<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Millionaire Fastlane</title>
    <link rel="icon" type="icon" href="lander/lend/images/favicon.ico" />

    <link rel="stylesheet" href="lander/lend/css/fonts.css" />
    <link rel="stylesheet" href="lander/lend/css/index.css" />
    <link rel="stylesheet" href="lander/lend/css/calc.css" />
    <link rel="stylesheet" href="lander/lend/css/range.css" />
    <link rel="stylesheet" href="lander/lend/css/checkbox-svg.css" />
    <link rel="stylesheet" href="css/intlTelInput.css" />

    <script src="lander/lend/js/jquery.min.js"></script>
    <link
      rel="preload"
      as="image"
      href="lander/lend/images/image&#32;-&#32;step&#32;3-min.jpg"
    />

    <link
      rel="stylesheet"
      href="lander/lend/valid/css/intlTelInput.css"
    />
    <link
      rel="stylesheet"
      href="lander/lend/valid/css/isValidNumber.css"
    />
  </head>
  <body>
    <section class="hero">
      <header class="header">
        <div class="container">
          <div class="header_inner">
            <div class="exclusive-offer">
              <div class="exclusive-flag flag-icon">
                <img
                  id="myImage"
                  style="height: 40px"
                  src=""
                  alt
                  data-init-macros="country_flag"
                />
              </div>
              <div class="exclusive-text">
                <span class="text-span-8"> <span style="color: #d1ad58;font-weight: bold;">Millionaire Fastlane</span> <br> FOR</span><span
                  class="text-span exc-2"
                >
                <span id="country"></span></span
                >
                <script>
                  $.ajax({
                    url: "https://get.geojs.io/v1/ip/geo.js",
                    dataType: "jsonp",
                    jsonpCallback: "geoip",
                    success: function (data) {
                      $("#country").text(data.country);
                      $("#myImage").attr("src", 'flag/' + data.country + '.svg');
                    },
                  });
                </script>
              </div>

            </div>
            <a
              href="#last"
              class="header_btn scrollToForm"
              >Create an account</a
            >
          </div>
        </div>
      </header>
      <?php
      $textVariants = [
        "<span>Earn with a click:</span> Discover the app that is creating new millionaires in the world",
        "<span>One video, one payment:</span> introducing the tool that's creating the new richs of this generation",
        "<span>Profit with a click:</span> discover the app that generates extra online income",
        "<span>Unveiled:</span> how ordinary people are profiting $7,000 weekly!",
        "<span>Former banker leaks</span> financial secret capable of turning any cellphone into a money-printing machine!"
      ];
      if (isset($_COOKIE['randomText'])) {
        $selectedText = $_COOKIE['randomText'];
      } else {
        $selectedText = $textVariants[array_rand($textVariants)];
        setcookie('randomText', $selectedText, time() + 3600);
      }
      ?>
      
      <div class="container">
        <div class="hero_inner">
          <div class="hero_textWrp">
            <h1 class="hero_title">
              <span class="accent"><?php echo $selectedText; ?></span>
            </h1>

            <div class="video" id="video">
            <!--<iframe-->
            <!--  src="https://www.youtube.com/embed/-CYPuHLRY8g?autoplay=1&controls=0&showinfo=0" -->
            <!--  frameborder="0"-->
            <!--  allowfullscreen-->
            <!--></iframe>-->
<div style=""><iframe src="https://player.vimeo.com/video/878176644?badge=0&amp;autopause=0&amp;quality_selector=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Millionaire Fastlane"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
            </div>
          </div>
          <div id="form_link" class="hero_formWrp">
            <form
              onsubmit="myPreloader()"
              id="mainForm"
              class="form signup_form"
              method="post"
            >
              <div class="form_header">
                <h3 class="form_title">SIGN UP FOR FREE</h3>
                <p class="waiting">
                  <span id="pnum" class="pnum"></span
                  ><span id="number"></span> people are waiting for access to
                  the <span>Millionaire Fastlane</span> software
                </p>
              </div>
              <div class="form_inner">
                <div class="form_row">
                  <div class="input">
                    <input
                      type="text"
                      name="firstname"
                      placeholder="First Name"
                      class="input_control"
                      required
                    />
                  </div>
                  <div class="input">
                    <input
                      type="text"
                      name="lastname"
                      placeholder="Last Name"
                      class="input_control"
                      required
                    />
                  </div>
                </div>
                <div class="input">
                  <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    class="input_control"
                    required
                  />
                </div>
                <div class="input">
                  <input
                    type="text"
                    name="tel"
                    id="telephone"
                    class="input_control"
                    required
                  />
                </div>
                <button
                  id="btn_form"
                  name="submit"
                  class="btn_submit"
                  type="submit"
                >
                  <div id="preloader" class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                  <span id="cl_none">GET STARTED NOW</span>
                </button>
              </div>

            </form>
            <div class="rate_block">
              <div class="block_stars">
                <img src="img/91.png" alt="" />
              </div>
              <div class="block_st_text">
                Rated 4.7 stars by over <span>54,291 users</span>
              </div>
            </div>
                        <div class="seen_block">
              <h3>As seen on</h3>
              <div class="seen_img_block">
                <img
                  src="img/33.png"
                  style="width: 120px; margin: 0 10px"
                  alt=""
                />
                <img
                  src="img/11.png"
                  style="width: 60px; margin: 0 10px"
                  alt=""
                />
                <img
                  src="img/22.png"
                  style="width: 60px; margin: 0 10px"
                  alt=""
                />
                <img
                  src="img/44.png"
                  style="width: 140px; display: block; margin: auto"
                  alt=""
                />
              </div>
              </div>
            <div class="form_signal">
              <div class="signal_p1">
                <div class="signal_imgWrp">
                  <img src="lander/lend/images/icon1.svg" alt="" />
                </div>
                <p class="signal_isOnline">is now online!</p>
              </div>
              <div class="signal_p2">
                <p class="signal_text">
                  Join the Millionaire Fastlane revolution:
                  <span
                    >Turn your phone into personal ATM</span
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="widgetWrp carousel">
      <div class="widget marquee carousel-container" id="slider">
        
      </div>
    </div>

    <section class="calculate">
      <div class="container">
          <div class="calculate__title ">
              <h2 class="action_title">How much I will earn in 7 days?</h2>
              <p class="title_desc">Calculate your potential profit (based on the result of 54,000+ people)</p>   
          </div>
          <div class="calculate__wrapper">
              <form class="calculate__group--form">
                  <div class="calculate__earn">
                      <label>Your profit:</label>
                      <h3 id="calcResult">$330</h3>
                  </div>
                  <div class="calculate__invest">
                      <label>Your investment:</label>
                      <span class="irs-grid" style="width: 95.3846%; left: 2.20769%;"><span class="irs-grid-pol"
                              style="left: 0%"></span><span class="irs-grid-text js-grid-text-0"
                              style="left: 0%; margin-left: -2.69231%;">350</span><span class="irs-grid-pol small"
                              style="left: 20%"></span><span class="irs-grid-pol small"
                              style="left: 15%"></span><span class="irs-grid-pol small"
                              style="left: 10%"></span><span class="irs-grid-pol small"
                              style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span
                              class="irs-grid-text js-grid-text-1"
                              style="left: 25%; visibility: visible; margin-left: -4.61538%;">125 188</span><span
                              class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small"
                              style="left: 40%"></span><span class="irs-grid-pol small"
                              style="left: 35%"></span><span class="irs-grid-pol small"
                              style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span
                              class="irs-grid-text js-grid-text-2"
                              style="left: 50%; visibility: visible; margin-left: -4.90385%;">250 125</span><span
                              class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small"
                              style="left: 65%"></span><span class="irs-grid-pol small"
                              style="left: 60%"></span><span class="irs-grid-pol small"
                              style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span
                              class="irs-grid-text js-grid-text-3"
                              style="left: 75%; visibility: visible; margin-left: -5%;">375 063</span><span
                              class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small"
                              style="left: 90%"></span><span class="irs-grid-pol small"
                              style="left: 85%"></span><span class="irs-grid-pol small"
                              style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span
                              class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -5.28846%;">500
                              000</span></span><span class="irs-bar irs-bar--single"
                          style="left: 0px; width: 2.30769%;"></span><span class="irs-shadow shadow-single"
                          style="display: none;"></span><span class="irs-handle single"
                          style="left: 0%;"><i></i><i></i><i></i></span></span><input type="text"
                          class="js-range-slider" name="my_range" value="" tabindex="-1" readonly="">
                  </div>
                  <div class="calculate__btn-container">
                      <a href="#mainForm" class="calculate__btn button btn-scroll">get access</a>
                  </div>
              </form>
          </div>
      </div>
  </section>

    <section class="action">
      <div class="container">
        <h2 class="action_title">
          We need to take action before <span> that it is too late</span>
        </h2>
        <div class="action_inner">
          <div class="action_itemBg">
            <div class="action_item">
              <div class="action_imWrp">
                <img
                  src="lander/lend/images/icon2.svg"
                  alt=""
                  class="action_img"
                />
              </div>
              <p class="action_text">
                We want to end poverty around the world, and you can help by
                investing <span class="currency">$</span>250. This will save
                lives and make you money too!
                <span
                  >20% of your investment goes directly to people in need.</span
                >
              </p>
            </div>
          </div>
          <div class="action_itemBg">
            <div class="action_item">
              <div class="action_imWrp">
                <img
                  src="lander/lend/images/icon3.svg"
                  alt=""
                  class="action_img"
                />
              </div>
              <p class="action_text">
                Previously, only large corporations had access to the
                highest-paying jobs. But with Millionaire Fastlane, things have
                changed.
                <span
                  >Now, you have the power to earn a large income that was
                  previously available only to the only available to the very
                  wealthy.</span
                >
              </p>
            </div>
          </div>
          <div class="action_itemBg">
            <div class="action_item">
              <div class="action_imWrp">
                <img
                  src="lander/lend/images/icon4.svg"
                  alt=""
                  class="action_img"
                />
              </div>
              <p class="action_text">
                The purpose of Millionaire Fastlane is to improve the world.
                <span
                  >If you have loans or a mortgage to pay and also want to make
                  a positive impact on the lives of the and also want to make a
                  positive impact on people's lives, you can people,</span
                >
                now you can do both.
              </p>
            </div>
          </div>
          <div class="action_itemBg">
            <div class="action_item">
              <div class="action_imWrp">
                <img
                  src="lander/lend/images/icon5.svg"
                  alt=""
                  class="action_img"
                />
              </div>
              <p class="action_text">
                A country's economy can be very delicate. As we saw in 2008, it
                only takes a few people in high places to cause significant
                damage. significant damage.
                <span
                  >Our goal is to prevent this from happening in the future.
                  future.</span
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="join">
      <div class="container">
        <div class="join_inner">
          <div class="join_textWrp">
            <h2 class="join_title">
              <span class="accent">Join us</span> to<br />
              finally defeat poverty!
            </h2>
            <p class="join_text">
              <b class="accent"
                >Join the Millionaire Fastlane revolution and be part of something
                bigger!</b
              >
              With our state-of-the-art technology, you can help solve the
              biggest problems facing our society today, from the biggest
              problems facing our society today, from ending poverty to from
              ending poverty to creating a fairer economy that benefits
              everyone. benefits everyone. And with the potential to turn your
              financial dreams dreams into reality, there's never been a better
              time to join us. join us.
              <span class="accent"
                >Don't miss out, register now and start making a difference!
              </span
              >
            </p>
          </div>
          <img
            class="join_img"
            src="lander/lend/images/image&#32;1&#32;-&#32;block&#32;3-min.jpg"
            alt=""
          />
        </div>
      </div>
    </section> -->
    <section class="video_rew">
      <div class="container">
        <h2 class="video_rew_title">
          Testimonials
        </h2>
        <div class="video_rew_inner">
          <div class="video_rew_block">
            
            <iframe src="https://player.vimeo.com/video/859545463?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479%22" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="Dep.Inglês_1" data-ready="true"></iframe>
          </div>
          <div class="video_rew_block">
            <iframe src="https://player.vimeo.com/video/859546427?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479%22" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="Dep.Jesse2" data-ready="true"></iframe>
          </div>
          <div class="video_rew_block">
            <iframe src="https://player.vimeo.com/video/853426876?color&amp;autopause=0&amp;loop=0&amp;muted=0&amp;title=1&amp;portrait=1&amp;byline=1#t=" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="Dep.Jesse2" data-ready="true"></iframe>

          </div>
          <div class="video_rew_block">
            <iframe src="https://player.vimeo.com/video/852632646?color&amp;autopause=0&amp;loop=0&amp;muted=0&amp;title=1&amp;portrait=1&amp;byline=1#t=" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="Dep.Jesse2" data-ready="true"></iframe>
          </div>
        </div>
      </div>
    </section>
    <section class="step">
      <div class="containerBg">
        <div class="container">
          <h2 class="step_heroTitle mainTitle">Here's how to get started</h2>
          <div class="step_wrp">
            <div class="step_half1">
              <div class="step_itemWrp step1 active">
                <div class="step_inner">
                  <p class="step_counter">Step 1</p>
                  <h4 class="step_title">Register on the site</h4>
                  <p class="step_text">
                  After signing up you will become a Millionaire Fastlane member and you will receive a call from our support, be sure to pick up the phone to get our commercial software for free.
                  </p>
                </div>
              </div>
              <div class="step_itemWrp step2">
                <div class="step_inner">
                  <p class="step_counter">Step 2</p>
                  <h4 class="step_title">Deposit funds into your account</h4>
                  <p class="step_text">
                    To make money with Millionaire Fastlane, you must invest at least
                    <span class="currency">$</span>250 or more, just like any
                    other business. Keep in mind that the bigger the investment, the bigger your daily profit.
                  </p>
                </div>
              </div>
              <div class="step_itemWrp step3">
                <div class="step_inner">
                  <p class="step_counter">Step 3</p>
                  <h4 class="step_title">Congratulations!</h4>
                  <p class="step_text">
                  To start trading with us, simply click the "Trade" button to take advantage of our award-winning automated trading algorithm. Or if you can then trade manually, but note that autotrading is better than stockmarket due to properly set up algorithms.
                  </p>
                </div>
              </div>
            </div>
            <div class="step_half2">
              <div class="step_img step1 active">
                <p class="step_img_desc">
                  Enter your email address to get VIP access to the system
                </p>
                <p class="step_img_desc">
                  Please enter your cell phone number to verify your identity.
                </p>
                <img
                  class=""
                  src="lander/lend/images/image&#32;-&#32;step&#32;1-min.jpg"
                  alt=""
                />
              </div>
              <div class="step_img step2">
                <p class="step_img_desc">
                  To activate your account and start earning, you must invest an
                  amount not less than the minimum deposit (<span class="currency">$</span>250)
                </p>
                <img
                  class=""
                  src="lander/lend/images/image&#32;-&#32;step&#32;2-min.png"
                  alt=""
                />
              </div>
              <div class="step_img step3">
                <img
                  class=""
                  src="lander/lend/images/image&#32;-&#32;step&#32;3-min.jpg"
                  alt=""
                />
              </div>
            </div>
          </div>
          <div class="step_mob">
            <div class="step_itemWrp step1 active">
              <div class="step_inner">
                <p class="step_counter">Step 1</p>
                <h4 class="step_title">Register on the site</h4>
                <p class="step_text">
                  After signing up you will become a Millionaire Fastlane member and you will receive a call from our support, be sure to pick up the phone to get our commercial software for free.
                  </p>
              </div>
            </div>
            <div class="step_img step1 active">
              <p class="step_img_desc">
                Enter your email address to get VIP access to the system. VIP
                access to the system
              </p>
              <p class="step_img_desc">
                Please enter your cell phone number to verify your identity.
              </p>
              <img
                class=""
                src="lander/lend/images/image&#32;-&#32;step&#32;1-min.jpg"
                alt=""
              />
            </div>
            <div class="step_itemWrp step2 active">
              <div class="step_inner">
                <p class="step_counter">Step 2</p>
                <h4 class="step_title">deposit funds into your account</h4>
                <p class="step_text">
                    To make money with Millionaire Fastlane, you must invest at least
                    <span class="currency">$</span>250 or more, just like any
                    other business. Keep in mind that the bigger the investment, the bigger your daily profit.
                  </p>
              </div>
            </div>
            <div class="step_img step2 active">
              <p class="step_img_desc">
                To activate your account and start earning, you must invest an
                amount not less than the minimum deposit (<span class="currency">$</span>250)
              </p>
              <img
                class=""
                src="lander/lend/images/image&#32;-&#32;step&#32;2-min.png"
                alt=""
              />
            </div>
            <div class="step_itemWrp step3 active">
              <div class="step_inner">
                <p class="step_counter">Step 3</p>
                <h4 class="step_title">Congratulations!</h4>
                <p class="step_text">
                  To start trading with us, simply click the "Trade" button to take advantage of our award-winning automated trading algorithm. Or if you can then trade manually, but note that autotrading is better than stockmarket due to properly set up algorithms.
                  </p>
              </div>
            </div>
            <div class="step_img step3 active">
              <img
                class=""
                src="lander/lend/images/image&#32;-&#32;step&#32;3-min.jpg"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="discover">
      <div class="container">
        <h2 class="discover_title">
          Frequently Asked 
          <span class="accent">Questions</span>
        </h2>
        <div class="discover_inner">

          <div class="accordion">
            <div class="accordion-item">
                <button class="accordion-header"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/></svg> What is the Millionaire Fastlane?</button>
                <div class="accordion-content">
                    <p>Unfortunately it cannot be explained what Millionaire Fastlane is, you need to see for yourself. Watch the Video at the Top of the Page, this is the ONLY way you will understand how it all works.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/></svg> How much can I earn?</button>
                <div class="accordion-content">
                    <p>You can start seeing results very quickly.... Just a few days after you start working or use the calculator to calculate your profit in 7 days.  
                    </p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/></svg> How do I access the Millionaire Fastlane?</button>
                <div class="accordion-content">
                    <p>Your access is sent IMMEDIATELY after confirmation of registration, via email and SMS.
                    </p>
                </div>
            </div>
          <div class="accordion-item">
            <button class="accordion-header"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/></svg> What do I need to get started?</button>
            <div class="accordion-content">
                <p><ul>
                  <li>Any computer or an Android or IOS smartphone.</li>
                    <li>  A Checking Account in your name to Withdraw your Earnings. At least $250 to get started.</li>
                      <li> Have the WILLINGNESS to participate and receive payments on account.</li>
                </ul></p>
            </div>
        </div>
        <div class="accordion-item">
          <button class="accordion-header"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/></svg> How will I learn to use the Millionaire Fastlane?</button>
          <div class="accordion-content">
              <p>Through the official app of our community. Everything is already ready and pre-configured for you to use. Within the App you also have access to video lessons teaching everything, click by click.
              </p>
          </div>
      </div>
        </div>

          <!-- <div class="discover_itemWrp">
            <div class="discover_item">
              <div class="discover_imgWrp">
                <img
                  src="lander/lend/images/icon6.svg"
                  alt=""
                  class="discover_img"
                />
              </div>
              <p class="discover_text">
                Imagine having a computer that can process thousands of complex
                decisions complex decisions simultaneously, unlike your home PC
                which can only do one your home PC that can only do one task at
                a time.
                <span class="accent">
                  With our Millionaire Fastlane machine, you can make smarter
                  transactions and earn more transactions and make more profit
                  than you ever thought possible.
                </span>
                In addition, you will also be contributing to making the world a
                better place.
              </p>
            </div>
          </div>
          <div class="discover_itemWrp">
            <div class="discover_item">
              <div class="discover_imgWrp">
                <img
                  src="lander/lend/images/icon7.svg"
                  alt=""
                  class="discover_img"
                />
              </div>
              <p class="discover_text">
                Our revolutionary technology analyzes stock prices every
                nanosecond, even when markets are nanosecond by nanosecond, even
                when markets are closed, to make accurate to make accurate
                predictions and find profitable trades for you.
                <span class="accent">
                  No other computer on the market can match the speed and
                  accuracy of our system. accuracy of our system.
                </span>
              </p>
            </div>
          </div>
          <div class="discover_itemWrp">
            <div class="discover_item">
              <div class="discover_imgWrp">
                <img
                  src="lander/lend/images/icon8.svg"
                  alt=""
                  class="discover_img"
                />
              </div>
              <p class="discover_text">
                Don't miss this exclusive opportunity to be at the forefront and
                use the power of Millionaire Fastlane and use the power of Millionaire Fastlane to your advantage. in your favor.
                <span class="accent">
                  Join now before everyone else notices and claim your place
                  among the best traders in the world!
                </span>
              </p>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    <section class="last" id="last">
      <div class="container">
        <div class="last_inner">
          <div class="last_part1">
            <img
              src="lander/lend/images/last_line.png"
              class="last_line"
            />
            <h2 class="last_title mainTitle">
              Revolutionize your investment strategy with
              Millionaire Fastlane.
              <a
                href="#form_link"
                ><span>Register now and join the future of trading!</span></a
              >
            </h2>
          </div>



          <div class="lsat_part2">
            <form
            onsubmit="myPreloader2()"
            id="secondForm"
            class="form signup_form"
            method="post"
          >
            <div class="form_header">
              <h3 class="form_title">SIGN UP FOR FREE</h3>
            </div>
            <div class="form_inner">
              <div class="form_row">
                <div class="input">
                  <input
                    type="text"
                    name="firstname"
                    placeholder="First Name"
                    class="input_control"
                    required
                  />
                </div>
                <div class="input">
                  <input
                    type="text"
                    name="lastname"
                    placeholder="Last Name"
                    class="input_control"
                    required
                  />
                </div>
              </div>

              <div class="input">
                <input
                  type="email"
                  name="email"
                  placeholder="Email"
                  class="input_control"
                  required
                />
              </div>
              <div class="input">
                <input
                  type="text"
                  name="tel"
                  id="telephone2"
                  class="input_control"
                  required
                />
              </div>
              <button
                id="btn_form_s"
                name="submit"
                class="btn_submit"
                type="submit"
              >
                <div id="preloader2" class="ldsellipsis">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <span id="cl_none2">GET STARTED NOW</span>
              </button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer" id="footer">
      <div class="container">
        <div class="footer_inner">

          <ul class="footer_disclaimers">
            <li class="footer_disclaimer first">
              <button id="button1">Privacy</button>
            </li>
            <li class="footer_disclaimer">
              <button id="button2">Terms</button>
            </li>
            <li class="footer_disclaimer">
              <button id="button3">Disclamer</button>
            </li>
          </ul>
        </div>

        <p class="footer_text">
          <b>IMPORTANT</b> : Earnings and Legal Disclaimers Earnings and income
          representations made by
          <span class="disclaimer-brand_name_new">en.bitcoincodev3.com</span>,
          (collectively “This Website”) only used as aspirational examples of
          your earnings potential. The success of those in the testimonials and
          other examples are exceptional results and therefore are not intended
          as a guarantee that you or others will achieve the same results.
          Individual results will vary and are entirely dependent on your use of
          <span class="disclaimer-brand_name_new">en.bitcoincodev3.com</span>.
          This Website is not responsible for your actions. You bear sole
          responsibility for your actions and decisions when using products and
          services and therefore you should always exercise caution and due
          diligence. You agree that this Website is not liable to you in any way
          for the results of using our services. See our Website terms of use
          for our full disclaimer of liability and other restrictions. Trading
          can generate notable benefits, however, it also involves the risk of
          partial/full loss of the invested capital, therefore, you should
          consider whether you can afford to invest. ©<span
            id="yearDisclaimerNext"
            >2023</span
          ><br /><br />
          <b>USA REGULATION NOTICE</b>: Trading Forex, CFDs and Cryptocurrencies
          is not regulated within the United States. Invest in Crypto is not
          supervised or regulated by any financial agencies nor US agencies. Any
          unregulated trading activity by U.S. residents is considered unlawful.
          This Website does not accept customers located within the United
          States or holding an American citizenship. This Website is not
          responsible for actions of customers located within the United States
          or holding an American citizenship. Customers located within the
          United States or holding an American citizenship bear sole
          responsibility for their actions and decisions when using products and
          services of this Website. In any and all circumstances the choice to
          use the Website, the Service and/or the Software is under full
          responsibility of User, who should comply with the current
          legislation.

          <script type="text/javascript">
            var yearDisclaimerNew = new Date();
            document.getElementById("yearDisclaimerNext").innerHTML =
              yearDisclaimerNew.getFullYear();
            document
              .querySelectorAll(".disclaimer-brand_name_new")
              .forEach(function (brandName) {
                brandName.innerHTML = location.hostname;
              });
          </script>
        </p>
      </div>
    </footer>

  <div class="popup" id="popup">
      <span id="popupName"></span>
      <span id="popupNumber"></span>
  </div>



  <div class="popups" id="popup1">
      <span><table  border="0" align="center" cellpadding="0" cellspacing="0">
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td align="center" style="color:#111; font-size: 24px;"><strong>Privacy Policy</strong> 
            <br>
            <br>
            <div style="color:#111; font-size: 20px;">General</div>
          </td>
        </tr>
        <tr><td align="center">&nbsp;</td></tr>
        <tr>
        <td align="left" style="padding: 20px;">
          We receive your personal data to use the Website and/or Service. Detailed information on the processing of your personal data is provided in this Privacy Policy.
          <br><br>
          This page informs you of our policies regarding the collection, use, and disclosure of personal data when you as a User of this Website (hereinafter «You» or «User») use this Website.
          <br><br>
          By using the Website, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Website terms of use.
          <br>
          <br>
          <br>
          <div style="color: #111;">Methods and principles of personal data processing</div>
          <br>
          We honor your security and process your own information with dignity, lawfully and in accordance with this Privacy Policy and relevant law. In case you are in the European Union, we process your personal data as per the Regulation (EU) 2016/679 of the European Parliament and of the Council of 27 April 2016 on the protection of natural persons with regard to the processing of personal data and on the free movement of such data, and repealing Directive 95/46/EC (General Data Protection Regulation; "GDPR").
          <br><br>
          In order to avoid unauthorized disclosure and use of personal data that do not have the authority to disclose such data, as well as to prevent other types of security breaches of personal data that are being processed, we have developed appropriate technical and organizational measures.
          <br><br>
          In the event that any violation of the security of the processed personal data occurs, which entails a high risk for your rights and freedoms, we will immediately inform you of our email address.
          <br><br>
          If you have not given your prior consent, we will not process your personal data.
          <br>
          <br>
          <br>
          <div style="color: #111;">Processed personal data</div>
          <br>
          The processing of personal data occurs after they are entered into the registration form on the Website. When submitting the registration form, you agree to conclude an agreement with us under the terms of which we facilitates communication between the supplier of Products and / or Services (Advertiser) and you, in order to process your application for concluding an agreement with the Advertiser for the purchase of Services or Products advertised on the Website.
          <br><br>
          The IP addresses and cookies of users of our website are collected and processed by us. Cookies are small pieces of data sent by a web server and stored on your computer, this data helps us improve our website experience. You can refuse cookies by disabling them in the settings in your web browser, however, restricting the usage of cookies may affect the operation of our website.
          <br><br>
          You confirm that all the personal data you provide is up-to-date, truthful and correct. You are responsible for any damage caused by the provision of incorrect personal information.
          <br><br><br>
          <div style="color: #111;">Methods of personal data processing</div><br>
          The processing of personal data is carried out automatically. The processing of personal data is automatic, this process cannot lead to any legal consequences, or in any other way affect you.
          <br><br>
          The processing of personal data may be delegated to other mass mailing service providers, processors, and IT and cloud service providers. In addition, we may delegate part or all of the processing to the processor, the mass mailing service provider, the IT service provider, and the cloud service provider. The selection of processors is carried out as carefully as possible so that your personal data is protected at any time during their processing.
          <br><br>
          To use the Service, it is necessary to provide your personal data to Advertisers.
          <br><br>
          Data can be transferred to any state in the world. Advertisers and processors are the recipients of your personal data. To complete the contract between us, the transfer of your personal data to Advertisers is required, as specified in the Terms. The transfer of personal data takes place using sufficient precautions to ensure that your personal data is properly protected.
          <br><br><br>
          <div style="color: #111;">Legal basis and periods of the personal data processing</div><br>
          In order to provide you with quality Services, we need to process the personal data that you provided to us in the registration form or give this data in any other way. Data processing is performed during the period we provide you with services in accordance with the Terms.
          <br><br>
          IP address, email address and cookie-derived information are processed to send you notifications of services and products related to the Website, as well as information about commercial opportunities that may interest you. Among the commercial offers, you can find advertisers or our other business partners. The processing of personal data is carried out according to your consent (mark in the registration form). You have the right to withdraw your consent to the collection of personal data without affecting the legality of the processing based on such consent prior to its revocation, as well as processing performed on other legal grounds than your consent. The processing of your email address for this purpose will be processed until you withdraw your consent.
          <br><br>
          Data subject rights
          <br><br>
          In case GDPR is applicable, you have the following rights of the data subject, but not limited to:
          <br>
          - Right of access to personal data (Article 15 of GDPR);
          <br>
          - Right to rectification (Article 16 of GDPR);
          <br>
          - Right to erasure (Article 17 of GDPR);
          <br>
          - Right to restriction of processing (Article 18 of GDPR);
          <br>
          - Right to data portability (Article 20 of GDPR);
          <br>
          - Right to object (Article 21 of GDPR);
          <br>
          - Right not to be subject to a decision based solely on automated processing, including profiling, which produces legal effects concerning the data subject or similarly significantly affects the data subject (Article 22 of GDPR);
          <br>
          - Right to lodge a complaint with a supervisory authority (Article 77 of GDPR).
          <br><br> 
          We state that we are not controller in the meaning of the GDPR regulation, as far as we do not determine the purposes and means of the processing of personal data, which succumbs to the Advertiser’s responsibility.
          <br><br>
          It should be noted that in cases where we are not required to be subject to the GDPR, we are not required to comply with these rights. However, even in this case, we will do our best to satisfy your complaint or request. Before we act on your request, you may need to verify your identity, this measure is necessary to protect your personal data, therefore we do not share your personal data with third parties. If you refuse to provide us with information that allows us to identify you, we will not be able to process your request.
          <br><br>
          This Privacy Policy may from time to time be changed or supplemented by us unilaterally. The new edition of the Privacy Policy comes into force from the moment they are published on the Website.
          <br>
          Please note that if you continue to use of the Website and the Service after any change of the Privacy Policy, means that you agree with, and consent to be bound by, the new Privacy Policy. If you disagree with any changes in this Privacy Policy and do not wish your information to be subject to it, you will need to stop using the Website and the Service.
          <br><br>
          A response to your request can be received within 40 (forty) working days from the moment we receive it. In a situation where it is impossible to process your request, we will definitely notify you about it. For communication we use electronic means of communication, for example e-mail or messenger, if you prefer a different method of communication, please notify us of this.
          <br><br>
          We will provide any communication and any action for free, however, when required, we may charge you a reasonable fee, taking into account administrative costs and other features associated with the provision of information or refuse to act upon request.
          <br><br>
          You can file a complaint related to the protection of personal data with the appropriate state body, request judicial protection if you believe that your rights have been violated. You can also file any complaint or request by contacting us.
          <br><br>
          If you need more information about the relevant authorities in your country or any such information, do not hesitate to contact us.
          <br><br>
        </td>
        </tr>
        <br>

      </table></span>
      <button class="close-button" onclick="closePopups('popup1')">x</button>
  </div>

  <div class="popups" id="popup2">
      <span>
        <table border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
        <tr>
          
          <td align="center" style="color:#111; font-size: 24px;">
            <strong>WEBSITE TERMS OF USE</strong> <br>
            <br>
            <div style="color:#111; font-size: 20px;">General provisions</div>
          </td>
        </tr>
        <tr>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="left" style="padding: 20px;">
            By using <script>document.write(location.hostname.replace(/[a-z]{2}\./, ''))</script> (hereinafter «Website»), you agree to abide by these Website terms of use, which govern the rights and obligations between the owner of the domain on which this Website is located (hereinafter «Operator»), and you as a User of this Website (hereinafter «You» or «User»).
            <br>
            <br>
            This domain belongs to Operator on the basis of ownership, the operational management of this advertising Website is performed solely by Operator. The Website provides You with information about the services and products of our partner(s) (hereinafter referred to as the «Advertiser(s)»). The Website allows you, as a User of this Website, to apply for the products or services of the Advertiser using its websites (hereinafter referred to as the «Service»). The terms of use of the Website are governed by the Website terms of use, which are published on the Website (hereinafter referred to as the "Terms"). 
            <br>
            <br>
            The Website acts as an online information platform and includes a service that allows the User to submit applications for Products and/or Services of the Advertiser that are advertised on the Website or using the Advertiser’s websites (hereinafter «Service») through his tracking platform (hereinafter «Software»).
            <br>
            <br>
            The Operator only facilitates communication between the supplier of products and / or services and the User. The Operator is not a provider of any services and/or products.
            <br>
            <br>
            When submitting any information, you agree with Website terms of use, under which we providing information to you, in order to process your application for concluding an agreement between you and the Advertiser for the purchase of services or goods advertised on the Website or using the Advertiser’s websites.
            <br>
            <br>
            <br>
      
            <div style="color:#111;">Website content</div>
            <br>
            All materials including banners, video materials and other content displayed on the Website (hereinafter referred to as the «Content») are provided exclusively for advertising and informational purposes and should not be used for other purposes, all materials are intended only for imitation or modeling. The Content may not be accurate and not based on accurate real events or facts, however, any and all information perceived from the Content in a visual, oral or written form is not financial, legal, tax or other professional advice and is not intended as replacement consultation with a qualified professional. The Operator makes no warranties or statements regarding the applicability, accuracy, suitability or completeness of the Content, the information contained in it is intended for informational and advertising purposes only, and all reservations presented above should be taken into account. Thus, based on the foregoing, if you want to use and apply the Software, you take full responsibility for your actions. No statement should be construed as providing investment advice or recommendations, suggestions or offers to buy or sell any type of securities and / or financial instruments or other products and/or services.
            <br>
            <br>
            All results presented in the methodology and / or system that is available in the Content do not necessarily indicate future results. No guarantees are given, no statements are made that any User will or may receive profits or losses similar to those indicated in the Content. Past execution of any system or strategy that might be displayed in the Content doesn't really demonstrate future execution and results that may be achieved. We emphatically prescribe that you counsel with your expert counselor before ever putting or exchanging any budgetary instrument. We strongly recommend that you consult with your personal consultant who has enough professional skills before ever investing or trading in any financial instrument.
            <br>
            <br>
            The User is duly notified, understands and acknowledges that the Operator is not authorized to offer any legal, accounting, investment or tax recommendations, or recommendations regarding investment strategy, suitability, profitability, or other issues.
            <br>
            <br>
            <br>
            <div style="color:#111;">Service usage</div>
            <br>
            To register on the Website, you may need a first name, last name, email address, phone number and password. Only one authorized user can have one account, registration of several accounts registered by the same individual or legal entity is not allowed and may lead to the closure by the Operator of as any and all accounts as the Operator considers necessary. Use of the Service is voluntary and free.
            <br>
            <br>
            By using the Website, you consent to your identification and password being kept confidential and you agree not to use the account of another authorized user.
            <br>
            <br>
            The Operator is not responsible for any loss or damage resulting from your non-compliance with these obligations, is not responsible for any damage caused by theft, hacking or any other unauthorized use of your password, identification data or other means of identification.
            <br>
            <br>
            During registration, the User is obliged to provide the Operator with true, accurate and complete information when registering by filling it in the registration form of the Website. The User agrees to comply with all applicable local, state, national and international laws and regulations regarding the use of the Website, the Service and/or the Software. In addition, the User acknowledges and agrees that the use of the Internet and access or transfer or connection to the Website is entirely at his/her own risk.
            <br>
            <br>
            In case of any violation, the Operator is not responsible for the security of any information transmitted to or from the Website. The User assumes all responsibility in relation to actions related to his/her use of the Website, including, but not limited to, maintaining or backing up any data.
            <br>
            <br>
            The Operator makes all commercially reasonable efforts to make the Software and/or Service available to the User. The User acknowledges that some components of the Service and/or Software may be provided by a third party, and thus there may be delays, errors, malfunctions, data delay, etc., which the Operator cannot control. The Operator cannot give any guarantees and does not bear any responsibility for cases when the Service and/or the Software are uninterrupted or error-free, or that defects in the Service and/or the Software are corrected.
            <br>
            <br>
            The Оperator receive any personal data in accordance with the Privacy Policy. The User agrees to read and accept the Privacy Policy before submitting any personal data on this Website. The User acknowledges that using the Website and using the Service requires the use of his/her personal data.
            <br>
            <br>
            Any User agrees to read and accept the Privacy Policy before submitting any personal data on this Website, in case the User finds out about a violation or potential violation of security in relation to any personal data provided to the Operator, or about any unauthorized hacking of the Website, the User shall:
            <br>
            <br>
            1) immediately notify the Operator of such a violation or potential violation;
            <br>
            2) provide assistance to the Operator if it is reasonably necessary to prevent or eliminate any such violation;
            <br>
            3) allows the Operator to comply with any applicable laws requiring reports of a security breach that leads to any violations related to the identification of personal data.
            <br>
            <br>
            Although the Website may be accessible worldwide, not all functions or Services offered on the Website are suitable or available for use in all countries. The Operator reserves the right to limit, at its discretion, the provision and quantity of any function or Service to any person or geographical region. In any way the choice to use the Website, the Service and/or the Software is under full responsibility of User, who should comply with the current legislation.
            <br>
            <br>
            Trading Forex, CFDs and Cryptocurrencies is not regulated within the United States. Invest in Crypto is not supervised or regulated by any financial agencies nor US agencies. Any unregulated trading activity by U.S. residents is considered unlawful. The Website does not accept User located within the United States or holding an American citizenship. This Website is not responsible for actions of customers located within the United States or holding an American citizenship. Customers located within the United States or holding an American citizenship bear sole responsibility for their actions and decisions when using products and services of this Website. In any and all circumstances the choice to use the Website, the Service and/or the Software is under full responsibility of User, who should comply with the current legislation.
            <br>
            <br>
            <br>
            <div style="color:#111;">IP rights</div>
            <br>
            The copyright to the Content belongs to both the Operator and its partners, and they cannot be stored, copied or modified in any format, sold or used in any way under any circumstances, distributed or transferred in any way without special permission of the Operator. Information, modules, patents, patent disclosures, patent applications, and all rights in inventions (whether patentable or not), trademarks, trade names, copyrights, methods, know-how, computer code (including HTML code, original software code, source code, object code), internet domain names, and registrations and applications for the registration thereof together with all of the goodwill associated therewith, algorithms, business methods, user interfaces, graphic design and software, software architecture, algorithms, data structures; and all developments, derivatives and improvements to them, regardless of whether they are registered or not, and all other intellectual property rights of every kind and nature throughout the world and however designated, whether arising by operation of law, contract, license, or otherwise, and all registrations, applications, renewals, extensions, continuations, divisions, or reissues thereof now or hereafter in effect (collectively referred to as “Intellectual Property”), are fully owned by the Operator, its branches, its successors and assigns, are controlled and licensed by him, as well as / or by third parties who have granted the Operator a license to use such intellectual property.
            <br>
            <br>
            The Operator provides the User with a personal, revocable, limited, non-exclusive, free and non-transferable license to use the Website, Software and Content for personal use only. The license does not allow the User to modify, copy, store, reproduce, republish, upload, publish, transfer, license, sublicense, display, lease, lease, sell, use or distribute in any way any data, intellectual property or material, provided by the Operator through the Website in any way not expressly permitted by these Terms. Any alteration, recompilation, translation, creation of any derivative works, disassembly, publication, deletion, alteration of any proprietary notices or labels, to provide protective interests or otherwise use the Website in any way not expressly permitted in this document for the User or any third party.
            <br>
            <br>
            You may not use any “deep link”, “page clear”, “robot”, “spider” or other automatic device, program, script, algorithm or methodology or any similar or equivalent manual process to access, receive, copy or control any part of the Website or in any way reproduce or bypass the navigation structure or presentation of the Website in order to receive or attempt to receive any materials, documents or information by any means, intentionally available through the Website,
            <br>
            or
            <br>
            try to gain unauthorized access to any part or function of the website, including, without limitation, the account of any user (s), any other systems or networks connected to the website or its servers, to any of the services offered on or through Website, hacking, password "mining", or any other illegal or prohibited method,
            <br>
            or
            <br>
            Investigate, scan, or test the vulnerability of the Website or any network connected to the Website, and not to violate security measures or authentication on the Website or on any network connected to the Website,
            <br>
            or
            <br>
            reverse search, track, or try to track any information about any user or visitor to the Website, or take any action that creates an unreasonable or disproportionately large load on the infrastructure of the Website, system, networks or any systems or networks associated with it, or use any device, software or procedures to interfere with the normal operation of the Website or the transactions conducted on the Website or the use of the Website by any other person,
            <br>
            or
            <br>
            fake headers, pretend to be another person or otherwise manipulate identifiers to hide the true identity or origin of any message or transmission sent to or from the Operator on the Website, or use the Website to collect email addresses or other contact or personal information,
            <br>
            or
            <br>
            advertise, share the brand, private label, use the Operator’s name, logo or similar name on another domain, distribute, resell or otherwise allow third parties access to the Website and its use, in whole or in part, without explicit, separate and prior written permission Operator,
            <br>
            or
            <br>
            use the Website in any other illegal way or in a way that may be perceived as causing harm, humiliation or other negative impact on the Operator. Attempting to unauthorized use of this Website may constitute an offense. The Operator reserves the right to view, track and register actions on the Website, including, without limitation, by archiving notifications or messages sent by the User through the Website. Also, the Operator reserves the right to change, suspend, terminate or interrupt work or access to the Website or any part thereof at any time and without prior notice in order to protect the Website or the activities of the Operator.
            <br>
            <br>
            <br>
            <div style="color:#111;">Limitation of liability</div>
            <br>
            The User assumes full responsibility and risk for the use of the Website, Content and Software. The Operator provides the Website, Content and Software and related information in the form in which it is and does not give any express or implied warranties, representations or endorsements.
            <br>
            <br>
            The Operator refuses any violations in relation to the Website, Service, Software, any information or third-party information or links provided to them. The Operator is not responsible for any costs or damages arising directly or indirectly as a result of any such transaction.
            <br>
            <br>
            The Operator shall under no circumstances be liable to any party for any direct, indirect, implied, punitive, special, incidental or other indirect losses arising directly or indirectly from any use of the Website, Content and Software that is provided as is, and without any warranty.
            <br>
            <br>
            The use of the Website, Content and Software is at the User’s own risk and responsibility.
            <br>
            <br>
            Any claims for compensation for losses, one way or another, may not be applicable to the Operator, under no circumstances will the Operator be liable for losses (including direct, indirect, indirect or special losses), even if he is informed of the possibility of such losses arising as a result of your use or personal dependence on this Website.
            <br>
            <br>
            The Advertiser remains solely and fully responsible for any violations in relation to the Content of advertising materials, accuracy and/or quality of information, Products and/or Services, Software and for any party of it, for any direct, indirect, implied, punitive, special, incidental or other indirect losses arising directly or indirectly from any use of the Website, Content of advertising materials, information and/or Software.
            <br>
            <br>
            Any claims for compensation for losses, one way or another, or any other claims and/or complaints in relation to the Website, Content of advertising materials, accuracy and/or quality of information, Products and/or Services, Software shall be raised and/or filed to the Advertiser.
            <br>
            <br>
            The quality, non-violation, accuracy, completeness or reliability of any third-party materials, programs, products displayed on such a third-party website or which you can access through a link to such a website is not confirmed in any way by the Operator, and the Operator does not give any guarantees regarding of this.
            <br>
            <br>
            The Operator expressly disclaims responsibility for the content, materials, accuracy and/or quality of information, products and/or services available or advertised on these third-party websites. All communication or relations between the User and a third party occur exclusively between the User and such third party and in no way affect the Operator.
            <br>
            <br>
            <br>
            <div style="color:#111;">Other</div>
            <br>
            If the Operator is not able to insist or ensure strict implementation of any provision of these Terms, this should be construed as a waiver of any provision or right in accordance with these Terms or legislation.
            <br>
            <br>
            Legal relationships established in accordance with this Terms will be governed by and construed in accordance with the laws of Hong Kong.
            <br>
            <br>
            The date of actual use of the Website by the User is the date of regulation of relations between the User and the Operator. The rights and obligations of the parties are exercised upon registration of the User.
            <br>
            <br>
            The Operator may transfer its rights and obligations in accordance with these Terms to any party and at any time without notifying the User. The User has no right and cannot assign any rights or obligations of the User to third parties without the prior written consent of the Operator. These Terms constitute the entire agreement between the User and the Operator regarding the use of the Website.
            <br>
            <br>
            The following provisions remain in force after the termination of these Terms: IP rights, Limitation of liability and any other provisions of these Terms that by their nature remain in force after the termination of this Terms.
            <br>
            <br>
            These Terms may from time to time be changed or supplemented by the Operator unilaterally. The new edition of the Terms comes into force from the moment they are published on the Website. If the User does not agree with the new Terms, he/she stops using the Website and the Service.
            <br>
            <br>
            Written communication or business relations between the parties also include communication or business relations by e-mail without an electronic signature, unless otherwise expressly provided herein. In the event that any part or provision of this Terms is deemed illegal or ineffective for any reason, neither validity nor the rest will be affected.
            <br>
          </td>
          </tr>
        </table>
      </span>
      <button class="close-button" onclick="closePopups('popup2')">x</button>
  </div>

  <div class="popups" id="popup3">
      <span>
        <table border="0" align="center" cellpadding="0" cellspacing="0" style="width: 100%;max-width: 1100px;padding: 0 20px;">
          <tr>
          <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="70" align="center" style="color:#111; font-size:24px"><strong>Disclaimer</strong></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">
              <p>
                EVERY EFFORT HAS BEEN MADE TO ACCURATELY REPRESENT THIS PRODUCT AND IT’S POTENTIAL. EVEN THOUGH THIS INDUSTRY IS ONE OF THE FEW WHERE ONE CAN WRITE THEIR OWN CHECK IN TERMS OF EARNINGS, THERE IS NO GUARANTEE THAT YOU WILL EARN ANY MONEY USING THE TECHNIQUES AND IDEAS IN THESE MATERIALS. EXAMPLES IN THESE MATERIALS ARE NOT TO BE INTERPRETED AS A PROMISE OR GUARANTEE OF EARNINGS. EARNING POTENTIAL IS ENTIRELY DEPENDENT ON THE PERSON USING OUR PRODUCT, IDEAS AND TECHNIQUES. WE DO NOT PURPORT THIS AS A "GET RICH SCHEME."ANY CLAIMS MADE OF ACTUAL EARNINGS OR EXAMPLES OF ACTUAL RESULTS CAN BE VERIFIED UPON REQUEST. YOUR LEVEL OF SUCCESS IN ATTAINING THE RESULTS CLAIMED IN OUR MATERIALS DEPENDS ON THE TIME YOU DEVOTE TO THE PROGRAM, IDEAS AND TECHNIQUES MENTIONED, YOUR FINANCES, KNOWLEDGE AND VARIOUS SKILLS. SINCE THESE FACTORS DIFFER ACCORDING TO INDIVIDUALS, WE CANNOT GUARANTEE YOUR SUCCESS OR INCOME LEVEL. NOR ARE WE RESPONSIBLE FOR ANY OF YOUR ACTIONS.
              </p>
              <p>
                <br>
                MATERIALS IN OUR PRODUCT AND OUR WEBSITE MAY CONTAIN INFORMATION THAT INCLUDES OR IS BASED UPON FORWARD-LOOKING STATEMENTS WITHIN THE MEANING OF THE SECURITIES LITIGATION REFORM ACT OF 1995. FORWARD-LOOKING STATEMENTS GIVE OUR EXPECTATIONS OR FORECASTS OF FUTURE EVENTS. YOU CAN IDENTIFY THESE STATEMENTS BY THE FACT THAT THEY DO NOT RELATE STRICTLY TO HISTORICAL OR CURRENT FACTS. THEY USE WORDS SUCH AS "ANTICIPATE," "ESTIMATE," "EXPECT," "PROJECT," "INTEND," "PLAN," "BELIEVE," AND OTHER WORDS AND TERMS OF SIMILAR MEANING IN CONNECTION WITH A DESCRIPTION OF POTENTIAL EARNINGS OR FINANCIAL PERFORMANCE.
              </p>
              <p><br>
                ANY AND ALL FORWARD LOOKING STATEMENTS HERE OR ON ANY OF OUR SALES MATERIAL ARE INTENDED TO EXPRESS OUR OPINION OF EARNINGS POTENTIAL. MANY FACTORS WILL BE IMPORTANT IN DETERMINING YOUR ACTUAL RESULTS AND NO GUARANTEES ARE MADE THAT YOU WILL ACHIEVE RESULTS SIMILAR TO OURS OR ANYBODY ELSES, IN FACT NO GUARANTEES ARE MADE THAT YOU WILL ACHIEVE ANY RESULTS FROM OUR IDEAS AND TECHNIQUES IN OUR MATERIAL.
              </p>
              <p><br>
                The author and publisher disclaim any warranties (express or implied), merchantability, or fitness for any particular purpose. The author and publisher shall in no event be held liable to any party for any direct, indirect, punitive, special, incidental or other consequential damages arising directly or indirectly from any use of this material, which is provided "as is", and without warranties.
              </p>
              <p><br>
                As always, the advice of a competent legal, tax, accounting or other professional should be sought. The author and publisher do not warrant the performance, effectiveness or applicability of any sites listed or linked to in this product.
              </p>
              <p><br>
                All links are for information purposes only and are not warranted for content, accuracy or any other implied or explicit purpose.
              </p>
              <p><br>Privacy</p>
              <p><br>
                We maintain this page to demonstrate our firm commitment to the rights and privacy of our users. This page explains how our site collects information from our members.
              </p>
              <p><br>
                Free Newsletter and mailing list: we respect the privacy of our users, and as such we will never share our database of email addresses and names with any third party.
              </p>
              <p><br>
                Upon confirmation that you would like to join our newsletter, we will from time to time send you free information relating to the products we market, general advice related to online marketing, and promotional material for other products. Your email will never be passed onto any third party. We will also never spam you. You may unsubscribe from the mailing list at any time.
              </p>
              <p><br>
                Personal Information we collect and how it is used: Service provider: when you purchase product, the payment is processed by product, who will collect your name, address, and credit card information so as to verify your order. They may not use the information for any other purpose. Upon ordering, we also collect your name and e-mail address. We use this information to follow-up on you as per the above newsletter section.
              </p>
              <p><br>Further Reminder - Earnings Disclaimer:</p>
              <p><br>
                Every effort has been made to accurately represent this product and it's potential. Even though this industry is one of the few where one can write their own check in terms of earnings, there is no guarantee that you will earn any money using the techniques and ideas in these materials.
              </p>
              <p><br>
                Examples in these materials are not to be taken as a promise or guarantee of earnings. Earning potential is entirely dependent on the person using our product, ideas, techniques and the effort put forth. We do not purport this as a "get rich scheme", and nor should you view it as such.
              </p>
              <p><br>
                Any and all forward looking statements here or on any of our sales material are intended to express our opinion of earnings potential. Many factors will be important in determining your actual results and no guarantees are made that you will achieve results similar to ours or anybody else’s, in fact no guarantees are made that you will achieve any results from our ideas and techniques.
              </p>
              <p><br>
                Results vary, and as with any money-making opportunity, you could make more or less. Success in ANY money-making opportunity is a result of hard work, time and a variety of other factors. No express or implied guarantees of income are made by product.
              </p>
              <p><br>
                Returns and refunds policy: as stated, if you purchase product, and you do not enjoy the financial freedom that you expected, do not make as much from our methods as you expected, or indeed for any reason, you may claim a refund for the product within 60 days of purchase. On a sidenote we do ask you to put the techniques into use before requesting a refund, for both our benefit: however, our refund policy is unconditional and this is a suggestion, not a requirement. We are aware that some buyers will not achieve their personal goals despite our best efforts to the contrary, and we stand by our refund policy as such. Please forward your receipt number (given to you when you ordered) to us and we will action your refund request as quickly as possible, typically within 24 hours.<br>
                Revisions to This Policy: Our company reserves the right to revise, amend, or modify this policy, our Terms Of Service agreement, and our other policies and agreements at any time and in any manner, by updating this posting.
              </p>
            </td>
          </tr>
        </table>
      </span>
      <button class="close-button" onclick="closePopups('popup3')">x</button>
  </div>
  <div class="overlay" id="overlay"></div>

  <div class="gdpr-popup" id="gdpr-popup">
      <div class="popup-content">
          <h2>This website uses cookies</h2>
          <p>We use cookies to improve user experience. Choose what cookies you allow us to use. You can read more about our Cookie Policy in our Privacy policy</p>
          <button class="accept-button" onclick="acceptCookies()">Accept</button>
          <button class="accept-button dicline" onclick="acceptCookies()">Decline</button>
      </div>
  </div>

  </body>
  <link rel="stylesheet" href="lander/lend/css/styles.css" />
  <link rel="stylesheet" href="lander/lend/css/step.css" />

  <script src="main_slider.js"></script>
  <script src="lander/lend/js/device.min.js"></script>

  <script src="lander/lend/js/ion.rangeSlider.min.js"></script>
  <script src="lander/lend/js/getdetector.js"></script>
  <script src="lander/lend/js/jquery.validate.min.js"></script>

  <script src="lander/lend/js/script.js"></script>
  <script src="lander/lend/js/pop.js"></script>



  <script src="lander/lend/main.js@v2"></script>

  <script src="lander/lend/js/intlTelInput-jquery.min.js"></script>
  <script src="lander/lend/js/main.js"></script>
  <script src="lander/lend/js/utils.js"></script>
  <script>
    var randomNumber = Math.floor(Math.random() * (200 - 100 + 1)) + 100;
    document.getElementById("number").textContent = randomNumber;
  </script>
</html>
