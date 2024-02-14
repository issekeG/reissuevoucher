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
        // line 24
        echo "

</head>

<body>

<!-- ======= Header ======= -->
";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 458
        echo "

<!-- End Header -->

<!-- ======= Sidebar ======= -->
";
        // line 463
        $this->displayBlock('sidebar', $context, $blocks);
        // line 465
        echo "
";
        // line 466
        $this->displayBlock('main', $context, $blocks);
        // line 483
        echo "

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->

<script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- Template Main JS File -->
<script src=\"";
        // line 492
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

        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/trainingvideos/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 32
        echo "<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    ";
        // line 40
        echo "<!-- End Logo -->



    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
        <a class=\"navbar-brand\" href=\"";
        // line 45
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
        // line 67
        echo "\">Voucher Lookup</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 68
        echo "\">Gift Card Lookup</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 69
        echo "\">Send Voucher mail </a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Discount Coupons</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 72
        echo "\">Lookup</a>
                        <!--
                    <div class=\"dropdown-divider\"></div>
                    <div class=\"dropdown-header\">Pre Order Vouchers</div>
                    <a class=\"dropdown-item\" href=\"";
        // line 76
        echo "\">Generate Voucher</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 77
        echo "\">Lookup Voucher</a>
                    -->


                        <div class=\"dropdown-divider\"></div>
                        ";
        // line 82
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IBST_REPORT")) {
            // line 83
            echo "                            <div class=\"dropdown-header\">Voucher & Gift administration</div>

                            <a class=\"dropdown-item\" href=\"";
            // line 85
            echo "\">Link Voucher to Gift  card</a>
                        ";
        }
        // line 87
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 88
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Lookup Change Voucher</a>
                            ";
            // line 90
            echo "                        ";
        }
        // line 91
        echo "

                        ";
        // line 93
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 94
            echo "                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Online Order administration</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 96
            echo "\">Reverse Online Refund</a>
                        ";
        }
        // line 98
        echo "                    </div>
                </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dashDropdown\" data-bs-toggle=\"dropdown\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">Online Orders Admin</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dashDropdown\">
                        <div class=\"dropdown-header\">Dashboards</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 108
        echo "\">Potentially Delayed Orders Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 109
        echo "\">Overdue Orders Dashboard</a>
                        ";
        // line 111
        echo "                        <a class=\"dropdown-item\" href=\"";
        echo "\">Overdue Dropship Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 112
        echo "\">Overdue IBST Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 113
        echo "\">Online Refunds Dashboard</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Manage Orders</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 116
        echo "\">Reverse Online Refund</a>
                        ";
        // line 118
        echo "                        <a class=\"dropdown-item\" href=\"";
        echo "\">Reinstate voided order</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 119
        echo "\">Subtract Delivery from Refund</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 120
        echo "\">Change Refund Type</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 121
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
        // line 133
        echo "\">Dashboard</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 134
        echo "\">Lookup</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 135
        echo "\">New Request</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 136
        echo "\">Dispatch</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 137
        echo "\">Receive</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 138
        echo "\">Return to
                            Store</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 140
        echo "\">Receive Returned
                            IBST</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 142
        echo "\">Manage Declines</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Shipping</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 145
        echo "\">Print Convergex Waybill</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 146
        echo "\">Create Manifest</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Bulk IBSTs</div>
                        ";
        // line 149
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BULK_IBST")) {
            // line 150
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Upload Bulk IBST</a>
                        ";
        }
        // line 152
        echo "                        <!---
                    <a class=\"dropdown-item\" href=\"";
        // line 153
        echo "\">Recall
                        Aged Stock</a>---->
                        <a class=\"dropdown-item\" href=\"";
        // line 155
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
        // line 167
        echo "\">Search</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 168
        echo "\">Activation</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Website Orders</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 171
        echo "\">Order Lookup</a>
                        ";
        // line 172
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 173
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Receive
                                Online
                                Parcel</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 176
            echo "\">Log
                                Customer
                                Collection</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 179
            echo "\">Send Customer SMS</a>
                        ";
        }
        // line 181
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 182
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo "\">Reset Dropshipping Order</a>
                        ";
        }
        // line 184
        echo "                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Book Clubs</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 186
        echo "\">Search</a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Customers</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 189
        echo "\">View Account List</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 190
        echo "\">Lookup Store Receipt</a>
                    </div>
                </li>

                ";
        // line 194
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DROP_SHIP")) {
            // line 195
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dropShippingDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Drop Shipping</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dropShippingDropdown\">
                            <div class=\"dropdown-header\">Drop Shipping</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 201
            echo "\">Dashboard</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 202
            echo "\">Picking Slip Lookup</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 203
            echo "\">Dispatch Online
                                Order</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 206
            echo "\">Create Manifest</a>

                            ";
            // line 208
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROCURE")) {
                // line 209
                echo "                                <div class=\"dropdown-divider\"></div>
                                <div class=\"dropdown-header\">Rohan</div>
                                <a class=\"dropdown-item\" href=\"";
                // line 211
                echo "\">View Legacy Picking
                                    Slip</a>
                                <a class=\"dropdown-item\" href=\"";
                // line 213
                echo "\">Open Gift Orders</a>
                            ";
            }
            // line 215
            echo "                        </div>
                    </li>
                ";
        }
        // line 218
        echo "

                <!-- #QOUTATION TABS -->
                ";
        // line 221
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 222
            echo "
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dropShippingDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Quotation</span>
                        </a>


                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dropShippingDropdown\">
                            <div class=\"dropdown-header\">Quotation</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 231
            echo "\">Create Quotation</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 232
            echo "\">View Quotation</a>

                        </div>
                    </li>

                ";
        }
        // line 238
        echo "

                ";
        // line 240
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IBST_REPORT")) {
            // line 241
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"ibstReportsDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Reports</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"ibstReportsDropdown\">
                            <div class=\"dropdown-header\">IBSTs</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 247
            echo "\">IBST
                                Summary Report</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 249
            echo "\">IBST
                                Manifest Report</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 251
            echo "\">IBST
                                Detail Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Goods in Transit</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 255
            echo "\">Goods In
                                Transit Listing</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 257
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
            // line 270
            echo "\">Drop Shipping
                                Summary Report</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 272
            echo "\">Dispatch Stats
                                Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Foot Count</div>

                            <a class=\"dropdown-item\" href=\"";
            // line 277
            echo "\">Store Foot Count
                                Report</a>
                            <div class=\"dropdown-divider\"></div>
                            <!--";
            // line 287
            echo " -->

                            <div class=\"dropdown-header\">Store  Audit Checklist</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 290
            echo "\">Audit Checklist  Dashboard
                            </a>
                            <a class=\"dropdown-item\" href=\"";
            // line 292
            echo "\">Add new Store audit
                            </a>

                        </div>
                    </li>
                ";
        }
        // line 298
        echo "
                ";
        // line 299
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CMS")) {
            // line 300
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"cmsDropdown\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">CMS</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"cmsDropdown\">
                            <div class=\"dropdown-header\">Content Management</div>
                            <a class=\"dropdown-item\" href=\"";
            // line 306
            echo "\">Campaign Upload</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 307
            echo "\">Campaign Management</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 309
            echo "\">Add Product</a>
                        </div>
                    </li>
                ";
        }
        // line 313
        echo "
                <li>
                    <a class=\"nav-link\" href=\"";
        // line 315
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
        // line 330
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
        // line 340
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
        // line 348
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_new");
        echo "\">
                                <span>Form</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li>

                    <a href=\"";
        // line 359
        echo "\"><span class=\"nav-link\" style=\"color:white; font-weight: bold\"><strong>";
        echo "</strong></span></a>
                </li>
            </ul>



            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"Catalogue Search\" data-trigger=\"hover\"
                    data-placement=\"bottom\">
                    <a class=\"nav-link\" href=\"";
        // line 368
        echo "\">
                        <span class=\"fa fa-search\"></span>
                    </a>
                </li>
                ";
        // line 372
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 372, $this->source); })()), "session", [], "any", false, false, false, 372), "has", ["storeCode"], "method", false, false, false, 372)) {
            // line 373
            echo "                    <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"IBST Cart Items\" data-trigger=\"hover\"
                        data-placement=\"bottom\">
                        <a class=\"nav-link\" href=\"";
            // line 375
            echo "\">
                            <span class=\"fa fa-shopping-cart\"></span>
                            <sub>
                        <span id=\"shoppingcartQty\"
                              class=\"badge";
            // line 379
            if (((isset($context["cart"]) || array_key_exists("cart", $context)) && (1 === twig_compare(twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 379, $this->source); })())), 0)))) {
                echo " badge-success\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 379, $this->source); })())), "html", null, true);
            } else {
                echo " badge-secondary\">0";
            }
            echo "</span>
                            </sub>
                        </a>
                    </li>
                ";
        }
        // line 384
        echo "
                <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"Help &amp; Reference\" data-trigger=\"hover\"
                    data-placement=\"bottom\">

                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\" id=\"navbarDropdown\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">Help &amp; Reference</span><span class=\"fa fa-question-circle\"></span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"navbarDropdown\">
                        <div class=\"dropdown-header\">Reference</div>
                        <a class=\"dropdown-item\" href=\"";
        // line 394
        echo "\">Guides &amp; Manuals</a>

                        <a class=\"dropdown-item\" href=\"";
        // line 396
        echo "\">Employee list</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 397
        echo "\">Store List</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 398
        echo "\">Contact List</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 399
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
        // line 414
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 415
            echo "                    <li class=\"nav-item dropdown\">


                        <a class=\"nav-link  d-flex align-items-center pe-0\" id=\"authDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\"><span
                                        style=\"font-size: smaller\">";
            // line 420
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 420, $this->source); })()), "session", [], "any", false, false, false, 420), "get", ["userName"], "method", false, false, false, 420), "html", null, true);
            echo "<br/>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 420, $this->source); })()), "session", [], "any", false, false, false, 420), "get", ["storeName"], "method", false, false, false, 420), "html", null, true);
            echo ")</span>
                            <span
                                    class=\"fa fa-user\"></span></span>
                        </a>


                        <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <span class=\"d-none d-md-block ps-2\"><span
                                        style=\"font-size: smaller\">";
            // line 428
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 428, $this->source); })()), "session", [], "any", false, false, false, 428), "get", ["userName"], "method", false, false, false, 428), "html", null, true);
            echo "<br/>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 428, $this->source); })()), "session", [], "any", false, false, false, 428), "get", ["storeName"], "method", false, false, false, 428), "html", null, true);
            echo ")</span>
                            <span
                                    class=\"fa fa-user\"></span></span>
                        </a>


                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"authDropdown\">
                            <a class=\"dropdown-item\" href=\"";
            // line 435
            echo "\">Change Store</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 437
            echo "\">Log out</a>
                            ";
            // line 438
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SU")) {
                // line 439
                echo "                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"";
                // line 440
                echo "\">Job Dashboard</a>
                                <a class=\"dropdown-item\" href=\"";
                // line 441
                echo "\">Sales summary</a>
                            ";
            }
            // line 443
            echo "                        </div>


                    </li>
                ";
        } else {
            // line 448
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 449
            echo "\">Log in</a>
                    </li>
                ";
        }
        // line 452
        echo "            </ul>
        </div>
    </nav>

</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 463
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 466
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 467
        echo "
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
    </div>

    <section class=\"section dashboard\">
        ";
        // line 474
        $this->displayBlock('main_section', $context, $blocks);
        // line 479
        echo "    </section>

</main><!-- End #main -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 474
    public function block_main_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_section"));

        // line 475
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
        return array (  903 => 475,  896 => 474,  886 => 479,  884 => 474,  875 => 467,  868 => 466,  856 => 463,  844 => 452,  839 => 449,  836 => 448,  829 => 443,  825 => 441,  822 => 440,  819 => 439,  817 => 438,  814 => 437,  810 => 435,  798 => 428,  785 => 420,  778 => 415,  776 => 414,  759 => 399,  756 => 398,  753 => 397,  750 => 396,  746 => 394,  734 => 384,  721 => 379,  715 => 375,  711 => 373,  709 => 372,  703 => 368,  691 => 359,  677 => 348,  666 => 340,  653 => 330,  636 => 315,  632 => 313,  626 => 309,  622 => 307,  619 => 306,  611 => 300,  609 => 299,  606 => 298,  598 => 292,  594 => 290,  589 => 287,  584 => 277,  577 => 272,  573 => 270,  558 => 257,  554 => 255,  548 => 251,  544 => 249,  540 => 247,  532 => 241,  530 => 240,  526 => 238,  518 => 232,  515 => 231,  504 => 222,  502 => 221,  497 => 218,  492 => 215,  488 => 213,  484 => 211,  480 => 209,  478 => 208,  474 => 206,  469 => 203,  466 => 202,  463 => 201,  455 => 195,  453 => 194,  447 => 190,  444 => 189,  439 => 186,  435 => 184,  430 => 182,  427 => 181,  423 => 179,  418 => 176,  412 => 173,  410 => 172,  407 => 171,  402 => 168,  399 => 167,  385 => 155,  381 => 153,  378 => 152,  373 => 150,  371 => 149,  366 => 146,  363 => 145,  358 => 142,  354 => 140,  350 => 138,  347 => 137,  344 => 136,  341 => 135,  338 => 134,  335 => 133,  321 => 121,  318 => 120,  315 => 119,  311 => 118,  308 => 116,  303 => 113,  300 => 112,  296 => 111,  293 => 109,  290 => 108,  278 => 98,  274 => 96,  270 => 94,  268 => 93,  264 => 91,  261 => 90,  257 => 88,  254 => 87,  250 => 85,  246 => 83,  244 => 82,  237 => 77,  234 => 76,  228 => 72,  223 => 69,  220 => 68,  217 => 67,  193 => 45,  186 => 40,  182 => 32,  175 => 31,  165 => 21,  161 => 20,  156 => 18,  152 => 17,  147 => 14,  140 => 13,  127 => 8,  107 => 492,  102 => 490,  98 => 489,  90 => 483,  88 => 466,  85 => 465,  83 => 463,  76 => 458,  74 => 31,  65 => 24,  63 => 13,  55 => 8,  46 => 1,);
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

        <link href=\"{{ asset(\"assets/trainingvideos/css/style.css\") }}\" rel=\"stylesheet\">
        <link href=\"{{  asset ('assets/trainingvideos/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

    {% endblock %}


</head>

<body>

<!-- ======= Header ======= -->
{% block header %}
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    {# <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"\" class=\"logo d-flex align-items-center\">
            <span class=\"d-none d-lg-block ms-2\">Chiron</span>
        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>

    </div> #}<!-- End Logo -->



    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
        <a class=\"navbar-brand\" href=\"{# {{ path('home') }} #}\">
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
                        <a class=\"dropdown-item\" href=\"{#{{ path('gift_card_lookup') }}#}\">Gift Card Lookup</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('gift_card_lookup') }}#}\">Send Voucher mail </a>
                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Discount Coupons</div>
                        <a class=\"dropdown-item\" href=\"{#{{ path('coupon_lookup') }}#}\">Lookup</a>
                        <!--
                    <div class=\"dropdown-divider\"></div>
                    <div class=\"dropdown-header\">Pre Order Vouchers</div>
                    <a class=\"dropdown-item\" href=\"{#{{ path('preorder_promotion_list') }}#}\">Generate Voucher</a>
                    <a class=\"dropdown-item\" href=\"{#{{ path('preorder_promotion_lookup') }}#}\">Lookup Voucher</a>
                    -->


                        <div class=\"dropdown-divider\"></div>
                        {% if is_granted('ROLE_IBST_REPORT') %}
                            <div class=\"dropdown-header\">Voucher & Gift administration</div>

                            <a class=\"dropdown-item\" href=\"{#{{ path('linkVoucherToGift') }}#}\">Link Voucher to Gift  card</a>
                        {% endif %}
                        {% if is_granted('ROLE_ONLINE_ADMIN') %}
                            <a class=\"dropdown-item\" href=\"{#{{ path('LookupChangeVoucher') }}#}\">Lookup Change Voucher</a>
                            {#   <a class=\"dropdown-item\" href=\"{{ path('VoucherStatusReset') }}\">Voucher Lookup  by  Receipt</a> #}
                        {% endif %}


                        {% if is_granted('ROLE_ONLINE_ADMIN') %}
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"dropdown-header\">Online Order administration</div>
                            <a class=\"dropdown-item\" href=\"{#{{ path('ReverseOnlineRefund') }}#}\">Reverse Online Refund</a>
                        {% endif %}
                    </div>
                </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" id=\"dashDropdown\" data-bs-toggle=\"dropdown\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">Online Orders Admin</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dashDropdown\">
                        <div class=\"dropdown-header\">Dashboards</div>
                        <a class=\"dropdown-item\" href=\"{#{{ path('View_Delayed_Orders') }}#}\">Potentially Delayed Orders Dashboard</a>
                        <a class=\"dropdown-item\" href=\"{#{{ path('View_Overdue_Orders') }}#}\">Overdue Orders Dashboard</a>
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
                        <a class=\"dropdown-item\" href=\"{#{{ path('drop_shipping_show_manifest') }} #}\">Create Manifest</a>
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



            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown\" data-toggle=\"popover\" data-content=\"Catalogue Search\" data-trigger=\"hover\"
                    data-placement=\"bottom\">
                    <a class=\"nav-link\" href=\"{#{{ url('input_search') }}#}\">
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
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">Help &amp; Reference</span><span class=\"fa fa-question-circle\"></span>
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
                        <a class=\"nav-link\" href=\"{# {{ path('login') }}#}\">Log in</a>
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
