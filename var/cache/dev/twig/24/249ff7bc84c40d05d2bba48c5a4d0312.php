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

/* user/layout.html.twig */
class __TwigTemplate_752fad87b63b9bf709908722f9d4c6f9 extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'profile_intro' => [$this, 'block_profile_intro'],
            'user_title_box_attributes' => [$this, 'block_user_title_box_attributes'],
            'profile_content' => [$this, 'block_profile_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/layout.html.twig"));

        // line 2
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("user/actions.html.twig", "user/layout.html.twig", 2)->unwrap();
        // line 3
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "user/layout.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        yield $macros["actions"]->getTemplateForMacro("macro_user", $context, 6, $this->getSourceContext())->macro_user(...[(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 6, $this->source); })())]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 11
        yield from $this->unwrap()->yieldBlock('profile_intro', $context, $blocks);
        // line 37
        yield "            ";
        yield from $this->unwrap()->yieldBlock('profile_content', $context, $blocks);
        // line 38
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_profile_intro(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profile_intro"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profile_intro"));

        // line 12
        yield "                <div class=\"card mb-3\">
                    <div class=\"card-body box-user-profile\">
                        <div class=\"row row-sm-2 align-items-center\">
                            <div class=\"col-auto\" data-toggle=\"tooltip\" title=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("id"), "html", null, true);
        yield ": ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "\">
                                ";
        // line 16
        yield $macros["widgets"]->getTemplateForMacro("macro_user_avatar", $context, 16, $this->getSourceContext())->macro_user_avatar(...[(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), false, "avatar-lg"]);
        yield "
                            </div>
                            <div class=\"col\" style=\"min-width: 100px\"";
        // line 18
        yield from $this->unwrap()->yieldBlock('user_title_box_attributes', $context, $blocks);
        yield ">
                                <h4 class=\"card-title m-0\">";
        // line 19
        yield $macros["widgets"]->getTemplateForMacro("macro_username", $context, 19, $this->getSourceContext())->macro_username(...[(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })())]);
        yield "</h4>
                                ";
        // line 20
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20))) {
            // line 21
            yield "                                <div class=\"text-body-secondary\">
                                    ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
            yield "
                                </div>
                                ";
        }
        // line 25
        yield "                            </div>
                            <div class=\"col-auto text-end mt-2 mt-sm-1\" id=\"profile-buttons\">
                                ";
        // line 27
        $macros["_v0"] = $this->loadTemplate("@theme/components/buttons.html.twig", "user/layout.html.twig", 27)->unwrap();
        // line 28
        yield "                                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28) == (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()))) {
            // line 29
            yield "                                ";
            yield $macros["_v0"]->getTemplateForMacro("macro_link_button", $context, 29, $this->getSourceContext())->macro_link_button(...[$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("notifications"), "javascript:notificationStatus()", "fas fa-bell", "default"]);
            yield "
                                ";
        }
        // line 31
        yield "                                ";
        yield $macros["_v0"]->getTemplateForMacro("macro_link_button", $context, 31, $this->getSourceContext())->macro_link_button(...[$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("email"), ("mailto:" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31)), "mail", "default"]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_user_title_box_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_title_box_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_title_box_attributes"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_profile_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profile_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profile_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44) == (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()))) {
            // line 45
            yield "    <script>
        function notificationStatus()
        {
            const notification = window.kimai.getPlugin('notification');
            if (!notification.isSupported()) {
                notification.request((result) => {
                    if (result === false) {
                        window.kimai.getPlugin('alert').info('";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("notifications.denied"), "js"), "html", null, true);
            yield "');
                    } else if (result === true) {
                        notification.notify(null, '";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("notifications.welcome"), "js"), "html", null, true);
            yield "');
                    }
                    buttonStatusCheck(window.kimai);
                });
            } else {
                notification.notify(null, '";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("notifications.welcome"), "js"), "html", null, true);
            yield "');
            }
        }

        function buttonStatusCheck(kimai)
        {
            const button = document.querySelector('div#profile-buttons a');
            const icon = button.querySelector('i');
            const notification = kimai.getPlugin('notification');

            if (notification.isSupported()) {
                icon.classList.remove('fa-bell-slash');
                icon.classList.add('fa-bell');
                icon.classList.remove('text-danger');
                icon.classList.add('text-success');
            } else {
                icon.classList.remove('fa-bell');
                icon.classList.add('fa-bell-slash');
                icon.classList.remove('text-success');
                icon.classList.add('text-danger');
            }
        }

        document.addEventListener('kimai.initialized', function(event) {
            buttonStatusCheck(event.detail.kimai);
        });
    </script>
    ";
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
        return "user/layout.html.twig";
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
        return array (  322 => 59,  314 => 54,  309 => 52,  300 => 45,  298 => 44,  293 => 43,  280 => 42,  258 => 37,  236 => 18,  218 => 31,  212 => 29,  209 => 28,  207 => 27,  203 => 25,  197 => 22,  194 => 21,  192 => 20,  188 => 19,  184 => 18,  179 => 16,  173 => 15,  168 => 12,  155 => 11,  142 => 38,  139 => 37,  137 => 11,  133 => 9,  120 => 8,  97 => 6,  74 => 5,  63 => 1,  61 => 3,  59 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% import \"user/actions.html.twig\" as actions %}
{% import \"macros/widgets.html.twig\" as widgets %}

{% block page_title %}{{ 'users'|trans }}{% endblock %}
{% block page_actions %}{{ actions.user(user, tab) }}{% endblock %}

{% block main %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {% block profile_intro %}
                <div class=\"card mb-3\">
                    <div class=\"card-body box-user-profile\">
                        <div class=\"row row-sm-2 align-items-center\">
                            <div class=\"col-auto\" data-toggle=\"tooltip\" title=\"{{ 'id'|trans }}: {{ user.id }}\">
                                {{ widgets.user_avatar(user, false, 'avatar-lg') }}
                            </div>
                            <div class=\"col\" style=\"min-width: 100px\"{% block user_title_box_attributes %}{% endblock %}>
                                <h4 class=\"card-title m-0\">{{ widgets.username(user) }}</h4>
                                {% if user.title is not empty %}
                                <div class=\"text-body-secondary\">
                                    {{ user.title }}
                                </div>
                                {% endif %}
                            </div>
                            <div class=\"col-auto text-end mt-2 mt-sm-1\" id=\"profile-buttons\">
                                {% from '@theme/components/buttons.html.twig' import link_button %}
                                {% if app.user == user %}
                                {{ link_button('notifications'|trans, 'javascript:notificationStatus()', 'fas fa-bell', 'default') }}
                                {% endif %}
                                {{ link_button('email'|trans, ('mailto:' ~ user.email), 'mail', 'default') }}
                            </div>
                        </div>
                    </div>
                </div>
            {% endblock %}
            {% block profile_content %}{% endblock %}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% if app.user == user %}
    <script>
        function notificationStatus()
        {
            const notification = window.kimai.getPlugin('notification');
            if (!notification.isSupported()) {
                notification.request((result) => {
                    if (result === false) {
                        window.kimai.getPlugin('alert').info('{{ 'notifications.denied'|trans|e('js') }}');
                    } else if (result === true) {
                        notification.notify(null, '{{ 'notifications.welcome'|trans|e('js') }}');
                    }
                    buttonStatusCheck(window.kimai);
                });
            } else {
                notification.notify(null, '{{ 'notifications.welcome'|trans|e('js') }}');
            }
        }

        function buttonStatusCheck(kimai)
        {
            const button = document.querySelector('div#profile-buttons a');
            const icon = button.querySelector('i');
            const notification = kimai.getPlugin('notification');

            if (notification.isSupported()) {
                icon.classList.remove('fa-bell-slash');
                icon.classList.add('fa-bell');
                icon.classList.remove('text-danger');
                icon.classList.add('text-success');
            } else {
                icon.classList.remove('fa-bell');
                icon.classList.add('fa-bell-slash');
                icon.classList.remove('text-success');
                icon.classList.add('text-danger');
            }
        }

        document.addEventListener('kimai.initialized', function(event) {
            buttonStatusCheck(event.detail.kimai);
        });
    </script>
    {% endif %}
{% endblock %}
", "user/layout.html.twig", "C:\\wamp64\\www\\kimai\\templates\\user\\layout.html.twig");
    }
}
