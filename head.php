<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mamamoon hostel</title>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
      defer
    ></script>
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/icomoon.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />
    
    <script src="js/common.min.js" defer></script>
    <script src="js/map.js" defer></script>

    <script>
  (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
    key: "YOUR_API_KEY_HERE",
    v: "weekly",
    // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
    // Add other bootstrap parameters as needed, using camel case.
  });
</script>

    <?php
    $page = basename($_SERVER['PHP_SELF'], ".php");
    switch ($page) {
        case 'index':
    ?>
            <link rel="stylesheet" href="css/index.min.css" />
            <script src="js/index.min.js" defer></script>
            <script src="js/gallery.min.js" defer></script>
        <?php
            break;
        case 'room':
        ?>
            <link rel="stylesheet" href="css/room.min.css" />
            <script src="js/room.min.js" defer></script>
        <?php
            break;
        case 'about':
        ?>
            <link rel="stylesheet" href="css/about.min.css" />
        <?php
            break;
        case 'rooms':
        ?>
            <link rel="stylesheet" href="css/rooms.min.css" />
        <?php
            break;
        case 'contacts':
        ?>
            <link rel="stylesheet" href="css/contacts.min.css" />
        <?php
            break;
        case 'faq':
        ?>
            <link rel="stylesheet" href="css/faq.min.css" />
            <script src="js/faq.min.js" defer></script>
        <?php
            break;
        case 'error':
        ?>
            <link rel="stylesheet" href="css/error.min.css" />
            <script src="js/error.min.js" defer></script>
        <?php
            break;
        case 'error2':
        ?>
            <link rel="stylesheet" href="css/error2.min.css" />
        <?php
            break;
        case 'news':
        ?>
            <link rel="stylesheet" href="css/news.min.css" />
        <?php
            break;
        case 'post':
        ?>
            <link rel="stylesheet" href="css/post.min.css" />
            <script src="js/post.min.js" defer></script>
        <?php
            break;
        case 'contact2':
        ?>
            <link rel="stylesheet" href="css/contact2.min.css" />
        <?php
            break;
        case 'faq2':
        ?>
            <link rel="stylesheet" href="css/faq2.min.css" />
        <?php
            break;
        case 'gallery':
        ?>
            <link rel="stylesheet" href="css/gallery.min.css" />
            <script src="js/gallery.min.js" defer></script>
        <?php
            break;
        default:
        ?>

            <link rel="stylesheet" href="css/index.min.css" />
    <?php
            break;
    }

    include_once('scripts.php')
    ?>
</head>