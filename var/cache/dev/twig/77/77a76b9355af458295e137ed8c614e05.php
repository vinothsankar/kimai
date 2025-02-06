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

/* partials/ticktack.html.twig */
class __TwigTemplate_9fc810589d8c21c8d8538c6d07240139 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/ticktack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/ticktack.html.twig"));

        // line 1
        $context["active_timesheets"] = $this->env->getRuntime('App\Twig\Runtime\TimesheetExtension')->activeEntries(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1));
        // line 2
        $context["hasActiveRecords"] =  !Twig\Extension\CoreExtension::testEmpty((isset($context["active_timesheets"]) || array_key_exists("active_timesheets", $context) ? $context["active_timesheets"] : (function () { throw new RuntimeError('Variable "active_timesheets" does not exist.', 2, $this->source); })()));
        // line 3
        if ( !(isset($context["hasActiveRecords"]) || array_key_exists("hasActiveRecords", $context) ? $context["hasActiveRecords"] : (function () { throw new RuntimeError('Variable "hasActiveRecords" does not exist.', 3, $this->source); })())) {
            // line 4
            yield "    ";
            // line 5
            yield "    ";
            $context["active_timesheets"] = [["id" => "000", "begin" => null, "activity" => ["name" => ""], "project" => ["name" => "", "customer" => ["name" => ""]]]];
        }
        // line 7
        yield "<div class=\"nav-item d-flex me-1 ticktac\">
    <div class=\"btn-list\">
        ";
        // line 9
        $context["class"] = "btn-outline-white";
        // line 10
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 10, $this->source); })()), "isDarkMode", [], "method", false, false, false, 10) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 10, $this->source); })()), "isNavbarOverlapping", [], "method", false, false, false, 10))) {
            // line 11
            yield "            ";
            $context["class"] = "btn-dark";
            // line 12
            yield "        ";
        }
        // line 13
        yield "        ";
        $context["entry"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_timesheets"]) || array_key_exists("active_timesheets", $context) ? $context["active_timesheets"] : (function () { throw new RuntimeError('Variable "active_timesheets" does not exist.', 13, $this->source); })()), 0, [], "array", false, false, false, 13);
        // line 14
        yield "        <div class=\"ticktac-menu\" data-api=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("active_timesheet");
        yield "\" data-href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stop_timesheet", ["id" => "000"]);
        yield "\" style=\"";
        if ( !(isset($context["hasActiveRecords"]) || array_key_exists("hasActiveRecords", $context) ? $context["hasActiveRecords"] : (function () { throw new RuntimeError('Variable "hasActiveRecords" does not exist.', 14, $this->source); })())) {
            yield "display:none";
        }
        yield "\">
            <a title=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.stop"), "html", null, true);
        yield "\" data-replacer=\"url\" class=\"api-link ticktac-running ticktac-stop btn ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 15, $this->source); })()), "html", null, true);
        yield " btn-icon px-sm-2\" href=\"#\" data-href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stop_timesheet", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\" data-event=\"kimai.timesheetStop kimai.timesheetUpdate\" data-method=\"PATCH\" data-msg-error=\"timesheet.stop.error\" data-msg-success=\"timesheet.stop.success\"";
        if ((isset($context["hasActiveRecords"]) || array_key_exists("hasActiveRecords", $context) ? $context["hasActiveRecords"] : (function () { throw new RuntimeError('Variable "hasActiveRecords" does not exist.', 15, $this->source); })())) {
            yield " accesskey=\"s\"";
        }
        yield ">
                <i class=\"text-red ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->icon("stop-small", false), "html", null, true);
        yield " me-0 me-sm-1\"></i>
                <span class=\"d-none d-sm-block\" data-replacer=\"duration\" data-title=\"true\" data-since=\"";
        // line 17
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 17, $this->source); })()), "begin", [], "any", false, false, false, 17))) ? ("") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateFormat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 17, $this->source); })()), "begin", [], "any", false, false, false, 17), Twig\Extension\CoreExtension::constant("DATE_ISO8601")), "html", null, true)));
        yield "\">";
        yield ((is_iterable((isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 17, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration(0), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration((isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 17, $this->source); })())), "html", null, true)));
        yield "</span>
            </a>
        </div>
        <div class=\"ticktac-menu-empty\" style=\"";
        // line 20
        if ((isset($context["hasActiveRecords"]) || array_key_exists("hasActiveRecords", $context) ? $context["hasActiveRecords"] : (function () { throw new RuntimeError('Variable "hasActiveRecords" does not exist.', 20, $this->source); })())) {
            yield "display:none";
        }
        yield "\">
            <a title=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.start"), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet_create");
        yield "\" class=\"modal-ajax-form ticktac-start btn ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 21, $this->source); })()), "html", null, true);
        yield " btn-icon px-sm-2\" accesskey=\"n\">
                <i class=\"text-green ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->icon("start", false), "html", null, true);
        yield " me-0 me-sm-1\"></i>
                <span class=\"d-none d-sm-block\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration(0), "html", null, true);
        yield "</span>
            </a>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/ticktack.html.twig";
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
        return array (  131 => 23,  127 => 22,  119 => 21,  113 => 20,  105 => 17,  101 => 16,  89 => 15,  78 => 14,  75 => 13,  72 => 12,  69 => 11,  66 => 10,  64 => 9,  60 => 7,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set active_timesheets = active_timesheets(app.user) %}
{% set hasActiveRecords = active_timesheets is not empty %}
{% if not hasActiveRecords %}
    {# fake entry, because at least one html template node is needed #}
    {% set active_timesheets = [{'id': '000', 'begin': null, 'activity': {'name': ''}, 'project': {'name': '', 'customer': {'name': ''}}}] %}
{% endif %}
<div class=\"nav-item d-flex me-1 ticktac\">
    <div class=\"btn-list\">
        {% set class = \"btn-outline-white\" %}
        {% if tabler_bundle.isDarkMode() or tabler_bundle.isNavbarOverlapping() %}
            {% set class = \"btn-dark\" %}
        {% endif %}
        {% set entry = active_timesheets[0] %}
        <div class=\"ticktac-menu\" data-api=\"{{ path('active_timesheet') }}\" data-href=\"{{ path('stop_timesheet', {'id' : '000'}) }}\" style=\"{% if not hasActiveRecords %}display:none{% endif %}\">
            <a title=\"{{ 'timesheet.stop'|trans }}\" data-replacer=\"url\" class=\"api-link ticktac-running ticktac-stop btn {{ class }} btn-icon px-sm-2\" href=\"#\" data-href=\"{{ path('stop_timesheet', {'id' : entry.id}) }}\" data-event=\"kimai.timesheetStop kimai.timesheetUpdate\" data-method=\"PATCH\" data-msg-error=\"timesheet.stop.error\" data-msg-success=\"timesheet.stop.success\"{% if hasActiveRecords %} accesskey=\"s\"{% endif %}>
                <i class=\"text-red {{ 'stop-small'|icon(false) }} me-0 me-sm-1\"></i>
                <span class=\"d-none d-sm-block\" data-replacer=\"duration\" data-title=\"true\" data-since=\"{{ entry.begin is null ? '' : entry.begin|date_format(constant('DATE_ISO8601')) }}\">{{ entry is iterable ? 0|duration : entry|duration }}</span>
            </a>
        </div>
        <div class=\"ticktac-menu-empty\" style=\"{% if hasActiveRecords %}display:none{% endif %}\">
            <a title=\"{{ 'timesheet.start'|trans }}\" href=\"{{ path('timesheet_create') }}\" class=\"modal-ajax-form ticktac-start btn {{ class }} btn-icon px-sm-2\" accesskey=\"n\">
                <i class=\"text-green {{ 'start'|icon(false) }} me-0 me-sm-1\"></i>
                <span class=\"d-none d-sm-block\">{{ 0|duration }}</span>
            </a>
        </div>
    </div>
</div>", "partials/ticktack.html.twig", "C:\\wamp64\\www\\kimai\\templates\\partials\\ticktack.html.twig");
    }
}
