<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c4dab7db323d7bba21d463809f67e6833d6e8bc900b0bafc7b78c5555ff50e75 extends Twig_Template
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
        $__internal_22fc2820af7f8faeaa5074cb95bb687ab4896a7cfbb2c35c16cd134e6a627d04 = $this->env->getExtension("native_profiler");
        $__internal_22fc2820af7f8faeaa5074cb95bb687ab4896a7cfbb2c35c16cd134e6a627d04->enter($__internal_22fc2820af7f8faeaa5074cb95bb687ab4896a7cfbb2c35c16cd134e6a627d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_22fc2820af7f8faeaa5074cb95bb687ab4896a7cfbb2c35c16cd134e6a627d04->leave($__internal_22fc2820af7f8faeaa5074cb95bb687ab4896a7cfbb2c35c16cd134e6a627d04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
