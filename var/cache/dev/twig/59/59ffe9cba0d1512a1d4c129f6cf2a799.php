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

/* reporting/project_list_data.html.twig */
class __TwigTemplate_723d15638d8170aefeb662ca92bdf5d8 extends Template
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
            'main_before' => [$this, 'block_main_before'],
            'report' => [$this, 'block_report'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "reporting/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reporting/project_list_data.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reporting/project_list_data.html.twig"));

        // line 2
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "reporting/project_list_data.html.twig", 2)->unwrap();
        // line 4
        $context["showMoneyBudget"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("budget_money", "project");
        // line 5
        $context["showTimeBudget"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("budget_time", "project");
        // line 7
        $context["availableColumns"] = ["name" => ["class" => "alwaysVisible"]];
        // line 10
        if ((isset($context["showTimeBudget"]) || array_key_exists("showTimeBudget", $context) ? $context["showTimeBudget"] : (function () { throw new RuntimeError('Variable "showTimeBudget" does not exist.', 10, $this->source); })())) {
            // line 11
            $context["availableColumns"] = Twig\Extension\CoreExtension::merge((isset($context["availableColumns"]) || array_key_exists("availableColumns", $context) ? $context["availableColumns"] : (function () { throw new RuntimeError('Variable "availableColumns" does not exist.', 11, $this->source); })()), ["timeBudget" => ["class" => "d-none d-md-table-cell", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timeBudget")]]);
        }
        // line 15
        if ((isset($context["showMoneyBudget"]) || array_key_exists("showMoneyBudget", $context) ? $context["showMoneyBudget"] : (function () { throw new RuntimeError('Variable "showMoneyBudget" does not exist.', 15, $this->source); })())) {
            // line 16
            $context["availableColumns"] = Twig\Extension\CoreExtension::merge((isset($context["availableColumns"]) || array_key_exists("availableColumns", $context) ? $context["availableColumns"] : (function () { throw new RuntimeError('Variable "availableColumns" does not exist.', 16, $this->source); })()), ["budget" => ["class" => "d-none d-md-table-cell", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("budget")]]);
        }
        // line 20
        $context["availableColumns"] = Twig\Extension\CoreExtension::merge((isset($context["availableColumns"]) || array_key_exists("availableColumns", $context) ? $context["availableColumns"] : (function () { throw new RuntimeError('Variable "availableColumns" does not exist.', 20, $this->source); })()), ["lastRecord" => ["class" => "d-none d-sm-table-cell text-start hw-min w-min", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("last_record"), "columnClass" => "w-min"], "today" => ["class" => "d-none text-end hw-min w-min", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.durationToday")], "week" => ["class" => "d-none text-end hw-min w-min", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.durationWeek")], "month" => ["class" => "d-none d-lg-table-cell text-end hw-min w-min", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.durationMonth")], "durationTotal" => ["class" => "text-end hw-min w-min", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.durationTotal"), "columnClass" => "w-min"]]);
        // line 27
        if (((isset($context["showTimeBudget"]) || array_key_exists("showTimeBudget", $context) ? $context["showTimeBudget"] : (function () { throw new RuntimeError('Variable "showTimeBudget" does not exist.', 27, $this->source); })()) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_export"))) {
            // line 28
            $context["availableColumns"] = Twig\Extension\CoreExtension::merge((isset($context["availableColumns"]) || array_key_exists("availableColumns", $context) ? $context["availableColumns"] : (function () { throw new RuntimeError('Variable "availableColumns" does not exist.', 28, $this->source); })()), ["exported" => ["class" => "d-none d-xl-table-cell text-end hw-min w-min", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("not_exported"), "columnClass" => "w-min"]]);
        }
        // line 32
        if (((isset($context["showMoneyBudget"]) || array_key_exists("showMoneyBudget", $context) ? $context["showMoneyBudget"] : (function () { throw new RuntimeError('Variable "showMoneyBudget" does not exist.', 32, $this->source); })()) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_invoice"))) {
            // line 33
            $context["availableColumns"] = Twig\Extension\CoreExtension::merge((isset($context["availableColumns"]) || array_key_exists("availableColumns", $context) ? $context["availableColumns"] : (function () { throw new RuntimeError('Variable "availableColumns" does not exist.', 33, $this->source); })()), ["invoiced" => ["class" => "d-none d-xl-table-cell text-end hw-min w-min", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("not_invoiced"), "columnClass" => "w-min"]]);
        }
        // line 37
        $context["availableColumns"] = Twig\Extension\CoreExtension::merge((isset($context["availableColumns"]) || array_key_exists("availableColumns", $context) ? $context["availableColumns"] : (function () { throw new RuntimeError('Variable "availableColumns" does not exist.', 37, $this->source); })()), ["projectStart" => ["class" => "d-none text-start hw-min w-min", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project_start")], "projectEnd" => ["class" => "d-none text-start hw-min w-min", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project_end")], "comment" => ["class" => "d-none", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("comment")], "actions" => ["class" => "actions alwaysVisible"]]);
        // line 43
        $context["tableName"] = ((array_key_exists("tableName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tableName"]) || array_key_exists("tableName", $context) ? $context["tableName"] : (function () { throw new RuntimeError('Variable "tableName" does not exist.', 43, $this->source); })()), "project_view_reporting")) : ("project_view_reporting"));
        // line 44
        $context["skipColumns"] = ((array_key_exists("skipColumns", $context)) ? ((isset($context["skipColumns"]) || array_key_exists("skipColumns", $context) ? $context["skipColumns"] : (function () { throw new RuntimeError('Variable "skipColumns" does not exist.', 44, $this->source); })())) : ([]));
        // line 45
        $context["columns"] = [];
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableColumns"]) || array_key_exists("availableColumns", $context) ? $context["availableColumns"] : (function () { throw new RuntimeError('Variable "availableColumns" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["config"]) {
            // line 47
            if (!CoreExtension::inFilter($context["name"], (isset($context["skipColumns"]) || array_key_exists("skipColumns", $context) ? $context["skipColumns"] : (function () { throw new RuntimeError('Variable "skipColumns" does not exist.', 47, $this->source); })()))) {
                // line 48
                $context["columns"] = Twig\Extension\CoreExtension::merge((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 48, $this->source); })()), [ (string)$context["name"] => $context["config"]]);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['config'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent = $this->loadTemplate("reporting/layout.html.twig", "reporting/project_list_data.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_before(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_before"));

        // line 53
        yield "    ";
        yield $macros["tables"]->getTemplateForMacro("macro_data_table_column_modal", $context, 53, $this->getSourceContext())->macro_data_table_column_modal(...[(isset($context["tableName"]) || array_key_exists("tableName", $context) ? $context["tableName"] : (function () { throw new RuntimeError('Variable "tableName" does not exist.', 53, $this->source); })()), (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 53, $this->source); })())]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_report(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "report"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "report"));

        // line 57
        yield "
    ";
        // line 58
        $context["hasData"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 58, $this->source); })())) > 0);
        // line 59
        yield "
    ";
        // line 60
        yield from $this->loadTemplate("reporting/project_list_data.html.twig", "reporting/project_list_data.html.twig", 60, "615461337")->unwrap()->yield($context);
        // line 133
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
        return "reporting/project_list_data.html.twig";
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
        return array (  166 => 133,  164 => 60,  161 => 59,  159 => 58,  156 => 57,  143 => 56,  129 => 53,  116 => 52,  105 => 1,  98 => 48,  96 => 47,  92 => 46,  90 => 45,  88 => 44,  86 => 43,  84 => 37,  81 => 33,  79 => 32,  76 => 28,  74 => 27,  72 => 20,  69 => 16,  67 => 15,  64 => 11,  62 => 10,  60 => 7,  58 => 5,  56 => 4,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'reporting/layout.html.twig' %}
{% import \"macros/datatables.html.twig\" as tables %}

{% set showMoneyBudget = is_granted('budget_money', 'project') %}
{% set showTimeBudget = is_granted('budget_time', 'project') %}

{% set availableColumns = {
    'name':          {'class': 'alwaysVisible'},
} %}
{% if showTimeBudget %}
    {% set availableColumns = availableColumns|merge({
        'timeBudget':    {'class': 'd-none d-md-table-cell', 'title': 'timeBudget'|trans},
    }) %}
{% endif %}
{% if showMoneyBudget %}
    {% set availableColumns = availableColumns|merge({
        'budget':        {'class': 'd-none d-md-table-cell', 'title': 'budget'|trans},
    }) %}
{% endif %}
{% set availableColumns = availableColumns|merge({
    'lastRecord':       {'class': 'd-none d-sm-table-cell text-start hw-min w-min', 'title': 'last_record'|trans, 'columnClass': 'w-min'},
    'today':            {'class': 'd-none text-end hw-min w-min', 'title': 'stats.durationToday'|trans},
    'week':             {'class': 'd-none text-end hw-min w-min', 'title': 'stats.durationWeek'|trans},
    'month':            {'class': 'd-none d-lg-table-cell text-end hw-min w-min', 'title': 'stats.durationMonth'|trans},
    'durationTotal':    {'class': 'text-end hw-min w-min', 'title': 'stats.durationTotal'|trans, 'columnClass': 'w-min'},
}) %}
{% if showTimeBudget and is_granted('create_export') %}
    {% set availableColumns = availableColumns|merge({
        'exported':         {'class': 'd-none d-xl-table-cell text-end hw-min w-min', 'title': 'not_exported'|trans, 'columnClass': 'w-min'},
    }) %}
{% endif %}
{% if showMoneyBudget and is_granted('view_invoice') %}
    {% set availableColumns = availableColumns|merge({
        'invoiced':         {'class': 'd-none d-xl-table-cell text-end hw-min w-min', 'title': 'not_invoiced'|trans, 'columnClass': 'w-min'},
    }) %}
{% endif %}
{% set availableColumns = availableColumns|merge({
    'projectStart':     {'class': 'd-none text-start hw-min w-min', 'title': 'project_start'|trans},
    'projectEnd':       {'class': 'd-none text-start hw-min w-min', 'title': 'project_end'|trans},
    'comment':          {'class': 'd-none', 'title': 'comment'|trans},
    'actions':          {'class': 'actions alwaysVisible'},
}) %}
{% set tableName = tableName|default('project_view_reporting') %}
{% set skipColumns = skipColumns is defined ? skipColumns : {} %}
{% set columns = {} %}
{% for name, config in availableColumns %}
    {% if name not in skipColumns %}
        {% set columns = columns|merge({(name): config}) %}
    {% endif %}
{% endfor %}

{% block main_before %}
    {{ tables.data_table_column_modal(tableName, columns) }}
{% endblock %}

{% block report %}

    {% set hasData = entries|length > 0 %}

    {% embed '@theme/embeds/card.html.twig' %}
        {% import \"macros/progressbar.html.twig\" as progress %}
        {% import \"macros/widgets.html.twig\" as widgets %}
        {% import \"macros/datatables.html.twig\" as tables %}
        {% import \"project/actions.html.twig\" as projectActions %}
        {% block box_body_class %}{{ tableName }}-box {% if hasData %}p-0{% endif %}{% endblock %}
        {% block box_body %}
            {% if not hasData %}
                {{ widgets.nothing_found() }}
            {% else %}
                {{ tables.datatable_header(tableName, columns, null, {boxClass: ''}) }}

                {% for id, mapping in entries|sort((a, b) => a.customer.name <=> b.customer.name) %}
                    <tr class=\"summary\">
                        <td colspan=\"{{ columns|length }}\">{{ widgets.label_customer(mapping.customer) }}</td>
                    </tr>
                    {% for entry in mapping.projects|sort((a, b) => a.project.name <=> b.project.name) %}
                        {% set project = entry.project %}
                        {% set budgetStats = entry.getBudgetStatisticModel() %}
                        {% set currency = project.customer.currency %}
                        <tr {{ widgets.project_row_attr(project, now) }}>
                        {% for name, column_config in columns %}
                            <td class=\"{{ tables.data_table_column_class(tableName, columns, name) }}\">
                            {% if name == 'name' %}
                                {{ widgets.label_project(project) }}
                            {% elseif name == 'lastRecord' %}
                                {% if entry.lastRecord is not null %}
                                    {{ entry.lastRecord|date_short }}
                                {% else %}
                                    &ndash;
                                {% endif %}
                            {% elseif name == 'today' %}
                                {{ entry.durationDay|duration }}
                            {% elseif name == 'week' %}
                                {{ entry.durationWeek|duration }}
                            {% elseif name == 'month' %}
                                {{ entry.durationMonth|duration }}
                            {% elseif name == 'durationTotal' %}
                                {{ entry.durationTotal|duration }}
                            {% elseif name == 'timeBudget' %}
                                {% if budgetStats.hasTimeBudget() and is_granted('time', project) %}
                                    {{ progress.progressbar_timebudget(budgetStats) }}
                                {% endif %}
                            {% elseif name == 'budget' %}
                                {% if project.hasBudget() and is_granted('budget', project) %}
                                    {{ progress.progressbar_budget(budgetStats, project.customer.currency) }}
                                {% endif %}
                            {% elseif name == 'exported' %}
                                <a href=\"{{ path('export', {'customers[]': project.customer.id, 'projects[]': project.id, 'daterange': '', 'preview': true}) }}\">
                                    {{ entry.notExportedDuration|duration }}
                                </a>
                            {% elseif name == 'invoiced' %}
                                <a href=\"{{ path('invoice', {'customers[]': project.customer.id, 'projects[]': project.id, 'daterange': ''}) }}\">
                                    {{ entry.notExportedRate|money(currency) }}
                                </a>
                            {% elseif name == 'projectStart' %}
                                {% if project.start is not null %}{{ project.start|date_short }}{% endif %}
                            {% elseif name == 'projectEnd' %}
                                {% if project.end is not null %}{{ project.end|date_short }}{% endif %}
                            {% elseif name == 'comment' %}
                                {{ project.comment }}
                            {% elseif name == 'actions' %}
                                {{ projectActions.project(project, 'custom') }}
                            {% endif %}
                            </td>
                        {% endfor %}
                        </tr>
                    {% endfor %}
                {% endfor %}
                {{ tables.data_table_footer(entries) }}
            {% endif %}
        {% endblock %}
    {% endembed %}

{% endblock %}
", "reporting/project_list_data.html.twig", "C:\\wamp64\\www\\kimai\\templates\\reporting\\project_list_data.html.twig");
    }
}


/* reporting/project_list_data.html.twig */
class __TwigTemplate_723d15638d8170aefeb662ca92bdf5d8___615461337 extends Template
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
            'box_body_class' => [$this, 'block_box_body_class'],
            'box_body' => [$this, 'block_box_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 60
        return "@theme/embeds/card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reporting/project_list_data.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reporting/project_list_data.html.twig"));

        // line 61
        $macros["progress"] = $this->macros["progress"] = $this->loadTemplate("macros/progressbar.html.twig", "reporting/project_list_data.html.twig", 61)->unwrap();
        // line 62
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "reporting/project_list_data.html.twig", 62)->unwrap();
        // line 63
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "reporting/project_list_data.html.twig", 63)->unwrap();
        // line 64
        $macros["projectActions"] = $this->macros["projectActions"] = $this->loadTemplate("project/actions.html.twig", "reporting/project_list_data.html.twig", 64)->unwrap();
        // line 60
        $this->parent = $this->loadTemplate("@theme/embeds/card.html.twig", "reporting/project_list_data.html.twig", 60);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_class"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tableName"]) || array_key_exists("tableName", $context) ? $context["tableName"] : (function () { throw new RuntimeError('Variable "tableName" does not exist.', 65, $this->source); })()), "html", null, true);
        yield "-box ";
        if ((isset($context["hasData"]) || array_key_exists("hasData", $context) ? $context["hasData"] : (function () { throw new RuntimeError('Variable "hasData" does not exist.', 65, $this->source); })())) {
            yield "p-0";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body"));

        // line 67
        yield "            ";
        if ( !(isset($context["hasData"]) || array_key_exists("hasData", $context) ? $context["hasData"] : (function () { throw new RuntimeError('Variable "hasData" does not exist.', 67, $this->source); })())) {
            // line 68
            yield "                ";
            yield $macros["widgets"]->getTemplateForMacro("macro_nothing_found", $context, 68, $this->getSourceContext())->macro_nothing_found(...[]);
            yield "
            ";
        } else {
            // line 70
            yield "                ";
            yield $macros["tables"]->getTemplateForMacro("macro_datatable_header", $context, 70, $this->getSourceContext())->macro_datatable_header(...[(isset($context["tableName"]) || array_key_exists("tableName", $context) ? $context["tableName"] : (function () { throw new RuntimeError('Variable "tableName" does not exist.', 70, $this->source); })()), (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 70, $this->source); })()), null, ["boxClass" => ""]]);
            yield "

                ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, (isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 72, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 72, $this->source); })()), "customer", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72) <=> CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 72, $this->source); })()), "customer", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72)); }));
            foreach ($context['_seq'] as $context["id"] => $context["mapping"]) {
                // line 73
                yield "                    <tr class=\"summary\">
                        <td colspan=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 74, $this->source); })())), "html", null, true);
                yield "\">";
                yield $macros["widgets"]->getTemplateForMacro("macro_label_customer", $context, 74, $this->getSourceContext())->macro_label_customer(...[CoreExtension::getAttribute($this->env, $this->source, $context["mapping"], "customer", [], "any", false, false, false, 74)]);
                yield "</td>
                    </tr>
                    ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["mapping"], "projects", [], "any", false, false, false, 76), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 76, $this->source); })()), "project", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76) <=> CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 76, $this->source); })()), "project", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76)); }));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 77
                    yield "                        ";
                    $context["project"] = CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 77);
                    // line 78
                    yield "                        ";
                    $context["budgetStats"] = CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "getBudgetStatisticModel", [], "method", false, false, false, 78);
                    // line 79
                    yield "                        ";
                    $context["currency"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 79, $this->source); })()), "customer", [], "any", false, false, false, 79), "currency", [], "any", false, false, false, 79);
                    // line 80
                    yield "                        <tr ";
                    yield $macros["widgets"]->getTemplateForMacro("macro_project_row_attr", $context, 80, $this->getSourceContext())->macro_project_row_attr(...[(isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 80, $this->source); })()), (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 80, $this->source); })())]);
                    yield ">
                        ";
                    // line 81
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 81, $this->source); })()));
                    foreach ($context['_seq'] as $context["name"] => $context["column_config"]) {
                        // line 82
                        yield "                            <td class=\"";
                        yield $macros["tables"]->getTemplateForMacro("macro_data_table_column_class", $context, 82, $this->getSourceContext())->macro_data_table_column_class(...[(isset($context["tableName"]) || array_key_exists("tableName", $context) ? $context["tableName"] : (function () { throw new RuntimeError('Variable "tableName" does not exist.', 82, $this->source); })()), (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 82, $this->source); })()), $context["name"]]);
                        yield "\">
                            ";
                        // line 83
                        if (($context["name"] == "name")) {
                            // line 84
                            yield "                                ";
                            yield $macros["widgets"]->getTemplateForMacro("macro_label_project", $context, 84, $this->getSourceContext())->macro_label_project(...[(isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 84, $this->source); })())]);
                            yield "
                            ";
                        } elseif ((                        // line 85
$context["name"] == "lastRecord")) {
                            // line 86
                            yield "                                ";
                            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "lastRecord", [], "any", false, false, false, 86))) {
                                // line 87
                                yield "                                    ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateShort(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "lastRecord", [], "any", false, false, false, 87)), "html", null, true);
                                yield "
                                ";
                            } else {
                                // line 89
                                yield "                                    &ndash;
                                ";
                            }
                            // line 91
                            yield "                            ";
                        } elseif (($context["name"] == "today")) {
                            // line 92
                            yield "                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "durationDay", [], "any", false, false, false, 92)), "html", null, true);
                            yield "
                            ";
                        } elseif ((                        // line 93
$context["name"] == "week")) {
                            // line 94
                            yield "                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "durationWeek", [], "any", false, false, false, 94)), "html", null, true);
                            yield "
                            ";
                        } elseif ((                        // line 95
$context["name"] == "month")) {
                            // line 96
                            yield "                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "durationMonth", [], "any", false, false, false, 96)), "html", null, true);
                            yield "
                            ";
                        } elseif ((                        // line 97
$context["name"] == "durationTotal")) {
                            // line 98
                            yield "                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "durationTotal", [], "any", false, false, false, 98)), "html", null, true);
                            yield "
                            ";
                        } elseif ((                        // line 99
$context["name"] == "timeBudget")) {
                            // line 100
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["budgetStats"]) || array_key_exists("budgetStats", $context) ? $context["budgetStats"] : (function () { throw new RuntimeError('Variable "budgetStats" does not exist.', 100, $this->source); })()), "hasTimeBudget", [], "method", false, false, false, 100) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("time", (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 100, $this->source); })())))) {
                                // line 101
                                yield "                                    ";
                                yield $macros["progress"]->getTemplateForMacro("macro_progressbar_timebudget", $context, 101, $this->getSourceContext())->macro_progressbar_timebudget(...[(isset($context["budgetStats"]) || array_key_exists("budgetStats", $context) ? $context["budgetStats"] : (function () { throw new RuntimeError('Variable "budgetStats" does not exist.', 101, $this->source); })())]);
                                yield "
                                ";
                            }
                            // line 103
                            yield "                            ";
                        } elseif (($context["name"] == "budget")) {
                            // line 104
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 104, $this->source); })()), "hasBudget", [], "method", false, false, false, 104) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("budget", (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 104, $this->source); })())))) {
                                // line 105
                                yield "                                    ";
                                yield $macros["progress"]->getTemplateForMacro("macro_progressbar_budget", $context, 105, $this->getSourceContext())->macro_progressbar_budget(...[(isset($context["budgetStats"]) || array_key_exists("budgetStats", $context) ? $context["budgetStats"] : (function () { throw new RuntimeError('Variable "budgetStats" does not exist.', 105, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 105, $this->source); })()), "customer", [], "any", false, false, false, 105), "currency", [], "any", false, false, false, 105)]);
                                yield "
                                ";
                            }
                            // line 107
                            yield "                            ";
                        } elseif (($context["name"] == "exported")) {
                            // line 108
                            yield "                                <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export", ["customers[]" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 108, $this->source); })()), "customer", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108), "projects[]" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108), "daterange" => "", "preview" => true]), "html", null, true);
                            yield "\">
                                    ";
                            // line 109
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "notExportedDuration", [], "any", false, false, false, 109)), "html", null, true);
                            yield "
                                </a>
                            ";
                        } elseif ((                        // line 111
$context["name"] == "invoiced")) {
                            // line 112
                            yield "                                <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice", ["customers[]" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 112, $this->source); })()), "customer", [], "any", false, false, false, 112), "id", [], "any", false, false, false, 112), "projects[]" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112), "daterange" => ""]), "html", null, true);
                            yield "\">
                                    ";
                            // line 113
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->money(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "notExportedRate", [], "any", false, false, false, 113), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 113, $this->source); })())), "html", null, true);
                            yield "
                                </a>
                            ";
                        } elseif ((                        // line 115
$context["name"] == "projectStart")) {
                            // line 116
                            yield "                                ";
                            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 116, $this->source); })()), "start", [], "any", false, false, false, 116))) {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateShort(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 116, $this->source); })()), "start", [], "any", false, false, false, 116)), "html", null, true);
                            }
                            // line 117
                            yield "                            ";
                        } elseif (($context["name"] == "projectEnd")) {
                            // line 118
                            yield "                                ";
                            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 118, $this->source); })()), "end", [], "any", false, false, false, 118))) {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateShort(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 118, $this->source); })()), "end", [], "any", false, false, false, 118)), "html", null, true);
                            }
                            // line 119
                            yield "                            ";
                        } elseif (($context["name"] == "comment")) {
                            // line 120
                            yield "                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 120, $this->source); })()), "comment", [], "any", false, false, false, 120), "html", null, true);
                            yield "
                            ";
                        } elseif ((                        // line 121
$context["name"] == "actions")) {
                            // line 122
                            yield "                                ";
                            yield $macros["projectActions"]->getTemplateForMacro("macro_project", $context, 122, $this->getSourceContext())->macro_project(...[(isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 122, $this->source); })()), "custom"]);
                            yield "
                            ";
                        }
                        // line 124
                        yield "                            </td>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['name'], $context['column_config'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 126
                    yield "                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['id'], $context['mapping'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            yield "                ";
            yield $macros["tables"]->getTemplateForMacro("macro_data_table_footer", $context, 129, $this->getSourceContext())->macro_data_table_footer(...[(isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 129, $this->source); })())]);
            yield "
            ";
        }
        // line 131
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reporting/project_list_data.html.twig";
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
        return array (  650 => 131,  644 => 129,  638 => 128,  631 => 126,  624 => 124,  618 => 122,  616 => 121,  611 => 120,  608 => 119,  603 => 118,  600 => 117,  595 => 116,  593 => 115,  588 => 113,  583 => 112,  581 => 111,  576 => 109,  571 => 108,  568 => 107,  562 => 105,  559 => 104,  556 => 103,  550 => 101,  547 => 100,  545 => 99,  540 => 98,  538 => 97,  533 => 96,  531 => 95,  526 => 94,  524 => 93,  519 => 92,  516 => 91,  512 => 89,  506 => 87,  503 => 86,  501 => 85,  496 => 84,  494 => 83,  489 => 82,  485 => 81,  480 => 80,  477 => 79,  474 => 78,  471 => 77,  467 => 76,  460 => 74,  457 => 73,  453 => 72,  447 => 70,  441 => 68,  438 => 67,  425 => 66,  398 => 65,  387 => 60,  385 => 64,  383 => 63,  381 => 62,  379 => 61,  366 => 60,  166 => 133,  164 => 60,  161 => 59,  159 => 58,  156 => 57,  143 => 56,  129 => 53,  116 => 52,  105 => 1,  98 => 48,  96 => 47,  92 => 46,  90 => 45,  88 => 44,  86 => 43,  84 => 37,  81 => 33,  79 => 32,  76 => 28,  74 => 27,  72 => 20,  69 => 16,  67 => 15,  64 => 11,  62 => 10,  60 => 7,  58 => 5,  56 => 4,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'reporting/layout.html.twig' %}
{% import \"macros/datatables.html.twig\" as tables %}

{% set showMoneyBudget = is_granted('budget_money', 'project') %}
{% set showTimeBudget = is_granted('budget_time', 'project') %}

{% set availableColumns = {
    'name':          {'class': 'alwaysVisible'},
} %}
{% if showTimeBudget %}
    {% set availableColumns = availableColumns|merge({
        'timeBudget':    {'class': 'd-none d-md-table-cell', 'title': 'timeBudget'|trans},
    }) %}
{% endif %}
{% if showMoneyBudget %}
    {% set availableColumns = availableColumns|merge({
        'budget':        {'class': 'd-none d-md-table-cell', 'title': 'budget'|trans},
    }) %}
{% endif %}
{% set availableColumns = availableColumns|merge({
    'lastRecord':       {'class': 'd-none d-sm-table-cell text-start hw-min w-min', 'title': 'last_record'|trans, 'columnClass': 'w-min'},
    'today':            {'class': 'd-none text-end hw-min w-min', 'title': 'stats.durationToday'|trans},
    'week':             {'class': 'd-none text-end hw-min w-min', 'title': 'stats.durationWeek'|trans},
    'month':            {'class': 'd-none d-lg-table-cell text-end hw-min w-min', 'title': 'stats.durationMonth'|trans},
    'durationTotal':    {'class': 'text-end hw-min w-min', 'title': 'stats.durationTotal'|trans, 'columnClass': 'w-min'},
}) %}
{% if showTimeBudget and is_granted('create_export') %}
    {% set availableColumns = availableColumns|merge({
        'exported':         {'class': 'd-none d-xl-table-cell text-end hw-min w-min', 'title': 'not_exported'|trans, 'columnClass': 'w-min'},
    }) %}
{% endif %}
{% if showMoneyBudget and is_granted('view_invoice') %}
    {% set availableColumns = availableColumns|merge({
        'invoiced':         {'class': 'd-none d-xl-table-cell text-end hw-min w-min', 'title': 'not_invoiced'|trans, 'columnClass': 'w-min'},
    }) %}
{% endif %}
{% set availableColumns = availableColumns|merge({
    'projectStart':     {'class': 'd-none text-start hw-min w-min', 'title': 'project_start'|trans},
    'projectEnd':       {'class': 'd-none text-start hw-min w-min', 'title': 'project_end'|trans},
    'comment':          {'class': 'd-none', 'title': 'comment'|trans},
    'actions':          {'class': 'actions alwaysVisible'},
}) %}
{% set tableName = tableName|default('project_view_reporting') %}
{% set skipColumns = skipColumns is defined ? skipColumns : {} %}
{% set columns = {} %}
{% for name, config in availableColumns %}
    {% if name not in skipColumns %}
        {% set columns = columns|merge({(name): config}) %}
    {% endif %}
{% endfor %}

{% block main_before %}
    {{ tables.data_table_column_modal(tableName, columns) }}
{% endblock %}

{% block report %}

    {% set hasData = entries|length > 0 %}

    {% embed '@theme/embeds/card.html.twig' %}
        {% import \"macros/progressbar.html.twig\" as progress %}
        {% import \"macros/widgets.html.twig\" as widgets %}
        {% import \"macros/datatables.html.twig\" as tables %}
        {% import \"project/actions.html.twig\" as projectActions %}
        {% block box_body_class %}{{ tableName }}-box {% if hasData %}p-0{% endif %}{% endblock %}
        {% block box_body %}
            {% if not hasData %}
                {{ widgets.nothing_found() }}
            {% else %}
                {{ tables.datatable_header(tableName, columns, null, {boxClass: ''}) }}

                {% for id, mapping in entries|sort((a, b) => a.customer.name <=> b.customer.name) %}
                    <tr class=\"summary\">
                        <td colspan=\"{{ columns|length }}\">{{ widgets.label_customer(mapping.customer) }}</td>
                    </tr>
                    {% for entry in mapping.projects|sort((a, b) => a.project.name <=> b.project.name) %}
                        {% set project = entry.project %}
                        {% set budgetStats = entry.getBudgetStatisticModel() %}
                        {% set currency = project.customer.currency %}
                        <tr {{ widgets.project_row_attr(project, now) }}>
                        {% for name, column_config in columns %}
                            <td class=\"{{ tables.data_table_column_class(tableName, columns, name) }}\">
                            {% if name == 'name' %}
                                {{ widgets.label_project(project) }}
                            {% elseif name == 'lastRecord' %}
                                {% if entry.lastRecord is not null %}
                                    {{ entry.lastRecord|date_short }}
                                {% else %}
                                    &ndash;
                                {% endif %}
                            {% elseif name == 'today' %}
                                {{ entry.durationDay|duration }}
                            {% elseif name == 'week' %}
                                {{ entry.durationWeek|duration }}
                            {% elseif name == 'month' %}
                                {{ entry.durationMonth|duration }}
                            {% elseif name == 'durationTotal' %}
                                {{ entry.durationTotal|duration }}
                            {% elseif name == 'timeBudget' %}
                                {% if budgetStats.hasTimeBudget() and is_granted('time', project) %}
                                    {{ progress.progressbar_timebudget(budgetStats) }}
                                {% endif %}
                            {% elseif name == 'budget' %}
                                {% if project.hasBudget() and is_granted('budget', project) %}
                                    {{ progress.progressbar_budget(budgetStats, project.customer.currency) }}
                                {% endif %}
                            {% elseif name == 'exported' %}
                                <a href=\"{{ path('export', {'customers[]': project.customer.id, 'projects[]': project.id, 'daterange': '', 'preview': true}) }}\">
                                    {{ entry.notExportedDuration|duration }}
                                </a>
                            {% elseif name == 'invoiced' %}
                                <a href=\"{{ path('invoice', {'customers[]': project.customer.id, 'projects[]': project.id, 'daterange': ''}) }}\">
                                    {{ entry.notExportedRate|money(currency) }}
                                </a>
                            {% elseif name == 'projectStart' %}
                                {% if project.start is not null %}{{ project.start|date_short }}{% endif %}
                            {% elseif name == 'projectEnd' %}
                                {% if project.end is not null %}{{ project.end|date_short }}{% endif %}
                            {% elseif name == 'comment' %}
                                {{ project.comment }}
                            {% elseif name == 'actions' %}
                                {{ projectActions.project(project, 'custom') }}
                            {% endif %}
                            </td>
                        {% endfor %}
                        </tr>
                    {% endfor %}
                {% endfor %}
                {{ tables.data_table_footer(entries) }}
            {% endif %}
        {% endblock %}
    {% endembed %}

{% endblock %}
", "reporting/project_list_data.html.twig", "C:\\wamp64\\www\\kimai\\templates\\reporting\\project_list_data.html.twig");
    }
}
