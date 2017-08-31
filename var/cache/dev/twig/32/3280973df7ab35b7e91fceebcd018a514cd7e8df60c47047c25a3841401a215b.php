<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b768161af55626deea913b62c323ce7b50186fe688eeff53766eb577a7655f7d extends Twig_Template
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
        $__internal_19249b231b6ac6f8dd50b739dd484d2d33ab2e7ea888f7e8b0831761f0cdba86 = $this->env->getExtension("native_profiler");
        $__internal_19249b231b6ac6f8dd50b739dd484d2d33ab2e7ea888f7e8b0831761f0cdba86->enter($__internal_19249b231b6ac6f8dd50b739dd484d2d33ab2e7ea888f7e8b0831761f0cdba86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_19249b231b6ac6f8dd50b739dd484d2d33ab2e7ea888f7e8b0831761f0cdba86->leave($__internal_19249b231b6ac6f8dd50b739dd484d2d33ab2e7ea888f7e8b0831761f0cdba86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
