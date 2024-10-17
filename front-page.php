<?php get_header(); ?>
<?php get_template_part('navbar'); ?>
<?php get_template_part('mobile-navbar'); ?>

<div id="slide-show" class="border-b-2 border-black w-full">
  <img class="slide-show-imgs w-full flex" alt="demolition" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demolition-chatham-kent.jpg">
</div>
<div id="after-slide-show-container" class="flex justify-center items-center w-full h-[200px] bg-[url('../images/yellow-background.jpg')] bg-cover drop-shadow-2xl shadow-black">
  <div id="after-slide-show-content" class="flex flex-col items-center">
    <h1 class="text-[1.8em] text-white mb-5 max-787px:text-[1.3em]">START YOUR CONSTRUCTION PROJECT TODAY.</h1>
    <button class="group text-2xl text-white bg-black outline outline-white outline-1 rounded w-[300px] h-[70px] flex items-center justify-center transition-colors ease-in-out duration-500 hover:cursor-pointer hover:bg-linkyellow hover:text-black hover:outline-black">
      <svg id="phone-icon" class="w-[28px] h-[28px] mr-2.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path class="svg-path group-hover:fill-black" d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z" fill="#fac40b"></path>
        </g>
      </svg>
      <p>CALL 226.626.0988</p>
    </button>
  </div>
</div>
<div class="welcome-info  text-white bg-[url('../images/nyblue-background.jpg')] py-5 flex flex-col items-center w-full">
  <div id="welcome-info-text" class="w-[800px] text-center max-900px:text-[.9em] max-900px:max-w-full">
    <h1 class="text-2xl mb-5 font-bold">WELCOME TO NEW DAY EXCAVATION</h1>
    <p class="mx-5 mb-5 text-md">We are a family owned company providing professional excavation, skid steer, demolition and concrete services. We offer construction services across South-Western Ontario, including London, Kitchener/Waterloo, Chatham-Kent, Norwich, Mitchell, Stratford, Windsor & in-between.</p>
    <p class="mx-5 mb-5 text-md">New Day Excavation is ready for your next excavation, skid steer, demolition or concrete project.</p>
  </div>
</div>
<div id="services-grid-menu" class="grid grid-cols-2 max-787px:grid-cols-1 w-full">
  <div class="services-grid-items text-white flex flex-col items-center justify-evenly text-center h-[400px] bg-gradient-to-r from-lga to-lgb">
    <img class="w-[90%] h-[175px] object-cover mb-[-30px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/excavator.jpg" alt="excavator">
    <strong class="text-[1.5em] mt-5">EXCAVATION SERVICES</strong>
    <p class="text-[.9em] mx-[30px]">New Day Excavation provide thorough excavation services throughout South-Western Ontario.</p>
    <button class="group text-white bg-black outline outline-white outline-1 rounded w-[150px] h-[40px] flex items-center justify-center transition-colors ease-in-out duration-500 hover:cursor-pointer hover:bg-linkyellow hover:text-black hover:outline-black">
      <p>LEARN MORE</p>
      <svg id="arrow-icon" class="group-hover:fill-black w-[14px] h-[14px] pl-[10px]" viewBox="-4.5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <title>arrow_right [#336]</title>
          <desc>Created with Sketch.</desc>
          <defs> </defs>
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Dribbble-Light-Preview" transform="translate(-305.000000, -6679.000000)" fill="#fac40b">
              <g id="icons" transform="translate(56.000000, 160.000000)">
                <path class="svg-path group-hover:fill-black" d="M249.365851,6538.70769 L249.365851,6538.70769 C249.770764,6539.09744 250.426289,6539.09744 250.830166,6538.70769 L259.393407,6530.44413 C260.202198,6529.66364 260.202198,6528.39747 259.393407,6527.61699 L250.768031,6519.29246 C250.367261,6518.90671 249.720021,6518.90172 249.314072,6519.28247 L249.314072,6519.28247 C248.899839,6519.67121 248.894661,6520.31179 249.302681,6520.70653 L257.196934,6528.32352 C257.601847,6528.71426 257.601847,6529.34685 257.196934,6529.73759 L249.365851,6537.29462 C248.960938,6537.68437 248.960938,6538.31795 249.365851,6538.70769" id="arrow_right-[#336]"> </path>
              </g>
            </g>
          </g>
        </g>
      </svg>
    </button>
  </div>
  <div class="services-grid-items text-white flex flex-col items-center justify-evenly text-center h-[400px] bg-gradient-to-r from-lga to-lgb">
    <img class="w-[90%] h-[175px] object-cover mb-[-30px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/skidsteer.jpg" alt="skidsteer">
    <strong class="text-[1.5em] mt-5">SKID STEER SERVICES</strong>
    <p class="text-[.9em] mx-[30px]">From hole drilling & landscaping, to driveways & grading, we have the skid steer service for you.</p>
    <button class="group text-white bg-black outline outline-white outline-1 rounded w-[150px] h-[40px] flex items-center justify-center transition-colors ease-in-out duration-500 hover:cursor-pointer hover:bg-linkyellow hover:text-black hover:outline-black">
      <p>LEARN MORE</p>
      <svg id="arrow-icon" class="group-hover:fill-black w-[14px] h-[14px] pl-[10px]" viewBox="-4.5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <title>arrow_right [#336]</title>
          <desc>Created with Sketch.</desc>
          <defs> </defs>
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Dribbble-Light-Preview" transform="translate(-305.000000, -6679.000000)" fill="#fac40b">
              <g id="icons" transform="translate(56.000000, 160.000000)">
                <path class="svg-path group-hover:fill-black" d="M249.365851,6538.70769 L249.365851,6538.70769 C249.770764,6539.09744 250.426289,6539.09744 250.830166,6538.70769 L259.393407,6530.44413 C260.202198,6529.66364 260.202198,6528.39747 259.393407,6527.61699 L250.768031,6519.29246 C250.367261,6518.90671 249.720021,6518.90172 249.314072,6519.28247 L249.314072,6519.28247 C248.899839,6519.67121 248.894661,6520.31179 249.302681,6520.70653 L257.196934,6528.32352 C257.601847,6528.71426 257.601847,6529.34685 257.196934,6529.73759 L249.365851,6537.29462 C248.960938,6537.68437 248.960938,6538.31795 249.365851,6538.70769" id="arrow_right-[#336]"> </path>
              </g>
            </g>
          </g>
        </g>
      </svg>
    </button>
  </div>
  <div class="services-grid-items text-white flex flex-col items-center justify-evenly text-center h-[400px] bg-gradient-to-r from-lga to-lgb">
    <img class="w-[90%] h-[175px] object-cover mb-[-30px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demolition-chatham-kent.jpg" alt="demolition">
    <strong class="text-[1.5em] mt-5">DEMOLITION SERVICES</strong>
    <p class="text-[.9em] mx-[30px]">We are ready to remove older building structures and building materials quickly and simply.</p>
    <button class="group text-white bg-black outline outline-white outline-1 rounded w-[150px] h-[40px] flex items-center justify-center transition-colors ease-in-out duration-500 hover:cursor-pointer hover:bg-linkyellow hover:text-black hover:outline-black">
      <p>LEARN MORE</p>
      <svg id="arrow-icon" class="group-hover:fill-black w-[14px] h-[14px] pl-[10px]" viewBox="-4.5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <title>arrow_right [#336]</title>
          <desc>Created with Sketch.</desc>
          <defs> </defs>
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Dribbble-Light-Preview" transform="translate(-305.000000, -6679.000000)" fill="#fac40b">
              <g id="icons" transform="translate(56.000000, 160.000000)">
                <path class="svg-path group-hover:fill-black" d="M249.365851,6538.70769 L249.365851,6538.70769 C249.770764,6539.09744 250.426289,6539.09744 250.830166,6538.70769 L259.393407,6530.44413 C260.202198,6529.66364 260.202198,6528.39747 259.393407,6527.61699 L250.768031,6519.29246 C250.367261,6518.90671 249.720021,6518.90172 249.314072,6519.28247 L249.314072,6519.28247 C248.899839,6519.67121 248.894661,6520.31179 249.302681,6520.70653 L257.196934,6528.32352 C257.601847,6528.71426 257.601847,6529.34685 257.196934,6529.73759 L249.365851,6537.29462 C248.960938,6537.68437 248.960938,6538.31795 249.365851,6538.70769" id="arrow_right-[#336]"> </path>
              </g>
            </g>
          </g>
        </g>
      </svg>
    </button>
  </div>
  <div class="services-grid-items text-white flex flex-col items-center justify-evenly text-center h-[400px] bg-gradient-to-r from-lga to-lgb">
    <img class="w-[90%] h-[175px] object-cover mb-[-30px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/concrete.jpg" alt="concrete">
    <strong class="text-[1.5em] mt-5">CONCRETE SERVICES</strong>
    <p class="text-[.9em] mx-[30px]">Regardless of size, we are able to install any type of concrete slab that you require.</p>
    <button class="group text-white bg-black outline outline-white outline-1 rounded w-[150px] h-[40px] flex items-center justify-center transition-colors ease-in-out duration-500 hover:cursor-pointer hover:bg-linkyellow hover:text-black hover:outline-black">
      <p>LEARN MORE</p>
      <svg id="arrow-icon" class="w-[14px] h-[14px] pl-[10px]" viewBox="-4.5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <title>arrow_right [#336]</title>
          <desc>Created with Sketch.</desc>
          <defs> </defs>
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Dribbble-Light-Preview" transform="translate(-305.000000, -6679.000000)" fill="#fac40b">
              <g id="icons" transform="translate(56.000000, 160.000000)">
                <path class="svg-path group-hover:fill-black" d="M249.365851,6538.70769 L249.365851,6538.70769 C249.770764,6539.09744 250.426289,6539.09744 250.830166,6538.70769 L259.393407,6530.44413 C260.202198,6529.66364 260.202198,6528.39747 259.393407,6527.61699 L250.768031,6519.29246 C250.367261,6518.90671 249.720021,6518.90172 249.314072,6519.28247 L249.314072,6519.28247 C248.899839,6519.67121 248.894661,6520.31179 249.302681,6520.70653 L257.196934,6528.32352 C257.601847,6528.71426 257.601847,6529.34685 257.196934,6529.73759 L249.365851,6537.29462 C248.960938,6537.68437 248.960938,6538.31795 249.365851,6538.70769" id="arrow_right-[#336]"> </path>
              </g>
            </g>
          </g>
        </g>
      </svg>
    </button>
  </div>
</div>
<div class="welcome-info text-white bg-[url('../images/nyblue-background.jpg')] py-5 flex flex-col items-center w-full">
  <h2 class="text-2xl mb-5 font-bold text-center">START YOUR NEXT CONSTRUCTION PROJECT TODAY.</h2>
  <button class="group text-2xl text-white bg-black outline outline-white outline-1 rounded w-[300px] h-[70px] flex items-center justify-center transition-colors ease-in-out duration-500 hover:cursor-pointer hover:bg-linkyellow hover:text-black hover:outline-black">
    <svg id="phone-icon" class="w-[28px] h-[28px] mr-2.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
      <g id="SVGRepo_iconCarrier">
        <path class="svg-path group-hover:fill-black" d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z" fill="#fac40b"></path>
      </g>
    </svg>
    <p>CALL 226.626.0988</p>
  </button>
</div>
<div id="page-bottom" class="text-white flex justify-center flex-wrap bg-[url('../images/slab-background.jpg')] pb-20 w-full">
  <div class="page-bottom-items flex flex-col w-[250px] mx-5 mt-[50px] max-1160px:w-[400px]">
    <h1 class="text-[1.3em] py-5 border-dotted border-y border-linkyellow">NEW DAY EXCAVATION</h1>
    <p class="first-line mt-5 text-[.9em]">Welcome to New Day Excavation!</p>
    <p class="my-5 text-[.9em]">Located in St. Thomas, we provide excavation, skid steer, demolition and concrete services all over South-Western Ontario.</p>
    <p class="text-[.9em]">Whether you require construction services in St. Thomas, London, Kitchener/Waterloo, Chatham-Kent, Norwich, Mitchell, Stratford, Simcoe, Windsor or anywhere in between, we’re here to help you with your next excavation, skid steer, demolition or concrete project! Give us a call for a free quote today!</p>
    <button class="page-bottom-buttons mt-5 hover:text-gray-600 rounded text-sm bg-offwhite text-black font-bold w-[120px]">LEARN MORE</button>
  </div>
  <div class="page-bottom-items flex flex-col w-[250px] mx-5 mt-[50px] max-1160px:w-[400px]">
    <h1 class="text-[1.3em] py-5 border-dotted border-y border-linkyellow">OUR SERVICES</h1>
    <a class="first-line mt-5 text-linkyellow pb-[15px] hover:underline" href="#">Excavation Services</a>
    <a class="text-linkyellow pb-[15px] hover:underline" href="#">Skid Steer Services</a>
    <a class="text-linkyellow pb-[15px] hover:underline" href="#">Demolition Services</a>
    <a class="text-linkyellow pb-[15px] hover:underline" href="#">Concrete Services</a>
    <button class="page-bottom-buttons mr-[80px] hover:text-gray-600 rounded text-sm bg-offwhite text-black font-bold w-[120px]">VIEW SERVICES</button>
  </div>
  <div class="page-bottom-items flex flex-col w-[250px]  mx-5 mt-[50px] max-1160px:w-[400px]">
    <h1 class="text-[1.3em] py-5 border-dotted border-y border-linkyellow">REQUEST A QUOTE</h1>
    <form action="?" method="post">
      <input class="mt-5 mb-2.5 w-[230px] h-[25px]" type="text" id="name" placeholder="Your Name*">

      <input class="mb-2.5 w-[230px] h-[25px]" type="email" id="email" placeholder="Your Email*">

      <input class="mb-2.5 w-[230px] h-[25px]" type="tel" id="phone" placeholder="Your Phone*">

      <input class="pb-[100px] mb-5 w-[230px]" type="text" id="message" placeholder="Your Message*">

      <input class="page-bottom-buttons mr-[80px] hover:cursor-pointer hover:text-gray-600 rounded text-sm bg-offwhite text-black font-bold w-[120px]" type="submit" value="SEND MESSAGE">
    </form>
  </div>
  <div class="page-bottom-items flex flex-col w-[250px] mx-5 mt-[50px] max-1160px:w-[400px]">
    <h1 class="text-[1.3em] py-5 border-dotted border-y border-linkyellow">CONTACT US</h1>
    <h2 class="mt-5 text-[1.1em]">NEW DAY EXCAVATION</h2>
    <span class="text-[.9em]">
      57627 Calton Line
      <br>
      Vienna, ON
      <br>
      N0J 1Z0
    </span>
    <br>
    <span class="text-[.9em]">
      <strong>Tel. </strong><span class="yellow-text text-linkyellow">226.626.0988</span>
      <br>
      <strong>E. </strong><span class="yellow-text text-linkyellow">info@newdayexcavation.ca</span>
      <button id="email-button" class="mr-[90px] mt-5 hover:text-gray-600 rounded page-bottom-buttons text-sm bg-offwhite text-black font-bold w-[120px]">E-MAIL US</button>
    </span>
  </div>
</div>
<?php get_footer(); ?>