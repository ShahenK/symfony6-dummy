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

/* blog/index.html.twig */
class __TwigTemplate_bc0f602af4a47875c192a8a9e57a95e2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "blog/index.html.twig", 1);
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
        echo "    <div class=\"w-4/5 m-auto text-center\">
        <div class=\"py-12 border-b border-gray-200\">
            <h1 class=\"text-6xl pt-12 pb-8\">
                Some Entity Review (";
        // line 7
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["some_entity"]) || array_key_exists("some_entity", $context) ? $context["some_entity"] : (function () { throw new RuntimeError('Variable "some_entity" does not exist.', 7, $this->source); })())), "html", null, true);
        echo ")
            </h1>

            <span class=\"font-light text-gray-500 italic\">
                Created by Code With Dary
            </span>
        </div>
    </div>
";
        // line 15
        ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "email", [], "any", false, false, false, 15), "html", null, true))) : (print ("")));
        echo "
    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "    <div class=\"mx-auto w-4/5 my-8\">
        <a
                href=\"/blog/create\"
                class=\"uppercase border border-gray-500 text-lg py-4 px-6 rounded transition transition-all bg-gray-800 text-white hover:bg-white hover:text-gray-800\">
            Create New movie
        </a>
    </div>
    ";
        }
        // line 25
        echo "    <div class=\"md:grid lg:grid-cols-3 gap-20 w-4/5 mx-auto py-15 \">
        <!-- Review Item -->
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["some_entity"]) || array_key_exists("some_entity", $context) ? $context["some_entity"] : (function () { throw new RuntimeError('Variable "some_entity" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 28
            echo "            <div class=\"text-center pt-8 pb-4\">
";
            // line 34
            echo "
                <h2 class=\"text-gray-700 font-bold text-3xl py-2\">
                    ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "
                </h2>

                <span class=\"text-gray-500\">
                    By <span class=\"italic text-sm text-gray-800\">Code With Dary | 28.01.2022
                </span>

";
            // line 46
            echo "
                <a href=\"/blog/";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\" class=\"uppercase border border-gray-500 text-gray-600 text-lg py-4 px-12 rounded transition transition-all hover:bg-gray-800 hover:text-white\">
                    Keep Reading
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 52,  119 => 47,  116 => 46,  106 => 36,  102 => 34,  99 => 28,  95 => 27,  91 => 25,  81 => 17,  79 => 16,  75 => 15,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

{% block body %}
    <div class=\"w-4/5 m-auto text-center\">
        <div class=\"py-12 border-b border-gray-200\">
            <h1 class=\"text-6xl pt-12 pb-8\">
                Some Entity Review ({{ some_entity|length }})
            </h1>

            <span class=\"font-light text-gray-500 italic\">
                Created by Code With Dary
            </span>
        </div>
    </div>
{{ app.user ? app.user.email : ''}}
    {% if app.user %}
    <div class=\"mx-auto w-4/5 my-8\">
        <a
                href=\"/blog/create\"
                class=\"uppercase border border-gray-500 text-lg py-4 px-6 rounded transition transition-all bg-gray-800 text-white hover:bg-white hover:text-gray-800\">
            Create New movie
        </a>
    </div>
    {% endif %}
    <div class=\"md:grid lg:grid-cols-3 gap-20 w-4/5 mx-auto py-15 \">
        <!-- Review Item -->
        {% for comment in some_entity %}
            <div class=\"text-center pt-8 pb-4\">
{#                <img#}
{#                        src=\"{{ comment.imagePath }}\"#}
{#                        alt=\"\"#}
{#                        class=\"shadow-xl rounded-md\"#}
{#                />#}

                <h2 class=\"text-gray-700 font-bold text-3xl py-2\">
                    {{ comment.title }}
                </h2>

                <span class=\"text-gray-500\">
                    By <span class=\"italic text-sm text-gray-800\">Code With Dary | 28.01.2022
                </span>

{#                <p class=\"text-base text-gray-700 pt-4 pb-10 leading-8 font-light\">#}
{#                    {{ comment.description }}#}
{#                </p>#}

                <a href=\"/blog/{{ comment.id }}\" class=\"uppercase border border-gray-500 text-gray-600 text-lg py-4 px-12 rounded transition transition-all hover:bg-gray-800 hover:text-white\">
                    Keep Reading
                </a>
            </div>
        {% endfor %}
    </div>
{% endblock %}", "blog/index.html.twig", "/var/www/symfony6_proj/templates/blog/index.html.twig");
    }
}
