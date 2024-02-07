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

/* security/login.html.twig */
class __TwigTemplate_9c22fcb8befe1a027f3d47979446fab7cd94de7371373a51e3e986c6a2e62e84 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'sidebar' => [$this, 'block_sidebar'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "    <main>
        <div class=\"container\">

            <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

                            <div class=\"card mb-3\">

                                <div class=\"card-body\">

                                    <div class=\"pt-4 pb-2 mb-3\">
                                        <h5 class=\"card-title text-center pb-0 fs-4\">Login to Your Account</h5>
                                    </div>

                                    <form method=\"post\">
                                        ";
        // line 28
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "                                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })()), "messageKey", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })()), "messageData", [], "any", false, false, false, 29), "security"), "html", null, true);
            echo "</div>
                                        ";
        }
        // line 31
        echo "
                                        ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "                                            <div class=\"mb-3\">
                                                You are logged in as ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "userIdentifier", [], "any", false, false, false, 34), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                            </div>
                                        ";
        }
        // line 37
        echo "
                                        <div class=\"col-12\">
                                            <label for=\"inputEmail\" class=\"form-label\">Email</label>
                                            <div class=\"input-group has-validation\">
                                                <span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
                                                <input type=\"email\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                                <div class=\"invalid-feedback\">Please enter your email.</div>
                                            </div>
                                        </div>

                                        <div class=\"col-12 my-3\">
                                            <label for=\"inputPassword\" class=\"form-label\">Password</label>
                                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                            <div class=\"invalid-feedback\">Please enter your password!</div>
                                        </div>

                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                                        <div class=\"col-12\">
                                            <button class=\"btn btn-lg btn-primary w-100\" type=\"submit\">
                                                Sign in
                                            </button>
                                        </div>

                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  163 => 53,  149 => 42,  142 => 37,  134 => 34,  131 => 33,  129 => 32,  126 => 31,  120 => 29,  118 => 28,  99 => 11,  92 => 10,  80 => 8,  68 => 6,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}


{% block header %}
{% endblock %}
{% block sidebar %}
{% endblock %}
{% block main %}
    <main>
        <div class=\"container\">

            <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

                            <div class=\"card mb-3\">

                                <div class=\"card-body\">

                                    <div class=\"pt-4 pb-2 mb-3\">
                                        <h5 class=\"card-title text-center pb-0 fs-4\">Login to Your Account</h5>
                                    </div>

                                    <form method=\"post\">
                                        {% if error %}
                                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                        {% endif %}

                                        {% if app.user %}
                                            <div class=\"mb-3\">
                                                You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                            </div>
                                        {% endif %}

                                        <div class=\"col-12\">
                                            <label for=\"inputEmail\" class=\"form-label\">Email</label>
                                            <div class=\"input-group has-validation\">
                                                <span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
                                                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                                <div class=\"invalid-feedback\">Please enter your email.</div>
                                            </div>
                                        </div>

                                        <div class=\"col-12 my-3\">
                                            <label for=\"inputPassword\" class=\"form-label\">Password</label>
                                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                            <div class=\"invalid-feedback\">Please enter your password!</div>
                                        </div>

                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                                        <div class=\"col-12\">
                                            <button class=\"btn btn-lg btn-primary w-100\" type=\"submit\">
                                                Sign in
                                            </button>
                                        </div>

                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>
{% endblock %}
", "security/login.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\reissuevoucher\\templates\\security\\login.html.twig");
    }
}
