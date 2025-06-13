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
        <link rel="stylesheet" href="style/index.css?ver=8">
        <link rel="stylesheet" href="style/exam_calculator.css?ver=0">

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
                        <center><p class="scramble">Zet eerst de mode op wat voor een vak je wil berekenen. Geef dan als eerste input je dagelijks werk van semester 1 en als tweede
                            input je dagelijks werk van semester 2. Geef de exacte getallen in die in je rapport staan, je moet zelf niks berekenen.</p></center>
                        <div class="calculator">
                            <button id="toggleOperation">Mode: Niet-taalvak</button>
                            <input type="number" id="inputA" placeholder="Dagelijks werk semester 1">
                            <input type="number" id="inputB" placeholder="Dagelijks werk semester 2">

                            <div id="resultBox">Je moet minstens <span id="result">0</span>% behalen.</div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const inputA = document.getElementById("inputA");
                const inputB = document.getElementById("inputB");
                const toggleButton = document.getElementById("toggleOperation");
                const resultSpan = document.getElementById("result");

                let nietTaalvak = true;

                function calculate() {
                    const a = parseFloat(inputA.value) || 0;
                    const b = parseFloat(inputB.value) || 0;
                    if(a == 0 || b == 0) return;
                    const result = parseInt(nietTaalvak ? (150 - a - b)/140*100 : (150 - a - 0.7*b)/60*100) + 1;
                    resultSpan.textContent = result;
                }

                inputA.addEventListener("input", calculate);
                inputB.addEventListener("input", calculate);

                toggleButton.addEventListener("click", () => {
                    nietTaalvak = !nietTaalvak;
                    toggleButton.textContent = `Mode: ${nietTaalvak ? "Niet-taalvak" : "Taalvak"}`;
                    inputB.placeholder = nietTaalvak ? 'Dagelijks werk semester 2' : 'Totaal semester 2';

                    calculate();
                });
            });
        </script>

        <footer>
            <p>
                &#169; m64.dev <script>document.addEventListener('DOMContentLoaded', function() {document.getElementById("year").innerHTML = new Date().getFullYear();});</script><span id="year"></span>
            </p>
        </footer>
    </body>
</html>