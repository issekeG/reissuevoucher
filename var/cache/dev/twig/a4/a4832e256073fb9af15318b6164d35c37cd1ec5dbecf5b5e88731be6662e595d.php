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

/* training_videos/video/edit.html.twig */
class __TwigTemplate_a17a8a1f0df1f01382017134da43cc1685ecc44bc963b15822b5882f9602a3a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training_videos/video/edit.html.twig"));

        // line 1
        echo "<nav class=\"header-nav ms-auto\">
    <ul class=\"d-flex align-items-center\">

        <li class=\"nav-item dropdown pe-3\">

            <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                <span class=\"d-none d-md-block dropdown-toggle ps-2\">Vouchers</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"voucherDropdown\">

                <div class=\"dropdown-header\">Vouchers &amp; Gift Cards</div>
                <a class=\"dropdown-item\" href=\"";
        // line 12
        echo "\">Voucher Lookup</a>
                <a class=\"dropdown-item\" href=\"";
        // line 13
        echo "\">Gift Card Lookup</a>
                <a class=\"dropdown-item\" href=\"";
        // line 14
        echo "\">Send Voucher mail </a>
                <div class=\"dropdown-divider\"></div>
                <div class=\"dropdown-header\">Discount Coupons</div>
                <a class=\"dropdown-item\" href=\"";
        // line 17
        echo "\">Lookup</a>
                <!--
                    <div class=\"dropdown-divider\"></div>
                    <div class=\"dropdown-header\">Pre Order Vouchers</div>
                    <a class=\"dropdown-item\" href=\"";
        // line 21
        echo "\">Generate Voucher</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 22
        echo "\">Lookup Voucher</a>
                    -->


                <div class=\"dropdown-divider\"></div>
                ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IBST_REPORT")) {
            // line 28
            echo "                    <div class=\"dropdown-header\">Voucher & Gift administration</div>

                    <a class=\"dropdown-item\" href=\"";
            // line 30
            echo "\">Link Voucher to Gift  card</a>
                ";
        }
        // line 32
        echo "
                ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 34
            echo "                    <a class=\"dropdown-item\" href=\"";
            echo "\">Lookup Change Voucher</a>
                    ";
            // line 36
            echo "                ";
        }
        // line 37
        echo "

                ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 40
            echo "                    <div class=\"dropdown-divider\"></div>
                    <div class=\"dropdown-header\">Online Order administration</div>
                    <a class=\"dropdown-item\" href=\"";
            // line 42
            echo "\">Reverse Online Refund</a>
                ";
        }
        // line 44
        echo "            </div>
        </li>
        <li class=\"nav-item dropdown pe-3\">

            <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                <span class=\"d-none d-md-block dropdown-toggle ps-2\">Online Orders Admin</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dashDropdown\">
                <div class=\"dropdown-header\">Dashboards</div>
                <a class=\"dropdown-item\" href=\"";
        // line 53
        echo "\">Potentially Delayed Orders Dashboard</a>
                <a class=\"dropdown-item\" href=\"";
        // line 54
        echo "\">Overdue Orders Dashboard</a>
                ";
        // line 56
        echo "                <a class=\"dropdown-item\" href=\"";
        echo "\">Overdue Dropship Dashboard</a>
                <a class=\"dropdown-item\" href=\"";
        // line 57
        echo "\">Overdue IBST Dashboard</a>
                <a class=\"dropdown-item\" href=\"";
        // line 58
        echo "\">Online Refunds Dashboard</a>
                <div class=\"dropdown-divider\"></div>
                <div class=\"dropdown-header\">Manage Orders</div>
                <a class=\"dropdown-item\" href=\"";
        // line 61
        echo "\">Reverse Online Refund</a>
                ";
        // line 63
        echo "                <a class=\"dropdown-item\" href=\"";
        echo "\">Reinstate voided order</a>
                <a class=\"dropdown-item\" href=\"";
        // line 64
        echo "\">Subtract Delivery from Refund</a>
                <a class=\"dropdown-item\" href=\"";
        // line 65
        echo "\">Change Refund Type</a>
                <a class=\"dropdown-item\" href=\"";
        // line 66
        echo "\">Change Payment Type</a>
            </div>
        </li>

        <li class=\"nav-item dropdown pe-3\">

            <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                <span class=\"d-none d-md-block dropdown-toggle ps-2\">IBSTs</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <div class=\"dropdown-header\">IBSTs</div>
                <a class=\"dropdown-item\" href=\"";
        // line 77
        echo "\">Dashboard</a>
                <a class=\"dropdown-item\" href=\"";
        // line 78
        echo "\">Lookup</a>
                <a class=\"dropdown-item\" href=\"";
        // line 79
        echo "\">New Request</a>
                <a class=\"dropdown-item\" href=\"";
        // line 80
        echo "\">Dispatch</a>
                <a class=\"dropdown-item\" href=\"";
        // line 81
        echo "\">Receive</a>
                <a class=\"dropdown-item\" href=\"";
        // line 82
        echo "\">Return to
                    Store</a>
                <a class=\"dropdown-item\" href=\"";
        // line 84
        echo "\">Receive Returned
                    IBST</a>
                <a class=\"dropdown-item\" href=\"";
        // line 86
        echo "\">Manage Declines</a>
                <div class=\"dropdown-divider\"></div>
                <div class=\"dropdown-header\">Shipping</div>
                <a class=\"dropdown-item\" href=\"";
        // line 89
        echo "\">Print Convergex Waybill</a>
                <a class=\"dropdown-item\" href=\"";
        // line 90
        echo "\">Create Manifest</a>
                <div class=\"dropdown-divider\"></div>
                <div class=\"dropdown-header\">Bulk IBSTs</div>
                ";
        // line 93
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BULK_IBST")) {
            // line 94
            echo "                    <a class=\"dropdown-item\" href=\"";
            echo "\">Upload Bulk IBST</a>
                ";
        }
        // line 96
        echo "                <!---
                    <a class=\"dropdown-item\" href=\"";
        // line 97
        echo "\">Recall
                        Aged Stock</a>---->
                <a class=\"dropdown-item\" href=\"";
        // line 99
        echo "\">Recall
                    Sales Stock</a>
            </div>
        </li>

        <li class=\"nav-item dropdown pe-3\">

            <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                <span class=\"d-none d-md-block dropdown-toggle ps-2\">Customers</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"customerDropdown\">
                <div class=\"dropdown-header\">Fanatics</div>
                <a class=\"dropdown-item\" href=\"";
        // line 111
        echo "\">Search</a>
                <a class=\"dropdown-item\" href=\"";
        // line 112
        echo "\">Activation</a>
                <div class=\"dropdown-divider\"></div>
                <div class=\"dropdown-header\">Website Orders</div>
                <a class=\"dropdown-item\" href=\"";
        // line 115
        echo "\">Order Lookup</a>
                ";
        // line 116
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 117
            echo "                    <a class=\"dropdown-item\" href=\"";
            echo "\">Receive
                        Online
                        Parcel</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 120
            echo "\">Log
                        Customer
                        Collection</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 123
            echo "\">Send Customer SMS</a>
                ";
        }
        // line 125
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ONLINE_ADMIN")) {
            // line 126
            echo "                    <a class=\"dropdown-item\" href=\"";
            echo "\">Reset Dropshipping Order</a>
                ";
        }
        // line 128
        echo "                <div class=\"dropdown-divider\"></div>
                <div class=\"dropdown-header\">Book Clubs</div>
                <a class=\"dropdown-item\" href=\"";
        // line 130
        echo "\">Search</a>
                <div class=\"dropdown-divider\"></div>
                <div class=\"dropdown-header\">Customers</div>
                <a class=\"dropdown-item\" href=\"";
        // line 133
        echo "\">View Account List</a>
                <a class=\"dropdown-item\" href=\"";
        // line 134
        echo "\">Lookup Store Receipt</a>
            </div>
        </li>

        ";
        // line 138
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DROP_SHIP")) {
            // line 139
            echo "            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">Drop Shipping</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dropShippingDropdown\">
                    <div class=\"dropdown-header\">Drop Shipping</div>
                    <a class=\"dropdown-item\" href=\"";
            // line 146
            echo "\">Dashboard</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 147
            echo "\">Picking Slip Lookup</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 148
            echo "\">Dispatch Online
                        Order</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"";
            // line 151
            echo "\">Create Manifest</a>

                    ";
            // line 153
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROCURE")) {
                // line 154
                echo "                        <div class=\"dropdown-divider\"></div>
                        <div class=\"dropdown-header\">Rohan</div>
                        <a class=\"dropdown-item\" href=\"";
                // line 156
                echo "\">View Legacy Picking
                            Slip</a>
                        <a class=\"dropdown-item\" href=\"";
                // line 158
                echo "\">Open Gift Orders</a>
                    ";
            }
            // line 160
            echo "                </div>
            </li>
        ";
        }
        // line 163
        echo "
        ";
        // line 164
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 165
            echo "            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">Quotation</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"dropShippingDropdown\">
                    <div class=\"dropdown-header\">Quotation</div>
                    <a class=\"dropdown-item\" href=\"";
            // line 172
            echo "\">Create Quotation</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 173
            echo "\">View Quotation</a>

                </div>
            </li>
        ";
        }
        // line 178
        echo "
        ";
        // line 179
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IBST_REPORT")) {
            // line 180
            echo "            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">Reports</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"ibstReportsDropdown\">
                    <div class=\"dropdown-header\">IBSTs</div>
                    <a class=\"dropdown-item\" href=\"";
            // line 187
            echo "\">IBST
                        Summary Report</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 189
            echo "\">IBST
                        Manifest Report</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 191
            echo "\">IBST
                        Detail Report</a>
                    <div class=\"dropdown-divider\"></div>
                    <div class=\"dropdown-header\">Goods in Transit</div>
                    <a class=\"dropdown-item\" href=\"";
            // line 195
            echo "\">Goods In
                        Transit Listing</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 197
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
            // line 210
            echo "\">Drop Shipping
                        Summary Report</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 212
            echo "\">Dispatch Stats
                        Report</a>
                    <div class=\"dropdown-divider\"></div>
                    <div class=\"dropdown-header\">Foot Count</div>

                    <a class=\"dropdown-item\" href=\"";
            // line 217
            echo "\">Store Foot Count
                        Report</a>
                    <div class=\"dropdown-divider\"></div>
                    <!--";
            // line 227
            echo " -->

                    <div class=\"dropdown-header\">Store  Audit Checklist</div>
                    <a class=\"dropdown-item\" href=\"";
            // line 230
            echo "\">Audit Checklist  Dashboard
                    </a>
                    <a class=\"dropdown-item\" href=\"";
            // line 232
            echo "\">Add new Store audit
                    </a>

                </div>
            </li>
        ";
        }
        // line 238
        echo "
        ";
        // line 239
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CMS")) {
            // line 240
            echo "            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">CMS</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"cmsDropdown\">
                    <div class=\"dropdown-header\">Content Management</div>
                    <a class=\"dropdown-item\" href=\"";
            // line 247
            echo "\">Campaign Upload</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 248
            echo "\">Campaign Management</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"";
            // line 250
            echo "\">Add Product</a>
                </div>
            </li>
        ";
        }
        // line 254
        echo "


        <li class=\"nav-item dropdown pe-3\">

            <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"";
        // line 259
        echo "\">
                <span class=\"d-none d-md-block dropdown-toggle ps-2\">Whats New</span>
            </a>
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
        // line 276
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
        // line 284
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_new");
        echo "\">
                        <span>Form</span>
                    </a>
                </li>

            </ul>
        </li>
        <li class=\"nav-item dropdown pe-3\">

            <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"";
        // line 293
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_index");
        echo "\">
                <span class=\"d-none d-md-block dropdown-toggle ps-2\">Showvideo</span>
            </a>

            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">

            </ul>
        </li>
        <li class=\"nav-item dropdown pe-3\">

            <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                <span class=\"d-none d-md-block dropdown-toggle ps-2\">Help &amp; Reference</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" aria-labelledby=\"navbarDropdown\">
                <div class=\"dropdown-header\">Reference</div>
                <a class=\"dropdown-item\" href=\"";
        // line 308
        echo "\">Guides &amp; Manuals</a>

                <a class=\"dropdown-item\" href=\"";
        // line 310
        echo "\">Employee list</a>
                <a class=\"dropdown-item\" href=\"";
        // line 311
        echo "\">Store List</a>
                <a class=\"dropdown-item\" href=\"";
        // line 312
        echo "\">Contact List</a>
                <a class=\"dropdown-item\" href=\"";
        // line 313
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


    </ul>
</nav><!-- End Icons Navigation -->";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "training_videos/video/edit.html.twig";
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
        return array (  545 => 313,  542 => 312,  539 => 311,  536 => 310,  532 => 308,  514 => 293,  502 => 284,  491 => 276,  472 => 259,  465 => 254,  459 => 250,  455 => 248,  452 => 247,  443 => 240,  441 => 239,  438 => 238,  430 => 232,  426 => 230,  421 => 227,  416 => 217,  409 => 212,  405 => 210,  390 => 197,  386 => 195,  380 => 191,  376 => 189,  372 => 187,  363 => 180,  361 => 179,  358 => 178,  351 => 173,  348 => 172,  339 => 165,  337 => 164,  334 => 163,  329 => 160,  325 => 158,  321 => 156,  317 => 154,  315 => 153,  311 => 151,  306 => 148,  303 => 147,  300 => 146,  291 => 139,  289 => 138,  283 => 134,  280 => 133,  275 => 130,  271 => 128,  266 => 126,  263 => 125,  259 => 123,  254 => 120,  248 => 117,  246 => 116,  243 => 115,  238 => 112,  235 => 111,  221 => 99,  217 => 97,  214 => 96,  209 => 94,  207 => 93,  202 => 90,  199 => 89,  194 => 86,  190 => 84,  186 => 82,  183 => 81,  180 => 80,  177 => 79,  174 => 78,  171 => 77,  158 => 66,  155 => 65,  152 => 64,  148 => 63,  145 => 61,  140 => 58,  137 => 57,  133 => 56,  130 => 54,  127 => 53,  116 => 44,  112 => 42,  108 => 40,  106 => 39,  102 => 37,  99 => 36,  95 => 34,  93 => 33,  90 => 32,  86 => 30,  82 => 28,  80 => 27,  73 => 22,  70 => 21,  64 => 17,  59 => 14,  56 => 13,  53 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"header-nav ms-auto\">
    <ul class=\"d-flex align-items-center\">

        <li class=\"nav-item dropdown pe-3\">

            <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
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
        <li class=\"nav-item dropdown pe-3\">

            <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
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

        <li class=\"nav-item dropdown pe-3\">

            <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
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

        <li class=\"nav-item dropdown pe-3\">

            <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
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
            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
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

        {% if is_granted('ROLE_USER') %}
            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
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
            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
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
            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
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



        <li class=\"nav-item dropdown pe-3\">

            <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"{#{{ url('whats_new') }}#}\">
                <span class=\"d-none d-md-block dropdown-toggle ps-2\">Whats New</span>
            </a>
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
        <li class=\"nav-item dropdown pe-3\">

            <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"{{ path('app_video_index') }}\">
                <span class=\"d-none d-md-block dropdown-toggle ps-2\">Showvideo</span>
            </a>

            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">

            </ul>
        </li>
        <li class=\"nav-item dropdown pe-3\">

            <a class=\"nav-link  d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                <span class=\"d-none d-md-block dropdown-toggle ps-2\">Help &amp; Reference</span>
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


    </ul>
</nav><!-- End Icons Navigation -->", "training_videos/video/edit.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\reissuevoucher\\templates\\training_videos\\video\\edit.html.twig");
    }
}
