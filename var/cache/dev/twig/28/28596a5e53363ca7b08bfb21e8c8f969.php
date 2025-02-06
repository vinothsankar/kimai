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

/* timesheet/edit-default.html.twig */
class __TwigTemplate_bef44d097c41b4d8bf24e8f19f87e709 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'timesheet_form' => [$this, 'block_timesheet_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timesheet/edit-default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timesheet/edit-default.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('timesheet_form', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_timesheet_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "timesheet_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "timesheet_form"));

        // line 2
        yield "    ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), ["form/horizontal.html.twig"], true);
        // line 3
        yield "    ";
        yield from $this->loadTemplate("timesheet/edit-default.html.twig", "timesheet/edit-default.html.twig", 3, "244889021")->unwrap()->yield(CoreExtension::merge($context, (isset($context["formOptions"]) || array_key_exists("formOptions", $context) ? $context["formOptions"] : (function () { throw new RuntimeError('Variable "formOptions" does not exist.', 3, $this->source); })())));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "timesheet/edit-default.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  75 => 3,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block timesheet_form %}
    {% form_theme form 'form/horizontal.html.twig' %}
    {% embed formOptions.template with formOptions %}
        {% block form_body %}
            {% if form.begin_date is defined %}
                <div class=\"mb-3 row\">
                    <label class=\"col-form-label col-sm-2 required\" for=\"{{ form.vars.name }}_begin_date\">{{ 'begin'|trans }}</label>
                    <div class=\"col-sm-5\">
                        {{ form_widget(form.begin_date, {'label': false}) }}
                        {{ form_errors(form.begin_date, {'label': false}) }}
                    </div>
                    <div class=\"col-sm-5\">
                        {{ form_widget(form.begin_time, {'label': false}) }}
                        {{ form_errors(form.begin_time, {'label': false}) }}
                    </div>
                </div>
            {% endif %}
            {% if form.end_time is defined or form.duration is defined %}
                <div class=\"mb-3 row\">
                    <label class=\"col-form-label col-sm-2\" for=\"{{ form.vars.name }}_duration\">
                        {% if form.duration is defined %}
                            {{ 'duration'|trans }}
                            {% if form.end_time is defined %} / {% endif %}
                        {% endif %}
                        {% if form.end_time is defined %}
                            {{ 'endtime'|trans }}
                        {% endif %}
                    </label>
                    {% set size = form.duration is defined and form.end_time is defined ? 5 : 10 %}
                    {% if form.duration is defined %}
                    <div class=\"col-sm-{{ size }}\">
                        {{ form_widget(form.duration, {'label': false}) }}
                        {{ form_errors(form.duration, {'label': false}) }}
                    </div>
                    {% endif %}
                    {% if form.end_time is defined %}
                    <div class=\"col-sm-{{ size }}\">
                        {{ form_widget(form.end_time, {'label': false}) }}
                        {{ form_errors(form.end_time, {'label': false}) }}
                    </div>
                    {% endif %}
                </div>
            {% else %}
                {% if form.duration is defined %}
                    {{ form_row(form.duration, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.duration.vars.name}}) }}
                {% endif %}
            {% endif %}

            {% if form.customer is defined %}
                {{ form_row(form.customer, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.customer.vars.name}}) }}
            {% endif %}
            {% if form.project is defined %}
                {{ form_row(form.project, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.project.vars.name}}) }}
            {% endif %}
            {% if form.activity is defined %}
                {{ form_row(form.activity, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.activity.vars.name}}) }}
            {% endif %}
            
            {% if form.jiraId is defined %}
                {{ form_row(form.jiraId, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.jiraId.vars.name}}) }}
            {% endif %}

            {% if form.description is defined %}
                {{ form_row(form.description, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.description.vars.name}}) }}
            {% endif %}
            {% if form.tags is defined %}
                {{ form_row(form.tags, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.tags.vars.name}}) }}
            {% endif %}
            {% if form.user is defined %}
                {{ form_row(form.user, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.user.vars.name}}) }}
            {% endif %}
            {% if form.users is defined %}
                {{ form_row(form.users, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.users.vars.name}}) }}
            {% endif %}
            {% if form.teams is defined %}
                {{ form_row(form.teams, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.teams.vars.name}}) }}
            {% endif %}
            {% if form.metaFields is defined and form.metaFields is not empty %}
                {{ form_row(form.metaFields) }}
            {% endif %}
            {% if form.fixedRate is defined or form.hourlyRate is defined or form.billable is defined or form.billableMode is defined or form.exported is defined %}
                {% embed '@theme/embeds/collapsible.html.twig' with {id: 'timesheet_extended_settings'} %}
                    {% import \"macros/widgets.html.twig\" as widgets %}
                    {% block title %}{{ 'extended_settings'|trans }}{% endblock %}
                    {% block body %}
                        {% if form.fixedRate is defined %}
                            {{ form_row(form.fixedRate, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.fixedRate.vars.name}}) }}
                        {% endif %}
                        {% if form.hourlyRate is defined %}
                            {{ form_row(form.hourlyRate, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.hourlyRate.vars.name}}) }}
                        {% endif %}
                        {% if form.billable is defined %}
                            {{ form_row(form.billable, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.billable.vars.name}}) }}
                        {% elseif form.billableMode is defined %}
                            {{ form_row(form.billableMode, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.billableMode.vars.name}}) }}
                        {% endif %}
                        {% if form.exported is defined %}
                            {{ form_row(form.exported, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.exported.vars.name}}) }}
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endif %}

            {{ form_rest(form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}", "timesheet/edit-default.html.twig", "C:\\wamp64\\www\\kimai\\templates\\timesheet\\edit-default.html.twig");
    }
}


/* timesheet/edit-default.html.twig */
class __TwigTemplate_bef44d097c41b4d8bf24e8f19f87e709___244889021 extends Template
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
            'form_body' => [$this, 'block_form_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        return $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formOptions"]) || array_key_exists("formOptions", $context) ? $context["formOptions"] : (function () { throw new RuntimeError('Variable "formOptions" does not exist.', 3, $this->source); })()), "template", [], "any", false, false, false, 3), "timesheet/edit-default.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timesheet/edit-default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timesheet/edit-default.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_body"));

        // line 5
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "begin_date", [], "any", true, true, false, 5)) {
            // line 6
            yield "                <div class=\"mb-3 row\">
                    <label class=\"col-form-label col-sm-2 required\" for=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
            yield "_begin_date\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("begin"), "html", null, true);
            yield "</label>
                    <div class=\"col-sm-5\">
                        ";
            // line 9
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "begin_date", [], "any", false, false, false, 9), 'widget', ["label" => false]);
            yield "
                        ";
            // line 10
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "begin_date", [], "any", false, false, false, 10), 'errors', ["label" => false]);
            yield "
                    </div>
                    <div class=\"col-sm-5\">
                        ";
            // line 13
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "begin_time", [], "any", false, false, false, 13), 'widget', ["label" => false]);
            yield "
                        ";
            // line 14
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "begin_time", [], "any", false, false, false, 14), 'errors', ["label" => false]);
            yield "
                    </div>
                </div>
            ";
        }
        // line 18
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "end_time", [], "any", true, true, false, 18) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "duration", [], "any", true, true, false, 18))) {
            // line 19
            yield "                <div class=\"mb-3 row\">
                    <label class=\"col-form-label col-sm-2\" for=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
            yield "_duration\">
                        ";
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "duration", [], "any", true, true, false, 21)) {
                // line 22
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("duration"), "html", null, true);
                yield "
                            ";
                // line 23
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "end_time", [], "any", true, true, false, 23)) {
                    yield " / ";
                }
                // line 24
                yield "                        ";
            }
            // line 25
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "end_time", [], "any", true, true, false, 25)) {
                // line 26
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("endtime"), "html", null, true);
                yield "
                        ";
            }
            // line 28
            yield "                    </label>
                    ";
            // line 29
            $context["size"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "duration", [], "any", true, true, false, 29) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "end_time", [], "any", true, true, false, 29))) ? (5) : (10));
            // line 30
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "duration", [], "any", true, true, false, 30)) {
                // line 31
                yield "                    <div class=\"col-sm-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 31, $this->source); })()), "html", null, true);
                yield "\">
                        ";
                // line 32
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "duration", [], "any", false, false, false, 32), 'widget', ["label" => false]);
                yield "
                        ";
                // line 33
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "duration", [], "any", false, false, false, 33), 'errors', ["label" => false]);
                yield "
                    </div>
                    ";
            }
            // line 36
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "end_time", [], "any", true, true, false, 36)) {
                // line 37
                yield "                    <div class=\"col-sm-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 37, $this->source); })()), "html", null, true);
                yield "\">
                        ";
                // line 38
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "end_time", [], "any", false, false, false, 38), 'widget', ["label" => false]);
                yield "
                        ";
                // line 39
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "end_time", [], "any", false, false, false, 39), 'errors', ["label" => false]);
                yield "
                    </div>
                    ";
            }
            // line 42
            yield "                </div>
            ";
        } else {
            // line 44
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "duration", [], "any", true, true, false, 44)) {
                // line 45
                yield "                    ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "duration", [], "any", false, false, false, 45), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "duration", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45))]]);
                yield "
                ";
            }
            // line 47
            yield "            ";
        }
        // line 48
        yield "
            ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "customer", [], "any", true, true, false, 49)) {
            // line 50
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "customer", [], "any", false, false, false, 50), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "vars", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "customer", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50))]]);
            yield "
            ";
        }
        // line 52
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "project", [], "any", true, true, false, 52)) {
            // line 53
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "project", [], "any", false, false, false, 53), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "vars", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "project", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53))]]);
            yield "
            ";
        }
        // line 55
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "activity", [], "any", true, true, false, 55)) {
            // line 56
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "activity", [], "any", false, false, false, 56), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "vars", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "activity", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56))]]);
            yield "
            ";
        }
        // line 58
        yield "            
            ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "jiraId", [], "any", true, true, false, 59)) {
            // line 60
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "jiraId", [], "any", false, false, false, 60), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "jiraId", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60))]]);
            yield "
            ";
        }
        // line 62
        yield "
            ";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", true, true, false, 63)) {
            // line 64
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "vars", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64))]]);
            yield "
            ";
        }
        // line 66
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "tags", [], "any", true, true, false, 66)) {
            // line 67
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "tags", [], "any", false, false, false, 67), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "vars", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "tags", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67))]]);
            yield "
            ";
        }
        // line 69
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", true, true, false, 69)) {
            // line 70
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "vars", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70))]]);
            yield "
            ";
        }
        // line 72
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "users", [], "any", true, true, false, 72)) {
            // line 73
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "users", [], "any", false, false, false, 73), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vars", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "users", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73))]]);
            yield "
            ";
        }
        // line 75
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "teams", [], "any", true, true, false, 75)) {
            // line 76
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "teams", [], "any", false, false, false, 76), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "vars", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "teams", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76))]]);
            yield "
            ";
        }
        // line 78
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "metaFields", [], "any", true, true, false, 78) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "metaFields", [], "any", false, false, false, 78)))) {
            // line 79
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "metaFields", [], "any", false, false, false, 79), 'row');
            yield "
            ";
        }
        // line 81
        yield "            ";
        if (((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fixedRate", [], "any", true, true, false, 81) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hourlyRate", [], "any", true, true, false, 81)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "billable", [], "any", true, true, false, 81)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "billableMode", [], "any", true, true, false, 81)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "exported", [], "any", true, true, false, 81))) {
            // line 82
            yield "                ";
            yield from $this->loadTemplate("timesheet/edit-default.html.twig", "timesheet/edit-default.html.twig", 82, "1858301539")->unwrap()->yield(CoreExtension::merge($context, ["id" => "timesheet_extended_settings"]));
            // line 102
            yield "            ";
        }
        // line 103
        yield "
            ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'rest');
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
        return "timesheet/edit-default.html.twig";
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
        return array (  504 => 104,  501 => 103,  498 => 102,  495 => 82,  492 => 81,  486 => 79,  483 => 78,  477 => 76,  474 => 75,  468 => 73,  465 => 72,  459 => 70,  456 => 69,  450 => 67,  447 => 66,  441 => 64,  439 => 63,  436 => 62,  430 => 60,  428 => 59,  425 => 58,  419 => 56,  416 => 55,  410 => 53,  407 => 52,  401 => 50,  399 => 49,  396 => 48,  393 => 47,  387 => 45,  384 => 44,  380 => 42,  374 => 39,  370 => 38,  365 => 37,  362 => 36,  356 => 33,  352 => 32,  347 => 31,  344 => 30,  342 => 29,  339 => 28,  333 => 26,  330 => 25,  327 => 24,  323 => 23,  318 => 22,  316 => 21,  312 => 20,  309 => 19,  306 => 18,  299 => 14,  295 => 13,  289 => 10,  285 => 9,  278 => 7,  275 => 6,  272 => 5,  259 => 4,  75 => 3,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block timesheet_form %}
    {% form_theme form 'form/horizontal.html.twig' %}
    {% embed formOptions.template with formOptions %}
        {% block form_body %}
            {% if form.begin_date is defined %}
                <div class=\"mb-3 row\">
                    <label class=\"col-form-label col-sm-2 required\" for=\"{{ form.vars.name }}_begin_date\">{{ 'begin'|trans }}</label>
                    <div class=\"col-sm-5\">
                        {{ form_widget(form.begin_date, {'label': false}) }}
                        {{ form_errors(form.begin_date, {'label': false}) }}
                    </div>
                    <div class=\"col-sm-5\">
                        {{ form_widget(form.begin_time, {'label': false}) }}
                        {{ form_errors(form.begin_time, {'label': false}) }}
                    </div>
                </div>
            {% endif %}
            {% if form.end_time is defined or form.duration is defined %}
                <div class=\"mb-3 row\">
                    <label class=\"col-form-label col-sm-2\" for=\"{{ form.vars.name }}_duration\">
                        {% if form.duration is defined %}
                            {{ 'duration'|trans }}
                            {% if form.end_time is defined %} / {% endif %}
                        {% endif %}
                        {% if form.end_time is defined %}
                            {{ 'endtime'|trans }}
                        {% endif %}
                    </label>
                    {% set size = form.duration is defined and form.end_time is defined ? 5 : 10 %}
                    {% if form.duration is defined %}
                    <div class=\"col-sm-{{ size }}\">
                        {{ form_widget(form.duration, {'label': false}) }}
                        {{ form_errors(form.duration, {'label': false}) }}
                    </div>
                    {% endif %}
                    {% if form.end_time is defined %}
                    <div class=\"col-sm-{{ size }}\">
                        {{ form_widget(form.end_time, {'label': false}) }}
                        {{ form_errors(form.end_time, {'label': false}) }}
                    </div>
                    {% endif %}
                </div>
            {% else %}
                {% if form.duration is defined %}
                    {{ form_row(form.duration, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.duration.vars.name}}) }}
                {% endif %}
            {% endif %}

            {% if form.customer is defined %}
                {{ form_row(form.customer, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.customer.vars.name}}) }}
            {% endif %}
            {% if form.project is defined %}
                {{ form_row(form.project, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.project.vars.name}}) }}
            {% endif %}
            {% if form.activity is defined %}
                {{ form_row(form.activity, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.activity.vars.name}}) }}
            {% endif %}
            
            {% if form.jiraId is defined %}
                {{ form_row(form.jiraId, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.jiraId.vars.name}}) }}
            {% endif %}

            {% if form.description is defined %}
                {{ form_row(form.description, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.description.vars.name}}) }}
            {% endif %}
            {% if form.tags is defined %}
                {{ form_row(form.tags, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.tags.vars.name}}) }}
            {% endif %}
            {% if form.user is defined %}
                {{ form_row(form.user, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.user.vars.name}}) }}
            {% endif %}
            {% if form.users is defined %}
                {{ form_row(form.users, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.users.vars.name}}) }}
            {% endif %}
            {% if form.teams is defined %}
                {{ form_row(form.teams, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.teams.vars.name}}) }}
            {% endif %}
            {% if form.metaFields is defined and form.metaFields is not empty %}
                {{ form_row(form.metaFields) }}
            {% endif %}
            {% if form.fixedRate is defined or form.hourlyRate is defined or form.billable is defined or form.billableMode is defined or form.exported is defined %}
                {% embed '@theme/embeds/collapsible.html.twig' with {id: 'timesheet_extended_settings'} %}
                    {% import \"macros/widgets.html.twig\" as widgets %}
                    {% block title %}{{ 'extended_settings'|trans }}{% endblock %}
                    {% block body %}
                        {% if form.fixedRate is defined %}
                            {{ form_row(form.fixedRate, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.fixedRate.vars.name}}) }}
                        {% endif %}
                        {% if form.hourlyRate is defined %}
                            {{ form_row(form.hourlyRate, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.hourlyRate.vars.name}}) }}
                        {% endif %}
                        {% if form.billable is defined %}
                            {{ form_row(form.billable, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.billable.vars.name}}) }}
                        {% elseif form.billableMode is defined %}
                            {{ form_row(form.billableMode, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.billableMode.vars.name}}) }}
                        {% endif %}
                        {% if form.exported is defined %}
                            {{ form_row(form.exported, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.exported.vars.name}}) }}
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endif %}

            {{ form_rest(form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}", "timesheet/edit-default.html.twig", "C:\\wamp64\\www\\kimai\\templates\\timesheet\\edit-default.html.twig");
    }
}


/* timesheet/edit-default.html.twig */
class __TwigTemplate_bef44d097c41b4d8bf24e8f19f87e709___1858301539 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 82
        return "@theme/embeds/collapsible.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timesheet/edit-default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timesheet/edit-default.html.twig"));

        // line 83
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "timesheet/edit-default.html.twig", 83)->unwrap();
        // line 82
        $this->parent = $this->loadTemplate("@theme/embeds/collapsible.html.twig", "timesheet/edit-default.html.twig", 82);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("extended_settings"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 86
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fixedRate", [], "any", true, true, false, 86)) {
            // line 87
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "fixedRate", [], "any", false, false, false, 87), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "vars", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "fixedRate", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87))]]);
            yield "
                        ";
        }
        // line 89
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hourlyRate", [], "any", true, true, false, 89)) {
            // line 90
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "hourlyRate", [], "any", false, false, false, 90), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "vars", [], "any", false, false, false, 90), "name", [], "any", false, false, false, 90)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "hourlyRate", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "name", [], "any", false, false, false, 90))]]);
            yield "
                        ";
        }
        // line 92
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "billable", [], "any", true, true, false, 92)) {
            // line 93
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "billable", [], "any", false, false, false, 93), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "vars", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "billable", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93))]]);
            yield "
                        ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 94
($context["form"] ?? null), "billableMode", [], "any", true, true, false, 94)) {
            // line 95
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "billableMode", [], "any", false, false, false, 95), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "vars", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "billableMode", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95))]]);
            yield "
                        ";
        }
        // line 97
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "exported", [], "any", true, true, false, 97)) {
            // line 98
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "exported", [], "any", false, false, false, 98), 'row', ["row_attr" => ["class" => ((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "vars", [], "any", false, false, false, 98), "name", [], "any", false, false, false, 98)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "exported", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "name", [], "any", false, false, false, 98))]]);
            yield "
                        ";
        }
        // line 100
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "timesheet/edit-default.html.twig";
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
        return array (  782 => 100,  776 => 98,  773 => 97,  767 => 95,  765 => 94,  760 => 93,  757 => 92,  751 => 90,  748 => 89,  742 => 87,  739 => 86,  726 => 85,  703 => 84,  692 => 82,  690 => 83,  677 => 82,  504 => 104,  501 => 103,  498 => 102,  495 => 82,  492 => 81,  486 => 79,  483 => 78,  477 => 76,  474 => 75,  468 => 73,  465 => 72,  459 => 70,  456 => 69,  450 => 67,  447 => 66,  441 => 64,  439 => 63,  436 => 62,  430 => 60,  428 => 59,  425 => 58,  419 => 56,  416 => 55,  410 => 53,  407 => 52,  401 => 50,  399 => 49,  396 => 48,  393 => 47,  387 => 45,  384 => 44,  380 => 42,  374 => 39,  370 => 38,  365 => 37,  362 => 36,  356 => 33,  352 => 32,  347 => 31,  344 => 30,  342 => 29,  339 => 28,  333 => 26,  330 => 25,  327 => 24,  323 => 23,  318 => 22,  316 => 21,  312 => 20,  309 => 19,  306 => 18,  299 => 14,  295 => 13,  289 => 10,  285 => 9,  278 => 7,  275 => 6,  272 => 5,  259 => 4,  75 => 3,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block timesheet_form %}
    {% form_theme form 'form/horizontal.html.twig' %}
    {% embed formOptions.template with formOptions %}
        {% block form_body %}
            {% if form.begin_date is defined %}
                <div class=\"mb-3 row\">
                    <label class=\"col-form-label col-sm-2 required\" for=\"{{ form.vars.name }}_begin_date\">{{ 'begin'|trans }}</label>
                    <div class=\"col-sm-5\">
                        {{ form_widget(form.begin_date, {'label': false}) }}
                        {{ form_errors(form.begin_date, {'label': false}) }}
                    </div>
                    <div class=\"col-sm-5\">
                        {{ form_widget(form.begin_time, {'label': false}) }}
                        {{ form_errors(form.begin_time, {'label': false}) }}
                    </div>
                </div>
            {% endif %}
            {% if form.end_time is defined or form.duration is defined %}
                <div class=\"mb-3 row\">
                    <label class=\"col-form-label col-sm-2\" for=\"{{ form.vars.name }}_duration\">
                        {% if form.duration is defined %}
                            {{ 'duration'|trans }}
                            {% if form.end_time is defined %} / {% endif %}
                        {% endif %}
                        {% if form.end_time is defined %}
                            {{ 'endtime'|trans }}
                        {% endif %}
                    </label>
                    {% set size = form.duration is defined and form.end_time is defined ? 5 : 10 %}
                    {% if form.duration is defined %}
                    <div class=\"col-sm-{{ size }}\">
                        {{ form_widget(form.duration, {'label': false}) }}
                        {{ form_errors(form.duration, {'label': false}) }}
                    </div>
                    {% endif %}
                    {% if form.end_time is defined %}
                    <div class=\"col-sm-{{ size }}\">
                        {{ form_widget(form.end_time, {'label': false}) }}
                        {{ form_errors(form.end_time, {'label': false}) }}
                    </div>
                    {% endif %}
                </div>
            {% else %}
                {% if form.duration is defined %}
                    {{ form_row(form.duration, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.duration.vars.name}}) }}
                {% endif %}
            {% endif %}

            {% if form.customer is defined %}
                {{ form_row(form.customer, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.customer.vars.name}}) }}
            {% endif %}
            {% if form.project is defined %}
                {{ form_row(form.project, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.project.vars.name}}) }}
            {% endif %}
            {% if form.activity is defined %}
                {{ form_row(form.activity, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.activity.vars.name}}) }}
            {% endif %}
            
            {% if form.jiraId is defined %}
                {{ form_row(form.jiraId, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.jiraId.vars.name}}) }}
            {% endif %}

            {% if form.description is defined %}
                {{ form_row(form.description, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.description.vars.name}}) }}
            {% endif %}
            {% if form.tags is defined %}
                {{ form_row(form.tags, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.tags.vars.name}}) }}
            {% endif %}
            {% if form.user is defined %}
                {{ form_row(form.user, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.user.vars.name}}) }}
            {% endif %}
            {% if form.users is defined %}
                {{ form_row(form.users, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.users.vars.name}}) }}
            {% endif %}
            {% if form.teams is defined %}
                {{ form_row(form.teams, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.teams.vars.name}}) }}
            {% endif %}
            {% if form.metaFields is defined and form.metaFields is not empty %}
                {{ form_row(form.metaFields) }}
            {% endif %}
            {% if form.fixedRate is defined or form.hourlyRate is defined or form.billable is defined or form.billableMode is defined or form.exported is defined %}
                {% embed '@theme/embeds/collapsible.html.twig' with {id: 'timesheet_extended_settings'} %}
                    {% import \"macros/widgets.html.twig\" as widgets %}
                    {% block title %}{{ 'extended_settings'|trans }}{% endblock %}
                    {% block body %}
                        {% if form.fixedRate is defined %}
                            {{ form_row(form.fixedRate, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.fixedRate.vars.name}}) }}
                        {% endif %}
                        {% if form.hourlyRate is defined %}
                            {{ form_row(form.hourlyRate, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.hourlyRate.vars.name}}) }}
                        {% endif %}
                        {% if form.billable is defined %}
                            {{ form_row(form.billable, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.billable.vars.name}}) }}
                        {% elseif form.billableMode is defined %}
                            {{ form_row(form.billableMode, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.billableMode.vars.name}}) }}
                        {% endif %}
                        {% if form.exported is defined %}
                            {{ form_row(form.exported, {'row_attr': {'class': 'mb-3 ' ~ form.vars.name ~ '_row_' ~ form.exported.vars.name}}) }}
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endif %}

            {{ form_rest(form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}", "timesheet/edit-default.html.twig", "C:\\wamp64\\www\\kimai\\templates\\timesheet\\edit-default.html.twig");
    }
}
