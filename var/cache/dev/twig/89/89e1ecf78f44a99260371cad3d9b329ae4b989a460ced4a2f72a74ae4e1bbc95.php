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

/* reissuevoucher/voucher/dashboard.html.twig */
class __TwigTemplate_1faa9b3460066b512f821cb975ba06be2f814c8bf82924aff91c393316d9a7b1 extends Template
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
        return "reissuevoucher/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reissuevoucher/voucher/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("reissuevoucher/base.html.twig", "reissuevoucher/voucher/dashboard.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voucher_dashboard_status", ["status" => "Pending"]);
        echo "\">
          <i class=\"bi bi-menu-button-wide\"></i><span>Pending</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link \"  href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voucher_dashboard_status", ["status" => "Approved"]);
        echo "\">
          <i class=\"bi bi-journal-text\"></i><span>Approve</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voucher_dashboard_status", ["status" => "Rejected"]);
        echo "\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Reject</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voucher_dashboard_status", ["status" => "sent out"]);
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
              <th scope=\"col\">Requested_Date</th>
              <th scope=\"col\">Authorized_By</th>
              <th scope=\"col\">Sentout_by</th>
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
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) || array_key_exists("vouchers", $context) ? $context["vouchers"] : (function () { throw new RuntimeError('Variable "vouchers" does not exist.', 80, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 81
            echo "              <tr>
                <td >";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "reason", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "name", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "idNumber", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "giftCardNumber", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "originalIssuingStore", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                <td>";
            // line 88
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "dateOfPurchase", [], "any", false, false, false, 88)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "dateOfPurchase", [], "any", false, false, false, 88), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 89
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "timeOfPurchase", [], "any", false, false, false, 89)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "timeOfPurchase", [], "any", false, false, false, 89), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "valueLoadedOnCard", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "furtherDetails", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "requestedBy", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "requestedDate", [], "any", false, false, false, 93)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "requestedDate", [], "any", false, false, false, 93), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "authorizedBy", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "sentOutBy", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                <td>";
            // line 96
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "authorizedDate", [], "any", false, false, false, 96)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "authorizedDate", [], "any", false, false, false, 96), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "newEvoucherReference", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                <td>";
            // line 98
            ((twig_get_attribute($this->env, $this->source, $context["voucher"], "newEvoucherDate", [], "any", false, false, false, 98)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "newEvoucherDate", [], "any", false, false, false, 98), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "cardLinkedTo", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "deliveredTo", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>

                ";
            // line 102
            if (twig_in_filter("approv", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 102)))) {
                // line 103
                echo "
                <td><a ";
                // line 104
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IBST_REPORT")) {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voucher"], "id", [], "any", false, false, false, 104)]), "html", null, true);
                    echo "\"";
                }
                echo "><span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 104), "html", null, true);
                echo "</span></a></td>

                ";
            } elseif (twig_in_filter("pend", twig_lower_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 106
$context["voucher"], "status", [], "any", false, false, false, 106))))) {
                // line 107
                echo "                  <td><a ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IBST_REPORT")) {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voucher"], "id", [], "any", false, false, false, 107)]), "html", null, true);
                    echo "\"";
                }
                echo "><span class=\"badge bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 107), "html", null, true);
                echo "</span></a></td>
                ";
            } elseif (twig_in_filter("rejec", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 108
$context["voucher"], "status", [], "any", false, false, false, 108)))) {
                // line 109
                echo "                  <td><a ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IBST_REPORT")) {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voucher"], "id", [], "any", false, false, false, 109)]), "html", null, true);
                    echo "\"";
                }
                echo "><span class=\"badge bg-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 109), "html", null, true);
                echo "</span></a></td>
                ";
            } elseif (twig_in_filter("sent", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 110
$context["voucher"], "status", [], "any", false, false, false, 110)))) {
                // line 111
                echo "                  <td><a ";
                if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IBST_REPORT")) {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voucher"], "id", [], "any", false, false, false, 111)]), "html", null, true);
                    echo "\"";
                }
                echo "><span class=\"badge bg-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voucher"], "status", [], "any", false, false, false, 111), "html", null, true);
                echo "</span></a></td>


                ";
            }
            // line 115
            echo "              </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 117
            echo "              <tr>
                <td colspan=\"22\">no records found</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
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
        return "reissuevoucher/voucher/dashboard.html.twig";
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
        return array (  334 => 121,  325 => 117,  319 => 115,  305 => 111,  303 => 110,  292 => 109,  290 => 108,  279 => 107,  277 => 106,  266 => 104,  263 => 103,  261 => 102,  256 => 100,  252 => 99,  248 => 98,  244 => 97,  240 => 96,  236 => 95,  232 => 94,  228 => 93,  224 => 92,  220 => 91,  216 => 90,  212 => 89,  208 => 88,  204 => 87,  200 => 86,  196 => 85,  192 => 84,  188 => 83,  184 => 82,  181 => 81,  176 => 80,  141 => 47,  134 => 46,  118 => 36,  109 => 30,  100 => 24,  91 => 18,  81 => 11,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'reissuevoucher/base.html.twig' %}

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
        <a class=\"nav-link\" href=\"{{ path('voucher_dashboard_status', {'status': 'Pending'}) }}\">
          <i class=\"bi bi-menu-button-wide\"></i><span>Pending</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link \"  href=\"{{ path('voucher_dashboard_status', {'status': 'Approved'}) }}\">
          <i class=\"bi bi-journal-text\"></i><span>Approve</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"{{ path('voucher_dashboard_status', {'status': 'Rejected'}) }}\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Reject</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"{{ path('voucher_dashboard_status', {'status': 'sent out'}) }}\">
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
              <th scope=\"col\">Requested_Date</th>
              <th scope=\"col\">Authorized_By</th>
              <th scope=\"col\">Sentout_by</th>
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
                <td>{{ voucher.requestedDate ? voucher.requestedDate|date('Y-m-d') : '' }}</td>
                <td>{{ voucher.authorizedBy }}</td>
                <td>{{ voucher.sentOutBy }}</td>
                <td>{{ voucher.authorizedDate ? voucher.authorizedDate|date('Y-m-d') : '' }}</td>
                <td>{{ voucher.newEvoucherReference }}</td>
                <td>{{ voucher.newEvoucherDate ? voucher.newEvoucherDate|date('Y-m-d') : '' }}</td>
                <td>{{ voucher.cardLinkedTo }}</td>
                <td>{{ voucher.deliveredTo }}</td>

                {% if 'approv' in voucher.status|lower %}

                <td><a {% if is_granted('ROLE_IBST_REPORT') %} href=\"{{ path('app_voucher_edit', {'id': voucher.id}) }}\"{% endif %}><span class=\"badge bg-success\">{{ voucher.status }}</span></a></td>

                {% elseif 'pend' in voucher.status|lower|lower %}
                  <td><a {% if is_granted('ROLE_IBST_REPORT') %} href=\"{{ path('app_voucher_edit', {'id': voucher.id}) }}\"{% endif %}><span class=\"badge bg-warning\">{{ voucher.status }}</span></a></td>
                {% elseif 'rejec' in voucher.status|lower %}
                  <td><a {% if is_granted('ROLE_IBST_REPORT') %} href=\"{{ path('app_voucher_edit', {'id': voucher.id}) }}\"{% endif %}><span class=\"badge bg-danger\">{{ voucher.status }}</span></a></td>
                {% elseif 'sent' in voucher.status|lower %}
                  <td><a {% if not is_granted('ROLE_IBST_REPORT') %} href=\"{{ path('app_voucher_edit', {'id': voucher.id}) }}\"{% endif %}><span class=\"badge bg-info\">{{ voucher.status }}</span></a></td>


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



", "reissuevoucher/voucher/dashboard.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\reissuevoucher\\templates\\reissuevoucher\\voucher\\dashboard.html.twig");
    }
}
