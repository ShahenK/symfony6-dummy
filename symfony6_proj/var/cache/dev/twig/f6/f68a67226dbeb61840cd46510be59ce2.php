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

/* blog/show.html.twig */
class __TwigTemplate_bbee3f74d2cae88f10c98eb942d77d66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "blog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"sm:w-3/5 w-4/5 mx-auto\">
        <h1 class=\"pt-20 sm:text-5xl md:text-7xl text-4xl font-bold text-center\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "
        </h1>

        <div class=\"py-10 text-center\">
            <div class=\"inline-block sm:pt-1\">
                <h2 class=\"font-bold\">
                    Created by: Code With Dary
                </h2>

                <p class=\"text-sm text-gray-600\">
                    28-01-2022 4 min. read
                </p>
            </div>
        </div>

";
        // line 26
        echo "
";
        // line 30
        echo "
        <a
                href=\"/blog/edit/";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
        echo "\"
                class=\"bg-green-500 font-bold py-2 px-4 rounded transition-all hover:bg-green-300\">
            Edit Movie
        </a>

        <a
                href=\"/blog/delete/";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "html", null, true);
        echo "\"
                class=\"bg-red-500 font-bold py-2 px-4 ml-6 rounded transition-all hover:bg-red-300\">
            Delete Movie
        </a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 38,  88 => 32,  84 => 30,  81 => 26,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

{% block body %}
    <div class=\"sm:w-3/5 w-4/5 mx-auto\">
        <h1 class=\"pt-20 sm:text-5xl md:text-7xl text-4xl font-bold text-center\">
            {{ comment.title }}
        </h1>

        <div class=\"py-10 text-center\">
            <div class=\"inline-block sm:pt-1\">
                <h2 class=\"font-bold\">
                    Created by: Code With Dary
                </h2>

                <p class=\"text-sm text-gray-600\">
                    28-01-2022 4 min. read
                </p>
            </div>
        </div>

{#        <img#}
{#                src=\"{{ movie.imagePath }}\"#}
{#                class=\"rounded-xl w-full shadow-xl\"#}
{#                alt=\"Icon of Code With Dary\"#}
{#        />#}

{#        <p class=\"text-xl py-6\">#}
{#            {{ movie.description }}#}
{#        </p>#}

        <a
                href=\"/blog/edit/{{ comment.id }}\"
                class=\"bg-green-500 font-bold py-2 px-4 rounded transition-all hover:bg-green-300\">
            Edit Movie
        </a>

        <a
                href=\"/blog/delete/{{ comment.id }}\"
                class=\"bg-red-500 font-bold py-2 px-4 ml-6 rounded transition-all hover:bg-red-300\">
            Delete Movie
        </a>
    </div>
{% endblock %}", "blog/show.html.twig", "/var/www/symfony6_proj/templates/blog/show.html.twig");
    }
}
