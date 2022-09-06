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
class __TwigTemplate_1fe9e6d01b7b51ba1a34a00f59087e8cf387da9af9a90ad77fbe202431ed3779 extends Template
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
        $this->parent = $this->loadTemplate("root/index.html.twig", "page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <body>
    <div class=\"container\">
        <div class=\"main_inf\">
            <div class=\"avatar_inf\">
                <div class=\"avatar_page\">
                    <img class = \"avatar_content_page\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["avatar"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "</p>
                </div>
                <div class=\"email\">
                    <p><i class=\"bi bi-envelope\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "</p>
                </div>
                <div class=\"country\">
                    <p><i class=\"bi bi-globe\"></i> ";
        // line 28
        echo twig_escape_filter($this->env, ($context["country"] ?? null), "html", null, true);
        echo "</p>
                </div>
                <div class=\"country\">
                    <p><i class=\"bi bi-globe\"></i> ";
        // line 31
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "</p>
                </div>
                <div class=\"country\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hobbies"] ?? null));
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
        return array (  129 => 38,  121 => 36,  116 => 35,  112 => 34,  106 => 31,  100 => 28,  94 => 25,  88 => 22,  77 => 14,  70 => 9,  66 => 8,  60 => 5,  56 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page/index.html.twig", "/var/www/sunflower/templates/page/index.html.twig");
    }
}
