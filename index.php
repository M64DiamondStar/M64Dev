<!DOCTYPE html>
<html lang="en">
    <header>
        <title>M64's Hangout</title>

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 

        <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/2ef25d02cd.js" crossorigin="anonymous"></script>
        <script defer src="app.js"></script>
    </header>

    <body>

        <button onclick="topFunction()" id="scrollUp" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>

        <script>

            let mybutton = document.getElementById("scrollUp");

            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

        <div class="header" id="home">

            <div class="navbar">
                <ul>
                <li><a href="#home" onclick="scrollToCenter(event)">Home</a></li>
                    <li><a href="#aboutme" onclick="scrollToCenter(event)">About Me</a></li>
                    <li><a href="#projects" onclick="scrollToCenter(event)">Projects</a></li>
                    <li><a href="#plugins" onclick="scrollToCenter(event)">Plugins</a></li>
                    <li><a href="#ingeniamc" onclick="scrollToCenter(event)">IngeniaMC</a></li>

                    <script>
                        function scrollToCenter(event) {
                            event.preventDefault();
                            var element = document.querySelector(event.target.hash);
                            var elementRect = element.getBoundingClientRect();
                            var absoluteElementTop = elementRect.top + window.pageYOffset;
                            var middle = absoluteElementTop - (window.innerHeight / 5);
                            window.scrollTo(0, middle);
                        }
                    </script>
                </ul>
            </div>

            <div class="title">
            
                <img src="images/logo.png">

                <div class="text">
                    <h1 style="font-size: 6vw">M64's Hangout</h1>
                    <h1 style="font-size: 4vw">Live, love, code...</h1>
                </div>
            </div>

            <div class="wave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path id="d1" d="M0,288L40,272C80,256,160,224,240,202.7C320,181,400,171,480,170.7C560,171,640,181,720,208C800,235,880,277,960,298.7C1040,320,1120,320,1200,282.7C1280,245,1360,171,1400,133.3L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
                    <defs>
                        <linearGradient id="Gradient1">
                            <stop class="stop1" offset="0%" />
                            <stop class="stop2" offset="50%" />
                            <stop class="stop3" offset="100%" />
                        </linearGradient>

                        <style>
                        <![CDATA[
                                #d1 { 
                                    fill: url(#Gradient1); 
                                }

                                .wave .stop1 { 
                                    stop-color: rgba(77,72,219,1); 
                                }

                                .wave .stop2 { 
                                    stop-color: rgba(72,131,219,1); 
                                }

                                .wave .stop3 { 
                                    stop-color: rgba(57,159,237,1); 
                                }
                                ]]>
                        </style>
                    </defs>
                </svg>
            </div>

        </div>

        <div class="body">
            
            <!-- First Section -->            
            <section class="section-1">
                <svg id="oscillate1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 1422 800"><defs><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="oooscillate-grad"><stop stop-color="hsl(162, 100%, 58%)" stop-opacity="1" offset="0%"></stop><stop stop-color="hsl(270, 73%, 53%)" stop-opacity="1" offset="100%"></stop></linearGradient></defs><g stroke-width="3.5" stroke="url(#oooscillate-grad)" fill="none" stroke-linecap="round"><path d="M 0 468 Q 355.5 160 711 400 Q 1066.5 640 1422 468" stroke-dasharray="79 8" opacity="0.31"></path><path d="M 0 450 Q 355.5 160 711 400 Q 1066.5 640 1422 450" stroke-dasharray="117 39" opacity="0.77"></path><path d="M 0 432 Q 355.5 160 711 400 Q 1066.5 640 1422 432" stroke-dasharray="67 95" opacity="0.08"></path><path d="M 0 414 Q 355.5 160 711 400 Q 1066.5 640 1422 414" stroke-dasharray="72 90" opacity="0.88"></path><path d="M 0 396 Q 355.5 160 711 400 Q 1066.5 640 1422 396" stroke-dasharray="51 119" opacity="0.56"></path><path d="M 0 378 Q 355.5 160 711 400 Q 1066.5 640 1422 378" stroke-dasharray="113 68" opacity="0.81"></path><path d="M 0 360 Q 355.5 160 711 400 Q 1066.5 640 1422 360" stroke-dasharray="110 117" opacity="0.13"></path><path d="M 0 342 Q 355.5 160 711 400 Q 1066.5 640 1422 342" stroke-dasharray="140 45" opacity="0.38"></path><path d="M 0 324 Q 355.5 160 711 400 Q 1066.5 640 1422 324" stroke-dasharray="42 146" opacity="0.10"></path><path d="M 0 306 Q 355.5 160 711 400 Q 1066.5 640 1422 306" stroke-dasharray="23 78" opacity="0.20"></path><path d="M 0 288 Q 355.5 160 711 400 Q 1066.5 640 1422 288" stroke-dasharray="94 135" opacity="0.26"></path><path d="M 0 270 Q 355.5 160 711 400 Q 1066.5 640 1422 270" stroke-dasharray="116 75" opacity="0.59"></path><path d="M 0 252 Q 355.5 160 711 400 Q 1066.5 640 1422 252" stroke-dasharray="115 39" opacity="0.18"></path><path d="M 0 234 Q 355.5 160 711 400 Q 1066.5 640 1422 234" stroke-dasharray="42 22" opacity="0.83"></path><path d="M 0 216 Q 355.5 160 711 400 Q 1066.5 640 1422 216" stroke-dasharray="124 0" opacity="0.47"></path><path d="M 0 198 Q 355.5 160 711 400 Q 1066.5 640 1422 198" stroke-dasharray="37 125" opacity="0.28"></path><path d="M 0 180 Q 355.5 160 711 400 Q 1066.5 640 1422 180" stroke-dasharray="51 6" opacity="0.96"></path><path d="M 0 162 Q 355.5 160 711 400 Q 1066.5 640 1422 162" stroke-dasharray="61 47" opacity="0.77"></path><path d="M 0 144 Q 355.5 160 711 400 Q 1066.5 640 1422 144" stroke-dasharray="127 70" opacity="0.63"></path><path d="M 0 126 Q 355.5 160 711 400 Q 1066.5 640 1422 126" stroke-dasharray="49 92" opacity="0.91"></path><path d="M 0 108 Q 355.5 160 711 400 Q 1066.5 640 1422 108" stroke-dasharray="76 24" opacity="0.51"></path><path d="M 0 90 Q 355.5 160 711 400 Q 1066.5 640 1422 90" stroke-dasharray="123 68" opacity="0.59"></path><path d="M 0 72 Q 355.5 160 711 400 Q 1066.5 640 1422 72" stroke-dasharray="111 89" opacity="0.68"></path><path d="M 0 54 Q 355.5 160 711 400 Q 1066.5 640 1422 54" stroke-dasharray="128 13" opacity="0.30"></path><path d="M 0 36 Q 355.5 160 711 400 Q 1066.5 640 1422 36" stroke-dasharray="113 77" opacity="0.74"></path></g></svg>

                <!-- About Me -->
                <div class="aboutme hidden-right">
                    <h2 id="aboutme">About Me</h2>
                    <p>Hi there! I'm M64DiamondStar, a dedicated Minecraft player and owner of the IngeniaMC server. 
                        Next to that, I thrive on coding Spigot plugins using Java and Kotlin, enhancing the Minecraft experience for others. 
                        At the moment I have one plugin called EffectMaster. Alongside my passion for gaming, I also enjoy scootering, dancing and anime, 
                        with my best scooter trick being a double tailwhip (I know, not that great), dance style being street and favorite anime being Sword Art Online. 
                    </p>
                    
                    <div class="socials">
                        <ul>
                            <li><a href="https://www.tiktok.com/@m64diamondstar" target="_blank"><img class="icon" src="images/icons/tiktok.svg" alt="Open TikTok" title="TikTok"/></a></li>
                            <li><a href="https://discord.com/invite/Scv9afJwXp" target="_blank"><img class="icon" src="images/icons/discord.svg" alt="Open Discord" title="Discord"/></a></li>
                            <li><a href="https://www.youtube.com/channel/UCYq7FMQDzPYN_YomnHsqjog" target="_blank"><img class="icon" src="images/icons/youtube.svg" alt="Open YouTube" title="Youtube"/></a></li>
                            <li><a href="https://github.com/M64DiamondStar" target="_blank"><img class="icon" src="images/icons/github.svg" alt="Open Github" title="GitHub"/></a></li>
                            <li><a href="https://www.spigotmc.org/members/m64diamondstar.551660/" target="_blank"><img class="icon" src="images/icons/spigot.svg" alt="Open Spigot" title="SpigotMC"/></a></li>
                            <li><a href="mailto: info@m64.dev"><img class="icon" src = "images/icons/mail.svg" alt="Send Email" title="E-Mail"/></a></li>
                        </ul>
                    </div>
                </div>
            </section>
            


            <!-- Second Section -->            
            <section class="section-2">
                <svg id="oscillate2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 1422 800"><defs><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="oooscillate-grad"><stop stop-color="hsl(270, 73%, 53%)" stop-opacity="1" offset="0%"></stop><stop stop-color="hsl(162, 100%, 58%)" stop-opacity="1" offset="100%"></stop></linearGradient></defs><g stroke-width="4" stroke="url(#oooscillate-grad)" fill="none" stroke-linecap="round"><path d="M 0 546 Q 355.5 225 711 400 Q 1066.5 575 1422 546" stroke-dasharray="47 85" opacity="0.55"></path><path d="M 0 525 Q 355.5 225 711 400 Q 1066.5 575 1422 525" stroke-dasharray="134 112" opacity="0.43"></path><path d="M 0 504 Q 355.5 225 711 400 Q 1066.5 575 1422 504" stroke-dasharray="122 24" opacity="0.12"></path><path d="M 0 483 Q 355.5 225 711 400 Q 1066.5 575 1422 483" stroke-dasharray="145 5" opacity="0.49"></path><path d="M 0 462 Q 355.5 225 711 400 Q 1066.5 575 1422 462" stroke-dasharray="105 85" opacity="0.83"></path><path d="M 0 441 Q 355.5 225 711 400 Q 1066.5 575 1422 441" stroke-dasharray="31 23" opacity="0.45"></path><path d="M 0 420 Q 355.5 225 711 400 Q 1066.5 575 1422 420" stroke-dasharray="2 85" opacity="0.32"></path><path d="M 0 399 Q 355.5 225 711 400 Q 1066.5 575 1422 399" stroke-dasharray="128 32" opacity="0.95"></path><path d="M 0 378 Q 355.5 225 711 400 Q 1066.5 575 1422 378" stroke-dasharray="54 141" opacity="0.99"></path><path d="M 0 357 Q 355.5 225 711 400 Q 1066.5 575 1422 357" stroke-dasharray="78 111" opacity="0.46"></path><path d="M 0 336 Q 355.5 225 711 400 Q 1066.5 575 1422 336" stroke-dasharray="116 33" opacity="0.74"></path><path d="M 0 315 Q 355.5 225 711 400 Q 1066.5 575 1422 315" stroke-dasharray="31 133" opacity="0.81"></path><path d="M 0 294 Q 355.5 225 711 400 Q 1066.5 575 1422 294" stroke-dasharray="87 11" opacity="0.10"></path><path d="M 0 273 Q 355.5 225 711 400 Q 1066.5 575 1422 273" stroke-dasharray="35 37" opacity="0.18"></path><path d="M 0 252 Q 355.5 225 711 400 Q 1066.5 575 1422 252" stroke-dasharray="102 31" opacity="0.88"></path><path d="M 0 231 Q 355.5 225 711 400 Q 1066.5 575 1422 231" stroke-dasharray="102 40" opacity="0.99"></path><path d="M 0 210 Q 355.5 225 711 400 Q 1066.5 575 1422 210" stroke-dasharray="71 7" opacity="0.78"></path><path d="M 0 189 Q 355.5 225 711 400 Q 1066.5 575 1422 189" stroke-dasharray="66 59" opacity="0.63"></path><path d="M 0 168 Q 355.5 225 711 400 Q 1066.5 575 1422 168" stroke-dasharray="137 56" opacity="0.74"></path><path d="M 0 147 Q 355.5 225 711 400 Q 1066.5 575 1422 147" stroke-dasharray="46 115" opacity="0.75"></path><path d="M 0 126 Q 355.5 225 711 400 Q 1066.5 575 1422 126" stroke-dasharray="78 76" opacity="0.69"></path><path d="M 0 105 Q 355.5 225 711 400 Q 1066.5 575 1422 105" stroke-dasharray="147 65" opacity="0.84"></path><path d="M 0 84 Q 355.5 225 711 400 Q 1066.5 575 1422 84" stroke-dasharray="90 60" opacity="0.18"></path><path d="M 0 63 Q 355.5 225 711 400 Q 1066.5 575 1422 63" stroke-dasharray="97 80" opacity="0.81"></path><path d="M 0 42 Q 355.5 225 711 400 Q 1066.5 575 1422 42" stroke-dasharray="74 110" opacity="0.18"></path></g></svg>

                <!-- Projects -->
                <div class="projects hidden-left" id="projects">
                    <h2>Projects</h2>
                    <p>For the past few years I've been working on some projects. The most important ones 
                        are IngeniaMC and my spigot plugins. Right now my only plugin is EffectMaster, but
                        more will come soon!
                    </p>

                    <div class="slideshow">
                        <img class="slide hide-slide" src="images/slideshow/effectmaster-banner.png">
                        <img class="slide hide-slide" src="images/slideshow/effectmaster-board.png">
                        <img class="slide hide-slide" src="images/slideshow/effectmaster-display1.png">
                        <img class="slide hide-slide" src="images/slideshow/effectmaster-display2.png">

                        <img class="slide hide-slide" src="images/slideshow/ingeniamc-banner.png">
                        <img class="slide hide-slide" src="images/slideshow/ingeniamc-mv.png">
                        <img class="slide hide-slide" src="images/slideshow/ingeniamc-st.png">
                        <img class="slide hide-slide" src="images/slideshow/ingeniamc-vt.png">
                    </div>

                    <script>
                        var myIndex = 0;
                        carousel();

                        function carousel() {
                            var i;
                            var x = document.getElementsByClassName("slide");

                            for (i = 0; i < x.length; i++) {
                                x[i].classList.remove("show-slide");
                                x[i].style.zIndex = 1
                            }

                            myIndex++;

                            if (myIndex > x.length) {
                                myIndex = 1
                            }    

                            x[myIndex-1].classList.add("show-slide");
                            x[myIndex-1].style.zIndex = 2
                            setTimeout(carousel, 3500);    
                        }
                    </script>

                </div>
            </section>


            
            <!-- Third Section -->            
            <section class="section-3">
                <svg id="oscillate3" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 1422 800"><defs><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="oooscillate-grad"><stop stop-color="hsl(162, 100%, 58%)" stop-opacity="1" offset="0%"></stop><stop stop-color="hsl(270, 73%, 53%)" stop-opacity="1" offset="100%"></stop></linearGradient></defs><g stroke-width="3.5" stroke="url(#oooscillate-grad)" fill="none" stroke-linecap="round"><path d="M 0 468 Q 355.5 160 711 400 Q 1066.5 640 1422 468" stroke-dasharray="79 8" opacity="0.31"></path><path d="M 0 450 Q 355.5 160 711 400 Q 1066.5 640 1422 450" stroke-dasharray="117 39" opacity="0.77"></path><path d="M 0 432 Q 355.5 160 711 400 Q 1066.5 640 1422 432" stroke-dasharray="67 95" opacity="0.08"></path><path d="M 0 414 Q 355.5 160 711 400 Q 1066.5 640 1422 414" stroke-dasharray="72 90" opacity="0.88"></path><path d="M 0 396 Q 355.5 160 711 400 Q 1066.5 640 1422 396" stroke-dasharray="51 119" opacity="0.56"></path><path d="M 0 378 Q 355.5 160 711 400 Q 1066.5 640 1422 378" stroke-dasharray="113 68" opacity="0.81"></path><path d="M 0 360 Q 355.5 160 711 400 Q 1066.5 640 1422 360" stroke-dasharray="110 117" opacity="0.13"></path><path d="M 0 342 Q 355.5 160 711 400 Q 1066.5 640 1422 342" stroke-dasharray="140 45" opacity="0.38"></path><path d="M 0 324 Q 355.5 160 711 400 Q 1066.5 640 1422 324" stroke-dasharray="42 146" opacity="0.10"></path><path d="M 0 306 Q 355.5 160 711 400 Q 1066.5 640 1422 306" stroke-dasharray="23 78" opacity="0.20"></path><path d="M 0 288 Q 355.5 160 711 400 Q 1066.5 640 1422 288" stroke-dasharray="94 135" opacity="0.26"></path><path d="M 0 270 Q 355.5 160 711 400 Q 1066.5 640 1422 270" stroke-dasharray="116 75" opacity="0.59"></path><path d="M 0 252 Q 355.5 160 711 400 Q 1066.5 640 1422 252" stroke-dasharray="115 39" opacity="0.18"></path><path d="M 0 234 Q 355.5 160 711 400 Q 1066.5 640 1422 234" stroke-dasharray="42 22" opacity="0.83"></path><path d="M 0 216 Q 355.5 160 711 400 Q 1066.5 640 1422 216" stroke-dasharray="124 0" opacity="0.47"></path><path d="M 0 198 Q 355.5 160 711 400 Q 1066.5 640 1422 198" stroke-dasharray="37 125" opacity="0.28"></path><path d="M 0 180 Q 355.5 160 711 400 Q 1066.5 640 1422 180" stroke-dasharray="51 6" opacity="0.96"></path><path d="M 0 162 Q 355.5 160 711 400 Q 1066.5 640 1422 162" stroke-dasharray="61 47" opacity="0.77"></path><path d="M 0 144 Q 355.5 160 711 400 Q 1066.5 640 1422 144" stroke-dasharray="127 70" opacity="0.63"></path><path d="M 0 126 Q 355.5 160 711 400 Q 1066.5 640 1422 126" stroke-dasharray="49 92" opacity="0.91"></path><path d="M 0 108 Q 355.5 160 711 400 Q 1066.5 640 1422 108" stroke-dasharray="76 24" opacity="0.51"></path><path d="M 0 90 Q 355.5 160 711 400 Q 1066.5 640 1422 90" stroke-dasharray="123 68" opacity="0.59"></path><path d="M 0 72 Q 355.5 160 711 400 Q 1066.5 640 1422 72" stroke-dasharray="111 89" opacity="0.68"></path><path d="M 0 54 Q 355.5 160 711 400 Q 1066.5 640 1422 54" stroke-dasharray="128 13" opacity="0.30"></path><path d="M 0 36 Q 355.5 160 711 400 Q 1066.5 640 1422 36" stroke-dasharray="113 77" opacity="0.74"></path></g></svg>
                
                <!-- Plugins -->
                <div class="plugins hidden-right" id="plugins">
                    <h2>Plugins</h2>
                    <p>Yes! I'm also a plugin developer! I started off with just creating plugins for
                        my Minecraft server IngeniaMC, but when I noticed that my code could also be 
                        useful to others, I decided to start contributing to the SpigotMC community!
                    </p>

                    <div class="plugin-list">

                        <!-- EffectMaster -->
                        <div class="container">

                            <img class="plugin-logo" src="images/plugins/effectmaster.png">

                            <div class="paragraph">
                                <h3>Effect Master</h3>
                                <p>With EffectMaster, the possibilities are virtually endless. Imagine being able to seamlessly 
                                    generate captivating particle displays, enchanting fountains, and even lifelike animatronics
                                    to enhance your server's atmosphere.
                                </p>
                                <div class="socials">
                                    <ul>
                                        <li><a href="https://discord.com/invite/Scv9afJwXp" target="_blank"><img class="icon" src="images/icons/discord.svg" alt="Open Discord" title="Discord"/></a></li>
                                        <li><a href="https://www.spigotmc.org/resources/effectmaster-create-beautiful-shows-in-your-server.107260/" target="_blank"><img class="icon" src="images/icons/spigot.svg" alt="Open Spigot" title="SpigotMC"/></a></li>
                                        <li><a href="https://github.com/M64DiamondStar/EffectMaster" target="_blank"><img class="icon" src="images/icons/github.svg" alt="Open Github" title="GitHub"/></a></li>
                                        <li><a href="https://github.com/M64DiamondStar/EffectMaster/wiki" target="_blank"><img class="icon" src="images/icons/wiki.svg" alt="Open Spigot" title="Wiki"/></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Soon 1 -->
                        <div class="container">

                            <img class="plugin-logo" src="images/plugins/soon-1.png">

                            <div class="paragraph">
                                <h3>Soon...?</h3>
                                <p>Or maybe not so soon, who knows?</p>
                            </div>
                        </div>

                        <!-- Soon 2 -->
                        <div class="container">

                            <img class="plugin-logo" src="images/plugins/soon-2.png">

                            <div class="paragraph">
                                <h3>Soon (2.0)...?</h3>
                                <p>I wonder when this will release.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Fourth Section -->            
            <section class="section-4">
            <div class="ingeniamc hidden-left" id="ingeniamc">
                    <h2>IngeniaMC</h2>
                    <p>IngeniaMC is a custom Minecraft Theme Park. I'm creating it together with
                        a fantastic Minecraft player called AvontuurierGamer who's also a good 
                        friend of mine. Together we're aiming to give players the best possible experience.
                        You can join the server by using the IP <b>play.IngeniaMC.net</b> on the latest version.
                        The server is Java-only.
                    </p>

                    <div class="socials">
                        <ul>
                            <li><a href="https://www.ingeniamc.net/" target="_blank"><img class="icon" src="images/icons/website.svg" alt="Open Website" title="Website"/></a></li>
                            <li><a href="https://www.tiktok.com/@ingeniamc" target="_blank"><img class="icon" src="images/icons/tiktok.svg" alt="Open TikTok" title="TikTok"/></a></li>
                            <li><a href="https://discord.gg/qv2vsAsDs8" target="_blank"><img class="icon" src="images/icons/discord.svg" alt="Open Discord" title="Discord"/></a></li>
                            <li><a href="https://www.youtube.com/@Ingenia_MC" target="_blank"><img class="icon" src="images/icons/youtube.svg" alt="Open YouTube" title="Youtube"/></a></li>
                        </ul>
                    </div>
                </div>
            </section>



            <!-- Fifth Section -->
            <section class="section-5">

                <!-- Footer -->
                <div class="footer">
                    <p>&copy; <script>document.write(new Date().getFullYear())</script> | 
                        <a href="mailto: info@m64.dev">Contact Me</a> | 
                        <a href="https://www.buymeacoffee.com/M64DiamondStar" target="_blank">Support Me</a> | 
                        This website does not collect any personal information.</p>
                </div>
            </section>
        </div>
    </body>

    <style>
        html {
            scroll-behavior: smooth;
        }

        * {
            color: #fff;
        }

        body {
            margin: 0;
            width: 100%;
            overflow-x: hidden;
        }

        .icon {
            width: 1.5em;
            height: 1.5em;
        }

        .hidden-right {
            transform: translateX(-5vw);
            opacity: 0;
            transition: all 1s;
        }

        .shown-right {
            transform: translateX(0);
            opacity: 1;
        }

        .hidden-left {
            transform: translateX(5vw);
            opacity: 0;
            transition: all 1s;
        }

        .shown-left {
            transform: translateX(0);
            opacity: 1;
        }

        #scrollUp {
            display: none;
            position: fixed;
            bottom: 2vw;
            right: 2vw;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: rgba(57,159,237,1);
            border: 4px solid rgba(57,159,237,0);
            color: white;
            cursor: pointer;
            padding: 1rem;
            border-radius: 50em;
            transition: all 0.5s;
        }

        #scrollUp:hover {
            background-color: rgba(57,159,237,0);
            border: 4px solid rgba(57,159,237,1);
        }

        .header {
            position: relative;
            height: 1000px;
            background-image: url('images/background-ocean.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position-y: center;
        }

        /* --------------- */
        /*     NAVBAR      */
        /* --------------- */
        .navbar {
            position: relative;
            top: 0;
            width: 100%;
            margin: auto;
            padding: 3vh 0;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
            transition: all 1s;
        }

        .navbar .sticky {
            background-color: rgba(57, 159, 237, 0.75)
        }

        .navbar ul li {
            list-style: none;
            display: inline-block;
            margin: 0 20px;
            position: relative;
        }

        .navbar li a {
            text-decoration: none;
            font-family: 'Alegreya Sans SC', sans-serif;
            color: #fff;
            font-size: 24px;
        }

        .navbar ul li::after {
            content: '';
            height: 3px;
            width: 0;
            background: linear-gradient(90deg, rgba(57,159,237,1) 0%, rgba(72,131,219,1) 50%, rgba(77,72,219,1) 100%);
            position: absolute;
            left: 0;
            bottom: -7px;
            transition: 0.5s;
        }

        .navbar ul li:hover::after {
            width: 100%;
        }

        /* --------------- */
        /*     SOCIALS     */
        /* --------------- */
        .socials {
            width: 100%;
            margin: auto;
            padding: 0 0;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 3;
        }

        .socials ul li {
            list-style: none;
            display: inline-block;
            margin: 0 15px;
            position: relative;
            transition: all 0.3s;
        }

        .socials ul li:hover {
            transform: translateY(-5px);
        }

        /* --------------- */
        /*     HEADER      */
        /* --------------- */
        .header .title {
            position: relative;
            display: flex;
            width: 100%;
            height: 100%;
            align-items: center;
            justify-content: center;
            bottom: 30%;
            font-family: 'Alegreya Sans SC', sans-serif;
            color: #fff;
            z-index: 1;
        }

        .header .title img {
            width: 15vw;
            padding: -1.25vw;
        }

        .header .title .text {
            display: block;
        }

        .header .title h1 {
            margin-left: 0.5em;
            text-align: left;
            margin: 0 0 0 3vw;
            text-shadow: 0 0 6.25rem;
        }

        .header .wave {
            background: linear-gradient(90deg, rgba(57,159,237,1) 0%, rgba(72,131,219,1) 50%, rgba(77,72,219,1) 100%);
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 6.25rem;
            z-index: 1;
        }

        .header .wave svg {
            position: absolute;
            bottom: -1px;
            left: 0px;
            transform: rotate(180deg);
            fill: #3b3e4a;
        }

        /* --------------- */
        /*       BODY      */
        /* --------------- */
        .body {
            width: 100%;
            z-index: 2;
            margin-top: -3.125rem;
            position: relative;
            margin-left: auto;
            margin-right: auto;
            background: linear-gradient(90deg, rgba(57, 159, 237, 1) 0%, rgba(72, 131, 219, 1) 50%, rgba(77, 72, 219, 1) 100%);
        }

        /* --------------- */
        /*    ABOUT ME     */
        /* --------------- */
        .body .section-1 {
            position: relative;
            margin: 0;
            height: 50rem;
        }

        .body #oscillate1 {
            position: absolute;
            top: 10rem;
            width: 100%;
            height: 62.5rem;
        }

        .body .aboutme {
            left: 10%;
            top: 5rem;
            position: relative;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            font-family: 'DM Sans', sans-serif;
            font-size: 24px;
            text-align: center;
        }

        /* --------------- */
        /*    PROJECTS     */
        /* --------------- */
        .body .section-2 {
            position: relative;
            margin: 0;
            padding: 0;
            height: 68.75rem;
        }

        .body .projects {
            right: 15%;
            top: 0rem;
            height: 47rem;
            position: relative;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            font-family: 'DM Sans', sans-serif;
            font-size: 24px;
            text-align: center;
            z-index: 3;
        }

        .slideshow {
            position: relative;
            transform: translateX(-50%);
            max-width: 100%;
            margin-top: 3.125rem;
            z-index: 1;
            display: block;
            justify-content: center;
            align-items: center;
        }

        .slide {
            position: absolute;
            margin: 0;
            width: 100%;
            transition: 0.5s;
            box-shadow: 0 0 0.7rem #000;
            z-index: 0; /* Updated z-index to place images underneath text */
        }

        .hide-slide {
            opacity: 0;
            z-index: -1; /* Updated z-index to place images underneath text */
        }

        .show-slide {
            opacity: 1;
            z-index: 1; /* Updated z-index to place images above hidden images */
        }

        .slide:hover {
            transform: scale(1.1);
        }

        .body #oscillate2 {
            position: absolute;
            transform: scale(-1, 1);
            top: 30rem;
            width: 100%;
            height: 62.5rem;
        }


        /* --------------- */
        /*     PLUGINS     */
        /* --------------- */
        .body .section-3 {
            position: relative;
            margin: 0;
            padding: 0;
            height: 95rem;
        }

        .body .plugins {
            top: 0rem;
            height: 65rem;
            position: relative;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            font-family: 'DM Sans', sans-serif;
            font-size: 24px;
            text-align: center;
            z-index: 3;
        }

        .plugin-list {
            text-align: left;
            margin: 3rem 0 0 0;
            display: block;
        }

        .plugin-list .container {
            display: flex;
            background-color: #424250;
            border-radius: 15px;
            box-shadow: 0 0 1.4rem #000;
            width: 100%;
            margin-bottom: 2.5rem;
            transition: all 0.5s ease;
        }

        .plugin-list .container:hover {
            transform: translateY(-3%);
        }

        .plugin-list .container .plugin-logo {
            left: 0;
            max-width: 35%;
            margin-right: 1rem;
        }

        .plugin-list .container .paragraph {
            display: block;
        }

        .plugin-list .container .paragraph h3 {
            margin-bottom: 0;
            margin-left: 0;
        }

        .plugin-list .container .paragraph p {
            font-size: 18px;
            margin: 0 0 0 0;
        }

        .plugin-list .container .paragraph .links {
            position: relative;
            margin: 0 0 0 0;
            padding: 0 0 0 0;
            right: 0;
            bottom: 0;
            border: 1px solid #000;
        }

        .plugin-list .container .paragraph .links ul li {
            margin: 0 1rem 0 0;
        }

        .plugin-list .container .paragraph .links .icon {
            width: 1.4rem;
            height: 1.4rem;
        }

        .body #oscillate3 {
            position: absolute;
            top: 60rem;
            width: 100%;
            height: 62.5rem;
        }

        /* --------------- */
        /*    INGENIAMC    */
        /* --------------- */
        .body .section-4 {
            position: relative;
            margin: 0;
            padding: 0;
            height: 30rem;
        }

        .body .ingeniamc {
            right: 15%;
            top: 0rem;
            height: 15rem;
            position: relative;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            font-family: 'DM Sans', sans-serif;
            font-size: 24px;
            text-align: center;
            z-index: 3;
        }


        /* --------------- */
        /*      FOOTER     */
        /* --------------- */
        .body .section-5 {
            position: relative;
            margin: 0;
            padding: 0;
            height: 3rem;
        }

        .body .footer {
            top: 0rem;
            height: 3rem;
            position: relative;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            font-family: 'DM Sans', sans-serif;
            font-size: 16px;
            text-align: center;
            background: transparent;
            vertical-align: middle;
            z-index: 3;
        }

        .body .footer p {
            margin-top: 5rem;
        }
    </style>
</html>