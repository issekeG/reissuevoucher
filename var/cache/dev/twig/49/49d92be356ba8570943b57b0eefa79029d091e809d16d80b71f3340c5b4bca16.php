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

/* base.html.twig */
class __TwigTemplate_2457deb89857f25a46aa61879074b24b8567c8f1400a081ec311ed1606a2bb00 extends Template
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
            'navName' => [$this, 'block_navName'],
            'togglesidebar' => [$this, 'block_togglesidebar'],
            'search' => [$this, 'block_search'],
            'loginNav' => [$this, 'block_loginNav'],
            'sidebar' => [$this, 'block_sidebar'],
            'main' => [$this, 'block_main'],
            'main_section' => [$this, 'block_main_section'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 83
        echo "

<!-- End Header -->

<!-- ======= Sidebar ======= -->
";
        // line 88
        $this->displayBlock('sidebar', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('main', $context, $blocks);
        // line 130
        echo "

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->

<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- Template Main JS File -->
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
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

        echo " Reissue Voucher ";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
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
        echo "    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

        <div class=\"d-flex align-items-center justify-content-between\">
            <a href=\"\" class=\"logo d-flex align-items-center\">
                <span class=\"d-none d-lg-block ms-2\">";
        // line 36
        $this->displayBlock('navName', $context, $blocks);
        echo "</span>
            </a>
            ";
        // line 38
        $this->displayBlock('togglesidebar', $context, $blocks);
        // line 39
        echo "        </div><!-- End Logo -->

        ";
        // line 41
        $this->displayBlock('search', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        $this->displayBlock('loginNav', $context, $blocks);
        // line 80
        echo "
    </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_navName($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navName"));

        echo "Reissue Voucher";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_togglesidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "togglesidebar"));

        echo "<i class=\"bi bi-list toggle-sidebar-btn\"></i> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 42
        echo "        <div class=\"search-bar\">
            <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voucher_search");
        echo "\" >
                <input type=\"text\" name=\"query\" id=\"searchQuery\" placeholder=\"Search\" title=\"Enter search keyword\">
                <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
            </form>
        </div><!-- End Search Bar -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_loginNav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "loginNav"));

        // line 51
        echo "        <nav class=\"header-nav ms-auto\">
            <ul class=\"d-flex align-items-center\">

                <li class=\"nav-item d-block d-lg-none\">
                    <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                        <i class=\"bi bi-search\"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class=\"nav-item\">
                    ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61)) {
            // line 62
            echo "                    <a class=\"nav-link nav-icon btn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                        Logout
                        <i class=\"bi bi-box-arrow-right\"></i>
                    </a>
                    ";
        } else {
            // line 67
            echo "                        <a class=\"nav-link nav-icon btn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                            Login
                            <i class=\"bi bi-box-arrow-right\"></i>
                        </a>
                    ";
        }
        // line 72
        echo "
                    <!-- End Notification Icon -->

                </li><!-- End Notification Nav -->

            </ul>
        </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 88
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 89
        echo "    <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"#\">
                    <i class=\"bi bi-grid\"></i>
                    <span>All Status</span>
                </a>
            </li>


                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">
                        <i class=\"bi bi-menu-button-wide\"></i><span></span>
                    </a>
                </li>


        </ul>

    </aside>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 113
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 114
        echo "
    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
        </div>

        <section class=\"section dashboard\">
            ";
        // line 121
        $this->displayBlock('main_section', $context, $blocks);
        // line 126
        echo "        </section>

    </main><!-- End #main -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 121
    public function block_main_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_section"));

        // line 122
        echo "                <div class=\"row\">

                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  392 => 122,  385 => 121,  375 => 126,  373 => 121,  364 => 114,  357 => 113,  328 => 89,  321 => 88,  307 => 72,  298 => 67,  289 => 62,  287 => 61,  275 => 51,  268 => 50,  255 => 43,  252 => 42,  245 => 41,  232 => 38,  219 => 36,  210 => 80,  208 => 50,  205 => 49,  203 => 41,  199 => 39,  197 => 38,  192 => 36,  186 => 32,  179 => 31,  169 => 21,  165 => 20,  160 => 18,  156 => 17,  151 => 14,  144 => 13,  131 => 8,  111 => 139,  106 => 137,  102 => 136,  94 => 130,  92 => 113,  89 => 112,  87 => 88,  80 => 83,  78 => 31,  69 => 24,  67 => 13,  59 => 8,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title> {% block title %} Reissue Voucher {% endblock %}</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Google Fonts -->
    {% block stylesheets %}
        <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
        <link href=\"{{ asset(\"assets/vendor/bootstrap/css/bootstrap.min.css\") }}\" rel=\"stylesheet\">
        <link href=\"{{ asset(\"assets/vendor/bootstrap-icons/bootstrap-icons.css\") }}\" rel=\"stylesheet\">

        <link href=\"{{ asset(\"assets/css/style.css\") }}\" rel=\"stylesheet\">
        <link href=\"{{  asset ('assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

    {% endblock %}


</head>

<body>

<!-- ======= Header ======= -->
{% block header %}
    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

        <div class=\"d-flex align-items-center justify-content-between\">
            <a href=\"\" class=\"logo d-flex align-items-center\">
                <span class=\"d-none d-lg-block ms-2\">{% block navName %}Reissue Voucher{% endblock %}</span>
            </a>
            {% block togglesidebar %}<i class=\"bi bi-list toggle-sidebar-btn\"></i> {% endblock %}
        </div><!-- End Logo -->

        {% block search %}
        <div class=\"search-bar\">
            <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"{{ path('app_voucher_search') }}\" >
                <input type=\"text\" name=\"query\" id=\"searchQuery\" placeholder=\"Search\" title=\"Enter search keyword\">
                <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
            </form>
        </div><!-- End Search Bar -->
        {% endblock %}

        {% block loginNav %}
        <nav class=\"header-nav ms-auto\">
            <ul class=\"d-flex align-items-center\">

                <li class=\"nav-item d-block d-lg-none\">
                    <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                        <i class=\"bi bi-search\"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class=\"nav-item\">
                    {% if app.user %}
                    <a class=\"nav-link nav-icon btn\" href=\"{{ path('app_logout') }}\">
                        Logout
                        <i class=\"bi bi-box-arrow-right\"></i>
                    </a>
                    {% else %}
                        <a class=\"nav-link nav-icon btn\" href=\"{{ path('app_login') }}\">
                            Login
                            <i class=\"bi bi-box-arrow-right\"></i>
                        </a>
                    {% endif %}

                    <!-- End Notification Icon -->

                </li><!-- End Notification Nav -->

            </ul>
        </nav>
        {% endblock %}

    </header>
{% endblock %}


<!-- End Header -->

<!-- ======= Sidebar ======= -->
{% block sidebar %}
    <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"#\">
                    <i class=\"bi bi-grid\"></i>
                    <span>All Status</span>
                </a>
            </li>


                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">
                        <i class=\"bi bi-menu-button-wide\"></i><span></span>
                    </a>
                </li>


        </ul>

    </aside>
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

<script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}\"></script>
<!-- Template Main JS File -->
<script src=\"{{ asset('assets/js/main.js')}}\"></script>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://www.youtube.com/iframe_api\"></script>

</body>

</html>





", "base.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\reissuevoucher\\templates\\base.html.twig");
    }
}
