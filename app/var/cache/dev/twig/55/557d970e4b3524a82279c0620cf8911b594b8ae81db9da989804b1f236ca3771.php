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

                ";
        // line 25
        if ((((isset($context["isShowCredentials"]) || array_key_exists("isShowCredentials", $context) ? $context["isShowCredentials"] : (function () { throw new RuntimeError('Variable "isShowCredentials" does not exist.', 25, $this->source); })()) == true) || ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 25, $this->source); })()) == (isset($context["currentId"]) || array_key_exists("currentId", $context) ? $context["currentId"] : (function () { throw new RuntimeError('Variable "currentId" does not exist.', 25, $this->source); })())))) {
            // line 26
            echo "                <div class=\"email\">
                    <p><i class=\"bi bi-envelope\"></i> ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"country\">
                    <p><i class=\"bi bi-globe\"></i> ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                </div>


                <div class=\"hobbies\">
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hobbies"]) || array_key_exists("hobbies", $context) ? $context["hobbies"] : (function () { throw new RuntimeError('Variable "hobbies" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["hobby"]) {
                // line 36
                echo "                    <p><i class=\"bi bi-check2\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hobby"], "name", [], "any", false, false, false, 36), "html", null, true);
                echo "</p>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hobby'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                </div>

                <div class=\"friends\">
                    <a href=\"/users\">Users</a>
                    <a href=\"/friends/{id}\">Friends</a>
                </div>
            </div>



        </div>

        <div class=\"users_by_hobby\">

            ";
            // line 53
            if ((isset($context["usersByHobby"]) || array_key_exists("usersByHobby", $context) ? $context["usersByHobby"] : (function () { throw new RuntimeError('Variable "usersByHobby" does not exist.', 53, $this->source); })())) {
                // line 54
                echo "            ";
                if (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 54, $this->source); })()) == (isset($context["currentId"]) || array_key_exists("currentId", $context) ? $context["currentId"] : (function () { throw new RuntimeError('Variable "currentId" does not exist.', 54, $this->source); })()))) {
                    // line 55
                    echo "            <p>Are you intersted in ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["findByHobby"]) || array_key_exists("findByHobby", $context) ? $context["findByHobby"] : (function () { throw new RuntimeError('Variable "findByHobby" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55), "html", null, true);
                    echo "? These are other users who are interested in ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["findByHobby"]) || array_key_exists("findByHobby", $context) ? $context["findByHobby"] : (function () { throw new RuntimeError('Variable "findByHobby" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55), "html", null, true);
                    echo ":</p>
                ";
                } else {
                    // line 57
                    echo "                <p>";
                    echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 57, $this->source); })()), "html", null, true);
                    echo " is interested in ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["findByHobby"]) || array_key_exists("findByHobby", $context) ? $context["findByHobby"] : (function () { throw new RuntimeError('Variable "findByHobby" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "html", null, true);
                    echo ". These are other users who are interested in ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["findByHobby"]) || array_key_exists("findByHobby", $context) ? $context["findByHobby"] : (function () { throw new RuntimeError('Variable "findByHobby" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "html", null, true);
                    echo ":</p>

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
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 63), "html", null, true);
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
        return array (  235 => 74,  230 => 71,  226 => 69,  222 => 67,  213 => 64,  207 => 63,  204 => 62,  200 => 61,  197 => 60,  186 => 57,  178 => 55,  175 => 54,  173 => 53,  157 => 39,  147 => 36,  143 => 35,  135 => 30,  129 => 27,  126 => 26,  124 => 25,  118 => 22,  107 => 14,  100 => 9,  90 => 8,  78 => 5,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
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

                {% if (isShowCredentials  == true) or (id == currentId) %}
                <div class=\"email\">
                    <p><i class=\"bi bi-envelope\"></i> {{ email}}</p>
                </div>
                <div class=\"country\">
                    <p><i class=\"bi bi-globe\"></i> {{ country.name }}</p>
                </div>


                <div class=\"hobbies\">
                    {% for hobby in hobbies %}
                    <p><i class=\"bi bi-check2\"></i> {{ hobby.name }}</p>

                    {% endfor %}
                </div>

                <div class=\"friends\">
                    <a href=\"/users\">Users</a>
                    <a href=\"/friends/{id}\">Friends</a>
                </div>
            </div>



        </div>

        <div class=\"users_by_hobby\">

            {% if usersByHobby %}
            {% if id == currentId %}
            <p>Are you intersted in {{ findByHobby.name }}? These are other users who are interested in {{ findByHobby.name }}:</p>
                {% else %}
                <p>{{ username }} is interested in {{ findByHobby.name }}. These are other users who are interested in {{ findByHobby.name }}:</p>

            {% endif %}
                <div class=\"users\">
            {% for user in usersByHobby %}
                <div class=\"user\">
                    <a href=\"/page/{{ user.id }}\" ><img  src=\"{{ user.avatar }}\"></a>
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

", "page/index.html.twig", "/var/www/sunflower/templates/page/index.html.twig");
    }
}
