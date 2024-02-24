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
        // line 478
        echo "

<!-- End Header -->

<!-- ======= Sidebar ======= -->
";
        // line 483
        $this->displayBlock('sidebar', $context, $blocks);
        // line 485
        echo "
";
        // line 486
        $this->displayBlock('main', $context, $blocks);
        // line 503
        echo "

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->

<script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- Template Main JS File -->
<script src=\"";
        // line 512
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
        <a class=\"navbar-brand\" href=\" ";
        // line 51
        echo "\">
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
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_new");
        echo "\">Voucher reissue form</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_index");
        echo "\">Reissue status Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 75
        echo "\">Voucher Lookup</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 76
        echo "\">Gift Card Lookup</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 77
        echo "\">Send Voucher mail </a>
                        <div class=\"dropdown-divider\"> </div>
                        <div class=\"dropdown-header\">Discount Coupons</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 80
        echo "\">Lookup</a>
                        <!--
                    <div class=\"dropdown-divider\"></div>
                    <div class=\"dropdown-header\">Pre Order Vouchers</div>
                    <a class=\"dropdown-item\" href=\"";
        // line 84
        echo "\">Generate Voucher</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 85
        echo "\">Lookup Voucher</a>
                    -->


                        <div class=\"dropdown-divider\"></div>
                        ";
        // line 90
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IBST_REPORT")) {
            // line 91
            echo "                            <div class=\"dropdown-header\">Voucher & Gift administration</div>

                            <a class=\"dropdown-item\" href=\"";
            // line 93
            echo "\">Link Voucher to Gift  card</a>
                        ";
        }
        // line 95
        echo "
                        ";
        // line 97
        echo "                        ";
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            echo " <!--Shoud be removed-->
                            <a class=\"dropdown-item\" href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_index");
            echo " \">Voucher Authorized Dashboard</a>
                        ";
        }
        // line 100
        echo "                        ";
        // line 101
        echo "


                        ";
        // line 104
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 105
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Lookup Change Voucher</a>
                            ";
            // line 107
            echo "                        ";
        }
        // line 108
        echo "

                        ";
        // line 110
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 111
            echo "                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Online Order administration</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 113
            echo "\">Reverse Online Refund</a>
                        ";
        }
        // line 115
        echo "                    </div>
                </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dashDropdown\" data-bs-toggle=\"dropdown\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">Online Orders Admin</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dashDropdown\">
                        <div class=\"dropdown-header\">Dashboards</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 125
        echo "\">Potentially Delayed Orders Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 126
        echo "\">Overdue Orders Dashboard</a>
                        ";
        // line 128
        echo "                        <a class=\"dropdown-item\" href=\"";
        echo "\">Overdue Dropship Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 129
        echo "\">Overdue IBST Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 130
        echo "\">Online Refunds Dashboard</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Manage Orders</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 133
        echo "\">Reverse Online Refund</a>
                        ";
        // line 135
        echo "                        <a class=\"dropdown-item\" href=\"";
        echo "\">Reinstate voided order</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 136
        echo "\">Subtract Delivery from Refund</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 137
        echo "\">Change Refund Type</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 138
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
        // line 150
        echo "\">Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 151
        echo "\">Lookup</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 152
        echo "\">New Request</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 153
        echo "\">Dispatch</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 154
        echo "\">Receive</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 155
        echo "\">Return to
                            Store</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 157
        echo "\">Receive Returned
                            IBST</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 159
        echo "\">Manage Declines</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Shipping</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 162
        echo "\">Print Convergex Waybill</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 163
        echo "\"> Create Manifest</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Bulk IBSTs</div>
                        ";
        // line 166
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BULK_IBST")) {
            // line 167
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Upload Bulk IBST</a>
                        ";
        }
        // line 169
        echo "                        <!---
                    <a class=\"dropdown-item\" href=\"";
        // line 170
        echo "\">Recall
                        Aged Stock</a>---->
                        <a class=\"dropdown-item\" href=\"";
        // line 172
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
        // line 184
        echo "\">Search</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 185
        echo "\">Activation</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Website Orders</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 188
        echo "\">Order Lookup</a>
                        ";
        // line 189
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 190
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Receive
                                Online
                                Parcel</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 193
            echo "\">Log
                                Customer
                                Collection</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 196
            echo "\">Send Customer SMS</a>
                        ";
        }
        // line 198
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 199
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Reset Dropshipping Order</a>
                        ";
        }
        // line 201
        echo "                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Book Clubs</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 203
        echo "\">Search</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Customers</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 206
        echo "\">View Account List</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 207
        echo "\">Lookup Store Receipt</a>
                    </div>
                </li>

                ";
        // line 211
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DROP_SHIP")) {
            // line 212
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dropShippingDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Drop Shipping</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dropShippingDropdown\">
                            <div class=\"dropdown-header\">Drop Shipping</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 218
            echo "\">Dashboard</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 219
            echo "\">Picking Slip Lookup</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 220
            echo "\">Dispatch Online
                                Order</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 223
            echo "\">Create Manifest</a>

                            ";
            // line 225
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROCURE")) {
                // line 226
                echo "                                <div class=\"dropdown-divider\"></div>
                                <div class=\"dropdown-header\">Rohan</div>
                                <a class=\"dropdown-item\" href=\"";
                // line 228
                echo "\">View Legacy Picking
                                    Slip</a>
                                <a class=\"dropdown-item\" href=\"";
                // line 230
                echo "\">Open Gift Orders</a>
                            ";
            }
            // line 232
            echo "                        </div>
                    </li>
                ";
        }
        // line 235
        echo "

                <!-- #QOUTATION TABS -->
                ";
        // line 238
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 239
            echo "
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dropShippingDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Quotation</span>
                        </a>


                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dropShippingDropdown\">
                            <div class=\"dropdown-header\">Quotation</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 248
            echo "\">Create Quotation</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 249
            echo "\">View Quotation</a>

                        </div>
                    </li>

                ";
        }
        // line 255
        echo "

                ";
        // line 257
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IBST_REPORT")) {
            // line 258
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"ibstReportsDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Reports</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"ibstReportsDropdown\">
                            <div class=\"dropdown-header\">IBSTs</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 264
            echo "\">IBST
                                Summary Report</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 266
            echo "\">IBST
                                Manifest Report</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 268
            echo "\">IBST
                                Detail Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Goods in Transit</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 272
            echo "\">Goods In
                                Transit Listing</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 274
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
            // line 287
            echo "\">Drop Shipping
                                Summary Report</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 289
            echo "\">Dispatch Stats
                                Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Foot Count</div>

                            <a class=\"dropdown-item\" href=\"";
            // line 294
            echo "\">Store Foot Count
                                Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <!--";
            // line 304
            echo " -->

                            <div class=\"dropdown-header\">Store  Audit Checklist</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 307
            echo "\">Audit Checklist  Dashboard
                            </a>
                            <a class=\"dropdown-item\" href=\"";
            // line 309
            echo "\">Add new Store audit
                            </a>

                        </div>
                    </li>
                ";
        }
        // line 315
        echo "
                ";
        // line 316
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CMS")) {
            // line 317
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"cmsDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">CMS</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"cmsDropdown\">
                            <div class=\"dropdown-header\">Content Management</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 323
            echo "\">Campaign Upload</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 324
            echo "\">Campaign Management</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 326
            echo "\">Add Product</a>
                        </div>
                    </li>
                ";
        }
        // line 330
        echo "
                <li>
                    <a class=\"nav-link\" href=\"";
        // line 332
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
        // line 347
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_index");
        echo "\">
                                <span>Show video</span>
                            </a>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 357
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_app_category_new");
        echo "\">
                                <span>Add Actergory</span>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 365
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_new");
        echo "\">
                                <span>Form</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li>

                    <a href=\"";
        // line 376
        echo "\"><span class=\"nav-link\" style=\"color:white; font-weight: bold\"><strong>";
        echo "</strong></span></a>
                </li>
            </ul>



            <ul class=\"navbar-nav ms-auto pe-3\">
                <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"Catalogue Search\" data-trigger=\"hover\"
                    data-placement=\"bottom\">
                    <a class=\"nav-link\" href=\"";
        // line 385
        echo "\">
                        <span class=\"fa fa-search\"></span>
                    </a>
                </li>
                ";
        // line 389
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 389, $this->source); })()), "session", [], "any", false, false, false, 389), "has", ["storeCode"], "method", false, false, false, 389)) {
            // line 390
            echo "                    <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"IBST Cart Items\" data-trigger=\"hover\"
                        data-placement=\"bottom\">
                        <a class=\"nav-link\" href=\"";
            // line 392
            echo "\">
                            <span class=\"fa fa-shopping-cart\"></span>
                            <sub>
                        <span id=\"shoppingcartQty\"
                              class=\"badge";
            // line 396
            if (((isset($context["cart"]) || array_key_exists("cart", $context)) && (1 === twig_compare(twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 396, $this->source); })())), 0)))) {
                echo " badge-success\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 396, $this->source); })())), "html", null, true);
            } else {
                echo " badge-secondary\">0";
            }
            echo "</span>
                            </sub>
                        </a>
                    </li>
                ";
        }
        // line 401
        echo "
                <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"Help &amp; Reference\" data-trigger=\"hover\"
                    data-placement=\"bottom\">

                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\" id=\"navbarDropdown\">
                        <span class=\"sr-only\">Help &amp; Reference</span><span class=\"fa fa-question-circle\"></span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"navbarDropdown\">
                        <div class=\"dropdown-header\">Reference</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 411
        echo "\">Guides &amp; Manuals</a>

                        <a class=\"dropdown-item\" href=\"";
        // line 413
        echo "\">Employee list</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 414
        echo "\">Store List</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 415
        echo "\">Contact List</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 416
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
        // line 431
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 432
            echo "                    <li class=\"nav-item dropdown\">


                        <a class=\"nav-link  d-flex align-items-center pe-0\" id=\"authDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\"><span
                                        style=\"font-size: smaller\">";
            // line 437
            echo "<br/>(";
            echo ")</span>
                            <span
                                    class=\"fa fa-user\"></span></span>
                        </a>


                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block ps-2\"><span
                                        style=\"font-size: smaller\">";
            // line 445
            echo "<br/>(";
            echo ")</span>
                            <span
                                    class=\"fa fa-user\"></span></span>
                        </a>


                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"authDropdown\">
                            <a class=\"dropdown-item\" href=\"";
            // line 452
            echo "\">Change Store</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 454
            echo "\">Log out</a>
                            ";
            // line 455
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SU")) {
                // line 456
                echo "                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"";
                // line 457
                echo "\">Job Dashboard</a>
                                <a class=\"dropdown-item\" href=\"";
                // line 458
                echo "\">Sales summary</a>
                            ";
            }
            // line 460
            echo "                        </div>


                    </li>
                ";
        } else {
            // line 465
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 466
            echo "\">Log in</a>
                    </li>
                ";
        }
        // line 469
        echo "            </ul>



        </div>
    </nav>

</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 483
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 486
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 487
        echo "
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
    </div>

    <section class=\"section dashboard\">
        ";
        // line 494
        $this->displayBlock('main_section', $context, $blocks);
        // line 499
        echo "    </section>

</main><!-- End #main -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 494
    public function block_main_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_section"));

        // line 495
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
        return array (  956 => 495,  949 => 494,  939 => 499,  937 => 494,  928 => 487,  921 => 486,  909 => 483,  894 => 469,  889 => 466,  886 => 465,  879 => 460,  875 => 458,  872 => 457,  869 => 456,  867 => 455,  864 => 454,  860 => 452,  850 => 445,  839 => 437,  832 => 432,  830 => 431,  813 => 416,  810 => 415,  807 => 414,  804 => 413,  800 => 411,  788 => 401,  775 => 396,  769 => 392,  765 => 390,  763 => 389,  757 => 385,  745 => 376,  731 => 365,  720 => 357,  707 => 347,  690 => 332,  686 => 330,  680 => 326,  676 => 324,  673 => 323,  665 => 317,  663 => 316,  660 => 315,  652 => 309,  648 => 307,  643 => 304,  638 => 294,  631 => 289,  627 => 287,  612 => 274,  608 => 272,  602 => 268,  598 => 266,  594 => 264,  586 => 258,  584 => 257,  580 => 255,  572 => 249,  569 => 248,  558 => 239,  556 => 238,  551 => 235,  546 => 232,  542 => 230,  538 => 228,  534 => 226,  532 => 225,  528 => 223,  523 => 220,  520 => 219,  517 => 218,  509 => 212,  507 => 211,  501 => 207,  498 => 206,  493 => 203,  489 => 201,  484 => 199,  481 => 198,  477 => 196,  472 => 193,  466 => 190,  464 => 189,  461 => 188,  456 => 185,  453 => 184,  439 => 172,  435 => 170,  432 => 169,  427 => 167,  425 => 166,  420 => 163,  417 => 162,  412 => 159,  408 => 157,  404 => 155,  401 => 154,  398 => 153,  395 => 152,  392 => 151,  389 => 150,  375 => 138,  372 => 137,  369 => 136,  365 => 135,  362 => 133,  357 => 130,  354 => 129,  350 => 128,  347 => 126,  344 => 125,  332 => 115,  328 => 113,  324 => 111,  322 => 110,  318 => 108,  315 => 107,  311 => 105,  309 => 104,  304 => 101,  302 => 100,  297 => 98,  292 => 97,  289 => 95,  285 => 93,  281 => 91,  279 => 90,  272 => 85,  269 => 84,  263 => 80,  258 => 77,  255 => 76,  252 => 75,  248 => 74,  244 => 73,  220 => 51,  212 => 45,  209 => 44,  206 => 43,  203 => 42,  200 => 41,  197 => 40,  194 => 39,  191 => 38,  189 => 37,  184 => 34,  177 => 33,  167 => 23,  163 => 22,  156 => 18,  152 => 17,  147 => 14,  140 => 13,  127 => 8,  107 => 512,  102 => 510,  98 => 509,  90 => 503,  88 => 486,  85 => 485,  83 => 483,  76 => 478,  74 => 33,  65 => 26,  63 => 13,  55 => 8,  46 => 1,);
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
        <a class=\"navbar-brand\" href=\" {#{{ path('home') }} #}\">
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
                        <a class=\"dropdown-item\" href=\"{#{{ path('gift_card_lookup') }}#}\">Send Voucher mail </a>
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
                        {% if not is_granted('ROLE_ONLINE_ADMIN') %} <!--Shoud be removed-->
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
                        <a class=\"dropdown-item\" href=\"{# path('ReverseOnlineRefund') }} #}\">Reverse Online Refund</a>
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
                        <a class=\"dropdown-item\" href=\"{#{{ path('ibst_recall_stock',{'storeCode':'HW'}) }}#}\">Recall
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
                            <a class=\"dropdown-item\" href=\"{#{{ path('customer_website_order_tracking_receive') }}#}\">Receive
                                Online
                                Parcel</a>
                            <a class=\"dropdown-item\" href=\"{#{{ path('customer_website_order_tracking_collect') }} #}\">Log
                                Customer
                                Collection</a>
                            <a class=\"dropdown-item\" href=\"{#{{ path('customer_send_sms') }}#}\">Send Customer SMS</a>
                        {% endif %}
                        {% if is_granted('ROLE_ONLINE_ADMIN') %}
                            <a class=\"dropdown-item\" href=\"{#{{ path('LookUpDropshipOrder') }}#}\">Reset Dropshipping Order</a>
                        {% endif %}
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Book Clubs</div>
                        <a class=\"dropdown-item\" href=\"{#{{ path('customer_book_club_search') }}#}\">Search</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Customers</div>
                        <a class=\"dropdown-item\" href=\"{#{{ path('customer_debtors') }}#}\">View Account List</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('sales_store_receipt_lookup') }}#}\">Lookup Store Receipt</a>
                    </div>
                </li>

                {% if is_granted('ROLE_DROP_SHIP') %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dropShippingDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Drop Shipping</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dropShippingDropdown\">
                            <div class=\"dropdown-header\">Drop Shipping</div>
                            <a class=\"dropdown-item\" href=\"{#{{ path('drop_shipping_store_dashboard') }}#}\">Dashboard</a>
                            <a class=\"dropdown-item\" href=\"{#{{ path('drop_shipping_search_get') }}#}\">Picking Slip Lookup</a>
                            <a class=\"dropdown-item\" href=\"{#{{ path('drop_shipping_online_dispatch_get') }}#}\">Dispatch Online
                                Order</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{#{{ path('drop_shipping_show_manifest') }}#}\">Create Manifest</a>

                            {% if is_granted('ROLE_PROCURE') %}
                                <div class=\"dropdown-divider\"></div>
                                <div class=\"dropdown-header\">Rohan</div>
                                <a class=\"dropdown-item\" href=\"{#{{ path('herakles_pslip_get') }}#}\">View Legacy Picking
                                    Slip</a>
                                <a class=\"dropdown-item\" href=\"{#{{ path('open_gift_report') }}#}\">Open Gift Orders</a>
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
                            <a class=\"dropdown-item\" href=\"{#{{ path('quotation') }}#}\">Create Quotation</a>
                            <a class=\"dropdown-item\" href=\"{#{{ path('view_quotation') }}#}\">View Quotation</a>

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
                            <a class=\"dropdown-item\" href=\"{#{{ url('ibst_reports',{'type':'summary'}) }}#}\">IBST
                                Summary Report</a>
                            <a class=\"dropdown-item\" href=\"{#{{ url('ibst_reports',{'type':'manifest'}) }}#}\">IBST
                                Manifest Report</a>
                            <a class=\"dropdown-item\" href=\"{#{{ url('ibst_reports',{'type':'detail'}) }}#}\">IBST
                                Detail Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Goods in Transit</div>
                            <a class=\"dropdown-item\" href=\"{#{{ url('ibst_reports',{'type':'git'}) }}#}\">Goods In
                                Transit Listing</a>
                            <a class=\"dropdown-item\" href=\"{#{{ url('ibst_reports',{'type':'git-summary'}) }}#}\">G-I-T
                                Summary Report</a>

                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Month End Report</div>
                            <a class=\"dropdown-item\" href=\"/stock-return\">Returns Entry Form</a>
                            <a class=\"dropdown-item\" href=\"/stock-receive\">Receiving Entry Form</a>
                            <a class=\"dropdown-item\" href=\"/get/batches\"> Receiving and Returns Dashboard

                            </a>

                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Online Reports</div>
                            <a class=\"dropdown-item\" href=\"{#{{ url('ibst_reports',{'type':'sales'}) }}#}\">Drop Shipping
                                Summary Report</a>
                            <a class=\"dropdown-item\" href=\"{#{{ url('online_stats_report') }}#}\">Dispatch Stats
                                Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Foot Count</div>

                            <a class=\"dropdown-item\" href=\"{#{{ url('footcount') }}#}\">Store Foot Count
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
                            <a class=\"dropdown-item\" href=\"{#{{ url('StoreChecklist') }}#}\">Audit Checklist  Dashboard
                            </a>
                            <a class=\"dropdown-item\" href=\"{#{{ url('AddAuditdate') }}#}\">Add new Store audit
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
                            <a class=\"dropdown-item\" href=\"{#{{ path('cms_campaign_upload') }}#}\">Campaign Upload</a>
                            <a class=\"dropdown-item\" href=\"{#{{ path('cms_campaign_list') }}#}\">Campaign Management</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{#{{ path('cms_add_product') }}#}\">Add Product</a>
                        </div>
                    </li>
                {% endif %}

                <li>
                    <a class=\"nav-link\" href=\"{#{{ url('whats_new') }}#}\">Whats New</a>
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
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_video_index') }}\">
                                <span>Show video</span>
                            </a>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('video_app_category_new') }}\">
                                <span>Add Actergory</span>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_video_new') }}\">
                                <span>Form</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li>

                    <a href=\"{#{{ url('whats_new') }}#}\"><span class=\"nav-link\" style=\"color:white; font-weight: bold\"><strong>{# {{ title }} #}</strong></span></a>
                </li>
            </ul>



            <ul class=\"navbar-nav ms-auto pe-3\">
                <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"Catalogue Search\" data-trigger=\"hover\"
                    data-placement=\"bottom\">
                    <a class=\"nav-link\" href=\"{#  {{ url('input_search') }}#}\">
                        <span class=\"fa fa-search\"></span>
                    </a>
                </li>
                {% if app.session.has('storeCode') %}
                    <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"IBST Cart Items\" data-trigger=\"hover\"
                        data-placement=\"bottom\">
                        <a class=\"nav-link\" href=\"{#{{ path('ibst_review', {'store': app.session.get('storeCode')}) }}#}\">
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
                        <a class=\"dropdown-item\" href=\"{#{{ path('reference_documents') }}#}\">Guides &amp; Manuals</a>

                        <a class=\"dropdown-item\" href=\"{#{{ url('employee_list') }}#}\">Employee list</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('reference_store_list') }}#}\">Store List</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('reference_contact_list') }}#}\">Contact List</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('reference_links') }}#}\">Useful Links</a>

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
                                        style=\"font-size: smaller\">{#{{ app.session.get('userName') }}#}<br/>({#{{ app.session.get('storeName') }}#})</span>
                            <span
                                    class=\"fa fa-user\"></span></span>
                        </a>


                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block ps-2\"><span
                                        style=\"font-size: smaller\">{#{{ app.session.get('userName') }}#}<br/>({#{{ app.session.get('storeName') }}#})</span>
                            <span
                                    class=\"fa fa-user\"></span></span>
                        </a>


                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"authDropdown\">
                            <a class=\"dropdown-item\" href=\"{#{{ path('app_change_store_list') }}#}\">Change Store</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{#{{ path('logout' ) }}#}\">Log out</a>
                            {% if is_granted('ROLE_SU') %}
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"{#{{ path('admin_etl_dashboard') }}#}\">Job Dashboard</a>
                                <a class=\"dropdown-item\" href=\"{#{{ path('admin_sales_dashboard') }}#}\">Sales summary</a>
                            {% endif %}
                        </div>


                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{#  {{ path('login') }}#}\">Log in</a>
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
