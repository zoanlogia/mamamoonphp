<?php include('head.php') ?>
    <body>
        <header class="header d-flex align-items-center" data-page="post">
            <div class="container position-relative d-flex justify-content-between align-items-center">
                <a class="brand d-flex align-items-center" href="index.php">
                    <span class="brand_logo theme-element">
                        <svg id="brandHeader" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M7.03198 3.80281V7.07652L3.86083 9.75137L0.689673 12.4263L0.667474 6.56503C0.655304 3.34138 0.663875 0.654206 0.686587 0.593579C0.71907 0.506918 1.4043 0.488223 3.87994 0.506219L7.03198 0.529106V3.80281ZM21.645 4.36419V5.88433L17.0383 9.76316C14.5046 11.8966 11.2263 14.6552 9.75318 15.8934L7.07484 18.145V20.3225V22.5H3.85988H0.64502L0.667303 18.768L0.689673 15.036L2.56785 13.4609C3.60088 12.5946 6.85989 9.85244 9.81009 7.36726L15.1741 2.84867L18.4096 2.8464L21.645 2.84413V4.36419ZM21.645 15.5549V22.5H18.431H15.217V18.2638V14.0274L15.4805 13.7882C15.8061 13.4924 21.5939 8.61606 21.6236 8.61248C21.6353 8.61099 21.645 11.7351 21.645 15.5549Z"
                                fill="currentColor"
                            />
                        </svg>
                    </span>
                    <span class="brand_name">Hosteller</span>
                </a>
                <div class="header_offcanvas offcanvas offcanvas-end" id="menuOffcanvas">
                    <div class="header_offcanvas-header d-flex justify-content-between align-content-center">
                        <a class="brand d-flex align-items-center" href="index.php">
                            <span class="brand_logo theme-element">
                                <svg
                                    id="brandOffset"
                                    width="22"
                                    height="23"
                                    viewBox="0 0 22 23"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M7.03198 3.80281V7.07652L3.86083 9.75137L0.689673 12.4263L0.667474 6.56503C0.655304 3.34138 0.663875 0.654206 0.686587 0.593579C0.71907 0.506918 1.4043 0.488223 3.87994 0.506219L7.03198 0.529106V3.80281ZM21.645 4.36419V5.88433L17.0383 9.76316C14.5046 11.8966 11.2263 14.6552 9.75318 15.8934L7.07484 18.145V20.3225V22.5H3.85988H0.64502L0.667303 18.768L0.689673 15.036L2.56785 13.4609C3.60088 12.5946 6.85989 9.85244 9.81009 7.36726L15.1741 2.84867L18.4096 2.8464L21.645 2.84413V4.36419ZM21.645 15.5549V22.5H18.431H15.217V18.2638V14.0274L15.4805 13.7882C15.8061 13.4924 21.5939 8.61606 21.6236 8.61248C21.6353 8.61099 21.645 11.7351 21.645 15.5549Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </span>
                            <span class="brand_name">Hosteller</span>
                        </a>
                        <button class="close" type="button" data-bs-dismiss="offcanvas">
                            <i class="icon-close--entypo"></i>
                        </button>
                    </div>
                    <nav class="header_nav">
                        <ul class="header_nav-list">
                            <li class="header_nav-list_item">
                                <a class="nav-item" href="index.php" data-page="home">Home</a>
                            </li>
                            <li class="header_nav-list_item">
                                <a class="nav-item" href="about.php" data-page="about">About</a>
                            </li>
                            <li class="header_nav-list_item dropdown">
                                <a
                                    class="nav-link dropdown-toggle d-inline-flex align-items-center"
                                    href="rooms.php"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#roomMenu"
                                    aria-expanded="false"
                                    aria-controls="roomMenu"
                                    data-page="rooms"
                                >
                                    Rooms
                                    <i class="icon-chevron_down--entypo icon"></i>
                                </a>
                                <div class="dropdown-menu collapse" id="roomMenu">
                                    <ul class="dropdown-list">
                                        <li class="list-item" data-main="true">
                                            <a class="dropdown-item nav-item" data-page="rooms" href="rooms.php">Rooms</a>
                                        </li>
                                        <li class="list-item">
                                            <a class="dropdown-item nav-item" data-page="room" href="room.php">Single room</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header_nav-list_item dropdown">
                                <a
                                    class="nav-link dropdown-toggle d-inline-flex align-items-center"
                                    href="news.php"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#newsMenu"
                                    aria-expanded="false"
                                    aria-controls="newsMenu"
                                    data-page="news"
                                >
                                    News
                                    <i class="icon-chevron_down--entypo icon"></i>
                                </a>
                                <div class="dropdown-menu collapse" id="newsMenu">
                                    <ul class="dropdown-list">
                                        <li class="list-item" data-main="true">
                                            <a class="dropdown-item nav-item" data-page="news" href="news.php">News</a>
                                        </li>
                                        <li class="list-item">
                                            <a class="dropdown-item nav-item" data-page="post" href="post.html">Single post</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header_nav-list_item dropdown">
                                <a
                                    class="nav-link dropdown-toggle d-inline-flex align-items-center"
                                    href="#"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#pagesMenu"
                                    aria-expanded="false"
                                    aria-controls="pagesMenu"
                                >
                                    Pages
                                    <i class="icon-chevron_down--entypo icon"></i>
                                </a>
                                <div class="dropdown-menu collapse" id="pagesMenu">
                                    <ul class="dropdown-list">
                                        <li class="list-item">
                                            <a class="dropdown-item nav-item" data-page="gallery" href="gallery.php">Gallery</a>
                                        </li>
                                        <li class="list-item">
                                            <a class="dropdown-item nav-item" data-page="faq01" href="faq.php">FAQ V1</a>
                                        </li>
                                        <li class="list-item">
                                            <a class="dropdown-item nav-item" data-page="faq02" href="faq2.php">FAQ V2</a>
                                        </li>
                                        <li class="list-item">
                                            <a class="dropdown-item nav-item" data-page="error01" href="error.php">Error Page V1</a>
                                        </li>
                                        <li class="list-item">
                                            <a class="dropdown-item nav-item" data-page="error02" href="404.html">Error Page V2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header_nav-list_item dropdown">
                                <a
                                    class="nav-link nav-link--contacts dropdown-toggle d-inline-flex align-items-center"
                                    href="#"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#contactsMenu"
                                    aria-expanded="false"
                                    aria-controls="contactsMenu"
                                >
                                    Contacts
                                    <i class="icon-chevron_down--entypo icon"></i>
                                </a>
                                <div class="dropdown-menu collapse" id="contactsMenu">
                                    <ul class="dropdown-list">
                                        <li class="list-item">
                                            <a class="dropdown-item nav-item" data-page="contacts01" href="contacts.php">Contacts V1</a>
                                        </li>
                                        <li class="list-item">
                                            <a class="dropdown-item nav-item" data-page="contacts02" href="contacts2.php">Contacts V2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <ul class="socials d-flex align-items-center">
                        <li class="list-item">
                            <a class="link" href="">
                                <i class="icon-facebook"></i>
                            </a>
                        </li>
                        <li class="list-item">
                            <a class="link" href="">
                                <i class="icon-instagram"></i>
                            </a>
                        </li>
                        <li class="list-item">
                            <a class="link" href="">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                        <li class="list-item">
                            <a class="link" href="">
                                <i class="icon-whatsapp"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="header_trigger d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuOffcanvas">
                    <i class="icon-stream"></i>
                </button>
            </div>
        </header>
        <header class="page">
            <div class="container">
                <ul class="breadcrumbs d-flex flex-wrap align-content-center">
                    <li class="list-item">
                        <a class="link" href="index.php">Home</a>
                    </li>

                    <li class="list-item">
                        <a class="link" href="news.php">News</a>
                    </li>
                    <li class="list-item">
                        <a class="link" href="#">How to Travel the World & Make a Difference</a>
                    </li>
                </ul>
                <h1 class="page_title">How to Travel the World & Make a Difference</h1>
            </div>
        </header>
        <!-- post content start -->
        <main>
            <div class="post section">
                <div class="container sticky-parent d-lg-flex justify-content-between align-items-start">
                    <div class="post_main">
                        <div class="post_main-article">
                            <div class="media media--main">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                </picture>
                            </div>
                            <div class="post_main-article_metadata">
                                <span class="item d-inline-flex align-items-center">
                                    <i class="icon-calendar icon"></i>
                                    June 16, 2021
                                </span>
                                <span class="item d-inline-flex align-items-center">
                                    <i class="icon-eye icon"></i>
                                    <span class="number">120</span>
                                    <span class="text">views</span>
                                </span>
                                <a class="item d-inline-flex align-items-center" href="#comments">
                                    <i class="icon-comment icon"></i>
                                    <span class="number">2</span>
                                    <span class="text">Comments</span>
                                </a>
                            </div>
                            <p class="post_main-article_text">
                                Auctor neque vitae tempus quam pellentesque nec nam. Amet aliquam id diam maecenas ultricies mi eget mauris
                                pharetra. Velit euismod in pellentesque massa placerat duis ultricies. Tempus egestas sed sed risus pretium
                                quam. Nibh tortor id aliquet lectus proin nibh nisl condimentum id. Est velit egestas dui id ornare arcu
                                odio ut. Nibh tellus molestie nunc non blandit massa enim nec dui. Dictum sit amet justo donec enim. Eget
                                dolor morbi non arcu risus quis varius quam quisque. Accumsan in nisl nisi scelerisque eu ultrices vitae
                                auctor.
                            </p>
                            <div class="post_main-article_gallery">
                                <div class="gallery-item gallery-item--main media">
                                    <a class="link" href="img/placeholder.jpg" data-role="gallery-link">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                    </a>
                                </div>
                                <div class="gallery-item media">
                                    <a class="link" href="img/placeholder.jpg" data-role="gallery-link">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                    </a>
                                </div>
                                <div class="gallery-item media">
                                    <a class="link" href="img/placeholder.jpg" data-role="gallery-link">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                    </a>
                                </div>
                            </div>
                            <p class="post_main-article_text">
                                Auctor neque vitae tempus quam pellentesque nec nam. Amet aliquam id diam maecenas ultricies mi eget mauris
                                pharetra. Velit euismod in pellentesque massa placerat duis ultricies. Tempus egestas sed sed risus pretium
                                quam. Nibh tortor id aliquet lectus proin nibh nisl condimentum.
                            </p>
                            <div class="post_main-article_quote">
                                <q class="quote">
                                    Nibh sed pulvinar proin gravida. Bibendum enim facilisis gravida neque convallis a cras semper. Bibendum
                                    est ultricies integer quis auctor. Est ante in nibh mauris
                                </q>
                                <span class="author">Daniel Terry</span>
                            </div>
                            <ul class="post_main-article_list">
                                <li class="list-item d-flex align-items-center">
                                    <i class="icon-check icon"></i>
                                    Leo duis ut diam quam nulla porttitor
                                </li>
                                <li class="list-item d-flex align-items-center">
                                    <i class="icon-check icon"></i>
                                    Nullam vehicula ipsum a arcu cursus vitae
                                </li>
                                <li class="list-item d-flex align-items-center">
                                    <i class="icon-check icon"></i>
                                    Ultricies mi eget mauris pharetra et
                                </li>
                                <li class="list-item d-flex align-items-center">
                                    <i class="icon-check icon"></i>
                                    Dui faucibus in ornare quam viverra
                                </li>
                            </ul>
                            <p class="post_main-article_text">
                                Varius sit amet mattis vulputate. Cum sociis natoque penatibus et magnis dis. Quam elementum pulvinar etiam
                                non quam lacus suspendisse. Eget gravida cum sociis natoque. Vitae tempus quam pellentesque nec nam aliquam
                                sem. Lorem dolor sed viverra ipsum nunc aliquet.
                            </p>
                        </div>
                        <div class="post_main-footer">
                            <div class="post_main-footer_tags d-flex flex-wrap align-items-center">
                                <h4 class="title">Tags</h4>
                                <ul class="list d-flex flex-wrap align-items-center">
                                    <li class="list-item">
                                        <a class="link" href="#">Travel</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="link" href="#">People</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="link" href="#">Guide</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="post_main-footer_nav d-flex flex-wrap justify-content-between">
                                <a class="nav-block nav-block--prev h5 d-inline-flex align-items-center" href="#">
                                    <span class="theme-element theme-element--light">
                                        <i class="icon-arrow_left icon"></i>
                                    </span>
                                    <span class="title">Things hostels do better than posh hotels</span>
                                </a>
                                <a class="nav-block nav-block--next h5 d-inline-flex flex-row-reverse align-items-center">
                                    <span class="theme-element theme-element--light">
                                        <i class="icon-arrow_right icon"></i>
                                    </span>
                                    <span class="title">Important Tips for Traveling with Friends</span>
                                </a>
                            </div>
                            <div class="post_main-footer_author d-sm-flex">
                                <div class="media">
                                    <picture>
                                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                        <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                    </picture>
                                </div>
                                <div class="main">
                                    <span class="name h4">William Howard</span>
                                    <p class="bio">
                                        Dignissim convallis aenean et tortor. Lorem donec massa sapien faucibus et molestie ac. Platea
                                        dictumst quisque sagittis purus sit amet
                                    </p>
                                    <ul class="socials d-flex align-items-center">
                                        <li class="list-item">
                                            <a class="link" href="">
                                                <i class="icon-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a class="link" href="">
                                                <i class="icon-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a class="link" href="">
                                                <i class="icon-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a class="link" href="">
                                                <i class="icon-whatsapp"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <section class="post_main-comments" id="comments">
                            <h3 class="post_main-comments_header">Post comments</h3>
                            <ul class="post_main-comments_list">
                                <li class="list-item d-flex flex-column flex-sm-row align-items-start">
                                    <div class="media">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                    </div>
                                    <div class="main">
                                        <div class="main_info d-flex flex-column">
                                            <span class="name h4">Gloria Ellis</span>
                                            <span class="date">June 16, 2021</span>
                                        </div>
                                        <p class="text">
                                            Ac placerat vestibulum lectus mauris ultrices. Velit scelerisque in dictum non consectetur a.
                                            Eget nunc lobortis mattis aliquam faucibus purus in. Ultricies leo integer malesuada nunc.
                                        </p>
                                    </div>
                                    <a class="replyTrigger" href="#">
                                        <span class="icon-reply"></span>
                                    </a>
                                </li>
                                <li class="list-item d-flex flex-column flex-sm-row align-items-start" data-reply="true">
                                    <div class="media">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                    </div>
                                    <div class="main">
                                        <div class="main_info d-flex flex-column">
                                            <span class="name h4">Esther Hopkins</span>
                                            <span class="date">June 16, 2021</span>
                                        </div>
                                        <p class="text">
                                            Ac placerat vestibulum lectus mauris ultrices. Velit scelerisque in dictum non consectetur a.
                                            Eget nunc lobortis mattis aliquam faucibus purus in.
                                        </p>
                                    </div>
                                    <a class="replyTrigger" href="#">
                                        <span class="icon-reply"></span>
                                    </a>
                                </li>
                            </ul>
                        </section>
                        <section class="post_main-reply">
                            <h3 class="post_main-reply_header">Leave comment</h3>
                            <form
                                class="contacts_form form d-sm-flex flex-wrap justify-content-between"
                                action="#"
                                method="post"
                                data-type="comment"
                            >
                                <div class="field-wrapper">
                                    <label class="label" for="commentName">
                                        <i class="icon-user icon"></i>
                                    </label>
                                    <input class="field required" id="commentName" type="text" placeholder="Name" />
                                </div>
                                <div class="field-wrapper">
                                    <label class="label" for="commentEmail">
                                        <i class="icon-email icon"></i>
                                    </label>
                                    <input class="field required" id="commentEmail" type="text" data-type="email" placeholder="Email" />
                                </div>
                                <textarea class="field textarea required" id="commentMessage" placeholder="Message"></textarea>
                                <button class="btn theme-element theme-element--accent" type="submit">Submit</button>
                            </form>
                        </section>
                    </div>
                    <div class="widgets" data-sticky="true" data-stop="">
                        <div class="widgets_item widgets_item--search">
                            <form class="form d-flex" action="#" method="get" id="newsSearch" data-type="search">
                                <input class="field required" id="newsSearchQuery" type="text" placeholder="Search" />
                                <button class="btn theme-element--accent" type="submit">
                                    <i class="icon-search icon"></i>
                                </button>
                            </form>
                        </div>
                        <div class="widgets_item widgets_item--categories">
                            <h4 class="widgets_item-header">Categories</h4>
                            <ul class="list">
                                <li class="list-item d-flex align-items-center">
                                    <a class="link" href="#">Travel</a>
                                </li>
                                <li class="list-item d-flex align-items-center current">
                                    <a class="link" href="#">Tourist Guide</a>
                                </li>
                                <li class="list-item d-flex align-items-center">
                                    <a class="link" href="#">City Sights</a>
                                </li>
                                <li class="list-item d-flex align-items-center">
                                    <a class="link" href="#">Communication</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widgets_item widgets_item--recommended">
                            <h4 class="widgets_item-header">Recommended articles</h4>
                            <ul class="list">
                                <li class="list-item d-flex align-items-center">
                                    <div class="media">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                    </div>
                                    <div class="main d-flex flex-column">
                                        <a class="main_title h5" href="#">Travel and Working Holidays</a>
                                        <span class="main_date">June 16, 2021</span>
                                    </div>
                                </li>
                                <li class="list-item d-flex align-items-center">
                                    <div class="media">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                    </div>
                                    <div class="main d-flex flex-column">
                                        <a class="main_title h5" href="#">A Hostel Decided to Social Support</a>
                                        <span class="main_date">June 16, 2021</span>
                                    </div>
                                </li>
                                <li class="list-item d-flex align-items-center">
                                    <div class="media">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                    </div>
                                    <div class="main d-flex flex-column">
                                        <a class="main_title h5" href="#">Travel and Working Holidays</a>
                                        <span class="main_date">June 16, 2021</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widgets_item widgets_item--tags">
                            <h4 class="widgets_item-header">Tag</h4>
                            <ul class="list d-flex flex-wrap">
                                <li class="list-item">
                                    <a class="link underlined underlined--accent" href="#">Travel</a>
                                </li>
                                <li class="list-item">
                                    <a class="link underlined underlined--accent" href="#">Room</a>
                                </li>
                                <li class="list-item">
                                    <a class="link underlined underlined--accent" href="#">People</a>
                                </li>
                                <li class="list-item">
                                    <a class="link underlined underlined--accent" href="#">Guide</a>
                                </li>
                                <li class="list-item">
                                    <a class="link underlined underlined--accent active" href="#">Season</a>
                                </li>
                                <li class="list-item">
                                    <a class="link underlined underlined--accent" href="#">City</a>
                                </li>
                                <li class="list-item">
                                    <a class="link underlined underlined--accent" href="#">Sights</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widgets_item widgets_item--subscribe">
                            <h4 class="widgets_item-header">Subscribe to our mailing list</h4>
                            <form class="form d-flex" action="#" method="post" id="subscribe" data-type="subscribe">
                                <input
                                    class="field required"
                                    type="text"
                                    id="subscribeEmail"
                                    data-type="email"
                                    placeholder="Email address"
                                />
                                <button class="btn theme-element--accent" type="submit">
                                    <i class="icon-arrow_right icon"></i>
                                </button>
                            </form>
                        </div>
                        <div class="widgets_item widgets_item--instagram">
                            <h4 class="widgets_item-header">Instagram</h4>
                            <ul class="list d-grid">
                                <li class="list-item">
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- latest news post aside start -->
            <aside>
                <section class="latest section section--blockbg">
                    <div class="block"></div>
                    <div class="container">
                        <div class="latest_header d-sm-flex justify-content-between align-items-center">
                            <h2 class="latest_header-title" data-aos="fade-right">Recommended news</h2>
                            <div class="wrapper" data-aos="fade-left">
                                <a class="d-none btn theme-element theme-element--light" href="news.php">View all news</a>
                            </div>
                        </div>
                        <ul class="latest_list d-md-flex flex-wrap">
                            <li class="latest_list-item col-md-6 col-xl-4" data-order="1" data-aos="fade-up">
                                <div class="item-wrapper d-md-flex flex-column">
                                    <div class="media">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                        <span class="media_label media_label--left"> Travel </span>
                                    </div>
                                    <div class="main d-md-flex flex-column justify-content-between flex-grow-1">
                                        <a class="main_title h4" href="#" data-shave="true"
                                            >How to cure wanderlust without leaving your home</a
                                        >
                                        <p class="main_preview">
                                            Ultrices gravida dictum fusce ut placer orci nulla pellentesque. Senect et netus et malesuada
                                        </p>
                                        <div class="main_metadata">
                                            <span class="main_metadata-item d-inline-flex align-items-center">
                                                <i class="icon-calendar icon"></i>
                                                June 16, 2021
                                            </span>
                                            <span class="main_metadata-item d-inline-flex align-items-center">
                                                <i class="icon-eye icon"></i>
                                                <span class="number">120</span>
                                                <span class="text">views</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="latest_list-item col-md-6 col-xl-4" data-order="2" data-aos="fade-up" data-aos-delay="50">
                                <div class="item-wrapper d-md-flex flex-column">
                                    <div class="media">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                        <span class="media_label media_label--left"> Tourist Guide </span>
                                    </div>
                                    <div class="main d-md-flex flex-column justify-content-between flex-grow-1">
                                        <a class="main_title h4" href="#" data-shave="true"
                                            >Yoga Hostels to soothe your mind and nomadic soul</a
                                        >
                                        <p class="main_preview">
                                            Ultrices gravida dictum fusce ut placer orci nulla pellentesque. Senect et netus et malesuada
                                        </p>
                                        <div class="main_metadata">
                                            <span class="main_metadata-item d-inline-flex align-items-center">
                                                <i class="icon-calendar icon"></i>
                                                June 16, 2021
                                            </span>
                                            <span class="main_metadata-item d-inline-flex align-items-center">
                                                <i class="icon-eye icon"></i>
                                                <span class="number">120</span>
                                                <span class="text">views</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="latest_list-item col-md-6 col-xl-4" data-order="3" data-aos="fade-up" data-aos-delay="100">
                                <div class="item-wrapper d-md-flex flex-column">
                                    <div class="media">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                        </picture>
                                        <span class="media_label media_label--left"> Communication </span>
                                    </div>
                                    <div class="main d-md-flex flex-column justify-content-between flex-grow-1">
                                        <a class="main_title h4" href="#" data-shave="true">What happens when you travel with strangers?</a>
                                        <p class="main_preview">
                                            Euismod quis viverra nibh cras pulvinar mattis nunc. Leo duis ut diam quam. Sed velit dignissim
                                        </p>
                                        <div class="main_metadata">
                                            <span class="main_metadata-item d-inline-flex align-items-center">
                                                <i class="icon-calendar icon"></i>
                                                June 16, 2021
                                            </span>
                                            <span class="main_metadata-item d-inline-flex align-items-center">
                                                <i class="icon-eye icon"></i>
                                                <span class="number">120</span>
                                                <span class="text">views</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </aside>
            <!-- latest news post aside end -->
        </main>
        <!-- post content end -->
        <?php include('footer.php'); ?>
        <script src="js/common.min.js"></script>
        
    </body>
</html>
