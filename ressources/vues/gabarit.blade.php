<!DOCTTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ce site est mon portfolio et il regroupe principalement les projets que j'ai fait
        dans les dernières années, tant en design, intégration, programmation que multimédia. Mon CV est également à jour dans le
        site et des liens mènent vers mon github et mon Linkedin personnel. Il est responsive mobile, tablette et table et il
        est accessible">
    <meta name="keywords" content="Jean-François Duval, Portfolio, intégration multimédia, développement web, design d'interface,
 Cégep de Sainte-Foy">
    <meta name="author" content="Jean-François Duval">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../liaisons/css/styles.css">
{{--    <script defer src="../js/_menu.js"></script>--}}
{{--    <script>document.body.classList.add('js');</script>--}}
{{--    <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
{{--    <script defer src="../js/_formulaireResponsables.js"></script>--}}
{{--    <script defer src="../js/_accordeon.js"></script>--}}
{{--    <script defer src="../js/_carrousel.js"></script>--}}
{{--    <script src="https://www.google.com/recaptcha/api.js" async defer></script>--}}
{{--    <link rel="icon" type="image/svg+xml" href="../icones/favicon.svg">--}}
</head>
<body>
<header>
    @include('fragments.entete')
</header>

<main>
    @yield('contenu')
</main>

<footer>
    @include('fragments.pieddepage')
</footer>
</body>
</html>




