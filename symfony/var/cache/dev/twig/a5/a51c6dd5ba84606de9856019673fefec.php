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

/* @WebProfiler/Collector/mailer.html.twig */
class __TwigTemplate_7e0ba50707f77373540984c249f788e5 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "

    <style>
        :root {
            --mailer-email-table-wrapper-background: var(--gray-100);
            --mailer-email-table-active-row-background: #dbeafe;
            --mailer-email-table-active-row-color: var(--color-text);
        }
        .theme-dark {
            --mailer-email-table-wrapper-background: var(--gray-900);
            --mailer-email-table-active-row-background: var(--gray-300);
            --mailer-email-table-active-row-color: var(--gray-800);
        }

        .mailer-email-summary-table-wrapper {
            background: var(--mailer-email-table-wrapper-background);
            border-bottom: 4px double var(--table-border-color);
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            margin: 0 -9px 10px -9px;
            padding-bottom: 10px;
            transform: translateY(-9px);
            max-height: 265px;
            overflow-y: auto;
        }
        .mailer-email-summary-table,
        .mailer-email-summary-table tr,
        .mailer-email-summary-table td {
            border: 0;
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            box-shadow: none;
        }
        .mailer-email-summary-table th {
            color: var(--color-muted);
            font-size: 13px;
            padding: 4px 10px;
        }
        .mailer-email-summary-table tr td,
        .mailer-email-summary-table tr:last-of-type td {
            border: solid var(--table-border-color);
            border-width: 1px 0;
        }
        .mailer-email-summary-table-row {
            margin: 5px 0;
        }
        .mailer-email-summary-table-row:hover {
            cursor: pointer;
        }
        .mailer-email-summary-table-row.active {
            background: var(--mailer-email-table-active-row-background);
            color: var(--mailer-email-table-active-row-color);
        }
        .mailer-email-summary-table-row td {
            font-family: var(--font-family-system);
            font-size: inherit;
        }
        .mailer-email-details {
            display: none;
        }
        .mailer-email-details.active {
            display: block;
        }
        .mailer-transport-information {
            border-bottom: 1px solid var(--form-input-border-color);
            padding-bottom: 5px;
            font-size: var(--font-size-body);
            margin: 5px 0 10px 5px;
        }
        .mailer-transport-information .badge {
            font-size: inherit;
            font-weight: inherit;
        }
        .mailer-message-subject {
            font-size: 21px;
            font-weight: bold;
            margin: 5px;
        }
        .mailer-message-headers {
            margin-bottom: 10px;
        }
        .mailer-message-headers p {
            font-size: var(--font-size-body);
            margin: 2px 5px;
        }
        .mailer-message-header-secondary {
            color: var(--color-muted);
        }
        .mailer-message-attachments-title {
            align-items: center;
            display: flex;
            font-size: var(--font-size-body);
            font-weight: 600;
            margin-bottom: 10px;
        }
        .mailer-message-attachments-title svg {
            color: var(--color-muted);
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-title span {
            font-weight: normal;
            margin-left: 4px;
        }
        .mailer-message-attachments-list {
            list-style: none;
            margin: 0 0 5px 20px;
            padding: 0;
        }
        .mailer-message-attachments-list li {
            align-items: center;
            display: flex;
        }
        .mailer-message-attachments-list li svg {
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-list li a {
            margin-left: 5px;
        }
        .mailer-email-body {
            margin: 0;
            padding: 6px 8px;
        }
        .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width=\x27100%25\x27 height=\x27100%25\x27 xmlns=\x27http://www.w3.org/2000/svg\x27%3e%3crect width=\x27100%25\x27 height=\x27100%25\x27 fill=\x27none\x27 stroke=\x27%23e5e5e5\x27 stroke-width=\x274\x27 stroke-dasharray=\x276%2c 14\x27 stroke-dashoffset=\x270\x27 stroke-linecap=\x27square\x27/%3e%3c/svg%3e\");
            border-radius: 6px;
            color: var(--color-muted);
            margin: 1em 0 0;
            padding: .5em 1em;
        }
        .theme-dark .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width=\x27100%25\x27 height=\x27100%25\x27 xmlns=\x27http://www.w3.org/2000/svg\x27%3e%3crect width=\x27100%25\x27 height=\x27100%25\x27 fill=\x27none\x27 stroke=\x27%23737373\x27 stroke-width=\x274\x27 stroke-dasharray=\x276%2c 14\x27 stroke-dashoffset=\x270\x27 stroke-linecap=\x27square\x27/%3e%3c/svg%3e\");
        }
        .mailer-empty-email-body p {
            font-size: var(--font-size-body);
            margin: 0;
            padding: 0.5em 0;
        }

        .mailer-message-download-raw {
            align-items: center;
            display: flex;
            padding: 5px 0 0 5px;
        }
        .mailer-message-download-raw svg {
            height: 18px;
            width: 18px;
            margin-right: 3px;
        }
        .sf-profiler-mailer-scrollable {
            max-height: 600px;
            overflow-y: auto;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 165
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

        // line 166
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
        window.addEventListener(\x27DOMContentLoaded\x27, () => {
            new SymfonyProfilerMailerPanel();
        });

        class SymfonyProfilerMailerPanel {
            constructor() {
                this.#initializeEmailsTable();
            }

            #initializeEmailsTable() {
                const emailRows = document.querySelectorAll(\x27.mailer-email-summary-table-row\x27);

                emailRows.forEach((emailRow) => {
                    emailRow.addEventListener(\x27click\x27, () => {
                        emailRows.forEach((row) => row.classList.remove(\x27active\x27));
                        emailRow.classList.add(\x27active\x27);

                        document.querySelectorAll(\x27.mailer-email-details\x27).forEach((emailDetails) => emailDetails.style.display = \x27none\x27);
                        document.querySelector(emailRow.getAttribute(\x27data-target\x27)).style.display = \x27block\x27;
                    });
                });
            }
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 195
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 196
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 196, $this->source); })()), "events", [], "any", false, false, false, 196);
        // line 197
        yield "
    ";
        // line 198
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 198, $this->source); })()), "messages", [], "any", false, false, false, 198))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 199
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 200
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/mailer.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 201, $this->source); })()), "messages", [], "any", false, false, false, 201)), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 203
            yield "
        ";
            // line 204
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 205
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 207, $this->source); })()), "events", [], "any", false, false, false, 207), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 207, $this->source); })()), "isQueued", [], "method", false, false, false, 207); })), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 211
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 211, $this->source); })()), "events", [], "any", false, false, false, 211), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 211, $this->source); })()), "isQueued", [], "method", false, false, false, 211); })), "html", null, true);
                yield "</span>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 214
            yield "
        ";
            // line 215
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 215, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 219
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 220
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 220, $this->source); })()), "events", [], "any", false, false, false, 220);
        // line 221
        yield "
    <span class=\"label ";
        // line 222
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 222, $this->source); })()), "messages", [], "any", false, false, false, 222))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\" aria-hidden=\"true\">";
        // line 223
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/mailer.svg");
        yield "</span>

        <strong>Emails</strong>
        ";
        // line 226
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 226, $this->source); })()), "messages", [], "any", false, false, false, 226)) > 0)) {
            // line 227
            yield "            <span class=\"count\">
                <span>";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 228, $this->source); })()), "messages", [], "any", false, false, false, 228)), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 231
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 235
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 235, $this->source); })()), "events", [], "any", false, false, false, 235);
        // line 236
        yield "    <h2>Emails</h2>

    ";
        // line 238
        if ((($tmp =  !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 238, $this->source); })()), "messages", [], "any", false, false, false, 238))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 239
            yield "        <div class=\"empty empty-panel\">
            <p>No emails were sent.</p>
        </div>
    ";
        } else {
            // line 243
            yield "        <div class=\"metrics\">
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 246, $this->source); })()), "events", [], "any", false, false, false, 246), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 246, $this->source); })()), "isQueued", [], "method", false, false, false, 246); })), "html", null, true);
            yield "</span>
                    <span class=\"label\">Queued</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 251, $this->source); })()), "events", [], "any", false, false, false, 251), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 251, $this->source); })()), "isQueued", [], "method", false, false, false, 251); })), "html", null, true);
            yield "</span>
                    <span class=\"label\">Sent</span>
                </div>
            </div>
        </div>
    ";
        }
        // line 257
        yield "
    ";
        // line 258
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 258, $this->source); })()), "transports", [], "any", false, false, false, 258)) > 1)) {
            // line 259
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 259, $this->source); })()), "transports", [], "any", false, false, false, 259));
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 260
                yield "            <h2><code>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["transport"], "html", null, true);
                yield "</code> transport</h2>
            ";
                // line 261
                yield $this->getTemplateForMacro("macro_render_transport_details", $context, 261, $this->getSourceContext())->macro_render_transport_details(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 261, $this->source); })()), $context["transport"]]);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            yield "    ";
        } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 263, $this->source); })()), "transports", [], "any", false, false, false, 263))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 264
            yield "        ";
            yield $this->getTemplateForMacro("macro_render_transport_details", $context, 264, $this->getSourceContext())->macro_render_transport_details(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 264, $this->source); })()), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 264, $this->source); })()), "transports", [], "any", false, false, false, 264)), true]);
            yield "
    ";
        }
        // line 266
        yield "
    ";
        // line 305
        yield "
    ";
        // line 471
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 267
    public function macro_render_transport_details($collector = null, $transport = null, $show_transport_name = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collector" => $collector,
            "transport" => $transport,
            "show_transport_name" => $show_transport_name,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_transport_details"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_transport_details"));

            // line 268
            yield "        <div class=\"card\">
            ";
            // line 269
            $context["num_emails"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 269, $this->source); })()), "events", [], "any", false, false, false, 269), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 269, $this->source); })())], "method", false, false, false, 269));
            // line 270
            yield "            ";
            if (((isset($context["num_emails"]) || array_key_exists("num_emails", $context) ? $context["num_emails"] : (function () { throw new RuntimeError('Variable "num_emails" does not exist.', 270, $this->source); })()) > 1)) {
                // line 271
                yield "                <div class=\"mailer-email-summary-table-wrapper\">
                    <table class=\"mailer-email-summary-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject</th>
                                <th>To</th>
                                <th class=\"visually-hidden\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 282, $this->source); })()), "events", [], "any", false, false, false, 282), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 282, $this->source); })())], "method", false, false, false, 282));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 283
                    yield "                                <tr class=\"mailer-email-summary-table-row ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 283)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                    yield "\" data-target=\"#email-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 283), "html", null, true);
                    yield "\">
                                    <td>";
                    // line 284
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 284), "html", null, true);
                    yield "</td>
                                    <td>";
                    // line 285
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 285), "headers", [], "any", false, true, false, 285), "get", ["subject"], "method", false, true, false, 285), "bodyAsString", [], "method", true, true, false, 285)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 285), "headers", [], "any", false, false, false, 285), "get", ["subject"], "method", false, false, false, 285), "bodyAsString", [], "method", false, false, false, 285), "(No subject)")) : ("(No subject)")), "html", null, true);
                    yield "</td>
                                    <td>";
                    // line 286
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 286), "headers", [], "any", false, true, false, 286), "get", ["to"], "method", false, true, false, 286), "bodyAsString", [], "method", true, true, false, 286)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 286), "headers", [], "any", false, false, false, 286), "get", ["to"], "method", false, false, false, 286), "bodyAsString", [], "method", false, false, false, 286), Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "envelope", [], "any", false, false, false, 286), "recipients", [], "any", false, false, false, 286), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["addr"]) || array_key_exists("addr", $context) ? $context["addr"] : (function () { throw new RuntimeError('Variable "addr" does not exist.', 286, $this->source); })()), "toString", [], "method", false, false, false, 286); }), ", "))) : (Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "envelope", [], "any", false, false, false, 286), "recipients", [], "any", false, false, false, 286), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["addr"]) || array_key_exists("addr", $context) ? $context["addr"] : (function () { throw new RuntimeError('Variable "addr" does not exist.', 286, $this->source); })()), "toString", [], "method", false, false, false, 286); }), ", "))), "html", null, true);
                    yield "</td>
                                    <td class=\"visually-hidden\"><button class=\"mailer-email-summary-table-row-button\" data-target=\"#email-";
                    // line 287
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 287), "html", null, true);
                    yield "\">View email details</button></td>
                                </tr>
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
                unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 290
                yield "                        </tbody>
                    </table>
                </div>

                ";
                // line 294
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 294, $this->source); })()), "events", [], "any", false, false, false, 294), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 294, $this->source); })())], "method", false, false, false, 294));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 295
                    yield "                    <div class=\"mailer-email-details ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 295)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                    yield "\" id=\"email-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 295), "html", null, true);
                    yield "\">
                        ";
                    // line 296
                    yield $this->getTemplateForMacro("macro_render_email_details", $context, 296, $this->getSourceContext())->macro_render_email_details(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 296, $this->source); })()), (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 296, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 296), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "isQueued", [], "any", false, false, false, 296), (isset($context["show_transport_name"]) || array_key_exists("show_transport_name", $context) ? $context["show_transport_name"] : (function () { throw new RuntimeError('Variable "show_transport_name" does not exist.', 296, $this->source); })())]);
                    yield "
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
                unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 299
                yield "            ";
            } else {
                // line 300
                yield "                ";
                $context["event"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 300, $this->source); })()), "events", [], "any", false, false, false, 300), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 300, $this->source); })())], "method", false, false, false, 300));
                // line 301
                yield "                ";
                yield $this->getTemplateForMacro("macro_render_email_details", $context, 301, $this->getSourceContext())->macro_render_email_details(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 301, $this->source); })()), (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 301, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 301, $this->source); })()), "message", [], "any", false, false, false, 301), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 301, $this->source); })()), "isQueued", [], "any", false, false, false, 301), (isset($context["show_transport_name"]) || array_key_exists("show_transport_name", $context) ? $context["show_transport_name"] : (function () { throw new RuntimeError('Variable "show_transport_name" does not exist.', 301, $this->source); })())]);
                yield "
            ";
            }
            // line 303
            yield "        </div>
    ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 306
    public function macro_render_email_details($collector = null, $transport = null, $message = null, $message_is_queued = null, $show_transport_name = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collector" => $collector,
            "transport" => $transport,
            "message" => $message,
            "message_is_queued" => $message_is_queued,
            "show_transport_name" => $show_transport_name,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_email_details"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_email_details"));

            // line 307
            yield "        ";
            if ((($tmp = (isset($context["show_transport_name"]) || array_key_exists("show_transport_name", $context) ? $context["show_transport_name"] : (function () { throw new RuntimeError('Variable "show_transport_name" does not exist.', 307, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 308
                yield "            <p class=\"mailer-transport-information\">
                <strong>Status:</strong> <span class=\"badge badge-";
                // line 309
                yield (((($tmp = (isset($context["message_is_queued"]) || array_key_exists("message_is_queued", $context) ? $context["message_is_queued"] : (function () { throw new RuntimeError('Variable "message_is_queued" does not exist.', 309, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
                yield "\">";
                yield (((($tmp = (isset($context["message_is_queued"]) || array_key_exists("message_is_queued", $context) ? $context["message_is_queued"] : (function () { throw new RuntimeError('Variable "message_is_queued" does not exist.', 309, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Queued") : ("Sent"));
                yield "</span>
                &bull;
                <strong>Transport:</strong> <code>";
                // line 311
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 311, $this->source); })()), "html", null, true);
                yield "</code>
            </p>
        ";
            }
            // line 314
            yield "
        ";
            // line 315
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", true, true, false, 315)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 316
                yield "            ";
                // line 317
                yield "            <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 317, $this->source); })()), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 317, $this->source); })()), "toString", [], "method", false, false, false, 317)], "method", false, false, false, 317), "html", null, true);
                yield "\" download=\"email.eml\">
                ";
                // line 318
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/download.svg");
                yield "
                Download as EML file
            </a>

            <pre class=\"prewrap sf-profiler-mailer-scrollable\" style=\"margin-left: 5px\">";
                // line 322
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 322, $this->source); })()), "toString", [], "method", false, false, false, 322), "html", null, true);
                yield "</pre>
        ";
            } else {
                // line 324
                yield "            <div class=\"sf-tabs\">
                <div class=\"tab\">
                    <h3 class=\"tab-title\">Email contents</h3>
                    <div class=\"tab-content\">
                        <div class=\"card-block\">
                            <p class=\"mailer-message-subject\">
                                ";
                // line 330
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 330), "get", ["subject"], "method", false, true, false, 330), "bodyAsString", [], "method", true, true, false, 330)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 330, $this->source); })()), "headers", [], "any", false, false, false, 330), "get", ["subject"], "method", false, false, false, 330), "bodyAsString", [], "method", false, false, false, 330), "(No subject)")) : ("(No subject)")), "html", null, true);
                yield "
                            </p>
                            <div class=\"mailer-message-headers\">
                                <p>
                                    <strong>From:</strong>
                                    ";
                // line 335
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 335), "get", ["from"], "method", false, true, false, 335), "bodyAsString", [], "method", true, true, false, 335)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 335, $this->source); })()), "headers", [], "any", false, false, false, 335), "get", ["from"], "method", false, false, false, 335), "bodyAsString", [], "method", false, false, false, 335), "(empty)")) : ("(empty)")), "html", null, true);
                yield "
                                </p>
                                <p>
                                    <strong>To:</strong>
                                    ";
                // line 339
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 339), "get", ["to"], "method", false, true, false, 339), "bodyAsString", [], "method", true, true, false, 339)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 339, $this->source); })()), "headers", [], "any", false, false, false, 339), "get", ["to"], "method", false, false, false, 339), "bodyAsString", [], "method", false, false, false, 339), "(empty)")) : ("(empty)")), "html", null, true);
                yield "
                                </p>
                                ";
                // line 341
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 341, $this->source); })()), "headers", [], "any", false, false, false, 341), "all", [], "any", false, false, false, 341), function ($__header__) use ($context, $macros) { $context["header"] = $__header__; return !CoreExtension::inFilter(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", true, true, false, 341) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 341)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 341)) : (""))), ["subject", "from", "to"]); }));
                foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                    // line 342
                    yield "                                    <p class=\"mailer-message-header-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "toString", [], "any", false, false, false, 342), "html", null, true);
                    yield "</p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['header'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 344
                yield "                            </div>
                        </div>

                        ";
                // line 347
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", true, true, false, 347) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 347, $this->source); })()), "attachments", [], "any", false, false, false, 347))) {
                    // line 348
                    yield "                            <div class=\"card-block\">
                                ";
                    // line 349
                    $context["num_of_attachments"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 349, $this->source); })()), "attachments", [], "any", false, false, false, 349));
                    // line 350
                    yield "                                ";
                    $context["total_attachments_size_in_bytes"] = Twig\Extension\CoreExtension::reduce($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 350, $this->source); })()), "attachments", [], "any", false, false, false, 350), function ($__total_size__, $__attachment__) use ($context, $macros) { $context["total_size"] = $__total_size__; $context["attachment"] = $__attachment__; return ((isset($context["total_size"]) || array_key_exists("total_size", $context) ? $context["total_size"] : (function () { throw new RuntimeError('Variable "total_size" does not exist.', 350, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 350, $this->source); })()), "body", [], "any", false, false, false, 350))); }, 0);
                    // line 351
                    yield "                                <p class=\"mailer-message-attachments-title\">
                                    ";
                    // line 352
                    yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/attachment.svg");
                    yield "
                                    Attachments <span>(";
                    // line 353
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["num_of_attachments"]) || array_key_exists("num_of_attachments", $context) ? $context["num_of_attachments"] : (function () { throw new RuntimeError('Variable "num_of_attachments" does not exist.', 353, $this->source); })()), "html", null, true);
                    yield " file";
                    yield ((((isset($context["num_of_attachments"]) || array_key_exists("num_of_attachments", $context) ? $context["num_of_attachments"] : (function () { throw new RuntimeError('Variable "num_of_attachments" does not exist.', 353, $this->source); })()) > 1)) ? ("s") : (""));
                    yield " / ";
                    yield $this->getTemplateForMacro("macro_render_file_size_humanized", $context, 353, $this->getSourceContext())->macro_render_file_size_humanized(...[(isset($context["total_attachments_size_in_bytes"]) || array_key_exists("total_attachments_size_in_bytes", $context) ? $context["total_attachments_size_in_bytes"] : (function () { throw new RuntimeError('Variable "total_attachments_size_in_bytes" does not exist.', 353, $this->source); })())]);
                    yield ")</span>
                                </p>

                                <ul class=\"mailer-message-attachments-list\">
                                    ";
                    // line 357
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 357, $this->source); })()), "attachments", [], "any", false, false, false, 357));
                    foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                        // line 358
                        yield "                                        <li>
                                            ";
                        // line 359
                        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/file.svg");
                        yield "

                                            ";
                        // line 361
                        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 361)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 361))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 362
                            yield "                                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 362), "html", null, true);
                            yield "
                                            ";
                        } else {
                            // line 364
                            yield "                                                <em>(no filename)</em>
                                            ";
                        }
                        // line 366
                        yield "
                                            (";
                        // line 367
                        yield $this->getTemplateForMacro("macro_render_file_size_humanized", $context, 367, $this->getSourceContext())->macro_render_file_size_humanized(...[Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, false, 367))]);
                        yield ")

                                            <a href=\"data:";
                        // line 369
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", true, true, false, 369)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", false, false, false, 369), "application/octet-stream")) : ("application/octet-stream")), "html", null, true);
                        yield ";base64,";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 369, $this->source); })()), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, false, 369)], "method", false, false, false, 369), "html", null, true);
                        yield "\" download=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 369)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 369), "attachment")) : ("attachment")), "html", null, true);
                        yield "\">Download</a>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['attachment'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 372
                    yield "                                </ul>
                            </div>
                        ";
                }
                // line 375
                yield "
                        <div class=\"card-block\">
                            <div class=\"sf-tabs sf-tabs-sm\">
                            ";
                // line 378
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", true, true, false, 378)) {
                    // line 379
                    yield "                                ";
                    $context["textBody"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 379, $this->source); })()), "textBody", [], "any", false, false, false, 379);
                    // line 380
                    yield "                                ";
                    $context["htmlBody"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 380, $this->source); })()), "htmlBody", [], "any", false, false, false, 380);
                    // line 381
                    yield "                                <div class=\"tab ";
                    yield (((($tmp =  !(isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 381, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield " ";
                    yield (((($tmp = (isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 381, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                    yield "\">
                                    <h3 class=\"tab-title\">Text content</h3>
                                    <div class=\"tab-content\">
                                        ";
                    // line 384
                    if ((($tmp = (isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 384, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 385
                        yield "                                            <pre class=\"mailer-email-body prewrap sf-profiler-mailer-scrollable\">";
                        // line 386
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 386, $this->source); })()), "textCharset", [], "method", false, false, false, 386)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 387
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding((isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 387, $this->source); })()), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 387, $this->source); })()), "textCharset", [], "method", false, false, false, 387)), "html", null, true);
                        } else {
                            // line 389
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 389, $this->source); })()), "html", null, true);
                        }
                        // line 391
                        yield "</pre>
                                        ";
                    } else {
                        // line 393
                        yield "                                            <div class=\"mailer-empty-email-body\">
                                                <p>The text body is empty.</p>
                                            </div>
                                        ";
                    }
                    // line 397
                    yield "                                    </div>
                                </div>

                                ";
                    // line 400
                    if ((($tmp = (isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 400, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 401
                        yield "                                    <div class=\"tab\">
                                        <h3 class=\"tab-title\">HTML preview</h3>
                                        <div class=\"tab-content\">
                                            <pre class=\"prewrap sf-profiler-mailer-scrollable\"><iframe src=\"data:text/html;charset=utf-8;base64,";
                        // line 404
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 404, $this->source); })()), "base64Encode", [(isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 404, $this->source); })())], "method", false, false, false, 404), "html", null, true);
                        yield "\" style=\"height: 80vh;width: 100%;\"></iframe>
                                            </pre>
                                        </div>
                                    </div>
                                ";
                    }
                    // line 409
                    yield "
                                <div class=\"tab ";
                    // line 410
                    yield (((($tmp =  !(isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 410, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield " ";
                    yield ((( !(isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 410, $this->source); })()) && (isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 410, $this->source); })()))) ? ("active") : (""));
                    yield "\">
                                    <h3 class=\"tab-title\">HTML content</h3>
                                    <div class=\"tab-content\">
                                        ";
                    // line 413
                    if ((($tmp = (isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 413, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 414
                        yield "                                            <pre class=\"mailer-email-body prewrap sf-profiler-mailer-scrollable\">";
                        // line 415
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 415, $this->source); })()), "htmlCharset", [], "method", false, false, false, 415)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 416
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding((isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 416, $this->source); })()), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 416, $this->source); })()), "htmlCharset", [], "method", false, false, false, 416)), "html", null, true);
                        } else {
                            // line 418
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 418, $this->source); })()), "html", null, true);
                        }
                        // line 420
                        yield "</pre>
                                        ";
                    } else {
                        // line 422
                        yield "                                            <div class=\"mailer-empty-email-body\">
                                                <p>The HTML body is empty.</p>
                                            </div>
                                        ";
                    }
                    // line 426
                    yield "                                    </div>
                                </div>
                            ";
                } else {
                    // line 429
                    yield "                                ";
                    $context["body"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 429, $this->source); })()), "body", [], "any", false, false, false, 429)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 429, $this->source); })()), "body", [], "any", false, false, false, 429), "toString", [], "method", false, false, false, 429)) : (null));
                    // line 430
                    yield "                                <div class=\"tab ";
                    yield (((($tmp =  !(isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 430, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield " ";
                    yield (((($tmp = (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 430, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                    yield "\">
                                    <h3 class=\"tab-title\">Content</h3>
                                    <div class=\"tab-content\">
                                        ";
                    // line 433
                    if ((($tmp = (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 433, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 434
                        yield "                                            <pre class=\"mailer-email-body prewrap sf-profiler-mailer-scrollable\">";
                        // line 435
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 435, $this->source); })()), "html", null, true);
                        yield "
                                            </pre>
                                        ";
                    } else {
                        // line 438
                        yield "                                            <div class=\"mailer-empty-email-body\">
                                                <p>The body is empty.</p>
                                            </div>
                                        ";
                    }
                    // line 442
                    yield "                                    </div>
                                </div>
                            ";
                }
                // line 445
                yield "                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">MIME parts</h3>
                    <div class=\"tab-content\">
                        <pre class=\"prewrap sf-profiler-mailer-scrollable\" style=\"margin-left: 5px\">";
                // line 453
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 453, $this->source); })()), "body", [], "method", false, false, false, 453), "asDebugString", [], "method", false, false, false, 453), "html", null, true);
                yield "</pre>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">Raw Message</h3>
                    <div class=\"tab-content\">
                        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                // line 460
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 460, $this->source); })()), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 460, $this->source); })()), "toString", [], "method", false, false, false, 460)], "method", false, false, false, 460), "html", null, true);
                yield "\" download=\"email.eml\">
                            ";
                // line 461
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/download.svg");
                yield "
                            Download as EML file
                        </a>

                        <pre class=\"prewrap sf-profiler-mailer-scrollable\" style=\"margin-left: 5px\">";
                // line 465
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 465, $this->source); })()), "toString", [], "method", false, false, false, 465), "html", null, true);
                yield "</pre>
                    </div>
                </div>
            </div>
        ";
            }
            // line 470
            yield "    ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 472
    public function macro_render_file_size_humanized($bytes = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "bytes" => $bytes,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_file_size_humanized"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_file_size_humanized"));

            // line 473
            if (((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 473, $this->source); })()) < 1000)) {
                // line 474
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 474, $this->source); })()) . " bytes"), "html", null, true);
            } elseif ((            // line 475
(isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 475, $this->source); })()) < (1000 ** 2))) {
                // line 476
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 476, $this->source); })()) / 1000), 2) . " kB"), "html", null, true);
            } else {
                // line 478
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 478, $this->source); })()) / (1000 ** 2)), 2) . " MB"), "html", null, true);
            }
            
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
        return "@WebProfiler/Collector/mailer.html.twig";
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
        return array (  1100 => 478,  1097 => 476,  1095 => 475,  1093 => 474,  1091 => 473,  1073 => 472,  1061 => 470,  1053 => 465,  1046 => 461,  1042 => 460,  1032 => 453,  1022 => 445,  1017 => 442,  1011 => 438,  1005 => 435,  1003 => 434,  1001 => 433,  992 => 430,  989 => 429,  984 => 426,  978 => 422,  974 => 420,  971 => 418,  968 => 416,  966 => 415,  964 => 414,  962 => 413,  954 => 410,  951 => 409,  943 => 404,  938 => 401,  936 => 400,  931 => 397,  925 => 393,  921 => 391,  918 => 389,  915 => 387,  913 => 386,  911 => 385,  909 => 384,  900 => 381,  897 => 380,  894 => 379,  892 => 378,  887 => 375,  882 => 372,  869 => 369,  864 => 367,  861 => 366,  857 => 364,  851 => 362,  849 => 361,  844 => 359,  841 => 358,  837 => 357,  826 => 353,  822 => 352,  819 => 351,  816 => 350,  814 => 349,  811 => 348,  809 => 347,  804 => 344,  795 => 342,  791 => 341,  786 => 339,  779 => 335,  771 => 330,  763 => 324,  758 => 322,  751 => 318,  746 => 317,  744 => 316,  742 => 315,  739 => 314,  733 => 311,  726 => 309,  723 => 308,  720 => 307,  698 => 306,  685 => 303,  679 => 301,  676 => 300,  673 => 299,  656 => 296,  649 => 295,  632 => 294,  626 => 290,  609 => 287,  605 => 286,  601 => 285,  597 => 284,  590 => 283,  573 => 282,  560 => 271,  557 => 270,  555 => 269,  552 => 268,  532 => 267,  520 => 471,  517 => 305,  514 => 266,  508 => 264,  505 => 263,  497 => 261,  492 => 260,  487 => 259,  485 => 258,  482 => 257,  473 => 251,  465 => 246,  460 => 243,  454 => 239,  452 => 238,  448 => 236,  445 => 235,  432 => 234,  420 => 231,  414 => 228,  411 => 227,  409 => 226,  403 => 223,  399 => 222,  396 => 221,  393 => 220,  380 => 219,  366 => 215,  363 => 214,  356 => 211,  349 => 207,  345 => 205,  343 => 204,  340 => 203,  334 => 201,  329 => 200,  326 => 199,  324 => 198,  321 => 197,  318 => 196,  305 => 195,  265 => 166,  252 => 165,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27@WebProfiler/Profiler/layout.html.twig\x27 %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        :root {
            --mailer-email-table-wrapper-background: var(--gray-100);
            --mailer-email-table-active-row-background: #dbeafe;
            --mailer-email-table-active-row-color: var(--color-text);
        }
        .theme-dark {
            --mailer-email-table-wrapper-background: var(--gray-900);
            --mailer-email-table-active-row-background: var(--gray-300);
            --mailer-email-table-active-row-color: var(--gray-800);
        }

        .mailer-email-summary-table-wrapper {
            background: var(--mailer-email-table-wrapper-background);
            border-bottom: 4px double var(--table-border-color);
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            margin: 0 -9px 10px -9px;
            padding-bottom: 10px;
            transform: translateY(-9px);
            max-height: 265px;
            overflow-y: auto;
        }
        .mailer-email-summary-table,
        .mailer-email-summary-table tr,
        .mailer-email-summary-table td {
            border: 0;
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            box-shadow: none;
        }
        .mailer-email-summary-table th {
            color: var(--color-muted);
            font-size: 13px;
            padding: 4px 10px;
        }
        .mailer-email-summary-table tr td,
        .mailer-email-summary-table tr:last-of-type td {
            border: solid var(--table-border-color);
            border-width: 1px 0;
        }
        .mailer-email-summary-table-row {
            margin: 5px 0;
        }
        .mailer-email-summary-table-row:hover {
            cursor: pointer;
        }
        .mailer-email-summary-table-row.active {
            background: var(--mailer-email-table-active-row-background);
            color: var(--mailer-email-table-active-row-color);
        }
        .mailer-email-summary-table-row td {
            font-family: var(--font-family-system);
            font-size: inherit;
        }
        .mailer-email-details {
            display: none;
        }
        .mailer-email-details.active {
            display: block;
        }
        .mailer-transport-information {
            border-bottom: 1px solid var(--form-input-border-color);
            padding-bottom: 5px;
            font-size: var(--font-size-body);
            margin: 5px 0 10px 5px;
        }
        .mailer-transport-information .badge {
            font-size: inherit;
            font-weight: inherit;
        }
        .mailer-message-subject {
            font-size: 21px;
            font-weight: bold;
            margin: 5px;
        }
        .mailer-message-headers {
            margin-bottom: 10px;
        }
        .mailer-message-headers p {
            font-size: var(--font-size-body);
            margin: 2px 5px;
        }
        .mailer-message-header-secondary {
            color: var(--color-muted);
        }
        .mailer-message-attachments-title {
            align-items: center;
            display: flex;
            font-size: var(--font-size-body);
            font-weight: 600;
            margin-bottom: 10px;
        }
        .mailer-message-attachments-title svg {
            color: var(--color-muted);
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-title span {
            font-weight: normal;
            margin-left: 4px;
        }
        .mailer-message-attachments-list {
            list-style: none;
            margin: 0 0 5px 20px;
            padding: 0;
        }
        .mailer-message-attachments-list li {
            align-items: center;
            display: flex;
        }
        .mailer-message-attachments-list li svg {
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-list li a {
            margin-left: 5px;
        }
        .mailer-email-body {
            margin: 0;
            padding: 6px 8px;
        }
        .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width=\x27100%25\x27 height=\x27100%25\x27 xmlns=\x27http://www.w3.org/2000/svg\x27%3e%3crect width=\x27100%25\x27 height=\x27100%25\x27 fill=\x27none\x27 stroke=\x27%23e5e5e5\x27 stroke-width=\x274\x27 stroke-dasharray=\x276%2c 14\x27 stroke-dashoffset=\x270\x27 stroke-linecap=\x27square\x27/%3e%3c/svg%3e\");
            border-radius: 6px;
            color: var(--color-muted);
            margin: 1em 0 0;
            padding: .5em 1em;
        }
        .theme-dark .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width=\x27100%25\x27 height=\x27100%25\x27 xmlns=\x27http://www.w3.org/2000/svg\x27%3e%3crect width=\x27100%25\x27 height=\x27100%25\x27 fill=\x27none\x27 stroke=\x27%23737373\x27 stroke-width=\x274\x27 stroke-dasharray=\x276%2c 14\x27 stroke-dashoffset=\x270\x27 stroke-linecap=\x27square\x27/%3e%3c/svg%3e\");
        }
        .mailer-empty-email-body p {
            font-size: var(--font-size-body);
            margin: 0;
            padding: 0.5em 0;
        }

        .mailer-message-download-raw {
            align-items: center;
            display: flex;
            padding: 5px 0 0 5px;
        }
        .mailer-message-download-raw svg {
            height: 18px;
            width: 18px;
            margin-right: 3px;
        }
        .sf-profiler-mailer-scrollable {
            max-height: 600px;
            overflow-y: auto;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        window.addEventListener(\x27DOMContentLoaded\x27, () => {
            new SymfonyProfilerMailerPanel();
        });

        class SymfonyProfilerMailerPanel {
            constructor() {
                this.#initializeEmailsTable();
            }

            #initializeEmailsTable() {
                const emailRows = document.querySelectorAll(\x27.mailer-email-summary-table-row\x27);

                emailRows.forEach((emailRow) => {
                    emailRow.addEventListener(\x27click\x27, () => {
                        emailRows.forEach((row) => row.classList.remove(\x27active\x27));
                        emailRow.classList.add(\x27active\x27);

                        document.querySelectorAll(\x27.mailer-email-details\x27).forEach((emailDetails) => emailDetails.style.display = \x27none\x27);
                        document.querySelector(emailRow.getAttribute(\x27data-target\x27)).style.display = \x27block\x27;
                    });
                });
            }
        }
    </script>
{% endblock %}

{% block toolbar %}
    {% set events = collector.events %}

    {% if events.messages|length %}
        {% set icon %}
            {{ source(\x27@WebProfiler/Icon/mailer.svg\x27) }}
            <span class=\"sf-toolbar-value\">{{ events.messages|length }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">{{ events.events|filter(e => e.isQueued())|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">{{ events.events|filter(e => not e.isQueued())|length }}</span>
            </div>
        {% endset %}

        {{ include(\x27@WebProfiler/Profiler/toolbar_item.html.twig\x27, {link: profiler_url}) }}
    {% endif %}
{% endblock %}

{% block menu %}
    {% set events = collector.events %}

    <span class=\"label {{ events.messages is empty ? \x27disabled\x27 }}\">
        <span class=\"icon\" aria-hidden=\"true\">{{ source(\x27@WebProfiler/Icon/mailer.svg\x27) }}</span>

        <strong>Emails</strong>
        {% if events.messages|length > 0 %}
            <span class=\"count\">
                <span>{{ events.messages|length }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% set events = collector.events %}
    <h2>Emails</h2>

    {% if not events.messages|length %}
        <div class=\"empty empty-panel\">
            <p>No emails were sent.</p>
        </div>
    {% else %}
        <div class=\"metrics\">
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">{{ events.events|filter(e => e.isQueued())|length }}</span>
                    <span class=\"label\">Queued</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ events.events|filter(e => not e.isQueued())|length }}</span>
                    <span class=\"label\">Sent</span>
                </div>
            </div>
        </div>
    {% endif %}

    {% if events.transports|length > 1 %}
        {% for transport in events.transports %}
            <h2><code>{{ transport }}</code> transport</h2>
            {{ _self.render_transport_details(collector, transport) }}
        {% endfor %}
    {% elseif events.transports is not empty %}
        {{ _self.render_transport_details(collector, events.transports|first, true) }}
    {% endif %}

    {% macro render_transport_details(collector, transport, show_transport_name = false) %}
        <div class=\"card\">
            {% set num_emails = collector.events.events(transport)|length %}
            {% if num_emails > 1 %}
                <div class=\"mailer-email-summary-table-wrapper\">
                    <table class=\"mailer-email-summary-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject</th>
                                <th>To</th>
                                <th class=\"visually-hidden\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for event in collector.events.events(transport) %}
                                <tr class=\"mailer-email-summary-table-row {{ loop.first ? \x27active\x27 }}\" data-target=\"#email-{{ loop.index }}\">
                                    <td>{{ loop.index }}</td>
                                    <td>{{ event.message.headers.get(\x27subject\x27).bodyAsString()|default(\x27(No subject)\x27) }}</td>
                                    <td>{{ event.message.headers.get(\x27to\x27).bodyAsString()|default(event.envelope.recipients|map(addr => addr.toString())|join(\x27, \x27)) }}</td>
                                    <td class=\"visually-hidden\"><button class=\"mailer-email-summary-table-row-button\" data-target=\"#email-{{ loop.index }}\">View email details</button></td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>

                {% for event in collector.events.events(transport) %}
                    <div class=\"mailer-email-details {{ loop.first ? \x27active\x27 }}\" id=\"email-{{ loop.index }}\">
                        {{ _self.render_email_details(collector, transport, event.message, event.isQueued, show_transport_name) }}
                    </div>
                {% endfor %}
            {% else %}
                {% set event = (collector.events.events(transport)|first) %}
                {{ _self.render_email_details(collector, transport, event.message, event.isQueued, show_transport_name) }}
            {% endif %}
        </div>
    {% endmacro %}

    {% macro render_email_details(collector, transport, message, message_is_queued, show_transport_name = false) %}
        {% if show_transport_name %}
            <p class=\"mailer-transport-information\">
                <strong>Status:</strong> <span class=\"badge badge-{{ message_is_queued ? \x27warning\x27 : \x27success\x27 }}\">{{ message_is_queued ? \x27Queued\x27 : \x27Sent\x27 }}</span>
                &bull;
                <strong>Transport:</strong> <code>{{ transport }}</code>
            </p>
        {% endif %}

        {% if message.headers is not defined %}
            {# render the raw message contents #}
            <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,{{ collector.base64Encode(message.toString()) }}\" download=\"email.eml\">
                {{ source(\x27@WebProfiler/Icon/download.svg\x27) }}
                Download as EML file
            </a>

            <pre class=\"prewrap sf-profiler-mailer-scrollable\" style=\"margin-left: 5px\">{{ message.toString() }}</pre>
        {% else %}
            <div class=\"sf-tabs\">
                <div class=\"tab\">
                    <h3 class=\"tab-title\">Email contents</h3>
                    <div class=\"tab-content\">
                        <div class=\"card-block\">
                            <p class=\"mailer-message-subject\">
                                {{ message.headers.get(\x27subject\x27).bodyAsString()|default(\x27(No subject)\x27) }}
                            </p>
                            <div class=\"mailer-message-headers\">
                                <p>
                                    <strong>From:</strong>
                                    {{ message.headers.get(\x27from\x27).bodyAsString()|default(\x27(empty)\x27) }}
                                </p>
                                <p>
                                    <strong>To:</strong>
                                    {{ message.headers.get(\x27to\x27).bodyAsString()|default(\x27(empty)\x27) }}
                                </p>
                                {% for header in message.headers.all|filter(header => (header.name ?? \x27\x27)|lower not in [\x27subject\x27, \x27from\x27, \x27to\x27]) %}
                                    <p class=\"mailer-message-header-secondary\">{{ header.toString }}</p>
                                {% endfor %}
                            </div>
                        </div>

                        {% if message.attachments is defined and message.attachments %}
                            <div class=\"card-block\">
                                {% set num_of_attachments = message.attachments|length %}
                                {% set total_attachments_size_in_bytes = message.attachments|reduce((total_size, attachment) => total_size + attachment.body|length, 0) %}
                                <p class=\"mailer-message-attachments-title\">
                                    {{ source(\x27@WebProfiler/Icon/attachment.svg\x27) }}
                                    Attachments <span>({{ num_of_attachments }} file{{ num_of_attachments > 1 ? \x27s\x27 }} / {{ _self.render_file_size_humanized(total_attachments_size_in_bytes) }})</span>
                                </p>

                                <ul class=\"mailer-message-attachments-list\">
                                    {% for attachment in message.attachments %}
                                        <li>
                                            {{ source(\x27@WebProfiler/Icon/file.svg\x27) }}

                                            {% if attachment.filename|default %}
                                                {{ attachment.filename }}
                                            {% else %}
                                                <em>(no filename)</em>
                                            {% endif %}

                                            ({{ _self.render_file_size_humanized(attachment.body|length) }})

                                            <a href=\"data:{{ attachment.contentType|default(\x27application/octet-stream\x27) }};base64,{{ collector.base64Encode(attachment.body) }}\" download=\"{{ attachment.filename|default(\x27attachment\x27) }}\">Download</a>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        {% endif %}

                        <div class=\"card-block\">
                            <div class=\"sf-tabs sf-tabs-sm\">
                            {% if message.htmlBody is defined %}
                                {% set textBody = message.textBody %}
                                {% set htmlBody = message.htmlBody %}
                                <div class=\"tab {{ not textBody ? \x27disabled\x27 }} {{ textBody ? \x27active\x27 }}\">
                                    <h3 class=\"tab-title\">Text content</h3>
                                    <div class=\"tab-content\">
                                        {% if textBody %}
                                            <pre class=\"mailer-email-body prewrap sf-profiler-mailer-scrollable\">
                                                {%- if message.textCharset() %}
                                                    {{- textBody|convert_encoding(\x27UTF-8\x27, message.textCharset()) }}
                                                {%- else %}
                                                    {{- textBody }}
                                                {%- endif -%}
                                            </pre>
                                        {% else %}
                                            <div class=\"mailer-empty-email-body\">
                                                <p>The text body is empty.</p>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>

                                {% if htmlBody %}
                                    <div class=\"tab\">
                                        <h3 class=\"tab-title\">HTML preview</h3>
                                        <div class=\"tab-content\">
                                            <pre class=\"prewrap sf-profiler-mailer-scrollable\"><iframe src=\"data:text/html;charset=utf-8;base64,{{ collector.base64Encode(htmlBody) }}\" style=\"height: 80vh;width: 100%;\"></iframe>
                                            </pre>
                                        </div>
                                    </div>
                                {% endif %}

                                <div class=\"tab {{ not htmlBody ? \x27disabled\x27 }} {{ not textBody and htmlBody ? \x27active\x27 }}\">
                                    <h3 class=\"tab-title\">HTML content</h3>
                                    <div class=\"tab-content\">
                                        {% if htmlBody %}
                                            <pre class=\"mailer-email-body prewrap sf-profiler-mailer-scrollable\">
                                                {%- if message.htmlCharset() %}
                                                    {{- htmlBody|convert_encoding(\x27UTF-8\x27, message.htmlCharset()) }}
                                                {%- else %}
                                                    {{- htmlBody }}
                                                {%- endif -%}
                                            </pre>
                                        {% else %}
                                            <div class=\"mailer-empty-email-body\">
                                                <p>The HTML body is empty.</p>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% else %}
                                {% set body = message.body ? message.body.toString() : null %}
                                <div class=\"tab {{ not body ? \x27disabled\x27 }} {{ body ? \x27active\x27 }}\">
                                    <h3 class=\"tab-title\">Content</h3>
                                    <div class=\"tab-content\">
                                        {% if body %}
                                            <pre class=\"mailer-email-body prewrap sf-profiler-mailer-scrollable\">
                                                {{- body }}
                                            </pre>
                                        {% else %}
                                            <div class=\"mailer-empty-email-body\">
                                                <p>The body is empty.</p>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">MIME parts</h3>
                    <div class=\"tab-content\">
                        <pre class=\"prewrap sf-profiler-mailer-scrollable\" style=\"margin-left: 5px\">{{ message.body().asDebugString() }}</pre>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">Raw Message</h3>
                    <div class=\"tab-content\">
                        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,{{ collector.base64Encode(message.toString()) }}\" download=\"email.eml\">
                            {{ source(\x27@WebProfiler/Icon/download.svg\x27) }}
                            Download as EML file
                        </a>

                        <pre class=\"prewrap sf-profiler-mailer-scrollable\" style=\"margin-left: 5px\">{{ message.toString() }}</pre>
                    </div>
                </div>
            </div>
        {% endif %}
    {% endmacro %}

    {% macro render_file_size_humanized(bytes) %}
        {%- if bytes < 1000 -%}
            {{- bytes ~ \x27 bytes\x27 -}}
        {%- elseif bytes < 1000 ** 2 -%}
            {{- (bytes / 1000)|number_format(2) ~ \x27 kB\x27 -}}
        {%- else -%}
            {{- (bytes / 1000 ** 2)|number_format(2) ~ \x27 MB\x27 -}}
        {%- endif -%}
    {% endmacro %}
{% endblock %}
", "@WebProfiler/Collector/mailer.html.twig", "/www/symfony/vendor/symfony/web-profiler-bundle/Resources/views/Collector/mailer.html.twig");
    }
}
