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

/* @Tabler/components/progress_bar.html.twig */
class __TwigTemplate_24d102ea65b6e1c0e795a3e24a4a886b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/components/progress_bar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/components/progress_bar.html.twig"));

        // line 47
        yield "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_progress_bars($items = null, $options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progress_bars"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progress_bars"));

            // line 2
            yield "
    ";
            // line 3
            $context["_progressSize"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "progressSize", [], "any", true, true, false, 3) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "progressSize", [], "any", false, false, false, 3)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "progressSize", [], "any", false, false, false, 3)) : (""));
            // line 4
            yield "    ";
            $context["_backgroundColor"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "backgroundColor", [], "any", true, true, false, 4) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "backgroundColor", [], "any", false, false, false, 4)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "backgroundColor", [], "any", false, false, false, 4)) : (""));
            // line 5
            yield "    ";
            $context["_style"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "style", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "style", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "style", [], "any", false, false, false, 5)) : (""));
            // line 6
            yield "
    ";
            // line 7
            $context["_items"] = ($context["items"] ?? []);
            // line 8
            yield "
    <div class=\"progress ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_backgroundColor"]) || array_key_exists("_backgroundColor", $context) ? $context["_backgroundColor"] : (function () { throw new RuntimeError('Variable "_backgroundColor" does not exist.', 9, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_progressSize"]) || array_key_exists("_progressSize", $context) ? $context["_progressSize"] : (function () { throw new RuntimeError('Variable "_progressSize" does not exist.', 9, $this->source); })()), "html", null, true);
            yield "\" style=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_style"]) || array_key_exists("_style", $context) ? $context["_style"] : (function () { throw new RuntimeError('Variable "_style" does not exist.', 9, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["_items"]) || array_key_exists("_items", $context) ? $context["_items"] : (function () { throw new RuntimeError('Variable "_items" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                yield "
            ";
                // line 12
                $context["_value"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "current", [], "any", true, true, false, 12) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "current", [], "any", false, false, false, 12)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "current", [], "any", false, false, false, 12)) : (0));
                // line 13
                yield "            ";
                $context["_max"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "max", [], "any", true, true, false, 13) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "max", [], "any", false, false, false, 13)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "max", [], "any", false, false, false, 13)) : (0));
                // line 14
                yield "            ";
                $context["_min"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "min", [], "any", true, true, false, 14) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "min", [], "any", false, false, false, 14)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "min", [], "any", false, false, false, 14)) : (0));
                // line 15
                yield "            ";
                $context["_indeterminate"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "indeterminate", [], "any", true, true, false, 15) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "indeterminate", [], "any", false, false, false, 15)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "indeterminate", [], "any", false, false, false, 15)) : ((((isset($context["_value"]) || array_key_exists("_value", $context) ? $context["_value"] : (function () { throw new RuntimeError('Variable "_value" does not exist.', 15, $this->source); })()) == (isset($context["_max"]) || array_key_exists("_max", $context) ? $context["_max"] : (function () { throw new RuntimeError('Variable "_max" does not exist.', 15, $this->source); })())) && ((isset($context["_min"]) || array_key_exists("_min", $context) ? $context["_min"] : (function () { throw new RuntimeError('Variable "_min" does not exist.', 15, $this->source); })()) == (isset($context["_max"]) || array_key_exists("_max", $context) ? $context["_max"] : (function () { throw new RuntimeError('Variable "_max" does not exist.', 15, $this->source); })())))));
                // line 16
                yield "            ";
                $context["percent"] = ((((isset($context["_indeterminate"]) || array_key_exists("_indeterminate", $context) ? $context["_indeterminate"] : (function () { throw new RuntimeError('Variable "_indeterminate" does not exist.', 16, $this->source); })()) || (((isset($context["_max"]) || array_key_exists("_max", $context) ? $context["_max"] : (function () { throw new RuntimeError('Variable "_max" does not exist.', 16, $this->source); })()) - (isset($context["_min"]) || array_key_exists("_min", $context) ? $context["_min"] : (function () { throw new RuntimeError('Variable "_min" does not exist.', 16, $this->source); })())) == 0))) ? (0) : (((((isset($context["_value"]) || array_key_exists("_value", $context) ? $context["_value"] : (function () { throw new RuntimeError('Variable "_value" does not exist.', 16, $this->source); })()) - (isset($context["_min"]) || array_key_exists("_min", $context) ? $context["_min"] : (function () { throw new RuntimeError('Variable "_min" does not exist.', 16, $this->source); })())) * 100) / ((isset($context["_max"]) || array_key_exists("_max", $context) ? $context["_max"] : (function () { throw new RuntimeError('Variable "_max" does not exist.', 16, $this->source); })()) - (isset($context["_min"]) || array_key_exists("_min", $context) ? $context["_min"] : (function () { throw new RuntimeError('Variable "_min" does not exist.', 16, $this->source); })())))));
                // line 17
                yield "
            ";
                // line 18
                $context["_striped"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "striped", [], "any", true, true, false, 18) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "striped", [], "any", false, false, false, 18)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "striped", [], "any", false, false, false, 18)) : (false));
                // line 19
                yield "            ";
                $context["_animated"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "animated", [], "any", true, true, false, 19) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "animated", [], "any", false, false, false, 19)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "animated", [], "any", false, false, false, 19)) : (false));
                // line 20
                yield "
            ";
                // line 21
                $context["_autoLabel"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "autoLabel", [], "any", true, true, false, 21) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "autoLabel", [], "any", false, false, false, 21)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "autoLabel", [], "any", false, false, false, 21)) : (false));
                // line 22
                yield "            ";
                $context["_label"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", true, true, false, 22) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 22)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 22)) : (((((isset($context["_autoLabel"]) || array_key_exists("_autoLabel", $context) ? $context["_autoLabel"] : (function () { throw new RuntimeError('Variable "_autoLabel" does not exist.', 22, $this->source); })()) &&  !(isset($context["_indeterminate"]) || array_key_exists("_indeterminate", $context) ? $context["_indeterminate"] : (function () { throw new RuntimeError('Variable "_indeterminate" does not exist.', 22, $this->source); })()))) ? (((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 22, $this->source); })()) . "%")) : (""))));
                // line 23
                yield "            ";
                $context["_labelVisible"] = (((isset($context["_label"]) || array_key_exists("_label", $context) ? $context["_label"] : (function () { throw new RuntimeError('Variable "_label" does not exist.', 23, $this->source); })()) != "") && (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "labelVisible", [], "any", true, true, false, 23) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "labelVisible", [], "any", false, false, false, 23)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "labelVisible", [], "any", false, false, false, 23)) : (true)));
                // line 24
                yield "
            ";
                // line 25
                $context["_color"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 25)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 25)) : (""));
                // line 26
                yield "            ";
                $context["_style"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "style", [], "any", true, true, false, 26) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "style", [], "any", false, false, false, 26)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "style", [], "any", false, false, false, 26)) : (""));
                // line 27
                yield "
            <div class=\"progress-bar ";
                // line 28
                if (( !(isset($context["_indeterminate"]) || array_key_exists("_indeterminate", $context) ? $context["_indeterminate"] : (function () { throw new RuntimeError('Variable "_indeterminate" does not exist.', 28, $this->source); })()) && (isset($context["_striped"]) || array_key_exists("_striped", $context) ? $context["_striped"] : (function () { throw new RuntimeError('Variable "_striped" does not exist.', 28, $this->source); })()))) {
                    yield "progress-bar-striped";
                }
                yield " ";
                if ((isset($context["_animated"]) || array_key_exists("_animated", $context) ? $context["_animated"] : (function () { throw new RuntimeError('Variable "_animated" does not exist.', 28, $this->source); })())) {
                    yield "progress-bar-animated";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_color"]) || array_key_exists("_color", $context) ? $context["_color"] : (function () { throw new RuntimeError('Variable "_color" does not exist.', 28, $this->source); })()), "html", null, true);
                yield " ";
                if ((isset($context["_indeterminate"]) || array_key_exists("_indeterminate", $context) ? $context["_indeterminate"] : (function () { throw new RuntimeError('Variable "_indeterminate" does not exist.', 28, $this->source); })())) {
                    yield "progress-bar-indeterminate";
                }
                yield "\"
                 role=\"progressbar\"
                 style=\"";
                // line 30
                if ( !(isset($context["_indeterminate"]) || array_key_exists("_indeterminate", $context) ? $context["_indeterminate"] : (function () { throw new RuntimeError('Variable "_indeterminate" does not exist.', 30, $this->source); })())) {
                    yield "width: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 30, $this->source); })()), "html", null, true);
                    yield "%;";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_style"]) || array_key_exists("_style", $context) ? $context["_style"] : (function () { throw new RuntimeError('Variable "_style" does not exist.', 30, $this->source); })()), "html", null, true);
                yield "\"

                    ";
                // line 32
                if ( !(isset($context["_indeterminate"]) || array_key_exists("_indeterminate", $context) ? $context["_indeterminate"] : (function () { throw new RuntimeError('Variable "_indeterminate" does not exist.', 32, $this->source); })())) {
                    // line 33
                    yield "                        aria-valuenow=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_value"]) || array_key_exists("_value", $context) ? $context["_value"] : (function () { throw new RuntimeError('Variable "_value" does not exist.', 33, $this->source); })()), "html", null, true);
                    yield "\"
                        aria-valuemin=\"";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_min"]) || array_key_exists("_min", $context) ? $context["_min"] : (function () { throw new RuntimeError('Variable "_min" does not exist.', 34, $this->source); })()), "html", null, true);
                    yield "\"
                        aria-valuemax=\"";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_max"]) || array_key_exists("_max", $context) ? $context["_max"] : (function () { throw new RuntimeError('Variable "_max" does not exist.', 35, $this->source); })()), "html", null, true);
                    yield "\"
                    ";
                }
                // line 37
                yield "
                    ";
                // line 38
                if (((isset($context["_label"]) || array_key_exists("_label", $context) ? $context["_label"] : (function () { throw new RuntimeError('Variable "_label" does not exist.', 38, $this->source); })()) != "")) {
                    // line 39
                    yield "                        aria-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_label"]) || array_key_exists("_label", $context) ? $context["_label"] : (function () { throw new RuntimeError('Variable "_label" does not exist.', 39, $this->source); })()), "html", null, true);
                    yield "\"
                    ";
                }
                // line 41
                yield "            >
                <span class=\"";
                // line 42
                if ( !(isset($context["_labelVisible"]) || array_key_exists("_labelVisible", $context) ? $context["_labelVisible"] : (function () { throw new RuntimeError('Variable "_labelVisible" does not exist.', 42, $this->source); })())) {
                    yield "visually-hidden";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_label"]) || array_key_exists("_label", $context) ? $context["_label"] : (function () { throw new RuntimeError('Variable "_label" does not exist.', 42, $this->source); })()), "html", null, true);
                yield "</span>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function macro_progress_bar($item = null, $options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progress_bar"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progress_bar"));

            // line 50
            yield "    ";
            yield $this->getTemplateForMacro("macro_progress_bars", $context, 50, $this->getSourceContext())->macro_progress_bars(...[[(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 50, $this->source); })())], ($context["options"] ?? [])]);
            yield "
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
        return "@Tabler/components/progress_bar.html.twig";
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
        return array (  261 => 50,  242 => 49,  229 => 45,  216 => 42,  213 => 41,  207 => 39,  205 => 38,  202 => 37,  197 => 35,  193 => 34,  188 => 33,  186 => 32,  175 => 30,  158 => 28,  155 => 27,  152 => 26,  150 => 25,  147 => 24,  144 => 23,  141 => 22,  139 => 21,  136 => 20,  133 => 19,  131 => 18,  128 => 17,  125 => 16,  122 => 15,  119 => 14,  116 => 13,  114 => 12,  111 => 11,  107 => 10,  99 => 9,  96 => 8,  94 => 7,  91 => 6,  88 => 5,  85 => 4,  83 => 3,  80 => 2,  61 => 1,  48 => 47,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro progress_bars(items, options) %}

    {% set _progressSize = options.progressSize ?? '' %}
    {% set _backgroundColor = options.backgroundColor ?? '' %}
    {% set _style = options.style ?? '' %}

    {% set _items = items ?? [] %}

    <div class=\"progress {{ _backgroundColor }} {{ _progressSize }}\" style=\"{{ _style }}\">
        {% for item in _items %}

            {% set _value = item.current ?? 0 %}
            {% set _max = item.max ?? 0 %}
            {% set _min = item.min ?? 0 %}
            {% set _indeterminate = item.indeterminate ?? (_value == _max and _min == _max) %}
            {% set percent = _indeterminate or (_max - _min) == 0 ? 0 : ((_value - _min) * 100) / (_max - _min) %}

            {% set _striped = item.striped ?? false %}
            {% set _animated = item.animated ?? false %}

            {% set _autoLabel = item.autoLabel ?? false %}
            {% set _label = item.label ?? (_autoLabel and not _indeterminate ? percent ~ '%' : '') %}
            {% set _labelVisible = _label != '' and (item.labelVisible ?? true) %}

            {% set _color = item.color ?? '' %}
            {% set _style = item.style ?? '' %}

            <div class=\"progress-bar {% if not _indeterminate and _striped %}progress-bar-striped{% endif %} {% if _animated %}progress-bar-animated{% endif %} {{ _color }} {% if _indeterminate %}progress-bar-indeterminate{% endif %}\"
                 role=\"progressbar\"
                 style=\"{% if not _indeterminate %}width: {{ percent }}%;{% endif %} {{ _style }}\"

                    {% if not _indeterminate %}
                        aria-valuenow=\"{{ _value }}\"
                        aria-valuemin=\"{{ _min }}\"
                        aria-valuemax=\"{{ _max }}\"
                    {% endif %}

                    {% if _label != '' %}
                        aria-label=\"{{ _label }}\"
                    {% endif %}
            >
                <span class=\"{% if not _labelVisible %}visually-hidden{% endif %}\">{{ _label }}</span>
            </div>
        {% endfor %}
    </div>
{% endmacro %}


{% macro progress_bar(item, options) %}
    {{ _self.progress_bars([item], options ?? {}) }}
{% endmacro %}
", "@Tabler/components/progress_bar.html.twig", "C:\\wamp64\\www\\kimai\\vendor\\kevinpapst\\tabler-bundle\\templates\\components\\progress_bar.html.twig");
    }
}
