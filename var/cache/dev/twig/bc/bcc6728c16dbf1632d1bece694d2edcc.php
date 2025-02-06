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

/* widget/widget-paginatedworkingtimechart.html.twig */
class __TwigTemplate_7968684389679cfa9b3c8967c8b290de extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "widget/widget-paginatedworkingtimechart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "widget/widget-paginatedworkingtimechart.html.twig"));

        // line 1
        yield from $this->loadTemplate("widget/widget-paginatedworkingtimechart.html.twig", "widget/widget-paginatedworkingtimechart.html.twig", 1, "640860133")->unwrap()->yield(CoreExtension::merge($context, ["margin_bottom" => 0]));
        // line 70
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["kimai_context"]) || array_key_exists("kimai_context", $context) ? $context["kimai_context"] : (function () { throw new RuntimeError('Variable "kimai_context" does not exist.', 70, $this->source); })()), "javascriptRequest", [], "any", false, false, false, 70)) {
            // line 71
            yield "<script type=\"text/javascript\">
    document.addEventListener('kimai.initialized', function() {
        KimaiPaginatedBoxWidget.create('#PaginatedWorkingTimeChartBox');
    });
</script>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "widget/widget-paginatedworkingtimechart.html.twig";
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
        return array (  52 => 71,  50 => 70,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% embed '@theme/embeds/card.html.twig' with {'margin_bottom': 0} %}
    {% from '@theme/components/buttons.html.twig' import action_cardtoolbutton %}
    {% block box_title %}
        {% if not title is empty %}{{ title|trans }}{% endif %}
    {% endblock %}
    {% block box_attributes %}
        id=\"PaginatedWorkingTimeChartBox\" data-href=\"#\" data-reload=\"\"
    {% endblock %}
    {% block box_tools %}
        {% set prevYear = options.year %}
        {% set prevWeek = options.week %}
        {% set nextYear = options.year %}
        {% set nextWeek = options.week %}
        {% if options.week == 1 %}
            {% set prevYear = prevYear - 1 %}
            {% set prevWeek = data.lastWeekInLastYear %}
        {% else %}
            {% set prevWeek = prevWeek - 1 %}
        {% endif %}
        {% if options.week == data.lastWeekInYear %}
            {% set nextYear = nextYear + 1 %}
            {% set nextWeek = 1 %}
        {% else %}
            {% set nextWeek = nextWeek + 1 %}
        {% endif %}
        {{ action_cardtoolbutton('left', {'title': 'stats.workingTimeWeekShort'|trans({'%week%': (prevWeek ~ '/' ~ prevYear)}), 'class': 'pagination-link', 'onclick': 'myChart.destroy()', 'url': path('widgets_working_time_chart', {'year': prevYear, 'week': prevWeek})}) }}
        {{ action_cardtoolbutton('right', {'title': 'stats.workingTimeWeekShort'|trans({'%week%': (nextWeek ~ '/' ~ nextYear)}), 'class': 'pagination-link', 'onclick': 'myChart.destroy()', 'url': path('widgets_working_time_chart', {'year': nextYear, 'week': nextWeek})}) }}
    {% endblock %}
    {% block box_body %}
        {{ render_widget('DailyWorkingTimeChart', options|merge({'begin': data.begin, 'end': data.end})) }}
    {% endblock %}
    {% block box_footer %}
        <div class=\"row\">
            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">{{ data.day|duration }}</h5>
                    <span>{{ 'stats.workingTimeToday'|trans({'%day%': 'now'|date_short}) }}</span>
                </div>
            </div>
            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">{{ data.week|duration }}</h5>
                    <span>{{ 'stats.workingTimeWeek'|trans({'%week%': data.begin|date_format('W')}) }}</span>
                </div>
            </div>
            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">{{ data.month|duration }}</h5>
                    <span>{{ 'stats.workingTimeMonth'|trans({'%month%': data.thisMonth|month_name, '%year%': data.thisMonth|date_format('Y')}) }}</span>
                </div>
            </div>
            {% if data.financial is not null %}
            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">{{ data.financial|duration }}</h5>
                    <span>{{ 'stats.workingTimeFinancialYear'|trans }}</span>
                </div>
            </div>
            {% else %}
            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">{{ data.year|duration }}</h5>
                    <span>{{ 'stats.workingTimeYear'|trans({'%year%': data.dateYear}) }}</span>
                </div>
            </div>
            {% endif %}
        </div>
    {% endblock %}
{% endembed %}
{% if not kimai_context.javascriptRequest %}
<script type=\"text/javascript\">
    document.addEventListener('kimai.initialized', function() {
        KimaiPaginatedBoxWidget.create('#PaginatedWorkingTimeChartBox');
    });
</script>
{% endif %}
", "widget/widget-paginatedworkingtimechart.html.twig", "C:\\wamp64\\www\\kimai\\templates\\widget\\widget-paginatedworkingtimechart.html.twig");
    }
}


/* widget/widget-paginatedworkingtimechart.html.twig */
class __TwigTemplate_7968684389679cfa9b3c8967c8b290de___640860133 extends Template
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
            'box_title' => [$this, 'block_box_title'],
            'box_attributes' => [$this, 'block_box_attributes'],
            'box_tools' => [$this, 'block_box_tools'],
            'box_body' => [$this, 'block_box_body'],
            'box_footer' => [$this, 'block_box_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@theme/embeds/card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "widget/widget-paginatedworkingtimechart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "widget/widget-paginatedworkingtimechart.html.twig"));

        // line 2
        $macros["_v0"] = $this->macros["_v0"] = $this->loadTemplate("@theme/components/buttons.html.twig", "widget/widget-paginatedworkingtimechart.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@theme/embeds/card.html.twig", "widget/widget-paginatedworkingtimechart.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_title"));

        // line 4
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })())), "html", null, true);
        }
        // line 5
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_attributes"));

        // line 7
        yield "        id=\"PaginatedWorkingTimeChartBox\" data-href=\"#\" data-reload=\"\"
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_tools(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_tools"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_tools"));

        // line 10
        yield "        ";
        $context["prevYear"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 10, $this->source); })()), "year", [], "any", false, false, false, 10);
        // line 11
        yield "        ";
        $context["prevWeek"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 11, $this->source); })()), "week", [], "any", false, false, false, 11);
        // line 12
        yield "        ";
        $context["nextYear"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 12, $this->source); })()), "year", [], "any", false, false, false, 12);
        // line 13
        yield "        ";
        $context["nextWeek"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 13, $this->source); })()), "week", [], "any", false, false, false, 13);
        // line 14
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 14, $this->source); })()), "week", [], "any", false, false, false, 14) == 1)) {
            // line 15
            yield "            ";
            $context["prevYear"] = ((isset($context["prevYear"]) || array_key_exists("prevYear", $context) ? $context["prevYear"] : (function () { throw new RuntimeError('Variable "prevYear" does not exist.', 15, $this->source); })()) - 1);
            // line 16
            yield "            ";
            $context["prevWeek"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "lastWeekInLastYear", [], "any", false, false, false, 16);
            // line 17
            yield "        ";
        } else {
            // line 18
            yield "            ";
            $context["prevWeek"] = ((isset($context["prevWeek"]) || array_key_exists("prevWeek", $context) ? $context["prevWeek"] : (function () { throw new RuntimeError('Variable "prevWeek" does not exist.', 18, $this->source); })()) - 1);
            // line 19
            yield "        ";
        }
        // line 20
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 20, $this->source); })()), "week", [], "any", false, false, false, 20) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "lastWeekInYear", [], "any", false, false, false, 20))) {
            // line 21
            yield "            ";
            $context["nextYear"] = ((isset($context["nextYear"]) || array_key_exists("nextYear", $context) ? $context["nextYear"] : (function () { throw new RuntimeError('Variable "nextYear" does not exist.', 21, $this->source); })()) + 1);
            // line 22
            yield "            ";
            $context["nextWeek"] = 1;
            // line 23
            yield "        ";
        } else {
            // line 24
            yield "            ";
            $context["nextWeek"] = ((isset($context["nextWeek"]) || array_key_exists("nextWeek", $context) ? $context["nextWeek"] : (function () { throw new RuntimeError('Variable "nextWeek" does not exist.', 24, $this->source); })()) + 1);
            // line 25
            yield "        ";
        }
        // line 26
        yield "        ";
        yield $macros["_v0"]->getTemplateForMacro("macro_action_cardtoolbutton", $context, 26, $this->getSourceContext())->macro_action_cardtoolbutton(...["left", ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.workingTimeWeekShort", ["%week%" => (((isset($context["prevWeek"]) || array_key_exists("prevWeek", $context) ? $context["prevWeek"] : (function () { throw new RuntimeError('Variable "prevWeek" does not exist.', 26, $this->source); })()) . "/") . (isset($context["prevYear"]) || array_key_exists("prevYear", $context) ? $context["prevYear"] : (function () { throw new RuntimeError('Variable "prevYear" does not exist.', 26, $this->source); })()))]), "class" => "pagination-link", "onclick" => "myChart.destroy()", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("widgets_working_time_chart", ["year" => (isset($context["prevYear"]) || array_key_exists("prevYear", $context) ? $context["prevYear"] : (function () { throw new RuntimeError('Variable "prevYear" does not exist.', 26, $this->source); })()), "week" => (isset($context["prevWeek"]) || array_key_exists("prevWeek", $context) ? $context["prevWeek"] : (function () { throw new RuntimeError('Variable "prevWeek" does not exist.', 26, $this->source); })())])]]);
        yield "
        ";
        // line 27
        yield $macros["_v0"]->getTemplateForMacro("macro_action_cardtoolbutton", $context, 27, $this->getSourceContext())->macro_action_cardtoolbutton(...["right", ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.workingTimeWeekShort", ["%week%" => (((isset($context["nextWeek"]) || array_key_exists("nextWeek", $context) ? $context["nextWeek"] : (function () { throw new RuntimeError('Variable "nextWeek" does not exist.', 27, $this->source); })()) . "/") . (isset($context["nextYear"]) || array_key_exists("nextYear", $context) ? $context["nextYear"] : (function () { throw new RuntimeError('Variable "nextYear" does not exist.', 27, $this->source); })()))]), "class" => "pagination-link", "onclick" => "myChart.destroy()", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("widgets_working_time_chart", ["year" => (isset($context["nextYear"]) || array_key_exists("nextYear", $context) ? $context["nextYear"] : (function () { throw new RuntimeError('Variable "nextYear" does not exist.', 27, $this->source); })()), "week" => (isset($context["nextWeek"]) || array_key_exists("nextWeek", $context) ? $context["nextWeek"] : (function () { throw new RuntimeError('Variable "nextWeek" does not exist.', 27, $this->source); })())])]]);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
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

        // line 30
        yield "        ";
        yield $this->env->getRuntime('App\Twig\Runtime\WidgetExtension')->renderWidget($this->env, "DailyWorkingTimeChart", Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 30, $this->source); })()), ["begin" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "begin", [], "any", false, false, false, 30), "end" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "end", [], "any", false, false, false, 30)]));
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_footer"));

        // line 33
        yield "        <div class=\"row\">
            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "day", [], "any", false, false, false, 36)), "html", null, true);
        yield "</h5>
                    <span>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.workingTimeToday", ["%day%" => $this->extensions['App\Twig\LocaleFormatExtensions']->dateShort("now")]), "html", null, true);
        yield "</span>
                </div>
            </div>
            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "week", [], "any", false, false, false, 42)), "html", null, true);
        yield "</h5>
                    <span>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.workingTimeWeek", ["%week%" => $this->extensions['App\Twig\LocaleFormatExtensions']->dateFormat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "begin", [], "any", false, false, false, 43), "W")]), "html", null, true);
        yield "</span>
                </div>
            </div>
            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "month", [], "any", false, false, false, 48)), "html", null, true);
        yield "</h5>
                    <span>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.workingTimeMonth", ["%month%" => $this->extensions['App\Twig\LocaleFormatExtensions']->monthName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 49, $this->source); })()), "thisMonth", [], "any", false, false, false, 49)), "%year%" => $this->extensions['App\Twig\LocaleFormatExtensions']->dateFormat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 49, $this->source); })()), "thisMonth", [], "any", false, false, false, 49), "Y")]), "html", null, true);
        yield "</span>
                </div>
            </div>
            ";
        // line 52
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 52, $this->source); })()), "financial", [], "any", false, false, false, 52))) {
            // line 53
            yield "            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "financial", [], "any", false, false, false, 55)), "html", null, true);
            yield "</h5>
                    <span>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.workingTimeFinancialYear"), "html", null, true);
            yield "</span>
                </div>
            </div>
            ";
        } else {
            // line 60
            yield "            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 62, $this->source); })()), "year", [], "any", false, false, false, 62)), "html", null, true);
            yield "</h5>
                    <span>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.workingTimeYear", ["%year%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 63, $this->source); })()), "dateYear", [], "any", false, false, false, 63)]), "html", null, true);
            yield "</span>
                </div>
            </div>
            ";
        }
        // line 67
        yield "        </div>
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
        return "widget/widget-paginatedworkingtimechart.html.twig";
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
        return array (  472 => 67,  465 => 63,  461 => 62,  457 => 60,  450 => 56,  446 => 55,  442 => 53,  440 => 52,  434 => 49,  430 => 48,  422 => 43,  418 => 42,  410 => 37,  406 => 36,  401 => 33,  388 => 32,  374 => 30,  361 => 29,  348 => 27,  343 => 26,  340 => 25,  337 => 24,  334 => 23,  331 => 22,  328 => 21,  325 => 20,  322 => 19,  319 => 18,  316 => 17,  313 => 16,  310 => 15,  307 => 14,  304 => 13,  301 => 12,  298 => 11,  295 => 10,  282 => 9,  270 => 7,  257 => 6,  246 => 5,  241 => 4,  228 => 3,  217 => 1,  215 => 2,  202 => 1,  52 => 71,  50 => 70,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% embed '@theme/embeds/card.html.twig' with {'margin_bottom': 0} %}
    {% from '@theme/components/buttons.html.twig' import action_cardtoolbutton %}
    {% block box_title %}
        {% if not title is empty %}{{ title|trans }}{% endif %}
    {% endblock %}
    {% block box_attributes %}
        id=\"PaginatedWorkingTimeChartBox\" data-href=\"#\" data-reload=\"\"
    {% endblock %}
    {% block box_tools %}
        {% set prevYear = options.year %}
        {% set prevWeek = options.week %}
        {% set nextYear = options.year %}
        {% set nextWeek = options.week %}
        {% if options.week == 1 %}
            {% set prevYear = prevYear - 1 %}
            {% set prevWeek = data.lastWeekInLastYear %}
        {% else %}
            {% set prevWeek = prevWeek - 1 %}
        {% endif %}
        {% if options.week == data.lastWeekInYear %}
            {% set nextYear = nextYear + 1 %}
            {% set nextWeek = 1 %}
        {% else %}
            {% set nextWeek = nextWeek + 1 %}
        {% endif %}
        {{ action_cardtoolbutton('left', {'title': 'stats.workingTimeWeekShort'|trans({'%week%': (prevWeek ~ '/' ~ prevYear)}), 'class': 'pagination-link', 'onclick': 'myChart.destroy()', 'url': path('widgets_working_time_chart', {'year': prevYear, 'week': prevWeek})}) }}
        {{ action_cardtoolbutton('right', {'title': 'stats.workingTimeWeekShort'|trans({'%week%': (nextWeek ~ '/' ~ nextYear)}), 'class': 'pagination-link', 'onclick': 'myChart.destroy()', 'url': path('widgets_working_time_chart', {'year': nextYear, 'week': nextWeek})}) }}
    {% endblock %}
    {% block box_body %}
        {{ render_widget('DailyWorkingTimeChart', options|merge({'begin': data.begin, 'end': data.end})) }}
    {% endblock %}
    {% block box_footer %}
        <div class=\"row\">
            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">{{ data.day|duration }}</h5>
                    <span>{{ 'stats.workingTimeToday'|trans({'%day%': 'now'|date_short}) }}</span>
                </div>
            </div>
            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">{{ data.week|duration }}</h5>
                    <span>{{ 'stats.workingTimeWeek'|trans({'%week%': data.begin|date_format('W')}) }}</span>
                </div>
            </div>
            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">{{ data.month|duration }}</h5>
                    <span>{{ 'stats.workingTimeMonth'|trans({'%month%': data.thisMonth|month_name, '%year%': data.thisMonth|date_format('Y')}) }}</span>
                </div>
            </div>
            {% if data.financial is not null %}
            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">{{ data.financial|duration }}</h5>
                    <span>{{ 'stats.workingTimeFinancialYear'|trans }}</span>
                </div>
            </div>
            {% else %}
            <div class=\"col-sm-3 col-xs-6 mt-1 mb-2 mb-md-0\">
                <div class=\"text-center\">
                    <h5 class=\"mb-1\">{{ data.year|duration }}</h5>
                    <span>{{ 'stats.workingTimeYear'|trans({'%year%': data.dateYear}) }}</span>
                </div>
            </div>
            {% endif %}
        </div>
    {% endblock %}
{% endembed %}
{% if not kimai_context.javascriptRequest %}
<script type=\"text/javascript\">
    document.addEventListener('kimai.initialized', function() {
        KimaiPaginatedBoxWidget.create('#PaginatedWorkingTimeChartBox');
    });
</script>
{% endif %}
", "widget/widget-paginatedworkingtimechart.html.twig", "C:\\wamp64\\www\\kimai\\templates\\widget\\widget-paginatedworkingtimechart.html.twig");
    }
}
