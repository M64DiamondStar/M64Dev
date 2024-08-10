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
        <link rel="stylesheet" href="style/contact.css?ver=1">

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
            <a class="link item" href="/projects">
                <i class="fa-solid fa-folder-open nav-icon"></i>
                <span>Projects</span>
            </a>
            <a class="link item active" href="/contact">
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
                <div class="section-wrapper">
                    <section class="intro">
                        <h2 class="scramble"><i class="fa-solid fa-address-book"></i> Contact me</h2>
                        <p>There're a few ways to contact me. You can use SpigotMC, <br>E-Mail or Discord, but I'm most active on Discord if you're looking for a quick response.</p>
                        <div class="btn-row">
                                    <a class="btn link" href= "mailto: info@m64.dev" target="_blank" rel="M64's Mail">
                                        <i class="fa-solid fa-envelope"> Mail</i>
                                    </a>
                                    <a class="btn link" href="https://discord.com/invite/Scv9afJwXp" target="_blank" rel="M64's Hangout">
                                        <i class="fa-brands fa-discord"> Discord</i>
                                    </a>
                                    <a class="btn link" href="https://www.spigotmc.org/members/m64diamondstar.551660/" target="_blank" rel="M64's Spigot">
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
</html>