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

/* voucher/show.html.twig */
class __TwigTemplate_0c976118e6810a9058c7078c8a55f3ae5e94d281ce3c56af84e9e563b55348da extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voucher/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "voucher/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ReissueRequest";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>ReissueRequest</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reason</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 16, $this->source); })()), "reason", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IdNumber</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 24, $this->source); })()), "idNumber", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>GiftCardNumber</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 28, $this->source); })()), "giftCardNumber", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>OriginalIssuingStore</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 32, $this->source); })()), "originalIssuingStore", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateOfPurchase</th>
                <td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 36, $this->source); })()), "dateOfPurchase", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 36, $this->source); })()), "dateOfPurchase", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>TimeOfPurchase</th>
                <td>";
        // line 40
        ((twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 40, $this->source); })()), "timeOfPurchase", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 40, $this->source); })()), "timeOfPurchase", [], "any", false, false, false, 40), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>ValueLoadedOnCard</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 44, $this->source); })()), "valueLoadedOnCard", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>FurtherDetails</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 48, $this->source); })()), "furtherDetails", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>RequestedBy</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 52, $this->source); })()), "requestedBy", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>RequestedBySignature</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 56, $this->source); })()), "requestedBySignature", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>RequestedDate</th>
                <td>";
        // line 60
        ((twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 60, $this->source); })()), "requestedDate", [], "any", false, false, false, 60)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 60, $this->source); })()), "requestedDate", [], "any", false, false, false, 60), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>AuthorizedBy</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 64, $this->source); })()), "authorizedBy", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>AuthorizedSignature</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 68, $this->source); })()), "authorizedSignature", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>AuthorizedDate</th>
                <td>";
        // line 72
        ((twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 72, $this->source); })()), "authorizedDate", [], "any", false, false, false, 72)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 72, $this->source); })()), "authorizedDate", [], "any", false, false, false, 72), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>NewEvoucherReference</th>
                <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 76, $this->source); })()), "newEvoucherReference", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NewEvoucherDate</th>
                <td>";
        // line 80
        ((twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 80, $this->source); })()), "newEvoucherDate", [], "any", false, false, false, 80)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 80, $this->source); })()), "newEvoucherDate", [], "any", false, false, false, 80), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>CardLinkedTo</th>
                <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 84, $this->source); })()), "cardLinkedTo", [], "any", false, false, false, 84), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DeliveredTo</th>
                <td>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 88, $this->source); })()), "deliveredTo", [], "any", false, false, false, 88), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 92, $this->source); })()), "status", [], "any", false, false, false, 92), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reissue_request_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reissue_request_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reissue_request"]) || array_key_exists("reissue_request", $context) ? $context["reissue_request"] : (function () { throw new RuntimeError('Variable "reissue_request" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 101
        echo twig_include($this->env, $context, "reissue_request/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "voucher/show.html.twig";
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
        return array (  239 => 101,  234 => 99,  229 => 97,  221 => 92,  214 => 88,  207 => 84,  200 => 80,  193 => 76,  186 => 72,  179 => 68,  172 => 64,  165 => 60,  158 => 56,  151 => 52,  144 => 48,  137 => 44,  130 => 40,  123 => 36,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ReissueRequest{% endblock %}

{% block body %}
    <h1>ReissueRequest</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reissue_request.id }}</td>
            </tr>
            <tr>
                <th>Reason</th>
                <td>{{ reissue_request.reason }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ reissue_request.name }}</td>
            </tr>
            <tr>
                <th>IdNumber</th>
                <td>{{ reissue_request.idNumber }}</td>
            </tr>
            <tr>
                <th>GiftCardNumber</th>
                <td>{{ reissue_request.giftCardNumber }}</td>
            </tr>
            <tr>
                <th>OriginalIssuingStore</th>
                <td>{{ reissue_request.originalIssuingStore }}</td>
            </tr>
            <tr>
                <th>DateOfPurchase</th>
                <td>{{ reissue_request.dateOfPurchase ? reissue_request.dateOfPurchase|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>TimeOfPurchase</th>
                <td>{{ reissue_request.timeOfPurchase ? reissue_request.timeOfPurchase|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>ValueLoadedOnCard</th>
                <td>{{ reissue_request.valueLoadedOnCard }}</td>
            </tr>
            <tr>
                <th>FurtherDetails</th>
                <td>{{ reissue_request.furtherDetails }}</td>
            </tr>
            <tr>
                <th>RequestedBy</th>
                <td>{{ reissue_request.requestedBy }}</td>
            </tr>
            <tr>
                <th>RequestedBySignature</th>
                <td>{{ reissue_request.requestedBySignature }}</td>
            </tr>
            <tr>
                <th>RequestedDate</th>
                <td>{{ reissue_request.requestedDate ? reissue_request.requestedDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>AuthorizedBy</th>
                <td>{{ reissue_request.authorizedBy }}</td>
            </tr>
            <tr>
                <th>AuthorizedSignature</th>
                <td>{{ reissue_request.authorizedSignature }}</td>
            </tr>
            <tr>
                <th>AuthorizedDate</th>
                <td>{{ reissue_request.authorizedDate ? reissue_request.authorizedDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>NewEvoucherReference</th>
                <td>{{ reissue_request.newEvoucherReference }}</td>
            </tr>
            <tr>
                <th>NewEvoucherDate</th>
                <td>{{ reissue_request.newEvoucherDate ? reissue_request.newEvoucherDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>CardLinkedTo</th>
                <td>{{ reissue_request.cardLinkedTo }}</td>
            </tr>
            <tr>
                <th>DeliveredTo</th>
                <td>{{ reissue_request.deliveredTo }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ reissue_request.status }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_reissue_request_index') }}\">back to list</a>

    <a href=\"{{ path('app_reissue_request_edit', {'id': reissue_request.id}) }}\">edit</a>

    {{ include('reissue_request/_delete_form.html.twig') }}
{% endblock %}
", "voucher/show.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\reissuevoucher\\templates\\voucher\\show.html.twig");
    }
}
