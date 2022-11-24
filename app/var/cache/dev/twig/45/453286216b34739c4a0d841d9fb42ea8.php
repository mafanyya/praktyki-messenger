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

/* test.html.twig */
class __TwigTemplate_58c581b587986951cb8c7ed84f84d5f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 41
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    <link href=\"";
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
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . (isset($context["currentAvatar"]) || array_key_exists("currentAvatar", $context) ? $context["currentAvatar"] : (function () { throw new RuntimeError('Variable "currentAvatar" does not exist.', 15, $this->source); })()))), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"username\">
                        <a class = \"panel_link\" href=\"/page/";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["currentId"]) || array_key_exists("currentId", $context) ? $context["currentId"] : (function () { throw new RuntimeError('Variable "currentId" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["currentUsername"]) || array_key_exists("currentUsername", $context) ? $context["currentUsername"] : (function () { throw new RuntimeError('Variable "currentUsername" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</a>
                    </div>
                </div>
                <div class=\"login_panel\">
                    ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 23
            echo "                        <div class=\"panel_block\">

                            <a class = \"panel_link\" href=\"/logout\"><i class=\"bi bi-door-open-fill\"></i></a>
                        </div>
                    ";
        } else {
            // line 28
            echo "                        <div class=\"panel_block\">

                            <a class = \"panel_link\" href=\"/register\">Sign Up</a>
                        </div>
                        <div class=\"panel_block\">
                            <a class = \"panel_link\" href=\"/login\">Sign In</a>
                        </div>
                    ";
        }
        // line 36
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 36,  108 => 28,  101 => 23,  99 => 22,  90 => 18,  84 => 15,  67 => 2,  57 => 1,  46 => 41,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
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

", "test.html.twig", "/home/dev/Desktop/sunflower/app/templates/test.html.twig");
    }
}
