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

/* page_setup.html.twig */
class __TwigTemplate_179191279afb43d1a5215cdfd67433db extends Template
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
            'table_actions' => [$this, 'block_table_actions'],
            'form_addon' => [$this, 'block_form_addon'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_setup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_setup.html.twig"));

        // line 2
        $macros["_v0"] = $this->macros["_v0"] = $this->loadTemplate("macros/widgets.html.twig", "page_setup.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "page_setup.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_actions"));

        // line 5
        yield "    ";
        // line 6
        yield "    ";
        if ((array_key_exists("page_setup", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 6, $this->source); })()), "hasPaginationForm", [], "method", false, false, false, 6))) {
            // line 7
            yield "        <div class=\"btn-list\">
            ";
            // line 8
            $context["form"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 8, $this->source); })()), "getPaginationForm", [], "method", false, false, false, 8);
            // line 9
            yield "            ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["onchange" => "this.submit()"]]);
            yield "
            <div class=\"btn-list w-100 flex-nowrap\">
                ";
            // line 11
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", true, true, false, 11)) {
                // line 12
                yield "                    ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "date", [], "any", false, false, false, 12), 'widget');
                yield "
                ";
            }
            // line 14
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", true, true, false, 14)) {
                // line 15
                yield "                    ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), 'widget');
                yield "
                ";
            } elseif ((            // line 16
array_key_exists("user", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16) != (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })())))) {
                // line 17
                yield "                    ";
                yield $macros["_v0"]->getTemplateForMacro("macro_username", $context, 17, $this->getSourceContext())->macro_username(...[(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })())]);
                yield "
                ";
            }
            // line 19
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 20
                yield "                    ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["field"], "rendered", [], "any", false, false, false, 20)) {
                    // line 21
                    yield "                        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
                    yield "
                    ";
                }
                // line 23
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "                ";
            yield from $this->unwrap()->yieldBlock('form_addon', $context, $blocks);
            // line 25
            yield "            </div>
            ";
            // line 26
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
            yield "
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_addon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_addon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_addon"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page_setup.html.twig";
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
        return array (  161 => 24,  146 => 26,  143 => 25,  140 => 24,  134 => 23,  128 => 21,  125 => 20,  120 => 19,  114 => 17,  112 => 16,  107 => 15,  104 => 14,  98 => 12,  96 => 11,  90 => 9,  88 => 8,  85 => 7,  82 => 6,  80 => 5,  67 => 4,  56 => 1,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% from \"macros/widgets.html.twig\" import username %}

{% block table_actions %}
    {# compare templates/macros/datatables.html.twig macro actions(dataTable) #}
    {% if page_setup is defined and page_setup.hasPaginationForm() %}
        <div class=\"btn-list\">
            {% set form = page_setup.getPaginationForm() %}
            {{ form_start(form, {'attr': {'onchange': 'this.submit()'}}) }}
            <div class=\"btn-list w-100 flex-nowrap\">
                {% if form.date is defined %}
                    {{ form_widget(form.date) }}
                {% endif %}
                {% if form.user is defined %}
                    {{ form_widget(form.user) }}
                {% elseif user is defined and app.user != user %}
                    {{ username(user) }}
                {% endif %}
                {% for field in form %}
                    {% if not field.rendered %}
                        {{ form_widget(field) }}
                    {% endif %}
                {% endfor %}
                {% block form_addon %}{% endblock %}
            </div>
            {{ form_end(form) }}
        </div>
    {% endif %}
{% endblock %}
", "page_setup.html.twig", "C:\\wamp64\\www\\kimai\\templates\\page_setup.html.twig");
    }
}
