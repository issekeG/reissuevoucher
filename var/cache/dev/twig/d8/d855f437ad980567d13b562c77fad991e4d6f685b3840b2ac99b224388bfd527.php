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

/* reissuevoucher/base.html.twig */
class __TwigTemplate_6cc176cc8faa78b9ac22413bc828ee270e7f89c549b1024a8311eab0cfcb8262 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'sidebar' => [$this, 'block_sidebar'],
            'main' => [$this, 'block_main'],
            'main_section' => [$this, 'block_main_section'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reissuevoucher/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title> ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Google Fonts -->
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "

</head>

<body>

<!-- ======= Header ======= -->
";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 477
        echo "

<!-- End Header -->

<!-- ======= Sidebar ======= -->
";
        // line 482
        $this->displayBlock('sidebar', $context, $blocks);
        // line 484
        echo "
";
        // line 485
        $this->displayBlock('main', $context, $blocks);
        // line 502
        echo "

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->

<script src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- Template Main JS File -->
<script src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://www.youtube.com/iframe_api\"></script>

</body>

</html>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Training videos !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 34
        echo "<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">


    ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "session", [], "any", false, false, false, 37), "has", ["cart"], "method", false, false, false, 37)) {
            // line 38
            echo "        ";
            $context["cart"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "session", [], "any", false, false, false, 38), "get", ["cart"], "method", false, false, false, 38);
            // line 39
            echo "    ";
        }
        // line 40
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "session", [], "any", false, false, false, 40), "has", ["what-new-title"], "method", false, false, false, 40)) {
            // line 41
            echo "        ";
            $context["title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "session", [], "any", false, false, false, 41), "get", ["what-new-title"], "method", false, false, false, 41);
            // line 42
            echo "    ";
        } else {
            // line 43
            echo "        ";
            $context["title"] = "";
            // line 44
            echo "    ";
        }
        // line 45
        echo "

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
        <a class=\"navbar-brand\" href=\"";
        // line 48
        echo " \">
            <img src=\"https://img.exclusivebooks.co.za/logo/eb-logo-white.png\" width=\"30\" height=\"30\"
                 class=\"d-inline-block align-top\" alt=\"EB\" title=\"Exclusive Books\">
            Chiron
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"voucherDropdown\" data-bs-toggle=\"dropdown\">
                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">Vouchers</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-arrow\" aria-labelledby=\"voucherDropdown\">

                        <div class=\"dropdown-header\">Vouchers &amp; Gift Cards</div>

                        <a class=\"dropdown-item\" href=\" ";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_new");
        echo "\">Voucher reissue form</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_index");
        echo "\">Reissue status Dashboard</a>

                        <a class=\"dropdown-item\" href=\"";
        // line 74
        echo "\">Voucher Lookup</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 75
        echo "\">Gift Card Lookup</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 76
        echo "\">Send Voucher mail </a>
                        <div class=\"dropdown-divider\"> </div>
                        <div class=\"dropdown-header\">Discount Coupons</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 79
        echo "\">Lookup</a>
                        <!--
                    <div class=\"dropdown-divider\"></div>
                    <div class=\"dropdown-header\">Pre Order Vouchers</div>
                    <a class=\"dropdown-item\" href=\"";
        // line 83
        echo "\">Generate Voucher</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 84
        echo "\">Lookup Voucher</a>
                    -->


                        <div class=\"dropdown-divider\"></div>
                        ";
        // line 89
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IBST_REPORT")) {
            // line 90
            echo "                            <div class=\"dropdown-header\">Voucher & Gift administration</div>

                            <a class=\"dropdown-item\" href=\"";
            // line 92
            echo "\">Link Voucher to Gift  card</a>
                        ";
        }
        // line 94
        echo "
                        ";
        // line 96
        echo "                        ";
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 97
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_index");
            echo " \">Voucher Authorized Dashboard</a>
                        ";
        }
        // line 99
        echo "                        ";
        // line 100
        echo "


                        ";
        // line 103
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 104
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Lookup Change Voucher</a>
                            ";
            // line 106
            echo "                        ";
        }
        // line 107
        echo "

                        ";
        // line 109
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 110
            echo "                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Online Order administration</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 112
            echo "\">Reverse Online Refund</a>
                        ";
        }
        // line 114
        echo "                    </div>
                </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dashDropdown\" data-bs-toggle=\"dropdown\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">Online Orders Admin</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dashDropdown\">
                        <div class=\"dropdown-header\">Dashboards</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 124
        echo "\">Potentially Delayed Orders Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 125
        echo "\">Overdue Orders Dashboard</a>
                        ";
        // line 127
        echo "                        <a class=\"dropdown-item\" href=\"";
        echo "\">Overdue Dropship Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 128
        echo "\">Overdue IBST Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 129
        echo "\">Online Refunds Dashboard</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Manage Orders</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 132
        echo "\">Reverse Online Refund</a>
                        ";
        // line 134
        echo "                        <a class=\"dropdown-item\" href=\"";
        echo "\">Reinstate voided order</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 135
        echo "\">Subtract Delivery from Refund</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 136
        echo "\">Change Refund Type</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 137
        echo "\">Change Payment Type</a>
                    </div>
                </li>



                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\"  data-bs-toggle=\"dropdown\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">IBSTs</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                        <div class=\"dropdown-header\">IBSTs</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 149
        echo "\">Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 150
        echo "\">Lookup</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 151
        echo "\">New Request</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 152
        echo "\">Dispatch</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 153
        echo "\">Receive</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 154
        echo "\">Return to
                            Store</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 156
        echo "\">Receive Returned
                            IBST</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 158
        echo "\">Manage Declines</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Shipping</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 161
        echo "\">Print Convergex Waybill</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 162
        echo "\"> Create Manifest</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Bulk IBSTs</div>
                        ";
        // line 165
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BULK_IBST")) {
            // line 166
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Upload Bulk IBST</a>
                        ";
        }
        // line 168
        echo "                        <!---
                    <a class=\"dropdown-item\" href=\"";
        // line 169
        echo "\">Recall
                        Aged Stock</a>---->
                        <a class=\"dropdown-item\" href=\"";
        // line 171
        echo "\">Recall
                            Sales Stock</a>
                    </div>
                </li>

                <li class=\"nav-item dropdown\">

                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"customerDropdown\" data-bs-toggle=\"dropdown\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">Customers</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"customerDropdown\">
                        <div class=\"dropdown-header\">Fanatics</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 183
        echo "\">Search</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 184
        echo "\">Activation</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Website Orders</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 187
        echo "\">Order Lookup</a>
                        ";
        // line 188
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 189
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Receive
                                Online
                                Parcel</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 192
            echo "\">Log
                                Customer
                                Collection</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 195
            echo "\">Send Customer SMS</a>
                        ";
        }
        // line 197
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 198
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Reset Dropshipping Order</a>
                        ";
        }
        // line 200
        echo "                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Book Clubs</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 202
        echo "\">Search</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Customers</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 205
        echo "\">View Account List</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 206
        echo "\">Lookup Store Receipt</a>
                    </div>
                </li>

                ";
        // line 210
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DROP_SHIP")) {
            // line 211
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dropShippingDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Drop Shipping</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dropShippingDropdown\">
                            <div class=\"dropdown-header\">Drop Shipping</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 217
            echo "\">Dashboard</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 219
            echo "\">Dispatch Online
                                Order</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 222
            echo "\">Create Manifest</a>

                            ";
            // line 224
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROCURE")) {
                // line 225
                echo "                                <div class=\"dropdown-divider\"></div>
                                <div class=\"dropdown-header\">Rohan</div>
                                <a class=\"dropdown-item\" href=\"";
                // line 227
                echo "\">View Legacy Picking
                                    Slip</a>
                                <a class=\"dropdown-item\" href=\"";
                // line 229
                echo "\">Open Gift Orders</a>
                            ";
            }
            // line 231
            echo "                        </div>
                    </li>
                ";
        }
        // line 234
        echo "

                <!-- #QOUTATION TABS -->
                ";
        // line 237
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 238
            echo "
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dropShippingDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Quotation</span>
                        </a>


                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dropShippingDropdown\">
                            <div class=\"dropdown-header\">Quotation</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 247
            echo "\">Create Quotation</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 248
            echo "\">View Quotation</a>

                        </div>
                    </li>

                ";
        }
        // line 254
        echo "

                ";
        // line 256
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IBST_REPORT")) {
            // line 257
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"ibstReportsDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Reports</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"ibstReportsDropdown\">
                            <div class=\"dropdown-header\">IBSTs</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 263
            echo "\">IBST
                                Summary Report</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 265
            echo "\">IBST
                                Manifest Report</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 267
            echo "\">IBST
                                Detail Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Goods in Transit</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 271
            echo "\">Goods In
                                Transit Listing</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 273
            echo "\">G-I-T
                                Summary Report</a>

                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Month End Report</div>
                            <a class=\"dropdown-item\" href=\"/stock-return\">Returns Entry Form</a>
                            <a class=\"dropdown-item\" href=\"/stock-receive\">Receiving Entry Form</a>
                            <a class=\"dropdown-item\" href=\"/get/batches\"> Receiving and Returns Dashboard

                            </a>

                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Online Reports</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 286
            echo "\">Drop Shipping
                                Summary Report</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 288
            echo "\">Dispatch Stats
                                Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Foot Count</div>

                            <a class=\"dropdown-item\" href=\"";
            // line 293
            echo "\">Store Foot Count
                                Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <!--";
            // line 303
            echo " -->

                            <div class=\"dropdown-header\">Store  Audit Checklist</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 306
            echo "\">Audit Checklist  Dashboard
                            </a>
                            <a class=\"dropdown-item\" href=\"";
            // line 308
            echo "\">Add new Store audit
                            </a>

                        </div>
                    </li>
                ";
        }
        // line 314
        echo "
                ";
        // line 315
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CMS")) {
            // line 316
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"cmsDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">CMS</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"cmsDropdown\">
                            <div class=\"dropdown-header\">Content Management</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 322
            echo "\">Campaign Upload</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 323
            echo "\">Campaign Management</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 325
            echo "\">Add Product</a>
                        </div>
                    </li>
                ";
        }
        // line 329
        echo "
                <li>
                    <a class=\"nav-link\" href=\"";
        // line 331
        echo "\">Whats New</a>
                </li>

                <li class=\"nav-item dropdown pe-3\">

                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">Training Videos</span>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 346
        echo "\">
                                <span>Show video</span>
                            </a>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 356
        echo "\" >
                                <span>Add Actergory</span>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 364
        echo "\">
                                <span>Form</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li>

                    <a href=\"";
        // line 375
        echo "\"><span class=\"nav-link\" style=\"color:white; font-weight: bold\"><strong> ";
        echo " </strong></span></a>
                </li>
            </ul>



            <ul class=\"navbar-nav ms-auto pe-3\">
                <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"Catalogue Search\" data-trigger=\"hover\"
                    data-placement=\"bottom\">
                    <a class=\"nav-link\" href=\" ";
        // line 384
        echo "\">
                        <span class=\"fa fa-search\"></span>
                    </a>
                </li>
                ";
        // line 388
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 388, $this->source); })()), "session", [], "any", false, false, false, 388), "has", ["storeCode"], "method", false, false, false, 388)) {
            // line 389
            echo "                    <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"IBST Cart Items\" data-trigger=\"hover\"
                        data-placement=\"bottom\">
                        <a class=\"nav-link\" href=\"";
            // line 391
            echo "\">
                            <span class=\"fa fa-shopping-cart\"></span>
                            <sub>
                        <span id=\"shoppingcartQty\"
                              class=\"badge";
            // line 395
            if (((isset($context["cart"]) || array_key_exists("cart", $context)) && (1 === twig_compare(twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 395, $this->source); })())), 0)))) {
                echo " badge-success\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 395, $this->source); })())), "html", null, true);
            } else {
                echo " badge-secondary\">0";
            }
            echo "</span>
                            </sub>
                        </a>
                    </li>
                ";
        }
        // line 400
        echo "
                <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"Help &amp; Reference\" data-trigger=\"hover\"
                    data-placement=\"bottom\">

                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\" id=\"navbarDropdown\">
                        <span class=\"sr-only\">Help &amp; Reference</span><span class=\"fa fa-question-circle\"></span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"navbarDropdown\">
                        <div class=\"dropdown-header\">Reference</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 410
        echo "\">Guides &amp; Manuals</a>

                        <a class=\"dropdown-item\" href=\"";
        // line 412
        echo "\">Employee list</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 413
        echo "\">Store List</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 414
        echo "\">Contact List</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 415
        echo "\">Useful Links</a>

                        <div class=\"dropdown-header\">Support</div>
                        <a class=\"dropdown-item\" href=\"http://itsupport.exclusivebooks.co.za\" target=\"_blank\">IT Support
                            <span class=\"fa fa-external-link-alt\"></span></a>
                        <div class=\"dropdown-item\">
                            <address>
                                <strong>Customer Care</strong><br>
                                <span class=\"fa fa-phone\"></span> <a href=\"tel:27800332550\">0800 332 550</a><br>
                                <span class=\"fa fa-envelope\"></span> <a href=\"mailto:info%40exclusivebooks.co.za\">info@exclusivebooks.co.za</a>
                            </address>
                        </div>
                    </div>
                </li>

                ";
        // line 430
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 431
            echo "                    <li class=\"nav-item dropdown\">


                        <a class=\"nav-link  d-flex align-items-center pe-0\" id=\"authDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\"><span
                                        style=\"font-size: smaller\">";
            // line 436
            echo "<br/>(";
            echo ")</span>
                            <span
                                    class=\"fa fa-user\"></span></span>
                        </a>


                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block ps-2\"><span
                                        style=\"font-size: smaller\">";
            // line 444
            echo "<br/>(";
            echo ")</span>
                            <span
                                    class=\"fa fa-user\"></span></span>
                        </a>


                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"authDropdown\">
                            <a class=\"dropdown-item\" href=\"";
            // line 451
            echo "\">Change Store</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 453
            echo "\">Log out</a>
                            ";
            // line 454
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SU")) {
                // line 455
                echo "                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"";
                // line 456
                echo "\">Job Dashboard</a>
                                <a class=\"dropdown-item\" href=\"";
                // line 457
                echo "\">Sales summary</a>
                            ";
            }
            // line 459
            echo "                        </div>


                    </li>
                ";
        } else {
            // line 464
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 465
            echo "\">Log in</a>
                    </li>
                ";
        }
        // line 468
        echo "            </ul>



        </div>
    </nav>

</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 482
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 485
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 486
        echo "
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
    </div>

    <section class=\"section dashboard\">
        ";
        // line 493
        $this->displayBlock('main_section', $context, $blocks);
        // line 498
        echo "    </section>

</main><!-- End #main -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 493
    public function block_main_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_section"));

        // line 494
        echo "            <div class=\"row\">

            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reissuevoucher/base.html.twig";
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
        return array (  948 => 494,  941 => 493,  931 => 498,  929 => 493,  920 => 486,  913 => 485,  901 => 482,  886 => 468,  881 => 465,  878 => 464,  871 => 459,  867 => 457,  864 => 456,  861 => 455,  859 => 454,  856 => 453,  852 => 451,  842 => 444,  831 => 436,  824 => 431,  822 => 430,  805 => 415,  802 => 414,  799 => 413,  796 => 412,  792 => 410,  780 => 400,  767 => 395,  761 => 391,  757 => 389,  755 => 388,  749 => 384,  737 => 375,  724 => 364,  714 => 356,  702 => 346,  685 => 331,  681 => 329,  675 => 325,  671 => 323,  668 => 322,  660 => 316,  658 => 315,  655 => 314,  647 => 308,  643 => 306,  638 => 303,  633 => 293,  626 => 288,  622 => 286,  607 => 273,  603 => 271,  597 => 267,  593 => 265,  589 => 263,  581 => 257,  579 => 256,  575 => 254,  567 => 248,  564 => 247,  553 => 238,  551 => 237,  546 => 234,  541 => 231,  537 => 229,  533 => 227,  529 => 225,  527 => 224,  523 => 222,  518 => 219,  515 => 217,  507 => 211,  505 => 210,  499 => 206,  496 => 205,  491 => 202,  487 => 200,  482 => 198,  479 => 197,  475 => 195,  470 => 192,  464 => 189,  462 => 188,  459 => 187,  454 => 184,  451 => 183,  437 => 171,  433 => 169,  430 => 168,  425 => 166,  423 => 165,  418 => 162,  415 => 161,  410 => 158,  406 => 156,  402 => 154,  399 => 153,  396 => 152,  393 => 151,  390 => 150,  387 => 149,  373 => 137,  370 => 136,  367 => 135,  363 => 134,  360 => 132,  355 => 129,  352 => 128,  348 => 127,  345 => 125,  342 => 124,  330 => 114,  326 => 112,  322 => 110,  320 => 109,  316 => 107,  313 => 106,  309 => 104,  307 => 103,  302 => 100,  300 => 99,  294 => 97,  291 => 96,  288 => 94,  284 => 92,  280 => 90,  278 => 89,  271 => 84,  268 => 83,  262 => 79,  257 => 76,  254 => 75,  251 => 74,  246 => 72,  242 => 71,  217 => 48,  212 => 45,  209 => 44,  206 => 43,  203 => 42,  200 => 41,  197 => 40,  194 => 39,  191 => 38,  189 => 37,  184 => 34,  177 => 33,  167 => 23,  163 => 22,  156 => 18,  152 => 17,  147 => 14,  140 => 13,  127 => 8,  107 => 511,  102 => 509,  98 => 508,  90 => 502,  88 => 485,  85 => 484,  83 => 482,  76 => 477,  74 => 33,  65 => 26,  63 => 13,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title> {% block title %} Training videos !{% endblock %}</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Google Fonts -->
    {% block stylesheets %}
        <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
        <link href=\"{{ asset(\"assets/trainingvideos/vendor/bootstrap/css/bootstrap.min.css\") }}\" rel=\"stylesheet\">
        <link href=\"{{ asset(\"assets/trainingvideos/vendor/bootstrap-icons/bootstrap-icons.css\") }}\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

        <link href=\"{{ asset(\"assets/trainingvideos/css/style.css\") }}\" rel=\"stylesheet\">
        <link href=\"{{  asset ('assets/trainingvideos/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

    {% endblock %}


</head>

<body>

<!-- ======= Header ======= -->
{% block header %}
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">


    {% if app.session.has('cart') %}
        {% set cart = app.session.get('cart') %}
    {% endif %}
    {% if app.session.has('what-new-title') %}
        {% set title = app.session.get('what-new-title') %}
    {%  else %}
        {% set title =\"\" %}
    {% endif %}


    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
        <a class=\"navbar-brand\" href=\"{# {{ path('home') }} #} \">
            <img src=\"https://img.exclusivebooks.co.za/logo/eb-logo-white.png\" width=\"30\" height=\"30\"
                 class=\"d-inline-block align-top\" alt=\"EB\" title=\"Exclusive Books\">
            Chiron
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"voucherDropdown\" data-bs-toggle=\"dropdown\">
                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">Vouchers</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-arrow\" aria-labelledby=\"voucherDropdown\">

                        <div class=\"dropdown-header\">Vouchers &amp; Gift Cards</div>

                        <a class=\"dropdown-item\" href=\" {{ path('app_voucher_new') }}\">Voucher reissue form</a>
                        <a class=\"dropdown-item\" href=\"{{ path('app_voucher_index') }}\">Reissue status Dashboard</a>

                        <a class=\"dropdown-item\" href=\"{# {{ path('voucher_lookup') }} #}\">Voucher Lookup</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('gift_card_lookup') }} #}\">Gift Card Lookup</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('gift_card_lookup') }} #}\">Send Voucher mail </a>
                        <div class=\"dropdown-divider\"> </div>
                        <div class=\"dropdown-header\">Discount Coupons</div>
                        <a class=\"dropdown-item\" href=\"{#{{ path('coupon_lookup') }} #}\">Lookup</a>
                        <!--
                    <div class=\"dropdown-divider\"></div>
                    <div class=\"dropdown-header\">Pre Order Vouchers</div>
                    <a class=\"dropdown-item\" href=\"{#{{ path('preorder_promotion_list') }}#}\">Generate Voucher</a>
                    <a class=\"dropdown-item\" href=\"{#{{ path('preorder_promotion_lookup') }}#}\">Lookup Voucher</a>
                    -->


                        <div class=\"dropdown-divider\"></div>
                        {% if not is_granted('ROLE_IBST_REPORT') %}
                            <div class=\"dropdown-header\">Voucher & Gift administration</div>

                            <a class=\"dropdown-item\" href=\"{#{{ path('linkVoucherToGift') }} #}\">Link Voucher to Gift  card</a>
                        {% endif %}

                        {# Voucheeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeer #}
                        {% if not is_granted('ROLE_ONLINE_ADMIN') %}
                            <a class=\"dropdown-item\" href=\"{{ path('app_voucher_index') }} \">Voucher Authorized Dashboard</a>
                        {% endif %}
                        {# Voucheeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeer #}



                        {% if is_granted('ROLE_ONLINE_ADMIN') %}
                            <a class=\"dropdown-item\" href=\"{#{{ path('LookupChangeVoucher') }} #}\">Lookup Change Voucher</a>
                            {#   <a class=\"dropdown-item\" href=\"{{ path('VoucherStatusReset') }}\">Voucher Lookup  by  Receipt</a> #}
                        {% endif %}


                        {% if is_granted('ROLE_ONLINE_ADMIN') %}
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Online Order administration</div>
                            <a class=\"dropdown-item\" href=\"{#{{ path('ReverseOnlineRefund') }} #}\">Reverse Online Refund</a>
                        {% endif %}
                    </div>
                </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dashDropdown\" data-bs-toggle=\"dropdown\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">Online Orders Admin</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dashDropdown\">
                        <div class=\"dropdown-header\">Dashboards</div>
                        <a class=\"dropdown-item\" href=\"{#{{ path('View_Delayed_Orders') }} #}\">Potentially Delayed Orders Dashboard</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('View_Overdue_Orders') }} #}\">Overdue Orders Dashboard</a>
                        {# <a class=\"dropdown-item\" href=\"{{ path('ExportVoucherList') }}\">Export Corporate Order Voucher List</a> #}
                        <a class=\"dropdown-item\" href=\"{#{{ path('View_Overdue_Dropship') }} #}\">Overdue Dropship Dashboard</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('View_Overdue_IBST') }} #}\">Overdue IBST Dashboard</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('ViewRefunds') }} #}\">Online Refunds Dashboard</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Manage Orders</div>
                        <a class=\"dropdown-item\" href=\"{#{{ path('ReverseOnlineRefund') }} #}\">Reverse Online Refund</a>
                        {# <a class=\"dropdown-item\" href=\"{{ path('Reset_dropship_line') }} \">Reset Dropship Order Line</a> #}
                        <a class=\"dropdown-item\" href=\"{#{{ path('ReinstateVoidedOrder') }} #}\">Reinstate voided order</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('MinusDelivery') }} #}\">Subtract Delivery from Refund</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('ChangeRefundType') }} #}\">Change Refund Type</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('ChangePaymentType') }} #}\">Change Payment Type</a>
                    </div>
                </li>



                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\"  data-bs-toggle=\"dropdown\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">IBSTs</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                        <div class=\"dropdown-header\">IBSTs</div>
                        <a class=\"dropdown-item\" href=\"{#{{ path('ibst_dashboard') }} #}\">Dashboard</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('ibst_search_get') }} #}\">Lookup</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('ibst_stock_lookup') }} #}\">New Request</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('ibst_scan_get',{'action':'dispatch'}) }} #}\">Dispatch</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('ibst_scan_get',{'action':'receive'}) }} #}\">Receive</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('ibst_scan_get',{'action':'return-out'}) }} #}\">Return to
                            Store</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('ibst_scan_get',{'action':'return-in'}) }} #}\">Receive Returned
                            IBST</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('ibst_manage_declines') }} #}\">Manage Declines</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Shipping</div>
                        <a class=\"dropdown-item\" href=\"{#{{ url('convergex_waybill_print') }} #}\">Print Convergex Waybill</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('drop_shipping_show_manifest')}} #}\"> Create Manifest</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Bulk IBSTs</div>
                        {% if is_granted('ROLE_BULK_IBST') %}
                            <a class=\"dropdown-item\" href=\"{#{{ path('ibst_bulk_upload') }} #}\">Upload Bulk IBST</a>
                        {% endif %}
                        <!---
                    <a class=\"dropdown-item\" href=\"{#{{ path('ibst_recall_stock',{'storeCode':'WS'}) }} #}\">Recall
                        Aged Stock</a>---->
                        <a class=\"dropdown-item\" href=\"{#{{ path('ibst_recall_stock',{'storeCode':'HW'}) }} #}\">Recall
                            Sales Stock</a>
                    </div>
                </li>

                <li class=\"nav-item dropdown\">

                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"customerDropdown\" data-bs-toggle=\"dropdown\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">Customers</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"customerDropdown\">
                        <div class=\"dropdown-header\">Fanatics</div>
                        <a class=\"dropdown-item\" href=\"{#{{ path('customer_fanatics_search') }} #}\">Search</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('customer_fanatics_activation_lookup') }} #}\">Activation</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Website Orders</div>
                        <a class=\"dropdown-item\" href=\"{#{{ path('customer_website_order_search') }} #}\">Order Lookup</a>
                        {% if is_granted('ROLE_USER') %}
                            <a class=\"dropdown-item\" href=\"{#{{ path('customer_website_order_tracking_receive') }} #}\">Receive
                                Online
                                Parcel</a>
                            <a class=\"dropdown-item\" href=\"{#{{ path('customer_website_order_tracking_collect') }} #}\">Log
                                Customer
                                Collection</a>
                            <a class=\"dropdown-item\" href=\"{#{{ path('customer_send_sms') }} #}\">Send Customer SMS</a>
                        {% endif %}
                        {% if is_granted('ROLE_ONLINE_ADMIN') %}
                            <a class=\"dropdown-item\" href=\"{#{{ path('LookUpDropshipOrder') }} #}\">Reset Dropshipping Order</a>
                        {% endif %}
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Book Clubs</div>
                        <a class=\"dropdown-item\" href=\"{#{{ path('customer_book_club_search') }} #}\">Search</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Customers</div>
                        <a class=\"dropdown-item\" href=\"{#{{ path('customer_debtors') }} #}\">View Account List</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('sales_store_receipt_lookup') }} #}\">Lookup Store Receipt</a>
                    </div>
                </li>

                {% if is_granted('ROLE_DROP_SHIP') %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dropShippingDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Drop Shipping</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dropShippingDropdown\">
                            <div class=\"dropdown-header\">Drop Shipping</div>
                            <a class=\"dropdown-item\" href=\"{#{{ path('drop_shipping_store_dashboard') }} #}\">Dashboard</a>
                            <a class=\"dropdown-item\" href=\"{#{{ path('drop_shipping_search_get') }}\">Picking Slip Lookup</a>
                            <a class=\"dropdown-item\" href=\"{#{{ path('drop_shipping_online_dispatch_get') }} #}\">Dispatch Online
                                Order</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{#{{ path('drop_shipping_show_manifest') }} #}\">Create Manifest</a>

                            {% if is_granted('ROLE_PROCURE') %}
                                <div class=\"dropdown-divider\"></div>
                                <div class=\"dropdown-header\">Rohan</div>
                                <a class=\"dropdown-item\" href=\"{#{{ path('herakles_pslip_get') }} #}\">View Legacy Picking
                                    Slip</a>
                                <a class=\"dropdown-item\" href=\"{#{{ path('open_gift_report') }} #}\">Open Gift Orders</a>
                            {% endif %}
                        </div>
                    </li>
                {% endif %}


                <!-- #QOUTATION TABS -->
                {% if is_granted('ROLE_USER') %}

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dropShippingDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Quotation</span>
                        </a>


                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dropShippingDropdown\">
                            <div class=\"dropdown-header\">Quotation</div>
                            <a class=\"dropdown-item\" href=\"{#{{ path('quotation') }} #}\">Create Quotation</a>
                            <a class=\"dropdown-item\" href=\"{#{{ path('view_quotation') }} #}\">View Quotation</a>

                        </div>
                    </li>

                {% endif %}


                {% if is_granted('ROLE_IBST_REPORT') %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"ibstReportsDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Reports</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"ibstReportsDropdown\">
                            <div class=\"dropdown-header\">IBSTs</div>
                            <a class=\"dropdown-item\" href=\"{#{{ url('ibst_reports',{'type':'summary'}) }} #}\">IBST
                                Summary Report</a>
                            <a class=\"dropdown-item\" href=\"{#{{ url('ibst_reports',{'type':'manifest'}) }} #}\">IBST
                                Manifest Report</a>
                            <a class=\"dropdown-item\" href=\"{#{{ url('ibst_reports',{'type':'detail'}) }} #}\">IBST
                                Detail Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Goods in Transit</div>
                            <a class=\"dropdown-item\" href=\"{#{{ url('ibst_reports',{'type':'git'}) }} #}\">Goods In
                                Transit Listing</a>
                            <a class=\"dropdown-item\" href=\"{#{{ url('ibst_reports',{'type':'git-summary'}) }} #}\">G-I-T
                                Summary Report</a>

                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Month End Report</div>
                            <a class=\"dropdown-item\" href=\"/stock-return\">Returns Entry Form</a>
                            <a class=\"dropdown-item\" href=\"/stock-receive\">Receiving Entry Form</a>
                            <a class=\"dropdown-item\" href=\"/get/batches\"> Receiving and Returns Dashboard

                            </a>

                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Online Reports</div>
                            <a class=\"dropdown-item\" href=\"{#{{ url('ibst_reports',{'type':'sales'}) }} #}\">Drop Shipping
                                Summary Report</a>
                            <a class=\"dropdown-item\" href=\"{#{{ url('online_stats_report') }} #}\">Dispatch Stats
                                Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Foot Count</div>

                            <a class=\"dropdown-item\" href=\"{#{{ url('footcount') }} #}\">Store Foot Count
                                Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <!--{#
                            <div class=\"dropdown-header\">Pre Order Promotions</div>
                            <a class=\"dropdown-item\" href=\"{{ url('preorder_promotion_detail_report') }}\">Detail Report</a>
                            <a class=\"dropdown-item\" href=\"{{ url('preorder_summary_report') }}\">Summary Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Uber Eats</div>
                            <a class=\"dropdown-item\" href=\"{{ url('ubereats_detail_report') }}\">Stock Detail Report</a>
                            #} -->

                            <div class=\"dropdown-header\">Store  Audit Checklist</div>
                            <a class=\"dropdown-item\" href=\"{#{{ url('StoreChecklist') }} #}\">Audit Checklist  Dashboard
                            </a>
                            <a class=\"dropdown-item\" href=\"{#{{ url('AddAuditdate') }} #}\">Add new Store audit
                            </a>

                        </div>
                    </li>
                {% endif %}

                {% if is_granted('ROLE_CMS') %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"cmsDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">CMS</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"cmsDropdown\">
                            <div class=\"dropdown-header\">Content Management</div>
                            <a class=\"dropdown-item\" href=\"{#{{ path('cms_campaign_upload') }} #}\">Campaign Upload</a>
                            <a class=\"dropdown-item\" href=\"{#{{ path('cms_campaign_list') }} #}\">Campaign Management</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{#{{ path('cms_add_product') }} #}\">Add Product</a>
                        </div>
                    </li>
                {% endif %}

                <li>
                    <a class=\"nav-link\" href=\"{#{{ url('whats_new') }} #}\">Whats New</a>
                </li>

                <li class=\"nav-item dropdown pe-3\">

                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">Training Videos</span>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"{#{{ path('app_video_index') }} #}\">
                                <span>Show video</span>
                            </a>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"{#{{ path('video_app_category_new') }} #}\" >
                                <span>Add Actergory</span>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"{#{{ path('app_video_new') }} #}\">
                                <span>Form</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li>

                    <a href=\"{#{{ url('whats_new') }} #}\"><span class=\"nav-link\" style=\"color:white; font-weight: bold\"><strong> {#{{ title }} #} </strong></span></a>
                </li>
            </ul>



            <ul class=\"navbar-nav ms-auto pe-3\">
                <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"Catalogue Search\" data-trigger=\"hover\"
                    data-placement=\"bottom\">
                    <a class=\"nav-link\" href=\" {# {{ url('input_search') }} #}\">
                        <span class=\"fa fa-search\"></span>
                    </a>
                </li>
                {% if app.session.has('storeCode') %}
                    <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"IBST Cart Items\" data-trigger=\"hover\"
                        data-placement=\"bottom\">
                        <a class=\"nav-link\" href=\"{#{{ path('ibst_review', {'store': app.session.get('storeCode')}) }} #}\">
                            <span class=\"fa fa-shopping-cart\"></span>
                            <sub>
                        <span id=\"shoppingcartQty\"
                              class=\"badge{% if cart is defined and cart|length > 0 %} badge-success\">{{ cart|length }}{% else %} badge-secondary\">0{% endif %}</span>
                            </sub>
                        </a>
                    </li>
                {% endif %}

                <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"Help &amp; Reference\" data-trigger=\"hover\"
                    data-placement=\"bottom\">

                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\" id=\"navbarDropdown\">
                        <span class=\"sr-only\">Help &amp; Reference</span><span class=\"fa fa-question-circle\"></span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"navbarDropdown\">
                        <div class=\"dropdown-header\">Reference</div>
                        <a class=\"dropdown-item\" href=\"{#{{ path('reference_documents') }} #}\">Guides &amp; Manuals</a>

                        <a class=\"dropdown-item\" href=\"{#{{ url('employee_list') }} #}\">Employee list</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('reference_store_list') }} #}\">Store List</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('reference_contact_list') }} #}\">Contact List</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('reference_links') }} #}\">Useful Links</a>

                        <div class=\"dropdown-header\">Support</div>
                        <a class=\"dropdown-item\" href=\"http://itsupport.exclusivebooks.co.za\" target=\"_blank\">IT Support
                            <span class=\"fa fa-external-link-alt\"></span></a>
                        <div class=\"dropdown-item\">
                            <address>
                                <strong>Customer Care</strong><br>
                                <span class=\"fa fa-phone\"></span> <a href=\"tel:27800332550\">0800 332 550</a><br>
                                <span class=\"fa fa-envelope\"></span> <a href=\"mailto:info%40exclusivebooks.co.za\">info@exclusivebooks.co.za</a>
                            </address>
                        </div>
                    </div>
                </li>

                {% if is_granted('ROLE_USER') %}
                    <li class=\"nav-item dropdown\">


                        <a class=\"nav-link  d-flex align-items-center pe-0\" id=\"authDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\"><span
                                        style=\"font-size: smaller\">{#{{ app.session.get('userName') }} #}<br/>({#{{ app.session.get('storeName') }} #})</span>
                            <span
                                    class=\"fa fa-user\"></span></span>
                        </a>


                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block ps-2\"><span
                                        style=\"font-size: smaller\">{#{{ app.session.get('userName') }} #}<br/>({#{{ app.session.get('storeName') }}#})</span>
                            <span
                                    class=\"fa fa-user\"></span></span>
                        </a>


                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"authDropdown\">
                            <a class=\"dropdown-item\" href=\"{#{{ path('app_change_store_list') }} #}\">Change Store</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{#{{ path('logout' ) }} #}\">Log out</a>
                            {% if is_granted('ROLE_SU') %}
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"{#{{ path('admin_etl_dashboard') }} #}\">Job Dashboard</a>
                                <a class=\"dropdown-item\" href=\"{#{{ path('admin_sales_dashboard') }} #}\">Sales summary</a>
                            {% endif %}
                        </div>


                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{#  {{ path('login') }} #}\">Log in</a>
                    </li>
                {% endif %}
            </ul>



        </div>
    </nav>

</header>
{% endblock %}


<!-- End Header -->

<!-- ======= Sidebar ======= -->
{% block sidebar %}
{% endblock%}

{% block main %}

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
    </div>

    <section class=\"section dashboard\">
        {% block main_section %}
            <div class=\"row\">

            </div>
        {% endblock %}
    </section>

</main><!-- End #main -->
{% endblock %}


<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->

<script src=\"{{ asset('assets/trainingvideos/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/trainingvideos/vendor/swiper/swiper-bundle.min.js') }}\"></script>
<!-- Template Main JS File -->
<script src=\"{{ asset('assets/trainingvideos/js/main.js')}}\"></script>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://www.youtube.com/iframe_api\"></script>

</body>

</html>





", "reissuevoucher/base.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\reissuevoucher\\templates\\reissuevoucher\\base.html.twig");
    }
}
