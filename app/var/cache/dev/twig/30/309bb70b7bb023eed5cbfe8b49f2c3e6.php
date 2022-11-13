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

/* page/userForm.html.twig */
class __TwigTemplate_7d2bdd14fc0effa9ab9e1f0d876177c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/userForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/userForm.html.twig"));

        $this->parent = $this->loadTemplate("root/index.html.twig", "page/userForm.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/root.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/userForm.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    ";
        // line 5
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <body>
    <div class=\"container\">
        <div class=\"container_inner\">
            <p class = \"page_header\">Account settings</p>

            <div class=\"form\">
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                <div class=\"form_row\">
                    <p class = \"header_f\">Username</p>
                    <div class=\"current\">
                        <p class = \"current\">Your username is </p>
                        <p class = \"current_f\"> ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"change\">
                        <p>Change</p>
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 24, $this->source); })()), "username", [], "any", false, false, false, 24), 'row', ["label" => false]);
        // line 26
        echo "
                    </div>
                </div>
                <div class=\"form_row\">
                    <p class = \"header_f\">Email</p>
                    <div class=\"current\">
                        <p class = \"current\">Your email is </p>
                        <p class = \"current_f\"> ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "</p>

                    </div>
                    <div class=\"change\">
                        <p>Change</p>
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), 'row', ["label" => false]);
        // line 40
        echo "
                    </div>
                </div>
                <div class=\"form_row\">
                    <p class = \"header_f\">Avatar</p>
                    <div class=\"row\">
                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\">
                    <div class=\"change\">
                        <p>Change</p>
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 49, $this->source); })()), "avatar", [], "any", false, false, false, 49), 'row', ["label" => false]);
        // line 51
        echo "
                    </div>
                    </div>
                </div>
                <div class=\"form_row\">
                    <p class = \"header_f\">Birthdate</p>
                    <div class=\"current\">
                        <p class = \"current\">Your birthdate is </p>
                        <p class = \"current_f\"> ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["birthdate"]) || array_key_exists("birthdate", $context) ? $context["birthdate"] : (function () { throw new RuntimeError('Variable "birthdate" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"change\">
                        <p>Change</p>
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 63, $this->source); })()), "birthdate", [], "any", false, false, false, 63), 'row', ["label" => false]);
        // line 65
        echo "
                    </div>
                </div>
                <div class=\"form_row\">
                    <div class=\"row\">

                    <p class = \"current\">Is other users can see you credentials?</p>
                    <div class=\"change\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 73, $this->source); })()), "isShowCredentials", [], "any", false, false, false, 73), 'row', ["label" => false]);
        // line 75
        echo "
                    </div>
                    </div>
                </div>

               <button type = \"submit\" class = \"submit_btn\">Submit</button>

                ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 82, $this->source); })()), 'form_end');
        echo "
            </div>

            <div class=\"change_credentials\">
                <a href=\"/page/hobbies/";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "\">Change hobbies</a>
                <a href=\"/page/country/";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "\">Change country</a>
            </div>


        </div>



    </div>
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "page/userForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 87,  207 => 86,  200 => 82,  191 => 75,  189 => 73,  179 => 65,  177 => 63,  170 => 59,  160 => 51,  158 => 49,  152 => 46,  144 => 40,  142 => 38,  134 => 33,  125 => 26,  123 => 24,  116 => 20,  108 => 15,  100 => 9,  90 => 8,  78 => 5,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'root/index.html.twig' %}
{% block header %}
    <link href=\"{{ asset('css/root.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/userForm.css') }}\" rel=\"stylesheet\"/>
    {{ parent() }}
{% endblock %}

{% block body %}
    <body>
    <div class=\"container\">
        <div class=\"container_inner\">
            <p class = \"page_header\">Account settings</p>

            <div class=\"form\">
                {{ form_start(user_form)}}
                <div class=\"form_row\">
                    <p class = \"header_f\">Username</p>
                    <div class=\"current\">
                        <p class = \"current\">Your username is </p>
                        <p class = \"current_f\"> {{ username }}</p>
                    </div>
                    <div class=\"change\">
                        <p>Change</p>
                        {{ form_row(user_form.username, {
                            label: false
                        }) }}
                    </div>
                </div>
                <div class=\"form_row\">
                    <p class = \"header_f\">Email</p>
                    <div class=\"current\">
                        <p class = \"current\">Your email is </p>
                        <p class = \"current_f\"> {{ email }}</p>

                    </div>
                    <div class=\"change\">
                        <p>Change</p>
                        {{ form_row(user_form.email, {
                            label: false
                        }) }}
                    </div>
                </div>
                <div class=\"form_row\">
                    <p class = \"header_f\">Avatar</p>
                    <div class=\"row\">
                    <img src=\"{{ avatar }}\">
                    <div class=\"change\">
                        <p>Change</p>
                        {{ form_row(user_form.avatar, {
                            label: false
                        }) }}
                    </div>
                    </div>
                </div>
                <div class=\"form_row\">
                    <p class = \"header_f\">Birthdate</p>
                    <div class=\"current\">
                        <p class = \"current\">Your birthdate is </p>
                        <p class = \"current_f\"> {{ birthdate }}</p>
                    </div>
                    <div class=\"change\">
                        <p>Change</p>
                        {{ form_row(user_form.birthdate, {
                            label: false
                        }) }}
                    </div>
                </div>
                <div class=\"form_row\">
                    <div class=\"row\">

                    <p class = \"current\">Is other users can see you credentials?</p>
                    <div class=\"change\">
                        {{ form_row(user_form.isShowCredentials, {
                            label: false
                        }) }}
                    </div>
                    </div>
                </div>

               <button type = \"submit\" class = \"submit_btn\">Submit</button>

                {{ form_end(user_form) }}
            </div>

            <div class=\"change_credentials\">
                <a href=\"/page/hobbies/{{ id }}\">Change hobbies</a>
                <a href=\"/page/country/{{ id }}\">Change country</a>
            </div>


        </div>



    </div>
    </body>
{% endblock %}", "page/userForm.html.twig", "/home/dev/Desktop/sunflower/app/templates/page/userForm.html.twig");
    }
}
