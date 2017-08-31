<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7818df80f2ac9c4cdd09363e5004f1cf133e8ce034c53028a1b4ed1e7b58e459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f14b7b22e74e3fb2e8775f85c37903bf2432873748ac66dee032446c68914e1 = $this->env->getExtension("native_profiler");
        $__internal_0f14b7b22e74e3fb2e8775f85c37903bf2432873748ac66dee032446c68914e1->enter($__internal_0f14b7b22e74e3fb2e8775f85c37903bf2432873748ac66dee032446c68914e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0f14b7b22e74e3fb2e8775f85c37903bf2432873748ac66dee032446c68914e1->leave($__internal_0f14b7b22e74e3fb2e8775f85c37903bf2432873748ac66dee032446c68914e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
