<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jquery</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
</head>
<body>
<header>
    <h1>Site Film</h1>
    <nav>
        <ul>
            <li>Film</li>
            <li>Acteurs</li>
            <li>Réalisateur</li>
        </ul>
    </nav>
</header>
<main>
    <aside>
        <header>
            <h1>Mon aside</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid debitis, doloribus eveniet nam odit
                quibusdam quo quod? Blanditiis culpa debitis facere fuga id iste, magni minima quae sapiente ut,
                voluptatum!
            </p>
        </header>
    </aside>
    <article>
        <header>
            <h1>Mon article</h1>
        </header>
        <button id="hideAside" type="button">Masquer Aside</button>
        <button id="fadeImg" type="button">Et hop! Plus d'image</button>
        <button id="toggleMenu" type="button">Menu apparait/disparait - A vous de choisir</button>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur debitis ducimus eaque enim expedita
            id iusto magnam mollitia odio quaerat similique, temporibus ullam ut. Doloremque ipsa labore quia temporibus
            vero.
        </p>
        <img src="img/image.jpeg" style="width: 50px;"/>
        <section>
            <dl id="faq">
                <div>
                    <dt id="question1" class="question">question 1</dt>
                    (Nombre de clic: <span id="nbClic">0</span>)
                    <dd style="display:none;" class="response">
                        <dl>
                            <dt>réponse 1 partie 1</dt>
                            <dd>détail 1</dd>
                            <dt>réponse 1 partie 2</dt>
                            <dd>détail 2</dd>
                        </dl>
                    </dd>
                </div>
                <div>
                    <dt id="question2" class="question">question 2</dt>
                    (Nombre de clic: <span id="nbClic">0</span>)
                    <dd style="display:none;" class="response">
                        <dl>
                            <dt>réponse 1 partie 1</dt>
                            <dd>détail 1</dd>
                            <dt>réponse 1 partie 2</dt>
                            <dd>détail 2</dd>
                        </dl>
                    </dd>
                </div>
                <div>
                    <dt id="question3" class="question">question 3</dt>
                    (Nombre de clic: <span id="nbClic">0</span>)
                    <dd style="display:none;" class="response">
                        <dl>
                            <dt>réponse 1 partie 1</dt>
                            <dd>détail 1</dd>
                            <dt>réponse 1 partie 2</dt>
                            <dd>détail 2</dd>
                        </dl>
                    </dd>
                </div>
            </dl>
        </section>
    </article>
</main>
<footer>Sandrine PIZZIMENTI © 2018</footer>

<!-------------------- SCRIPT ---------------------->
<script>
    // $(document).ready(function() {
    //     $('aside').hide(2000);
    //     $('img').hide(3000);
    //     $('nav').slideToggle(500);
    // });

    $('#hideAside').on('click', function () {
        $('aside').hide(2000);
    });

    $('#fadeImg').on('click', function () {
        $('img').hide(30);
    });

    $('#toggleMenu').on('click', function () {
        $('nav').slideToggle(500);
    });


    $('#question1').on('click', function () {
        var next = $(this).next();
        next.slideToggle(200);
    })

    $('dt.question').on('click', function () {
        let next = $(this).siblings('dd.response').toggle();
        let nbCliq = $(this).next('span');
        console.log(nbCliq);
        nbCliq.innerHTML = nbCliq;
        document.getElementById("nbClic").innerHTML = nbClic;
        $(this).data("nbClic", nbClic);
    })

    // $('dd').on('click', function(e) {
    //     e.stopPropagation();
    //     var content = $('#faq').html();
    //     alert(content);
    // });
</script>

<!---------------------------- SCRIPT ------------>

</body>
</html>