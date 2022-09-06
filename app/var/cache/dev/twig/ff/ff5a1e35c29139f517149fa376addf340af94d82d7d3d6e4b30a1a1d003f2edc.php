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

/* root/index.html.twig */
class __TwigTemplate_8eceec5d7d0808ac267c1b661bad29ec3c6096e293be98da8845c15c7aed06b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root/index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "    <!doctype html>
    <html lang=\"en\">
    <head>
        <meta name=\"viewport\"
              content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,
        900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,
        900&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css\">

        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/root.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

        <title>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</title>
    </head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <div class=\"container\">
            <div class=\"header\">
                <div class=\"logo\">

                    <a class = \"logo_name\" href=\"/\"><i class=\"bi bi-flower1\"style = \"font-size: 1.2em\"></i> Sunflower</a>
                </div>
                <a class=\"user_credentials\" href=\"/users\">users</a>

                <div class=\"panel\">
                    <div class=\"user_credentials\">
                        <div class=\"avatar\">
                            <img class = \"avatar_content\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["currentAvatar"]) || array_key_exists("currentAvatar", $context) ? $context["currentAvatar"] : (function () { throw new RuntimeError('Variable "currentAvatar" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"username\">
                            <a class = \"panel_link\" href=\"/page/";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["currentId"]) || array_key_exists("currentId", $context) ? $context["currentId"] : (function () { throw new RuntimeError('Variable "currentId" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["currentUsername"]) || array_key_exists("currentUsername", $context) ? $context["currentUsername"] : (function () { throw new RuntimeError('Variable "currentUsername" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</a>
                        </div>
                    </div>
                <div class=\"login_panel\">
                    ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 43
            echo "                        <div class=\"panel_block\">

                           <a class = \"panel_link\" href=\"/logout\"><i class=\"bi bi-door-open-fill\"></i></a>
                        </div>
                    ";
        } else {
            // line 48
            echo "                        <div class=\"panel_block\">

                           <a class = \"panel_link\" href=\"/register\">Sign Up</a>
                        </div>
                        <div class=\"panel_block\">
                           <a class = \"panel_link\" href=\"/login\">Sign In</a>
                        </div>
                    ";
        }
        // line 56
        echo "
                </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 63
        echo "    <body>
    <div class=\"container\">
        <div class=\"main_content\">
            ";
        // line 66
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 67
            echo "            <div class=\"main_img\">
            <img class=\"img_content\" src=\"https://i.pinimg.com/564x/ee/bd/11/eebd114c8e202c352318a1bca29646a8.jpg\">
            </div>
            <div class=\"main_slogan\">
            <div class=\"slogan_text\">
                <p class = \"slogan_text1\">Hello, how are you?</p>
                <a class = \"slogan_text2\" href = \"/register\">Join us</a>
            </div>
            </div>
                ";
        } else {
            // line 77
            echo "                    <div class=\"main_img\">
                        <img class=\"img_content\" src=\"https://i.pinimg.com/564x/ee/bd/11/eebd114c8e202c352318a1bca29646a8.jpg\">
                    </div>
                    <div class=\"main_slogan\">
                        <div class=\"slogan_text\">
                            <p class = \"slogan_text1\">Hello, how are you?</p>
                        </div>
                    </div>
            ";
        }
        // line 86
        echo "
        </div>
    </div>

    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "root/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  227 => 86,  216 => 77,  204 => 67,  202 => 66,  197 => 63,  187 => 62,  172 => 56,  162 => 48,  155 => 43,  153 => 42,  144 => 38,  138 => 35,  122 => 23,  112 => 22,  99 => 18,  94 => 16,  78 => 2,  68 => 1,  55 => 92,  53 => 62,  51 => 22,  48 => 21,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <!doctype html>
    <html lang=\"en\">
    <head>
        <meta name=\"viewport\"
              content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,
        900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,
        900&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css\">

        <link href=\"{{ asset('css/root.css') }}\" rel=\"stylesheet\"/>

        <title>{{ name }}</title>
    </head>
{% endblock %}

    {% block header %}
        <link href=\"{{ asset('css/homepage.css') }}\" rel=\"stylesheet\"/>
        <div class=\"container\">
            <div class=\"header\">
                <div class=\"logo\">

                    <a class = \"logo_name\" href=\"/\"><i class=\"bi bi-flower1\"style = \"font-size: 1.2em\"></i> Sunflower</a>
                </div>
                <a class=\"user_credentials\" href=\"/users\">users</a>

                <div class=\"panel\">
                    <div class=\"user_credentials\">
                        <div class=\"avatar\">
                            <img class = \"avatar_content\" src=\"{{ currentAvatar }}\">
                        </div>
                        <div class=\"username\">
                            <a class = \"panel_link\" href=\"/page/{{ currentId }}\">{{ currentUsername }}</a>
                        </div>
                    </div>
                <div class=\"login_panel\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                        <div class=\"panel_block\">

                           <a class = \"panel_link\" href=\"/logout\"><i class=\"bi bi-door-open-fill\"></i></a>
                        </div>
                    {% else %}
                        <div class=\"panel_block\">

                           <a class = \"panel_link\" href=\"/register\">Sign Up</a>
                        </div>
                        <div class=\"panel_block\">
                           <a class = \"panel_link\" href=\"/login\">Sign In</a>
                        </div>
                    {% endif %}

                </div>
                </div>
            </div>
        </div>
    {% endblock %}
{% block body %}
    <body>
    <div class=\"container\">
        <div class=\"main_content\">
            {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
            <div class=\"main_img\">
            <img class=\"img_content\" src=\"https://i.pinimg.com/564x/ee/bd/11/eebd114c8e202c352318a1bca29646a8.jpg\">
            </div>
            <div class=\"main_slogan\">
            <div class=\"slogan_text\">
                <p class = \"slogan_text1\">Hello, how are you?</p>
                <a class = \"slogan_text2\" href = \"/register\">Join us</a>
            </div>
            </div>
                {% else %}
                    <div class=\"main_img\">
                        <img class=\"img_content\" src=\"https://i.pinimg.com/564x/ee/bd/11/eebd114c8e202c352318a1bca29646a8.jpg\">
                    </div>
                    <div class=\"main_slogan\">
                        <div class=\"slogan_text\">
                            <p class = \"slogan_text1\">Hello, how are you?</p>
                        </div>
                    </div>
            {% endif %}

        </div>
    </div>

    </body>
{% endblock %}



", "root/index.html.twig", "/var/www/sunflower/templates/root/index.html.twig");
    }
}
