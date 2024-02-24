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

/* training_videos/base.html.twig */
class __TwigTemplate_2597d4537e281850944354d02171ca4eabed9403b373e05c950c9f9eae438145 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training_videos/base.html.twig"));

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
        // line 467
        echo "

<!-- End Header -->

<!-- ======= Sidebar ======= -->
";
        // line 472
        $this->displayBlock('sidebar', $context, $blocks);
        // line 474
        echo "
";
        // line 475
        $this->displayBlock('main', $context, $blocks);
        // line 492
        echo "

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->

<script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- Template Main JS File -->
<script src=\"";
        // line 501
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

                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"voucherDropdown\">

                        <div class=\"dropdown-header\">Vouchers &amp; Gift Cards</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 73
        echo "\">Voucher Lookup</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 74
        echo "\">Gift Card Lookup</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 75
        echo "\">Send Voucher mail </a>
                        <div class=\"dropdown-divider\"> </div>
                        <div class=\"dropdown-header\">Discount Coupons</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 78
        echo "\">Lookup</a>
                        <!--
                    <div class=\"dropdown-divider\"></div>
                    <div class=\"dropdown-header\">Pre Order Vouchers</div>
                    <a class=\"dropdown-item\" href=\"";
        // line 82
        echo "\">Generate Voucher</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 83
        echo "\">Lookup Voucher</a>
                    -->


                        <div class=\"dropdown-divider\"></div>
                        ";
        // line 88
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IBST_REPORT")) {
            // line 89
            echo "                            <div class=\"dropdown-header\">Voucher & Gift administration</div>

                            <a class=\"dropdown-item\" href=\"";
            // line 91
            echo "\">Link Voucher to Gift  card</a>
                        ";
        }
        // line 93
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 94
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Lookup Change Voucher</a>
                            ";
            // line 96
            echo "                        ";
        }
        // line 97
        echo "

                        ";
        // line 99
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 100
            echo "                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Online Order administration</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 102
            echo "\">Reverse Online Refund</a>
                        ";
        }
        // line 104
        echo "                    </div>
                </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dashDropdown\" data-bs-toggle=\"dropdown\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">Online Orders Admin</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dashDropdown\">
                        <div class=\"dropdown-header\">Dashboards</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 114
        echo "\">Potentially Delayed Orders Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 115
        echo "\">Overdue Orders Dashboard</a>
                        ";
        // line 117
        echo "                        <a class=\"dropdown-item\" href=\"";
        echo "\">Overdue Dropship Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 118
        echo "\">Overdue IBST Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 119
        echo "\">Online Refunds Dashboard</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Manage Orders</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 122
        echo "\">Reverse Online Refund</a>
                        ";
        // line 124
        echo "                        <a class=\"dropdown-item\" href=\"";
        echo "\">Reinstate voided order</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 125
        echo "\">Subtract Delivery from Refund</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 126
        echo "\">Change Refund Type</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 127
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
        // line 139
        echo "\">Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 140
        echo "\">Lookup</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 141
        echo "\">New Request</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 142
        echo "\">Dispatch</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 143
        echo "\">Receive</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 144
        echo "\">Return to
                            Store</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 146
        echo "\">Receive Returned
                            IBST</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 148
        echo "\">Manage Declines</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Shipping</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 151
        echo "\">Print Convergex Waybill</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 152
        echo "\"> Create Manifest</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Bulk IBSTs</div>
                        ";
        // line 155
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BULK_IBST")) {
            // line 156
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Upload Bulk IBST</a>
                        ";
        }
        // line 158
        echo "                        <!---
                    <a class=\"dropdown-item\" href=\"";
        // line 159
        echo "\">Recall
                        Aged Stock</a>---->
                        <a class=\"dropdown-item\" href=\"";
        // line 161
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
        // line 173
        echo "\">Search</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 174
        echo "\">Activation</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Website Orders</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 177
        echo "\">Order Lookup</a>
                        ";
        // line 178
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 179
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Receive
                                Online
                                Parcel</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 182
            echo "\">Log
                                Customer
                                Collection</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 185
            echo "\">Send Customer SMS</a>
                        ";
        }
        // line 187
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 188
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Reset Dropshipping Order</a>
                        ";
        }
        // line 190
        echo "                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Book Clubs</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 192
        echo "\">Search</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Customers</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 195
        echo "\">View Account List</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 196
        echo "\">Lookup Store Receipt</a>
                    </div>
                </li>

                ";
        // line 200
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DROP_SHIP")) {
            // line 201
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dropShippingDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Drop Shipping</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dropShippingDropdown\">
                            <div class=\"dropdown-header\">Drop Shipping</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 207
            echo "\">Dashboard</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 208
            echo "\">Picking Slip Lookup</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 209
            echo "\">Dispatch Online
                                Order</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 212
            echo "\">Create Manifest</a>

                            ";
            // line 214
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROCURE")) {
                // line 215
                echo "                                <div class=\"dropdown-divider\"></div>
                                <div class=\"dropdown-header\">Rohan</div>
                                <a class=\"dropdown-item\" href=\"";
                // line 217
                echo "\">View Legacy Picking
                                    Slip</a>
                                <a class=\"dropdown-item\" href=\"";
                // line 219
                echo "\">Open Gift Orders</a>
                            ";
            }
            // line 221
            echo "                        </div>
                    </li>
                ";
        }
        // line 224
        echo "

                <!-- #QOUTATION TABS -->
                ";
        // line 227
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 228
            echo "
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dropShippingDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Quotation</span>
                        </a>


                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dropShippingDropdown\">
                            <div class=\"dropdown-header\">Quotation</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 237
            echo "\">Create Quotation</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 238
            echo "\">View Quotation</a>

                        </div>
                    </li>

                ";
        }
        // line 244
        echo "

                ";
        // line 246
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IBST_REPORT")) {
            // line 247
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"ibstReportsDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Reports</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"ibstReportsDropdown\">
                            <div class=\"dropdown-header\">IBSTs</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 253
            echo "\">IBST
                                Summary Report</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 255
            echo "\">IBST
                                Manifest Report</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 257
            echo "\">IBST
                                Detail Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Goods in Transit</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 261
            echo "\">Goods In
                                Transit Listing</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 263
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
            // line 276
            echo "\">Drop Shipping
                                Summary Report</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 278
            echo "\">Dispatch Stats
                                Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Foot Count</div>

                            <a class=\"dropdown-item\" href=\"";
            // line 283
            echo "\">Store Foot Count
                                Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <!--";
            // line 293
            echo " -->

                            <div class=\"dropdown-header\">Store  Audit Checklist</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 296
            echo "\">Audit Checklist  Dashboard
                            </a>
                            <a class=\"dropdown-item\" href=\"";
            // line 298
            echo "\">Add new Store audit
                            </a>

                        </div>
                    </li>
                ";
        }
        // line 304
        echo "
                ";
        // line 305
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CMS")) {
            // line 306
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"cmsDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">CMS</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"cmsDropdown\">
                            <div class=\"dropdown-header\">Content Management</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 312
            echo "\">Campaign Upload</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 313
            echo "\">Campaign Management</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 315
            echo "\">Add Product</a>
                        </div>
                    </li>
                ";
        }
        // line 319
        echo "
                <li>
                    <a class=\"nav-link\" href=\"";
        // line 321
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
        // line 336
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
        // line 346
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
        // line 354
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_new");
        echo "\">
                                <span>Form</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li>

                    <a href=\"";
        // line 365
        echo "\"><span class=\"nav-link\" style=\"color:white; font-weight: bold\"><strong>";
        echo "</strong></span></a>
                </li>
            </ul>



            <ul class=\"navbar-nav ms-auto pe-3\">
                <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"Catalogue Search\" data-trigger=\"hover\"
                    data-placement=\"bottom\">
                    <a class=\"nav-link\" href=\"";
        // line 374
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("input_search");
        echo "\">
                        <span class=\"fa fa-search\"></span>
                    </a>
                </li>
                ";
        // line 378
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 378, $this->source); })()), "session", [], "any", false, false, false, 378), "has", ["storeCode"], "method", false, false, false, 378)) {
            // line 379
            echo "                    <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"IBST Cart Items\" data-trigger=\"hover\"
                        data-placement=\"bottom\">
                        <a class=\"nav-link\" href=\"";
            // line 381
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ibst_review", ["store" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 381, $this->source); })()), "session", [], "any", false, false, false, 381), "get", ["storeCode"], "method", false, false, false, 381)]), "html", null, true);
            echo "\">
                            <span class=\"fa fa-shopping-cart\"></span>
                            <sub>
                        <span id=\"shoppingcartQty\"
                              class=\"badge";
            // line 385
            if (((isset($context["cart"]) || array_key_exists("cart", $context)) && (1 === twig_compare(twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 385, $this->source); })())), 0)))) {
                echo " badge-success\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 385, $this->source); })())), "html", null, true);
            } else {
                echo " badge-secondary\">0";
            }
            echo "</span>
                            </sub>
                        </a>
                    </li>
                ";
        }
        // line 390
        echo "
                <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"Help &amp; Reference\" data-trigger=\"hover\"
                    data-placement=\"bottom\">

                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\" id=\"navbarDropdown\">
                        <span class=\"sr-only\">Help &amp; Reference</span><span class=\"fa fa-question-circle\"></span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"navbarDropdown\">
                        <div class=\"dropdown-header\">Reference</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 400
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reference_documents");
        echo "\">Guides &amp; Manuals</a>

                        <a class=\"dropdown-item\" href=\"";
        // line 402
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("employee_list");
        echo "\">Employee list</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 403
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reference_store_list");
        echo "\">Store List</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 404
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reference_contact_list");
        echo "\">Contact List</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 405
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reference_links");
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
        // line 420
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 421
            echo "                    <li class=\"nav-item dropdown\">


                        <a class=\"nav-link  d-flex align-items-center pe-0\" id=\"authDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\"><span
                                        style=\"font-size: smaller\">";
            // line 426
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 426, $this->source); })()), "session", [], "any", false, false, false, 426), "get", ["userName"], "method", false, false, false, 426), "html", null, true);
            echo "<br/>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 426, $this->source); })()), "session", [], "any", false, false, false, 426), "get", ["storeName"], "method", false, false, false, 426), "html", null, true);
            echo ")</span>
                            <span
                                    class=\"fa fa-user\"></span></span>
                        </a>


                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block ps-2\"><span
                                        style=\"font-size: smaller\">";
            // line 434
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 434, $this->source); })()), "session", [], "any", false, false, false, 434), "get", ["userName"], "method", false, false, false, 434), "html", null, true);
            echo "<br/>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 434, $this->source); })()), "session", [], "any", false, false, false, 434), "get", ["storeName"], "method", false, false, false, 434), "html", null, true);
            echo ")</span>
                            <span
                                    class=\"fa fa-user\"></span></span>
                        </a>


                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"authDropdown\">
                            <a class=\"dropdown-item\" href=\"";
            // line 441
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_store_list");
            echo "\">Change Store</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 443
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Log out</a>
                            ";
            // line 444
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SU")) {
                // line 445
                echo "                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"";
                // line 446
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_etl_dashboard");
                echo "\">Job Dashboard</a>
                                <a class=\"dropdown-item\" href=\"";
                // line 447
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_sales_dashboard");
                echo "\">Sales summary</a>
                            ";
            }
            // line 449
            echo "                        </div>


                    </li>
                ";
        } else {
            // line 454
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\" ";
            // line 455
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Log in</a>
                    </li>
                ";
        }
        // line 458
        echo "            </ul>



        </div>
    </nav>

</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 472
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 475
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 476
        echo "
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
    </div>

    <section class=\"section dashboard\">
        ";
        // line 483
        $this->displayBlock('main_section', $context, $blocks);
        // line 488
        echo "    </section>

</main><!-- End #main -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 483
    public function block_main_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_section"));

        // line 484
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
        return "training_videos/base.html.twig";
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
        return array (  945 => 484,  938 => 483,  928 => 488,  926 => 483,  917 => 476,  910 => 475,  898 => 472,  883 => 458,  877 => 455,  874 => 454,  867 => 449,  862 => 447,  858 => 446,  855 => 445,  853 => 444,  849 => 443,  844 => 441,  832 => 434,  819 => 426,  812 => 421,  810 => 420,  792 => 405,  788 => 404,  784 => 403,  780 => 402,  775 => 400,  763 => 390,  750 => 385,  743 => 381,  739 => 379,  737 => 378,  730 => 374,  718 => 365,  704 => 354,  693 => 346,  680 => 336,  663 => 321,  659 => 319,  653 => 315,  649 => 313,  646 => 312,  638 => 306,  636 => 305,  633 => 304,  625 => 298,  621 => 296,  616 => 293,  611 => 283,  604 => 278,  600 => 276,  585 => 263,  581 => 261,  575 => 257,  571 => 255,  567 => 253,  559 => 247,  557 => 246,  553 => 244,  545 => 238,  542 => 237,  531 => 228,  529 => 227,  524 => 224,  519 => 221,  515 => 219,  511 => 217,  507 => 215,  505 => 214,  501 => 212,  496 => 209,  493 => 208,  490 => 207,  482 => 201,  480 => 200,  474 => 196,  471 => 195,  466 => 192,  462 => 190,  457 => 188,  454 => 187,  450 => 185,  445 => 182,  439 => 179,  437 => 178,  434 => 177,  429 => 174,  426 => 173,  412 => 161,  408 => 159,  405 => 158,  400 => 156,  398 => 155,  393 => 152,  390 => 151,  385 => 148,  381 => 146,  377 => 144,  374 => 143,  371 => 142,  368 => 141,  365 => 140,  362 => 139,  348 => 127,  345 => 126,  342 => 125,  338 => 124,  335 => 122,  330 => 119,  327 => 118,  323 => 117,  320 => 115,  317 => 114,  305 => 104,  301 => 102,  297 => 100,  295 => 99,  291 => 97,  288 => 96,  284 => 94,  281 => 93,  277 => 91,  273 => 89,  271 => 88,  264 => 83,  261 => 82,  255 => 78,  250 => 75,  247 => 74,  244 => 73,  220 => 51,  212 => 45,  209 => 44,  206 => 43,  203 => 42,  200 => 41,  197 => 40,  194 => 39,  191 => 38,  189 => 37,  184 => 34,  177 => 33,  167 => 23,  163 => 22,  156 => 18,  152 => 17,  147 => 14,  140 => 13,  127 => 8,  107 => 501,  102 => 499,  98 => 498,  90 => 492,  88 => 475,  85 => 474,  83 => 472,  76 => 467,  74 => 33,  65 => 26,  63 => 13,  55 => 8,  46 => 1,);
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

                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"voucherDropdown\">

                        <div class=\"dropdown-header\">Vouchers &amp; Gift Cards</div>
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
                        {% if is_granted('ROLE_IBST_REPORT') %}
                            <div class=\"dropdown-header\">Voucher & Gift administration</div>

                            <a class=\"dropdown-item\" href=\"{#{{ path('linkVoucherToGift') }} #}\">Link Voucher to Gift  card</a>
                        {% endif %}
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
                    <a class=\"nav-link\" href=\"{{ url('input_search') }}\">
                        <span class=\"fa fa-search\"></span>
                    </a>
                </li>
                {% if app.session.has('storeCode') %}
                    <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"IBST Cart Items\" data-trigger=\"hover\"
                        data-placement=\"bottom\">
                        <a class=\"nav-link\" href=\"{{ path('ibst_review', {'store': app.session.get('storeCode')}) }}\">
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
                        <a class=\"dropdown-item\" href=\"{{ path('reference_documents') }}\">Guides &amp; Manuals</a>

                        <a class=\"dropdown-item\" href=\"{{ url('employee_list') }}\">Employee list</a>
                        <a class=\"dropdown-item\" href=\"{{ path('reference_store_list') }}\">Store List</a>
                        <a class=\"dropdown-item\" href=\"{{ path('reference_contact_list') }}\">Contact List</a>
                        <a class=\"dropdown-item\" href=\"{{ path('reference_links') }}\">Useful Links</a>

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
                                        style=\"font-size: smaller\">{{ app.session.get('userName') }}<br/>({{ app.session.get('storeName') }})</span>
                            <span
                                    class=\"fa fa-user\"></span></span>
                        </a>


                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block ps-2\"><span
                                        style=\"font-size: smaller\">{{ app.session.get('userName') }}<br/>({{ app.session.get('storeName') }})</span>
                            <span
                                    class=\"fa fa-user\"></span></span>
                        </a>


                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"authDropdown\">
                            <a class=\"dropdown-item\" href=\"{{ path('app_change_store_list') }}\">Change Store</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path('logout' ) }}\">Log out</a>
                            {% if is_granted('ROLE_SU') %}
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"{{ path('admin_etl_dashboard') }}\">Job Dashboard</a>
                                <a class=\"dropdown-item\" href=\"{{ path('admin_sales_dashboard') }}\">Sales summary</a>
                            {% endif %}
                        </div>


                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\" {{ path('login') }}\">Log in</a>
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





", "training_videos/base.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\reissuevoucher\\templates\\training_videos\\base.html.twig");
    }
}
