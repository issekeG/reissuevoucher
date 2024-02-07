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

/* voucher/dashboard.html.twig */
class __TwigTemplate_55ef6da6d6ad7504516423fe7a814b1b6ea76b07efce53b529275ab3b28bcbc1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voucher/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "voucher/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New ReissueRequest";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 6
        echo "  <aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_index");
        echo "\">
          <i class=\"bi bi-grid\"></i>
          <span>All status</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_status", ["status" => "Pending"]);
        echo "\">
          <i class=\"bi bi-menu-button-wide\"></i><span>Pending</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link \"  href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_status", ["status" => "Approved"]);
        echo "\">
          <i class=\"bi bi-journal-text\"></i><span>Approve</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_status", ["status" => "Rejected"]);
        echo "\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Reject</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_status", ["status" => "sent out"]);
        echo "\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>sent out</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
      </li>

    </ul>

  </aside>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 47
        echo "  <main id=\"main\" class=\"main\">

    <div class=\"col-12\">
      <div class=\"card recent-sales overflow-auto\">

        <div class=\"card-body\">

          <table class=\"table table-borderless datatable\">
            <thead>
            <tr>
              <th scope=\"col\">Id</th>
              <th scope=\"col\">Reason</th>
              <th scope=\"col\">Name</th>
              <th scope=\"col\">Id_Number</th>
              <th scope=\"col\">Gift_CardNumber</th>
              <th scope=\"col\">Original_Issuing_Store</th>
              <th scope=\"col\">Date_Of_Purchase</th>
              <th scope=\"col\">Time_Of_Purchase</th>
              <th scope=\"col\">Value_Loaded_On_Card</th>
              <th scope=\"col\">Further_Details</th>
              <th scope=\"col\">Requested_By</th>
              <th scope=\"col\">Requested_By_Signature</th>
              <th scope=\"col\">Requested_Date</th>
              <th scope=\"col\">Authorized_By</th>
              <th scope=\"col\">Authorized_Signature</th>
              <th scope=\"col\">Authorized_Date</th>
              <th scope=\"col\">New_Evoucher_Reference</th>
              <th scope=\"col\">New_Evoucher_Date</th>
              <th scope=\"col\">CardLinked_To</th>
              <th scope=\"col\">Delivered_To</th>
              <th scope=\"col\">Status</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) || array_key_exists("vouchers", $context) ? $context["vouchers"] : (function () { throw new RuntimeError('Variable "vouchers" does not exist.', 81, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 82
            echo "              <tr>
                <td >";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "id", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "reason", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "name", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "idNumber", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "giftCardNumber", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "originalIssuingStore", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                <td>";
            // line 89
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "dateOfPurchase", [], "any", false, false, false, 89)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "dateOfPurchase", [], "any", false, false, false, 89), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 90
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "timeOfPurchase", [], "any", false, false, false, 90)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "timeOfPurchase", [], "any", false, false, false, 90), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "valueLoadedOnCard", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "furtherDetails", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "requestedBy", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "requestedBySignature", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                <td>";
            // line 95
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "requestedDate", [], "any", false, false, false, 95)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "requestedDate", [], "any", false, false, false, 95), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "authorizedBy", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "authorizedSignature", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                <td>";
            // line 98
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "authorizedDate", [], "any", false, false, false, 98)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "authorizedDate", [], "any", false, false, false, 98), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "newEvoucherReference", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                <td>";
            // line 100
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "newEvoucherDate", [], "any", false, false, false, 100)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "newEvoucherDate", [], "any", false, false, false, 100), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "cardLinkedTo", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
                <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "deliveredTo", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>

                ";
            // line 104
            if (twig_in_filter("approv", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 104)))) {
                // line 105
                echo "
                  <td><a href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voucher"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                echo "\"><span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 106), "html", null, true);
                echo "</span></a></td>
                ";
            } elseif (twig_in_filter("pend", twig_lower_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 107
$context["voucher"], "status", [], "any", false, false, false, 107))))) {
                // line 108
                echo "                  <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voucher"], "id", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\"><span class=\"badge bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 108), "html", null, true);
                echo "</span></a></td>
                ";
            } elseif (twig_in_filter("rejec", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 109
$context["voucher"], "status", [], "any", false, false, false, 109)))) {
                // line 110
                echo "                  <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voucher"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                echo "\"><span class=\"badge bg-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 110), "html", null, true);
                echo "</span></a></td>
                ";
            } elseif (twig_in_filter("sent", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 111
$context["voucher"], "status", [], "any", false, false, false, 111)))) {
                // line 112
                echo "                  <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voucher"], "id", [], "any", false, false, false, 112)]), "html", null, true);
                echo "\"><span class=\"badge bg-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 112), "html", null, true);
                echo "</span></a></td>


                ";
            }
            // line 116
            echo "              </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 118
            echo "              <tr>
                <td colspan=\"22\">no records found</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "



            </tbody>
          </table>

        </div>

      </div>
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
        return "voucher/dashboard.html.twig";
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
        return array (  322 => 122,  313 => 118,  307 => 116,  297 => 112,  295 => 111,  288 => 110,  286 => 109,  279 => 108,  277 => 107,  271 => 106,  268 => 105,  266 => 104,  261 => 102,  257 => 101,  253 => 100,  249 => 99,  245 => 98,  241 => 97,  237 => 96,  233 => 95,  229 => 94,  225 => 93,  221 => 92,  217 => 91,  213 => 90,  209 => 89,  205 => 88,  201 => 87,  197 => 86,  193 => 85,  189 => 84,  185 => 83,  182 => 82,  177 => 81,  141 => 47,  134 => 46,  118 => 36,  109 => 30,  100 => 24,  91 => 18,  81 => 11,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New ReissueRequest{% endblock %}

{% block sidebar %}
  <aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"{{ path('app_voucher_index') }}\">
          <i class=\"bi bi-grid\"></i>
          <span>All status</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('dashboard_status', {'status': 'Pending'}) }}\">
          <i class=\"bi bi-menu-button-wide\"></i><span>Pending</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link \"  href=\"{{ path('dashboard_status', {'status': 'Approved'}) }}\">
          <i class=\"bi bi-journal-text\"></i><span>Approve</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"{{ path('dashboard_status', {'status': 'Rejected'}) }}\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Reject</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"{{ path('dashboard_status', {'status': 'sent out'}) }}\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>sent out</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
      </li>

    </ul>

  </aside>
{% endblock %}

{% block main %}
  <main id=\"main\" class=\"main\">

    <div class=\"col-12\">
      <div class=\"card recent-sales overflow-auto\">

        <div class=\"card-body\">

          <table class=\"table table-borderless datatable\">
            <thead>
            <tr>
              <th scope=\"col\">Id</th>
              <th scope=\"col\">Reason</th>
              <th scope=\"col\">Name</th>
              <th scope=\"col\">Id_Number</th>
              <th scope=\"col\">Gift_CardNumber</th>
              <th scope=\"col\">Original_Issuing_Store</th>
              <th scope=\"col\">Date_Of_Purchase</th>
              <th scope=\"col\">Time_Of_Purchase</th>
              <th scope=\"col\">Value_Loaded_On_Card</th>
              <th scope=\"col\">Further_Details</th>
              <th scope=\"col\">Requested_By</th>
              <th scope=\"col\">Requested_By_Signature</th>
              <th scope=\"col\">Requested_Date</th>
              <th scope=\"col\">Authorized_By</th>
              <th scope=\"col\">Authorized_Signature</th>
              <th scope=\"col\">Authorized_Date</th>
              <th scope=\"col\">New_Evoucher_Reference</th>
              <th scope=\"col\">New_Evoucher_Date</th>
              <th scope=\"col\">CardLinked_To</th>
              <th scope=\"col\">Delivered_To</th>
              <th scope=\"col\">Status</th>
            </tr>
            </thead>
            <tbody>
            {% for voucher in vouchers %}
              <tr>
                <td >{{ voucher.id }}</td>
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

                {% if 'approv' in voucher.status|lower %}

                  <td><a href=\"{{ path('app_voucher_edit', {'id': voucher.id}) }}\"><span class=\"badge bg-success\">{{ voucher.status }}</span></a></td>
                {% elseif 'pend' in voucher.status|lower|lower %}
                  <td><a href=\"{{ path('app_voucher_edit', {'id': voucher.id}) }}\"><span class=\"badge bg-warning\">{{ voucher.status }}</span></a></td>
                {% elseif 'rejec' in voucher.status|lower %}
                  <td><a href=\"{{ path('app_voucher_edit', {'id': voucher.id}) }}\"><span class=\"badge bg-danger\">{{ voucher.status }}</span></a></td>
                {% elseif 'sent' in voucher.status|lower %}
                  <td><a href=\"{{ path('app_voucher_edit', {'id': voucher.id}) }}\"><span class=\"badge bg-info\">{{ voucher.status }}</span></a></td>


                {% endif %}
              </tr>
            {% else %}
              <tr>
                <td colspan=\"22\">no records found</td>
              </tr>
            {% endfor %}




            </tbody>
          </table>

        </div>

      </div>
    </div>


  </main>
{% endblock %}



", "voucher/dashboard.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\reissuevoucher\\templates\\voucher\\dashboard.html.twig");
    }
}
