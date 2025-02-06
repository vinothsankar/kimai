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

/* user/index.html.twig */
class __TwigTemplate_4958e141e8b1d12c666f7f105b7d7e14 extends Template
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
            'datatable_row_attr' => [$this, 'block_datatable_row_attr'],
            'datatable_column_value' => [$this, 'block_datatable_column_value'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        // line 2
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "user/index.html.twig", 2)->unwrap();
        // line 3
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "user/index.html.twig", 3)->unwrap();
        // line 4
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("user/actions.html.twig", "user/index.html.twig", 4)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("datatable.html.twig", "user/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
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

        yield " ";
        yield $macros["widgets"]->getTemplateForMacro("macro_user_row_attr", $context, 6, $this->getSourceContext())->macro_user_row_attr(...[(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 6, $this->source); })())]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datatable_column_value(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatable_column_value"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatable_column_value"));

        // line 9
        yield "    ";
        if (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 9, $this->source); })()) == "avatar")) {
            // line 10
            yield "        ";
            yield $macros["widgets"]->getTemplateForMacro("macro_user_avatar", $context, 10, $this->getSourceContext())->macro_user_avatar(...[(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 10, $this->source); })()), false]);
            yield "
    ";
        } elseif ((        // line 11
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 11, $this->source); })()) == "alias")) {
            // line 12
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 12, $this->source); })()), "alias", [], "any", false, false, false, 12), "html", null, true);
            yield "
    ";
        } elseif ((        // line 13
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 13, $this->source); })()) == "user")) {
            // line 14
            yield "        ";
            yield $macros["widgets"]->getTemplateForMacro("macro_username", $context, 14, $this->getSourceContext())->macro_username(...[(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 14, $this->source); })())]);
            yield "
    ";
        } elseif ((        // line 15
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 15, $this->source); })()) == "username")) {
            // line 16
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16), "html", null, true);
            yield "
    ";
        } elseif ((        // line 17
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 17, $this->source); })()) == "account_number")) {
            // line 18
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 18, $this->source); })()), "accountNumber", [], "any", false, false, false, 18), "html", null, true);
            yield "
    ";
        } elseif ((        // line 19
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 19, $this->source); })()) == "title")) {
            // line 20
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
            yield "
    ";
        } elseif ((        // line 21
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 21, $this->source); })()) == "email")) {
            // line 22
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), "html", null, true);
            yield "
    ";
        } elseif ((        // line 23
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 23, $this->source); })()) == "lastLogin")) {
            // line 24
            yield "        ";
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 24, $this->source); })()), "lastLogin", [], "any", false, false, false, 24))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateTime(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 24, $this->source); })()), "lastLogin", [], "any", false, false, false, 24)), "html", null, true);
            }
            // line 25
            yield "    ";
        } elseif (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 25, $this->source); })()) == "roles")) {
            // line 26
            yield "        ";
            $context["showUserRole"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 26, $this->source); })()), "roles", [], "any", false, false, false, 26)) == 1);
            // line 27
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 27, $this->source); })()), "roles", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 28
                yield "            ";
                if (((isset($context["showUserRole"]) || array_key_exists("showUserRole", $context) ? $context["showUserRole"] : (function () { throw new RuntimeError('Variable "showUserRole" does not exist.', 28, $this->source); })()) || ($context["role"] != "ROLE_USER"))) {
                    // line 29
                    yield "                ";
                    yield $macros["widgets"]->getTemplateForMacro("macro_label_role", $context, 29, $this->getSourceContext())->macro_label_role(...[$context["role"]]);
                    yield "
            ";
                }
                // line 31
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "    ";
        } elseif (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 32, $this->source); })()) == "team")) {
            // line 33
            yield "        ";
            yield $macros["widgets"]->getTemplateForMacro("macro_badge_team_access", $context, 33, $this->getSourceContext())->macro_badge_team_access(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 33, $this->source); })()), "teams", [], "any", false, false, false, 33)]);
            yield "
    ";
        } elseif ((        // line 34
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })()) == "active")) {
            // line 35
            yield "        ";
            yield $macros["widgets"]->getTemplateForMacro("macro_label_visible", $context, 35, $this->getSourceContext())->macro_label_visible(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 35, $this->source); })()), "enabled", [], "any", false, false, false, 35)]);
            yield "
    ";
        } elseif ((        // line 36
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 36, $this->source); })()) == "system_account")) {
            // line 37
            yield "        ";
            yield $macros["widgets"]->getTemplateForMacro("macro_label_boolean", $context, 37, $this->getSourceContext())->macro_label_boolean(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 37, $this->source); })()), "systemAccount", [], "any", false, false, false, 37)]);
            yield "
    ";
        } elseif ((        // line 38
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 38, $this->source); })()) == "actions")) {
            // line 39
            yield "        ";
            yield $macros["actions"]->getTemplateForMacro("macro_user", $context, 39, $this->getSourceContext())->macro_user(...[(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 39, $this->source); })()), "index"]);
            yield "
    ";
        } elseif ((is_string($_v0 =         // line 40
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 40, $this->source); })())) && is_string($_v1 = "mf_") && str_starts_with($_v0, $_v1))) {
            // line 41
            yield "        ";
            $context["metaField"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 41, $this->source); })()), "preference", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41)], "method", false, false, false, 41);
            // line 42
            yield "        ";
            if ((( !(null === (isset($context["metaField"]) || array_key_exists("metaField", $context) ? $context["metaField"] : (function () { throw new RuntimeError('Variable "metaField" does not exist.', 42, $this->source); })())) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["metaField"]) || array_key_exists("metaField", $context) ? $context["metaField"] : (function () { throw new RuntimeError('Variable "metaField" does not exist.', 42, $this->source); })()), "value", [], "any", false, false, false, 42))) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metaField"]) || array_key_exists("metaField", $context) ? $context["metaField"] : (function () { throw new RuntimeError('Variable "metaField" does not exist.', 42, $this->source); })()), "value", [], "any", false, false, false, 42)))) {
                // line 43
                yield "            ";
                yield $macros["widgets"]->getTemplateForMacro("macro_form_type_value", $context, 43, $this->getSourceContext())->macro_form_type_value(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "type", [], "any", false, false, false, 43), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metaField"]) || array_key_exists("metaField", $context) ? $context["metaField"] : (function () { throw new RuntimeError('Variable "metaField" does not exist.', 43, $this->source); })()), "value", [], "any", false, false, false, 43), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 43, $this->source); })())]);
                yield "
        ";
            }
            // line 45
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/index.html.twig";
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
        return array (  234 => 45,  228 => 43,  225 => 42,  222 => 41,  220 => 40,  215 => 39,  213 => 38,  208 => 37,  206 => 36,  201 => 35,  199 => 34,  194 => 33,  191 => 32,  185 => 31,  179 => 29,  176 => 28,  171 => 27,  168 => 26,  165 => 25,  160 => 24,  158 => 23,  153 => 22,  151 => 21,  146 => 20,  144 => 19,  139 => 18,  137 => 17,  132 => 16,  130 => 15,  125 => 14,  123 => 13,  118 => 12,  116 => 11,  111 => 10,  108 => 9,  95 => 8,  71 => 6,  60 => 1,  58 => 4,  56 => 3,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'datatable.html.twig' %}
{% import \"macros/widgets.html.twig\" as widgets %}
{% import \"macros/datatables.html.twig\" as tables %}
{% import \"user/actions.html.twig\" as actions %}

{% block datatable_row_attr %} {{ widgets.user_row_attr(entry) }}{% endblock %}

{% block datatable_column_value %}
    {% if column == 'avatar' %}
        {{ widgets.user_avatar(entry, false) }}
    {% elseif column == 'alias' %}
        {{ entry.alias }}
    {% elseif column == 'user' %}
        {{ widgets.username(entry) }}
    {% elseif column == 'username' %}
        {{ entry.username }}
    {% elseif column == 'account_number' %}
        {{ entry.accountNumber }}
    {% elseif column == 'title' %}
        {{ entry.title }}
    {% elseif column == 'email' %}
        {{ entry.email }}
    {% elseif column == 'lastLogin' %}
        {% if entry.lastLogin is not null %}{{ entry.lastLogin|date_time }}{% endif %}
    {% elseif column == 'roles' %}
        {% set showUserRole = entry.roles|length == 1 %}
        {% for role in entry.roles %}
            {% if showUserRole or role != 'ROLE_USER' %}
                {{ widgets.label_role(role) }}
            {% endif %}
        {% endfor %}
    {% elseif column == 'team' %}
        {{ widgets.badge_team_access(entry.teams) }}
    {% elseif column == 'active' %}
        {{ widgets.label_visible(entry.enabled) }}
    {% elseif column == 'system_account' %}
        {{ widgets.label_boolean(entry.systemAccount) }}
    {% elseif column == 'actions' %}
        {{ actions.user(entry, 'index') }}
    {% elseif column starts with 'mf_' %}
        {% set metaField = entry.preference(data.name) %}
        {% if not metaField is null and metaField.value is not null and metaField.value is not empty %}
            {{ widgets.form_type_value(data.type, metaField.value, entry) }}
        {% endif %}
    {% endif %}
{% endblock %}
", "user/index.html.twig", "C:\\wamp64\\www\\kimai\\templates\\user\\index.html.twig");
    }
}
