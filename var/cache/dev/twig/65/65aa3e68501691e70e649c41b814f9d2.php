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

/* @Tabler/components/accordion.html.twig */
class __TwigTemplate_9d0157afba229ab09fe72a70a3350476 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/components/accordion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/components/accordion.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_accordion($items = null, $options = null, ...$varargs): string|Markup
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
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "accordion"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "accordion"));

            // line 2
            yield "
    ";
            // line 4
            yield "    ";
            $context["_id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 4) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 4)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 4)) : ($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->uniqueId("accordion_")));
            // line 5
            yield "    ";
            $context["_raw"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "raw", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "raw", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "raw", [], "any", false, false, false, 5)) : (true));
            // line 6
            yield "    ";
            $context["_flush"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "flush", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "flush", [], "any", false, false, false, 6)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "flush", [], "any", false, false, false, 6)) : (false));
            // line 7
            yield "    ";
            $context["_always_open"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "alwaysOpen", [], "any", true, true, false, 7) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "alwaysOpen", [], "any", false, false, false, 7)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "alwaysOpen", [], "any", false, false, false, 7)) : (false));
            // line 8
            yield "    ";
            $context["_extraClass"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "extraClass", [], "any", true, true, false, 8) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "extraClass", [], "any", false, false, false, 8)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "extraClass", [], "any", false, false, false, 8)) : (""));
            // line 9
            yield "
    <div id=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_id"]) || array_key_exists("_id", $context) ? $context["_id"] : (function () { throw new RuntimeError('Variable "_id" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "\" class=\"accordion ";
            if (((isset($context["_flush"]) || array_key_exists("_flush", $context) ? $context["_flush"] : (function () { throw new RuntimeError('Variable "_flush" does not exist.', 10, $this->source); })()) == true)) {
                yield "accordion-flush";
            }
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_extraClass"]) || array_key_exists("_extraClass", $context) ? $context["_extraClass"] : (function () { throw new RuntimeError('Variable "_extraClass" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 11, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                yield "
            ";
                // line 14
                yield "            ";
                $context["_id_collapse"] = (((isset($context["_id"]) || array_key_exists("_id", $context) ? $context["_id"] : (function () { throw new RuntimeError('Variable "_id" does not exist.', 14, $this->source); })()) . "_collapse_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 14));
                // line 15
                yield "            ";
                $context["_item_title"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", true, true, false, 15) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 15)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 15)) : (""));
                // line 16
                yield "            ";
                $context["_item_body"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "body", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "body", [], "any", false, false, false, 16)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "body", [], "any", false, false, false, 16)) : (""));
                // line 17
                yield "            ";
                $context["_item_body_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bodyClasses", [], "any", true, true, false, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bodyClasses", [], "any", false, false, false, 17)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bodyClasses", [], "any", false, false, false, 17)) : ("pt-0"));
                // line 18
                yield "            ";
                $context["_item_body_before"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bodyBefore", [], "any", true, true, false, 18) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bodyBefore", [], "any", false, false, false, 18)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bodyBefore", [], "any", false, false, false, 18)) : (""));
                // line 19
                yield "            ";
                $context["_item_body_after"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bodyAfter", [], "any", true, true, false, 19) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bodyAfter", [], "any", false, false, false, 19)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bodyAfter", [], "any", false, false, false, 19)) : (""));
                // line 20
                yield "
            ";
                // line 22
                yield "            ";
                $context["_item_open"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "options", [], "any", false, true, false, 22), "open", [], "any", true, true, false, 22) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "options", [], "any", false, true, false, 22), "open", [], "any", false, false, false, 22)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "options", [], "any", false, true, false, 22), "open", [], "any", false, false, false, 22)) : (false));
                // line 23
                yield "            ";
                $context["_item_extraClass"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "options", [], "any", false, true, false, 23), "extraClass", [], "any", true, true, false, 23) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "options", [], "any", false, true, false, 23), "extraClass", [], "any", false, false, false, 23)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "options", [], "any", false, true, false, 23), "extraClass", [], "any", false, false, false, 23)) : (""));
                // line 24
                yield "            ";
                $context["_item_title_extraClass"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "options", [], "any", false, true, false, 24), "titleExtraClass", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "options", [], "any", false, true, false, 24), "titleExtraClass", [], "any", false, false, false, 24)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "options", [], "any", false, true, false, 24), "titleExtraClass", [], "any", false, false, false, 24)) : (""));
                // line 25
                yield "            ";
                $context["_item_body_extraClass"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "options", [], "any", false, true, false, 25), "bodyExtraClass", [], "any", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "options", [], "any", false, true, false, 25), "bodyExtraClass", [], "any", false, false, false, 25)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "options", [], "any", false, true, false, 25), "bodyExtraClass", [], "any", false, false, false, 25)) : (""));
                // line 26
                yield "
            <div class=\"accordion-item ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_item_extraClass"]) || array_key_exists("_item_extraClass", $context) ? $context["_item_extraClass"] : (function () { throw new RuntimeError('Variable "_item_extraClass" does not exist.', 27, $this->source); })()), "html", null, true);
                yield "\">
                <div class=\"accordion-header ";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_item_title_extraClass"]) || array_key_exists("_item_title_extraClass", $context) ? $context["_item_title_extraClass"] : (function () { throw new RuntimeError('Variable "_item_title_extraClass" does not exist.', 28, $this->source); })()), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_id"]) || array_key_exists("_id", $context) ? $context["_id"] : (function () { throw new RuntimeError('Variable "_id" does not exist.', 28, $this->source); })()), "html", null, true);
                yield "-heading-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 28), "html", null, true);
                yield "\">
                    <button class=\"accordion-button ";
                // line 29
                if ( !(isset($context["_item_open"]) || array_key_exists("_item_open", $context) ? $context["_item_open"] : (function () { throw new RuntimeError('Variable "_item_open" does not exist.', 29, $this->source); })())) {
                    yield "collapsed";
                }
                yield "\"
                            type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_id_collapse"]) || array_key_exists("_id_collapse", $context) ? $context["_id_collapse"] : (function () { throw new RuntimeError('Variable "_id_collapse" does not exist.', 30, $this->source); })()), "html", null, true);
                yield "\"
                            aria-expanded=\"true\">
                        ";
                // line 32
                if ((isset($context["_raw"]) || array_key_exists("_raw", $context) ? $context["_raw"] : (function () { throw new RuntimeError('Variable "_raw" does not exist.', 32, $this->source); })())) {
                    yield (isset($context["_item_title"]) || array_key_exists("_item_title", $context) ? $context["_item_title"] : (function () { throw new RuntimeError('Variable "_item_title" does not exist.', 32, $this->source); })());
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_item_title"]) || array_key_exists("_item_title", $context) ? $context["_item_title"] : (function () { throw new RuntimeError('Variable "_item_title" does not exist.', 32, $this->source); })()), "html", null, true);
                }
                // line 33
                yield "                    </button>
                </div>

                <div id=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_id_collapse"]) || array_key_exists("_id_collapse", $context) ? $context["_id_collapse"] : (function () { throw new RuntimeError('Variable "_id_collapse" does not exist.', 36, $this->source); })()), "html", null, true);
                yield "\" ";
                if (((isset($context["_always_open"]) || array_key_exists("_always_open", $context) ? $context["_always_open"] : (function () { throw new RuntimeError('Variable "_always_open" does not exist.', 36, $this->source); })()) == false)) {
                    yield "data-bs-parent=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_id"]) || array_key_exists("_id", $context) ? $context["_id"] : (function () { throw new RuntimeError('Variable "_id" does not exist.', 36, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                // line 37
                yield "                     class=\"accordion-collapse collapse ";
                if ((isset($context["_item_open"]) || array_key_exists("_item_open", $context) ? $context["_item_open"] : (function () { throw new RuntimeError('Variable "_item_open" does not exist.', 37, $this->source); })())) {
                    yield "show";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_item_body_extraClass"]) || array_key_exists("_item_body_extraClass", $context) ? $context["_item_body_extraClass"] : (function () { throw new RuntimeError('Variable "_item_body_extraClass" does not exist.', 37, $this->source); })()), "html", null, true);
                yield "\">
                    ";
                // line 38
                if ((isset($context["_raw"]) || array_key_exists("_raw", $context) ? $context["_raw"] : (function () { throw new RuntimeError('Variable "_raw" does not exist.', 38, $this->source); })())) {
                    yield (isset($context["_item_body_before"]) || array_key_exists("_item_body_before", $context) ? $context["_item_body_before"] : (function () { throw new RuntimeError('Variable "_item_body_before" does not exist.', 38, $this->source); })());
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_item_body_before"]) || array_key_exists("_item_body_before", $context) ? $context["_item_body_before"] : (function () { throw new RuntimeError('Variable "_item_body_before" does not exist.', 38, $this->source); })()), "html", null, true);
                }
                // line 39
                yield "                    <div class=\"accordion-body ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_item_body_classes"]) || array_key_exists("_item_body_classes", $context) ? $context["_item_body_classes"] : (function () { throw new RuntimeError('Variable "_item_body_classes" does not exist.', 39, $this->source); })()), "html", null, true);
                yield "\">
                        ";
                // line 40
                if ((isset($context["_raw"]) || array_key_exists("_raw", $context) ? $context["_raw"] : (function () { throw new RuntimeError('Variable "_raw" does not exist.', 40, $this->source); })())) {
                    yield (isset($context["_item_body"]) || array_key_exists("_item_body", $context) ? $context["_item_body"] : (function () { throw new RuntimeError('Variable "_item_body" does not exist.', 40, $this->source); })());
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_item_body"]) || array_key_exists("_item_body", $context) ? $context["_item_body"] : (function () { throw new RuntimeError('Variable "_item_body" does not exist.', 40, $this->source); })()), "html", null, true);
                }
                // line 41
                yield "                    </div>
                    ";
                // line 42
                if ((isset($context["_raw"]) || array_key_exists("_raw", $context) ? $context["_raw"] : (function () { throw new RuntimeError('Variable "_raw" does not exist.', 42, $this->source); })())) {
                    yield (isset($context["_item_body_after"]) || array_key_exists("_item_body_after", $context) ? $context["_item_body_after"] : (function () { throw new RuntimeError('Variable "_item_body_after" does not exist.', 42, $this->source); })());
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_item_body_after"]) || array_key_exists("_item_body_after", $context) ? $context["_item_body_after"] : (function () { throw new RuntimeError('Variable "_item_body_after" does not exist.', 42, $this->source); })()), "html", null, true);
                }
                // line 43
                yield "                </div>
            </div>

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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "    </div>

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
        return "@Tabler/components/accordion.html.twig";
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
        return array (  257 => 47,  240 => 43,  234 => 42,  231 => 41,  225 => 40,  220 => 39,  214 => 38,  205 => 37,  197 => 36,  192 => 33,  186 => 32,  181 => 30,  175 => 29,  167 => 28,  163 => 27,  160 => 26,  157 => 25,  154 => 24,  151 => 23,  148 => 22,  145 => 20,  142 => 19,  139 => 18,  136 => 17,  133 => 16,  130 => 15,  127 => 14,  124 => 12,  107 => 11,  97 => 10,  94 => 9,  91 => 8,  88 => 7,  85 => 6,  82 => 5,  79 => 4,  76 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro accordion(items, options) %}

    {# Options #}
    {% set _id = options.id ?? tabler_unique_id('accordion_') %}
    {% set _raw = options.raw ?? true %}
    {% set _flush = options.flush ?? false %}
    {% set _always_open = options.alwaysOpen ?? false %}
    {% set _extraClass = options.extraClass ?? '' %}

    <div id=\"{{ _id }}\" class=\"accordion {% if _flush == true %}accordion-flush{% endif %} {{ _extraClass }}\">
        {% for item in items %}

            {# Item #}
            {% set _id_collapse = _id ~ '_collapse_' ~ loop.index %}
            {% set _item_title = item.title ?? '' %}
            {% set _item_body = item.body ?? '' %}
            {% set _item_body_classes = item.bodyClasses ?? 'pt-0' %}
            {% set _item_body_before = item.bodyBefore ?? '' %}
            {% set _item_body_after = item.bodyAfter ?? '' %}

            {# Item Options #}
            {% set _item_open = item.options.open ?? false %}
            {% set _item_extraClass = item.options.extraClass ?? '' %}
            {% set _item_title_extraClass = item.options.titleExtraClass ?? '' %}
            {% set _item_body_extraClass = item.options.bodyExtraClass ?? '' %}

            <div class=\"accordion-item {{ _item_extraClass }}\">
                <div class=\"accordion-header {{ _item_title_extraClass }}\" id=\"{{ _id }}-heading-{{ loop.index }}\">
                    <button class=\"accordion-button {% if not _item_open %}collapsed{% endif %}\"
                            type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ _id_collapse }}\"
                            aria-expanded=\"true\">
                        {% if _raw %}{{ _item_title | raw }}{% else %}{{ _item_title }}{% endif %}
                    </button>
                </div>

                <div id=\"{{ _id_collapse }}\" {% if _always_open == false %}data-bs-parent=\"#{{ _id }}\"{% endif %}
                     class=\"accordion-collapse collapse {% if _item_open %}show{% endif %} {{ _item_body_extraClass }}\">
                    {% if _raw %}{{ _item_body_before | raw }}{% else %}{{ _item_body_before }}{% endif %}
                    <div class=\"accordion-body {{ _item_body_classes }}\">
                        {% if _raw %}{{ _item_body | raw }}{% else %}{{ _item_body }}{% endif %}
                    </div>
                    {% if _raw %}{{ _item_body_after | raw }}{% else %}{{ _item_body_after }}{% endif %}
                </div>
            </div>

        {% endfor %}
    </div>

{% endmacro %}
", "@Tabler/components/accordion.html.twig", "C:\\wamp64\\www\\kimai\\vendor\\kevinpapst\\tabler-bundle\\templates\\components\\accordion.html.twig");
    }
}
