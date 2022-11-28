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

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <body>
    <div class=\"container\">
        <div class=\"container_inner\">
            <div class=\"homepage_content\">
                <div class=\"homepage_slogan\">
                    <p class=\"slogan_b\">Many SMALL things for your BIG</p>
                    <p class=\"slogan_s\">Make your own community from here.</p>
                </div>
                <div class=\"homepage_img\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/homepage_img.svg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"email_form\">
                    <input placeholder=\"Username\" id=\"email\" type=\"text\">
                    <button id = \"sign_up_home\"> Sign up</button>
                </div>
            </div>

        </div>
    </div>

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
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/login_img.svg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <button id = \"sign_up\">Sign up</button>

        </div>
        <div class=\"login_panel\">
            <p class=\"header\">Login to your account</p>
            <p class=\"header2\">Welcome to Sunflower</p>

            ";
        // line 57
        if (array_key_exists("error", $context)) {
            // line 58
            echo "                ";
            if ( !(null === (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 58, $this->source); })()))) {
                // line 59
                echo "                    <p class=\"login_error\" data-error=\"";
                echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 59, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 59, $this->source); })()), "messageKey", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 59, $this->source); })()), "messageData", [], "any", false, false, false, 59), "security"), "html", null, true);
                // line 61
                echo "</p>
                ";
            } else {
                // line 63
                echo "
                ";
            }
            // line 65
            echo "            ";
        }
        // line 66
        echo "

            <div class=\"login_form\">

                <form action=\"";
        // line 70
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





    <div id=\"register_modal\" class=\"register_modal\">
        <button id=\"close_register\" class=\"close\">
            &#x2715
        </button>

        ";
        // line 93
        if (array_key_exists("isValid", $context)) {
            // line 94
            echo "
        <div id = \"register_error\" data-isValid = \"";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 95, $this->source); })()), "html", null, true);
            echo " hidden\"></div>

        ";
        }
        // line 98
        echo "
        <div class=\"register_panel\">
            <p class=\"header\">Sign Up</p>



            <div  class=\"register_form\">

                <div class=\"form\">
                    ";
        // line 107
        if (array_key_exists("registrationForm", $context)) {
            // line 108
            echo "                    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 108, $this->source); })()), 'form_start');
            echo "

                    <div class=\"form_row\">
                        ";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 111, $this->source); })()), "username", [], "any", false, false, false, 111), 'widget');
            echo "
                    </div>

                    <div class=\"form_row\">
                        ";
            // line 115
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 115, $this->source); })()), "plainPassword", [], "any", false, false, false, 115), 'widget');
            echo "
                    </div>
                    <div  class=\"form_error\" >
                        ";
            // line 118
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 118, $this->source); })()), "plainPassword", [], "any", false, false, false, 118), 'errors');
            echo "
                    </div>

                    <div class=\"agree_terms\">
                                ";
            // line 122
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 122, $this->source); })()), "agreeTerms", [], "any", false, false, false, 122), 'widget');
            echo "
                            <p>Agree our terms</p>
                        </div>
                    <button type=\"submit\" class=\"btn\">Register</button>
                    ";
            // line 126
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 126, $this->source); })()), 'form_end');
            echo "
                    ";
        }
        // line 128
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
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/registration_img.svg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <p class = \"header4\">Already have an account?</p>
            <button id = \"sign_in\" >Sign In</button>

        </div>
    </div>






    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 155
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 158
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 159
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 160
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("homepage");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 163
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 164
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 165
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("homepage");
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
        return array (  390 => 165,  385 => 164,  375 => 163,  363 => 160,  358 => 159,  348 => 158,  335 => 155,  325 => 154,  299 => 137,  288 => 128,  283 => 126,  276 => 122,  269 => 118,  263 => 115,  256 => 111,  249 => 108,  247 => 107,  236 => 98,  230 => 95,  227 => 94,  225 => 93,  199 => 70,  193 => 66,  190 => 65,  186 => 63,  182 => 61,  177 => 59,  174 => 58,  172 => 57,  160 => 48,  133 => 24,  119 => 14,  109 => 13,  96 => 10,  86 => 9,  73 => 3,  63 => 2,  40 => 1,);
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
                    <p class=\"slogan_s\">Make your own community from here.</p>
                </div>
                <div class=\"homepage_img\">
                    <img src=\"{{ asset('build/images/homepage_img.svg') }}\" alt=\"\">
                </div>
                <div class=\"email_form\">
                    <input placeholder=\"Username\" id=\"email\" type=\"text\">
                    <button id = \"sign_up_home\"> Sign up</button>
                </div>
            </div>

        </div>
    </div>

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
                {% else %}

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





    <div id=\"register_modal\" class=\"register_modal\">
        <button id=\"close_register\" class=\"close\">
            &#x2715
        </button>

        {% if isValid is defined %}

        <div id = \"register_error\" data-isValid = \"{{ isValid }} hidden\"></div>

        {% endif %}

        <div class=\"register_panel\">
            <p class=\"header\">Sign Up</p>



            <div  class=\"register_form\">

                <div class=\"form\">
                    {% if registrationForm is defined %}
                    {{ form_start(registrationForm) }}

                    <div class=\"form_row\">
                        {{ form_widget(registrationForm.username)}}
                    </div>

                    <div class=\"form_row\">
                        {{ form_widget(registrationForm.plainPassword) }}
                    </div>
                    <div  class=\"form_error\" >
                        {{ form_errors(registrationForm.plainPassword) }}
                    </div>

                    <div class=\"agree_terms\">
                                {{ form_widget(registrationForm.agreeTerms) }}
                            <p>Agree our terms</p>
                        </div>
                    <button type=\"submit\" class=\"btn\">Register</button>
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






    </body>

{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('homepage') }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {{ encore_entry_script_tags('homepage') }}
{% endblock %}






", "root/index.html.twig", "/var/www/sunflower/templates/root/index.html.twig");
    }
}
