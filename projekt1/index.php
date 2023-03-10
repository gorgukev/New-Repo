<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dennis Back-end template</title>
    <link rel="stylesheet" href="../style.css">
    <script src="./script.js" defer></script>
</head>

<body>

    <div id="container">
        <!-- Max 800px bred container-->

        <header>
            <!-- Logo och meny i headern -->
            <img src="../media/logo.svg" alt="Website logo" />
            <div id="logo">DenApp</div>

            <nav>
                <!-- Huvudmenyn -->
                <ul>
                    <li><a href="../home/">Home</a></li>
                    <li><a href="../projekt1/">Projekt 1</a></li>
                    <li><a href="../projekt2/">Projekt 2</a></li>
                    <li><a href="../rapport/">Rapport</a></li>
                </ul>
            </nav>
        </header>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>



            <!-- Artiklar placerar sig snyggt nedanför varann-->
            <article>
                <h2>Uppgift 1 - Superglobals</h2>
                <?php
                // Php script syns inte på klienten, de körs på servern efter att klienten har bett om ett dokument
                // phpinfo();
                /* Uppg 1 - Systemareorna och superglobals */
                print("<p>Servern snurrar på port " . $_SERVER['SERVER_PORT'] . ", som vanligt med https och apache.");
                ?>
            </article>
            <div class="separator"></div>

            <article>
                <h2>Uppgift 2 - Datum och tid</h2>
                <?php
                $datum = date("d.M.Y");
                print("<p>Dagens datum är: <br>" . $datum . "</p>");
                // Arrays
                $veckodagar = array("Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
                print("<p>Idag är det veckodag nummer: " . date("l") . "</p>");
                print("<p>Nytt försök, är det veckodag nummer " . date("m") . "då?");
                print("<p>Veckodag nummer 01 betyder att det är " . $veckodagar[1] . "</p>");

                ?>
            </article>

        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Made by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>