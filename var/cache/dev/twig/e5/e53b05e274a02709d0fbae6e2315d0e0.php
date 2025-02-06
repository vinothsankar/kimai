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

/* calendar/drag-drop.html.twig */
class __TwigTemplate_c06c0e65ea34e6f5c5d917f1eef54c3a extends Template
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
            'dd_timesheet' => [$this, 'block_dd_timesheet'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/drag-drop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/drag-drop.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('dd_timesheet', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dd_timesheet(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dd_timesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dd_timesheet"));

        // line 2
        yield "    ";
        $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "calendar/drag-drop.html.twig", 2)->unwrap();
        // line 3
        yield "    ";
        $macros["calendar"] = $this->loadTemplate("calendar/widgets.html.twig", "calendar/drag-drop.html.twig", 3)->unwrap();
        // line 4
        yield "    ";
        yield $macros["calendar"]->getTemplateForMacro("macro_dd_event", $context, 4, $this->getSourceContext())->macro_dd_event(...[$macros["widgets"]->getTemplateForMacro("macro_label_color", $context, 4, $this->getSourceContext())->macro_label_color(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 4, $this->source); })()), "color", [], "any", false, false, false, 4)]), ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 4, $this->source); })()), "project", [], "any", false, false, false, 4)) ? ($macros["widgets"]->getTemplateForMacro("macro_label_customer", $context, 4, $this->getSourceContext())->macro_label_customer(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 4, $this->source); })()), "project", [], "any", false, false, false, 4), "customer", [], "any", false, false, false, 4)])) : (null)), ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 4, $this->source); })()), "project", [], "any", false, false, false, 4)) ? ($macros["widgets"]->getTemplateForMacro("macro_label_project", $context, 4, $this->getSourceContext())->macro_label_project(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 4, $this->source); })()), "project", [], "any", false, false, false, 4)])) : (null)), null]);
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
        return "calendar/drag-drop.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  78 => 4,  75 => 3,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block dd_timesheet %}
    {% import \"macros/widgets.html.twig\" as widgets %}
    {% import \"calendar/widgets.html.twig\" as calendar %}
    {{ calendar.dd_event(widgets.label_color(entry.title, entry.color), entry.project ? widgets.label_customer(entry.project.customer) : null, entry.project ? widgets.label_project(entry.project) : null, null) }}
{% endblock %}
", "calendar/drag-drop.html.twig", "C:\\wamp64\\www\\kimai\\templates\\calendar\\drag-drop.html.twig");
    }
}
