<!DOCTYPE html>
<html lang="en">
    <header>
        <title>m64.jar</title>

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
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Noto+Sans+Mono:wght@100..900&family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Noto+Sans+Mono:wght@100..900&family=Poppins&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/2ef25d02cd.js" crossorigin="anonymous"></script>
        <script defer src="app.js"></script>
        
    </header>

    <body>
        <nav id="navbar">
            <a class="link item" href="/">
                <i class="fa-solid fa-user"></i>
                <span>About</span>
            </a>
            <a class="link item" href="/projects">
                <i class="fa-solid fa-folder-open"></i>
                <span>Projects</span>
            </a>
            <a class="link item" target="_blank" href="https://bmc.link/M64DiamondStar">
                <i class="fa-solid fa-gem"></i>
                <span>Donate</span>
            </a>
            <a class="link item active" href="/contact">
                <i class="fas fa-envelope-open"></i>
                <span>Contact</span>
            </a>
        </nav>
        <div id="wrapper">
            <div class="page-content">
                <div class="section-wrapper">
                    <section class="intro">
                        <h2 class="scramble">Contact me</h2>
                        <p>There're a few ways to contact me. You can use SpigotMC, <br>E-Mail or Discord, but I'm most active on Discord if you're looking for a quick response.</p>
                        <div class="btn-row">
                                    <a class="btn link" href="https://venturevalley.tebex.io" target="_blank" rel="EffectMaster GitHub">
                                        <i class="fa-solid fa-envelope"> Mail</i>
                                    </a>
                                    <a class="btn link" href="https://discord.com/invite/Scv9afJwXp" target="_blank" rel="M64's Hangout">
                                        <i class="fa-brands fa-discord"> Discord</i>
                                    </a>
                                    <a class="btn link" href="https://venturevalleymc.nl" target="_blank" rel="EffectMaster Download">
                                        <i class="fa-solid fa-faucet"> Spigot</i>
                                    </a>
                                </div>
                    </section>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const elements = document.querySelectorAll('.scramble');
                elements.forEach(element => scrambleText(element, 750)); // Total duration of 1.5 seconds

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
                &#169; m64.dev 2024
            </p>
        </footer>
    </body>

    <style>
        html {
            scroll-behavior: smooth;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        body,html {
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        body {
            background: #1f1f1f;
            color: #ddd;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        div {
            display: block;
            unicode-bidi: isolate;
        }

        #navbar {
            padding: 30px 0;
            background: #191919;
            color: #ddd;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        #navbar .item {
            font-weight: 800;
            padding: 10px 0;
            margin: 0 30px;
            font-family: 'Alegreya Sans SC', sans-serif;
            font-size: 18px;
            transition: 0.5s;
        }

        #navbar .item i {
            margin-right: 10px;
            
        }

        #navbar .item.active {
            color: #fff;
            border-bottom: solid 2px #fff;
        }

        @media only screen and (max-width: 600px) {
            #navbar {
                padding:15px 0;
            }

            #navbar .item {
                padding: 10px 0;
                margin: 0 15px;
            }
        }

        .section-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .section-wrapper section {
            max-width: 600px;
            padding: 10px;
        }

        .btn {
            color: #a8a8a8;
            margin: 10px;
            border: none;
            background: 0 0;
            cursor: pointer;
        }

        .btn-row {
            display: flex;
            flex-wrap: wrap;
        }

        .btn-row .btn:first-of-type {
            margin-left: 0;
        }

        .btn-row .btn:last-of-type {
            margin-right: 0;
        }

        .btn:hover {
            transform: translateY(-3px);
        }

        #wrapper {
            font-family: "Noto Sans Mono", monospace;
            padding: 40px 0;
            margin: 0 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-grow: 1;
        }

        .page-content {
            max-width: 800px;
        }

        @keyframes blink {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
        }

        .link {
            color: #ddd;
            text-decoration: none;
            padding-bottom: 4px;
            font-size: 1em;
            font-weight: 700;
            transition: 0.5s;
        }

        .link:hover {
            color: #fff;
        }

        footer {
            font-family: "Roboto", sans-serif;
            font-size: .85em;
            line-height: 1.4em;
            color: #777;
            text-align: center;
            padding-top: 60px;
            padding-bottom: 20px;
        }

        footer .link {
            color: #c4c4c4;
            font-weight: 400;
            padding-bottom: 1px;
            border-bottom: none;
        }

    </style>
</html>