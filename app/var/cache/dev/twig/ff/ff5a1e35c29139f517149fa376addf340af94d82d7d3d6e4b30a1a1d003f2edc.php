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
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 93
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
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css\"/>

        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/root.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

        <title>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</title>
    </head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 24
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <div class=\"container\">
            <div class=\"header\">
                <div class=\"logo\">

                    <a class = \"logo_name\" href=\"/\"><i class=\"bi bi-flower1\"style = \"font-size: 1.2em\"></i> Sunflower</a>
                </div>
                <a class=\"user_credentials\" href=\"/users\">users</a>
                <a class=\"user_credentials\" href=\"/admin\">admin panel</a>

                <div class=\"panel\">
                    <div class=\"user_credentials\">
                        <div class=\"avatar\">
                            <img class = \"avatar_content\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . (isset($context["currentAvatar"]) || array_key_exists("currentAvatar", $context) ? $context["currentAvatar"] : (function () { throw new RuntimeError('Variable "currentAvatar" does not exist.', 37, $this->source); })()))), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"username\">
                            <a class = \"panel_link\" href=\"/page/";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["currentId"]) || array_key_exists("currentId", $context) ? $context["currentId"] : (function () { throw new RuntimeError('Variable "currentId" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["currentUsername"]) || array_key_exists("currentUsername", $context) ? $context["currentUsername"] : (function () { throw new RuntimeError('Variable "currentUsername" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</a>
                        </div>
                    </div>
                <div class=\"login_panel\">
                    ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 45
            echo "                        <div class=\"panel_block\">

                           <a class = \"panel_link\" href=\"/logout\"><i class=\"bi bi-door-open-fill\"></i></a>
                        </div>
                    ";
        } else {
            // line 50
            echo "                        <div class=\"panel_block\">

                           <a class = \"panel_link\" href=\"/register\">Sign Up</a>
                        </div>
                        <div class=\"panel_block\">
                           <a class = \"panel_link\" href=\"/login\">Sign In</a>
                        </div>
                    ";
        }
        // line 58
        echo "                </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 64
        echo "    <body>
    <div class=\"container\">
        <div class=\"main_content\">
            ";
        // line 67
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 68
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
            // line 78
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
        // line 87
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
        return array (  228 => 87,  217 => 78,  205 => 68,  203 => 67,  198 => 64,  188 => 63,  174 => 58,  164 => 50,  157 => 45,  155 => 44,  146 => 40,  140 => 37,  123 => 24,  113 => 23,  100 => 19,  95 => 17,  78 => 2,  68 => 1,  55 => 93,  53 => 63,  51 => 23,  48 => 22,  46 => 1,);
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
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css\"/>

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
                <a class=\"user_credentials\" href=\"/admin\">admin panel</a>

                <div class=\"panel\">
                    <div class=\"user_credentials\">
                        <div class=\"avatar\">
                            <img class = \"avatar_content\" src=\"{{ asset('uploads/avatars/' ~  currentAvatar ) }}\">
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
