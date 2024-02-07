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

/* voucher/_edit_form.html.twig */
class __TwigTemplate_6be9135e8d5b146a7bf38c7e3b75870ce8354f37146d0287e2b66443e54feffe extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voucher/_edit_form.html.twig"));

        // line 1
        echo "
<main>
    <div class=\"container pb-0\" >
        <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center\" >
            <div class=\"container\">
                <div class=\"row justify-content-center\">

                    <div class=\"col-md-10  flex-column align-items-center justify-content-center\">

                        <div class=\"d-flex justify-content-center py-4\">
                            <a class=\"logo d-flex align-items-center w-auto\">
                                <span class=\"d-none d-lg-block\">Form</span>
                            </a>
                        </div>

                        <div class=\"card\">
                            <div class=\"px-4 row\" style=\"margin-bottom: 0\">
                                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div>
                                    <p> </p>

                                </div>
                                <label class=\"form-label mt-4\">Reason : </label>
                                <div class=\"row justify-content-center align-content-center mb-4 mt-0\">

                                    <div class=\"form-group col-md-2\">
                                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "reason", [], "any", false, false, false, 27), 3, [], "any", false, false, false, 27), 'row', ["label_attr" => ["class" => "form-check-label custom-class-3 pe-3"], "attr" => ["class" => "form-check-input"]]);
        echo "

                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "reason", [], "any", false, false, false, 31), 2, [], "any", false, false, false, 31), 'row', ["label_attr" => ["class" => "form-check-label custom-class-3 pe-3"], "attr" => ["class" => "form-check-input"]]);
        echo "

                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "reason", [], "any", false, false, false, 35), 1, [], "any", false, false, false, 35), 'row', ["label_attr" => ["class" => "form-check-label custom-class-2 pe-3"], "attr" => ["class" => "form-check-input"]]);
        echo "

                                    </div>

                                    <div class=\"form-group col-md-2\">

                                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "reason", [], "any", false, false, false, 41), 0, [], "any", false, false, false, 41), 'row', ["label_attr" => ["class" => "form-check-label custom-class-1 pe-3"], "attr" => ["class" => "form-check-input"]]);
        echo "

                                    </div>
                                </div>

                                <div class=\"col-12  mb-4\">
                                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please, enter name!</div>
                                </div>

                                <div class=\"col-12  mb-4\">
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "idNumber", [], "any", false, false, false, 52), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter an ID/Passport Number :</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "giftCardNumber", [], "any", false, false, false, 57), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter giftCardNumber !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "originalIssuingStore", [], "any", false, false, false, 62), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Original Issuing Store !</div>
                                </div>


                                <div class=\"col-12 mb-4\">
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "dateOfPurchase", [], "any", false, false, false, 68), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Date of Purchase !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "timeOfPurchase", [], "any", false, false, false, 73), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Time of Purchase !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "valueLoadedOnCard", [], "any", false, false, false, 78), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Value Loaded on Card !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "furtherDetails", [], "any", false, false, false, 83), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Any Further Details !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "requestedBy", [], "any", false, false, false, 88), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Requested By !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "requestedBySignature", [], "any", false, false, false, 93), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Signature !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "requestedDate", [], "any", false, false, false, 98), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Requested Date !</div>
                                </div>

                                    <div class=\"col-12 mb-4\">
                                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "authorizedBy", [], "any", false, false, false, 103), 'row');
        echo "
                                        <div class=\"invalid-feedback\">Please enter Authorized By !</div>
                                    </div>

                                    <div class=\"col-12 mb-4\">
                                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "authorizedSignature", [], "any", false, false, false, 108), 'row');
        echo "
                                        <div class=\"invalid-feedback\">Please enter Authorized Signature !</div>
                                    </div>


                                    <div class=\"col-12 mb-4\">
                                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "authorizedDate", [], "any", false, false, false, 114), 'row');
        echo "
                                        <div class=\"invalid-feedback\">Please enter Authorized Date !</div>
                                    </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "newEvoucherReference", [], "any", false, false, false, 119), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter New eVoucher Reference !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "newEvoucherDate", [], "any", false, false, false, 124), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter New eVoucher Date  !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "cardLinkedTo", [], "any", false, false, false, 129), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Card Linked To !</div>
                                </div>


                                <div class=\"col-12 mb-5\">
                                    ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "deliveredTo", [], "any", false, false, false, 135), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Delivered To !</div>
                                </div>

                                <div class=\"row justify-content-center align-content-center\">

                                    <div class=\"form-group col-md-3 mb-5\">
                                        <button class=\"btn btn-success\">";
        // line 142
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 142, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

                                    </div>

                                </div>
                                ";
        // line 147
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), 'form_end');
        echo "

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "voucher/_edit_form.html.twig";
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
        return array (  260 => 147,  252 => 142,  242 => 135,  233 => 129,  225 => 124,  217 => 119,  209 => 114,  200 => 108,  192 => 103,  184 => 98,  176 => 93,  168 => 88,  160 => 83,  152 => 78,  144 => 73,  136 => 68,  127 => 62,  119 => 57,  111 => 52,  103 => 47,  94 => 41,  85 => 35,  78 => 31,  71 => 27,  59 => 18,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<main>
    <div class=\"container pb-0\" >
        <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center\" >
            <div class=\"container\">
                <div class=\"row justify-content-center\">

                    <div class=\"col-md-10  flex-column align-items-center justify-content-center\">

                        <div class=\"d-flex justify-content-center py-4\">
                            <a class=\"logo d-flex align-items-center w-auto\">
                                <span class=\"d-none d-lg-block\">Form</span>
                            </a>
                        </div>

                        <div class=\"card\">
                            <div class=\"px-4 row\" style=\"margin-bottom: 0\">
                                {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                                <div>
                                    <p> </p>

                                </div>
                                <label class=\"form-label mt-4\">Reason : </label>
                                <div class=\"row justify-content-center align-content-center mb-4 mt-0\">

                                    <div class=\"form-group col-md-2\">
                                        {{ form_row(form.reason.3, {'label_attr': {'class': 'form-check-label custom-class-3 pe-3'}, 'attr': {'class': 'form-check-input'}}) }}

                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        {{ form_row(form.reason.2, {'label_attr': {'class': 'form-check-label custom-class-3 pe-3'}, 'attr': {'class': 'form-check-input'}}) }}

                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        {{ form_row(form.reason.1, {'label_attr': {'class': 'form-check-label custom-class-2 pe-3'}, 'attr': {'class': 'form-check-input'}}) }}

                                    </div>

                                    <div class=\"form-group col-md-2\">

                                        {{ form_row(form.reason.0, {'label_attr': {'class': 'form-check-label custom-class-1 pe-3'}, 'attr': {'class': 'form-check-input'}}) }}

                                    </div>
                                </div>

                                <div class=\"col-12  mb-4\">
                                    {{ form_row(form.name) }}
                                    <div class=\"invalid-feedback\">Please, enter name!</div>
                                </div>

                                <div class=\"col-12  mb-4\">
                                    {{ form_row(form.idNumber) }}
                                    <div class=\"invalid-feedback\">Please enter an ID/Passport Number :</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    {{ form_row(form.giftCardNumber) }}
                                    <div class=\"invalid-feedback\">Please enter giftCardNumber !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    {{ form_row(form.originalIssuingStore) }}
                                    <div class=\"invalid-feedback\">Please enter Original Issuing Store !</div>
                                </div>


                                <div class=\"col-12 mb-4\">
                                    {{ form_row(form.dateOfPurchase) }}
                                    <div class=\"invalid-feedback\">Please enter Date of Purchase !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    {{ form_row(form.timeOfPurchase) }}
                                    <div class=\"invalid-feedback\">Please enter Time of Purchase !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    {{ form_row(form.valueLoadedOnCard) }}
                                    <div class=\"invalid-feedback\">Please enter Value Loaded on Card !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    {{ form_row(form.furtherDetails) }}
                                    <div class=\"invalid-feedback\">Please enter Any Further Details !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    {{ form_row(form.requestedBy) }}
                                    <div class=\"invalid-feedback\">Please enter Requested By !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    {{ form_row(form.requestedBySignature) }}
                                    <div class=\"invalid-feedback\">Please enter Signature !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    {{ form_row(form.requestedDate) }}
                                    <div class=\"invalid-feedback\">Please enter Requested Date !</div>
                                </div>

                                    <div class=\"col-12 mb-4\">
                                        {{ form_row(form.authorizedBy) }}
                                        <div class=\"invalid-feedback\">Please enter Authorized By !</div>
                                    </div>

                                    <div class=\"col-12 mb-4\">
                                        {{ form_row(form.authorizedSignature) }}
                                        <div class=\"invalid-feedback\">Please enter Authorized Signature !</div>
                                    </div>


                                    <div class=\"col-12 mb-4\">
                                        {{ form_row(form.authorizedDate) }}
                                        <div class=\"invalid-feedback\">Please enter Authorized Date !</div>
                                    </div>

                                <div class=\"col-12 mb-4\">
                                    {{ form_row(form.newEvoucherReference) }}
                                    <div class=\"invalid-feedback\">Please enter New eVoucher Reference !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    {{ form_row(form.newEvoucherDate) }}
                                    <div class=\"invalid-feedback\">Please enter New eVoucher Date  !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    {{ form_row(form.cardLinkedTo) }}
                                    <div class=\"invalid-feedback\">Please enter Card Linked To !</div>
                                </div>


                                <div class=\"col-12 mb-5\">
                                    {{ form_row(form.deliveredTo) }}
                                    <div class=\"invalid-feedback\">Please enter Delivered To !</div>
                                </div>

                                <div class=\"row justify-content-center align-content-center\">

                                    <div class=\"form-group col-md-3 mb-5\">
                                        <button class=\"btn btn-success\">{{ button_label|default('Save') }}</button>

                                    </div>

                                </div>
                                {{ form_end(form) }}

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main>", "voucher/_edit_form.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\reissuevoucher\\templates\\voucher\\_edit_form.html.twig");
    }
}
