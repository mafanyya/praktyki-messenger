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

/* root/feed.html.twig */
class __TwigTemplate_2b9e46ac1e44456ae7bb19ac356d165de1c0929fc03ee65ba0fda5840787e054 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'navbar' => [$this, 'block_navbar'],
            'footer' => [$this, 'block_footer'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root/feed.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root/feed.html.twig"));

        $this->parent = $this->loadTemplate("/base.html.twig", "root/feed.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <body>
    <div class=\"container\">
        ";
        // line 14
        $this->displayBlock('navbar', $context, $blocks);
        // line 83
        echo "    </div>
    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 15
        echo "            <div class=\"nav_bar\">
                <a class = \"nav_links\" href=\"/page/";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["currentId"]) || array_key_exists("currentId", $context) ? $context["currentId"] : (function () { throw new RuntimeError('Variable "currentId" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">
                    <div class=\"nav_link\">
                        <p class = \"icon\"><i class=\"bi bi-person-circle\"></i></p>
                        <p>My page</p>
                    </div>
                </a>
                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("root");
        echo "\">
                    <div class=\"nav_link\">
                        <p class = \"icon\"><i class=\"bi bi-receipt\"></i></p>
                        <p>News</p>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"nav_link\">
                        <p class = \"icon\"><i class=\"bi bi-chat\"></i></p>
                        <p>Messenger</p>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"nav_link\">
                        <p class = \"icon\"><i class=\"bi bi-people\"></i></p>
                        <p>Friends</p>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"nav_link\">
                        <p class = \"icon\"><i class=\"bi bi-dice-5\"></i></p>
                        <p>Communities</p>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"nav_link\">
                        <p class = \"icon\"><i class=\"bi bi-gear\"></i></p>
                        <p>Settings</p>
                    </div>
                </a>
            </div>
            <div class=\"news_content\">
                <div id = \"make_post_btn\" class=\"make_post_btn\">
                    <div class=\"avatar_min\">
                        <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . (isset($context["currentAvatar"]) || array_key_exists("currentAvatar", $context) ? $context["currentAvatar"] : (function () { throw new RuntimeError('Variable "currentAvatar" does not exist.', 56, $this->source); })()))), "html", null, true);
        echo "\" >
                    </div>
                    <button id = \"open_make_post\" class = \"text\">Anything new?</button>
                    <div class=\"icons\">
                        <button class = \"icon\"><i class=\"bi bi-camera\"></i></button>
                        <button class = \"icon\"><i class=\"bi bi-play-circle\"></i></button>
                    </div>
                </div>

                <div id = \"make_post\" class=\"make_post\" >
                    <div class=\"row1\">
                        <div class=\"avatar_min\">
                            <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . (isset($context["currentAvatar"]) || array_key_exists("currentAvatar", $context) ? $context["currentAvatar"] : (function () { throw new RuntimeError('Variable "currentAvatar" does not exist.', 68, $this->source); })()))), "html", null, true);
        echo "\" >
                        </div>
                        <textarea placeholder = \"Anything new?\"></textarea>

                    </div>
                    <div class=\"row2\">
                        <div class=\"icons\">
                            <button class = \"icon\"><i class=\"bi bi-camera\"></i></button>
                            <button class = \"icon\"><i class=\"bi bi-play-circle\"></i></button>
                        </div>
                        <button>Publish</button>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 89
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 93
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 94
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("feed");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 99
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("feed");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "root/feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 99,  301 => 98,  291 => 97,  279 => 94,  274 => 93,  264 => 92,  251 => 89,  241 => 88,  216 => 68,  201 => 56,  164 => 22,  155 => 16,  152 => 15,  142 => 14,  129 => 83,  127 => 14,  120 => 11,  110 => 10,  97 => 7,  87 => 6,  74 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/base.html.twig' %}
{% block head %}
    {{ parent() }}
{% endblock %}

{% block header %}
    {{ parent() }}
{% endblock %}

{% block body %}
    {{ parent() }}
    <body>
    <div class=\"container\">
        {% block navbar %}
            <div class=\"nav_bar\">
                <a class = \"nav_links\" href=\"/page/{{ currentId }}\">
                    <div class=\"nav_link\">
                        <p class = \"icon\"><i class=\"bi bi-person-circle\"></i></p>
                        <p>My page</p>
                    </div>
                </a>
                <a href=\"{{ path('root') }}\">
                    <div class=\"nav_link\">
                        <p class = \"icon\"><i class=\"bi bi-receipt\"></i></p>
                        <p>News</p>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"nav_link\">
                        <p class = \"icon\"><i class=\"bi bi-chat\"></i></p>
                        <p>Messenger</p>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"nav_link\">
                        <p class = \"icon\"><i class=\"bi bi-people\"></i></p>
                        <p>Friends</p>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"nav_link\">
                        <p class = \"icon\"><i class=\"bi bi-dice-5\"></i></p>
                        <p>Communities</p>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"nav_link\">
                        <p class = \"icon\"><i class=\"bi bi-gear\"></i></p>
                        <p>Settings</p>
                    </div>
                </a>
            </div>
            <div class=\"news_content\">
                <div id = \"make_post_btn\" class=\"make_post_btn\">
                    <div class=\"avatar_min\">
                        <img src=\"{{ asset('uploads/avatars/' ~  currentAvatar ) }}\" >
                    </div>
                    <button id = \"open_make_post\" class = \"text\">Anything new?</button>
                    <div class=\"icons\">
                        <button class = \"icon\"><i class=\"bi bi-camera\"></i></button>
                        <button class = \"icon\"><i class=\"bi bi-play-circle\"></i></button>
                    </div>
                </div>

                <div id = \"make_post\" class=\"make_post\" >
                    <div class=\"row1\">
                        <div class=\"avatar_min\">
                            <img src=\"{{ asset('uploads/avatars/' ~  currentAvatar ) }}\" >
                        </div>
                        <textarea placeholder = \"Anything new?\"></textarea>

                    </div>
                    <div class=\"row2\">
                        <div class=\"icons\">
                            <button class = \"icon\"><i class=\"bi bi-camera\"></i></button>
                            <button class = \"icon\"><i class=\"bi bi-play-circle\"></i></button>
                        </div>
                        <button>Publish</button>
                    </div>
                </div>
            </div>
        {% endblock %}
    </div>
    </body>

{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('feed') }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {{ encore_entry_script_tags('feed') }}
{% endblock %}
", "root/feed.html.twig", "/var/www/sunflower/templates/root/feed.html.twig");
    }
}
