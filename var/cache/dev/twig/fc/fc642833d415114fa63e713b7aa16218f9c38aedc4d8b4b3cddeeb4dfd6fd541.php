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

/* voucher/index.html.twig */
class __TwigTemplate_f9a8e428b0fac0a03ad220488ce1b3110fea8ef4ea65f4b1cb450c35ebb5e758 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voucher/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "voucher/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Voucher index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Voucher index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Reason</th>
                <th>Name</th>
                <th>IdNumber</th>
                <th>GiftCardNumber</th>
                <th>OriginalIssuingStore</th>
                <th>DateOfPurchase</th>
                <th>TimeOfPurchase</th>
                <th>ValueLoadedOnCard</th>
                <th>FurtherDetails</th>
                <th>RequestedBy</th>
                <th>RequestedBySignature</th>
                <th>RequestedDate</th>
                <th>AuthorizedBy</th>
                <th>AuthorizedSignature</th>
                <th>AuthorizedDate</th>
                <th>NewEvoucherReference</th>
                <th>NewEvoucherDate</th>
                <th>CardLinkedTo</th>
                <th>DeliveredTo</th>
                <th>Status</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) || array_key_exists("vouchers", $context) ? $context["vouchers"] : (function () { throw new RuntimeError('Variable "vouchers" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 37
            echo "            <tr>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "reason", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "idNumber", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "giftCardNumber", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "originalIssuingStore", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "dateOfPurchase", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "dateOfPurchase", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 45
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "timeOfPurchase", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "timeOfPurchase", [], "any", false, false, false, 45), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "valueLoadedOnCard", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "furtherDetails", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "requestedBy", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "requestedBySignature", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "requestedDate", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "requestedDate", [], "any", false, false, false, 50), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "authorizedBy", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "authorizedSignature", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "authorizedDate", [], "any", false, false, false, 53)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "authorizedDate", [], "any", false, false, false, 53), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "newEvoucherReference", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "newEvoucherDate", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "newEvoucherDate", [], "any", false, false, false, 55), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "cardLinkedTo", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "deliveredTo", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voucher"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voucher"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "            <tr>
                <td colspan=\"22\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "voucher/index.html.twig";
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
        return array (  225 => 72,  220 => 69,  211 => 65,  202 => 61,  198 => 60,  193 => 58,  189 => 57,  185 => 56,  181 => 55,  177 => 54,  173 => 53,  169 => 52,  165 => 51,  161 => 50,  157 => 49,  153 => 48,  149 => 47,  145 => 46,  141 => 45,  137 => 44,  133 => 43,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  110 => 37,  105 => 36,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Voucher index{% endblock %}

{% block body %}
    <h1>Voucher index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Reason</th>
                <th>Name</th>
                <th>IdNumber</th>
                <th>GiftCardNumber</th>
                <th>OriginalIssuingStore</th>
                <th>DateOfPurchase</th>
                <th>TimeOfPurchase</th>
                <th>ValueLoadedOnCard</th>
                <th>FurtherDetails</th>
                <th>RequestedBy</th>
                <th>RequestedBySignature</th>
                <th>RequestedDate</th>
                <th>AuthorizedBy</th>
                <th>AuthorizedSignature</th>
                <th>AuthorizedDate</th>
                <th>NewEvoucherReference</th>
                <th>NewEvoucherDate</th>
                <th>CardLinkedTo</th>
                <th>DeliveredTo</th>
                <th>Status</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for voucher in vouchers %}
            <tr>
                <td>{{ voucher.id }}</td>
                <td>{{ voucher.reason }}</td>
                <td>{{ voucher.name }}</td>
                <td>{{ voucher.idNumber }}</td>
                <td>{{ voucher.giftCardNumber }}</td>
                <td>{{ voucher.originalIssuingStore }}</td>
                <td>{{ voucher.dateOfPurchase ? voucher.dateOfPurchase|date('Y-m-d') : '' }}</td>
                <td>{{ voucher.timeOfPurchase ? voucher.timeOfPurchase|date('H:i:s') : '' }}</td>
                <td>{{ voucher.valueLoadedOnCard }}</td>
                <td>{{ voucher.furtherDetails }}</td>
                <td>{{ voucher.requestedBy }}</td>
                <td>{{ voucher.requestedBySignature }}</td>
                <td>{{ voucher.requestedDate ? voucher.requestedDate|date('Y-m-d') : '' }}</td>
                <td>{{ voucher.authorizedBy }}</td>
                <td>{{ voucher.authorizedSignature }}</td>
                <td>{{ voucher.authorizedDate ? voucher.authorizedDate|date('Y-m-d') : '' }}</td>
                <td>{{ voucher.newEvoucherReference }}</td>
                <td>{{ voucher.newEvoucherDate ? voucher.newEvoucherDate|date('Y-m-d') : '' }}</td>
                <td>{{ voucher.cardLinkedTo }}</td>
                <td>{{ voucher.deliveredTo }}</td>
                <td>{{ voucher.status }}</td>
                <td>
                    <a href=\"{{ path('app_voucher_show', {'id': voucher.id}) }}\">show</a>
                    <a href=\"{{ path('app_voucher_edit', {'id': voucher.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"22\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_voucher_new') }}\">Create new</a>
{% endblock %}
", "voucher/index.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\reissuevoucher\\templates\\voucher\\index.html.twig");
    }
}
