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

/* page/index.html.twig */
class __TwigTemplate_b67dc3d4219bdc351cee4a63b526e1476665fe137a2be542f941ca2b02d48746 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "root/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent = $this->loadTemplate("root/index.html.twig", "page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/root.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    ";
        // line 5
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <body>
    <div class=\"container\">
        <div class=\"main_inf\">
            <div class=\"avatar_inf\">
                <div class=\"avatar_page\">
                    <img class = \"avatar_content_page\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\">
                </div>
                <div class=\"add_avatar\">
                    <a href=\"#\">Change avatar</a>
                </div>
            </div>
            <div class=\"user_inf\">
                <div class=\"username_page\">
                    <p>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"email\">
                    <p><i class=\"bi bi-envelope\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"country\">
                    <p><i class=\"bi bi-globe\"></i> ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"country\">
                    <p><i class=\"bi bi-globe\"></i> ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"country\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hobbies"]) || array_key_exists("hobbies", $context) ? $context["hobbies"] : (function () { throw new RuntimeError('Variable "hobbies" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hobby"]) {
            // line 35
            echo "                    <p><i class=\"bi bi-check2\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hobby"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                        <p><i class=\"bi bi-check2\"></i> ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hobby"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hobby'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </div>



                <div class=\"friends\">
                    <a href=\"/users\">Users</a>
                    <a href=\"/friends/{id}\">Friends</a>
                </div>
            </div>

        </div>


    </div>
    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 38,  151 => 36,  146 => 35,  142 => 34,  136 => 31,  130 => 28,  124 => 25,  118 => 22,  107 => 14,  100 => 9,  90 => 8,  78 => 5,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'root/index.html.twig' %}
{% block header %}
    <link href=\"{{ asset('css/root.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/page.css') }}\" rel=\"stylesheet\"/>
    {{ parent() }}
{% endblock %}

{%  block body %}
    <body>
    <div class=\"container\">
        <div class=\"main_inf\">
            <div class=\"avatar_inf\">
                <div class=\"avatar_page\">
                    <img class = \"avatar_content_page\" src=\"{{ avatar }}\">
                </div>
                <div class=\"add_avatar\">
                    <a href=\"#\">Change avatar</a>
                </div>
            </div>
            <div class=\"user_inf\">
                <div class=\"username_page\">
                    <p>{{ username }}</p>
                </div>
                <div class=\"email\">
                    <p><i class=\"bi bi-envelope\"></i> {{ email}}</p>
                </div>
                <div class=\"country\">
                    <p><i class=\"bi bi-globe\"></i> {{ country }}</p>
                </div>
                <div class=\"country\">
                    <p><i class=\"bi bi-globe\"></i> {{ id }}</p>
                </div>
                <div class=\"country\">
                    {% for hobby in hobbies %}
                    <p><i class=\"bi bi-check2\"></i> {{ hobby.name }}</p>
                        <p><i class=\"bi bi-check2\"></i> {{ hobby.id }}</p>
                    {% endfor %}
                </div>



                <div class=\"friends\">
                    <a href=\"/users\">Users</a>
                    <a href=\"/friends/{id}\">Friends</a>
                </div>
            </div>

        </div>


    </div>
    </body>

{% endblock %}

", "page/index.html.twig", "/var/www/sunflower/templates/page/index.html.twig");
    }
}
