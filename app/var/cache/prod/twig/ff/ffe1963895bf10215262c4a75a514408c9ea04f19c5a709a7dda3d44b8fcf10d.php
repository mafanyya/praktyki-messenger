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
class __TwigTemplate_692442fd927fd48f8b31c7cb1edf14a7c3ce0ab526726557b5982ca79c032f82 extends Template
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
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "


";
    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</title>
    </head>
";
    }

    // line 22
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <div class=\"container\">
            <div class=\"header\">
                <div class=\"logo\">

                    <a class = \"logo_name\" href=\"/\"><i class=\"bi bi-flower1\"style = \"font-size: 1.2em\"></i> Sunflower</a>
                </div>
                <div class=\"panel\">
                    <div class=\"user_credentials\">
                        <div class=\"avatar\">
                            <img class = \"avatar_content\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["currentAvatar"] ?? null), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"username\">
                            <a class = \"panel_link\" href=\"/page/";
        // line 36
        echo twig_escape_filter($this->env, ($context["currentId"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["currentUsername"] ?? null), "html", null, true);
        echo "</a>
                        </div>
                    </div>
                <div class=\"login_panel\">
                    ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 41
            echo "                        <div class=\"panel_block\">

                           <a class = \"panel_link\" href=\"/logout\"><i class=\"bi bi-door-open-fill\"></i></a>
                        </div>
                    ";
        } else {
            // line 46
            echo "                        <div class=\"panel_block\">

                           <a class = \"panel_link\" href=\"/register\">Sign Up</a>
                        </div>
                        <div class=\"panel_block\">
                           <a class = \"panel_link\" href=\"/login\">Sign In</a>
                        </div>
                    ";
        }
        // line 54
        echo "
                </div>
                </div>
            </div>
        </div>
    ";
    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    <body>
    <div class=\"container\">
        <div class=\"main_content\">
            ";
        // line 64
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 65
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
            // line 75
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
        // line 84
        echo "
        </div>
    </div>

    </body>
";
    }

    public function getTemplateName()
    {
        return "root/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  183 => 84,  172 => 75,  160 => 65,  158 => 64,  153 => 61,  149 => 60,  140 => 54,  130 => 46,  123 => 41,  121 => 40,  112 => 36,  106 => 33,  92 => 23,  88 => 22,  81 => 18,  76 => 16,  60 => 2,  56 => 1,  49 => 90,  47 => 60,  45 => 22,  42 => 21,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "root/index.html.twig", "/var/www/sunflower/templates/root/index.html.twig");
    }
}
