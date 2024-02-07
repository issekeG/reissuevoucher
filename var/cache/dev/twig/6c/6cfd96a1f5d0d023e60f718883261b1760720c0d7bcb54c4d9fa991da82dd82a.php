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

/* voucher/edit.html.twig */
class __TwigTemplate_5fe818b803c292c3208ef6553ddecdd9519e74054c7cd475ffa9acc36b3294d3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voucher/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "voucher/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit ReissueRequest";
        
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
        echo "

    ";
        // line 12
        echo twig_include($this->env, $context, "voucher/_edit_form.html.twig", ["button_label" => "Update / Save"]);
        echo "
    <section class=\"justify-content-center\" >
        <div class=\"container\" style=\"margin-top: 0\">
            <div class=\"row justify-content-center\" style=\"margin-top: 0\">
                <div class=\"col-md-10  flex-column align-items-center justify-content-center\" style=\"margin-top: 0\">
                    <div class=\"card m-0\" style=\"margin-top: 0\">
                        <div class=\"row justify-content-center align-content-center mb-4 mt-0\">


                                <div class=\"form-group col-md-2\">
                                    ";
        // line 22
        if (twig_matches("/^[0-9]+\$/", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22))) {
            // line 23
            echo "                                        <a class=\"btn btn-primary w-100\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_status", ["status" => "Approved", "id" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 23), "value", [], "any", false, true, false, 23), "id", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 23), "value", [], "any", false, true, false, 23), "id", [], "any", false, false, false, 23)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 23), "value", [], "any", false, true, false, 23), "id", [], "any", false, false, false, 23)) : ("0"))]), "html", null, true);
            echo "\">Approve</a>
                                    ";
        }
        // line 25
        echo "                                </div>


                            <div class=\"form-group col-md-2\">
                                ";
        // line 29
        if (twig_matches("/^[0-9]+\$/", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "vars", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29))) {
            // line 30
            echo "                                    <a class=\"btn btn-danger w-100\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_status", ["status" => "Rejected", "id" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 30), "value", [], "any", false, true, false, 30), "id", [], "any", true, true, false, 30) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 30), "value", [], "any", false, true, false, 30), "id", [], "any", false, false, false, 30)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 30), "value", [], "any", false, true, false, 30), "id", [], "any", false, false, false, 30)) : ("0"))]), "html", null, true);
            echo "\">Reject</a>
                                ";
        }
        // line 32
        echo "
                            </div>

                            <div class=\"form-group col-md-2\">
                                ";
        // line 36
        if (twig_matches("/^[0-9]+\$/", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36))) {
            // line 37
            echo "                                    <a class=\"btn btn-info w-100\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_status", ["status" => "Sent out", "id" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 37), "value", [], "any", false, true, false, 37), "id", [], "any", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 37), "value", [], "any", false, true, false, 37), "id", [], "any", false, false, false, 37)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 37), "value", [], "any", false, true, false, 37), "id", [], "any", false, false, false, 37)) : ("0"))]), "html", null, true);
            echo "\">Sent out</a>
                                ";
        }
        // line 39
        echo "
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <a class=\"btn btn-primary mb-3 mx-5\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_index");
        echo "\">back to dashboard</a>

    ";
        // line 54
        echo twig_include($this->env, $context, "voucher/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "voucher/edit.html.twig";
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
        return array (  172 => 54,  167 => 52,  152 => 39,  146 => 37,  144 => 36,  138 => 32,  132 => 30,  130 => 29,  124 => 25,  118 => 23,  116 => 22,  103 => 12,  99 => 10,  92 => 9,  80 => 7,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit ReissueRequest{% endblock %}

{% block header %}
{% endblock %}
{% block sidebar %}
{% endblock %}
{% block main %}


    {{ include('voucher/_edit_form.html.twig', {'button_label': 'Update / Save'}) }}
    <section class=\"justify-content-center\" >
        <div class=\"container\" style=\"margin-top: 0\">
            <div class=\"row justify-content-center\" style=\"margin-top: 0\">
                <div class=\"col-md-10  flex-column align-items-center justify-content-center\" style=\"margin-top: 0\">
                    <div class=\"card m-0\" style=\"margin-top: 0\">
                        <div class=\"row justify-content-center align-content-center mb-4 mt-0\">


                                <div class=\"form-group col-md-2\">
                                    {% if form.vars.value.id matches '/^[0-9]+\$/' %}
                                        <a class=\"btn btn-primary w-100\" href=\"{{ path('update_status', {'status': 'Approved', 'id':form.vars.value.id ?? '0'}) }}\">Approve</a>
                                    {% endif %}
                                </div>


                            <div class=\"form-group col-md-2\">
                                {% if form.vars.value.id matches '/^[0-9]+\$/'%}
                                    <a class=\"btn btn-danger w-100\" href=\"{{ path('update_status',{'status': 'Rejected', 'id':form.vars.value.id ?? '0'}) }}\">Reject</a>
                                {% endif %}

                            </div>

                            <div class=\"form-group col-md-2\">
                                {% if form.vars.value.id matches '/^[0-9]+\$/'%}
                                    <a class=\"btn btn-info w-100\" href=\"{{ path('update_status',{'status': 'Sent out', 'id':form.vars.value.id ?? '0'}) }}\">Sent out</a>
                                {% endif %}

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <a class=\"btn btn-primary mb-3 mx-5\" href=\"{{ path('app_voucher_index') }}\">back to dashboard</a>

    {{ include('voucher/_delete_form.html.twig') }}
{% endblock %}
", "voucher/edit.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\reissuevoucher\\templates\\voucher\\edit.html.twig");
    }
}
