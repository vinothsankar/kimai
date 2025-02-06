<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* user/contract.html.twig */
class __TwigTemplate_a69520b92835cc1fb6f44a0d61bf1c12 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_content' => [$this, 'block_form_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "user/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/contract.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/contract.html.twig"));

        $this->parent = $this->loadTemplate("user/form.html.twig", "user/contract.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_content"));

        // line 4
        yield "
    <script>
        function toggleWorkingContractModeForm(value)
        {
            document.querySelectorAll('.work_contract_mode').forEach(function (element) {
                element.classList.add('d-none');
            });

            // Show the element with the class 'work_contract_mode_' + value
            var elementToShow = document.querySelector('.work_contract_mode_' + value);
            if (elementToShow) {
                elementToShow.classList.remove('d-none');
            }
        }
    </script>

    ";
        // line 20
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), ["form/horizontal.html.twig"], true);
        // line 21
        yield "
    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "_token", [], "any", false, false, false, 22), 'row');
        yield "

    ";
        // line 24
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "workContractMode", [], "any", true, true, false, 24)) {
            // line 25
            yield "        <fieldset class=\"form-fieldset form-fieldset-light border-0 pb-0\">
            <legend>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("work_times_should"), "html", null, true);
            yield "</legend>
            ";
            // line 27
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "workContractMode", [], "any", false, false, false, 27), 'row', ["attr" => ["onchange" => "toggleWorkingContractModeForm(this.value)"]]);
            yield "
        </fieldset>
    ";
        }
        // line 30
        yield "
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "workContractModes", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
            // line 32
            yield "        <fieldset class=\"form-fieldset form-fieldset-light  border-0 work_contract_mode work_contract_mode_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mode"], "getId", [], "method", false, false, false, 32), "html", null, true);
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "getWorkContractMode", [], "method", false, false, false, 32) != CoreExtension::getAttribute($this->env, $this->source, $context["mode"], "getId", [], "method", false, false, false, 32))) {
                yield "d-none";
            }
            yield "\">
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["mode"], "getFormFields", [], "method", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 34
                yield "                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "children", [], "any", false, false, false, 34), $context["field"], [], "array", false, false, false, 34), 'row');
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "        </fieldset>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mode'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
    <fieldset class=\"form-fieldset form-fieldset-light\">";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'rest');
        // line 41
        yield "</fieldset>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/contract.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  160 => 41,  158 => 40,  155 => 38,  148 => 36,  139 => 34,  135 => 33,  126 => 32,  122 => 31,  119 => 30,  113 => 27,  109 => 26,  106 => 25,  104 => 24,  99 => 22,  96 => 21,  94 => 20,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'user/form.html.twig' %}

{% block form_content %}

    <script>
        function toggleWorkingContractModeForm(value)
        {
            document.querySelectorAll('.work_contract_mode').forEach(function (element) {
                element.classList.add('d-none');
            });

            // Show the element with the class 'work_contract_mode_' + value
            var elementToShow = document.querySelector('.work_contract_mode_' + value);
            if (elementToShow) {
                elementToShow.classList.remove('d-none');
            }
        }
    </script>

    {% form_theme form 'form/horizontal.html.twig' %}

    {{ form_row(form._token) }}

    {% if form.workContractMode is defined  %}
        <fieldset class=\"form-fieldset form-fieldset-light border-0 pb-0\">
            <legend>{{ 'work_times_should'|trans }}</legend>
            {{ form_row(form.workContractMode, {attr:{'onchange': 'toggleWorkingContractModeForm(this.value)'}}) }}
        </fieldset>
    {% endif %}

    {% for mode in form.vars.workContractModes %}
        <fieldset class=\"form-fieldset form-fieldset-light  border-0 work_contract_mode work_contract_mode_{{ mode.getId() }} {% if user.getWorkContractMode() != mode.getId() %}d-none{% endif %}\">
            {% for field in mode.getFormFields() %}
                {{ form_row(form.children[field]) }}
            {% endfor %}
        </fieldset>
    {% endfor %}

    <fieldset class=\"form-fieldset form-fieldset-light\">
        {{- form_rest(form) -}}
    </fieldset>

{% endblock %}
", "user/contract.html.twig", "C:\\wamp64\\www\\kimai\\templates\\user\\contract.html.twig");
    }
}
