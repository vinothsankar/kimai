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

/* system-configuration/index.html.twig */
class __TwigTemplate_e9e6ab0710e259ac0c334aa7742f2201 extends Template
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
            'main' => [$this, 'block_main'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "system-configuration/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "system-configuration/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "system-configuration/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        yield "<div class=\"row\">

    <div class=\"col-12 col-xxl-2 col-md-3 mb-3 d-none d-md-block\">
        <div class=\"card sticky-xxl-top\">
            <div class=\"list-group list-group-flush\">
                ";
        // line 9
        $context["sorted"] = [];
        // line 10
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 11
            yield "                    ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "model", [], "any", false, false, false, 11), "translation", [], "any", false, false, false, 11), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "model", [], "any", false, false, false, 11), "translationDomain", [], "any", false, false, false, 11));
            // line 12
            yield "                    ";
            if (((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 12, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "model", [], "any", false, false, false, 12), "translation", [], "any", false, false, false, 12))) {
                // line 13
                yield "                        ";
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "model", [], "any", false, false, false, 13), "section", [], "any", false, false, false, 13));
                // line 14
                yield "                    ";
            }
            // line 15
            yield "                    ";
            $context["sorted"] = Twig\Extension\CoreExtension::merge((isset($context["sorted"]) || array_key_exists("sorted", $context) ? $context["sorted"] : (function () { throw new RuntimeError('Variable "sorted" does not exist.', 15, $this->source); })()), [["name" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 15, $this->source); })()), "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "model", [], "any", false, false, false, 15), "section", [], "any", false, false, false, 15), "counter" => Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "form", [], "any", false, false, false, 15), "children", [], "any", false, false, false, 15), "configuration", [], "any", false, false, false, 15))]]);
            // line 16
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, (isset($context["sorted"]) || array_key_exists("sorted", $context) ? $context["sorted"] : (function () { throw new RuntimeError('Variable "sorted" does not exist.', 17, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 18
            yield "                    <a class=\"list-group-item d-flex ps-4 pe-4 p-lg-3 pb-md-2 pt-md-2\" href=\"#conf_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["section"], "id", [], "any", false, false, false, 18), "html", null, true);
            yield "\">
                        ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["section"], "name", [], "any", false, false, false, 19), "html", null, true);
            yield "
                        <small class=\"text-body-secondary ms-auto\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["section"], "counter", [], "any", false, false, false, 20), "html", null, true);
            yield "</small>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "            </div>
        </div>
    </div>

    <div class=\"col-12 col-xxl-10 col-md-9\">
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 30
        $context["formEditTemplate"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["kimai_context"]) || array_key_exists("kimai_context", $context) ? $context["kimai_context"] : (function () { throw new RuntimeError('Variable "kimai_context" does not exist.', 30, $this->source); })()), "modalRequest", [], "any", false, false, false, 30)) ? ("default/_form_modal.html.twig") : ("default/_form.html.twig"));
        // line 31
        yield "        
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 32, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 33
            yield "                    ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "model", [], "any", false, false, false, 33), "translation", [], "any", false, false, false, 33), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "model", [], "any", false, false, false, 33), "translationDomain", [], "any", false, false, false, 33));
            // line 34
            yield "                    ";
            if (((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 34, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "model", [], "any", false, false, false, 34), "translation", [], "any", false, false, false, 34))) {
                // line 35
                yield "                        ";
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "model", [], "any", false, false, false, 35), "section", [], "any", false, false, false, 35));
                // line 36
                yield "                    ";
            }
            // line 37
            yield "                    ";
            yield from $this->loadTemplate("system-configuration/index.html.twig", "system-configuration/index.html.twig", 37, "1529130222")->unwrap()->yield(CoreExtension::merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 37, $this->source); })()), "form" => CoreExtension::getAttribute($this->env, $this->source, $context["section"], "form", [], "any", false, false, false, 37)]));
            // line 46
            yield "                ";
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
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "            </div>
        </div>
    </div>

</div>
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
        return "system-configuration/index.html.twig";
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
        return array (  194 => 47,  180 => 46,  177 => 37,  174 => 36,  171 => 35,  168 => 34,  165 => 33,  148 => 32,  145 => 31,  143 => 30,  134 => 23,  125 => 20,  121 => 19,  116 => 18,  111 => 17,  105 => 16,  102 => 15,  99 => 14,  96 => 13,  93 => 12,  90 => 11,  85 => 10,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
<div class=\"row\">

    <div class=\"col-12 col-xxl-2 col-md-3 mb-3 d-none d-md-block\">
        <div class=\"card sticky-xxl-top\">
            <div class=\"list-group list-group-flush\">
                {% set sorted = [] %}
                {% for section in sections %}
                    {% set title = section.model.translation|trans({}, section.model.translationDomain) %}
                    {% if title == section.model.translation %}
                        {% set title = section.model.section|trans %}
                    {% endif %}
                    {% set sorted = sorted|merge([{'name': title, 'id': section.model.section, 'counter': section.form.children.configuration|length}]) %}
                {% endfor %}
                {% for section in sorted|sort((a, b) => a.name <=> b.name) %}
                    <a class=\"list-group-item d-flex ps-4 pe-4 p-lg-3 pb-md-2 pt-md-2\" href=\"#conf_{{ section.id }}\">
                        {{ section.name }}
                        <small class=\"text-body-secondary ms-auto\">{{ section.counter }}</small>
                    </a>
                {% endfor %}
            </div>
        </div>
    </div>

    <div class=\"col-12 col-xxl-10 col-md-9\">
        <div class=\"row\">
            <div class=\"col-12\">
                {% set formEditTemplate = kimai_context.modalRequest ? 'default/_form_modal.html.twig' : 'default/_form.html.twig' %}
        
                {% for section in sections %}
                    {% set title = section.model.translation|trans({}, section.model.translationDomain) %}
                    {% if title == section.model.translation %}
                        {% set title = section.model.section|trans %}
                    {% endif %}
                    {% embed formEditTemplate with {'title': title, 'form': section.form} %}
                        {% block form_before %}<span id=\"conf_{{ section.model.section }}\"></span>{% endblock %}
                        {% block form_body %}
                            {% for pref in form.children.configuration %}
                                {{ form_widget(pref) }}
                            {% endfor %}
                            {{ form_rest(form) }}
                        {% endblock %}
                    {% endembed %}
                {% endfor %}
            </div>
        </div>
    </div>

</div>
{% endblock %}
", "system-configuration/index.html.twig", "C:\\wamp64\\www\\kimai\\templates\\system-configuration\\index.html.twig");
    }
}


/* system-configuration/index.html.twig */
class __TwigTemplate_e9e6ab0710e259ac0c334aa7742f2201___1529130222 extends Template
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
            'form_before' => [$this, 'block_form_before'],
            'form_body' => [$this, 'block_form_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 37
        return $this->loadTemplate((isset($context["formEditTemplate"]) || array_key_exists("formEditTemplate", $context) ? $context["formEditTemplate"] : (function () { throw new RuntimeError('Variable "formEditTemplate" does not exist.', 37, $this->source); })()), "system-configuration/index.html.twig", 37);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "system-configuration/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "system-configuration/index.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_before(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_before"));

        yield "<span id=\"conf_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 38, $this->source); })()), "model", [], "any", false, false, false, 38), "section", [], "any", false, false, false, 38), "html", null, true);
        yield "\"></span>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
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

        // line 40
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "children", [], "any", false, false, false, 40), "configuration", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["pref"]) {
            // line 41
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["pref"], 'widget');
            yield "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pref'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'rest');
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
        return "system-configuration/index.html.twig";
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
        return array (  390 => 43,  381 => 41,  376 => 40,  363 => 39,  338 => 38,  316 => 37,  194 => 47,  180 => 46,  177 => 37,  174 => 36,  171 => 35,  168 => 34,  165 => 33,  148 => 32,  145 => 31,  143 => 30,  134 => 23,  125 => 20,  121 => 19,  116 => 18,  111 => 17,  105 => 16,  102 => 15,  99 => 14,  96 => 13,  93 => 12,  90 => 11,  85 => 10,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
<div class=\"row\">

    <div class=\"col-12 col-xxl-2 col-md-3 mb-3 d-none d-md-block\">
        <div class=\"card sticky-xxl-top\">
            <div class=\"list-group list-group-flush\">
                {% set sorted = [] %}
                {% for section in sections %}
                    {% set title = section.model.translation|trans({}, section.model.translationDomain) %}
                    {% if title == section.model.translation %}
                        {% set title = section.model.section|trans %}
                    {% endif %}
                    {% set sorted = sorted|merge([{'name': title, 'id': section.model.section, 'counter': section.form.children.configuration|length}]) %}
                {% endfor %}
                {% for section in sorted|sort((a, b) => a.name <=> b.name) %}
                    <a class=\"list-group-item d-flex ps-4 pe-4 p-lg-3 pb-md-2 pt-md-2\" href=\"#conf_{{ section.id }}\">
                        {{ section.name }}
                        <small class=\"text-body-secondary ms-auto\">{{ section.counter }}</small>
                    </a>
                {% endfor %}
            </div>
        </div>
    </div>

    <div class=\"col-12 col-xxl-10 col-md-9\">
        <div class=\"row\">
            <div class=\"col-12\">
                {% set formEditTemplate = kimai_context.modalRequest ? 'default/_form_modal.html.twig' : 'default/_form.html.twig' %}
        
                {% for section in sections %}
                    {% set title = section.model.translation|trans({}, section.model.translationDomain) %}
                    {% if title == section.model.translation %}
                        {% set title = section.model.section|trans %}
                    {% endif %}
                    {% embed formEditTemplate with {'title': title, 'form': section.form} %}
                        {% block form_before %}<span id=\"conf_{{ section.model.section }}\"></span>{% endblock %}
                        {% block form_body %}
                            {% for pref in form.children.configuration %}
                                {{ form_widget(pref) }}
                            {% endfor %}
                            {{ form_rest(form) }}
                        {% endblock %}
                    {% endembed %}
                {% endfor %}
            </div>
        </div>
    </div>

</div>
{% endblock %}
", "system-configuration/index.html.twig", "C:\\wamp64\\www\\kimai\\templates\\system-configuration\\index.html.twig");
    }
}
