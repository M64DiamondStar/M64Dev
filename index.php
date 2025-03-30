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
        <link rel="stylesheet" href="style/index.css?ver=6">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 

        <link href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" rel="stylesheet" >
        <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Noto+Sans+Mono:wght@100..900&family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Noto+Sans+Mono:wght@100..900&family=Poppins&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/2ef25d02cd.js" crossorigin="anonymous"></script>
        <script defer src="app.js"></script>

    </header>

    <body>
        <nav id="navbar">
            <a class="link item active" href="/">
                <i class="fa-solid fa-user nav-icon"></i>
                <span>About</span>
            </a>
            <a class="link item" href="/projects">
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
                <div class="section-wrapper">
                    <section class="intro">
                        <h2 class="scramble"><i class="fa-solid fa-address-card"></i> M64's Portfolio</h2>
                        <p class="scramble">Heya! Welcome to my portfolio! I'm M64, a Minecraft plugin nerd, also known as a developer.</p>
                        <p class="scramble">Want to know what kind of work I've done, or what I'm working on at the moment? Head over to the <a class="link" href="/projects">projects</a> page!</p>
                        <p class="scramble">If you want a custom plugin or project to be made, you can also <a class="link" href="/contact">contact me</a>. I'm currently open for commissions!</p>
                        <hr>
                        <div class="skills-container">
                        <div class="skills">
                            <i class="devicon-html5-plain skill" data-skill="HTML" data-level="★★★★"></i>
                            <i class="devicon-css3-plain skill" data-skill="CSS" data-level="★★★"></i>
                            <i class="devicon-kotlin-plain skill" data-skill="Kotlin" data-level="★★★★★"></i>
                            <i class="devicon-java-plain skill" data-skill="Java" data-level="★★★★★"></i>
                            <i class="devicon-python-plain skill" data-skill="Python" data-level="★★★"></i>
                            <i class="devicon-bash-plain skill" data-skill="Bash" data-level="★★"></i>
                            <i class="devicon-docker-plain skill" data-skill="Docker" data-level="★★"></i>
                            <i class="devicon-gradle-original skill" data-skill="Gradle" data-level="★★★"></i>
                            <i class="devicon-github-original skill" data-skill="GitHub" data-level="★★★★"></i>
                            <i class="devicon-intellij-plain skill" data-skill="IntelliJ IDEA" data-level="★★★★"></i>
                            <i class="devicon-vscode-plain skill" data-skill="VS Code" data-level="★★★"></i>
                        </div>
                        <p id="skill-text"><br></p>

                        <script>
                            const skillText = document.getElementById("skill-text");

                            document.querySelectorAll(".skill").forEach(skill => {
                                skill.addEventListener("mouseover", () => {
                                    const name = skill.getAttribute("data-skill");
                                    const level = skill.getAttribute("data-level");
                                    skillText.textContent = `${name} - ${level}`;
                                    skillText.style.opacity = "1";
                                });

                                skill.addEventListener("mouseout", () => {
                                    skillText.style.opacity = "0";
                                });
                            });
                        </script>
                    </section>
                </div>
            </div>
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