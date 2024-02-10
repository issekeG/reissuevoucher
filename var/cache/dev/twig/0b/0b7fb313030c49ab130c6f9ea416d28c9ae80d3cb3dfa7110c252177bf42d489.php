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

/* reissuevoucher/voucher/_form.html.twig */
class __TwigTemplate_acd86f2f5f3f3691b2c9134e587d9aadfdb13fea7b023f61731dd65c2fd686d4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reissuevoucher/voucher/_form.html.twig"));

        // line 1
        echo "<main>
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
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
                                <div>
                                    <p> </p>

                                </div>
                                <label class=\"form-label mt-4\">Reason : </label>
                                <div class=\"row justify-content-center align-content-center mb-4 mt-0\">

                                    <div class=\"form-group col-md-2\">
                                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "reason", [], "any", false, false, false, 26), 3, [], "any", false, false, false, 26), 'row', ["label_attr" => ["class" => "form-check-label custom-class-3 pe-3"], "attr" => ["class" => "form-check-input"]]);
        echo "

                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "reason", [], "any", false, false, false, 30), 2, [], "any", false, false, false, 30), 'row', ["label_attr" => ["class" => "form-check-label custom-class-3 pe-3"], "attr" => ["class" => "form-check-input"]]);
        echo "

                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "reason", [], "any", false, false, false, 34), 1, [], "any", false, false, false, 34), 'row', ["label_attr" => ["class" => "form-check-label custom-class-2 pe-3"], "attr" => ["class" => "form-check-input"]]);
        echo "

                                    </div>

                                    <div class=\"form-group col-md-2\">

                                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "reason", [], "any", false, false, false, 40), 0, [], "any", false, false, false, 40), 'row', ["label_attr" => ["class" => "form-check-label custom-class-1 pe-3"], "attr" => ["class" => "form-check-input"]]);
        echo "

                                    </div>
                                </div>

                                <div class=\"col-12  mb-4\">
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please, enter name!</div>
                                </div>

                                <div class=\"col-12  mb-4\">
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "idNumber", [], "any", false, false, false, 51), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter an ID/Passport Number :</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "giftCardNumber", [], "any", false, false, false, 56), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter giftCardNumber !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "originalIssuingStore", [], "any", false, false, false, 61), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Original Issuing Store !</div>
                                </div>


                                <div class=\"col-12 mb-4\">
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "dateOfPurchase", [], "any", false, false, false, 67), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Date of Purchase !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "timeOfPurchase", [], "any", false, false, false, 72), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Time of Purchase !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "valueLoadedOnCard", [], "any", false, false, false, 77), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Value Loaded on Card !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "furtherDetails", [], "any", false, false, false, 82), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Any Further Details !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "requestedBy", [], "any", false, false, false, 87), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Requested By !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "requestedBySignature", [], "any", false, false, false, 92), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Signature !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "requestedDate", [], "any", false, false, false, 97), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Requested Date !</div>
                                </div>



                                <div class=\"col-12 mb-4\">
                                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "newEvoucherReference", [], "any", false, false, false, 104), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter New eVoucher Reference !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "newEvoucherDate", [], "any", false, false, false, 109), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter New eVoucher Date  !</div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "cardLinkedTo", [], "any", false, false, false, 114), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Card Linked To !</div>
                                </div>


                                <div class=\"col-12 mb-5\">
                                    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "deliveredTo", [], "any", false, false, false, 120), 'row');
        echo "
                                    <div class=\"invalid-feedback\">Please enter Delivered To !</div>
                                </div>

                                <div class=\"row justify-content-center align-content-center\">

                                    <div class=\"form-group col-md-3 mb-5\">
                                        <button class=\"btn btn-success\">";
        // line 127
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 127, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

                                    </div>

                                </div>
                                ";
        // line 132
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), 'form_end');
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
        return "reissuevoucher/voucher/_form.html.twig";
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
        return array (  236 => 132,  228 => 127,  218 => 120,  209 => 114,  201 => 109,  193 => 104,  183 => 97,  175 => 92,  167 => 87,  159 => 82,  151 => 77,  143 => 72,  135 => 67,  126 => 61,  118 => 56,  110 => 51,  102 => 46,  93 => 40,  84 => 34,  77 => 30,  70 => 26,  58 => 17,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main>
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
                                {{ form_start(form) }}
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
</main>", "reissuevoucher/voucher/_form.html.twig", "C:\\Users\\gicke\\PhpstormProjects\\reissuevoucher\\templates\\reissuevoucher\\voucher\\_form.html.twig");
    }
}
