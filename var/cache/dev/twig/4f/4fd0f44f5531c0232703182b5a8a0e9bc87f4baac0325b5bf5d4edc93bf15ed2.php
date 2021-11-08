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

/* controller_users/index.html.twig */
class __TwigTemplate_cd332fb3bc36748405df52062e552d15f47cbd106568c43a2d9ca4bbcf3bef80 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "controller_users/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "controller_users/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "controller_users/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ControllerUsersController!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<!-- ======= Team Section ======= -->
\t<section id=\"team\" class=\"team\">
\t\t<div class=\"container\">

\t\t\t<div class=\"section-title\" data-aos=\"fade-up\">
\t\t\t\t<h2>Costumer Manager List</h2>
\t\t\t\t<p>Voici les différentes Costumer Manager vous pouvez faire les opérations de modification et de suppression</p>
\t\t\t</div>
             <div class=\"row\">
             ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["costumers"]) || array_key_exists("costumers", $context) ? $context["costumers"] : (function () { throw new RuntimeError('Variable "costumers" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["costumer"]) {
            // line 18
            echo "\t\t\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 10px;\">
\t\t\t\t<h3 class=\"card-header\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"></font>
\t\t\t\t\t</font>
\t\t\t\t</h3>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title text-center\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> Information Costumer</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</h5>
\t\t\t\t</div>
\t\t\t\t<img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["costumer"], "image", [], "any", false, false, false, 31))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"></font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</p>
\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> Prénom :  ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["costumer"], "prenom", [], "any", false, false, false, 41), "html", null, true);
            echo "</font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
                        <li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> Nom :  ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["costumer"], "nom", [], "any", false, false, false, 46), "html", null, true);
            echo "</font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
                        <li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> Location :  ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["costumer"], "location", [], "any", false, false, false, 51), "html", null, true);
            echo "</font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> Téléphone :  ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["costumer"], "telephone", [], "any", false, false, false, 56), "html", null, true);
            echo "</font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> Contact : ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["costumer"], "contact", [], "any", false, false, false, 61), "html", null, true);
            echo "</font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
                    <div class=\"text-center\">
                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_users", ["id" => twig_get_attribute($this->env, $this->source, $context["costumer"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Modifier</a>
                    <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_users", ["id" => twig_get_attribute($this->env, $this->source, $context["costumer"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Suprimer</a>
                    </div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['costumer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "             </div>
\t\t</div>

\t</div>
</section>
<!-- End Team Section -->";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "controller_users/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 76,  177 => 67,  173 => 66,  165 => 61,  157 => 56,  149 => 51,  141 => 46,  133 => 41,  120 => 31,  105 => 18,  101 => 17,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ControllerUsersController!
{% endblock %}

{% block body %}

\t<!-- ======= Team Section ======= -->
\t<section id=\"team\" class=\"team\">
\t\t<div class=\"container\">

\t\t\t<div class=\"section-title\" data-aos=\"fade-up\">
\t\t\t\t<h2>Costumer Manager List</h2>
\t\t\t\t<p>Voici les différentes Costumer Manager vous pouvez faire les opérations de modification et de suppression</p>
\t\t\t</div>
             <div class=\"row\">
             {% for costumer in costumers %}
\t\t\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 10px;\">
\t\t\t\t<h3 class=\"card-header\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"></font>
\t\t\t\t\t</font>
\t\t\t\t</h3>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title text-center\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> Information Costumer</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</h5>
\t\t\t\t</div>
\t\t\t\t<img src=\"{{asset('uploads/images/'~ costumer.image)}}\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"></font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</p>
\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> Prénom :  {{costumer.prenom}}</font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
                        <li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> Nom :  {{costumer.nom}}</font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
                        <li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> Location :  {{costumer.location}}</font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> Téléphone :  {{costumer.telephone}}</font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> Contact : {{costumer.contact}}</font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
                    <div class=\"text-center\">
                    <a href=\"{{path('edit_users',{'id': costumer.id})}}\" class=\"btn btn-success\">Modifier</a>
                    <a href=\"{{path('delete_users',{'id': costumer.id})}}\" class=\"btn btn-danger\">Suprimer</a>
                    </div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t</div>

\t\t\t{% endfor %}
             </div>
\t\t</div>

\t</div>
</section>
<!-- End Team Section -->{% endblock %}
", "controller_users/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Test-Xarala/templates/controller_users/index.html.twig");
    }
}
