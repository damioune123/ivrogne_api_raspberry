<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_8058207a9e99b63fe7f63aa7e61f84ee86576445147537c645ba7820e2cd82da extends Twig_Template
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
        $__internal_073a704233a61f5863bac70b9e833c719021548fa8a102ac27be18b6d195adb1 = $this->env->getExtension("native_profiler");
        $__internal_073a704233a61f5863bac70b9e833c719021548fa8a102ac27be18b6d195adb1->enter($__internal_073a704233a61f5863bac70b9e833c719021548fa8a102ac27be18b6d195adb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_073a704233a61f5863bac70b9e833c719021548fa8a102ac27be18b6d195adb1->leave($__internal_073a704233a61f5863bac70b9e833c719021548fa8a102ac27be18b6d195adb1_prof);

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
