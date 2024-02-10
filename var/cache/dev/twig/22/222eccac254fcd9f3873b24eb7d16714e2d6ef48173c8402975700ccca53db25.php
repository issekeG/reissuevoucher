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

/* reissuevoucher/registration/register.html.twig */
class __TwigTemplate_af5a71418eb49b5be4012da47dc3023ef2dcaea37f09296aa80a89bf76e24702 extends Template
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
        return "reissuevoucher/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reissuevoucher/registration/register.html.twig"));

        $this->parent = $this->loadTemplate("reissuevoucher/base.html.twig", "reissuevoucher/registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 10
        echo "    <main>
        <div class=\"container\">

            <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-md-8 d-flex flex-column align-items-center justify-content-center\">

                            <div class=\"card mb-3\">

                                <div class=\"card-body\">

                                    <div class=\"pt-4 pb-2\">
                                        <h5 class=\"card-title text-center pb-0 fs-4\">Add User</h5>
                                        <p class=\"text-center small\">Enter a personal details</p>
                                    </div>

                                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), 'errors');
        echo "

                                    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
                                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "firstname", [], "any", false, false, false, 30), 'row');
        echo "
                                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "lastname", [], "any", false, false, false, 31), 'row');
        echo "
                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'row');
        echo "
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "plainPassword", [], "any", false, false, false, 33), 'row', ["label" => "Password"]);
        // line 35
        echo "
                                    <label class=\"form-label mt-3 mb-2\">Roles : </label>
                                    <div class=\"row justify-content-center align-content-center mb-4 mt-0\">
                                        <div class=\"form-group\">
                                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "roles", [], "any", false, false, false, 39), 0, [], "any", false, false, false, 39), 'row', ["label_attr" => ["class" => "form-check-label custom-class-3 pe-3"], "attr" => ["class" => "form-check-input"]]);
        echo "

                                        </div>
                                        <div class=\"form-group\">
                                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "roles", [], "any", false, false, false, 43), 1, [], "any", false, false, false, 43), 'row', ["label_attr" => ["class" => "form-check-label custom-class-3 pe-3"], "attr" => ["class" => "form-check-input"]]);
        echo "

                                        </div>
                                    </div>

                                    <div class=\"col-12\">
                                        <button class=\"btn btn-primary w-100\" type=\"submit\">Add User</button>
                                    </div>
                                    <div class=\"col-12\">
                                        <p class=\"small mb-0\">Already have an account ? <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voucher_app_login");
        echo "\">Log in</a></p>
                                    </div>


                                    ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), 'form_end');
        echo "



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
        return "reissuevoucher/registration/register.html.twig";
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
        return array (  173 => 56,  166 => 52,  154 => 43,  147 => 39,  141 => 35,  139 => 33,  135 => 32,  131 => 31,  127 => 30,  123 => 29,  118 => 27,  99 => 10,  92 => 9,  80 => 7,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'reissuevoucher/base.html.twig' %}

{% block title %}Register{% endblock %}

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
                        <div class=\"col-md-8 d-flex flex-column align-items-center justify-content-center\">

                            <div class=\"card mb-3\">

                                <div class=\"card-body\">

                                    <div class=\"pt-4 pb-2\">
                                        <h5 class=\"card-title text-center pb-0 fs-4\">Add User</h5>
                                        <p class=\"text-center small\">Enter a personal details</p>
                                    </div>

                                    {{ form_errors(registrationForm) }}

                                    {{ form_start(registrationForm) }}
                                    {{ form_row(registrationForm.firstname) }}
                                    {{ form_row(registrationForm.lastname) }}
                                    {{ form_row(registrationForm.email) }}
                                    {{ form_row(registrationForm.plainPassword, {
                                        label: 'Password'
                                    }) }}
                                    <label class=\"form-label mt-3 mb-2\">Roles : </label>
                                    <div class=\"row justify-content-center align-content-center mb-4 mt-0\">
                                        <div class=\"form-group\">
                                            {{ form_row(registrationForm.roles.0, {'label_attr': {'class': 'form-check-label custom-class-3 pe-3'}, 'attr': {'class': 'form-check-input'}}) }}

                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_row(registrationForm.roles.1, {'label_attr': {'class': 'form-check-label custom-class-3 pe-3'}, 'attr': {'class': 'form-check-input'}}) }}

                                        </div>
                                    </div>

                                    <div class=\"col-12\">
                                        <button class=\"btn btn-primary w-100\" type=\"submit\">Add User</button>
                                    </div>
                                    <div class=\"col-12\">
                                        <p class=\"small mb-0\">Already have an account ? <a href=\"{{ path(\"voucher_app_login\") }}\">Log in</a></p>
                                    </div>


                                    {{ form_end(registrationForm) }}



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>
{% endblock %}
", "reissuevoucher/registration/register.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\reissuevoucher\\templates\\reissuevoucher\\registration\\register.html.twig");
    }
}
