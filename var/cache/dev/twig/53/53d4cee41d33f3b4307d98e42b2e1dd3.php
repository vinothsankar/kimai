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

/* @Tabler/includes/navbar_notifications.html.twig */
class __TwigTemplate_c2555658f244790100b932272f842d29 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/includes/navbar_notifications.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/includes/navbar_notifications.html.twig"));

        // line 2
        $context["notificationEvent"] = $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->getNotifications();
        // line 3
        yield "
";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 4, $this->source); })()), "visible", [], "any", false, false, false, 4)) {
            // line 5
            yield "    <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 5, $this->source); })()), "containerClass", [], "any", false, false, false, 5), "html", null, true);
            yield "\">
        ";
            // line 7
            yield "        <a class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 7, $this->source); })()), "buttonClass", [], "any", false, false, false, 7), "html", null, true);
            yield "\" href=\"#\" data-bs-toggle=\"dropdown\" tabindex=\"-1\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show notifications", [], "TablerBundle"), "html", null, true);
            yield "\">
            <i class=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->icon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 8, $this->source); })()), "icon", [], "any", false, false, false, 8)), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 8, $this->source); })()), "iconClass", [], "any", false, false, false, 8), "html", null, true);
            yield "\"></i>
            ";
            // line 9
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 9, $this->source); })()), "showBadge", [], "any", false, false, false, 9) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 9, $this->source); })()), "total", [], "any", false, false, false, 9) > 0))) {
                // line 10
                yield "<span class=\"badge bg-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 10, $this->source); })()), "badgeColor", [], "any", false, false, false, 10), "html", null, true);
                yield "\">";
                // line 11
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 11, $this->source); })()), "showBadgeTotal", [], "any", false, false, false, 11)) {
                    // line 12
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 12, $this->source); })()), "total", [], "any", false, false, false, 12), "html", null, true);
                }
                // line 14
                yield "</span>";
            }
            // line 16
            yield "        </a>

        ";
            // line 19
            yield "        <div class=\"dropdown-menu ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 19, $this->source); })()), "withArrow", [], "any", false, false, false, 19)) {
                yield "dropdown-menu-arrow";
            }
            yield " dropdown-menu-end dropdown-menu-card\">
            <div class=\"card\">
                ";
            // line 22
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 22, $this->source); })()), "titleHtml", [], "any", false, false, false, 22)) {
                // line 23
                yield "                    ";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 23, $this->source); })()), "titleHtml", [], "any", false, false, false, 23);
                yield "
                ";
            } else {
                // line 25
                yield "                    <div class=\"card-header\">
                        <div class=\"card-title text-truncate\">
                            ";
                // line 27
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 27, $this->source); })()), "total", [], "any", false, false, false, 27) > 0)) {
                    // line 28
                    yield "                                ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["notificationEvent"] ?? null), "title", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["notificationEvent"] ?? null), "title", [], "any", false, false, false, 28)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["notificationEvent"] ?? null), "title", [], "any", false, false, false, 28), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have %count% notifications", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 28, $this->source); })()), "total", [], "any", false, false, false, 28)], "TablerBundle"), "html", null, true)));
                    yield "
                            ";
                } else {
                    // line 30
                    yield "                                ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["notificationEvent"] ?? null), "titleEmpty", [], "any", true, true, false, 30) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["notificationEvent"] ?? null), "titleEmpty", [], "any", false, false, false, 30)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["notificationEvent"] ?? null), "titleEmpty", [], "any", false, false, false, 30), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have no notification", [], "TablerBundle"), "html", null, true)));
                    yield "
                            ";
                }
                // line 32
                yield "                        </div>
                    </div>
                ";
            }
            // line 35
            yield "
                ";
            // line 37
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 37, $this->source); })()), "total", [], "any", false, false, false, 37) > 0)) {
                // line 38
                yield "                    <div class=\"list-group list-group-flush list-group-hoverable\">
                        ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 39, $this->source); })()), "notifications", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                    // line 40
                    yield "                            ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "html", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "html", [], "any", false, false, false, 40)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "html", [], "any", false, false, false, 40)) : (false))) {
                        // line 41
                        yield "                                ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 41);
                        yield "
                            ";
                    } else {
                        // line 43
                        yield "                                <div
                                    class=\"list-group-item ";
                        // line 44
                        if ((((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "active", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "active", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "active", [], "any", false, false, false, 44)) : (false))) {
                            yield "active";
                        }
                        yield " ";
                        if ((((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "disabled", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "disabled", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "disabled", [], "any", false, false, false, 44)) : (false))) {
                            yield "disabled";
                        }
                        yield "\"
                                >
                                    <div class=\"row align-items-center\">
                                        ";
                        // line 47
                        if ((((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "withBadge", [], "any", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "withBadge", [], "any", false, false, false, 47)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "withBadge", [], "any", false, false, false, 47)) : (true))) {
                            // line 48
                            yield "                                            <div class='col-auto'>
                                                <div class=\"col-auto\">
                                                    <span
                                                        class=\"status-dot ";
                            // line 51
                            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "badgeAnimated", [], "any", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "badgeAnimated", [], "any", false, false, false, 51)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "badgeAnimated", [], "any", false, false, false, 51)) : (false))) {
                                yield "status-dot-animated";
                            }
                            yield " ";
                            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 51))) {
                                yield "bg-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 51), "html", null, true);
                            }
                            yield " d-block\"
                                                    ></span>
                                                </div>
                                            </div>
                                        ";
                        }
                        // line 56
                        yield "                                        <div class=\"col text-truncate\">
                                            <a class='text-muted text-truncate'
                                               href=\"";
                        // line 58
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "url", [], "any", true, true, false, 58) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "url", [], "any", false, false, false, 58)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "url", [], "any", false, false, false, 58), "html", null, true)) : ("#"));
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 58), "html", null, true);
                        yield "</a>
                                        </div>
                                    </div>
                                </div>
                            ";
                    }
                    // line 63
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                yield "
                        ";
                // line 66
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 66, $this->source); })()), "total", [], "any", false, false, false, 66) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 66, $this->source); })()), "maxDisplay", [], "any", false, false, false, 66))) {
                    // line 67
                    yield "                            <li class=\"list-group-item disabled\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("And %count% more…", ["%count%" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 67, $this->source); })()), "total", [], "any", false, false, false, 67) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["notificationEvent"]) || array_key_exists("notificationEvent", $context) ? $context["notificationEvent"] : (function () { throw new RuntimeError('Variable "notificationEvent" does not exist.', 67, $this->source); })()), "maxDisplay", [], "any", false, false, false, 67))], "TablerBundle"), "html", null, true);
                    yield "</li>
                        ";
                }
                // line 69
                yield "                    </div>
                ";
            }
            // line 71
            yield "            </div>
        </div>
    </div>
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
        return "@Tabler/includes/navbar_notifications.html.twig";
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
        return array (  226 => 71,  222 => 69,  216 => 67,  213 => 66,  210 => 64,  204 => 63,  194 => 58,  190 => 56,  175 => 51,  170 => 48,  168 => 47,  156 => 44,  153 => 43,  147 => 41,  144 => 40,  140 => 39,  137 => 38,  134 => 37,  131 => 35,  126 => 32,  120 => 30,  114 => 28,  112 => 27,  108 => 25,  102 => 23,  99 => 22,  91 => 19,  87 => 16,  84 => 14,  81 => 12,  79 => 11,  75 => 10,  73 => 9,  67 => 8,  60 => 7,  55 => 5,  53 => 4,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var notificationEvent \\KevinPapst\\TablerBundle\\Event\\NotificationEvent #}
{% set notificationEvent = tabler_notifications() %}

{% if notificationEvent.visible %}
    <div class=\"{{ notificationEvent.containerClass }}\">
        {# Notification Icon #}
        <a class=\"{{ notificationEvent.buttonClass }}\" href=\"#\" data-bs-toggle=\"dropdown\" tabindex=\"-1\" title=\"{{ 'Show notifications'|trans({}, 'TablerBundle') }}\">
            <i class=\"{{ notificationEvent.icon|tabler_icon }} {{ notificationEvent.iconClass }}\"></i>
            {% if notificationEvent.showBadge and notificationEvent.total > 0 -%}
                <span class=\"badge bg-{{ notificationEvent.badgeColor }}\">
                {%- if notificationEvent.showBadgeTotal -%}
                    {{ notificationEvent.total }}
                {%- endif -%}
            </span>
            {%- endif %}
        </a>

        {# Dropdown #}
        <div class=\"dropdown-menu {% if notificationEvent.withArrow %}dropdown-menu-arrow{% endif %} dropdown-menu-end dropdown-menu-card\">
            <div class=\"card\">
                {# Header #}
                {% if notificationEvent.titleHtml %}
                    {{ notificationEvent.titleHtml | raw }}
                {% else %}
                    <div class=\"card-header\">
                        <div class=\"card-title text-truncate\">
                            {% if notificationEvent.total > 0 %}
                                {{ notificationEvent.title ?? 'You have %count% notifications'|trans({'%count%': notificationEvent.total}, 'TablerBundle') }}
                            {% else %}
                                {{ notificationEvent.titleEmpty ?? 'You have no notification'|trans({}, 'TablerBundle') }}
                            {% endif %}
                        </div>
                    </div>
                {% endif %}

                {# Notifications #}
                {% if notificationEvent.total > 0 %}
                    <div class=\"list-group list-group-flush list-group-hoverable\">
                        {% for notification in notificationEvent.notifications %}
                            {% if notification.html ?? false %}
                                {{ notification.message | raw }}
                            {% else %}
                                <div
                                    class=\"list-group-item {% if notification.active ?? false %}active{% endif %} {% if notification.disabled ?? false %}disabled{% endif %}\"
                                >
                                    <div class=\"row align-items-center\">
                                        {% if notification.withBadge ?? true %}
                                            <div class='col-auto'>
                                                <div class=\"col-auto\">
                                                    <span
                                                        class=\"status-dot {% if notification.badgeAnimated ?? false %}status-dot-animated{% endif %} {% if notification.type is not null %}bg-{{ notification.type }}{% endif %} d-block\"
                                                    ></span>
                                                </div>
                                            </div>
                                        {% endif %}
                                        <div class=\"col text-truncate\">
                                            <a class='text-muted text-truncate'
                                               href=\"{{ notification.url ?? '#' }}\">{{ notification.message }}</a>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}

                        {# \"More..\" part #}
                        {% if notificationEvent.total > notificationEvent.maxDisplay %}
                            <li class=\"list-group-item disabled\">{{ 'And %count% more…' | trans({'%count%' : notificationEvent.total - notificationEvent.maxDisplay}, 'TablerBundle') }}</li>
                        {% endif %}
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endif %}
", "@Tabler/includes/navbar_notifications.html.twig", "C:\\wamp64\\www\\kimai\\vendor\\kevinpapst\\tabler-bundle\\templates\\includes\\navbar_notifications.html.twig");
    }
}
