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
</head>
<body>
<div class=\"container\">   
    <ul>
        <li class = \"temps\"><img src = \"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/Logo temps.png"), "html", null, true);
        echo "\">Temps</a></li>
        <li class = \"niveau\"><img src =\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/Logo Niveau.png"), "html", null, true);
        echo "\">Niveau</a></li>
        <li class = \"date\"><img src =\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/Logo PDF.png"), "html", null, true);
        echo "\">Date de publication/mise à jour</a></li>
    </ul>
</div>

<div class=\"container_infos\">
  <div class=\"infos\">
<h2 class=\"info\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chapitreActuel"]) || array_key_exists("chapitreActuel", $context) ? $context["chapitreActuel"] : (function () { throw new RuntimeError('Variable "chapitreActuel" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), "html", null, true);
        echo "</h2>
<h3 class=\"info\">Niveau : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chapitreActuel"]) || array_key_exists("chapitreActuel", $context) ? $context["chapitreActuel"] : (function () { throw new RuntimeError('Variable "chapitreActuel" does not exist.', 19, $this->source); })()), "niveau", [], "any", false, false, false, 19), "html", null, true);
        echo "</h3>
<h3 class=\"info\">Date de mise à jour : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dateMiseAJour"]) || array_key_exists("dateMiseAJour", $context) ? $context["dateMiseAJour"] : (function () { throw new RuntimeError('Variable "dateMiseAJour" does not exist.', 20, $this->source); })()), "format", ["d-m-Y"], "method", false, false, false, 20), "html", null, true);
        echo "</h3>
  </div>
</div>

<div class=\"barre_progression\">
<img src =\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/Logo Home.png"), "html", null, true);
        echo "\">
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
  <span class=\"rectangle\"></span>
<img src =\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/Logo Certification.png"), "html", null, true);
        echo "\">
</div>

</div>

<h3 class = \"titre_chapitre\"> Titre du Chapitre </h3>
<div class=\"cours\">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl. 
Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor nunc nisl, in ultricies velit condimentum ac.
</p>
</div>

 <form class = \"boutons\" method=\"POST\"> 
    <button class = \"bouton_principal\" type=\"submit\">Revenir au chapitre précédent</button>
     <button class = \"bouton\" type=\"submit\">Je valide ce chapitre et je passe au suivant</button>
       <button class = \"bouton\" type=\"submit\">Passer au chapitre suivant</button>
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
        return array (  111 => 40,  93 => 25,  85 => 20,  81 => 19,  77 => 18,  68 => 12,  64 => 11,  60 => 10,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>{{ chapitreActuel.titre }}</title>
       <link rel=\"stylesheet\" href=\"{{ asset('style/style.css') }}\">
</head>
<body>
<div class=\"container\">   
    <ul>
        <li class = \"temps\"><img src = \"{{asset(\"Images/Logo temps.png\")}}\">Temps</a></li>
        <li class = \"niveau\"><img src =\"{{asset(\"Images/Logo Niveau.png\")}}\">Niveau</a></li>
        <li class = \"date\"><img src =\"{{asset(\"Images/Logo PDF.png\")}}\">Date de publication/mise à jour</a></li>
    </ul>
</div>

<div class=\"container_infos\">
  <div class=\"infos\">
<h2 class=\"info\">{{ chapitreActuel.titre }}</h2>
<h3 class=\"info\">Niveau : {{ chapitreActuel.niveau }}</h3>
<h3 class=\"info\">Date de mise à jour : {{ dateMiseAJour.format('d-m-Y') }}</h3>
  </div>
</div>

<div class=\"barre_progression\">
<img src =\"{{asset(\"Images/Logo Home.png\")}}\">
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
  <span class=\"rectangle\"></span>
<img src =\"{{asset(\"Images/Logo Certification.png\")}}\">
</div>

</div>

<h3 class = \"titre_chapitre\"> Titre du Chapitre </h3>
<div class=\"cours\">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl. 
Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor nunc nisl, in ultricies velit condimentum ac.
</p>
</div>

 <form class = \"boutons\" method=\"POST\"> 
    <button class = \"bouton_principal\" type=\"submit\">Revenir au chapitre précédent</button>
     <button class = \"bouton\" type=\"submit\">Je valide ce chapitre et je passe au suivant</button>
       <button class = \"bouton\" type=\"submit\">Passer au chapitre suivant</button>
</form> 

</body>
</html>
", "jeremy/base.html.twig", "C:\\Users\\Jeremy\\Desktop\\TP_ADRAR\\adrar_classrooms\\templates\\jeremy\\base.html.twig");
    }
}
