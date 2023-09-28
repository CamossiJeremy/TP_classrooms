<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* jeremy/base.html.twig */
class __TwigTemplate_0e23b8a3c7819a34f4f5049d2b6fa709 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeremy/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeremy/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chapitreActuel"]) || array_key_exists("chapitreActuel", $context) ? $context["chapitreActuel"] : (function () { throw new RuntimeError('Variable "chapitreActuel" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/style.css"), "html", null, true);
        echo "\">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Koulen&family=Lato&family=Nunito&family=Playfair+Display:ital@1&family=Prata&family=Raleway:ital,wght@1,100&family=Roboto&family=Roboto+Condensed&family=Teko&display=swap');
    </style>
</head>
<body>
    <ul class=\"container\">
        <li>
            <img class=\"temps\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/Logo temps.png"), "html", null, true);
        echo "\">Temps </img>
            <img class=\"niveau\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/Logo Niveau.png"), "html", null, true);
        echo "\">Niveau</img>
            <img class=\"date\" onClick=\"window.location.href='/je'\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/Logo PDF.png"), "html", null, true);
        echo "\"></img>
            <p> Date de publication/Mise à jour :  ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dateMiseAJour"]) || array_key_exists("dateMiseAJour", $context) ? $context["dateMiseAJour"] : (function () { throw new RuntimeError('Variable "dateMiseAJour" does not exist.', 16, $this->source); })()), "format", ["d-m-Y"], "method", false, false, false, 16), "html", null, true);
        echo "</p>
        </li>
    </ul>
   
    <div class=\"barre_progression\">
        <img class = \"home\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/Logo Home.png"), "html", null, true);
        echo "\">
        <span class=\"rectangle1\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <img class = \"certif\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/Logo Certification.png"), "html", null, true);
        echo "\">
    </div>

    <h3 class=\"titre_chapitre\">Titre du Chapitre</h3>
    <div class=\"cours\">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit
            pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper
            ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero
            maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo
            elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh
            elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl.
            Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien
            nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet
            ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor
            nunc nisl, in ultricies velit condimentum ac.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit
            pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper
            ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero
            maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo
            elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh
            elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl.
            Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien
            nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet
            ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor
            nunc nisl, in ultricies velit condimentum ac.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit
            pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper
            ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero
            maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo
            elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh
            elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl.
            Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien
            nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet
            ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor
            nunc nisl, in ultricies velit condimentum ac.
        </p>
    </div>

    <form class=\"boutons\" method=\"POST\">
        <button class=\"btn\">Revenir au chapitre précédent <img src=\"https://www.htmlcssbuttongenerator.com/iconExample-search-thin.svg\" style=\"width: 22px; margin-left: 0px; margin-right: 10px; flex-direction: row-reverse;\"></button>
        <button class=\"btn\">Je valide ce chapitre et je passe au suivant <img src=\"https://www.htmlcssbuttongenerator.com/iconExample-search-thin.svg\" style=\"width: 22px; margin-left: 0px; margin-right: 10px; flex-direction: row-reverse;\"></button>
        <button class=\"btn\">Passer au chapitre suivant <img src=\"https://www.htmlcssbuttongenerator.com/iconExample-search-thin.svg\" style=\"width: 22px; margin-left: 0px; margin-right: 10px; flex-direction: row-reverse;\"></button>
    </form>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jeremy/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  83 => 21,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>{{ chapitreActuel.titre }}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('style/style.css') }}\">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Koulen&family=Lato&family=Nunito&family=Playfair+Display:ital@1&family=Prata&family=Raleway:ital,wght@1,100&family=Roboto&family=Roboto+Condensed&family=Teko&display=swap');
    </style>
</head>
<body>
    <ul class=\"container\">
        <li>
            <img class=\"temps\" src=\"{{ asset('Images/Logo temps.png')}}\">Temps </img>
            <img class=\"niveau\" src=\"{{ asset('Images/Logo Niveau.png')}}\">Niveau</img>
            <img class=\"date\" onClick=\"window.location.href='/je'\" src=\"{{ asset('Images/Logo PDF.png')}}\"></img>
            <p> Date de publication/Mise à jour :  {{ dateMiseAJour.format('d-m-Y') }}</p>
        </li>
    </ul>
   
    <div class=\"barre_progression\">
        <img class = \"home\" src=\"{{ asset('Images/Logo Home.png')}}\">
        <span class=\"rectangle1\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <span class=\"rectangle\"></span>
        <img class = \"certif\" src=\"{{ asset('Images/Logo Certification.png') }}\">
    </div>

    <h3 class=\"titre_chapitre\">Titre du Chapitre</h3>
    <div class=\"cours\">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit
            pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper
            ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero
            maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo
            elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh
            elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl.
            Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien
            nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet
            ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor
            nunc nisl, in ultricies velit condimentum ac.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit
            pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper
            ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero
            maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo
            elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh
            elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl.
            Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien
            nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet
            ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor
            nunc nisl, in ultricies velit condimentum ac.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit
            pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper
            ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero
            maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo
            elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh
            elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl.
            Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien
            nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet
            ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor
            nunc nisl, in ultricies velit condimentum ac.
        </p>
    </div>

    <form class=\"boutons\" method=\"POST\">
        <button class=\"btn\">Revenir au chapitre précédent <img src=\"https://www.htmlcssbuttongenerator.com/iconExample-search-thin.svg\" style=\"width: 22px; margin-left: 0px; margin-right: 10px; flex-direction: row-reverse;\"></button>
        <button class=\"btn\">Je valide ce chapitre et je passe au suivant <img src=\"https://www.htmlcssbuttongenerator.com/iconExample-search-thin.svg\" style=\"width: 22px; margin-left: 0px; margin-right: 10px; flex-direction: row-reverse;\"></button>
        <button class=\"btn\">Passer au chapitre suivant <img src=\"https://www.htmlcssbuttongenerator.com/iconExample-search-thin.svg\" style=\"width: 22px; margin-left: 0px; margin-right: 10px; flex-direction: row-reverse;\"></button>
    </form>

</body>
</html>
", "jeremy/base.html.twig", "C:\\Users\\Jeremy\\Desktop\\TP_ADRAR\\adrar_classrooms\\templates\\jeremy\\base.html.twig");
    }
}
