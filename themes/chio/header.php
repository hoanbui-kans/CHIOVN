<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header id="main-header" class="globalNav py-3 border-b border-slate-200 noDropdownTransition compact duration-300 ease-in-out">
  <div class="container mx-auto">
    <ul class="navRoot">
      <li class="font-bold navSection logo py-1">
        <a class="rootLink item-home colorize" href="https://ch.io.vn">
          <img class="block dark:hidden w-full max-w-[160px] xl:max-w-[220px]" src="https://ch.io.vn/wp-content/uploads/2025/01/LOGO-FINAL.svg" alt="">
          <img class="hidden dark:block w-full max-w-[160px] xl:max-w-[220px]" src="https://ch.io.vn/wp-content/uploads/2025/01/Logo-Light.svg" alt="">
        </a>
      </li>
      <li class="font-bold navSection hidden xl:flex flex-wrap primary">
        <a class="rootLink rouned block hover:text-blue-700 ease-in-out px-2 xl:px-3 py-3 text-base hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700" href="/"> 
          <?php esc_attr_e("Trang chủ", "chio")?>
        </a>
        <a class="rootLink hasDropdown rounded-md flex items-center gap-1 hover:text-blue-700 ease-in-out px-2 xl:px-3 py-3 text-base hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700" data-dropdown="products"> 
          <?php esc_attr_e("Thiết kế", "chio")?>
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-3 h-3" viewBox="0 0 512 512">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 184l144 144 144-144"></path>
            </svg>
          </span>
        </a>
        <a href="/giao-dien" class="rootLink hasDropdown relative rounded-md flex items-center gap-1 hover:text-blue-700 ease-in-out px-2 xl:px-3 py-3 text-base hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700" data-dropdown="themes"> Giao diện mẫu</span>
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-3 h-3" viewBox="0 0 512 512">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 184l144 144 144-144"></path>
            </svg>
          </span>
        </a>
        <a href="/huong-dan/" class="rootLink hasDropdown rounded-md flex items-center gap-1 hover:text-blue-700 ease-in-out px-2 xl:px-3 py-3 text-base hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700" data-dropdown="developers"> Resource <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-3 h-3" viewBox="0 0 512 512">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 184l144 144 144-144"></path>
            </svg>
          </span>
        </a>
        <a class="rootLink rouned block hover:text-blue-700 ease-in-out px-2 xl:px-3 py-3 text-base hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700" href="/bang-gia"> Bảng giá </a>
        <a class="rootLink rounded-md block hover:text-blue-700 ease-in-out px-2 xl:px-3 py-3 text-base hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700" href="/lien-he/"> Liên hệ </a>
      </li>
      <li class="font-bold navSection secondary flex flex-wrap">
        <div class="flex-1 flex justify-end items-center xl:flex-none gap-5 order-2 xl:order-3">
          <a id="theme-toggle" type="button" class="hidden rootLink text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm py-2.5 px-2">
            <svg id="theme-toggle-dark-icon" class="w-5 h-5 text-[#1974ec]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
              <path d="M340 480H106c-29.5 0-54.92-7.83-73.53-22.64C11.23 440.44 0 415.35 0 384.8c0-29.44 12.09-54.25 35-71.74 12.1-9.26 27.2-16.17 43.33-20.05a16 16 0 0011.81-12.21c7.15-32.54 22.25-60.49 44.33-81.75A139.82 139.82 0 01232 160c32.33 0 62.15 10.65 86.24 30.79a142.22 142.22 0 0137.65 49.54 16.06 16.06 0 0011.12 9c24 5.22 45.42 15.78 61.62 30.56C451.77 301 464 329.82 464 363.2c0 32.85-13.13 62.87-37 84.52-22.89 20.82-53.8 32.28-87 32.28zm170.53-270.21a16.34 16.34 0 00-1.35-15.8 16 16 0 00-19.57-5.58c-10.7 4.65-24.48 7.17-39.92 7.28-55.3.4-101.38-45-101.38-100.31 0-15.75 2.48-29.84 7.18-40.76a16.3 16.3 0 00-1.85-16.33 16 16 0 00-19.1-5c-38.63 16.82-66.18 51.51-75.27 92.54a4 4 0 003.19 4.79 162.54 162.54 0 0176.31 35.59 172.58 172.58 0 0139.64 47.84 16.35 16.35 0 009.54 7.64c23.89 7.17 45.1 18.9 62.25 34.54q4.44 4.07 8.48 8.42a4 4 0 005.16.57 129.12 129.12 0 0046.69-55.43z"></path>
            </svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
              <path d="M340 480H106c-29.5 0-54.92-7.83-73.53-22.64C11.23 440.44 0 415.35 0 384.8c0-26.66 10.08-49.8 29.14-66.91 15.24-13.68 36.17-23.21 59-26.84.06 0 .08 0 .09-.05 6.44-39 23.83-72.09 50.31-95.68A140.24 140.24 0 01232 160c30.23 0 58.48 9.39 81.71 27.17a142.24 142.24 0 0142.19 53.21 16 16 0 0011.19 9c26 5.61 48.4 17.29 65.17 34C453 304.11 464 331.71 464 363.2c0 32.85-13.13 62.87-37 84.52-22.89 20.82-53.8 32.28-87 32.28zm19-232.18zm28.89-26.14a168.8 168.8 0 0134.76 14.71 4 4 0 005.82-2.44 97 97 0 003.53-26.68c-.39-52.43-43.48-95.22-95.91-95.27A95.46 95.46 0 00281 129.33h-.06a3.38 3.38 0 001 6 162.45 162.45 0 0151.28 26.4 173.92 173.92 0 0145.32 52.51 16 16 0 009.35 7.44zM496 224h-32a16 16 0 010-32h32a16 16 0 010 32zM336 96a16 16 0 01-16-16V48a16 16 0 0132 0v32a16 16 0 01-16 16zm-90.51 37.49a15.92 15.92 0 01-11.31-4.69l-22.63-22.62a16 16 0 0122.63-22.63l22.62 22.63a16 16 0 01-11.31 27.31zm181.02 0a16 16 0 01-11.31-27.31l22.62-22.63a16 16 0 0122.63 22.63l-22.63 22.62a15.92 15.92 0 01-11.31 4.69z"></path>
            </svg>
          </a>
          <div class="xl:block">
            <ul class="header-nav header-nav-main nav nav-right nav-size-medium nav-spacing-xsmall nav-uppercase">
              <li class="account-item has-dropdown">
                <button data-cal-link="ch-agency/30min" class="inline-flex items-center gap-2 font-semibold text-base py-2 px-3 bg-black rounded-full text-white"> 
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><rect width="416" height="384" x="48" y="80" fill="none" stroke-linejoin="round" stroke-width="32" rx="48"></rect><circle cx="296" cy="232" r="24"></circle><circle cx="376" cy="232" r="24"></circle><circle cx="296" cy="312" r="24"></circle><circle cx="376" cy="312" r="24"></circle><circle cx="136" cy="312" r="24"></circle><circle cx="216" cy="312" r="24"></circle><circle cx="136" cy="392" r="24"></circle><circle cx="216" cy="392" r="24"></circle><circle cx="296" cy="392" r="24"></circle><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M128 48v32m256-32v32"></path><path fill="none" stroke-linejoin="round" stroke-width="32" d="M464 160H48"></path></svg>
                  <?php esc_attr_e("Lịch tư vấn", "chio")?>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </li>
      <li class="navSection mobile flex justify-end xl:hidden flex-wrap">
        <a class="rootLink item-mobileMenu colorize flex items-center justify-center">
          <svg class="w-6 h-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 18V20H5V18H16ZM21 11V13H3V11H21ZM19 4V6H8V4H19Z"></path>
          </svg>
        </a>
        <div class="popup">
          <div class="popupContainer bg-white dark:bg-slate-800">
            <a class="popupCloseButton">Close</a>
            <div class="grid grid-cols-1 md:grid-cols-2 p-4 gap-[35px]">
              <div class="mobileProducts !p-0">
                <h4 class="mb-4">Sitemap</h4>
                <ul class="font-semibold grid grid-cols-1 gap-3">
                  <li>
                    <a class="hover:text-blue-600 item-pricing" href="/" data-analytics-action="pricing" data-action-source="mobile-nav"> Trang chủ </a>
                  </li>
                  <li>
                    <a class="hover:text-blue-600 item-workswith" href="/gioi-thieu">Giới thiệu</a>
                  </li>
                  <li>
                    <a class="hover:text-blue-600 item-documentation" href="/giao-dien/">Giao diện mẫu</a>
                  </li>
                  <li>
                    <a class="hover:text-blue-600 item-documentation" href="/bang-gia/">Bảng giá</a>
                  </li>
                  <li>
                    <a class="hover:text-blue-600 item-documentation" href="/lien-he/">Liên hệ</a>
                  </li>
                </ul>
              </div>
              <div class="mobileProducts !p-0">
                <h4 class="mb-4">Resource</h4>
                <ul class="font-semibold grid grid-cols-1 gap-3">
                  <li>
                    <a class="hover:text-blue-600 item-about" href="/resource-plugin">Plugin</a>
                  </li>
                  <li>
                    <a class="hover:text-blue-600 item-jobs" href="/blog/">Blog</a>
                  </li>
                  <li>
                    <a class="hover:text-blue-600 item-blog" href="/resource/">Tài liệu hướng dẫn</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="mobileProducts">
              <h4 class="mb-4 px-4">Tìm kiếm mẫu</h4>
              <div class="mobileProductsList px-4">
                <div class="w-full">
                  <form action="https://ch.io.vn/giao-dien/" method="GET">
                    <div class="relative col-span-2">
                      <input type="hidden" name="posts_per_page" value="12">
                      <input type="hidden" name="paged" value="1">
                      <input type="hidden" name="post_type" value="giao_dien">
                      <input name="s" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg shadow focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-slate-800 dark:border-slate-700 dark:placeholder-gray-400 dark:text-white" placeholder="Tìm kiếm mẫu giao diện" value="">
                      <button class="absolute right-0 p-3 top-1" type="submit">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                          <path fill="none" stroke-miterlimit="10" stroke-width="32" d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"></path>
                          <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                        </svg>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div class="dropdownRoot">
    <div class="dropdownBackground bg-white dark:bg-slate-800" style="transform: translateX(515px) scaleX(2.07692) scaleY(1.01);">
      <div class="alternateBackground bg-white dark:bg-slate-800" style="transform: translateY(360.396px);"></div>
    </div>
    <div class="dropdownArrow bg-white dark:bg-slate-800" style="transform: translateX(1055px) rotate(45deg);"></div>
    <div class="dropdownContainer" style="transform: translateX(515px); width: 1080px; height: 404px;">
      <div class="dropdownSection left" data-dropdown="products">
        <div class="dropdownContent dark:bg-slate-800 p-5 w-[1200px]">
          <div class="grid grid-cols-2 py-[35px] gap-[35px]">
            <div class="col-span-2 xl:col-span-1">
              <h3 class="mb-5 font-semibold text-[17px]">Nền tảng người dùng</h3>
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <div class="flex gap-3 p-3 relative rounded-md border border-slate-200 bg-white items-center text-sm hover:bg-slate-200 dark:border-slate-600 dark:bg-slate-700">
                  <div class="w-[30px] h-[30px] rounded-md border border-blue-200 bg-blue-100 flex items-center text-blue-600 p-1">
                    <img src="/wp-content/uploads/2023/10/cm-extensibility-icon.svg" alt="">
                  </div>
                  <div class="flex-1 flex items-center">
                    <a href="">Gausy Booking</a>
                  </div>
                </div>
                <div class="flex gap-3 p-3 relative rounded-md border border-slate-200 bg-white items-center text-sm hover:bg-slate-200 dark:border-slate-600 dark:bg-slate-700">
                  <div class="w-[30px] h-[30px] rounded-md border border-blue-200 bg-blue-100 flex items-center text-blue-600 p-1">
                    <img src="/wp-content/uploads/2023/10/Management_min.svg" alt="">
                  </div>
                  <div class="flex-1 flex items-center">
                    <a href="">ZNS-base</a>
                  </div>
                </div>
                <div class="flex gap-3 p-3 relative rounded-md border border-slate-200 bg-white items-center text-sm hover:bg-slate-200 dark:border-slate-600 dark:bg-slate-700">
                  <div class="w-[30px] h-[30px] rounded-md border border-blue-200 bg-blue-100 flex items-center text-blue-600 p-1">
                    <img src="/wp-content/uploads/2023/10/common-models-icon.svg" alt="">
                  </div>
                  <div class="flex-1 flex items-center">
                    <a href=""> Webflow</a>
                  </div>
                </div>
                <div class="flex gap-3 p-3 relative rounded-md border border-slate-200 bg-white items-center text-sm hover:bg-slate-200 dark:border-slate-600 dark:bg-slate-700">
                  <div class="w-[30px] h-[30px] rounded-md border border-blue-200 bg-blue-100 flex items-center text-blue-600 p-1">
                    <img src="/wp-content/uploads/2023/10/Tools_min.svg" alt="">
                  </div>
                  <div class="flex-1 flex items-center">
                    <a href=""> Tools</a>
                  </div>
                </div>
                <div class="flex gap-3 p-3 relative rounded-md border border-slate-200 bg-white items-center text-sm hover:bg-slate-200 dark:border-slate-600 dark:bg-slate-700">
                  <div class="w-[30px] h-[30px] rounded-md border border-blue-200 bg-blue-100 flex items-center text-blue-600 p-1">
                    <img src="/wp-content/uploads/2023/10/real-time-data.svg" alt="">
                  </div>
                  <div class="flex-1 flex items-center">
                    <a href=""> Open Source</a>
                  </div>
                </div>
                <div class="flex gap-3 p-3 relative rounded-md border border-slate-200 bg-white items-center text-sm hover:bg-slate-200 dark:border-slate-600 dark:bg-slate-700">
                  <div class="w-[30px] h-[30px] rounded-md border border-blue-200 bg-blue-100 flex items-center text-blue-600 p-1">
                    <img src="/wp-content/uploads/2023/10/Architecture_min.svg" alt="">
                  </div>
                  <div class="flex-1 flex items-center">
                    <a href="">Cơ sở dữ liệu phân tán</a>
                  </div>
                </div>
                <div class="flex gap-3 p-3 relative rounded-md border border-slate-200 bg-white items-center text-sm hover:bg-slate-200 dark:border-slate-600 dark:bg-slate-700">
                  <div class="w-[30px] h-[30px] rounded-md border border-blue-200 bg-blue-100 flex items-center text-blue-600 p-1">
                    <img src="/wp-content/uploads/2023/10/blue.svg" alt="">
                  </div>
                  <div class="flex-1 flex items-center">
                    <a href="">Quản trị nội dung</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-2 xl:col-span-1 relative">
              <a href="https://ch.io.vn/" target="_blank">
                <img class="ease-in-out shadow-x rounded-md mb-5 border border-slate-200" src="https://cdn.prod.website-files.com/611153e7af981472d8da199c/62d173049ec6caa37b63aa3f_01Geometry_Light_Optimized_Large.jpg" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="dropdownSection left" data-dropdown="themes">
        <div class="dropdownContent dark:bg-slate-800 p-5 w-[1200px]">
          <div class="grid grid-cols-1 xl:grid-cols-3 gap-[35px]">
            <div class="col-span-3 xl:col-span-1">
              <h3 class="font-semibold mb-4">Theo danh mục</h3>
              <ul class="grid grid-cols-1 gap-[15px] mb-5">
                <li>
                  <a href="https://ch.io.vn/danh-muc-giao-dien/blog-tin-tuc-tap-chi/" class="w-full inline-flex gap-1 text-sm items-center justify-between"> Blog - Tin tức - Tạp chí <span class="text-sm bg-blue-100 text-blue-800 font-medium px-2.5 py-0.5 rounded-lg dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800"> 13 </span>
                  </a>
                </li>
                <li>
                  <a href="https://ch.io.vn/danh-muc-giao-dien/landing-page/" class="w-full inline-flex gap-1 text-sm items-center justify-between"> Landing Pages <span class="text-sm bg-blue-100 text-blue-800 font-medium px-2.5 py-0.5 rounded-lg dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800"> 26 </span>
                  </a>
                </li>
                <li>
                  <a href="https://ch.io.vn/danh-muc-giao-dien/website-ban-hang-online-store/" class="w-full inline-flex gap-1 text-sm items-center justify-between"> Website bán hàng - Online Store <span class="text-sm bg-blue-100 text-blue-800 font-medium px-2.5 py-0.5 rounded-lg dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800"> 31 </span>
                  </a>
                </li>
                <li>
                  <a href="https://ch.io.vn/danh-muc-giao-dien/website-du-an-showcase/" class="w-full inline-flex gap-1 text-sm items-center justify-between"> Website dự án - Showcase <span class="text-sm bg-blue-100 text-blue-800 font-medium px-2.5 py-0.5 rounded-lg dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800"> 16 </span>
                  </a>
                </li>
                <li>
                  <a href="https://ch.io.vn/danh-muc-giao-dien/website-page-cong-ty-gioi-thieu/" class="w-full inline-flex gap-1 text-sm items-center justify-between"> Website page - Công ty, Giới thiệu <span class="text-sm bg-blue-100 text-blue-800 font-medium px-2.5 py-0.5 rounded-lg dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800"> 41 </span>
                  </a>
                </li>
              </ul>
              <a href="/giao-dien/" class="bg-blue-600 text-white gap-3 items-center focus:ring-4 focus:outline-none px-5 py-4 rounded-full inline-flex focus:ring-blue-300 font-medium p-2 text-uppercase text-base text-center"> Giao diện mẫu <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144m124-144H100"></path>
                </svg>
              </a>
            </div>
            <div class="col-span-3 xl:col-span-2 mt-4 md:mt-0">
              <h3 class="font-semibold mb-4">Tìm kiếm mẫu</h3>
              <div class="mb-4 w-full">
                <form action="https://ch.io.vn/giao-dien/" method="GET">
                  <div class="relative col-span-2">
                    <input type="hidden" name="posts_per_page" value="12">
                    <input type="hidden" name="paged" value="1">
                    <input type="hidden" name="post_type" value="giao_dien">
                    <input name="s" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg shadow focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-slate-800 dark:border-slate-700 dark:placeholder-gray-400 dark:text-white" placeholder="Tìm kiếm mẫu giao diện" value="">
                    <button class="absolute right-0 p-3 top-1" type="submit">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke-miterlimit="10" stroke-width="32" d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"></path>
                        <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                      </svg>
                    </button>
                  </div>
                </form>
              </div>
              <p class="mb-5 text-sm">Hệ thống xây dựng cơ sở dữ liệu cho từng Website mẫu của chúng tôi giúp bạn trải nghiệm xây dựng 1 Website hoàn chỉnh với cơ sở dữ liệu hoàn toàn tách biệt và bảo mật.</p>
              <div class="swiper swiper-header-themes swiper-initialized swiper-horizontal swiper-free-mode swiper-backface-hidden">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper" id="swiper-wrapper-b527d8cd8d912fbe" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-802px, 0px, 0px); transition-delay: 0ms;">
                  <div class="swiper-slide cursor-grab" style="width: 227.333px; margin-right: 40px;" role="group" aria-label="3 / 8" data-swiper-slide-index="2">
                    <div class="thumbnail">
                      <a href="https://ch.io.vn/giao-dien/mau-website/">
                        <img width="300" height="300" src="https://ch.io.vn/wp-content/uploads/2024/05/satmynghe-300x300.webp" class="rounded shadow-lg w-full h-[120px] xl:h-[200px] mb-3 object-cover wp-post-image" alt="" decoding="async" srcset="https://ch.io.vn/wp-content/uploads/2024/05/satmynghe-300x300.webp 300w, https://ch.io.vn/wp-content/uploads/2024/05/satmynghe-150x150.webp 150w, https://ch.io.vn/wp-content/uploads/2024/05/satmynghe.webp 700w" sizes="(max-width: 300px) 100vw, 300px">
                      </a>
                    </div>
                    <div class="content">
                      <a href="https://ch.io.vn/giao-dien/mau-website/">
                        <h3 class="text-sm font-semibold"> Mẫu website kinh doanh sản phẩm mỹ nghệ – Web Sắt Mỹ nghệ </h3>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide cursor-grab" style="width: 227.333px; margin-right: 40px;" role="group" aria-label="4 / 8" data-swiper-slide-index="3">
                    <div class="thumbnail">
                      <a href="https://ch.io.vn/giao-dien/mau-website-shop-ban-hoa/">
                        <img width="300" height="300" src="https://ch.io.vn/wp-content/uploads/2024/05/flowrist-300x300.webp" class="rounded shadow-lg w-full h-[120px] xl:h-[200px] mb-3 object-cover wp-post-image" alt="" decoding="async" srcset="https://ch.io.vn/wp-content/uploads/2024/05/flowrist-300x300.webp 300w, https://ch.io.vn/wp-content/uploads/2024/05/flowrist-150x150.webp 150w, https://ch.io.vn/wp-content/uploads/2024/05/flowrist.webp 700w" sizes="(max-width: 300px) 100vw, 300px">
                      </a>
                    </div>
                    <div class="content">
                      <a href="https://ch.io.vn/giao-dien/mau-website-shop-ban-hoa/">
                        <h3 class="text-sm font-semibold"> Mẫu Website Shop Bán hoa </h3>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide cursor-grab swiper-slide-prev" style="width: 227.333px; margin-right: 40px;" role="group" aria-label="5 / 8" data-swiper-slide-index="4">
                    <div class="thumbnail">
                      <a href="https://ch.io.vn/giao-dien/mau-website-ban-yen-sao-website-ban-to-yen/">
                        <img width="300" height="300" src="https://ch.io.vn/wp-content/uploads/2024/05/yensao-300x300.webp" class="rounded shadow-lg w-full h-[120px] xl:h-[200px] mb-3 object-cover wp-post-image" alt="" decoding="async" srcset="https://ch.io.vn/wp-content/uploads/2024/05/yensao-300x300.webp 300w, https://ch.io.vn/wp-content/uploads/2024/05/yensao-150x150.webp 150w, https://ch.io.vn/wp-content/uploads/2024/05/yensao.webp 700w" sizes="(max-width: 300px) 100vw, 300px">
                      </a>
                    </div>
                    <div class="content">
                      <a href="https://ch.io.vn/giao-dien/mau-website-ban-yen-sao-website-ban-to-yen/">
                        <h3 class="text-sm font-semibold"> Mẫu Website Bán Yến Sào – Website Bán Tổ Yến </h3>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide cursor-grab swiper-slide-active" style="width: 227.333px; margin-right: 40px;" role="group" aria-label="6 / 8" data-swiper-slide-index="5">
                    <div class="thumbnail">
                      <a href="https://ch.io.vn/giao-dien/mau-web-shop-ban-len/">
                        <img width="300" height="300" src="https://ch.io.vn/wp-content/uploads/2024/05/learts-300x300.webp" class="rounded shadow-lg w-full h-[120px] xl:h-[200px] mb-3 object-cover wp-post-image" alt="" decoding="async" srcset="https://ch.io.vn/wp-content/uploads/2024/05/learts-300x300.webp 300w, https://ch.io.vn/wp-content/uploads/2024/05/learts-150x150.webp 150w, https://ch.io.vn/wp-content/uploads/2024/05/learts.webp 700w" sizes="(max-width: 300px) 100vw, 300px">
                      </a>
                    </div>
                    <div class="content">
                      <a href="https://ch.io.vn/giao-dien/mau-web-shop-ban-len/">
                        <h3 class="text-sm font-semibold"> Mẫu Web Shop Bán Len </h3>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide cursor-grab swiper-slide-next" style="width: 227.333px; margin-right: 40px;" role="group" aria-label="7 / 8" data-swiper-slide-index="6">
                    <div class="thumbnail">
                      <a href="https://ch.io.vn/giao-dien/mau-website-kinh-doanh-son-sua-noi-that/">
                        <img width="269" height="300" src="https://ch.io.vn/wp-content/uploads/2024/05/son-269x300.webp" class="rounded shadow-lg w-full h-[120px] xl:h-[200px] mb-3 object-cover wp-post-image" alt="" decoding="async" srcset="https://ch.io.vn/wp-content/uploads/2024/05/son-269x300.webp 269w, https://ch.io.vn/wp-content/uploads/2024/05/son.webp 600w" sizes="(max-width: 269px) 100vw, 269px">
                      </a>
                    </div>
                    <div class="content">
                      <a href="https://ch.io.vn/giao-dien/mau-website-kinh-doanh-son-sua-noi-that/">
                        <h3 class="text-sm font-semibold"> Mẫu website Kinh doanh Sơn sửa nội thất </h3>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide cursor-grab" role="group" aria-label="8 / 8" data-swiper-slide-index="7" style="width: 227.333px; margin-right: 40px;">
                    <div class="thumbnail">
                      <a href="https://ch.io.vn/giao-dien/website-ham-ruou-vang-winery/">
                        <img width="269" height="300" src="https://ch.io.vn/wp-content/uploads/2024/05/winery-269x300.webp" class="rounded shadow-lg w-full h-[120px] xl:h-[200px] mb-3 object-cover wp-post-image" alt="" decoding="async" srcset="https://ch.io.vn/wp-content/uploads/2024/05/winery-269x300.webp 269w, https://ch.io.vn/wp-content/uploads/2024/05/winery.webp 600w" sizes="(max-width: 269px) 100vw, 269px">
                      </a>
                    </div>
                    <div class="content">
                      <a href="https://ch.io.vn/giao-dien/website-ham-ruou-vang-winery/">
                        <h3 class="text-sm font-semibold"> Website Hầm rượu Vang Winery </h3>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide cursor-grab" style="width: 227.333px; margin-right: 40px;" role="group" aria-label="1 / 8" data-swiper-slide-index="0">
                    <div class="thumbnail">
                      <a href="https://ch.io.vn/giao-dien/giao-dien-studio-chup-anh-cuoi/">
                        <img width="300" height="300" src="https://ch.io.vn/wp-content/uploads/2024/06/veil-300x300.webp" class="rounded shadow-lg w-full h-[120px] xl:h-[200px] mb-3 object-cover wp-post-image" alt="" decoding="async" fetchpriority="high" srcset="https://ch.io.vn/wp-content/uploads/2024/06/veil-300x300.webp 300w, https://ch.io.vn/wp-content/uploads/2024/06/veil-150x150.webp 150w, https://ch.io.vn/wp-content/uploads/2024/06/veil.webp 700w" sizes="(max-width: 300px) 100vw, 300px">
                      </a>
                    </div>
                    <div class="content">
                      <a href="https://ch.io.vn/giao-dien/giao-dien-studio-chup-anh-cuoi/">
                        <h3 class="text-sm font-semibold"> Giao diện Studio Chụp ảnh cưới </h3>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide cursor-grab" style="width: 227.333px; margin-right: 40px;" role="group" aria-label="2 / 8" data-swiper-slide-index="1">
                    <div class="thumbnail">
                      <a href="https://ch.io.vn/giao-dien/mau-web-ban-do-an-vat-website-ban-dac-san/">
                        <img width="300" height="300" src="https://ch.io.vn/wp-content/uploads/2024/05/gaoood-300x300.webp" class="rounded shadow-lg w-full h-[120px] xl:h-[200px] mb-3 object-cover wp-post-image" alt="" decoding="async" srcset="https://ch.io.vn/wp-content/uploads/2024/05/gaoood-300x300.webp 300w, https://ch.io.vn/wp-content/uploads/2024/05/gaoood-150x150.webp 150w, https://ch.io.vn/wp-content/uploads/2024/05/gaoood.webp 700w" sizes="(max-width: 300px) 100vw, 300px">
                      </a>
                    </div>
                    <div class="content">
                      <a href="https://ch.io.vn/giao-dien/mau-web-ban-do-an-vat-website-ban-dac-san/">
                        <h3 class="text-sm font-semibold"> Mẫu Web bán đồ ăn vặt – Website bán đặc sản </h3>
                      </a>
                    </div>
                  </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="dropdownSection active" data-dropdown="developers">
        <div class="dropdownContent dark:bg-slate-800 p-5 w-[1080px]">
          <div class="grid grid-cols-1 xl:grid-cols-3 gap-[35px]">
            <div class="col-span-3 xl:col-span-1">
              <h3 class="font-semibold mb-4">Danh mục tài liệu</h3>
              <ul class="grid grid-cols-1 gap-[15px] mb-4">
                <li>
                  <a href="/huong-dan/" class="text-sm flex items-center justify-between gap-2">
                    <div class="flex items-center gap-3">
                      <span class="bg-blue-100 text-blue-600 p-2 rounded border border-blue-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-5 h-5" viewBox="0 0 512 512">
                          <path d="M448 341.37V170.61A32 32 0 00432.11 143l-152-88.46a47.94 47.94 0 00-48.24 0L79.89 143A32 32 0 0064 170.61v170.76A32 32 0 0079.89 369l152 88.46a48 48 0 0048.24 0l152-88.46A32 32 0 00448 341.37z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path>
                          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M69 153.99l187 110 187-110M256 463.99v-200"></path>
                        </svg>
                      </span> Hướng dẫn
                    </div>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                      <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144m124-144H100"></path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="/blog/" class="text-sm flex items-center justify-between gap-2">
                    <div class="flex items-center gap-3">
                      <span class="bg-green-100 text-green-600 p-2 rounded border border-green-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-5 h-5" viewBox="0 0 512 512">
                          <rect x="48" y="80" width="416" height="384" rx="48" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect>
                          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M128 48v32M384 48v32M464 160H48M304 260l43.42-32H352v168M191.87 306.63c9.11 0 25.79-4.28 36.72-15.47a37.9 37.9 0 0011.13-27.26c0-26.12-22.59-39.9-47.89-39.9-21.4 0-33.52 11.61-37.85 18.93M149 374.16c4.88 8.27 19.71 25.84 43.88 25.84 28.59 0 52.12-15.94 52.12-43.82 0-12.62-3.66-24-11.58-32.07-12.36-12.64-31.25-17.48-41.55-17.48"></path>
                        </svg>
                      </span> Blog
                    </div>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                      <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144m124-144H100"></path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="https://help.ch.io.vn" class="text-sm flex items-center justify-between gap-2">
                    <div class="flex items-center gap-3">
                      <span class="bg-red-100 text-red-600 p-2 rounded border border-red-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-5 h-5" viewBox="0 0 512 512">
                          <rect x="32" y="48" width="448" height="416" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect>
                          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M96 112l80 64-80 64M192 240h64"></path>
                        </svg>
                      </span> Tài liệu sử dụng
                    </div>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                      <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144m124-144H100"></path>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-span-3 xl:col-span-2">
              <h3 class="flex justify-between font-semibold mb-4"> Tài liệu hướng dẫn <a class="flex gap-2" href="/resource/"> Xem thêm <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144m124-144H100"></path>
                  </svg>
                </a>
              </h3>
              <div class="swiper swiper-header-resource swiper-initialized swiper-horizontal swiper-free-mode swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-8f4127210e7a9c4f4" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-481.333px, 0px, 0px); transition-delay: 0ms;">
                  <div class="swiper-slide cursor-grab" style="width: 200.667px; margin-right: 40px;" role="group" aria-label="4 / 6" data-swiper-slide-index="3">
                    <img width="232" height="300" src="https://ch.io.vn/wp-content/uploads/2023/09/101-Thu-phap-viet-tieu-de-hap-dan-232x300.png" class="w-full rounded border shadow-lg h-[250px] mb-3 object-cover wp-post-image" alt="" decoding="async" srcset="https://ch.io.vn/wp-content/uploads/2023/09/101-Thu-phap-viet-tieu-de-hap-dan-232x300.png 232w, https://ch.io.vn/wp-content/uploads/2023/09/101-Thu-phap-viet-tieu-de-hap-dan-791x1024.png 791w, https://ch.io.vn/wp-content/uploads/2023/09/101-Thu-phap-viet-tieu-de-hap-dan-768x994.png 768w, https://ch.io.vn/wp-content/uploads/2023/09/101-Thu-phap-viet-tieu-de-hap-dan-1187x1536.png 1187w, https://ch.io.vn/wp-content/uploads/2023/09/101-Thu-phap-viet-tieu-de-hap-dan.png 1545w" sizes="(max-width: 232px) 100vw, 232px">
                    <a href="https://ebook.ch.io.vn/101-thu-phap-viet-tieu-de-hap-dan-45-cum-tu-tieu-de-thu-hut-nguoi-xem/" target="_blank">
                      <h3 class="text-sm font-semibold"> 101+ Thủ pháp Viết tiêu đề hấp dẫn và 45 Cụm từ tiêu đề thu hút người xem </h3>
                      <p class="text-sm text-slate-600"></p>
                    </a>
                  </div>
                  <div class="swiper-slide cursor-grab swiper-slide-prev" style="width: 200.667px; margin-right: 40px;" role="group" aria-label="5 / 6" data-swiper-slide-index="4">
                    <img width="232" height="300" src="https://ch.io.vn/wp-content/uploads/2023/09/Ban-sao-cua-B2B-Chien-luoc-marketing-1-2-232x300.jpg" class="w-full rounded border shadow-lg h-[250px] mb-3 object-cover wp-post-image" alt="" decoding="async" srcset="https://ch.io.vn/wp-content/uploads/2023/09/Ban-sao-cua-B2B-Chien-luoc-marketing-1-2-232x300.jpg 232w, https://ch.io.vn/wp-content/uploads/2023/09/Ban-sao-cua-B2B-Chien-luoc-marketing-1-2-791x1024.jpg 791w, https://ch.io.vn/wp-content/uploads/2023/09/Ban-sao-cua-B2B-Chien-luoc-marketing-1-2-768x994.jpg 768w, https://ch.io.vn/wp-content/uploads/2023/09/Ban-sao-cua-B2B-Chien-luoc-marketing-1-2-1187x1536.jpg 1187w, https://ch.io.vn/wp-content/uploads/2023/09/Ban-sao-cua-B2B-Chien-luoc-marketing-1-2.jpg 1545w" sizes="(max-width: 232px) 100vw, 232px">
                    <a href="https://ebook.ch.io.vn/hero-section" target="_blank">
                      <h3 class="text-sm font-semibold"> 31 phong cách thiết kế Hero Section cho cả laptop và mobile </h3>
                      <p class="text-sm text-slate-600"></p>
                    </a>
                  </div>
                  <div class="swiper-slide cursor-grab swiper-slide-active" role="group" aria-label="6 / 6" data-swiper-slide-index="5" style="width: 200.667px; margin-right: 40px;">
                    <img width="244" height="300" src="https://ch.io.vn/wp-content/uploads/2023/08/Screenshot_18-244x300.jpg" class="w-full rounded border shadow-lg h-[250px] mb-3 object-cover wp-post-image" alt="" decoding="async" srcset="https://ch.io.vn/wp-content/uploads/2023/08/Screenshot_18-244x300.jpg 244w, https://ch.io.vn/wp-content/uploads/2023/08/Screenshot_18-832x1024.jpg 832w, https://ch.io.vn/wp-content/uploads/2023/08/Screenshot_18-768x945.jpg 768w, https://ch.io.vn/wp-content/uploads/2023/08/Screenshot_18.jpg 877w" sizes="(max-width: 244px) 100vw, 244px">
                    <a href="https://ebook.ch.io.vn/40-mau-trang-chu-blog-va-landing-page/" target="_blank">
                      <h3 class="text-sm font-semibold"> 40 mẫu thiết kế Trang chủ, Trang đích và Blog cho các ngành nghề phổ biến </h3>
                      <p class="text-sm text-slate-600"></p>
                    </a>
                  </div>
                  <div class="swiper-slide cursor-grab swiper-slide-next" style="width: 200.667px; margin-right: 40px;" role="group" aria-label="1 / 6" data-swiper-slide-index="0">
                    <img width="200" height="300" src="https://ch.io.vn/wp-content/uploads/2023/10/ebook-huong-dan-3-200x300.jpg" class="w-full rounded border shadow-lg h-[250px] mb-3 object-cover wp-post-image" alt="" decoding="async" srcset="https://ch.io.vn/wp-content/uploads/2023/10/ebook-huong-dan-3-200x300.jpg 200w, https://ch.io.vn/wp-content/uploads/2023/10/ebook-huong-dan-3.jpg 625w" sizes="(max-width: 200px) 100vw, 200px">
                    <a href="https://ebook.ch.io.vn/huong-dan-thiet-ke-website" target="_blank">
                      <h3 class="text-sm font-semibold"> Hướng dẫn thiết kế website </h3>
                      <p class="text-sm text-slate-600"></p>
                    </a>
                  </div>
                  <div class="swiper-slide cursor-grab" style="width: 200.667px; margin-right: 40px;" role="group" aria-label="2 / 6" data-swiper-slide-index="1">
                    <img width="212" height="300" src="https://ch.io.vn/wp-content/uploads/2023/09/Huong-dan-nguoi-tiep-thi-1-212x300.jpg" class="w-full rounded border shadow-lg h-[250px] mb-3 object-cover wp-post-image" alt="" decoding="async" srcset="https://ch.io.vn/wp-content/uploads/2023/09/Huong-dan-nguoi-tiep-thi-1-212x300.jpg 212w, https://ch.io.vn/wp-content/uploads/2023/09/Huong-dan-nguoi-tiep-thi-1-724x1024.jpg 724w, https://ch.io.vn/wp-content/uploads/2023/09/Huong-dan-nguoi-tiep-thi-1-768x1086.jpg 768w, https://ch.io.vn/wp-content/uploads/2023/09/Huong-dan-nguoi-tiep-thi-1.jpg 884w" sizes="(max-width: 212px) 100vw, 212px">
                    <a href="https://ebook.ch.io.vn/huong-dan-nguoi-tiep-thi/" target="_blank">
                      <h3 class="text-sm font-semibold"> Social Proof Bằng chứng xã hội – Hướng dẫn marketing </h3>
                      <p class="text-sm text-slate-600"></p>
                    </a>
                  </div>
                  <div class="swiper-slide cursor-grab" style="width: 200.667px; margin-right: 40px;" role="group" aria-label="3 / 6" data-swiper-slide-index="2">
                    <img width="242" height="300" src="https://ch.io.vn/wp-content/uploads/2023/09/Thiet-ke-chua-co-ten-9-242x300.jpg" class="w-full rounded border shadow-lg h-[250px] mb-3 object-cover wp-post-image" alt="" decoding="async" srcset="https://ch.io.vn/wp-content/uploads/2023/09/Thiet-ke-chua-co-ten-9-242x300.jpg 242w, https://ch.io.vn/wp-content/uploads/2023/09/Thiet-ke-chua-co-ten-9.jpg 548w" sizes="(max-width: 242px) 100vw, 242px">
                    <a href="https://ebook.ch.io.vn/bo-cong-cu-chien-luoc-marketing" target="_blank">
                      <h3 class="text-sm font-semibold"> Ebook B2B Bộ Mẫu Công cụ Chiến Lược Marketing </h3>
                      <p class="text-sm text-slate-600"></p>
                    </a>
                  </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Cal element-click embed code begins -->
<script type="text/javascript">
  (function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; if(typeof namespace === "string"){cal.ns[namespace] = cal.ns[namespace] || api;p(cal.ns[namespace], ar);p(cal, ["initNamespace", namespace]);} else p(cal, ar); return;} p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
Cal("init", "30min", {origin:"https://cal.com"});

  
  // Important: Please add the following attributes to the element that should trigger the calendar to open upon clicking.
  // `data-cal-link="ch-agency/30min"`
  // data-cal-namespace="30min"
  // `data-cal-config='{"layout":"month_view"}'`

  Cal.ns["30min"]("ui", {"hideEventTypeDetails":false,"layout":"week_view"});
  </script>
  <!-- Cal element-click embed code ends -->
</header>

	<div id="content" class="site-content flex-grow">

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
