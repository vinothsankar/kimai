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

/* timesheet/edit.html.twig */
class __TwigTemplate_c08a34b1d4026ce7d75f8b004fac70f2 extends Template
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
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["kimai_context"]) || array_key_exists("kimai_context", $context) ? $context["kimai_context"] : (function () { throw new RuntimeError('Variable "kimai_context" does not exist.', 1, $this->source); })()), "modalRequest", [], "any", false, false, false, 1)) ? ("form.html.twig") : ("base.html.twig")), "timesheet/edit.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timesheet/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timesheet/edit.html.twig"));

        // line 2
        $macros["_v0"] = $this->macros["_v0"] = $this->loadTemplate("macros/widgets.html.twig", "timesheet/edit.html.twig", 2)->unwrap();
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["timesheet"]) || array_key_exists("timesheet", $context) ? $context["timesheet"] : (function () { throw new RuntimeError('Variable "timesheet" does not exist.', 5, $this->source); })()), "exported", [], "any", false, false, false, 5)) {
            // line 6
            yield "        ";
            yield $macros["_v0"]->getTemplateForMacro("macro_alert", $context, 6, $this->getSourceContext())->macro_alert(...["warning", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.locked.warning", [], "flashmessages"), null, "warning"]);
            yield "
    ";
        }
        // line 8
        yield "    ";
        $context["formOptions"] = ["template" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 9
(isset($context["kimai_context"]) || array_key_exists("kimai_context", $context) ? $context["kimai_context"] : (function () { throw new RuntimeError('Variable "kimai_context" does not exist.', 9, $this->source); })()), "modalRequest", [], "any", false, false, false, 9)) ? ("default/_form_modal.html.twig") : ("default/_form.html.twig")), "title" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 10
(isset($context["timesheet"]) || array_key_exists("timesheet", $context) ? $context["timesheet"] : (function () { throw new RuntimeError('Variable "timesheet" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.edit")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("create"))), "form" =>         // line 11
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })())];
        // line 13
        yield "    ";
        if ((array_key_exists("route_back", $context) &&  !(null === (isset($context["route_back"]) || array_key_exists("route_back", $context) ? $context["route_back"] : (function () { throw new RuntimeError('Variable "route_back" does not exist.', 13, $this->source); })())))) {
            // line 14
            yield "        ";
            $context["formOptions"] = Twig\Extension\CoreExtension::merge((isset($context["formOptions"]) || array_key_exists("formOptions", $context) ? $context["formOptions"] : (function () { throw new RuntimeError('Variable "formOptions" does not exist.', 14, $this->source); })()), ["back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route_back"]) || array_key_exists("route_back", $context) ? $context["route_back"] : (function () { throw new RuntimeError('Variable "route_back" does not exist.', 14, $this->source); })()))]);
            // line 15
            yield "    ";
        }
        // line 16
        yield "    ";
        if ( !array_key_exists("template", $context)) {
            // line 17
            yield "        ";
            $context["template"] = "timesheet/edit-default.html.twig";
            // line 18
            yield "    ";
        }
        // line 19
        yield "    ";
        yield from $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 19, $this->source); })()), "timesheet/edit.html.twig", 19)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "timesheet/edit.html.twig";
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
        return array (  111 => 19,  108 => 18,  105 => 17,  102 => 16,  99 => 15,  96 => 14,  93 => 13,  91 => 11,  90 => 10,  89 => 9,  87 => 8,  81 => 6,  78 => 5,  65 => 4,  55 => 1,  53 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends kimai_context.modalRequest ? 'form.html.twig' : 'base.html.twig' %}
{% from \"macros/widgets.html.twig\" import alert %}

{% block main %}
    {% if timesheet.exported %}
        {{ alert('warning', ('timesheet.locked.warning'|trans({}, 'flashmessages')), null, 'warning') }}
    {% endif %}
    {% set formOptions = {
        'template': kimai_context.modalRequest ? 'default/_form_modal.html.twig' : 'default/_form.html.twig',
        'title': (timesheet.id ? 'timesheet.edit'|trans : 'create'|trans),
        'form': form
    } %}
    {% if route_back is defined and route_back is not null %}
        {% set formOptions = formOptions|merge({'back': path(route_back)}) %}
    {% endif %}
    {% if template is not defined %}
        {% set template = 'timesheet/edit-default.html.twig' %}
    {% endif %}
    {% include template %}
{% endblock %}", "timesheet/edit.html.twig", "C:\\wamp64\\www\\kimai\\templates\\timesheet\\edit.html.twig");
    }
}
