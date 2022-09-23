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
            <p class = \"header_f\">Add user</p>
            ";
        // line 12
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 12, $this->source); })()) == "addUser")) {
            // line 13
            echo "                ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addUserForm"]) || array_key_exists("addUserForm", $context) ? $context["addUserForm"] : (function () { throw new RuntimeError('Variable "addUserForm" does not exist.', 13, $this->source); })()), 'form_start');
            echo "
                <div class=\"form_row\">
                    <p>Username</p>
                    ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addUserForm"]) || array_key_exists("addUserForm", $context) ? $context["addUserForm"] : (function () { throw new RuntimeError('Variable "addUserForm" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16), 'row', ["label" => false]);
            // line 18
            echo "
                </div>
                <div class=\"form_row\">
                    <p>Password</p>
                    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["addUserForm"]) || array_key_exists("addUserForm", $context) ? $context["addUserForm"] : (function () { throw new RuntimeError('Variable "addUserForm" does not exist.', 22, $this->source); })()), "password", [], "any", false, false, false, 22), "first", [], "any", false, false, false, 22), 'row', ["label" => false]);
            // line 24
            echo "
                </div>
                <div class=\"form_row\">
                    <p>Repeat password</p>
                    ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["addUserForm"]) || array_key_exists("addUserForm", $context) ? $context["addUserForm"] : (function () { throw new RuntimeError('Variable "addUserForm" does not exist.', 28, $this->source); })()), "password", [], "any", false, false, false, 28), "second", [], "any", false, false, false, 28), 'row', ["label" => false]);
            // line 30
            echo "
                </div>
                <div class=\"form_row\">
                    <p>Email</p>
                    ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addUserForm"]) || array_key_exists("addUserForm", $context) ? $context["addUserForm"] : (function () { throw new RuntimeError('Variable "addUserForm" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'row', ["label" => false]);
            // line 36
            echo "
                </div>
                <div class=\"form_row\">
                    <p>Avatar</p>
                    ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addUserForm"]) || array_key_exists("addUserForm", $context) ? $context["addUserForm"] : (function () { throw new RuntimeError('Variable "addUserForm" does not exist.', 40, $this->source); })()), "avatar", [], "any", false, false, false, 40), 'row', ["label" => false]);
            // line 42
            echo "
                </div>
                <div class=\"form_row\">
                    <p>Birthdate</p>
                    ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addUserForm"]) || array_key_exists("addUserForm", $context) ? $context["addUserForm"] : (function () { throw new RuntimeError('Variable "addUserForm" does not exist.', 46, $this->source); })()), "birthdate", [], "any", false, false, false, 46), 'row', ["label" => false]);
            // line 48
            echo "
                </div>
                <div class=\"form_row\">
                    <p>Role</p>
                    ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addUserForm"]) || array_key_exists("addUserForm", $context) ? $context["addUserForm"] : (function () { throw new RuntimeError('Variable "addUserForm" does not exist.', 52, $this->source); })()), "roles", [], "any", false, false, false, 52), 'row', ["label" => false]);
            // line 54
            echo "
                </div>
                <button type =\"submit\">Add</button>
                ";
            // line 57
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addUserForm"]) || array_key_exists("addUserForm", $context) ? $context["addUserForm"] : (function () { throw new RuntimeError('Variable "addUserForm" does not exist.', 57, $this->source); })()), 'form_end');
            echo "
            ";
        }
        // line 59
        echo "            ";
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 59, $this->source); })()) == "removeUser")) {
            // line 60
            echo "                <div class=\"users\">
                    <div class=\"users_wrapper\">
                        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 62, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 63
                echo "                            <div class=\"user\">
                                <a href=\"/page/";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 64), "html", null, true);
                echo "\"><img class = \"user_img\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 64), "html", null, true);
                echo "\"></a>
                                <div class=\"panel\">
                                    <a href=\"/remove_user/";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 66), "html", null, true);
                echo "\"><i class=\"bi bi-dash-circle\"></i></a>
                                    <p>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 67), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                    </div>
                    <div class=\"return\">
                        <a  href=\"/admin\"><i class=\"bi bi-arrow-return-left\"></i></a>
                    </div>
                </div>
            ";
        }
        // line 77
        echo "            ";
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 77, $this->source); })()) == "addHobby")) {
            // line 78
            echo "                <div class=\"container_inner\">

                    ";
            // line 80
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addHobbyForm"]) || array_key_exists("addHobbyForm", $context) ? $context["addHobbyForm"] : (function () { throw new RuntimeError('Variable "addHobbyForm" does not exist.', 80, $this->source); })()), 'form_start');
            echo "
                    <p class = \"header_f\">Add hobby</p>
                    <div class=\"form_row\">
                        <p>Name</p>
                            ";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addHobbyForm"]) || array_key_exists("addHobbyForm", $context) ? $context["addHobbyForm"] : (function () { throw new RuntimeError('Variable "addHobbyForm" does not exist.', 84, $this->source); })()), "name", [], "any", false, false, false, 84), 'row', ["label" => false]);
            // line 86
            echo "
                    </div>
                    <div class=\"form_row\">
                            <p>Img</p>
                            ";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addHobbyForm"]) || array_key_exists("addHobbyForm", $context) ? $context["addHobbyForm"] : (function () { throw new RuntimeError('Variable "addHobbyForm" does not exist.', 90, $this->source); })()), "img", [], "any", false, false, false, 90), 'row', ["label" => false]);
            // line 92
            echo "
                    </div>
                    <button type =\"submit\">Add</button>
                    ";
            // line 95
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addHobbyForm"]) || array_key_exists("addHobbyForm", $context) ? $context["addHobbyForm"] : (function () { throw new RuntimeError('Variable "addHobbyForm" does not exist.', 95, $this->source); })()), 'form_end');
            echo "

                </div>
            ";
        }
        // line 99
        echo "            ";
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 99, $this->source); })()) == "removeHobby")) {
            // line 100
            echo "                <div class=\"container_inner\">
                    <p class = \"header_f\">Hobbies</p>
                    <div class=\"hobbies_wrapper\">
                        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hobbies"]) || array_key_exists("hobbies", $context) ? $context["hobbies"] : (function () { throw new RuntimeError('Variable "hobbies" does not exist.', 103, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["hobby"]) {
                // line 104
                echo "                            <div class=\"hobby\">
                                <p>";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hobby"], "name", [], "any", false, false, false, 105), "html", null, true);
                echo "</p>
                                <a href=\"/remove_hobby/";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hobby"], "id", [], "any", false, false, false, 106), "html", null, true);
                echo "\"><i class=\"bi bi-dash-circle\"></i></a>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hobby'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                    </div>
                </div>
            ";
        }
        // line 112
        echo "            ";
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 112, $this->source); })()) == "addCountry")) {
            // line 113
            echo "                <div class=\"container_inner\">
                    ";
            // line 114
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addCountryForm"]) || array_key_exists("addCountryForm", $context) ? $context["addCountryForm"] : (function () { throw new RuntimeError('Variable "addCountryForm" does not exist.', 114, $this->source); })()), 'form_start');
            echo "
                    <p class = \"header_f\">Add country</p>
                    <div class=\"form_row\">
                        <p>Name</p>
                        ";
            // line 118
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addCountryForm"]) || array_key_exists("addCountryForm", $context) ? $context["addCountryForm"] : (function () { throw new RuntimeError('Variable "addCountryForm" does not exist.', 118, $this->source); })()), "name", [], "any", false, false, false, 118), 'row', ["label" => false]);
            // line 120
            echo "
                    </div>

                    <button type =\"submit\">Add</button>
                    ";
            // line 124
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addCountryForm"]) || array_key_exists("addCountryForm", $context) ? $context["addCountryForm"] : (function () { throw new RuntimeError('Variable "addCountryForm" does not exist.', 124, $this->source); })()), 'form_end');
            echo "
                </div>
            ";
        }
        // line 127
        echo "            ";
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 127, $this->source); })()) == "removeCountry")) {
            // line 128
            echo "                <div class=\"container_inner\">
                    <p class = \"header_f\">Countries</p>
                    <div class=\"countries_wrapper\">
                        ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new RuntimeError('Variable "countries" does not exist.', 131, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 132
                echo "                            <div class=\"hobby\">
                                <p>";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 133), "html", null, true);
                echo "</p>
                                <a href=\"/remove_country/";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 134), "html", null, true);
                echo "\"><i class=\"bi bi-dash-circle\"></i></a>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                    </div>
                </div>
            ";
        }
        // line 140
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
        return array (  346 => 140,  341 => 137,  332 => 134,  328 => 133,  325 => 132,  321 => 131,  316 => 128,  313 => 127,  307 => 124,  301 => 120,  299 => 118,  292 => 114,  289 => 113,  286 => 112,  281 => 109,  272 => 106,  268 => 105,  265 => 104,  261 => 103,  256 => 100,  253 => 99,  246 => 95,  241 => 92,  239 => 90,  233 => 86,  231 => 84,  224 => 80,  220 => 78,  217 => 77,  209 => 71,  199 => 67,  195 => 66,  188 => 64,  185 => 63,  181 => 62,  177 => 60,  174 => 59,  169 => 57,  164 => 54,  162 => 52,  156 => 48,  154 => 46,  148 => 42,  146 => 40,  140 => 36,  138 => 34,  132 => 30,  130 => 28,  124 => 24,  122 => 22,  116 => 18,  114 => 16,  107 => 13,  105 => 12,  100 => 9,  90 => 8,  78 => 5,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
            <p class = \"header_f\">Add user</p>
            {% if name == 'addUser' %}
                {{ form_start(addUserForm) }}
                <div class=\"form_row\">
                    <p>Username</p>
                    {{ form_row(addUserForm.username, {
                        'label': false
                    }) }}
                </div>
                <div class=\"form_row\">
                    <p>Password</p>
                    {{ form_row(addUserForm.password.first, {
                        'label': false
                    }) }}
                </div>
                <div class=\"form_row\">
                    <p>Repeat password</p>
                    {{ form_row(addUserForm.password.second, {
                        'label': false
                    }) }}
                </div>
                <div class=\"form_row\">
                    <p>Email</p>
                    {{ form_row(addUserForm.email, {
                        'label': false
                    }) }}
                </div>
                <div class=\"form_row\">
                    <p>Avatar</p>
                    {{ form_row(addUserForm.avatar, {
                        'label': false
                    }) }}
                </div>
                <div class=\"form_row\">
                    <p>Birthdate</p>
                    {{ form_row(addUserForm.birthdate, {
                        'label': false
                    }) }}
                </div>
                <div class=\"form_row\">
                    <p>Role</p>
                    {{ form_row(addUserForm.roles, {
                    'label': false
                    }) }}
                </div>
                <button type =\"submit\">Add</button>
                {{ form_end(addUserForm) }}
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
                    <div class=\"return\">
                        <a  href=\"/admin\"><i class=\"bi bi-arrow-return-left\"></i></a>
                    </div>
                </div>
            {% endif %}
            {% if name == 'addHobby' %}
                <div class=\"container_inner\">

                    {{ form_start(addHobbyForm) }}
                    <p class = \"header_f\">Add hobby</p>
                    <div class=\"form_row\">
                        <p>Name</p>
                            {{ form_row(addHobbyForm.name,{
                                label:false
                            }) }}
                    </div>
                    <div class=\"form_row\">
                            <p>Img</p>
                            {{ form_row(addHobbyForm.img, {
                                label: false
                            }) }}
                    </div>
                    <button type =\"submit\">Add</button>
                    {{ form_end(addHobbyForm) }}

                </div>
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
                <div class=\"container_inner\">
                    {{ form_start(addCountryForm) }}
                    <p class = \"header_f\">Add country</p>
                    <div class=\"form_row\">
                        <p>Name</p>
                        {{ form_row(addCountryForm.name,{
                            label:false
                        }) }}
                    </div>

                    <button type =\"submit\">Add</button>
                    {{ form_end(addCountryForm) }}
                </div>
            {% endif %}
            {% if name == 'removeCountry' %}
                <div class=\"container_inner\">
                    <p class = \"header_f\">Countries</p>
                    <div class=\"countries_wrapper\">
                        {% for country in countries %}
                            <div class=\"hobby\">
                                <p>{{ country.name }}</p>
                                <a href=\"/remove_country/{{ country.id }}\"><i class=\"bi bi-dash-circle\"></i></a>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            {% endif %}



        </div>
    </body>
{% endblock %}", "admin/add_remove.html.twig", "/var/www/sunflower/templates/admin/add_remove.html.twig");
    }
}
