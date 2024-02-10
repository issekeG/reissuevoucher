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

/* reissuevoucher/voucher/edit.html.twig */
class __TwigTemplate_9a876b5866ade41980cee90b905c5dd6337a38c582233eb7ab8162153d2f6631 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navName' => [$this, 'block_navName'],
            'togglesidebar' => [$this, 'block_togglesidebar'],
            'search' => [$this, 'block_search'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reissuevoucher/voucher/edit.html.twig"));

        $this->parent = $this->loadTemplate("reissuevoucher/base.html.twig", "reissuevoucher/voucher/edit.html.twig", 1);
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
    public function block_navName($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navName"));

        echo "Reissue Voucher Form";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_togglesidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "togglesidebar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "

    ";
        // line 18
        echo twig_include($this->env, $context, "reissuevoucher/voucher/_edit_form.html.twig", ["button_label" => "Update / Save"]);
        echo "
    <section class=\"justify-content-center\" >
        <div class=\"container\" style=\"margin-top: 0\">
            <div class=\"row justify-content-center\" style=\"margin-top: 0\">
                <div class=\"col-md-10  flex-column align-items-center justify-content-center\" style=\"margin-top: 0\">
                    <div class=\"card m-0\" style=\"margin-top: 0\">
                        <div class=\"row justify-content-center align-content-center mb-4 mt-0\">


                            ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "                                <div class=\"form-group col-md-2\">
                                    ";
            // line 29
            if (twig_matches("/^[0-9]+\$/", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "vars", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29))) {
                // line 30
                echo "                                        <a class=\"btn btn-primary w-100\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voucher_update_status", ["status" => "Approved", "id" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 30), "value", [], "any", false, true, false, 30), "id", [], "any", true, true, false, 30) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 30), "value", [], "any", false, true, false, 30), "id", [], "any", false, false, false, 30)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 30), "value", [], "any", false, true, false, 30), "id", [], "any", false, false, false, 30)) : ("0"))]), "html", null, true);
                echo "\">Approve</a>
                                    ";
            }
            // line 32
            echo "                                </div>
                            ";
        }
        // line 34
        echo "

                            <div class=\"form-group col-md-2\">
                                ";
        // line 37
        if (twig_matches("/^[0-9]+\$/", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37))) {
            // line 38
            echo "                                    <a class=\"btn btn-danger w-100\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voucher_update_status", ["status" => "Rejected", "id" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 38), "value", [], "any", false, true, false, 38), "id", [], "any", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 38), "value", [], "any", false, true, false, 38), "id", [], "any", false, false, false, 38)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 38), "value", [], "any", false, true, false, 38), "id", [], "any", false, false, false, 38)) : ("0"))]), "html", null, true);
            echo "\">Reject</a>
                                ";
        }
        // line 40
        echo "
                            </div>

                            <div class=\"form-group col-md-2\">
                                ";
        // line 44
        if (twig_matches("/^[0-9]+\$/", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44))) {
            // line 45
            echo "                                    <a class=\"btn btn-info w-100\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voucher_update_status", ["status" => "Sent out", "id" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 45), "value", [], "any", false, true, false, 45), "id", [], "any", true, true, false, 45) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 45), "value", [], "any", false, true, false, 45), "id", [], "any", false, false, false, 45)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 45), "value", [], "any", false, true, false, 45), "id", [], "any", false, false, false, 45)) : ("0"))]), "html", null, true);
            echo "\">Sent out</a>
                                ";
        }
        // line 47
        echo "
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <a class=\"btn btn-primary mb-3 mx-5\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_index");
        echo "\">back to dashboard</a>

    ";
        // line 62
        echo twig_include($this->env, $context, "reissuevoucher/voucher/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reissuevoucher/voucher/edit.html.twig";
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
        return array (  206 => 62,  201 => 60,  186 => 47,  180 => 45,  178 => 44,  172 => 40,  166 => 38,  164 => 37,  159 => 34,  155 => 32,  149 => 30,  147 => 29,  144 => 28,  142 => 27,  130 => 18,  126 => 16,  119 => 15,  107 => 13,  95 => 10,  83 => 7,  70 => 5,  57 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'reissuevoucher/base.html.twig' %}

{% block title %}Edit ReissueRequest{% endblock %}

{% block navName %}Reissue Voucher Form{% endblock %}

{% block togglesidebar %}
{% endblock %}

{% block search %}
{% endblock %}

{% block sidebar %}
{% endblock %}
{% block main %}


    {{ include('reissuevoucher/voucher/_edit_form.html.twig', {'button_label': 'Update / Save'}) }}
    <section class=\"justify-content-center\" >
        <div class=\"container\" style=\"margin-top: 0\">
            <div class=\"row justify-content-center\" style=\"margin-top: 0\">
                <div class=\"col-md-10  flex-column align-items-center justify-content-center\" style=\"margin-top: 0\">
                    <div class=\"card m-0\" style=\"margin-top: 0\">
                        <div class=\"row justify-content-center align-content-center mb-4 mt-0\">


                            {% if app.user %}
                                <div class=\"form-group col-md-2\">
                                    {% if form.vars.value.id matches '/^[0-9]+\$/' %}
                                        <a class=\"btn btn-primary w-100\" href=\"{{ path('voucher_update_status', {'status': 'Approved', 'id':form.vars.value.id ?? '0'}) }}\">Approve</a>
                                    {% endif %}
                                </div>
                            {% endif %}


                            <div class=\"form-group col-md-2\">
                                {% if form.vars.value.id matches '/^[0-9]+\$/'%}
                                    <a class=\"btn btn-danger w-100\" href=\"{{ path('voucher_update_status',{'status': 'Rejected', 'id':form.vars.value.id ?? '0'}) }}\">Reject</a>
                                {% endif %}

                            </div>

                            <div class=\"form-group col-md-2\">
                                {% if form.vars.value.id matches '/^[0-9]+\$/'%}
                                    <a class=\"btn btn-info w-100\" href=\"{{ path('voucher_update_status',{'status': 'Sent out', 'id':form.vars.value.id ?? '0'}) }}\">Sent out</a>
                                {% endif %}

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <a class=\"btn btn-primary mb-3 mx-5\" href=\"{{ path('app_voucher_index') }}\">back to dashboard</a>

    {{ include('reissuevoucher/voucher/_delete_form.html.twig') }}
{% endblock %}
", "reissuevoucher/voucher/edit.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\reissuevoucher\\templates\\reissuevoucher\\voucher\\edit.html.twig");
    }
}
