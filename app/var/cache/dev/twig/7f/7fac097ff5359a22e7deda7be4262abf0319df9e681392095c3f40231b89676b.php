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

/* admin/add_remove.html.twig */
class __TwigTemplate_16e11d15f4e9bc2bdfb8d3f945c5729f783f1dec561a57efc298f599a86a999b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/add_remove.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/add_remove.html.twig"));

        $this->parent = $this->loadTemplate("root/index.html.twig", "admin/add_remove.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/add_remove.css"), "html", null, true);
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
            ";
        // line 11
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 11, $this->source); })()) == "addUser")) {
            // line 12
            echo "            ";
        }
        // line 13
        echo "            ";
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 13, $this->source); })()) == "removeUser")) {
            // line 14
            echo "                <div class=\"users\">
                    <div class=\"users_wrapper\">
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 17
                echo "                            <div class=\"user\">
                                <a href=\"/page/";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 18), "html", null, true);
                echo "\"><img class = \"user_img\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 18), "html", null, true);
                echo "\"></a>
                                <div class=\"panel\">
                                    <a href=\"/remove_user/";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 20), "html", null, true);
                echo "\"><i class=\"bi bi-dash-circle\"></i></a>
                                    <p>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 21), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                    </div>
                </div>
            ";
        }
        // line 28
        echo "            ";
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 28, $this->source); })()) == "addHobby")) {
            // line 29
            echo "            ";
        }
        // line 30
        echo "            ";
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 30, $this->source); })()) == "removeHobby")) {
            // line 31
            echo "                <div class=\"container_inner\">
                    <p class = \"header_f\">Hobbies</p>
                    <div class=\"hobbies_wrapper\">
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hobbies"]) || array_key_exists("hobbies", $context) ? $context["hobbies"] : (function () { throw new RuntimeError('Variable "hobbies" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["hobby"]) {
                // line 35
                echo "                            <div class=\"hobby\">
                                <p>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hobby"], "name", [], "any", false, false, false, 36), "html", null, true);
                echo "</p>
                                <a href=\"/remove_hobby/";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hobby"], "id", [], "any", false, false, false, 37), "html", null, true);
                echo "\"><i class=\"bi bi-dash-circle\"></i></a>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hobby'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                    </div>
                </div>
            ";
        }
        // line 43
        echo "            ";
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 43, $this->source); })()) == "addCountry")) {
            // line 44
            echo "            ";
        }
        // line 45
        echo "            ";
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 45, $this->source); })()) == "removeCountry")) {
            // line 46
            echo "            ";
        }
        // line 47
        echo "


        </div>
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/add_remove.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 47,  197 => 46,  194 => 45,  191 => 44,  188 => 43,  183 => 40,  174 => 37,  170 => 36,  167 => 35,  163 => 34,  158 => 31,  155 => 30,  152 => 29,  149 => 28,  144 => 25,  134 => 21,  130 => 20,  123 => 18,  120 => 17,  116 => 16,  112 => 14,  109 => 13,  106 => 12,  104 => 11,  100 => 9,  90 => 8,  78 => 5,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'root/index.html.twig' %}
{% block header %}
    <link href=\"{{ asset('css/root.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/add_remove.css') }}\" rel=\"stylesheet\"/>
    {{ parent() }}
{% endblock %}

{% block body %}
    <body>
        <div class=\"container\">
            {% if name == 'addUser' %}
            {% endif %}
            {% if name == 'removeUser' %}
                <div class=\"users\">
                    <div class=\"users_wrapper\">
                        {% for user in users %}
                            <div class=\"user\">
                                <a href=\"/page/{{ user.id }}\"><img class = \"user_img\" src=\"{{ user.avatar }}\"></a>
                                <div class=\"panel\">
                                    <a href=\"/remove_user/{{ user.id }}\"><i class=\"bi bi-dash-circle\"></i></a>
                                    <p>{{ user.username }}</p>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            {% endif %}
            {% if name == 'addHobby' %}
            {% endif %}
            {% if name == 'removeHobby' %}
                <div class=\"container_inner\">
                    <p class = \"header_f\">Hobbies</p>
                    <div class=\"hobbies_wrapper\">
                        {% for hobby in hobbies %}
                            <div class=\"hobby\">
                                <p>{{ hobby.name }}</p>
                                <a href=\"/remove_hobby/{{ hobby.id }}\"><i class=\"bi bi-dash-circle\"></i></a>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            {% endif %}
            {% if name == 'addCountry' %}
            {% endif %}
            {% if name == 'removeCountry' %}
            {% endif %}



        </div>
    </body>
{% endblock %}", "admin/add_remove.html.twig", "/var/www/sunflower/templates/admin/add_remove.html.twig");
    }
}
