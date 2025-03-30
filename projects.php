<!DOCTYPE html>
<html lang="en">
<header>
        <title>./m64.jar</title>

        <!-- Heading thingies -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Style -->
        <link rel="stylesheet" href="style/projects.css?ver=4">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 

        <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Noto+Sans+Mono:wght@100..900&family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Noto+Sans+Mono:wght@100..900&family=Poppins&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/2ef25d02cd.js" crossorigin="anonymous"></script>
        <script defer src="app.js"></script>
        
    </header>

    <body>
        <nav id="navbar">
            <a class="link item" href="/">
                <i class="fa-solid fa-user nav-icon"></i>
                <span>About</span>
            </a>
            <a class="link item active" href="/projects">
                <i class="fa-solid fa-folder-open nav-icon"></i>
                <span>Projects</span>
            </a>
            <a class="link item" href="/contact">
                <i class="fas fa-envelope-open nav-icon"></i>
                <span>Contact</span>
            </a>
            <a class="link item" target="_blank" href="https://bmc.link/M64DiamondStar">
                <i class="fa-solid fa-gem nav-icon"></i>
                <span>Donate</span>
            </a>
        </nav>


        <div id="wrapper">
            <div class="page-content">

                <div class="introduction">
                    <div class="info-img">
                        <div class="text-content">
                            <h2 class="scramble">My projects</h2>
                            <p class="scramble">Welcome to my projects page! Here you'll find most things I've done or things I am working on. Most of the time I'm working on coding stuff, but I actually
                                also really enjoy 3D Modelling and building inside of Minecraft!
                            </p>
                            <p class="scramble">
                                Down below you can check a list of all the projects. You can also click the buttons to switch the project types :D
                            </p>

                            <a class="btn link" href="https://github.com/M64DiamondStar/" target="_blank" rel="M64's GitHub Page">
                                <i class="fab fa-github"></i>
                            </a>
                            <a class="btn link" href="https://discord.com/invite/Scv9afJwXp" target="_blank" rel="M64's Hangout Discord Server">
                                <i class="fab fa-discord"></i>
                            </a>
                            <a class="btn link" href="https://sketchfab.com/M64DiamondStar" target="_blank" rel="M64's Sketchfab Page">
                                <i class="fa-solid fa-cube"></i>
                            </a>

                            <div class="button-container">
                                <button id="devButton" class="toggle-button active scramble">Development</button>
                                <button id="modelButton" class="toggle-button scramble">Modeling</button>
                                <button id="buildsButton" class="toggle-button scramble">Building</button>
                                <script defer src="script/projects.js"></script>
                            </div>
                        </div>
                        <img src="assets/avatar.png" alt="Me as a cute drawn character waving at you :3" draggable="false">
                    </div>
                </div>

                <div class="section-wrapper">


                    <!--
                        All development projects
                    -->
                    <div id="development-projects">


                        <h2 class="scramble"><i class="fa-solid fa-puzzle-piece"></i> Spigot Plugins</h2>
                        <section class="project-list">
                            <section class="project" id="effectmaster">
                                <div>
                                    <picture>
                                        <source type="image/webp" srcset="/assets/projects/effectmaster.webp">
                                        <source type="image/jpg" srcset="/assets/projects/effectmaster.jpg">
                                        <img class="project-icon" src="/assets/projects/effectmaster.jpg" alt="EffectMaster icon" draggable="false">
                                    </picture>
                                </div>
                                <div>
                                    <h3>EffectMaster</h3>
                                        <p>My first decent and public plugin. EffectMaster allows players to create beautiful shows, composed by a variety of different effects from the plugin itself.</p>
                                    <div class="btn-row">
                                        <a class="btn link" href="https://modrinth.com/plugin/effectmaster" target="_blank" rel="EffectMaster Download">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a class="btn link" href="https://github.com/M64DiamondStar/EffectMaster" target="_blank" rel="EffectMaster GitHub">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a class="btn link" href="https://effectmaster.m64.dev" target="_blank" rel="EffectMaster Wiki">
                                            <i class="fa-solid fa-book"></i>
                                        </a>
                                    </div>
                                </div>
                            </section>

                            <section class="project" id="bonemealvines">
                                <div>
                                    <picture>
                                        <source type="image/webp" srcset="/assets/projects/bonemealvines.webp">
                                        <source type="image/jpg" srcset="/assets/projects/bonemealvines.jpg">
                                        <img class="project-icon" src="/assets/projects/bonemealvines.jpg" alt="BonemealVines icon" draggable="false">
                                    </picture>
                                </div>
                                <div>
                                    <h3>BonemealVines</h3>
                                        <p>A very simple plugin which allows you to bonemeal vines. This plugin will likely not receive any more
                                            updates because I made it with the intention to be simple.
                                        </p>
                                    <div class="btn-row">
                                        <a class="btn link" href="https://www.spigotmc.org/resources/bonemealvines-simple-utility-to-bonemeal-vines.111360/" target="_blank" rel="BonemealVines Download">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </section>



                        <br>
                        <h2 class="scramble"><i class="fa-solid fa-server"></i> Servers & organizations</h2>
                        <section class="project-list">
                            <section class="project" id="ingeniamc">
                                <div>
                                    <picture>
                                        <source type="image/webp" srcset="/assets/projects/ingeniamc.webp">
                                        <source type="image/jpg" srcset="/assets/projects/ingeniamc.jpg">
                                        <img class="project-icon" src="/assets/projects/ingeniamc.jpg" alt="IngeniaMC icon" draggable="false">
                                    </picture>
                                </div>
                                <div>
                                    <h3>IngeniaMC</h3>
                                        <p>IngeniaMC is a beautiful and unique Minecraft Theme Park server I own together with a dear friend of mine. 
                                            For this I've developed a core plugin which handles 90% of what happens in the server and adds some crazy cool
                                            features like wands, body-wear and a beautiful dialogue system.
                                        </p>
                                    <div class="btn-row">
                                        <a class="btn link" href="https://ingeniamc.net/" target="_blank" rel="IngeniaMC Website">
                                            <i class="fa-solid fa-globe"></i>
                                        </a>
                                        <a class="btn link" href="https://store.ingeniamc.net/" target="_blank" rel="IngeniaMC Store">
                                            <i class="fa-solid fa-store"></i>
                                        </a>
                                        <a class="btn link" href="https://discord.ingeniamc.net/" target="_blank" rel="IngeniaMC Discord">
                                            <i class="fa-brands fa-discord"></i>
                                        </a>
                                        <a class="btn link" href="https://tiktok.ingeniamc.net/" target="_blank" rel="IngeniaMC TikTok">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </a>
                                        <a class="btn link" href="https://insta.ingeniamc.net/" target="_blank" rel="IngeniaMC Instagram">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a class="btn link" href="https://www.youtube.com/watch?v=t4LSJjS4Rl0" target="_blank" rel="IngeniaMC Youtube">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </section>

                            <section class="project" id="bundlegroup">
                                <div>
                                    <picture>
                                        <source type="image/webp" srcset="/assets/projects/bundlegroup.webp">
                                        <source type="image/jpg" srcset="/assets/projects/bundlegroup.jpg">
                                        <img class="project-icon" src="/assets/projects/bundlegroup.jpg" alt="BundleGroup icon" draggable="false">
                                    </picture>
                                </div>
                                <div>
                                    <h3>Bundle Group</h3>
                                        <p>Bundle Group is a tight-knit association that delivers bespoke solutions for clients, hosts impactful charity events and provides robust managed hosting for websites and gaming. I'm a developer at Bundle Group and help with their events by creating well-built plugins and collaborating with other team members.
                                        </p>
                                    <div class="btn-row">
                                        <a class="btn link" href="https://bundlegroup.gg" target="_blank" rel="BundleGroup Website">
                                            <i class="fa-solid fa-globe"></i>
                                        </a>
                                        <a class="btn link" href="https://discord.gg/a9ZBt4wqkz" target="_blank" rel="Atlas Discord">
                                            <i class="fa-brands fa-discord"></i>
                                        </a>
                                        <a class="btn link" href="https://www.youtube.com/@bundlegroupmc" target="_blank" rel="Bundle Group Youtube">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </section>

                            <section class="project" id="venturevalley">
                                <div>
                                    <picture>
                                        <source type="image/webp" srcset="/assets/projects/venturevalley.webp">
                                        <source type="image/jpg" srcset="/assets/projects/venturevalley.jpg">
                                        <img class="project-icon" src="/assets/projects/venturevalley.jpg" alt="VentureValley icon" draggable="false">
                                    </picture>
                                </div>
                                <div>
                                    <h3>VentureValley</h3>
                                        <p>A beautiful Theme Park server with beautiful and realistic rides which is a must to visit! I'm the developer on this server and code the features which make the server unique. This server is also the winner of Best Custom Rollercoaster at CoasterCon 2024!
                                        </p>
                                    <div class="btn-row">
                                        <a class="btn link" href="https://venturevalleymc.nl" target="_blank" rel="VentureValley Website">
                                            <i class="fa-solid fa-globe"></i>
                                        </a>
                                        <a class="btn link" href="https://venturevalley.tebex.io" target="_blank" rel="VentureValley Store">
                                            <i class="fa-solid fa-store"></i>
                                        </a>
                                        <a class="btn link" href="https://discord.venturevalleymc.nl/" target="_blank" rel="VentureValley Discord">
                                            <i class="fa-brands fa-discord"></i>
                                        </a>
                                        <a class="btn link" href="https://tiktok.com/@venturevalley" target="_blank" rel="VentureValley TikTok">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </a>
                                        <a class="btn link" href="https://instagram.com/venturevalleymc" target="_blank" rel="VentureValley Instagram">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a class="btn link" href="https://youtube.com/@venturevalley" target="_blank" rel="VentureValley Youtube">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </section>



                        <br>
                        <h2 class="scramble"><i class="fa-solid fa-cart-shopping"></i> Commission Plugins</h2>
                        <section class="project-list">
                            <section class="project" id="advancedleaderboard">
                                <div>
                                    <picture>
                                        <source type="image/webp" srcset="/assets/projects/advancedleaderboard.webp">
                                        <source type="image/jpg" srcset="/assets/projects/advancedleaderboard.jpg">
                                        <img class="project-icon" src="/assets/projects/advancedleaderboard.jpg" alt="AdvancedLeaderboard icon" draggable="false">
                                    </picture>
                                </div>
                                <div>
                                    <h3>AdvancedLeaderboard</h3>
                                        <p>Create stunning leaderboards using item frames with this highly customizable plugin. Easily switch between all-time, monthly, weekly, and daily scores. Customize every aspect, from colors to images, and enjoy built-in custom placeholders. It also supports TrainCarts for added functionality, making it perfect for theme park servers.
                                        </p>
                                </div>
                            </section>

                            <section class="project" id="queues">
                                <div>
                                    <picture>
                                        <source type="image/webp" srcset="/assets/projects/queues.webp">
                                        <source type="image/jpg" srcset="/assets/projects/queues.jpg">
                                        <img class="project-icon" src="/assets/projects/queues.jpg" alt="Queues icon" draggable="false">
                                    </picture>
                                </div>
                                <div>
                                    <h3>Queues</h3>
                                        <p>Manage virtual queues for rides with ease using this plugin. It automatically teleports players to the queue's destination when their wait time is up. You can allow multiple players per queue spot, and the system rebalances itself if players leave the queue or server. A challenging yet fun plugin designed for smooth queue management.
                                        </p>
                                </div>
                            </section>

                            <section class="project" id="motionmaps">
                                <div>
                                    <picture>
                                        <source type="image/webp" srcset="/assets/projects/motionmaps.webp">
                                        <source type="image/jpg" srcset="/assets/projects/motionmaps.jpg">
                                        <img class="project-icon" src="/assets/projects/motionmaps.jpg" alt="MotionMaps icon" draggable="false">
                                    </picture>
                                </div>
                                <div>
                                    <h3>MotionMaps</h3>
                                        <p>Create animated videos within item frames by simply dropping PNG files into a folder. Control settings like screen size and frame rate (fps) to suit your needs. MotionMaps is optimized with the <a href="https://github.com/SBDPlugins/MapReflectionAPI" class="link" target="_blank">MapReflectionAPI</a> for smooth, fast map updates, making it an efficient way to add dynamic visuals to your server.
                                        </p>
                                </div>
                            </section>

                            <section class="project" id="playermotion">
                                <div>
                                    <picture>
                                        <source type="image/webp" srcset="/assets/projects/playermotion.webp">
                                        <source type="image/jpg" srcset="/assets/projects/playermotion.jpg">
                                        <img class="project-icon" src="/assets/projects/playermotion.jpg" alt="PlayerMotion icon" draggable="false">
                                    </picture>
                                </div>
                                <div>
                                    <h3>PlayerMotion</h3>
                                        <p>PlayerMotion lets server owners define circular areas that trigger commands when players enter or leave. Commands are executed only when the first player enters or the last player exits, making it perfect for creating interactive zones and automated events. Ideal for creative and adventure-based server setups.
                                        </p>
                                </div>
                            </section>

                            <section class="project" id="parkcosmetics">
                                <div>
                                    <picture>
                                        <source type="image/webp" srcset="/assets/projects/parkcosmetics.webp">
                                        <source type="image/jpg" srcset="/assets/projects/parkcosmetics.jpg">
                                        <img class="project-icon" src="/assets/projects/parkcosmetics.jpg" alt="ParkCosmetics icon" draggable="false">
                                    </picture>
                                </div>
                                <div>
                                    <h3>ParkCosmetics</h3>
                                        <p>ParkCosmetics brings your server to life with customizable shops, complete with unique items, shop NPCs, and textured GUIs. Beyond shops, it’s perfect for creating amazing cosmetics, offering a simple system to add new types. With ParkCosmetics, keeping your server fresh and engaging has never been easier.
                                        </p>
                                </div>
                            </section>

                            <section class="project" id="parkhotels">
                                <div>
                                    <picture>
                                        <source type="image/webp" srcset="/assets/projects/parkhotels.webp">
                                        <source type="image/jpg" srcset="/assets/projects/parkhotels.jpg">
                                        <img class="project-icon" src="/assets/projects/parkhotels.jpg" alt="ParkHotels icon" draggable="false">
                                    </picture>
                                </div>
                                <div>
                                    <h3>ParkHotels</h3>
                                        <p>Let players rent hotel rooms for up to seven days with this easy-to-use theme park plugin. Customize room types, manage bookings seamlessly, and integrate with Vault for economy support. The interactive book UI makes reservations immersive, while door lock bypass ensures easy room access.
                                        </p>
                                </div>
                            </section>
                        </section>
                    </div>



                    <!--
                        All modeling projects
                    -->
                    <div id="modeling-projects">
                        <h2 class="scramble"><i class="fa-solid fa-server"></i> Servers</h2>
                        <section class="project-list">
                            <section class="project" id="ingeniamc">
                                <div>
                                    <picture>
                                        <source type="image/webp" srcset="/assets/projects/ingeniamc.webp">
                                        <source type="image/jpg" srcset="/assets/projects/ingeniamc.jpg">
                                        <img class="project-icon" src="/assets/projects/ingeniamc.jpg" alt="IngeniaMC icon" draggable="false">
                                    </picture>
                                </div>
                                <div>
                                    <h3>IngeniaMC</h3>
                                        <p>IngeniaMC is a beautiful and unique Minecraft Theme Park server I own together with a dear friend of mine. 
                                            Together with a few team members, we've created an amazing custom Resource Pack for the server to give
                                            guests the most magical experience they could ever wish for!
                                        </p>
                                    <div class="btn-row">
                                        <a class="btn link" href="https://ingeniamc.net/" target="_blank" rel="IngeniaMC Website">
                                            <i class="fa-solid fa-globe"></i>
                                        </a>
                                        <a class="btn link" href="https://store.ingeniamc.net/" target="_blank" rel="IngeniaMC Store">
                                            <i class="fa-solid fa-store"></i>
                                        </a>
                                        <a class="btn link" href="https://discord.ingeniamc.net/" target="_blank" rel="IngeniaMC Discord">
                                            <i class="fa-brands fa-discord"></i>
                                        </a>
                                        <a class="btn link" href="https://tiktok.ingeniamc.net/" target="_blank" rel="IngeniaMC TikTok">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </a>
                                        <a class="btn link" href="https://insta.ingeniamc.net/" target="_blank" rel="IngeniaMC Instagram">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a class="btn link" href="https://www.youtube.com/watch?v=t4LSJjS4Rl0" target="_blank" rel="IngeniaMC Youtube">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </section>

                            <section class="project" id="paradisecraft">
                                <div>
                                    <picture>
                                        <source type="image/webp" srcset="/assets/projects/paradisecraft.webp">
                                        <source type="image/jpg" srcset="/assets/projects/paradisecraft.jpg">
                                        <img class="project-icon" src="/assets/projects/paradisecraft.jpg" alt="ParadiseCraft icon" draggable="false">
                                    </picture>
                                </div>
                                <div>
                                    <h3>ParadiseCraft</h3>
                                        <p>An up and coming Minecraft Theme Park server with the most beautiful builds (and models :P) you can find!
                                            I used to be modeler on their amazing team and created a ton of cool 3D stuff for the project. This server
                                            won the Best Guest Atmosphere award at CoasterCon 2023.
                                        </p>
                                    <div class="btn-row">
                                        <a class="btn link" href="https://discord.gg/UMZqzMdz7y" target="_blank" rel="ParadiseCraft Discord">
                                            <i class="fa-brands fa-discord"></i>
                                        </a>
                                        <a class="btn link" href="https://www.instagram.com/paradisecraft_themepark?igsh=bGY0MjczcmtmOXdw" target="_blank" rel="ParadiseCraft Instagram">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a class="btn link" href="https://www.youtube.com/@paradisecraftmc" target="_blank" rel="ParadiseCraft Youtube">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </section>

                        <br>
                        <br>

                        <h2 class="scramble"><i class="fa-solid fa-hexagon-nodes"></i> A few models...</h2>
                        <p>Coming later...</p>

                        <!--
                        <h2 class="scramble"><i class="fa-solid fa-server"></i> A few models...</h2>
                        <section class="project-list">
                            <section class="project" id="watering-can">
                                <div class="sketchfab-embed-wrapper"> <iframe title="Watering can" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="640" height="480" src="https://sketchfab.com/models/28158e1a314849a9a89aa10362577e65/embed?autospin=1&autostart=1&transparent=1&ui_theme=dark"> </iframe></div>
                            </section>
                        </section>
                        -->
                    </div>


                    <!--
                        All building projects
                    -->
                    <div id="building-projects">
                        <h2 class="scramble"><i class="fa-solid fa-server"></i> Servers</h2>
                        <section class="project-list">
                            <section class="project" id="ingeniamc">
                                <div>
                                    <picture>
                                        <source type="image/webp" srcset="/assets/projects/ingeniamc.webp">
                                        <source type="image/jpg" srcset="/assets/projects/ingeniamc.jpg">
                                        <img class="project-icon" src="/assets/projects/ingeniamc.jpg" alt="IngeniaMC icon" draggable="false">
                                    </picture>
                                </div>
                                <div>
                                    <h3>IngeniaMC</h3>
                                        <p>IngeniaMC is a beautiful and unique Minecraft Theme Park server I own together with a dear friend of mine. 
                                            With the whole team we've built amazing things and we're still updating and expanding the park up to this
                                            day!
                                        </p>
                                    <div class="btn-row">
                                        <a class="btn link" href="https://ingeniamc.net/" target="_blank" rel="IngeniaMC Website">
                                            <i class="fa-solid fa-globe"></i>
                                        </a>
                                        <a class="btn link" href="https://store.ingeniamc.net/" target="_blank" rel="IngeniaMC Store">
                                            <i class="fa-solid fa-store"></i>
                                        </a>
                                        <a class="btn link" href="https://discord.ingeniamc.net/" target="_blank" rel="IngeniaMC Discord">
                                            <i class="fa-brands fa-discord"></i>
                                        </a>
                                        <a class="btn link" href="https://tiktok.ingeniamc.net/" target="_blank" rel="IngeniaMC TikTok">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </a>
                                        <a class="btn link" href="https://insta.ingeniamc.net/" target="_blank" rel="IngeniaMC Instagram">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a class="btn link" href="https://www.youtube.com/watch?v=t4LSJjS4Rl0" target="_blank" rel="IngeniaMC Youtube">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </section>

                        <br>
                        <br>

                        <h2 class="scramble"><i class="fa-solid fa-cubes"></i> Some builds</h2>
                        <div class="image-row">
                            <div class="image-column">
                                <img src="assets/builds/build_1.png" style="width: 100%;" onclick="onImageClick(this)" alt="Test" draggable="false">
                                <img src="assets/builds/build_3.png" style="width: 100%;" onclick="onImageClick(this)" alt="Test" draggable="false">
                                <img src="assets/builds/build_5.png" style="width: 100%;" onclick="onImageClick(this)" alt="Test" draggable="false">
                                <img src="assets/builds/build_7.png" style="width: 100%;" onclick="onImageClick(this)" alt="Test" draggable="false">
                                <img src="assets/builds/build_9.png" style="width: 100%;" onclick="onImageClick(this)" alt="Test" draggable="false">
                                <img src="assets/builds/build_11.png" style="width: 100%;" onclick="onImageClick(this)" alt="Test" draggable="false">
                            </div>
                            <div class="image-column">
                                <img src="assets/builds/build_6.png" style="width: 100%;" onclick="onImageClick(this)" alt="Test" draggable="false">
                                <img src="assets/builds/build_4.png" style="width: 100%;" onclick="onImageClick(this)" alt="Test" draggable="false">
                                <img src="assets/builds/build_2.png" style="width: 100%;" onclick="onImageClick(this)" alt="Test" draggable="false">
                                <img src="assets/builds/build_8.png" style="width: 100%;" onclick="onImageClick(this)" alt="Test" draggable="false">
                                <img src="assets/builds/build_10.png" style="width: 100%;" onclick="onImageClick(this)" alt="Test" draggable="false">
                                <img src="assets/builds/build_12.png" style="width: 100%;" onclick="onImageClick(this)" alt="Test" draggable="false">
                            </div>
                        </div>

                        <!--
                        <h2 class="scramble"><i class="fa-solid fa-server"></i> A few models...</h2>
                        <section class="project-list">
                            <section class="project" id="watering-can">
                                <div class="sketchfab-embed-wrapper"> <iframe title="Watering can" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="640" height="480" src="https://sketchfab.com/models/28158e1a314849a9a89aa10362577e65/embed?autospin=1&autostart=1&transparent=1&ui_theme=dark"> </iframe></div>
                            </section>
                        </section>
                        -->
                    </div>
                </div>
            </div>
        </div>

        <div id="modal" class="image-modal" onclick="this.style.display='none'">
            <span id="modal-close">&times;</span>
            <img class="modal-content" id="modal-image" style="width:100%" draggable="false">
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const elements = document.querySelectorAll('.scramble');
                elements.forEach(element => scrambleText(element, 800)); // Total duration of 1.5 seconds

                function scrambleText(element, duration) {
                    const originalHtml = element.innerHTML; // Store original HTML to restore later
                    const textNodes = getTextNodes(element);

                    let iteration = 0;
                    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

                    function update() {
                        let scrambledHtml = originalHtml;

                        // Scramble text nodes
                        textNodes.forEach(node => {
                            const originalText = node.textContent;
                            const scrambledText = originalText.split('').map((char, i) => {
                                if (char === ' ') return char; // Preserve spaces
                                if (iteration >= (duration / 60) / originalText.length * i) return char; // Reveal original characters progressively
                                return chars[Math.floor(Math.random() * chars.length)];
                            }).join('');

                            scrambledHtml = scrambledHtml.replace(originalText, scrambledText); // Update only the text part
                        });

                        element.innerHTML = scrambledHtml; // Apply scrambled text

                        iteration++;

                        if (iteration < (duration / 60)) {
                            setTimeout(update, 60); // Update every 60ms for smoother animation
                        } else {
                            element.innerHTML = originalHtml; // Restore original HTML
                        }
                    }

                    update();
                }

                // Helper function to get all text nodes within an element
                function getTextNodes(element) {
                    const textNodes = [];
                    function walk(node) {
                        if (node.nodeType === Node.TEXT_NODE) {
                            textNodes.push(node);
                        } else if (node.nodeType === Node.ELEMENT_NODE) {
                            node.childNodes.forEach(walk);
                        }
                    }
                    walk(element);
                    return textNodes;
                }
            });
        </script>



        <footer>
            <p>
                &#169; m64.dev <script>document.addEventListener('DOMContentLoaded', function() {document.getElementById("year").innerHTML = new Date().getFullYear();});</script><span id="year"></span>
            </p>
        </footer>
    </body>
</html>