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

/* widget/widget-dailyworkingtimechart.html.twig */
class __TwigTemplate_d54c1b0d497d8a6f3207ef65f12d6587 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "widget/widget-dailyworkingtimechart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "widget/widget-dailyworkingtimechart.html.twig"));

        // line 1
        $context["type"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 1), "bar")) : ("bar"));
        // line 2
        $context["chart_id"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2);
        // line 3
        $context["backgroundColor"] = $this->extensions['App\Twig\Configuration']->get("theme.chart.background_color");
        // line 4
        $context["gridColor"] = $this->extensions['App\Twig\Configuration']->get("theme.chart.grid_color");
        // line 5
        $context["activities"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "activities", [], "any", false, false, false, 5);
        // line 6
        $context["data"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "data", [], "any", false, false, false, 6);
        // line 7
        yield "
<div class=\"chart\">
    <canvas id=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chart_id"]) || array_key_exists("chart_id", $context) ? $context["chart_id"] : (function () { throw new RuntimeError('Variable "chart_id" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "\" style=\"height: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Configuration']->get("theme.chart.height"), "html", null, true);
        yield "px; width: 100%;\"></canvas>
</div>

<script type=\"text/javascript\">
    var myChart = null;

    var paintChart = function() {
        myChart = new Chart(
            document.getElementById('";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chart_id"]) || array_key_exists("chart_id", $context) ? $context["chart_id"] : (function () { throw new RuntimeError('Variable "chart_id" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "').getContext('2d'), {
                type: '";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "',
                data: {
                    labels: [
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 22
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateFormat(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, false, 22), "d."), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->monthName(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, false, 22), true), "html", null, true);
            yield "'
                        ";
            // line 23
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 23)) {
                yield ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "                    ],
                    datasets: [
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["activityId"] => $context["activity"]) {
            // line 28
            $context["activityColor"] = Twig\Extension\CoreExtension::default($this->extensions['App\Twig\Extensions']->color(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "activity", [], "any", false, false, false, 28)), Twig\Extension\CoreExtension::default($this->extensions['App\Twig\Extensions']->color(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "project", [], "any", false, false, false, 28)), (isset($context["backgroundColor"]) || array_key_exists("backgroundColor", $context) ? $context["backgroundColor"] : (function () { throw new RuntimeError('Variable "backgroundColor" does not exist.', 28, $this->source); })())));
            // line 29
            yield "                        ";
            $context["activityName"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "activity", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29);
            // line 30
            yield "                        {
                            label: '";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activityName"]) || array_key_exists("activityName", $context) ? $context["activityName"] : (function () { throw new RuntimeError('Variable "activityName" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "',
                            backgroundColor: '";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activityColor"]) || array_key_exists("activityColor", $context) ? $context["activityColor"] : (function () { throw new RuntimeError('Variable "activityColor" does not exist.', 32, $this->source); })()), "html", null, true);
            yield "',
                            borderColor: '#fff',
                            borderWidth: 1,
                            data: [";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                // line 37
                $context["realDayData"] = null;
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "details", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 39
                    $context["loopId"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39) . "_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39));
                    // line 40
                    if (((isset($context["loopId"]) || array_key_exists("loopId", $context) ? $context["loopId"] : (function () { throw new RuntimeError('Variable "loopId" does not exist.', 40, $this->source); })()) == $context["activityId"])) {
                        // line 41
                        $context["realDayData"] = $this->extensions['App\Twig\LocaleFormatExtensions']->durationChart(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 41));
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                if ( !(null === (isset($context["realDayData"]) || array_key_exists("realDayData", $context) ? $context["realDayData"] : (function () { throw new RuntimeError('Variable "realDayData" does not exist.', 44, $this->source); })()))) {
                    // line 45
                    yield "'";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["realDayData"]) || array_key_exists("realDayData", $context) ? $context["realDayData"] : (function () { throw new RuntimeError('Variable "realDayData" does not exist.', 45, $this->source); })()), "html", null, true);
                    yield "'";
                } else {
                    // line 47
                    yield "0";
                }
                // line 49
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 49)) {
                    yield ",";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "],
                            realData: [";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 53, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                // line 54
                $context["realDayData"] = null;
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "details", [], "any", false, false, false, 55));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 56
                    $context["loopId"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56) . "_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56));
                    // line 57
                    if (((isset($context["loopId"]) || array_key_exists("loopId", $context) ? $context["loopId"] : (function () { throw new RuntimeError('Variable "loopId" does not exist.', 57, $this->source); })()) == $context["activityId"])) {
                        // line 58
                        $context["realDayData"] = ["duration" => $this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 58)), "billable" => $this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "totalDurationBillable", [], "any", false, false, false, 58)), "project" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "customer" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 58), "customer", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "activity" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "total" => $this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, $context["day"], "totalDuration", [], "any", false, false, false, 58))];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                if ( !(null === (isset($context["realDayData"]) || array_key_exists("realDayData", $context) ? $context["realDayData"] : (function () { throw new RuntimeError('Variable "realDayData" does not exist.', 61, $this->source); })()))) {
                    // line 62
                    yield json_encode((isset($context["realDayData"]) || array_key_exists("realDayData", $context) ? $context["realDayData"] : (function () { throw new RuntimeError('Variable "realDayData" does not exist.', 62, $this->source); })()));
                } else {
                    // line 64
                    yield "0";
                }
                // line 66
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 66)) {
                    yield ",";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "]
                        },";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['activityId'], $context['activity'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "                    ]
                },
                options: {
                    maintainAspectRatio: true,
                    responsive: false,
                    barPercentage: 0.5,
                    categoryPercentage: 1.0,
                    scales: {
                        x: {
                            stacked: true,
                            gridLines: {
                                display: false
                            },
                        },
                        y: {
                            stacked: true,
                            ticks: {
                                beginAtZero: true
                            },
                            gridLines: {
                                display: true,
                                color: '";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["gridColor"]) || array_key_exists("gridColor", $context) ? $context["gridColor"] : (function () { throw new RuntimeError('Variable "gridColor" does not exist.', 92, $this->source); })()), "html", null, true);
        yield "',
                                lineWidth: 1
                            }
                        },
                    },
                    plugins: {
                        legend: {
                            display: false,
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    const tooltipData = tooltipItem.dataset.realData[tooltipItem.dataIndex];
                                    return ' ' + tooltipData.duration + ': ' + tooltipData.activity;
                                },
                                beforeTitle: function(tooltipItems) {
                                    const tooltipItem = tooltipItems[0];
                                    const tooltipData = tooltipItem.dataset.realData[tooltipItem.dataIndex];
                                    return tooltipData.customer;
                                },
                                title: function(tooltipItems) {
                                    const tooltipItem = tooltipItems[0];
                                    const tooltipData = tooltipItem.dataset.realData[tooltipItem.dataIndex];
                                    return tooltipData.project;
                                },
                                afterTitle: function(tooltipItems) {
                                    return ' ';
                                },
                                footer: function(tooltipItems) {
                                    const tooltipItem = tooltipItems[0];
                                    const tooltipData = tooltipItem.dataset.realData[tooltipItem.dataIndex];
                                    return '";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.durationTotal"), "html", null, true);
        yield ": ' + tooltipData.total + '\\n";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("billable"), "html", null, true);
        yield ": ' + tooltipData.billable;
                                },
                                beforeFooter: function(tooltipItems) {
                                    return ' ';
                                },
                            },
                        }
                    },
                }
            }
        );
    };
    
    var destroyChart = function () {
        myChart.destroy();
    };

    ";
        // line 140
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["kimai_context"]) || array_key_exists("kimai_context", $context) ? $context["kimai_context"] : (function () { throw new RuntimeError('Variable "kimai_context" does not exist.', 140, $this->source); })()), "javascriptRequest", [], "any", false, false, false, 140)) {
            // line 141
            yield "        paintChart();
    ";
        } else {
            // line 143
            yield "        if (document.getElementById('dashboard-grid-container') !== null) {
            document.addEventListener('dashboard.initialized', paintChart);
        } else {
            document.addEventListener('kimai.initialized', paintChart);
        }
    ";
        }
        // line 149
        yield "</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "widget/widget-dailyworkingtimechart.html.twig";
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
        return array (  374 => 149,  366 => 143,  362 => 141,  360 => 140,  338 => 123,  304 => 92,  281 => 71,  274 => 68,  258 => 66,  255 => 64,  252 => 62,  250 => 61,  243 => 58,  241 => 57,  239 => 56,  235 => 55,  233 => 54,  216 => 53,  213 => 51,  197 => 49,  194 => 47,  189 => 45,  187 => 44,  180 => 41,  178 => 40,  176 => 39,  172 => 38,  170 => 37,  153 => 36,  147 => 32,  143 => 31,  140 => 30,  137 => 29,  135 => 28,  131 => 27,  127 => 25,  111 => 23,  104 => 22,  87 => 21,  81 => 18,  77 => 17,  64 => 9,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set type = options.type|default('bar') %}
{% set chart_id = options.id %}
{% set backgroundColor = config('theme.chart.background_color') %}
{% set gridColor = config('theme.chart.grid_color') %}
{% set activities = data.activities %}
{% set data = data.data %}

<div class=\"chart\">
    <canvas id=\"{{ chart_id }}\" style=\"height: {{ config('theme.chart.height') }}px; width: 100%;\"></canvas>
</div>

<script type=\"text/javascript\">
    var myChart = null;

    var paintChart = function() {
        myChart = new Chart(
            document.getElementById('{{ chart_id }}').getContext('2d'), {
                type: '{{ type }}',
                data: {
                    labels: [
                        {% for day in data -%}
                        '{{ day.day|date_format('d.') }} {{ day.day|month_name(true) }}'
                        {% if not loop.last %},{% endif -%}
                        {%- endfor %}
                    ],
                    datasets: [
                        {% for activityId, activity in activities -%}
                        {% set activityColor = activity.activity|color|default(activity.project|color|default(backgroundColor)) %}
                        {% set activityName = activity.activity.name %}
                        {
                            label: '{{ activityName }}',
                            backgroundColor: '{{ activityColor }}',
                            borderColor: '#fff',
                            borderWidth: 1,
                            data: [
                                {%- for day in data -%}
                                    {% set realDayData = null %}
                                    {%- for entry in day.details -%}
                                        {% set loopId = (entry.project.id ~ '_' ~ entry.activity.id) %}
                                        {%- if loopId == activityId -%}
                                            {% set realDayData = entry.duration|chart_duration %}
                                        {%- endif -%}
                                    {%- endfor -%}
                                    {%- if realDayData is not null -%}
                                        '{{ realDayData }}'
                                    {%- else -%}
                                        0
                                    {%- endif -%}
                                    {%- if not loop.last %},{% endif -%}
                                {%- endfor -%}
                            ],
                            realData: [
                                {%- for day in data -%}
                                    {% set realDayData = null %}
                                    {%- for entry in day.details -%}
                                        {% set loopId = (entry.project.id ~ '_' ~ entry.activity.id) %}
                                        {%- if loopId == activityId -%}
                                            {% set realDayData = {duration: entry.duration|duration, billable: day.totalDurationBillable|duration, project: entry.project.name, customer: entry.project.customer.name, activity: entry.activity.name, total: day.totalDuration|duration} %}
                                        {%- endif -%}
                                    {%- endfor -%}
                                    {%- if realDayData is not null -%}
                                        {{ realDayData|json_encode|raw }}
                                    {%- else -%}
                                        0
                                    {%- endif -%}
                                    {%- if not loop.last %},{% endif -%}
                                {%- endfor -%}
                            ]
                        },
                        {%- endfor %}
                    ]
                },
                options: {
                    maintainAspectRatio: true,
                    responsive: false,
                    barPercentage: 0.5,
                    categoryPercentage: 1.0,
                    scales: {
                        x: {
                            stacked: true,
                            gridLines: {
                                display: false
                            },
                        },
                        y: {
                            stacked: true,
                            ticks: {
                                beginAtZero: true
                            },
                            gridLines: {
                                display: true,
                                color: '{{ gridColor }}',
                                lineWidth: 1
                            }
                        },
                    },
                    plugins: {
                        legend: {
                            display: false,
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    const tooltipData = tooltipItem.dataset.realData[tooltipItem.dataIndex];
                                    return ' ' + tooltipData.duration + ': ' + tooltipData.activity;
                                },
                                beforeTitle: function(tooltipItems) {
                                    const tooltipItem = tooltipItems[0];
                                    const tooltipData = tooltipItem.dataset.realData[tooltipItem.dataIndex];
                                    return tooltipData.customer;
                                },
                                title: function(tooltipItems) {
                                    const tooltipItem = tooltipItems[0];
                                    const tooltipData = tooltipItem.dataset.realData[tooltipItem.dataIndex];
                                    return tooltipData.project;
                                },
                                afterTitle: function(tooltipItems) {
                                    return ' ';
                                },
                                footer: function(tooltipItems) {
                                    const tooltipItem = tooltipItems[0];
                                    const tooltipData = tooltipItem.dataset.realData[tooltipItem.dataIndex];
                                    return '{{ 'stats.durationTotal'|trans }}: ' + tooltipData.total + '\\n{{ 'billable'|trans }}: ' + tooltipData.billable;
                                },
                                beforeFooter: function(tooltipItems) {
                                    return ' ';
                                },
                            },
                        }
                    },
                }
            }
        );
    };
    
    var destroyChart = function () {
        myChart.destroy();
    };

    {% if kimai_context.javascriptRequest %}
        paintChart();
    {% else %}
        if (document.getElementById('dashboard-grid-container') !== null) {
            document.addEventListener('dashboard.initialized', paintChart);
        } else {
            document.addEventListener('kimai.initialized', paintChart);
        }
    {% endif %}
</script>
", "widget/widget-dailyworkingtimechart.html.twig", "C:\\wamp64\\www\\kimai\\templates\\widget\\widget-dailyworkingtimechart.html.twig");
    }
}
