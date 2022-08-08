<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="menu">
            <div class="menu_left">
                <div class="menu_left--logo">
                    <svg height="32" aria-hidden="true" viewBox="0 0 16 16" version="1.1" width="32" data-view-component="true" class="octicon octicon-mark-github">
                        <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                    </svg>
                </div> 
                <div class="menu_left--nav">
                    <ul>
                        <li>Product</li>
                        <li>Team</li>
                        <li>Enterprise</li>
                        <li>Explore</li>
                        <li>Marketplace</li>
                        <li>Pricing</li>
                    </ul>
                </div>
            </div>
            <div class="menu_right">
                <div class="menu_right--search">
                    <form action="">
                        <input type="text" placeholder="Search Github">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" aria-hidden="true" class="mr-1 header-search-key-slash"><path fill="none" stroke="#979A9C" opacity=".4" d="M3.5.5h12c1.7 0 3 1.3 3 3v13c0 1.7-1.3 3-3 3h-12c-1.7 0-3-1.3-3-3v-13c0-1.7 1.3-3 3-3z"></path><path fill="#979A9C" d="M11.8 6L8 15.1h-.9L10.8 6h1z"></path></svg>
                    </form>
                </div>
                <div class="menu_right--button">
                    <p>Sign in</p>
                    <p>Sign up</p>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="introduce">
                <div class="introduce_left">
                    <h1 style="font-size: 64px;">Let's build from here, together.</h1>
                    <h3 style="font-size: 24px;">The complete developer platform to build, scale, and deliver secure software.</h3>
                    <div class="email_signup">
                        <input class="btn" type="text" placeholder="Email address">
                        <button class="btn btn-sign_up">Sign up for Github</button>
                    </div>
                </div>
                <div class="introduce_right">
                    <video class="video-globe" autoplay muted loop id="myVideo">
                        <source type="video/mp4; codecs=avc1.4D401E,mp4a.40.2" src="https://github.githubassets.com/images/modules/site/home/globe-900.h264.mp4">
                    </video>
                </div>
            </div>
            <img src="https://github.githubassets.com/images/modules/site/home/hero-glow.svg" alt="Glowing universe" class="position-absolute home-hero-glow events-none z-1">
        </div>
    </div>
</body>
</html>
