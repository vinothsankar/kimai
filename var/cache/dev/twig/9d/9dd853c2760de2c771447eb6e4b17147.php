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

/* timesheet/index.html.twig */
class __TwigTemplate_cdb39dd94fe12f170d5bddee040828ba extends Template
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
            'datatable_outer' => [$this, 'block_datatable_outer'],
            'datatable_row' => [$this, 'block_datatable_row'],
            'status' => [$this, 'block_status'],
            'datatable_row_attr' => [$this, 'block_datatable_row_attr'],
            'datatable_column' => [$this, 'block_datatable_column'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "datatable.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timesheet/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timesheet/index.html.twig"));

        // line 2
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "timesheet/index.html.twig", 2)->unwrap();
        // line 3
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "timesheet/index.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("datatable.html.twig", "timesheet/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datatable_outer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatable_outer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatable_outer"));

        // line 6
        yield "    ";
        $context["checkOverlappingDesc"] = false;
        // line 7
        yield "    ";
        $context["checkOverlappingAsc"] = false;
        // line 8
        yield "    ";
        $context["query"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 8, $this->source); })()), "getQuery", [], "method", false, false, false, 8);
        // line 9
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 9, $this->source); })()), "orderBy", [], "any", false, false, false, 9) == "begin") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 9, $this->source); })()), "orderBy", [], "any", false, false, false, 9) == "end"))) {
            // line 10
            yield "        ";
            $context["checkOverlappingDesc"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 10, $this->source); })()), "order", [], "any", false, false, false, 10) == "DESC");
            // line 11
            yield "        ";
            $context["checkOverlappingAsc"] =  !(isset($context["checkOverlappingDesc"]) || array_key_exists("checkOverlappingDesc", $context) ? $context["checkOverlappingDesc"] : (function () { throw new RuntimeError('Variable "checkOverlappingDesc" does not exist.', 11, $this->source); })());
            // line 12
            yield "    ";
        }
        // line 13
        yield "
    ";
        // line 14
        $context["day"] = null;
        // line 15
        yield "    ";
        $context["dayDuration"] = 0;
        // line 16
        yield "    ";
        $context["dayRate"] = [];
        // line 17
        yield "    ";
        $context["dayInternalRate"] = [];
        // line 18
        yield "    ";
        $context["dayHourlyRate"] = 0;
        // line 19
        yield "    ";
        $context["lastEntry"] = null;
        // line 20
        yield "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 21, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 22
            if (((isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 22, $this->source); })()) === null)) {
                // line 23
                $context["day"] = $this->extensions['App\Twig\LocaleFormatExtensions']->dateShort(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 23));
                // line 24
                yield "        ";
            }
            // line 25
            if (((isset($context["showSummary"]) || array_key_exists("showSummary", $context) ? $context["showSummary"] : (function () { throw new RuntimeError('Variable "showSummary" does not exist.', 25, $this->source); })()) &&  !((isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 25, $this->source); })()) === $this->extensions['App\Twig\LocaleFormatExtensions']->dateShort(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 25))))) {
                // line 26
                yield $this->getTemplateForMacro("macro_summary", $context, 26, $this->getSourceContext())->macro_summary(...[(isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 26, $this->source); })()), (isset($context["dayDuration"]) || array_key_exists("dayDuration", $context) ? $context["dayDuration"] : (function () { throw new RuntimeError('Variable "dayDuration" does not exist.', 26, $this->source); })()), (isset($context["dayHourlyRate"]) || array_key_exists("dayHourlyRate", $context) ? $context["dayHourlyRate"] : (function () { throw new RuntimeError('Variable "dayHourlyRate" does not exist.', 26, $this->source); })()), (isset($context["dayInternalRate"]) || array_key_exists("dayInternalRate", $context) ? $context["dayInternalRate"] : (function () { throw new RuntimeError('Variable "dayInternalRate" does not exist.', 26, $this->source); })()), (isset($context["dayRate"]) || array_key_exists("dayRate", $context) ? $context["dayRate"] : (function () { throw new RuntimeError('Variable "dayRate" does not exist.', 26, $this->source); })()), (isset($context["sortedColumns"]) || array_key_exists("sortedColumns", $context) ? $context["sortedColumns"] : (function () { throw new RuntimeError('Variable "sortedColumns" does not exist.', 26, $this->source); })()), (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 26, $this->source); })())]);
                yield "
            ";
                // line 27
                $context["day"] = $this->extensions['App\Twig\LocaleFormatExtensions']->dateShort(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 27));
                // line 28
                yield "            ";
                $context["dayDuration"] = 0;
                // line 29
                yield "            ";
                $context["dayRate"] = [];
                // line 30
                yield "            ";
                $context["dayInternalRate"] = [];
                // line 31
                yield "            ";
                $context["dayHourlyRate"] = 0;
            }
            // line 33
            $context["customerCurrency"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 33), "customer", [], "any", false, false, false, 33), "currency", [], "any", false, false, false, 33);
            // line 34
            $context["entryHourlyRate"] = $this->extensions['App\Twig\LocaleFormatExtensions']->money(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "hourlyRate", [], "any", false, false, false, 34), (isset($context["customerCurrency"]) || array_key_exists("customerCurrency", $context) ? $context["customerCurrency"] : (function () { throw new RuntimeError('Variable "customerCurrency" does not exist.', 34, $this->source); })()));
            // line 35
            yield from $this->unwrap()->yieldBlock('datatable_row', $context, $blocks);
            // line 42
            if (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "end", [], "any", false, false, false, 42)) {
                // line 43
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["dayRate"] ?? null), (isset($context["customerCurrency"]) || array_key_exists("customerCurrency", $context) ? $context["customerCurrency"] : (function () { throw new RuntimeError('Variable "customerCurrency" does not exist.', 43, $this->source); })()), [], "array", true, true, false, 43)) {
                    // line 44
                    yield "                ";
                    $context["dayRate"] = Twig\Extension\CoreExtension::merge((isset($context["dayRate"]) || array_key_exists("dayRate", $context) ? $context["dayRate"] : (function () { throw new RuntimeError('Variable "dayRate" does not exist.', 44, $this->source); })()), [ (string)(isset($context["customerCurrency"]) || array_key_exists("customerCurrency", $context) ? $context["customerCurrency"] : (function () { throw new RuntimeError('Variable "customerCurrency" does not exist.', 44, $this->source); })()) => 0]);
                    // line 45
                    yield "            ";
                }
                // line 46
                yield "            ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["dayInternalRate"] ?? null), (isset($context["customerCurrency"]) || array_key_exists("customerCurrency", $context) ? $context["customerCurrency"] : (function () { throw new RuntimeError('Variable "customerCurrency" does not exist.', 46, $this->source); })()), [], "array", true, true, false, 46)) {
                    // line 47
                    yield "                ";
                    $context["dayInternalRate"] = Twig\Extension\CoreExtension::merge((isset($context["dayInternalRate"]) || array_key_exists("dayInternalRate", $context) ? $context["dayInternalRate"] : (function () { throw new RuntimeError('Variable "dayInternalRate" does not exist.', 47, $this->source); })()), [ (string)(isset($context["customerCurrency"]) || array_key_exists("customerCurrency", $context) ? $context["customerCurrency"] : (function () { throw new RuntimeError('Variable "customerCurrency" does not exist.', 47, $this->source); })()) => 0]);
                    // line 48
                    yield "            ";
                }
                // line 49
                yield "            ";
                $context["dayRate"] = Twig\Extension\CoreExtension::merge((isset($context["dayRate"]) || array_key_exists("dayRate", $context) ? $context["dayRate"] : (function () { throw new RuntimeError('Variable "dayRate" does not exist.', 49, $this->source); })()), [ (string)(isset($context["customerCurrency"]) || array_key_exists("customerCurrency", $context) ? $context["customerCurrency"] : (function () { throw new RuntimeError('Variable "customerCurrency" does not exist.', 49, $this->source); })()) => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["dayRate"]) || array_key_exists("dayRate", $context) ? $context["dayRate"] : (function () { throw new RuntimeError('Variable "dayRate" does not exist.', 49, $this->source); })()), (isset($context["customerCurrency"]) || array_key_exists("customerCurrency", $context) ? $context["customerCurrency"] : (function () { throw new RuntimeError('Variable "customerCurrency" does not exist.', 49, $this->source); })()), [], "array", false, false, false, 49) + CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "rate", [], "any", false, false, false, 49))]);
                // line 50
                yield "            ";
                $context["dayInternalRate"] = Twig\Extension\CoreExtension::merge((isset($context["dayInternalRate"]) || array_key_exists("dayInternalRate", $context) ? $context["dayInternalRate"] : (function () { throw new RuntimeError('Variable "dayInternalRate" does not exist.', 50, $this->source); })()), [ (string)(isset($context["customerCurrency"]) || array_key_exists("customerCurrency", $context) ? $context["customerCurrency"] : (function () { throw new RuntimeError('Variable "customerCurrency" does not exist.', 50, $this->source); })()) => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["dayInternalRate"]) || array_key_exists("dayInternalRate", $context) ? $context["dayInternalRate"] : (function () { throw new RuntimeError('Variable "dayInternalRate" does not exist.', 50, $this->source); })()), (isset($context["customerCurrency"]) || array_key_exists("customerCurrency", $context) ? $context["customerCurrency"] : (function () { throw new RuntimeError('Variable "customerCurrency" does not exist.', 50, $this->source); })()), [], "array", false, false, false, 50) + CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "internalRate", [], "any", false, false, false, 50))]);
            }
            // line 52
            if ( !(null === (isset($context["dayHourlyRate"]) || array_key_exists("dayHourlyRate", $context) ? $context["dayHourlyRate"] : (function () { throw new RuntimeError('Variable "dayHourlyRate" does not exist.', 52, $this->source); })()))) {
                // line 53
                yield "            ";
                if (((isset($context["dayHourlyRate"]) || array_key_exists("dayHourlyRate", $context) ? $context["dayHourlyRate"] : (function () { throw new RuntimeError('Variable "dayHourlyRate" does not exist.', 53, $this->source); })()) == 0)) {
                    // line 54
                    yield "                ";
                    $context["dayHourlyRate"] = (isset($context["entryHourlyRate"]) || array_key_exists("entryHourlyRate", $context) ? $context["entryHourlyRate"] : (function () { throw new RuntimeError('Variable "entryHourlyRate" does not exist.', 54, $this->source); })());
                    // line 55
                    yield "            ";
                } elseif (((isset($context["dayHourlyRate"]) || array_key_exists("dayHourlyRate", $context) ? $context["dayHourlyRate"] : (function () { throw new RuntimeError('Variable "dayHourlyRate" does not exist.', 55, $this->source); })()) != (isset($context["entryHourlyRate"]) || array_key_exists("entryHourlyRate", $context) ? $context["entryHourlyRate"] : (function () { throw new RuntimeError('Variable "entryHourlyRate" does not exist.', 55, $this->source); })()))) {
                    // line 56
                    yield "                ";
                    $context["dayHourlyRate"] = null;
                    // line 57
                    yield "            ";
                }
                // line 58
                yield "        ";
            }
            // line 59
            $context["dayDuration"] = ((isset($context["dayDuration"]) || array_key_exists("dayDuration", $context) ? $context["dayDuration"] : (function () { throw new RuntimeError('Variable "dayDuration" does not exist.', 59, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 59));
            // line 60
            $context["lastEntry"] = $context["entry"];
            // line 61
            yield "    ";
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
        unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "    ";
        if ((isset($context["showSummary"]) || array_key_exists("showSummary", $context) ? $context["showSummary"] : (function () { throw new RuntimeError('Variable "showSummary" does not exist.', 62, $this->source); })())) {
            // line 63
            yield "        ";
            yield $this->getTemplateForMacro("macro_summary", $context, 63, $this->getSourceContext())->macro_summary(...[(isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 63, $this->source); })()), (isset($context["dayDuration"]) || array_key_exists("dayDuration", $context) ? $context["dayDuration"] : (function () { throw new RuntimeError('Variable "dayDuration" does not exist.', 63, $this->source); })()), (isset($context["dayHourlyRate"]) || array_key_exists("dayHourlyRate", $context) ? $context["dayHourlyRate"] : (function () { throw new RuntimeError('Variable "dayHourlyRate" does not exist.', 63, $this->source); })()), (isset($context["dayInternalRate"]) || array_key_exists("dayInternalRate", $context) ? $context["dayInternalRate"] : (function () { throw new RuntimeError('Variable "dayInternalRate" does not exist.', 63, $this->source); })()), (isset($context["dayRate"]) || array_key_exists("dayRate", $context) ? $context["dayRate"] : (function () { throw new RuntimeError('Variable "dayRate" does not exist.', 63, $this->source); })()), (isset($context["sortedColumns"]) || array_key_exists("sortedColumns", $context) ? $context["sortedColumns"] : (function () { throw new RuntimeError('Variable "sortedColumns" does not exist.', 63, $this->source); })()), (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 63, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datatable_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatable_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatable_row"));

        // line 36
        yield "            <tr";
        yield from         $this->unwrap()->yieldBlock("datatable_row_attr", $context, $blocks);
        yield ">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortedColumns"]) || array_key_exists("sortedColumns", $context) ? $context["sortedColumns"] : (function () { throw new RuntimeError('Variable "sortedColumns" does not exist.', 37, $this->source); })()));
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
        foreach ($context['_seq'] as $context["column"] => $context["data"]) {
            // line 38
            yield "                    ";
            yield from             $this->unwrap()->yieldBlock("datatable_column", $context, $blocks);
            yield "
                ";
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
        unset($context['_seq'], $context['column'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "            </tr>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_status(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "status"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "status"));

        // line 68
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 68, $this->source); })()), "duration", [], "any", false, false, false, 68) > 0)) {
            // line 69
            yield "        ";
            $macros["_v0"] = $this->loadTemplate("macros/status.html.twig", "timesheet/index.html.twig", 69)->unwrap();
            // line 70
            yield "        ";
            yield $macros["_v0"]->getTemplateForMacro("macro_status_duration", $context, 70, $this->getSourceContext())->macro_status_duration(...[$this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 70, $this->source); })()), "duration", [], "any", false, false, false, 70))]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datatable_row_attr(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatable_row_attr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatable_row_attr"));

        // line 75
        yield "    ";
        $context["class"] = "";
        // line 76
        yield "    ";
        if (((isset($context["checkOverlappingDesc"]) || array_key_exists("checkOverlappingDesc", $context) ? $context["checkOverlappingDesc"] : (function () { throw new RuntimeError('Variable "checkOverlappingDesc" does not exist.', 76, $this->source); })()) || (isset($context["checkOverlappingAsc"]) || array_key_exists("checkOverlappingAsc", $context) ? $context["checkOverlappingAsc"] : (function () { throw new RuntimeError('Variable "checkOverlappingAsc" does not exist.', 76, $this->source); })()))) {
            // line 77
            yield "        ";
            if ((( !(null === (isset($context["lastEntry"]) || array_key_exists("lastEntry", $context) ? $context["lastEntry"] : (function () { throw new RuntimeError('Variable "lastEntry" does not exist.', 77, $this->source); })())) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 77, $this->source); })()), "end", [], "any", false, false, false, 77))) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77) === CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastEntry"]) || array_key_exists("lastEntry", $context) ? $context["lastEntry"] : (function () { throw new RuntimeError('Variable "lastEntry" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)))) {
                // line 78
                yield "            ";
                if (((isset($context["checkOverlappingDesc"]) || array_key_exists("checkOverlappingDesc", $context) ? $context["checkOverlappingDesc"] : (function () { throw new RuntimeError('Variable "checkOverlappingDesc" does not exist.', 78, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 78, $this->source); })()), "end", [], "any", false, false, false, 78), "timestamp", [], "any", false, false, false, 78) > CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastEntry"]) || array_key_exists("lastEntry", $context) ? $context["lastEntry"] : (function () { throw new RuntimeError('Variable "lastEntry" does not exist.', 78, $this->source); })()), "begin", [], "any", false, false, false, 78), "timestamp", [], "any", false, false, false, 78)))) {
                    // line 79
                    yield "                ";
                    $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 79, $this->source); })()) . " overlapping");
                    // line 80
                    yield "            ";
                } elseif (((isset($context["checkOverlappingAsc"]) || array_key_exists("checkOverlappingAsc", $context) ? $context["checkOverlappingAsc"] : (function () { throw new RuntimeError('Variable "checkOverlappingAsc" does not exist.', 80, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 80, $this->source); })()), "begin", [], "any", false, false, false, 80), "timestamp", [], "any", false, false, false, 80) < CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastEntry"]) || array_key_exists("lastEntry", $context) ? $context["lastEntry"] : (function () { throw new RuntimeError('Variable "lastEntry" does not exist.', 80, $this->source); })()), "end", [], "any", false, false, false, 80), "timestamp", [], "any", false, false, false, 80)))) {
                    // line 81
                    yield "                ";
                    $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 81, $this->source); })()) . " overlapping");
                    // line 82
                    yield "            ";
                }
                // line 83
                yield "        ";
            }
            // line 84
            yield "    ";
        }
        // line 85
        yield "    ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 85, $this->source); })()), "end", [], "any", false, false, false, 85)) {
            // line 86
            yield "        ";
            $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 86, $this->source); })()) . " recording");
            // line 87
            yield "    ";
        }
        // line 88
        yield "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 88, $this->source); })()))) {
            yield " class=\"modal-ajax-form open-edit";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 88, $this->source); })()), "html", null, true);
            yield "\" data-href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["editRoute"]) || array_key_exists("editRoute", $context) ? $context["editRoute"] : (function () { throw new RuntimeError('Variable "editRoute" does not exist.', 88, $this->source); })()), ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
            yield "\"";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datatable_column(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatable_column"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatable_column"));

        // line 92
        yield "    <td class=\"";
        yield $macros["tables"]->getTemplateForMacro("macro_class", $context, 92, $this->getSourceContext())->macro_class(...[(isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 92, $this->source); })()), (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 92, $this->source); })())]);
        if (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 92, $this->source); })()) == "description")) {
            yield " timesheet-description";
        }
        yield "\">
    ";
        // line 93
        if (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 93, $this->source); })()) == "id")) {
            // line 94
            yield "        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 94, $this->source); })())) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 94, $this->source); })())))) {
                // line 95
                yield "            ";
                yield $macros["tables"]->getTemplateForMacro("macro_datatable_multiupdate_row", $context, 95, $this->getSourceContext())->macro_datatable_multiupdate_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)]);
                yield "
        ";
            }
            // line 97
            yield "    ";
        } elseif (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 97, $this->source); })()) == "date")) {
            // line 98
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateShort(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 98, $this->source); })()), "begin", [], "any", false, false, false, 98)), "html", null, true);
            yield "
    ";
        } elseif ((        // line 99
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 99, $this->source); })()) == "starttime")) {
            // line 100
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->time(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 100, $this->source); })()), "begin", [], "any", false, false, false, 100)), "html", null, true);
            yield "
    ";
        } elseif ((        // line 101
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 101, $this->source); })()) == "endtime")) {
            // line 102
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 102, $this->source); })()), "end", [], "any", false, false, false, 102)) {
                // line 103
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->time(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 103, $this->source); })()), "end", [], "any", false, false, false, 103)), "html", null, true);
                yield "
        ";
            } else {
                // line 105
                yield "            &dash;
        ";
            }
            // line 107
            yield "    ";
        } elseif (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 107, $this->source); })()) == "duration")) {
            // line 108
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 108, $this->source); })()), "end", [], "any", false, false, false, 108)) {
                // line 109
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 109, $this->source); })()), "duration", [], "any", false, false, false, 109)), "html", null, true);
                yield "
        ";
            } else {
                // line 111
                yield "            <i data-since=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 111, $this->source); })()), "begin", [], "any", false, false, false, 111), "format", [Twig\Extension\CoreExtension::constant("DATE_ISO8601")], "method", false, false, false, 111), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration((isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 111, $this->source); })())), "html", null, true);
                yield "</i>
        ";
            }
            // line 113
            yield "    ";
        } elseif (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 113, $this->source); })()) == "break")) {
            // line 114
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 114, $this->source); })()), "break", [], "any", false, false, false, 114)), "html", null, true);
            yield "
    ";
        } elseif ((        // line 115
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 115, $this->source); })()) == "hourlyRate")) {
            // line 116
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["entryHourlyRate"]) || array_key_exists("entryHourlyRate", $context) ? $context["entryHourlyRate"] : (function () { throw new RuntimeError('Variable "entryHourlyRate" does not exist.', 116, $this->source); })()), "html", null, true);
            yield "
    ";
        } elseif ((        // line 117
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 117, $this->source); })()) == "rate")) {
            // line 118
            yield "        ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 118, $this->source); })()), "end", [], "any", false, false, false, 118) ||  !(isset($context["view_rate"]) || array_key_exists("view_rate", $context) ? $context["view_rate"] : (function () { throw new RuntimeError('Variable "view_rate" does not exist.', 118, $this->source); })()))) {
                // line 119
                yield "            &dash;
        ";
            } else {
                // line 121
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->money(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 121, $this->source); })()), "rate", [], "any", false, false, false, 121), (isset($context["customerCurrency"]) || array_key_exists("customerCurrency", $context) ? $context["customerCurrency"] : (function () { throw new RuntimeError('Variable "customerCurrency" does not exist.', 121, $this->source); })())), "html", null, true);
                yield "
        ";
            }
            // line 123
            yield "    ";
        } elseif (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 123, $this->source); })()) == "internalRate")) {
            // line 124
            yield "        ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 124, $this->source); })()), "end", [], "any", false, false, false, 124) ||  !(isset($context["view_rate"]) || array_key_exists("view_rate", $context) ? $context["view_rate"] : (function () { throw new RuntimeError('Variable "view_rate" does not exist.', 124, $this->source); })()))) {
                // line 125
                yield "            &dash;
        ";
            } else {
                // line 127
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->money(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 127, $this->source); })()), "internalRate", [], "any", false, false, false, 127), (isset($context["customerCurrency"]) || array_key_exists("customerCurrency", $context) ? $context["customerCurrency"] : (function () { throw new RuntimeError('Variable "customerCurrency" does not exist.', 127, $this->source); })())), "html", null, true);
                yield "
        ";
            }
            // line 129
            yield "    ";
        } elseif (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 129, $this->source); })()) == "customer")) {
            // line 130
            yield "        ";
            yield $macros["widgets"]->getTemplateForMacro("macro_label_customer", $context, 130, $this->getSourceContext())->macro_label_customer(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 130, $this->source); })()), "project", [], "any", false, false, false, 130), "customer", [], "any", false, false, false, 130)]);
            yield "
    ";
        } elseif ((        // line 131
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 131, $this->source); })()) == "project")) {
            // line 132
            yield "        ";
            yield $macros["widgets"]->getTemplateForMacro("macro_label_project", $context, 132, $this->getSourceContext())->macro_label_project(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 132, $this->source); })()), "project", [], "any", false, false, false, 132)]);
            yield "
    ";
        } elseif ((        // line 133
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 133, $this->source); })()) == "activity")) {
            // line 134
            yield "        ";
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 134, $this->source); })()), "activity", [], "any", false, false, false, 134))) {
                // line 135
                yield "            ";
                yield $macros["widgets"]->getTemplateForMacro("macro_label_activity", $context, 135, $this->getSourceContext())->macro_label_activity(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 135, $this->source); })()), "activity", [], "any", false, false, false, 135)]);
                yield "
        ";
            }
            // line 137
            yield "    ";
        } elseif (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 137, $this->source); })()) == "description")) {
            // line 138
            yield "        ";
            if ((isset($context["allowMarkdown"]) || array_key_exists("allowMarkdown", $context) ? $context["allowMarkdown"] : (function () { throw new RuntimeError('Variable "allowMarkdown" does not exist.', 138, $this->source); })())) {
                // line 139
                yield "            ";
                yield $this->env->getRuntime('App\Twig\Runtime\MarkdownExtension')->timesheetContent(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 139, $this->source); })()), "description", [], "any", false, false, false, 139));
                yield "
        ";
            } else {
                // line 141
                yield "            ";
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 141, $this->source); })()), "description", [], "any", false, false, false, 141), "html", null, true));
                yield "
        ";
            }
            // line 143
            yield "    ";
        } elseif (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 143, $this->source); })()) == "tags")) {
            // line 144
            yield "        ";
            yield $macros["widgets"]->getTemplateForMacro("macro_tag_list", $context, 144, $this->getSourceContext())->macro_tag_list(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 144, $this->source); })()), "tags", [], "any", false, false, false, 144)]);
            yield "
    ";
        } elseif ((        // line 145
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 145, $this->source); })()) == "billable")) {
            // line 146
            yield "        ";
            yield $macros["widgets"]->getTemplateForMacro("macro_label_boolean", $context, 146, $this->getSourceContext())->macro_label_boolean(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 146, $this->source); })()), "billable", [], "any", false, false, false, 146)]);
            yield "
    ";
        } elseif ((        // line 147
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 147, $this->source); })()) == "exported")) {
            // line 148
            yield "        ";
            yield $macros["widgets"]->getTemplateForMacro("macro_label_boolean", $context, 148, $this->getSourceContext())->macro_label_boolean(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 148, $this->source); })()), "exported", [], "any", false, false, false, 148)]);
            yield "
    ";
        } elseif ((        // line 149
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 149, $this->source); })()) == "username")) {
            // line 150
            yield "        ";
            yield $macros["widgets"]->getTemplateForMacro("macro_label_user", $context, 150, $this->getSourceContext())->macro_label_user(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150)]);
            yield "
    ";
        } elseif ((        // line 151
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 151, $this->source); })()) == "actions")) {
            // line 152
            yield "        ";
            $context["event"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->actions(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "user", [], "any", false, false, false, 152), (isset($context["action_single"]) || array_key_exists("action_single", $context) ? $context["action_single"] : (function () { throw new RuntimeError('Variable "action_single" does not exist.', 152, $this->source); })()), "index", ["timesheet" => (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 152, $this->source); })())]);
            // line 153
            yield "        ";
            yield $macros["widgets"]->getTemplateForMacro("macro_table_actions", $context, 153, $this->getSourceContext())->macro_table_actions(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 153, $this->source); })()), "actions", [], "any", false, false, false, 153)]);
            yield "
    ";
        } elseif ((is_string($_v1 =         // line 154
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 154, $this->source); })())) && is_string($_v2 = "mf_") && str_starts_with($_v1, $_v2))) {
            // line 155
            yield "            ";
            yield $macros["widgets"]->getTemplateForMacro("macro_meta_field_value", $context, 155, $this->getSourceContext())->macro_meta_field_value(...[(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 155, $this->source); })()), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 155, $this->source); })())]);
            yield "
    ";
        }
        // line 157
        yield "    </td>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 160
    public function macro_summary($day = null, $duration = null, $dayHourlyRate = null, $dayInternalRates = null, $dayRates = null, $sortedColumns = null, $dataTable = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "day" => $day,
            "duration" => $duration,
            "dayHourlyRate" => $dayHourlyRate,
            "dayInternalRates" => $dayInternalRates,
            "dayRates" => $dayRates,
            "sortedColumns" => $sortedColumns,
            "dataTable" => $dataTable,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "summary"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "summary"));

            // line 161
            yield "    ";
            $macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "timesheet/index.html.twig", 161)->unwrap();
            // line 162
            yield "    <tr class=\"summary info\">
    ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortedColumns"]) || array_key_exists("sortedColumns", $context) ? $context["sortedColumns"] : (function () { throw new RuntimeError('Variable "sortedColumns" does not exist.', 163, $this->source); })()));
            foreach ($context['_seq'] as $context["column"] => $context["data"]) {
                // line 164
                yield "        <td class=\"";
                yield $macros["tables"]->getTemplateForMacro("macro_class", $context, 164, $this->getSourceContext())->macro_class(...[(isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 164, $this->source); })()), $context["column"]]);
                yield "\">
        ";
                // line 165
                if (($context["column"] == "date")) {
                    // line 166
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 166, $this->source); })()), "html", null, true);
                    yield "
        ";
                } elseif ((                // line 167
$context["column"] == "duration")) {
                    // line 168
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 168, $this->source); })())), "html", null, true);
                    yield "
        ";
                } elseif ((                // line 169
$context["column"] == "hourlyRate")) {
                    // line 170
                    yield "            ";
                    if (( !(null === (isset($context["dayHourlyRate"]) || array_key_exists("dayHourlyRate", $context) ? $context["dayHourlyRate"] : (function () { throw new RuntimeError('Variable "dayHourlyRate" does not exist.', 170, $this->source); })())) && ((isset($context["dayHourlyRate"]) || array_key_exists("dayHourlyRate", $context) ? $context["dayHourlyRate"] : (function () { throw new RuntimeError('Variable "dayHourlyRate" does not exist.', 170, $this->source); })()) != 0))) {
                        // line 171
                        yield "                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dayHourlyRate"]) || array_key_exists("dayHourlyRate", $context) ? $context["dayHourlyRate"] : (function () { throw new RuntimeError('Variable "dayHourlyRate" does not exist.', 171, $this->source); })()), "html", null, true);
                        yield "
            ";
                    }
                    // line 173
                    yield "        ";
                } elseif (($context["column"] == "rate")) {
                    // line 174
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dayRates"]) || array_key_exists("dayRates", $context) ? $context["dayRates"] : (function () { throw new RuntimeError('Variable "dayRates" does not exist.', 174, $this->source); })()));
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
                    foreach ($context['_seq'] as $context["currency"] => $context["rate"]) {
                        // line 175
                        yield "                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->money($context["rate"], $context["currency"]), "html", null, true);
                        yield "
                ";
                        // line 176
                        if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 176)) {
                            // line 177
                            yield "                    <br>
                ";
                        }
                        // line 179
                        yield "            ";
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
                    unset($context['_seq'], $context['currency'], $context['rate'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 180
                    yield "        ";
                } elseif (($context["column"] == "internalRate")) {
                    // line 181
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dayInternalRates"]) || array_key_exists("dayInternalRates", $context) ? $context["dayInternalRates"] : (function () { throw new RuntimeError('Variable "dayInternalRates" does not exist.', 181, $this->source); })()));
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
                    foreach ($context['_seq'] as $context["currency"] => $context["rate"]) {
                        // line 182
                        yield "                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->money($context["rate"], $context["currency"]), "html", null, true);
                        yield "
                ";
                        // line 183
                        if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 183)) {
                            // line 184
                            yield "                    <br>
                ";
                        }
                        // line 186
                        yield "            ";
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
                    unset($context['_seq'], $context['currency'], $context['rate'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 187
                    yield "        ";
                } else {
                    // line 188
                    yield "
        ";
                }
                // line 190
                yield "        </td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['column'], $context['data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            yield "    </tr>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "timesheet/index.html.twig";
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
        return array (  831 => 192,  824 => 190,  820 => 188,  817 => 187,  803 => 186,  799 => 184,  797 => 183,  792 => 182,  774 => 181,  771 => 180,  757 => 179,  753 => 177,  751 => 176,  746 => 175,  728 => 174,  725 => 173,  719 => 171,  716 => 170,  714 => 169,  709 => 168,  707 => 167,  702 => 166,  700 => 165,  695 => 164,  691 => 163,  688 => 162,  685 => 161,  661 => 160,  649 => 157,  643 => 155,  641 => 154,  636 => 153,  633 => 152,  631 => 151,  626 => 150,  624 => 149,  619 => 148,  617 => 147,  612 => 146,  610 => 145,  605 => 144,  602 => 143,  596 => 141,  590 => 139,  587 => 138,  584 => 137,  578 => 135,  575 => 134,  573 => 133,  568 => 132,  566 => 131,  561 => 130,  558 => 129,  552 => 127,  548 => 125,  545 => 124,  542 => 123,  536 => 121,  532 => 119,  529 => 118,  527 => 117,  522 => 116,  520 => 115,  515 => 114,  512 => 113,  504 => 111,  498 => 109,  495 => 108,  492 => 107,  488 => 105,  482 => 103,  479 => 102,  477 => 101,  472 => 100,  470 => 99,  465 => 98,  462 => 97,  456 => 95,  453 => 94,  451 => 93,  443 => 92,  430 => 91,  412 => 88,  409 => 87,  406 => 86,  403 => 85,  400 => 84,  397 => 83,  394 => 82,  391 => 81,  388 => 80,  385 => 79,  382 => 78,  379 => 77,  376 => 76,  373 => 75,  360 => 74,  345 => 70,  342 => 69,  339 => 68,  326 => 67,  314 => 40,  297 => 38,  280 => 37,  275 => 36,  262 => 35,  247 => 63,  244 => 62,  230 => 61,  228 => 60,  226 => 59,  223 => 58,  220 => 57,  217 => 56,  214 => 55,  211 => 54,  208 => 53,  206 => 52,  202 => 50,  199 => 49,  196 => 48,  193 => 47,  190 => 46,  187 => 45,  184 => 44,  182 => 43,  180 => 42,  178 => 35,  176 => 34,  174 => 33,  170 => 31,  167 => 30,  164 => 29,  161 => 28,  159 => 27,  155 => 26,  153 => 25,  150 => 24,  148 => 23,  146 => 22,  129 => 21,  126 => 20,  123 => 19,  120 => 18,  117 => 17,  114 => 16,  111 => 15,  109 => 14,  106 => 13,  103 => 12,  100 => 11,  97 => 10,  94 => 9,  91 => 8,  88 => 7,  85 => 6,  72 => 5,  61 => 1,  59 => 3,  57 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'datatable.html.twig' %}
{% import \"macros/widgets.html.twig\" as widgets %}
{% import \"macros/datatables.html.twig\" as tables %}

{% block datatable_outer %}
    {% set checkOverlappingDesc = false %}
    {% set checkOverlappingAsc = false %}
    {% set query = dataTable.getQuery() %}
    {% if query.orderBy == 'begin' or query.orderBy == 'end' %}
        {% set checkOverlappingDesc = (query.order == 'DESC') %}
        {% set checkOverlappingAsc = not checkOverlappingDesc %}
    {% endif %}

    {% set day = null %}
    {% set dayDuration = 0 %}
    {% set dayRate = {} %}
    {% set dayInternalRate = {} %}
    {% set dayHourlyRate = 0 %}
    {% set lastEntry = null %}

    {% for entry in dataTable %}
        {%- if day is same as(null) -%}
            {% set day = entry.begin|date_short %}
        {% endif %}
        {%- if showSummary and day is not same as(entry.begin|date_short) -%}
            {{ _self.summary(day, dayDuration, dayHourlyRate, dayInternalRate, dayRate, sortedColumns, dataTable) }}
            {% set day = entry.begin|date_short %}
            {% set dayDuration = 0 %}
            {% set dayRate = {} %}
            {% set dayInternalRate = {} %}
            {% set dayHourlyRate = 0 %}
        {%- endif -%}
        {%- set customerCurrency = entry.project.customer.currency -%}
        {%- set entryHourlyRate = entry.hourlyRate|money(customerCurrency) -%}
        {% block datatable_row %}
            <tr{{ block('datatable_row_attr') }}>
                {% for column, data in sortedColumns %}
                    {{ block('datatable_column') }}
                {% endfor %}
            </tr>
        {% endblock %}
        {%- if entry.end -%}
            {% if dayRate[customerCurrency] is not defined %}
                {% set dayRate = dayRate|merge({(customerCurrency): 0}) %}
            {% endif %}
            {% if dayInternalRate[customerCurrency] is not defined %}
                {% set dayInternalRate = dayInternalRate|merge({(customerCurrency): 0}) %}
            {% endif %}
            {% set dayRate = dayRate|merge({(customerCurrency): dayRate[customerCurrency] + entry.rate}) %}
            {% set dayInternalRate = dayInternalRate|merge({(customerCurrency): dayInternalRate[customerCurrency] + entry.internalRate}) %}
        {%- endif -%}
        {% if dayHourlyRate is not null %}
            {% if dayHourlyRate == 0 %}
                {% set dayHourlyRate = entryHourlyRate %}
            {% elseif dayHourlyRate != entryHourlyRate %}
                {% set dayHourlyRate = null %}
            {% endif %}
        {% endif %}
        {%- set dayDuration = dayDuration + entry.duration -%}
        {% set lastEntry = entry %}
    {% endfor %}
    {% if showSummary %}
        {{ _self.summary(day, dayDuration, dayHourlyRate, dayInternalRate, dayRate, sortedColumns, dataTable) }}
    {% endif %}
{% endblock %}

{% block status %}
    {% if stats.duration > 0 %}
        {% from \"macros/status.html.twig\" import status_duration %}
        {{ status_duration(stats.duration|duration) }}
    {% endif %}
{% endblock %}

{% block datatable_row_attr %}
    {% set class = '' %}
    {% if checkOverlappingDesc or checkOverlappingAsc %}
        {% if lastEntry is not null and entry.end is not null and entry.user is same as (lastEntry.user) %}
            {% if checkOverlappingDesc and entry.end.timestamp > lastEntry.begin.timestamp %}
                {% set class = class ~ ' overlapping' %}
            {% elseif checkOverlappingAsc and entry.begin.timestamp < lastEntry.end.timestamp %}
                {% set class = class ~ ' overlapping' %}
            {% endif %}
        {% endif %}
    {% endif %}
    {% if not entry.end %}
        {% set class = class ~ ' recording' %}
    {% endif %}
    {% if is_granted('edit', entry) %} class=\"modal-ajax-form open-edit{{ class }}\" data-href=\"{{ path(editRoute, {'id': entry.id}) }}\"{% endif %}
{% endblock %}

{% block datatable_column %}
    <td class=\"{{ tables.class(dataTable, column) }}{% if column == 'description' %} timesheet-description{% endif %}\">
    {% if column == 'id' %}
        {% if is_granted('edit', entry) or is_granted('delete', entry) %}
            {{ tables.datatable_multiupdate_row(entry.id) }}
        {% endif %}
    {% elseif column == 'date' %}
        {{ entry.begin|date_short }}
    {% elseif column == 'starttime' %}
        {{ entry.begin|time }}
    {% elseif column == 'endtime' %}
        {% if entry.end %}
            {{ entry.end|time }}
        {% else %}
            &dash;
        {% endif %}
    {% elseif column == 'duration' %}
        {% if entry.end %}
            {{ entry.duration|duration }}
        {% else %}
            <i data-since=\"{{ entry.begin.format(constant('DATE_ISO8601')) }}\">{{ entry|duration }}</i>
        {% endif %}
    {% elseif column == 'break' %}
        {{ entry.break|duration }}
    {% elseif column == 'hourlyRate' %}
        {{ entryHourlyRate }}
    {% elseif column == 'rate' %}
        {% if not entry.end or not view_rate %}
            &dash;
        {% else %}
            {{ entry.rate|money(customerCurrency) }}
        {% endif %}
    {% elseif column == 'internalRate' %}
        {% if not entry.end or not view_rate %}
            &dash;
        {% else %}
            {{ entry.internalRate|money(customerCurrency) }}
        {% endif %}
    {% elseif column == 'customer' %}
        {{ widgets.label_customer(entry.project.customer) }}
    {% elseif column == 'project' %}
        {{ widgets.label_project(entry.project) }}
    {% elseif column == 'activity' %}
        {% if entry.activity is not null %}
            {{ widgets.label_activity(entry.activity) }}
        {% endif %}
    {% elseif column == 'description' %}
        {% if allowMarkdown %}
            {{ entry.description|desc2html }}
        {% else %}
            {{ entry.description|nl2br }}
        {% endif %}
    {% elseif column == 'tags' %}
        {{ widgets.tag_list(entry.tags) }}
    {% elseif column == 'billable' %}
        {{ widgets.label_boolean(entry.billable) }}
    {% elseif column == 'exported' %}
        {{ widgets.label_boolean(entry.exported) }}
    {% elseif column == 'username' %}
        {{ widgets.label_user(entry.user) }}
    {% elseif column == 'actions' %}
        {% set event = actions(app.user, action_single, 'index', {'timesheet': entry}) %}
        {{ widgets.table_actions(event.actions) }}
    {% elseif column starts with 'mf_' %}
            {{ widgets.meta_field_value(entry, data) }}
    {% endif %}
    </td>
{% endblock %}

{% macro summary(day, duration, dayHourlyRate, dayInternalRates, dayRates, sortedColumns, dataTable) %}
    {% import \"macros/datatables.html.twig\" as tables %}
    <tr class=\"summary info\">
    {% for column, data in sortedColumns %}
        <td class=\"{{ tables.class(dataTable, column) }}\">
        {% if column == 'date' %}
            {{ day }}
        {% elseif column == 'duration' %}
            {{ duration|duration }}
        {% elseif column == 'hourlyRate' %}
            {% if dayHourlyRate is not null and dayHourlyRate != 0 %}
                {{ dayHourlyRate }}
            {% endif %}
        {% elseif column == 'rate' %}
            {% for currency, rate in dayRates %}
                {{ rate|money(currency) }}
                {% if not loop.last %}
                    <br>
                {% endif %}
            {% endfor %}
        {% elseif column == 'internalRate' %}
            {% for currency, rate in dayInternalRates %}
                {{ rate|money(currency) }}
                {% if not loop.last %}
                    <br>
                {% endif %}
            {% endfor %}
        {% else %}

        {% endif %}
        </td>
    {% endfor %}
    </tr>
{% endmacro %}
", "timesheet/index.html.twig", "C:\\wamp64\\www\\kimai\\templates\\timesheet\\index.html.twig");
    }
}
