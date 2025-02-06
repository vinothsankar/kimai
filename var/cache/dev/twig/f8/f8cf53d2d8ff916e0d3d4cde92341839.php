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

/* reporting/project_view.html.twig */
class __TwigTemplate_3568a7d11b1515e8bd00b4fe5ff0cb99 extends Template
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
            'report_form_layout' => [$this, 'block_report_form_layout'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "reporting/project_list_data.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reporting/project_view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reporting/project_view.html.twig"));

        $this->parent = $this->loadTemplate("reporting/project_list_data.html.twig", "reporting/project_view.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_report_form_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "report_form_layout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "report_form_layout"));

        // line 4
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "customer", [], "any", false, false, false, 4), 'widget', ["label" => false, "placeholder" => "customer"]);
        yield "
    <div class=\"dropdown\">
        <button type=\"button\" class=\"btn dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            ";
        // line 7
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("filter", true);
        yield "
        </button>
        <ul class=\"dropdown-menu checkbox-menu\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "budgetType", [], "any", false, false, false, 10), "children", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 11
            yield "                <li class=\"dropdown-item\">
                    ";
            // line 12
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["option"], 'widget');
            yield "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "            <li class=\"dropdown-divider\"></li>
            <li class=\"dropdown-item\">
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "includeNoWork", [], "any", false, false, false, 17), 'widget');
        yield "
            </li>
        </ul>
    </div>
    ";
        // line 21
        $macros["_v0"] = $this->loadTemplate("@theme/components/buttons.html.twig", "reporting/project_view.html.twig", 21)->unwrap();
        // line 22
        yield "    ";
        yield $macros["_v0"]->getTemplateForMacro("macro_submit_button", $context, 22, $this->getSourceContext())->macro_submit_button(...["download", ["attr" => ["formaction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["export_route"]) || array_key_exists("export_route", $context) ? $context["export_route"] : (function () { throw new RuntimeError('Variable "export_route" does not exist.', 22, $this->source); })()))], "icon" => "download", "combined" => false], "primary"]);
        yield "
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
        return "reporting/project_view.html.twig";
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
        return array (  118 => 22,  116 => 21,  109 => 17,  105 => 15,  96 => 12,  93 => 11,  89 => 10,  83 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'reporting/project_list_data.html.twig' %}

{% block report_form_layout %}
    {{ form_widget(form.customer, {'label': false, 'placeholder': 'customer'}) }}
    <div class=\"dropdown\">
        <button type=\"button\" class=\"btn dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            {{ icon('filter', true) }}
        </button>
        <ul class=\"dropdown-menu checkbox-menu\">
            {% for option in form.budgetType.children %}
                <li class=\"dropdown-item\">
                    {{ form_widget(option) }}
                </li>
            {% endfor %}
            <li class=\"dropdown-divider\"></li>
            <li class=\"dropdown-item\">
                {{ form_widget(form.includeNoWork) }}
            </li>
        </ul>
    </div>
    {% from '@theme/components/buttons.html.twig' import submit_button %}
    {{ submit_button('download', {'attr': {'formaction': path(export_route)}, 'icon': 'download', 'combined': false}, 'primary') }}
{% endblock %}
", "reporting/project_view.html.twig", "C:\\wamp64\\www\\kimai\\templates\\reporting\\project_view.html.twig");
    }
}
