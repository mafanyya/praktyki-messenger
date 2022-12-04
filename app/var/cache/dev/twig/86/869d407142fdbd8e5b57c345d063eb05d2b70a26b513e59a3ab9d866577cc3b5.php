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
class __TwigTemplate_cdbc1fb9f8416d5816ec1f289ed852fb46b945463f0ca0d078fda4bcbb5e7eda extends Template
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
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root/index.html.twig"));

        $this->parent = $this->loadTemplate("/base.html.twig", "root/index.html.twig", 1);
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

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    ";
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
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <body>
    <div class=\"container\">
        <div class=\"container_inner\">

            <div class=\"homepage_content\">
                <div class=\"homepage_slogan\">
                    <p class=\"slogan_b\">Many SMALL things for your BIG</p>
                    <p class=\"slogan_s\">Make your own community from here. </p>

                </div>
                <div class=\"homepage_img\">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/homepage_img.svg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                ";
        // line 23
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 24
            echo "                <div class=\"email_form\">
                    <input placeholder=\"Username\" id=\"username_home\" name = \"username\" type=\"text\">
                    <button id = \"sign_up_home\" onclick=\"GetUsername()\">Sign up</button>
                    <script>
                        function GetUsername(){
                            var username = document.getElementById('username_home').value
                            document.getElementById('registration_form_username').value = username
                        }
                    </script>
                </div>
                ";
        }
        // line 35
        echo "            </div>
        </div>
    </div>
    ";
        // line 38
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 39
            echo "
    <div id=\"background_modal\" class=\"background_login\" hidden></div>


    <div id=\"login_modal\" class=\"login_modal\">
        <button id=\"close_login\" class=\"close\">
            &#x2715
        </button>
        <div class=\"new_panel\">
            <p class=\"header1\">New here?</p>
            <div class=\"header_block\">
                <p class=\"header\">Sign up and discover a great amount of new opportunities!</p>
            </div>
            <div class=\"login_img\">
                <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/login_img.svg"), "html", null, true);
            echo "\" alt=\"\">
            </div>
            <button id = \"sign_up\">Sign up</button>

        </div>
        <div class=\"login_panel\">
            <p class=\"header\">Login to your account</p>
            <p class=\"header2\">Welcome to Sunflower</p>


            ";
            // line 63
            if (array_key_exists("error", $context)) {
                // line 64
                echo "                ";
                if ( !(null === (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 64, $this->source); })()))) {
                    // line 65
                    echo "                    <p class=\"login_error\" data-error=\"";
                    echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 65, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 65, $this->source); })()), "messageKey", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 65, $this->source); })()), "messageData", [], "any", false, false, false, 65), "security"), "html", null, true);
                    // line 67
                    echo "</p>
                ";
                }
                // line 69
                echo "            ";
            }
            // line 70
            echo "

            <div class=\"login_form\">

                <form action=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" method=\"post\">
                    <div class=\"form_row\">
                        <input placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\"/>

                    </div>
                    <div class=\"form_row\">
                        <input placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\"/>

                    </div>
                    <p class=header3> Forgot password?</p>
                    <button  type=\"submit\">Sign in</button>
                </form>
            </div>
        </div>
    </div>

    ";
        }
        // line 91
        echo "    ";
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 97
            echo "    <div id=\"register_modal\" class=\"register_modal\">
        <button id=\"close_register\" class=\"close\">
            &#x2715
        </button>
        <div class=\"register_panel\">
            <p class=\"header\">Sign Up</p>
            <div  class=\"register_form\">

                <div class=\"form\">
                    ";
            // line 106
            if (array_key_exists("registrationForm", $context)) {
                // line 107
                echo "                    ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 107, $this->source); })()), 'form_start');
                echo "

                    <div  class=\"form_row\">
                        ";
                // line 110
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 110, $this->source); })()), "username", [], "any", false, false, false, 110), 'widget', ["attr" => ["id" => "username_reg"]]);
                echo "
";
                // line 112
                echo "
                    </div>

                    <div class=\"form_row\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 116, $this->source); })()), "plainPassword", [], "any", false, false, false, 116), 'widget');
                echo "
                    </div>
                    <div  class=\"form_error\" >

                       <p id = \"reg_form_error\"> ";
                // line 120
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 120, $this->source); })()), "plainPassword", [], "any", false, false, false, 120), 'errors');
                echo " </p>
                    </div>

                    <div class=\"agree_terms\">
                                ";
                // line 124
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 124, $this->source); })()), "agreeTerms", [], "any", false, false, false, 124), 'widget');
                echo "
                            <p>Agree our terms</p>
                        </div>
                    <button id = \"sign_up_submit_btn\" type=\"submit\" class=\"btn\">Register</button>
                    ";
                // line 128
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 128, $this->source); })()), 'form_end');
                echo "
                    ";
            }
            // line 130
            echo "                </div>
            </div>
        </div>
        <div class=\"new_panel_register\">
            <p class=\"header1\">Hi there!</p>
            <div class=\"header_block\">
                <p class=\"header\">This is a good time to make more friends.</p>
            </div>
            <div class=\"register_img\">
                <img src=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/registration_img.svg"), "html", null, true);
            echo "\" alt=\"\">
            </div>
            <p class = \"header4\">Already have an account?</p>
            <button id = \"sign_in\" >Sign In</button>

        </div>
    </div>

    ";
        }
        // line 148
        echo "    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 152
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 155
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 157
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("homepage");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 160
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 161
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("homepage");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "root/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 161,  387 => 160,  377 => 159,  365 => 157,  360 => 156,  350 => 155,  337 => 152,  327 => 151,  316 => 148,  304 => 139,  293 => 130,  288 => 128,  281 => 124,  274 => 120,  267 => 116,  261 => 112,  257 => 110,  250 => 107,  248 => 106,  237 => 97,  234 => 91,  214 => 74,  208 => 70,  205 => 69,  201 => 67,  196 => 65,  193 => 64,  191 => 63,  178 => 53,  162 => 39,  160 => 38,  155 => 35,  142 => 24,  140 => 23,  135 => 21,  119 => 9,  109 => 8,  96 => 6,  86 => 5,  73 => 3,  63 => 2,  40 => 1,);
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
        <div class=\"container_inner\">

            <div class=\"homepage_content\">
                <div class=\"homepage_slogan\">
                    <p class=\"slogan_b\">Many SMALL things for your BIG</p>
                    <p class=\"slogan_s\">Make your own community from here. </p>

                </div>
                <div class=\"homepage_img\">
                    <img src=\"{{ asset('build/images/homepage_img.svg') }}\" alt=\"\">
                </div>
                {% if not is_granted ('IS_AUTHENTICATED_FULLY') %}
                <div class=\"email_form\">
                    <input placeholder=\"Username\" id=\"username_home\" name = \"username\" type=\"text\">
                    <button id = \"sign_up_home\" onclick=\"GetUsername()\">Sign up</button>
                    <script>
                        function GetUsername(){
                            var username = document.getElementById('username_home').value
                            document.getElementById('registration_form_username').value = username
                        }
                    </script>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
    {% if not is_granted ('IS_AUTHENTICATED_FULLY') %}

    <div id=\"background_modal\" class=\"background_login\" hidden></div>


    <div id=\"login_modal\" class=\"login_modal\">
        <button id=\"close_login\" class=\"close\">
            &#x2715
        </button>
        <div class=\"new_panel\">
            <p class=\"header1\">New here?</p>
            <div class=\"header_block\">
                <p class=\"header\">Sign up and discover a great amount of new opportunities!</p>
            </div>
            <div class=\"login_img\">
                <img src=\"{{ asset('build/images/login_img.svg') }}\" alt=\"\">
            </div>
            <button id = \"sign_up\">Sign up</button>

        </div>
        <div class=\"login_panel\">
            <p class=\"header\">Login to your account</p>
            <p class=\"header2\">Welcome to Sunflower</p>


            {% if error is defined %}
                {% if error is not null %}
                    <p class=\"login_error\" data-error=\"{{ error }}\">{{ error.messageKey|trans(error
                        .messageData,
                            'security') }}</p>
                {% endif %}
            {% endif %}


            <div class=\"login_form\">

                <form action=\"{{ path('login') }}\" method=\"post\">
                    <div class=\"form_row\">
                        <input placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\"/>

                    </div>
                    <div class=\"form_row\">
                        <input placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\"/>

                    </div>
                    <p class=header3> Forgot password?</p>
                    <button  type=\"submit\">Sign in</button>
                </form>
            </div>
        </div>
    </div>

    {% endif%}
    {% if not is_granted ('IS_AUTHENTICATED_FULLY') %}
{#        {% if regErrors is defined %}#}
{#            {% if regErrors is not null %}#}
{#                <p class=\"reg_error\" data-reg-error=\"{{ regErrors }}\"></p>#}
{#            {% endif %}#}
{#        {% endif %}#}
    <div id=\"register_modal\" class=\"register_modal\">
        <button id=\"close_register\" class=\"close\">
            &#x2715
        </button>
        <div class=\"register_panel\">
            <p class=\"header\">Sign Up</p>
            <div  class=\"register_form\">

                <div class=\"form\">
                    {% if registrationForm is defined %}
                    {{ form_start(registrationForm) }}

                    <div  class=\"form_row\">
                        {{ form_widget(registrationForm.username, {'attr': {'id': 'username_reg'}})}}
{#                        {{ registrationForm.username.vars.value }}#}

                    </div>

                    <div class=\"form_row\">
                        {{ form_widget(registrationForm.plainPassword) }}
                    </div>
                    <div  class=\"form_error\" >

                       <p id = \"reg_form_error\"> {{ form_errors(registrationForm.plainPassword) }} </p>
                    </div>

                    <div class=\"agree_terms\">
                                {{ form_widget(registrationForm.agreeTerms) }}
                            <p>Agree our terms</p>
                        </div>
                    <button id = \"sign_up_submit_btn\" type=\"submit\" class=\"btn\">Register</button>
                    {{ form_end(registrationForm) }}
                    {% endif %}
                </div>
            </div>
        </div>
        <div class=\"new_panel_register\">
            <p class=\"header1\">Hi there!</p>
            <div class=\"header_block\">
                <p class=\"header\">This is a good time to make more friends.</p>
            </div>
            <div class=\"register_img\">
                <img src=\"{{ asset('build/images/registration_img.svg') }}\" alt=\"\">
            </div>
            <p class = \"header4\">Already have an account?</p>
            <button id = \"sign_in\" >Sign In</button>

        </div>
    </div>

    {% endif %}
    </body>
{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {{ encore_entry_script_tags('homepage') }}
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('homepage') }}
{% endblock %}








", "root/index.html.twig", "/var/www/sunflower/templates/root/index.html.twig");
    }
}
