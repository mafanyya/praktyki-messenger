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
class __TwigTemplate_e4b61c3a1cd50c0e98d80fe4fbfb7b15 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent = $this->loadTemplate("root/index.html.twig", "page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <body>
    <div class=\"container\">
        <div class=\"main_inf\">
            <div class=\"avatar_inf\">
                    <div class=\"avatar_page\">
                        <img class = \"avatar_content_page\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 14, $this->source); })()))), "html", null, true);
        echo "\">
                    </div>
                </div>
            <div class=\"user_inf\">
                <div class=\"username_page\">
                    <p>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
                ";
        // line 21
        if ((((isset($context["isShowCredentials"]) || array_key_exists("isShowCredentials", $context) ? $context["isShowCredentials"] : (function () { throw new RuntimeError('Variable "isShowCredentials" does not exist.', 21, $this->source); })()) == true) || ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })()) == (isset($context["currentId"]) || array_key_exists("currentId", $context) ? $context["currentId"] : (function () { throw new RuntimeError('Variable "currentId" does not exist.', 21, $this->source); })())))) {
            // line 22
            echo "                <div class=\"email\">
                    <p><i class=\"bi bi-envelope\"></i> ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "</p>
                </div>
                ";
            // line 25
            if ((isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 25, $this->source); })())) {
                // line 26
                echo "                <div class=\"country\">
                    <p class=\"fi fi-";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 27, $this->source); })()), "img", [], "any", false, false, false, 27), "html", null, true);
                echo " fis\"></p>
                    <p class = \"name\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
                echo "</p>
                </div>
                ";
            }
            // line 31
            echo "                ";
            if ((isset($context["hobbies"]) || array_key_exists("hobbies", $context) ? $context["hobbies"] : (function () { throw new RuntimeError('Variable "hobbies" does not exist.', 31, $this->source); })())) {
                // line 32
                echo "                <div class=\"hobbies\">
                    ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["hobbies"]) || array_key_exists("hobbies", $context) ? $context["hobbies"] : (function () { throw new RuntimeError('Variable "hobbies" does not exist.', 33, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["hobby"]) {
                    // line 34
                    echo "                    <p><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hobby"], "img", [], "any", false, false, false, 34), "html", null, true);
                    echo "\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hobby"], "name", [], "any", false, false, false, 34), "html", null, true);
                    echo "</p>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hobby'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                </div>
                ";
            }
            // line 38
            echo "

                <div class=\"change_credentials\">
                    <a href=\"/page/change/";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\">Change account information</a>
                </div>

                <a href=\"/friends/{id}\">Friends</a>
            </div>
        </div>



        <div class=\"users_by_hobby\">

            ";
            // line 52
            if ((isset($context["usersByHobby"]) || array_key_exists("usersByHobby", $context) ? $context["usersByHobby"] : (function () { throw new RuntimeError('Variable "usersByHobby" does not exist.', 52, $this->source); })())) {
                // line 53
                echo "            ";
                if (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 53, $this->source); })()) == (isset($context["currentId"]) || array_key_exists("currentId", $context) ? $context["currentId"] : (function () { throw new RuntimeError('Variable "currentId" does not exist.', 53, $this->source); })()))) {
                    // line 54
                    echo "            <p>Are you intersted in ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["findByHobby"]) || array_key_exists("findByHobby", $context) ? $context["findByHobby"] : (function () { throw new RuntimeError('Variable "findByHobby" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
                    echo "? These are other users who are interested in ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["findByHobby"]) || array_key_exists("findByHobby", $context) ? $context["findByHobby"] : (function () { throw new RuntimeError('Variable "findByHobby" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
                    echo ":</p>
                ";
                } else {
                    // line 56
                    echo "                    <div class=\"header_hobby\">
                <p class = \"hobby_username\">";
                    // line 57
                    echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 57, $this->source); })()), "html", null, true);
                    echo " </p><p>is interested in ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["findByHobby"]) || array_key_exists("findByHobby", $context) ? $context["findByHobby"] : (function () { throw new RuntimeError('Variable "findByHobby" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "html", null, true);
                    echo ". These are other users who are interested in ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["findByHobby"]) || array_key_exists("findByHobby", $context) ? $context["findByHobby"] : (function () { throw new RuntimeError('Variable "findByHobby" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "html", null, true);
                    echo ":</p>
                    </div>
            ";
                }
                // line 60
                echo "                <div class=\"users\">
            ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["usersByHobby"]) || array_key_exists("usersByHobby", $context) ? $context["usersByHobby"] : (function () { throw new RuntimeError('Variable "usersByHobby" does not exist.', 61, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 62
                    echo "                <div class=\"user\">
                    <a href=\"/page/";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 63), "html", null, true);
                    echo "\" ><img  src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 63))), "html", null, true);
                    echo "\"></a>
                    <p>";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 64), "html", null, true);
                    echo "</p>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                </div>
            ";
            }
            // line 69
            echo "        </div>
        ";
        } else {
            // line 71
            echo "        <p>This is a private profile.</p>

        ";
        }
        // line 74
        echo "




    </div>
    </body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  253 => 74,  248 => 71,  244 => 69,  240 => 67,  231 => 64,  225 => 63,  222 => 62,  218 => 61,  215 => 60,  205 => 57,  202 => 56,  194 => 54,  191 => 53,  189 => 52,  175 => 41,  170 => 38,  166 => 36,  155 => 34,  151 => 33,  148 => 32,  145 => 31,  139 => 28,  135 => 27,  132 => 26,  130 => 25,  125 => 23,  122 => 22,  120 => 21,  115 => 19,  107 => 14,  100 => 9,  90 => 8,  78 => 5,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
                        <img class = \"avatar_content_page\" src=\"{{ asset('uploads/avatars/' ~  avatar ) }}\">
                    </div>
                </div>
            <div class=\"user_inf\">
                <div class=\"username_page\">
                    <p>{{ username }}</p>
                </div>
                {% if (isShowCredentials  == true) or (id == currentId) %}
                <div class=\"email\">
                    <p><i class=\"bi bi-envelope\"></i> {{ email}}</p>
                </div>
                {% if country %}
                <div class=\"country\">
                    <p class=\"fi fi-{{ country.img }} fis\"></p>
                    <p class = \"name\">{{ country.name }}</p>
                </div>
                {% endif %}
                {% if hobbies %}
                <div class=\"hobbies\">
                    {% for hobby in hobbies %}
                    <p><i class=\"{{ hobby.img }}\"></i> {{ hobby.name }}</p>
                    {% endfor %}
                </div>
                {% endif %}


                <div class=\"change_credentials\">
                    <a href=\"/page/change/{{ id }}\">Change account information</a>
                </div>

                <a href=\"/friends/{id}\">Friends</a>
            </div>
        </div>



        <div class=\"users_by_hobby\">

            {% if usersByHobby %}
            {% if id == currentId %}
            <p>Are you intersted in {{ findByHobby.name }}? These are other users who are interested in {{ findByHobby.name }}:</p>
                {% else %}
                    <div class=\"header_hobby\">
                <p class = \"hobby_username\">{{ username }} </p><p>is interested in {{ findByHobby.name }}. These are other users who are interested in {{ findByHobby.name }}:</p>
                    </div>
            {% endif %}
                <div class=\"users\">
            {% for user in usersByHobby %}
                <div class=\"user\">
                    <a href=\"/page/{{ user.id }}\" ><img  src=\"{{ asset('uploads/avatars/' ~  user.avatar ) }}\"></a>
                    <p>{{ user.username }}</p>
                </div>
            {% endfor %}
                </div>
            {% endif %}
        </div>
        {% else %}
        <p>This is a private profile.</p>

        {% endif %}





    </div>
    </body>

{% endblock %}

", "page/index.html.twig", "/home/dev/Desktop/sunflower/app/templates/page/index.html.twig");
    }
}
